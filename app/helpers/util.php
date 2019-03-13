<?php 
function select($name,$options,$value=0,$class=''){
$select="<select name='$name' class='$class'>";
$select.="<option value=''>Select</option>";  
foreach ($options as $key => $value) {
    $select.="<option value='".$key."'>".$value."</option>";
}
$select.="</select>";
return $select;
}
 ?>
