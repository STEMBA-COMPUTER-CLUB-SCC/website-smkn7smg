document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('.sectionBerita, .judulBerita, .deskripsiBerita, .cardBerita2, .cardBerita1 ,.cardBerita3');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains("sectionBerita")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, y: 0 }, 
                        { opacity: 1, y: 0, duration: 1, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("judulBerita")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, y: 10 }, 
                        { opacity: 1, y: 0, duration: 0.3, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("deskripsiBerita")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, y: 10 }, 
                        { opacity: 1, y: 0, duration: 0.3, delay: 0.2, ease: "sine.out" }
                    );
                } else if (entry.target.classList.contains("cardBerita2")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, scale: 1.5 }, 
                        { opacity: 1, scale: 1, duration: 0.5, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("cardBerita1")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, x: 10 }, 
                        { opacity: 1, x:0, duration: 0.2, delay: 0.2, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("cardBerita3")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, x: -10 }, 
                        { opacity: 1, x:0, duration: 0.2, delay: 0.2, ease: "power2.out" }
                    );
                }
                
                observer.unobserve(entry.target); 
            }
        });
    }, { threshold: 0.8 });

    elements.forEach(el => observer.observe(el));
});