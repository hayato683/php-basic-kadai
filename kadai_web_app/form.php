<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>社員情報入力フォーム</h1>
<form action="confirm.php" method="POST">
  <label for="employee_name">社員名:</label>
  <input type="text" id="employee_name" name="employee_name" placeholder="社員の氏名を入力"><br>

  <label for="employee_age">年齢:</label>
  <input type="text" id="employee_age" name="employee_age" placeholder="年齢を入力"><br>

  <label for="department">所属部署:</label>
  <select id="department" name="department">
    <option value="development" selected>開発部</option>
    <option value="sales">営業部</option>
    <option value="hr">人事部</option>
    
  </select>
<br>
  <button type="submit">送信</button>
</form>

  
</body>
</html>