@extends('layouts/includ')


<h1 class="text-center">La listes des pays et leurs capitales</h1>

<div class="container">
    <div class="row col-md-12 col-md-offset-2 custyle">
    <table class="table table-striped custab ">
    <thead>
    <a href="{{url('form-jointures')}}" class="liens"><button type="button" class="btn btn-success btn-xl btn3d btn-xs mb-4">
      <i class="fa fa-plus-circle"></i>Ajouter un pays</button></a>
        <tr>
            <th class="tableau">Pays</th>
            <th class="tableau">President</th>
            <th class="tableau">Capitale</th>
            <th class="tableau">Population</th>
        </tr>
    </thead>
           @foreach($data as $row)
            <tr>
                <td class="donnes">{{$row->nom}}</td>
                <td class="donnes">{{$row->president}}</ class="donnes">
                <td class="donnes">{{$row->capitale}}</td>
                <td class="donnes">{{$row->population}}</td>
            </tr>
            @endforeach
    </table>
    </div>
</div>

