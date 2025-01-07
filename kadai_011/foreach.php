<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$vegetable = array(
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
);

echo "名前: " . $vegetable["名前"] . "<br>";
echo "値段: " . $vegetable["値段"] . "<br>";
echo "産地: " . $vegetable["産地"] . "<br>";
?>

</body>
</html>