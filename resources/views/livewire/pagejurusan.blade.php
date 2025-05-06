<section id='jurusan' class='border border-transparent'>
    <div class='flex flex-row-reverse items-start gap-x-20 ml-auto mr-auto w-max mt-20 mb-20 cs5:mt-[110px] cs-jurusan:flex-col cs9:flex-col cs5:flex-col'>
        <div class='relative'>
            <div class='w-[608px] h-[440px] bg-[url({{ $jurusan["doc"] }})] bg-center bg-cover rounded-[24px] border border-[#EBEBEB] relative cs6:w-[412px] cs5:w-[327px] cs5:h-[208px]'>
                <div class="bg-[#FFFFFF] border border-[#EDEDED] flex w-max items-center gap-x-3 py-2 pl-3 pr-5 rounded-[70px] absolute bottom-0 -translate-y-5 translate-x-5">
                    <div class='size-[40px] bg-[url({{ $jurusan["logo"] }})] drop-shadow-custom2 bg-center bg-cover'></div>
                    <p class="font-manrope text-[18px]">{{ $jurusan["singkat"] }}</p>
                </div>
            </div>
        </div>
        <div class='flex flex-col gap-y-6 justify-start h-max mt-16'>
            <div class="font-manrope flex items-center gap-x-2 bg-[#F7F7F7] border border-[#EBEBEB] w-max pr-4 cs5:pr-3 pl-1.5 cs5:pl-1 pt-1.5 cs5:pt-1 pb-1.5 cs5:pb-1 rounded-[80px]">
                <p class="bg-[#111111] text-[#ffffff] font-semibold cs5:text-[12px] text-[16px] pt-1 pb-1 pl-3 pr-3 border border-[#ebebeb] rounded-[80px]">{{ $jurusan["singkat"] }}</p>
                <p class='text-[#525252] font-normal cs5:text-[12px] text-[16px]'>KONSENTRASI KEAHLIAN</p>
            </div>
            <p class='font-manrope font-semibold text-[#111111] text-[48px] w-[592px] cs8:w-[428px] cs5:text-[32px] cs5:w-[327px]'>{{ $jurusan["nama"] }}</p>
            <p class='font-manrope font-normal text-[#525252] text-[20px] w-[592px] cs8:w-[428px] cs5:text-[14px] cs5:w-[327px]'>{{ $jurusan["deskripsi"] }}</p>
        </div>
    </div>
    <div class='w-full py-20 cs5:py-10'>
        <div class='w-[1280px] py-20 border border-[#EBEBEB] h-[250px] bg-[url(/assets/image/jurusan/Vector.png)] bg-cover ml-auto mr-auto rounded-[24px] px-20 shadow-[2px_4px_28px_0px_rgba(17,82,217,0.06)] cs6:w-[1170px] cs7:px-5 cs7:w-[1060px] cs8:h-max cs8:py-10 cs8:w-[915px] cs-jurusan:w-max cs9:w-max cs5:w-max cs5:h-max cs5:py-10 cs5:px-6''>
            <div class='flex flex-row items-center justify-between cs-jurusan:flex-col cs-jurusan:gap-y-12 cs9:flex-col cs9:w-max cs9:gap-y-12 cs5:flex-col cs5:w-max cs5:gap-y-10'>
                <p class='text-[32px] font-manrope font-semibold text-[#111111] w-[400px] cs-jurusan:text-center cs9:text-center cs5:text-[20px] cs5:text-center cs5:w-[215px]'>INFORMASI PROGRAM JURUSAN {{ $jurusan["singkat"] }}</p>
                <div class='flex flex-row gap-x-20 cs9:flex-col cs9:gap-y-10 cs5:flex-col cs5:gap-y-10'>
                    <div class='flex flex-row items-center gap-x-5 cs8:flex-col cs8:gap-y-4 cs5:flex-col cs5:gap-y-5'>
                        <div class='bg-[url(/assets/icon/program.svg)] size-[88px] rounded-full bg-cover bg-center cs5:size-[60px]'></div>
                        <div class='flex flex-col gap-y-2 cs8:items-center cs5:items-center'>
                            <p class='text-[#525252] font-manrope font-semibold text-[20px] cs5:text-[12px]'>PROGRAM</p>
                            <p class='text-[#111111] font-manrope font-semibold text-[40px] cs5:text-[20px]'>{{ $jurusan["program"] }}</p>
                        </div>
                    </div>
                    <div class='flex flex-row items-center gap-x-5 cs8:flex-col cs8:gap-y-4 cs5:flex-col cs5:gap-y-5'>
                        <div class='bg-[url(/assets/icon/kelas.svg)] size-[88px] rounded-full bg-cover bg-center cs5:size-[60px]'></div>
                        <div class='flex flex-col gap-y-2 cs8:items-center cs5:items-center'>
                            <p class='text-[#525252] font-manrope font-semibold text-[20px] cs5:text-[12px]'>KELAS</p>
                            <p class='text-[#111111] font-manrope font-semibold text-[40px] cs5:text-[20px]'>{{ $jurusan["kelas"] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='w-full py-20 cs5:py-10'>
        <p class='text-center text-[20px] font-manrope font-semibold text-[#1152D8] mb-6 cs5:text-[14px] cs5:w-[280px] cs5:ml-auto cs5:mr-auto'>KOMPETENSI KEAHLIAN</p>
        <p class='text-center text-[48px] font-manrope font-semibold text-[#111111] mb-6 cs5:text-[32px] cs5:w-[280px] cs5:text-center cs5:ml-auto cs5:mr-auto'>PEMBELAJARAN KEJURUAN</p>
        <p class='text-center text-[20px] font-manrope font-normal text-[#525252] mb-20 cs5:text-[14px] cs5:w-[236px] cs5:ml-auto cs5:mr-auto cs5:mb-8'>Pembelajaran yang mendukung kompetensi keahlian</p>
        <div class='w-max ml-auto mr-auto flex flex-row gap-x-7 cs6:gap-x-5 cs7:w-[792px] cs7:flex-wrap cs7:gap-y-5 cs7:justify-center cs-jurusan:w-max cs-jurusan:flex-col cs9:w-max cs9:flex-col cs5:flex-col cs5:gap-y-7'>
            @foreach($jurusan['kompetensi'] as $item)
            <div class='w-max flex items-center justify-center h-max rounded-[36px] bg-[#FFFFFF] border border-[EBEBEB] drop-shadow-custom3 p-10 cs5:py-10 cs5:px-6'>
                <div class="w-max h-max flex flex-col gap-y-10 cs5:items-center cs5:gap-y-7">
                    <div class="bg-[url({{ $item['icon'] }})] size-[80px] bg-cover bg-center cs5:size-[60px]"></div>
                    <div class='flex flex-col gap-y-5 ml-auto mr-auto w-max cs5:items-center cs5:'>
                        <p class='font-semibold font-manrope text-[32px] w-[304px] text-[#111111] cs5:text-[20px] cs5:w-[279px] cs5:text-center'>{{ $item['judul'] }}</p>
                        <p class='font-normal font-manrope text-[16px] w-[304px] text-[#525252] cs5:text-[14px] cs5:w-[279px] cs5:text-center'>{{ $item['deskripsi'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
