<!DOCTYPE html>
<html lang="tr">

<head>
    <title>TOC GRUP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />


    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }
        .invoice-3 {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .invoice-content {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            padding: 20px;
            border-radius: 8px;
        }
        .invoice-inner {
            padding: 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        .invoice-headar {
            margin-bottom: 20px;
            padding-bottom: 20px;
            text-align: center;
        }
        .invoice-name .logo img {
            max-width: 150px;
        }
        .invoice-top {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .inv-title-1 {
            font-size: 18px;
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .invo-addr-1 {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }
        .invoice-center {
            margin-bottom: 30px;
            text-align: center;
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .invoice-table th,
        .invoice-table td {
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            text-align: left;
        }
        .invoice-table th {
            background-color: #f5f5f5;
            font-weight: bold;
        }
        .order-summary h4 {
            font-size: 18px;
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }
        .important-note {
            background-color: #fdf7e3;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #f5e1a1;
        }
        .important-note h3 {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .important-notes-list-1 {
            padding-left: 20px;
            list-style-type: disc;
        }
        .payment-info h3 {
            font-size: 16px;
            color: #3498db;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .payment-info p {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }
        button[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="invoice-3 invoice-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-inner">
                        <div class="invoice-info" id="invoice_wrapper">
                            <div class="invoice-headar">
                                <div class="invoice-name">
                                    <div class="logo">
                                        <img src="{{ asset('images/logoTOC.png') }}" alt="TOC Logo" />
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="invoice-top">
                                <div class="col-sm-6">
                                    <div class="row invoice-number">
                                        <h4 class="inv-title-1">Gönderen</h4>
                                        <p class="row invo-addr-1 mb-0">
                                            Toc Grup A.Ş. <br />
                                            info@tocgrup.com.tr <br />
                                            İstanbul / Türkiye <br />
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-30">
                                    <div class="row invoice-number text-end">
                                        <h4 class="inv-title-1">Alıcı</h4>
                                        <p class="invo-addr-1 mb-0">
                                            Köseoğlu A.Ş. <br />
                                            bilgi@koseoglu.com <br />
                                            Ankara / Türkiye <br />
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-30">
                                    <div class="row invoice-number text-end">
                                        <h4 class="inv-title-1">Tarih ve Ödeme</h4>
                                        <p class="invo-addr-1 mb-0">
                                            27.11.2024<br />
                                            Peşin Ödeme <br />
                                            Nakit Ödeme <br />
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="invoice-center">
                                <div class="order-summary">
                                    <h4>Ödeme Özeti</h4>
                                    <div class="table-outer">
                                        <table class="default-table invoice-table">
                                            <thead>
                                                <tr>
                                                    <th>Açıklama</th>
                                                    <th>Fiyat</th>
                                                    <th>KDV (20%)</th>
                                                    <th>Toplam</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Standart Plan</td>
                                                    <td>1000.00 ₺</td>
                                                    <td>921.80 ₺</td>
                                                    <td>9243 ₺</td>
                                                </tr>
                                                <tr>
                                                    <td>Ekstra Plan</td>
                                                    <td>413.00 ₺</td>
                                                    <td>912.80 ₺</td>
                                                    <td>5943 ₺</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Toplam</strong></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>9,750 ₺</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="col-sm-4 offset-sm-4">
                                    <div class="text-center payment-info mb-30">
                                        <h3 class="inv-title-1">Ödeme Özeti</h3>
                                        <p class="mb-0 text-13">Dilerseniz PDF çıktısını alabilirsiniz.</p>
                                        <form action="{{ route('generate-pdf') }}" method="POST">
                                            @csrf
                                            <button type="submit"> PDF Oluştur</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
