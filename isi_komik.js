gambar = document.getElementById("chapterGambar");
console.log("tes");
for (let i = 1; i <= 2; i++) {
    gambar.innerHTML += `
      <img src="img/komikdummy/${i}.png" alt="" class = "center">
   `;
    console.log("tes gambar");
}



function darkMode() {
    var element = document.body;
    // var element2 = document.getElementsByClassName("list-produk");
    element.classList.toggle("dark-mode");
    // element2[0].toggle("badan-darkmode");
}