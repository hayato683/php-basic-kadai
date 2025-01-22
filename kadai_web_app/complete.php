<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php

$employee_name = htmlspecialchars($_POST['employee_name']);
$employee_age = htmlspecialchars($_POST['employee_age']);
$department = htmlspecialchars($_POST['department']);


if ($department == 'development') {
    $department_name = '開発部';
} elseif ($department == 'sales') {
    $department_name = '営業部';
} else {
    $department_name = '人事部';
}
?>

<h2>登録が完了しました</h2>


<p>社員情報がデータベースに保存されました。</p>

<form action="form.php" method="get">
  <button type="submit">戻る</button>
</form>

  
</body>
</html>