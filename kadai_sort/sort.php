<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
<?php

function sort_2way($array, $order) {
   
    if ($order === 'asc') {
        
        sort($array);
        echo "昇順にソートしました:<br>";
    } elseif ($order === 'desc') {
        
        rsort($array);
        echo "降順にソートしました:<br>";
    } else {
        
        echo "無効なソート方向です。<br>";
        return;
    }

    
    foreach ($array as $value) {
        echo $value . "<br>"; 
    }
}


$nums = [15, 4, 18, 23, 10];


sort_2way($nums, 'asc');
echo "<br>";  


sort_2way($nums, 'desc');
?>
 
  

</body>
</html>