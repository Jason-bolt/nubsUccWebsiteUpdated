@extends("cms/layout/_header")

@section("cms_content")
    <section>
        <div class="container p-sm-5 mt-3">
            <h1>Up Coming Events</h1>
        </div>

        <div class="container">

            <button
                type="button"
                data-bs-target="#add_event"
                data-bs-toggle="modal"
                class="btn btn-nubsBlue mt-5"
            >
                Add Event <i class="bi bi-plus-lg"></i>
            </button>

            <div class="row mt-4">
                @forelse($events as $event)
                    <div class="mt-5">
                        <img src="{{ asset('images/events/' . $event->image) }}" alt="1" class="img-fluid rounded" />

                        <p style="white-space: pre-wrap" class="pt-4">{{ $event->description }}</p>

                        <div class="card-footer bg-white d-flex">
                            <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#edit_event{{ $event->id }}">
                                Edit <i class="bi bi-pencil"></i>
                            </button>
                            <form action="events-news/{{ $event->id }}" method="POST" onsubmit="return confirm('This event will be deleted!')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">
                                    Delete <i class="bi bi-trash"></i>
                                </button>
                            </form>

                        </div>
                    </div>

                    <!-- Edit event modal -->
                    <div class="modal fade text-center" id="edit_event{{ $event->id }}" tabindex="-1">
                        <div class="modal-dialog modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Event</h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">
                                    <form action="events-news/{{ $event->id }}" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="form-group">
                                            <label for="flyer" class="lead my-1"> Flyer </label>
                                            <p class="my-0">
                                                <small class="text-secondary">
                                                    <strong>
                                                        To keep previous image, leave this section as is
                                                    </strong>
                                                </small>
                                            </p>
                                            <input type="file" name="image" accept="image/*" class="form-control" />
                                        </div>

                                        <div class="form-group mt-3">
                                            <label for="description" class="lead my-1"> Description </label>
                                            <textarea name="description" class="form-control" id="description" rows="4">{{ $event->description }}</textarea>
                                        </div>

                                        <button class="btn btn-nubsBlue rounded-pill mt-4">
                                            Save Event <i class="bi bi-save"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <p class="display-4 my-5 py-5">No events added yet!</p>
                @endforelse

            </div>

        </div>
    </section>

    <!-- Add event modal -->
    <div class="modal fade" id="add_event" tabindex="-1">
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
                            Save Event <i class="bi bi-save"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
