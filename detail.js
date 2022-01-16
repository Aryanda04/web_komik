function darkMode() {
    var element = document.body;
    var element2 = document.getElementsByClassName("info");
    element.classList.toggle("dark-mode");
    element2[0].classList.toggle("info-darkmode");
}