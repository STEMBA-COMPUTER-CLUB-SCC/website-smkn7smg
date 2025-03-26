<section id="tentang" class="border border-transparent">
    <div class="mt-30 max-sm:mt-10 flex flex-col gap-y-10 max-sm:gap-y-8 w-max ml-auto mr-auto max-sm:mb-10 mb-14 2xl:mb-[76px]">
        <div id="judulTentang" 
            class="sectionTentang ml-auto mr-auto flex bg-[#F7F7F7] text-[16px] max-sm:text-[12px] m-0 font-manrope border border-[#ebebeb] w-max 
                rounded-[80px] items-center pr-4 max-sm:pr-3 pl-1.5 max-sm:pl-1 pt-1.5 max-sm:pt-1 pb-1.5 max-sm:pb-1 gap-x-2 
                opacity-0 transition-all duration-500 ease-in-out">
            <p class="bg-[#111111] text-[#FFFFFF] font-semibold border border-[#ebebeb] pt-1 pb-1 pl-3 pr-3 rounded-[80px]">TENTANG</p>
            <p class="text-[#525252] font-normal">PROFIL SMKN 7 SEMARANG</p>
        </div>
        <p class="deskripsiTentang m-0 ml-auto opacity-0 mr-auto font-manrope text-[#111111] text-center max-sm:text-[21px] text-[32px] 2xl:text-[44px] max-sm:w-[325px] w-[1057px] 2xl:w-[1402px]">
            SMK Negeri 7 Semarang diresmikan pada tanggal 7 Juni 1971 oleh Presiden Republik Indonesia -Suharto, dengan nama Proyek Perintis 
            <span class="opacity-60">Sekolah Teknologi Menengah Pembangunan Semarang dengan lama pendidikan 4 (empat) tahun.</span>
        </p>
    </div>
    <div class="flex max-sm:flex-col max-sm:gap-y-5 w-max gap-x-7 2xl:gap-x-8 ml-auto mr-auto mb-20 max-sm:mb-10 2xl:mb-25">
        <div class="cardMasjidTentang opacity-1 bg-[url(/assets/image/masjid.png)] w-[404px] max-sm:w-[327px] max-sm:h-[404px] 2xl:w-[535px] h-[496px] 2xl:h-[651px] max-sm:rouneded-[24px] bg-cover relative">
            <img loading="lazy" draggable="false" src="/assets/icon/masjid.png" alt="" class="absolute top-5 2xl:top-6 max-sm:w-[52px] w-[56px] 2xl:w-[76px] left-5 2xl:left-6">
            <div class="absolute bottom-0 bg-[#ffffff] rounded-[16px] pl-3 2xl:pl-4 pt-3 2xl:pt-4 pb-3 2xl:pb-4 pr-6.5 ml-5 mr-5 mb-5">
                <p class="font-manrope text-[18px] max-sm:text-[14px] 2xl:text-[24px] font-medium text-[#111111] m-0 mb-0.5 max-sm:mb-2 2xl:mb-2">
                    Masjid Al - Adab SMKN 7 Semarang
                </p>
                <p class="font-manrope text-[16px] max-sm:text-[12px] 2xl:text-[21px] max-w-[325px] 2xl:max-w-[455px] font-normal text-[#111111] opacity-70 m-0">
                    Tempat ibadah dan keagamaan bagi Siswa siswi muslim di SMKN 7 Semarang
                </p>
            </div>
        </div>
        <div class='cardKompetensiTentang opacity-1'>
            <div class="h-[496px] 2xl:h-[651px] 2xl:w-[1113px] w-[848px] max-sm:w-[327px] max-sm:h-[276px] rounded-[24px] relative overflow-hidden">
                <div id="thumbnailContainer" class="w-full h-full bg-[url(/assets/image/image2.png)] max-sm:bg-center bg-cover absolute top-0 left-0 transition-discrete duration-300 ease-in-out opacity-100">
                    <div id="competencyLabel" class="flex items-center bg-[#ffffff] gap-x-3 2xl:gap-x-4 w-max pt-2 2xl:pt-3 pb-2 2xl:pb-3 pl-3 2xl:pl-4 pr-5 2xl:pr-8 rounded-[70px] absolute top-5 left-5 2xl:top-6 2xl:left-6 transition duration-300 ease-in-out translate-y-0 opacity-100">
                        <img loading="lazy" draggable="false" src="/assets/icon/konsentrasi.svg" alt="" class="w-[40px] 2xl:w-[52px]">
                        <p class="font-manrope text-[18px] 2xl:text-[24px] font-medium text-[#111111]">Kompetensi Keahlian</p>
                    </div>
                    <img id="playIcon" loading="lazy" draggable="false" src="/assets/icon/play.svg" alt="Play" class="absolute w-[120px] max-sm:w-[72px] 2xl:w-[156px] max-sm:top-[116px] max-sm:left-[128px] top-[188px] 2xl:top-[247px] left-[364px] 2xl:left-[478px] hover:cursor-pointer">
                </div>
            </div>
        </div>
    </div>
</section>
@vite('resources/js/animate/landing/tentang.js')
@vite('resources/js/interaction/landing/tentang.js')