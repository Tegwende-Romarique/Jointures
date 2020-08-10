@extends('layouts/includ')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Pays</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Capitale</label>
		<div class="login-form">
			<div class="sign-in-htm">

				<div class="group">
					<label for="nom" class="label">Nom</label>
					<input id="nom" type="text" class="input" name="nom">
				</div>

				<div class="group">
					<label for="president" class="label">Président</label>
					<input id="president" type="text" class="input" data-type="text" name="president">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Soumettre">
				</div>
				<div class="hr"></div>
			</div>
			<div class="for-pwd-htm">


				<div class="group">
					<label for="capitale" class="label">Capitale</label>
					<input id="capitale" type="text" class="input" name="capitale">
				</div>

				<div class="group">
					<label for="population" class="label">Population</label>
					<input id="population" type="number" class="input" name="population">
				</div>



				<div class="group">
					<a href="{{url('capitale-enregistrement')}}"><input type="submit" class="button" value="Soumettre"></a>
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div>




</div>
</div>
</body>
</html>
