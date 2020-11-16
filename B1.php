<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $text=$_POST['arr'];
            $arr=explode(",",$text);
            $total=0;
            $arr1=array();
            $n=$_POST['n'];
            for($i=0;$i<$_POST['n'];$i++){
                $arr1[]=$arr[$i];
                $arr1[]=$arr[$n+$i];
                $arr1[]=$arr[$n*2+$i];
            }
            print_r($arr1);
        }
    ?>
    <form action="" method="post">
        <span>Nhap n:</span>
        <input type="text" name="n" id="">
        <span>Nhap mang vd:1,2,3,4,5,5</span>
        <input type="text" name="arr" id="">
        <button name="submit">Submit</button>
    </form>
</body>
</html>