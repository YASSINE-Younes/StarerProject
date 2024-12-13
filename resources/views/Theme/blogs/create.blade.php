@extends('Theme.master')


@section('title', 'ADD NEW BLOG');


@section('t2', 'Add New Blog');


@section('content')
    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    {{-- Start Param Message Success  --}}
                    @if (session('status_blog_store'))
                        <div class="alert alert-success">
                            {{ session('status_blog_store') }}
                        </div>
                    @endif
                    {{-- End Param Message Success  --}}

                    <form method="POST" action="{{ route('blogs.store') }}" class="form-contact contact_form" id="contactForm"
                        novalidate="novalidate" enctype="multipart/form-data">
                        @csrf



                        {{-- =========== NAME =================  --}}
                        <div class="form-group">
                            {{-- NAME CHAMP  --}}
                            <input value="{{ old('name') }}" class="form-control border" name="name" type="text"
                                placeholder="Enter your name">
                            {{-- MESSAGE ERROR NAME  --}}
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- =========== Description =================  --}}
                        <div class="form-group">
                            {{-- NAME CHAMP  --}}
                            <textarea class="form-control " name="description" placeholder="Enter Description" style="height: 100px;">{{ old('description') }}</textarea>

                            {{-- MESSAGE ERROR NAME  --}}
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- =========== IMAGE =================  --}}



                        <div class="form-group">
                            {{-- NAME CHAMP  --}}
                            <input class="form-control border" name="image" type="file" :value="old('name')">
                            {{-- MESSAGE ERROR NAME  --}}
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- =========== Category ID =================  --}}
                        <div class="form-group">
                            {{-- NAME CHAMP  --}}
                            <select class="form-control border" name="category_id" placeholder="Enter Category Id"
                                :value="old('category_id')">

                                <option value="">Select Category</option>
                                @if (count($categories) > 0)
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                @endif

                            </select>

                            {{-- MESSAGE ERROR NAME  --}}
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>








                        <div class="form-group text-center text-md-right mt-3">

                            <button type="submit" class="button button--active button-contactForm"> Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
