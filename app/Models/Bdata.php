<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Bdata
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $bill_type
 * @property string $bill_code
 * @property string $bill_number
 * @property string $bill_date
 * @property float $bill_price
 * @property string $bill_check_number
 * @property string $bill_owner
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata whereBillCheckNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata whereBillCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata whereBillDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata whereBillNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata whereBillOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata whereBillPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata whereBillType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bdata whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Bdata extends Model
{
    protected $fillable = ['bill_type','bill_code','bill_number','bill_date','bill_price','bill_check_number','bill_owner'];
}
