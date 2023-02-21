<div class="row mb-3">

    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'year';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'price';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->number($field_name,null,0,null,0.01)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'artist';
            $field_lable = label_case($field_name);
            $field_relation = "artist";
            $field_placeholder = __("Select an option");
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select('artist_id', isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('name', 'id'):'')->placeholder($field_placeholder)->class('form-control select2-artist')->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-6 row">
        <div class="col-6">
            <div class="form-group">
                <?php
                $field_name = 'size_height';
                $field_lable = label_case($field_name);
                $field_placeholder = $field_lable;
                $required = "";
                ?>
                {{ html()->label('Height (sm)', $field_name) }} {!! fielf_required($required) !!}
                {{ html()->number($field_name)->class('form-control')->attributes(["$required"])->attribute('step','0.1') }}
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <?php
                $field_name = 'size_length';
                $field_lable = label_case($field_name);
                $field_placeholder = $field_lable;
                $required = "";
                ?>
                {{ html()->label('Length (sm)', $field_name) }} {!! fielf_required($required) !!}
                {{ html()->number($field_name)->class('form-control')->attributes(["$required"])->attribute('step','0.1') }}
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'image';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            <div class="input-group mb-3">
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", 'aria-label'=>'Image', 'aria-describedby'=>'button-image']) }}
                <div class="input-group-append">
                    <button class="btn btn-info" type="button" id="button-image"><i class="fas fa-folder-open"></i> @lang('Browse')</button>
                </div>
            </div>
        </div>

{{--        <div class="form-group">--}}
{{--            <?php--}}
{{--            $field_name = 'image';--}}
{{--            $field_lable = label_case($field_name);--}}
{{--            $field_placeholder = $field_lable;--}}
{{--            $required = "";--}}
{{--            ?>--}}
{{--            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}--}}
{{--            <div class="input-group mb-3">--}}
{{--                {{ html()->text('')->placeholder($field_placeholder)->class('form-control')->attributes(["$required", 'aria-label'=>'Image','value' => isset($$module_name_singular)?$$module_name_singular->image:'']) }}--}}
{{--                {{ html()->file($field_name)->class('form-control')->attributes(["$required", 'aria-label'=>'Image']) }}--}}
{{--                                <div class="input-group-append">--}}
{{--                                    <button class="btn btn-info" type="button" id="button-image"><i class="fas fa-folder-open"></i> @lang('Browse')</button>--}}
{{--                                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>

<div class="row mb-3">
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'material_list[]';
            $field_lable = label_case($field_name);
            $field_relation = "material";
            $field_placeholder = __("Select an option");
            $required = "";
            ?>
            {{ html()->label("Material", $field_name) }} {!! fielf_required($required) !!}
            {{ html()->multiselect($field_name,
                isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('name', 'id'):'',
                isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('id')->toArray():''
                )->class('form-control select2-material')->attributes(["$required"]) }}
        </div>

    </div>

    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'movement_list[]';
            $field_lable = label_case($field_name);
            $field_relation = "movement";
            $field_placeholder = __("Select an option");
            $required = "";
            ?>
            {{ html()->label("Movement", $field_name) }} {!! fielf_required($required) !!}
            {{ html()->multiselect($field_name,
                isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('name', 'id'):'',
                isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('id')->toArray():''
                )->class('form-control select2-movement')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'medium';
            $field_lable = label_case($field_name);
            $field_relation = "medium";
            $field_placeholder = __("Select an option");
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select('medium_id', isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('name', 'id'):'')->placeholder($field_placeholder)->class('form-control select2-medium')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'rarity';
            $field_lable = label_case($field_name);
            $field_relation = "rarity";
            $field_placeholder = __("Select an option");
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select('rarity_id', isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('name', 'id'):'')->placeholder($field_placeholder)->class('form-control select2-rarity')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'signature';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
                <div class="form-check">
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}

            {{ html()->checkbox($field_name)->class('form-check-input')->attributes(["$required"]) }}
                </div>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'certificate_of_auth';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <div class="form-check">
                {{ html()->label('Certificate of authenticity', $field_name) }} {!! fielf_required($required) !!}

                {{ html()->checkbox($field_name)->class('form-check-input')->attributes(["$required"]) }}
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'frame';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <div class="form-check">
                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}

                {{ html()->checkbox($field_name)->class('form-check-input')->attributes(["$required"]) }}
            </div>
        </div>
    </div>
</div>


<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<!-- Select2 Library -->
<x-library.select2 />
<x-library.datetime-picker />

@push('after-styles')
    <!-- File Manager -->
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">

@endpush

@push ('after-scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('select2:open', () => {
                document.querySelector('.select2-search__field').focus();
                document.querySelector('.select2-container--open .select2-search__field').focus();
            });

            $('.select2-artist').select2({
                theme: "bootstrap",
                placeholder: '@lang("Select an option")',
                minimumInputLength: 2,
                allowClear: true,
                ajax: {
                    url: '{{route("backend.artists.index_list")}}',
                    dataType: 'json',
                    data: function(params) {
                        return {
                            q: $.trim(params.term)
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });

            $('.select2-material').select2({
                theme: "bootstrap",
                placeholder: '@lang("Select an option")',

                minimumInputLength: 2,
                allowClear: true,
                ajax: {
                    url: '{{route("backend.materials.index_list")}}',
                    dataType: 'json',
                    data: function(params) {
                        return {
                            q: $.trim(params.term)
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });

            $('.select2-medium').select2({
                theme: "bootstrap",
                placeholder: '@lang("Select an option")',
                minimumInputLength: 2,
                allowClear: true,
                ajax: {
                    url: '{{route("backend.medium.index_list")}}',
                    dataType: 'json',
                    data: function(params) {
                        return {
                            q: $.trim(params.term)
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });

            $('.select2-movement').select2({
                theme: "bootstrap",
                placeholder: '@lang("Select an option")',
                minimumInputLength: 2,
                allowClear: true,
                ajax: {
                    url: '{{route("backend.movements.index_list")}}',
                    dataType: 'json',
                    data: function(params) {
                        return {
                            q: $.trim(params.term)
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });
            $('.select2-rarity').select2({
                theme: "bootstrap",
                placeholder: '@lang("Select an option")',
                minimumInputLength: 2,
                allowClear: true,
                ajax: {
                    url: '{{route("backend.rarities.index_list")}}',
                    dataType: 'json',
                    data: function(params) {
                        return {
                            q: $.trim(params.term)
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });

        });
    </script>



    <script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

    <script type="text/javascript">
        CKEDITOR.replace('description', {
            filebrowserImageBrowseUrl: '/file-manager/ckeditor',
            language: '{{App::getLocale()}}',
            defaultLanguage: 'en'
        });


        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
            });
        });

        // set file link
        function fmSetLink($url) {
            let new_url = new URL($url);
            document.getElementById('image').value = new_url.pathname;
        }
    </script>
@endpush
