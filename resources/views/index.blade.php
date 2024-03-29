@extends('myLayout.app')

@section('content')

    <!-- Carousel -->
    <section>
        <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('sysImages/ban1.jpg') }}" class="d-block w-100" alt="1" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('sysImages/ban2.jpg') }}" class="d-block w-100" alt="1" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('sysImages/ban3.jpg') }}" class="d-block w-100" alt="1" />
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#bannerCarousel"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#bannerCarousel"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section style="background-color: rgb(11,37,119)" class="container p-1 rounded-bottom"></section>

    <!-- Welcome Address -->
    <section class="p-sm-5 my-3 my-sm-0">
        <div class="container">
            <p class="display-3">Welcome To NUBS UCC</p>
            <p>
                The National Union of Baptist Students (NUBS) is a Christian students’ organization comprising of Local Baptist Student Unions. The NUBS is a recognized auxiliary of the Ghana Baptist Convention (GBC). The motto of NUBS is “Presenting everyman perfect in Christ” as captured in Colossians 1:28b in the HOLY BIBLE. The slogan of NUBS is “Empowered!! For Action!!!”

            </p>
            <a href="{{ route('about') }}" class="btn btn-nubsBlue px-4 py-2">Learn More</a>
        </div>
    </section>

    <!-- Horizontal line -->
    <hr class="w-50 m-auto" style="background-color: rgb(3, 23, 83)" />

    <!-- Vision and Mission Section -->
    <section class="p-sm-5 py-5">
        <div class="container text-center">
            <div class="d-md-flex align-items-center justify-content-evenly">
                <div class="px-sm-5 mb-md-0 mb-5">
                    <!-- Mission statement -->
                    <p class="display-4">Our Mission</p>
                    <p class="lead">
                        The Ghana Baptist Convention exists to evangelize the lost, disciple believers of the Gospel of Jesus Christ, plant churches, train leaders and minister to the spiritual and socio–economic needs of people through strong and vibrant structures and institutions, and in cooperation with relevant bodies.
                    </p>
                </div>

{{--                <div class="px-sm-5">--}}
{{--                    <!-- Vision statement -->--}}
{{--                    <p class="display-4">Our Vision</p>--}}
{{--                    <p class="lead">--}}
{{--                        To fulfill the Great Commission of Jesus Christ...--}}
{{--                    </p>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

    <!-- Prayer Request -->
    <section
        class="py-5 p-sm-5 mb-sm-4 text-white"
        style="background-color: rgb(3, 23, 83)"
    >
        <div class="container text-start">
            <div class="d-md-flex justify-content-between align-items-center">
                <div class="col-md px-3 mb-4 mb-md-0">
                    <p class="h3">HAVE A PRAYER REQUEST ?</p>
                    <form action="#" method="post" class="form">
                        <div class="form-group">
								<textarea
                                    name="prayer_request"
                                    id="prayer_request"
                                    rows="3"
                                    class="form-control"
                                    placeholder="Type in your prayer request here..."
                                ></textarea>
                        </div>
                        <input
                            type="submit"
                            class="btn mt-3 text-white"
                            value="Send Request"
                            style="background-color: red"
                        />
                    </form>
                </div>
                <div class="col-md px-sm-3">
                    Do you have a need or are you struggling with a situation where you need the people of God to intercede to the Lord God on your behalf? If yes, please feel free to make your prayer request known to us so that our ever ready prayer team can stand in the gap for you and your situation.
                </div>
            </div>
        </div>
    </section>

    <!-- Weekly Activities -->
    <section class="p-sm-5 pt-5 mt-3 mt-sm-0 pt-sm-0">
        <div class="container text-center">
            <h1 class="pt-3 pb-5">Weekly Activities</h1>
            <div class="row g-4">
                @foreach($weekly_activities as $weekly_activity)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow">
                            <img src="{{ $weekly_activity->image == null ? asset('sysImages/nubs_logo.png') : asset('images/weekly_activity/' . $weekly_activity->image) }}" alt="sunday" class="card-img-top" />
                            <div class="card-body">
                                <div class="card-title my-3 h3 text-capitalize">{{ $weekly_activity->service }}</div>
                                <div class="card-text">
                                    <p class="mb-0 text-capitalize"><strong>Day:</strong> {{ $weekly_activity->day }}</p>
                                    <p class="mb-0"><strong>Time:</strong> {{ $weekly_activity->time }}</p>
                                    <p class="mb-0 text-capitalize"><strong>Location:</strong> {{ $weekly_activity->activity_location($weekly_activity->location_id) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Button for more events -->
            <a href="{{ route('news_events') }}" class="btn btn-nubsBlue px-4 py-2 mt-5">
                View all events <i class="bi bi-chevron-right"></i>
            </a>
        </div>
    </section>

    <!-- Upcoming Events -->
    <section class="mb-5">
        <div class="container p-sm-5">
            <h1>Up Coming Events</h1>
        </div>

        <div id="events" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @forelse($events as $index => $event)
                    <div class="carousel-item active">
                        <img src="{{ asset('images/events/' . $event->image) }}" class="d-block w-100" alt="1" />
                    </div>
                @empty
                    <p class="lead py-5 my-5 text-center">
                        No event in the system at the moment...
                    </p>
                @endforelse

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

    <!-- Testimonies -->
    <section class="pb-5 pt-5 my-5 pt-sm-0 my-sm-0">
        <div class="container p-sm-5 text-center">
            <h1 class="mt-2 mb-5">Testimonies</h1>

            <div class="row ms-auto">
                <div class="col-md-6 m-auto">
                    <div
                        id="testimonies"
                        class="carousel slide"
                        data-bs-ride="carousel"
                    >
                        <div class="carousel-inner">

                            @forelse($testimonies as $index => $testimony)
                                <div class="carousel-item {!! $index == 0 ? 'active' : '' !!}">
                                    <div class="text-center shadow">
                                        <img
                                            {{--                                            src="https://randomuser.me/api/portraits/men/11.jpg"--}}
                                            src="{{ $testimony->image == null ? asset('sysImages/person.png') : asset('images/testimony/' . $testimony->image) }}"
                                            alt="executive"
                                            class="rounded-circle img-fluid"
                                        />
                                        <h5 class="my-3">
                                            <strong>
                                                {{ $testimony->name }}
                                            </strong>
                                        </h5>
                                        <p style="white-space: pre-wrap" class="pb-3">{{ $testimony->testimony }}</p>
                                    </div>
                                </div>
                            @empty
                                <p class="lead py-5 my-5">
                                    No testimony in the system at the moment...
                                </p>
                            @endforelse

                            <button
                                class="carousel-control-prev"
                                type="button"
                                data-bs-target="#testimonies"
                                data-bs-slide="prev"
                            >
									<span
                                        class="carousel-control-prev-icon"
                                        aria-hidden="true"
                                    ></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button
                                class="carousel-control-next"
                                type="button"
                                data-bs-target="#testimonies"
                                data-bs-slide="next"
                            >
									<span
                                        class="carousel-control-next-icon"
                                        aria-hidden="true"
                                    ></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('testimonies') }}" class="btn btn-nubsBlue mt-2">
                View all testimonies <i class="bi bi-chevron-right"></i>
            </a>

        </div>
    </section>

@endsection
