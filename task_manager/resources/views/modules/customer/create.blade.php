<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h1>Create Customer</h1>
<form action="/customer/create" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="phone" placeholder="phone">
    <input type="text" name="email" placeholder="email">
    <button>Create</button>
</form>
</body>
</html>
