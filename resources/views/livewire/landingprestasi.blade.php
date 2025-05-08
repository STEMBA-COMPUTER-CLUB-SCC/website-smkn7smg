<section id="prestasi" class="pt-28 border border-transparent">
  <div class='ml-auto mr-auto mb-10 max-sm:w-[298px] w-[1280px] flex items-end justify-between'>
    <div class="max-sm:mr-auto max-sm:ml-auto">
      <div
        class="sectionPrestasi opacity-0 flex bg-[#F7F7F7] text-[16px] max-sm:text-[12px] m-0 mb-10 max-sm:mb-8 font-manrope border border-[#ebebeb] w-max rounded-[80px] items-center pl-1.5 max-sm:pl-1 pt-1.5 max-sm:pt-1 pb-1.5 max-sm:pb-1 pr-4 max-sm:pr-3 gap-x-2 max-sm:ml-auto max-sm:mr-auto">
        <p class="bg-[#111111] text-[#FFFFFF] font-semibold border border-[#ebebeb] pt-1 pb-1 pl-3 pr-3 rounded-[80px]">
          PRESTASI</p>
        <p class="text-[#525252] font-normal">INFORMASI KEJUARAAN</p>
      </div>
      <p
        class='judulPrestasi opacity-0 font-manrope font-semibold text-[40px] max-sm:text-[32px] max-sm:text-center text-left mb-4 max-sm:w-[298px]'>
        INFORMASI PRESTASI</p>
      <p
        class='deskripsiPrestasi opacity-0 font-manrope font-normal text-[20px] max-sm:text-[14px] max-sm:text-center max-sm:ml-auto max-sm:mr-auto text-left text-[#525252] max-sm:max-w-[243px] max-w-[531px]'>
        Lihat dan baca mengenai seluruh informasi kejuaraan yang diraih siswa dan siswi SMKN 7 Semarang</p>
    </div>
    <div class="max-sm:hidden">
      <a href="/prestasi"
        class='bg-[#1152D9] w-max font-manrope px-8 py-2.5 border rounded-[42px] text-[16px] text-[#ffffff] font-semibold ml-auto mr-auto block'>Selengkapnya</a>
    </div>
  </div>
  <div class='font-manrope flex max-sm:flex-col max-sm:gap-y-10 gap-x-7 w-max ml-auto mr-auto mb-20 max-sm:mb-10'>
    @foreach ($blog as $prestasi)
    <div
      class='cardPrestasi1 transition-all duration-300 group/berita1 max-sm:w-[327px] w-[410px] h-[505px] max-sm:h-[486px] rounded-[24px] p-5 bg-[#FFFFFF] border border-[#EBEBEB] hover:border-[#1152D9] hover:border-opacity-30 hover:shadow-[2px_2px_14px_rgba(17,82,217,0.15)]'>
      <div style="background-image: url({{ asset('storage/' . $prestasi->image[0]) ?? null }})"
        class='h-[240px] w-[368px] max-sm:w-[295px] max-sm:h-[220px] rounded-[16px] border bg-cover bg-center relative mb-5 max-sm:mb-4'>
      </div>
      <p class='font-manrope text-[16px] max-sm:text-[12px] text-[#525252] font-normal mb-3'>{{
        \Carbon\Carbon::parse($prestasi->created_at)->translatedFormat('l, j F Y') }}</p>
      <p
        class='font-manrope text-[20px] max-sm:text-[18px] font-semibold max-sm:max-w-[295px] max-w-[368px] m-0 break-word uppercase line-clamp-2 mb-3 max-sm:mb-2'>
        {{ $prestasi->title }}</p>
      <p
        class='font-manrope text-[14px] max-sm:text-[16px] text-[#525252] font-normal max-sm:w-[295px] w-[368px] m-0 break-word line-clamp-2 mb-5'>
        {{ \Illuminate\Support\Str::limit(strip_tags($prestasi->content), 120) }}</p>
      <p
        class='text-[#1152D8] font-manrope text-[14px] bg-[#F7F7F7] border border-[#EBEBEB] rounded-[90px] px-5 py-1.5 w-max font-semibold'>
        PRESTASI</p>
    </div>
    @endforeach
  </div>
  <div class="sm:hidden max-sm:mb-10">
    <a href="/prestasi"
      class='bg-[#1152D9] w-max font-manrope px-8 py-2.5 border rounded-[42px] text-[16px] text-[#ffffff] font-semibold ml-auto mr-auto block'>Selengkapnya</a>
  </div>
  @vite('resources/js/animate/landing/prestasi.js')
</section>