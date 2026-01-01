<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?
    family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900
    &family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900
    &display=swap" rel="stylesheet">
    <title>Black Stone</title>
</head>
<style>
    @page {
        margin: 0;
        padding: 0;
    }

    html,
    body {
        font-family: 'Inter', 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        color: black;
        height: 100%;
        width: 100%;
        position: relative;
    }

    .next-page {
        page-break-before: always;
        padding: 0;
    }

    .wrapper {
        position: relative;
        
    }

    .cover-container {
        width: 100%;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .cover-bg-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .cover-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding-top: 150px;
        z-index: 2;
    }

    .brand-primary {
        font-size: 52px;
        font-weight: 900;
        margin: 0;
        letter-spacing: 5px;
        text-transform: uppercase;
        color: #FFFFFF;
    }

    .report-subtitle {
        width: 70%;
        border-radius: 50px;
        font-size: 30px;
        color: #FF0000;
        background-color: rgba(0, 0, 0, 1);
        padding: 20px;
        margin: 20px auto 40px auto;
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    .investor-block {

        text-align: left;
        padding-top: 40px;
        max-width: 380px;
        margin: 0 auto;
        border-top: 2px solid rgba(255, 255, 255, 0.8);
        color: #FFFFFF;
    }

    .info-line {
        margin-bottom: 12px;
        font-size: 24px;
    }

    .label-gray {
        color: #9CA3AF;
        font-weight: 300;
    }

    .value-white {
        font-weight: 600;
        color: #FFFFFF;
    }

    .text-top {
        font-size: 24px;
        font-weight: bold;
        color: black;
        text-align: center;
    }

    .report-block {
        margin-top: 40px;

    }

    .report-block h2,
    .report-block h3,
    .report-block h4 {
        margin: 0;
        padding: 0;
        line-height: 1.2;
    }

    .report-block h2 {
        font-size: 15px;
        color: black;
    }

    .report-block h3 {
        font-size: 13px;
    }

    .report-block h4 {
        font-size: 10px;

    }

    .report-block span {
        font-weight: normal;
    }
</style>

<body>
    <div class="wrapper">
        <div class="cover-container" style="height: 100%">
            <img class="cover-bg-image" src="{{ public_path('assets/pdf-bg.jpg') }}">
            <div class="cover-overlay">
                <img src="{{ public_path('logo.jpg') }}" width="350" style="margin-bottom: 40px;">
                <h1 class="brand-primary">BLACKSTONE MOTORS LIMITED</h1>
                <h2 class="report-subtitle">Investment Performance Report</h2>
                
                <div class="investor-block">
                    <div class="info-line">
                        <span class="label-gray">Investor: </span>
                        <span class="value-white">Neil Partridge</span>
                    </div>
                    <div class="info-line">
                        <span class="label-gray">Period: </span>
                        <span class="value-white">14 Feb 2024 to 12 Dec 2025</span>
                    </div>
                    <div class="info-line">
                        <span class="label-gray">Investment Balance: </span>
                        <span class="value-white">20,2777</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Page 2 -->
    <div class="next-page" style="padding:0 50px;">
        <!-- TOP -->
        <table style="width: 100%; border-collapse: collapse; font-size: 10px;">
            <tr>
                <td style="width: 33.33%; text-align: left;">
                    BLACKSTONE MOTORS LIMITED
                </td>

                <td style="width: 33.33%; text-align: center;">
                    INVESTOR'S REPORT
                </td>

                <td style="width: 33.33%; text-align: right;">
                    DEC25
                </td>
            </tr>
        </table>

        <div class="report-block" style="margin-top: 100px;">
            <h2>BLACKSTONE MOTORS LIMITED</h2>
            <h3>Investment Performance Report</h3>
            <h4>Investor: <span>Neil Partridge</span></h4>
            <h4>Period of this report:
                <span>from 14 Feb 2024 to 12 Dec 2025</span>
            </h4>
        </div>

        <h2 style="background-color: lightblue; text-align: center; font-size: 14px;">TABLE OF CONTENT</h2>

        <div style="max-width: 80%; margin: 0 auto;">

            <h3 style="font-size: 14px; text-align: right; margin:0; color: #9CA3AF;">Page Number</h3>

            <table style="width: 100%; border-collapse: separate; border-spacing: 0 20px; font-size: 12px;">
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>EXECUTIVE SUMMARY - INVESTMENT SNAPSHOT</td>
                    <td style="text-align: right; padding-right:30px;">3</td>
                </tr>
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>SEMI-ANNUAL INVESTMENT PERFORMANCE TABLE (NP)</td>
                    <td style="text-align: right; padding-right:30px;">4</td>
                </tr>
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>RELATIVE PERFORMANCE CONTEXT</td>
                    <td style="text-align: right; padding-right:30px;">4</td>
                </tr>
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>APPENDIX A LIST OF VEHICLES SOLD - VEHICLE TRANSACTIONS - (FROM 14 Feb 2024 TO 12 Dec 2025)</td>
                    <td style="text-align: right; padding-right:30px;">5</td>
                </tr>
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>APPENDIX B LIST OF VEHICLES 'IN STOCK' AS OF 12th DECEMBER 2025</td>
                    <td style="text-align: right; padding-right:30px;">6</td>
                </tr>
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>APPENDIX C INVESTMENT BREAK-UP OF AMOUNTS - FROM 14 Feb 2024 TO 12 Dec 2025</td>
                    <td style="text-align: right; padding-right:30px;">6</td>
                </tr>
            </table>

        </div>

    </div>


    <!-- Page 3 -->
    <div class="next-page" style="padding:0 50px;">
        <!-- TOP -->
        <table style="width: 100%; border-collapse: collapse; font-size: 10px;">
            <tr>
                <td style="width: 33.33%; text-align: left;">
                    BLACKSTONE MOTORS LIMITED
                </td>

                <td style="width: 33.33%; text-align: center;">
                    INVESTOR'S REPORT
                </td>

                <td style="width: 33.33%; text-align: right;">
                    DEC25
                </td>
            </tr>
        </table>

        <div class="report-block">
            <h2>BLACKSTONE MOTORS LIMITED</h2>
            <h3>Investment Performance Report</h3>
            <h4>Investor: <span>Neil Partridge</span></h4>
            <h4>Period of this report:
                <span>from 14 Feb 2024 to 12 Dec 2025</span>
            </h4>
        </div>

        <h2 style="background-color: lightgray; text-align: center; font-size: 14px;">EXECUTIVE SUMMARY - INVESTMENT
            SNAPSHOT</h2>


        <div style="margin-top: 20px;">
            <table style="width: 100%; table-layout: fixed; border-collapse: collapse;">
                <tr>
                    <td style="width: 56%; vertical-align: top; padding-right: 10px;">
                        <div style="text-align: center;">
                            <img src="data:image/png;base64,{{ base64_encode(file_get_contents($chart1)) }}"
                                style="width: 100%; max-width: 600px; height: auto;" alt="Portfolio Performance">
                        </div>
                    </td>
                    <td style="width: 21%; vertical-align: top; text-align: center; padding: 0 5px;">
                        <h4 style="margin: 0 0 10px 0; font-size: 12px;">Total Investment vs Profit</h4>
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents($chart2)) }}"
                            style="width: 100%; height: auto;" alt="Investment vs Profit">
                    </td>
                    <td style="width: 21%; vertical-align: top; text-align: center; padding-left: 5px;">
                        <h4 style="margin: 0 0 10px 0; font-size: 12px;">Liquidity Snapshot</h4>
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents($chart3)) }}"
                            style="width: 100%; height: auto;" alt="Liquidity Snapshot">
                    </td>
                </tr>
            </table>
        </div>




        <table style="width: 100%; table-layout: fixed; border-collapse: collapse; font-size: 10px; margin-top: 20px;">

            <tr>
                <td style="text-align: center;">A</td>
                <td style="text-align: center;">B</td>
                <td style="text-align: center;">C</td>
                <td style="text-align: center;">D</td>
                <td style="text-align: center;">E</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="background-color: #e5e7eb; text-align: center; font-weight: bold; height: 100px;">
                <td
                    style="width: 10%; vertical-align: middle; border: 1px solid #d1d5db; padding: 8px; word-wrap: break-word;">
                    Total Value £<br>(D - C + E)</td>
                <td
                    style="width: 10%; vertical-align: middle; border: 1px solid #d1d5db; padding: 8px; word-wrap: break-word;">
                    Total Capital<br>invested £</td>
                <td
                    style="width: 8%; vertical-align: middle; border: 1px solid #d1d5db; padding: 8px; word-wrap: break-word;">
                    Total<br>Withdrawals/<br>Charges</td>
                <td
                    style="width: 8%; vertical-align: middle; border: 1px solid #d1d5db; padding: 8px; word-wrap: break-word;">
                    Net Investment £<br>(B - C)</td>
                <td
                    style="width: 8%; vertical-align: middle; border: 1px solid #d1d5db; padding: 8px; word-wrap: break-word;">
                    Total Gain/Loss<br>£</td>
                <td
                    style="width: 8%; vertical-align: middle; border: 1px solid #d1d5db; padding: 8px; word-wrap: break-word;">
                    Cumulative ROI *<br>(Absolute<br>Gain/Loss)</td>
                <td
                    style="width: 8%; vertical-align: middle; border: 1px solid #d1d5db; padding: 8px; word-wrap: break-word;">
                    Annualized<br>Return (CAGR) %</td>
                <td
                    style="width: 8%; vertical-align: middle; border: 1px solid #d1d5db; padding: 8px; word-wrap: break-word;">
                    Avg Profit per<br>Sold Vehicle £</td>
                <td
                    style="width: 8%; vertical-align: middle; border: 1px solid #d1d5db; padding: 8px; word-wrap: break-word;">
                    Vehicles Sold #<br>(Refer<br>APPENDIX A)</td>
                <td
                    style="width: 8%; vertical-align: middle; border: 1px solid #d1d5db; padding: 8px; word-wrap: break-word;">
                    Vehicles in Stock #<br>(Refer<br>APPENDIX B)</td>
                <td
                    style="width: 8%; vertical-align: middle; border: 1px solid #d1d5db; padding: 8px; word-wrap: break-word;">
                    Vehicles Stock<br>at Cost<br>£</td>
                <td
                    style="width: 8%; vertical-align: middle; border: 1px solid #d1d5db; padding: 8px; word-wrap: break-word;">
                    Cash Available<br>£</td>
            </tr>

            <tr>
                <td style="text-align: right;">25,771</td>
                <td style="text-align: right;">25,771</td>
                <td style="text-align: right;">25,771</td>
                <td style="text-align: right;">25,771</td>
                <td style="text-align: right;">25,771</td>
                <td style="text-align: right;">25,771</td>
                <td style="text-align: right;">25,771</td>
                <td style="text-align: right;">25,771</td>
                <td style="text-align: right;">25,771</td>
                <td style="text-align: right;">25,771</td>
                <td style="text-align: right;">25,771</td>
                <td style="text-align: right;">25,771</td>
            </tr>
        </table>



        <p style="font-size: 11px; margin-top: 20px;">As at 12 December 2025, the investment with Blackstone Motors has
            delivered a solid,
            asset-backed performance
            over the review period, despite operating in a challenging macroeconomic environment marked by
            higher interest rates and slower consumer demand. NP has deployed a <b>net capital of
                £714,129</b>, after
            accounting for minor withdrawals and charges of £1,768, resulting in a total portfolio value of £825,771.
            This
            represents an <b>absolute gain of £111,642,</b> translating into a cumulative <b>return on
                investment
                (ROI) of 13.72% since inception.</b></p>


        <p style="font-size: 11px; margin-top: 20px;">On an annualised basis, the investment has generated a compound
            annual growth rate <b>(CAGR) of 8.1%,</b> (Incase no reinvestment of the profit then cumulative
            ROI would be 15.59% (£111,642/ £715,897)), which
            compares favourably with traditional low-risk asset classes such as bank deposits, gilts, and income-focused
            property investments over the same period. Importantly, these returns have been achieved through
            tangible, tradeable assets, rather than financial instruments exposed to market volatility.</p>

        <p style="font-size: 11px; margin-top: 20px;">Operationally, the portfolio has completed 25 vehicle sales,
            delivering an <b>average profit per sold vehicle of £4,465.68.</b></p>

        <p style="font-size: 11px; margin-top: 20px;">As at the reporting date, <b>9 vehicles remain in stock, held
                at a
                total cost of £780,625,</b> providing further embedded value and future profit potential.
            <b>Liquidity
                remains
                managed but deliberately deployed, with £45,146
                held in cash, while the majority of capital is invested in vehicle inventory that is actively
                marketed</b> and
            priced with reference to observable market values. This liquidity profile is consistent with an asset-backed
            trading strategy, where returns are generated through stock turnover rather than idle cash holdings.
        </p>
    </div>



    <!-- Page 4 -->
    <div class="next-page" style="padding:0 50px;">
        <!-- TOP -->
        <table style="width: 100%; border-collapse: collapse; font-size: 10px;">
            <tr>
                <td style="width: 33.33%; text-align: left;">
                    BLACKSTONE MOTORS LIMITED
                </td>

                <td style="width: 33.33%; text-align: center;">
                    INVESTOR'S REPORT
                </td>

                <td style="width: 33.33%; text-align: right;">
                    DEC25
                </td>
            </tr>
        </table>

        <div class="report-block">
            <h2>BLACKSTONE MOTORS LIMITED</h2>
            <h3>Investment Performance Report</h3>
            <h4>Investor: <span>Neil Partridge</span></h4>
            <h4>Period of this report:
                <span>from 14 Feb 2024 to 12 Dec 2025</span>
            </h4>
        </div>


        <h6 style="padding: 0; margin:0; margin-top: 20px;">
            SEMI-ANNUAL INVESTMENT PERFORMANCE TABLE (NP)
        </h6>

        <table style="width: 100%; table-layout: fixed; border-collapse: collapse; font-size: 10px; ">



            <tr style="background-color: #e5e7eb; text-align: center; font-weight: bold; height: 100px;">
                <td
                    style="width: 8.3%; vertical-align: middle; border: 1px solid #d1d5db; padding: 3px; word-wrap: break-word;">
                    Period End</td>
                <td
                    style="width: 8.3%; vertical-align: middle; border: 1px solid #d1d5db; padding: 3px; word-wrap: break-word;">
                    Period </td>
                <td
                    style="width: 8.3%; vertical-align: middle; border: 1px solid #d1d5db; padding: 3px; word-wrap: break-word;">
                    Opening Capital (£)</td>
                <td
                    style="width: 8.3%; vertical-align: middle; border: 1px solid #d1d5db; padding: 3px; word-wrap: break-word;">
                    Capital Added (£)</td>
                <td
                    style="width: 8.3%; vertical-align: middle; border: 1px solid #d1d5db; padding: 3px; word-wrap: break-word;">
                    Capital Added (£)</td>
                <td
                    style="width: 8.3%; vertical-align: middle; border: 1px solid #d1d5db; padding: 3px; word-wrap: break-word;">
                    N P Profit in Period (£)</td>
                <td
                    style="width: 8.3%; vertical-align: middle; border: 1px solid #d1d5db; padding: 3px; word-wrap: break-word;">
                    Closing Portfolio Val</td>
                <td
                    style="width: 8.3%; vertical-align: middle; border: 1px solid #d1d5db; padding: 3px; word-wrap: break-word;">
                    Cumulative Profit </td>
                <td
                    style="width: 8.3%; vertical-align: middle; border: 1px solid #d1d5db; padding: 3px; word-wrap: break-word;">
                    Cumulative ROI (%)</td>
                <td
                    style="width: 8.3%; vertical-align: middle; border: 1px solid #d1d5db; padding: 3px; word-wrap: break-word;">
                    Vehicles in Stock #<br>(Refer<br>APPENDIX B)</td>
                <td
                    style="width: 17%; vertical-align: middle; border: 1px solid #d1d5db; padding: 3px; word-wrap: break-word; text-align: left;">
                    Half Yearly - Periods:<br>
                    H1 <span style="font-weight: normal;">= up to 31 March and</span><br>
                    H2 <span style="font-weight: normal;">= up to 30 Sept</span>
                </td>

            </tr>

            <tr>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
            </tr>

            <tr>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
            </tr>
            <tr>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
                <td style="text-align: center;">25,771</td>
            </tr>
            <tr>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;border-top: 1px solid black; border-bottom: 1px solid black;">20834</td>
                <td style="text-align: center;border-top: 1px solid black; border-bottom: 1px solid black;">25,771</td>
                <td style="text-align: center;border-top: 1px solid black; border-bottom: 1px solid black;">25,771</td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
            </tr>

        </table>



        <p style="font-size: 11px; margin-top: 20px;">* Incase no reinvestment of the profit then <b>Cumulative ROI
                would be 15.59% (£111,642/ £715,897)</b>.</p>
        <p style="font-size: 11px; margin-top: 20px;">The table above summarises semi-annual performance: Returns were
            positive in every reporting period, Performance moderated during weaker market conditions in H1-FY25, Margin
            recovery and capital
            redeployment drove improved returns in H2-FY25, Partial H1-FY26 performance remains positive despite shorter
            duration, This pattern reflects a defensive return profile, where performance slows during adverse </p>


        <h6 style="padding: 0; margin:0; margin-top: 20px;">
            RELATIVE PERFORMANCE CONTEXT
        </h6>


        <table style="width: 70%; table-layout: fixed; border-collapse: collapse; margin-top: 10px;">
            <tr>
                <td style="width: 40%; vertical-align: middle;">
                    <h6 style="padding: 0; margin:0; text-align:center;">
                        CAGR
                    </h6>
                    <div style="text-align: center;">
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents($chart4)) }}"
                            style="width: 100%; max-width: 600px; height: auto;" alt="Relative Performance">
                    </div>
                </td>
                <td style="width: 30%; vertical-align: middle; padding-left: 20px; font-size: 11px; color: black;">
                    The achieved <b>8.11% annualised return</b> (same period) compares favourably with UK savings and
                    money-market instruments, UK government bonds (gilts) and Net yields from residential buy-to-let
                    property.
                    Crucially, these returns were achieved through tangible assets, rather than exposure to public
                    market
                    volatility.
                </td>
            </tr>
        </table>
        <p style="font-size:11px; margin: 0; padding:0; margin-top:20px;">Source:</p>

        <a style="font-size:11px; display: block; " href="https://black-stone-management.com" target="_blank">
            Black Stone Management
        </a>
        <a style="font-size:11px; display: block; " href="https://black-stone-management.com" target="_blank">
            Black Stone Management
        </a>
        <a style="font-size:11px; display: block; " href="https://black-stone-management.com" target="_blank">
            Black Stone Management
        </a>
        <a style="font-size:11px; display: block; " href="https://black-stone-management.com" target="_blank">
            Black Stone Management
        </a>
        <a style="font-size:11px; display: block; " href="https://black-stone-management.com" target="_blank">
            Black Stone Management
        </a>
        <a style="font-size:11px; display: block; " href="https://black-stone-management.com" target="_blank">
            Black Stone Management
        </a>


    </div>



    <!-- Page 5 -->
    <div class="next-page" style="padding:0 50px;">
        <!-- TOP -->
        <table style="width: 100%; border-collapse: collapse; font-size: 10px;">
            <tr>
                <td style="width: 33.33%; text-align: left;">
                    BLACKSTONE MOTORS LIMITED
                </td>

                <td style="width: 33.33%; text-align: center;">
                    INVESTOR'S REPORT
                </td>

                <td style="width: 33.33%; text-align: right;">
                    DEC25
                </td>
            </tr>
        </table>

        <div class="report-block">
            <h2>BLACKSTONE MOTORS LIMITED</h2>
            <h3>Investment Performance Report</h3>
            <h4>Investor: <span>Neil Partridge</span></h4>
            <h4>Period of this report:
                <span>from 14 Feb 2024 to 12 Dec 2025</span>
            </h4>
        </div>


        <h2
            style="background-color: #9CA3AF; color: white; text-align: center; font-size: 14px; margin-top: 10px;margin-bottom: 10px;">
            APPENDIX A <br>
            LIST OF VEHICLES SOLD - VEHICLE TRANSACTIONS - (FROM 14 Feb 2024 TO 12 Dec 2025)</h2>


        <table style="width: 100%; table-layout: fixed; border-collapse: collapse; font-size: 10px;">

            <tr style="background-color: #FF0000; color: white; padding:10px;">
                <th style="padding:10px;">Date</th>
                <th style="padding:10px;">Vehicle ID</th>
                <th style="padding:10px;">Purchase Cost</th>
                <th style="padding:10px;">Additional costs</th>
                <th style="padding:10px;">Total Cost</th>
                <th style="padding:10px;">Sales</th>
                <th style="padding:10px;">Net Profit</th>
                <th style="padding:10px;">NP profit</th>
                <th style="padding:10px; width: 20%;">Make/Model</th>
            </tr>
            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> RX22 ZTK</td>
                <td>100,508 537

                </td>
                <td> 100,508 </td>
                <td> 508 </td>
                <td>101,045</td>
                <td>104,00</td>
                <td>1,478 </td>
                <td style="width: 20%; text-align: left;">Porsche 911 Carrera GTS</td>
            </tr>
            <tr style="background-color: #fff; text-align:center; font-weight: bold;">
                <td></td>
                <td></td>
                <td>Total</td>
                <td style="border-top: 1px solid black; border-bottom: 1px solid black;">2,466,551</td>
                <td style="border-top: 1px solid black; border-bottom: 1px solid black;">42,300</td>
                <td style="border-top: 1px solid black; border-bottom: 1px solid black;">2,508,851</td>
                <td style="border-top: 1px solid black; border-bottom: 1px solid black;">2,551,151</td>
                <td
                    style="border-top: 1px solid black; border-bottom: 1px solid black; background-color: #FF0000; color: white;">
                    2,635,751</td>
                <td style="width: 20%; text-align: left;"></td>
            </tr>



        </table>


        <h6 style="padding: 0; margin:0; margin-top: 20px;">
            Personal expenses of NP
        </h6>

        <table style="
    width: 30%;
    table-layout: fixed;
    font-size: 12px;
    border-collapse: collapse;
    border: 1px solid #000;
">
            <tr style="background-color:#e5e7eb;">
                <td style="border:1px solid #000;">22 May 2025</td>
                <td style="border:1px solid #000;">Exp of NP</td>
                <td style="border:1px solid #000; text-align:right;">(1,411,94)</td>
            </tr>

            <tr style="background-color:#fff;">
                <td style="border:1px solid #000;">22 May 2025</td>
                <td style="border:1px solid #000;">Exp of NP</td>
                <td style="border:1px solid #000; text-align:right;">(1,411,94)</td>
            </tr>

            <tr style="background-color:#e5e7eb;">
                <td style="border:1px solid #000;">22 May 2025</td>
                <td style="border:1px solid #000;">Exp of NP</td>
                <td style="border:1px solid #000; text-align:right;">(1,411,94)</td>
            </tr>
            <tr>
                <td style="border:none;"></td>
                <td style="border:none; font-weight:bold; text-align:right;">Total:</td>
                <td style="border:none; border-bottom:1px solid #000; text-align:right;">
                    (1,3311,94)
                </td>
            </tr>
        </table>

    </div>


    <!-- Page 6 -->
    <div class="next-page" style="padding:0 50px;">

        <!-- TOP -->
        <table style="width: 100%; border-collapse: collapse; font-size: 10px;">
            <tr>
                <td style="width: 33.33%; text-align: left;">
                    BLACKSTONE MOTORS LIMITED
                </td>

                <td style="width: 33.33%; text-align: center;">
                    INVESTOR'S REPORT
                </td>

                <td style="width: 33.33%; text-align: right;">
                    DEC25
                </td>
            </tr>
        </table>

        <div class="report-block">
            <h2>BLACKSTONE MOTORS LIMITED</h2>
            <h3>Investment Performance Report</h3>
            <h4>Investor: <span>Neil Partridge</span></h4>
            <h4>Period of this report:
                <span>from 14 Feb 2024 to 12 Dec 2025</span>
            </h4>
        </div>


        <h2
            style="background-color: #9CA3AF; color: white; text-align: center; font-size: 14px; margin-top: 10px;margin-bottom: 10px;">
            PPENDIX B<br>
            LIST OF VEHICLES 'IN STOCK' AS OF 12th DECEMBER 2025</h2>

        <table style="width: 100%; table-layout: fixed; border-collapse: collapse; font-size: 10px;">
            <tr style="text-align:center;">
                <td></td>
                <td></td>
                <td>A</td>
                <td>B</td>
                <td>C = A + B</td>
                <td style="width: 20%; text-align: left;"></td>
            </tr>
            <tr style="background-color: #FF0000; color: white; padding:10px;">
                <th style="padding:10px;">Date</th>
                <th style="padding:10px;">Vehicle ID</th>
                <th style="padding:10px;">Purchase Cost</th>
                <th style="padding:10px;">Additional costs</th>
                <th style="padding:10px;">Total Cost</th>
                <th style="padding:10px; width: 20%;">Make/Model</th>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> KE71 NZW</td>
                <td>100,508 537</td>
                <td>2,174</td>
                <td>192,17</td>
                <td style="width: 20%; text-align: left;">OLLS ROYCE Ghost V12 4x4 Aut</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> KE71 NZW</td>
                <td>2,174</td>
                <td>192,17</td>
                <td>100,508 537</td>
                <td style="width: 20%; text-align: left;">OLLS ROYCE Ghost V12 4x4 Aut</td>
            </tr>
            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> KE71 NZW</td>
                <td>100,508 537</td>
                <td>2,174</td>
                <td>192,17</td>
                <td style="width: 20%; text-align: left;">OLLS ROYCE Ghost V12 4x4 Aut</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> KE71 NZW</td>
                <td>2,174</td>
                <td>192,17</td>
                <td>100,508 537</td>
                <td style="width: 20%; text-align: left;">OLLS ROYCE Ghost V12 4x4 Aut</td>
            </tr>
            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> KE71 NZW</td>
                <td>100,508 537</td>
                <td>2,174</td>
                <td>192,17</td>
                <td style="width: 20%; text-align: left;">OLLS ROYCE Ghost V12 4x4 Aut</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> KE71 NZW</td>
                <td>2,174</td>
                <td>192,17</td>
                <td>100,508 537</td>
                <td style="width: 20%; text-align: left;">OLLS ROYCE Ghost V12 4x4 Aut</td>
            </tr>
            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> KE71 NZW</td>
                <td>100,508 537</td>
                <td>2,174</td>
                <td>192,17</td>
                <td style="width: 20%; text-align: left;">OLLS ROYCE Ghost V12 4x4 Aut</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> KE71 NZW</td>
                <td>2,174</td>
                <td>192,17</td>
                <td>100,508 537</td>
                <td style="width: 20%; text-align: left;">OLLS ROYCE Ghost V12 4x4 Aut</td>
            </tr>
            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td> KE71 NZW</td>
                <td>100,508 537</td>
                <td>2,174</td>
                <td>192,17</td>
                <td style="width: 20%; text-align: left;">OLLS ROYCE Ghost V12 4x4 Aut</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td> KE71 NZW</td>
                <td>2,174</td>
                <td>192,17</td>
                <td>100,508 537</td>
                <td style="width: 20%; text-align: left;">OLLS ROYCE Ghost V12 4x4 Aut</td>
            </tr>


            <tr style="background-color: #fff; text-align:center; font-weight: bold;">
                <td></td>
                <td></td>
                <td style="background-color: #FF0000; color: white;">Total Current Stock >>></td>
                <td style="border-top: 1px solid black; border-bottom: 1px solid black;">2,466,551</td>
                <td style="border-top: 1px solid black; border-bottom: 1px solid black;">42,300</td>
            </tr>

        </table>

        <p style="font-size: 11px;">*Additional cost incurred as part of vehicle cost.</p>


        <h2
            style="background-color: #9CA3AF; color: white; text-align: center; font-size: 14px; margin-top: 10px;margin-bottom: 10px;">
            APPENDIX C<br>
            INVESTMENT BREAK-UP OF AMOUNTS - FROM 14 Feb 2024 TO 12 Dec 2025
        </h2>
        <table style="width: 100%; table-layout: fixed; border-collapse: collapse; font-size: 10px;">

            <tr style="background-color: #FF0000; color: white; padding:10px;">
                <th style="padding:10px;">Investment <br> Date</th>
                <th style="padding:10px;">Principal <br>Amount (E)</th>
                <th style="padding:10px;">Purchase <br>Cost</th>
                <th style="padding:10px;">Periodic <br>Profit
                    (£)</th>
                <th style="padding:10px;">Cumulative <br>
                    profit (£)</th>
                <th style="padding:10px;">Other <br>charges </th>
                <th style="padding:10px;">Total <br>Value (£)</th>
                <th style="padding:10px;">Years <br>Since Stock</th>
                <th style="padding:10px;">CAGR %</th>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td>50,000</td>
                <td>50,000</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>-</td>
                <td>51,299</td>
                <td>0,00</td>
                <td>N/A</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td>50,000</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>-</td>
                <td>51,299</td>
                <td>0,00</td>
                <td>N/A</td>
            </tr>

            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td>50,000</td>
                <td>50,000</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>-</td>
                <td>51,299</td>
                <td>0,00</td>
                <td>N/A</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td>50,000</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>-</td>
                <td>51,299</td>
                <td>0,00</td>
                <td>N/A</td>
            </tr>
            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td>50,000</td>
                <td>50,000</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>-</td>
                <td>51,299</td>
                <td>0,00</td>
                <td>N/A</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td>50,000</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>-</td>
                <td>51,299</td>
                <td>0,00</td>
                <td>N/A</td>
            </tr>
            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td>50,000</td>
                <td>50,000</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>-</td>
                <td>51,299</td>
                <td>0,00</td>
                <td>N/A</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td>50,000</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>-</td>
                <td>51,299</td>
                <td>0,00</td>
                <td>N/A</td>
            </tr>
            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td>50,000</td>
                <td>50,000</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>-</td>
                <td>51,299</td>
                <td>0,00</td>
                <td>N/A</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td>50,000</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>-</td>
                <td>51,299</td>
                <td>0,00</td>
                <td>N/A</td>
            </tr>
            <tr style="background-color: #e5e7eb; text-align:center;">
                <td>14 Feb 2024</td>
                <td>50,000</td>
                <td>50,000</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>-</td>
                <td>51,299</td>
                <td>0,00</td>
                <td>N/A</td>
            </tr>
            <tr style="background-color: #fff; text-align:center;">
                <td>14 Feb 2024</td>
                <td>50,000</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>1,478</td>
                <td>-</td>
                <td>51,299</td>
                <td>0,00</td>
                <td>N/A</td>
            </tr>

            <tr style="background-color: #fff; text-align:center; font-weight: bold;">
                <td></td>
                <td></td>
                <td style="border-top: 1px solid black; border-bottom: 1px solid black;">710.288</td>
                <td></td>

                <td style="border-top: 1px solid black; border-bottom: 1px solid black;">2,466,551</td>
                <td></td>

                <td style="border-top: 1px solid black; border-bottom: 1px solid black;">(42,300)</td>
                <td></td>
                <td></td>

            </tr>

        </table>
    </div>

    <script type="text/php">
        if ( isset($pdf) ) {
            $x = 720;
            $y = 590;
            $text = "Page {PAGE_NUM} of {PAGE_COUNT}";
            $font = $fontMetrics->get_font("helvetica", "bold");
            $size = 7;
            $color = array(0,0,0);
            $word_space = 0.0;
            $char_space = 0.0;
            $angle = 0.0;
            $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
        }
    </script>
</body>

</html>