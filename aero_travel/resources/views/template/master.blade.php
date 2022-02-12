@include('template.encabezado')
@include('template.menu')

            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <img src="{!! asset('../storage/viaje.png') !!}" width="150px">
                                <h1 class="display-5 fw-bolder text-white mb-2">Aero Travel</h1>
                            </div>
                        </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">CRUD's</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <ul>
                                        <li><a href="tipo_usuarios">Tipos de usuario</a></li>
                                        <li><a href="pais">Pais</a></li>
                                        <li><a href="bancos">Bancos</a></li>
                                        <li><a href="usuarios">Usuarios</a></li>
                                        <li><a href="hoteles">Hoteles</a></li>
                                        <li><a href="fotos_hoteles">Fotos hoteles</a></li>
                                        <li><a href="correo">Correo</a></li>
                                        <li><a href="actividades">Actividades</a></li>
                                        <li><a href="detalle_venta_vuelos">Detalles de venta vuelos</a></li>
                                        <li><a href="detalle_venta_actividades">Detalles de venta actividades</a></li>
                                    </ul>
                                   

                                </div>
                                <div class="col mb-5 h-100">
                                   <ul>
                                   <li><a href="aerolineas">Aerolineas</a></li>
                                   <li><a href="operadores_turisticos">Operadores turisticos</a></li>
                                   <li><a href="reporteClientes">Reportes</a></li>
                                   <li><a href="vuelos">Vuelos</a></li>
                                   <li><a href="venta">Venta</a></li>
                                   <li><a href="asientos_por_vuelo">Asientos por vuelo</a></li>
                                   <li><a href="ciudades">Ciudades</a></li>
                                   <li><a href="estados">Estados</a></li>
                                   <li><a href="detalle_venta_hospedaje">Detalles de venta hospedajes</a></li>
                                   <li><a href="hospedajes">Hospedajes</a></li>
                                   <li><a href="grafica">Graficas</a></li>
                                   </ul>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
         
                        </div>
                    </div>
                </div>
            </div>

            </section>
        </main>

        @include('template.pie')

        @include('template.footer')
    </body>
</html>