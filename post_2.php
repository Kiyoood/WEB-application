<?php
$con1=$_POST['con1'];
$con2=$_POST['con2'];
$con3=$_POST['con3'];
if(!$con1)exit('<script language="javascript"> alert("Please fill in the first name.");window.history.back();</script>');
if(!$con2)exit('<script language="javascript"> alert("Please fill in your last name!");window.history.back();</script>');
if(!$con3)exit('<script language="javascript"> alert("Please fill in your email address!");window.history.back();</script>');
$time = date('Y-m-d');
$file = './data/'.$con3.'.json'; 
 // 指定文件路径
 // 使用 file_exists() 函数检查文件是否存在，并存储布尔值
 $file_exists = file_exists($file);
 // 输出结果
 if ($file_exists) {
    echo '<script language="javascript"> alert("You have already submitted the information, please do not submit it repeatedly, pay attention to the email information!!");window.history.back();</script>';
} else {
$arr = [
    "con1" =>$con1,
    "con2" =>$con2,
    "con3" =>$con3,
    "time"=>$time
];
$arr=json_encode($arr);//将 PHP 变量转换为 JSON 格式
$numbytes = file_put_contents($file, $arr); //创建文件
echo '<script language="javascript"> alert("If the submission is successful, please pay attention to the email information! ");window.location.href=\'3_1.html\';</script>';

}
?>