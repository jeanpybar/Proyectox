
<header>
    <!-- <nav >
            @if(Auth::check())
            <h3 >Bienvenido!  {{Auth::User() -> first_name}}</h3>
            
            @endif
             <ul >
             <li><a href="">Inicio</a></li> 
             
              @if(Auth::check())
             <span id=""separtor></span> 
             <li><a href="">Salir</a></li>
              @endif
        </ul>
    </nav> -->

<nav class="navbar navbar-default" role="navigation" >
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Reserva de Articulos</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Panel</a></li>
                <li><a href="#">Dispositivos</a></li>
                <li><a href="#">Usuarios</a></li>
                <li><a href="#">Prestamos</a></li>
                <li><a href="#">Laboratorios</a></li>
                <li><a href="#">Reportes</a></li>
            </ul>
           
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/signin">Ingresar</a></li>
                <li><a href="#">Registrarse</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true"></span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>  
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
</header>