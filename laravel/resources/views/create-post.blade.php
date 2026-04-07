<!DOCTYPE html>
<html>
<head>
    <title>Создать пост</title>
</head>
<body>

<h2>Создать пост</h2>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<form method="POST" action="/create-post">
    @csrf

    <label>Заголовок:</label><br>
    <input type="text" name="title"><br><br>

    <label>Контент:</label><br>
    <textarea name="content"></textarea><br><br>

    <button type="submit">Создать</button>
</form>

</body>
</html>