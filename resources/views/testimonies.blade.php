@extends('myLayout.app')

@section('content')

    <section class="p-sm-5 pt-5 mt-3 mt-sm-0 pt-sm-0">
        <div class="container text-center">
            <h1 class="pt-sm-5 pt-2 pb-5">Testimonies</h1>

            <!-- Cards of testimonies -->
            <div class="row g-4 pb-5">
                @forelse($testimonies as $testimony)
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="text-center">
                                    <img
                                        src="{{ $testimony->image == null ? asset('sysImages/person.png') : asset('images/testimony/' . $testimony->image) }}"
                                        alt="executive"
                                        class="rounded-circle"
                                    />
                                    <h5 class="my-2">{{ $testimony->name }}</h5>
                                    <p style="white-space: pre-wrap">{{ $testimony->testimony }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Testimony Modal -->
                        <div
                            class="modal fade"
                            id="editTestimony{{ $testimony->id }}"
                            tabindex="-1"
                        >
                            <div class="modal-dialog modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="my-0">Edit testimony</h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="testimonies/{{ $testimony->id }}" enctype="multipart/form-data" method="POST">
                                            @method("PUT")
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label class="lead" for="image">Image</label>
                                                <p class="text-secondary my-0">
                                                    <small>
                                                        <strong>
                                                            To keep previous image, leave this section as is
                                                        </strong>
                                                    </small>
                                                </p>
                                                <input type="file" name="image" id="image" class="form-control" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="lead" for="name">Name</label>
                                                <input type="text" name="name" id="name" value="{{ $testimony->name }}" class="form-control" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="lead" for="testimony"
                                                >Testimony message</label
                                                >
                                                <textarea
                                                    name="testimony"
                                                    id="testimony"
                                                    rows="7"
                                                    class="form-control"
                                                >{{ $testimony->testimony }}</textarea>
                                            </div>
                                            <button class="btn btn-nubsBlue">Save changes <i class="bi bi-save"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="display-6 my-5 py-5">No testimony in the system at the moment...</p>
                @endforelse
            </div>

        </div>
    </section>

@endsection
