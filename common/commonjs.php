 
<div class="cursor"></div>
 
 <!-- Vendor JS Files -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    $(document).ready(function () {
      $("#menu").click(function () {
        $("#portfolio-menu").toggleClass("show");
      });
      $("#cancel-icon").click(function () {
        $("#portfolio-menu").removeClass("show");
      });
      $("#portfolio-menu ul li").click(function () {
        $("#portfolio-menu").removeClass("show");
      });
    });

    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll >= 80) {
        $(".portfolio-header-section").removeClass("container").addClass("darkHeader");
      }
      if (scroll <= 80) {
        $(".portfolio-header-section").removeClass("darkHeader").addClass("container");
      }
    })


    
  </script>
 <script>
const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
    cursor.setAttribute("style", "top: "+(e.pageY - 10)+"px; left: "+(e.pageX - 10)+"px;")
})

document.addEventListener('click', () => {
    cursor.classList.add("expand");

    setTimeout(() => {
        cursor.classList.remove("expand");
    }, 500)
})
</script>

<script>
      $(document).ready(function() {
  $('#downloadButton').click(function() {
    var fileUrl = "./prashant-bedi.pdf";
    var fileName = "Prashant Bedi CV.pdf";
    var link = document.createElement('a');
    link.href = fileUrl;
    link.download = fileName;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  });
});
</script>