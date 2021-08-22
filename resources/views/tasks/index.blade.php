<x-app-layout>
    <h1>Task</h1>
    
    <form action="/tasks" method="post">
        @csrf
        <input type="text" name="list" id="list">
        <button type="submit">Submit</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->list }}</li>
        @endforeach
    </ul>
</x-app-layout>