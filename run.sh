#!/bin/bash

echo "Starting Vite Dev Server..."
npm run dev -- --host &

echo "Starting Laravel Server..."
/opt/lampp/bin/php artisan serve --host=0.0.0.0 --port=8000

wait
