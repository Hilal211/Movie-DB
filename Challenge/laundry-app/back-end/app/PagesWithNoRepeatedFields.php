<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\PagesWithNoRepeatedFields
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PagesWithNoRepeatedFields newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PagesWithNoRepeatedFields newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\PagesWithNoRepeatedFields onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PagesWithNoRepeatedFields query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\PagesWithNoRepeatedFields withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\PagesWithNoRepeatedFields withoutTrashed()
 * @mixin \Eloquent
 */
class PagesWithNoRepeatedFields extends Model
{
    use SoftDeletes;

    public $table = 'pages_with_no_repeated_fields';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'history',
        'created_at',
        'updated_at',
        'deleted_at',
        'about_title',
        'short_history',
        'about_subtitle',
        'footer_description',
        'social_media_twitter',
        'social_media_youtube',
        'social_media_facebook',
        'social_media_instagram',
    ];
}
