{{-- resources/views/emails/donation/confirmation.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Donation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        .header {
            background: linear-gradient(135deg, #0047AB, #FF6B35);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            padding: 20px;
        }
        .thank-you {
            text-align: center;
            margin-bottom: 30px;
        }
        .details-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 25px;
            margin: 20px 0;
            border-left: 4px solid #0047AB;
        }
        .next-steps {
            background-color: #e8f4ff;
            border-radius: 10px;
            padding: 25px;
            margin: 20px 0;
        }
        .bank-details {
            background-color: #fff3e0;
            border-radius: 10px;
            padding: 25px;
            margin: 20px 0;
        }
        .contact-info {
            background-color: #d4edda;
            border-radius: 10px;
            padding: 25px;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }
        table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        table td:first-child {
            font-weight: bold;
            color: #0047AB;
        }
        .reference-code {
            background-color: #0047AB;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            display: inline-block;
            margin: 10px 0;
        }
        ol {
            padding-left: 20px;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🙏 Thank You for Your Generosity!</h1>
            <p>Samson Ddungu Foundation</p>
        </div>

        <div class="content">
            <div class="thank-you">
                <h2>Dear {{ $donation->first_name }},</h2>
                <p>Your support will make a real difference in the lives of vulnerable communities in Uganda.</p>
            </div>

            <div class="details-card">
                <h2>📋 Donation Summary</h2>
                <div class="reference-code">
                    Reference: {{ $donation->reference_code }}
                </div>
                <table>
                    <tr>
                        <td>Amount:</td>
                        <td><strong>{{ $donation->formatted_amount }}</strong></td>
                    </tr>
                    <tr>
                        <td>Designation:</td>
                        <td>{{ $donation->designation_readable }}</td>
                    </tr>
                    <tr>
                        <td>Frequency:</td>
                        <td>{{ $donation->frequency_readable }}</td>
                    </tr>
                    <tr>
                        <td>Date Submitted:</td>
                        <td>{{ $donation->created_at->format('F j, Y') }}</td>
                    </tr>
                    <tr>
                        <td>Transaction ID:</td>
                        <td>{{ $donation->transaction_id }}</td>
                    </tr>
                </table>
            </div>

            <div class="next-steps">
                <h2>📝 What Happens Next</h2>
                <ol>
                    <li><strong>Contact from Country Director:</strong> Kisigula Martin will contact you within 24-48 hours at {{ $donation->phone }}</li>
                    <li><strong>Payment Verification:</strong> We'll verify your payment with the provided transaction ID</li>
                    <li><strong>Official Receipt:</strong> You'll receive an official donation receipt via email</li>
                    <li><strong>Impact Updates:</strong> We'll share how your donation is making a difference</li>
                </ol>
            </div>

            <div class="bank-details">
                <h2>🏦 Bank Details (For Reference)</h2>
                <p>If you haven't already made the payment, here are our official bank details:</p>
                <table>
                    <tr>
                        <td>UGX Account:</td>
                        <td><strong>3100110253</strong><br>Centenary Bank (Samson Ddungu Accounts)</td>
                    </tr>
                    <tr>
                        <td>USD Account:</td>
                        <td><strong>3100110258</strong><br>Centenary Bank (Samson Ddungu Accounts)</td>
                    </tr>
                    <tr>
                        <td>Mobile Money:</td>
                        <td><strong>+256 782 488 116</strong></td>
                    </tr>
                </table>
                <p><em>Please use your reference code (<strong>{{ $donation->reference_code }}</strong>) as payment reference.</em></p>
            </div>

            <div class="contact-info">
                <h2>📞 Need Immediate Assistance?</h2>
                <table>
                    <tr>
                        <td>Country Director:</td>
                        <td>Kisigula Martin</td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td>+256 782 488 116</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>director@samsondungufoundation.org</td>
                    </tr>
                    <tr>
                        <td>Website:</td>
                        <td>samsondungufoundation.org</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="footer">
            <p><strong>"Bringing Hope to Uganda Since 2012"</strong></p>
            <p>Samson Ddungu Foundation | Wakiso District, Central Uganda</p>
            <p>Registration No: 80034053198295</p>
            <p>This email was automatically generated. Please save your reference code for any inquiries.</p>
        </div>
    </div>
</body>
</html>
