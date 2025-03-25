document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('.imageJurusan1, .judulDeskripsiJurusan1, .manfaatJurusan1, .manfaatJurusan2, .manfaatJurusan3, .checklistManfaatJurusan1, .checklistManfaatJurusan2, .checklistManfaatJurusan3');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains("imageJurusan1")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, scale:1.1 }, 
                        { opacity: 1, scale:1, duration: 1, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("judulDeskripsiJurusan1")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0}, 
                        { opacity: 1, duration: 0.8, delay: 0.3, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("manfaatJurusan1")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0 ,x: -4 }, 
                        { opacity: 1 ,x: 0, duration: 0.3, delay: 0.4, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("manfaatJurusan2")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0 ,x: -4 }, 
                        { opacity: 1 ,x: 0, duration: 0.3, delay: 0.6, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("manfaatJurusan3")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0 ,x: -4 }, 
                        { opacity: 1 ,x: 0, duration: 0.3, delay: 0.8, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("checklistManfaatJurusan1")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0 }, 
                        { opacity: 1, duration: 0.3, delay: 0.4, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("checklistManfaatJurusan2")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0 }, 
                        { opacity: 1 ,duration: 0.3, delay: 0.6, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("checklistManfaatJurusan3")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0 }, 
                        { opacity: 1, duration: 0.3, delay: 0.8, ease: "power2.out" }
                    );
                }
                
                observer.unobserve(entry.target); 
            }
        });
    }, { threshold: 0.5 });

    elements.forEach(el => observer.observe(el));
});