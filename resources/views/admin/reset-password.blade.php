@extends('admin.layout')

@section('admin_content')
    <div class="col-md-6 m-auto">
        <div class="card shadow">
            <div class="card-title fs-3 text-center pt-2">
                <strong>Reset Password</strong>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div>
                        <div class="font-medium text-red-600">
                            Whoops! Something went wrong.
                        </div>

                        <ul class="mt-3 text-danger list-style">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="form-group mt-2">
                        <label for="email" class="lead">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            value="{{ old('email', $request->email) }}"
                            required
                            autofocus
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
                        <label for="password" class="lead">Confirm Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password_confirmation"
                            required
                        />
                    </div>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-nubsBlue mt-4">
                                Reset Password
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
