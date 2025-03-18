<nav class="pt-6 pb-6 pl-20 pr-20 flex justify-between mb-20">
    <div class="flex items-center gap-x-3">
        <img src="/assets/logo/logo_stemba.png" alt="" class="w-[45px]">
        <p class="font-inter font-semibold text-[23px]">SMKN 7 SEMARANG</p>
    </div>
    <div class="flex items-center gap-x-15">
        <div class="font-manrope flex w-max gap-x-8 items-center text-[#707070] font-normal text-[16px]">
            <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'text-[#111111]' : 'text-[#707070]' }}">
                Beranda
            </a>
            <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'text-[#111111]' : 'text-[#707070]' }}">
                Tentang
            </a>
            <div class="flex items-center gap-x-2">
                <p>Jurusan</p>
                <img src="/assets/icon/arrow-down.svg" alt="" class="w-[20px]">
            </div>
            <p>Berita</p>
            <p>Prestasi</p>
        </div>
        <p class="bg-[#1152D9] pt-2.5 pb-2.5 pl-6 pr-6 text-[#ffffff] rounded-[42px] font-manrope text-[16px] font-semibold">Hubungi Kami</p>
    </div>
</nav>