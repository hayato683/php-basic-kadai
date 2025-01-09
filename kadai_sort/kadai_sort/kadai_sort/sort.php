<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
<?php
function customSort($nums, $order = 'asc') {
    
    if ($order === 'asc') {
        echo "昇順にソートします:\n";
        
        sort($nums);
    } elseif ($order === 'desc') {
        echo "降順にソートします:\n";
        
        rsort($nums);
    } else {
        echo "無効なソート順です。\n";
        return;
    }

    
    foreach ($nums as $num) {
        echo $num . "\n";
    }
}


$nums = [15, 4, 18, 23, 10];
customSort($nums, 'asc');  
echo "\n";  
customSort($nums, 'desc'); 
?>

  

</body>
</html>