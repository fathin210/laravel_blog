<x-app-layout>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Create New Task
                </div>
                <div class="card-body">
                    <form action="/tasks" method="post" class="d-flex">
                        @csrf
                        <input type="text" class="form-control me-2" name="list" id="list">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <ul class="list-group mt-4">
        @if (isset($tasks))
        @foreach ($tasks as $task)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $task->list }}
            <div>
                <a class="btn btn-primary" href="/tasks/{{ $task->id }}/edit">Edit</a>
                <form action="/tasks/{{ $task->id }}" method="post" style="display: inline">
                @method("delete")
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        
        </li>
        @endforeach
        @endif
    </ul>
</div>
</x-app-layout>