@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
          integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endpush
<!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.size')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="size"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('size',$data->size ?? '')}}" required/>
    <!--end::Input-->
    <!--end::Input-->
</div>

<!--end::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.type')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <select name="type" class="form-control">

        <option @isset($data) @if($data->type == 'pipe') selected @endif @endisset value="pipe">{{__('lang.pipe')}}</option>
        <option @isset($data) @if($data->type == 'fitting') selected @endif @endisset value="fitting">{{__('lang.fitting')}}</option>

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


