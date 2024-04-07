@extends('layouts.app')
@section('productView')
    <div class="card mb-3" style="max-width:70%; margin:2% auto;">      
        <div class="row g-0">
            <div class="col-md-4 mt-5">
                <img src="{{asset("images/{$data['image']}")}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="card-title">{{ $data['name'] }}</h1>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                    </div>
                    <h5 class="card-text" style="color:green"><small class="text-muted">1k+ bought in the last month</small>
                    </h5>
                    <hr>
                    <h3 style="display: inline;"><small class=" text-danger">-15%&nbsp;</small></h3>
                    <h3 class="fw-bold" style="display: inline;"><small class="text-success">Rs.&nbsp;{{ $data['discounted_price'] }}</small></h3><br>
                    <h6>List Price :<small class="text-decoration-line-through">Rs.&nbsp;{{ $data['list_price'] }}</small></p>
                        <h6 style="display: inline-block;">Delivery Monday, April 1. Order within <h6
                                style="display: inline;" class="text-success">&nbsp;23hrs 15 mins</h6>
                        </h6>
                        <h6><i class="bi bi-geo-alt-fill"></i><small style="color:rgb(27, 95, 255)">&nbsp;Deliver to
                                India</small></h6>
                        <h3 class="text-success" style="font-weight:normal;">In Stock</h3>
                        <h5 style="display: inline-block;">Quantity :&nbsp;</h5><select name="Quantity" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select><br>
                        <button class="btn btn-primary mt-3">Add to Cart</button>
                        <button class="btn btn-primary mt-3 d-block">Buy now</button>
                        <hr>
                        <h4 class="fw-bold">About this item</h4>
                        <p>
                           {{$data['description']}}
                        </p>
                </div>
            </div>
        </div>
    </div>
@endsection
