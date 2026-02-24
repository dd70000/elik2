<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ServiceProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'national_id',
        'bio',
        'experience_years',
        'is_verified',
        'average_rating',
    ];

    protected function casts(): array
    {
        return [
            'is_verified' => 'boolean',
            'average_rating' => 'decimal:2',
            'experience_years' => 'integer',
        ];
    }

    /**
     * Get the user that owns the service provider.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the services for the service provider.
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class, 'provider_id');
    }

    /**
     * Get the orders for the service provider.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'provider_id');
    }

    /**
     * Get the reviews for the service provider.
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'provider_id');
    }
}
