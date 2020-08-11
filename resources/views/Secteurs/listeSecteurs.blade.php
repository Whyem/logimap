@extends('layouts.master')
@section('content')

<div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Secteurs</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <div class="form-group row topaddrow">
                                                <a class="btn btn-success waves-effect waves-light addButton" href="{{ URL::to('ajoutersecteurview/') }}"> <i class="ion-plus-round"></i> Ajouter</a>
                                                <div class="col-md-4 offset-md-2">
                                                    <div class="input-group mt-2">
                                                    <form action="{{url('searchsecteur')}}" method="get" class="searchForm">
                                                        @csrf
                                                        <input type="text" class="form-control" name="libelle" id="libelle" value="{{$keyword}}">
                                                        <span class="input-group-append">
                                                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                                        </span>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                            
            
                                            <table class="table" id="my-table">
                                                <thead>
                                                    <tr class="table_header">
                                                        <th>Libellé</th>
                                                        <th>Ville</th>
                                                        <th></th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    @foreach($secteurs as $secteur)
                                                    <tr class="list_tr">
                                                        <td> <a href="{{ URL::to('detailsecteur/' . $secteur->id) }}" class="model_name">{{$secteur->Libelle}}</a></td>
                                                        <td> {{$secteur->id_ville}}</td>
                                                        <td>
                                                        <div class="tabledit-toolbar btn-toolbar interactButtons" style="text-align: left;">
                                                                <div class="btn-group btn-group-sm" style="float: none;"><a  class="btn-lg btn-info" style="float: none; margin: 5px;" href="{{ URL::to('editsecteur/' . $secteur->id) }}" ><span class="ti-pencil"></span>
                                                                </a> <form action="{{url('deletesecteur/' . $secteur->id )}}" method="post">
                                                                        @csrf
                                                                        <input name="_method" type="hidden" value="DELETE">
                                                                        
                                                                            <button type="submit" class="btn-lg btn-danger" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
                                                                        </form>
                                                                        </div>   
                                                            </div>
                                                        </td>    
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            

                        </div><!-- container -->



@endsection