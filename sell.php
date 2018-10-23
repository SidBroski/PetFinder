<?php
session_start();
if( !isset($_SESSION["user"]) ){
	echo 'Login first';
}
else
{
echo'
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Bookstore</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById("output_image");
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
<style>
#output_image
{
 max-width:100px;
}
</style>
</head>




<body>
<div class="main">
<div class="page">
<div class="page-in">
<div class="header">
<div class="topmenu">
<ul>
  <li>
<a href="home.php">Home</a></li>
  <li><a href="sell.php">Sell book</a></li>
  <li><a href="buy.php">Buy book</a></li>
  <li><a href="account.php">Manage account</a></li>
  <li><a href="contact1.html">Contact us</a></li>
   <li><a href="logout.php">Log out</a></li>
</ul>
</div>
<img src="images/9.jpg" alt="Bookstore" width="995" height="378">
</div>

<form name="myform" class="register" action="sellbook.php" method="post" enctype="multipart/form-data">
            <h1>Sell book</h1>
            <fieldset class="row1">
                <p>
                    <label>Name *
                    </label>
                    <input type="text" name="name" class="long" required>
                </p>
                <p>
                    <label>Author *
                    </label>
                    <input type="text" name="author" class="long" required>
                </p>
                <p>
                    <label>Edition*
                    </label>
                    <input type="text" name="edition" class="long" required>
                </p>
				<p>
                    <label>Publication *
                    </label>
                    <input type="text" name="pub" class="long" required>
                </p>
				<p>
                    <label>Price *
                    </label>
                    <input type="text" name="price" class="long" required>
                </p>
				<p>
                    <label>Photo *
                    </label>
                    <input type="file" name="photo" accept="image/*" onchange="preview_image(event)" required>
					</br>
					</br>
					<img id="output_image"/>
                </p>
            </fieldset>
            <div><button type="submit" class="button" value="Upload">Sell &raquo;</button></div>
<div><button type="reset" class="button">Clear &raquo;</button></div>

        </form>

<div class="footer">
<p class="copyright-text">&copy;Designed for IWP Project</p>
</div>
</div>
</div>
</div>
</body>
</html>';
}
?>