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
        foreach($tipo_usuarios as $tipo_usuarios){
            $campos=$campos."[ '".$tipo_usuarios->nombre."',".$tipo_usuarios->id."],";
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
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Tipo de usuario'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Vuelos',
        data: [<?= $campos ?>]
    }]
});
        </script>
	</body>
        @include('template.pie')