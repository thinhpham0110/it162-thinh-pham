 <footer class="footer">
     <span class="">Copyright &copy; <?= date('Y') ?> Milk Me Over Tea. All Rights Reserved.</span>
     <span class=" footer__divider"></span>
     <a href="tel:+842866539000" class="block md:inline-block">
         TEL: +2032134000
     </a>
     <span class="footer__divider"></span>
     <a href="mailto:hello@gmail.com" class="block md:inline-block">
         Contact Us: support@milkmeovertea.com
     </a>
 </footer>
 <div class="footer__extra">
     <a href="https://validator.w3.org/nu/?doc=<?= $actual_link ?>" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/validator?uri=<?= $actual_link ?>" target="_blank">Valid CSS</a>
 </div>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script>
     $("#navbar, .navbar__item").on("click", function() {
         $("#navbar__menu").toggleClass("active");
     })
     $(document).mouseup(function(e) {
         const navbar = $("#navbar__menu");

         if (!navbar.is(e.target) && navbar.has(e.target).length === 0) {
             $("#navbar__menu").removeClass("active");
         }
     });
 </script>