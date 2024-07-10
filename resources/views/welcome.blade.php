<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="tr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatura</title>
    <style type="text/css">
        @page {
            size: A4;
            margin: 40px;
        }

        body {
            font-family: "DejaVu Sans", monospace;
            margin: 0;
            padding: 0;
            font-size: 10px;
        }

        .a4-container {
            width: calc(100% - 20px);
            margin: 0 auto;
            padding: 10px;
            box-sizing: border-box;
            background: white;
        }

        .invoice-container {
            width: 100%;
            height: auto;
            padding: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .company-details,
        .invoice-details,
        .billing-shipping,
        .comments {
            margin-bottom: 30px;

        }

        .company-details {
            text-align: left;
            float: left;
            width: 50%;
        }

        .invoice-details {
            text-align: right;
            float: right;
            width: 50%;
        }

        .billing-shipping {

            width: 100%;
            height: 100px;
            right: 0%;
        }

        .billing,
        .shipping {
            width: 45%;
        }

        .shipping {
            width: 50%;
            height: 100px;
            float: right;
            margin-top: 10px;
        }

        h1 {
            font-size: 12px;
            margin: 0;
        }


        .billing {

            width: 50%;
            height: 100px;
            float: left;
            right: 0;


        }



        h2 {
            font-size: 10px;
            margin: 0;
        }

        h3 {
            font-size: 8px;
            margin-bottom: 5px;
        }

        p {
            margin: 3px 0;
        }

        strong {
            font-weight: bold;
        }

        .bilgi {
            margin-top: 20px;
        }


        .bilgi1 {
            width: 100%;
            height: 100px;
            margin-top: 10px;

        }





        .bilgi2 {
            margin-top: 17px;
        }

        .bilgi3 {
            font-weight: bold;
            color: #2f2f2f;
            font-size: 25px;
            margin-bottom: 10px;
        }

        table {
            margin-top: 25px;
            border: 1px solid white;
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 3px;
            font-size: 8px;
            text-align: center;
        }

        th {
            background-color: #ffffff;
            font-weight: bold;
        }

        .right-align {
            text-align: right;
        }

        .content {
            text-align: left;
            margin-top: 25px;
        }

        .content1 {
            text-align: center;
            margin-top: 15px;
        }

        tr {
            height: 10px;
        }

        tfoot .no-border .right-align {
            border: none !important;
        }

        tfoot td {
            border: 1px solid black !important;
            text-align: right;
        }

        tbody td {
            border: 1px solid black !important;
            text-align: left;
        }

        tbody .right-align {
            text-align: right;
        }

        tbody .center-align {
            text-align: center;
        }

        tfoot .no-border td:not(:last-child) {
            border: none !important;
        }

        .comments {
            margin-top: 50px;
            font-size: 11px;
        }

        tbody tr {

            height: 20px;
        }

        .kalin-yazi th {
            font-weight: bold;
            font-size: 10px;
        }

        .buyuk-yazi td {
            font-size: 11px;
        }

        .billing-shipping h3 {
            font-size: 12px;
            margin-bottom: 5px;
        }

        .comments h3 {
            font-size: 10px;
        }
    </style>
</head>

<body>
    <div class="a4-container">
        <div class="invoice-container">
            <div class="bilgi1">
                <div class="company-details">
                    <h1>Grup A.Ş.</h1>
                    <p>Temizlik hizmetleri</p>
                    <div class="bilgi">
                        <p>Adres: İstanbul - Avrupa / Şişli</p>
                        <p>Telefon: (123) 456-7890</p>
                        <p>Faks: (123) 456-7891</p>
                    </div>
                </div>
                <div class="invoice-details">
                    <div class="bilgi3">
                        <p>Fatura</p>
                    </div>
                    <div class="bilgi2">
                        <p>İRSALİYE <strong>#100 </strong></p>
                        <p>TARİH: 27/11/2024</p>
                    </div>
                </div>
            </div>
            <div class="billing-shipping">
                <div class="billing">
                    <h3> <strong> Kime: </strong></h3>
                    <p>Halil KÖSE</p>
                    <p>Köseoğlu Tasarım</p>
                    <p>210 Yıldızlar Caddesi</p>
                    <p>Berkeley, CA 78910</p>
                    <p>(123) 987-6543</p>
                </div>
                <div class="shipping">
                    <h3> Kimden: </h3>
                    <p>Mehmet YILMAZ</p>
                    <p>Mükemmel Mekanlar İç Mimarlık</p>
                    <p>210 Yıldızlar Caddesi</p>
                    <p>Berkeley, CA 78910</p>
                    <p>(123) 987-6543</p>
                </div>
            </div>
            <div class="comments">
                <h3>YORUMLAR VEYA ÖZEL TALİMATLAR:</h3>
                <p>Gönderi kırılgan ürünler içeriyor.</p>
            </div>
            <table class="invoice-table">
                <thead>
                    <tr class="kalin-yazi">
                        <th>Satıcı</th>
                        <th>Sipariş No</th>
                        <th>Talep Eden</th>
                        <th>Kargo Şirketi</th>
                        <th>Posta Kodu</th>
                        <th>Şartlar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="buyuk-yazi">
                        <td class="center-align">Furkan Ata</td>
                        <td class="center-align">143</td>
                        <td class="center-align">Cihan Uzun</td>
                        <td class="center-align">MNG Kargo</td>
                        <td class="center-align">34270</td>
                        <td class="center-align">Belirtilmedi</td>
                    </tr>
                </tbody>
            </table>
            <table class="invoice-table">
                <thead>
                    <tr class="kalin-yazi">
                        <th>ADET</th>
                        <th>DESCRIPTION</th>
                        <th>UNIT PRICE</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="buyuk-yazi">
                        <td>100</td>
                        <td>Süslemeli kil seramiği (Büyük)</td>
                        <td class="right-align">13.00 ₺</td>
                        <td class="right-align">1300.00 ₺</td>
                    </tr>

                    <tr>
                        <td>0</td>
                        <td></td>
                        <td class="right-align"></td>
                        <td class="right-align"></td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td></td>
                        <td class="right-align"></td>
                        <td class="right-align"></td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td></td>
                        <td class="right-align"></td>
                        <td class="right-align"></td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td></td>
                        <td class="right-align"></td>
                        <td class="right-align"></td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td></td>
                        <td class="right-align"></td>
                        <td class="right-align"></td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td></td>
                        <td class="right-align"></td>
                        <td class="right-align"></td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td></td>
                        <td class="right-align"></td>
                        <td class="right-align"></td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td></td>
                        <td class="right-align"></td>
                        <td class="right-align"></td>
                    </tr>







                </tbody>
                <tfoot>
                    <tr class="no-border buyuk-yazi">
                        <td colspan="3" class="right-align">ARA TOPLAM</td>
                        <td>1300.00 ₺ </td>
                    </tr>
                    <tr class="no-border buyuk-yazi">
                        <td colspan="3" class="right-align">KDV</td>
                        <td>65.00 ₺</td>
                    </tr>
                    <tr class="no-border buyuk-yazi">
                        <td colspan="3" class="right-align">NAKLİYE & İŞLEME </td>
                        <td>24.99 ₺ </td>
                    </tr>
                    <tr class="no-border buyuk-yazi">
                        <td colspan="3" class="right-align"><strong>TOPLAM TUTAR</strong></td>
                        <td><strong>1389.99 ₺</strong></td>
                    </tr>
                </tfoot>
            </table>
            <div class="content">
                <p>Tüm çekleri <strong> Pottery & Co. </strong> adına düzenleyiniz.</p>
                <p>Bu fatura ile ilgili sorunuz varsa bize ulaşabilirsiniz:<strong>(123) 456-7890</strong>. </p>
            </div>
            <div class="content1">
                <p><strong>İLGİNİZ İÇİN TEŞEKKÜR EDERİM!</strong></p>
            </div>
        </div>
    </div>
</body>

</html>
