@extends('master')

@section('title')
Catagory
@endsection

@section('content')
<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('frontend')}}/assets/images/img2.png);">
        <div class="container">
          <div class="page-title">
            <h2>Catagory</h2>
          </div>
        </div>
      </section>

       <!-- catagory section -->
       <section class="rd-parallax bg-ebony-clay bg-image" data-on="false" data-md-on="true" style="background-image: url({{asset('frontend')}}/assets/images/catagory.png)">
        <div class="rd-parallax-layer" data-speed="0.33" data-type="media" data-url="{{asset('frontend')}}/assets/images/catagory.png"></div>
          <div class="rd-parallax-layer" data-speed="0" data-type="html">
            <div class="section-60 section-md-90">
              <div class="container">
                <h3 class="text-center">Catagory</h3>
                <p class="block-centered text-white" style="max-width: 540px;">
                  Our practice has an extensive history of long-standing relationships with law firm clients built on integrity, first-rate service, timely delivery and relevant advice.
                  
                </p>
                <div class="row row-50">
                  <div class="col-sm-6 col-lg-4">
                    <article class="icon-box-vertical icon-box-vertical-sm"><span class="novi-icon icon icon-primary icon-lg mercury-icon-chat"></span>
                      <h5 class="icon-box-header">Advertising Law</h5>
                      <p>Advertising law is a broad, fast-evolving area of law that involves vetting claims about products and managing business practices.</p>
                    </article>

                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <article class="icon-box-vertical icon-box-vertical-sm"><span class="novi-icon icon icon-primary icon-lg mercury-icon-globe"></span>
                      <h5 class="icon-box-header">Oil &amp; Gas Law</h5>
                      <p>Includes the exploration for, and the production, transportation and processing of, crude oil, natural gas and hydrocarbons.</p>
                    </article>

                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <article class="icon-box-vertical icon-box-vertical-sm"><span class="novi-icon icon icon-primary icon-lg mercury-icon-books"></span>
                      <h5 class="icon-box-header">Insurance Law</h5>
                      <p>Insurance policies sold to corporate policyholders protect against a wide variety of risks.</p>
                    </article>

                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <article class="icon-box-vertical icon-box-vertical-sm"><span class="novi-icon icon icon-primary icon-lg mercury-icon-target-2"></span>
                      <h5 class="icon-box-header">Sports Law</h5>
                      <p>Sports is a multibillion-dollar global industry enjoying unprecedented growth.</p>
                    </article>

                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <article class="icon-box-vertical icon-box-vertical-sm"><span class="novi-icon icon icon-primary icon-lg mercury-icon-presentation-3"></span>
                      <h5 class="icon-box-header">Education Law</h5>
                      <p>Education law deals with public and private institutions at all levels – primary, secondary and higher education.</p>
                    </article>

                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <article class="icon-box-vertical icon-box-vertical-sm"><span class="novi-icon icon icon-primary icon-lg mercury-icon-card"></span>
                      <h5 class="icon-box-header">Elder Law</h5>
                      <p>An impressive UI kit comprising 200+ layered PSD source files will be a useful addition to every designer’s toolbox.</p>
                    </article>

                  </div>
                </div>
                
              </div>
            </div>
          </div>
      </section>
@endsection