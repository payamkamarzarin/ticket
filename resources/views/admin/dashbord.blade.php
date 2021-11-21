<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dashbord</title>
    @include('layout.css.css-link')
</head>
<body>
    <div class="container">
        <div class="row">
            <div>
                <table>
                    <tr>
                        <th>شناسه:</th>
                        <th>نام:</th>
                        <th>ایمیل:</th>
                        <th>موضوع:</th>
                        <th>دپارتمان:</th>
                        <th>پیام:</th>
                        <th>وضعیت:</th>
                        <th>نمایش:</th>
                      </tr>
                      @foreach ($tickets as $ticket)
                      <tr>
                        <td>{{$ticket->id}}</td>
                        <td>{{$ticket->user->name}}</td>
                        <td>{{$ticket->user->email}}</td>
                        <td>{{$ticket->subject}}</td>
                        <td>{{$ticket->department}}</td>
                        <td>{{$ticket->message}}</td>
                        <td>{{$ticket->tickets()->get()->isEmpty()?$ticket->status:$ticket->tickets()->latest()->first()->status}}</td>
                        <td><a href="{{route('admin.ticket.show',['ticket'=>$ticket->id])}}">Show</a></td>
                      </tr>
                      @endforeach
                </table>
            </div>
        </div>
    </div>
    @include('layout.js.js-link')
</body>
</html>
