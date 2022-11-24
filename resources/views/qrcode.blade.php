<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>How to Generate QR Code in Laravel 9</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head><body>    <div class="container mt-4">        <div class="card">
            <div class="card-header">
                <h2>Codigo de destinatario</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&ifkv=ARgdvAsLpONKIWvkUp7JT33iU3Ss2RPn6L_W0djh70N13IkWoIfsORapH6CjIDqPTznToEvsrrdnZA&flowName=GlifWebSignIn&flowEntry=ServiceLogin') !!}
            </div>
        </div>                 
</body>
</html>