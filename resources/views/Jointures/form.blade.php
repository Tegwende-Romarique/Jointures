@extends('layouts/includ')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

  <div class="login-wrap">
	<div class="login-html">
    <form action="{{url('EnregistrementPays')}}" method="post">
    @csrf
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Pays</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Capitale</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="nom" class="label">Pays</label>
					<input id="nom" type="text" class="input" name="nom" required>
				</div>

				<div class="group">
					<label for="president" class="label">Président</label>
					<input id="president" type="text" class="input" data-type="text" name="president" required> 
				</div>

				<div class="">
					<label for="president" class="label">Capitale</label>
					<select name="capitale_id" id="" class="input" data-type="text" name="president" required> 
                       @foreach($capitale as $capital)
                        <option value="{{$capital->id}}">{{$capital->capitale}}</option>
                        @endforeach
                    </select>
				</div>
				<div class="group">
					<button type="submit" class="button">Soumettre</button>
				</div>
				<div class="hr"></div>
			</div>

    </form>
			<div class="for-pwd-htm">
     <form action="{{url('EnregistrementCapitale')}}" method="post">
     @csrf
				<div class="group">
					<label for="capitale" class="label">Capitale</label>
					<input id="capitale" type="text" class="input" name="capitale" required>
				</div>
				<div class="group">
					<label for="population" class="label">Population</label>
					<input id="population" type="number" class="input" name="population" required>
				</div>
				<div class="group">
				<button type="submit" class="button">Soumettre</button>
				</div>     
            </form>
				<div class="hr"></div>
                                      
<a href="{{url('liste-jointures')}}" class="liens"><button type="button" class="btn btn-success btn-xl btn3d btn-xs mb-2">
      <i class="fa fa-plus-circle"></i>Voir les pays</button></a>
			</div>
		</div>
	</div>
</div>




</div>
</div>
</body>
</html>
