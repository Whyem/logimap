@extends('layouts.master')
@section('content')
<div class="container-fluid">

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Modifier équipement</h4>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('updateequipement/'.$equipement->id)}}" method="post">
                    @csrf
                    
                    <input name="_method" type="hidden" value="PUT">

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Libellé</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" value="{{$equipement->Libelle}}" id="libelle" name="libelle">
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn  btn-primary">Modifier</button>
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
    $('.equipement').addClass('active');
    $('.sub_menu').css('display','block');
</script>

@endsection