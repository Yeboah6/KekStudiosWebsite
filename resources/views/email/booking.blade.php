<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Email from Customer</title>
    <style>
        /* General Reset */
        body {
            margin: 0;
            padding: 0;
             font-family:"Barlow",sans-serif;
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        table {
            border-spacing: 0;
            width: 100%;
        }
        td {
            padding: 0;
        }
        img {
            border: 0;
            max-width: 100%;
        }
        /* Email Container */
        .email-container {
            max-width: 650px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        /* Header */
        .email-header {
            background: #0B1F3A;
            color: #ffffff;
            padding: 25px 30px;
        }
        .email-header h1 {
            margin: 0;
            color: #ffffff;
            font-size: 26px;
            font-weight: 600;
            text-align: center;
            letter-spacing: 0.5px;
        }
        /* Logo Area */
        .logo-area {
            text-align: center;
            padding: 20px 0;
            background-color: #f9f9f9;
            border-bottom: 1px solid #eeeeee;
        }
        .logo {
            height: 60px;
            width: auto;
        }
        /* Body */
        .email-body {
            padding: 30px;
            line-height: 1.7;
            font-size: 16px;
            color: #444;
        }
        .email-body h2 {
            color: #0B1F3A;
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 22px;
        }
        .email-body p {
            margin: 0 0 20px;
        }
        .email-body .field-label {
            font-weight: 600;
            color: #555;
            display: inline-block;
        }
        .email-body .field-value {
            color: #333;
        }
        .email-body .message-box {
            background-color: #f9f9f9;
            border-left: 4px solid #0B1F3A;
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 4px 4px 0;
        }
        .email-body a {
            color: #0B1F3A;
            text-decoration: none;
            font-weight: 500;
            border-bottom: 1px solid transparent;
            transition: all 0.2s ease;
        }
        .email-body a:hover {
            border-bottom-color: #43a047;
        }
        .cta-button {
            display: inline-block;
            background-color: #43a047;
            color: white !important;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            margin: 20px 0;
            text-align: center;
            transition: background-color 0.3s ease;
            border-bottom: none !important;
        }
        .cta-button:hover {
            background-color: #2e7d32;
            border-bottom: none !important;
        }
        /* Footer */
        .email-footer {
            padding: 20px 30px;
            background: #f5f5f5;
            font-size: 14px;
            color: #777;
            border-top: 1px solid #eeeeee;
        }
        .email-footer p {
            margin: 5px 0;
            text-align: center;
        }
        .email-footer a {
            color: #DAA33E;
            text-decoration: none;
            font-weight: 500;
        }
        .email-footer a:hover {
            text-decoration: underline;
        }
        .social-links {
            text-align: center;
            padding-top: 15px;
        }
        .social-icon {
            display: inline-block;
            margin: 0 8px;
            width: 30px;
            height: 30px;
            background-color: #DAA33E;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
        }
        .social-icon a {
            color: white;
            display: inline-block;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <table class="email-container">
        <tr>
            <td class="email-header">
                <h1>New Project Request</h1>
            </td>
        </tr>
        <tr>
            <td class="email-body">
                {{-- <h2>New Customer Inquiry</h2> --}}
                
                <p>
                    <span class="field-label">Name:</span>
                    <span class="field-value">{{ $booking['name'] }}</span>
                </p>
                
                <p>
                    <span class="field-label">Email Address:</span>
                    <span class="field-value">{{ $booking['email'] }}</span>
                </p>
                
                <p>
                    <span class="field-label">Phone:</span>
                    <span class="field-value">{{ $booking['phone'] }}</span>
                </p>

                <p>
                    <span class="field-label">Company Name:</span>
                    <span class="field-value">{{ $booking['company'] }}</span>
                </p>
                <p>
                    <span class="field-label">Servie Type:</span>
                    <span class="field-value">{{ $booking['service'] }}</span>
                </p>
                <p>
                    <span class="field-label">Specified Service:</span>
                    <span class="field-value">{{ $booking['work'] }}</span>
                </p>
                <p>
                    <span class="field-label">Project Title:</span>
                    <span class="field-value">{{ $booking['project_title'] }}</span>
                </p>
                <p>
                    <span class="field-label">Project Description:</span>
                    <span class="field-value">{{ $booking['project_description'] }}</span>
                </p>
                <p>
                    <span class="field-label">Budget:</span>
                    <span class="field-value">{{ $booking['budget'] }}</span>
                </p>
                <p>
                    <span class="field-label">Deadline:</span>
                    <span class="field-value">{{ $booking['deadline'] }}</span>
                </p>
                <p>
                    <span class="field-label">Reference:</span>
                    <span class="field-value">{{ $booking['reference'] }}</span>
                </p>
                <p>
                    <span class="field-label">Additional Notes:</span>
                    <div class="message-box">
                        {{ $booking['additional_notes'] }}
                    </div>
                </p>
                
                <p>You can also visit our website to see more customer interactions and manage your responses.</p>
            </td>
        </tr>
        <tr>
            <td class="email-footer">
                <p>&copy; {{ config('app.name') }} {{ date('Y') }}. All rights reserved.</p>
                <p>KEKStudios Official</p>
                <p>
                    <a href="mailto:kekstudiosofficial1@gmail.com">kekstudiosofficial1@gmail.com</a> | 
                    <a href="tel:+233 55 369 6305">+233 55 369 6305</a>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>