 {{--  START CODE PHP ACCEDER A CATEGORY NAME SEEDER --}}
 @php
     use App\Models\Category;
     use App\Models\Blog;
     $categories = Category::all();
     $recentBlogs = Blog::latest()->take(3)->get();
 @endphp
 {{--  END CODE PHP ACCEDER A CATEGORY NAME SEEDER --}}



 <div class="col-lg-4 sidebar-widgets">
     <div class="widget-wrap">

         <div class="single-sidebar-widget newsletter-widget">
             <h4 class="single-sidebar-widget__title">Newsletter</h4>

             <div class="form-group mt-30">
                 <div class="col-autos">

                     {{--  START ALERT STATUS MESSAGE  --}}
                     @if (session('status'))
                         <div class="alert alert-success">
                             {{ session('status') }}
                         </div>
                     @endif
                     {{--  END ALERT STATUS MESSAGE  --}}


                     {{--  START FORM SUBSCRIBE POST  --}}
                     <form action="{{ route('subscriber.store') }}" method="post">

                         @csrf

                         <input name ="email" value ="{{ old('email') }}" type="text" class="form-control"
                             id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                             onblur="this.placeholder = 'Enter email'">
                         @error('email')
                             <span class="text-danger"> {{ $message }}</span>
                         @enderror

                         <button type="submit" class="bbtns d-block mt-2  w-100">Subcribe</button>
                     </form>
                 </div>
             </div>



             {{--  END FORM SUBSCRIBE POST  --}}
         </div>





         <div class="single-sidebar-widget post-category-widget">
             <h4 class="single-sidebar-widget__title">Catgory</h4>


             @if (count($categories) > 0)
                 <ul class="cat-list mt-20">
                     @foreach ($categories as $catgeory)
                         <li>
                             <a href="{{ route('theme.category', ['id' => $catgeory->id]) }}"
                                 class="d-flex justify-content-between">
                                 <p>{{ $catgeory->name }}</p>
                                 <p>({{ $catgeory->blogs->count() }})</p>

                             </a>
                         </li>
                     @endforeach

                 </ul>
             @endif
         </div>

         <div class="single-sidebar-widget popular-post-widget">
             <h4 class="single-sidebar-widget__title">Recent Post</h4>
             <div class="popular-post-list">

                 {{-- START RECENT POST   --}}

                 @if (count($recentBlogs) > 0)
                     @foreach ($recentBlogs as $b)
                         <div class="single-post-list">
                             <div class="thumb">
                                 <img class="card-img rounded-0" src="{{ asset('storage/blogs/' . $b->image) }}"
                                     alt="{{ $b->title }}">
                                 <ul class="thumb-info">
                                     <li><a href="#">{{ $b->name }}</a></li>
                                     <li><a href="#">{{ $b->created_at->format('d M, Y') }}</a></li>
                                 </ul>
                             </div>
                             <div class="details mt-20">
                                 <a href="{{ route('blogs.show' , ['blog' => $b]) }}">
                                    
                                     <h6>{{ $b->description }}</h6>
                                 </a>
                             </div>
                         </div>
                     @endforeach

                    @else
                    <h3>Aucun Post Existe</h3>
                 @endif

                 {{-- END RECENT POST   --}}







             </div>
         </div>
     </div>
 </div>
