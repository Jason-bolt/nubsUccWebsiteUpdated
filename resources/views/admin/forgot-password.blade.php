@extends('admin.layout')

@section('admin_content')
    <div class="col-md-6 m-auto">
                <div class="card shadow">
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

                                <ul class="mt-3 text-danger list-style">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <p class="text-secondary">
                                Forgot your password? No problem. Type in your email address
                                and we will email you a password reset link that will allow
                                you to choose a new one.
                            </p>
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

                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-nubsBlue mt-4">
                                        Send Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection


