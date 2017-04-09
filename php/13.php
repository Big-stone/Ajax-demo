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
</head>
<body>
    <div>
        <?php if(false){ ?>
            <div>hello world</div>
        <?php } ?>

        <?php for($i=0;$i<10;$i++){ ?>
                <div class="box">
                    你好，世界;
                    <?php echo $i ?>
                </div>
        <?php } ?>
    
    </div>
</body>
</html>