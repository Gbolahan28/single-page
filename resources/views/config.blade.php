<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>configuration</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<style>
	body {
	  font-family: "Lato", sans-serif;
	}
	
	.sidenav {
	  height: 100%;
	  width: 200px;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: #111;
	  overflow-x: hidden;
	  padding-top: 20px;
	}
	
	.sidenav a {
	  padding: 6px 8px 6px 16px;
	  text-decoration: none;
	  font-size: 19px;
	  color: #818181;
	  display: block;
	}
	
	.sidenav a:hover {
	  color: #f1f1f1;
	}
	
	.main {
	  margin-left: 160px; /* Same as the width of the sidenav */
	  font-size: 28px; /* Increased text to enable scrolling */
	  padding: 0px 10px;
	}
	
	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
	</style>
</head>
<body>

    <div class="sidenav">
		<a href="/index.html">Single email</a>
		<a href="/email.html">Multiple email</a>
		<a href="/config.html">configuration</a>
	  </div>
    

	  <script src="/app.js"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>configuration</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<style>
	body {
	  font-family: "Lato", sans-serif;
	}
	
	.sidenav {
	  height: 100%;
	  width: 200px;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: #111;
	  overflow-x: hidden;
	  padding-top: 20px;
	}
	
	.sidenav a {
	  padding: 6px 8px 6px 16px;
	  text-decoration: none;
	  font-size: 19px;
	  color: #818181;
	  display: block;
	}
	
	.sidenav a:hover {
	  color: #f1f1f1;
	}
	
	.main {
	  margin-left: 160px; /* Same as the width of the sidenav */
	  font-size: 28px; /* Increased text to enable scrolling */
	  padding: 0px 10px;
	}
	
	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
	</style>
</head>
<body>

    <div class="sidenav">
		<a href="/index.html">Single email</a>
		<a href="/email.html">Multiple email</a>
		<a href="/config.html">configuration</a>
	  </div>
    

	  <script src="/app.js"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>configuration</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<style>
	body {
	  font-family: "Lato", sans-serif;
	}
	
	.sidenav {
	  height: 100%;
	  width: 200px;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: #111;
	  overflow-x: hidden;
	  padding-top: 20px;
	}

	.container {
    height: 100%;
    position: absolute;
}

.sidebar {
    /* float: left; */
    width: 300px;
    height: 100%;
    background-color: #44a0b5;
    position: relative;
    left: 0;
    top: 0;
    
}

input, textarea, select {
    width: 100%;
}

.main {
    float: right;
    width: 80%;
    height: 100%;
    background-color: white;
    padding-top: 20px;
}

.content {
    padding: 50px 100px;
}

html {
    height: 100%;
}

body {
    height: 100%;
    margin: 0;
}

.sitename {
    text-align: center;
}

.sitename a {
    text-decoration: none;
    color: white;
}

.sitename a:hover {
    color: lightgray;
}

ul {
    width: 100%;
    margin: 0;
    padding: 0;
}

ul li {
    list-style: none;
    border-bottom: 1px solid white;
    padding-left: 30px;
    line-height: 60px;
}

ul li:first-child {
    border-top: 1px solid white;
}

ul li:hover {
    background-color: hotpink;
}

ul li a {
    text-decoration: none;
    color: white;
    display: block;
    line-height: 60px;
}

.active {
    background-color: #307b8b;
}

.footer {
    text-align: center;
}

.nav-item{
    padding: 0 18px;
}
.navbar{
    padding: 0 0 4.5rem;
}

.navbar-brand{
    font-family: "Ubuntu";
    font-size: 2.5rem;
    font-weight: bold;
}

.nav-item{
    padding: 0 18px;
}

.nav-link{
    font-size: 1.2rem;
    font-family: "Monserrat-light"
}


.select2-container--default .select2-selection--multiple {
    border: 1px solid #ccc
}
#message {
    height: 200px
}
#result,
#log {
    display: block;
    margin-bottom: 20px;
    background: #111;
    color: #fff;
    padding: 10px;
    height: 400px;
    overflow: auto
}

.text-editor-header {
    background-color: white;
    padding: 5px;
}

.text-editor-header .btn {
    border: none;
    outline: none;
    background-color: transparent;
    margin-right: 5px;
    cursor: pointer;
}

.main-content {
    width: 500px;
    position: absolute;
    left: 10%;
    transform: translateX(50%) translateY(50%);
    box-shadow: 0 5px 5px;
}

.content-box {
    min-height: 200px;
    border: 1px solid white;
    border-top: 0px;
    padding: 20px;
}
	
	.sidenav a {
	  padding: 6px 8px 6px 16px;
	  text-decoration: none;
	  font-size: 19px;
	  color: #818181;
	  display: block;
	}
	
	.sidenav a:hover {
	  color: #f1f1f1;
	}
	
	.main {
	  margin-left: 160px; /* Same as the width of the sidenav */
	  font-size: 28px; /* Increased text to enable scrolling */
	  padding: 0px 10px;
	}
	
	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
	</style>
</head>
<body>

    <div class="sidenav">
		<a href="/index.html">Single email</a>
		<a href="/email.html">Multiple email</a>
		<a href="/config.html">configuration</a>
	  </div>
    

	  <script src="/app.js"></script>
</body>
</html>