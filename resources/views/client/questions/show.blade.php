<h4>Question</h4>
<div class="well">
	{{ $question->content }}
</div>
<h4>Réponse(s)</h4>
@foreach($question->responses as $response)
	<div class="well">
		<h5>Pertinence</h5>
		{{ $response->text }}
	</div>
@endforeach