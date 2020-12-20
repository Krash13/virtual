<?php
$content = "
<input type='text' id='input' onkeyup='input()'>
<p id='block'></p>
<br><br>       
<input type='file' onchange='readFile(this)'>
 
<script> 
function input() {
    var input_taker = document.getElementById('input').value;
    document.getElementById('block').innerHTML = input_taker.toUpperCase();
  } 
  document.write(reader.result.toUpperCase());
 
function readFile(input) {
  let file = input.files[0];
 
  let reader = new FileReader();
 
  reader.readAsText(file);
 
  reader.onload = function() {
    document.write(reader.result.toUpperCase());
 
  };
 
}
</script>
";
echo $content;
?>
