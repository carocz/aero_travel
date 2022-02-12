@include('template.encabezado')
@include('template.menu')
	<body>
<script src="{!! asset('code/highcharts.js') !!}"></script>
<script src="{!! asset('code/modules/exporting.js') !!}"></script>
<script src="{!! asset('code/modules/export-data.js') !!}"></script>
<script src="{!! asset('code/modules/accessibility.js') !!}"></script>
             <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
        <?php
        $campos="";
        foreach($vuelos as $vuelo){
            $campos=$campos."[ '".$vuelo->id."',".$vuelo->id_aerolinea."],";
        }
        ?>
       <?= $campos?>
    <div id="container"></div>
    <p class="highcharts-description">
        Esta gráfica pertenece a aero travel

    </p>
     </div>
 </div>
</section>
<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Vuelos'
    },
    subtitle: {
        text: 'id vuelo'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Aerolinea'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
    },
    series: [{
         name: 'Vuelos',
        data: [<?= $campos ?>],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
        </script>
	</body>
        @include('template.pie')