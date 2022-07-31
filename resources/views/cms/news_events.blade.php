@extends("cms/layout/_header")

@section("cms_content")
    <section>
        <div class="container p-sm-5 mt-3">
            <h1>Up Coming Events</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="mt-5">
                    <img src="{{ asset('sysImages/carousel1.jpg') }}" alt="1" class="img-fluid" />

                    <div class="card-footer">
                        <a href="#" class="btn btn-danger">
                            Delete <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="mt-5">
                    <img src="../assets/carousel3.jpg" alt="1" class="img-fluid" />

                    <div class="card-footer">
                        <a href="#" class="btn btn-danger">
                            Delete <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="mt-5">
                    <img src="../assets/carousel4.jpg" alt="1" class="img-fluid" />

                    <div class="card-footer">
                        <a href="#" class="btn btn-danger">
                            Delete <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="mt-5">
                    <img src="../assets/carousel1.jpg" alt="1" class="img-fluid" />

                    <div class="card-footer">
                        <a href="#" class="btn btn-danger">
                            Delete <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </div>
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
                    <form action="#">
                        <div class="form-group">
                            <label for="flier" class="lead"> Flier </label>
                            <input type="file" accept="image/*" class="form-control" />
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
