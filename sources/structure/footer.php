<?php
if(basename($_SERVER["PHP_SELF"]) == "footer.php"){
    die("403 - Access Forbidden");
}
?>
	</div>
<br/>
</div></div>
<footer>
	<div class="container">
		<p class="text-center">Proudly powered by MapleBit | <a href="http://forum.ragezone.com/members/1333360872.html">greenelf(x) &raquo;</a></p><br/>
	</div>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $siteurl; ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $siteurl; ?>assets/js/login.js"></script>
<script>
	function roll(img_name1, img_src1) {document[img_name1].src = img_src1;}
	function goBack() {window.history.back()}
</script>
</body>
</html>