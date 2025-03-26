<nav class="flex sticky top-0 bg-[#ffffff] z-10">
    <div class="pt-6 pb-6 pl-20 max-sm:pl-0 max-sm:pr-0 max-sm:w-[327px] pr-20 flex justify-between max-w-[1920px] ml-auto mr-auto w-full">
        <div class="flex items-center gap-x-3">
            <img id="open-sidebar" loading="lazy" draggable   ="false" src="/assets/icon/humberger.png" alt="" class="hidden max-sm:block w-[24px]">
            <img loading="lazy" draggable="false" src="/assets/logo/logo_stemba.png" alt="" class="max-sm:hidden w-[45px]">
            <p class="max-sm:hidden font-inter font-semibold text-[23px]">SMKN 7 SEMARANG</p>
        </div>
        <div class="flex items-center gap-x-15">
            <div class="max-sm:hidden max-sm:items-start relative font-manrope flex w-max gap-x-8 items-center text-[#707070] font-normal text-[16px]">
                <a href="/#beranda">
                    <p id="nav-beranda" class="transition-all duration-300 ease-in-out cursor-pointer">Beranda</p>
                </a>
                <a href="/#tentang">
                    <p id="nav-tentang" class="transition-all duration-300 ease-in-out cursor-pointer">Tentang</p>
                </a>
                <div class="relative group">
                    <a href="/#jurusan">
                        <button id="nav-jurusan" class="flex items-center gap-x-2">
                            <p class="transition-all duration-300 ease-in-out cursor-pointer">Jurusan</p>
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
            <p class="bg-[#1152D9] pt-2.5 pb-2.5 pl-6 max-sm:pl-5 pr-6 max-sm:pr-5 max-sm:w-max text-[#ffffff] rounded-[42px] font-manrope text-[16px] max-sm:text-[14px] font-semibold">Hubungi Kami</p>
        </div>
    </div>
    <!-- navbar mobile -->
    <div id="sidebar-mobile" class="absolute z-20 max-sm:top-0 -left-100 transition-all duration-1000 bg-[#FAFAFA] border border-[#EBEBEB] max-sm:w-[303px] h-screen pt-5">
        <div>
            <div class="w-[263px] justify-between flex items-center ml-auto mr-auto mb-9">
                <img loading="lazy" draggable="false" src="/assets/logo/logo_stemba.png" alt="" class="max-sm:block w-[43px]">
                <img id="close-sidebar" loading="lazy" draggable="false" src="/assets/icon/close.png" alt="" class="max-sm:block w-[24px]">
            </div>
            <div class="w-[263px] flex flex-col gap-y-2 ml-auto mr-auto">
                <a href="/#beranda">
                    <div id="nav-beranda-mobile" class="transition-all duration-300 ease-in-out cursor-pointer py-3 px-4 rounded-[8px]">Beranda</div>
                </a>
                <a href="/#tentang">
                    <p id="nav-tentang-mobile" class="transition-all duration-300 ease-in-out cursor-pointer py-3 px-4 rounded-[8px]">Tentang</p>
                </a>
                <div class="relative group h-max">
                    <a href="/#jurusan">
                        <button id="nav-jurusan-mobile" class="flex items-center justify-between gap-x-2 cursor-pointer py-3 px-4 rounded-[8px] w-full">
                            <p class="transition-all duration-300 ease-in-out">Jurusan</p>
                            <img id="arrow-icon" loading="lazy" draggable="false" src="/assets/icon/arrow-down.svg" alt="" class="w-[20px] transition-transform duration-300 ease-in-out">
                        </button>
                    </a>
                    <div id="dropdown-menu" class="transition-all duration-700 h-[0px] flex flex-row overflow-hidden ease-in-out">
                        <img src="/assets/icon/sidebarDots.png" class="w-[28px] h-[315px]" alt="">
                        <div class="flex left-0 w-[235px] flex-col pl-5 font-manrope h-[315px]">
                            <a id="pplg" href="/jurusan/pplg" class="h-[45px] flex items-center group/dropmenu transition-all duration-200 w-max hover:text-[#1152D9]">
                                <p>PPLG</p>
                            </a>
                            <a href="" class="group/dropmenu transition-all w-max h-[45px] flex items-center duration-200 hover:text-[#1152D9]">
                                <p>KPBS</p>
                            </a>
                            <a href="" class="group/dropmenu transition-all w-max h-[45px] flex items-center duration-200 hover:text-[#1152D9]">
                                <p>TKP</p>
                            </a>
                            <a href="" class="group/dropmenu transition-all w-max h-[45px] flex items-center duration-200 hover:text-[#1152D9]">
                                <p>TO</p>
                            </a>
                            <a href="" class="group/dropmenu transition-all w-max h-[45px] flex items-center duration-200 hover:text-[#1152D9]">
                                <p>TE</p>
                            </a>
                            <a href="" class="group/dropmenu transition-all w-max h-[45px] flex items-center duration-200 hover:text-[#1152D9]">
                                <p>TPFL</p>
                            </a>
                            <a href="" class="group/dropmenu transition-all w-max h-[45px] flex items-center duration-200 hover:text-[#1152D9]">
                                <p>TK</p>
                            </a>
                        </div>
                    </div>
                </div>
                <a href="/#berita">
                    <p id="nav-berita-mobile" class="transition-all duration-300 ease-in-out cursor-pointer py-3 px-4 rounded-[8px]">Berita</p>
                </a>
                <a href="/#prestasi">
                    <p id="nav-prestasi-mobile" class="transition-all duration-300 ease-in-out cursor-pointer py-3 px-4 rounded-[8px]">Prestasi</p>
                </a>
            </div>
        </div>
    </div>
</nav>