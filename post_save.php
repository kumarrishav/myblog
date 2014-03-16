<?php
//session_start();
//if(isset($_SESSION['USER']))
{

include("connection.php");
 $title=$_POST['name'];
 $desc=$_POST['description'];
 $tag1=$_POST['subject1'];
 $tag2=$_POST['subject2'];
 $tag3=$_POST['subject3'];
 $tag4=$_POST['subject4'];
 $query="INSERT INTO blog_post"."(blog_topic,tag1,tag2,tag3,tag4,blog_desc,blog_timestamp)"."VALUES('$title','$tag1','$tag2','$tag3','$tag4','$desc',NOW())";
 if(mysql_query($query))
 header("Location: post.php");
 else
 die(mysql_error());

 }
 /*
else
{

			echo "<script>"."alert('<??????  First Login in your Account ??????>')"."</script>";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=signup.php">';
}*/

?>