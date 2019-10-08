<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  <h1>Simple Calculator</h1>
  <form action="calc.php" method="POST">
    <div class="form-group">
      <label for="num1">Number 1</label>
      <input type="text" class="form-control" name="num1" value="">
    </div>
    <div class="form-group">
      <label for="num2">Number 2</label>
      <input type="text" class="form-control" name="num1" value="">
    </div>
    <div class="form-group">
      <label for="cal">Method</label>
      <select type="text" class="form-control" name="cal" value="">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>