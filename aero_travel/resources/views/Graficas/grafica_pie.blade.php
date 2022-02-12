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
        foreach($usuarios as $usuario){
        	$campos=$campos."[ '".$usuario->nombre."',".$usuario->id_tipo_usuario."],";
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
        type: 'bar'
    },
    title: {
        text: 'TIPO DE USUARIO'
    },
    subtitle: {
        text: 'Usuario y tipo de usuario'
    },
    xAxis: {
        categories: [<?= $campos ?>],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Tipo de usuario',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },

    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Tipo de usuario',
        data: [<?= $campos ?>],
    }]
});
		</script>
	</body>
        @include('template.pie') 