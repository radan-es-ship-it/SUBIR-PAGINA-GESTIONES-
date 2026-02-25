CARPETA DE IMÁGENES
===================

Esta carpeta está creada para almacenar todas las imágenes de tu sitio web.

CÓMO USAR:
----------
1. Coloca tus archivos de imagen en esta carpeta
2. Usa {{ asset('images/nombre-de-tu-imagen.jpg') }} en tus archivos Blade
3. Las imágenes estarán disponibles públicamente

FORMATOS RECOMENDADOS:
---------------------
- JPG/JPEG - Para fotografías y imágenes con muchos colores
- PNG - Para logotipos, iconos, imágenes con transparencia
- WebP - Formato moderno con mejor compresión
- SVG - Para iconos y gráficos vectoriales

TAMAÑOS RECOMENDADOS:
--------------------
- Imágenes de banner/hero: 1920x1080 px
- Imágenes de servicios: 800x600 px
- Thumbnails/miniaturas: 400x300 px
- Logotipos: 200-500 px de ancho

OPTIMIZACIÓN:
------------
- Comprime tus imágenes antes de subirlas
- Usa herramientas como TinyPNG, ImageOptim, o Squoosh
- Mantén el tamaño de archivo por debajo de 500KB cuando sea posible

EJEMPLOS DE USO EN BLADE:
-------------------------
<img src="{{ asset('images/logo.png') }}" alt="Logo">
<img src="{{ asset('images/servicios/imagen1.jpg') }}" alt="Servicio 1">
