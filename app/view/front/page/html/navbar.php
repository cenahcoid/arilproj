<nav class="navbar navbar-dark" style="background-color: #708090;">
<ul id="dropdown1" class="dropdown-content">
  <li><a href="<?php echo base_url('kategori/action');?>"> Action </a></li>
  <li><a href="<?php echo base_url('kategori/school');?>"> School </a></li>
  <li><a href="<?php echo base_url('kategori/horror');?>"> Horror </a></li>
  <li><a href="<?php echo base_url('kategori/romantice');?>"> Romantice </a></li>
  <li><a href="<?php echo base_url('kategori/fantasi');?>"> Fantasi </a></li>
</ul>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">WebRIl</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="<?php echo base_url('about');?>">About</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">kategori<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="<?=base_url('login'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>



