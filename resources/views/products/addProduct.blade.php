@extends('layouts.app')
@section('addProduct')
<div class="row">
    <h5 class="bi bi-plus-square-fill">&nbsp;Add new product</h5>
    <hr>
    <nav>
        <ol class="breadcrumb ">
            <li class="breadcrumb-item "><a href="/">Homepage</a></li>
            <li class="breadcrumb-item active">Add new</a></li>
        </ol>
    </nav>
    <div class="col-md-6">
        <form action="/products/store" method="post" id="productForm" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="row-md-12">
                    <label for="name" class="form-label" >Name</label>
                    <input type="text" class="form-control @if($errors->has('name')) {{'is-invalid'}} @endif" placeholder="Enter product name" name="name" id="name" >
                </div> 
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="MRP" class="form-label" >MRP</label>
                    <input type="text" placeholder="Enter the M.R.P" name="MRP" class="form-control @if($errors->has('MRP')) {{'is-invalid'}} @endif" id="MRP">
                </div> 
                <div class="col-md-6">
                    <label for="SP" class="form-label" >Selling Price</label>
                    <input type="text" placeholder="Enter selling price" name="price" id="price" class="form-control @if($errors->has('price')) {{'is-invalid'}} @endif" id="SP">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="Desc" class="form-label" >Description</label>
                    <textarea name="description" id="description" class="form-control @if($errors->has('description')) {{'is-invalid'}} @endif" id="desc"></textarea>
                </div> 
            </div>
            <div class="row mb-3">
                <div class="row-md-12">
                    <label for="image" class="form-label" >Image</label>
                    <input type="file" name="image" class="text form-control @if($errors->has('image')) {{'is-invalid'}} @endif" id="image">
                </div> 
            </div>
            <button type="submit" class="btn btn-dark">Save Product</button>
            <button type="submit" onclick="clearForm()" class="btn btn-danger ml">clear All</button>
        </form>
    </div>
</div>
@endsection