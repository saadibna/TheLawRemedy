@extends('master')

@section('title')
index
@endsection

@section('content')

<main class="page-content">
        <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('frontend')}}/assets/images/about-us.jpg);">
          <div class="container">
            <div class="page-title">
              <h2>Service</h2>
            </div>
          </div>
        </section>

        <section class="section-60 section-md-75 section-xl-90">
          <div class="container">
            <div class="row row-50">
              <div class="col-lg-8 col-xl-9">
                <article class="post post-single">
                  <div class="post-image">
                    <figure><img src="{{asset('frontend')}}/assets/images/service-1.jpg" alt="" width="640" height="640"/>
                    </figure>
                  </div>
                  <div class="post-header">
                    <h4>Heading</h4>
                  </div>
                 
                  <div class="divider-fullwidth bg-gray-light"></div>
                  <div class="post-body">
                    <p>It is always a good idea to call your employment lawyer before an employee’s dismissal even if the employee has signed an iron clad termination clause. Most of my clients do so and sometimes the call helps the client save thousands of dollars. This past week – like most weeks – I had a number of calls from clients who wanted to terminate an employee.</p>
                    <p>In one case, the employer wanted to terminate a poor performer without just cause.  For various reasons, I always want to know the backstory to a potential dismissal so I started asking questions. It turns out the employee was disabled and had very recently requested accommodation. Although I have no doubt the disability had nothing to do with the desire to terminate, the employer had not done a good job of documenting several bona fide performance concerns, had not warned the employee that his employment was at risk. Lessons to be learned:<br>1) Make sure every employee signs an employment contract with a legally enforceable termination clause.</p>
                    <div class="quote-wrap-1">
                      <blockquote class="quote-minimal-bordered">
                        <p>
                          <q>Not only should you post interesting content, you should try to blog at least three times a week as a business.</q>
                        </p>
                      </blockquote>
                    </div>
                    <p>2) Always call your employment lawyer before terminating an employee even if the employee has signed a legally enforceable termination clause. 3) To avoid additional legal liability, it is sometimes necessary to delay an employee termination. Damages for human rights violations, punitive damages, and the intentional infliction of mental stress can far exceed the termination pay an employee is owed under an employment contract. For blogs discussing non-termination pay damages.</p>
                  </div>
                  
                </article>
                <div class="divider-fullwidth bg-gray-lighter"></div>
            
              </div>
              <div class="col-lg-4 col-xl-3">
                <div class="blog-aside">
                  <div class="blog-aside-item">
                    <form class="rd-search rd-search-classic" action="search-results.html" method="GET">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-search-form-input-1">Search...</label>
                        <input class="form-input" id="rd-search-form-input-1" type="text" name="s" autocomplete="off">
                      </div>
                      <button class="rd-search-submit" type="submit"></button>
                    </form>
                  </div>
                  <div class="blog-aside-item">
                    <p class="h7">Service</p>
                    <ul class="list-marked-bordered">
                      <li><a href="#"><span>Advertising </span><span class="text-dusty-gray"></span></a></li>
                      <li><a href="#"><span>Insurance </span><span class="text-dusty-gray"></span></a></li>
                      <li><a href="#"><span>Education </span><span class="text-dusty-gray"></span></a></li>
                    </ul>
                  </div>
                  <div class="blog-aside-item">
                    <p class="h7">Popular Service</p>
                    <article class="post post-preview"><a href="">
                        <div class="unit unit-horizontal unit-spacing-sm">
                          <div class="unit-left">
                            <figure class="post-image"><img src="images/post-preview-1-70x70.jpg" alt="" width="70" height="70"/>
                            </figure>
                          </div>
                          <div class="unit-body">
                            <div class="post-header">
                              <p>Securing a Judgment by way of a Charging Order</p>
                            </div>
                            
                          </div>
                        </div></a></article>
                    <article class="post post-preview"><a href="">
                        <div class="unit unit-horizontal unit-spacing-sm">
                          <div class="unit-left">
                            <figure class="post-image"><img src="images/post-preview-2-70x70.jpg" alt="" width="70" height="70"/>
                            </figure>
                          </div>
                          <div class="unit-body">
                            <div class="post-header">
                              <p>Are the Family Courts Getting Tougher?</p>
                            </div>
                            
                          </div>
                        </div></a></article>
                    <article class="post post-preview"><a href="">
                        <div class="unit unit-horizontal unit-spacing-sm">
                          <div class="unit-left">
                            <figure class="post-image"><img src="images/post-preview-3-70x70.jpg" alt="" width="70" height="70"/>
                            </figure>
                          </div>
                          <div class="unit-body">
                            <div class="post-header">
                              <p>Update on Code of Fundraising Practice</p>
                            </div>
                           
                          </div>
                        </div></a></article>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </section>

      </main>
@endsection
