@extends('myLayout.app')

@section('content')
    <!-- Weekly Activities-->
    <section class="pt-5 pb-2">
        <div class="container">
            <h1 class="mb-4">Our Weekly Activities</h1>
            <div class="row g-4">
                @foreach($weekly_activities as $activity)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow text-center">
                            <img src="{{ $activity->image == null ? asset('sysImages/nubs_logo.png') : asset('images/weekly_activity/' . $activity->image) }}" alt="sunday" class="card-img-top" />
                            <div class="card-body">
                                <div class="card-title my-3 h3">{{ $activity->service }}</div>
                                <div class="card-text">
                                    <p class="mb-0"><strong>Day:</strong> {{ $activity->day }}</p>
                                    <p class="mb-0"><strong>Time:</strong> {{ $activity->time }}</p>
                                    <p class="mb-0"><strong>Location:</strong> {{ $activity->activity_location($activity->location_id) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Semester Program Outline -->
    <section class="p-sm-5 my-5">
        <div class="container">
            <h1>Semester Program Outline</h1>
            <a
                href="assets/NUBS_UCC_program_outline.pdf"
                download="NUBS_Program_outline.pdf"
                class="btn btn-nubsBlue shadow"
            >
                Download Program Outline <i class="bi bi-download"></i>
            </a>
        </div>
    </section>

    <!-- Upcoming Events -->
    <section>
        <div class="container p-sm-5">
            <h1>Up Coming Events</h1>
        </div>

        <div id="events" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
{{--                @forelse($events as $event)--}}
{{--                    --}}
{{--                @empty--}}
{{--                    --}}
{{--                @endforelse--}}
                <div class="carousel-item active">
                    <img src="{{ asset('sysImages/carousel2.jpg') }}" class="d-block w-100" alt="1" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('sysImages/carousel3.jpg') }}" class="d-block w-100" alt="2" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('sysImages/carousel4.jpg') }}" class="d-block w-100" alt="3" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('sysImages/carousel1.jpg') }}" class="d-block w-100" alt="4" />
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#events"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#events"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
@endsection
