<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment Receipt</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9fafb; padding:20px;">

    <table width="100%" cellpadding="0" cellspacing="0" 
           style="max-width:600px; margin:auto; background:#ffffff; border:1px solid #e5e7eb; border-radius:8px; padding:20px;">
        <tr>
            <td style="text-align:center; border-bottom:1px solid #e5e7eb; padding-bottom:15px; margin-bottom:15px;">
                <h2 style="margin:0; color:#111827;">NGO</h2>
                <p style="margin:0; color:#6b7280;">Payment Receipt</p>
            </td>
        </tr>
        <tr>
            <td style="padding:20px;">
                <p>Hi <strong>{{ $receipt->name }}</strong>,</p>
                <p>Thank you for your payment. Here are your receipt details:</p>

                <table width="100%" cellpadding="6" cellspacing="0" style="border-collapse: collapse;">
                    <tr>
                        <td style="border:1px solid #e5e7eb;">Amount</td>
                        <td style="border:1px solid #e5e7eb;">₹{{ $receipt->amount }}</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #e5e7eb;">Transaction ID</td>
                        <td style="border:1px solid #e5e7eb;">{{ $receipt->payment_id }}</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #e5e7eb;">Date</td>
                        <td style="border:1px solid #e5e7eb;">{{ $receipt->payment_date }}</td>
                    </tr>
                </table>

                <p style="margin-top:20px;">If you have any questions, please contact our support.</p>
                <p style="margin:0;">Thanks,<br><strong>{{ "NGO" }}</strong></p>
            </td>
        </tr>
    </table>
</body>
</html>
