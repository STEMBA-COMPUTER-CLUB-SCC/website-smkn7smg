<div id='berita' class='flex flex-row w-[1280px] h-max mt-20 mb-20 justify-between ml-auto mr-auto'>    
    <div class='w-[832px] h-'>
        <div class="flex bg-[#F7F7F7] text-[16px] m-0 mb-7 font-manrope border border-[#ebebeb] w-max rounded-[80px] items-center pl-1.5 pt-1.5 pb-1.5 pr-4 gap-x-2">
            <p class="bg-[#111111] text-[#FFFFFF] font-semibold border border-[#ebebeb] pt-1 pb-1 pl-3 pr-3 rounded-[80px]">BERITA</p>
            <p class="text-[#525252] font-normal">STEMBA</p>
        </div>
        <div>
            <div class='flex flex-row gap-x-7 mb-10'>
                <div 
                    class='relative w-[692px] h-[440px] rounded-[24px] bg-cover bg-center transition-all ease-in-out duration-200'
                    :style="'background-image: url(' + {{ json_encode($thumbnailUrls[$activeIndex]) }} + ')'"
                >
                @if($activeIndex > 0)
                    <img 
                        src="/assets/icon/arrow-left.png" 
                        class='absolute cursor-pointer size-[36px] top-[202px] left-5 transition-all duration-300' 
                        alt="Previous" 
                        wire:click="prevImage"
                    >
                @endif
                @if($activeIndex < count($thumbnailUrls) - 1)
                    <img 
                        src="/assets/icon/arrow-right.png" 
                        class='absolute cursor-pointer size-[36px] top-[202px] right-5 transition-all duration-300' 
                        alt="Next" 
                        wire:click="nextImage"
                    >
                @endif
                @if($activeIndex === 0 || $activeIndex === count($thumbnailUrls) - 1)
                    <img 
                        src="{{ $direction === 'forward' ? '/assets/icon/arrow-right.png' : '/assets/icon/arrow-left.png' }}"
                        class='absolute cursor-pointer size-[36px] top-[202px] {{ $direction === "forward" ? "right-5" : "left-5" }} transition-all duration-300' 
                        alt="{{ $direction === 'forward' ? 'Next' : 'Previous' }}" 
                        wire:click="{{ $direction === 'forward' ? 'nextImage' : 'prevImage' }}"
                    >
                @endif
            </div>
            <div class='p-4 bg-[#F7F7F7] w-max h-max rounded-[20px] flex flex-col gap-y-4'>
                @foreach($thumbnailUrls as $index => $url)
                    <div 
                        class='size-[80px] rounded-[16px] bg-cover bg-center transition-all duration-300 cursor-pointer {{ $activeIndex === $index ? "border-[2.5px] border-[#1152D9]" : "" }}'
                        style="background-image: url({{ $url }})"
                        wire:click="setActiveIndex({{ $index }})"
                    ></div>
                @endforeach
            </div>
        </div>
    </div>
        <p class='font-manrope text-[24px] font-normal text-[#525252] mb-7'>Sabtu, 8 Maret 2025</p>
        <p class='font-manrope text-[28px] font-semibold leading-[150%] text-[#111111] max-w-[715px] uppercase mb-7'>Berprestasi di Ajang Lomba Band Dies Natalis ke-6 Fakultas Kedokteran Universitas Katolik Soegijapranata Tahun 2025
        <p class='whitespace-pre-line font-manrope text-[16px] font-normal text-[#111111] max-w-[715px]'>Final Lomba Band dalam rangka Dies Natalis ke-6 Fakultas Kedokteran Universitas Katolik Soegijapranata (SCU) diadakan pada Jumat, 07 Maret 2025 pukul 14.00 – 19.00 WIB. Acara ini berlangsung di Fakultas Kedokteran SCU, BSB City, Kota Semarang.<br>
Salah satu finalis adalah Tim Band dari SMK Negeri 7 Semarang dibawah asuhan guru Seni Budaya - Atik Supriyantini, S.Pd. dengan nama group 7 Line yang beranggotakan :
Vionaila Veda Zazqiathakirana - X TKP 1 - sebagai Vokalis
Alvian Setyo Nugroho - X PPLG 1 - sebagai Gitaris
Restu Galih Pratama -  X PPLG 2 - sebagai Bassis
Ibtakhara Raffi Sucipto - X PPLG 1 - sebagai Drumer
Radyan Ayoe Tanaya Asthagyna - SMA 10 Senarang, sebagai Player Keyboard

Setelah melewati beberapa tahapan penilaian dari dewan juri, Alhamdulillah 7 Line berhasil meraih prestasi terbaik sebagai Juara I. Selamat kepada Tim Band Stemba Semarang (7 Line) beserta pembimbingnya atas prestasi yang telah diraih. Berikut sebagian cuplikan liputan kegiatan tersebut.</p>
    </div>
    <div class='w-[408px] h-max'>
        <div class='flex items-center mb-7 justify-between'>
            <p class='font-manrope text-[24px] text-[#111111] font-semibold w-max'>BERITA LAINNYA</p>
            <a href="/berita" class='flex gap-x-1.5 items-center border bg-[#ffffff] border-[#EBEBEB] w-max py-1 pl-4 pr-1 rounded-full'>
                <p class="font-manrope text-[16px] font-normal text-[#525252]">Lihat semua</p>
                <img src="/assets/icon/arrow-up.png" class='cursor-pointer w-9' alt="">
            </a>
        </div>
        <div class='flex flex-col gap-y-7'>
            <div class='bg-[#FFFFFF] transition-all duration-300 hover:border-[#1152D9] hover:border-opacity-30 hover:shadow-[2px_2px_14px_rgba(17,82,217,0.15)] hover:cursor-pointer group/berita1 border border-[#EBEBEB] rounded-[24px] p-5 w-full h-[448px]'>
                <div class='transition-all duration-300 bg-[url(/assets/image/berita/traspac.png)] h-[240px] w-[368px] rounded-[16px] border bg-cover bg-center relative mb-5'>
                    <p class='transition-all duration-300 absolute right-3 top-3 uppercase py-2 px-5 font-manrope text-[16px] bg-[#F7F7F7] border border-[#EBEBEB] w-max rounded-full font-semibold group-hover/berita1:bg-[#FFFFFF] group-hover/berita1:text-[#D6205D]'>sija</p>
                </div>
                <p class='font-manrope text-[16px] text-[#525252] font-normal mb-3'>Sabtu, 1 Maret 2025</p>
                <p class='font-manrope text-[20px] font-semibold max-w-[368px] m-0 break-word uppercase line-clamp-2 mb-3'>Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025</p>
                <p class='font-manrope text-[14px] font-normal w-[368px] m-0 break-word line-clamp-2'>PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi yang berkonsentrasi di bidang menciptakan budaya digital organisasi dengan peningkatan kompetensi digital SDM, perancangan kembali proses kerja berbasis digital, dan pemanfaatan optimal teknologi informasi Artificial intelligence, Internet of Things, Big Data.</p>
            </div>
            <div class='bg-[#FFFFFF] transition-all duration-300 hover:border-[#1152D9] hover:border-opacity-30 hover:shadow-[2px_2px_14px_rgba(17,82,217,0.15)] hover:cursor-pointer group/berita2 border border-[#EBEBEB] rounded-[24px] p-5 w-full h-[448px]'>
                <div class='transition-all duration-300 bg-[url(/assets/image/berita/purna.png)] h-[240px] w-[368px] rounded-[16px] border bg-cover bg-center relative mb-5'>
                    <p class='transition-all duration-300 absolute right-3 top-3 uppercase py-2 px-5 font-manrope text-[16px] bg-[#F7F7F7] border border-[#EBEBEB] w-max rounded-full font-semibold group-hover/berita2:bg-[#FFFFFF] group-hover/berita2:text-[#111111]'>stemba</p>
                </div>
                <p class='font-manrope text-[16px] text-[#525252] font-normal mb-3'>Jumat, 28 Februari 2025</p>
                <p class='font-manrope text-[20px] font-semibold max-w-[368px] m-0 break-word uppercase line-clamp-2 mb-3'>Selamat Memasuki Purna Tugas Kepada Bapak Drs. Budi Santosa</p>
                <p class='font-manrope text-[14px] font-normal w-[368px] m-0 break-word line-clamp-2'>Pensiun atau Purna Tugas adalah seseorang yang sudah tidak bekerja lagi karena usianya sudah lanjut dan harus diberhentikan sesuai dengan peraturan perundang-undangan yang berlaku bagi seorang Pegawai Negeri Sipil.</p>
            </div>
            <div class='bg-[#FFFFFF] transition-all duration-300 hover:border-[#1152D9] hover:border-opacity-30 hover:shadow-[2px_2px_14px_rgba(17,82,217,0.15)] hover:cursor-pointer group/berita3 border border-[#EBEBEB] rounded-[24px] p-5 w-full h-[448px]'>
                <div class='transition-all duration-300 bg-[url(/assets/image/berita/sosialisasi.png)] h-[240px] w-[368px] rounded-[16px] border bg-cover bg-center relative mb-5'>
                    <p class='transition-all duration-300 absolute right-3 top-3 uppercase py-2 px-5 font-manrope text-[16px] bg-[#F7F7F7] border border-[#EBEBEB] w-max rounded-full font-semibold group-hover/berita3:bg-[#FFFFFF] group-hover/berita3:text-[#D6205D]'>sija</p>
                </div>
                <p class='font-manrope text-[16px] text-[#525252] font-normal mb-3'>Rabu, 26 Februari 2025</p>
                <p class='font-manrope text-[20px] font-semibold max-w-[368px] m-0 break-word uppercase line-clamp-2 mb-3'>Sosialisasi Kelas Industri Pemrograman dari PT Telkom Indonesia dan PT Maleo Edukasi Teknologi Tahun 2025</p>
                <p class='font-manrope text-[14px] font-normal w-[368px] m-0 break-word line-clamp-2'>Kelas industri pemrograman adalah program pembelajaran khusus di sekolah vokasi (SMK) yang bertujuan untuk meningkatkan kemampuan siswa dalam bidang pemrograman. Program ini dikelola secara bersama antara sekolah dan industri. Terkait dengan hal tersebut, maka pada tanggal 26 Februari 2025 telah dilaksanakan Sosialisasi Kelas Industri Pemrograman oleh PT Telkom Indonesia dan PT Maleo Edukasi Teknologi kepada siswa kels XII konsentrasi keahlian Sistem Informasi, Jaringan, dan Aplikasi (SIJA) - SMK Negeri 7 Semarang.</p>
            </div>
        </div>
    </div>
</div>