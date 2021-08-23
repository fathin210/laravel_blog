<div class="card">
    <div class="card-header">
        Create New Task
    </div>
    <div class="card-body">
        <form action="/tasks" method="post">
            @csrf
            @include("tasks._form")
        </form>
    </div>
</div>