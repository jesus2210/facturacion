@extends('base')
@section('controller')
  <div class="container" ng-app="mainApp" ng-controller="partnerformController">
@endsection
@section('content')
    <form class="ui form">
      <h4 class="ui dividing header">Información general</h4>
      <div class="field">
        <label>Nombre</label>
        <input type="text" name="name" placeholder="Nombre" ng-model="partnerData.name">
      </div>
      <div class="two fields">
        <div class="field">
          <label>Correo</label>
          <input type="text" name="email" placeholder="Correo" ng-model="partnerData.mail">
        </div>
        <div class="field">
          <label>Telefono</label>
          <input type="text" name="phone" placeholder="Telefono" ng-model="partnerData.phone">
        </div>
      </div>
      
      <button class="ui button" type="submit">Submit</button>
    </form>
@endsection
