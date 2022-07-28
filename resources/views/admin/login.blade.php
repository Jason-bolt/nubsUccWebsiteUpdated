@extends('admin.layout')

@section('admin_content')
    <div class="col-md-6 m-auto">
        <div class="card shadow">
            <div class="card-title fs-3 text-center pt-2">
                <strong>Admin Login</strong>
            </div>
            <div class="card-body">

                @if (session('status'))
                    <div>
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div>
                        <div class="font-medium text-red-600">
                            Whoops! Something went wrong.
                        </div>

                            @foreach ($errors->all() as $error)
                            <div class="alert alert-warning alert-dismissible fade show py-1" role="alert">
                                {{ $error }}
                                <small><button type="button" class="btn-close p-2" data-bs-dismiss="alert" aria-label="Close"></button></small>
                            </div>
                            @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="email" class="lead">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            value="{{ old('email') }}"
                            required
                        />
                    </div>
                    <div class="form-group mt-2">
                        <label for="password" class="lead">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            required
                        />
                    </div>

                    <div class="form-group mt-2">
                        <input type="checkbox" name="remember" />
                        <small>Remember me</small>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-nubsBlue mt-4">Login</button>
                        </div>
                        <a href="{{ route('register') }}" class="mt-3">Register instead</a>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"><small>Forgot password</small></a>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


