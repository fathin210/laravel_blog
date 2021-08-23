<x-app-layout>

    <div class="container">
        <div class="col-md-6">
            <form action="{{ route("tasks.update", $task->id) }}" method="post">
                @method("put")
                @csrf
                <input type="text" name="list" class="form-control mb-2" id="list" value="{{ $task->list }}">
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>

</x-app-layout>