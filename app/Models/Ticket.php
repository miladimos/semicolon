<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Miladimos\Toolkit\Traits\HasUUID;

class Ticket extends Model
{
    use HasFactory,
        SoftDeletes,
        HasUUID;

    protected $table = 'tickets';

    // protected $fillable = ['title', 'body', 'done', 'done_at', 'uuid', 'code'];

    protected $guarded = [];

    protected $dates = ['deleted_at'];

    protected $with = ['admin', 'subject', 'status', 'priority', 'children'];

    public static function generateTicketCode()
    {
        do {
            $digits   = array_merge(range(0, 9), range(0, 9), range(0, 9));
            $sChars   = range('a', 'z');
            $cChars   = range('A', 'Z');
            $chars    = array_merge($digits, $sChars, $cChars);
            $arrToStr = implode("", $chars);
            $shuf     = str_shuffle($arrToStr);
            $code     = substr($shuf, 0, 8);
            $exist    = true;

            if (!static::where('code', $code)->exists()) {
                $exist = false;
                return $code;
            }
        } while ($exist);
    }

    public function ticketable()
    {
        return $this->morphTo();
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function subject()
    {
        return $this->belongsTo(TicketSubject::class, 'subject_id');
    }

    public function parent()
    {
        return $this->belongsTo(Ticket::class, 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Ticket::class, 'parent_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
