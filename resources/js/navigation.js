document.addEventListener("DOMContentLoaded", () => {
  const sections = [
    {
      target: "#beranda",
      desktop: "nav-beranda",
      mobile: "nav-beranda-mobile",
    },
    {
      target: "#tentang",
      desktop: "nav-tentang",
      mobile: "nav-tentang-mobile",
    },
    {
      target: "#jurusan",
      desktop: "nav-jurusan",
      mobile: "nav-jurusan-mobile",
    },
    { target: "#berita", desktop: "nav-berita", mobile: "nav-berita-mobile" },
    {
      target: "#prestasi",
      desktop: "nav-prestasi",
      mobile: "nav-prestasi-mobile",
    },
  ];

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        const section = sections.find(
          (sec) => entry.target.id === sec.target.substring(1)
        );
        if (!section) return;

        let elementDesktop = document.getElementById(section.desktop);
        let elementMobile = document.getElementById(section.mobile);

        if (section.child) {
          elementDesktop = elementDesktop?.querySelector(section.child);
          elementMobile = elementMobile?.querySelector(section.child);
        }

        if (entry.isIntersecting) {
          elementDesktop?.classList.add("text-[#111111]", "font-semibold");
          elementMobile?.classList.add(
            "text-[#111111]",
            "font-semibold",
            "bg-[#FFFFFF]",
            "border",
            "border-[#EBEBEB]"
          );
        } else {
          elementDesktop?.classList.remove("text-[#111111]", "font-semibold");
          elementMobile?.classList.remove(
            "text-[#111111]",
            "font-semibold",
            "bg-[#FFFFFF]",
            "border",
            "border-[#EBEBEB]"
          );
        }
      });
    },
    { threshold: 0.3 }
  );

  sections.forEach((section) => {
    const targetElement = document.querySelector(section.target);
    if (targetElement) observer.observe(targetElement);
  });
});
document.addEventListener("livewire:initialized", () => {
  Livewire.on("scroll-to-section", (event) => {
    const section = event.section;
    const targetElement = document.querySelector(`#${section}`);

    if (targetElement) {
      targetElement.scrollIntoView({ behavior: "smooth" });
    }
  });
});
document.addEventListener("DOMContentLoaded", () => {
  const dropdownMenu = document.getElementById("dropdown-menu");
  const arrowIcon = document.getElementById("arrow-icon");
  const closeSidebar = document.getElementById("close-sidebar");
  const sidebarMobile = document.getElementById("sidebar-mobile");
  const openSidebar = document.getElementById("open-sidebar");

  arrowIcon.addEventListener("click", () => {
    dropdownMenu.classList.toggle("h-[315px]");
    arrowIcon.classList.toggle("-rotate-45");
  });
  closeSidebar.addEventListener("click", () => {
    if (sidebarMobile.classList.contains("translate-x-[0px]")) {
      sidebarMobile.classList.replace(
        "translate-x-[0px]",
        "translate-x-[-400px]"
      );
    }
  });
  openSidebar.addEventListener("click", () => {
    if (sidebarMobile.classList.contains("translate-x-[-400px]")) {
      sidebarMobile.classList.replace(
        "translate-x-[-400px]",
        "translate-x-[0px]"
      );
    }
  });
  if (window.location.pathname === "/jurusan/pplg") {
    document.getElementById("pplg-mobile").classList.add("text-[#1152D9]");
    document.getElementById("pplg-desktop").classList.add("text-[#1152D9]");
    document
      .getElementById("dot-pplg")
      .classList.replace("bg-[#DEDEDE]", "bg-[#1152D9]");
  } else if (window.location.pathname === "/jurusan/kpbs") {
    document.getElementById("kpbs-mobile").classList.add("text-[#1152D9]");
    document.getElementById("kpbs-desktop").classList.add("text-[#1152D9]");
    document
      .getElementById("dot-kpbs")
      .classList.replace("bg-[#DEDEDE]", "bg-[#1152D9]");
  } else if (window.location.pathname === "/jurusan/tkp") {
    document.getElementById("tkp-mobile").classList.add("text-[#1152D9]");
    document.getElementById("tkp-desktop").classList.add("text-[#1152D9]");
    document
      .getElementById("dot-tkp")
      .classList.replace("bg-[#DEDEDE]", "bg-[#1152D9]");
  } else if (window.location.pathname === "/jurusan/to") {
    document.getElementById("to-mobile").classList.add("text-[#1152D9]");
    document.getElementById("to-desktop").classList.add("text-[#1152D9]");
    document
      .getElementById("dot-to")
      .classList.replace("bg-[#DEDEDE]", "bg-[#1152D9]");
  } else if (window.location.pathname === "/jurusan/te") {
    document.getElementById("te-mobile").classList.add("text-[#1152D9]");
    document.getElementById("te-desktop").classList.add("text-[#1152D9]");
    document
      .getElementById("dot-te")
      .classList.replace("bg-[#DEDEDE]", "bg-[#1152D9]");
  } else if (window.location.pathname === "/jurusan/tpfl") {
    document.getElementById("tpfl-mobile").classList.add("text-[#1152D9]");
    document.getElementById("tpfl-desktop").classList.add("text-[#1152D9]");
    document
      .getElementById("dot-tpfl")
      .classList.replace("bg-[#DEDEDE]", "bg-[#1152D9]");
  } else if (window.location.pathname === "/jurusan/tk") {
    document.getElementById("tk-mobile").classList.add("text-[#1152D9]");
    document.getElementById("tk-desktop").classList.add("text-[#1152D9]");
    document
      .getElementById("dot-tk")
      .classList.replace("bg-[#DEDEDE]", "bg-[#1152D9]");
  }
});
document.addEventListener("click", (event) => {
  const menuButton = document.getElementById("menu-button");
  const dropdownMenu = document.getElementById("dropdown-menu");
  const arrowIcon = document.getElementById("arrow-icon");

  if (
    !menuButton.contains(event.target) &&
    !dropdownMenu.contains(event.target)
  ) {
    dropdownMenu.classList.remove("h-[0px]");
    arrowIcon.classList.remove("-rotate-90");
  }
});
