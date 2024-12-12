@extends('Theme.master')


@section('title', 'Register');


@section('t2', 'Add Blog');


@section('content')
    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <form method="POST" action="{{ route('register.post') }}" class="form-contact contact_form"
                        action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        @csrf

                        <div class="row">
                            <div class="col-6">

                                {{-- =========== NAME =================  --}}
                                <div class="form-group">
                                    {{-- NAME CHAMP  --}}
                                    <input class="form-control border" name="name" type="text"
                                        placeholder="Enter your name" :value="old('name')">
                                    {{-- MESSAGE ERROR NAME  --}}
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror



                                </div>




                                {{-- =========== EMAIL =================  --}}
                                <div class="form-group">
                                    {{-- EMAIL CHAMP  --}}
                                    <input class="form-control border" name="email" type="email"
                                        placeholder="Enter email address" :value="old('email')">
                                    {{--  MESSAGE ERROR EMAIL  --}}
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>




                            {{-- =========== password =================  --}}
                            <div class="col-6">
                                <div class="form-group">
                                    {{-- EMAIL password  --}}
                                    <input class="form-control border" name="password" type="password"
                                        placeholder="Enter your password">

                                    {{--  MESSAGE ERROR EMAIL  --}}
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>


                                {{-- =========== password_confirmation =================  --}}
                                <div class="form-group">

                                    {{-- EMAIL password_confirmation  --}}
                                    <input class="form-control border" name="password_confirmation" type="password"
                                        placeholder="Enter your password confirmation">
                                    {{--  MESSAGE ERROR EMAIL  --}}
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center text-md-right mt-3">
                            <a href="{{ route('login') }}" class="mx-3">Already Registred ? </a>
                            <button type="submit" class="button button--active button-contactForm">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
