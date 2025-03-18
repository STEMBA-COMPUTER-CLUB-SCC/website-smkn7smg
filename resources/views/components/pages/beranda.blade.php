@extends('landing')

@section('content')
    <div class="ml-auto mr-auto pl-20 max-w-[1780px] pr-23 2xl:pr-30 flex justify-between">
        <div class="w-max gap-y-28 2xl:gap-y-[200px] flex flex-col">
            <div>
                <div class="flex bg-[#F7F7F7] text-[16px] m-0 mb-5 font-manrope border border-[#ebebeb] w-max rounded-[80px] items-center pl-1.5 pt-1.5 pb-1.5 pr-4 gap-x-2">
                    <p class="bg-[#111111] text-[#FFFFFF] font-semibold border border-[#ebebeb] pt-1 pb-1 pl-3 pr-3 rounded-[80px]">STEMBA</p>
                    <p class="text-[#525252] font-normal">TIADA HARI TANPA PRESTASI</p>
                </div>
                <p class="font-semibold text-[68px] 2xl:text-[72px] m-0 mb-6 font-manrope w-[734px]">SEKOLAH MENENGAH KEJURUAN NEGERI 7 SEMARANG</p>
                <p class="font-normal text-[22px] m-0 mb-10 font-manrope text-[#111111] opacity-60 w-[617px]">SMK Negeri 7 Semarang adalah sekolah menengah kejuruan yang berada di Semarang, Jawa Tengah, Indonesia. </p>
                <a href="">
                    <p class="bg-[#1152D9] text-[#ffffff] font-manrope font-semibold text-[16px] w-max pt-2.5 pb-2.5 pl-8 pr-8 rounded-[42px]">Selengkapnya</p>
                </a>
            </div>
            <div class="flex items-center">
                <img class="w-[120px] h-[40px]" src="/assets/icon/Statistic-Container.svg" alt="">
                <p class="font-manrope text-[14px] w-[287px]"><b>100+ Industri</b> <span class="text-[#726B7C]">yang telah bekerja sama dengan SMK Negeri 7 Semarang.</span></p>
            </div>
        </div>
        <div class="w-max h-max relative">
            <img class="w-[466px] 2xl:w-[646px] m-0 mb-4" src="/assets/image/image1.png" alt="">
            <div class="flex flex-col absolute bottom-16 right-16 2xl:right-[78px] gap-y-2.5">
                <p class="pt-3 2xl:pt-4 pb-3 2xl:pb-4 pl-4 2xl:pl-6 pr-4 2xl:pr-6 rounded-[60px] font-manrope font-medium text-[16px] 2xl:text-[22px] w-[430px] 2xl:w-[587px] bg-[#FFFFFF] drop-shadow-lg relative right-14 2xl:right-[78px]">📗 Peningkatan Literasi dengan Perpustakaan Digital</p>
                <p class="pt-3 2xl:pt-4 pb-3 2xl:pb-4 pl-4 2xl:pl-6 pr-4 2xl:pr-6 rounded-[60px] font-manrope font-medium text-[16px] 2xl:text-[22px] w-[430px] 2xl:w-[600px] bg-[#FFFFFF] drop-shadow-lg">🧔 Ketahanan Sekolah dengan Pembentukan Karakter</p>
            </div>
        </div>
    </div>
@endsection
