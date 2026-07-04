<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px;">
  <table width="100%" cellpadding="0" cellspacing="0"
    style="max-width:600px; margin:0 auto; background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.08);">

    <!-- Header -->
    <tr>
      <td style="background:#086ad8; padding:24px 30px;">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td>
              <p style="margin:0; font-size:20px; font-weight:bold; color:#fff;">DappersTech</p>
              <p style="margin:4px 0 0; font-size:13px; color:rgba(255,255,255,0.75);">New contact form submission</p>
            </td>
            <td align="right">
              <p style="margin:0; font-size:12px; color:rgba(255,255,255,0.6);">{{ date('d M Y, h:i A') }}</p>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <!-- Body -->
    <tr>
      <td style="padding:30px;">
        <p style="margin:0 0 20px; font-size:15px; color:#333;">
          You received a new message from your website contact form.
        </p>

        <table width="100%" cellpadding="0" cellspacing="0"
          style="border:1px solid #e8e8e8; border-radius:8px; overflow:hidden;">
          <tr style="background:#f9f9f9;">
            <td style="padding:12px 16px; width:35%; font-size:13px; font-weight:bold; color:#555; border-bottom:1px solid #e8e8e8;">
              Full Name
            </td>
            <td style="padding:12px 16px; font-size:13px; color:#333; border-bottom:1px solid #e8e8e8;">
              {{ $formData['name'] }}
            </td>
          </tr>
          <tr>
            <td style="padding:12px 16px; font-size:13px; font-weight:bold; color:#555; border-bottom:1px solid #e8e8e8;">
              Email
            </td>
            <td style="padding:12px 16px; font-size:13px; border-bottom:1px solid #e8e8e8;">
              <a href="mailto:{{ $formData['email'] }}" style="color:#086ad8; text-decoration:none;">
                {{ $formData['email'] }}
              </a>
            </td>
          </tr>
          <tr style="background:#f9f9f9;">
            <td style="padding:12px 16px; font-size:13px; font-weight:bold; color:#555; border-bottom:1px solid #e8e8e8;">
              Phone
            </td>
            <td style="padding:12px 16px; font-size:13px; color:#333; border-bottom:1px solid #e8e8e8;">
              {{ $formData['phone'] }}
            </td>
          </tr>
          <tr>
            <td style="padding:12px 16px; font-size:13px; font-weight:bold; color:#555; border-bottom:1px solid #e8e8e8;">
              Service
            </td>
            <td style="padding:12px 16px; font-size:13px; color:#333; border-bottom:1px solid #e8e8e8;">
              {{ $formData['service'] ?? 'Not specified' }}
            </td>
          </tr>
          <tr style="background:#f9f9f9;">
            <td style="padding:12px 16px; font-size:13px; font-weight:bold; color:#555; vertical-align:top;">
              Message
            </td>
            <td style="padding:12px 16px; font-size:13px; color:#333; line-height:1.6;">
              {{ $formData['message'] }}
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <!-- Footer -->
    <tr>
      <td style="background:#f4f4f4; padding:16px 30px; text-align:center; font-size:12px; color:#999;">
        &copy; {{ date('Y') }} DappersTech &mdash; This email was sent from your website contact form.
      </td>
    </tr>

  </table>
</body>
</html>