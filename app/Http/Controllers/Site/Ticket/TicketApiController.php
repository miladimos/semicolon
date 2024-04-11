<?php

namespace App\Http\Controllers\Site\Ticket;

use App\Http\Controllers\Api\V1\ApiBaseController;
use App\Http\Resources\V1\Webmaster\Ticket\TicketSubjectCollection;
use App\Models\TicketPriority;
use App\Models\TicketStatus;
use App\Models\TicketSubject;

class TicketApiController extends ApiBaseController
{
    public function subjects()
    {
        return $this->responseSuccess(new TicketSubjectCollection(TicketSubject::all()));
    }

    public function statuses()
    {
        return $this->responseSuccess(new TicketSubjectCollection(TicketStatus::all()));
    }

    public function priorities()
    {
        return $this->responseSuccess(new TicketSubjectCollection(TicketPriority::all()));
    }
}
