@extends('layouts.app')

@section('title', 'Nuestros Clientes - GESTIONES LABORALES S.R.L.')
@section('description', 'Conoce las empresas e instituciones que confían en nuestros servicios de gestión laboral')

@section('content')
<!-- Hero Section -->
<section class="relative text-white py-24">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1920&q=80" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Nuestros Clientes</h1>
            <p class="text-xl text-gray-300 leading-relaxed">
                Empresas e instituciones que confían en nuestros servicios profesionales
            </p>
        </div>
    </div>
</section>

<!-- Intro Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-6" style="color: #1F1E3A;">Confianza y Experiencia</h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                Trabajamos con empresas de diversos sectores, brindando soluciones personalizadas que
                impulsan su crecimiento y garantizan el cumplimiento de las normativas laborales vigentes.
            </p>
        </div>

        <!-- Client Categories -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <div class="bg-white rounded-xl shadow-lg p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3" style="color: #1F1E3A;">Sector Público</h3>
                <p class="text-gray-600">
                    Instituciones gubernamentales y entidades públicas que requieren asesoramiento especializado
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3" style="color: #1F1E3A;">Empresas Privadas</h3>
                <p class="text-gray-600">
                    Pequeñas, medianas y grandes empresas de diversos rubros que confían en nuestra experiencia
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3" style="color: #1F1E3A;">ONGs e Instituciones</h3>
                <p class="text-gray-600">
                    Organizaciones sin fines de lucro y fundaciones que necesitan gestión laboral eficiente
                </p>
            </div>
        </div>

        <!-- Client Logos -->
        <div class="max-w-6xl mx-auto mb-20">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up" style="color: #1F1E3A;">Empresas que Confían en Nosotros</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('images/CLIENTES/prosalud.jpg') }}" alt="Prosalud" class="max-h-24 w-auto object-contain">
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="150">
                    <img src="{{ asset('images/CLIENTES/autocorp.png') }}" alt="Autocorp" class="max-h-24 w-auto object-contain">
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('images/CLIENTES/agronegocios.png') }}" alt="Agronegocios" class="max-h-24 w-auto object-contain">
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="250">
                    <img src="{{ asset('images/CLIENTES/riderak.jpg') }}" alt="Riderak" class="max-h-24 w-auto object-contain">
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('images/CLIENTES/25 DE MAYO.jpg') }}" alt="25 de Mayo" class="max-h-24 w-auto object-contain">
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="350">
                    <img src="{{ asset('images/CLIENTES/4 de nov.jpg') }}" alt="4 de Noviembre" class="max-h-24 w-auto object-contain">
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('images/CLIENTES/MANCILLA.jpg') }}" alt="Mancilla" class="max-h-24 w-auto object-contain">
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="450">
                    <img src="{{ asset('images/CLIENTES/elfec.jpg') }}" alt="ELFEC" class="max-h-24 w-auto object-contain">
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="500">
                    <img src="{{ asset('images/CLIENTES/Ende corani.png') }}" alt="ENDE Corani" class="max-h-24 w-auto object-contain">
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="550">
                    <img src="{{ asset('images/CLIENTES/ende guaracachi.png') }}" alt="ENDE Guaracachi" class="max-h-24 w-auto object-contain">
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="600">
                    <img src="{{ asset('images/CLIENTES/ende transmicion.jpg') }}" alt="ENDE Transmisión" class="max-h-24 w-auto object-contain">
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="650">
                    <div class="text-center text-gray-400">
                        <svg class="w-16 h-16 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        <p class="text-sm font-semibold">¡Y más!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Client Sectors -->
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up" style="color: #1F1E3A;">Sectores que Atendemos</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl mb-3">🏥</div>
                    <h4 class="font-bold" style="color: #1F1E3A;">Salud</h4>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="150">
                    <div class="text-4xl mb-3">🎓</div>
                    <h4 class="font-bold" style="color: #1F1E3A;">Educación</h4>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl mb-3">🏗️</div>
                    <h4 class="font-bold" style="color: #1F1E3A;">Construcción</h4>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="250">
                    <div class="text-4xl mb-3">🏪</div>
                    <h4 class="font-bold" style="color: #1F1E3A;">Comercio</h4>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl mb-3">🏭</div>
                    <h4 class="font-bold" style="color: #1F1E3A;">Industria</h4>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="350">
                    <div class="text-4xl mb-3">💼</div>
                    <h4 class="font-bold" style="color: #1F1E3A;">Servicios</h4>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl mb-3">🌾</div>
                    <h4 class="font-bold" style="color: #1F1E3A;">Agricultura</h4>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="450">
                    <div class="text-4xl mb-3">💻</div>
                    <h4 class="font-bold" style="color: #1F1E3A;">Tecnología</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold text-blue-900 text-center mb-12" data-aos="fade-up">¿Por qué nos eligen?</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start space-x-4 bg-gray-50 rounded-xl p-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Experiencia Comprobada</h3>
                        <p class="text-gray-600">Años de trayectoria atendiendo empresas de diversos tamaños y sectores</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 bg-gray-50 rounded-xl p-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Atención Personalizada</h3>
                        <p class="text-gray-600">Cada cliente recibe soluciones adaptadas a sus necesidades específicas</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 bg-gray-50 rounded-xl p-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Cumplimiento Garantizado</h3>
                        <p class="text-gray-600">Aseguramos el cumplimiento de todas las normativas laborales vigentes</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 bg-gray-50 rounded-xl p-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Soporte Continuo</h3>
                        <p class="text-gray-600">Acompañamiento permanente y respuesta rápida a consultas y requerimientos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
@endsection
