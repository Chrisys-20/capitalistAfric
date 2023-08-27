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
                <div class="col-lg-12 mt-5">
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
                                            <th scope="col" style="width: 350px;">Nom</th>
                                            <th scope="col">Id article</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date de publication</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th scope="row" class="ps-4">
                                                <div class="form-check font-size-16">
                                                    <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                                    <label class="form-check-label" for="contacusercheck1"></label>
                                                </div>
                                            </th>
                                            <td>
                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar rounded-circle img-thumbnail me-2">
                                                <a href="#" class="text-body">la CDAO et la France</a>
                                            </td>
                                            <td>#DS0215&@:!</td>
                                            <td><span class="badge badge-soft-success mb-0">activerr</span></td>
                                        </tr>

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