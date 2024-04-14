<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Miladimos\Toolkit\Traits\HasUUID;

class UserMeta extends Model
{
    use HasUUID, SoftDeletes;

    protected $table = 'user_metas';

    protected $guarded = [];

    public function metaable()
    {
        return $this->morphTo();
    }
}
