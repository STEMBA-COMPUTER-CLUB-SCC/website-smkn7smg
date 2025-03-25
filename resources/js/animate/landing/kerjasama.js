document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('.sectionKerjasama, .industriKerjasama');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains("sectionKerjasama")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0, y: 0 }, 
                        { opacity: 1, y: 0, duration: 1, ease: "power2.out" }
                    );
                } else if (entry.target.classList.contains("industriKerjasama")) {
                    gsap.fromTo(entry.target, 
                        { opacity: 0 }, 
                        { opacity: 1, duration: 1, ease: "power2.out" }
                    );
                }                 
                observer.unobserve(entry.target); 
            }
        });
    }, { threshold: 0.8 });

    elements.forEach(el => observer.observe(el));
});