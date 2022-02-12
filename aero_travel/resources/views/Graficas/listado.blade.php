@include('template.encabezado')
@include('template.menu')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<table>
    <tr>
        <th>Grafica</th>
    </tr>
    <tr>
        <td>Usuarios y tipo de usuarios</td>
                <td>
            <a href="{!! asset('grafica_pie') !!}">Ver </a>
    </tr>
    <tr>
        <td>Tipo de usuarios</td>
                <td>
            <a href="{!! asset('grafica_barras') !!}">Ver</a>
    </tr>
            <td>Vuelos</td>
                <td>
            <a href="{!! asset('grafica_areas') !!}">Ver</a>
    </tr>

</table>
     </div>
 </div>
</section>

        @include('template.pie')