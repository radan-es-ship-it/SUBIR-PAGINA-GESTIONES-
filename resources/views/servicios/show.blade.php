@extends('layouts.app')

@section('title', $servicio->titulo . ' - GESTIONES LABORALES S.R.L.')
@section('description', $servicio->descripcion)

@section('content')
<!-- Hero Section -->
<section class="relative text-white py-24">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=1920&q=80" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto" data-aos="fade-up">
            <a href="{{ route('servicios.index') }}" class="inline-flex items-center text-gray-300 hover:text-white mb-6 transition-colors duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Volver a Servicios
            </a>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">{{ $servicio->titulo }}</h1>
            <p class="text-xl text-gray-300 leading-relaxed">
                {{ $servicio->descripcion }}
            </p>
        </div>
    </div>
</section>

<!-- Service Detail -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden" data-aos="fade-up">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                    <!-- Video a la izquierda -->
                    <div class="order-2 lg:order-1">
                        <h2 class="text-3xl font-bold mb-4" style="color: #1F1E3A;">¿Cómo funciona?</h2>
                        <p class="text-gray-600 mb-6">VIDEO INFORMATIVO SOBRE EL SERVICIO </p>

                        <div class="relative rounded-xl overflow-hidden shadow-2xl bg-gray-900">
                            <video
                                class="w-full aspect-video"
                                controls
                                poster="{{ asset('videos/thumbnail.jpg') }}"
                            >
                                <source src="{{ asset('videos/SERVICIO DEFENSA LEGAL.mp4') }}" type="video/mp4">
                                Tu navegador no soporta la reproducción de videos.
                                <a href="{{ asset('videos/SERVICIO DEFENSA LEGAL.mp4') }}" class="text-blue-400 underline">Descargar video</a>
                            </video>
                        </div>
                    </div>
                    <!-- Información a la derecha -->
                    <div class="order-2 p-8 lg:p-12 flex flex-col justify-center">
                    <div class="prose prose-lg max-w-none text-gray-700">
                        @if($servicio->descripcion_larga)
                            {!! nl2br(e($servicio->descripcion_larga)) !!}
                        @else
                            <p>{{ $servicio->descripcion }}</p>

                            <h2 class="text-3xl font-bold mt-8 mb-4" style="color: #1F1E3A;">¿En qué consiste este servicio?</h2>
                            <p>En Gestiones Laborales S.R.L., nos especializamos en brindarte soluciones profesionales y personalizadas que se adaptan a las necesidades específicas de tu empresa. Nuestro equipo de expertos está comprometido con la excelencia y el cumplimiento de los más altos estándares de calidad.</p>

                            <h2 class="text-3xl font-bold mt-8 mb-4" style="color: #1F1E3A;">Beneficios principales</h2>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" style="color: #1C6AB0;">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Optimización de procesos administrativos</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" style="color: #1C6AB0;">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Cumplimiento normativo garantizado</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" style="color: #1C6AB0;">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Asesoramiento personalizado y continuo</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" style="color: #1C6AB0;">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Reducción de costos operativos</span>
                                </li>
                            </ul>
                        @endif
                    </div>

                        <div class="mt-8">
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{ route('contacto.index') }}" class="btn-primary-lg flex-1 text-center">
                                    Solicitar este Servicio
                                </a>
                                <a href="{{ route('servicios.index') }}" class="btn-secondary-lg flex-1 text-center">
                                    Ver Más Servicios
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Services -->
@if($serviciosRelacionados->count() > 0)
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12" data-aos="fade-up" style="color: #1F1E3A;">Servicios Relacionados</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($serviciosRelacionados as $relacionado)
            <div class="card-hover" data-aos="fade-up">
                <div class="bg-gray-50 rounded-xl shadow-lg p-6 h-full flex flex-col">
                    @if($relacionado->icono)
                    <div class="text-4xl mb-4">{{ $relacionado->icono }}</div>
                    @endif
                    <h3 class="text-xl font-bold mb-3" style="color: #1F1E3A;">{{ $relacionado->titulo }}</h3>
                    <p class="text-gray-600 mb-6 flex-grow">{{ Str::limit($relacionado->descripcion, 100) }}</p>
                    <a href="{{ route('servicios.show', $relacionado->id) }}" class="font-semibold transition-colors duration-300 inline-flex items-center" style="color: #1C6AB0;">
                        Ver más
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
