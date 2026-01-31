@extends('layouts.auth')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    {{-- Error Alert --}}
                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{session('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('portal-admin.login.attempt')}}" method="POST" id="logForm">
                            {{ csrf_field() }}
                            <div class="form-group">
                                @error('errorLogin')
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <span class="alert-inner--text"><strong>Error!</strong> {{ $message }}</span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @enderror
                                <label class="small mb-1" for="inputEmailAddress">Email Address</label>
                                <input
                                    class="form-control py-4"
                                    id="inputEmailAddress"
                                    name="email"
                                    type="text"
                                    placeholder="Masukkan Email"/>
                                @if($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <input
                                    class="form-control py-4"
                                    id="inputPassword"
                                    type="password"
                                    name="password"
                                    placeholder="Masukkan Password"/>
                                @if($errors->has('password'))
                                <span class="error">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"/>
                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                </div>
                            </div>
                            <div
                                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                {{-- <a class="small" href="#">Forgot Password?</a> --}}
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection