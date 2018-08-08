<?php  
	include("app/process/controllers.php");
 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quartz TV || Movie List</title>
    
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />	
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery-3.2.1.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
	<nav class="navbar navbar-inverse" role="navigation">
		<div  class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#home" class="navbar-brand">Quartz TV</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#home">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Genre <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				            <li class="divider"></li>
				            <li><a href="#">One more separated link</a></li>
				        </ul>
					</li>
					<li><a href="#years">Years</a></li>
					<li><a href="#favorites">Favorites</a></li>
				</ul>
			</div>
		</div>
	</nav>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 sidemenu alert alert-danger">
				<form action="app/addMovie.php" method="post">
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" id="title" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Subtitle</label>
						<input type="text" name="subtitle" placeholder="Optional" id="title" class="form-control">
					</div>
					<div class="form-group">
						<label>Years</label>
						<input type="number" name="years" id="years" class="form-control" >
					</div>
					<div class="form-group">
						<label>Genre</label>
						<input type="text" name="genre" id="genre" class="form-control" required="">
					</div>
					<div>
						<label>p.s</label>
						<textarea name="note" placeholder="add some note" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="add" value="Add Movie" class="btn btn-success form-control">

					</div>
					<?php
					  // if(!empty($_GET['error'])){
					  // 	if($_GET['error'] == "add%movie%400"){
					  // 		echo "<div class='alert btn-danger'><center>Internal Server error 500</center></div>";
					  // 	}
					  // 	if ($_GET['success'] == "add%movie%200") {
							// 		echo "<div class='alert alert-success'>
							// 			<center>Success Add movie to the list</center>
							// 			</div>";
							// 	}
					  // }
					?>
				</form>

<!-- 				<div>
						$getData = mysql_query("SELECT * FROM movie");
						$row = mysql_num_rows($getData);
						$fetchData = mysql_fetch_array($getData);
								$result = count($fetchData);
								echo "<div><h3>".$result."<h3></div>";
				</div> -->
			</div>
	    	<div id="home" class="col-sm-9 jumbotron text-center">
				<h1>Quartz TV </h1>
				<marquee>
					<p>Insert all movies that you have ever seen</p>
				</marquee>
			</div>
			
		    <div class="col-sm-9">
		    	<table class="table table-striped table-hover">
		    		<thead>
		    			<tr>
		    				<td>#</td>
		    				<td>Title</td>
		    				<td>Subtitle</td>
		    				<td>Years</td>
		    				<td>Genre</td>
		    				<td>Note</td>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<?php
		    			  $query = mysql_query("SELECT * FROM movie");
		    			  $row = mysql_num_rows($query);
		    			  $num = 1;
		    			  if($row > 0) {
		    			  	while ($data = mysql_fetch_array($query)) {
		    			?>
		    			<tr>
		    				<td><?php echo $num; ?></td>
		    				<td><?php echo $data['title']; ?></td>
		    				<td><?php echo $data['subtitle']; ?></td>
		    				<td><?php echo $data['years']; ?></td>
		    				<td><?php echo $data['genre']; ?></td>
		    				<td><?php echo $data['note']; ?></td>
		    			</tr>	  		
	    			  	<?php
	    			  		$num++;
								}
							}else{
								echo "<tr><td class='text-center' colspan='8' valign='top'>No data available in this table</td></tr>";
							}
	    			  	?>
		    		
		    		</tbody>
		    	</table>
		    </div>
		</div>
	</div>

</body>

</html>