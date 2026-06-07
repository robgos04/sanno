<!DOCTYPE html>
<html>
<head>
    <title>Diana Flat Glass</title>
</head>
<body>
    <p>Name: {{ $name }}</p>
    <p>Phone: {{ $phone }}</p>
    <p>Email: {{ $email }}</p>
    <p><b>{{ json_decode($messageContent) }}</b></p>
</body>
</html>