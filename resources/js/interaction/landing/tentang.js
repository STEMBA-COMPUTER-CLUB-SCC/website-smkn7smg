document.addEventListener("DOMContentLoaded", function () {
    const thumbnailContainer = document.getElementById('thumbnailContainer');
    const playIcon = document.getElementById('playIcon');

    if (thumbnailContainer && playIcon) {
        playIcon.addEventListener('click', function () {
            thumbnailContainer.innerHTML = `
                <iframe 
                    class="w-full h-full rounded-[24px] absolute top-0 left-0 transition-discrete duration-300 ease-in-out opacity-100" 
                    src="https://www.youtube.com/embed/9VNvxo9Ze2Q?autoplay=1" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe>
            `;
        });
    }
});