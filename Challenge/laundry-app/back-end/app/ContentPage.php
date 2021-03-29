<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * App\ContentPage
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $page_text
 * @property string|null $excerpt
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ContentCategory[] $categories
 * @property-read mixed $featured_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ContentTag[] $tags
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentPage newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\ContentPage onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentPage query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentPage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentPage whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentPage wherePageText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContentPage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ContentPage withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\ContentPage withoutTrashed()
 * @mixin \Eloquent
 */
class ContentPage extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'content_pages';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'excerpt',
        'page_text',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function categories()
    {
        return $this->belongsToMany(ContentCategory::class);
    }

    public function tags()
    {
        return $this->belongsToMany(ContentTag::class);
    }

    public function getfeaturedImageAttribute()
    {
        $file = $this->getMedia('featured_image')->last();

        if ($file) {
            $file->url = $file->getUrl();
        }

        return $file;
    }
}
