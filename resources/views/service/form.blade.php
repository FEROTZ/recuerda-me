

<div class="mt-4">
    <x-jet-label for="Paquete" value="{{ __('Paquete') }}" />
    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$servicio->name}}" required autofocus />
</div>
<br>
<div class="mt-4">
    <x-jet-label for="Precio" value="{{ __('Precio $') }}" />
    <x-jet-input id="price" class="block mt-1 w-full" type="number" name="price"  required autofocus />
</div>
<div class="mt-4">
    <x-jet-label for="num_images" value="{{ __('Numero de imagenes') }}" />
    <x-jet-input id="num_images" class="block mt-1 w-full" type="number" name="num_images"  required autofocus />
</div>
<div class="mt-4">
    <x-jet-label for="num_videos" value="{{ __('Numero de videos') }}" />
    <x-jet-input id="num_videos" class="block mt-1 w-full" type="number" name="num_videos"  required autofocus />
                </div>
                <div class=" mt-4">
        <x-jet-label for="num_recipients" value="{{ __('Numero de destinatarios') }}" />
        <x-jet-input id="num_recipients" class="block mt-1 w-full" type="number" name="num_recipients"  required autofocus />
                </div>
                <br>    
                <div class=" flex items-center mt-4">
            <x-jet-button class="ml-4" type="sumbit" value="Guardar cambios">
                {{ __('Enviar') }}
            </x-jet-button>
</div>
</div>     </div>
</div>
       

