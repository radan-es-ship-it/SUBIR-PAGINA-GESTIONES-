<nav id="navbar" class="fixed w-full z-50 transition-all duration-500 bg-transparent p-5">
    <div class="max-w-7xl mx-auto flex justify-between items-center">

        <h1 class="text-2xl font-bold">GESTIONES LABORALES</h1>

        <!-- Botón móvil -->
        <button id="menuBtn" class="md:hidden text-3xl">
            ☰
        </button>

        <!-- Menú -->
        <ul id="menu"
            class="hidden md:flex gap-6 md:items-center absolute md:static top-20 left-0 w-full md:w-auto bg-gray-950 md:bg-transparent p-5 md:p-0">
            <li><a href="#inicio" class="hover:text-blue-400">Inicio</a></li>
            <li><a href="#servicios" class="hover:text-blue-400">Servicios</a></li>
            <li><a href="#estadisticas" class="hover:text-blue-400">Estadísticas</a></li>
            <li><a href="#contacto" class="hover:text-blue-400">Contacto</a></li>
        </ul>

    </div>
</nav>

<script>
    // Cambio de fondo al hacer scroll
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('bg-gray-950', 'shadow-lg');
        } else {
            navbar.classList.remove('bg-gray-950', 'shadow-lg');
        }
    });

    // Menú móvil
    const menuBtn = document.getElementById('menuBtn');
    const menu = document.getElementById('menu');

    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
