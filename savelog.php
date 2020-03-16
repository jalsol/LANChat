<?php
	if(isset($_POST['content'])) {
		$f = fopen('log.txt', 'a+');
		fwrite($f, $_POST['content']);
		fclose($f);
	}
	
	$c = file_get_contents('log.txt');
	echo $c;
?>