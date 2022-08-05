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
            <form action="{{ route('executives_for_batch') }}" method="POST">
                @csrf
                <p class="h4 pb-4 text-center">Please select a year group</p>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="ms-auto w-50">
                        <div class="form-group">
                            <select name="year_group_id" id="yearGroup" class="form-control">
                                @foreach($year_groups as $year_group)
                                    <option value="{{ $year_group->id }}">{{ $year_group->year_group }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-nubsBlue me-auto ms-4">
                        Submit
                    </button>
                </div>
            </form>

            <!-- Result of search -->
            <h2 class="my-5">{{ $batch }} Batch of Executives</h2>
            <div class="row text-center g-4">
                @forelse($executives as $executive)
                    <div class="col-md-6 col-lg-3">
                        <div class="card text-center shadow">
                            <div class="card-body">
                                <img
                                    src="{{ asset('images/executive/' . $executive->photo) }}"
                                    alt="{{ $executive->name }}"
                                    class="rounded-circle"
                                />
                                <h5 class="card-title my-2">{{ $executive->name }}</h5>
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
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="lead py-5 my-5">
                        No executive added for this year group...
                    </p>
                @endforelse

            </div>
        </div>
    </section>
@endsection
