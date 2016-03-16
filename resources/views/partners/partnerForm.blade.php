@extends('base')
@section('controller')
  <div class="container" ng-app="mainApp" ng-controller="partnerformController">
@endsection
@section('content')
    <form class="ui form">
      <div class="ui basic modal">
        <i class="close icon"></i>
        <div class="header">
          Eliminar Usuario
        </div>
        <div class="image content">
          <div class="description">
            <p>¿Desea eliminar el usuario?</p>
          </div>
        </div>
        <div class="actions">
          <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button">
              <i class="remove icon"></i>
              No
            </div>
            <div class="ui green basic inverted button" ng-click="delete_partner(partnerData.id)">
              <i class="checkmark icon"></i>
              Si
            </div>
          </div>
        </div>
      </div>
      <div class="ui  buttons right floated">
        <button class="ui teal button" ng-show="!edit" ng-click="edit = !edit">Editar</button>
        <button class="ui positive button" ng-show="edit" ng-click="save_change()">Guardar</button>
        <div class="or" data-text="o"></div>
        <button class="ui negative button" ng-click="delete_confirm()">Eliminar</button>
      </div>
      <img class="ui small circular image" src="https://s.ytimg.com/yts/img/avatar_720-vflYJnzBZ.png">
      <h4 class="ui dividing header">Información general</h4>
      <div class="field">
        <label>Nombre</label>
        <input type="text" ng-show="edit" name="name" placeholder="Nombre" ng-model="partnerData.name">
        <div ng-show="!edit" class="ui orange large label">@{{ partnerData.name }}</div>
      </div>
      <div class="two fields">
        <div class="field">
          <label>Correo</label>
          <input type="text" ng-show="edit" name="email" placeholder="Correo" ng-model="partnerData.mail">
          <div ng-show="!edit" class="ui orange large label">@{{ partnerData.mail }}</div>

        </div>
        <div class="field">
          <label>Telefono</label>
          <input type="text" ng-show="edit" name="phone" placeholder="Telefono" ng-model="partnerData.phone">
          <div ng-show="!edit" class="ui orange large label">@{{ partnerData.phone }}</div>
        </div>
      </div>
      <h4 class="ui dividing header">Dirección</h4>
      <div class="tree fields">
        <div class="field">
          <label>Calle</label>
          <input type="text" ng-show="edit" name="email" placeholder="Correo" ng-model="partnerData.mail">
          <div ng-show="!edit" class="ui orange large label">@{{ partnerData.mail }}</div>
        </div>
        <div class="field">
          <label>Número</label>
          <input type="text" ng-show="edit" name="phone" placeholder="Telefono" ng-model="partnerData.phone">
          <div ng-show="!edit" class="ui orange large label">@{{ partnerData.phone }}</div>
        </div>
        <div class="field">
          <label>Colonia</label>
          <input type="text" ng-show="edit" name="phone" placeholder="Telefono" ng-model="partnerData.phone">
          <div ng-show="!edit" class="ui orange large label">@{{ partnerData.phone }}</div>
        </div>
      </div>
      <div class="two fields">
        <div class="field">
          <label>Estado</label>
          <input type="text" ng-show="edit" name="email" placeholder="Correo" ng-model="partnerData.mail">
          <div ng-show="!edit" class="ui orange large label">@{{ partnerData.mail }}</div>
        </div>
        <div class="field">
          <label>País</label>
          <input type="text" ng-show="edit" name="phone" placeholder="Telefono" ng-model="partnerData.phone">
          <div ng-show="!edit" class="ui orange large label">@{{ partnerData.phone }}</div>
        </div>
      </div>
    </form>
@endsection
