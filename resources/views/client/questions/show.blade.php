<input id="question" type="hidden" value="{{ $question->id }}" feedback = "{{ $question->feedback }}"/>
<h4>
	Question
	@include('client.questions.feedback')
</h4>
<div class="well">
	{{ $question->content }}
</div>
@if(!$question->response())
	<p class="error">aucune réponses n'est disponible</p>
@else
	<h4>Réponse(s)</h4>
	@foreach($question->responses as $response)
		<div class="well">				
			{{ $response->text }}
		</div>
	@endforeach
@endif