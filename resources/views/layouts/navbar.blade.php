<img src="{{ asset('resources/logo/Hamburguesa.svg') }}" alt="" class="hamburguer">
<nav class="menu-navegacion bg-gradient-to-b from-gray-400 to-zinc-900 text-zinc-50">
    <div class="shrink-0 flex items-center">
        <a href="{{ route('dashboard') }}">
            <x-jet-application-mark class="w-auto" />
        </a>
    </div>
    <a href="{{ route('home')}}" class="hover:underline hover:underline-offset-4
        hover:text-zinc-300">
        Inicio
    </a>
    <a href="{{ route('servicios')}}" class="hover:underline hover:underline-offset-4
        hover:text-zinc-300">
        servicio
    </a>
    <a href="{{ route('nosotros')}}" class="hover:underline hover:underline-offset-4
        hover:text-zinc-300">
        ¿Quienes somos?
    </a>
    <a href="{{ route('misión')}}" class="hover:underline hover:underline-offset-4
        hover:text-zinc-300">
        Misión y vision
    </a>
    <a href="{{ route('contacto')}}" class="hover:underline hover:underline-offset-4
        hover:text-zinc-300">
        Contacto
    </a>
    <a href="{{ route('register')}}" class="hover:underline hover:underline-offset-4
        hover:text-zinc-300">
        Registrarse
    </a>
</nav>

<script>
    const hamburguer = document.querySelector('.hamburguer');
    const menu = document.querySelector('.menu-navegacion');
    const search = document.querySelector('.search');

    hamburguer.addEventListener('click', () => {
        console.log('click');
        menu.classList.toggle("spread")
    })

    window.addEventListener('click', e => {
        if (menu.classList.contains('spread') && e.target != hamburguer && e.target != menu && e.target !=
            search) {
            console.log('click')
            menu.classList.toggle("spread")
        }
    })
</script>
