<!DOCTYPE html>
<html>
  <?php $this->getThemeElement('page/html/head', $__forward) ?>
  <body>
  <style type="text/css">
 .jam_analog_malasngoding {
   background: ##778899;
   position: relative;
   width: 240px;
   height: 240px;
   border: 16px solid #008080;
   border-radius: 50%;
   padding: 20px;
   margin:20px auto;
 }

 .xxx {
   height: 100%;
   width: 100%;
   position: relative;
 }

 .jarum {
   position: absolute;
   width: 50%;
   background: #232323;
   top: 50%;
   transform: rotate(90deg);
   transform-origin: 100%;
   transition: all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1);
 }

 .lingkaran_tengah {
   width: 24px;
   height: 24px;
   background: #232323;
   border: 4px solid #52b6f0;
   position: absolute;
   top: 50%;
   left: 50%;
   margin-left: -14px;
   margin-top: -14px;
   border-radius: 50%;
 }

 .jarum_detik {
   height: 2px;
   border-radius: 1px;
   background: #008080;
 }

 .jarum_menit {
   height: 4px;
   border-radius: 4px;
 }

 .jarum_jam {
   height: 8px;
   border-radius: 4px;
   width: 35%;
   left: 15%;
 }
</style>
<div class="container">
<h1><small style="color: rgb(255, 0, 0);">Error 404</small> Notfound</h1>
</div>
<div class="jam_analog_malasngoding">
 <div class="xxx">
   <div class="jarum jarum_detik"></div>
   <div class="jarum jarum_menit"></div>
   <div class="jarum jarum_jam"></div>
   <div class="lingkaran_tengah"></div>
 </div>
</div>

        <div class="container">
          <p>Oops, looks like this page doesn't exist</p>
          <hr>
          <h5>Back to <a href="<?=base_url('')?>">Homepage</a></h5>
        </div>
    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <?php $this->getJsFooter(); ?>

    <!-- Load and execute javascript code used only in this page -->
    <script>
      $(document).ready(function(e){
        <?php $this->getJsReady(); ?>
      });
      <?php $this->getJsContent(); ?>
    </script>

<script type="text/javascript">
	const secondHand = document.querySelector('.jarum_detik');
	const minuteHand = document.querySelector('.jarum_menit');
	const jarum_jam = document.querySelector('.jarum_jam');
 
	function setDate(){
		const now = new Date();
 
		const seconds = now.getSeconds();
		const secondsDegrees = ((seconds / 60) * 360) + 90;
		secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
		if (secondsDegrees === 90) {
			secondHand.style.transition = 'none';
		} else if (secondsDegrees >= 91) {
			secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
		}
 
		const minutes = now.getMinutes();
		const minutesDegrees = ((minutes / 60) * 360) + 90;
		minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;
 
		const hours = now.getHours();
		const hoursDegrees = ((hours / 12) * 360) + 90;
		jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
	}
 
	setInterval(setDate, 1000)
</script>
  </body>
</html>