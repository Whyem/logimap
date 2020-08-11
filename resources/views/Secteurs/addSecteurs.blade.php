@extends('layouts.master')
@section('content')
<div class="container-fluid">

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Ajouter secteur</h4>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('ajoutersecteur')}}" method="post">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Libellé</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" value="" id="libelle" name="libelle">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Ville</label>
                        <div class="col-sm-4">
                            <select class="form-control" type="text" value="" id="id_ville" name="id_ville">
                                @foreach($villes as $ville)
                                    <option value="{{ $ville->id }}"> {{ $ville->Libelle }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                        <button type="submit" class="btn  btn-primary">Ajouter</button>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="validationError">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

                       

</div><!-- container -->

<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script>
    $('.parameters').addClass('nav-active');
    $('.secteur').addClass('active');
    $('.sub_menu').css('display','block');
</script>


@endsection