<?php
session_start();
if (isset($_COOKIE['/2ASIX2018/ZapaOnline/User'])) { $_SESSION['username'] = $_COOKIE['/2ASIX2018/ZapaOnline/User'];}
if (isset($_COOKIE['/2ASIX2018/ZapaOnline/Role'])) { $_SESSION['role'] = $_COOKIE['/2ASIX2018/ZapaOnline/Role'];}
?>
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
			<div class="container">
			  <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav mx-auto">
				  <li class="nav-item active px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="index.php">Home
					  <span class="sr-only">(current)</span>
					</a>
				  </li>
				  <li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
				  </li>
				  <li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="products.html">Products</a>
				  </li>
				  <li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="store.html">Store</a>
				  </li>
				   <li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="loginform.php">Registro de usuario</a>
				  </li>
				   <li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="login.php">Inicio de sesion</a>
                  </li>

                  <?php
          if (isset($_SESSION['role']) && $_SESSION['role']=="admin") {
        ?>
          <li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="loginform.php">Registrar</a>
                  </li>
        <?php
          }
          if (!isset($_SESSION['username'])) {
        ?>
          <li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="login.php">Acceder</a>
                  </li>
        <?php
          }
          else {
        ?>
          <li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="logout.php">Desconectar</a>
                  </li>
<?php
}
?>
				</ul>
			  </div>
			</div>
		  </nav>

</body>
</html>