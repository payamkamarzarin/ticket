<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index(){
        $tickets = auth()->user()->tickets()->get();
        return view('user.ticket.dashbord',compact('tickets'));
    }

    public function create(){
        return view('user.ticket.create');
    }

    public function store(){
        //Auth::loginUsingId(1);
        $ticket = new Ticket();
        $ticket->user_id = auth()->user()->id;
        $ticket->subject = request('subject');
        $ticket->message = request('message');
        $ticket->department = request('department');
        $ticket->status = 'open';

        //dd(request()->file('img'));

        $ticket->save();
        return redirect(route('ticket.index'));

    }

    public function reply(Ticket $ticket){

        $_ticket = new Ticket();
        $_ticket->user_id = auth()->user()->id;
        $_ticket->subject = $ticket->subject;
        $_ticket->message = request('message');
        $_ticket->department = $ticket->department;
        $_ticket->status = 'answer user';
        $_ticket->reply_to = $ticket->id;
        $_ticket->save();

        return redirect(route('ticket.show',['ticket'=>$ticket->id]));
    }

    public function show(Ticket $ticket){
        return view('user.ticket.show',compact('ticket'));
    }
}
