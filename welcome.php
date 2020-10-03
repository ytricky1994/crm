<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    <script type="text/javascript" src="js/dashboard.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--Font Awsome LIB-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
  
    <!-- Top NAVbar-->
    <!-- Bootstrap NavBar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <span class="menu-collapsed">Logo</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarAdmin">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="logout.ph"> Register</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                <!--This menu is hidden on larger devices with d-sm-none.
  The sidebar is not suitable for smaller screens, so this drop-down menu can contain all useful sidebar items for smaller screens only -->
                <li class="nav-item dropdown d-sm-block d-md-none">
                    <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> Menu </a>
                    <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                        <a class="dropdown-item" href="#top">Dasfsafshboard</a>
                        <a class="dropdown-item" href="#top">Profile</a>
                        <a class="dropdown-item" href="#top">Tasks</a>
                        <a class="dropdown-item" href="#top">Etc..</a>
                    </div>
                </li><!--Menu for smaller devices END -->
            </ul>
        </div>
    </nav><!-- NavBar END -->
    <!-- Bootstrap row -->
    <div class="row" id="body-row">
        <!-- Seitenleiste -->
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <!-- d- * hides the sidebar in smaller devices. The entries can be saved in the navbar menu -->
            <!-- Bootstrap -->
            <ul class="list-group">
                <!-- Separator with title -->
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>MAIN MENU</small>
                </li>
                <!-- / END Separator -->
                      
                <!-- Menu with submenu -->
                <a href="#submenu1" data-toggle="collapse" aria-expanded="false"
                    class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justyfy-content-start align-items-center">
                        <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
                        <span class="menu-collapsed">Dashboard</span>
                        <span class="fas fa-angle-down ml-auto"></span>
                    </div>
                </a>
                <!-- Content of the submenu -->
                <div id="submenu1" class="collapse sidebar-submenu">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Charts</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Reports</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Tables</span>
                    </a>
                </div>
                <a href="#submenu2" data-toggle="collapse" aria-expanded="false"
                    class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fas fa-user fa-fw mr-3"></span>
                        <span class="menu-collapsed">Clients</span>
                        <span class="fas fa-angle-down ml-auto"></span>
                    </div>
                </a>
                <!-- Content of the submenu -->
                <div id='submenu2' class="collapse sidebar-submenu">
                    <a href="clients.php" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Client's Cards</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Password</span>
                    </a>
                </div>
                <a href="#" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fas fa-tasks fa-fw mr-3"></span>
                        <span class="menu-collapsed">Tasks</span>
                    </div>
                </a>
                <!-- Separator with title -->
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>OPTIONS</small>
                </li>
                <!-- /END Separator -->
                <a href="#" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fas fa-calendar fa-fw mr-3"></span>
                        <span class="menu-collapsed">Calendar</span>
                    </div>
                </a>
                <a href="#" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="far fa-envelope fa-fw mr-3"></span>
                        <span class="menu-collapsed">Messages <span
                                class="badge badge-pill badge-primary ml-2">5</span></span>
                    </div>
                </a>
                <!-- Separator without title -->
                <li class="list-group-item sidebar-separator menu-collapsed"></li>
                <!-- /END Separator -->
                <a href="#" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-question fa-fw mr-3"></span>
                        <span class="menu-collapsed">Help</span>
                    </div>
                </a>
                <a href="#top" data-toggle="sidebar-colapse"
                    class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                        <span id="collapse-text" class="menu-collapsed">Collapse</span>
                    </div>
                </a>
            </ul><!-- List Group END-->
        </div> <!-- Sidebar container END -->
        <!-- MAIN -->
        <div class="col p-4">
            <h1 style="color:white;" class="display-4">Welcome Sotiris</h1>
            <div class="card">
                <h5 class="card-header font-weight-light">Calendar</h5>

                <div class="card-body">
                    <iframe
                        src="https://calendar.google.com/calendar/embed?src=rafaelefstathiou%40gmail.com&ctz=Asia%2FNicosia"
                        style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                </div>
            </div><!-- Main Col END -->
        </div><!-- body-row END -->
 </div>
</body>
</html>