<section id="prestasi">
    <div class="w-max max-sm:w-[327px] ml-auto mr-auto flex flex-col items-center mt-20 max-sm:mt-[110px] mb-12 max-sm:mb-8">
        <div class="w-max flex flex-col items-center mb-6 max-sm:mb-8">
            <div class="sectionBeranda flex bg-[#F7F7F7] text-[16px] max-sm:text-[12px] m-0 mb-6 max-sm:mb-8 font-manrope border border-[#ebebeb] w-max rounded-[80px] items-center pr-4 max-sm:pr-3 pl-1.5 max-sm:pl-1 pt-1.5 max-sm:pt-1 pb-1.5 max-sm:pb-1 gap-x-2">
                <p class="bg-[#111111] text-[#FFFFFF] font-semibold border border-[#ebebeb] pt-1 pb-1 pl-3 pr-3 rounded-[80px]">PRESTASI</p>
                <p class="text-[#525252] font-normal">INFORMASI KEJUARAAN</p>
            </div>
            <p class="font-manrope font-semibold max-sm:w-[193px] text-[48px] max-sm:text-[32px] text-[#111111] text-center mb-6 max-sm:mb-4">INFORMASI PRESTASI</p>
            <p class="font-manrope font-normal text-[20px] max-sm:w-[243px] max-sm:text-[14px] text-[#525252] text-center w-[543px]">Lihat dan baca mengenai seluruh informasi kejuaraan yang diraih siswa dan siswi SMKN 7 Semarang</p>
        </div>
        <div class="bg-[#FFFFFF] border border-[#EBEBEB] rounded-full w-[480px] max-sm:w-[327px] flex flex-row items-center py-1 pr-1 pl-4 justify-between mb-6">
            <input wire:model="search" wire:keydown.enter="searchPrestasi" class="text-[16px] max-sm:text-[12px] border-none text-[#111111] w-[404px] focus:outline-none placeholder:text-[#525252] font-manrope font-normal" type="text" name="" placeholder="Cari prestasi di SMKN 7 Semarang" id="searchInput">
            <i wire:click="searchPrestasi" class="fa-solid fa-magnifying-glass text-[#FFFFFF] bg-[#1152D8] text-[20px] p-2 rounded-full hover:bg-[#007FFF] transition-all duration-300 ease-in-out max-sm:text-[18px] hover:cursor-pointer"></i>
        </div>
    </div>
    <div class="w-[1280px] h-max grid grid-cols-3 max-sm:grid-cols-1 max-sm:w-[327px] auto-rows-auto ml-auto gap-7 max-sm:gap-10 mr-auto">
        @forelse($paginatedPrestasi as $item)
            <div class='cardPrestasi1 transition-all duration-300 max-sm:w-[327px] w-[410px] h-[505px] max-sm:h-[486px] rounded-[24px] p-5 bg-[#FFFFFF] border border-[#EBEBEB] hover:border-[#1152D9] hover:border-opacity-30 hover:shadow-[2px_2px_14px_rgba(17,82,217,0.15)] hover:cursor-pointer'>
                <div class='bg-[url({{ $item["gambar"] }})] h-[240px] w-[368px] max-sm:w-[295px] max-sm:h-[220px] rounded-[16px] border bg-cover bg-center relative mb-5 max-sm:mb-4'></div>
                <p class='font-manrope text-[16px] max-sm:text-[12px] text-[#525252] font-normal mb-3'>{{ $item["tanggal"] }}</p>
                <p class='font-manrope text-[20px] max-sm:text-[18px] font-semibold max-sm:max-w-[295px] max-w-[368px] m-0 break-word uppercase line-clamp-2 mb-3 max-sm:mb-2'>{{ $item["judul"] }}</p>
                <p class='font-manrope text-[14px] max-sm:text-[16px] text-[#525252] font-normal max-sm:w-[295px] w-[368px] m-0 break-word line-clamp-2 mb-5'>{{ $item["deskripsi"] }}</p>
                <p class='text-[#1152D8] font-manrope text-[14px] bg-[#F7F7F7] border border-[#EBEBEB] rounded-[90px] px-5 py-1.5 w-max font-semibold'>PRESTASI</p>
            </div>
        @empty
            <p class="font-manrope text-[16px] max-sm:text-[12px] text-[#525252] col-span-3 text-center">Tidak ada informasi prestasi yang ditemukan.</p>
        @endforelse
    </div>
    <div class="w-[1280px] max-sm:flex-col-reverse max-sm:w-[327px] flex flex-row justify-between mt-6 max-sm:mt-8 ml-auto mr-auto items-center max-sm:gap-y-3 mb-20 max-sm:mb-10">
        <p class="font-manrope text-[14px] font-medium opacity-100 text-[#111111]">
            <span class="font-semibold">{{ ($currentPage - 1) * $perPage + 1 }}-{{ min($currentPage * $perPage, $total) }}</span> <span class="opacity-70">dari {{ $total }} informasi</span>
        </p>
        <div class="flex items-center gap-3">
            <button 
                wire:click="previousPage" 
                class="px-3 py-1 bg-[#F7F7F7] border border-[#EBEBEB] rounded-full font-manrope {{ $currentPage === 1 ? 'text-[#9CA0B5] cursor-not-allowed' : 'text-[#111111]' }}"
                @if($currentPage === 1) disabled @endif
            >
                <
            </button>
            
            <div class="flex flex-row items-center gap-x-2">
                @for ($i = $startPage; $i <= $endPage; $i++)
                    <button 
                        wire:click="gotoPage({{ $i }})" 
                        class="px-1 transition-all duration-300 size-[32px] py-1 rounded-full text-center font-manrope {{ $currentPage === $i ? 'bg-[#1152D9] text-white' : 'bg-none text-[#111111] border border-none' }}"
                    >
                        {{ $i }}
                    </button>
                @endfor
            </div>
            
            <button 
                wire:click="nextPage" 
                class="px-3 py-1 bg-[#F7F7F7] border border-[#EBEBEB] rounded-full font-manrope {{ $currentPage === $totalPages || $total === 0 ? 'text-[#9CA0B5] cursor-not-allowed' : 'text-[#111111]' }}"
                @if($currentPage === $totalPages || $total === 0) disabled @endif
            >
                >
            </button>
        </div>
    </div>
</section>

<script>
    document.getElementById('searchInput').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            @this.call('searchPrestasi');
        }
    });

    function updateDeviceType() {
        const isMobile = window.innerWidth < 640;
        @this.call('setDeviceType', isMobile);
    }

    document.addEventListener('DOMContentLoaded', updateDeviceType);
    window.addEventListener('resize', updateDeviceType);
</script>