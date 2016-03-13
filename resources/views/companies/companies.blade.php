@extends('base')
@section('content')
	<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Pais</th>
						<th>Tax</th>
						<th>E-mail</th>
					</tr>
				</thead>
				<tbody>
			@foreach ($result as $resu)
				<tr>
					<td>
						{{$resu->name}}
					</td>
					<td>
						{{$resu->country}}
					</td>
					<td>
						{{$resu->tax}}
					</td>
					<td>
						{{$resu->email}}
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
	</div>
@endsection

<a href="#tm-top-d" data-uk-smooth-scroll="{offset: 70}" style="position: fixed;bottom:20px;right: 20px;"><h1><i class="glyphicon glyphicon-plus-sign "></i></h1></a>

