<section id='jurusan' class='border border-transparent'>
    <div class='flex flex-row items-start gap-x-20 ml-auto mr-auto w-max mt-20 mb-20 max-sm:mt-[110px]'>
        <div class='relative'>
            <div class='size-[160px] rounded-full absolute bottom-0 right-0 drop-shadow-custom bg-[#FFFFFF] flex items-center justify-center'>
                <div class='size-[120px] bg-[url({{ $jurusan["logo"] }})] drop-shadow-custom2 bg-center bg-cover'></div>
            </div>
            <div class='w-[660px] h-[420px] rounded-full p-5 border border-[#999999]'>
                <div class='bg-[url({{ $jurusan["doc"] }})] bg-center bg-cover w-full h-full rounded-full'></div>
            </div>
        </div>
        <div class='flex flex-col gap-y-6 justify-start h-max'>
            <div class="font-manrope flex items-center gap-x-2 bg-[#F7F7F7] border border-[#EBEBEB] w-max pr-4 max-sm:pr-3 pl-1.5 max-sm:pl-1 pt-1.5 max-sm:pt-1 pb-1.5 max-sm:pb-1 rounded-[80px]">
                <p class="bg-[#111111] text-[#ffffff] font-semibold max-sm:text-[12px] text-[16px] pt-1 pb-1 pl-3 pr-3 border border-[#ebebeb] rounded-[80px]">JURUSAN</p>
                <p class='text-[#525252] font-normal max-sm:text-[12px] text-[16px]'>{{ $jurusan["singkat"] }}</p>
            </div>
            <p class='font-manrope font-semibold text-[#111111] text-[48px] w-[540px]'>{{ $jurusan["nama"] }}</p>
            <p class='font-manrope font-normal text-[#525252] text-[20px] w-[540px]'>{{ $jurusan["deskripsi"] }}</p>
        </div>
    </div>

    <div class='w-full py-20'>
        <div class='w-[1280px] py-20 border border-[#EBEBEB] h-[250px] bg-[#FFFFFF] ml-auto mr-auto rounded-[24px] px-20'>
            <div class='flex flex-row items-center justify-between'>
                <p class='text-[32px] font-manrope font-semibold text-[#111111] w-[400px]'>INFORMASI PROGRAM JURUSAN {{ $jurusan["singkat"] }}</p>
                <div class='flex flex-row gap-x-20'>
                    <div class='flex flex-row items-center gap-x-5'>
                        <div class='bg-[url(/assets/icon/program.svg)] size-[88px] rounded-full bg-cover bg-center'></div>
                        <div class='flex flex-col gap-y-2'>
                            <p class='text-[#525252] font-manrope font-semibold text-[20px]'>PROGRAM</p>
                            <p class='text-[#111111] font-manrope font-semibold text-[40px]'>{{ $jurusan["program"] }}</p>
                        </div>
                    </div>
                    <div class='flex flex-row items-center gap-x-5'>
                        <div class='bg-[url(/assets/icon/kelas.svg)] size-[88px] rounded-full bg-cover bg-center'></div>
                        <div class='flex flex-col gap-y-2'>
                            <p class='text-[#525252] font-manrope font-semibold text-[20px]'>KELAS</p>
                            <p class='text-[#111111] font-manrope font-semibold text-[40px]'>{{ $jurusan["kelas"] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='w-full py-20'>
        <p class='text-center text-[20px] font-manrope font-semibold text-[#1152D8] mb-6'>KOMPETENSI KEAHLIAN</p>
        <p class='text-center text-[48px] font-manrope font-semibold text-[#111111] mb-6'>PEMBELAJARAN KEJURUAN</p>
        <p class='text-center text-[20px] font-manrope font-normal text-[#525252] mb-20'>Pembelajaran yang mendukung kompetensi keahlian</p>
        <div class='w-max ml-auto mr-auto flex flex-row gap-x-7'>
            @foreach($jurusan['kompetensi'] as $item)
            <div class='w-[408px] flex items-center justify-center h-[236px] rounded-[36px] bg-[#FFFFFF] border border-[EBEBEB] drop-shadow-custom3 py-16'>
                <div class='flex flex-col gap-y-5 ml-auto mr-auto items-center w-[336px]'>
                    <p class='font-semibold font-manrope text-[32px] text-[#111111] text-center'>{{ $item['judul'] }}</p>
                    <p class='font-normal font-manrope text-[16px] text-[#525252] text-center'>{{ $item['deskripsi'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
