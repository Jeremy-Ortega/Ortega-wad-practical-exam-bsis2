<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>transaction_title: {{$transaction->transaction_title}}</div>
    <div>description: {{$transaction->description}}</div>
    <div>status: {{$transaction->status}}</div>
    <div>total_amount: {{$transaction->total_amount}}</div>
    <div>transaction_number: {{$transaction->transaction_number}}</div>
    <div>{{$transaction->created_at}}</div>
    <div>{{$transaction->updated_at}}</div>


    
    <form action="{{route('getTrans',['id' => $transaction->id]) }}" method="GET">
        @csrf
        <button type="submit">update Transaction</button>
    </form>

    <form action="{{route('deleteTrans',['id' => $transaction->id] ) }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">delete Transaction</button>
    </form>

</body>
</html>