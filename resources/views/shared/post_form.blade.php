<div class="mb-3">
    <h4 class="py-2">Share your post</h4>
    <form action="{{ route('post.create') }}" method="POST">
        @csrf
        <div class="form-floating">
            <textarea class="form-control" name="content" id="floatingTextarea2" style="height: 100px"></textarea>
            @error('content')
                <span class="fs-6 text-danger mt-2">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-dark mt-3">Submit</button>
    </form>
</div>


