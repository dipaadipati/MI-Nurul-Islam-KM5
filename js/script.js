var currentUrl = window.location.origin + window.location.pathname.substring(0, window.location.pathname.lastIndexOf('/')+1)
$(document).ready(function () {
  $("#autoWidth").lightSlider({
    adaptiveHeight: true,
    auto: true,
    item: 1,
    slideMargin: 0,
    loop: true,
  });
});

$("#galeri-search").keydown(function(){
  var q = $(this).val()
  $.ajax({
    type: "GET",
    url: currentUrl + "galeri.php?q=" + q,
    success: function(data) {
      data = JSON.parse(data)
      var str = ""
      for(var galeri of data){
        console.log(galeri)
        str += `<a class="perArtikelHome">`
        str += `<img src="images/${galeri.img}" alt="Galeri Foto ${galeri.id}">`
        str += `<h3>${galeri.title}</h3>`
        str += `<p>`
        str += galeri.body
        str += `</p>`
        str += `</a>`
      }
      $("#galeriData").html(str)
    },
    error: function(e){
      console.log(e)
    }
  });
})

const navbarHome = document.querySelector(".navbarHome");

window.addEventListener("scroll", () => {
  const post = window.scrollY > 100;
  const hide = window.scrollY > 800;

  navbarHome.classList.toggle("scroll", post);
  navbarHome.classList.toggle("hide", hide);
});
