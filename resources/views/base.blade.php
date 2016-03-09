<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
  #navbar  a {
    color: white;
}
  </style>
</head>
<body style="background: #1F3749;padding-top: 70px;">
<nav class="navbar navbar-inverse navbar-fixed-top" style="background: #F34744">
   <div class="container-fluid" >
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
          <ul class="nav navbar-nav">
            <li><a href="#" style="color:white">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#" style="color:white">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          
        </div>
   </div>
</nav>
<div class="container col-lg-10 col-md-offset-1" style="border-top: 5px solid #F34744;background: WHITE;padding-left: 50px;padding-right: 50px">
	@yield('content')
</div>
</body>
</html>