<?php
include("mysql_connect.php"); // here we include the connection script; since this file(header.php) is included at the top of every page we make, the connection will then also be included. Also, config options like BASE_URL are also available to us.

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  This CONSTANT is defined in your mysql_connect.php file. -->
  <title><?php echo APP_NAME; ?></title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



  <!-- Latest compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <!-- Google Icons: https://material.io/tools/icons/
  also, check out Font Awesome or Glyphicons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <!-- Your Custom styles for this project -->
  <!--  Note how we can use BASE_URL constant to resolve all links no matter where the file resides. -->
  <link href="<?php echo BASE_URL ?>css/styles.css" rel="stylesheet">
  <!-- Themes from https://bootswatch.com/ : Use the Themes dropdown to select a theme you like; copy/paste the bootstrap.css. Here, we have named the downloaded theme as a new file and can overwrite the default.  -->
  <link href="<?php echo BASE_URL ?>css/bootstrap-lumen.css" rel="stylesheet">

  <style type="text/css">
    html,
    body {
      height: 100%;
      background: linear-gradient(#3a3a3a, #8a8a8a, #3a3a3a);
    }

    @font-face {
      font-family: 'turtle';
      src: url(fonts/Turtles.otf),
        url(fonts/Turtles.woff);
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: 'turtle';
      font-size: 5rem;
      background: -webkit-linear-gradient(#003800, #8fd129);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .bg-turtle-red {
      background: #ed1c24;
      color: white;
      font-weight: 700;
      text-transform: uppercase;
      border-top: 3px solid black;
      border-bottom: 3px solid black;
      border-left: 0;
      border-right: 0;
    }

    .char-card {
      border: 2px solid gray;
      background: rgb(173, 159, 159);
      width: 75%;
      margin: 0 auto;
      margin-bottom: .75rem;
    }

    .char-card h3 {
      font-size: 2rem;
    }

    .char-card p:nth-child(2) {
      background: red;
      padding-left: 2rem;
      padding-right: 2rem;
      background: rgb(240, 218, 218);
      border-radius: 6px;
    }

    .type-style-turtle {
      background: rgb(46, 202, 46);
      padding: .3rem .5rem;
      border-radius: 6px;
    }

    .type-style-evil {
      background: black;
      color: white;
      padding: .3rem .5rem;
      border-radius: 6px;
    }

    .type-style-rat {
      background: rgb(240, 155, 28);
      padding: .3rem .5rem;
      border-radius: 6px;
    }

    .type-style-human {
      background: rgb(142, 243, 238);
      padding: .3rem .5rem;
      border-radius: 6px;
    }

    .type-style-ninja {
      background: rgb(236, 58, 236);
      padding: .3rem .5rem;
      border-radius: 6px;
    }

    .type-style-unknown {
      background: rgb(255, 192, 192);
      padding: .3rem .5rem;
      border-radius: 6px;
    }

    #style-links {
      color: white;
      text-transform: uppercase;
    }
  </style>

</head>

<body>


  <nav class="navbar navbar-expand-md navbar-dark bg-turtle-red mb-4 fixed-top">
    <a class="navbar-brand" href="<?php echo BASE_URL ?>index.php"><i class="material-icons" style="font-size:36px">home</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <!-- This is a placeholder link. You will need to change this to link to your files. -->
          <a class="nav-link" href="<?php echo BASE_URL ?>list.php">List</a>
        </li>
        <li class="nav-item active">
          <!-- This is a placeholder link. You will need to change this to link to your files. -->
          <a class="nav-link" href="<?php echo BASE_URL ?>search.php">Search</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo BASE_URL ?>admin/insert.php">Insert</a>
            <a class="dropdown-item" href="<?php echo BASE_URL ?>admin/edit.php">Edit</a>
            <!-- <a class="dropdown-item" href="<?php echo BASE_URL ?>#">Link</a> -->



          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <?php
          if (isset($_SESSION['PHP_Test_Secure'])) {
            echo "<a class=\"nav-link\" href=\"" .
              BASE_URL .
              "admin/logout.php\">Logout</a>";
          }
          ?>
        </li>
      </ul>
      <!-- Search Bar: 
        <form class="form-inline mt-2 mt-md-0">
          
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
  </nav>

  <main role="main" class="container">