@include('template.encabezado')
@include('template.menu')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<table>
    <tr>
        <th>Reporte</th>
        <th>Vista</th>
    </tr>
    <tr>
        <td>Usuarios</td>
                <td>
            <a href="{!! asset('crear_reporte_nombre/1') !!}">Ver</a>
        <a href="{!! asset('crear_reporte_nombre/2') !!}">Descargar</a></td>
    </tr>
    <tr>
        <td>Hoteles</td>
                <td>
            <a href="{!! asset('crear_reporte_id/1') !!}">Ver</a>
        <a href="{!! asset('crear_reporte_id/2') !!}">Descargar</a></td>
    </tr>
            <td>Vuelos</td>
                <td>
            <a href="{!! asset('crear_reporte_vuelos/1') !!}">Ver</a>
        <a href="{!! asset('crear_reporte_vuelos/2') !!}">Descargar</a></td>
    </tr>

</table>
     </div>
 </div>
</section>

        @include('template.pie')