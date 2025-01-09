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
    // ソート順に応じた処理
    if ($order === 'asc') {
        echo "昇順にソートします:\n";
        // 昇順にソート
        sort($nums);
    } elseif ($order === 'desc') {
        echo "降順にソートします:\n";
        // 降順にソート
        rsort($nums);
    } else {
        echo "無効なソート順です。\n";
        return;
    }

    // ソート後の配列を1行ずつ表示
    foreach ($nums as $num) {
        echo $num . "\n";
    }
}

// 使用例
$nums = [15, 4, 18, 23, 10];
customSort($nums, 'asc');  // 昇順にソート
echo "\n";  // 空行で区切る
customSort($nums, 'desc'); // 降順にソート
?>

  

</body>
</html>