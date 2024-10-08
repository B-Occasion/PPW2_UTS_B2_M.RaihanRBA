<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <style>
            .button_container{
                display: flex;
                gap: 10px;
                width: 100%;
                justify-content: center;
                background-color: aquamarine;
            }
        </style>
    </head>

    <body>
        <table class="table table-stripped" style="border: 2pt solid">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama Pemain</th>
                    <th>No. Punggung</th>
                    <th>Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_pemain as $orang)
                <tr>
                    <td>{{ $orang ->id }}</td>
                    <td>{{ $orang ->nama_pemain }}</td>
                    <td>{{ $orang ->no_punggung }}</td>
                    <td>{{ $orang ->posisi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
