<section id="prestasi" class="pt-28 border border-transparent">
  <div
    class='ml-auto mr-auto mb-10 cs5:w-[298px] w-[1280px] transition-all duration-300 flex items-end justify-between 2xl:w-[1680px] 2xl:mb-16 cs3:w-[1405px] cs6:w-[1120px] cs7:w-[800px] cs8:w-[540px]'>
    <div class="cs5:mr-auto cs5:ml-auto">
      <div
        class="sectionPrestasi opacity-0 flex bg-[#F7F7F7] text-[16px] cs5:text-[12px] m-0 mb-10 cs5:mb-8 font-manrope border border-[#ebebeb] w-max rounded-[80px] items-center pl-1.5 cs5:pl-1 pt-1.5 cs5:pt-1 pb-1.5 cs5:pb-1 pr-4 cs5:pr-3 gap-x-2 cs5:ml-auto cs5:mr-auto">
        <p class="bg-[#111111] text-[#FFFFFF] font-semibold border border-[#ebebeb] pt-1 pb-1 pl-3 pr-3 rounded-[80px]">
          PRESTASI</p>
        <p class="text-[#525252] font-normal">INFORMASI KEJUARAAN</p>
      </div>
      <p
        class='judulPrestasi opacity-0 font-manrope font-semibold text-[40px] cs5:text-[32px] cs5:text-center text-left mb-4 cs5:w-[298px] 2xl:text-[44px] cs6:text-[36px]'>
        INFORMASI PRESTASI</p>
      <p
        class='deskripsiPrestasi opacity-0 font-manrope font-normal text-[20px] cs5:text-[14px] cs5:text-center cs5:ml-auto cs5:mr-auto text-left text-[#525252] cs5:max-w-[243px] max-w-[531px] 2xl:text-[24px] 2xl:max-w-[674px] cs6:text-[20px]'>
        Lihat dan baca mengenai seluruh informasi kejuaraan yang diraih siswa dan siswi SMKN 7 Semarang</p>
    </div>
    <div class="cs5:hidden cs8:hidden">
      <a href="/prestasi"
        class='bg-[#1152D9] transition-all duration-300 hover:bg-[#007FFF] w-max font-manrope px-8 py-2.5 border rounded-[42px] text-[16px] text-[#ffffff] font-semibold ml-auto mr-auto block'>Selengkapnya</a>
    </div>
  </div>
  <div
    class='font-manrope flex cs5:flex-col cs5:gap-y-10 gap-x-7 w-max ml-auto mr-auto mb-20 cs5:mb-10 2xl:gap-x-[1.25vw] flex-wrap cs7:w-[800px] cs7:gap-y-10 cs8:w-[745px] cs7:w-[410px] cs9:w-[410px] cs8:mb-10'>
    @foreach ($blog as $prestasi)
    <div
      class='cardPrestasi1 transition-all duration-300 group/berita1 cs5:w-[327px] w-[410px] h-[505px] cs5:h-[486px] rounded-[24px] p-5 bg-[#FFFFFF] border border-[#EBEBEB] hover:border-[#1152D9] hover:border-opacity-30 hover:shadow-[2px_2px_14px_rgba(17,82,217,0.15)] 2xl:w-[544px] 2xl:p-4 2xl:h-[492px] cs3:w-[455px] cs6:w-[357px]'>
      <div style="background-image: url({{ asset('storage/' . $prestasi->image[0]) ?? null }})"
        class='h-[240px] w-[368px] cs5:w-[295px] cs5:h-[220px] rounded-[16px] border bg-cover bg-center relative mb-5 cs5:mb-4 2xl:w-[512px] 2xl:h-[220px] cs3:w-[426px] cs6:w-[317px]'>
      </div>
      <p class='font-manrope text-[16px] cs5:text-[12px] text-[#525252] font-normal mb-3 2xl:text-[14px]'>{{
        \Carbon\Carbon::parse($prestasi->created_at)->translatedFormat('l, j F Y') }}</p>
      <p
        class='font-manrope text-[20px] cs5:text-[18px] font-semibold cs5:max-w-[295px] max-w-[368px] m-0 break-word uppercase line-clamp-2 mb-3 cs5:mb-2 cs6:w-[317px]'>
        {{ $prestasi->title }}</p>
      <p
        class='font-manrope text-[14px] cs5:text-[16px] text-[#525252] font-normal cs5:w-[295px] w-[368px] m-0 break-word line-clamp-2 mb-5 2xl:text-[18px] cs6:w-[317px]'>
        {{ \Illuminate\Support\Str::limit(strip_tags($prestasi->content), 120) }}</p>
      <p
        class='text-[#1152D8] font-manrope text-[14px] bg-[#F7F7F7] border border-[#EBEBEB] rounded-[90px] px-5 py-1.5 w-max font-semibold'>
        PRESTASI</p>
    </div>
    @endforeach
  </div>
  <div class="sm:hidden cs5:mb-10 cs8:block">
    <a href="/prestasi"
      class='bg-[#1152D9] transition-all duration-300 hover:bg-[#007FFF] w-max font-manrope px-8 py-2.5 border rounded-[42px] text-[16px] text-[#ffffff] font-semibold ml-auto mr-auto block'>Selengkapnya</a>
  </div>
  @vite('resources/js/animate/landing/prestasi.js')
</section>