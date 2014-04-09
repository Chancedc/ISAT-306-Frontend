$(document).ready(function(){
		$("#get_data").click(function() {
			$( "#start" ).datepicker();
			$( "#end" ).datepicker();
			$( '#get_data' ).on( 'click', function() {
				$.get( 'ajax-example.php', { 
					device: $( '#device' ).val(),
					start:  $( '#start'  ).val(),
					end:    $( '#end'    ).val() } )
				.done( function( data ) {
					var lineChartData = { labels: [], datasets: [] }, ds = { fillColor: '#00cc00', strokeColor: '#006600', pointColor: 'rgba(220,220,220,1)', pointStrokeColor: '#006600', data: [] };
					$( data ).each( function( i, point ) {
						lineChartData.labels.push( point.timestamp );
						ds.data.push( point.power );

					});
					lineChartData.datasets.push( ds );
					var myLine = new Chart( document.getElementById("canvas" ).getContext("2d") ).Line( lineChartData );
				});
			});
		});
}