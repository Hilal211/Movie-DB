<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\OrderItem
 *
 * @property int $id
 * @property string|null $details
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $order_id
 * @property int $item_type_id
 * @property-read \App\ItemsType $item_type
 * @property-read \App\Order $order
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderItem newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\OrderItem onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderItem query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderItem whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderItem whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderItem whereItemTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderItem whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderItem whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\OrderItem withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\OrderItem withoutTrashed()
 * @mixin \Eloquent
 */
class OrderItem extends Model
{
    use SoftDeletes;

    public $table = 'order_items';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'status',
        'details',
        'order_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'item_type_id',
    ];

    const STATUS_SELECT = [
        'idle'       => 'Idle',
        'pending'    => 'Pending',
        'processing' => 'Processing',
        'done'       => 'Done',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id');
    }

    public function item_type()
    {
        return $this->belongsTo(ItemsType::class, 'item_type_id');
    }
}
