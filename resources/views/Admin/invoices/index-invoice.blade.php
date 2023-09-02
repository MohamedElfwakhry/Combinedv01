<!DOCTYPE html>
@if(LaravelLocalization::getCurrentLocale() ==  'ar')
    <html direction="rtl" dir="rtl" style="direction: rtl">
    @else
        <html direction="ltr" dir="ltr" style="direction: ltr">

        @endif
<head>
    <title> Combined System - invoice</title>

    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{asset('admin/assets/icon.png')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
<!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/style.bundlee.rtl.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->


</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-me" style="background-color: white;">
    <div class="invoice">
        <div class="container">
            <div class="row">
                <div class="invoice-info" style="margin-bottom: 10px;margin-top: 10px;">
                    <div class="invoice-header">
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="invoice-name">
                                    <!-- logo started -->
                                    <div class="logo">
                                        <img src="{{$settings->image}}" alt="logo" class="h-25px h-lg-60px">
                                    </div>
                                    <!-- logo ended -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="invoice">
                                    <h2 class="text-end">{{__('invoice.invoiceNumber')}}: #{{$invoice->id}}</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="separator"></div>
                <div class="invoice-top" style="margin-bottom: 10px;margin-top: 10px;">
                    <div class="row" style="margin-bottom: 10px;margin-top: 10px;">
                        <div class="invoice" >
                            @if($type = 'invoice')
                            <h2 style="text-align: center;">{{__('invoice.invoice')}}</h2>
                            @elseif($type = 'quotation')
                                <h2 style="text-align: center;">{{__('invoice.quotation')}}</h2>
                            @elseif($type = 'delivery')
                                <h2 style="text-align: center;">{{__('invoice.delivery')}}</h2>
                            @endif
                        </div>

                    </div>
                    <div class="row" >
                        @if($invoice->client_id != null)
                            <div class="col-sm-6 mb-30 border" >
                                <div class="invoice-number" style="margin-bottom: 15px;margin-top: 10px;">
                                    <div class="inv-title-1" style="text-align: center;">{{__('invoice.customer')}}</div>
                                    <div class="inv-title-1" >
                                        {{__('invoice.to')}}: {{$invoice->clients->name}}
                                    </div>
                                    <div class="inv-title-1" >
                                        {{__('invoice.phone')}}: {{$invoice->clients->phone}}
                                    </div>
                                    <div class="inv-title-1" >
                                        {{__('invoice.email')}}: {{$invoice->clients->email}}
                                    </div>
                                    <div class="inv-title-1" >
                                        {{__('invoice.address')}}: {{$invoice->clients->address}}
                                    </div>
                                    <div class="inv-title-1" >
                                        {{__('invoice.date')}}: {{$invoice->date}}
                                    </div>

                                </div>
                            </div>

                        @endif
                        <div class="col-sm-6 mb-30 border" >
                            <div class="invoice-number" style="margin-bottom: 15px;margin-top: 10px;">
                                <div class="inv-title-1" style="text-align: center;">{{__('invoice.serviceProvider')}}</div>
                                <div class="inv-title-1" >
                                    {{__('invoice.from')}}:{{$settings->name}}
                                </div>
                                <div class="inv-title-1" >
                                    {{__('invoice.invoiceNumber')}}: {{$invoice->id}}
                                </div>
                                <div class="inv-title-1" >
                                    {{__('invoice.phone')}}: {{$settings->phone}}
                                </div>
                                <div class="inv-title-1" >
                                    {{__('invoice.address')}}: {{$settings->address}}
                                </div>
                                <div class="inv-title-1" >
                                    {{__('invoice.date')}}: {{$invoice->date}}
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="invoice-center">
                    <div class="order-summary">
                        <h4>{{__('invoice.invoiceDetails')}}</h4>
                        <div class="table-outer">
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-bordered " id="users_table" style=" border-collapse: collapse;">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="fw-bolder text-muted border bg-gray-400">
                                        <th class="min-w-10px" >{{__('invoice.sr')}}</th>
                                        <th class="min-w-100px" style="border: 1px;">{{__('invoice.productDescription')}}</th>
                                        <th class="min-w-30px">{{__('invoice.size')}}</th>
                                        <th class="min-w-30px">{{__('invoice.unit')}}</th>
                                        <th class="min-w-30px">{{__('invoice.qty')}}</th>
                                        <th class="min-w-30px">{{__('invoice.sellPrice')}}</th>
                                        <th class="min-w-30px">{{__('invoice.total')}}</th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody id="questions" >
                                    @foreach($invoice->invoicesDetails as $i => $product)
                                        <div hidden>{{$i++}}</div>
                                        <tr class="fw-bolder border">
                                        <td>{{$i++}}</td>
                                        <td>{{$product->product->ar_title}}- {{$product->product->category}} @if($product->product->type == 'pipe')- 6m Long @endif</td>
                                        <td>{{$product->product->size}} </td>
                                        <td>Nos </td>
                                        <td>{{$product->qty}}</td>
                                        @if($type == 'invoice')
                                        <td>{{$product->last_price}}</td>
                                            <td>{{$product->last_price * $product->qty}}</td>

                                        @else
                                            <td>{{$product->sell_price}}</td>
                                            <td>{{$product->sell_price * $product->quantity}}</td>

                                        @endif
                                    </tr>
                                    @endforeach

                                    </tbody>
                                <tfoot class="border">
                                    <tr  style="color:red!important;">
                                        <th colspan="5"> </th>
                                        <th colspan="1"> {{__('invoice.discount')}}  :</th>
                                        <th colspan="2" > -{{$invoice->discount}} </th>
                                    </tr>

                                <tr>
                                    <th colspan="5"> </th>
                                    <th colspan="1">{{__('invoice.totalPrice')}} </th>
                                    <th colspan="2">{{$invoice->total_price}}</th>
                                </tr>
                                </tfoot>
                                <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="invoice-bottom">
                    <div class="row">
                        <div class="col-sm-12 mb-30 border" >
                            <div class="invoice-number" style="margin-bottom: 15px;margin-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="inv-title-1" >
                                            {{__('invoice.priceInWords')}}
                                        </div>
                                        <div class="inv-title-1" >
                                            {{__('invoice.paymentType')}}
                                        </div>
                                        <div class="inv-title-1" >
                                            {{__('invoice.receivedBy')}}
                                        </div>
                                        <div class="inv-title-1" >
                                            {{__('invoice.signature')}}
                                        </div>
                                        <div class="inv-title-1" >
                                            {{__('invoice.date')}}
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="inv-title-1" id="demo" >

                                        </div>
                                        <div class="inv-title-1" >
                                            : {{__('invoice.cash')}}
                                        </div>
                                        <div class="inv-title-1" >
                                            :
                                        </div>
                                        <div class="inv-title-1" >
                                            :
                                        </div>
                                        <div class="inv-title-1" >
                                            :
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="important-note mb-30">
                                <h3 class="inv-title-1">{{__('invoice.terms')}}</h3>
                                <ul class="important-notes-list-1">
                                    <li>بمجرد تسليم الطلب لا يوجد استرجاع</li>
                                    <li>يجب معيانة البضاعة قبل استلامها وغير مسئولين عن اى تلفيات</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="txt" value="{{$amount}}">
    <script src="{{asset('admin/Tafqeet.js')}}"></script>
<script>
    function main (){
        var fraction = document.getElementById("txt").value.split(".");

        if (fraction.length == 2){
            document.getElementById ("demo").innerHTML   =  tafqeet (fraction[0]) + " دينار و" + tafqeet (fraction[1]) + ' فلس  فقط لاغير ';
        }
        else if (fraction.length == 1){
            document.getElementById ("demo").innerHTML =  tafqeet (fraction[0]) + ' دينار  فقط لاغير ';
        }
    }
    main();
    window.print()
</script>

<!--end::Main-->
<script>var hostUrl = "{{asset('admin/assets/')}}";</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
</body>
<!--end::Body-->
</html>
