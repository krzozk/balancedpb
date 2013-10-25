

<script src="https://checkout.stripe.com/v2/checkout.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>

  <button id="customButton">Purchase</button>

  <script>
$('#customButton').click(function(){
    var token = function(res){
        var $input = $('<input type=hidden name=stripeToken />').val(res.id);
        $('form').append($input).submit();
    };

    StripeCheckout.open({
        key:         'pk_test_u7Yces86639pssqy4sHp9Yry',
        address:     true,
        amount:      5000,
        currency:    'usd',
        name:        'Joes Pistachios',
        description: 'A bag of Pistachios',
        panelLabel:  'Checkout',
        token:       token
      });

      return false;
    });
  </script>
