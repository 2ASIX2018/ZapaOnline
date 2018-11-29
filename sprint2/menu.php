<?php
session_start();
require_once ("styles.php");
?>
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
	
		 <div class="collapse navbar-collapse" id="navbarResponsive">
	
				<?php
				
          if (isset($_SESSION['role']) && $_SESSION['role']=="admin") {
        ?>
           
          <li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="admin.php"><button type="button" class="btn btn-info">Administrar</button></a>
					</li>
					
			<?php
					}
				if (isset($_SESSION['role']) && $_SESSION['role']=="user") {
			?>

					<li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="store.php">Tienda</a>
					</li>
					<li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="products.php">Productos</a>
				  </li>
			<?php
	      }
          if (!isset($_SESSION['username'])) {
        ?>
          <li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="login.php">Acceder</a>
									</li>
									<li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="store.php">Tienda</a>
					</li>
        <?php
          }
          else {
        ?>
          <li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="logout.php"><button type="button" class="btn btn-info">Desconectar</button></a>
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