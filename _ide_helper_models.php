<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
 */
	class Bdata extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

