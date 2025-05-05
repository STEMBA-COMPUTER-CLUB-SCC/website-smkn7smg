<section id="berita">
    <div class="w-max cs5:w-[327px] cs5:mt-[110px] cs5:mb-8 ml-auto mr-auto flex flex-col items-center mt-20 mb-16">
        <div class="w-max flex flex-col items-center mb-16 cs5:mb-8">
            <div class="sectionBeranda font-manrope flex bg-[#F7F7F7] text-[16px] cs5:text-[12px] m-0 mb-6 cs5:mb-8 font-manrope border border-[#ebebeb] w-max rounded-[80px] items-center pr-4 cs5:pr-3 pl-1.5 cs5:pl-1 pt-1.5 cs5:pt-1 pb-1.5 cs5:pb-1 gap-x-2">
                <p class="bg-[#111111] text-[#FFFFFF] font-semibold border border-[#ebebeb] pt-1 pb-1 pl-3 pr-3 rounded-[80px]">BERITA</p>
                <p class="text-[#525252] font-normal">INFORMASI TERBARU</p>
            </div>
            <p class="font-manrope font-semibold text-[48px] text-[#111111] text-center mb-6 cs5:mb-4 cs5:text-[32px] cs5:w-[193px]">INFORMASI TERKAIT SEKOLAH</p>
            <p class="font-manrope font-normal text-[20px] text-[#525252] text-center w-[462px] cs5:w-[265px] cs5:text-[14px]">Lihat dan baca mengenai seluruh informasi terbaru di SMKN 7 Semarang</p>
        </div>
        <div class="bg-[#FFFFFF] border border-[#EBEBEB] rounded-full w-[480px] flex flex-row items-center py-1 pr-1 pl-4 justify-between mb-6 cs5:mb-4 cs5:w-[327px]">
            <input wire:model="search" wire:keydown.enter="searchBerita" class="text-[16px] border-none text-[#111111] w-[404px] focus:outline-none placeholder:text-[#525252] font-manrope font-normal cs5:text-[12px]" type="text" name="" placeholder="Cari berita di SMKN 7 Semarang" id="searchInput">
            <i wire:click="searchBerita" class="fa-solid fa-magnifying-glass text-[#FFFFFF] bg-[#1152D8] text-[20px] p-2 rounded-full hover:bg-[#007FFF] transition-all duration-300 ease-in-out cs5:text-[18px] hover:cursor-pointer"></i>
        </div>
        <div class="w-max flex flex-row gap-x-3">
            @php
                $categories = ['STEMBA', 'SIJA', 'KJIJ', 'KGSP', 'TFLM', 'TKR', 'TE', 'TITL'];
                $colors = [
                    "SIJA"   => "#D6205D",
                    "KJIJ"   => "#B2732B",
                    "KGSP"   => "#B2732B",
                    "TFLM"   => "#5556B3",
                    "TKR"    => "#5556B3",
                    "TE"     => "#FE8D00",
                    "TITL"   => "#FE8D00",
                    "STEMBA" => "#111111",
                ];
            @endphp
            <div class='cs5:w-screen cs5:overflow-scroll scrollbar-hide'>
                <div class='flex flex-row items-center w-max gap-x-3 cs5:gap-x-2 cs5:pl-[8vw] cs5:pr-[8vw]'>
                    @foreach($categories as $category)
                        <p 
                            wire:click="toggleCategory('{{ $category }}')" 
                            class="hover:cursor-pointer font-manrope font-semibold text-[16px] cs5:text-[10px] cs5:px-4 py-2 px-5 rounded-full border border-[#EBEBEB] w-max transition-all duration-300 {{ in_array($category, $selectedCategories) ? 'bg-[#FFFFFF] text-[' . ($colors[$category] ?? '#1152D9') . ']' : 'bg-[#F7F7F7] text-[#525252]' }}"
                        >
                            {{ $category }}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="w-[1280px] cs5:grid-cols-1 cs5:w-[327px] h-max grid grid-cols-3 auto-rows-auto ml-auto gap-7 mr-auto cs6:grid-cols-2 cs6:w-max cs9:w-max cs9:grid-cols-1">
        @forelse($paginatedBerita as $item)
            @php
                $colors = [
                    "SIJA"   => "#D6205D",
                    "KJIJ"   => "#B2732B",
                    "KGSP"   => "#B2732B",
                    "TFLM"   => "#5556B3",
                    "TKR"    => "#5556B3",
                    "TE"     => "#FE8D00",
                    "TITL"   => "#FE8D00",
                    "STEMBA" => "#111111",
                ];
                $hoverColor = $colors[$item["kategori"]] ?? "#1152D9";
            @endphp
            <div class='bg-[#FFFFFF] cs5:w-[327px] cs5:h-max transition-all duration-300 border-opacity-100 border border-[#EBEBEB] rounded-[24px] p-5 w-full h-[448px] hover:border-[#1152D9] hover:border-opacity-30 hover:shadow-[2px_2px_14px_rgba(17,82,217,0.15)] hover:cursor-pointer cs6:w-max cs9:w-max'>
                <div class='transition-all duration-300 cs5:w-[295px] cs5:h-[220px]  bg-[url({{ $item["gambar"] }})] h-[240px] w-[368px] rounded-[16px] border bg-cover bg-center relative mb-5 cs5:mb-4'>
                    <p class='transition-all duration-300 absolute right-3 top-3 uppercase py-2 px-5 font-manrope text-[16px] border border-[#EBEBEB] w-max rounded-full font-semibold bg-[#FFFFFF] text-[{{ $hoverColor }}]'>
                        {{ $item["kategori"] }}
                    </p>
                </div>
                <p class='font-manrope text-[16px] cs5:text-[12px] text-[#525252] font-normal mb-3'>{{ $item["tanggal"] }}</p>
                <p class='font-manrope text-[20px] cs5:text-[18px] cs5:max-w-[295px] cs5:mb-2 font-semibold max-w-[368px] m-0 break-word uppercase line-clamp-2 mb-3'>{{ $item["judul"] }}</p>
                <p class='font-manrope text-[14px] cs5:text-[16px] text-[#525252] cs5:w-[295px] font-normal w-[368px] m-0 break-word line-clamp-2'>{{ $item["deskripsi"] }}</p>
            </div>
        @empty
            <p class="font-manrope text-[16px] text-[#525252] cs5:text-[12px] col-span-3 text-center">Tidak ada berita yang ditemukan.</p>
        @endforelse
    </div>
    <div class="w-[1280px] cs5:flex-col-reverse cs5:w-[327px] cs5:mt-8 cs5:gap-y-3 cs5:mb-10 flex flex-row justify-between mt-6 ml-auto mr-auto items-center mb-20 cs6:w-max cs9:w-max">
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
            @this.call('searchBerita');
        }
    });

    function updateDeviceType() {
        const isMobile = window.innerWidth < 640;
        @this.call('setDeviceType', isMobile);
    }

    document.addEventListener('DOMContentLoaded', updateDeviceType);

    window.addEventListener('resize', updateDeviceType);
</script>