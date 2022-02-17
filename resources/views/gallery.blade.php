@extends('myLayout.app')

@section('content')
    <!-- Gallery-->
    <section class="pt-5 pb-2">
        <div class="container">
            <h1 class="mb-4">Gallery</h1>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow p-0">
                            <button
                                class="btn p-0"
                                type="button"
                                data-bs-target="#gal1"
                                data-bs-toggle="modal"
                            >
                                <img src="{{ asset('sysImgs/pic1.jpeg') }}" alt="sunday" class="card-img-top" />
                            </button>
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="gal1" tabindex="-1">
                    <div class="modal-dialog modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Sunday Service</h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <img
                                    src="{{ asset('sysImgs/pic1.jpeg') }}"
                                    alt="sunday"
                                    class="card-img-top"
                                />
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img src="{{ asset('sysImgs/pic1.jpeg') }}" alt="sunday" class="card-img-top" />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img src="{{ asset('sysImgs/pic1.jpeg') }}" alt="sunday" class="card-img-top" />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img src="{{ asset('sysImgs/pic1.jpeg') }}" alt="sunday" class="card-img-top" />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img src="{{ asset('sysImgs/pic1.jpeg') }}" alt="sunday" class="card-img-top" />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img src="{{ asset('sysImgs/pic1.jpeg') }}" alt="sunday" class="card-img-top" />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img src="{{ asset('sysImgs/pic1.jpeg') }}" alt="sunday" class="card-img-top" />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img src="{{ asset('sysImgs/pic1.jpeg') }}" alt="sunday" class="card-img-top" />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img src="{{ asset('sysImgs/pic1.jpeg') }}" alt="sunday" class="card-img-top" />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
