<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>

    <form action="/todos" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Add To-Do</button>
    </form>

    
    <ul>
        @foreach($todos as $todo)
            <li>
                <strong>{{ $todo->title }}</strong> - {{ $todo->description }}
                <a href="/todos/{{ $todo->id }}/edit">Edit</a>
                <form action="/todos/{{ $todo->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
