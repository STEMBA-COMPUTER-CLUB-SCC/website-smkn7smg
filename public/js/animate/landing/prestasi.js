document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('.sectionPrestasi, .judulPrestasi, .deskripsiPrestasi, .cardPrestasi1, .cardPrestasi2 ,.cardPrestasi3');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains("sectionPrestasi")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, y: 0 }, 
                        { opacity: 1, y: 0, duration: 1, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("judulPrestasi")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, y: 10 }, 
                        { opacity: 1, y: 0, duration: 0.3, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("deskripsiPrestasi")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, y: 10 }, 
                        { opacity: 1, y: 0, duration: 0.3, delay: 0.2, ease: "sine.out" }
                    );
                } else if (entry.target.classList.contains("cardPrestasi1")) {
                    if (window.innerWidth < 640) {
                        gsap.fromTo(entry.target, 
                            { opacity: 0, scale: 0.8 }, 
                            { opacity: 1, scale: 1, duration: 0.3, ease: "power2.out" }
                        );
                    } else {
                        gsap.fromTo(entry.target, 
                            { opacity: 0, scale: 1.5 }, 
                            { opacity: 1, scale: 1, duration: 0.5, ease: "power2.out" }
                        );
                    }
                } else if (entry.target.classList.contains("cardPrestasi2")) {
                    if (window.innerWidth < 640) {
                        gsap.fromTo(entry.target, 
                            { opacity: 0, scale: 0.8 }, 
                            { opacity: 1, scale: 1, duration: 0.3, ease: "power2.out" }
                        );
                    } else {
                        gsap.fromTo(entry.target, 
                            { opacity: 0, x: -10 }, 
                            { opacity: 1, x:0, duration: 0.2, delay: 0.2, ease: "power2.out" }
                        );
                    }
                } else if (entry.target.classList.contains("cardPrestasi3")) {
                    if (window.innerWidth < 640) {
                        gsap.fromTo(entry.target, 
                            { opacity: 0, scale: 0.8 }, 
                            { opacity: 1, scale: 1, duration: 0.3, ease: "power2.out" }
                        );
                    } else {
                        gsap.fromTo(entry.target, 
                            { opacity: 0, x: -10 }, 
                            { opacity: 1, x:0, duration: 0.2, delay: 0.4, ease: "power2.out" }
                        );
                    }
                }
                
                observer.unobserve(entry.target); 
            }
        });
    }, { threshold: 0.5 });

    elements.forEach(el => observer.observe(el));
});