@extends('base')
@section('controller')
	<div class="container" ng-app="mainApp" ng-controller="partnerController">
@endsection
@section('content')
	  <div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Direccion</th>
						<th>E-mail</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="partner in partners" ng-click="show_partner(partner.id)">
						<td>@{{ partner.id }}</td>
						<td>@{{ partner.name }}</td>
						<td>@{{ partner.address }}</td>
						<td>@{{ partner.mail }}</td>
					</tr>
				</tbody>
			</table>
	</div>
@endsection

