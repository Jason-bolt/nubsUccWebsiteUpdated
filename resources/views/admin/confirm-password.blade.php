@extends('admin.layout')

@section('admin_content')
    <div class="col-md-6 m-auto">
        <div class="card shadow">
            <div class="card-body">
                <p class="text-secondary">
                    This is a secure area of the application. Please confirm your
                    password before continuing.
                </p>

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

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="password" class="lead">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            autocomplete="current-password"
                            required
                        />
                    </div>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-nubsBlue mt-4">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


