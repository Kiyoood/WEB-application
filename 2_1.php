<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        html,body{
        padding: 0;
        margin: 0;
    }
    .nav{
        width: auto;
        height: 80px;
        display: flex;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 1);
        flex-direction: row;
    }
        a{
        color: black;
     text-decoration: none;   
    }
</style>
<body>
    <div class="nav">
        <p style="margin: 0;font-size: 20px;font-weight: bold;margin-left: 30px;margin-top: 25px;margin-right: 10px;width: 300px;">Posts & Messages</p>
        <div style="width: 100%;"></div>
        <div style="align-items: center;display: flex;">
        <a href="./2_2.html"><img src="./img/2.svg" style="width: 50px;height: 50px;margin-right: 30px;"></a>
    </div>
    </div>
    <div style="width: 100%;display: flex;flex-direction: column;align-items: center;">
    <?php
    $file = fopen("file.json", "r"); // 打开文件
    while(!feof($file)) { // 循环读取文件内容
        $line = fgets($file); // 读取文件的一行
        $arr = json_decode($line, true);// 将获取到的 JSON 数据解析成数组
        $name = $arr['name'];//将数组的其中一条数据读取出来
        $txt=$arr['txt'];
        $time=$arr['time'];
        if($name!=""){
        echo '
        <div style="width: 80%;height: 200px;display: flex;flex-direction: column;box-shadow: 0 1px 2px rgba(0, 0, 0, 3);margin-top: 30px;border-radius: 5px;">
        <div style="display: flex;flex-direction: row;align-items: center;">
        <p style="width: 10%;font-size: 20px;font-weight: bold;margin-left: 30px;">'.$name.'</p>
        <div style="width: 100%;"></div>
        <p style="width: 10%;font-size: 10px;font-weight: bold;margin-right: 30px;">'.$time.'</p>
        </div>
        <p style="margin: 0;font-size: 15px;margin-right: 30px;margin-top: 10px;margin-left: 30px;margin-right: 10px;margin-bottom: 10px;">'.$txt.'</p>
      </div>
        ';
    }
    }
    fclose($file); // 关闭文件
    ?>
    </div>
</body>
</html>