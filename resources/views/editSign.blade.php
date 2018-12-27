@extends('layouts.form')
@section('title','Personalizacja konta')
@section('navigation')

							@parent
<li ><a href="{$conf->action_root}mainPage">Główna</a></li>
							<li><a href="{$conf->action_root}personList">Przeglądaj</a></li>
							<li class="submenu current">
								<a href="#">Moje konto</a>
								<ul>
									<li><a href="{$conf->action_root}myaccountShow">Profil</a></li>
									<li><a href="{$conf->action_root}myAccountEdit">Edytuj</a></li>
									<li><a href="{$conf->action_root}friendList">Znajomi</a></li>
									<li><a href="{$conf->action_root}feaShow">Cechy</a></li>
									</ul>
							</li>@endsection
@section('descr')		
@parent
<span class="icon fa-envelope"></span>
<h2>Rejestracja do portalu i edycja profilu</h2>
<p>Pozwól innym dowiedzieć się o tobie.</p>

@endsection

@section('content')
<div class="bottom-margin">
<form action="{$conf->action_root}personSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
		<div class="col-12">
            <label for="image">Zdjęcie profilowe</label>
            <input id="image" type="text" placeholder="Image" name="image" value="{$form->image}">
        </div>
		<div class="12u$">
            <label for="nick">Nazwa użytkownika</label>
            <input id="nick" type="text" placeholder="Nick" name="nick" value="{$form->nick}">
        </div>
		<div class="col-12">
            <label for="pass">Hasło</label>
            <input id="pass" type="password" placeholder="Password" name="pass" value="{$form->pass}">
        </div>
		<div class="col-12">
            <label for="age">data ur.</label>
            <input id="age" type="date" placeholder="Birthdate" name="age" value="{$form->age}">
        </div>
		
         <label for="gender">Płeć</label>
		<div class="12u$">
        <div class="select-wrapper">
           
            <select name="gender" >
			<option value>       - Gender -     </option>
			<option value="Kobieta"> Kobieta </option>
			<option value="Mężczyzna"> Mężczyzna </option> </select>
			</div></div>
			
			
			<!--<input id="gender" type="text" placeholder="gender" name="gender" value="{$form->gender}">
        --> </div>
        
        
       
	   <label for="prefM">Czy preferujesz mężczyzn?</label>
        <div class="12u$">
        <div class="select-wrapper">
           
         <select name="prefM" >
			<option value> Wybierz </option>
			<option value="Tak"> Tak </option>
			<option value="Nie"> Nie </option> 	
			</select>
        </div></div>
	   
	   
	   <label for="prefW">Czy preferujesz kobiety?</label>
        <div class="12u$">
        <div class="select-wrapper">
           
         <select name="prefW" >
			<option value> Wybierz </option>
			<option value="Tak"> Tak </option>
			<option value="Nie"> Nie </option> 	
			</select>
        </div></div>
		
		
        
        <div class="col-12">
            <label for="email">e-mail</label>
            <input id="email" type="email" placeholder="e-mail" name="email" value="{$form->email}">
        </div>
        
	<label for="height">Wzrost</label></br>	
  100cm<input type="range" min="100" max="220" value="160"  name="height" step="1" >220cm 


        <!--<div class="col-12">
            <label for="height">Wzrost</label>
            <input id="height" type="text" placeholder="Height" name="height" value="{$form->height}">
        </div>-->
        
		
		
		
		<label for="complex">Cera</label>
        <div class="12u$">
        <div class="select-wrapper">
           
          <select name="complex" >
			<option value> Wybierz </option>
			<option value="Biała"> Biała </option>
			<option value="Oliwkowa"> Oliwkowa </option>
			<option value="Śniada"> Śniada </option>
			
			<option value="Jasnobrązowa"> Jasnobrązowa </option>	
			<option value="Brązowa"> Brązowa </option>	
			<option value="Ciemnobrązowa"> Ciemnobrązowa </option>		
			</select>
        </div></div>
		
        
        
		
		
		
		
		<label for="ecolor">Kolor oczu</label>
        <div class="12u$">
        <div class="select-wrapper">
           
          <select name="ecolor" >
			<option value> Wybierz </option>
			<option value="Niebieskie"> Niebieskie </option>
			<option value="Szare"> Szare </option>
			<option value="Zielone"> Zielone</option>
			<option value="Brązowe"> Brązowe </option>	
			<option value="Piwne"> Piwne </option>	
			</select>
        </div></div>
		
		
       
		

		<label for="hcolor">Kolor włosów</label>
        <div class="12u$">
        <div class="select-wrapper">
           
           <select name="hcolor" >
			<option value> Wybierz </option>
			<option value="Białe"> Białe </option>
			<option value="Blond"> Blond </option>
			<option value="Ciemny blond"> Ciemny blond</option>
			<option value="Rude"> Rude </option>	
			<option value="Szatyn"> Szatyn </option>
			<option value="Brunet"> Brunet </option>
			<option value="Czarne"> Czarne</option>
			<option value="Inne/Zmienne"> Inne/Zmienne</option>
			</select>
        </div></div>
        
        <div class="col-12">
            <label for="city">Miasto zamieszkania</label>
            <input id="city" type="text" placeholder="City" name="city" value="{$form->city}">
        </div>
        
        <div class="col-12">
            <label for="nation">Kraj</label>
            <input id="nation" type="text" placeholder="Nation" name="nation" value="{$form->nation}">
        </div>
		</br>
		
		{if !empty($smarty.session.user_login)}
		<p>
		<label for="text">Opis</label>
		<div class="12u$">
		
		<input id="text" type="text"  name="text" value="{$desc->text}">
		
		</div></p>
		{/if}
		
		
		
		
		
		<div class="pure-controls">
			<ul class="buttons">
			<input type="submit" class="button" value="Zapisz"/>
			
			<li><a class="button" href="{$conf->action_root}personList">Powrót</a></li>
			</ul>
		</div>
	</fieldset>
    <input type="hidden" name="id_person" value="{$form->id_person}">
</form>	
</div>

@endsection
