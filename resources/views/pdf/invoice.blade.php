<!DOCTYPE html>
<html>
<head>
    <title>Publications</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    @font-face {
      font-family: "DejaVu Sans";
      font-style: normal;
      font-weight: 400;
      src: url("/fonts/dejavu-sans/DejaVuSans.ttf");
      /* IE9 Compat Modes */
      src: 
        local("DejaVu Sans"), 
        local("DejaVu Sans"), 
        url("/fonts/dejavu-sans/DejaVuSans.ttf") format("truetype");
    }
    body { 
      font-family: "DejaVu Sans";
      font-size: 12px;
    }
  </style>
</head>
<body>
    <div style="width: 100%; max-width: 960px; margin: auto">
        <table width="100%">
            <tr style="border-bottom: 1px solid #000000">
                <td><h2>Publications</h2></td>
                <td style="text-align: right"><h3>Order # 12345</h3></td>
            </tr>
            <tr>
                <td style="padding-bottom: 16px;">
                    <strong>Billed To:</strong><br>
                    John Smith<br>
                    1234 Victory Avenue<br>
                    Apt. 5D<br>
                    Sunfield, ST 54321
                </td>
                <td style="text-align: right; padding-bottom: 16px;">
                    <strong>Shipped To:</strong><br>
                    John Smith<br>
                    1234 Victory Avenue<br>
                    Apt. 5D<br>
                    Sunfield, ST 54321
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Payment Method:</strong><br>
                        Visa ending **** 4242<br>
                        jsmith@email.com
                </td>
                <td style="text-align: right">
                    <strong>Order Date:</strong><br>
                    March 7, 2014<br><br>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h3>Order summary</h3>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%" cellpadding="0" cellspacing="0" border="1">
                        <thead>
                            <tr style="background-color: #eee">
                                <th style="text-align: left; padding: 5px 10px;">Item</th>
                                <th style="text-align: center; padding: 5px 10px;">Price</strong></th>
                                <th style="text-align: center; padding: 5px 10px;">Quantity</th>
                                <th style="text-align: right; padding: 5px 10px;">Totals</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($publications as $publication)
                                <tr>
                                    <td style="text-align: left; padding: 5px 10px;">{{ $publication['id'] }}</td>
                                    <td style="text-align: center; padding: 5px 10px;">{{ $publication['title'] }}</td>
                                    <td style="text-align: center; padding: 5px 10px;">{{ $publication['year'] }}</td>
                                    <td style="text-align: right; padding: 5px 10px;">{{ $publication['city'] }}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>