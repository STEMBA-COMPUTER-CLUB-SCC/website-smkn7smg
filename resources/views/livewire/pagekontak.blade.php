<div>
    <div class="flex flex-row w-max ml-auto mr-auto gap-x-[100px] h-max mb-20 mt-20">
        <div class="mt-5">
            <div class="flex bg-[#F7F7F7] text-[16px] max-sm:text-[12px] m-0 mb-6 max-sm:mb-8 font-manrope border border-[#ebebeb] w-max rounded-[80px] items-center pl-1.5 max-sm:pl-1 pt-1.5 max-sm:pt-1 pb-1.5 max-sm:pb-1 pr-4 max-sm:pr-3 gap-x-2 max-sm:ml-auto max-sm:mr-auto">
                <p class="bg-[#111111] text-[#FFFFFF] font-semibold border border-[#ebebeb] pt-1 pb-1 pl-3 pr-3 rounded-[80px]">STEMBA</p>
                <p class="text-[#525252] font-normal">KONTAK KAMI</p>
            </div>
            <h1 class="font-manrope text-[48px] font-semibold tracking-[2%] w-[550px] text-[#111111] mb-10"><span class="text-[#1152D9]">HUBUNGI KAMI</span> UNTUK INFORMASI LAINNYA</h1>
            <div class="flex flex-col gap-y-7 mb-10">
                <div class="flex flex-row gap-x-3 items-start">
                    <div class="rounded-full bg-[#F7FAFF] flex items-center justify-center size-[48px]">
                        <img src="/assets/icon/mail.png" class="size-[24px]" alt="">
                    </div>
                    <div class="font-manrope text-[16px] flex flex-col gap-y-2">
                        <p class="text-[#1152D9] font-semibold">Email</p>
                        <p class="text-[#111111]">admin@smkn7semarang.sch.id</p>
                    </div>
                </div>
                <div class="flex flex-row gap-x-3 items-start">
                    <div class="rounded-full bg-[#F7FAFF] flex items-center justify-center size-[48px]">
                        <img src="/assets/icon/phone.png" class="size-[24px]" alt="">
                    </div>
                    <div class="font-manrope text-[16px] flex flex-col gap-y-2">
                        <p class="text-[#1152D9] font-semibold">TELEPON</p>
                        <p class="text-[#111111]">(024) 8311532</p>
                    </div>
                </div>
                <div class="flex flex-row gap-x-3 items-start">
                    <div class="rounded-full bg-[#F7FAFF] flex items-center justify-center size-[48px]">
                        <img src="/assets/icon/location.png" class="size-[24px]" alt="">
                    </div>
                    <div class="font-manrope text-[16px] flex flex-col gap-y-2">
                        <p class="text-[#1152D9] font-semibold">ALAMAT</p>
                        <p class="text-[#111111] w-[372px]">Jalan Simpang Lima, RT 02 RW 01, Kel. Mugassari, Kec. Semarang Selatan, Kota Semarang, 50249</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-y-4">
                <p class="font-manrope text-[#111111] text-[16px] font-semibold tracking-[2%]">TEMUKAN KAMI DI:</p>
                <div class='flex flex-row gap-x-2 max-sm:w-max max-sm:ml-auto max-sm:mr-auto'>
                    <div class='p-3 transition-all duration-300 hover:border-[#1152D9] cursor-pointer border border-[#DFE3EB] rounded-[12px]'>
                        <img src="/assets/icon/youtube.svg" class='size-[28px]' alt="">
                    </div>
                    <div class='p-3 transition-all duration-300 hover:border-[#1152D9] cursor-pointer border border-[#DFE3EB] rounded-[12px]'>
                        <img src="/assets/icon/x.svg" class='w-[28px]' alt="">
                    </div>
                    <div class='p-3 transition-all duration-300 hover:border-[#1152D9] cursor-pointer border border-[#DFE3EB] rounded-[12px]'>
                        <img src="/assets/icon/instagram.svg" class='w-[28px]' alt="">
                    </div>
                    <div class='p-3 transition-all duration-300 hover:border-[#1152D9] cursor-pointer border border-[#DFE3EB] rounded-[12px]'>
                        <img src="/assets/icon/facebook.svg" class='w-[28px]' alt="">
                    </div>
                    <div class='p-3 transition-all duration-300 hover:border-[#1152D9] cursor-pointer border border-[#DFE3EB] rounded-[12px]'>
                        <img src="/assets/icon/linkedin.svg" class='w-[28px]' alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="p-10 rounded-[24px] bg-[#F7FAFF] w-[630px]">
            <form method="POST" id="formKontak" class="flex flex-col gap-y-7" action="{{ url('/kontak') }}">
                @csrf
                <div class="flex flex-col gap-y-3">
                    <p class="font-manrope font-semibold text-[16px] text-[#111111]">NAMA LENGKAP</p>
                    <div class="bg-[#ffffff] border border-[#EBEBEB] focus-within:border-[#1152D9] transition-all duration-300 ease-in-out w-[550px] h-[48px] rounded-[16px] flex flex-row items-center gap-x-4 pl-5">
                        <img src="/assets/icon/user.png" class="size-[20px]" alt="">
                        <input type="text" placeholder="Masukkan nama lengkap" name="name" id="" class="text-[#727272] text-[16px] w-[470px] focus:outline-none focus:border-none">
                    </div>
                </div>
                <div class="flex flex-col gap-y-3">
                    <p class="font-manrope font-semibold text-[16px] text-[#111111]">EMAIL</p>
                    <div class="bg-[#ffffff] border border-[#EBEBEB] focus-within:border-[#1152D9] transition-all duration-300 ease-in-out w-[550px] h-[48px] rounded-[16px] flex flex-row items-center gap-x-4 pl-5">
                        <img src="/assets/icon/email-gray.png" class="size-[20px]" alt="">
                        <input type="email" placeholder="Masukkan email" name="email" id="" class="text-[#727272] text-[16px] w-[470px] focus:outline-none focus:border-none">
                    </div>
                </div>
                <div class="flex flex-col gap-y-3">
                    <p class="font-manrope font-semibold text-[16px] text-[#111111]">NOMOR TELEPON</p>
                    <div class="flex flex-row justify-between">
                        <div class="relative">
                            <div wire:click="toggleDropdown"
                                class="flex flex-row gap-x-3 items-center py-2 px-4 w-max rounded-[16px] justify-center bg-[#FFFFFF] border border-[#EBEBEB] cursor-pointer">
                                <div class="bg-[url({{ $selectedFlag }})] size-[30px] rounded-full bg-cover bg-center border border-[#EBEBEB] flag"></div>
                                <img id="arrow-icon" loading="lazy" draggable="false" src="/assets/icon/arrow-down.svg" alt="" class="w-[20px] transition-transform duration-300 ease-in-out {{ $isDropdownOpen ? 'rotate-180' : '' }}">
                            </div>
                            <div class="absolute top-[100%] left-0 mt-2 w-[250px] max-h-[300px] bg-[#FFFFFF] border border-[#EBEBEB] rounded-[16px] shadow-lg z-10 flex flex-col transition-all duration-300 ease-in-out {{ $isDropdownOpen ? 'opacity-100 scale-100' : 'opacity-0 scale-95 pointer-events-none' }}">
                                <div class="p-3 border-b border-[#EBEBEB]">
                                    <input wire:model.live="search" wire:input="searchCountries" type="text" placeholder="Cari negara..." class="w-full px-3 py-2 text-[14px] border border-[#EBEBEB] rounded-[8px] focus:outline-none focus:border-[#727272] font-manrope">
                                </div>
                                <ul class="max-h-[200px] overflow-y-auto">
                                    @forelse($filteredCountries as $country)
                                        <li wire:click="selectCountry('{{ $country['code'] }}')" class="flex flex-row items-center gap-x-3 py-2 px-4 hover:bg-[#F5F5F5] cursor-pointer">
                                            <div class="bg-[url({{ $country['flag'] }})] size-[24px] bg-cover bg-center rounded-full border border-[#EBEBEB] flag"></div>
                                            <span class="font-manrope text-[14px] text-[#111111]">{{ $country['name'] }} ({{ $country['code'] }})</span>
                                        </li>
                                    @empty
                                        <li class="py-2 px-4 text-[14px] text-[#727272] font-manrope">Negara tidak ditemukan</li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        <div class="bg-[#ffffff] w-[444px] h-[48px] rounded-[16px] flex flex-row items-center gap-x-4 pl-5 border border-[#EBEBEB] focus-within:border-[#1152D9] transition-all duration-300 ease-in-out">
                            <p class="font-semibold font-manrope text-[#727272]">{{ $selectedCountryCode }}</p>
                            <input wire:model.live="phoneNumber" type="number" placeholder="Masukkan nomor telepon" id="phoneNumber" class="text-[#727272] text-[16px] w-[350px] focus:outline-none focus:border-none">
                            <input type="hidden" name="phoneNumber" value="{{ $fullPhoneNumber }}">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-y-3 mb-3">
                    <p class="font-manrope font-semibold text-[16px] text-[#111111]">PESAN</p>
                    <div class="relative focus-within:border rounded-lg w-full">
                        <textarea id="autoResize" class="focus-within:border-[#1152D9] transition-all duration-300 ease-in-out w-full min-h-[128px] h-auto overflow-hidden resize-none border border-[#EBEBEB] rounded-lg p-3 pr-12 pb-8 focus:outline-none" placeholder="Tulis pesanmu di sini.." maxlength="300" name="message"></textarea>
                        <div id="charCount" class="absolute flex flex-row w-[525px] justify-between bottom-3 left-3 text-gray-500 text-sm pointer-events-none items-center">
                            <p id="charCounter">300/300</p>
                            <img src="/assets/icon/resize.png" draggable="false" class="size-[20px] pointer-events-auto cursor-nwse-resize" alt="">
                        </div>
                    </div>
                </div>
                <input type="submit" value="Kirim Pesan" class="bg-[#1152D9] text-manrope text-[#FFFFFF] text-[16px] font-semibold w-full py-5 rounded-[16px] hover:bg-[#007FFF] transition-all duration-300 ease-in-out hover:cursor-pointer">
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('click', function(e) {
        const dropdown = document.querySelector('.relative');
        const dropdownMenu = document.querySelector('div[wire\\:if="isDropdownOpen"]');
        if (dropdown && dropdownMenu && !dropdown.contains(e.target)) {
            @this.set('isDropdownOpen', false);
        }
    });
    const textarea = document.getElementById("autoResize");
    const charCounter = document.getElementById("charCounter"); 
    const maxChars = 300;

    textarea.addEventListener("input", function () {
        this.style.height = "auto";
        this.style.height = this.scrollHeight + "px";

        let charCount = this.value.length;
        let remainingChars = maxChars - charCount;

        charCounter.textContent = `${remainingChars}/${maxChars}`;
    });

</script>