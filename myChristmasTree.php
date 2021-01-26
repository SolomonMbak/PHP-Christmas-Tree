<style type="text/css">
	body{
		color:red;
	}
</style>

<center>
<?php
// The tree
for($x=1;$x<=17;$x++){
	for($y=1;$y<=$x;$y++){
		echo "*";
	}
	echo "<br />";
}

// The trunk
for($x=1;$x<=6;$x++){
	echo "*****<br />";
}

?>
</center>