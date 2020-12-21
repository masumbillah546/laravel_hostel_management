<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	@font-face {
  font-family: myFirstFont;
  src: url({{asset('font/Helvetica-BoldOblique.ttf')}});
}

h1 {
  font-family: myFirstFont;
  color: #FD7444;
}


.project-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    color: #fff;
    top: 80%;
    left: 20%;
}
  </style>
 
</head>
<body>

<nav class=" navbar-inverse" style="background-color: #32527D">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color: white" onMouseOver="this.style.color='#85E3EB'"  onMouseOut="this.style.color='white'" href="#">Himanto Student Hostel</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a style="color: white" onMouseOver="this.style.color='#85E3EB'"  onMouseOut="this.style.color='white'" href="/">Home</a></li>
         <li class=""><a style="color: white" onMouseOver="this.style.color='#85E3EB'"  onMouseOut="this.style.color='white'" href="/">Gallery</a></li>
        <li><a style="color: white" onMouseOver="this.style.color='#85E3EB'"  onMouseOut="this.style.color='white'" href="#">About</a></li>
        <li><a style="color: white" onMouseOver="this.style.color='#85E3EB'"  onMouseOut="this.style.color='white'" href="#contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a style="color: white" onMouseOver="this.style.color='#85E3EB'"  onMouseOut="this.style.color='white'" href="/login2"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a style="color: white" onMouseOver="this.style.color='#85E3EB'"  onMouseOut="this.style.color='white'" href="/admission"><span class="glyphicon glyphicon-log-in"></span> Admission</a></li>
      </ul>
    </div>
  </div>
</nav>