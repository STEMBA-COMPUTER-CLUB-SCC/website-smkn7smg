<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurusan SIJA</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'manrope': ['"Manrope"', 'sans-serif'],
                        'inter': ['"Inter"', 'sans-serif']
                    },
                    dropShadow: {
                        'custom': '0 0 20px rgba(0, 0, 0, 0.2)',
                        'custom2': '0 0 17px rgba(0, 0, 0, 0.15)',
                        'custom3': '4px 4px 8px rgba(235, 235, 235, 0.25)',
                    }
                }
            }
        }
    </script>
    @livewireStyles
</head>
<body class="bg-[#ffffff] bg-[url(/assets/image/Hero-Image-Container.png)] max-sm:overflow-x-hidden bg-center bg-contain">
    @livewire(name: 'loader')   
    @livewire(name: 'navbar')
    @livewire('pagejurusan', ['key' => request()->segment(2)])
    @livewire(name: 'footer')
    @livewireStyles
</body>
    <script src="/js/loader.js"></script>
    <script src="/js/navigation.js"></script>
    <script src="/js/app.js"></script>
</html>