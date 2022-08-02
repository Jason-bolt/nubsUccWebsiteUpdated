@extends('cms.layout._header')

@section('cms_content')
    <section class="pt-5 pb-2">
        <div class="container">
            <h1 class="mb-4">Gallery</h1>

            <div class="my-5">
                <button class="btn btn-nubsBlue" data-bs-toggle="modal" data-bs-target="#add_thumbnail">
                    Add thumbnail <i class="bi bi-plus-lg"></i>
                </button>
            </div>

            {{-- Add thumbnail modal --}}
            <div
                class="modal fade text-center"
                id="add_thumbnail"
                tabindex="-1"
            >
                <div class="modal-dialog modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="my-0">Add thumbnail</h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('add_album') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="lead" for="image">Thumbnail</label>
                                    <input type="file" name="image" id="image" class="form-control" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label class="lead" for="album">Album</label>
                                    <input type="text" name="album" id="album" class="form-control" placeholder="Album name" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label class="lead" for="link">Link</label>
                                    <input type="text" name="link" id="link" class="form-control" placeholder="Instagram URL" required />
                                </div>

                                <button class="btn btn-nubsBlue">Add album <i class="bi bi-save"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">

                @forelse($albums as $album)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow">
                            <img
                                src="{{ asset('images/gallery/' . $album->thumbnail) }}"
                                alt="sunday"
                                class="card-img-top"
                            />
                            <div class="card-body text-center">
                                <h3 class="card-title mt-2 mb-3">{{ $album->album }}</h3>
                                <div class="card-text d-flex justify-content-evenly">
                                    <button
                                        class="btn btn-nubsBlue rounded-pill px-4 py-1"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editTile{{ $album->id }}"
                                    >
                                        Edit <i class="bi bi-pencil"></i>
                                    </button>
                                    <a
                                        href="{{ $album->link }}"
                                        target="blank"
                                        class="btn btn-secondary rounded-pill px-4 py-1"
                                    >
                                        Link <i class="bi bi-instagram"></i>
                                    </a>
                                    <form action="gallery/{{ $album->id }}" method="POST" onsubmit="return confirm('This album will be deleted!')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger rounded-pill"> Delete <i class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade text-center" id="editTile{{ $album->id }}" tabindex="-1">
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
                                    <form action="gallery/{{ $album->id }}" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="image" class="lead">Thumbnail</label>
                                            <p class="text-secondary my-0">
                                                <small>
                                                    <strong>
                                                        To keep previous image, leave this section as is
                                                    </strong>
                                                </small>
                                            </p>
                                            <input
                                                type="file"
                                                class="form-control"
                                                name="image"
                                                id="image"
                                            />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="album" class="lead">Album</label>
                                            <input type="text" name="album" id="album" value="{{ $album->album }}" class="form-control" />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="link" class="lead">Link</label>
                                            <input type="text" name="link" id="link" class="form-control" value="{{ $album->link }}" />
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
                @empty
                    <p class="text-center display-5 my-5 py-5">No albums added!</p>
                @endforelse

            </div>
        </div>
    </section>
@endsection
