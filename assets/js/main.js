$(document).ready(function(){
  var bith = $('input[name="bith"]').attr('placeholder');
  var expired = $('input[name="expred"]').attr('placeholder');
  $('input[name="bith"]').mask("99/99/9999", {placeholder: bith });
  $('input[name="expred"]').mask("99/9999", {placeholder: expired });
});

$('input[name="phone"]').keyup(function(e) {
      if (/\D/g.test(this.value))
      {
        this.value = this.value.replace(/\D/g, '');
      }
    });


function isNumberKey(evt)
{
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;

   return true;
}

$('#ssn1').keyup(function() {
          var val = this.value.replace(/\D/g, '');
          var newVal = '';
          if(val.length > 4) {
             this.value = val;
          }
          if((val.length > 3) && (val.length < 6)) {
             newVal += val.substr(0, 3) + '-';
             val = val.substr(3);
          }
          if (val.length > 5) {
             newVal += val.substr(0, 3) + '-';
             newVal += val.substr(3, 2) + '-';
             val = val.substr(5);
           }
           newVal += val;
           this.value = newVal.substring(0, 11);
});

$('#ssn2').keyup(function() {
          var val = this.value.replace(/\D/g, '');
          var newVal = '';
          if(val.length > 4) {
             this.value = val;
          }
          if((val.length > 3) && (val.length < 6)) {
             newVal += val.substr(0, 3) + '-';
             val = val.substr(3);
          }
          if (val.length > 5) {
             newVal += val.substr(0, 3) + '-';
             newVal += val.substr(3, 2) + '-';
             val = val.substr(5);
           }
           newVal += val;
           this.value = newVal.substring(0, 11);
});


