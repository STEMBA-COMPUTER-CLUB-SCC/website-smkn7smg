<div>
  <div
    class="flex flex-row w-max ml-auto mr-auto gap-x-[100px] h-max mb-20 mt-20 cs6:gap-x-[0px] cs8:flex-col cs8:gap-y-10 cs5:flex-col cs5:gap-y-10 cs5:w-maxcs5:items-center">
    <div class="mt-5 ">
      <div
        class="flex bg-[#F7F7F7] text-[16px] max-sm:text-[12px] m-0 mb-6 max-sm:mb-8 font-manrope border border-[#ebebeb] w-max rounded-[80px] items-center pl-1.5 max-sm:pl-1 pt-1.5 max-sm:pt-1 pb-1.5 max-sm:pb-1 pr-4 max-sm:pr-3 gap-x-2 max-sm:ml-auto max-sm:mr-auto">
        <p class="bg-[#111111] text-[#FFFFFF] font-semibold border border-[#ebebeb] pt-1 pb-1 pl-3 pr-3 rounded-[80px]">
          STEMBA</p>
        <p class="text-[#525252] font-normal">KONTAK KAMI</p>
      </div>
      <h1
        class="font-manrope text-[48px] font-semibold tracking-[2%] w-[550px] text-[#111111] mb-10 cs5:text-[32px] cs5:w-[327px]">
        <span class="text-[#1152D9]">HUBUNGI KAMI</span> UNTUK INFORMASI LAINNYA
      </h1>
      <div class="flex flex-col gap-y-7 mb-10 w-max">
        <div class="flex flex-row gap-x-3 items-start">
          <div class="rounded-full bg-[#F7FAFF] flex items-center justify-center size-[48px]">
            <img src="/assets/icon/mail.png" class="size-[24px]" alt="">
          </div>
          <div class="font-manrope text-[16px] flex flex-col gap-y-2 cs5:text-[12px]">
            <p class="text-[#1152D9] font-semibold">Email</p>
            <p class="text-[#111111]">admin@smkn7semarang.sch.id</p>
          </div>
        </div>
        <div class="flex flex-row gap-x-3 items-start">
          <div class="rounded-full bg-[#F7FAFF] flex items-center justify-center size-[48px]">
            <img src="/assets/icon/phone.png" class="size-[24px]" alt="">
          </div>
          <div class="font-manrope text-[16px] flex flex-col gap-y-2 cs5:text-[12px]">
            <p class="text-[#1152D9] font-semibold">TELEPON</p>
            <p class="text-[#111111]">(024) 8311532</p>
          </div>
        </div>
        <div class="flex flex-row gap-x-3 items-start">
          <div class="rounded-full bg-[#F7FAFF] flex items-center justify-center size-[48px]">
            <img src="/assets/icon/location.png" class="size-[24px]" alt="">
          </div>
          <div class="font-manrope text-[16px] flex flex-col gap-y-2 cs5:text-[12px]">
            <p class="text-[#1152D9] font-semibold">ALAMAT</p>
            <p class="text-[#111111] w-[372px] cs5:w-[238px]">Jalan Simpang Lima, RT 02 RW 01, Kel. Mugassari, Kec.
              Semarang Selatan, Kota Semarang, 50249</p>
          </div>
        </div>
      </div>
      <div class="flex flex-col gap-y-4 w-max">
        <p class="font-manrope text-[#111111] text-[16px] font-semibold tracking-[2%]">TEMUKAN KAMI DI:</p>
        <div class='flex flex-row gap-x-2 max-sm:w-max max-sm:ml-auto max-sm:mr-auto'>
          <a href="https://www.youtube.com/@SMKNegeri7Semarang" target="_blank" rel="noopener noreferrer"
            class='p-3 transition-all duration-300 hover:border-[#1152D9] cursor-pointer border border-[#DFE3EB] rounded-[12px]'>
            <img src="/assets/icon/youtube.svg" class='size-[28px]' alt="">
          </a>
          <a target="_blank" rel="noopener noreferrer" href="https://www.tiktok.com/@smknegeri7semarang"
            class='p-3 transition-all duration-300 hover:border-[#1152D9] cursor-pointer border border-[#DFE3EB] rounded-[12px]'>
            <img src="/assets/icon/tiktok.svg" class='w-[28px]' alt="">
          </a>
          <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/smknegeri7semarang/"
            class='p-3 transition-all duration-300 hover:border-[#1152D9] cursor-pointer border border-[#DFE3EB] rounded-[12px]'>
            <img src="/assets/icon/instagram.svg" class='w-[28px]' alt="">
          </a>
          <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/smknegeri7semarang/"
            class='p-3 transition-all duration-300 hover:border-[#1152D9] cursor-pointer border border-[#DFE3EB] rounded-[12px]'>
            <img src="/assets/icon/facebook.svg" class='w-[28px]' alt="">
          </a>
          <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/school/smk-negeri-7-semarang/"
            class='p-3 transition-all duration-300 hover:border-[#1152D9] cursor-pointer border border-[#DFE3EB] rounded-[12px]'>
            <img src="/assets/icon/linkedin.svg" class='w-[28px]' alt="">
          </a>

        </div>
      </div>
    </div>
    <div class="p-10 rounded-[24px] bg-[#F7FAFF] w-[630px] cs7:w-[460px] cs5:w-[327px]">
      <form method="POST" id="formKontak" class="flex flex-col gap-y-7" action="{{ url('/kontak') }}">
        @csrf
        <div class="flex flex-col gap-y-3">
          <p class="font-manrope font-semibold text-[16px] text-[#111111] cs5:text-[12px]">NAMA LENGKAP</p>
          <div
            class="bg-[#ffffff] border border-[#EBEBEB] focus-within:border-[#1152D9] transition-all duration-300 ease-in-out w-[550px] h-[48px] rounded-[16px] flex flex-row items-center gap-x-4 pl-5 cs7:w-full cs5:w-[250px]">
            <img src="/assets/icon/user.png" class="size-[20px] cs5:size-[16px]" alt="">
            <input type="text" placeholder="Masukkan nama lengkap" name="name" id=""
              class="text-[#727272] text-[16px] w-[470px] focus:outline-none focus:border-none cs7:w-full cs5:text-[12px] cs5:w-full">
          </div>
        </div>
        <div class="flex flex-col gap-y-3">
          <p class="font-manrope font-semibold text-[16px] text-[#111111] cs5:text-[12px]">EMAIL</p>
          <div
            class="bg-[#ffffff] border border-[#EBEBEB] focus-within:border-[#1152D9] transition-all duration-300 ease-in-out w-[550px] h-[48px] rounded-[16px] flex flex-row items-center gap-x-4 pl-5 cs7:w-full cs5:w-[250px]">
            <img src="/assets/icon/email-gray.png" class="size-[20px]" alt="">
            <input type="email" placeholder="Masukkan email" name="email" id=""
              class="text-[#727272] text-[16px] w-[470px] focus:outline-none focus:border-none cs7:w-full cs5:text-[12px] cs5:w-full">
          </div>
        </div>
        <div class="flex flex-col gap-y-3 ">
          <p class="font-manrope font-semibold text-[16px] text-[#111111] cs5:text-[12px]">NOMOR TELEPON</p>
          <div class="flex flex-row justify-between cs5:w-[287px] cs5:gap-x-2 cs5:justify-normal">
            <div class="relative">
              <div wire:click="toggleDropdown"
                class="flex flex-row gap-x-3 items-center py-2 px-4 w-max rounded-[16px] justify-center bg-[#FFFFFF] border border-[#EBEBEB] cursor-pointer cs5:w-[62px] cs5:h-[48px] cs5:gap-x-1 cs5:px-0 cs5:py-0">
                <div
                  class="bg-[url({{ $selectedFlag }})] size-[30px] cs5:size-[24px] rounded-full bg-cover bg-center border border-[#EBEBEB] flag">
                </div>
                <img id="arrow-icon" loading="lazy" draggable="false" src="/assets/icon/arrow-down.svg" alt=""
                  class="w-[20px] cs5:w-[16px] transition-transform duration-300 ease-in-out {{ $isDropdownOpen ? 'rotate-180' : '' }}">
              </div>
              <div
                class="absolute top-[100%] left-0 mt-2 w-[250px] max-h-[300px] bg-[#FFFFFF] border border-[#EBEBEB] rounded-[16px] shadow-lg z-10 flex flex-col transition-all duration-300 ease-in-out {{ $isDropdownOpen ? 'opacity-100 scale-100' : 'opacity-0 scale-95 pointer-events-none' }}">
                <div class="p-3 border-b border-[#EBEBEB]">
                  <input wire:model.live="search" wire:input="searchCountries" type="text" placeholder="Cari negara..."
                    class="w-full px-3 py-2 text-[14px] border border-[#EBEBEB] rounded-[8px] focus:outline-none focus:border-[#727272] font-manrope">
                </div>
                <ul class="max-h-[200px] overflow-y-auto">
                  @forelse($filteredCountries as $country)
                  <li wire:click="selectCountry('{{ $country['code'] }}')"
                    class="flex flex-row items-center gap-x-3 py-2 px-4 hover:bg-[#F5F5F5] cursor-pointer">
                    <div
                      class="bg-[url({{ $country['flag'] }})] size-[24px] bg-cover bg-center rounded-full border border-[#EBEBEB] flag">
                    </div>
                    <span class="font-manrope text-[14px] text-[#111111]">{{ $country['name'] }} ({{ $country['code']
                      }})</span>
                  </li>
                  @empty
                  <li class="py-2 px-4 text-[14px] text-[#727272] font-manrope">Negara tidak ditemukan</li>
                  @endforelse
                </ul>
              </div>
            </div>
            <div
              class="bg-[#ffffff] w-[444px] h-[48px] rounded-[16px] flex flex-row items-center gap-x-4 pl-5 border border-[#EBEBEB] focus-within:border-[#1152D9] transition-all duration-300 ease-in-out cs7:w-[280px] cs5:w-[178px] cs5:pl-1 cs5:gap-x-2">
              <p class="font-semibold font-manrope text-[#727272] cs5:text-[12px]">{{ $selectedCountryCode }}</p>
              <input wire:model.live="phoneNumber" type="number" placeholder="Masukkan nomor telepon" id="phoneNumber"
                class="text-[#727272] text-[16px] w-[350px] focus:outline-none focus:border-none cs7:w-full cs5:text-[12px] cs5:w-full">
              <input type="hidden" name="phoneNumber" value="{{ $fullPhoneNumber }}">
            </div>
          </div>
        </div>
        <div class="flex flex-col gap-y-3 mb-3">
          <p class="font-manrope font-semibold text-[16px] text-[#111111] cs5:text-[12px]">PESAN</p>
          <div class="relative focus-within:border rounded-lg w-full">
            <textarea id="autoResize"
              class="focus-within:border-[#1152D9] transition-all duration-300 ease-in-out w-full min-h-[128px] h-auto overflow-hidden resize-none border border-[#EBEBEB] rounded-lg p-3 pr-12 pb-8 focus:outline-none cs5:text-[12px]"
              placeholder="Tulis pesanmu di sini.." maxlength="300" name="message"></textarea>
            <div id="charCount"
              class="absolute flex flex-row w-[525px] justify-between bottom-3 left-3 text-gray-500 text-sm pointer-events-none items-center cs5:text-[12px]">
              <p id="charCounter">300/300</p>
              <img src="/assets/icon/resize.png" draggable="false"
                class=" size-[20px] pointer-events-auto cursor-nwse-resize relative cs7:-translate-x-[170px] cs5:-translate-x-[300px]"
                alt="">
            </div>
          </div>
        </div>
        <input type="submit" value="Kirim Pesan"
          class="bg-[#1152D9] text-manrope text-[#FFFFFF] text-[16px] font-semibold w-full py-5 rounded-[16px] hover:bg-[#007FFF] transition-all duration-300 ease-in-out hover:cursor-pointer cs5:text-[14px]">
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