@extends('layouts.app')
@section('main')


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Add</h4>
                <h6>Create new product</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{route('addProduct')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" name="category_id">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Product_id</label>
                            <input type="text" name="product_id">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Unique_id</label>
                            <input type="text" name="unique_id">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>created_by</label>
                            <input type="text" name="created_by">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label> is_Active</label>
                            <input type="radio" name="is_active" value="1">
                        </div>
                    </div>
                       <div class="col-lg-12">
                        <div class="form-group">
                            <label> Product Image</label>
                            <div class="image-upload">
                                <input type="file" name="image">
                                <div class="image-uploads">
                                    <img src="assets/img/icons/upload.svg" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-lg-12">
                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                    <button type="submit" class="btn btn-submit me-2">Cancel</button>
                    </div>
                </div>
                </form>
               
            </div>
        </div>

    </div>
</div>
@endsection