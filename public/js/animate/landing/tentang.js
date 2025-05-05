document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('.sectionTentang, .deskripsiTentang, .cardMasjidTentang, .cardKompetensiTentang');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains("sectionTentang")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, y: 0 }, 
                        { opacity: 1, y: 0, duration: 0.3, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("deskripsiTentang")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, y: 15 }, 
                        { opacity: 1, y: 0, duration: 0.3, delay: 0.5, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("cardMasjidTentang")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, y: -30}, 
                        { opacity: 1, y: 0, duration: 1, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("cardKompetensiTentang")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, y: -30},
                        { opacity: 1, y: 0, duration: 1, delay:0.2, ease: "power2.out" }
                    );
                }
                
                observer.unobserve(entry.target); 
            }
        });
    }, { threshold: 0.5 });

    elements.forEach(el => observer.observe(el));
});
