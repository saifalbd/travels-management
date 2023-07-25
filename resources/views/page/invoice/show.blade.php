
<html>
<head>
    <meta charset="utf-8">
    <title>::: Report Builder :::</title>
    <link href="/assets/css/print.css" rel="stylesheet" />

</head>
<body>
<!-- Print Button -->
<div class="bt-div">
    <INPUT TYPE="button" class="button blue" title="Print" onClick="window.print()" value="Print">
    <button class="button blue" onClick="goBack()">Back </button>
</div>
<!-- Print Button End --><div class="wraper">
    <table width="100%" border="0">
        <tr>
            <td width="8%" align="left" valign="top"><img src="{{comInfo('avatar')->url}}"  height="64" alt=""  ></td>
            <td width="76%" align="left" valign="top"> <h2 style="margin:0;"> {{comInfo('institute')}}
                </h2>
                <h4 style="margin:0;">Address: {{comInfo('address')}}</h4>
                <h4 style="margin:0;">Mobile: {{comInfo('email')}}</h4></td>
            <td width="16%" align="center" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td valign="top" nowrap="NOWRAP"><em>INVOICE</em></td>
                        <td align="center" valign="top" nowrap><em>: </em></td>
                        <td nowrap  ><strong><em> {{$inv->id}}</em> </em></strong></td>
                    </tr>
                    <tr>
                        <td width="22%" valign="middle" nowrap="NOWRAP"><em>Date</em></td>
                        <td width="15%" align="center" valign="middle" nowrap><em>: </em></td>
                        <td width="63%" valign="middle" nowrap  ><strong><em>
                                    {{format($inv->date)}}            </em></strong></td>
                    </tr>
                </table></td>
        </tr>
    </table>
    <hr>
    <h3 align="center"><br>
        <span class="style2">INVOICE  </span><br><br>
    </h3>
    <table width="100%" border="0" cellpadding="0">
        <tr>
            <td width="12%" align="left" nowrap scope="col">Customer Name:</td>
            <th width="88%" align="left" scope="col">{{$inv->customer_name}}</th>
        </tr>
        <tr>
            <td align="left" nowrap scope="col">Address: </td>
            <th align="left" scope="col">{{$inv->address}}</th>
        </tr>
        <tr>
            <td align="left" nowrap scope="col">Mobile: </td>
            <th align="left" scope="col">{{$inv->mobile}}</th>
        </tr>
    </table>
    <br>
    <table width="100%" border="1" cellpadding="0" cellspacing="0" class="RFtable">
        <tr>
            <th align="center" scope="col"><strong>SL. NO.</strong> </th>
            <th scope="col">Product Name </th>
            <th scope="col">Qty. </th>
            <th align="right" scope="col">Rate </th>
            <th align="right" scope="col">Amount</th>
        </tr></thead>
        <tbody>
        @foreach($inv->details as $key=>$d)
        <tr>
            <td align="center" class="bn-font">{{$key+1}}</td>
            <td scope="col"> {{$d->description}} </td>
            <td align="center" scope="col"> {{$d->qty}} </td>
            <td align="right" scope="col"> {{$d->rate}} </td>
            <td align="right" scope="col"> {{$d->amount}} </td>
        </tr>
        @endforeach






        <tr>
            <td align="center" class="bn-font">&nbsp;</td>
            <td scope="col">&nbsp;</td>
            <td scope="col">&nbsp;</td>
            <td align="right" scope="col"><strong>Total: </strong></td>
            <td align="right" scope="col">{{$inv->total}}</td>
        </tr>
        <tr>
            <td align="center" class="bn-font">&nbsp;</td>
            <td scope="col">&nbsp;</td>
            <td scope="col">&nbsp;</td>
            <td align="right" scope="col"><strong>Paid: </strong></td>
            <td align="right" scope="col">{{$inv->paid}}</td>
        </tr>
        <tr>
            <td align="center" class="bn-font">&nbsp;</td>
            <td scope="col">&nbsp;</td>
            <td scope="col">&nbsp;</td>
            <td align="right" scope="col"><strong>Due: </strong></td>
            <td align="right" scope="col">{{$inv->due}}</td>
        </tr>
        </tbody>
        
    </table>

    <!---- SUB TABLE END---------->


    <br>
    <strong>Remark:</strong> {{$inv->remark}}
    <br>
    <br>
    <br><br>
    <table width="80%" border="0" align="center">
        <tr align="center">
            <td width="33%" scope="col">
                <p>&nbsp;</p>
                <p><hr>  Customer Signature </p></td>
            <td width="33%" valign="bottom" scope="col">&nbsp;</td>
            <td width="33%" valign="bottom" scope="col"><hr> Authorized Signature </td>
        </tr>
    </table>
    <br>
    <hr>
    <center>
        <samp style="font-size: 8px; "> SOFTWARE: exploreit.com.bd | Printing @: 2023-06-19 03:29:07pm </samp>
    </center>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
