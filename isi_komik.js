function darkMode() {
    var body_element = document.body;
    var list_gambar_element = document.getElementById("chapterGambar");
    var judul_komik = document.getElementById("judulBacaan");
    body_element.classList.toggle("dark-mode");
    list_gambar_element.classList.toggle("listGambar-darkmode");
    judul_komik.classList.toggle("judulBacaan-darkmode");
}