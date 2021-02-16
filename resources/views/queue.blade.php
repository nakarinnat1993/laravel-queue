<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue</title>
</head>
<body>

    @if (Session()->has('error'))
        {{Session()->get('error')}}
        <br>
    @endif

    @if (Session()->has('success'))
        {{Session()->get('success')}}
        <br>
    @endif

    <form action="/setQueue" method="POST">
        @csrf
        Date Time Queue : <input type="datetime-local" name="queue_time" required>
        <button type="submit">Add</button>
    </form>
</body>
</html>
