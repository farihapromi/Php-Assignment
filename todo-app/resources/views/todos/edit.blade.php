<!DOCTYPE html>
<html>
<head>
    <title>Edit To-Do</title>
</head>
<body>
    <h1>Edit To-Do</h1>

    <!-- Form to Edit an Existing To-Do -->
    <form action="/todos/{{ $todo->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $todo->title }}" required>
        <textarea name="description">{{ $todo->description }}</textarea>
        <button type="submit">Update To-Do</button>
    </form>

    <a href="/">Back to List</a>
</body>
</html>
