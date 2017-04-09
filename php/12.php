<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            width: 200px;
            height: 200px;
            background-color: pink;
        }
    </style>
    <?php 
        //数据库获取到的数据在一个数组里,把这些数据获取到后输出到table标签里

        $arr = array(
            array("name"=>"李雷","age"=>18,"sex"=>"男"),
            array("name"=>"韩梅梅","age"=>18,"sex"=>"女")
        )
    ?>
</head>
<body>
        <table>
            <tr>
                <td>姓名</td>
                <td>年龄</td>
                <td>性别</td>
            </tr>
            <?php for($i=0;$i<count($arr);$i++){?>
                <tr>
                    <td>
                        <?php echo $arr[$i]["name"]; ?>
                    </td>
                    <td>
                        <?php echo $arr[$i]["age"]; ?>
                    </td>
                    <td>
                        <?php echo $arr[$i]["sex"]; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
</body>
</html>