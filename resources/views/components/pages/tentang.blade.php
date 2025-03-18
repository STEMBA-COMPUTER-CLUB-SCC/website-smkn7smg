<section id="tentang" class="border border-transparent">
    <div class="mt-40 flex flex-col gap-y-10 w-max ml-auto mr-auto mb-14 2xl:mb-[76px]">
        <div class="ml-auto mr-auto flex bg-[#F7F7F7] text-[16px] m-0 font-manrope border border-[#ebebeb] w-max rounded-[80px] items-center pl-1.5 pt-1.5 pb-1.5 pr-4 gap-x-2">
            <p class="bg-[#111111] text-[#FFFFFF] font-semibold border border-[#ebebeb] pt-1 pb-1 pl-3 pr-3 rounded-[80px]">TENTANG</p>
            <p class="text-[#525252] font-normal">PROFIL SMKN 7 SEMARANG</p>
        </div>
        <p class="m-0 ml-auto mr-auto font-manrope text-[#111111] text-center text-[32px] 2xl:text-[44px] w-[1057px] 2xl:w-[1402px]">SMK Negeri 7 Semarang diresmikan pada tanggal 7 Juni 1971 oleh Presiden Republik Indonesia -Suharto, dengan nama Proyek Perintis <span class="opacity-60">Sekolah Teknologi Menengah Pembangunan Semarang dengan lama pendidikan 4 (empat) tahun.</span></p>
    </div>
    <div class="flex w-max gap-x-7 2xl:gap-x-8 ml-auto mr-auto mb-20 2xl:mb-25">
        <div class="bg-[url(/assets/image/masjid.png)] w-[404px] 2xl:w-[535px] h-[496px] 2xl:h-[651px] bg-cover relative">
            <img src="/assets/icon/masjid.png" alt="" class="absolute top-5 2xl:top-6 w-[56px] 2xl:w-[76px] left-5 2xl:left-6">
            <div class="absolute bottom-0 bg-[#ffffff] rounded-[21px] pl-3 2xl:pl-4 pt-3 2xl:pt-4 pb-3 2xl:pb-4 pr-6.5 ml-5 mr-5 mb-5">
                <p class="font-manrope text-[18px] 2xl:text-[24px] font-medium text-[#111111] m-0 mb-0.5 2xl:mb-2">Masjid Al - Adab SMKN 7 Semarang</p>
                <p class="font-manrope text-[16px] 2xl:text-[21px] max-w-[325px] 2xl:max-w-[455px] font-normal text-[#111111] opacity-70 m-0">Tempat ibadah dan keagamaan bagi Siswa siswi muslim di sMKN 7 Semarang</p>
            </div>
        </div>
        <div>
            <div class="h-[496px] 2xl:h-[651px] 2xl:w-[1113px] w-[848px] rounded-[24px] relative">
                <iframe id="youtubePlayer" 
                    class="w-full h-full rounded-[24px] hidden" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe>
                <div id="thumbnailContainer" class="w-full h-full bg-[url(/assets/image/image2.png)] bg-cover">
                    <div class="flex items-center bg-[#ffffff] gap-x-3 2xl:gap-x-4 w-max pt-2 2xl:pt-3 pb-2 2xl:pb-3 pl-3 2xl:pl-4 pr-5 2xl:pr-8 rounded-[70px] absolute top-5 left-5 2xl:top-6 2xl:left-6">
                        <img src="/assets/icon/konsentrasi.svg" alt="" class="w-[40px] 2xl:w-[52px]">
                        <p class="font-manrope text-[18px] 2xl:text-[24px] font-medium text-[#111111]">Kompetensi Keahlian</p>
                    </div>
                    <img src="/assets/icon/play.svg" alt="" onclick="playVideo()" class="absolute w-[120px] 2xl:w-[156px] top-[188px] 2xl:top-[247px] left-[364px] 2xl:left-[478px] hover:cursor-pointer">
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function playVideo() {
        const thumbnail = document.getElementById('thumbnailContainer');
        const iframe = document.getElementById('youtubePlayer');
        
        thumbnail.classList.add('hidden');
        iframe.classList.remove('hidden');
        if (!iframe.src) {
            iframe.src = "https://www.youtube.com/embed/9VNvxo9Ze2Q?si=5Jkbb5gGzvscn-AC&autoplay=1";
        }
    }
</script>