@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
          integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endpush
<!--begin::Input group-->
<div class="row m-1">
    <!--begin::Label-->
    <div class="col m-1">
        <label class="required fw-bold fs-6 mb-2">{{__('lang.name')}}</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="name"
               class="form-control form-control-solid mb-3 mb-lg-0"
               placeholder="" value="{{old('name',$data->name ?? '')}}" />
        <!--end::Input-->
    </div>
</div>
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.address')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="address"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('address',$data->address ?? '')}}" />
    <!--end::Input-->
</div>
<!--end::Input group-->

<!--end::Input group-->  <!--begin::Input group-->
@isset($type)
    <div class="fv-row mb-7">
        <!--begin::Label-->
        <label class="required fw-bold fs-6 mb-2">النوع</label>
        <!--end::Label-->
        <!--begin::Input-->
        <select name="type" class="form-control" required
                readonly="readonly"
        >

            <option @if($type == 'sales') selected @endif value="sales">مبيعات</option>
            <option @if($type == 'maintenance') selected @endif value="maintenance">صيانة</option>
            <option @if($type == 'website') selected @endif value="website">الموقع</option>


            <option @isset($data) @if($data->type == 'sales') selected @endif @endisset value="sales">مبيعات</option>
            <option @isset($data) @if($data->type == 'maintenance') selected @endif @endisset value="maintenance">صيانة</option>
            <option @isset($data) @if($data->type == 'website') selected @endif @endisset value="website">الموقع</option>

        </select>
        <!--end::Input-->
    </div>
    @if($type != 'sales')

        <!--end::Input group-->  <!--begin::Input group-->
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
        <!--end::Input group-->

        <div class="row g-2 m-1">
            <!--begin::Label-->
            <div class="col m-1">
                <!--begin::Label-->
                <label class=" fw-bold fs-6 mb-2">{{__('lang.date')}}</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="date" name="date"
                       class="form-control form-control-solid mb-3 mb-lg-0"
                       placeholder="" value="{{old('date',$data->date ?? '')}}" />
                <!--end::Input-->
            </div>

            <div class="col m-1">
                <!--begin::Label-->
                <label class=" fw-bold fs-6 mb-2">{{__('lang.area')}}</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="area"
                       class="form-control form-control-solid mb-3 mb-lg-0"
                       placeholder="" value="{{old('area',$data->area ?? '')}}" />
                <!--end::Input-->
            </div>
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="fw-bold fs-6 mb-2">{{__('lang.ar_description')}}</label>
            <!--end::Label-->
            <!--begin::Input-->
            <textarea type="text" name="ar_description"
                      class="form-control form-control-solid mb-3 mb-lg-0"
                      placeholder="" >{{old('ar_description',$data->ar_description ?? '')}}</textarea>
            <!--end::Input-->
        </div>

        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="fw-bold fs-6 mb-2">{{__('lang.en_description')}}</label>
            <!--end::Label-->
            <!--begin::Input-->
            <textarea type="text" name="en_description"
                      class="form-control form-control-solid mb-3 mb-lg-0"
                      placeholder="">{{old('en_description',$data->en_description ?? '')}}</textarea>
            <!--end::Input-->
        </div>
        <div class="row g-2 m-1">
            <!--begin::Label-->
            <div class="col m-1">
                <label class="fw-bold fs-6 mb-2">{{__('website.firefirghting')}}</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="hidden" name="ff"
                       class="form-check form-check-solid mb3"
                       value="0" />
                <input type="checkbox" name="ff"
                       class="form-check-input"
                       value="1" @isset($data) @if($data->ff == 1)checked @endif @endisset/>
                <!--end::Input-->
                <!--end::Input-->
            </div>

            <div class="col m-1">
                <!--begin::Label-->
                <label class="fw-bold fs-6 mb-2">{{__('website.firealarm')}}</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="hidden" name="fa"
                       class="form-check form-check-solid mb3"
                       value="0" />
                <input type="checkbox" name="fa"
                       class="form-check-input"
                       value="1" @isset($data) @if($data->fa == 1)checked @endif @endisset/>
                <!--end::Input-->
                <!--end::Input-->
            </div>
        </div>
        <div class="row g-2 m-1">
            <!--begin::Label-->
            <div class="col m-1">
                <label class="fw-bold fs-6 mb-2">{{__('website.plumbing')}}</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="hidden" name="pl"
                       class="form-check form-check-solid mb3"
                       value="0" />
                <input type="checkbox" name="pl"
                       class="form-check-input"
                       value="1" @isset($data) @if($data->pl == 1)checked @endif @endisset/>
                <!--end::Input-->
                <!--end::Input-->
            </div>

            <div class="col m-1">
                <!--begin::Label-->
                <label class="fw-bold fs-6 mb-2">{{__('website.smokeventilation')}}</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="hidden" name="sv"
                       class="form-check form-check-solid mb3"
                       value="0" />
                <input type="checkbox" name="sv"
                       class="form-check-input right-0"
                       value="1" @isset($data) @if($data->sv == 1)checked @endif @endisset/>
                <!--end::Input-->
                <!--end::Input-->
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label text-right">{{trans('lang.image')}}</label>
            <div class="col-lg-9 col-xl-12">
                <input type="file" @if(request()->segment(2) != 'edit') @endif name="image" class="dropify"
                       data-default-file="{{old('image',$data->image ?? '')}}">
                <span class="form-text text-muted">{{trans('lang.allows_files_type')}}:  png, jpg, jpeg , svg.</span>
            </div>
        </div>
        @endif
@endisset


<!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="fw-bold fs-6 mb-2">{{__('lang.notes')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="notes"
           class="form-control form-control-solid mb-3 mb-lg-0"
           placeholder="" value="{{old('notes',$data->notes ?? '')}}" />
    <!--end::Input-->
</div>

@if(isset($id))
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="required fw-bold fs-6 mb-2">{{__('lang.clients')}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <select name="client_id" class="form-control" readonly="readonly">

        @foreach(\App\Models\Client::all() as $client)
            <option @if($id == $client->id) selected @endif value="{{$client->id}}">{{$client->name}}</option>
            <option @isset($data) @if($data->client_id == $client->id) selected @endif @endisset value="{{$client->id}}">{{$client->name}}</option>
        @endforeach
    </select>
    <!--end::Input-->
</div>
@endif

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
            integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script !src="">
        $('.dropify').dropify();
        var avatar1 = new KTImageInput('kt_image_1');
    </script>
@endpush


