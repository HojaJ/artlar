<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


/*
 * Work Image
 */
function work_image($image){
    return store_image('works',$image);
}

/*
 * Artist Image
 */
function artist_image($image){
    return store_image('artists',$image);
}
/*
 * Upload image
 */
function store_image($folder_name, $image) {
    $exist_or_new = 'images/' . $folder_name;
    if (!File::exists($exist_or_new)) {
        File::makeDirectory($exist_or_new, 0777, true, true);
    }
    $name = Str::random(15);
    $extension = $image->getClientOriginalExtension();
    $filename = $name.'.'.$extension;
    $path = $exist_or_new.'/';
    $image->move($path, $filename);
    $fullpath = $path.$filename;

    // if(file_exists($fullpath)) {
        // $img = Image::make($fullpath);
        // $img->encode('jpg', 60)->save($fullpath);
        // if(file_exists($fullpath)) {
            // $webp = Image::make($fullpath)->encode('webp');
//            $webp = $webp->widen(, function ($constraint){
//                $constraint->upsize();
//            });
            // $webp_img_name = $webp->save($exist_or_new.'/'.$name.'.webp');
        // }
    // }
    return $fullpath;
}

/*
 * Remove Image
 */
function remove_image($path) {
    $name = explode('.',$path);
    File::delete([$path,$name[0] . '.webp']);
}

/*
 * Global helpers file with misc functions.
 */
if (! function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

/*
 * Global helpers file with misc functions.
 */
if (! function_exists('user_registration')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function user_registration()
    {
        $user_registration = false;

        if (env('USER_REGISTRATION') == 'true') {
            $user_registration = true;
        }

        return $user_registration;
    }
}

/*
 *
 * label_case
 *
 * ------------------------------------------------------------------------
 */
if (! function_exists('label_case')) {

    /**
     * Prepare the Column Name for Lables.
     */
    function label_case($text)
    {
        $order = ['_', '-'];
        $replace = ' ';

        $new_text = trim(\Illuminate\Support\Str::title(str_replace('"', '', $text)));
        $new_text = trim(\Illuminate\Support\Str::title(str_replace($order, $replace, $text)));
        $new_text = preg_replace('!\s+!', ' ', $new_text);

        return $new_text;
    }
}

/*
 *
 * show_column_value
 *
 * ------------------------------------------------------------------------
 */
if (! function_exists('show_column_value')) {
    /**
     * Return Column values as Raw and formatted.
     *
     * @param  string  $valueObject  Model Object
     * @param  string  $column  Column Name
     * @param  string  $return_format  Return Type
     * @return string Raw/Formatted Column Value
     */
    function show_column_value($valueObject, $column, $return_format = '')
    {
        $column_name = $column->Field;
        $column_type = $column->Type;

        $value = $valueObject->$column_name;

        if ($return_format == 'raw') {
            return $value;
        }

        if (($column_type == 'date') && $value != '') {
            $datetime = \Carbon\Carbon::parse($value);

            return $datetime->isoFormat('LL');
        } elseif (($column_type == 'datetime' || $column_type == 'timestamp') && $value != '') {
            $datetime = \Carbon\Carbon::parse($value);

            return $datetime->isoFormat('LLLL');
        } elseif ($column_type == 'json') {
            $return_text = json_encode($value);
        } elseif ($column_type != 'json' && \Illuminate\Support\Str::endsWith(strtolower($value), ['png', 'jpg', 'jpeg', 'gif', 'svg'])) {
            $img_path = asset($value);

            $return_text = '<figure class="figure">
                                <a href="'.$img_path.'" data-lightbox="image-set" data-title="Path: '.$value.'">
                                    <img src="'.$img_path.'" style="max-width:200px;" class="figure-img img-fluid rounded img-thumbnail" alt="">
                                </a>
                                <figcaption class="figure-caption">Path: '.$value.'</figcaption>
                            </figure>';
        } else {
            $return_text = $value;
        }

        return $return_text;
    }
}

/*
 *
 * fielf_required
 * Show a * if field is required
 *
 * ------------------------------------------------------------------------
 */
if (! function_exists('fielf_required')) {

    /**
     * Prepare the Column Name for Lables.
     */
    function fielf_required($required)
    {
        $return_text = '';

        if ($required != '') {
            $return_text = '<span class="text-danger">*</span>';
        }

        return $return_text;
    }
}

/*
 * Get or Set the Settings Values
 *
 * @var [type]
 */
if (! function_exists('setting')) {
    function setting($key, $default = null)
    {
        if (is_null($key)) {
            return new App\Models\Setting();
        }

        if (is_array($key)) {
            return App\Models\Setting::set($key[0], $key[1]);
        }

        $value = App\Models\Setting::get($key);

        return is_null($value) ? value($default) : $value;
    }
}

/*
 * Show Human readable file size
 *
 * @var [type]
 */
if (! function_exists('humanFilesize')) {
    function humanFilesize($size, $precision = 2)
    {
        $units = ['B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        $step = 1024;
        $i = 0;

        while (($size / $step) > 0.9) {
            $size = $size / $step;
            $i++;
        }

        return round($size, $precision).$units[$i];
    }
}

/*
 *
 * Encode Id to a Hashids\Hashids
 *
 * ------------------------------------------------------------------------
 */
if (! function_exists('encode_id')) {

    /**
     * Prepare the Column Name for Lables.
     */
    function encode_id($id)
    {
        $hashids = new Hashids\Hashids(config('app.salt'), 3, 'abcdefghijklmnopqrstuvwxyz1234567890');
        $hashid = $hashids->encode($id);

        return $hashid;
    }
}

/*
 *
 * Decode Id to a Hashids\Hashids
 *
 * ------------------------------------------------------------------------
 */
if (! function_exists('decode_id')) {

    /**
     * Prepare the Column Name for Lables.
     */
    function decode_id($hashid)
    {
        $hashids = new Hashids\Hashids(config('app.salt'), 3, 'abcdefghijklmnopqrstuvwxyz1234567890');
        $id = $hashids->decode($hashid);

        if (count($id)) {
            return $id[0];
        } else {
            abort(404);
        }
    }
}

/*
 *
 * Prepare a Slug for a given string
 * Laravel default str_slug does not work for Unicode
 *
 * ------------------------------------------------------------------------
 */
if (! function_exists('slug_format')) {

    /**
     * Format a string to Slug.
     */
    function slug_format($string)
    {
        $base_string = $string;

        $string = preg_replace('/\s+/u', '-', trim($string));
        $string = str_replace('/', '-', $string);
        $string = str_replace('\\', '-', $string);
        $string = strtolower($string);

        $slug_string = $string;

        return $slug_string;
    }
}

/*
 *
 * icon
 * A short and easy way to show icon fornts
 * Default value will be check icon from FontAwesome
 *
 * ------------------------------------------------------------------------
 */
if (! function_exists('icon')) {

    /**
     * Format a string to Slug.
     */
    function icon($string = 'fas fa-check')
    {
        $return_string = "<i class='".$string."'></i>";

        return $return_string;
    }
}

/*
 *
 * logUserAccess
 * Get current user's `name` and `id` and
 * log as debug data. Additional text can be added too.
 *
 * ------------------------------------------------------------------------
 */
if (! function_exists('logUserAccess')) {

    /**
     * Format a string to Slug.
     */
    function logUserAccess($text = '')
    {
        $auth_text = '';

        if (\Auth::check()) {
            $auth_text = 'User:'.\Auth::user()->name.' (ID:'.\Auth::user()->id.')';
        }

        \Log::debug(label_case($text)." | $auth_text");
    }
}


/*
 *
 * Decode Id to a Hashids\Hashids
 *
 * ------------------------------------------------------------------------
 */
if (! function_exists('generate_rgb_code')) {

    /**
     * Prepare the Column Name for Lables.
     */
    function generate_rgb_code($opacity = '0.9')
    {
        $str = '';
        for ($i = 1; $i <= 3; $i++) {
            $num = mt_rand(0, 255);
            $str .= "$num,";
        }
        $str .= "$opacity,";
        $str = substr($str, 0, -1);

        return $str;
    }
}

/*
 *
 * Return Date with weekday
 *
 * ------------------------------------------------------------------------
 */
if (! function_exists('date_today')) {

    /**
     * Return Date with weekday.
     *
     * Carbon Locale will be considered here
     * Example:
     * শুক্রবার, ২৪ জুলাই ২০২০
     * Friday, July 24, 2020
     */
    function date_today()
    {
        $str = \Carbon\Carbon::now()->isoFormat('dddd, LL');

        return $str;
    }
}

if (! function_exists('language_direction')) {
    /**
     * return direction of languages.
     *
     * @param $language
     * @return string
     */
    function language_direction($language = null)
    {
        if (empty($language)) {
            $language = app()->getLocale();
        }
        $language = strtolower(substr($language, 0, 2));
        $rtlLanguages = [
            'ar', //  'العربية', Arabic
            'arc', //  'ܐܪܡܝܐ', Aramaic
            'bcc', //  'بلوچی مکرانی', Southern Balochi
            'bqi', //  'بختياري', Bakthiari
            'ckb', //  'Soranî / کوردی', Sorani Kurdish
            'dv', //  'ދިވެހިބަސް', Dhivehi
            'fa', //  'فارسی', Persian
            'glk', //  'گیلکی', Gilaki
            'he', //  'עברית', Hebrew
            'lrc', //- 'لوری', Northern Luri
            'mzn', //  'مازِرونی', Mazanderani
            'pnb', //  'پنجابی', Western Punjabi
            'ps', //  'پښتو', Pashto
            'sd', //  'سنڌي', Sindhi
            'ug', //  'Uyghurche / ئۇيغۇرچە', Uyghur
            'ur', //  'اردو', Urdu
            'yi', //  'ייִדיש', Yiddish
        ];
        if (in_array($language, $rtlLanguages)) {
            return 'rtl';
        }

        return 'ltr';
    }
}
