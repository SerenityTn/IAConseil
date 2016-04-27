@extends('admin.layout')
@section('body')
<legend><h2>Gérer les Messages</h2></legend>
<div class="table-responsive">
	<table id="mytable" class="table table-bordred table-striped">
		<thead>
			<th><input type="checkbox" id="checkall" /></th>
			<th>Nom</th>			
			<th>Adresse Email</th>												
			<th>Sujet</th>
			<th>Contenu</th>							
		</thead>
		<tbody>				
			@foreach($messages as $message)
			<tr>			
				<td><input type="checkbox" class="checkthis" /></td>				
				<td>{{ $message->nom }}</td>
				<td>{{ $message->email }}</td>
				<td>{{ $message->sujet }}</td>							
				<td>{{ $message->contenu }}</td>				
				<td>
					<a class="btn btn-info" href ="{{ route('admin.manage.messages.show', $message->id) }}">
						<span class="glyphicon glyphicon-eye-open"></span>
					</a>	
				</td>
				<td>		
				{{ Form::open(array('route' => ['admin.manage.messages.destroy', $message->id])) }}			
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
		<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
	</ul>
</div>
@stop