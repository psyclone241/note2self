<nav class="navbar <?php print($style['navbar']['logged_out']); ?> navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed btn-login" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        Login
        <!-- <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> -->
      </button>
      <a class="navbar-brand" href=""><?php print($title); ?></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" class="form-control">
        </div>
        <button type="button" class="btn btn-primary">Sign in</button>
      </form>
    </div>
  </div>
</nav>
