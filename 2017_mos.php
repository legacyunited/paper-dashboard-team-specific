<!DOCTYPE html>
<html lang="en">
	<head>
		<title>2017 Stats</title>
		<link rel="stylesheet" type="text/css" href="../dmo/css/styles.css"/>
		<!--  Paper Dashboard core CSS    -->
    	<link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    	  <!-- Compiled and minified CSS -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

		<!-- Data Retrival PHP File - very important -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    	<script type="text/javascript" src="assets/js/main.js"></script>
        <script>
      console.log("%cWhat's up? This area is forbidden.", "background: red; color: yellow; font-size: x-large");

  </script>
    	<?php include 'database_retrival.php' ?>

		<script type="text/javascript">

        var dataBar2017 = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
                {
                    backgroundColor: '#F15854',
                    borderColor: "#F15854",
                    data: [<?php echo $jan_mos_2017 ?>, <?php echo $feb_mos_2017 ?>, <?php echo $mar_mos_2017 ?>, <?php echo $apr_mos_2017 ?>, <?php echo $may_mos_2017 ?>, <?php echo $jun_mos_2017 ?>, <?php echo $jul_mos_2017 ?>, <?php echo $aug_mos_2017 ?>, <?php echo $sep_mos_2017 ?>, <?php echo $oct_mos_2017 ?>, <?php echo $nov_mos_2017 ?>, <?php echo $dec_mos_2017 ?>],
                    borderWidth: 1,
                }
            ]
        };

        Chart.plugins.register({
          beforeDraw: function(chartInstance) {
            var ctx = chartInstance.chart.ctx;
            ctx.fillStyle = "white";
            ctx.fillRect(0, 0, chartInstance.chart.width, chartInstance.chart.height);
          }
        });

        function barChart1(){
            var newChart = new Chart("chartContainer2017Bar", {
                type: 'bar',
                data: dataBar2017,
                options: {
                    legend: {
                        display: false
                    }
                    ,scales: {
                            xAxes: [{
                                gridLines: {
                                    display:false
                                }
                            }],
                            yAxes: [{
                                gridLines: {
                                    display:false
                                },
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                    }
                }
            });
        } 


    addFunctionOnWindowLoad(barChart1);
    </script>
	</head>

	<body>
		<div class="row">
        <br><br><br>
			<div class="col-md-6" style="width:50%">
				<canvas id="chartContainer2017Bar"></canvas>
			</div> 
			<div class="col-md-6">
			<?php
				echo "<style>
					table {
					    border-collapse: collapse;
					    width: 40%;
					}

					th, td {
					    text-align: left;
					    padding: 5px;
						border: -moz-use-text-color;
					}

					tr:nth-child(even){background-color: #f2f2f2}

					th {
					    background-color: #F0AB00;
					    color: white;
					}
					</style>
					";

				echo '<table><thead><tr><th>Month</th><th>2017</th></tr></thead>';
				echo '<tr><td>January</td><td>' . $jan_mos_2017 . '</td></tr>';
				echo '<tr><td>February</td><td>' . $feb_mos_2017 . '</td></tr>';
				echo '<tr><td>March</td><td>' . $mar_mos_2017 . '</td></tr>';
				echo '<tr><td>April</td><td>' . $apr_mos_2017 . '</td></tr>';
				echo '<tr><td>May</td><td>' . $may_mos_2017 . '</td></tr>';
				echo '<tr><td>June</td><td>' . $jun_mos_2017 . '</td></tr>';
				echo '<tr><td>July</td><td>' . $jul_mos_2017 . '</td></tr>';
				echo '<tr><td>August</td><td>' . $aug_mos_2017 . '</td></tr>';
				echo '<tr><td>September</td><td>' . $sep_mos_2017 . '</td></tr>';
				echo '<tr><td>October</td><td>' . $oct_mos_2017 . '</td></tr>';
				echo '<tr><td>November</td><td>' . $nov_mos_2017 . '</td></tr>';
				echo '<tr><td>December</td><td>' . $dec_mos_2017 . '</td></tr>';
				echo '<tr><th>Total</th><th>' . $total_mos_2017 . '</th></tr>';
				echo '</table>';
			?>
			</div>
		</div>
	</body>
</html>