<div class="card mb-3">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
            </div>
            <div>
                <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a class="mx-2" href="{{ route('post.show', $post->id) }}">View</a>
                    <a href="{{ route('post.edit', $post->id) }}">Edit</a>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="rounded-circle me-2 avatar-sm"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="avatar">
                <div>
                    <h5 class="card-title mb-0">
                        <a class="text-decoration-none text-dark" href="#">Mario</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if($editing ?? false)
            <form action="{{ route('post.update', $post->id) }}" method="post">
                @csrf
                <div class="form-floating">
                    <textarea class="form-control" name="content" id="floatingTextarea2" style="height: 100px">{{ $post-> content}}</textarea>
                    @error('content')
                        <span class="fs-6 text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark mt-3">Submit</button>
            </form>
        @else
        <p class="fs-6 fw-light text-muted">
            {{$post->content}}
        </p>
        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6">
                    <i class="fas fa-heart me-1 text-muted"></i>
                    5
                </a> 
            </div>
            <div>
                <span class="fw-light text-muted fs-6">
                    <i class="fas fa-clock me-1"></i>
                    <span>
                        29-11-2023
                    </span>
                </span> 
            </div>
        </div>
        <div class="my-3">
            <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea2" rows="2"></textarea>
            </div>
            <button type="button" class="btn btn-dark mt-3">Comment</button>
        </div>
        <hr>
        <div>
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:25px" class="rounded-circle me-2 avatar-sm"
                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi" alt="avatar">
                    <div>
                        <h6 class="card-title mb-0">
                            <a class="text-decoration-none text-dark" href="#">Luigi</a>
                        </h6>
                    </div>
                </div>
                <div>
                    <span class="fw-light text-muted">
                        3 hours ago
                    </span> 
                </div>
            </div>
            <div class="p-3">
                <p>This post is something nice to read.Thank you to the author of this post</p>
            </div>
        </div>
        @endif
    </div>
</div>