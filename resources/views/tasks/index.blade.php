<x-app-layout>
    <h1>Task</h1>
    
    <form action="/tasks" method="post">
        @csrf
        <input type="text" name="list" id="list">
        <button type="submit">Submit</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
        <li>
            {{ $task->list }}
            <div>
                <a href="/tasks/{{ $task->id }}/edit"><button>Edit</button></a>
                <form action="/tasks/{{ $task->id }}" method="post" style="display: inline">
                @method("delete")
                @csrf
                <button type="submit">Delete</button>
                </form>
            </div>
        
        </li>
        @endforeach
    </ul>
</x-app-layout>