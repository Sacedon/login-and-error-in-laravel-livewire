<div>
    @if (session()->has('message'))
        <div class="alert alert-success col-md-3 mx-auto mt-3 text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="row justify-content-center shadow bg-primary rounded">
        <div class="col-md-2 mt-3">
            <div class="form-floating">
                <select class="form-select postcardbdclr" wire:model="postCategory">
                    <option value="" disabled>Select a Category</option>
                    <option value="all">All</option>
                    @foreach ($categories as $category )
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
                <label for="caliber" class="form-label text-dark">Select a Category</label>
            </div>
        </div>

        <div class="col-md-3 mt-3 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control postcardbdclr" placeholder="Search" wire:model="postSearch">
                <label for="search" class="form-label text-dark">Search</label>
            </div>
        </div>
    </div>
    


<div class="container mt-4">
  <div class="row">
    @foreach ($posts as $post)
      <div class="col-md-4 mb-4">
        <div class="card shadow">
          <div class="card-header bg-success" style="background-color: #6c5ce7">
            <h3 class="text-light mb-0" style="font-family: Verdana, Geneva, Tahoma, sans-serif">{{ $post->author }}</h3>
            <div class="position-absolute top-0 end-0 translate-middle badge rounded-pill bg-warning" style="transform: translate(-50%, -50%)">
              <span class="text-dark">{{ $post->category->category }}</span>
            </div>
          </div>
          <div class="card-body bg-light">
            <h5 class="text-primary mb-0" style="font-family:Georgia, 'Times New Roman', Times, serif">{{ $post->title }}</h5>
            <hr>
            <p style="font-family: monospace">{{ $post->content }}</p>
            <div class="d-flex justify-content-between align-items-center">
               <a href="#" class="btn btn-outline-primary btn-sm">Read more</a>
              <div class="text-muted">{{ $post->created_at->diffForHumans() }}</div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

    <div class="offset-md-8 mt-3">
        {{ $posts }}
    </div>
</div>