<div>
    <input type="text" class="form-control mb-2 @error("list")
        {{ "is-invalid" }}
    @enderror" name="list" id="list" value="{{ old("list") ?? $task->list }}">
    @error("list")
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<button class="btn btn-primary" type="submit">{{ $submit }}</button>