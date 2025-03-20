<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script>
    tailwind.config = {
        theme: {
        extend: {
            fontFamily: {
            'manrope': ['"Manrope"', 'sans-serif'],
            'inter': ['"Inter"', 'sans-serif']
            }
        }
        }
    }
    </script>
    @livewireStyles
</head>
<body class="bg-[#ffffff] bg-[url(/assets/image/Hero-Image-Container.png)] bg-contain">
    @livewire('navbar')
    @livewire('beranda')
    @livewire('tentang')
    @livewireStyles
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const targetBeranda = document.querySelector('#beranda');
        const elementBeranda = document.getElementById('nav-beranda');
        const targetTentang = document.querySelector('#tentang');
        const elementTentang = document.getElementById('nav-tentang');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                const element = entry.target === targetBeranda ? elementBeranda : elementTentang;
                
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        element.classList.add('text-[#111111]', 'font-bold');
                    }, 10); 
                } else {
                    setTimeout(() => {
                        element.classList.remove('text-[#111111]', 'font-bold');
                    }, 10);
                }
            });
        }, {
            threshold: 0.3
        });

        if (targetBeranda) observer.observe(targetBeranda);
        if (targetTentang) observer.observe(targetTentang);
    });
</script>
</html>