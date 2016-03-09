@extends('base')
@section('content')
	<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Direccion</th>
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
						{{$resu->address}}
					</td>
					<td>
						{{$resu->mail}}
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
	</div>
@endsection
