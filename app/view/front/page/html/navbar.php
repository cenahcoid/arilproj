<nav class="navbar navbar-dark" style="background-color: #708090;">
  <div class="flex-wrap">
  <a href="#!" class="brand-logo"><i class="material-icons">insert_emoticon</i>Logo</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger">
      <i class="material-icons">menu</i>
    </a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#">Homepage</a></li>
      <?php if(isset($sess->user->id)){ ?>
      <li><a href="#">Logout</a></li>
      <?php } else { ?>
      <li><a href="#">About</a></li>
      <?php } ?>
    </ul>
  </div>
</nav>



