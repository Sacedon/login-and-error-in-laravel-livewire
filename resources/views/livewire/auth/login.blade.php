<div>

    @if (session()->has('message'))
        <div class="alert alert-success col-md-8 mx-auto mt-3">
            {{ session('message') }}
        </div>
    @endif



    <div class="container d-flex justify-content-center mt-5">
        <div class="card col-md-6 my-auto bg-light">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Login</h3>
                @if (!empty($errormsg))
                    <div class="alert text-danger col-md-8 mx-auto mt-3 text-center" style="display: block; font-style: italic; font-size: medium;">
                        {{ $errormsg }}
                    </div>
                @endif
                <form>
                    <div class="my-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model="email">
                        @error('email')
                            <div class="invalid-feedback" style="display: block; font-style: italic; font-size: small;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="my-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model="password">
                        @error('password')
                            <div class="invalid-feedback" style="display: block; font-style: italic; font-size: small;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-block" wire:click="submit()">Login</button>
                    </div>
                    <p class="mt-3 text-center">Don't have an account? <a href="/register">Sign up</a></p>
                </form>
            </div>
        </div>
    </div>
    
</div>  