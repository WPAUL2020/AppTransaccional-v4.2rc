<?php $__env->startSection('content'); ?>

<div class="page-body boxed-layout" >
    <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
        <div class="main-content">
                                <ol class="breadcrumb bc-2 hidden-print" >
                                    <li>
                            <a href="<?php echo e(url('/home')); ?>"><i class="fas fa-home"></i>Home</a>
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
                            <img src="<?php echo e(asset('Imagenes/logo.png')); ?>" width="185" alt="" />
                        </a>

                    </div>

                    <div class="col-sm-6 invoice-right">

                            <h3>FACTURA NO. #5652256</h3>
                            <span>31 October 2013</span>
                    </div>

                </div>


                <hr class="margin" />


                <div class="row">

                    <div class="col-sm-3 invoice-left">

                        <h4>Client</h4>
                        John Doe
                        <br />
                        Mr Nilson Otto
                        <br />
                        FoodMaster Ltd

                    </div>

                    <div class="col-sm-3 invoice-left">

                        <h4>&nbsp;</h4>
                        1982 OOP
                        <br />
                        Madrid, Spain
                        <br />
                        +1 (151) 225-4183
                    </div>

                    <div class="col-md-6 invoice-right">

                        <h4>Payment Details:</h4>
                        <strong>V.A.T Reg #:</strong> 542554(DEMO)78
                        <br />
                        <strong>Account Name:</strong> FoodMaster Ltd
                        <br />
                        <strong>SWIFT code:</strong> 45454DEMO545DEMO

                    </div>

                </div>

                <div class="margin"></div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th width="60%">Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>On am we offices expense thought</td>
                            <td>1</td>
                            <td class="text-right">$1,290</td>
                        </tr>

                        <tr>
                            <td class="text-center">2</td>
                            <td>Up do view time they shot</td>
                            <td>1</td>
                            <td class="text-right">$400</td>
                        </tr>

                        <tr>
                            <td class="text-center">3</td>
                            <td>Way ham unwilling not breakfast</td>
                            <td>1</td>
                            <td class="text-right">$550</td>
                        </tr>

                        <tr>
                            <td class="text-center">4</td>
                            <td>Songs to an blush woman be sorry</td>
                            <td>1</td>
                            <td class="text-right">$4020</td>
                        </tr>

                        <tr>
                            <td class="text-center">5</td>
                            <td>Luckily offered article led lasting</td>
                            <td>1</td>
                            <td class="text-right">$87</td>
                        </tr>

                        <tr>
                            <td class="text-center">6</td>
                            <td>Of as by belonging therefore suspicion</td>
                            <td>1</td>
                            <td class="text-right">$140</td>
                        </tr>
                    </tbody>
                </table>

                <div class="margin"></div>

                <div class="row">

                    <div class="col-sm-6">

                        <div class="invoice-left">

                            795 Park Ave, Suite 120
                            <br />
                            San Francisco, CA 94107
                            <br />
                            P: (234) 145-1810
                            <br />
                            Full Name
                            <br />
                            first.last@email.com
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="invoice-right">

                            <ul class="list-unstyled">
                                <li>
                                    Sub - Total amount:
                                    <strong>$6,487</strong>
                                </li>
                                <li>
                                    VAT:
                                    <strong>12.9%</strong>
                                </li>
                                <li>
                                    Discount:
                                    -----
                                </li>
                                <li>
                                    Grand Total:
                                    <strong>$7,304</strong>
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

                &copy; 2020 Copyright: <strong><a href="https://universitariadecolombia.edu.co/programas/profesionales/ingenieria-de-sistemas/"> Semillero Ingenieria de Sistemas</a></strong> , Instirución Universitaria de Colombia.

            </footer>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/Factura.blade.php ENDPATH**/ ?>