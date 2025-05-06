@echo off
echo Starting Vite Dev Server...
start npm run dev -- --host

echo Starting Laravel Server...
start php artisan serve --host=0.0.0.0 --port=8000

pause