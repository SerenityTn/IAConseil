@extends('admin.layout')
@section('body')
<legend>Gérer les utilisateurs</legend>

<a href="{{ route('admin.manage.users.create') }}" class="btn btn-primary">
	<span class="glyphicon glyphicon-plus"></span>
	&nbsp;Nouveau
</a>

<div class="table-responsive">
	<table id="mytable" class="table table-bordred table-striped">
		<thead>
			<th><input type="checkbox" id="checkall" /></th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Adresse Email</th>						
			<th>Ville</th>
			<th>Societe</th>
			<th>Téléphone</th>
			<th>Site Web</th>
			<th>Role</th>			
		</thead>
		<tbody>		
			@foreach($users as $user)
			<tr>
				<td><input type="checkbox" class="checkthis" /></td>				
				<td>{{ $user->nom }}</td>
				<td>{{ $user->prenom }}</td>
				<td>{{ $user->email }}</td>							
				<td>{{ $user->ville }}</td>
				<td>{{ $user->societe }}</td>
				<td>{{ $user->tel }}</td>
				<td>{{ $user->site_web }}</td>
				<td>{{ $user->role }}</td>	
				<td>
					<a href="{{ route('admin.manage.users.show', [$user->id]) }}" class = "btn btn-info">
                    	<span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>											
				<td>				
					<a href="{{ route('admin.manage.users.edit', [$user->id]) }}" class = "btn btn-primary">
                    	<span class="glyphicon glyphicon-pencil"></span>
                    </a>                  
				</td>
				<td>
				{{ Form::open(array('route' => ['user.delete', $user->id])) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <button type="submit" class = "btn btn-danger">
                    	<span class="glyphicon glyphicon-trash"></span>
                    </button>                    
                {{ Form::close() }}							
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div class="clearfix"></div>
	<ul class="pagination">
		<li class="disabled"><a href="#"><span
				class="glyphicon glyphicon-chevron-left"></span></a></li>
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
	</ul>
</div>
@stop