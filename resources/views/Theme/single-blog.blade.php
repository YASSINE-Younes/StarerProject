 @extends('Theme.master')
 @section('title', $blog->name);


 @section('t2', $blog->name);
 @section('t3', $blog->category->name);

 @section('content')

     <!--================ Start Blog Post Area =================-->
     <section class="blog-post-area section-margin">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8">
                     <div class="main_blog_details">

                         <img class="img-fluid" src="{{ asset('storage') }}/blogs/{{ $blog->image }}" alt="">

                         {{-- Title  --}}
                         <a href="#">
                             <h4>{{ $blog->name }}</h4>
                         </a>

                         <div class="user_details">
                             <div class="float-right mt-sm-0 mt-3">
                                 <div class="media">
                                     <div class="media-body">
                                         <h5>{{ $blog->user->name }}</h5>
                                         <p>{{ $blog->created_at }}</p>
                                     </div>
                                     <div class="d-flex">
                                         <img width="42" height="42" src="{{ asset('assets') }}/img/avatar.png"
                                             alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>

                         {{-- DESCRIPTION  --}}
                         <p>
                             {{ $blog->description }}
                         </p>

                     </div>

                     <div class="comments-area">
                         <h4>05 Comments</h4>
                         <div class="comment-list">
                             <div class="single-comment justify-content-between d-flex">
                                 <div class="user justify-content-between d-flex">
                                     <div class="thumb">
                                         <img src="{{ asset('assets') }}/img/avatar.png" width="50px">
                                     </div>
                                     <div class="desc">
                                         <h5><a href="#">Emilly Blunt</a></h5>
                                         <p class="date">December 4, 2017 at 3:12 pm </p>
                                         <p class="comment">
                                             Never say goodbye till the end comes!
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="comment-list">
                             <div class="single-comment justify-content-between d-flex">
                                 <div class="user justify-content-between d-flex">
                                     <div class="thumb">
                                         <img src="{{ asset('assets') }}/img/avatar.png" width="50px">
                                     </div>
                                     <div class="desc">
                                         <h5><a href="#">Maria Luna</a></h5>
                                         <p class="date">December 4, 2017 at 3:12 pm </p>
                                         <p class="comment">
                                             Never say goodbye till the end comes!
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="comment-list">
                             <div class="single-comment justify-content-between d-flex">
                                 <div class="user justify-content-between d-flex">
                                     <div class="thumb">
                                         <img src="{{ asset('assets') }}/img/avatar.png" width="50px">
                                     </div>
                                     <div class="desc">
                                         <h5><a href="#">Ina Hayes</a></h5>
                                         <p class="date">December 4, 2017 at 3:12 pm </p>
                                         <p class="comment">
                                             Never say goodbye till the end comes!
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="comment-form">
                         <h4>Leave a Reply</h4>

                         {{-- COMMENT FORM  --}}


                         {{-- CODE MESSAGE ENVOYER AVEC SUCEES PARAMETRE STATUS  --}}
                         @if (session('status_store_Comments'))
                             <div class="alert alert-success">
                                 {{ session('status_store_Comments') }}
                             </div>
                         @endif


                         <form method="POST" action="{{ route('comment.store') }}">
                             @csrf
                             <div class="form-group form-inline">


                                 <div class="form-group col-lg-6 col-md-6 name">

                                     {{-- NAME  --}}
                                     <input name ="blog_id" type="hidden" value="{{ $blog->id }}">


                                     {{-- NAME  --}}
                                     <input name ="name" type="text" class="form-control" id="name"
                                         placeholder="Enter Name" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = 'Enter Name'">

                                     {{--  MESSAGE ERROR Name  --}}
                                     @error('name')
                                         <span class="text-danger">{{ $message }}</span>
                                     @enderror

                                 </div>


                                 <div class="form-group col-lg-6 col-md-6 email">
                                     {{-- EMAIL  --}}
                                     <input name ="email" type="email" class="form-control" id="email"
                                         placeholder="Enter email address" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = 'Enter email address'">

                                     {{--  MESSAGE ERROR email  --}}
                                     @error('email')
                                         <span class="text-danger">{{ $message }}</span>
                                     @enderror
                                 </div>

                             </div>


                             <div class="form-group">
                                 {{-- SUBJECT  --}}
                                 <input name ="subject" type="text" class="form-control" id="subject"
                                     placeholder="Subject" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Subject'">

                                 {{--  MESSAGE ERROR subject  --}}
                                 @error('subject')
                                     <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>


                             <div class="form-group">
                                 {{-- MESSAGE  --}}
                                 <textarea name ="message" class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>

                                 {{--  MESSAGE ERROR message  --}}
                                 @error('message')
                                     <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>

                             {{-- BUTTON SUBMIT  --}}
                             <button type="submit" class="button submit_btn">Post Comment</button>
                         </form>
                     </div>
                 </div>

                 <!-- Start Blog Post Siddebar -->
                 @include('Theme.partials.sidebar')
                 <!-- End Blog Post Siddebar -->
             </div>
     </section>
     <!--================ End Blog Post Area =================-->
 @endsection
