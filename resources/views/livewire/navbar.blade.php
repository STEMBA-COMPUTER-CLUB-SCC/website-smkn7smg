<nav class="pt-6 pb-6 pl-20 pr-20 flex justify-between sticky top-0 bg-[#ffffff] z-10 w-full">
    <div class="flex items-center gap-x-3">
        <img src="/assets/logo/logo_stemba.png" alt="" class="w-[45px]">
        <p class="font-inter font-semibold text-[23px]">SMKN 7 SEMARANG</p>
    </div>
    <div class="flex items-center gap-x-15">
        <div class="relative font-manrope flex w-max gap-x-8 items-center text-[#707070] font-normal text-[16px]">
            <p id="nav-beranda" class="transition-all duration-100 cursor-pointer {{ $onView == 'beranda' ? 'text-[#111111] font-bold' : '' }}" wire:transition wire:click="view('beranda')">Beranda</p>
            <p id="nav-tentang" class="transition-all duration-100 cursor-pointer {{ $onView == 'tentang' ? 'text-[#111111] font-bold' : '' }}" wire:transition wire:click="view('tentang')">Tentang</p>
            <div wire:click="showNavJurusan">
                <button id="nav-jurusan" class="transition-all duration-100" wire:transition>
                    <div class="flex items-center gap-x-2">
                        <p class="{{ $onView == 'jurusan' ? 'text-[#111111] font-bold' : '' }}">Jurusan</p>
                        <img src="/assets/icon/arrow-down.svg" alt="" class="w-[20px] {{ $showAllNavJurusan ? 'rotate-180' : 'rotate-0' }} transition-transform duration-300">
                    </div>
                </button>
            </div>
            <div class="absolute left-[190px] w-[366px] h-[152px] top-10 grid grid-cols-2 transition-all duration-300 ease-in-out {{ $showAllNavJurusan ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-2 pointer-events-none' }}">
                <a href="" class="group flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] justify-between px-3 py-2.5">
                    <p>PPLG</p>
                    <img src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover:opacity-100">
                </a>
                <a href="" class="group flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] justify-between px-3 py-2.5">
                    <p>KPBS</p>
                    <img src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover:opacity-100">
                </a>
                <a href="" class='group flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] justify-between px-3 py-2.5'>
                    <p>TKP</p>
                    <img src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover:opacity-100">
                </a>
                <a href="" class='group flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] justify-between px-3 py-2.5'>
                    <p>TO</p>
                    <img src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover:opacity-100">
                </a>
                <a href="" class='group flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] justify-between px-3 py-2.5'>
                    <p>TE</p>
                    <img src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover:opacity-100">
                </a>
                <a href="" class='group flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] justify-between px-3 py-2.5'>
                    <p>TPFL</p>
                    <img src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover:opacity-100">
                </a>
                <a href="" class='group flex w-[183px] bg-[#F7F7F7] hover:bg-[#ffffff] justify-between px-3 py-2.5'>
                    <p>TK</p>
                    <img src="/assets/icon/arrow-down.svg" alt="" class="w-[18px] rotate-270 opacity-0 group-hover:opacity-100">
                </a>
            </div>
            <p class="cursor-pointer {{ $onView == 'berita' ? 'text-[#111111] font-bold' : '' }}" wire:click="view('berita')">Berita</p>
            <p class="cursor-pointer {{ $onView == 'prestasi' ? 'text-[#111111] font-bold' : '' }}" wire:click="view('prestasi')">Prestasi</p>
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

    @this.watch('onView', (value) => {
            console.log('Current onView:', value);
        });
</script>