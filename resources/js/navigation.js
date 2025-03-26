document.addEventListener('DOMContentLoaded', () => {
    const sections = [
        { target: '#beranda', desktop: 'nav-beranda', mobile: 'nav-beranda-mobile' },
        { target: '#tentang', desktop: 'nav-tentang', mobile: 'nav-tentang-mobile' },
        { target: '#jurusan', desktop: 'nav-jurusan', mobile: 'nav-jurusan-mobile' },
        { target: '#berita', desktop: 'nav-berita', mobile: 'nav-berita-mobile' },
        { target: '#prestasi', desktop: 'nav-prestasi', mobile: 'nav-prestasi-mobile' }
    ];

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const section = sections.find(sec => entry.target.id === sec.target.substring(1));
            if (!section) return;

            let elementDesktop = document.getElementById(section.desktop);
            let elementMobile = document.getElementById(section.mobile);
            
            if (section.child) {
                elementDesktop = elementDesktop?.querySelector(section.child);
                elementMobile = elementMobile?.querySelector(section.child);
            }

            if (entry.isIntersecting) {
                elementDesktop?.classList.add('text-[#111111]', 'font-bold');
                elementMobile?.classList.add('text-[#111111]', 'font-bold', 'bg-[#FFFFFF]', 'border', 'border-[#EBEBEB]');
            } else {
                elementDesktop?.classList.remove('text-[#111111]', 'font-bold');
                elementMobile?.classList.remove('text-[#111111]', 'font-bold', 'bg-[#FFFFFF]', 'border', 'border-[#EBEBEB]');
            }
        });
    }, { threshold: 0.3 });

    sections.forEach(section => {
        const targetElement = document.querySelector(section.target);
        if (targetElement) observer.observe(targetElement);
    });
});
document.addEventListener('livewire:initialized', () => {
    Livewire.on('scroll-to-section', (event) => {
        const section = event.section;
        const targetElement = document.querySelector(`#${section}`);

        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('nav-jurusan-mobile');
    const dropdownMenu = document.getElementById('dropdown-menu');
    const arrowIcon = document.getElementById('arrow-icon');
    const closeSidebar = document.getElementById('close-sidebar');
    const sidebarMobile = document.getElementById('sidebar-mobile');
    const openSidebar = document.getElementById('open-sidebar');

    menuButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('h-[315px]');
        arrowIcon.classList.toggle('-rotate-90');
    });
    closeSidebar.addEventListener('click', () => {
        if (sidebarMobile.classList.contains('left-0')) {
            sidebarMobile.classList.replace('left-0', '-left-100');
        }
    })
    openSidebar.addEventListener('click', () => {
        if (sidebarMobile.classList.contains('-left-100')) {
            sidebarMobile.classList.replace('-left-100', 'left-0');
        }
    })
    if (window.location.pathname === "/jurusan/pplg") {
        const jurusanNav = document.getElementById('pplg');

        jurusanNav?.classList.add('text-[#1152D9]');
    }
});
document.addEventListener('click', (event) => {
    if (!menuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.remove('h-[0px]');
        arrowIcon.classList.remove('-rotate-90');
    }
});