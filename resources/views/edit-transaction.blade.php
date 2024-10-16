<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('updateTrans',['id' => $transaction->id])}}" method="POST">
        @method('PUT')
        @csrf

        <label for="transaction_title">transaction_title:</label>
        <input type="text" id="transaction_title" name="transaction_title" required value="{{$transaction->transaction_title}}">

        <label for="description">description:</label>
        <input type="text" id="description" name="description" required value="{{$transaction->description}}">

        <label for="status">status:</label>
        <select type="select" id="status" name="status" required value="{{$transaction->status}}">
            <option value="successful">Successful</option>
            <option value="declined">Declined</option>
        </select><br>


        <label for="total_amount">total_amount:</label>
        <input type="text" id="total_amount" name="total_amount" required value="{{$transaction->total_amount}}">

        <label for="transaction_number">transaction_number:</label>
        <input type="text" id="transaction_number" name="transaction_number" required value="{{$transaction->transaction_number}}">


        <button type="submit">update Transaction</button>

    </form>
</body>
</html>
