<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Contact
 *
 * @property int $id
 * @property string $subject
 * @property string $message
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Contact onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Contact withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Contact withoutTrashed()
 * @mixin \Eloquent
 */
class Contact extends Model
{
    use SoftDeletes;

    public $table = 'contacts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'email',
        'subject',
        'message',
        'name',
        'address',
        'phone_number',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
