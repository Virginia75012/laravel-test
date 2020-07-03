@extends('layouts.app')

@section('content')
<div id="container">
  <h1 class="mt-5">&bull; Formualire de contact &bull;</h1>
    <div class="underline mt-5"></div>

  <form action="{{route('root_path')}}" method="post" id="contact_form">
    {{csrf_field()}}

    <div class="row">
      <div class="fisrtname col-6">
        <label for="firstname"></label>
          <input type="text" placeholder="Mon Prénom" name="firstname" id="firstname_input" required>
          {!!$errors->first('firstname', '<span class="help-block">:message</span>')!!}
      </div>

     <div class="lastname col-6">
        <label for="lastname"></label>
          <input type="text" placeholder="Mon Nom" name="lastname" id="lastname_input" required>
          {!!$errors->first('lastname', '<span class="help-block">:message</span>')!!}
        </div>
    </div>    

    <div class="row">
      <div class="email col-6">
        <label for="email"></label>
          <input type="email" placeholder="Mon Email" name="email" id="email_input" required>
          {!!$errors->first('email', '<span class="help-block">:message</span>')!!}
        </div>

      <div class="telephone col-6">
        <label for="telephone"></label>
          <input type="tel" placeholder="Mon Téléphone" name="telephone" id="telephone_input" required>
          {!!$errors->first('telephone', '<span class="help-block">:message</span>')!!}
       </div>
    </div>

    <div class="row">
      <div class="address col-12">
        <label for="address"></label>
          <input type="text" placeholder="Mon Adresse" name="address" id="address_input" required>
      </div>
    </div>

    <div class="row">
      <div class="city col-6">
        <label for="city"></label>
          <input type="text" placeholder="Ma Ville" name="city" id="city_input" required>
      </div>

      <div class="zipcode col-6">
        <label for="zipcode"></label>
          <input type="text" placeholder="Mon Code Postal" name="zipcode" id="zipcode_input" required>
      </div>
    </div>

    <div class="row">
      <div class="message col-12">
        <label for="message"></label>
          <textarea name="message" placeholder="Mon Commentaire" id="message_input" cols="30" rows="5" required></textarea>
          {!!$errors->first('message', '<span class="help-block">:message</span>')!!}
      </div>
    </div>

      <div class="submit mt-3">
        <input type="submit" value="Envoyer" id="form_button" />
      </div>
    </div>
  </form>
</div>
@endsection