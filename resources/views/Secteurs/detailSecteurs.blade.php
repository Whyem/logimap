@extends('layouts.master')
@section('content')
<div class="container-fluid">

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">{{$secteur->Libelle}}</h4>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                    
                    <div class="form-group row centerdiv">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Libellé</label>
                        <div class="col-sm-4">
                            <div value="{{$secteur->Libelle}}" id="libelle" name="libelle">{{$secteur->Libelle}}</div>
                        </div>
                    </div>

                    <div class="form-group row centerdiv">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Ville</label>
                        <div class="col-sm-4">
                            <div value="{{$secteur->Libelle}}" id="libelle" name="libelle">{{$secteur->id_ville}}</div>
                        </div>
                    </div>

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