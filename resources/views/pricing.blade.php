@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <img src="/images/banner.jpg" alt="" class="img-fluid">
    </div>

    <div class="container">
        <h1 class="text-center">Pricing</h1>
        <p class="text-center">
            Tuition rates are for the full season including studio holidays, not by the number of classes in the year or month.
            <br>Tuition fees are paid monthly and your annual amount will be divided into <strong><u>10 installments</u></strong>. (September- June)
            <br>Tuition must be paid by automatic bank account debit or automatic credit card payment. Tuition will be charged to your debit/credit card account on file on the 5th day of each month (September- June.)
            <br>Registration- $35 per student or $50 for 2 or more students in a family due at time of registration.
        </p>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Total Class Length <small style="font-weight: normal;">price per family</small></th>
                <th scope="col">Monthly Tuition</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>.75-1hr</td><td>$75</td></tr>
            <tr><td>1.25hrs</td><td>$95</td></tr>
            <tr><td>1.5hrs</td><td>$105</td></tr>
            <tr><td>1.75hrs</td><td>$125</td></tr>
            <tr><td>2hrs</td><td>$140</td></tr>
            <tr><td>2.25hrs</td><td>$150</td></tr>
            <tr><td>2.5hrs</td><td>$160</td></tr>
            <tr><td>2.75hrs</td><td>$170</td></tr>
            <tr><td>3hrs</td><td>$180</td></tr>
            <tr><td>3.25hrs</td><td>$190</td></tr>
            <tr><td>3.5hrs</td><td>$200</td></tr>
            <tr><td>3.75hrs</td><td>$210</td></tr>
            <tr><td>4hrs</td><td>$220</td></tr>
            <tr><td>4.25hrs</td><td>$230</td></tr>
            <tr><td>4.5hrs</td><td>$240</td></tr>
            <tr><td>4.75hrs</td><td>$250</td></tr>
            <tr><td>5hrs</td><td>$260</td></tr>
            </tbody>
        </table>
<p class="text-center">Call for additional pricing beyond 5 hours per family</p>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Select all <td> elements within tables with the class 'table'
            const cells = document.querySelectorAll('table.table td');

            cells.forEach(td => {
                // Check if the content starts with '$'
                if (td.textContent.trim().startsWith('$')) {
                    // Parse the current cost, assuming it follows the '$'
                    let currentCost = parseFloat(td.textContent.trim().substring(1));
                    if (!isNaN(currentCost)) {
                        // Add 5 to the cost
                        currentCost += 5;
                        // Update the cell content with the new cost, formatted as a price
                        // td.textContent = `$${currentCost.toFixed(2)}`;
                        // Update the cell content with the new cost, without decimal places
                        td.textContent = `$${Math.round(currentCost)}`;
                    }
                }
            });
        });

    </script>

@endsection
