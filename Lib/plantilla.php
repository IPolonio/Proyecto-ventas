<?php



class plantilla
{

    public static $instance = null;

    public static function apply($titulo = "Ventas")
    {


        if (self::$instance == null) {
            self::$instance = new plantilla($titulo);
        }

        return self::$instance;
    }


    public function __construct($titulo)
    {


      //  $usuario = getuser();
       


?>
     <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLES CSS -->
        <link rel="stylesheet" href="Lib/Style.css">
        
        <!-- BOX ICONS CSS-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        
    </head>
    <body id="body">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <img src="assets/icons/logo.svg" alt="" class="nav__logo-icon">
                        <span class="nav__logo-text">ComerZ</span>
                    </a>
    
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>
    
                    <ul class="nav__list">
                        <a href="#" class="nav__link active">
                            <i class='bx bx-grid-alt nav__icon'></i>
                            <span class="nav__text">Home</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__text">User</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-bell nav__icon' ></i>
                            <span class="nav__text">Notification</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-heart nav__icon'></i>
                            <span class="nav__text">Favorites</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-bookmark nav__icon'></i>
                            <span class="nav__text">Saved</span>
                        </a>
                                    
                    </ul>
                </div>
                <a href="#" class="nav__link">           
                    <i class='bx bx-log-out-circle nav__icon'></i>
                    <span class="nav__text">Close</span>
                </a>
            </nav>
        </div>
    <!-- aqui va la logica--->
    </body>
    <!-- MAIN JS -->
    <script src="Js/Main.js"></script>
</html>
  
    <?php
    }
    function __destruct()
    {

     //   $usuario = getuser();

    ?>
        </div>
        <footer>
            <hr />
            Derechos reservados <?= date('Y') ?> Isaac and Co.&copysr;
         
            <a href="salir.php" class="btn btn-danger btn-sm float-end">Salir</a>
        </footer>


<?php


    }
}
