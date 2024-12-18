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

                    {{-- Start Param Message Success  --}}
                    @if (session('status_blog_delete'))
                        <div class="alert alert-success">
                            {{ session('status_blog_delete') }}
                        </div>
                    @endif
                    {{-- End Param Message Success  --}}





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
                                            <a href="{{ route('blogs.show', ['blog' => $d]) }}" target="_blank"
                                                class="text-dark">
                                                {{ $d->name }}
                                            </a>

                                        </td>



                                        <td width= '40%'>
                                            <a href="{{ route('blogs.edit', ['blog' => $d]) }}"
                                                class="btn btn-primary">Edit</a>

                                            <form action="{{ route('blogs.destroy', ['blog' => $d]) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}


                                                {{-- =================================================================================================== --}}

                                              

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#modal-{{ $d->id }}">
                                                    Delete
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="modal-{{ $d->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="modalLabel-{{ $d->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalLabel-{{ $d->id }}">
                                                                    Confirm Deletion</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete this item  ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>


                                          




                                            {{-- ======================================================================================================== --}}









                                            </form>

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
