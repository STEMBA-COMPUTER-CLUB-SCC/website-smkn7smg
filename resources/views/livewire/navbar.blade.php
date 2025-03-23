<nav class="pt-6 pb-6 pl-20 pr-20 flex justify-between sticky top-0 bg-[#ffffff] z-10 w-full">
    <div class="flex items-center gap-x-3">
        <img loading="lazy" draggable="false" src="/assets/logo/logo_stemba.png" alt="" class="w-[45px]">
        <p class="font-inter font-semibold text-[23px]">SMKN 7 SEMARANG</p>
    </div>
    <div class="flex items-center gap-x-15">
        <div class="relative font-manrope flex w-max gap-x-8 items-center text-[#707070] font-normal text-[16px]">
            <a href="/#">
                <p id="nav-beranda" class="transition-all duration-300 ease-in-out cursor-pointer">Beranda</p>
            </a>
            <a href="/#tentang">
                <p id="nav-tentang" class="transition-all duration-300 ease-in-out cursor-pointer">Tentang</p>
            </a>
            <div class="relative group">
                <a href="/#jurusan">
                    <button id="nav-jurusan" class="flex items-center gap-x-2">
                        <p class="transition-all duration-300 ease-in-out">Jurusan</p>
                        <img loading="lazy" draggable="false" src="/assets/icon/arrow-down.svg" alt="" class="w-[20px] transition-transform duration-300 ease-in-out group-hover:rotate-180">
                    </button>
                </a>
                <div class="absolute left-0 w-[366px] h-auto top-10 grid grid-cols-2 transition-all duration-300 ease-in-out opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                    <a href="" class="group/dropmenu transition-all duration-200 flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] hover:text-[#1152D9] justify-between px-3 py-2.5">
                        <p>PPLG</p>
                        <img loading="lazy" draggable="false" src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover/dropmenu:opacity-100">
                    </a>
                    <a href="" class="group/dropmenu transition-all duration-200 flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] hover:text-[#1152D9] justify-between px-3 py-2.5">
                        <p>KPBS</p>
                        <img loading="lazy" draggable="false" src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover/dropmenu:opacity-100">
                    </a>
                    <a href="" class="group/dropmenu transition-all duration-200 flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] hover:text-[#1152D9] justify-between px-3 py-2.5">
                        <p>TKP</p>
                        <img loading="lazy" draggable="false" src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover/dropmenu:opacity-100">
                    </a>
                    <a href="" class="group/dropmenu transition-all duration-200 flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] hover:text-[#1152D9] justify-between px-3 py-2.5">
                        <p>TO</p>
                        <img loading="lazy" draggable="false" src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover/dropmenu:opacity-100">
                    </a>
                    <a href="" class="group/dropmenu transition-all duration-200 flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] hover:text-[#1152D9] justify-between px-3 py-2.5">
                        <p>TE</p>
                        <img loading="lazy" draggable="false" src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover/dropmenu:opacity-100">
                    </a>
                    <a href="" class="group/dropmenu transition-all duration-200 flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] hover:text-[#1152D9] justify-between px-3 py-2.5">
                        <p>TPFL</p>
                        <img loading="lazy" draggable="false" src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover/dropmenu:opacity-100">
                    </a>
                    <a href="" class="group/dropmenu transition-all duration-200 flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] hover:text-[#1152D9] justify-between px-3 py-2.5">
                        <p>TK</p>
                        <img loading="lazy" draggable="false" src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover/dropmenu:opacity-100">
                    </a>
                </div>
            </div>
            <a href="/#berita">
                <p id="nav-berita" class="transition-all duration-300 ease-in-out cursor-pointer">Berita</p>
            </a>
            <a href="/#prestasi">
                <p id="nav-prestasi" class="transition-all duration-300 ease-in-out cursor-pointer">Prestasi</p>
            </a>
        </div>
        <p class="bg-[#1152D9] pt-2.5 pb-2.5 pl-6 pr-6 text-[#ffffff] rounded-[42px] font-manrope text-[16px] font-semibold">Hubungi Kami</p>
    </div>
</nav>

<script>
    document.addEventListener('livewire:initialized', () => {
        Livewire.on('scroll-to-section', (event) => {
            const section = event.section;
            const targetElement = document.querySelector(`#${section}`);

            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
</script>