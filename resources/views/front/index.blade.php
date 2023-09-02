@extends('front.layout')
@section('title')
    {{__('lang.Home')}}
@endsection

@section('content')
          <!--/////////////////////////// start slider ////////////////////////////////////-->
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach(\App\Models\Slider::where('is_active','active')->get() as $Slider)
                    <div class="swiper-slide">
                        <div class="swiper-content">
                            <div class="content content2">
                                <div>
                                    <h2 class="slider-adress">{{$Slider->name}}</h2>
                                    <p class="slider-description">{{$Slider->description}}</p>
                                    <a href="{{$Slider->link}}" class="all-btn">{{$Slider->button}}</a>
                                </div>
                            </div>
                            <div class="swiper-img">
                                <img src="{{$Slider->image}}" alt="{{$Slider->title}}">
                            </div>
                        </div>


                    </div>
                @endforeach

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination d-none"></div>
            <div class="autoplay-progress">
              <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
              </svg>
              <span></span>
            </div>
          </div>
          <!--/////////////////////////// end slider ////////////////////////////////////-->


          <main class="container">
            <!--/////////////////////////// start section 1 ///////////////////////////////-->
            <div class="row">
              <div class="col-md-12">
                <h4 class="popular-adress">
                    {{__('lang.popular')}} <span class="text-uppercase">unv</span>{{__('lang.products')}}
                </h4>
                <p class="popular-text">
                    {{__('lang.with over')}} {{$products->count()}}+
                    <span class="text-uppercase">unv</span>
                    {{__('lang.products for sale is available on')}}
                    <span class="text-uppercase">xtrade</span>
                </p>
              </div>
              <div class="col-md-12 col-lg-12 col-12">
                <div class="row popular-products">
                    @foreach($UnvPopular as $key =>$Product)
                        @if($key < 4)
                    <div class="col-md-3 col-lg-3 col-6">
                        <div class="popular-products-box">
                            <div class="div-img">
                              <img src="{{$Product->image}}" alt="{{$Product->name}}">
                            </div>
                            <div class="box-content-1">
                              <p class="popular-product-description">
                                  {{$Product->name}}
                              </p>
                              <span class="price">
                                {{$Product->price}} {{__('lang.KWD')}}
                              </span>
                            </div>
                            <div class="box-content-2">
                              <a class="details" href="{{url('Product',$Product->id)}}">{{__('lang.details')}}</a>
                              <button class="btn all-btn d-block m-auto add-cart" data-id="{{$Product->id}}" >{{__('lang.add to cart')}}</button>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>
              </div>
              <div class="col-md-12 col-lg-12 col-12 text-center">
                <div class="row popular-products">
                    @foreach($UnvPopular as  $key => $Product)
                        @if($key > 3)
                        <div class="col-md-3 col-lg-3 col-6">
                            <div class="popular-products-box">
                                <div class="div-img">
                                    <img src="{{$Product->image}}" alt="{{$Product->name}}">
                                </div>
                                <div class="box-content-1">
                                    <p class="popular-product-description">
                                        {{$Product->name}}
                                    </p>
                                    <span class="price">
                                {{$Product->price}} {{__('lang.KWD')}}
                              </span>
                                </div>
                                <div class="box-content-2">
                                    <a class="details" href="{{url('Product',$Product->id)}}">{{__('lang.details')}}</a>
                                    <button class="btn all-btn d-block m-auto add-cart" data-id="{{$Product->id}}" >{{__('lang.add to cart')}}</button>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <button class="btn load-more">{{__('lang.load more')}}</button>
            </div>
            </div>
            <!--///////////////////////////// end section 1 ///////////////////////////////-->

            <!--/////////////////////////// start section 2 ///////////////////////////////-->
            <div class="row mt-5">
              <div class="col-md-12 col-lg-12 col-12 m-auto text-center">
                <h4 class="popular-adress text-uppercase mb-5">
                  {{__('lang.BEIN SPORTS SUBSCRIPTION')}}
              </h4>
              <div class="col-md-12 col-lg-12 col-12">
                <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 popular-products p-0 justify-content-center">
                   @foreach($BeinPopular as $product)
                    <div class="col">
                      <div class="popular-products-box">
                          <div class="div-img">
                            <img src="{{$product->image}}" alt="{{$product->name}}">
                          </div>
                          <div class="box-content-1">
                            <p class="popular-product-description">
                                {{$product->name}}
                            </p>
                            <span class="price">
                              {{$product->price}} {{__('lang.KWD')}}
                            </span>
                          </div>
                          <div class="box-content-2">
                            <a class="details" href="{{url('Product',$product->id)}}">{{__('lang.Details')}}</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn all-btn d-block m-auto add-cart" data-id="{{$product->id}}" {{--data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->id}}"--}}>
                               {{__('lang.add to cart')}}
                            </button>

                              <!-- Modal -->
{{--
                            <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      lkljklljlkjk
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
--}}

                          </div>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
              </div>
            </div>
            <!--///////////////////////////// end section 2 ///////////////////////////////-->

            <!--/////////////////////////// start section 3 ///////////////////////////////-->
            <div class="row mt-5">
                <div class="col-md-6 col-lg-6 col-6">
                    <h4 class="popular-adress text-uppercase">
                      DISCOVER OUR SOLUTIONS
                    </h4>
                </div>
                <div class="col-md-6 col-lg-6 col-6 d-flex flex-row justify-content-end">
                    <a class="see-more" href="#" target="_blank">see more</a>
                </div>
                @if(\App\Models\Solution::active()->popular()->first())
                    <div class="col-md-12 add-padding">
                  <div class="add-bg-1">
                      <div class="row">
                          <div class="col-md-3 col-lg-2 col-6">
                            <div class="our-solution-img">
                                <img src="{{\App\Models\Solution::active()->popular()->first()->image}}" alt="{{\App\Models\Solution::active()->popular()->first()->name}}">
                            </div>
                          </div>
                          <div class="col-md-7 col-lg-8 col-6">
                            <div>
                                <h6 class="mt-3 fw-bold our-solution-h">{{\App\Models\Solution::active()->popular()->first()->name}}.</h6>
                                <p class="our-solution-p">
                                    {{\App\Models\Solution::active()->popular()->first()->description}}
                                </p>
                            </div>
                          </div>
                          <div class="col-md-2 col-lg-2 col-12 text-center">
                            <a href="contactus.blade.php" target="_blank" class="all-btn contact-btn mt-3 text-center">{{__('lang.CONTACT US')}}</a>
                          </div>
                      </div>
                  </div>
                </div>
                @endif
            </div>
            <!--///////////////////////////// end section 3 ///////////////////////////////-->
          </main>


       @include('front.whyus')

          <!--/////////////////////////// start section 5  ///////////////////////////////-->
        @include('front.agancies')
          <!--///////////////////////////// end section 5 ///////////////////////////////-->
@endsection
