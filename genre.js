function darkMode() {
  var element = document.body;
  var element2 = document.getElementsByClassName("badan");
  var element3 = document.getElementsByClassName("grid-container");
  var element4 = document.getElementsByClassName("list-produk");
  var element5 = document.getElementsByClassName("grid-container3");
  var element6 = document.getElementsByClassName("grid-item");
  element.classList.toggle("dark-mode");
  console.log("test")
  element5[0].classList.toggle("grid2-darkmode");
  for(let item of element2) {
      item.classList.toggle("badan-darkmode");
  }
  console.log("test")
  for(let item of element3) {
      item.classList.toggle("grid-darkmode");
  }
  for(let item of element4){
      item.classList.toggle("list-darkmode");
  }
  for(let item of element6) {
    item.classList.toggle("gridItem-darkmode");
}
}

// function change() {
//   var genres = document.querySelectorAll(".gen input[type='checkbox']");
//   var filters = {
//     gen: getClassOfCheckedCheckboxes(genres),
//   };

//    filterResults(filters);
// }

// function getClassOfCheckedCheckboxes(checkboxes) {
//    var classes = [];

//   if (checkboxes && checkboxes.length > 0) {
//      for (var i = 0; i < checkboxes.length; i++) {
//       var cb = checkboxes[i];

//        if (cb.checked) {
//         classes.push(cb.getAttribute("rel"));
//       }
//     }
//   }

//    return classes;
// }

//  function filterResults(filters) {
//   var rElems = document.querySelectorAll(".result div");
//    var hiddenElems = [];

//    if (!rElems || rElems.length <= 0) {
//      return;
//    }

//    for (var i = 0; i < rElems.length; i++) {
//      var el = rElems[i];

//      if (filters.gen.length > 0) {
//       var isHidden = true;

//        for (var j = 0; j < filters.gen.length; j++) {
//          var filter = filters.gen[j];

//         if (el.classList.contains(filter)) {
//          isHidden = false;
//            break;           }
//        }

//        if (isHidden) {
//         hiddenElems.push(el);
//        }
//      }
//    }

//    for (var i = 0; i < rElems.length; i++) {
//      rElems[i].style.display = "block";
//    }

//   if (hiddenElems.length <= 0) {
//     return;
//   }

//   for (var i = 0; i < hiddenElems.length; i++) {
//     hiddenElems[i].style.display = "none";
//  }
    // }