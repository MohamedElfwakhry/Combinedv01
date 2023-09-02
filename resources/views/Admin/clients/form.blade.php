@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
          integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endpush
<!--begin::Input group-->
<div class="row g-2 m-1">
    <!--begin::Label-->
    <div class="col m-1">
        <label class="required fw-bold fs-6 mb-2">{{__('lang.name')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="name"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('name',$data->name ?? '')}}" required/>
        <!--end::Input-->
    </div>

    <div class="col m-1">
        <!--begin::Label-->
        <label class="required fw-bold fs-6 mb-2">{{__('lang.email')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="email"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('email',$data->email ?? '')}}" required/>
        <!--end::Input-->
    </div>
</div>
<!--end::Input group-->  <!--begin::Input group-->

<div class="row g-2 m-1">
    <!--begin::Label-->
    <div class="col m-1">
        <!--begin::Label-->
        <label class=" fw-bold fs-6 mb-2">{{__('lang.phone')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="tel" name="phone"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('phone',$data->phone ?? '')}}" required/>
        <!--end::Input-->
    </div>

    <div class="col m-1">
        <!--begin::Label-->
        <label class=" fw-bold fs-6 mb-2">{{__('lang.phone')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="tel" name="nd_phone"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('nd_phone',$data->nd_phone ?? '')}}" required/>
        <!--end::Input-->
    </div>
</div>
<!--end::Input group-->


<!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.address')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="address"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('address',$data->address ?? '')}}" required/>
    <!--end::Input-->
</div>
<!--end::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">النوع</label>
    <!--end::Label-->
    <!--begin::Input-->
    <select name="type" class="form-control">

        <option @isset($data) @if($data->type == 'sales') selected @endif @endisset value="sales">مبيعات</option>
        <option @isset($data) @if($data->type == 'maintenance') selected @endif @endisset value="maintenance">صيانة</option>

    </select>
    <!--end::Input-->
</div>


@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
            integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script !src="">
        $('.dropify').dropify();
        var avatar1 = new KTImageInput('kt_image_1');
    </script>
@endpush


