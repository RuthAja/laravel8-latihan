<div class="card">
    <div class="card-header">Create New Task</div>
    <div class="card-body">
        {{-- @foreach ($errors->all() as $error ) --}}
        {{-- @if ($errors->all()) --}}
        {{-- <div class="alert alert-danger"> --}}
            {{-- {{ $error }} --}}
            {{-- Data bujank Invalid --}}
            {{-- </div> --}}
        {{-- @endif --}}
        {{-- @endforeach --}}
        {{-- <form action="/tasks" method="post" style="padding: 10px 0" class="d-flex"> --}}
            <form action="{{ route('tasks.store') }}" method="post" style="padding: 10px " class="">
                @csrf
                @include('tasks._form')
            </form>
    </div>
</div>