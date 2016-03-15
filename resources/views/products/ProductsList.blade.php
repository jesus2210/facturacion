@extends('base')
@section('controller')
	<div class="container" ng-app="mainApp" ng-controller="ProductController">
@endsection
@section('content')
	  <div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Costo Unitario</th>
						<th>Compañia</th>
						<th>Imagen</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="product in products" ng-click="show_product(product.id)">
						<td>@{{ product.id }}</td>
						<td>@{{ product.name }}</td>
						<td>@{{ product.description }}</td>
						<td>@{{ product.unit_cost }}</td>
						<td>@{{ product.company_id }}</td>
						<td>@{{ product.img }}</td>
					</tr>
				</tbody>
			</table>
	</div>
@endsection