<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My First Bootstrap project</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link href="blog_list.css" rel="stylesheet">
	<script>
	function visible()
	{
	if(document.getElementById('comment').style.display=='block')
	document.getElementById('comment').style.display='none';
	else if(document.getElementById('comment').style.display=='none')
	document.getElementById('comment').style.display='block';
	}
	</script>
	</head>
	<body>
		<!--HEADER OF BLOG-->
<?php include('templete.php')?>
	<div class="container">
		<div class="row">
			<div class="span8">
				<div class="col-md-9">
					
<?php
include ("connection.php");
$detail= $_GET['id'];//blog_id
$sql="SELECT blog_id,blog_topic,tag1,tag2,tag3,tag4,blog_desc,blog_timestamp FROM blog_post WHERE blog_id='$detail'";
$loop=mysql_query($sql,$dbc);
/*
$row=mysql_fetch_assoc($loop);
print_r($row);
*/
if($loop === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
$row = mysql_fetch_array($loop);
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
				<p>".$row['blog_desc']."</p>
				<p><a class='btn btn-read-more' href='main.php'>Other Posts</a></p>
			</div>
		</div>
	</div>
</div></div></div></div></div>";
?>

<div id='comment_back' style='background:#0088cc;width:63%;height:50px;color:white;font-size:40px;font-family:Brush Script Std;'>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comments
</div>
<br><br>
	<div class="container">
		<div class="row">
			<div class="span8">
				<div class="col-md-9">
<?php
$sql1="SELECT name,comment,comment_timestamp FROM blog_comment WHERE blog_id='$detail'";
$loop1=mysql_query($sql1,$dbc);
/*
$row=mysql_fetch_assoc($loop);
print_r($row);
*/
if($loop1 === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
while($row1 = mysql_fetch_array($loop1))
{
  echo "<div class='row'>
			<div class='col-md-12'>";
  echo  "<div class='row'>
			<div class='col-md-12'>
			<hr width='610px' style='border-style:dotted'>
					<a href='#'><img src='img/car.jpg' alt='' width='40px' height='40px' class='img-responsive'></a>
				<span class='glyphicon glyphicon-user'></span><a href='#'>".$row1['name']."</a><br> 
				<span class='glyphicon glyphicon-calendar'></span>".$row1['comment_timestamp']."
			</div>
		</div>";
  echo "<div class='row post-content'>
			<div class='col-md-12'>
				<p>".$row1['comment']."</p>
			</div>
		</div>
	</div>
</div>";
}
echo "</div></div></div></div>";
   
?>
<div class="container">
	<div class='row'>
		<div class='col-md-12'>
			<div class='row'>
				<div class='col-md-12'>
				<div class='col-md-9' onclick="visible()">
						<p><hr width='610px' ><a class='btn btn-read-more'>ADD COMMENT</a></p>
					</div>
				</div>
			</div>
		</div>
<div id="comment" style="display:none;">
<div class="container">
	<form class="well span8" action="comment.php" method="post">
        <div class="row">
            <div class="span3">
                <label>Name</label> <input class="span3" name="name" placeholder="Name" type="text">
                <label>Email</label> <input class="span3" name="email" placeholder="Your email address" type="text">
				<input class="hidden" name="blog_id" style="display:none" value="<?php echo $detail?>">
            </div>
    
            <div class="span5">
                <label>Message</label> 
                <textarea class="input-xlarge span5" id="message" name="message" rows="10"></textarea>
            </div>
			<button class="btn btn-primary pull-right" type=
            "submit" onclick="document.getElementById('comment').style.display='none';">Send</button>
        </div>
    </form>
</div>
</div>
	
<?php include('templete_footer.php') ?>

		<!--<script src="jquery-1.10.1.min.js"></script>
		<script src="js/bootstrap.js"></script>-->
	</body>
</html>