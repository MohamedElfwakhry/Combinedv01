@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
          integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endpush
<!--begin::Input group-->
<div class="row g-2 m-1">
    <!--begin::Label-->
    <div class="col m-1">
        <label class="required fw-bold fs-6 mb-2">{{__('lang.name_ar')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="ar_name"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('name_ar',$data->ar_name ?? '')}}"/>
        <!--end::Input-->
    </div>

    <!--begin::Label-->
    <div class="col m-1">
        <label class="required fw-bold fs-6 mb-2">{{__('lang.name_en')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="en_name"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('name_en',$data->en_name ?? '')}}"/>
        <!--end::Input-->
    </div>

</div>
<!--end::Input group-->  <!--begin::Input group-->

<div class="row g-3 m-1">

    <div class="col m-1">
        <!--begin::Label-->
        <label class="required fw-bold fs-6 mb-2">{{__('lang.email')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="email"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('email',$data->email ?? '')}}"/>
        <!--end::Input-->
    </div>
    <!--begin::Label-->
    <div class="col m-1">
        <!--begin::Label-->
        <label class=" fw-bold fs-6 mb-2">{{__('lang.phone')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="tel" name="phone"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('phone',$data->phone ?? '')}}"/>
        <!--end::Input-->
    </div>

    <div class="col m-1">
        <!--begin::Label-->
        <label class=" fw-bold fs-6 mb-2">{{__('lang.whatsapp')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="tel" name="whatsapp"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('whatsapp',$data->whatsapp ?? '')}}"/>
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
           placeholder="" value="{{old('address',$data->address ?? '')}}"/>
    <!--end::Input-->
</div>
<div class="row g-2 m-1">
    <!--begin::Label-->
    <div class="col m-1">
        <label class="fw-bold fs-6 mb-2">{{__('lang.en_job_type')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="en_job_type"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('en_job_type',$data->en_job_type ?? '')}}"/>
        <!--end::Input-->
    </div>

    <!--begin::Label-->
    <div class="col m-1">
        <label class="required fw-bold fs-6 mb-2">{{__('lang.ar_job_type')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="ar_job_type"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('ar_job_type',$data->ar_job_type ?? '')}}"/>
        <!--end::Input-->
    </div>

</div>

<!--end::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">النوع</label>
    <!--end::Label-->
    <!--begin::Input-->
    <select name="type" class="form-control">

        <option @isset($data) @if($data->type == 'website') selected @endif @endisset value="website">الموقع</option>
        <option @isset($data) @if($data->type == 'dashboard') selected @endif @endisset value="dashboard">مدير</option>

    </select>
    <!--end::Input-->
</div>
<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label text-right">{{trans('lang.image')}}</label>
    <div class="col-lg-9 col-xl-12">
        <input type="file" @if(request()->segment(2) != 'edit') @endif name="qr_code" class="dropify"
               data-default-file="{{old('qr_code',$data->qr_code ?? '')}}">
        <span class="form-text text-muted">{{trans('lang.allows_files_type')}}:  png, jpg, jpeg , svg.</span>
    </div>
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


