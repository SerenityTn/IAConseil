@include('common.errors')
<div class="modal fade" id="addQuestion" tabindex="-1" role="dialog"
	aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ url('advisor/iaquestions/add') }}" method="POST">
				{!! csrf_field() !!}			
				<input type="hidden" name="_token" value="{{ csrf_token() }}">		
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					<h4 class="modal-title custom_align" id="Heading">Ajouter une
						question</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<textarea rows="3" name="content" class="form-control"
							placeholder="Question"></textarea>
					</div>
					<div class="form-group">
						<textarea rows="5" name="text" class="form-control"
							placeholder="Réponse"></textarea>
					</div>
				</div>
				<div class="modal-footer ">
					<button type="submit" class="btn btn-success btn-lg"
						style="width: 100%;">
						<span class="glyphicon glyphicon-ok-sign"></span> Ajouter
					</button>
				</div>
			</form>
		</div>
	</div>
</div>