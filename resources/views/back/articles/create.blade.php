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
                                         @if(session()->has('message'))
                                        <div class=" flex-shrink-0 me-3" >
                                         <span id="message"  class="alert alert-success"><strong>{{session()->get('message')}}</strong></span>
                                        </div>
                                        @endif

                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1">Entrez les informations</h5>
                                            <p class="text-muted text-truncate mb-0">dans le formulaire suivant</p>
                                        </div>


                                       
                                    </div>
                                </div>
                            </div>

                            <div class="collapse show">
                                <div class="p-4 border-top">
                                    <form method="post" action="{{route('article.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturername">Titre de l'article</label>
                                                    <input id="manufacturername" name="title" placeholder="Enter votre titre" type="text" class="form-control">
                                                    @if($errors->has('title'))
                                                    <span class="text-danger">{{$errors->first('title')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="choices-single-default" class="form-label">Catégorie</label>
                                                    <select class="form-control" name="categorie" id="choices-single-category">
                                                        <option value="">Choisir la Catégorie</option>
                                                        <option value="po">Politique</option>
                                                        <option value="fi">Finances</option>
                                                        <option value="id">Industrie</option>
                                                        <option value="bo">Bourse</option>
                                                        <option value="an">Analyse</option>
                                                    </select>
                                                    @if($errors->has('categorie'))
                                                    <span class="text-danger">{{$errors->first('categorie')}}</span>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-8 input-group mb-3">
                                                <label class="input-group-text" for="inputGroupFile01">Charger</label>
                                                <input type="file" name="image" class="form-control" id="inputGroupFile01" required>
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Paragraphe1</label>
                                            @if($errors->has('paragraphe1'))
                                            <span class="text-danger">{{$errors->first('paragraphe1')}}</span>
                                            @endif
                                            <textarea class="form-control" name="paragraphe1" id="productdesc" placeholder="Entrez le premier paragraphe" rows="8"></textarea>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Paragraphe2</label>
                                            @if($errors->has('paragraphe2'))
                                            <span class="text-danger">{{$errors->first('paragraphe2')}}</span>
                                            @endif
                                            <textarea class="form-control" name="paragraphe2" id="productdesc" placeholder="Entrez le second paragraphe" rows="8"></textarea>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Paragraphe3</label>
                                            @if($errors->has('paragraphe3'))
                                            <span class="text-danger">{{$errors->first('paragraphe3')}}</span>
                                            @endif
                                            <textarea class="form-control" name="paragraphe3" id="productdesc" placeholder="Entrez le troisième paragraphe" rows="8"></textarea>
                                        </div>

                                        <div class="border-0 mb-4">
                                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-start border-bottom flex-wrap">
                                                <button type="submit" class="btn btn-danger btn-set-task w-sm-100 py-2 px-5 mx-2 text-uppercase"><i class="bx bx-x me-1"></i> Cancel</button>
                                                <button type="submit" class="btn btn-success btn-set-task w-sm-100 py-2 px-4  text-uppercase"><i class=" bx bx-file me-1"></i> Enregistrer</button>
                                            </div>
                                        </div>
                                        <!-- end row-->
                                    </form>
                                </div>
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