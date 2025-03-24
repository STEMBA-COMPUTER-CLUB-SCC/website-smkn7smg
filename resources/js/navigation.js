document.addEventListener('DOMContentLoaded', () => {
const targetBeranda = document.querySelector('#beranda');
const elementBeranda = document.getElementById('nav-beranda');
const targetTentang = document.querySelector('#tentang');
const elementTentang = document.getElementById('nav-tentang');
const targetJurusan = document.querySelector('#jurusan');
const elementJurusan = document.getElementById('nav-jurusan').querySelector('p');
const targetBerita = document.querySelector('#berita');
const elementBerita = document.getElementById('nav-berita');
const targetPrestasi = document.querySelector('#prestasi');
const elementPrestasi = document.getElementById('nav-prestasi');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        let element;
        if (entry.target === targetBeranda) {
            element = elementBeranda;
        } else if (entry.target === targetTentang) {
            element = elementTentang;
        } else if (entry.target === targetJurusan) {
            element = elementJurusan;
        } else if (entry.target === targetBerita) {
            element = elementBerita;
        } else if (entry.target === targetPrestasi) {
            element = elementPrestasi;
        } else {
            return;
        }

        if (entry.isIntersecting) {
            element.classList.add('text-[#111111]', 'font-bold');
        } else {
            element.classList.remove('text-[#111111]', 'font-bold');
        }
    });
}, { threshold: 0.3 });

if (targetBeranda) observer.observe(targetBeranda);
if (targetTentang) observer.observe(targetTentang);
if (targetJurusan) observer.observe(targetJurusan);
if (targetBerita) observer.observe(targetBerita);
if (targetPrestasi) observer.observe(targetPrestasi);
});