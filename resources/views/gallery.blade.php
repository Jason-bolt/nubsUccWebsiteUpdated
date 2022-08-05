@extends('myLayout.app')

@section('content')
    <!-- Gallery-->
    <section class="pt-5 pb-2">
        <div class="container">
            <h1 class="mb-4">Gallery</h1>
            <div class="row g-4">
                @forelse($albums as $album)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow">
                            <img
                                src="{{ asset('images/gallery/' . $album->thumbnail) }}"
                                alt="{{ $album->album }}"
                                class="card-img-top"
                                data-bs-target="#gal{{ $album->id }}"
                                data-bs-toggle="modal"
                            />
                            <div class="card-body text-center">
                                <h3 class="card-title mt-2 mb-3">{{ $album->album }}</h3>
                                <p class="card-text">
                                    <a href="{{ $album->link }}" target="_blank" class="btn btn-nubsBlue rounded-pill px-4 py-1">
                                        <small> View more <i class="bi bi-instagram"></i> </small>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="gal{{ $album->id }}" tabindex="-1">
                        <div class="modal-dialog modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{ $album->album }}</h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">
                                    <img
                                        src="{{ asset('images/gallery/' . $album->thumbnail) }}"
                                        alt="{{ $album->album }}"
                                        class="card-img-top"
                                    />
                                </div>
                                <div class="modal-footer">
                                    <a href="{{ $album->link }}" target="_blank" class="btn btn-nubsBlue rounded-pill px-4 py-1">
                                        <small> View more <i class="bi bi-instagram"></i> </small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="lead my-5 py-5">
                        No album added at the moment...
                    </p>
                @endforelse

            </div>
        </div>
    </section>
@endsection
