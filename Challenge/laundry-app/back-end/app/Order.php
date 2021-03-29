<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Order
 *
 * @property int $id
 * @property string|null $details
 * @property int|null $priority
 * @property string|null $order_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $customer_id
 * @property-read \App\User $customer
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Order onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Order withoutTrashed()
 * @mixin \Eloquent
 */
class Order extends Model
{
    use SoftDeletes;

    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const ORDER_STATUS_SELECT = [
        'pending'    => 'Pending',
        'processing' => 'Processing',
        'done'       => 'Done',
    ];

    protected $fillable = [
        'details',
        'priority',
        'created_at',
        'updated_at',
        'deleted_at',
        'customer_id',
        'order_status',
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}
