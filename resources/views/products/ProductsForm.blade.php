@extends('base')
@section('controller')
  <div class="container" ng-app="mainApp" ng-controller="ProductFormController">
@endsection
@section('content')
    <form class="ui form">
      <div class="ui basic modal">
        <i class="close icon"></i>
        <div class="header">
          Eliminar Producto
        </div>
        <div class="image content">
          <div class="description">
            <p>¿Desea eliminar el producto?</p>
          </div>
        </div>
        <div class="actions">
          <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button">
              <i class="remove icon"></i>
              No
            </div>
            <div class="ui green basic inverted button" ng-click="delete_product(productData.id)">
              <i class="checkmark icon"></i>
              Si
            </div>
          </div>
        </div>
      </div>
      <div class="ui  buttons right floated">
        <button class="ui teal button" ng-show="!edit" ng-click="edit = !edit">Editar</button>
        <button class="ui positive button" ng-show="edit" ng-click="save_change()">Guardar</button>
        <div class="or"></div>
        <button class="ui negative button" ng-click="delete_confirm()">Eliminar</button>
      </div>
      <h4 class="ui dividing header">Información general</h4>
      <div class="field">
        <label>Nombre</label>
        <input type="text" ng-show="edit" name="name" placeholder="Nombre" ng-model="productData.name">
        <div ng-show="!edit" class="ui orange large label">@{{ productData.name }}</div>
      </div>
      <div class="two fields">
        <div class="field">
          <label>Descripcion</label>
          <input type="text" ng-show="edit" name="description" placeholder="Descripcion" ng-model="productData.description">
          <div ng-show="!edit" class="ui orange large label">@{{ productData.description }}</div>

        </div>
        <div class="field">
          <label>Costo Unitario</label>
          <input type="text" ng-show="edit" name="unit_cost" placeholder="Costo Unitario" ng-model="productData.unit_cost">
          <div ng-show="!edit" class="ui orange large label">@{{ productData.unit_cost }}</div>
        </div>
        <div class="field">
          <label>Compañia</label>
          <input type="text" ng-show="edit" name="company_id" placeholder="Compañia" ng-model="productData.company_id">
          <div ng-show="!edit" class="ui orange large label">@{{ productData.company_id }}</div>
        </div>
        <div class="field">
          <label>Imagen</label>
          <input type="text" ng-show="edit" name="img" placeholder="Imagen" ng-model="productData.img">
          <div ng-show="!edit" class="ui orange large label">@{{ productData.img }}</div>
        </div>
      </div>
    </form>
@endsection
