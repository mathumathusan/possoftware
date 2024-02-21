@extends('layouts.app')




@section('main')





<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product List</h4>
                <h6>Manage your products</h6>
            </div>
            <div class="page-btn">
                <a href="addproduct.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img" class="me-1">Add New Product</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="assets/img/icons/filter.svg" alt="img">
                                <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- <div class="card mb-0" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Product</option>
                                                <option>Macbook pro</option>
                                                <option>Orange</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Category</option>
                                                <option>Computers</option>
                                                <option>Fruits</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Sub Category</option>
                                                <option>Computer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Brand</option>
                                                <option>N/D</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12 ">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Price</option>
                                                <option>150.00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-sm-6 col-12">
                                        <div class="form-group">
                                            <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Product Name</th>
                                <th>Product_Id</th>
                                <th>Category </th>
                                <th>unique_id</th>
                                <th>Created By</th>
                                <th>Updated By</th>
                                <th>Is_Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            @foreach($products as $key=>$product)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="/products/{{$product->image}}"alt="product">
                                    </a>
                                    <a href="javascript:void(0);">{{$product->name}}</a>
                                </td>
                                <td>{{$product->product_id}}</td>
                                <td>{{$product->category_id}}</td>
                                <td>{{$product->unique_id}}</td>
                                <td>{{$product->created_by}}</td>
                                <td>{{$product->updated_by}}</td>
                                <td>{{$product->is_active===1?"yes":"No"}}</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://m.media-amazon.com/images/I/61V1l0Q8rNL._AC_SY350_QL45_.jpg" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Glassess</a>
                                </td>
                                <td>PT002</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>staff</td>
                                <td>staff</td>
                                <td>yes</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEK_w5nSv6s7V0-40MXtFGaJQmE6DuEI6Yqg&usqp=CAU" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Eye glassess</a>
                                </td>
                                <td>PT003</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>admin</td>
                                <td>admin</td>
                                <td>no</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://www.quayaustralia.co.uk/cdn/shop/files/Quay_HighKey_BlackFadePol_Side.jpg?v=1693352655" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">sunglassess</a>
                                </td>
                                <td>PT001</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>admin</td>
                                <td>admin</td>
                                <td>yes</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://m.media-amazon.com/images/I/61V1l0Q8rNL._AC_SY350_QL45_.jpg" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Glassess</a>
                                </td>
                                <td>PT002</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>staff</td>
                                <td>staff</td>
                                <td>yes</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEK_w5nSv6s7V0-40MXtFGaJQmE6DuEI6Yqg&usqp=CAU" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Eye glassess</a>
                                </td>
                                <td>PT003</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>admin</td>
                                <td>admin</td>
                                <td>no</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://www.quayaustralia.co.uk/cdn/shop/files/Quay_HighKey_BlackFadePol_Side.jpg?v=1693352655" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">sunglassess</a>
                                </td>
                                <td>PT001</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>admin</td>
                                <td>admin</td>
                                <td>yes</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://m.media-amazon.com/images/I/61V1l0Q8rNL._AC_SY350_QL45_.jpg" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Glassess</a>
                                </td>
                                <td>PT002</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>staff</td>
                                <td>staff</td>
                                <td>yes</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEK_w5nSv6s7V0-40MXtFGaJQmE6DuEI6Yqg&usqp=CAU" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Eye glassess</a>
                                </td>
                                <td>PT003</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>admin</td>
                                <td>admin</td>
                                <td>no</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://www.quayaustralia.co.uk/cdn/shop/files/Quay_HighKey_BlackFadePol_Side.jpg?v=1693352655" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">sunglassess</a>
                                </td>
                                <td>PT001</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>admin</td>
                                <td>admin</td>
                                <td>yes</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://m.media-amazon.com/images/I/61V1l0Q8rNL._AC_SY350_QL45_.jpg" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Glassess</a>
                                </td>
                                <td>PT002</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>staff</td>
                                <td>staff</td>
                                <td>yes</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEK_w5nSv6s7V0-40MXtFGaJQmE6DuEI6Yqg&usqp=CAU" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Eye glassess</a>
                                </td>
                                <td>PT003</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>admin</td>
                                <td>admin</td>
                                <td>no</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://www.quayaustralia.co.uk/cdn/shop/files/Quay_HighKey_BlackFadePol_Side.jpg?v=1693352655" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">sunglassess</a>
                                </td>
                                <td>PT001</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>admin</td>
                                <td>admin</td>
                                <td>yes</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://m.media-amazon.com/images/I/61V1l0Q8rNL._AC_SY350_QL45_.jpg" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Glassess</a>
                                </td>
                                <td>PT002</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>staff</td>
                                <td>staff</td>
                                <td>yes</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEK_w5nSv6s7V0-40MXtFGaJQmE6DuEI6Yqg&usqp=CAU" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Eye glassess</a>
                                </td>
                                <td>PT003</td>
                                <td>glassess</td>
                                <td>N/D</td>

                                <td>admin</td>
                                <td>admin</td>
                                <td>no</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection