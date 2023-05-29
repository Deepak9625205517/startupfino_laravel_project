@php

$MERCHANT_KEY = "2Hckej"; // add your id
$SALT = "CaIrEvI5"; // add your id

//$PAYU_BASE_URL = "https://test.payu.in";
$PAYU_BASE_URL = "https://secure.payu.in";
$action = '';
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$posted = array();
$posted = array(
    'key' => $MERCHANT_KEY,
    'txnid' => $data['trnsid'],
    'amount' => $data['price'],
    'firstname' => Auth::user() ? Auth::user()->name : $data['name'],
    'email' => Auth::user() ? Auth::user()->email : $data['email'],
    'productinfo' => 'PHP Project Subscribe',
    'surl' => route('payumoney-success'),
    'furl' => route('payumoney-cancel'),
    'service_provider' => 'payu_paisa',
);

if(empty($posted['txnid'])) {
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} 
else 
{
    $txnid = $posted['txnid'];
}
$hash = '';
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
    $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
    foreach($hashVarsSeq as $hash_var) {
        $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
        $hash_string .= '|';
    }
    $hash_string .= $SALT;

    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
} 
elseif(!empty($posted['hash'])) 
{
    $hash = $posted['hash'];
    $action = $PAYU_BASE_URL . '/_payment';
}

  

@endphp
<html>
  <head>
  <script>
    var hash = '{{$hash}} ';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
           payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    Processing.....
        <form action="{{$action}}" method="post" name="payuForm"><br />
            <input type="hidden" name="key" value="{{$MERCHANT_KEY }}" /><br />
            <input type="hidden" name="hash" value="{{ $hash }}"/><br />
            <input type="hidden" name="txnid" value="{{ $txnid }}" /><br />
            <input type="hidden" name="amount" value="{{$data['price']}}" /><br />
            <input type="hidden" name="firstname" id="firstname" value="{{Auth::user() ? Auth::user()->name : $data['name']}}" /><br />
            <input type="hidden" name="email" id="email" value="{{Auth::user() ? Auth::user()->email : $data['email']}}" /><br />
            <input type="hidden" name="productinfo" value="PHP Project Subscribe"><br />
            <input type="hidden" name="surl" value="{{route('payumoney-success')}}" /><br />
            <input type="hidden" name="furl" value="{{route('payumoney-cancel')}}" /><br />
            <input type="hidden" name="service_provider" value="payu_paisa"  /><br />
            <?php
            if(!$hash) { ?>
                <input type="submit" value="Submit" />
            <?php } ?>
        </form>
  </body>
</html>