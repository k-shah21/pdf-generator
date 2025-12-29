<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <title>Title </title>


    <!-- red  #FF1919 -->
    <!-- gray #9CA3AF -->
    <!-- white #FFFFFF -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 40px 20px;
            box-sizing: border-box;
            font-size: 10px;
            color: #000;

        }

        .header {
            display: flex;
            justify-content: space-between;
        }

        .logo-img {
            width: 100%;
            max-width: 300px;

        }

        .title {
            text-align: center;
            font-weight: normal;
            font-size: 28px;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 4px;
            vertical-align: top;
        }

        .no-border td {
            border: none;
            padding: 3px 5px;

            font-size: 18px;
        }

        .no-border td {
            font-weight: 500;
        }

        .section {
            font-weight: bold;
            background: #f2f2f2;
        }

        .center {
            text-align: center;
        }

        .right {
            text-align: right;
        }

        .checkbox {
            width: 14px;
            height: 14px;
            border: 1px solid #000;
            display: inline-block;
        }

        .small {
            font-size: 9px;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="title">Appraisal Checklist</div>
        <div class="logo-img">
            <img src="{{ asset('logo.jpg') }}" alt="" width="300">
        </div>
    </div>

    <table class="no-border">
        <tr>
            <td>Name:</td>
        </tr>
        <tr>
            <td>Date:</td>
        </tr>
    </table>
    <br>

    <table style="
    width: 100%;
    table-layout: fixed;
    text-align: left;
    font-size: 18px;
    font-weight: 400;
    margin: 10px 0;">
        <colgroup>
            <col style="width:50%">
            <col style="width:50%">
        </colgroup>

        <tr>
            <th style="font-weight:400;">Model:</th>
            <th style="font-weight:400;">Year:</th>
        </tr>
        <tr>
            <td>VIN:</td>
            <td style="font-weight:bold;">REG:</td>
        </tr>
        <tr>
            <td>Mileage:</td>
            <td style="font-weight:bold;">MOT expiry:</td>
        </tr>
        <tr>
            <td>Service History:</td>
            <td style="font-weight:bold;">Engine modification code clear:</td>
        </tr>
    </table>
</body>

</html>