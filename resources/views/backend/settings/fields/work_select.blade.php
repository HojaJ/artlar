@php
$required = (Str::contains($field['rules'], 'required')) ? "required" : "";
$required_mark = ($required != "") ? '<span class="text-danger"> <strong>*</strong> </span>' : '';
$slides = json_decode(setting('slide'));


@endphp

<div class="form-group mb-3 {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}" class='form-label'> <strong>{{ $field['label'] }}</strong> ({{ $field['name'] }})</label> {!! $required_mark !!}

    <select name="{{ $field['name'] }}" class="form-control select2-work" id="{{ $field['name'] }}" {{ $required }}>
        <option value="" selected disabled>Select an option</option>
        @foreach($works as $val => $label)
            <option @if( $val == $slides->{$field['rules']} ) selected  @endif value="{{ $val }}">{{ $label }}</option>
        @endforeach
    </select>
    @if ($errors->has($field['name'])) <small class="invalid-feedback">{{ $errors->first($field['name']) }}</small> @endif
</div>

<x-library.select2 />
@push ('after-scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('select2:open', () => {
                document.querySelector('.select2-search__field').focus();
                document.querySelector('.select2-container--open .select2-search__field').focus();
            });

            $('.select2-work').select2({
                theme: "bootstrap",
                placeholder: '@lang("Select an option")',
                minimumInputLength: 2,
                allowClear: true,
            });
        });
    </script>
@endpush
