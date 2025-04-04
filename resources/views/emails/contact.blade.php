<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #2d3748;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #1a365d;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: #ffffff;
            padding: 30px;
            border: 1px solid #e2e8f0;
            border-radius: 0 0 8px 8px;
        }
        .field {
            margin-bottom: 20px;
        }
        .label {
            font-weight: 600;
            color: #4a5568;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            background-color: #f7fafc;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #edf2f7;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #718096;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 style="margin: 0;">New Message from Portfolio</h2>
        </div>
        
        <div class="content">
            <div class="field">
                <span class="label">From</span>
                <div class="value">{{ $details['name'] }} ({{ $details['email'] }})</div>
            </div>

            <div class="field">
                <span class="label">Subject</span>
                <div class="value">{{ $details['subject'] }}</div>
            </div>

            <div class="field">
                <span class="label">Message</span>
                <div class="value">{{ $details['message'] }}</div>
            </div>
        </div>

        <div class="footer">
            <p>This email was sent from your portfolio contact form.</p>
            <p>© {{ date('Y') }} Daniel. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
