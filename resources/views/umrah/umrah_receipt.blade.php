<!doctype html>


@include('components.head2')
<html>


<head>
    <meta charset="utf-8">
    <title></title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>

    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0" date_default_timezone_set("Asia/Kuala_Lumpur")>
            <tr class="top">
                <td colspan="1">
                    <table>
                        <tr>
                            
                            
                        <h1 class="mb-0 site-logo m-0 p-0"><a href="{{route('main')}}" class="mb-0">E-JAWLAH</a></h1>
                        
                        The most efficient website for the customer
                        <br>
                        <br>
                        <br>
                            </td>
                            
                            
                            <td>
                            
                                Invoice #: 123<br>
                                Created: {{ date("Y/m/d") }}<br>
                                
                                Time: {{ date("h:i:sa") }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                            ZV-01-02, Zeva Boulevard.<br>
                            Persiaran Pinggiran Putra, Equine Park<br>
                            43300 Seri Kembangan, Selangor
                            </td>
                            @auth
                            <td>
                            {{ Auth::user()->name }}
                            <br>
                            {{ Auth::user()->fullname }}
                            <br>
                            {{ Auth::user()->email }}
                            <br>
                            {{ Auth::user()->address }}
                            <br>
                            {{ Auth::user()->tel }}
                            </td>
                            @endauth
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    
                </td>
            </tr>
            
            <tr class="details">
                <td>
                Banking
                </td>
                
                <td>
                   
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Price
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Package
                </td>
                
                <td>
                {{ $umrah->package }}
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Agency
                </td>
                
                <td>
                {{ $umrah->agency }}
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                   Flight
                </td>
                
                <td>
                {{ $umrah->flight }}
                </td>
            </tr>

            <tr class="item last">
                <td>
                   Date Booking
                </td>
                
                <td>
                
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                RM{{ $umrah->price }}
                </td>
            </tr>

            <tr class="total">
                <td></td>
                
                <td>
                <div class = "" align = "">
                <!--
            <a href = "{{route('cust.print', $umrah->id) }}" class = "btn btn-danger">Save to pdf</a>
            -->
            <button onclick="window.print()" class = "btn btn-danger">Print this page</button>
            
            </div>
            
                </td>
            </tr>
            <tr class="item">
                <td>
                   
                </td>
                
                <td>
                *please save the receipt for reference.
                Thank you
                </td>
                
            </tr>

           
        </table>
    
   
            </div>

          
</form>
</body>
</html>


