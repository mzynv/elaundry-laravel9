@extends('auth.template')

@section('section')
    <div class="col-lg-7">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Create Account</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('first_name') is-invalid @enderror" id="inputFirstName"
                                    type="text" placeholder="Enter your first name" name="first_name" value="{{ old('first_name') }}" />
                                <label for="inputFirstName">First name</label>
                                @error('first_name')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control @error('last_name') is-invalid @enderror" id="inputLastName"
                                    type="text" placeholder="Enter your last name" name="last_name" value="{{ old('last_name') }}" />
                                <label for="inputLastName">Last name</label>
                                @error('last_name')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control @error('email') is-invalid @enderror" id="inputEmail" type="email"
                            placeholder="name@example.com" name="email" value="{{ old('email') }}" />
                        <label for="inputEmail">Email address</label>
                        @error('email')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('password') is-invalid @enderror" id="inputPassword"
                                    type="password" placeholder="Create a password" name="password" />
                                <label for="inputPassword">Password</label>
                                @error('password')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="inputPasswordConfirm" type="password" placeholder="Confirm password"
                                    name="password_confirmation" />
                                <label for="inputPasswordConfirm">Confirm Password</label>
                                @error('password_confirmation')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="exampleFormControlSelect1 @error('auth') is-invalid @enderror"></label>
                            <select class="form-control" name="auth" id="inputFormControlSelect1">
                              <option>--Register Sebagai--</option>
                              <option>Pelanggan</option>
                              <option>Kurir</option>
                              <option>Kasir</option>
                            </select>
                            @error('auth')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                          </div>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Create Account</button></div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="{{ route('login') }}">Have an account? Go to login</a></div>
            </div>
        </div>
    </div>
@endsection