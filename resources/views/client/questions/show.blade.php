<input id="question" type="hidden" value="{{ $question->id }}" feedback = "{{ $question->feedback }}"/>
<h4>
	Question
	@include('client.questions.feedback')
</h4>
<div class="well">
	{{ $question->content }}
</div>
<h4>Réponse(s)</h4>
@foreach($question->responses as $response)
	<div class="well">		
		{{ $response->text }}
	</div>
@endforeach