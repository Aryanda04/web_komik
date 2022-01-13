// $.getJSON('data.json', function(data) {
//     let komik=data.komik;
    
//     let i=0;
//     $.each(komik, function(i, data){
//         if(i<4){
//             let max_char = 60;
//             // console.log(data.deskripsi.length);
//             if(data.deskripsi.length > max_char) {
//                 deskripsi = data.deskripsi.substring(0, max_char) + '...';
//             } else  {
//                 deskripsi = data.deskripsi;
//             }

//             $('#most-view').append(`
//             <div class="list-produk">

//             <div class="">${data.kategori}</div>
            
//             <img src="img/${data.gambar}" style="object-fit:contain; height:233px !important; align:center">

//             <div class="">
//             <h5 class="">${data.judul}</h5>
//             <p class="">${deskripsi}</p>
//             </div>

//             <div class="" style="background-color:white; border-top:none">
//             <small class="" style="float:right">${data.chapter} Chapter</small>
//             <a href="detail.html" class="btn btn-primary">Details</a>
//             </div>

         
//             </div>`);
//             console.log(i)
//         }
//         else{
//             return;
//         }
//         i++;
//     });
// });

// //fungsi print semua komik
// function allMenu(){
//     $.getJSON('data.json', function(data) {
//         let komik=data.komik;
        
//         let i=0;
//         $.each(komik, function(i, data){
            
//                 let max_char = 60;
//                 // console.log(data.deskripsi.length);
//                 if(data.deskripsi.length > max_char) {
//                     deskripsi = data.deskripsi.substring(0, max_char) + '...';
//                 } else  {
//                     deskripsi = data.deskripsi;
//                 }
    
//                 $('#daftar-komik').append(` 
//                 <div class="list-produk">

//                 <div class="">${data.kategori}</div>
                
//                 <img src="img/${data.gambar}" style="object-fit:contain; height:233px !important; align:center">
    
//                 <div class="">
//                 <h5 class="">${data.judul}</h5>
//                 <p class="">${deskripsi}</p>
//                 </div>
    
//                 <div class="" style="background-color:white; border-top:none">
//                 <small class="" style="float:right">${data.chapter} Chapter</small>
//                 <a href="detail.html" class="btn btn-primary">Details</a>
//                 </div>
    
             
//                 </div>`);
//             console.log(i)
            
//         });
//     });
// }
// allMenu();

// $('.nav-link').on('click', function(){
//     $('.nav-link').removeClass('active');
//     $(this).addClass('active');

//     let kategori = $(this).html();
//     $('h1').html(kategori);
// //ini buat yang home
//     if(kategori=='Home'){
//         // empty buat ngosongin yang sisa dari kategori
//         $('#daftar-menu').empty();
//         allMenu();
//         return;
//     }

//     $.getJSON('data.json', function(data){
//         let komik = data.komik;
//         let content = '';
//         //ini buat yang kategori
//         $.each(komik, function(i,data){
//                 if(data.kategori==kategori){
//                     content +=`<div class="col-md-3 d-flex">
//                     <div class="card mb-5 " style="min-height:max-content; width:100%">
//                     <div class="card-header">${data.kategori}</div>
//                     <img src="img/${data.gambar}" style="object-fit:contain; height:233px !important; align:center">
//                     <div class="card-body">
//                     <h5 class="card-title">${data.judul}</h5>
//                     <p class="card-text">${data.deskripsi}</p>
        
//                     </div>
//                     <div class="card-footer" style="background-color:white; border-top:none">
//                     <a href="#" class="btn btn-primary">Details</a>
//                     </div>
//                     </div>
//                     </div>`;
//                 }
//         });
//         $('#daftar-menu').html(content);
//     });

// });