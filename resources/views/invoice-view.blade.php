<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReCeipt printer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .receipt {
            width: 58mm; /* Set the width for a 58mm printer */
            margin: 10px auto;
            padding: 10px;
            border: 1px solid #ccc;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            font-size: 12px; /* Adjust the font size */
        }

        .receipt-header {
            text-align: center;
            margin-bottom: 10px;
        }

        .receipt-info {
            margin-bottom: 10px;
        }

        .receipt-info p {
            margin: 3px 0;
        }

        @media print {
            /* Print-specific styles */
            body {
                font-size: 10px; /* Adjust font size for print */
            }

            .receipt {
                box-shadow: none;
                border: none;
                width: auto; /* Reset width for print */
                margin: 0;
                padding: 0;
            }
        }

    </style>
</head>
<body>
<div class="receipt">
        <h1>Receipt</h1>
        <div class="receipt-info">
            <p><strong>Invoice ID:</strong> {{-- $invoice->id --}}1</p>
            <p><strong>Customer Name:</strong> {{-- $invoice->customer_name --}} Lewys</p>
            <p><strong>Amount:</strong> ${{-- $invoice->amount --}}kes. 45,000/-</p>
            <p><strong>Served By:</strong> {{-- $invoice->customer_name --}} Lewys</p>

            <!-- Add more dynamic data as needed -->
        </div>

        <!-- Print button -->
        <button onclick="printReceipt()">Print Receipt</button>
    </div>

    <!-- JavaScript for printing -->
    <script>
        function printReceipt() {
            window.print(); // Trigger the browser's print functionality
        }
    </script>
</body>
</html>
