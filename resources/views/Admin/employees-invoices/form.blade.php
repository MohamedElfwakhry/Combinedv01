@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
          integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endpush
<!--begin::Input group-->
<!--begin::Input group-->
<div class="row g-2 m-1">
    <!--begin::Label-->
    <div class="col m-1">
        <label class="required fw-bold fs-6 mb-2">{{__('lang.project_name')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="project_name"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('project_name',$data->project_name ?? '')}}"/>
        <!--end::Input-->
    </div>

    <!--begin::Label-->
    <div class="col m-1">
        <label class="required fw-bold fs-6 mb-2">{{__('lang.date')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="date" name="date"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('date',$data->date ?? '')}}"/>
        <!--end::Input-->
    </div>

</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row g-2 m-1">
    <!--begin::Label-->
    <div class="col m-1">
        <label class="required fw-bold fs-6 mb-2">{{__('lang.price')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="number" name="price"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('price',$data->price ?? '')}}"/>
        <!--end::Input-->
    </div>

    <!--begin::Label-->
    <div class="col m-1">
        <!--begin::Label-->
        <label class="required fw-bold fs-6 mb-2">{{__('lang.type')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <select name="type" class="form-control">

            <option @isset($data) @if($data->type == 'income') selected @endif @endisset value="income">وارد</option>
            <option @isset($data) @if($data->type == 'outcome') selected @endif @endisset value="outcome">صادر</option>

        </select>
    </div>

</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.notes')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="notes"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('notes',$data->notes ?? '')}}" />
    <!--end::Input-->
</div>
<div class="form-group row">
    <label class="col-xl-6 col-form-label text-right">{{trans('lang.invoice_image')}}</label>
    <div class="col-lg-9 col-xl-12">
        <input type="file" @if(request()->segment(2) != 'edit') required @endif name="invoice_image" class="dropify"
               data-default-file="">
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


