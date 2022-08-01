@extends("cms.layout._header")

@section("cms_content")
    <!-- Testimonies -->
    <section class="p-sm-5 pt-5 mt-3 mt-sm-0 pt-sm-0">
        <div class="container text-center">
            <h1 class="pt-sm-5 pt-2 pb-5">Testimonies</h1>

            <!-- Add testimony button -->
            <section class="p-sm-5">
                <div class="container text-center">
                    <button
                        class="btn btn-nubsBlue"
                        data-bs-toggle="modal"
                        data-bs-target="#addTestimony"
                    >
                        Add Testimony <i class="bi bi-plus-lg"></i>
                    </button>
                </div>
            </section>

            <!-- Pending approval button -->
            <section class="pb-sm-5 p-3">
                <div class="container text-center">
                    <a href="#pendingApprovals" class="text-secondary"
                    >Testimonies Pending Approvals <i class="bi bi-arrow-down"></i
                        ></a>
                </div>
            </section>

            <!-- Cards of testimonies -->
            <div class="row g-4 pb-5">
                @forelse($accepted_testimonies as $testimony)
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
                                    <p>{{ $testimony->testimony }}</p>
                                </div>
                                <div class="mt-4">
                                    <button
                                        class="btn btn-nubsBlue rounded-pill px-3 py-1"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editTestimony{{ $testimony->id }}"
                                    >
                                        <i class="bi bi-pencil"></i> Edit
                                    </button>
                                    <form action="/cms/testimonies/{{ $testimony->id }}" method="POST" class="d-inline" onclick="return confirm('This testimony will be deleted!')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger rounded-pill py-1">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
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
                                        <form action="" enctype="multipart/form-data">
                                            <div class="form-group mb-3">
                                                <label class="lead" for="image">Image</label>
                                                <input type="file" class="form-control" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="lead" for="name">Name</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="lead" for="testimony"
                                                >Testimony message</label
                                                >
                                                <textarea
                                                    name="testimonyMessage"
                                                    id="testimonyMessage"
                                                    rows="7"
                                                    class="form-control"
                                                ></textarea>
                                            </div>
                                            <button class="btn btn-nubsBlue">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="display-6 my-5 py-5">No <span class="text-secondary"><strong>approved</strong></span> testimonies at the moment!</p>
                @endforelse
            </div>

            <!-- Pending testimonies section -->
            <h2 class="mt-5 mb-1" id="pendingApprovals"><u>Testimonies Pending Approval</u></h2>
            <p class="text-secondary mb-0 mt-2">
                <strong>
                    Testimonies pending approval can be seen only by admins.
                </strong>
            </p>
            <p class="mb-5 text-secondary">
                All testimonies apart from the admin submitted testimonies will have to be approved by an admin before it will be displayed for the public.
            </p>

            <div class="row g-4">
                @forelse($pending_testimonies as $testimony)
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
                                    <p>{{ $testimony->testimony }}</p>
                                </div>
                                <div class="mt-4">
                                    <button
                                        class="btn btn-nubsBlue rounded-pill px-3 py-1"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editTestimony{{ $testimony->id }}"
                                    >
                                        <i class="bi bi-pencil"></i> Edit
                                    </button>
                                    <!-- Approve button -->
                                    <a href="#" class="btn btn-success rounded-pill"
                                    ><i class="bi bi-check-lg"></i> Approve</a
                                    >

                                    <form action="/cms/testimonies/{{ $testimony->id }}" method="POST" class="d-inline" onclick="return confirm('This testimony will be deleted!')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger rounded-pill py-1">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
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
                                        <h5 class="my-0">Edit pending testimony</h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" enctype="multipart/form-data">
                                            <div class="form-group mb-3">
                                                <label class="lead" for="image">Image</label>
                                                <input type="file" class="form-control" />
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
                                                    name="testimonyMessage"
                                                    id="testimonyMessage"
                                                    rows="7"
                                                    class="form-control"
                                                >{{ $testimony->testimony }}</textarea>
                                            </div>
                                            <button class="btn btn-nubsBlue">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="display-6 my-5 py-5">No <span class="text-secondary"><strong>pending</strong></span> testimonies at the moment!</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Add Testimony Modal -->
    <div class="modal fade" id="addTestimony" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="my-0">Add testimony</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add_testimony') }}" method="POST" enctype="multipart/form-data" class="text-center">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="lead" for="image">Image</label>
                            <p class="my-0">
                                <small class="text-secondary">If anonymous, leave this section as is</small>
                            </p>
                            <input type="file" name="image" id="image" class="form-control" />
                        </div>
                        <div class="form-group mb-3">
                            <label class="lead" for="name">Name</label>
                            <p class="my-0">
                                <small class="text-secondary">If anonymous, leave this section as is</small>
                            </p>
                            <input type="text" name="name" id="name" class="form-control" />
                        </div>
                        <div class="form-group mb-3">
                            <label class="lead" for="testimony">Testimony message <span class="text-danger">*</span></label>
                            <textarea
                                name="testimony"
                                id="testimonyMessage"
                                rows="7"
                                class="form-control"
                                required
                            ></textarea>
                        </div>
                        <button class="btn btn-nubsBlue rounded-pill px-4">Save <i class="bi bi-save"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
