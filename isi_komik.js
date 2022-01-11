//  function chapterDropDown() {
gambar = document.getElementById("chapterGambar");
console.log("tes");
for(let i = 1; i <= 2; i++) {
   gambar.innerHTML += `
      <img src="img/komikdummy/${i}.png" alt="">
   `;
   console.log("tes gambar");
}
//  }

function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
 }