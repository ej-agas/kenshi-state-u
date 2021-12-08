<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use HasFactory;

    public const FILLABLES = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
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

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
