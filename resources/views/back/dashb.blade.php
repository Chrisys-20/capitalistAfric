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
                <div class="col-lg-12 " style="margin-top: 60px;;">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <h5 class="card-title">Les grands titres <span class="text-muted fw-normal ms-2">(834)</span></h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-nowrap align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="ps-4" style="width: 50px;">
                                                <div class="form-check font-size-16">
                                                   #
                                                    <label class="form-check-label" for="contacusercheck"></label>
                                                </div>
                                            </th>
                                            <th scope="col" style="width: 200px;">Grang Titre</th>
                                            <th scope="col">Id article</th>
                                            <th scope="col">Priorité</th>
                                            <th scope="col">status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach( $principaleArticle as $prinList)

                                        <tr>
                                            <th scope="row" class="ps-4">
                                            {{$loop->index}}
                                            </th>
                                            <td>
                                                <!-- <img src="dashboard/asset{{$prinList->image}}" alt="" class="avatar rounded-circle img-thumbnail me-2"> -->
                                                <a href="#" class="text-body">{{$prinList->title}}</a>
                                            </td>
                                            <td>{{$prinList->ref}}</td>
                                            @if($prinList->priority=="principale")
                                            <td><span class="badge badge-soft-primary mb-0" >Principale</span></td>
                                            @else
                                            <td><span class="badge badge-soft-warning mb-0" >Simple</span></td>
                                            @endif

                                            @if($prinList->status=="activé")
                                            <td><span class="badge badge-soft-success mb-0" >Activé</span></td>
                                            @else
                                            <td><span class="badge badge-soft-danger mb-0" >Désactivé</span></td>
                                            @endif
                                            
                                            
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
                        <a href="#" target="_blank" class="text-reset">Conditions générales</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection