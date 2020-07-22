<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@include('components.head')

<link rel="js/printReceipt.js" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->
<div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <!--
                        <a target="_blank" href="https://lobianijs.com">
                        
                        <img src="C:\laragon\www\blog\public\images\img1\companylogo.png" data-holder-rendered="true" />        
                    </a>     
                    </div>
-->
</div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="">
                            Logitech Base
                            </a>
                        </h2>
                        <div>Taman Puncak Jalil, Kuala Lumpur Malaysia</div>
                        <div>+60 122 906674</div>
                        <div>logitechbase@gmail.com</div>
                    </div>
                </div>
            </header>
            <main>
                <br>
                <br>
                <div class = "container">
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to">{{ Auth::user()->name }}</h2>
                        <div class="address">796 Silver Harbour, TX 79273, US</div>
                        <div class="email"><a href="mailto:john@example.com">{{ Auth::user()->email }}</a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE 3-2-1</h1>
                        <div class="date">Date of Invoice: 01/10/2018</div>
                        <div class="date">Due Date: 30/10/2018</div>
                    </div>
                </div>
               
                <div class="card-body">
                    
                <table class = "table table-striped">
                <thead>
                <tr>

                    <th>id</th>
                    <th>agency</th>
                    <th>package</th>
                    <th>price</th>
                    <th>flight</th>
                    <th>Task</th>
                    
                
                    </tr>
                </thead>
                
                <tbody>
               
                <tr>

                    <td>{{ $umrah->id }}</td>
                    <td>{{ $umrah->agency }}</td>
                    <td>{{ $umrah->package }}</td>
                    <td>{{ $umrah->price }}</td>
                    <td>{{ $umrah->flight }}</td>

                    <td>

                    </td>


</tr>
</table>


                <div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div>
                
            </main>
            <footer>
                <p><center>Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>

@include('components.script') 

