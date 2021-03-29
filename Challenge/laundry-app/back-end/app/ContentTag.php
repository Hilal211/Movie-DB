<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\ContentTag
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentTag newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\ContentTag onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentTag query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentTag whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentTag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentTag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentTag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ContentTag withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\ContentTag withoutTrashed()
 * @mixin \Eloquent
 */
class ContentTag extends Model
{
    use SoftDeletes;

    public $table = 'content_tags';

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
