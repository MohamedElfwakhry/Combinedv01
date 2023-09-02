@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
          integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endpush
<!--begin::Input group-->
<div class="row g-2 m-1">
    <!--begin::Label-->
    <div class="col m-1">
        <!--begin::Label-->
        <label class=" fw-bold fs-6 mb-2">{{__('lang.ar_title')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="ar_title"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('ar_title',$data->ar_title ?? '')}}" />
        <!--end::Input-->
    </div>

    <div class="col m-1">
        <!--begin::Label-->
        <label class=" fw-bold fs-6 mb-2">{{__('lang.en_title')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="en_title"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('en_title',$data->en_title ?? '')}}" />
        <!--end::Input-->
    </div>
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.type')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <select name="type" class="form-control" id="product_type">

        <option @isset($data) @if($data->type == 'pipe') selected @endif @endisset value="pipe">{{__('lang.pipe')}}</option>
        <option @isset($data) @if($data->type == 'fitting') selected @endif @endisset value="fitting">{{__('lang.fitting')}}</option>

    </select>
    <!--end::Input-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row g-2 m-1">
    <!--begin::Label-->
    <div class="col m-1">
        <!--begin::Label-->
        <label class=" fw-bold fs-6 mb-2">{{__('lang.cost')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="number" name="cost" id="cost" step=".001"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('cost',$data->cost ?? '')}}" />
        <!--end::Input-->
    </div>

    <div class="col m-1">
        <!--begin::Label-->
        <label class=" fw-bold fs-6 mb-2">{{__('lang.percentage')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="number" name="percentage" id="percentage"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('percentage',$data->percentage ?? '')}}" />
        <!--end::Input-->
    </div>
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row g-2 m-1">
    <!--begin::Label-->
    <div class="col m-1">
        <!--begin::Label-->
        <label class=" fw-bold fs-6 mb-2">{{__('lang.price_with_percentage')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="number" name="price_with_percentage" id="price_with_percentage" step=".001"
               class="form-control form-control-solid mb-3 mb-lg-0"
               readonly="readonly" required
               placeholder="" value="{{old('',$data->price_with_percentage ?? '')}}" />
        <!--end::Input-->
    </div>

    <div class="col m-1">
        <!--begin::Label-->
        <label class=" fw-bold fs-6 mb-2">{{__('lang.price')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="number" name="price" id="price" step=".001"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('price',$data->price ?? '')}}" />
        <!--end::Input-->
    </div>
    <div class="col m-1">
        <!--begin::Label-->
        <label class=" fw-bold fs-6 mb-2">{{__('lang.profit_percentage')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="number" name="profit_percentage" id="profit_percentage"
               readonly="readonly"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('',$data->profit_percentage ?? '')}}" />
        <!--end::Input-->
    </div>
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.size')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <select name="size_id" class="form-control" id="sizes">

    </select>
    <!--end::Input-->
</div>

@push('scripts')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
            integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>



@endpush


