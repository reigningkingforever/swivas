@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/price-range.css')}}">
@endpush
@section('main')
<!-- vendor cover start -->
<div class="vendor-cover">
    <div>
        <img src="{{asset('storage/media/'.$shop->cover)}}" alt="" class="bg-img lazyload blur-up">
    </div>
</div>
<!-- vendor cover end -->


<!-- section start -->
<section class="vendor-profile pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="profile-left">
                    <div class="profile-image">
                        <div>
                            <img src="{{asset('storage/media/'.$shop->logo)}}" alt="" class="img-fluid mb-3">
                            <h3>{{$shop->name}}</h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h6>750 followers | 10 review</h6>
                        </div>
                    </div>
                    <div class="profile-detail flex-column">
                        
                        <h5 class="d-block">{{$shop->description}}</h5>
                        <p><i class="ti-location-pin"></i>{{$shop->city->name}}, {{$shop->state->name}}, {{$shop->country->name}}</p>
                        <p><i class="ti-email"></i> {{$shop->email}} </p>
                        <p><i class="ti-mobile"></i> {{$shop->mobile}}</p>
                    </div>
                    <div class="vendor-contact">
                        <div>
                            <h6>Contact Shop:</h6>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h6>if you have any query:</h6>
                            <a href="javascript:void(0)" class="btn btn-solid btn-sm" data-toggle="modal" data-target="#contact-seller">contact seller</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Section ends -->


<!-- collection section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 collection-filter">
                <!-- side-bar colleps block stat -->
                <div class="collection-filter-block">
                    <!-- brand filter start -->
                    <div class="collection-mobile-back">
                        <span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span>
                    </div>
                    <form id="categories_selection" action="{{route('shop.view',$shop)}}" method="GET">
                        <div class="collection-collapse-block open">
                            <h3 class="collapse-block-title">Product category</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    @foreach ($categories as $category)
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="{{$category->slug}}" name="categories[]" value="{{$category->id}}">
                                        <label class="custom-control-label" for="{{$category->slug}}">{{$category->name}}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                        <!-- price filter start here -->
                        <div class="collection-collapse-block border-0 open">
                            <h3 class="collapse-block-title">price</h3>
                            <div class="collection-collapse-block-content">
                                <div class="wrapper mt-3">
                                    <div class="range-slider">
                                        <input type="text" name="price" class="js-range-slider" value="" data-min="0" data-max="{{$products->max('price')}}" data-from="0" data-to="{{$products->max('price')}}" data-grid="true"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-2">
                            <button type="submit" class="btn btn-primary">Filter</button>
                            @if(\Illuminate\Support\Str::contains(url()->full(),['?','&']))<a href="{{route('shop.view',$shop)}}" class="btn btn-danger">Reset</a>@endif
                        </div>
                    </form>
                </div>
                {{-- <div class="collection-sidebar-banner">
                    <a href="#">
                        <img src="{{asset('assets/images/side-banner.png')}}" class="img-fluid blur-up lazyload" alt="">
                    </a>
                </div> --}}
                <!-- silde-bar colleps block end here -->
            </div>
            <div class="col">
                <div class="collection-wrapper">
                    <div class="collection-content ratio_asos">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="filter-main-btn">
                                        <span class="filter-btn btn btn-theme">
                                            <i class="fa fa-filter" aria-hidden="true"></i> Filter
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="collection-product-wrapper">
                                <div class="product-top-filter">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="product-filter-content">
                                                @if($products->isNotEmpty())
                                                    <div class="search-count">
                                                        <h5>Showing Products {{$products->firstItem()}}-{{$products->lastItem()}} of {{$products->total()}} Result</h5>
                                                    </div>
                                                @endif
                                                <div class="collection-view">
                                                    <ul>
                                                        <li><i class="fa fa-th grid-layout-view"></i></li>
                                                        <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="collection-grid-view">
                                                    <ul>
                                                        <li><img src="{{asset('assets/images/icon/2.png')}}" alt=""
                                                                class="product-2-layout-view"></li>
                                                        <li><img src="{{asset('assets/images/icon/3.png')}}" alt=""
                                                                class="product-3-layout-view"></li>
                                                        <li><img src="{{asset('assets/images/icon/4.png')}}" alt=""
                                                                class="product-4-layout-view"></li>
                                                        <li><img src="{{asset('assets/images/icon/6.png')}}" alt=""
                                                                class="product-6-layout-view"></li>
                                                    </ul>
                                                </div>
                                                <div class="product-page-per-view">
                                                    <select class="sort" name="perPage" id="perPage">
                                                        <option value="24" @if(session('perPage') && session('perPage') == 24) selected @endif>24 Products Par Page
                                                        </option>
                                                        <option value="50" @if(session('perPage') && session('perPage') == 50) selected @endif>50 Products Par Page
                                                        </option>
                                                        <option value="100" @if(session('perPage') && session('perPage') == 100) selected @endif>100 Products Par Page
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="product-page-filter">
                                                    <select class="sort" name="sortPrice" id="sortPrice">
                                                        <option value="asc" @if(session('sortPrice') && session('sortPrice') == 'abc') selected @endif>Price: Low to High</option>
                                                        <option value="desc" @if(session('sortPrice') && session('sortPrice') == 'desc') selected @endif>Price: High to Low</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper-grid">
                                    <div class="row">
                                        @foreach($products as $product)
                                            <div class="col-xl-3 col-6 col-grid-box">
                                                <div class="product-box product-wrap">
                                                    <div class="img-wrapper">
                                                        
                                                        @if($product->onSale())
                                                            <div class="lable-block">
                                                                <span class="lable3">new</span> 
                                                                <span class="lable4">on sale</span>
                                                            </div>
                                                        @endif
                                                        <div class="front">
                                                            <a href="{{route('product.view',$product)}}">
                                                                <img src="{{$product->images[0]}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="back">
                                                            <a href="{{route('product.view',$product)}}">
                                                                <img @if(count($product->images) > 1) src="{{$product->images[1]}}" @else src="{{$product->images[0]}}" @endif class="img-fluid blur-up lazyload bg-img" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-box">
                                                            <button class="add-to-cart" title="Add to cart" data-product="{{$product->id}}product">
                                                                <i class="ti-shopping-cart"></i>
                                                            </button> 
                                                            <a href="javascript:void(0)" class="add-to-wish" data-product="{{$product->id}}product" title="Add to Wishlist">
                                                                <i class="ti-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="javascript:void(0)" class="quick-view" data-product="{{$product->id}}product" title="Quick View">
                                                                <i class="ti-search" aria-hidden="true"></i>
                                                            </a> 
                                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-detail text-center">
                                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                        <a href="{{route('product.view',$product)}}">
                                                            <h6>{{$product->name}}</h6>
                                                        </a>
                                                        @if(!$product->onSale())
                                    
                                                            <h4>{{$product->shop->country->currency_symbol.''.$product->price}}</h4>
                                                        @else
                                                            <h4><del>{{$product->shop->country->currency_symbol.''.$product->price}}</del>
                                                            {{$product->shop->country->currency_symbol.''.$product->sale_price}}</h4>
                                                        @endif
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                                <div class="product-pagination">
                                    <div class="theme-paggination-block">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination">
                                                        @if(!$products->onFirstPage())
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{$products->previousPageUrl()}}" aria-label="Previous">
                                                                <span aria-hidden="true">
                                                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        @endif
                                                        {{-- <li class="page-item "><a class="page-link" href="{{route('products')}}">1</a></li> --}}
                                                        @for ($i = 1; $i <= $products->lastPage(); $i++)
                                                            <li class="page-item @if($products->currentPage() == $i) active @endif">
                                                                <a class="page-link" href="{{$products->url($i)}}">{{$i}}</a>
                                                            </li>
                                                        @endfor
                                                        {{-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
                                                        @if($products->currentPage() != $products->lastPage())
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{$products->nextPageUrl()}}" aria-label="Next">
                                                                <span aria-hidden="true">
                                                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                                </span> 
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                        @endif
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                @if($products->isNotEmpty())
                                                <div class="product-search-count-bottom">
                                                    <h5>Showing Products {{$products->firstItem()}}-{{$products->lastItem()}} of {{$products->total()}} Result</h5>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- collection section end -->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="../assets/images/pro3/1.jpg" alt="" class="img-fluid blur-up lazyload"></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2 id="product_title">Women Pink Shirt</h2>
                            <h3 id="product_price">$32.96</h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p id="product_description">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                            </div>
                            <div class="product-description border-product">
                                <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                    class="ti-angle-left"></i></button> </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button"
                                                class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                    class="ti-angle-right"></i></button></span></div>
                                </div>
                            </div>
                            <div class="product-buttons"><a href="#" class="btn btn-solid">add to cart</a> <a href="#" class="btn btn-solid">view detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="contact-seller" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('user.messages.send')}}" method="POST">@csrf
                    <input type="hidden" name="shop_id" value="{{$shop->id}}">
                    <input type="hidden" name="order_id" value="0">
                    <input type="hidden" name="customer" value="1">
                    <div class="form-group">
                        <label for="product_ids" class="col-form-label">Products:</label>
                        <select id="product_ids" name="products[]" multiple class="select2" style="width:100%">
                            @foreach ($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea name="body" class="form-control" id="message-text" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send message</button>
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                    
                </form>
            </div>
            {{-- <div class="modal-footer">
                
            </div> --}}
        </div>
    </div>
</div>

@endsection
@push('scripts')
    <!-- price range js -->
    <script src="{{asset('assets/js/price-range.js')}}"></script>
        @include('frontend.snippets')
    <script>
        $(document).on('click','.color-options',function(){
            $(this).closest('.product-box').find('.product-image').attr('src',$(this).attr('data-image'));
        });
        $(document).on('click','.add-to-cart',function(){
            var product_id = parseInt($(this).attr('data-product'));
            $.ajax({
                type:'POST',
                dataType: 'json',
                url: "{{route('product.addtocart')}}",
                data:{
                    '_token' : $('meta[name="csrf-token"]').attr('content'),
                    'product_id': product_id
                },
                success:function(data) {
                    
                    $('.cart_qty_cls').html(data.cart_count);
                    $('.cart_qty_cls,.shopping-cart').show();
                    var cart_total = 0;
                    var listing;
                    $('#shopping_list').html('');
                    $.each( data.cart, function( key, value ) {
                        listing =  `<li  id="cartlist`+key+`">
                                        <div class="media">
                                            <a href="#">
                                                <img alt="" class="mr-3"
                                                    src="`+value.product.images[0] +`">
                                            </a>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h4>`+value.product.name +`</h4>
                                                </a>
                                                <h4><span>`+value['quantity']+` x `+value['amount'] +`</span></h4>
                                            </div>
                                        </div>
                                        <div class="close-circle">
                                            <a href="javascript:void(0)" class="remove-from-cart" data-product="`+key+`product"><i class="fa fa-times" aria-hidden="true"></i></a>
                                        </div>
                                    </li>`;
                        cart_total += parseInt(value['quantity']) * parseInt(value['amount']);
                        $('#shopping_list').prepend(listing);
                    });
                    $('#cart_total').html(cart_total);
                },
                error: function (data, textStatus, errorThrown) {
                console.log(data);
                },
            });
        });   
        $(document).on('click','.add-to-wish',function(){
            var product_id = parseInt($(this).attr('data-product'));
            $.ajax({
                type:'POST',
                dataType: 'json',
                url: "{{route('product.addtowish')}}",
                data:{
                    '_token' : $('meta[name="csrf-token"]').attr('content'),
                    'product_id': product_id
                },
                success:function(data) {
                    $('#wish_counter').html(data.wish_count);
                    $('#wish_counter').show();
                },
                error: function (data, textStatus, errorThrown) {
                console.log(data);
                },
            });
        });
        $(document).on('click','.quick-view',function(){
            $("#quick-view").modal();
        });
    </script>
    <script>
        $(document).on('change','.sort',function(){
            var perPage = $('#perPage').val();
            var sortPrice = $('#sortPrice').val();
            // alert(sortPrice);
            $.ajax({
                type:'POST',
                dataType: 'json',
                url: "{{route('product.sortFilter')}}",
                data:{
                    '_token' : $('meta[name="csrf-token"]').attr('content'),
                    'perPage': perPage,
                    'sortPrice': sortPrice
                },
                success:function(data) {
                    window.location.reload()
                },
                error: function (data, textStatus, errorThrown) {
                console.log(data);
                },
            });

        });
    </script>
    <script>
        $('.select2').select2();
    </script>
@endpush