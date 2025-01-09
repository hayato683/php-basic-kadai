<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
  <?php
function customSortAndPrint($nums) {
    
    echo "昇順にソートします:\n";
    
    
    $n = count($nums);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            
            if ($nums[$j] > $nums[$j + 1]) {
                
                $temp = $nums[$j];
                $nums[$j] = $nums[$j + 1];
                $nums[$j + 1] = $temp;
            }
        }
    }
    
    
    foreach ($nums as $num) {
        echo $num . "\n";
    }
}


$nums = [15, 4, 18, 23, 10];
customSortAndPrint($nums);
?>

</p>
</body>
</html>