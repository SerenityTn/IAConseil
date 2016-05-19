@extends('client.layout')
@section('title')
	Accueil
@stop
@section('body')
@if(!is_null(auth()->user()->question()))
	<h4>Votre dernière question</h4>
		<div class="well">
			{{ auth()->user()->question()->content }}
		</div>
	@if(auth()->user()->question()->responses()->first())
	<h4>Réponse(s)</h4>
	<div class="well">
		{{ auth()->user()->question()->responses()->first()->text }}
	</div>
	@else
		<i> Cette question n'a pas encore une réponse </i>
	@endif
@else
		<i> vous n'avez aucune question posée </i>
@endif
	<style>
// You can customize the css styles here
#botlibrebox {} #botlibreboxbar {} #botlibreboxbarmax {} #botlibreboxmin {} #botlibreboxmax {} #botlibreboxclose {} #botlibrebubble-text {} #botlibrebox-input {}
</style>
<script src='http://www.botlibre.com/scripts/sdk.js'></script>
<script>
SDK.applicationId = "1485730099812757779";
var sdk = new SDKConnection();
var web = new WebChatbotListener();
web.connection = sdk;
web.instance = '12773669';
web.instanceName = 'Expert';
web.avatar = "Julie.webm";
web.prefix = 'botlibre';
web.caption = 'Chat Now';
web.boxLocation = 'bottom-right';
web.color = '#009900';
web.background = '#fff';
web.bubble = true;
web.popupURL = "http://www.botlibre.com/chat?&id=12773669&embedded=true&application=1485730099812757779&background=%23fff&prompt=You+say&send=Send";
web.createBox();
</script>

@stop
