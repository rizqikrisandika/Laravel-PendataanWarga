@extends('layout.login')
@section('title','Login')
@section('body')
<div class="login-area">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('post.login') }}">
                @csrf
                <div class="login-form-head">
                    <h4>Sign In</h4>
                    <p>Hello there, Sign in and start managing your Artikel</p>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" name="email" type="email"
                            id="exampleInputEmail1" value="{{ old('email') }}">
                        <i class="ti-email"></i>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" name="password"
                            type="password" id="exampleInputPassword1" value="{{ old('password') }}">
                        <i class="ti-lock"></i>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @if(session('message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="row mb-4 rmber-area">
                        {{-- <div class="col-6">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#">Forgot Password?</a>
                        </div> --}}
                    </div>
                    <div class="submit-btn-area">
                        <button type="submit" id="form_submit" name="login">Login <i
                                class="ti-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
