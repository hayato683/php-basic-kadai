<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- confirm.php -->
<?php
// フォームから送られたデータを受け取る
$employee_name = htmlspecialchars($_POST['employee_name']);
$employee_age = htmlspecialchars($_POST['employee_age']);
$department = htmlspecialchars($_POST['department']);

// 部署名を表示
if ($department == 'development') {
    $department_name = '開発部';
} elseif ($department == 'sales') {
    $department_name = '営業部';
} else {
    $department_name = '人事部';
}
?>

<h2>入力内容の確認</h2>

<table border="1">
  <tr>
    <th>社員名</th>
    <td><?php echo $employee_name; ?></td>
  </tr>
  <tr>
    <th>年齢</th>
    <td><?php echo $employee_age; ?></td>
  </tr>
  <tr>
    <th>所属部署</th>
    <td><?php echo $department_name; ?></td>
  </tr>
</table>

<form action="complete.php" method="POST">
  <input type="hidden" name="employee_name" value="<?php echo $employee_name; ?>">
  <input type="hidden" name="employee_age" value="<?php echo $employee_age; ?>">
  <input type="hidden" name="department" value="<?php echo $department; ?>">

  <button type="submit">確定</button>
</form>

<form action="form.php" method="get">
  <button type="submit">キャンセル</button>
</form>

  
</body>
</html>