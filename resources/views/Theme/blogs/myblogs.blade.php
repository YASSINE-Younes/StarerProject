@extends('Theme.master')


@section('title', 'My Blogs');


@section('t2', 'My Blogs');


@section('content')
    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <h1>User Blogs </h1>
            <div class="row">

                <div class="col-12">

                    {{-- TABLE  --}}
                    <table class="table">

                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Name</th>

                                <th scope="col">Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            @if (count($data) > 0)
                                @foreach ($data as $d)
                                    <tr>


                                        <td width='60%'>
                                            <a href="{{ route('blogs.show', ['blog' => $d]) }}" target="_blank" class="text-dark">
                                                {{ $d->name }}
                                            </a>

                                        </td>



                                        <td width= '40%'>
                                            <button class="btn btn-primary">Update</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>


                                    </tr>
                                @endforeach
                            @endif



                            </tr>
                        </tbody>
                    </table>

                    {{-- PAGINATION  --}}
                    <nav class="blog-pagination justify-content-center d-flex">
                        {{ $data->render('pagination::bootstrap-4') }}
                    </nav>





                    {{-- END TABLE  --}}
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
