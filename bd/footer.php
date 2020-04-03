<?php 
$path = "page/";
$page = (!empty($_GET['link'])) ? $_GET['link'] : "home";
if(file_exists($path.$page.'.php')){
	$load = $path.$page.'.php';
}else{
	$load = $path.'error.php?notfound='.$page;
}
?>
<script>
	$(document).ready(function(){
		$("main").load("<?php echo $load;?>");
		$("#navbar").load("bd/navbar.php");
		$("#sidebar").load("bd/sidebar.php");
	});
</script>
</body>
</html>