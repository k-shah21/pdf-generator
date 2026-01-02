<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?
    family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900
    &family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900
    &display=swap" rel="stylesheet">
    <title>Title </title>


    <!-- red  #FF0000 -->
    <!-- gray #9CA3AF -->
    <!-- white #FFFFFF -->
    <style>
        @page {
            margin: 20px 20px;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            box-sizing: border-box;
            font-size: 13px;
            line-height: 1.1;
        }

        .header {
            margin-bottom: 5px;
        }

        .title {
            display: inline-block;
            vertical-align: middle;
            font-size: 24px;
            font-weight: normal;
        }

        .logo-img {
            display: inline-block;
            vertical-align: middle;
            float: right;
            margin-right: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: .5px solid #9CA3AF;
            vertical-align: top;
        }

        .no-border td {
            border: none;
            padding: 2px 5px;
            font-size: 16px;
        }

        .legend-item {
            display: inline-block;
            vertical-align: middle;
            margin-right: 12px;
            font-size: 12px;
            text-align: center;
            line-height: 1;
        }

        .legend-item span {
            display: inline-block;
            vertical-align: middle;
        }

        .legend-box {
            display: inline-block;
            font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif;
            width: 14px;
            height: 14px;
            border: 1px solid #9CA3AF;
            text-align: center;
            vertical-align: middle;
            line-height: 14px;
            padding: 1px;
            margin-left: 5px;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="title">Appraisal Checklist</div>
        <div class="logo-img">
            <img src="{{ public_path('logo.jpg') }}" width="180">
        </div>
    </div>

    <div style="margin-top: 5px;">
        <p style="margin: 0; line-height: 1.1;">Name: <span style="border-bottom: 1px solid #9CA3AF; display: inline-block; width: 250px;">&nbsp;</span></p>
        <p style="margin: 2px 0; line-height: 1.1;">Date: <span style="border-bottom: 1px solid #9CA3AF; display: inline-block; width: 150px;">&nbsp;</span></p>
    </div>

    <!-- TOP TABLE -->
    <table style="width: 100%; table-layout: fixed; text-align: left; font-weight: 400; border-collapse: collapse; border: 1px solid #9CA3AF; line-height: 1.1; margin-top: 5px;">
        <tr>
            <th style="width: 50%; font-weight: 400; padding: 1px 5px;">Model:</th>
            <th style="width: 50%; font-weight: 400; padding: 1px 5px;">Year:</th>
        </tr>
        <tr>
            <td style="padding: 1px 5px;">VIN:</td>
            <td style="font-weight: bold; padding: 1px 5px;">Reg:</td>
        </tr>
        <tr>
            <td style="padding: 1px 5px;">Mileage:</td>
            <td style="font-weight: bold; padding: 1px 5px;">MOT expiry:</td>
        </tr>
        <tr>
            <td style="padding: 1px 5px;">Service History:</td>
            <td style="font-weight: bold; padding: 1px 5px;">Engine modification code clear:</td>
        </tr>
    </table>

    <!-- Legend -->
    <div style="margin: 15px 0; padding-left: 5px;">
        <div class="legend-item">
            <span>Legend:</span>
        </div>

        <div class="legend-item">
            <span style="text-decoration: underline;">Checked and OK:</span>
            <span class="legend-box" style="color: #FF0000;">&#x2714;</span>
        </div>

        <div class="legend-item">
            <span style="text-decoration: underline;">Requires Attention:</span>
            <span class="legend-box" style="color: #FF0000;">&#10008;</span>
        </div>

        <div class="legend-item">
            <span style="text-decoration: underline;">Not applicable:</span>
            <span class="legend-box" style="padding: 1px 3px; font-size: 10px;">N/A</span>
        </div>
    </div>

    <!-- List of Table -->
    <table style="width: 100%; border-collapse: collapse; border: none;">
        <tr>
            <!-- Left Column -->
            <td style="width: 50%; vertical-align: top; padding-right: 25px; border: none;">

                <table style="border-collapse: collapse; width: 100%; font-size: 11px;">
                    <tr style="background-color: #9CA3AF; color: #FF0000; line-height: 1;">
                        <th style="width: 7%; border: 1px solid white; padding: 1px 5px;">&nbsp;</th>
                        <th
                            style="width: 78%; border: 1px solid white; padding: 1px 5px; text-align: left; font-weight: normal;">
                            Pre-Work check</th>
                        <th
                            style="width: 15%; border: 1px solid white; padding: 1px 5px; background-color: white;">
                            &nbsp;</th>
                    </tr>

                    @php
                                                $preWorkItems = [
                            "Check side lights/parking lights",
                            "Check dipped lights",
                            "Check daytime/LED running lights",
                            "Check main beam",
                            "Check headlight adjuster",
                            "Check headlight flashers",
                            "Check fog lights front/rear",
                            "Check indicators front/rear/side",
                            "Check hazard warning lights",
                            "Check headlight alignment",
                            "Check number plate lights",
                            "Check brake lights",
                            "Check reversing lights",
                            "Check wing mirror reflector"
                        ];
                    @endphp

                    @foreach($preWorkItems as $index => $item)
                        <tr>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: #9CA3AF; color: white;">{{ $index + 1 }}</td>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: {{ $index % 2 == 0 ? '#f9f9f9' : '#f0f0f0' }};">{{ $item }}</td>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: {{ $index % 2 == 0 ? '#f9f9f9' : '#f0f0f0' }};">&nbsp;</td>
                        </tr>
                    @endforeach
                </table>

                <table style="border-collapse: collapse; width: 100%; font-size: 11px; margin-top: 5px;">
                    <tr style="background-color: #9CA3AF; color: #FF0000; line-height: 1;">
                        <th style="width: 7%; border: 1px solid white; padding: 1px 5px;">&nbsp;</th>
                        <th
                            style="width: 78%; border: 1px solid white; padding: 1px 5px; text-align: left; font-weight: normal;">
                            Interior</th>
                        <th style="width: 15%; border: 1px solid white; padding: 1px 5px; background-color: white;">
                            &nbsp;</th>
                    </tr>

                    @php
                        $interiorItemsLeft = [
                            "Check horn operation",
                            "Check warning lights",
                            "Check air conditioning operation/AC cold/hot",
                            "Check front seat control electric/manual/memory adjustment",
                            "Check seat belt operation/height adjustment",
                            "Check electric door mirrors",
                            "Check operation of all windows/window child lock",
                            "Check dash light/dimmer",
                            "Check speedometer, odometer, and trip function",
                            "Check multi-function steering wheel",
                            "Check park assist operation/camera",
                            "Check heads-up display",
                            "Check WIFI connectivity/tablet connected",
                            "Check boot release",
                            "Check fuel flap release",
                            "Check handbrake/electronic brake operation",
                            "Convertible top operation",
                            "Check interior bonnet release mechanism",
                            "Check steering wheel tilt/lock/adjustment",
                            "Check door lights/reflector",
                            "Check windscreen wiper operation",
                            "Check and align windscreen washer jets",
                            "Check front visor/vanity mirrors and lights",
                            "Check courtesy lights/floor lighting",
                            "Check operation of sunroof",
                            "Check rear view mirror"
                        ];
                    @endphp

                    @foreach($interiorItemsLeft as $index => $item)
                        <tr>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: #9CA3AF; color: white;">{{ $index + 15 }}</td>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: {{ $index % 2 == 0 ? '#f9f9f9' : '#f0f0f0' }};">{{ $item }}</td>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: {{ $index % 2 == 0 ? '#f9f9f9' : '#f0f0f0' }};">&nbsp;</td>
                        </tr>
                    @endforeach
                </table>

            </td>

            <!-- Right Column -->
            <td style="width: 50%; vertical-align: top; padding-left: 25px; border: none;">

                <table style="border-collapse: collapse; width: 100%; font-size: 11px;">
                    <tr style="background-color: #9CA3AF; color: #FF0000; line-height: 1;">
                        <th style="width: 7%; border: 1px solid white; padding: 1px 5px;">&nbsp;</th>
                        <th style="width: 78%; border: 1px solid white; padding: 1px 5px; text-align: left; font-weight: normal;">Interior (cont.)</th>
                        <th style="width: 15%; border: 1px solid white; padding: 1px 5px; background-color: white;">&nbsp;</th>
                    </tr>

                    @php
                        $interiorItemsRight = [
                            "Check centre armrest adjustment",
                            "Check ashtray/power outlet/12v plugs/USB",
                            "Check media function/iDrive/MMI",
                            "Reset infotainment Nav/Bluetooth/Phone",
                            "Check climate/AC controls",
                            "Check heated/ventilated seats function",
                            "Check heated steering wheel",
                            "Check rear seats operation/adjustment",
                            "Check rear seatbelt operation",
                            "Check rear controls/vents/power socket",
                            "Check rear armrest/ski hatch",
                            "Check tailgate/boot operation",
                            "Check boot compartment lights",
                            "Check side/rear blinds operational",
                            "Check toolkit/emergency tyre kit/foam kit",
                            "Locking wheel nut present?",
                            "Check parcel shelf/removable luggage cover",
                            "Check glovebox lock and light operation",
                            "Check all floor mats are present",
                            "Check door hinges (all doors & boot)",
                            "Check rear pop-up spoiler"
                        ];
                    @endphp

                    @foreach($interiorItemsRight as $index => $item)
                        <tr>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: #9CA3AF; color: white;">{{ $index + 41 }}</td>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: {{ $index % 2 == 0 ? '#f9f9f9' : '#f0f0f0' }};">{{ $item }}</td>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: {{ $index % 2 == 0 ? '#f9f9f9' : '#f0f0f0' }};">&nbsp;</td>
                        </tr>
                    @endforeach
                </table>

                <table style="border-collapse: collapse; width: 100%; font-size: 11px; margin-top: 5px;">
                    <tr style="background-color: #9CA3AF; color: #FF0000; line-height: 1;">
                        <th style="width: 7%; border: 1px solid white; padding: 1px 5px;">&nbsp;</th>
                        <th style="width: 78%; border: 1px solid white; padding: 1px 5px; text-align: left; font-weight: normal;">Exterior</th>
                        <th style="width: 15%; border: 1px solid white; padding: 1px 5px; background-color: white;">&nbsp;</th>
                    </tr>

                    @php
                        $exteriorItems = [
                            "Check central locking/keyless entry",
                            "Check window convenience open/closure",
                            "Check bonnet alignment",
                            "Front tow eye cover present?",
                            "Check fuel cap/rubber stops and fuel flap",
                            "Check rear screen glass for cracks",
                            "Check boot/tailgate",
                            "Check security of bumpers/lower skirts",
                            "Check roof/aerial attachment"
                        ];
                    @endphp

                    @foreach($exteriorItems as $index => $item)
                        <tr>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: #9CA3AF; color: white;">{{ $index + 62 }}</td>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: {{ $index % 2 == 0 ? '#f9f9f9' : '#f0f0f0' }};">{{ $item }}</td>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: {{ $index % 2 == 0 ? '#f9f9f9' : '#f0f0f0' }};">&nbsp;</td>
                        </tr>
                    @endforeach
                </table>

                <table style="border-collapse: collapse; width: 100%; font-size: 11px; margin-top: 5px;">
                    <tr style="background-color: #9CA3AF; color: #FF0000; line-height: 1;">
                        <th style="width: 7%; border: 1px solid white; padding: 1px 5px;">&nbsp;</th>
                        <th style="width: 78%; border: 1px solid white; padding: 1px 5px; text-align: left; font-weight: normal;">Under the Bonnet</th>
                        <th style="width: 15%; border: 1px solid white; padding: 1px 5px; background-color: white;">&nbsp;</th>
                    </tr>

                    @php
                        $bonnetItems = [
                            "Check battery condition",
                            "Remove engine cover: check for leaks",
                            "Top up AdBlue if needed",
                            "Check screen washer level",
                            "Check engine oil level",
                            "Check brake fluid level",
                            "Check coolant level, strength & condition"
                        ];
                    @endphp

                    @foreach($bonnetItems as $index => $item)
                        <tr>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: #9CA3AF; color: white;">{{ $index + 71 }}</td>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: {{ $index % 2 == 0 ? '#f9f9f9' : '#f0f0f0' }};">{{ $item }}</td>
                            <td style="border: 1px solid white; padding: 1px 5px; background-color: {{ $index % 2 == 0 ? '#f9f9f9' : '#f0f0f0' }};">&nbsp;</td>
                        </tr>
                    @endforeach
                </table>

                <table style="border-collapse: collapse; width: 100%; font-size: 11px; margin-top: 5px;">
                    <tr style="background-color: #9CA3AF; color: #FF0000; line-height: 1;">
                        <th style="width: 7%; border: 1px solid white; padding: 1px 5px;">&nbsp;</th>
                        <th style="width: 78%; border: 1px solid white; padding: 1px 5px; text-align: left; font-weight: normal;">Electric/Hybrid</th>
                        <th style="width: 15%; border: 1px solid white; padding: 1px 5px; background-color: white;">&nbsp;</th>
                    </tr>
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #9CA3AF; color: white;">78</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #f9f9f9;">Check vehicle charges</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #f9f9f9;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #9CA3AF; color: white;">79</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #f0f0f0;">Check charging cable present</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #f0f0f0;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- Note -->
    <div style="width: 50%; font-size: 14px;">

        <p style="font-size: 12px;">Note: If tyre is less than 3mm then should be changed. Check for
            any cracks in the tyres, and if any shoulder wear, slits, cuts.</p>

        <table style="width: 100%;">
            <tr>
                <th style="width: 10%;"></th>
                <th style="font-weight: normal; font-size: 12px; width: 40%; text-align: left; padding-left: 10px;">Brand</th>
                <th style="font-weight: normal; font-size: 12px;">Run flat</th>
                <th style="font-weight: normal; font-size: 12px;">Craks</th>
                <th style="font-weight: normal; font-size: 12px;">Shoulder Wear</th>
            </tr>
            <tr>
                <td style="padding: 2px 4px; font-size: 12px;">N/S/F</td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
            </tr>
            <tr>

                <td style="padding: 2px 4px; font-size: 12px;">O/S/F</td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
            </tr>
            <tr>

                <td style="padding: 2px 4px; font-size: 12px;">N/S/R</td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
            </tr>

            <tr>
                <td style="padding: 2px 4px; font-size: 12px;">O/S/R</td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
            </tr>
            <tr>
                <td style="padding: 2px 4px; font-size: 12px;">Spare</td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
            </tr>
        </table>

        <!-- Miscellaneous -->
        <p style="font-size: 14px; margin-top: 30px;">Miscellaneous notes:</p>

        <hr style="margin: 30px 0 20px; color: #999;">
        <hr style="color: #999;">
        <hr style="margin: 20px 0; color: #999;">
        <hr style="margin-top: 20px; color: #999;">
    </div>

    <!-- Condition -->
    <div style="width: 100%; text-align: center; margin-top:35px">

        <h2 style="font-size: 14px; line-height: 10px;">CONDITION OF VEHICLE</h2>
        <P style="line-height: 5px; font-size: 12px; font-weight: bold;">Indicate any damage to the vehicle in the space provided using your own words or the following legend. <span style="text-decoration: underline;">if None write None</span></P>

    </div>

    <!-- Condition Table -->
    <table style="width: 100%; padding: 0 25px; border-collapse: collapse; font-size: 12px; color: black;">
        <tr>
            <td style="border: none;">Bent - B</td>
            <td style="border: none;">Broken - BR</td>
            <td style="border: none;">Chip - CH</td>
            <td style="border: none;">Cracked - CR</td>
            <td style="border: none;">Dented - D</td>
            <td style="border: none;">Missing - M</td>
            <td style="border: none;"></td>
        </tr>
        <tr>
            <td style="border: none;">Pitted - PT</td>
            <td style="border: none;">Rusty - R</td>
            <td style="border: none;">Rubbed - RU</td>
            <td style="border: none;">Scratch - S</td>
            <td style="border: none;">Heirline Scratch - HS</td>
            <td style="border: none;">Stained - ST</td>
            <td style="border: none;">Torn - T</td>
        </tr>
    </table>

    <!-- Car Table -->
    <table style="width: 100%; border-collapse: collapse; font-size: 12px;  margin-top: 10px;">
        <tr>
            <td style="width: 50%; padding: 0;">
                <table style="width: 100%; border-collapse: collapse; border: none;">
                    <tr>
                        <!-- IMAGE -->
                        <td style="width: 60%; vertical-align: middle; text-align: center; border: none;">
                            <img src="{{ public_path('logo.jpg') }}" width="250">
                        </td>

                        <!-- INNER TABLE -->
                        <td style="width: 40%; vertical-align: top; border: none;">
                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                <tr>
                                    <td style="padding: 0 0 10px 10px; border-top: none; border-right: none;">1.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">2.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">3.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">4.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">5.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 30px 10px; border: none;"></td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                </table>
            </td>

            <td style="width: 50%; padding: 0;">
                <table style="width: 100%; border-collapse: collapse; border: none;">
                    <tr>
                        <!-- IMAGE -->
                        <td style="width: 60%; vertical-align: middle; text-align: center; border: none;">
                            <img src="{{ public_path('logo.jpg') }}" width="250">
                        </td>

                        <!-- INNER TABLE -->
                        <td style="width: 40%; vertical-align: top; border: none;">
                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                <tr>
                                    <td style="padding: 0 0 10px 10px; border-top: none; border-right: none;">6.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">7.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">8.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">9.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">10.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 30px 10px; border: none;"></td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; height: 150px;">
                <img src="{{ public_path('logo.jpg') }}" width="370" style="transform: scaleX(-1); display: block; margin-bottom: 10px;">
                <table style="border-collapse: collapse; width: 100%;">
                    <tr>
                        <td style="padding: 0 0 15px 15px; border-left: none;">11.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none;">12.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-right: none;">13.</td>
                    </tr>
                    <tr>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none;">14.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none;">15.</td>
                        <td style="padding: 0 0 15px 15px; border-bottom: none; border-right: none;">16.</td>
                    </tr>
                </table>
            </td>

            <td style="width: 50%; height: 150px;">
                <img src="{{ public_path('logo.jpg') }}" width="370" style="display: block; margin-bottom: 10px;">
                <table style="border-collapse: collapse; width: 100%;">
                    <tr>
                        <td style="padding: 0 0 15px 15px; border-left: none;">17.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none;">18.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none; border-right: none;">19.</td>
                    </tr>
                    <tr>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none;">20.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none;">21.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none; border-right: none;">22.</td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>

    <div style="width: 100%; display: table; border-collapse: collapse; border: none; padding: 0 20px; margin-top: 20px;">

        <div style="display: table-cell; width: 40%; padding-right: 10px;">
            <h3 style="font-size: 12px; text-align: center; line-height: 5px;">Interior</h3>

            <p style="text-decoration: underline; font-size: 12px;">Worn - W Born - B Ripped - R Stain - S Cracked - C</p>

            <div style="width: 100%; display: flex; align-items: center;">
                <p style="margin: 0; font-size: 12px;">Front Carpet</p>
                <hr style="flex: 1; margin: 0 0 0 70px; border: 0; border-top: 1px solid black;">
            </div>
            <div style="width: 100%; display: flex; align-items: center;">
                <p style="margin: 0; font-size: 12px;">Rear Carpet</p>
                <hr style="flex: 1; margin: 0 0 0 70px; border: 0; border-top: 1px solid black;">
            </div>
            <div style="width: 100%; display: flex; align-items: center;">
                <p style="margin: 0; font-size: 12px;">Front Seat</p>
                <hr style="flex: 1; margin: 0 0 0 60px; border: 0; border-top: 1px solid black;">
            </div>
            <div style="width: 100%; display: flex; align-items: center;">
                <p style="margin: 0; font-size: 12px;">Rear Seat</p>
                <hr style="flex: 1; margin: 0 0 0 58px; border: 0; border-top: 1px solid black;">
            </div>
            <div style="width: 100%; display: flex; align-items: center;">
                <p style="margin: 0; font-size: 12px;">Headliner</p>
                <hr style="flex: 1; margin: 0 0 0 53px; border: 0; border-top: 1px solid black;">
            </div>
            <div style="width: 100%; display: flex; align-items: center;">
                <p style="margin: 0; font-size: 12px;">Door Panels</p>
                <hr style="flex: 1; margin: 0 0 0 70px; border: 0; border-top: 1px solid black;">
            </div>

        </div>

        <!-- Function & Tires -->
        <div style="display: table-cell; width: 60%; padding-left: 40px;">
            <h3 style="font-size: 12px; text-align: center; line-height: 5px;">Function & Tires</h3>
            <p style="font-size: 12px; width: 100%; color: gray; margin: 0; padding: 0; margin-left: 20px;">
                <span style="display: inline-block; width: 48%;">
                    Operational: <span style="margin-left: 10px;">Yes</span> <span style="margin-left: 10px;">No</span>
                </span>
                <span style="display: inline-block; width: 48%; text-align: end;">
                    Difficulty starting: <span style="margin-left: 10px;">Yes</span> <span style="margin-left: 10px;">No</span>
                </span>
            </p>
            <table style="width: 100%; border-collapse: collapse; margin: 0; padding: 0;">
                <tr>
                    <th style="padding: 0 10px 20px 10px; font-size: 12px; font-weight: normal; background-color: #e0e0e0;">Tires & Rims.</th>
                    <th style="padding: 0 10px 20px 10px; font-size: 12px; font-weight: normal; background-color: #e0e0e0;">Front R</th>
                    <th style="padding: 0 10px 20px 10px; font-size: 12px; font-weight: normal; background-color: #e0e0e0;">Front L</th>
                    <th style="padding: 0 10px 20px 10px; font-size: 12px; font-weight: normal; background-color: #e0e0e0;">Rear R</th>
                    <th style="padding: 0 10px 20px 10px; font-size: 12px; font-weight: normal; background-color: #e0e0e0;">Rear L</th>
                    <th style="padding: 0 10px 20px 10px; font-size: 12px; font-weight: normal; background-color: #e0e0e0;">Spare</th>
                </tr>
                <tr>
                    <td style="font-size: 12px;">
                        S - scratched <br />
                        D - dented <br />
                        W - worn C - cut<br />
                        R - rubbed
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
            </table>

        </div>

    </div>


</body>

</html>