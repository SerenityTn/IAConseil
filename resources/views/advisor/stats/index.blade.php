@extends('advisor.layout')
@section('title')
	Statistiques
@stop
@section('buttons')
	<div class="button-group">
		<a class="btn btn-success" href="{{ route('advisor.stats') }}">Général</a>
		<button class="btn btn-info" onclick="show_ia_stats()">Questions IA</button>
		<button class="btn btn-primary" onclick="show_client_stats()">Questions clients</button>
	</div>
@stop
@section('body')
	<div class="col-md-6">
		<canvas id="index_graph"  width="1" height="1"></canvas>
	</div>
	<div class="col-md-6">
		<canvas id="index_avg_graph"  width="1" height="1"></canvas>
	</div>	
	<script>
	function show_ia_stats(){
		$("#main").load('stats/ia');
	}

	function show_client_stats(){
		$("#main").load('stats/clients');
	}

	$.get('stats/data', function(questions_data){		
		var general_data = questions_data.slice(0, 3);		
		var avg_data = questions_data.slice(3, 5);
		
		var data = {
			labels: ['Questions IA', 'Question clients', "Questions clients indexé"],
			datasets :[
				{
					data :general_data,
					backgroundColor: [
			              "#FF6384",
			              "#36A2EB",
			              "#FFCE56"		              
			        ],
					hoverBackgroundColor: [
					   "#FF6384",
					   "#36A2EB",
					   "#FFCE56"				   
					]
				}
			]		
		}
		
		var context = document.querySelector('#index_graph').getContext('2d');
		new Chart(context, {
			type: 'pie',
		    data: data,		    
		});

		var data = {						
				labels: ['Moyenne de score', 'Moyenne de feedback'],
				datasets :[
					{
						label: "Réponses le plus utilisé",
						data :avg_data,
						backgroundColor: [
				              "#FF6384",
				              "#36A2EB"		              
				        ],
						hoverBackgroundColor: [
						   "#FF6384",
						   "#36A2EB"						   				  
						]
					}
				]		
			}
		
		var context = document.querySelector('#index_avg_graph').getContext('2d');
		new Chart(context, {
			type: 'bar',
		    data: data,
		    options: {
		    	scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }    
		});
	});
</script>	
@stop

@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/chart.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/graph.js') }}"></script>
@stop
