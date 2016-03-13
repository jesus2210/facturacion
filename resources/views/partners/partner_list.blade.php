@extends('base')
@section('controller')
	<div class="container" ng-app="mainApp" ng-controller="partnerController">
@endsection
@section('content')
	<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr >
						<th>Nombre</th>
						<th>Direccion</th>
						<th>E-mail</th>
					</tr>
					<tr ng-repeat="partner in partners">
						<td>@{{ partner.name }}</td>
						<td>@{{ partner.address }}</td>
						<td>@{{ partner.mail }}</td>
					</tr>

				</thead>
				<tbody>
			
				</tbody>
			</table>
	</div>
@endsection

<a href="#tm-top-d" data-uk-smooth-scroll="{offset: 70}" style="position: fixed;bottom:20px;right: 20px;"><h1><i class="glyphicon glyphicon-plus-sign "></i></h1></a>

