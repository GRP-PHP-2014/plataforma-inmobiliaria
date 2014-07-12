
function loadGraficaInmuebles(){
    $('#grafica-inmuebles').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 1,//null,
            plotShadow: false
        },
        title: {
            text: 'Cantidad de inmuebles actualmente publicados por barrio de montevideo'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Proporcion por barrios',
            data: [
                ['La Blanqueada',   45.0],
                ['Ciudad Vieja',       26.8],
                {
                    name: 'Palermo',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Cordon',    8.5],
                ['Pocitos',     6.2],
                ['Colon',   0.7]
            ]
        }]
    });
    
}
