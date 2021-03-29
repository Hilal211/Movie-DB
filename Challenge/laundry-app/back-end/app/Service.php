<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

/**
 * App\Service
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $image
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Service onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Service withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Service withoutTrashed()
 * @mixin \Eloquent
 */
class Service extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'services';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
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
