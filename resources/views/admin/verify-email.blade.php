@extends('admin.layout')

@section('admin_content')
    <div class="col-md-6 m-auto">
        <div class="card shadow">
            <div class="card-body">
                <p class="text-secondary">
                    You are now signing up! Before getting started, could you
                    verify your email address by clicking on the link we just
                    emailed to you? If you didn't receive the email, another one
                    will be sent to you.
                </p>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-nubsBlue mt-4">
                                Resend Verification Email
                            </button>
                        </div>
                    </div>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn text-secondary mt-4">Logout</button>
                </form>
            </div>
        </div>
    </div>
@endsection
