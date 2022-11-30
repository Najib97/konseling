(function($) {
    /* "use strict" */


 var dzChartlist = function(){
	let draw = Chart.controllers.line.__super__.draw; //draw shadow
	var screenWidth = $(window).width();

	var radialBar = function(){
		var options = {
          series: [64, 73, 48],
          chart: {
          height: 330,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
			startAngle: -180,
			endAngle: 180,
			 hollow: {
				margin: 0,
				size: '30%',
				background: 'transparent',
			  },

			  track: {
				show: true,
				background: '#e1e5ff',
				strokeWidth: '10%',
				opacity: 1,
				margin: 15, // margin is in pixels
			  },
            dataLabels: {
              name: {
                fontSize: '18px',
              },
              value: {
                fontSize: '16px',
              },
            }
          }
        },
	  colors:['#BDA25C','#209F84','#323232'],
        labels: ['New Patient', 'Recovered', 'In Treatment'],
        };

        var chart = new ApexCharts(document.querySelector("#radialBar"), options);
        chart.render();
	}
		var chartBar = function(){
		var chartBarRunningOptions = {
				  series: [
					{
						name: 'Akademik',
						data: [14, 18, 8, 3, 9, 12, 11, 6, 15],
					},
					{
					  name: 'Sosial',
					  data: [6, 10, 6, 12, 14, 7, 12, 10, 17]
					},
          {
					  name: 'Pribadi',
					  data: [8, 12, 5, 10, 7, 16, 6, 9, 7]
					},

				],
				chart: {
				type: 'bar',
				height: 370,

				toolbar: {
					show: false,
				},

			},
			plotOptions: {
			  bar: {
				horizontal: false,
				columnWidth: '80%',

			  },
			},
			colors:['#007A64', '#BDA25C','#0F3C4C'],
			dataLabels: {
			  enabled: false,
			},
			markers: {
				shape: "circle",
			},
			legend: {
				show: true,
				fontSize: '14px',
				offsetY:8,
				labels: {
					colors: '#000000',

				},
				markers: {
				width: 18,
				height: 18,
				strokeWidth: 0,
				strokeColor: '#fff',
				fillColors: undefined,
				radius: 0,
				}
			},
			stroke: {
			  show: true,
			  width: 2,
			  colors: ['transparent']
			},
			grid: {
				borderColor: '#eee',
			},
			xaxis: {

			  categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
			  labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
				  fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
				},
			  },
			  crosshairs: {
			  show: false,
			  }
			},
			yaxis: {
				labels: {
					offsetX:-16,
				   style: {
					  colors: '#787878',
					  fontSize: '13px',
					   fontFamily: 'poppins',
					  fontWeight: 100,
					  cssClass: 'apexcharts-xaxis-label',
				  },
			  },
			},
			fill: {
			  opacity: 1,
			  colors:['#007A64', '#BDA25C', '#0F3C4C'],
			},
			tooltip: {
			  y: {
				formatter: function (val) {
				  return  val + " Siswa"
				}
			  }
			},
			 responsive: [{
				breakpoint: 575,
				options: {
					plotOptions: {
					  bar: {
						columnWidth: '40%',

					  },
					},
					chart:{
						height:250,
					}
				}
			 }]
			};

			var chartBarRunningObject = new ApexCharts(document.querySelector("#chartBar"), chartBarRunningOptions);
			chartBarRunningObject.render();

	}

	/* Function ============ */
		return {
			init:function(){
			},


			load:function(){
				radialBar();
				chartBar();
			},

			resize:function(){

			}
		}

	}();

	jQuery(document).ready(function(){
	});

	jQuery(window).on('load',function(){
		setTimeout(function(){
			dzChartlist.load();
		}, 1000);

	});

	jQuery(window).on('resize',function(){


	});

})(jQuery);
