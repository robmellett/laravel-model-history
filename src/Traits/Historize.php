<?php

namespace RobMellett\LaravelModelHistory\Traits;

use Illuminate\Support\Str;
use RobMellett\LaravelModelHistory\Models\HistoryEvent;

trait Historize
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::created(function ($model) {
            $model->trackCustomEvent('CREATED');
        });

        static::updated(function ($model) {
            $model->trackCustomEvent('UPDATED');
        });
    }

    /**
     * Model History Relationship
     */
    public function history()
    {
        return $this->morphMany(HistoryEvent::class, 'historize');
    }

    /**
     * Return the difference between original and dirty model
     */
    public function getOriginalDifference()
    {
        return collect($this->getOriginal())->intersectByKeys($this->getChanges())
            ->except('password')
            ->toArray();
    }

    /**
     * @return mixed
     */
    public function trackCustomEvent(string $eventName)
    {
        return $this->history()->create([
            'event_name' => Str::upper($eventName),
            'original' => $this->getOriginalDifference(),
            'changes' => collect($this->getChanges())
                ->except('password')
                ->toArray(),
        ]);
    }
}
