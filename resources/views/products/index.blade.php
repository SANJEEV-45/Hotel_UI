@extends('layouts.app')
@section('main')
    <!-- home section -->
    <section id="home" class="home">
        <div class="content">
            <h3>The Biggest Sale</h3>
            <h2>going on <span class="changecontent"></span></h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur,
                voluptatem <br />Lorem ipsum dolor sit amet.
            </p>
            <h5>50% OFF</h5>
            <a href="#" class="btn">Add Cart</a>
        </div>
        <div class="img">
            <img src="{{ asset('images/background.png') }}" alt="" />
        </div>
    </section>
    <!-- home section -->
    <!-- cards -->
    <div class="container" style="margin-top: 50px">
        <div class="row" id="cards">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{asset('images/img1.png')}}" alt="" />
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src='{{asset('images/img2.png')}}' alt="" />
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{asset('images/img3.png')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    <!-- cards -->

    <!-- product cards -->
    <div class="container" id="product-cards">
        <h1 class="text-center" style="margin-top: 50px;">Men's Section</h1>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0 ">
                <div class="card">
                    <img src="./images/shirt1.png" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img src="./images/views.png"
                                    alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Shirt1</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.1000 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/shirt2.png" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img src="./images/views.png"
                                    alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Shirt2</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h5>Rs.700 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/shirt3.png" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Shirt3</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.600 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/shirt4.png" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Shirt4</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h5>Rs.850 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/pant1.png" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Pant1</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.1200<span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/pant2.png" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">pant2</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.1120 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/pant3.png" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Pant3</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.980<span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/pant4.png" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Pant4</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.1100 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/h1.png" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Pant1</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.500 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/h2.png" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">pant2</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.600<span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/h3.png" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Pant3</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.550<span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/h4.png" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Pant4</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.640 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- product cards -->

    <!-- banner -->
    <div class="container">
        <section class="banner" id="banner">
            <div class="banner-content">
                <h1>Special <span>Collection</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur,
                    <br>Lorem ipsum dolor sit amet.
                </p>
                <h5>UPTO 50% OFF</h5>
                <a href="#" class="btn">Add Cart</a>
            </div>
            <div class="img">
                <img src="./images/banner-img.png" alt="">
            </div>
        </section>
    </div>
    <!-- banner -->

    <!-- start of product view 2-->
    <div class="container" id="product-cards">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/s1.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Sport Shoes</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.2000<span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/s2.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Nike Shoes</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h5>Rs.2420 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/s3.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Nike shoes</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.1580 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/s4.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Sport Shoes</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h5>Rs.450 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/s5.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Adidas Shoes</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.1720 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/s6.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Adidas Shoes</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.540 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/s7.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Adidas shoes</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h5>Rs.650 <span><i><img src="add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./images/s8.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Adidas Shoes</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h5>Rs.2000 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of product view 2 -->


    <!-- banner2 -->
    <div class="container">
        <section class="banner2" id="banner2">

            <div class="banner2-content">
                <h1>Electronics <span>Gadgets</span></h1>
                <h2>Product <span class="bannerchangecontent"></span></h2>
                <h3>UPTO 50% OFF</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing
                    <br>Lorem ipsum dolor sit amet.
                </p>
                <a href="#" class="btn">Add Cart</a>

            </div>
            <div class="img">
                <img src="./images/headphone.png" alt="">
            </div>
        </section>
    </div>
    <!-- banner2 -->

    <!-- start of electronics gadgets cards -->
    <div class="container" id="product-cards">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <img src="./images/w1.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Smart Watch</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                        </div>
                        <h5>Rs.2100 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <img src="./images/w2.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Smart Watch</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h5>Rs.1000 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <img src="./images/w3.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Smart Watch</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h5>Rs.650<span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <img src="./images/smart watch.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Smart Watch</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                        </div>
                        <h5>Rs.1520 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <img src="./images/iphone 13 pro.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">I phone 13 pro</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h5>Rs.3000 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <img src="./images/a1.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Samsung Airpod</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h5>Rs.550 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <img src="./images/laptop1.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Best hp Laptop</h3>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h5>Rs.45000 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img
                                    src="./images/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                    src="./images/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                    src="./images/add carts.png" alt="" width="30px"></i></button>
                    </div>
                    <img src="./images/headphone.png" alt="">
                    <div class="card-body">
                        <h4 class="text-center">Gaming Headphones</h4>
                        <div class="star text-center">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                        </div>
                        <h5>Rs.970 <span><i><img src="./images/add.png" alt="" width="20px"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of electronics gadgets cards -->


    <!-- banner3 -->
    <div class="container">
        <section class="banner3" id="banner3">
            <div class="banner3-content">
                <h1>Playable<span>&nbsp;&nbsp;Toys</span></h1>
                <h2>Product <span class="bannerchangecontent"></span></h2>
                <h3>UPTO 50% OFF</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing
                    <br>Lorem ipsum dolor sit amet.
                </p>
                <a href="#" class="btn">Add Cart</a>

            </div>
            <div class="img">
                <img src="./images/Toys-PNG-File.png" alt="">
            </div>
        </section>
    </div>
@endsection
<!-- banner3 -->
