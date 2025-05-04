<div id='prestasi' class='flex flex-row max-sm:flex-col max-sm:gap-y-20 max-sm:w-full w-[1280px] h-max mt-20 max-sm:mt-[110px] mb-20 justify-between ml-auto mr-auto'>    
    <div class='w-[832px] max-sm:w-[327px] h-max max-sm:ml-auto max-sm:mr-auto'>
        <div class="flex bg-[#F7F7F7] text-[16px] max-sm:text-[12px] m-0 mb-7 max-sm:mb-8 font-manrope border border-[#ebebeb] w-max rounded-[80px] items-center pl-1.5 pt-1.5 pb-1.5 pr-4 max-sm:pl-1 max-sm:pt-1 max-sm:pb-1 max-sm:pr-3 gap-x-2">
            <p class="bg-[#111111] text-[#FFFFFF] font-semibold border border-[#ebebeb] pt-1 pb-1 pl-3 pr-3 rounded-[80px]">PRESTASI</p>
            <p class="text-[#525252] font-normal">INFORMASI KEJUARAAN</p>
        </div>
        <div>
            <div class='flex flex-row max-sm:flex-col max-sm:gap-y-5 gap-x-7 mb-10 max-sm:mb-8'>
                <div 
                    class='relative w-[692px] max-sm:w-[325px] max-sm:h-[207px] h-[440px] rounded-[24px] max-sm:rounded-[12px] bg-cover bg-center transition-all ease-in-out duration-200'
                    :style="'background-image: url(' + {{ json_encode($thumbnailUrls[$activeIndex]) }} + ')'"
                >
                @if($activeIndex > 0)
                    <img 
                        src="/assets/icon/arrow-left.png" 
                        class='absolute cursor-pointer size-[36px] top-[90px] left-5 transition-all duration-300' 
                        alt="Previous" 
                        wire:click="prevImage"
                    >
                @endif
                @if($activeIndex < count($thumbnailUrls) - 1)
                    <img 
                        src="/assets/icon/arrow-right.png" 
                        class='absolute cursor-pointer size-[36px] top-[90px] right-5 transition-all duration-300' 
                        alt="Next" 
                        wire:click="nextImage"
                    >
                @endif
                @if($activeIndex === 0 || $activeIndex === count($thumbnailUrls) - 1)
                    <img 
                        src="{{ $direction === 'forward' ? '/assets/icon/arrow-right.png' : '/assets/icon/arrow-left.png' }}"
                        class='absolute cursor-pointer size-[36px] top-[90px] {{ $direction === "forward" ? "right-5" : "left-5" }} transition-all duration-300' 
                        alt="{{ $direction === 'forward' ? 'Next' : 'Previous' }}" 
                        wire:click="{{ $direction === 'forward' ? 'nextImage' : 'prevImage' }}"
                    >
                @endif
                </div>
                <div class='p-4 max-sm:p-3 bg-[#F7F7F7] w-max h-max rounded-[20px] max-sm:gap-x-4 flex flex-col max-sm:flex-row gap-y-4'>
                    @foreach($thumbnailUrls as $index => $url)
                        <div 
                            class='size-[80px] max-sm:size-[40px] max-sm:rounded-[8px] rounded-[16px] bg-cover bg-center transition-all duration-300 cursor-pointer {{ $activeIndex === $index ? "border-[2.5px] border-[#1152D9]" : "" }}'
                            style="background-image: url({{ $url }})"
                            wire:click="setActiveIndex({{ $index }})"
                        ></div>
                    @endforeach
                </div>
            </div>
        </div>
        <p class='font-manrope text-[24px] max-sm:text-[14px] font-normal text-[#525252] mb-7 max-sm:mb-4'>Sabtu, 8 Maret 2025</p>
        <p class='font-manrope text-[28px] max-sm:text-[18px] font-semibold leading-[150%] text-[#111111] max-w-[715px] max-sm:max-w-[327px] uppercase mb-7'>Berprestasi di Ajang Lomba Band Dies Natalis ke-6 Fakultas Kedokteran Universitas Katolik Soegijapranata Tahun 2025
        <p class='whitespace-pre-line font-manrope text-[16px] max-sm:text-[14px] font-normal text-[#111111] max-w-[715px] max-sm:max-w-[327px]'>Final Lomba Band dalam rangka Dies Natalis ke-6 Fakultas Kedokteran Universitas Katolik Soegijapranata (SCU) diadakan pada Jumat, 07 Maret 2025 pukul 14.00 – 19.00 WIB. Acara ini berlangsung di Fakultas Kedokteran SCU, BSB City, Kota Semarang.<br>
    Salah satu finalis adalah Tim Band dari SMK Negeri 7 Semarang dibawah asuhan guru Seni Budaya - Atik Supriyantini, S.Pd. dengan nama group 7 Line yang beranggotakan :
Vionaila Veda Zazqiathakirana - X TKP 1 - sebagai Vokalis
Alvian Setyo Nugroho - X PPLG 1 - sebagai Gitaris
Restu Galih Pratama -  X PPLG 2 - sebagai Bassis
Ibtakhara Raffi Sucipto - X PPLG 1 - sebagai Drumer
Radyan Ayoe Tanaya Asthagyna - SMA 10 Senarang, sebagai Player Keyboard

Setelah melewati beberapa tahapan penilaian dari dewan juri, Alhamdulillah 7 Line berhasil meraih prestasi terbaik sebagai Juara I. Selamat kepada Tim Band Stemba Semarang (7 Line) beserta pembimbingnya atas prestasi yang telah diraih. Berikut sebagian cuplikan liputan kegiatan tersebut.</p>
    </div>
    <div class='w-[408px] max-sm:w-[327px] max-sm:ml-auto max-sm:mr-auto h-max max-sm:mb-10'>
        <div class='flex items-center mb-7 justify-between'>
            <p class='font-manrope text-[24px] max-sm:text-[18px] text-[#111111] font-semibold w-max'>PRESTASI LAINNYA</p>
            <a href="/prestasi" class='flex gap-x-1.5 items-center border group/prestasi bg-[#ffffff] border-[#EBEBEB] w-max py-1 pl-4 pr-1 rounded-full'>
                <p class="font-manrope text-[16px] max-sm:text-[12px] font-normal text-[#525252]">Lihat semua</p>
                <div class="flex items-center justify-center max-sm:size-8 size-9 rounded-full transition-all duration-300 ease-in-out bg-[#1152D8] group-hover/prestasi:bg-[#007FFF]">
                    <i class="fa-solid fa-arrow-right text-[20px] max-sm:text-[18px] -rotate-45 p-1 text-[#FFFFFF]"></i>
                </div>
            </a>
        </div>
        <div class='flex flex-col gap-y-7 max-sm:h-max'>
            <div class='cardPrestasi1 transition-all duration-300 group/berita1 max-sm:w-[327px] w-[410px] h-[505px] max-sm:h-[486px] rounded-[24px] p-5 bg-[#FFFFFF] border border-[#EBEBEB] hover:border-[#1152D9] hover:border-opacity-30 hover:shadow-[2px_2px_14px_rgba(17,82,217,0.15)]'>
                <div class='bg-[url(/assets/image/prestasi/band.png)] h-[240px] w-[368px] max-sm:w-[295px] max-sm:h-[220px] rounded-[16px] border bg-cover bg-center relative mb-5 max-sm:mb-4'></div>
                <p class='font-manrope text-[16px] max-sm:text-[12px] text-[#525252] font-normal mb-3'>Sabtu, 8 maret 2025</p>
                <p class='font-manrope text-[20px] max-sm:text-[18px] font-semibold max-sm:max-w-[295px] max-w-[368px] m-0 break-word uppercase line-clamp-2 mb-3 max-sm:mb-2'>Lomba Band Dies Natalis ke-6 Universitas Katolik Soegijapranata Tahun 2025</p>
                <p class='font-manrope text-[14px] max-sm:text-[16px] text-[#525252] font-normal max-sm:w-[295px] w-[368px] m-0 break-word line-clamp-2 mb-5'>Setelah melewati beberapa tahapan penilaian dari dewan juri, Alhamdulillah 7 Line berhasil meraih prestasi terbaik sebagai Juara I. Selamat kepada Tim Band Stemba Semarang (7 Line) beserta pembimbingnya atas prestasi yang telah diraih. Berikut sebagian cuplikan liputan kegiatan tersebut.</p>
                <p class='text-[#1152D8] font-manrope text-[14px] bg-[#F7F7F7] border border-[#EBEBEB] rounded-[90px] px-5 py-1.5 w-max font-semibold'>PRESTASI</p>
            </div>
            <div class='cardPrestasi2 max-sm:hidden transition-all duration-300 group/berita2 max-sm:w-[327px] w-[410px] h-[505px] max-sm:h-[486px] rounded-[24px] p-5 bg-[#FFFFFF] border border-[#EBEBEB] hover:border-[#1152D9] hover:border-opacity-30 hover:shadow-[2px_2px_14px_rgba(17,82,217,0.15)]'>
                <div class='bg-[url(/assets/image/prestasi/traspac.png)] h-[240px] w-[368px] max-sm:w-[295px] max-sm:h-[220px] rounded-[16px] border bg-cover bg-center relative mb-5 max-sm:mb-4'></div>
                <p class='font-manrope text-[16px] max-sm:text-[12px] text-[#525252] font-normal mb-3'>Jumat, 01 maret 2025</p>
                <p class='font-manrope text-[20px] max-sm:text-[18px] font-semibold max-sm:max-w-[295px] max-w-[368px] m-0 break-word uppercase line-clamp-2 mb-3 max-sm:mb-2'>Siswa SIJA Berprestasi di Ajang Traspac Competition Tahun 2025</p>
                <p class='font-manrope text-[14px] max-sm:text-[16px] text-[#525252] font-normal max-sm:w-[295px] w-[368px] m-0 break-word line-clamp-2 mb-5'>PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi yang berkonsentrasi di bidang menciptakan budaya digital organisasi dengan peningkatan kompetensi digital SDM, perancangan kembali proses kerja berbasis digital, dan pemanfaatan optimal teknologi informasi Artificial intelligence, Internet of Things, Big Data.</p>
                <p class='text-[#1152D8] font-manrope text-[14px] bg-[#F7F7F7] border border-[#EBEBEB] rounded-[90px] px-5 py-1.5 w-max font-semibold'>PRESTASI</p>
            </div>
            <div class='cardPrestasi3 max-sm:hidden transition-all duration-300 group/berita3 max-sm:w-[327px] w-[410px] h-[505px] max-sm:h-[486px] rounded-[24px] p-5 bg-[#FFFFFF] border border-[#EBEBEB] hover:border-[#1152D9] hover:border-opacity-30 hover:shadow-[2px_2px_14px_rgba(17,82,217,0.15)]'>
                <div class='bg-[url(/assets/image/prestasi/cj.png)] h-[240px] w-[368px] max-sm:w-[295px] max-sm:h-[220px] rounded-[16px] border bg-cover bg-center relative mb-5 max-sm:mb-4'></div>
                <p class='font-manrope text-[16px] max-sm:text-[12px] text-[#525252] font-normal mb-3'>Selasa, 27 Februari 2025</p>
                <p class='font-manrope text-[20px] max-sm:text-[18px] font-semibold max-sm:max-w-[295px] max-w-[368px] m-0 break-word uppercase line-clamp-2 mb-3 max-sm:mb-2'>Prestasi Juara 2 di CyberJawara CTF 2024 kategori pelajar</p>
                <p class='font-manrope text-[14px] max-sm:text-[16px] text-[#525252] font-normal max-sm:w-[295px] w-[368px] m-0 break-word line-clamp-2 max-sm:mb-4 mb-5'>Setelah melewati beberapa tahapan penilaian dari dewan juri, Alhamdulillah 7 Line berhasil meraih prestasi terbaik sebagai Juara I. Selamat kepada Tim Band Stemba Semarang (7 Line) beserta pembimbingnya atas prestasi yang telah diraih. Berikut sebagian cuplikan liputan kegiatan tersebut.</p>
                <p class='text-[#1152D8] font-manrope text-[14px] bg-[#F7F7F7] border border-[#EBEBEB] rounded-[90px] px-5 py-1.5 w-max font-semibold'>PRESTASI</p>
            </div>
        </div>
    </div>
</div>