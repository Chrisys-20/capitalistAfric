@extends('back.layout.layout')

@section('main')

<div class="main-content mt-5">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title">Ma liste <span class="text-muted fw-normal ms-2">(834)</span></h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                        <!-- <div>
                            <a href="#" data-bs-toggle="modal" data-bs-target=".add-new" data-bs-original-title="test"
                                class="btn btn-primary"><i class="bx bx-plus me-1"></i> test</a>
                        </div> -->
                    </div>

                </div>
            </div>

            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-nowrap align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="ps-4" style="width: 50px;">
                                                <div class="form-check font-size-16">
                                                    <input type="checkbox" class="form-check-input" id="contacusercheck">
                                                    <label class="form-check-label" for="contacusercheck"></label>
                                                </div>
                                            </th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Paragraphe1</th>
                                            <th scope="col">Id article</th>
                                            <th scope="col">Catégorie</th>
                                            <th scope="col">Priorité</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" style="width: 200px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($articleList as $List)

                                        <tr>
                                            <th scope="row" class="ps-4">
                                                <div class="form-check font-size-16">
                                                    <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                                    <label class="form-check-label" for="contacusercheck1"></label>
                                                </div>
                                            </th>
                                            <td>
                                                <!-- <img src="images/article/{{$List->image}}" alt="" class="avatar rounded-circle img-thumbnail me-2"> -->
                                                <a href="#" class="text-body">{{$List->title}}</a>
                                            </td>
                                            <td>{{$List->paragraphe1}}</td>
                                            <td>{{$List->ref}}</td>
                                            @if($List->categorie=="fi")
                                            <td><span class="badge badge-soft-warning mb-0" style="color:black;background-color:rgb(245 158 11)">Finances</span></td>
                                            @elseif($List->categorie=="id")
                                            <td><span class="badge badge-soft-warning mb-0" style="color:black;background-color:rgb(234 179 8)">Industries</span></td>
                                            @elseif($List->categorie=="po")
                                            <td><span class="badge badge-soft-warning mb-0" style="color:black;background-color:rgb(240 171 252)">Politique</span></td>
                                            @elseif($List->categorie=="bo")
                                            <td><span class="badge badge-soft-warning mb-0" style="color:black;background-color:rgb(165 180 252)">Bourse</span></td>
                                            @else
                                            <td><span class="badge badge-soft-warning mb-0" style="color:black;background-color:rgb(103 232 249)">Analyses</span></td>
                                            @endif

                                            @if($List->priority=="principale")
                                            <td><span class="badge badge-soft-primary mb-0" >Principale</span></td>
                                            @else
                                            <td><span class="badge badge-soft-warning mb-0" >Simple</span></td>
                                            @endif

                                            @if($List->status=="activé")
                                            <td><span class="badge badge-soft-success mb-0" >activé</span></td>
                                            @else
                                            <td><span class="badge badge-soft-danger mb-0" >désactivé</span></td>
                                            @endif
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="px-2 text-primary"><i class="bx bx-pencil font-size-18"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="px-2 text-danger"><i class="bx bx-trash-alt font-size-18"></i></a>
                                                    </li>
                                                    <li class="list-inline-item dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="{{route('article.list.activeted',['ref'=>$List->ref])}}">Activer</a>
                                                            <a class="dropdown-item" href="{{route('article.list.desactiveted',['ref'=>$List->ref])}}">Désactiver</a>
                                                            <a class="dropdown-item" href="{{route('article.list.priority',['ref'=>$List->ref])}}">Principale</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row g-0 align-items-center pb-4">
                <div class="col-sm-6">
                    <!-- <div>
                                    <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                                </div> -->
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-end">
                        <ul class="pagination mb-sm-0">
                            <li class="page-item disabled">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end row -->


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!--  successfully modal  -->
    <div id="success-btn" class="modal fade" tabindex="-1" aria-labelledby="success-btnLabel" aria-hidden="true" data-bs-scroll="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <i class="bx bx-check-circle display-1 text-success"></i>
                        <h4 class="mt-3">User Added Successfully</h4>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Extra Large modal example -->
    <div class="modal fade add-new" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myExtraLargeModalLabel">Add New</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="AddNew-Username">Username</label>
                                <input type="text" class="form-control" placeholder="Enter Username" id="AddNew-Username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Position</label>
                                <select class="form-select">
                                    <option selected>Select Position</option>
                                    <option>Full Stack Developer</option>
                                    <option>Frontend Developer</option>
                                    <option>UI/UX Designer</option>
                                    <option>Backend Developer</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="AddNew-Email">Email</label>
                                <input type="text" class="form-control" placeholder="Enter Email" id="AddNew-Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="AddNew-Phone">Phone</label>
                                <input type="text" class="form-control" placeholder="Enter Phone" id="AddNew-Phone">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i class="bx bx-x me-1 align-middle"></i> Cancel</button>
                            <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#success-btn" id="btn-save-event"><i class="bx bx-check me-1 align-middle"></i> Confirm</button>
                        </div>
                    </div>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © All right reserved By CAPITALIST AFRICA.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        <a href="#" target="_blank" class="text-reset">Conditions générales</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection