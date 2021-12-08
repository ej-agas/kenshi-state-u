<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory, Notifiable;

    public const FILLABLES = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'teacher_id'
    ];

    protected $fillable = self::FILLABLES;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function setPasswordAttribute(string $value): void
    {
        $this->attributes['password'] = \bcrypt($value);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
}
