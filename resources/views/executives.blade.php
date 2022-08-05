@extends('myLayout.app')

@section('content')
    <!-- Executives of NUBS-->
    <section class="pt-5 pb-3">
        <div class="container">
            <h1 class="mb-4">Executives</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti
                rerum eligendi id esse odio atque quis, aperiam est temporibus
                voluptas repellendus minus consequatur aliquid praesentium iste,
                officia aliquam expedita, minima sed exercitationem? Veritatis
                voluptates sit eligendi voluptas itaque a animi, autem vitae quis
                placeat perferendis laborum suscipit exercitationem nihil in?
            </p>
        </div>
    </section>

    <!-- Executives Per Batch -->
    <section class="p-sm-5">
        <div class="container">
            <form action="#" method="get">
                <p class="h4 pb-4">Please select a year group</p>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="ms-auto w-50">
                        <div class="form-group">
                            <select name="yearGroup" id="yearGroup" class="form-control">
                                @foreach($year_groups as $year_group)
                                    <option value="{{ $year_group->year_group }}">{{ $year_group->year_group }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="me-auto ms-4">
                        <input
                            type="submit"
                            name="yearGroupSubmit"
                            class="btn btn-nubsBlue px-4"
                            value="Go"
                        />
                    </div>
                </div>
            </form>

            <!-- Result of search -->
            <h2 class="my-5">2019/20 Batch of Executives</h2>
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
