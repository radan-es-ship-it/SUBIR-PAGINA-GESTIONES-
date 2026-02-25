@extends('layouts.app')

@section('title', 'Contacto - GESTIONES LABORALES S.R.L.')
@section('description', 'Contáctanos y descubre cómo podemos ayudarte con las gestiones laborales de tu empresa')

@section('content')
<!-- Hero Section -->
<section class="relative text-white py-24">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1920&q=80" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Contáctanos</h1>
            <p class="text-xl text-gray-300 leading-relaxed">
                Estamos aquí para ayudarte. Completa el formulario y nos pondremos en contacto contigo a la brevedad.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- Contact Form -->
            <div data-aos="fade-right">
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h2 class="text-3xl font-bold mb-6" style="color: #1F1E3A;">Envíanos un Mensaje</h2>

                    @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border-l-4 border-green-500 text-green-700 rounded">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                    @endif

                    <form action="{{ route('contacto.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre *</label>
                                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 @error('nombre') border-red-500 @enderror">
                                @error('nombre')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-gray-700 font-semibold mb-2">Email *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 @error('email') border-red-500 @enderror">
                                @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="telefono" class="block text-gray-700 font-semibold mb-2">Teléfono *</label>
                                <input type="tel" id="telefono" name="telefono" value="{{ old('telefono') }}" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 @error('telefono') border-red-500 @enderror">
                                @error('telefono')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="empresa" class="block text-gray-700 font-semibold mb-2">Empresa *</label>
                                <input type="text" id="empresa" name="empresa" value="{{ old('empresa') }}" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 @error('empresa') border-red-500 @enderror">
                                @error('empresa')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="asunto" class="block text-gray-700 font-semibold mb-2">Asunto *</label>
                            <input type="text" id="asunto" name="asunto" value="{{ old('asunto') }}" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 @error('asunto') border-red-500 @enderror">
                            @error('asunto')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="servicio_id" class="block text-gray-700 font-semibold mb-2">Servicio de Interés *</label>
                            <select id="servicio_id" name="servicio_id" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 @error('servicio_id') border-red-500 @enderror">
                                <option value="">-- Seleccionar un servicio --</option>
                                @forelse($servicios as $servicio)
                                    <option value="{{ $servicio->id }}" {{ old('servicio_id') == $servicio->id ? 'selected' : '' }}>
                                        {{ $servicio->titulo }}
                                    </option>
                                @empty
                                    <option value="" disabled>No hay servicios disponibles</option>
                                @endforelse
                            </select>
                            @error('servicio_id')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="mensaje" class="block text-gray-700 font-semibold mb-2">Mensaje *</label>
                            <textarea id="mensaje" name="mensaje" rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 resize-none @error('mensaje') border-red-500 @enderror">{{ old('mensaje') }}</textarea>
                            @error('mensaje')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn-primary-lg w-full" id="enviar-whatsapp">
                            Enviar por WhatsApp
                        </button>
                    </form>

                    <script>
                        document.getElementById('enviar-whatsapp').addEventListener('click', function(e) {
                            e.preventDefault();

                            const nombre = document.getElementById('nombre').value.trim();
                            const email = document.getElementById('email').value.trim();
                            const telefono = document.getElementById('telefono').value.trim();
                            const empresa = document.getElementById('empresa').value.trim();
                            const servicioSelect = document.getElementById('servicio_id');
                            const asunto = document.getElementById('asunto').value.trim();
                            const mensaje = document.getElementById('mensaje').value.trim();

                            if (!nombre) {
                                alert('Por favor completa el campo Nombre');
                                document.getElementById('nombre').focus();
                                return;
                            }

                            if (!email) {
                                alert('Por favor completa el campo Email');
                                document.getElementById('email').focus();
                                return;
                            }

                            if (!telefono) {
                                alert('Por favor completa el campo Teléfono');
                                document.getElementById('telefono').focus();
                                return;
                            }

                            if (!empresa) {
                                alert('Por favor completa el campo Empresa');
                                document.getElementById('empresa').focus();
                                return;
                            }

                            if (!servicioSelect.value) {
                                alert('Por favor selecciona un Servicio');
                                document.getElementById('servicio_id').focus();
                                return;
                            }

                            if (!asunto) {
                                alert('Por favor completa el campo Asunto');
                                document.getElementById('asunto').focus();
                                return;
                            }

                            if (!mensaje) {
                                alert('Por favor completa el campo Mensaje');
                                document.getElementById('mensaje').focus();
                                return;
                            }

                            const servicioTexto = servicioSelect.options[servicioSelect.selectedIndex].text;

                            let whatsappMessage = `NUEVA SOLICITUD DE CONTACTO\n`;
                            whatsappMessage += `━━━━━━━━━━━━━━━━━━━\n\n`;
                            whatsappMessage += `Nombre: ${nombre}\n`;
                            whatsappMessage += `Email: ${email}\n`;
                            whatsappMessage += `Teléfono: ${telefono}\n`;
                            whatsappMessage += `Empresa: ${empresa}\n`;
                            whatsappMessage += `Servicio: ${servicioTexto}\n\n`;
                            whatsappMessage += `━━━━━━━━━━━━━━━━━━━\n`;
                            whatsappMessage += `Asunto: ${asunto}\n\n`;
                            whatsappMessage += `Mensaje:\n${mensaje}`;

                            const whatsappUrl = `https://wa.me/59168804955?text=${encodeURIComponent(whatsappMessage)}`;
                            window.open(whatsappUrl, '_blank');
                        });
                    </script>
                </div>
            </div>

            <!-- Contact Info -->
            <div data-aos="fade-left">
                <div class="space-y-8">
                    <div>
                        <h2 class="text-3xl font-bold mb-6" style="color: #1F1E3A;">Información de Contacto</h2>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            Nuestro equipo está disponible para responder tus consultas y brindarte el mejor servicio.
                        </p>
                    </div>

                    <!-- Contact Cards -->
                    <div class="space-y-4">
                        <div class="bg-white rounded-xl shadow-lg p-6 flex items-start space-x-4 hover:shadow-xl transition-shadow duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold mb-1" style="color: #1F1E3A;">Dirección</h3>
                                <p class="text-gray-600">B/ La Santa Cruz, Avenida Los Cusis, Nro. S/N</p>
                                <p class="text-gray-600">Edificio Macororo 15, Piso: 5 Of. 5D</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg p-6 flex items-start space-x-4 hover:shadow-xl transition-shadow duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold mb-1" style="color: #1F1E3A;">Email</h3>
                                <p class="text-gray-600">contacto@gestioneslaborales.com.bo</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg p-6 flex items-start space-x-4 hover:shadow-xl transition-shadow duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-blue-900 mb-1">Teléfono</h3>
                                <p class="text-gray-600">68804955</p>
                            </div>
                            <div>
                                <h3 class="font-bold text-blue-900 mb-1">Horario de Atención</h3>
                                <p class="text-gray-600">Lunes a Viernes: 9:00 - 18:00</p>
                                <p class="text-gray-600">Sábados: 9:00 - 13:00</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 rounded-xl shadow-lg p-6 text-white">
                        <h3 class="font-bold text-lg mb-4">Síguenos en Redes Sociales</h3>
                        <div class="flex space-x-4">
                            <a href="https://linkedin.com/in/gestiones-laborales-s-r-l-2275363b0" target="_blank" class="w-10 h-10 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                            <a href="https://wa.me/59168804955" target="_blank" class="w-10 h-10 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
