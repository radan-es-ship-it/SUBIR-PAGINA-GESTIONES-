@extends('layouts.app')

@section('title', 'Seguimiento de Caso Online - GESTIONES LABORALES S.R.L.')
@section('description', 'Consulta el estado de tu caso o trámite en línea de forma rápida y segura')

@section('content')
<!-- Hero Section -->
<section class="relative text-white py-24">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=1920&q=80" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Seguimiento de Caso</h1>
            <p class="text-xl text-gray-300 leading-relaxed">
                Consulta el estado de tu caso o trámite de forma rápida y segura
            </p>
        </div>
    </div>
</section>

<!-- Tracking Form Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-12" data-aos="fade-up">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                    <!-- Left Column - Video -->
                    <div class="order-2 lg:order-1">
                        <h2 class="text-3xl font-bold mb-4" style="color: #1F1E3A;">¿Cómo funciona?</h2>
                        <p class="text-gray-600 mb-6">Mira este video tutorial para conocer nuestro sistema de seguimiento</p>

                        <div class="relative rounded-xl overflow-hidden shadow-2xl bg-gray-900">
                                <iframe width="862" height="485" src="https://www.youtube.com/embed/a_zjM7nQqeY" title="Seguimiento de caso para los clientes" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="w-full aspect-video"></iframe>
                        </div>
                    </div>

                    <!-- Right Column - Information -->
                    <div class="order-1 lg:order-2">
                        <div class="flex items-start mb-3">
                            <h2 class="text-2xl lg:text-3xl font-bold" style="color: #1F1E3A;">Seguimiento de Casos en Tiempo Real</h2>
                        </div>

                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 text-base leading-relaxed mb-3">
                                En <strong>Gestiones Laborales S.R.L.</strong> contamos con un sistema digital exclusivo que permite a nuestros clientes realizar el seguimiento de su caso en tiempo real, de manera segura y desde cualquier lugar.
                            </p>

                            <div class="space-y-1.5 mb-3">
                                <div class="flex items-start">
                                    <span class="text-green-600 font-bold text-xl mr-2">✔</span>
                                    <p class="text-gray-700 text-base pt-0">Consultar el estado actual de su proceso</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="text-green-600 font-bold text-xl mr-2">✔</span>
                                    <p class="text-gray-700 text-base pt-0">Ver avances y actualizaciones importantes</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="text-green-600 font-bold text-xl mr-2">✔</span>
                                    <p class="text-gray-700 text-base pt-0">Revisar fechas, documentos y movimientos</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="text-green-600 font-bold text-xl mr-2">✔</span>
                                    <p class="text-gray-700 text-base pt-0">Mantener comunicación organizada y transparente</p>
                                </div>
                            </div>

                            <p class="text-gray-700 text-base leading-relaxed mb-0">
                                Nuestro sistema garantiza <strong>transparencia</strong>, <strong>eficiencia</strong> y <strong>confianza</strong>, brindando acceso inmediato a la información sin necesidad de llamadas o visitas presenciales.
                            </p>

                            <div class="bg-blue-50 border-l-4 border-blue-600 p-4 rounded-lg mt-3">
                                <p class="text-lg font-semibold italic mb-0" style="color: #1F1E3A;">
                                    Porque creemos que un cliente informado es un cliente tranquilo.
                                </p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="mt-8 bg-white rounded-xl shadow-lg p-6" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-bold mb-4" style="color: #1F1E3A;">¿Deseas más información?</h3>
                <p class="text-gray-600 mb-4">
                    Para solicitar acceso a nuestro sistema de seguimiento o realizar consultas, contáctanos:
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="text-gray-700">68804955</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-gray-700">contacto@gestioneslaborales.com.bo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
