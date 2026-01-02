<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sales Receipt</title>

    <style>
        @page {
            margin: 20px;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            line-height: 1.35;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            vertical-align: top;
            padding: 4px 5px;
        }

        .border td {
            border: 1px solid #000;
        }

        .section {
            margin-bottom: 6px;
        }

        .title {
            font-size: 13.5px;
            font-weight: bold;
            margin-bottom: 4px;
        }

        .small {
            font-size: 10.5px;
        }

        .signature {
            font-size: 12.5px;
            font-weight: bold;
        }

        .footer {
            margin-top: 10px;
            text-align: center;
            font-size: 11.5px;
        }

        img {
            width: 170px;
        }

        /* Options table: add 4-sided border only to the header cells */
        .options-table thead th {
            border: 1px solid #000;
            padding: 6px 8px;
            text-align: left;
        }

        .options-table tbody td {
            border: 1px solid #000;
            padding: 6px 8px;
            text-align: left;
        }

        /* Declaration + signature: side-by-side layout */
        .declaration-row {
            font-size: 8px;
            height: 200px;
            width: 100%
        }

        .declaration-row .declaration {
            border: 1px solid #000;
            padding: 8px;
            font-size: 8px;
            display: inline-block;
        }

        .declaration-row .sig-box {
            border: 1px solid #000;
            padding: 8px;
            align-items: flex-start;
            min-height: 80px;
            font-size: 8px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container">

        <!--  HEADER  -->
        <table>
            <tr>
                <td width="33%">
                    <img src="{{ public_path('logo.jpg') }}">
                </td>

                <td width="33%" class="small" style="font-weight:bold;">
                    <strong>Blackstone Motors Ltd</strong><br>
                    Unit 9 Vector Park<br>
                    Forest Road<br>
                    Twickenham, London<br>
                    TW13 7EJ
                </td>

                <td width="34%" class="small" style="font-weight:bold;">
                    Email: sales@blackstonemotors.co.uk<br>
                    Web: www.blackstonemotors.co.uk<br>
                    Phone: +44 (0) 203 857 9870<br>
                    Mobile: +44 (0) 795 768 7436<br>
                    Company No: 10947735<br>
                    VAT No: 307 5312 29
                </td>
            </tr>
        </table>

        <br>

        <!--  RECEIPT INFO  -->
        <div class="section" style="">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <!-- First Column: Receipt To -->
                    <td width="33%" style="border: 1px solid black;">
                        <strong>Receipt To:</strong><br><br>
                    </td>

                    <!-- Second Column: Deliver To -->
                    <td width="33%" style="border: 1px solid black;">
                        <strong>Deliver To:</strong><br><br>
                    </td>

                    <!-- Third Column: Receipt Details -->
                    <td width="34%" style="border: 1px solid black;">
                        Receipt:<br>
                        Receipt Date:<br>
                        Salesperson:<br>
                        Payment Status:<br>
                        Payment Method:
                    </td>
                </tr>
            </table>
        </div>

        <!--  VEHICLE & WARRANTY  -->
   


        <div class="section">
            <table class="border" style="width: 100%; border-collapse: collapse;">
                <tr>
                    <!-- Vehicle Details Column with wider width -->
                    <td width="60%" style="border: 1px solid black; padding:0;m:0;">
                        <!-- Title with border directly attached to the table cell -->
                        <div class="title" style="border-bottom: 1px solid black; padding: 5px; margin: 0; ">
                            Vehicle Details
                        </div>
                        <table style="width: 100%; border-collapse: collapse; margin: 0; padding: 0;">
                            <tr>
                                <!-- Left Column for Vehicle Details -->
                                <td style="border: none; padding: 5px; margin: 0;">
                                    <strong>Reg Number:</strong><br>
                                    <strong>Make:</strong><br>
                                    <strong>Model:</strong><br>
                                </td>

                                <!-- Right Column for Vehicle Details -->
                                <td style="border: none; padding: 5px; margin: 0;">
                                    <strong>VIN:</strong><br>
                                    <strong>Mileage:</strong><br>
                                    <strong>Colour:</strong><br>
                                </td>
                            </tr>
                        </table>
                    </td>

                    <!-- Warranty Details Column with smaller width -->
                    <td width="40%" style="border: 1px solid black; padding:0;m:0;">
                        <!-- Title with border directly attached to the table cell -->
                        <div class="title" style="border-bottom: 1px solid black; padding: 5px; margin: 0; ">
                            Warranty Details
                        </div>
                        <strong style="padding-left: 5px">Warranty Type:</strong><br>
                        <strong style="padding-left: 5px">Warranty Expires:</strong><br>
                        <strong style="padding-left: 5px">Pay out limit (per claim):</strong>
                    </td>
                </tr>
            </table>
        </div>




        <!--  OPTIONS  -->
        <div class="section" style="">
            <table class="options-table">
                <thead>
                    <tr>
                        <th width="25%">
                            <div class="title">Trade-In Details</div>
                        </th>
                        <th width="25%">
                            <div class="title">Options</div>
                        </th>
                        <th width="25%">
                            <div class="title">QTY</div>
                        </th>
                        <th width="25%">
                            <div class="title">Price</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="25%">
                            Make:<br>
                            Model:<br>
                            Reg Number:<br>
                            VIN:<br>
                            Mileage:
                        </td>
                        <td width="25%"></td>
                        <td width="25%"></td>
                        <td width="25%"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--  SALES NOTES  -->
      

        <table style="width: 100%; font-size: 8px; border: 1px solid black; border-collapse: collapse; height: 100px;">
            <tr>
                <!-- First Column: Sales Notes -->
                <td style="width: 40%; border: 1px solid black; padding: 8px; height: 100px;">
                    <div class="title">Sales Notes</div>
                </td>

                <!-- Second Column: Sales Data with Specific Borders Above Key Fields -->
                <td style="width: 33%; border: vertical-align: top; height: 250px; padding: 0;">
                    <div style="font-size:10px; font-weight:bold; padding-left:5px;">Vehicle:</div>
                    <div style="font-size:10px; font-weight:bold; padding-left:5px;">Warranty Price:</div>
                    <div style="font-size:10px; font-weight:bold; padding-left:5px;">Delivery Charge:</div>
                    <div style="font-size:10px; font-weight:bold; padding-left:5px;">Options:</div>
                    <div style="font-size:10px; font-weight:bold; padding-left:5px;">Part Exchange Settlement:</div>

                    <!-- Deposit, Part Exchange, and Balance rows with borders on top, ensuring connection -->
                    <table style="width: 100%; margin-top: 10px; padding: 0;">
                        <tr>
                            <td style="border-top: 1px solid black; font-size:10px; font-weight:bold;">Deposit Received:
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:10px; font-weight:bold;">Part Exchange Allowance:</td>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                        </tr>
                        <tr>
                            <td style="border-top: 1px solid black; padding: 5px; font-size:10px; font-weight:bold;">
                                Balance Received:</td>
                        </tr>
                    </table>
                </td>

                <!-- Third Column: Empty with the Same Structure -->
                <td style="width: 34%; border: 1px solid black; vertical-align: top; height: 250px; padding: 0;">
                    <div style="border-bottom: 1px solid black; padding: 5px;">&nbsp;
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <div style="width: 100%; height:3px;"></div>
                    </div>
                    <div style="">&nbsp;</div>
                    <div style="">&nbsp;</div>
                    <div style="">&nbsp;</div>
                    <div style="">&nbsp;</div>


                    <!-- Empty Deposit, Part Exchange, and Balance rows with borders on top -->
                    <table style="width: 100%; margin-top: 10px; padding: 0;">
                        <tr>
                            <td style=""></td>
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <div style="width: 100%; height:1px;"></div>
                        </tr>
                        <tr>

                        </tr>
                        <tr>
                            <td style="border-top: 1px solid black;">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>



        <!--  PAYMENT  -->


        <!--  DECLARATION + SIGNATURE  -->
       


        <table style="width: 100%; font-size: 8px; border-collapse: collapse; margin-top:10px;">
            <tr>
                <td style="width: 80%; border: 1px solid #000; padding: 8px;">
                    <div class="title">Sale Declaration</div>
                    I confirm that I have test driven the above car and have not noticed any apparent faults. I
                    understand that
                    I have had the opportunity to examine the vehicle before signing, in particular, tyres, bodywork,
                    paintwork,
                    glass and accessories, interior trim and upholstery. I confirm that before signing this declaration,
                    my
                    attention has been drawn to the age of the vehicle and the fact that defects may be present,
                    consistent
                    with age and condition.
                </td>
                <td style="width: 20%; border: 1px solid #000; padding: 8px; vertical-align: top;">
                    <div class="signature">
                        Signed:
                    </div>
                </td>
            </tr>
        </table>
        <div class="footer">
            For payment details, please contact us.<br>
            <strong>Thank you for your business!</strong>
        </div>

    </div>
</body>

</html>
