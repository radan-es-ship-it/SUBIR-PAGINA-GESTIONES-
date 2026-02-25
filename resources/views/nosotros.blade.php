@extends('layouts.app')

@section('title', 'Sobre Nosotros - GESTIONES LABORALES S.R.L.')
@section('description', 'Conoce más sobre Gestiones Laborales S.R.L., nuestra historia, misión y valores')

@section('content')
<!-- Hero Section -->
<section class="relative text-white py-24">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1920&q=80" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Sobre Nosotros</h1>
            <p class="text-xl text-gray-300 leading-relaxed">
                Más de 3 años brindando soluciones profesionales en gestión laboral
            </p>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto mb-20">
            <div data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600" alt="Equipo de trabajo" class="rounded-2xl shadow-2xl">
            </div>
            <div data-aos="fade-left">
                <h2 class="text-4xl font-bold mb-6" style="color: #1F1E3A;">¿Quiénes Somos?</h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>
                        <strong style="color: #1F1E3A;">Gestiones Laborales S.R.L.</strong> es una empresa líder en servicios de gestión laboral y recursos humanos,
                        con más de 3 años de experiencia en el mercado.
                    </p>
                    <p>
                        Nos especializamos en brindar soluciones integrales y personalizadas que ayudan a las empresas
                        a optimizar sus procesos administrativos, cumplir con las normativas laborales vigentes y
                        potenciar el desarrollo de su capital humano.
                    </p>
                    <p>
                        Nuestro equipo de profesionales altamente calificados está comprometido con la excelencia
                        y trabaja día a día para ofrecer servicios de la más alta calidad, adaptados a las necesidades
                        específicas de cada cliente.
                    </p>
                </div>
            </div>
        </div>
    </div>
            <div class="max-w-4xl mx-auto text-center mb-2" data-aos="fade-up">
                <h2 class="text-4xl font-bold mb-4" style="color: #1F1E3A;">Nuestro Equipo</h2>
            </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl mb-0 transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/Equipo legal/abogada.png') }}" alt="Abogada" class="w-full h-[600px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/15 via-black/5 to-transparent"></div>

                </div>
            </div>

            <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl mb-0 transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/Equipo legal/abogado cesar.png') }}" alt="Abogado César" class="w-full h-[600px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/15 via-black/5 to-transparent"></div>

                </div>
            </div>
        </div>
</section>

@endsection
