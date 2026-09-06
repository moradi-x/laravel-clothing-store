@extends('admin.layouts.admin')
@section(section: 'title')
    - edit product category

@section('script')
    <script>
        $('#categorySelect').selectpicker({
            'title': 'انتخاب دسته بندی'
        });


        // var fileName = $(this).val();
        // $(this).next('.custom-file-label').html(fileName);

        // $('#attributeContainer').hide();
        $(document).ready(function() {

            $('#attributeContainer').hide();

            // انتخاب دسته بندی
            $('#categorySelect').on('changed.bs.select', function() {
                let categoryid = $(this).val();
                $.get(
                    `/admin-panel/management/category-attribute/${categoryid}`,
                    function(response, status) {
                        if (status == 'success') {
                            // نمایش بخش ویژگی و وریشن
                            $('#attributeContainer').fadeIn();

                            // پاک کردن ویژگی‌های قبلی
                            $('#attributes').empty();

                            // نمایش attribute های دسته بندی
                            response.attributes.forEach(attribute => {
                                let attributeFormGroup = $('<div/>', {
                                    class: 'form-group col-md-3'
                                });

                                attributeFormGroup.append(
                                    $('<label/>', {
                                        for: attribute.name,
                                        text: attribute.name
                                    })
                                );

                                attributeFormGroup.append(
                                    $('<input/>', {
                                        type: 'text',
                                        class: 'form-control',
                                        id: attribute.name,
                                        name: `attribute_ids[${attribute.id}]`
                                    })
                                );
                                $('#attributes').append(attributeFormGroup);
                            });

                            // نام متغیر
                            if (response.variation) {
                                $('#variationName').text(response.variation.name);
                            } else {
                                $('#variationName').text('');
                            }

                            // ریست کردن وریشن‌ها
                            $('#czContainer').empty();
                        } else {
                            alert('مشکل در دریافت لیست ویژگی ها');
                        }
                    }
                ).fail(function() {
                    alert('مشکل در دریافت لیست ویژگی ها');
                });
            });

            // تابع ساخت یک ردیف Variation
            function createVariationRow(showRemove) {

                let removeButton = '';
                if (showRemove) {
                    removeButton = `
            <div class="text-right mb-2">
                <button type="button"
                        class="btn btn-danger remove-variation">
                    ×
                </button>
            </div>
        `;
                }
                return $(`
        <div class="recordset mb-3">
            ${removeButton}
            <div class="row">
                <div class="form-group col-md-3">
                    <label>نام</label>
                    <input
                        class="form-control"
                        name="variation_values[value][]"
                        type="text">
                </div>

                <div class="form-group col-md-3">
                    <label>قیمت</label>
                    <input
                        class="form-control"
                        name="variation_values[price][]"
                        type="text">
                </div>

                <div class="form-group col-md-3">
                    <label>تعداد</label>
                    <input
                        class="form-control"
                        name="variation_values[quantity][]"
                        type="text">
                </div>

                <div class="form-group col-md-3">
                    <label>شناسه انبار</label>
                    <input
                        class="form-control"
                        name="variation_values[sku][]"
                        type="text">
                </div>

            </div>

        </div>
    `);
            }

            // دکمه +
            $('#addVariation').click(function() {
                let count = $('#czContainer .recordset').length;

                // بار اول
                if (count === 0) {
                    let firstRow = createVariationRow(true);
                    $('#czContainer').append(firstRow);
                }

                // بار دوم به بعد
                else {
                    // برای ردیف‌های قبلی ضربدر اضافه کن
                    $('#czContainer .recordset').each(function() {
                        if ($(this).find('.remove-variation').length === 0) {
                            $(this).find('.row').append(`
                        <div class="form-group col-md-1">
                            <label>&nbsp;</label>
                            <button type="button"
                                    class="btn btn-danger remove-variation">
                                ×
                            </button>
                        </div>
                    `);
                        }
                    });

                    // ساخت ردیف جدید با ضربدر
                    let newRow = createVariationRow(true);
                    $('#czContainer').append(newRow);
                }
            });

            // حذف Variation
            $('#czContainer').on('click', '.remove-variation', function() {
                $(this)
                    .closest('.recordset')
                    .remove();
            });
        });
    </script>
@endsection
@endsection
@section('content')
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white ">
        <div class=" mb-4 text-center text-md-right ">
            <h5 class="font-weight-bold">
                ویرایش دسته بندی محصول :
                {{ $product->name }}
            </h5>
        </div>
        <hr>
        @include('admin.sections.errors')
        <form action="{{ route('admin.products.category.update', ['product' => $product->id]) }}" method="POST">
            @method('PUt')
            @csrf

            <div class="form-row">
                {{--  دسته بندی --}}
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <div class="form-group col-md-3">
                            <label for="category_id">دسته بندی </label>
                            <select id="categorySelect" name="category_id" class="form-control"
                                data-live-search= "true">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == $product->category->id ? 'selected' : '' }}>
                                        {{ $category->name }} - {{ $category->parent->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                {{--  افزودن قیمت و نمایش متغیر ها --}}
                <div class="col-md-12" id="attributeContainer">
                    <div class="row" id="attributes"></div>
                    <div class="col-md-12" id="variationContainer">
                        <hr>
                        <p> افزودن قیمت و موجودی برای متغیر
                            <span class="font-weight-bold" id="variationName"></span>
                        </p>
                        <div id="czContainer">
                        </div>
                        <button type="button" id="addVariation" class="btn btn-success mt-2">
                            +
                        </button>
                    </div>
                </div>

            </div>
            <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
        </form>
    </div>
</div>
@endsection

