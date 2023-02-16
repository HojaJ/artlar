<p>
    @lang("Displaing all the values of :module_name (Id: :id)", ['module_name'=>ucwords($module_name_singular), 'id'=>$$module_name_singular->id]).
</p>
<table class="table table-responsive-sm table-hover table-bordered">
    <?php
    $all_columns = $$module_name_singular->getTableColumns();
    ?>
    <thead>
    <tr>
        <th scope="col">
            <strong>
                @lang('Name')
            </strong>
        </th>
        <th scope="col">
            <strong>
                @lang('Value')
            </strong>
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach ($all_columns as $column)
        <tr>
            <td>
                <strong>
                    {{ __(label_case($column->Field)) }}
                </strong>
            </td>
            <td>
                {!! show_column_value($$module_name_singular, $column) !!}
            </td>
        </tr>
    @endforeach
    <tr>
        <td>
            <strong>
                Works
            </strong>
        </td>
        <td>
            @foreach($$module_name_singular->works as $work)
                @php
                    $img_path = asset($work->image);
                @endphp
                <figure class="figure">
                    <a href="{{$img_path}}" data-lightbox="image-set" data-title="Name: {{$work->name}}">
                        <img src="{{$img_path}}" style="max-width:200px;" class="figure-img img-fluid rounded img-thumbnail" alt="">
                    </a>
                    <figcaption class="figure-caption">Path: {{$work->name}}</figcaption>
                </figure>
            @endforeach
        </td>
    </tr>

    </tbody>
</table>

{{-- Lightbox2 Library --}}
<x-library.lightbox />
