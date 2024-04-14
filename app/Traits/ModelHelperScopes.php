<?php

namespace App\Traits;

use Illuminate\Database\Query\Builder;
use Carbon\Carbon;

trait ModelHelperScopes
{
    public function scopePopular(Builder $query): Builder
    {
        return $query->withCount('likes')
            ->orderBy('likes_count', 'desc');
    }
}
