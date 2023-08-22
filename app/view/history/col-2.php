<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->getThemeElement("page/html/head",$__forward); ?>
</head>
<body>
  
  <?php $this->getThemeElement('page/html/topbar',$__forward); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php $this->getThemeContent(); ?>
      </div>
    </div>
  </div>
  <?php $this->getThemeElement('page/html/footer',$__forward); ?>

  <?php $this->getJsFooter(); ?>
  <script>
    <?php $this->getJsContent(); ?>
    $(document).ready(function(e){
    <?php $this->getJsReady(); ?>
    });
  </script>
</body>
</html>