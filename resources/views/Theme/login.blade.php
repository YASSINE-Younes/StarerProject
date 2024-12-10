@extends('Theme.master')


@section('title', 'Login');


@section('t2', 'Login');


@section('content')
    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">

                    <form method="POST" action="{{ route('login') }}"class="form-contact contact_form" id="contactForm"
                        novalidate="novalidate">
                        @csrf



                        {{-- =========== CHAMP EMAIL ============== --}}
                        <div class="form-group">

                            {{-- CHAMP EMAIL  --}}
                            <input name="email"  value="{{ old('email') }}" class="form-control border"  
                                type="email" placeholder="Enter email address">
                            {{-- MESSAGE ERROR EMAIL  --}}
                            @error('email')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>

                        {{-- =========== PASSWORD ============== --}}
                        <div class="form-group">
                            {{-- CHAMP EMAIL  --}}
                            <input class="form-control border" name="password" id="name" type="password"
                                placeholder="Enter your password">
                            {{-- MESSAGE ERROR EMAIL  --}}
                            @error('password')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>


                        <div class="form-group text-center text-md-right mt-3">
                            <a href="{{ route('register') }}" class="mx-3"> Sign Up ? </a>
                            <button type="submit" class="button button--active button-contactForm">Login</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
