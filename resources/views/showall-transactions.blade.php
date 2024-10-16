<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>showing all transactions</h1>
    <form action="{{route('createTrans') }}" method="get">
        @csrf
        <button type="submit">create Transaction</button>
    </form>


    @foreach ($transactions as $transaction)
    <div> <a href="/read/{{$transaction->id}}">transaction_title:</a> {{$transaction->transaction_title}} </div>
    <div>description: {{$transaction->description}}</div>
    <div>status: {{$transaction->status}}</div>
    <div>total_amount: {{$transaction->total_amount}}</div>
    <div>transaction_number: {{$transaction->transaction_number}}</div>
    <div>{{$transaction->created_at}}</div>
    <div>{{$transaction->updated_at}}</div>
    <hr>
    
    @endforeach
</body>
</html>
