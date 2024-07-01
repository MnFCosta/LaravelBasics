<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>
<body>
    <h1>Home</h1>
    <div>
        <h1>Todo List</h1>
        
        <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8">
            {{csrf_field()}}
            <label for="listItem">New Item</label>
            <input type="text" name="listItem">
            <button type='submit'>Save Item</button>
        </form>

        @foreach ($listItems as $listItem)
        <div style="display: flex; flex-direction: row; justify-content: space-around">
            <div>
                <p>Item: {{$listItem->name}}</p>
            </div>
            <div style="display: flex; align-items: center;">
                <form method="post" action="{{ route('markComplete', $listItem->id)}}">
                        {{csrf_field()}}
                        <button type='submit'>{{$listItem->is_complete == 0 ? 'Complete' : 'Incomplete'}}</button>
                </form>
                <a href="{{route('editItem', $listItem->id)}}">Edit</a>
                <form method="post" action="{{ route('deleteItem', $listItem->id)}}">
                    {{csrf_field()}}
                    <button type='submit'>Delete</button>
                </form>
            </div>
        </div>
        @endforeach

    </div>
</body>
</html>