<?php
$name=$_POST['name'];
if(!$name)exit('<script language="javascript"> alert("The name can’t be emptied.");window.history.back();</script>');
if($name=="Materials Engineering Centre"){
    include('./1_1.html');
}else{
    echo '<script language="javascript"> alert("no relevant content");window.history.back();</script>';
}
?>