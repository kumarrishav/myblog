<?php
//session_start();
//if(isset($_SESSION['USER']))
{

include("connection.php");
 $name=$_POST['name'];
 $email=$_POST['email'];
 $comment=$_POST['message'];
 $blog_id=$_POST['blog_id'];

 //$use=$_SESSION['USER'];
 
 //$result = mysql_query("Select user_id From user where username='$use'");
// $id=mysql_fetch_array($result)['user_id'];
 $query="INSERT INTO blog_comment"."(blog_id,name,email,comment,comment_timestamp)"."VALUES('$blog_id','$name','$email','$comment',NOW())";
 if(mysql_query($query))
 header("Location: detail.php?id=".$blog_id);
 else
 header("Location: detail.php?id=".$blog_id);

 }
 /*
else
{

			echo "<script>"."alert('<??????  First Login in your Account ??????>')"."</script>";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=signup.php">';
}*/

?>