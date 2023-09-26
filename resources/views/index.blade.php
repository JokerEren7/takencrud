<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takenlijst</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-100">
    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-4">Takenlijst</h1>

        <div class="bg-white p-4 rounded-lg shadow">
            <ul>
                @foreach ($tasks as $task)
                <li class="flex items-center justify-between border-b py-4">
                    <div class="flex-1">
                    <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500 hover:underline">{{ $task->title }}</a></h2>
                        
                        <p class="text-gray-600">{{ $task->description }}</p>
                    </div>
                   
                    <div class="ml-4">
                        @if ($task->completed)
                            <span class="bg-green-500 text-white px-2 py-1 rounded-full text-sm">Complete</span>
                        @else
                            <span class="bg-red-500 text-white px-2 py-1 rounded-full text-sm">Incomplete</span>
                        @endif
                        <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" class="inline-block">
                              @csrf
                            @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline focus:outline-none">Delete</button>
                        
                    </form>
                    <form method="POST" action="{{ route('tasks.toggle', $task->id) }}">
                         @csrf
                         @method('PUT')
                      <button type="submit" class="text-blue-500 hover:underline focus:outline-none">
                     @if ($task->completed)
                        Mark as Incomplete
                     @else
                        Mark as Complete
                    @endif
                  </button>

            </form>
            <form method="GET" action="{{ route('tasks.edit', $task->id) }}" class="text-blue-500 hover:underline focus:outline-none">
                <button type='submit'>Edit</button>

            </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>                    
        <div class="flex justify-center mt-4">
        <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">Create Task</a>
    </div>
    </div>
</body>

</html>
