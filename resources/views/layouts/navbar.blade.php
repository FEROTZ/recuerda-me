<img src="{{ asset('resources/logo/Hamburguesa.svg') }}" alt="" class="hamburguer">
{{-- MENÚ ADMINISTRADORES --}}
@auth
    @if (Auth::user()->is_admin == true)
        <nav class="menu-navegacion bg-gradient-to-b from-gray-400 to-zinc-900 text-zinc-50">
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <x-jet-application-mark class="w-auto" />
                </a>
            </div>
            <a href="{{ route('profile.show') }}"
                class="hover:underline hover:underline-offset-4
            hover:text-zinc-300 font-medium">
                {{ Auth::user()->name }}
            </a>
            <a href="{{ route('home') }}" class="hover:underline hover:underline-offset-4
        hover:text-zinc-300">
                Inicio
            </a>
            @if (Auth::user()->id == 1)
                <a href="{{ route('Admin') }}" class="hover:underline hover:underline-offset-4
                hover:text-zinc-300">
                    Administradores
                </a>
            @endif
            <a href="{{ route('home') }}" class="hover:underline hover:underline-offset-4
            hover:text-zinc-300">
                Clientes
            </a>
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                    class="hover:underline hover:underline-offset-4 hover:text-zinc-300">
                    Cerrar sesión
                </a>
            </form>
        </nav>
    @endif
@endauth
{{-- TERMINA MENÚ ADMINISTRADORES --}}

{{-- MENÚ CLIENTES E INVITADOS --}}
<nav class="menu-navegacion bg-gradient-to-b from-gray-400 to-zinc-900 text-zinc-50">
    <div class="shrink-0 flex items-center">
        <a href="{{ route('dashboard') }}">
            <x-jet-application-mark class="w-auto" />
        </a>
    </div>
    @auth
        <a href="{{ route('profile.show') }}"
            class="hover:underline hover:underline-offset-4
            hover:text-zinc-300 font-medium">
            {{ Auth::user()->name }}
        </a>
    @endauth
    <a href="{{ route('home') }}" class="hover:underline hover:underline-offset-4
        hover:text-zinc-300">
        Inicio
    </a>
    <a href="{{ route('servicios') }}" class="hover:underline hover:underline-offset-4
        hover:text-zinc-300">
        Servicio
    </a>
    <a href="{{ route('nosotros') }}" class="hover:underline hover:underline-offset-4
        hover:text-zinc-300">
        ¿Quiénes somos?
    </a>
    <a href="{{ route('misión') }}" class="hover:underline hover:underline-offset-4
        hover:text-zinc-300">
        Misión y visión
    </a>
    <a href="{{ route('contacto') }}" class="hover:underline hover:underline-offset-4
        hover:text-zinc-300">
        Contacto
    </a>
    @auth
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                class="hover:underline hover:underline-offset-4 hover:text-zinc-300">
                Cerrar sesión
            </a>
        </form>
    @else
        <a href="{{ route('login') }}"
            class="hover:underline hover:underline-offset-4
                hover:text-zinc-300">
            Iniciar sesión
        </a>
        <a href="{{ route('register') }}"
            class="hover:underline hover:underline-offset-4
                hover:text-zinc-300">
            Registrar
        </a>
    @endauth
</nav>

<script>
    const hamburguer = document.querySelector('.hamburguer');
    const menu = document.querySelector('.menu-navegacion');
    const search = document.querySelector('.search');
    const perfilBtn = document.querySelector('.perfil-boton');
    const perfilIco = document.querySelector('.perfil-ico');
    const perfilDpg = document.querySelector('.perfil-desplegable');

    hamburguer.addEventListener('click', () => {
        console.log('click');
        menu.classList.toggle("spread")
    })

    window.addEventListener('click', e => {
        if (menu.classList.contains('spread') && e.target != hamburguer && e.target != perfilDpg &&
            e.target != menu && e.target != search && e.target != perfilBtn && e.target != perfilIco) {
            console.log("Aqui", e.target)
            menu.classList.toggle("spread")
        }
    })
</script>
