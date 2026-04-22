<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Staff Password Information</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9fafb; padding:20px;">

    <table width="100%" cellpadding="0" cellspacing="0" 
           style="max-width:600px; margin:auto; background:#ffffff; border:1px solid #e5e7eb; border-radius:8px; padding:20px;">
        <tr>
            <td style="text-align:center; border-bottom:1px solid #e5e7eb; padding-bottom:15px; margin-bottom:15px;">
                <h2 style="margin:0; color:#111827;">Pyare Foundation</h2>
                <p style="margin:0; color:#6b7280;">Staff Password Information</p>
            </td>
        </tr>
        <tr>
            <td style="padding:20px;">
                <p>Hi <strong>{{ $sendData->name }}</strong>,</p>
                <table width="100%" cellpadding="6" cellspacing="0" style="border-collapse: collapse;">
                    <tr>
                        <td style="border:1px solid #e5e7eb;">Email</td>
                        <td style="border:1px solid #e5e7eb;">{{ $sendData->email }}</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #e5e7eb;">Password</td>
                        <td style="border:1px solid #e5e7eb;">{{ Crypt::decryptString($sendData->password_text) }}</td>
                    </tr>
                    
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
