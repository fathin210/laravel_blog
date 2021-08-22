<x-app-layout>
    <h1>Update</h1>
    
    <form action="/tasks/{{ $task->id }}" method="post">
        @method("put")
        @csrf
        <input type="text" name="list" id="list" value="{{ $task->list }}">
        <button type="submit">Update</button>
    </form>

</x-app-layout>