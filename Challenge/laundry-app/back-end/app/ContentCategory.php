<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\ContentCategory
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentCategory newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\ContentCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentCategory query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ContentCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\ContentCategory withoutTrashed()
 * @mixin \Eloquent
 */
class ContentCategory extends Model
{
    use SoftDeletes;

    public $table = 'content_categories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
