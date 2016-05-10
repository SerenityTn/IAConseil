@extends('admin.layout')
@section('title')
	Accueil
@stop

@section('buttons')
	Dashboard
@stop
@section('body')
<div class="row">
	<div class="col-md-6">
		<canvas id="index_users_graph"  width="1" height="1"></canvas>		
	</div>
	<div class="col-md-6">
		<canvas id="index_messages_graph"  width="1" height="1"></canvas>	
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<legend>Dernier utilisateur inscrit</legend>
		Nom : {{ $user->nom }}<br/>
		Prénom : {{ $user->prenom }}<br/>
		Email :	{{ $user->email }}<br/>
	</div>
	<div class="col-md-6">
		<legend>Dernier message reçu</legend>
		<div class="well">
			{{ $message->contenu }}
		</div>
	</div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/chart.js') }}"></script>

<script>		
var data = {
	    labels: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre",
	 		     "Octobre", "Novembre", "Décembre"],
	    datasets: [
	        {
	            label: "Nombre des utilisateur par mois",
	            fill: false,
	            lineTension: 0.1,
	            backgroundColor: "rgba(75,192,192,0.4)",
	            borderColor: "rgba(75,192,192,1)",
	            borderCapStyle: 'butt',
	            borderDash: [],
	            borderDashOffset: 0.0,
	            borderJoinStyle: 'miter',
	            pointBorderColor: "rgba(75,192,192,1)",
	            pointBackgroundColor: "#fff",
	            pointBorderWidth: 1,
	            pointHoverRadius: 5,
	            pointHoverBackgroundColor: "rgba(75,192,192,1)",
	            pointHoverBorderColor: "rgba(220,220,220,1)",
	            pointHoverBorderWidth: 2,
	            pointRadius: 1,
	            pointHitRadius: 10,
	            data: [1, 2, 5, 8, 8, 15, 30, 20, 25, 5, 8,3]
	        }
	    ]
	};

var context = document.querySelector('#index_users_graph').getContext('2d');
var myLineChart = new Chart(context, {
    type: 'line',
    data: data,	   
});

var data = {
	    labels: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre",
	 		     "Octobre", "Novembre", "Décembre"],
	    datasets: [
	        {
	            label: "Nombre des messages par mois",
	            fill: false,
	            lineTension: 0.1,
	            backgroundColor: "rgba(75,192,192,0.4)",
	            borderColor: "rgba(75,192,192,1)",
	            borderCapStyle: 'butt',
	            borderDash: [],
	            borderDashOffset: 0.0,
	            borderJoinStyle: 'miter',
	            pointBorderColor: "rgba(75,192,192,1)",
	            pointBackgroundColor: "#fff",
	            pointBorderWidth: 1,
	            pointHoverRadius: 5,
	            pointHoverBackgroundColor: "rgba(75,192,192,1)",
	            pointHoverBorderColor: "rgba(220,220,220,1)",
	            pointHoverBorderWidth: 2,
	            pointRadius: 1,
	            pointHitRadius: 10,
	            data: [10, 15, 8, 5, 8, 3, 14,2,15,20,11,13]
	        }
	    ]
	};

var context = document.querySelector('#index_messages_graph').getContext('2d');
var myLineChart = new Chart(context, {
    type: 'line',
    data: data,	   
});
</script>
@stop

