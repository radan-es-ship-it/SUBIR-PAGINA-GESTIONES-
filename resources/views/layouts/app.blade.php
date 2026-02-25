<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GESTIONES LABORALES S.R.L.')</title>
    <meta name="description" content="@yield('description', 'Gestiones Laborales S.R.L. - Soluciones profesionales en gestión laboral y recursos humanos')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Loader -->
    <div id="loader" class="fixed inset-0 flex items-center justify-center z-[9999]" style="background: linear-gradient(to bottom right, #1F1E3A, #0C37A8, #1C6AB0);">
        <div class="text-center">
            <img src="{{ asset('images/CLIENTES/HD2.png') }}" alt="Gestiones Laborales" class="h-20 w-auto mx-auto mb-4 animate-pulse">
            <div class="w-16 h-16 border-4 border-white/30 border-t-white rounded-full animate-spin mx-auto"></div>
        </div>
    </div>

    <!-- Header/Navbar -->
    <header class="fixed w-full top-0 z-50 bg-white/95 backdrop-blur-sm shadow-md transition-all duration-300" id="navbar">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <img src="{{ asset('images/Logo.png') }}" alt="Gestiones Laborales S.R.L." class="h-12 w-auto transform group-hover:scale-105 transition-transform duration-300">
                    <div class="flex flex-col">
                        <span class="font-bold text-lg leading-tight" style="color: #063157;">GESTIONES</span>
                        <span class="text-gray-600 text-xs font-semibold">LABORALES S.R.L.</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Inicio</a>
                    <a href="{{ route('nosotros') }}" class="nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
                    <a href="{{ route('servicios.index') }}" class="nav-link {{ request()->routeIs('servicios.*') ? 'active' : '' }}">Servicios</a>
                    <a href="{{ route('clientes') }}" class="nav-link {{ request()->routeIs('clientes') ? 'active' : '' }}">Clientes</a>
                    <a href="{{ route('seguimiento') }}" class="nav-link {{ request()->routeIs('seguimiento') ? 'active' : '' }}">Seguimiento</a>
                    <a href="{{ route('contacto.index') }}" class="btn-primary">Contacto</a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="lg:hidden focus:outline-none" id="mobileMenuButton" style="color: #1C6AB0;">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="hidden lg:hidden mt-4 pb-4" id="mobileMenu">
                <div class="flex flex-col space-y-3">
                    <a href="{{ route('home') }}" class="nav-link-mobile {{ request()->routeIs('home') ? 'active' : '' }}">Inicio</a>
                    <a href="{{ route('nosotros') }}" class="nav-link-mobile {{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
                    <a href="{{ route('servicios.index') }}" class="nav-link-mobile {{ request()->routeIs('servicios.*') ? 'active' : '' }}">Servicios</a>
                    <a href="{{ route('clientes') }}" class="nav-link-mobile {{ request()->routeIs('clientes') ? 'active' : '' }}">Nuestros Clientes</a>
                    <a href="{{ route('seguimiento') }}" class="nav-link-mobile {{ request()->routeIs('seguimiento') ? 'active' : '' }}">Seguimiento de Caso</a>
                    <a href="{{ route('contacto.index') }}" class="btn-primary text-center">Contacto</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-white relative overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1920&q=80" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>
        <div class="container mx-auto px-4 py-12 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Sobre Nosotros -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="{{ asset('images/CLIENTES/HD2.png') }}" alt="Gestiones Laborales" class="h-10 w-auto">
                        <div class="flex flex-col">
                            <span class="font-bold text-lg leading-tight">GESTIONES LABORALES</span>
                            <span class="text-gray-300 text-xs">S.R.L.</span>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-4">
                        Somos una empresa especializada en gestiones laborales y recursos humanos,
                        brindando soluciones integrales y personalizadas para tu empresa.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://linkedin.com/in/gestiones-laborales-s-r-l-2275363b0" target="_blank" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://wa.me/59168804955" target="_blank" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Enlaces Rápidos -->
                <div>
                    <h4 class="font-bold text-lg mb-4">Enlaces Rápidos</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Inicio</a></li>
                        <li><a href="{{ route('nosotros') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Nosotros</a></li>
                        <li><a href="{{ route('servicios.index') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Servicios</a></li>
                        <li><a href="{{ route('clientes') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Nuestros Clientes</a></li>
                        <li><a href="{{ route('seguimiento') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Seguimiento de Caso</a></li>
                        <li><a href="{{ route('contacto.index') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Contacto</a></li>
                    </ul>
                </div>

                <!-- Contacto -->
                <div>
                    <h4 class="font-bold text-lg mb-4">Contacto</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-gray-300 text-sm">B/ La Santa Cruz, Avenida Los Cusis, Nro. S/N<br>Edificio Macororo 15, Piso: 5 Of. 5D</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-gray-300 text-sm">contacto@gestioneslaborales.com.bo</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-gray-300 text-sm">68804955</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 mt-8 pt-8 text-center">
                <p class="text-gray-300 text-sm">
                    &copy; {{ date('Y') }} Gestiones Laborales S.R.L. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Loader
        window.addEventListener("load", function() {
            const loader = document.getElementById("loader");
            loader.style.opacity = "0";
            loader.style.transition = "opacity 0.5s ease";
            setTimeout(() => {
                loader.style.display = "none";
            }, 500);
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>
