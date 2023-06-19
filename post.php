<?php
$name=$_POST['name'];
$txt=$_POST['txt'];
if(!$name)exit('<script language="javascript"> alert("The name can’t be emptied.");window.history.back();</script>');
if(!$txt)exit('<script language="javascript"> alert("The comments can’t be emptied!");window.history.back();</script>');
$time = date('Y-m-d');
$file = './file.json'; 
$arr = [
    "name" =>$name,
    "txt" =>$txt,
    "time"=>$time
];
$arr=json_encode($arr);//将 PHP 变量转换为 JSON 格式
// 打开文件，使用追加模式写入
if ($handle = fopen($file, 'a')) {
    // 写入文本
    fwrite($handle, $arr."\r\n");

    // 关闭文件
    fclose($handle);

    echo '<script language="javascript"> alert("System notification Send Successful! ");window.location.href=\'2_1.php\';</script>';
} else {
    echo '<script language="javascript"> alert("Failure !!");window.history.back();</script>';
}
?>