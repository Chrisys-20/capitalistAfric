@extends('back.layout.layout')

@section('main')

<div class="main-content ">
    <div class="page-content">
        <div class="container-fluid mt-5">

            <div class="row">
                <div class="col-md-6 col-xl-4 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="font-size-15">Finances</h6>
                                    <h4 class="mt-3 pt-1 mb-0 font-size-22">12,253 </h4>
                                </div>
                                <div class="">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-soft-primary">
                                            <i class="bx bx-store-alt font-size-24 mb-0 text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="font-size-15">Politique</h6>
                                    <h4 class="mt-3 pt-1 mb-0 font-size-22">12,253 </h4>
                                </div>
                                <div class="">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-soft-primary">
                                        <i class="bx bx-revision font-size-24 mb-0 text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="font-size-15">Bourse</h6>
                                    <h4 class="mt-3 pt-1 mb-0 font-size-22">12,253 </h4>
                                </div>
                                <div class="">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-soft-primary">
                                        <i class="bx bx-money font-size-24 mb-0 text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="font-size-15">Analyses</h6>
                                    <h4 class="mt-3 pt-1 mb-0 font-size-22">12,253 </h4>
                                </div>
                                <div class="">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-soft-primary">
                                        <i class="bx bx-chart font-size-24 mb-0 text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="font-size-15">Industries</h6>
                                    <h4 class="mt-3 pt-1 mb-0 font-size-22">12,253 </h4>
                                </div>
                                <div class="">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-soft-primary">
                                            <i class="bx bx-store-alt font-size-24 mb-0 text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END ROW -->

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
                                            <th scope="col">Grang Titre</th>
                                            <th scope="col">Id article</th>
                                            <th scope="col">Catégorie</th>
                                            <th scope="col">status</th>
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
                                                <!-- <img src="dashboard/asset{{$List->image}}" alt="" class="avatar rounded-circle img-thumbnail me-2"> -->
                                                <a href="#" class="text-body">{{$List->title}}</a>
                                            </td>
                                            <td>{{$List->ref}}</td>
                                            <td><span class="badge badge-soft-warning mb-0">désactiver</span></td>
                                            <td><span class="badge badge-soft-danger mb-0">désactiver</span></td>
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
                                                            <a class="dropdown-item" href="#">Activer</a>
                                                            <a class="dropdown-item" href="#">Désactiver</a>
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

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

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
                        <a href="#" target="_blank" class="text-reset">Termes & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection