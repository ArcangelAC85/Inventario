<nav class="navbar" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <a class="navbar-item" href="index.php?vista=home">
        <img src="./img/logo.jpg" width="80" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Usuarios</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=user_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=user_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=user_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Ingresos</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=zuntex_ingresos" class="navbar-item">Zuntex</a>
                    <a href="index.php?vista=jt_ingresos" class="navbar-item">J&T</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Bodegas</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=bodega_centralz12" class="navbar-item">Bodega Z12 Central</a>
                    <a href="index.php?vista=bodega_42" class="navbar-item">Bodega 42</a>
                    <a href="index.php?vista=bodega_alminter" class="navbar-item">Bodega Alminter</a>
                    <a href="index.php?vista=bodega_zona7" class="navbar-item">Bodega Zona 7</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Inventarios</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=primeras_inventario" class="navbar-item">Primeras</a>
                    <a href="index.php?vista=blanks_inventario" class="navbar-item">Blanks</a>
                    <a href="index.php?vista=smaterial_inventario" class="navbar-item">Sin Material</a>
                    <a href="index.php?vista=stock_inventario" class="navbar-item">Stock</a>
                    <a href="index.php?vista=segundas_inventario" class="navbar-item">Segundas</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Salidas</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=zuntex_salidas" class="navbar-item">Zuntex</a>
                    <a href="index.php?vista=jt_salidas" class="navbar-item">J&T</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Requisiciones</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=requi_primeras" class="navbar-item">Primeras</a>
                    <a href="index.php?vista=requi_segundas" class="navbar-item">Segundas</a>
                    <a href="index.php?vista=buscar_requi" class="navbar-item">Buscar</a>
                </div>
            </div>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-primary is-rounded">
                        Mi cuenta
                    </a>

                    <a href="index.php?vista=logout" class="button is-link is-rounded">
                        Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>