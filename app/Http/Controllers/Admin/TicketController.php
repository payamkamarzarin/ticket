<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
            $tickets = Ticket::where('reply_to','=',null)->get();
            return view('admin.dashbord',compact('tickets'));
    }

    public function show(Ticket $ticket){
        return view('admin.show',compact('ticket'));
    }

    public function delete(){

    }

    public function reply(Ticket $ticket){
        $_ticket = new Ticket();
        $_ticket->user_id = auth()->user()->id;
        $_ticket->subject = $ticket->subject;
        $_ticket->message = request('message');
        $_ticket->department = $ticket->department;
        $_ticket->status = 'answer';
        $_ticket->reply_to = $ticket->id;
        $_ticket->save();

        return redirect(route('admin.ticket.show',['ticket'=>$ticket->id]));
    }
}
