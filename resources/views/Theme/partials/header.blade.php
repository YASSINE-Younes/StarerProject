 {{--  START CODE PHP ACCEDER A CATEGORY NAME SEEDER --}}
 @php
     use App\Models\Category;
     $cats = Category::all();
 @endphp
 {{--  END CODE PHP ACCEDER A CATEGORY NAME SEEDER --}}




 <header class="header_area">
     <div class="main_menu">
         <nav class="navbar navbar-expand-lg navbar-light">
             <div class="container box_1620">
                 <!-- Brand and toggle get grouped for better mobile display -->
                 <a class="navbar-brand logo_h" href="{{ route('theme.index') }}">
                     <img src="{{ asset('assets') }}/img/logo.png" alt="">
                 </a>

                 <button class="navbar-toggler" type="button" data-toggle="collapse"
                     data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <!-- Collect the nav links, forms, and other content for toggling -->
                 <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                     <ul class="nav navbar-nav menu_nav justify-content-center">
                         <li class="nav-item @yield('home-active')"><a class="nav-link"
                                 href="{{ route('theme.index') }}">Home</a>
                         </li>

                         <li class="nav-item submenu dropdown @yield('category-active')">

                             <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                 aria-haspopup="true" aria-expanded="false">Categories </a>



                             @if (count($cats) > 0)
                                 <ul class="dropdown-menu">



                                     @foreach ($cats as $c)
                                         <li class="nav-item"><a class="nav-link"
                                                 href="{{ route('theme.category', ['id' => $c->id]) }}">{{ $c->name }}</a>
                                         </li>
                                     @endforeach
                                 </ul>
                             @endif
                         </li>
                         <li class="nav-item @yield('contact-active')"><a class="nav-link"
                                 href="{{ route('theme.contact') }}">Contact</a></li>
                     </ul>

                     <!-- Add new blog -->
                     @if (Auth::check())
                         <a href="{{ route('blogs.create') }}" class="btn btn-sm btn-primary mr-2">Add New</a>
                     @endif
                     <!-- End - Add new blog -->

                     <ul class="nav navbar-nav navbar-right navbar-social">

                         @if (!Auth::check())
                             <a href="{{ route('register') }}" class="btn btn-sm btn-warning">Register / Login</a>
                         @else
                             <li class="nav-item submenu dropdown">

                                 {{--  USER  --}}

                                 {{-- CDN ICONS --}}
                                 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
                                     rel="stylesheet">


                                 <a href="#" class="nav-link dropdown-toggle d-flex align-items-center"
                                     data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                                     style="background-color: #ff9a07; color: white; padding: 9px 15px; border-radius: 25px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-decoration: none; transition: 0.3s;">
                                     <i class="fa fa-user"
                                         style="color: white; font-size: 20px; margin-right: 10px;"></i>
                                     <span style="font-weight: bold; color:#fff;">{{ Auth::user()->name }}</span>
                                 </a>



                                  


                                 <ul class="dropdown-menu">
                                     <li class="nav-item"><a class="nav-link" href="{{ route('blogs.my-blogs') }}">
                                       My Blogs
                                            </a>
                                     </li>
                                     <li class="nav-item">


                                         <form action="{{ route('logout') }}" method="post">
                                             @csrf
                                             <a type="submit" class="nav-link" {{-- href="{{ javascript:$('form').submit(); }}">Logout</a> --}}
                                                 href="{{ route('logout') }}">Logout</a>

                                         </form>
                                     </li>
                                 </ul>
                             </li>
                         @endif





                     </ul>
                 </div>
             </div>
         </nav>
     </div>
 </header>
