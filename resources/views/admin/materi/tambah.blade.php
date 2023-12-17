@extends('layouts.admin.base')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Form /</span> Form Tambah</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Form Tambah Materi</h5>
                    {{-- <small class="text-muted float-end">Merged input group</small> --}}
                </div>
                <div class="card-body">
                    <form id="myForm" class="forms-sample" enctype="multipart/form-data" method="POST" 
                        action="{{route('materi.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Title</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="bx bx-user"></i
                                    ></span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="title"
                                        name="title"
                                        placeholder="Masukkan Title"
                                        aria-label="Masukkan Title"
                                        aria-describedby="basic-icon-default-fullname2"
                                        value="{{ old('title', @$materi->title) }}"
                                    />
                                </div>

                                @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Link</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="bx bx-user"></i
                                    ></span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="link"
                                        name="link"
                                        placeholder="Masukkan link"
                                        aria-label="Masukkan link"
                                        aria-describedby="basic-icon-default-fullname2"
                                        value="{{ old('link', @$materi->link) }}"
                                    />
                                </div>

                                @if ($errors->has('link'))
                                    <span class="text-danger">{{ $errors->first('link') }}</span>
                                @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection