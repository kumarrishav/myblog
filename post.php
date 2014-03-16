<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My First Bootstrap project</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link href="blog_list.css" rel="stylesheet">
	</head>

	<body>

		<!--HEADER OF BLOG-->
	<div class="container">
		<h1><a href="#">Connect NIT</a></h1>
		<hr class="colorgraph">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">ADMIN</a></li>
						<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		<hr class="colorgraph">
	</div>
			<!--HEADER ENDS-->
<div class="container">
	<div class="row">
		<form action="post_save.php" method="POST">
            <fieldset>
                <input type="text" id="name" name="name" class="input-block-level" placeholder="Topic">
                <select class="span3" id="subject" name="subject1">
				<option selected value="na">Choose One:</option><option value="service">General Customer Service</option>
				</select>
				<select class="span3" id="subject" name="subject2">
				<option selected value="na">Choose One:</option><option value="service">General Customer Service</option>
				</select>
				<select class="span3" id="subject" name="subject3">
				<option selected value="na">Choose One:</option><option value="service">General Customer Service</option>
				</select>
				<select class="span3" id="subject" name="subject4">
				<option selected value="na">Choose One:</option><option value="service">General Customer Service</option>
				</select>
                <textarea rows="10" id="description" name="description" class="input-block-level" placeholder="YourBlog"></textarea>
                <button type="submit" class="btn btn-warning pull-right">Submit</button>
            </fieldset>
        </form>
	</div>
</div>
<?php include('templete_footer.php') ?>
</body>
</html>
