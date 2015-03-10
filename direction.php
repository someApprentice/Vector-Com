<?php
require_once 'autoload.php';
require_once 'departments.php';
?>

<?php
$direction = new Direction();
$direction->departments[] = $procurement;
$direction->departments[] = $sales;
$direction->departments[] = $advertising;
$direction->departments[] = $logistics;
?>
<pre>
	<?php //print_r($direction); ?>
</pre>