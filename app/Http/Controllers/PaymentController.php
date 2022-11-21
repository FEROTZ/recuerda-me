<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Exception\PayPalConnectionException;
// use Paypal\Auth\OAuthTokenCredential;
// use Paypal\Rest\ApiContext;

class PaymentController extends Controller
{
    private $apiContext;
    public function __construct()
    {
        //Se configura el client id y la contraseña para acceder a la API de PayPal
        $payPalConfig = Config::get ( key: 'paypal' );

        $this->apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret']
            )
        );
    }

    public function payWithPayPal()
    {
        //Se crea el objeto Payer
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        //Se crea el objeto Amount que almacena el precio del producto y la moneda
        $amount = new Amount();
        $amount->setTotal('1200.00');
        $amount->setCurrency('MXN');

        //Se crea el objeto Transaction que almacena el monto y la descripción del producto
        //TODO: Sacar el monto y descripción del producto de la base de datos
        $transaction = new Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('Contrata el paquete _______ de Recuerda.me');

        //Se crea el objeto RedirectUrls que almacena la URL de aprobación y cancelación de compra
        //? Se va a redirigir a la misma página de aprobación y cancelación desde PayPal?
        $callbackUrl = url('/paypal/status');
        $redirectUrls = new RedirectUrls();
        $redirectUrls   ->setReturnUrl($callbackUrl)
                        ->setCancelUrl($callbackUrl);

        //Se crea el objeto Payment que almacena el Payer, la URL de aprobación y cancelación y la transacción
        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        //Se ingresa en un Try catch para capturar los errores
        try {
            $payment->create($this->apiContext);
            //Se redirecciona a una URL creada por PayPal para realizar la compra
            return redirect()->away($payment->getApprovalLink());
        }
        catch (PayPalConnectionException $ex) {
            //Esto imprimirá la información detallada de la excepción.
            //* Lo ideal es hacer un redirect a una página de error
            //que informe al usuario del problema
            //!DE MOMENTOS SIRVE PARA EL DESARROLLO
            echo $ex->getData();
        }
    }
    public function payPalStatus(Request $request){
        $paymentId = $request->input('paymentId'); //Obtenemos el ID de la transacción
        $payerId = $request->input('PayerID'); //Obtenemos el ID del comprador
        $token = $request->input('token'); //Obtenemos el token de la transacción

        if (empty($paymentId) || empty($payerId) || empty($token)) {
            //* Si no se reciben los datos necesarios, redirigimos al usuario a la página de servicios
            $status = "La orden de compra fue cancelada";
            return redirect()->route('servicios')->with(compact('status'));
        }

        //Obtener objeto payment a traves del ID de compra, pasándole las credenciales de PayPal
        $payment = Payment::get($paymentId, $this->apiContext);

        //Se crea el objeto PaymentExecution que almacena el ID del comprador para proceder al pago en PayPal
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));

        //*Ejecutar el payment
        $result = $payment->execute($execution, $this->apiContext);

        if($result->getState() === 'approved'){
            //TODO: Agregar en la tabla de pedidos, la compra realizada
            $status = "El pago se ha realizado correctamente";
            //TODO: #16 averiguar la forma en que redireccione a la ruta indicada según el servicio que compró
            return redirect()->route('servicios');//->with(compact('status'));
        }

        $status = "El pago no se ha realizado correctamente";
        return redirect()->route('servicios');//->with(compact('status'));
    }
}