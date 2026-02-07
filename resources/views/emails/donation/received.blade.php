{{-- resources/views/emails/donation/received.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Donation Received</title>
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
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            padding: 20px;
        }
        .donation-details {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border-left: 4px solid #0047AB;
        }
        .donor-info {
            background-color: #e8f4ff;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }
        .action-required {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 10px;
            padding: 20px;
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
        .highlight {
            background-color: #fff3cd;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🆕 New Donation Information Received</h1>
            <p>Samson Ddungu Foundation</p>
        </div>

        <div class="content">
            <div class="action-required">
                <h2>⚠️ Action Required</h2>
                <p>Please contact the donor to confirm receipt of funds and provide further guidance.</p>
                <p><strong>Contact Country Director Kisigula Martin immediately at +256 782 488 116</strong></p>
            </div>

            <div class="donor-info">
                <h2>👤 Donor Information</h2>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td>{{ $donation->first_name }} {{ $donation->last_name }}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{{ $donation->email }}</td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td>{{ $donation->phone }}</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>{{ $donation->address ?? 'Not provided' }}</td>
                    </tr>
                </table>
            </div>

            <div class="donation-details">
                <h2>💰 Donation Details</h2>
                <div class="highlight">
                    Reference Code: <strong>{{ $donation->reference_code }}</strong>
                </div>
                <table>
                    <tr>
                        <td>Amount:</td>
                        <td><strong>{{ $donation->formatted_amount }}</strong></td>
                    </tr>
                    <tr>
                        <td>Payment Method:</td>
                        <td>{{ $donation->payment_method_readable }}</td>
                    </tr>
                    <tr>
                        <td>Transaction ID:</td>
                        <td>{{ $donation->transaction_id }}</td>
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
                        <td>{{ $donation->created_at->format('F j, Y \a\t g:i A') }}</td>
                    </tr>
                </table>
            </div>

            @if($donation->message)
            <div class="donation-details">
                <h2>📝 Donor Message</h2>
                <p>{{ $donation->message }}</p>
            </div>
            @endif

            <div class="donation-details">
                <h2>⚡ Quick Actions</h2>
                <p>📞 <a href="tel:{{ $donation->phone }}">Call Donor: {{ $donation->phone }}</a></p>
                <p>✉️ <a href="mailto:{{ $donation->email }}?subject=Confirmation%20of%20Your%20Donation%20{{ $donation->reference_code }}">Email Donor</a></p>
                <p>📱 <a href="https://api.whatsapp.com/send?phone={{ $donation->phone }}&text=Hello%20{{ urlencode($donation->first_name) }}%2C%20thank%20you%20for%20your%20donation%20{{ $donation->reference_code }}%20to%20Samson%20Ddungu%20Foundation.%20We%20will%20contact%20you%20shortly.">WhatsApp Message</a></p>
            </div>
        </div>

        <div class="footer">
            <p><strong>Samson Ddungu Foundation</strong></p>
            <p>Wakiso District, Central Uganda</p>
            <p>Phone: +256 782 488 116 | Email: director@samsondungufoundation.org</p>
            <p>Registration No: 80034053198295</p>
            <p>This email was automatically generated. Please do not reply to this email.</p>
        </div>
    </div>
</body>
</html>
