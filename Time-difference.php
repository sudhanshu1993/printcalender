<?php include'partials/header.php'; 
	$heading = "Time Differences between a Location and Time Zones Worldwide";
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
<div class="container">
<div id="dd">
</div>
  
</div>
  

		<div class="container">

       <label for="browser">Choose your browser from the list:</label>


  <input list="AllColors" type="text"  name="browser" id="SelectColor">
  <datalist id="AllColors">
      <?php
      $file = fopen("countries.csv", "r");
while (($data = fgetcsv($file)) !== false) {



$string = $data[2];
$str_arr = explode(",", $string);

  //echo "<option value=".$data[0]." id=".$data[0].">";
  echo "<option value=".d($str_arr[2], "gmtOffsetName:'", "'").">".$data[0]."</option>";

}
fclose($file);
?>
<script>

$("#SelectColor").change(function(){

  var el=$("#SelectColor")[0];  //used [0] is to get HTML DOM not jquery Object
  var dl=$("#AllColors")[0];
  if(el.value.trim() != ''){
  var opSelected = dl.querySelector(`[value="${el.value}"]`);
  //alert(opSelected.getAttribute('id'));
 }
});
</script>


  </datalist>
    </div>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<script type="text/javascript" >
$('#SelectColor').change(function()
  {
    //alert($(this).val())
  
    $('#dd').text($(this).val());
  });
//   $("#browser").change(function(){

//     var el=$("#browser")[0];  //used [0] is to get HTML DOM not jquery Object
//     var dl=$("#browsers")[0];
//     if(el.value.trim() != ''){
//     var opSelected = dl.querySelector(`[alue="${el.value}"]`);
//     alert(opSelected.getAttribute('id'));
//     $('#dd').text("hello");

//  }
  
// });
   $(document).ready(function(){
function dd(){
         $("#dd").text("Hello world!");
      }
  });

</script>
<?php include'partials/footer.php'?>

