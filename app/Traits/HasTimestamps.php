<?php

namespace App\Traits;

use Carbon\Carbon;

trait HasTimestamps
{
    public function createdAt(): Carbon
    {
        return $this->created_at;
    }

    public function updatedAt(): Carbon
    {
        return $this->updated_at;
    }

    public function deletedAt(): Carbon
    {
        return $this->deleted_at;
    }
}
