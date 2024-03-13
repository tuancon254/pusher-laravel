<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form action="{{ route('submit')}}" method="post">
        @csrf
        <input type="text" name="data">
        <button type="submit">submit</button>
    </form>
    </br>
</body>
</html>
