    <!-- Connect Section ================================= -->
    <section id="connect">
      <div class="container">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="social-icons">
          <ul>
            <li><a href="https://www.facebook.com/chezdodo"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/chezdodopdx"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/chezdodopx"><i class="fa fa-instagram"></i></a></li>
            <li><a href="http://www.yelp.com/biz/chez-dodo-portland"><i class="fa fa-yelp"></i></a></li>
            <li><a href="http://urbanspoon.com/chez r/24/1722936/restaurant/Downtown/Chez-Dodo-Portland"><i class="fa fa-spoon"></i></a></li>
          </ul>
        </div>
      </div>      
        
      </div>
    </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
  </body>
  <?php wp_footer(); ?>
</html>
