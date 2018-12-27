@extends('layouts.main')
@section('title','Lista Osób')


@section('navigation')

							@parent

							<li ><a href="{{ url('/') }}">Główna</a></li>
							<li class='current'><a href="{$conf->action_root}personList">Przeglądaj</a></li>
							
							
							
				
@endsection
@section('descr')		
@parent

<span class="icon fa-heart-o"></span>
<h2>Lista osób</h2>
<p>Zrób krok, aby poznać nowych interesujących ludzi.</p>
@endsection



@section('contbig')








								<!--{if $msgs->isMessage()}
								<div class="messages bottom-margin">
								<ul>
								{foreach $msgs->getMessages() as $msg}
								{strip}
								<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
								{/strip}
								{/foreach}
								</ul>
							</div>
							{/if}-->
<!-- ------------------------------------------------------------------------------------ -->

@foreach ($userShow as $u)

<section class="boxsh">
							<div>
							<header class="major">
							
								<h2><strong><a href="{{ route('accountShow') }}/{{$u['id']}}">{{$u['name']}}</a></strong></h2>
								
							</header>

							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<a href="{{ route('accountShow') }}/{{$u['id']}}" class="image featured"><img src="{{$u['image']}}" alt="" /></a></p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										
										<header>
											<h3>Dane</h3>
										</header>
										<p>
										
										
										 <table class='default'">
            
            <tr>
                <th>Płeć</th>
                <td>{{$u['gender']}}</td>
            </tr>
            <tr>
                <th>Wiek</th>
                <td>{{$u['age']}}
				
				
				
				
</td> 
				
       </tr>
            <tr>
                <th>Wzrost</th>
                <td>{{$u['height']}}</td>
            </tr>
        </table>
		</p>
									</section>

								</div>
							</div>
							
							
							
							</div>
							</section>
							
							@endforeach
										
										
										
										
										
	@endsection									
@section('contsmall')

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}personList">
	<legend>WYSZUKIWANIE</legend>
	<fieldset>
		<input type="text" placeholder="nick" name="nick" value="{$searchForm->nick}" />
		
	
</div>	
<!--<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}personNew">+ Nowa osoba</a>
</div>	-->


 <label for="gender">Płeć</label>
		<div class="12u$">
        <div class="select-wrapper">
           
            <select name="gender" >
			<option value>       - Gender -     </option>
			<option value="Kobieta"> Kobieta </option>
			<option value="Mężczyzna"> Mężczyzna </option> </select>
			</div></div>
			
			
        
        
       
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
		
		
        
        <div >
            <label for="email">e-mail</label>
            <input id="email" type="email" placeholder="e-mail" name="email" value="{$searchForm->email}">
        </div>
        
	<label for="height">Wzrost</label></br>	
  100cm<input type="range" min="100" max="220" value="160"  name="height" step="1" >220cm 


       
        
		
		
		
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
        
        <div >
            <label for="city">Miasto zamieszkania</label>
            <input id="city" type="text" placeholder="City" name="city" value="{$searchForm->city}">
        </div>
        
        <div >
            <label for="nation">Kraj</label>
            <input id="nation" type="text" placeholder="Nation" name="nation" value="{$searchForm->nation}">
        </div>
		
		
		
		
</br>
		<ul class="buttons">
			<li><button type="submit" class="special">Filtruj</button></li>
			
			
			</ul>
		
</fieldset>
</form>

	






	






@endsection
