<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My First Bootstrap project</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link href="blog_list.css" rel="stylesheet">
	</head>

	<body>
<?php include('templete.php');?>
	<div class="container">
		<div class="row">
			<div class="span8">
				<div class="col-md-9">
					
<?php
include ("connection.php"); 
$sql="SELECT blog_id,blog_topic,tag1,tag2,tag3,tag4,blog_desc,blog_timestamp FROM blog_post";
$loop=mysql_query($sql,$dbc);
/*
$row=mysql_fetch_assoc($loop);
print_r($row);
*/
if($loop === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
while($row = mysql_fetch_array($loop))
  {
  echo "<div class='row'>
			<div class='col-md-12 post'>
				<div class='row'>
					<div class='col-md-12'>
						<h4><strong><a href='detail.php?id=".$row['blog_id']."' class='post-title'>".$row['blog_topic']."</a></strong></h4>
					</div>
				</div>";
  echo  "<div class='row'>
			<div class='col-md-12 post-header-line'>
				<span class='glyphicon glyphicon-user'></span>by <a href='#'>Kumar rishav</a> | 
				<span class='glyphicon glyphicon-calendar'></span>".$row['blog_timestamp']." | 
				<span class='glyphicon glyphicon-comment'></span><a href='#'>2comments</a> |
				<span class='glyphicon glyphicon-tags'></span>Tags : 
				<a href='#'><span class='label label-info'>".$row['tag1']."</span></a> 
				<a href='#'><span class='label label-info'>".$row['tag2']."</span></a>
				<a href='#'><span class='label label-info'>".$row['tag3']."</span></a>
				<a href='#'><span class='label label-info'>".$row['tag4']."</span></a>
			</div>
		</div>";
	
 
  echo "<div class='row post-content'>
			<!--<div class='span4'>
				<div class='col-md-3'>
					<a href='#'><img src='car.jpg' alt='' class='img-responsive'></a>
				</div>
			</div>-->
			<div class='col-md-9'>
				<p>".substr($row['blog_desc'], 0, 800).".....</p>
				<p><a class='btn btn-read-more' href='detail.php?id=".$row['blog_id']."'>Read more</a></p>
			</div>
		</div>
	</div>
</div>";
	}
   
?>
			</div>
        </div>
    </div>
</div>
<?php include('templete_footer.php') ?>

		<!--<script src="jquery-1.10.1.min.js"></script>
		<script src="js/bootstrap.js"></script>-->
	</body>
</html>