<?php include'partials/header.php'; 
	$heading = "Time Zone Converter – Time Difference Calculator";
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


<div class="search">
         <form action="header.php" id="frmSearch">
          <input class="search" id="txtSearch" type="text" placeholder="Search.." name="search">
         <button class="sumit" type="submit"><i class="fa fa-search"></i></button>
         </form>
       </div>
    
<?php include'partials/footer.php'?>
