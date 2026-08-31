@extends('admin.layouts.admin')
@section('title')
    - create categories
@endsection

@section('script')
    <script>
        $('#attributeSelect').selectpicker({
            'title': 'انتخاب ویژگی'
        });

        $('#attributeSelect').on('changed.bs.select', function() {
            let attributeSelected = $(this).val();
            let attributes = @json($attributes);

            let attributeForFiler = []

            attributes.map((attribute) => {
                $.each(attributeSelected, function(i, element) {
                    if (attribute.id == element) {
                        attributeForFiler.push(attribute);
                    }
                });
            });

            $("#attributeIsFilterSelect").find('option').remove();
            $("#variationSelect").find('option').remove();

            attributeForFiler.forEach((element) => {
                let attributeForFilerOption = $("<option/>", {
                    value: element.id,
                    text: element.name
                });

                let variationOption = $("<option/>", {
                    value: element.id,
                    text: element.name
                });

                $("#attributeIsFilterSelect").append(attributeForFilerOption);
                $("#attributeIsFilterSelect").selectpicker('refresh');

                $("#variationSelect").append(variationOption);
                $("#variationSelect").selectpicker('refresh');
            });

        });

        $('#attributeIsFilterSelect').selectpicker({
            'title': 'انتخاب ویژگی'
        });

        $('#variationSelect').selectpicker({
            'title': 'انتخاب ویژگی'
        });
    </script>
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white ">
            <div class=" mb-4">
                <h5 class="font-weight-bold">
                    ایجاد دسته بندی
                </h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="name">نام</label>
                        <input class="form-control" id="name" name="name" type="text">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="slug">نام انگلیسی</label>
                        <input class="form-control" id="slug" name="slug" type="text">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="parent_id"> والد</label>
                        <select class="form-control" id="parent_id" name="parent_id">
                            <option value="0">بدون والد</option>
                            @foreach ($parentCategories as $parentCategory)
                                <option value="{{ $parentCategory->id }}">{{ $parentCategory->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" selected>فعال</option>
                            <option value="0">غیر فعال </option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="attribute_ids">ویژگی</label>
                        <select id="attributeSelect" name="attribute_ids[]" class="form-control" multiple
                            data-live-search= "true">
                            @foreach ($attributes as $attribute)
                                <option value="{{ $attribute->id }}"> {{ $attribute->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="attribute_is_filter_ids">انتخاب ویژگی های قابل فیلتر</label>
                        <select id="attributeIsFilterSelect" name="attribute_is_filter_ids[]" class="form-control" multiple
                            data-live-search= "true">
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="attribute_is_filter_ids">انتخاب ویژگی متغیر </label>
                        <select id="variationSelect" name="variation_id" class="form-control" data-live-search= "true">
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                         <label for="icon"> ایکون</label>
                        <input class="form-control" id="icon" name="icon" type="text">
                    </div>

                    <div class="form-group col-md-12">
                          <label for="description">توضیحات </label>
                        <textarea class="form-control" id="description" name="description" > </textarea> 
                    </div>

                </div>
                <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                <a href="{{ route('admin.attributes.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>
@endsection
