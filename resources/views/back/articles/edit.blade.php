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
                                    <form method="post" action="{{route('article.update',['ref'=>$article[0]->ref])}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturername">Titre de l'article</label>
                                                    @if($errors->has('title'))
                                                    <span class="text-danger">{{$errors->first('title')}}</span>
                                                    @endif
                                                    <input id="manufacturername" name="title"  value="{{$article[0]->title}}" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="choices-single-default" class="form-label">Catégorie</label>
                                                    @if($errors->has('categorie'))
                                                    <span class="text-danger">{{$errors->first('categorie')}}</span>
                                                    @endif
                                                    <select class="form-control" name="categorie" required id="choices-single-category">
                                                    @if($article[0]->categorie=="fi")
                                                        <option value="{{$article[0]->categorie}}">Finances </option>
                                                    @else
                                                    <option value="">Choisir la Catégorie </option>
                                                    @endif
                                                        <option value="po">Politique</option>
                                                        <option value="fi">Finances</option>
                                                        <option value="id">Industrie</option>
                                                        <option value="bo">Bourse</option>
                                                        <option value="an">Analyse</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                        <label for="formFileLg" class="form-label" style="color: red;">(Nb: La taille maximale 574*574)</label>
                                            <div class="col-md-8 input-group mb-3">
                                                <label class="input-group-text" for="inputGroupFile01"><Strong>Charger</Strong></label>
                                                <input type="file" name="image" class="form-control" id="inputGroupFile01" required>
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc3">Paragraphe1</label>
                                            @if($errors->has('paragraphe1'))
                                            <span class="text-danger">{{$errors->first('paragraphe1')}}</span>
                                            @endif
                                            <textarea class="form-control" name="paragraphe1" required id="productdesc2"  rows="8">{{$article[0]->paragraphe1}}</textarea>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Paragraphe2</label>
                                            @if($errors->has('paragraphe2'))
                                            <span class="text-danger">{{$errors->first('paragraphe2')}}</span>
                                            @endif
                                            <textarea class="form-control" name="paragraphe2" required id="productdesc3"  rows="8">{{$article[0]->paragraphe2}}</textarea>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Paragraphe3</label>
                                            @if($errors->has('paragraphe3'))
                                            <span class="text-danger">{{$errors->first('paragraphe3')}}</span>
                                            @endif
                                            <textarea class="form-control" name="paragraphe3" required  id="productdesc4"  rows="8">{{$article[0]->paragraphe3}}</textarea>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Paragraphe4</label>
                                            @if($errors->has('paragraphe4'))
                                            <span class="text-danger">{{$errors->first('paragraphe4')}}</span>
                                            @endif
                                            <textarea class="form-control"  required name="paragraphe4" id="productdesc5"  rows="8">{{$article[0]->paragraphe4}}</textarea>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Paragraphe5</label>
                                            @if($errors->has('paragraphe5'))
                                            <span class="text-danger">{{$errors->first('paragraphe5')}}</span>
                                            @endif
                                            <textarea class="form-control"  required name="paragraphe5" id="productdesc6" rows="8"> {{$article[0]->paragraphe5}}</textarea>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Paragraphe6</label>
                                            @if($errors->has('paragraphe6'))
                                            <span class="text-danger">{{$errors->first('paragraphe6')}}</span>
                                            @endif
                                            <textarea class="form-control"  required name="paragraphe6" id="productdesc7"  rows="8">{{$article[0]->paragraphe6}}</textarea>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Paragraphe7</label>
                                            @if($errors->has('paragraphe7'))
                                            <span class="text-danger">{{$errors->first('paragraphe7')}}</span>
                                            @endif
                                            <textarea class="form-control"  required name="paragraphe7" id="productdesc8"  rows="8">{{$article[0]->paragraphe7}}</textarea>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Paragraphe8</label>
                                            @if($errors->has('paragraphe8'))
                                            <span class="text-danger">{{$errors->first('paragraphe8')}}</span>
                                            @endif
                                            <textarea class="form-control"  name="paragraphe8" id="productdesc9"  rows="8">{{$article[0]->paragraphe8}}</textarea>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Paragraphe9</label>
                                            @if($errors->has('paragraphe9'))
                                            <span class="text-danger">{{$errors->first('paragraphe9')}}</span>
                                            @endif
                                            <textarea class="form-control" name="paragraphe9" id="productdesc10" rows="8">{{$article[0]->paragraphe9}}</textarea>
                                        </div>
                                        <div class="col-md-8 mb-0">
                                            <label class="form-label" for="productdesc">Paragraphe10</label>
                                            @if($errors->has('paragraphe10'))
                                            <span class="text-danger">{{$errors->first('paragraphe10')}}</span>
                                            @endif
                                            <textarea class="form-control"   name="paragraphe10" id="productdesc11"  rows="8">{{$article[0]->paragraphe10}}</textarea>
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
                    </script> © All right reserved By <span style="color: #a916a9;"><Strong>CAPITALIST AFRICA</Strong></span>.
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