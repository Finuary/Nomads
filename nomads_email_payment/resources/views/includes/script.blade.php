<script src="{{ url('frontend/libraries/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>
<script>
    $(document).ready(function () {
      // tambah smooth scroll ke semua link
      $(".btn-get-started").on('click', function (event) {

        // memastikan .hash ini memiliki nilai sebelum dibaca oleh default behavior
        if (this.hash !== "") {
          // prevent default anchor click behavior
          event.preventDefault();

          // store hash
          var hash = this.hash;

          // using jquery's animate() method to add smooth page scroll
          // the optional number(800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function () {

            // add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // end if
      });
    });
</script>