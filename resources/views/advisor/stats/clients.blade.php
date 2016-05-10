<div class="col-md-6">
	<canvas id="client_users_graph" width ="1" height="1"></canvas>
</div>
<div class="col-md-6">
	<canvas id="client_number_graph" width="1" height="1"></canvas>
</div>
<script>
$.get('stats/clients/data', function(questions_data){	
	var data = {
			labels: ["Tawfik Amamou", 'Karim Taweb', 'Hafedh Hammouda'],
			datasets :[
				{
					label: "Clients avec le plus de questions",
					data :[35, 32, 25],
					backgroundColor:[
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

	var context = document.querySelector('#client_users_graph').getContext('2d');
	new Chart(context, {
		type: 'bar',
	    data: data ,	      
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

	var data = {
		    labels: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre",
		 		     "Octobre", "Novembre", "Décembre"],
		    datasets: [
		        {
		            label: "Nombre des questions posées par mois",
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
		            data: [35, 40, 43, 65, 56, 55, 40,55,60,58,68,75]
		        }
		    ]
		};
	
	var context = document.querySelector('#client_number_graph').getContext('2d');
	var myLineChart = new Chart(context, {
	    type: 'line',
	    data: data,	   
	});
});
</script>