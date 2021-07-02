@extends('master')

@section('title')
Attorney
@endsection

@section('content')
<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('frontend')}}/assets/images/about-us.jpg);">
        <div class="container">
          <div class="page-title">
            <h2>Our Attorney</h2>
          </div>
        </div>
      </section>

       <!-- attorney -->
       <section class="section-60 section-lg-100">
        <div class="container">
          <div class="row row-40 align-items-sm-end">
          <div class="col-sm-6 col-md-12 col-lg-3 text-center">
              <div class="block-wrap-1">
                <div class="block-number">T</div>
                <h3 class="text-normal">Experts</h3>
                <p class="h5 h5-smaller text-style-4">in Their Fields</p>
                <p>If you or your business is facing a legal challenge, contact us today to arrange a free initial consultation with an attorney.</p><a class="link link-group link-group-animated link-bold link-secondary" href="#"><span>Read more</span><span class="novi-icon icon icon-xxs icon-primary fa fa-angle-right"></span></a>
              </div>
            </div>
          @foreach($lawyer as $data)
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{$data->image}}" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">{{$data->phone}}</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">{{$data->email}}</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#" data-toggle="modal" data-target="#exampleModalCenter">{{$data->name}}</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">{{$data->designation}}</p>
                    <p class="text-caption">{{$data->worktype}}</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <!-- <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-3.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">John Doe</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Attorney</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-2.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">Vanessa Ives</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Legal Assistant</p>
                  </div>
                </div>
              </div>
            </div> -->
            
          </div>
          <!-- <div class="row row-40 align-items-sm-end">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-1.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">Amanda Smith</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Paralegal</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-2.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">John Doe</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Attorney</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-3.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">Vanessa Ives</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Legal Assistant</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-4.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">Vanessa Ives</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Legal Assistant</p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </section>
   

@endsection