<?php

/*
	Create a script that saves in the 'last_access.log' file the timestamp of this time (now).

	Everytime someone access the page you should save 'Access file : xxxx-xx-xx' (with hours minutes and seconds)

	Choose the right setting to open the file.
*/
$file_add = fopen('last_access.log', 'a');

if (file_exists('last_access.log')) {
	$time = date('Y.m.d  H:i:s');
	fwrite($file_add, "Access file : $time \r\n");
	fclose($file_add);
}


?>
<h3>Main page</h3>

<form method='post'>
	<input type="submit" name="submitBtn" value='My time access'>
</form>

<?php
if (isset($_POST['submitBtn'])) {
	if (file_exists('last_access.log')) {
		$file_read = fopen('last_access.log', 'r');
		$last_time = '';
		while (!feof($file_read)) {
			$time_line = fgets($file_read);
			if (!empty($time_line)) {
				$last_time = $time_line;
			}
		}
	}
	fclose($file_read);
	echo "<p> $last_time </p>";
}

?>