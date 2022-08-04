@extends('cms.layout._header')

@section('cms_content')
    <!-- Executives of NUBS-->
    <section class="pt-5 pb-3">
        <div class="container">
            <h1 class="mb-4">Executives</h1>
        </div>
    </section>

    <section class="container mb-5 mb-sm-0">
        {{-- Button to add an executive --}}
        <button class="btn btn-nubsBlue" data-bs-toggle="modal" data-bs-target="#add_executive">
            Add an executive <i class="bi bi-plus-lg"></i>
        </button>

        {{-- Modal to add new executive --}}
        <div class="modal fade mt-0" id="add_executive" tabindex="-1">
            <div class="modal-dialog modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="my-0">Add Executive</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('add_executive') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="lead" for="image"
                                >Executive image</label
                                >
                                <input
                                    type="file"
                                    class="form-control"
                                    name="image"
                                    id="image"
                                />
                            </div>

                            <div class="form-group mb-3">
                                <label class="lead" for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="James Doe" required />
                            </div>

                            <div class="form-group mb-3">
                                <label class="lead" for="program"
                                >Program</label
                                >
                                <input type="text" id="program" name="program" class="form-control" placeholder="B.Sc. Computer Science" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="lead" for="contact"
                                >Contact</label
                                >
                                <input type="text" id="contact" name="contact" class="form-control" placeholder="0123456789 / 0123456789" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="lead" for="office"
                                >Office</label
                                >
                                <input type="text" id="office" name="office" class="form-control" placeholder="Music Wing President" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="lead" for="year_group"
                                >Year group</label
                                >
                                <select name="year_group" id="year_group" class="form-control" required>
                                    @forelse($year_groups as $year_group)
                                        <option value="{{ $year_group->id }}">{{ $year_group->year_group }}</option>
                                    @empty
                                        <option value="#" disabled>No year group added</option>
                                    @endforelse
                                </select>
                            </div>

                            <button class="btn btn-nubsBlue">Save changes <i class="bi bi-save"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Executives Per Batch -->
    <section class="p-sm-5">
        <div class="container">

            <!-- Buttons of year groups -->
            @forelse($year_groups as $year_group)
                <a href="/cms/executives/{{ $year_group->id }}#executives" class="btn btn-nubsBlue rounded-pill px-3 shadow my-2"
                >
                    {{ $year_group->year_group }}
                </a>
            @empty
                <p class="lead">
                    <small>
                        No year group added!
                    </small>
                </p>
            @endforelse

            {{-- Add a new year group --}}
            <form action="{{ route('add_year_group') }}" method="POST">
                @csrf
                <button class="btn btn-outline-secondary rounded-pill">
                    New <i class="bi bi-plus-lg"></i>
                </button>
            </form>


            <!-- Batch of Executives -->
            <h2 class="my-5" id="executives">{{ $batch }} Batch of Executives</h2>
            <div class="row text-center g-4">

                @forelse($executives as $executive)
                    <div class="col-md-6 col-lg-3">
                        <div class="card text-center shadow">
                            <div class="card-body">
                                <img
                                    src="{{ asset('images/executive/' . $executive->photo) }}"
                                    alt="executive"
                                    class="rounded-circle img-fluid"
                                />
                                <h5 class="card-title my-2 text-capitalize">{{ $executive->name }}</h5>
                                <div class="card-text">
                                    <h6 class="text-secondary mb-1 text-capitalize">
                                        <small>
                                            <i class="bi bi-book"></i> {{ $executive->program }}
                                        </small>
                                    </h6>
                                    <h6 class="text-secondary mb-1">
                                        <small>
                                            <i class="bi bi-phone"></i> {{ $executive->contact }}
                                        </small>
                                    </h6>
                                    <h6 class="text-secondary mt-3 text-capitalize">
                                        <strong>
                                            {{ $executive->office }}
                                        </strong>
                                    </h6>
                                </div>
                                <button
                                    class="btn btn-nubsBlue rounded-pill py-1 px-3"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editExecutive{{ $executive->id }}"
                                >
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <form action="/cms/executives/{{ $executive->id }}" method="POST" class="d-inline" onsubmit="return confirm('This executive will be deleted!')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger rounded-pill py-1 px-3">
                                        <i class="ib bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- Modal to edit executive information --}}
                    <div class="modal fade mt-0" id="editExecutive{{ $executive->id }}" tabindex="-1">
                        <div class="modal-dialog modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="my-0">Edit Executive</h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/cms/executives/{{ $executive->id }}" enctype="multipart/form-data" method="POST">
                                        @method('put')
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label class="lead" for="execImage"
                                            >Executive image</label>
                                            <p class="text-secondary my-0"><small><strong>If you wish to keep the current image, leave this section as is</strong></small></p>
                                            <input
                                                type="file"
                                                class="form-control"
                                                name="image"
                                                id="image"
                                            />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="lead" for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Jason Appiatu" value="{{ $executive->name }}" required />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="lead" for="program"
                                            >Program</label
                                            >
                                            <input type="text" id="program" name="program" class="form-control" placeholder="B.Sc. Computer Science" value="{{ $executive->program }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="lead" for="contact"
                                            >Contact</label
                                            >
                                            <input type="text" id="contact" name="contact" class="form-control" placeholder="0123456789 / 0123456789" value="{{ $executive->contact }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="lead" for="office"
                                            >Office</label
                                            >
                                            <input type="text" id="office" name="office" class="form-control" placeholder="Music Wing President" value="{{ $executive->office }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="lead" for="year_group"
                                            >Year group</label
                                            >
                                            <select name="year_group" id="year_group" name="year_group" class="form-control" required>
                                                @forelse($year_groups as $year_group)
                                                    <option value="{{ $year_group->id }}" {!! $executive->year_group_id == $year_group->id ? 'selected' : '' !!}>{{ $year_group->year_group }}</option>
                                                @empty
                                                    <option value="#" disabled>No year group added</option>
                                                @endforelse
                                            </select>
                                        </div>

                                        <button class="btn btn-nubsBlue">Save changes <i class="bi bi-save"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="display-6 py-5 my-5">
                        No Executive for this batch!
                    </p>
                @endforelse

            </div>

        </div>
    </section>
@endsection
