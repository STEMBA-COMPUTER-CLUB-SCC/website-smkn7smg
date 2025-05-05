document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('.sectionBeranda, .judulBeranda, .imageBeranda, .deskripsiBeranda, .welcomeBeranda1');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains("sectionBeranda")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, y: 0 }, 
                        { opacity: 1, y: 0, duration: 0.3, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("judulBeranda")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, x: -10 }, 
                        { opacity: 1, x: 0, duration: 0.3, delay: 0.5, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("imageBeranda")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, scale: 0.5 }, 
                        { opacity: 1, scale: 1, duration: 0.6, ease: "sine.out" }
                    );
                } else if (entry.target.classList.contains("deskripsiBeranda")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0 }, 
                        { opacity: 0.6, duration: 0.5, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("welcomeBeranda1")) {
                    if (window.innerWidth < 640) {
                        gsap.fromTo(entry.target, 
                            { opacity: 0, y: 50}, 
                            { opacity: 1, y: 0, duration: 2, ease: "power2.out" }
                        );
                    } else {
                        gsap.fromTo(entry.target, 
                            { opacity: 0, x:-10 }, 
                            { opacity: 1, x:0, duration: 1, delay: 0.5, ease: "sine.out" }
                        );
                    }
                }
                
                observer.unobserve(entry.target); 
            }
        });
    }, { threshold: 0.5 });

    elements.forEach(el => observer.observe(el));
});