@php
$required = (Str::contains($field['rules'], 'required')) ? "required" : "";
$required_mark = ($required != "") ? '<span class="text-danger"> <strong>*</strong> </span>' : '';
@endphp

<div class="form-group mb-3">
    <label for="{{ $field['name'] }}" class='form-label'>About Us</label>
    <textarea name="{{ $field['name'] }}" class="form-control description"></textarea>
</div>
@push('after-styles')
    <!-- File Manager -->
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endpush
@push ('after-scripts')
    <script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('aboutus', {
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
