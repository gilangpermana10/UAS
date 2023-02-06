@extends('layouts.dashboard')

@section('content')
<div id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Feedback form</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group mandatory">
                                        <label for="title" class="form-label">Name</label>
                                        <input type="text" id="title" class="form-control" placeholder="insert yourname" name="name"
                                            data-parsley-required="true" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="slug" class="form-label">Role</label>
                                        <input type="text" id="slug" class="form-control" placeholder="role" name="role"
                                            data-parsley-required="true" />
                                    </div>
                                </div>
                                {{-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="img-name" class="form-label">Image</label>
                                        <input type="file" id="image-name" class="form-control" name="gallery_image"
                                            data-parsley-required="true">
                                    </div>
                                </div> --}}
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="text" class="form-label">text</label>
                                        <textarea name="text" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1" name="submit">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
