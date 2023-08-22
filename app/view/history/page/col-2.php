<!DOCTYPE html>
<html>
  <?php $this->getThemeElement('page/html/head', $__forward) ?>
  <body>
    <!-- Panggil view component navbar -->
    <?php $this->getThemeElement('page/html/navbar', $__forward) ?>
    
    <?php $this->getThemeContent() ?>

    <?php $this->getThemeElement('page/html/footer',$__forward); ?>

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <?php $this->getJsFooter(); ?>

    <!-- Load and execute javascript code used only in this page -->
    <script>
      $(document).ready(function(e){
        $('.sidenav').sidenav();
        <?php $this->getJsReady(); ?>
      });
      <?php $this->getJsContent(); ?>
    </script>
    <script>
      $(".dropdown-trigger").dropdown();
    </script>
    <script type="text/javascript">
      $(".carousel.carousel-slider").carousel({
        fullWidth: true,
        indicators: true,
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".modal").modal();
      });
    </script>
  </body>
</html>