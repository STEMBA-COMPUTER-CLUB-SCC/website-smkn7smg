<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Prestasi</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="/css/app.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>

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

<body class="bg-[#ffffff] bg-[url(/assets/image/Hero-Image-Container.webp)] bg-contain bg-center">
  @livewire('loader')
  @livewire('navbar')
  @livewire('detailprestasi', ['id' => $id])
  @livewire('footer')
  @livewireStyles
</body>
@vite(['resources/js/app.js', 'resources/js/navigation.js', 'resources/js/loader.js'])

</html>