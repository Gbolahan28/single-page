<!DOCTYPE html>
<html>
	<head>

		<title>Email</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

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
	  font-size: 19px; /* Increased text to enable scrolling */
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
			<a href="/email.html">Multiple email</a>
			<a href="/index.html">Single email</a>
			<a href="/config.html">configuration</a>

		  </div>
	
		 
		
		<div class="main">
			<div class="content">
				<div>
					<h1 align="center">New Message</h1>
					<div class="form-group">
						<label>To:</label>
						<input type="email" name="yourEmail" value=""><br>
					</div>
					<div class="form-group">
						<label>Cc:</label>
						<input type="email" name="" id=""><br>
					</div>
					
					<div class="form-group">
						<label>Subject:</label>
						<input type="text" class="form-control" name="subject" placeholder="Hello">
					</div>
					
				</div>
			</div>
	<div class="main-content">
		<div class="text-editor-header">
			<button type="button" class="btn" data-element="bold"><i class="fa-solid fa-bold"></i></button>
			<button type="button" class="btn" data-element="italic"><i class="fa-solid fa-italic"></i></button>
			<button type="button" class="btn" data-element="underline"><i class="fa-solid fa-underline"></i></button>
			<button type="button" class="btn" data-element="insertImage"><i class="fa-solid fa-image"></i></button>
			<button type="submit" class="btn btn-primary" id="send"><i class="fa fa-paper-plane"></i> Send</button> 
			</div>
			

	</div>		

<div class="content-box" contenteditable="true">

</div>
			
				<script src="https://kit.fontawesome.com/49a6a6d1bd.js" crossorigin="anonymous"></script>
				<script src="/app.js"></script>
	</body>
	<footer>
	<p class="footer">Boughview Innovations</p>
	</footer>
</html>


