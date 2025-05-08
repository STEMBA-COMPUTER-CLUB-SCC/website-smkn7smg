<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita SMK Negeri 7 Semarang</title>
  @vite('resources/css/app.css')
  @vite('resources/css/scrollbar.css')
  {{--
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/scrollbar.css"> --}}
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }

    .scrollbar-hide {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>
  <script>
    tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'manrope': ['"Manrope"', 'sans-serif'],
                        'inter': ['"Inter"', 'sans-serif']
                    }
                },
                screens: {
                    'xs': '480px',
                    'sm': '640px',
                    'md': '768px',
                    'lg': '1024px',
                    'xl': '1280px',
                    '2xl': '1536px',
                    'cs1': '1820px',
                    'cs2': { 'min': '1555px', 'max': '1820px' },
                    'cs3': { 'min': '1536px', 'max': '1710px' },
                    'cs4': { 'min': '1536px', 'max': '1680px' },
                    'cs5': { 'min': '1px', 'max': '680px' },
                    'cs6': { 'min': '834px', 'max': '1320px' },
                    'cs7': { 'min': '680px', 'max': '1200px' },
                    'cs8': { 'min': '680px', 'max': '1120px' },
                    'cs9': { 'min': '680px', 'max': '840px' },
                    'cs-tentang': { 'min': '680px', 'max': '750px' },
                    'xxl': '1920px',
                },
            }
        }
  </script>
  @livewireStyles
</head>

<body class="bg-[#ffffff] bg-[url(/assets/image/Hero-Image-Container.png)] bg-contain">
  @livewire('loader')
  @livewire('navbar')
  @livewire('pageberita')
  @livewire('footer')
  @livewireStyles
</body>
@vite(['resources/js/app.js', 'resources/js/navigation.js', 'resources/js/loader.js'])
{{-- <script src="/js/loader.js"></script>
<script src="/js/navigation.js"></script>
<script src="/js/app.js"></script> --}}

</html>