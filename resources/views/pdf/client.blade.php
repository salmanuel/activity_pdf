<!DOCTYPE html>
<html>
<head>
    <title>Client Summary</title>
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif';
            font-size: 10pt;
        }

        h1 {
            font-size: 22pt;
        }

        table {
            border-collapse: collapse;
            margin-bottom: 13px;
            margin-top: 13px;
        }

        table th,
        table td {
            border: 1px solid #777;
            padding: 5px;
        }
    </style>
</head>
<body>
    <p style="text-align: center; margin-bottom: 18pt">
        <img src="{{public_path('images/mBank.jpg')}}" style="width: 200px;" alt=""> <br>
        {{-- <strong style="font-size: 16pt">MDC Banking, Inc.</strong> <br> --}}
        JVR4+9JW, New Capital I Complex, Marapao Street, <br>
        Tagbilaran City, Bohol <br>
        Tel. No.: 555-666-7890, (038) 411 5776
    </p>

    <h1>Client Summary</h1>
    <table style='width: 7.3in'>
        <tr>
            <th>Name</th>
            <td>{{$client->first_name}} {{$client->middle_name}} {{$client->last_name}}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{$client->address}}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{$client->phone_number}}</td>
        </tr>
    </table>

    <hr>

    <table style="width: 100%">
        <thead>
            <tr style="background-color: #efefef">
                <th>Date</th>
                <th>Deposit</th>
                <th>Withdrawal</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="3">Beginning Balance</td>
                <td style="text-align: right">{{number_format($client->initial_deposit,2)}}</td>
            </tr>
            <?php $bal = $client->initial_deposit; ?>
            @foreach($client->transactions as $txn)
            <tr>
                <td>{{$txn->date}}</td>
                <td style="text-align: right">{{$txn->deposit ? number_format($txn->amount, 2): ''}}</td>
                <td style="text-align: right">{{!$txn->deposit ? number_format($txn->amount, 2): ''}}</td>
                <td style="text-align: right">{{ number_format($bal += $txn->deposit ? $txn->amount : (0-$txn->amount), 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
