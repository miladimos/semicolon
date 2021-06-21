<?php

namespace App\Http\Controllers\Webmaster\Ticket;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Webmaster\WebmasterController;


class TicketController extends WebmasterController
{

    public function index()
    {
        $this->seo()->setTitle('تیکت ها');

        $tickets = Ticket::latest()->paginate(20);
        return view('webmaster.tickets.all', compact('tickets'));
    }

    public function store(Request $request)
    {
        $ticket = Ticket::create($request->all());
        return redirect()->route('webmaster.tickets.index')->with('success', 'تیکت مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Ticket $ticket)
    {
        return view('webmaster.tickets.show', compact('ticket'));
    }

    public function done(Ticket $ticket)
    {
        $ticket->update([
            'done' => true,
            'done_at' => now(),
        ]);
        return redirect()->route('webmaster.tickets.index')->with('success', 'تیکت مورد نظر با موفقیت ایجاد شد.');
    }

    public function update(Request $request, Ticket $ticket)
    {
        $ticket->update($request->all());
        return redirect()->route('webmaster.tickets.index')->with('success', 'تیکت مورد نظر با موفقیت ایجاد شد.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('webmaster.tickets.index')->with('success', 'تیکت مورد نظر با موفقیت ایجاد شد.');
    }
}
