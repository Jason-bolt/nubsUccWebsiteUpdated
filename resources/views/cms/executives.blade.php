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
                        <form action="" method="POST" enctype="multipart/form-data">
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
                                <select name="year_group" id="year_group" class="form-control">
                                    <option value="1">2019/20</option>
                                </select>
                            </div>

                            <button class="btn btn-nubsBlue">Save changes</button>
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
                <a href="#{{ $year_group->id }}" class="btn btn-nubsBlue rounded-pill px-3 shadow my-2"
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
            <h2 class="my-5" id="#1920">2019/20 Batch of Executives</h2>
            <div class="row text-center g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/men/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                <h6 class="text-secondary mb-1">
                                    <small>
                                        <i class="bi bi-book"></i> B.Sc. Computer Science
                                    </small>
                                </h6>
                                <h6 class="text-secondary mb-1">
                                    <small>
                                        <i class="bi bi-phone"></i> 0123456789 / 0123456789
                                    </small>
                                </h6>
                                <h6 class="text-secondary mt-3 text-capitalize">
                                    <strong>
                                        music wing president
                                    </strong>
                                </h6>
                            </div>
                            <button
                                class="btn btn-nubsBlue rounded-pill py-1 px-3"
                                data-bs-toggle="modal"
                                data-bs-target="#editExecutive"
                            >
                                <i class="bi bi-pencil"></i>
                            </button>
                            <form action="" class="d-inline">
                                <button class="btn btn-danger rounded-pill py-1 px-3">
                                    <i class="ib bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Modal to edit executive information --}}
                <div class="modal fade mt-0" id="editExecutive" tabindex="-1">
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
                                <form action="" enctype="multipart/form-data">
                                    <div class="form-group mb-3">
                                        <label class="lead" for="execImage"
                                        >Executive image</label
                                        >
                                        <input
                                            type="file"
                                            class="form-control"
                                            name="execImage"
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

                                    <button class="btn btn-nubsBlue">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="py-4"></div>

            <h2 class="my-5" id="21_22">2021/22 Batch of Executives</h2>
            <div class="row text-center g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/men/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae
                                natus quisquam saepe explicabo. Id iste, minus quos autem
                                quasi est!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/women/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae
                                natus quisquam saepe explicabo. Id iste, minus quos autem
                                quasi est!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/men/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae
                                natus quisquam saepe explicabo. Id iste, minus quos autem
                                quasi est!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/women/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae
                                natus quisquam saepe explicabo. Id iste, minus quos autem
                                quasi est!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/men/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae
                                natus quisquam saepe explicabo. Id iste, minus quos autem
                                quasi est!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/women/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae
                                natus quisquam saepe explicabo. Id iste, minus quos autem
                                quasi est!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/men/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae
                                natus quisquam saepe explicabo. Id iste, minus quos autem
                                quasi est!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/women/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae
                                natus quisquam saepe explicabo. Id iste, minus quos autem
                                quasi est!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/men/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae
                                natus quisquam saepe explicabo. Id iste, minus quos autem
                                quasi est!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/women/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae
                                natus quisquam saepe explicabo. Id iste, minus quos autem
                                quasi est!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/men/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae
                                natus quisquam saepe explicabo. Id iste, minus quos autem
                                quasi est!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/women/11.jpg"
                                alt="executive"
                                class="rounded-circle"
                            />
                            <h5 class="card-title my-2">Name of executive</h5>
                            <div class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae
                                natus quisquam saepe explicabo. Id iste, minus quos autem
                                quasi est!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
