<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
  <div class="container">
    <a class="navbar-brand fs-3" href="index.php">
        <strong>PHP Registration System</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
      <?php
      session_start();
      if(isset($_SESSION['user'])) {
          // User is logged in, display links for logged-in users
          echo '<a class="nav-link fs-4 mx-1" href="index.php">Home</a>';
          echo '<a class="nav-link fs-4 mx-1" href="logout.php">Logout</a>';
      } else {
          // User is not logged in, display links for not logged-in users
          echo '<a class="nav-link fs-4 mx-1" href="index.php">Home</a>';
          echo '<a class="nav-link fs-4 mx-1" href="login.php">Login</a>';
          echo '<a class="nav-link fs-4 mx-1" href="register.php">Register</a>';
      }
      ?>
      </div>
    </div>
  </div>
</nav>