<div class="md-2">
    <input type="text" name="list" class="form-control @error('list') is-invalid @enderror" {{-- NOTE alternativ 1 --}}
        {{-- value="{{ old('list') ?? $task->list }}" placeholder="name"> --}}
    {{-- NOTE alternativ 2 --}}
    value="{{ old('list', $task->list) }}" placeholder="name">
    @error('list')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<button type="submit" class="btn btn-primary mt-4">{{ $submit }}</button>