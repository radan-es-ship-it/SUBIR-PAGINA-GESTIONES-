#!/bin/bash
# Script para optimizar y ejecutar el sistema (Linux/Mac)

echo "=== Optimizacion del Sistema ==="

# 1. Limpiar cachés
echo ""
echo "1. Limpiando caches..."
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# 2. Recrear cachés optimizados
echo ""
echo "2. Recreando caches optimizados..."
php artisan config:cache
php artisan route:cache

# 3. Ejecutar migraciones
echo ""
echo "3. Ejecutando migraciones..."
php artisan migrate --force

# 4. Seed de datos (opcional)
echo ""
echo "4. Cargando datos de ejemplo..."
php artisan db:seed --class=ServicioSeeder

echo ""
echo "=== Optimizacion Completada ==="
echo "Ahora el sistema debería ser mucho más rápido."
