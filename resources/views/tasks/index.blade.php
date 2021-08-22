<x-app-layout>
    <h1>Task</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->list }}</li>
        @endforeach
    </ul>
</x-app-layout>