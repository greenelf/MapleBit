<?php 
if(basename($_SERVER["PHP_SELF"]) == "banner.php"){
    die("403 - Access Forbidden");
}
if($_SESSION['admin']){
	if(!isset($_POST['url'])) {
		echo "<h2 class=\"text-left\">Site Banner</h2><hr/>
		<p>Many sites have a banner at the top of the page to make the website more personalized. There is not a default image size, but you may want to play around with some sizes to see what you like.</p>
		<p>To upload an image, please go to <a href=\"http://www.imgur.com\">imgur.com</a>, and then enter in the image url below. The URL will look like this: i.imgur.com/abcdefghi.jpg. Of course, you may use any other website to host your image.</p><hr/>
		<form method=\"post\">
			<div class=\"form-group\">
				<label for=\"inputURL\">Banner URL</label>
				<input type=\"text\" class=\"form-control\" name=\"url\" id=\"inputURL\" placeholder=\"Enter image URL\" value=\"".$banner."\">
			</div>
			<hr/>
			<button type=\"submit\" class=\"btn btn-primary\" required>Submit &raquo;</button>
		</form>
		";	
	}
	else {
		$url = mysql_escape($_POST["url"]);
		$mysqli->query("UPDATE ".$prefix."properties SET banner='$url'");
		echo "<div class=\"alert alert-success\">Successfully updated banner.</div>";
		redirect_wait5("?base=admin");
	}
} else{
	redirect("?base");
}
?>