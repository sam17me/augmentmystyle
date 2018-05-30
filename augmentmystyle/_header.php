<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<title>Augment My Style</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible content="IE-edge">
<script  src="jquery-2.1.4.min.js"></script>
<script  src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<style>
 /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Augment My Style</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Wristwear</a></li>
      <li><a href="#">Headwear</a></li>
      <li><a href="#">BodyWear</a></li>
      <li><a href="#">Tech</a></li>
    </ul>
  </div>
</nav>
