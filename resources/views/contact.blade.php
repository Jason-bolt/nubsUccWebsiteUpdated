@extends('myLayout.app')

@section('content')
    <!-- Executives of NUBS-->
    <section class="pt-5 pb-3">
        <div class="container text-center">
            <h1 class="mb-4">Reach Out To Us</h1>

            @if (session('status'))
                <div class="text-success my-5 lead">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div>
                    <div class="text-danger">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="mt-3 text-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form
                action="{{ route('sendEmail') }}"
                method="post"
                class="p-sm-5 shadow p-3"
                onsubmit="return validateForm()"
            >
                @csrf
                <div class="row g-4">
                    <!-- Last name -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                type="text"
                                placeholder="Enter your last name..."
                                class="form-control"
                                name="last_name"
                                id="last_name"
                                required
                            />
                        </div>
                    </div>
                    <!-- Other names -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                type="text"
                                placeholder="Enter your other names..."
                                class="form-control"
                                name="other_names"
                                id="other_names"
                                required
                            />
                        </div>
                    </div>
                </div>

                <div class="row my-1 g-4">
                    <!-- Email address -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                type="email"
                                placeholder="Enter your email address..."
                                class="form-control"
                                name="email_address"
                                id="email_address"
                                required
                            />
                        </div>
                    </div>
                    <!-- Type of message -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <select
                                name="message_type"
                                id="message_type"
                                class="form-control"
                                required
                            >
                                <option disabled selected value="0">Select a reason</option>
                                <option value="testimony">Testimony</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <!-- Message -->
                    <div class="form-group">
							<textarea
                                name="message"
                                id="message"
                                rows="10"
                                class="form-control"
                                placeholder="Type your message here..."
                                required
                            ></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-nubsBlue px-4 py-2 mt-3">Send message <i class="bi bi-envelope-fill"></i></button>
{{--                <input--}}
{{--                    type="submit"--}}
{{--                    class="btn btn-nubsBlue px-4 py-2 mt-3"--}}
{{--                    value="Send message"--}}
{{--                    name="message_submit"--}}
{{--                />--}}
            </form>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="p-sm-5 mt-5">
        <div class="container text-center">
            <h3>Reach Us</h3>
            <div class="d-sm-flex justify-content-center align-items-center">
                <div class="me-3 lead">
                    <i class="bi bi-telephone h5"></i> +233 00 000 0000
                </div>
                <div class="ms-3 lead my-2">
                    <i class="bi bi-envelope h5"></i> info@nubsucc.com
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    function validateForm() {
        var last_name = document.getElementById("last_name").value;
        var other_names = document.getElementById("other_names").value;
        var email_address = document.getElementById("email_address").value;
        var message = document.getElementById("message").value;
        var message_type = document.getElementById("message_type").value;

        if (
            last_name.trim() == "" ||
            other_names.trim() == "" ||
            email_address.trim() == "" ||
            message.trim() == "" ||
            message_type == 0
        ) {
            alert("Message fields can not be empty!");
            return false;
        }
    }
</script>
