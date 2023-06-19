<?php
// 先设置Content-Type为PDF
header('Content-Type: application/pdf');

// 然后输出PDF文件内容
readfile('./img/campus_map_september_20204.pdf');
?>