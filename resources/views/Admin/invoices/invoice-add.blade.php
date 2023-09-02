@extends('layout.layout')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('style')
    <style>
        @media (min-width: 992px) {
            .aside-me .content {
                padding-right: 30px;
            }
        }
    </style>
@endsection
@section('header')
    <!--begin::Heading-->
    <h1 class="text-dark fw-bolder my-0 fs-2">{{trans('lang.add_invoice')}} </h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb fw-bold fs-base my-1">
        <li class="breadcrumb-item">
            <a href="{{url('/Dashboard')}}" class="text-muted">
                {{trans('lang.Dashboard')}} </a>
        </li>
        <li class="breadcrumb-item">
            {{trans('lang.add_invoice')}}
        </li>
    </ul>
    <!--end::Breadcrumb-->
@endsection


@section('content')
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->

        <div class="content flex-row-fluid" id="kt_content">

            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                     data-bs-target="#kt_account_profile_details" aria-expanded="true"
                     aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Add Invoice</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_user_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Add New</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                     data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                              transform="rotate(-45 6 17.3137)" fill="black"/>
                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                              transform="rotate(45 7.41422 6)" fill="black"/>
                    </svg>
                </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <!--begin::Form-->
                                <form id="invoice_form" class="form"   enctype="multipart/form-data" >
                                @csrf
                                <!--begin::Scroll-->
                                    <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                         id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                         data-kt-scroll-activate="{default: false, lg: true}"
                                         data-kt-scroll-max-height="auto"
                                         data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                         data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                         data-kt-scroll-offset="300px">
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">{{__('lang.productType')}} </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-control form-select form-control-solid mb-3 mb-lg-0 js-example-basic "  id="product_type"   name="product_type"
                                            >
                                                <option value="">{{__('lang.chooseProduct')}}</option>

                                                <option value="fitting">Fitting</option>
                                                <option value="pipe">pipe</option>
                                            </select>

                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">{{__('lang.category')}} </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-control form-select form-control-solid mb-3 mb-lg-0 js-example-basic-products categories"  id="categories" data-num="1" name="category"
                                            >
                                                <option value="">{{__('lang.chooseSection')}}</option>

                                            </select>

                                        </div>
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-bold fs-6 mb-2">{{__('lang.sizes')}} </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-control" name="size_id" id="sizes" >
                                                <option value="">{{__('lang.chooseSize')}}</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        @if($type == 'income')
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">{{__('lang.cost')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" step="0.001" name="purchase_price"
                                                   class="form-control form-control-solid mb-3 mb-lg-0 purchase_price"
                                                   placeholder="سعر الشراء" value="{{old('notes')}}" id="purchase_price"/>
                                            <!--end::Input-->


                                        </div>

                                        @endif

                                        <div class="fv-row mb-7" id="sell_price_label">
                                            <!--begin::Label-->
                                            <label class="required fw-bold fs-6 mb-2">{{__('lang.sell_price')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" step="0.001" name="sell_price"
                                                   id="sell_price"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="{{__('lang.sell_price')}}" value="{{old('price')}}" />
                                            <!--end::Input-->
                                            <!--end::Input-->


                                        </div>
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-bold fs-6 mb-2">{{__('lang.quantity')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" name="quantity"
                                                   class="form-control form-control-solid mb-3 mb-lg-0 quantity"
                                                   placeholder="{{__('lang.quantity')}}" id="quantity" />
                                            <!--end::Input-->

                                        </div>
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-bold fs-6 mb-2">{{__('lang.total_price')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" step="0.001"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="{{__('lang.total_price')}}" id="total_price"
                                                   disabled/>
                                            <!--end::Input-->
                                            <input type="number" step="0.001"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="السعر الاجمالى" id="product_id" hidden
                                                   />

                                        </div>

                                    </div>
                                    <!--end::Scroll-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3"
                                                data-bs-dismiss="modal">ألغاء
                                        </button>
                                        <button type="submit" class="btn btn-primary"
                                                data-kt-users-modal-action="submit">
                                            <span class="indicator-label">حفظ</span>
                                            <span class="indicator-progress">برجاء الانتظار
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>

                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show" style="margin-left: 30px;margin-right: 30px;">
                    <!--begin::Form-->
                    <form id="" enctype="multipart/form-data" action="{{route('invoices.store')}}" class="form"
                          method="post">
                    @csrf
                    <!--begin::Card body-->


                        <div class="card-body pt-5">
                            <div class="row g-6 g-xl-9 ">
                                @if($type == 'income')

                                @else
                                    <div class="col-md-4 col-xl-3">
                                        <div class="card card-xl-stretch mb-xl-8">
                                            <label class="required fw-bold fs-6 mb-2">{{__('lang.client')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-control form-select form-control-solid mb-3 mb-lg-0" id="js-example-basic-single" name="client_id"
                                            >
                                                <option value="">{{__('lang.chooseClient')}}</option>

                                                @inject('clients','App\Models\Client')
                                                @foreach($clients->all() as $client)
                                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                @endif
                                <div class="col-md-4 col-xl-3">
                                    <div class="card card-xl-stretch mb-xl-8">
                                        <label class=" fw-bold fs-6 mb-2">  {{__('lang.date')}} </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <!--end::Input-->
                                        <input type="date" name="date" class="form-control">

                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="card card-xl-stretch mb-xl-8">
                                        <label class="required fw-bold fs-6 mb-2">{{__('lang.invoiceType')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-control form-select form-control-solid mb-3 mb-lg-0" id="js-example-basic-single" name="type"
                                        >
                                            <option value="">{{__('lang.chooseInvoice')}}</option>

                                            <option value="invoice">{{__('invoice.invoice')}}</option>
                                            <option value="quotation">{{__('invoice.quotation')}}</option>

                                        </select>

                                    </div>
                                </div>
                                    <div class="col-md-4 col-xl-3">
                                        <div class="card card-xl-stretch mb-xl-8">
                                            <label class="required fw-bold fs-6 mb-2">{{__('lang.revision')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" name="revision" class="form-control" placeholder="Rev 001">


                                        </div>
                                    </div>

                            </div>

                        </div>

                        <div class="separator"></div>


                        <!--end::Input group-->
                        <!--end::Input group-->
                        <div class="d-flex flex-column fv-row mb-7 " id="" style="display: none">


                            <div class="row g-6 g-xl-9">
                                <div class="card mb-5">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">{{__('lang.addInvoiceProducts')}}</span>
                                            <span class="text-muted mt-1 fw-bold fs-7"></span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <a class="btn btn-light-primary me-3"  data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_add_user">
                                                {{__('lang.add_invoice')}}
                                                <i class="bi bi-plus-circle-fill fs-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-3">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle gs-0 gy-4" id="users_table">
                                                <!--begin::Table head-->
                                                <thead>
                                                <tr class="fw-bolder text-muted bg-light">
                                                    <th class="min-w-30px">sr</th>
                                                    <th class="min-w-125px">Product Description</th>
                                                    <th class="min-w-100px">Unit</th>
                                                    <th class="min-w-100px">Quantity</th>
                                                    @if($type == 'income')
                                                        <th class="min-w-100px">سعر الشراء</th>
                                                    @else
                                                        <th class="min-w-100px">Price</th>
                                                    @endif
                                                    <th class="min-w-100px">Total</th>
                                                </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody id="questions">

                                                </tbody>

                                            <tfoot>

                                            <tr>
                                                <th colspan="4"> </th>
                                                <th colspan="1">{{__('lang.total_price')}} </th>
                                                <th colspan="2" id="total_priceee">0</th>
                                            </tr>
                                            </tfoot>
                                            <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--begin::Body-->
                                </div>
                            </div>
                            <div class="separator"></div>


                            <!--end::Input-->
                        </div>

                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                             data-bs-target="#kt_account_profile_details" aria-expanded="true"
                             aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bolder m-0">{{__('invoice.anotherDetailsForInvoice')}}</h3>
                            </div>
                            <!--end::Card title-->
                        </div>

                        <!--end::Input group-->
                        <div class="card-body pt-5">
                            <div class="row g-6 g-xl-9 ">

                                <div class="col-md-6 col-xl-2">
                                    <div class="card card-xl-stretch mb-xl-8">
                                        <!--begin::Label-->
                                        <label class="required fw-bold fs-6 mb-2">{{__('invoice.discount')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="number" step="0.001" name="discount"
                                               class="form-control form-control-solid mb-3 mb-lg-0"
                                               placeholder="{{__('invoice.discount')}}" value="0" />
                                        <!--end::Input-->

                                    </div>

                                </div>


                            </div>

                        </div>



                        <!--begin::Actions-->

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">الغاء</button>
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">حفظ
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Basic info-->

        </div>
        <!--end::Post-->
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#js-example-basic-single').select2({});
            $('#js-example-basic-branch').select2({});
            $('.js-example-basic-products').select2({
                dropdownParent: $("#kt_modal_add_user")
            });
        });
        $("#product_type").on('click , change',function () {
            var wahda = $(this).val();
            $('#sizes').children().remove();
            console.log(wahda)

            if (wahda != '') {
                $.get("{{ URL::to('products/get-products-category/')}}" + '/' + wahda, function ($data) {
                    $('#categories').html($data);
                });
            }



        });
        $("#categories").on('click , change',function () {
            var wahda = $(this).val();
            $('#sizes').children().remove();
            console.log(wahda)

            if (wahda != ''){
                $.get("{{ URL::to('products/get-sizes/')}}" + '/' + wahda, function ($data) {
                    $('#sizes').html($data);
                });
            }

        });
        $("#sizes").on('click , change',function () {
            var category = $("#categories").val();
            var wahda = $(this).val();
            console.log(wahda)

            if (wahda != ''){
                $.get("{{ URL::to('products/get-price/')}}" + '/' + wahda + '/' + category, function ($data) {
                    $('#sell_price').val($data);

                });
            }
            if (wahda != ''){
                $.get("{{ URL::to('products/get-product-id/')}}" + '/' + wahda + '/' + category, function ($data) {
                    $('#product_id').val($data);
                    console.log($data)

                });
            }

        });

        var num = 1;
        var srrr = 0;

        $("#invoice_form").on("submit", function (e) {
            e.preventDefault();
            var product_id = $('#product_id').val();
            var sell_price = $('#sell_price').val();
            var quantity = $('#quantity').val();
            var total_price = parseFloat($('#total_price').val());
            var type = '{{$type}}';
            var tot = parseFloat($("#total_priceee").html());
            tot += total_price;
            console.log(tot);
            $("#total_priceee").html(tot)
            srrr ++;
            if (product_id != null){
                $.ajax({
                    type: "GET",
                    url: "{{url('invoices/add-invoice-row/')}}",
                    data: {'product_id': product_id
                        ,'sell_price':sell_price
                        ,'quantity':quantity
                        ,'type':type
                        ,'total_price':total_price
                        ,'sr':srrr
                    },
                    error: function(xhr, status, error) {
                        alert(xhr.responseText);
                    },
                    success: function (data) {
                        $('#kt_modal_add_user').modal('toggle');
                        $('#invoice_form').trigger("reset");
                        $("#questions").append(data);

                    }
                })
            }


        });

        @if($type == 'income')
        $("#quantity").on('click , change ,keyup',function() {
            var  quantity = $(this).val();
            var   purchase_price= $('#purchase_price').val();
            var total = quantity * purchase_price;
            document.getElementById("total_price").value = total;
        })
        $("#purchase_price").on('click , change ,keyup',function() {
            var  quantity = $(this).val();
            var   purchase_price= $('#quantity').val();
            var total = quantity * purchase_price;
            document.getElementById("total_price").value = total;

        })

        @else
        $("#quantity").on('click , change ,keyup',function() {
            var  quantity = $(this).val();
            var   purchase_price= parseFloat($('#sell_price').val()).toFixed(3);
            var total = parseFloat(quantity * purchase_price).toFixed(3);
            document.getElementById("total_price").value = parseFloat(total).toFixed(3);
        })
        $("#sell_price").on('click , change ,keyup',function() {
            var  quantity = parseFloat($(this).val()).toFixed(3);
            var   purchase_price= $('#quantity').val();
            var total = parseFloat(quantity * purchase_price).toFixed(3);
            document.getElementById("total_price").value = parseFloat(total).toFixed(3);
        })
        @endif

        $(document).on('click', '.delete_question', function () {
            $(this).parent().parent().remove();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#js-example-basic-single').select2({});
            $('#js-example-basic-branch').select2({});
             $('#js-example-basic-products').select2({});
        });
    </script>
@endsection

