<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taken edit</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="max-w-md mx-auto mt-5 p-4">
    <h1 class="text-2xl font-semibold mb-4">Taken edit</h1>
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="title" class="block text-gray-600">Titel:</label>
        <input type="text" id="title" name="title" class="border border-gray-300 rounded-md p-2 w-full" required value="{{ $task->title }}">
    </div>

    <div class="mb-4">
        <label for="description" class="block text-gray-600">Beschrijving:</label>
        <textarea id="description" name="description" class="border border-gray-300 rounded-md p-2 w-full" required>{{ $task->description }}</textarea>
    </div>

    <div class="mb-4">
        <label class="block text-gray-600">Status:</label>
        <input type="checkbox" id="completed" name="completed" value="1" {{ $task->completed ? 'checked' : '' }}>
        <label for="completed" class="ml-2">Completed</label>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">Update Taak</button>
</form>
</div>
</body>
</html>
