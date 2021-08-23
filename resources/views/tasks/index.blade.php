<x-app-layout>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            @include("tasks._create")
        </div>
    </div>

    <ul class="list-group mt-4">
        @if (isset($tasks))
        @foreach ($tasks as $task)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $task->list }}
            <div>
                <a class="btn btn-primary" href="{{ route("tasks.edit", $task->id) }}">Edit</a>
                <form action="{{ route("tasks.destroy", $task->id) }}" method="post" style="display: inline">
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