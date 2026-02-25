@extends('layouts.app')

@section('content')

<!-- HERO -->
<section id="inicio"
    class="h-screen flex flex-col justify-center items-center text-center bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 px-6">

    <h2 class="text-5xl font-extrabold mb-6">
        <span id="typing"></span>
    </h2>

    <p class="text-lg mb-8" data-aos="fade-up" data-aos-delay="200">
        Seguridad jurídica y asesoría empresarial en Bolivia
    </p>

    <button
        class="bg-white text-black px-6 py-3 rounded-full hover:scale-110 transition duration-300 shadow-lg">
        Contáctanos
    </button>

</section>

<!-- SERVICIOS -->
<section id="servicios" class="py-20 bg-gray-900">

    <div class="max-w-6xl mx-auto text-center mb-16 px-6">
        <h3 class="text-4xl font-bold" data-aos="fade-up">
            Nuestros Servicios Especializados
        </h3>
        <p class="text-gray-400 mt-4">
            Soluciones legales y laborales adaptadas a las necesidades empresariales.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto px-6">

        <!-- 1 -->
        <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:scale-105 transition duration-300" data-aos="fade-up">
            <p>
                Diseño de procedimiento de contratación.
            </p>
        </div>

        <!-- 2 -->
        <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:scale-105 transition duration-300" data-aos="fade-up" data-aos-delay="100">
            <p>
                Diseño de sistemas de trabajo y atención al cliente.
            </p>
        </div>

        <!-- 3 -->
        <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:scale-105 transition duration-300" data-aos="fade-up" data-aos-delay="200">
            <p>
                Defensa legal en denuncias y procesos en área laboral.
            </p>
        </div>

        <!-- 4 -->
        <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:scale-105 transition duration-300" data-aos="fade-up">
            <p>
                Asesoramiento y elaboración de informes sobre aplicación de normas legales laborales.
            </p>
        </div>

        <!-- 5 -->
        <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:scale-105 transition duration-300" data-aos="fade-up" data-aos-delay="100">
            <p>
                Mitigación y orientación sobre alcances y efectos de denuncias por infracción de leyes sociales.
            </p>
        </div>

        <!-- 6 -->
        <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:scale-105 transition duration-300" data-aos="fade-up" data-aos-delay="200">
            <p>
                Mitigación y orientación sobre disposiciones de Seguridad e Higiene Ocupacional.
            </p>
        </div>

        <!-- 7 -->
        <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:scale-105 transition duration-300" data-aos="fade-up">
            <p>
                Asesoramiento y procedimiento para la conformación de Comités Mixtos en despidos y controversias disciplinarias.
            </p>
        </div>

        <!-- 8 -->
        <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:scale-105 transition duration-300" data-aos="fade-up" data-aos-delay="100">
            <p>
                Informe legal sobre modalidades de remuneración salarial conforme a normativas vigentes.
            </p>
        </div>

    </div>

</section>


<!-- ESTADÍSTICAS -->
<section id="estadisticas" class="py-20 bg-gray-800 text-center">

    <h3 class="text-4xl font-bold mb-12">
        Nuestra Experiencia
    </h3>

    <div class="grid md:grid-cols-3 gap-10 max-w-6xl mx-auto">

        <div>
            <h4 class="text-5xl font-extrabold counter" data-target="500">0</h4>
            <p class="text-gray-400 mt-3">Casos Resueltos</p>
        </div>

        <div>
            <h4 class="text-5xl font-extrabold counter" data-target="120">0</h4>
            <p class="text-gray-400 mt-3">Empresas Asesoradas</p>
        </div>

        <div>
            <h4 class="text-5xl font-extrabold counter" data-target="15">0</h4>
            <p class="text-gray-400 mt-3">Años de Experiencia</p>
        </div>

    </div>

</section>

<!-- PARALLAX -->
<section class="h-[500px] bg-fixed bg-center bg-cover flex items-center justify-center text-center"
    style="background-image: url('https://images.unsplash.com/photo-1521791136064-7986c2920216');">

    <h2 class="text-4xl font-bold bg-black/60 p-6 rounded-xl">
        Comprometidos con la Excelencia Legal
    </h2>

</section>

<!-- FOOTER -->
<footer id="contacto" class="bg-gray-950 py-10 text-center">

    <h4 class="text-2xl font-bold mb-4">GESTIONES LABORALES</h4>

    <p class="text-gray-400">
        contacto@gestioneslaborales.com.bo
    </p>

    <p class="text-gray-500 mt-4 text-sm">
        © 2026 Todos los derechos reservados
    </p>

</footer>

<!-- CONTADORES -->
<script>
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
        const updateCounter = () => {
            const target = +counter.getAttribute('data-target');
            const current = +counter.innerText;
            const increment = target / 100;

            if (current < target) {
                counter.innerText = Math.ceil(current + increment);
                setTimeout(updateCounter, 20);
            } else {
                counter.innerText = target;
            }
        };
        updateCounter();
    });
</script>

<!-- TYPING EFFECT -->
<script>
    const text = "Soluciones Laborales Profesionales";
    let index = 0;

    function typeEffect() {
        if (index < text.length) {
            document.getElementById("typing").innerHTML += text.charAt(index);
            index++;
            setTimeout(typeEffect, 50);
        }
    }

    window.addEventListener("load", typeEffect);
</script>

@endsection
