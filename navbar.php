	<?php
		if (isset($title))
		{
	?>
	<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="login.php"><img src="img/logo.png" class="img-responsive"/></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item <?php if (isset($active_productos)){echo $active_productos;}?>">
       <a href="stock.php"><i class="fab fa-stack-overflow"></i> Inventario</a>
      </li>
      <li class="nav-item <?php if (isset($active_categoria)){echo $active_categoria;}?>">
        <a href="categorias.php"><i class="fas fa-tags"></i> Categorías</a>
      </li>
      <li class="nav-item <?php if (isset($active_usuarios)){echo $active_usuarios;}?>">
         <a href="usuarios.php"><i  class='fas fa-user'></i> Usuarios</a>
      </li>
    </ul>
    <a href="login.php?logout"><i class="fas fa-sign-out-alt"></i> Salir</a>
  </div>
</nav>
</div>
	<?php
		}
	?>