window.addEventListener("load", function() {
    gsap.to(".loader", {
        opacity: 0,
        duration: 1,
        ease: "sine.out",
        onComplete: () => {
            const loader = document.querySelector(".loader");
            loader.style.display = "none";
        }
    });
});