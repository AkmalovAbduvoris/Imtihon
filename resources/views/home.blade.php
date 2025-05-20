<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center; margin-top: 20%;">
        {{ $balance->amount }}
    </h1>
    <div style="text-align: center;">
        <a href="/transactions/create">
            <button style="cursor: pointer; font-size: 24px; padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 8px;">
                +
            </button>
        </a>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <a href="/transactions">
            <button style="cursor: pointer; font-size: 24px; padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 8px;">
                Transactions
            </button>
        </a>
    </div>
    </body>
</html>

