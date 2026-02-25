@extends('layouts.app')

@section('title', 'Nuestros Servicios - GESTIONES LABORALES S.R.L.')
@section('description', 'Descubre todos nuestros servicios especializados en gestión laboral y recursos humanos')

@section('content')
<!-- Hero Section -->
<section class="relative text-white py-24">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1920&q=80" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Nuestros Servicios</h1>
            <p class="text-xl text-gray-300 leading-relaxed">
                Soluciones integrales y personalizadas para la gestión laboral de tu empresa
            </p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        @if($servicios->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($servicios as $index => $servicio)
            <div class="card-hover" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden h-full flex flex-col">
                    @if($servicio->imagen)
                    <div class="h-48 overflow-hidden">
                        <img src="{{ $servicio->imagen }}" alt="{{ $servicio->titulo }}" class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                    </div>
                    @else
                    <div class="h-48 flex items-center justify-center" style="background: linear-gradient(to bottom right, #5D8A8D, #A5D5D8);">
                        @if($servicio->icono)
                        <span class="text-6xl">{{ $servicio->icono }}</span>
                        @else
                        <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        @endif
                    </div>
                    @endif

                    <div class="p-6 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold mb-3" style="color: #1F1E3A;">{{ $servicio->titulo }}</h3>
                        <p class="text-gray-600 mb-6 flex-grow">{{ $servicio->descripcion }}</p>
                        <a href="{{ route('servicios.show', $servicio->id) }}" class="btn-primary w-full text-center">
                            Ver Detalles
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-12">
            <div class="text-gray-400 mb-4">
                <svg class="w-24 h-24 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-600 mb-2">No hay servicios disponibles</h3>
            <p class="text-gray-500">Estamos trabajando en agregar nuevos servicios.</p>
        </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto rounded-2xl p-12 text-white text-center relative overflow-hidden" data-aos="zoom-in">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=1920&q=80" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/50"></div>
            </div>
            <div class="relative z-10">
            <h2 class="text-4xl font-bold mb-6">¿No encuentras lo que buscas?</h2>
            <p class="text-xl text-gray-300 mb-8">
                Contáctanos y cuéntanos tus necesidades. Diseñamos soluciones a medida para tu empresa.
            </p>
            <a href="{{ route('contacto.index') }}" class="btn-white-lg">
                Contactar Ahora
            </a>
            </div>
        </div>
    </div>
</section>
@endsection
