@extends('Theme.master')

@section('contact-active', 'active')
@section('title', 'Contact');

@section('t1', 'Contact Page');
@section('t2', 'Travel With Yassine');
@section('t3', 'Welcome');

@section('content')
    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>California United States</h3>
                            <p>Santa monica bullevard</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9">



                    {{-- CODE MESSAGE ENVOYER AVEC SUCEES PARAMETRE STATUS  --}}
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- START FORM CONTACT  --}}
                    <form class="form-contact contact_form" action="{{ route('contact.store') }}" method="post"
                        id="contactForm" novalidate="novalidate">
                        @csrf





                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-group">

                                    {{-- champ name  --}}
                                    <input value = "{{ old ('name') }}" class="form-control" name="name" type="text" placeholder="Enter your name">

                                    {{-- message error --}}
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">

                                    {{-- champ email  --}}
                                    <input  value = "{{ old ('email') }}" class="form-control" name="email" type="email"
                                        placeholder="Enter email address">

                                    {{-- message error --}}
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">

                                    {{-- message subject --}}
                                    <input value = "{{ old ('subjuct') }}"  class="form-control" name="subjuct" type="text" placeholder="Enter Subject">

                                    {{-- message error --}}
                                    @error('subjuct')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                  {{-- champ message  --}}
                                    <textarea class="form-control different-control w-100" name="message" cols="30" rows="5"
                                        placeholder="Enter Message">
                                         {{ old ('message') }} 
                                         </textarea>

                                    {{-- message error --}}
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                            <button type="submit" class="button button--active button-contactForm">Send Message</button>
                        </div>
                    </form>
                    {{-- END FORM CONTACT  --}}
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
