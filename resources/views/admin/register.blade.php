@extends('admin.layout')

@section('admin_content')
    <div class="col-md-6 m-auto">
        <div class="card shadow">
            <div class="card-title fs-3 text-center pt-2">
                <strong>Register Admin</strong>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div>

{{--                        <ul class="mt-3 text-danger list-style">--}}
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-warning alert-dismissible fade show py-1" role="alert">
{{--                                    <li>{{ $error }}</li>--}}
                                    {{ $error }}
                                    <small><button type="button" class="btn-close p-2" data-bs-dismiss="alert" aria-label="Close"></button></small>
                                </div>

                            @endforeach
{{--                        </ul>--}}
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name" class="lead">First Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="first_name"
                            value="{{ old('first_name') }}"
                            required
                        />
                    </div>
                    <div class="form-group mt-2">
                        <label for="last_name" class="lead">Last Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="last_name"
                            value="{{ old('last_name') }}"
                            required
                        />
                    </div>
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
                        <label for="password_confirmation" class="lead"
                        >Confirm Password</label
                        >
                        <input
                            type="password"
                            class="form-control"
                            name="password_confirmation"
                            required
                        />
                    </div>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-nubsBlue mt-4">Register</button>
                        </div>
                        <a href="{{ route('login') }}" class="mt-3">Already registered?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
