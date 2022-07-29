@extends("cms/layout/_header")

@section("cms_content")

    <!-- Weekly Activities -->
    <section class="p-sm-5 pt-5 mt-3 mt-sm-0 pt-sm-0">
        <div class="container text-center">
            <h1 class="pt-5 pb-5">Weekly Activities</h1>
            <div class="row g-4">
                @foreach($activities as $activity)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow">
                            <img
                                src="{{ asset('sysImages/nubs_logo.png') }}"
                                alt="sunday"
                                class="card-img-top"
                            />
                            <div class="card-body">
                                <div class="card-title text-capitalize my-3 h3">{{ $activity->service }}</div>
                                <div class="card-text">
                                    <p class="mb-0 text-capitalize"><strong>Day:</strong> {{ $activity->day }}</p>
                                    <p class="mb-0"><strong>Time:</strong> {{ $activity->time }}</p>
                                    <p class="mb-0 text-capitalize"><strong>Location:</strong> {{ $activity->location }}</p>
                                </div>
                                <div class="card-footer pb-0">
                                    <button
                                        class="btn btn-success"
                                        type="button"
                                        data-bs-target="#wa{{ $activity->id }}"
                                        data-bs-toggle="modal"
                                    >
                                        Edit <i class="bi bi-pencil-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="wa{{ $activity->id }}" tabindex="-1">
                        <div class="modal-dialog modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-capitalize">{{ $activity->service }}</h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="Image" class="lead"> Image </label>

                                            <input
                                                type="file"
                                                accept="image/*"
                                                class="form-control"
                                            />
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="start_time" class="lead">Time </label>
                                            <input type="text" value="{{ $activity->time }}" class="form-control" name="time" id="time" placeholder="e.g: 6:30pm to 8:00pm">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="location" class="lead"> Location </label>
                                            <select
                                                name="location"
                                                id="location"
                                                class="form-control"
                                            >
                                                <option value="assembly hall">Assembly Hall</option>
                                                <option value="crt (top)">CRT (Top)</option>
                                                <option value="crt (bottom)">CRT (Bottom)</option>
                                                <option value="new life baptist church">New Life Baptist Church</option>
                                                <option value="casford field">Casford Field</option>
                                            </select>
                                        </div>

                                        <button class="btn btn-nubsBlue mt-3 px-3 rounded-pill">
                                            Save
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
