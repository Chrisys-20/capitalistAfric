@extends('back.layout.layout')

@section('main')

<div class="main-content ">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 mt-5">
                    <div id="addproduct-accordion" class="custom-accordion">
                        <div class="card">
                            <div class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-productinfo-collapse">
                                <div class="p-4">

                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">

                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1">Entrez les informations</h5>
                                            <p class="text-muted text-truncate mb-0">dans le formulaire suivant</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse show">
                                <div class="p-4 border-top">
                                    <form method="post" action="{{route('article.edit')}}" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturername">Titre de l'article</label>
                                                    <input id="manufacturername" name="title" placeholder="Enter votre titre" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="choices-single-default" class="form-label">Catégorie</label>
                                                    <select class="form-control" name="category" id="choices-single-category">
                                                        <option value="">Choisir la Catégorie</option>
                                                        <option value="EL">Politique</option>
                                                        <option value="FA">Finances</option>
                                                        <option value="FI">Industrie</option>
                                                        <option value="FI">Bourse</option>
                                                        <option value="FI">Analyse</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-8 input-group mb-3">
                                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                                <input type="file" name="image" class="form-control" id="inputGroupFile01">
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Product Description</label>
                                            <textarea class="form-control" name="description" id="productdesc" placeholder="Enter Description" rows="8"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-4">
                <div class="col text-end">
                    <a href="#" class="btn btn-danger"> <i class="bx bx-x me-1"></i> Cancel </a>
                    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#success-btn"> <i class=" bx bx-file me-1"></i> Save </a>
                </div> <!-- end col -->
            </div> <!-- end row-->




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