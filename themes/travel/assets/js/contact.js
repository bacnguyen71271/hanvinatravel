'use strict';
jQuery(document).ready(function() {
  $.validator.addMethod(
    "email",
    function(value, element) {
     
      var re = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            return this.optional(element) || re.test(value);
          },
          'Email này  không hợp lệ'
  );
  $.validator.addMethod (
      "required",
      function(value, element) {
        return ($.trim(value) != '');
      },
      'Không được bỏ trống!'
    );

    /*=========== Form validate ===========*/
    
    $('.form_contact').validate({
        rules: {
            name: {
                required: true,
            },
            phone: {
              required: true,
              minlength: 10,
              maxlength:10,
              number:true,
            },
            email: {
                required: true,
                 email: true,
            },
        },
        messages: {
           name: {
                required: "Họ tên không được để trống",
           },
           phone: {
                required: "Số điện thoại không được để trống",
                number : "Số điện thoại không đúng",
                minlength: "Số điện thoại không đúng",
                maxlength: "Số điện thoại không đúng",
           },
           email: {
                required: "Email không được để trống",
                email:"Email không đúng định dạng"
           },
        }
    });



  $(document).on('submit', '.form_contact', function(event) {
    event.preventDefault();
    $(this).find('#submit').css('display','none');
    $('#loadding-page').css('display','block');
    $.request('contact::onCreateData', {
      data: {
        name: $('#f_name').val(),
        email: $('#f_email').val(),
        phone: $('#f_phone').val(),
        content: $('#f_content').val(),
        
      },
      success: function(res) {
        $('form').find('#submit').css('display','block');
        $('#loadding-page').css('display','none');
        alert("Cảm ơn quý khách đã quan tâm đến hành trình của HanVina Travel.\n Nhân viên tư vẫn của Chúng tôi sẽ liên hệ ngay với Quý khách.");
        $('form').trigger("reset");
       
      },
      error : function () { 
        $('form').find('#submit').css('display','block');
        $('#loadding-page').css('display','none');
        alert("Có lỗi vui lòng thử lại sau");
      }
    });
    return true;
  });
 });