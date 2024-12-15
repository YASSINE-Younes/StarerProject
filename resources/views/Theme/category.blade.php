  @extends('Theme.master')

  @section('title', 'category');
  @section('category-active', 'active')


  @section('t1', 'Category Page');
  @section('t2',  'Category : ' . $category_Name  );
  @section('t3', 'Welcome');

  @section('content')



      <!--================ Start Blog Post Area =================-->
      <section class="blog-post-area section-margin">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8">
                      <div class="row">


                          @if (isset($blogs_catgory) && count($blogs_catgory) > 0)

                              @foreach ($blogs_catgory as $blog_Category)
                                  <div class="col-md-6">
                                      <div class="single-recent-blog-post card-view">
                                          <div class="thumb">

                                              <img class="card-img rounded-0"
                                                  src="{{ asset('storage') }}/blogs/{{ $blog_Category->image }}"
                                                  alt="">





                                              <ul class="thumb-info">
                                                  <li><a href="#"><i
                                                              class="ti-user"></i>{{ $blog_Category->user->name }}</a></li>
                                                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a>
                                                  </li>
                                              </ul>
                                          </div>
                                          <div class="details mt-20">
                                              <a href="blog-single.html">
                                                  <h3>
                                                      {{ $blog_Category->name }}

                                                  </h3>
                                              </a>
                                              <p>
                                                  {{ $blog_Category->description }}

                                              </p>
                                              <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              @endforeach

                          @endif






                      </div>

                      <!-- <div class="single-recent-blog-post">
                                        <div class="thumb">
                                          <img class="img-fluid" src="{{ asset('assets') }}/img/blog/blog2.png" alt="">
                                          <ul class="thumb-info">
                                            <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                            <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                                            <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                          </ul>
                                        </div>
                                        <div class="details mt-20">
                                          <a href="blog-single.html">
                                            <h3>Woman claims husband wants to name baby girl
                                              after his ex-lover sparking.</h3>
                                          </a>
                                          <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                                          <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                                          <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                        </div>
                                      </div>

                                      <div class="single-recent-blog-post">
                                        <div class="thumb">
                                          <img class="img-fluid" src="{{ asset('assets') }}/img/blog/blog3.png" alt="">
                                          <ul class="thumb-info">
                                            <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                            <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                                            <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                          </ul>
                                        </div>
                                        <div class="details mt-20">
                                          <a href="blog-single.html">
                                            <h3>Tourist deaths in Costa Rica jeopardize safe dest
                                              ination reputation all time. </h3>
                                          </a>
                                          <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                                          <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                                          <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                        </div>
                                      </div>

                                      <div class="single-recent-blog-post">
                                        <div class="thumb">
                                          <img class="img-fluid" src="{{ asset('assets') }}/img/blog/blog4.png" alt="">
                                          <ul class="thumb-info">
                                            <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                            <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                                            <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                          </ul>
                                        </div>
                                        <div class="details mt-20">
                                          <a href="blog-single.html">
                                            <h3>Tourist deaths in Costa Rica jeopardize safe dest
                                              ination reputation all time.  </h3>
                                          </a>
                                          <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                                          <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                                          <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                        </div>
                                      </div> -->



                      <div class="row">
                          <div class="col-lg-12">
                              <nav class="blog-pagination justify-content-center d-flex">
                                  {{ $blogs_catgory->render('pagination::bootstrap-4') }}

                              </nav>
                          </div>
                      </div>
                  </div>

                  <!-- Start Blog Post Siddebar -->

                  @include('Theme.partials.sidebar')
                  <!-- End Blog Post Siddebar -->
              </div>
      </section>
      <!--================ End Blog Post Area =================-->

  @endsection
