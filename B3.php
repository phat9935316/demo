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
            $total=9999999999999999;
            for($i=0;$i<sizeof($arr)-1;$i++){
                for($j=$i+1;$j<sizeof($arr);$j++){
                    $s=abs($arr[$j]-$arr[$i]);
                    if($s<$total)
                        $total=$s;
                }
            }
            for($i=0;$i<sizeof($arr)-1;$i++){
                for($j=$i+1;$j<sizeof($arr);$j++){
                    $s=abs($arr[$j]-$arr[$i]);
                    if($s==$total){
                        $arr1=$arr[$i];
                        $arr2=$arr[$j];
                        echo("[$arr1,$arr2]");
                    }
                }
            }
            // echo($s);
        }
    ?>
    <form action="" method="post">
        <span>Nhap mang vd:1,2,3,4,5,5</span>
        <input type="text" name="arr" id="">
        <button name="submit">Submit</button>
    </form>
</body>
</html>