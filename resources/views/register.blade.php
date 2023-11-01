<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form method="post" action="/register">
        @csrf
      username<input type="text" placeholder="name" name="username">
      email <input type="email" placeholder="email" name="email">  
      <input type="submit" value="submit">
    </form>
</body>
</html>