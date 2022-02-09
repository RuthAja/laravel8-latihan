<x-app-layout title="Tasks Page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Tasks Page</h1>
                {{-- NOTE tanpa menggunakan ROute resource --}}
                {{-- <form action="/tasks/{{ $task->id }}" method="post" style="padding: 10px 0"> --}}
                    {{-- NOTE menggunakan Route Resource agar lebih efisien. --}}
                    <form action="{{ route('tasks.update', $task->id) }}" method="post" style="padding: 10px 0">
                        @method('put')
                        @csrf
                        @include('tasks._form')
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>