<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editing {{$item->name}}</title>
</head>
<body>
    <form method="POST" action="{{route('updateItem', $item->id)}}">
        @csrf
        @method('PUT')
        <input type="text" name='name' value={{$item->name}}>
        <button type='submit'>Edit</button>
    </form>
</body>
</html>