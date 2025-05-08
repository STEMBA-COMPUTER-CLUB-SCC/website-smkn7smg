<section id="berita" class="pt-28 border border-transparent">
  <div class='mb-10 2xl:mb-16'>
    <div
      class="sectionBerita opacity-0 flex bg-[#F7F7F7] text-[16px] cs5:text-[12px] cs5:mb-8 m-0 mb-10 ml-auto mr-auto font-manrope border border-[#ebebeb] w-max rounded-[80px] items-center pl-1.5 cs5:pl-1 pt-1.5 cs5:pt-1 pb-1.5 cs5:pb-1 pr-4 cs5:pr-3 gap-x-2">
      <p class="bg-[#111111] text-[#FFFFFF] font-semibold border border-[#ebebeb] pt-1 pb-1 pl-3 pr-3 rounded-[80px]">
        BERITA</p>
      <p class="text-[#525252] font-normal">INFORMASI TERBARU</p>
    </div>
    <p
      class='judulBerita opacity-0 font-manrope font-semibold text-[40px] cs5:text-[32px] cs5:w-[298px] cs5:text-center text-center mb-4 cs5:ml-auto cs5:mr-auto 2xl:text-[44px] cs6:text-[36px]'>
      INFORMASI TERKAIT SEKOLAH</p>
    <p
      class='deskripsiBerita opacity-0 font-manrope font-normal text-[20px] cs5:text-[14px] cs5:w-[243px] text-center text-[#525252] max-w-[531px] ml-auto mr-auto 2xl:text-[24px] 2xl:max-w-[567px] cs6:text-[20px]'>
      Lihat dan baca mengenai seluruh informasi terbaru di SMKN 7 Semarang</p>
  </div>
  <div
    class='font-manrope flex cs5:flex-col gap-x-7 cs5:gap-y-10 w-max ml-auto mr-auto mb-10 2xl:gap-x-[1.25vw] cs7:w-[800px] cs7:gap-y-10 flex-wrap cs8:w-[745px] cs7:w-[410px] cs9:w-[410px]'>
    @foreach ($blog as $berita)
    <div
      class='cardBerita1 opacity-0 transition-all duration-300 group/berita1 w-[408px] cs5:w-[327px] h-[448px] cs5:h-[420px] rounded-[24px] p-5 bg-[#FFFFFF] border border-[#EBEBEB] hover:border-[#1152D9] hover:border-opacity-30 hover:shadow-[2px_2px_14px_rgba(17,82,217,0.15)] 2xl:w-[546px] cs3:w-[455px] cs6:w-[357px]'>
      <div style="background-image: url({{ asset('storage/' . $berita->image[0]) ?? null }})"
        class='h-[240px] w-[368px] cs5:w-[295px] cs5:h-[220px] rounded-[16px] border bg-cover bg-center relative mb-5 cs5:mb-4 2xl:w-[504px] cs3:w-[426px] cs6:w-[317px]'>
        <p
          class='absolute right-3 top-3 uppercase py-2 px-5 font-manrope text-[16px] bg-[#F7F7F7] border border-[#EBEBEB] w-max rounded-full font-semibold group-hover/berita1:bg-[#FFFFFF] group-hover/berita1:text-[#111111]'>
          {{ is_array($berita->tags) ? implode(', ', $berita->tags) : $berita->tags }}</p>
      </div>
      <p class='font-manrope text-[16px] cs5:text-[12px] text-[#525252] font-normal mb-3'>{{
        \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, j F Y') }}</p>
      <p
        class='font-manrope text-[20px] cs5:text-[18px] font-semibold max-w-[368px] cs5:max-w-[295px] m-0 break-word uppercase line-clamp-2 mb-3 cs5:mb-2 cs6:w-[317px]'>
        {{ $berita->title }}</p>
      <p
        class='font-manrope text-[14px] cs5:text-[16px] text-[#525252] font-normal w-[368px] cs5:w-[295px] m-0 break-word line-clamp-2 cs6:w-[317px]'>
        {{ \Illuminate\Support\Str::limit(strip_tags($berita->content), 120) }}</p>
    </div>
    @endforeach
  </div>
  <a href="/berita"
    class='bg-[#1152D9] w-max font-manrope px-8 py-2.5 border rounded-[42px] text-[16px] text-[#ffffff] font-semibold ml-auto mr-auto block mb-20 max-sm:mb-10'>Selengkapnya</a>
  @vite('resources/js/animate/landing/berita.js')
</section>