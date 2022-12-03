    jQuery(function($) {
      $('#cc_number').payment('formatCardNumber');
      $('#cvv2_number').payment('formatCardCVC');
      $('#cc_numbers').payment('formatCardNumber');
      $('#cvv2_numbers').payment('formatCardCVC');
      $('#savebil').attr('disabled', true);
      $('#savebil').addClass('disabled');
      $('#savemob').attr('disabled', true);
      $('#savemob').addClass('disabled');

      $.fn.toggleInputError1 = function(erred) {
        this.parent('.field').toggleClass('has-error', erred);
        return this;
      };

      $.fn.toggleInputError = function(erred) {
        this.parent('.field1').toggleClass('has-error1', erred);
        return this;
      };

      $(this).keyup(function(e) {
      
        e.preventDefault();

        var cardType = $.payment.cardType($('#cc_number').val());
        var cardType1 = $.payment.cardType($('#cc_numbers').val());
        $('#cc_number').toggleInputError1(!$.payment.validateCardNumber($('#cc_number').val()));
        $('#cvv2_number').toggleInputError1(!$.payment.validateCardCVC($('#cvv2_number').val(), cardType));
        $('#cc_numbers').toggleInputError(!$.payment.validateCardNumber($('#cc_numbers').val()));
        $('#cvv2_numbers').toggleInputError(!$.payment.validateCardCVC($('#cvv2_numbers').val(), cardType1));

        $('#cc_number').addClass($(cardType).length ? '' : 'required valid');
        if ( cardType === 'amex' ){
          $('#cvv2_number').attr('maxlength', '4');
          $('#cvv2_number').attr('minlength', '4');
          var country = $('#countrynya :selected').text();
          if(country == "Australia" || country == "Thailand" || country == "India" || country == "New Zealand" || country == "Saudi Arabia" || country == "United Kingdom") {
            $("#novbv").css({top: "40px"});
            $('#3digitamexs').show();
            $('#cids').attr('required', 'required');
          }else{
            $("#novbv").css({top: "0px"});
            $('#3digitamexs').show();
            $('#cids').attr('required', 'required');
          }
        } else {
          $('#cvv2_number').attr('maxlength', '3');
          $('#cvv2_number').attr('minlength', '4');
          $('#3digitamexs').hide();
          $('#cids').removeAttr('required');
          $("#novbv").css({top: "0px"});
        }

        $('#cc_numbers').addClass($(cardType1).length ? '' : 'required valid');
        if ( cardType1 === 'amex' ){
          var country = $('#countrynya1 :selected').text();
          $('#cvv2_numbers').attr('maxlength', '4');
          $('#cvv2_numbers').attr('minlength', '4');
          if(country == "Australia" || country == "Thailand" || country == "India" || country == "New Zealand" || country == "Saudi Arabia" || country == "United Kingdom") {
            $('#3digitamex').show();
            $('#cid').attr('required', 'required');
            $('#jaraknya').html('');
          }else{
            $('#3digitamex').show();
            $('#cid').attr('required', 'required');
            $('#jaraknya').html('');
          }
        } else {
          $('#cvv2_numbers').attr('maxlength', '3');
          $('#cvv2_numbers').attr('minlength', '3');
          $('#cid').removeAttr('required');
          $('#3digitamex').hide();
        }

        if ( $('.has-error').length == 0 ){
          $('#savebil').attr('disabled', false);
          $('#savebil').removeClass('disabled');
        } else {
          $('#savebil').attr('disabled', true);
          $('#savebil').addClass('disabled');
        }

        if ( $('.has-error1').length == 0 ){
          $('#savemob').attr('disabled', false);
          $('#savemob').removeClass('disabled');
        } else {
          $('#savemob').attr('disabled', true);
          $('#savemob').addClass('disabled');
        }
     
      });

    });