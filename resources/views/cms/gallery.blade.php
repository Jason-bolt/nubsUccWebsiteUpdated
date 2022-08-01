@extends('cms.layout._header')

@section('cms_content')
    <section class="pt-5 pb-2">
        <div class="container">
            <h1 class="mb-4">Gallery</h1>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow">
                        <img
                            src="../assets/pic1.jpeg"
                            alt="sunday"
                            class="card-img-top"
                            data-bs-target="#gal1"
                            data-bs-toggle="modal"
                        />
                        <div class="card-body text-center">
                            <h3 class="card-title mt-2 mb-3">Sunday Service</h3>
                            <p class="card-text">
                                <button
                                    class="btn btn-nubsBlue rounded-pill px-4 py-1"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editTile"
                                >
                                    Edit tile
                                </button>
                                <a
                                    href="https://www.instagram.com/accounts/login/?next=/p/Cd4XvJzowOP/"
                                    target="blank"
                                    class="btn btn-secondary rounded-pill px-4 py-1"
                                >Link <i class="bi bi-instagram"></i
                                    ></a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="editTile" tabindex="-1">
                    <div class="modal-dialog modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit tile</h5>
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
                                        <label for="image" class="lead">Priview Image</label>
                                        <input
                                            type="file"
                                            class="form-control"
                                            name="priview_image"
                                        />
                                    </div>
                                    <div class="formg-group mb-3">
                                        <label for="link" class="lead">Link</label>
                                        <input type="text" name="link" class="form-control" />
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btn-nubsBlue rounded-pill px-3"
                                    >
                                        Save
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img
                                src="../assets/pic1.jpeg"
                                alt="sunday"
                                class="card-img-top"
                            />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img
                                src="../assets/pic1.jpeg"
                                alt="sunday"
                                class="card-img-top"
                            />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img
                                src="../assets/pic1.jpeg"
                                alt="sunday"
                                class="card-img-top"
                            />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img
                                src="../assets/pic1.jpeg"
                                alt="sunday"
                                class="card-img-top"
                            />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img
                                src="../assets/pic1.jpeg"
                                alt="sunday"
                                class="card-img-top"
                            />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="text-dark btn">
                        <div class="card shadow">
                            <img
                                src="../assets/pic1.jpeg"
                                alt="sunday"
                                class="card-img-top"
                            />
                            <div class="card-body">
                                <div class="card-title my-3 h3">Sunday Service</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
