@extends("cms/layout/_header")

@section("cms_contet")

    <!-- Weekly Activities -->
    <section class="p-sm-5 pt-5 mt-3 mt-sm-0 pt-sm-0">
        <div class="container text-center">
            <h1 class="pt-5 pb-5">Weekly Activities</h1>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow">
                        <img
                            src="../assets/pic1.jpeg"
                            alt="sunday"
                            class="card-img-top"
                        />
                        <div class="card-body">
                            <div class="card-title my-3 h3">Sunday Service</div>
                            <div class="card-text">
                                <p class="mb-0"><strong>Day:</strong> Sunday</p>
                                <p class="mb-0"><strong>Time:</strong> 8:00am to 11:30pm</p>
                                <p class="mb-0"><strong>Location:</strong> Assembly Hall</p>
                            </div>
                            <div class="card-footer pb-0">
                                <button
                                    class="btn btn-success"
                                    type="button"
                                    data-bs-target="#wa1"
                                    data-bs-toggle="modal"
                                >
                                    Edit <i class="bi bi-pencil-square"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="wa1" tabindex="-1">
                    <div class="modal-dialog modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Sunday Service</h5>
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
                                        <label for="start_time" class="lead"> Start Time </label>
                                        <select
                                            name="start_time"
                                            id="start_time"
                                            class="form-control"
                                        >
                                            <option value="1">6:30am</option>
                                            <option value="1">7:00am</option>
                                            <option value="1">7:30am</option>
                                            <option value="1">8:00am</option>
                                            <option value="1">8:30am</option>
                                            <option value="1">9:00am</option>
                                            <option value="1">9:30am</option>
                                            <option value="1">10:00am</option>
                                            <option value="1">10:30am</option>
                                            <option value="1">11:00am</option>
                                            <option value="1">11:30am</option>
                                            <option value="1">12:00pm</option>
                                            <option value="1">12:30pm</option>
                                            <option value="1">1:00pm</option>
                                            <option value="1">1:30pm</option>
                                            <option value="1">2:00pm</option>
                                            <option value="1">2:30pm</option>
                                            <option value="1">3:00pm</option>
                                            <option value="1">3:30pm</option>
                                            <option value="1">4:00pm</option>
                                            <option value="1">4:30pm</option>
                                            <option value="1">5:00pm</option>
                                            <option value="1">5:30pm</option>
                                            <option value="1">6:00pm</option>
                                            <option value="1">6:30pm</option>
                                            <option value="1">7:00pm</option>
                                            <option value="1">7:30pm</option>
                                            <option value="1">8:00pm</option>
                                            <option value="1">8:30pm</option>
                                            <option value="1">9:00pm</option>
                                            <option value="1">9:30pm</option>
                                            <option value="1">10:00pm</option>
                                            <option value="1">10:30pm</option>
                                            <option value="1">11:00pm</option>
                                            <option value="1">11:30pm</option>
                                            <option value="1">12:00am</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="start_time" class="lead"> End Time </label>
                                        <select
                                            name="end_time"
                                            id="end_time"
                                            class="form-control"
                                        >
                                            <option value="1">6:30am</option>
                                            <option value="1">7:00am</option>
                                            <option value="1">7:30am</option>
                                            <option value="1">8:00am</option>
                                            <option value="1">8:30am</option>
                                            <option value="1">9:00am</option>
                                            <option value="1">9:30am</option>
                                            <option value="1">10:00am</option>
                                            <option value="1">10:30am</option>
                                            <option value="1">11:00am</option>
                                            <option value="1">11:30am</option>
                                            <option value="1">12:00pm</option>
                                            <option value="1">12:30pm</option>
                                            <option value="1">1:00pm</option>
                                            <option value="1">1:30pm</option>
                                            <option value="1">2:00pm</option>
                                            <option value="1">2:30pm</option>
                                            <option value="1">3:00pm</option>
                                            <option value="1">3:30pm</option>
                                            <option value="1">4:00pm</option>
                                            <option value="1">4:30pm</option>
                                            <option value="1">5:00pm</option>
                                            <option value="1">5:30pm</option>
                                            <option value="1">6:00pm</option>
                                            <option value="1">6:30pm</option>
                                            <option value="1">7:00pm</option>
                                            <option value="1">7:30pm</option>
                                            <option value="1">8:00pm</option>
                                            <option value="1">8:30pm</option>
                                            <option value="1">9:00pm</option>
                                            <option value="1">9:30pm</option>
                                            <option value="1">10:00pm</option>
                                            <option value="1">10:30pm</option>
                                            <option value="1">11:00pm</option>
                                            <option value="1">11:30pm</option>
                                            <option value="1">12:00am</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="location" class="lead"> Location </label>
                                        <select
                                            name="location"
                                            id="location"
                                            class="form-control"
                                        >
                                            <option value="1">Assembly Hall</option>
                                            <option value="1">CRT (Top)</option>
                                            <option value="1">CRT (Bottom)</option>
                                            <option value="1">New Life Baptist Church</option>
                                            <option value="1">Casford Field</option>
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

                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow">
                        <img
                            src="../assets/pic1.jpeg"
                            alt="sunday"
                            class="card-img-top"
                        />
                        <div class="card-body">
                            <div class="card-title my-3 h3">Prayer Force</div>
                            <div class="card-text">
                                <p class="mb-0"><strong>Day:</strong> Monday</p>
                                <p class="mb-0"><strong>Time:</strong> 7:00pm to 8:30pm</p>
                                <p class="mb-0"><strong>Location:</strong> Casford Feild</p>
                            </div>
                            <div class="card-footer pb-0">
                                <button
                                    class="btn btn-success"
                                    type="button"
                                    data-bs-target="#wa1"
                                    data-bs-toggle="modal"
                                >
                                    Edit <i class="bi bi-pencil-square"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow">
                        <img
                            src="../assets/pic1.jpeg"
                            alt="sunday"
                            class="card-img-top"
                        />
                        <div class="card-body">
                            <div class="card-title my-3 h3">Midweek Service</div>
                            <div class="card-text">
                                <p class="mb-0"><strong>Day:</strong> Thursday</p>
                                <p class="mb-0"><strong>Time:</strong> 6:30pm to 8:00pm</p>
                                <p class="mb-0">
                                    <strong>Location:</strong> New Life Baptist
                                </p>
                            </div>
                            <div class="card-footer pb-0">
                                <button
                                    class="btn btn-success"
                                    type="button"
                                    data-bs-target="#wa1"
                                    data-bs-toggle="modal"
                                >
                                    Edit <i class="bi bi-pencil-square"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
