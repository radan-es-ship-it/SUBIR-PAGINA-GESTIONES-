@extends('layouts.app')

@section('title', 'Inicio - GESTIONES LABORALES S.R.L.')
@section('description', 'Gestiones Laborales S.R.L. - Soluciones profesionales en gestión laboral y recursos humanos para empresas')

@section('content')
<!-- Hero Section -->
<section class="relative text-white overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1920&q=80" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                    Soluciones Integrales en
                    <span style="color: #4C9FA7;">Gestión Laboral</span>
                </h1>
                <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                    Transformamos la gestión de recursos humanos de tu empresa con servicios especializados
                    y soluciones a medida que impulsan el crecimiento de tu negocio.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('servicios.index') }}" class="btn-primary-lg">
                        Nuestros Servicios
                    </a>
                    <a href="{{ route('contacto.index') }}" class="btn-secondary-lg">
                        Contactar
                    </a>
                </div>
            </div>

            <div class="relative" data-aos="fade-left">
                <div class="relative z-10">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=600" alt="Equipo profesional" class="rounded-2xl shadow-2xl">
                </div>
                <div class="absolute -bottom-6 -right-6 w-72 h-72 rounded-full blur-3xl" style="background-color: rgba(76, 159, 167, 0.2);"></div>
                <div class="absolute -top-6 -left-6 w-72 h-72 rounded-full blur-3xl" style="background-color: rgba(28, 106, 176, 0.2);"></div>
            </div>
        </div>
    </div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#f9fafb"/>
        </svg>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-4" style="color: #1F1E3A;">¿Por qué elegirnos?</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Somos tu socio estratégico en gestión laboral, comprometidos con la excelencia y el éxito de tu empresa.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card-hover" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white p-8 rounded-xl shadow-lg h-full">
                    <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 shadow-lg" style="background: linear-gradient(to bottom right, #1C6AB0, #4C9FA7);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4" style="color: #1F1E3A;">Experiencia Comprobada</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Años de trayectoria respaldando empresas de diversos sectores con soluciones efectivas y personalizadas.
                    </p>
                </div>
            </div>

            <div class="card-hover" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white p-8 rounded-xl shadow-lg h-full">
                    <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 shadow-lg" style="background: linear-gradient(to bottom right, #1C6AB0, #4C9FA7);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4" style="color: #1F1E3A;">Rapidez y Eficiencia</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Optimizamos procesos para brindarte respuestas ágiles sin comprometer la calidad del servicio.
                    </p>
                </div>
            </div>

            <div class="card-hover" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white p-8 rounded-xl shadow-lg h-full">
                    <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 shadow-lg" style="background: linear-gradient(to bottom right, #1C6AB0, #4C9FA7);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4" style="color: #1F1E3A;">Atención Personalizada</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Cada empresa es única. Adaptamos nuestros servicios a tus necesidades específicas y objetivos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
@if($servicios->count() > 0)
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-4" style="color: #0e0c57;">Nuestros Servicios</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Soluciones integrales diseñadas para potenciar el desarrollo de tu empresa.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($servicios as $index => $servicio)
            <div class="card-hover group" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="p-8 rounded-xl shadow-lg h-full flex flex-col transition-all duration-300 group-hover:shadow-2xl" style="background-color: #063157;">
                    @if($servicio->icono)
                    <div class="text-5xl mb-4 transition-transform duration-300 group-hover:scale-110">{{ $servicio->icono }}</div>
                    @else
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4 transition-all duration-300 group-hover:shadow-lg" style="background: linear-gradient(to bottom right, #042746, #03484e);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    @endif

                    <h3 class="text-xl font-bold mb-3 transition-colors duration-300 text-white">{{ $servicio->titulo }}</h3>
                    <p class="mb-6 flex-grow transition-colors duration-300 text-gray-200">{{ $servicio->descripcion }}</p>
                    <a href="{{ route('servicios.show', $servicio->id) }}" class="font-semibold transition-all duration-300 inline-flex items-center group-hover:gap-3 text-white hover:text-gray-200">
                        Ver más
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('servicios.index') }}" class="btn-primary-lg">
                Ver Todos los Servicios
            </a>
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto rounded-2xl overflow-hidden shadow-2xl relative" data-aos="zoom-in">
            <div class="absolute inset-0">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&q=80" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/50"></div>
            </div>
            <div class="relative z-10 p-12 text-center text-white">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    ¿Tu empresa necesita servicios de gestión laboral?
                </h2>
                <p class="text-lg text-gray-100 mb-8 leading-relaxed">
                    Únete a las empresas que ya confían en nosotros y descubre cómo podemos optimizar la gestión laboral de tu organización.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contacto.index') }}" class="btn-white-lg bg-white text-blue-900 hover:bg-gray-100">
                        Solicitar Información
                    </a>
                    <a href="{{ route('servicios.index') }}" class="bg-white/20 hover:bg-white/30 text-white px-8 py-4 rounded-lg font-bold text-lg border-2 border-white transition-all duration-300">
                        Ver Servicios
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="text-5xl font-bold mb-2" style="color: #1C6AB0;">3+</div>
                <div class="text-gray-600 font-semibold">Años de Experiencia</div>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="text-5xl font-bold mb-2" style="color: #1C6AB0;">10+</div>
                <div class="text-gray-600 font-semibold">Empresas Atendidas</div>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="text-5xl font-bold mb-2" style="color: #1C6AB0;">98%</div>
                <div class="text-gray-600 font-semibold">Satisfacción del Cliente</div>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="text-5xl font-bold mb-2" style="color: #1C6AB0;">24/7</div>
                <div class="text-gray-600 font-semibold">Soporte Disponible</div>
            </div>
        </div>
    </div>
</section>
@endsection
