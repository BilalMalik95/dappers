<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Email</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        <tr>
            <td style="background-color: #086ad8; padding: 20px; color: white; text-align: center;">
                <h2 style="margin: 0;">DAPPERSTECH | New Email</h2>
            </td>
        </tr>
        <tr>
            <td style="padding: 30px;">
                <table cellpadding="10" cellspacing="0" width="100%">
                    <tr>
                        <td width="30%" style="font-weight: bold; color: #333;">Email:</td>
                        <td style="color: #555;">{{ $subscriberEmail }}</td>
                         </tr>
                         <p>You received a new email from DappersTech website contact form.</p>
                </table>
            </td>
        </tr>
        <tr>
            <td style="background-color: #f1f1f1; padding: 15px; text-align: center; color: #888; font-size: 12px;">
                &copy; {{ date('Y') }} DappersTech. All rights reserved.
            </td>
        </tr>
    </table>
</body>
</html>
