<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-4">Taken Details</h1>

        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">{{ $task->title }}</h2>
            <p class="text-gray-600">{{ $task->description }}</p>

            <div class="mt-4">
                <strong>Status:</strong>
                @if ($task->completed)
                    <span class="bg-green-500 text-white px-2 py-1 rounded-full text-sm">Compleet</span>
                @else
                    <span class="bg-red-500 text-white px-2 py-1 rounded-full text-sm">Incompleet</span>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
