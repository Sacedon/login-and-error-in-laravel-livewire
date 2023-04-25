<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col col-md-5 mx-auto">
                <div class="card shadow">
                    <div class="card-header text-center postcardhdclr bg-success">
                        <h3>Make a Post</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Author:</label>
                            <input type="text" class="form-control" placeholder="Enter Author" wire:model="author">
                        </div>
                        <div class="mt-3 mx-auto">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Title:</label>
                                <input type="text" class="form-control createcolor" placeholder=" Enter Title" wire:model="title">
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Category:</label>
                                <select class="form-select" wire:model="category_id">
                                    <option value="" disabled>Select a Category</option>
                                    <option selected hidden value="true">Select Category</option>
                                    @foreach ($categories as $category )
                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control form-control-lg" placeholder="What's Your Content?" wire:model="content"></textarea>
                        </div>

                        <a class="btn btn-primary btn-sm mt-3" wire:click.prevent="store()" href="/posts">
                            Post
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
