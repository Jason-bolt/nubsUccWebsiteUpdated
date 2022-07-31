@extends("cms/layout/_header")

@section("cms_content")
    <section>
        <div class="container p-sm-5 mt-3">
            <h1>Up Coming Events</h1>
        </div>

        <div class="container">
            <div class="row">
                @forelse($events as $event)
                    <div class="mt-5">
                        <img src="{{ asset('images/events/' . $event->image) }}" alt="1" class="img-fluid" />

                        <p>{{ $event->description }}</p>

                        <div class="card-footer">
                            <a href="#" class="btn btn-danger">
                                Delete <i class="bi bi-trash"></i>
                            </a>
                        </div>
                    </div>


                @empty
                    <p class="display-4 my-5 py-5">No events added yet!</p>
                @endforelse

            </div>

            <button
                type="button"
                data-bs-target="#ev1"
                data-bs-toggle="modal"
                class="btn btn-nubsBlue mt-5"
            >
                Add Event Flier <i class="bi bi-plus-lg"></i>
            </button>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="ev1" tabindex="-1">
        <div class="modal-dialog modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Event</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add-event') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="flyer" class="lead my-1"> Flyer </label>
                            <input type="file" name="image" accept="image/*" class="form-control" />
                        </div>

                        <div class="form-group mt-3">
                            <label for="description" class="lead my-1"> Description </label>
                            <textarea name="description" class="form-control" id="description" rows="4"></textarea>
                        </div>

                        <button class="btn btn-nubsBlue rounded-pill mt-4">
                            Save Event
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
