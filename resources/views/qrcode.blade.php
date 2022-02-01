<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
</head>

<body>

    <div class="container mt-4">

       

        <div class="card">
            <div class="card-header">
                <h2>QR Code</h2>
            </div>
            <div class="card-body text-center">
                {!! QrCode::size(350)->generate(Request::url()); !!}
            </div>
        </div>

    </div>
</body>
</html>