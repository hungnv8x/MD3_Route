<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h1>edit Customer</h1>
<form action="/customer/update" method="post">
    @csrf
    <input type="text" name="name" value="<?php echo $customer["name"]?>" >
    <input type="text" name="phone" value="<?php echo $customer["phone"]?>" >
    <input type="text" name="email" value="<?php echo $customer["email"]?>" >
    <button>Update</button>
</form>
</body>
</html>
