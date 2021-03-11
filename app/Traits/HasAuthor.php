<?php

namespace App\Traits;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasAuthor
{
    public function author(): Admin
    {
        return $this->authorRelation;
    }

    public function authorRelation(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

    public function authoredBy(Admin $author)
    {
        $this->authorRelation()->associate($author);
    }

    public function isAuthoredBy(Admin $user): bool
    {
        return $this->author()->matches($user);
    }
}
