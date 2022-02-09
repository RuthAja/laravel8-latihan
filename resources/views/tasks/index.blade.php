<x-app-layout title="Tasks Page">
    <div class="container">
        <h1>Tasks Page</h1>
        <div class="row">
            <div class="col-md-6">
                @include('tasks._create')
            </div>
        </div>
        <ul class="list-group mt-4">
            @foreach ($tasks as $index => $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $index + 1 }} - {{ $task->list }}
                <div>
                    {{-- <a href="/tasks/{{ $task->id }}/edit" class="btn btn-primary"">Edit</a> --}}
                    <a href=" {{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
                    {{-- <form action=" /tasks/{{ $task->id }}/delete" method="post" style="display: inline"> --}}
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>