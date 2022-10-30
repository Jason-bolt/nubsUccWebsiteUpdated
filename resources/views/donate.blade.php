@extends('myLayout.app')

@section('content')
    <!-- Weekly Activities-->
    <section style="padding: 150px 0; background-image: linear-gradient(rgb(0,41,180), rgb(0,255,217))">
        <div class="container text-center text-white">
            <div class="flex flex-col">
                <h1 class="display-1 fw-bold">DONATE</h1>
                <p class="lead">TO SUPPORT OUR PROJECTS</p>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                {{-- Bus --}}
                <div class="col col-md-6 col-lg-4">
                    <div class="card shadow" style="height: 435px">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('images/donate/bus.png') }}" alt="Bus image" class="img-fluid p-2">
                            </div>
                            <div class="card-text mt-3">
                                <h4 style="color: rgb(3, 23, 83)" class="pb-2">Bus project</h4>
                                <p class="mb-0">
                                    The union seeks to purchase a bus to help convey people and equipments to and from church as well as off-campus activities.
                                </p>
                            </div>
                        </div>
                        <button class="btn btn-nubsBlue m-3 fw-bold">Donate <i class="fas fa-hand-holding-usd ps-1"></i></button>
                    </div>
                </div>

                {{-- Instruments --}}
                <div class="col col-md-6 col-lg-4">
                    <div class="card shadow" style="height: 435px">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('images/donate/instruments.png') }}" alt="Bus image" class="img-fluid p-2" width="205px">
                            </div>
                            <div class="card-text mt-3">
                                <h4 style="color: rgb(3, 23, 83)" class="pb-2">Bus project</h4>
                                <p class="mb-0">
                                    The union seeks to purchase a musical instruments for the purpose of improving church services.
                                </p>
                            </div>
                        </div>
                        <button class="btn btn-nubsBlue m-3 fw-bold">Donate <i class="fas fa-hand-holding-usd ps-1"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
