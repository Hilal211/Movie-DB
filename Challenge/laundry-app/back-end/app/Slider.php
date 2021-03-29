<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

/**
 * App\Slider
 *
 * @property int $id
 * @property string $title
 * @property string|null $sub_title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $image
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Slider onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Slider withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Slider withoutTrashed()
 * @mixin \Eloquent
 */
class Slider extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'sliders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'sub_title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
    }

    public function getImageAttribute()
    {
        $file = $this->getMedia('image')->last();

        if ($file) {
            $file->url = $file->getUrl();
        }

        return $file;
    }
}
