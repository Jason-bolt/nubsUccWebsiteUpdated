@extends("cms/layout/_header")

@section("cms_content")

    <!-- Weekly Activities -->
    <section class="p-sm-5 pt-5 mt-3 mt-sm-0 pt-sm-0">
        <div class="container">
            <h1 class="pt-sm-5 pb-5">Weekly Activities</h1>
            <div class="row g-4 text-center">
                @foreach($activities as $activity)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow">
                            <img
                                src="{{ $activity->image == null ? asset('sysImages/nubs_logo.png') : asset('images/weekly_activity/' . $activity->image) }}"
                                alt="{{ $activity->service }}"
                                class="card-img-top"
                            />
                            <div class="card-body">
                                <div class="card-title text-capitalize my-3 h3">{{ $activity->service }}</div>
                                <div class="card-text">
                                    <p class="mb-0 text-capitalize"><strong>Day:</strong> {{ $activity->day }}</p>
                                    <p class="mb-0"><strong>Time:</strong> {{ $activity->time }}</p>
                                    <p class="mb-2 text-capitalize"><strong>Location:</strong> {{ $activity->activity_location($activity->location_id) }}</p>
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
                                    <form action="weekly_activities/{{ $activity->id  }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                        <div class="form-group">
                                            <label for="Image" class="lead"> Image </label>
                                            <p class="text-secondary"><small><strong>If you wish to keep the current image, leave this section as is</strong></small></p>
                                            <input
                                                type="file"
                                                name="image"
                                                accept="image/*"
                                                class="form-control"
                                            />
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="time" class="lead">Time </label>
                                            <input type="text" value="{{ $activity->time }}" class="form-control" name="time" id="time" placeholder="e.g: 6:30pm to 8:00pm">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="location" class="lead"> Location </label>
                                            <select
                                                name="location"
                                                id="location"
                                                class="form-control"
                                            >
                                                <option value="1" {{ $activity->location_id == 1 ? 'selected' : '' }}>Assembly Hall</option>
                                                <option value="2" {{ $activity->location_id == 2 ? 'selected' : '' }}>New Life Baptist Church</option>
                                                <option value="3" {{ $activity->location_id == 3 ? 'selected' : '' }}>Casford Field</option>
                                                <option value="4" {{ $activity->location_id == 4 ? 'selected' : '' }}>CRT (Top)</option>
                                                <option value="5" {{ $activity->location_id == 5 ? 'selected' : '' }}>CRT (Bottom)</option>
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
