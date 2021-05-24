  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
      $("#navbar-btn").on("click", function() {
          $("#myTopnav").toggleClass("open")
          $(this).toggleClass("active")
      })
      $("#google-menu-btn").on("click", function() {

          $("#google-menu-list").toggleClass("active")
      })
  </script>