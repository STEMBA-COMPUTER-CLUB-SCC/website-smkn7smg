<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
  <!-- Basic Meta Tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Prestasi - SMK Negeri 7 Semarang</title>
  <meta name="description"
    content="Prestasi SMK Negeri 7 Semarang - Raih prestasi gemilang di berbagai bidang akademik dan non-akademik. Bergabunglah dengan kami untuk masa depan yang lebih baik!">
  <meta name="keywords"
    content="prestasi SMK Negeri 7 Semarang, prestasi akademik, prestasi non-akademik, siswa berprestasi, pendidikan berkualitas, prestasi siswa, penghargaan, kompetisi, lomba">
  <meta name="author" content="SMKN 7 Semarang">
  <link rel="canonical" href="https://smkn7semarang.sch.id/">

  <!-- Open Graph Meta Tags -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Prestasi - SMK Negeri 7 Semarang">
  <meta property="og:description"
    content="Prestasi SMK Negeri 7 Semarang - Raih prestasi gemilang di berbagai bidang akademik dan non-akademik. Bergabunglah dengan kami untuk masa depan yang lebih baik!">
  <meta property="og:url" content="https://smkn7semarang.sch.id/">
  <meta property="og:image" content="{{ asset('assets/image/image2.png') }}">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Prestasi - SMK Negeri 7 Semarang">
  <meta name="twitter:description"
    content="Prestasi SMK Negeri 7 Semarang - Raih prestasi gemilang di berbagai bidang akademik dan non-akademik. Bergabunglah dengan kami untuk masa depan yang lebih baik!">
  <meta name="twitter:image" content="{{ asset('assets/image/image2.png') }}">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/logo/logo_stemba.png') }}" type="image/png">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/logo/logo180.svg') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/logo/logo32.svg') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/logo/logo16.svg') }}">

  <!-- Robots Meta Tag -->
  <meta name="robots" content="index, follow">

  @vite('resources/css/app.css')

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
  @livewire('pageprestasi')
  @livewire('footer')
  @livewireStyles
</body>
@vite(['resources/js/app.js', 'resources/js/navigation.js', 'resources/js/loader.js'])

</html>