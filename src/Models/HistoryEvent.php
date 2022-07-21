<?php

namespace RobMellett\LaravelModelHistory\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryEvent extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'original' => 'array',
        'changes' => 'array',
    ];

    /**
     * Get the owning history model.
     */
    public function historize()
    {
        return $this->morphTo();
    }

    /**
     * Get the prunable model query.
     */
    public function prunable(): Builder
    {
        return static::where('created_at', '<=', now()->subMonth());
    }
}
