<div class="col-md-6">
	<canvas id="ia_freq_graph"  width="1" height="1"></canvas>
</div>
<div class="col-md-6">
	<canvas id="ia_radar_graph"  width="1" height="1"></canvas>
</div>
<script>	
	$.get('stats/ia/data', function(questions_data){
		var data = {
			labels: ['Question 1', 'Question 2', "Question 3"],
			datasets :[
				{
					label: "Réponses les plus utilisées",
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

		var context = document.querySelector('#ia_freq_graph').getContext('2d');
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
			labels: ['Fréquence', 'Score', "Avis"],
			datasets :[
				{					
		            label: "Question 1",					
					backgroundColor: "rgba(179,181,198,0.2)",
		            borderColor: "rgba(179,181,198,1)",
		            pointBackgroundColor: "rgba(179,181,198,1)",
		            pointBorderColor: "#fff",
		            pointHoverBackgroundColor: "#fff",
		            pointHoverBorderColor: "rgba(179,181,198,1)",
		            data :[25, 9, 3.5]		            	
				},
				{
					label: "Question 2",
		            backgroundColor: "rgba(255,99,132,0.2)",
		            borderColor: "rgba(255,99,132,1)",
		            pointBackgroundColor: "rgba(255,99,132,1)",
		            pointBorderColor: "#fff",
		            pointHoverBackgroundColor: "#fff",
		            pointHoverBorderColor: "rgba(255,99,132,1)",
		            data: [15, 8, 4.5]		
				}
			]		
		}
		
		var context = document.querySelector('#ia_radar_graph').getContext('2d');
		new Chart(context, {
			type: 'radar',
		    data: data		     
		});
	});
</script>