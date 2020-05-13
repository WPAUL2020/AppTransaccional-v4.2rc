@extends('layouts.app')

@section('content')

<div class="page-body boxed-layout" >
    <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
        <div class="main-content">
                                <ol class="breadcrumb bc-2 hidden-print" >
                                    <li>
                            <a href="{{ url('/home') }}"><i class="fas fa-home"></i>Home</a>
                        </li>
                            <li class="active">
                                        <strong>Factura</strong>
                                </li>
                                </ol>
                        <br class="hidden-print" />

            <div class="invoice">

                <div class="row">

                    <div class="col-sm-6 invoice-left">

                        <a href="#">
                            <img src="{{ asset('Imagenes/logo.png') }}" width="185" alt="" />
                        </a>

                    </div>

                    <div class="col-sm-6 invoice-right">

                            <h3>FACTURA NO. #{{$response->factura_venta}}</h3>
                            <p id="date"></p>
                    </div>

                </div>


                <hr class="margin" />


                <div class="row">

                    <div class="col-sm-3 invoice-left">

                        <h4>Cliente</h4>
                        John Doe
                        <br />
                        Mr Nilson Otto
                        <br />
                        {{$response->NOMBRE}}

                    </div>

                    <div class="col-sm-3 invoice-left">

                        <h4>&nbsp;</h4>
                        1982 OOP
                        <br />
                        {{$response->CIUDAD_ENVIO}}, COL
                        <br />
                        +1 (151) 225-4183
                    </div>

                    <div class="col-md-6 invoice-right">

                        <h4>Detalles del pago:</h4>
                        <strong>Nit #:</strong> {{$response->NIT}}
                        <br />
                        <strong>Nombre de cuenta:</strong> {{$response->NOMBRE}}
                        <br />
                        <strong>Dirección de envio:</strong> {{$response->DIRECCION_ENVIO}}

                    </div>

                </div>

                <div class="margin"></div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th width="60%">Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                    </thead>

                    <tbody>
                        @for ($i = 0; $i < $arrayLength; $i++)
                        <tr>
                            <td class="text-center">{{$i+1}}</td>
                            <td>{{$response->NOMBRE_PRODUCTO}}</td>
                            <td>{{$response->CANTIDAD}}</td>
                            <td class="text-right">{{$response->PRECIO_TOTAL/$response->CANTIDAD}}</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>

                <div class="margin"></div>

                <div class="row">

                    <div class="col-sm-6">

                        <div class="invoice-left">

                            {{$response->DIRECCION_ENVIO}}
                            <br />
                            {{$response->CIUDAD_ENVIO}}, COL
                            <br />
                            P: (234) 145-1810
                            <br />
                            {{$response->NOMBRE}}
                            <br />
                            first.last@email.com
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="invoice-right">

                            <ul class="list-unstyled">
                                <li>
                                    Sub - Total :
                                    <strong>{{$response->PRECIO_TOTAL}}</strong>
                                </li>
                                <li>
                                    IVA:
                                    <strong>19%</strong>
                                </li>
                                <li>
                                    Descuento:
                                    -----
                                </li>
                                <li>
                                    Total a pagar:
                                    <strong>{{$response->PRECIO_TOTAL}}</strong>
                                </li>
                            </ul>

                            <br />

                            <a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
                                Print Invoice
                                <i class="entypo-doc-text"></i>
                            </a>

                            &nbsp;

                        </div>

                    </div>

                </div>

            </div>
            <!-- Footer -->
            <footer class="main">

                &copy; 2020 Copyright: <strong><a href="https://universitariadecolombia.edu.co/programas/profesionales/ingenieria-de-sistemas/"> Semillero Ingenieria de Sistemas</a></strong> , Institución Universitaria de Colombia.

            </footer>
        </div>
    </div>
</div>
<script>
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
h = n.getHours();
min = n.getMinutes();
seg = n.getSeconds();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y + " - " + h + ":" + min +":" + seg;
</script>
@endsection
