<?php include'partials/header.php'; 
	$heading = "The World Clock Time Search — Search for City, Place, or Country";
?>
<?php include'filter.php'; ?>
<div>
<?php
		function d($str, $word, $l)
		{
			$s = ltrim($str, $word);
			return rtrim($s, $l);
		}

?>

</div>




<br/>
<br/>
<br/>
<br/>
<br/>

<br/>
<?php include'partials/footer.php'?>
