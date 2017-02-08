(function() {
  $(document).ready(function() {
    $('#find_username').bind('blur', function() {
      return $.ajax({
        type: "POST",
        url: "/valid_username",
        data: {
          username: $(this).val()
        },
        success: function(data) {
          if (data.status === 404) {
            $('#username_message').html('<div class="red right">*Username sudah digunakan</div>');
          } else {
            $('#username_message').html('<div class="green right">Username tersedia</div>');
          }
          return false;
        },
        error: function(data) {
          return false;
        }
      });
    });
    $('#find_email').bind('blur', function() {
      return $.ajax({
        type: "POST",
        url: "/valid_email",
        data: {
          email: $(this).val()
        },
        success: function(data) {
          if (data.status === 404) {
            $('#email_message').html('<div class="red right">*Email telah digunakan</div>');
          } else if (data.status === 30) {
            $('#email_message').html('<div class="green right">*Email tidak valid</div>');
          } else {
            $('#email_message').html('<div class="green right">Email tersedia</div>');
          }
          return false;
        },
        error: function(data) {
          return false;
        }
      });
    });
    $('#check_password').bind('blur', function() {
      var password;
      password = $('#check_password').val();
      if (password.length < 6) {
        return $('#password_message').html('<div class="red right">*Minimum 6 karakter</div>');
      } else {
        console.log("tes");
        return $('#password_message div').remove();
      }
    });
    $('#check_password_confirmation').bind('blur', function() {
      var password, password_confirmation;
      password = $('#check_password').val();
      password_confirmation = $('#check_password_confirmation').val();
      if (password !== password_confirmation) {
        return $('#password_confirmation_message').html('<div class="red right">*Password tidak sesuai</div>');
      } else {
        return $('#password_confirmation_message div').remove();
      }
    });
    $("#agree").bind('click', function() {
      if ($(this).is(':checked')) {
        return $("#submit").removeAttr('disabled');
      } else {
        return $("#submit").attr('disabled', true);
      }
    });
    $("#save_shout").bind('click', function() {
      var message;
      $("#loading_shout").show();
      message = $("#shout_message").val();
      if (message.length > 0) {
        return $.ajax({
          type: "POST",
          url: "/shout",
          data: {
            message: message
          },
          success: function(data) {
            $("#loading_shout").hide();
            $("#cancel_shout").click();
            $("#active_status").text(message);
            $("#time_status").text("just now");
            return false;
          },
          error: function(data) {
            return false;
          }
        });
      } else {
        return false;
      }
    });
    $("#province_id").bind('change', function() {
      return $.ajax({
        type: "POST",
        url: "/choose_city",
        data: {
          province_id: $(this).val()
        },
        success: function(data) {
          var key, value;
          $("#regency_id option[value!='0']").remove();
          for (key in data) {
            value = data[key];
            $("#regency_id").append("<option value='" + value.id + "'> " + value.regency_name + " </option>");
          }
          return false;
        },
        error: function(data) {
          return false;
        }
      });
    });
    return $("#change_background").bind('click', function() {
      var img_background;
      img_background = $('input[id=img_background]:checked', '#form_background_picture').val();
      $("#loading_cover").show();
      return $.ajax({
        type: "POST",
        url: '/upload_background',
        data: {
          image_cover: img_background
        },
        dataType: 'json',
        success: function(data) {
          return location.reload();
        },
        error: function(data) {
          return false;
        }
      });
    });
  });

}).call(this);
// This is a manifest file that'll be compiled into application.js, which will include all the files
// listed below.
//
// Any JavaScript/Coffee file within this directory, lib/assets/javascripts, vendor/assets/javascripts,
// or any plugin's vendor/assets/javascripts directory can be referenced here using a relative path.
//
// It's not advisable to add code directly here, but if you do, it'll appear at the bottom of the
// compiled file.
//
// Read Sprockets README (https://github.com/sstephenson/sprockets#sprockets-directives) for details
// about supported directives.
//



$(document).ready(function(){
    $("#news").click(function(){
        $(".news").show();
        $(".comment").hide();
        $(".rubiknews").hide();
        $(".myrubik").hide();
        $(".feedrubik").hide();
        $(".hotthread").hide();
        $(".mythread").hide();
        $(".timelines").hide();

        $("#news").addClass("active");
        $("#comment").removeClass("active");
        $("#rubiknews").removeClass("active");
        $("#myrubik").removeClass("active"); 
        $("#feedrubik").removeClass("active");
        $("#hotthread").removeClass("active");
        $("#mythread").removeClass("active");
        $("#timelines").removeClass("active");
    }); 

    $("#comment").click(function(){
        $(".news").hide();
        $(".comment").show();
        $(".rubiknews").hide();
        $(".myrubik").hide();
        $(".feedrubik").hide();
        $(".hotthread").hide();
        $(".mythread").hide();
        $(".timelines").hide();

        $("#news").removeClass("active");
        $("#comment").addClass("active");
        $("#rubiknews").removeClass("active");
        $("#myrubik").removeClass("active"); 
        $("#feedrubik").removeClass("active");
        $("#hotthread").removeClass("active");
        $("#mythread").removeClass("active");
        $("#timelines").removeClass("active");
    }); 

    $("#rubiknews").click(function(){
        $(".news").hide();
        $(".comment").hide();
        $(".rubiknews").show();
        $(".myrubik").hide();
        $(".feedrubik").hide();
        $(".hotthread").hide();
        $(".mythread").hide();
        $(".timelines").hide();

        $("#news").removeClass("active");
        $("#comment").removeClass("active");
        $("#rubiknews").addClass("active");
        $("#myrubik").removeClass("active"); 
        $("#feedrubik").removeClass("active");
        $("#hotthread").removeClass("active");
        $("#mythread").removeClass("active");
        $("#timelines").removeClass("active");
    }); 

    $("#myrubik").click(function(){
        $(".news").hide();
        $(".comment").hide();
        $(".rubiknews").hide();
        $(".myrubik").show();
        $(".feedrubik").hide();
        $(".hotthread").hide();
        $(".mythread").hide();
        $(".timelines").hide();

        $("#news").removeClass("active");
        $("#comment").removeClass("active");
        $("#rubiknews").removeClass("active");
        $("#myrubik").addClass("active"); 
        $("#feedrubik").removeClass("active");
        $("#hotthread").removeClass("active");
        $("#mythread").removeClass("active");
        $("#timelines").removeClass("active");
    }); 

    $("#feedrubik").click(function(){
        $(".news").hide();
        $(".comment").hide();
        $(".rubiknews").hide();
        $(".myrubik").hide();
        $(".feedrubik").show();
        $(".hotthread").hide();
        $(".mythread").hide();
        $(".timelines").hide();

        $("#news").removeClass("active");
        $("#comment").removeClass("active");
        $("#rubiknews").removeClass("active");
        $("#myrubik").removeClass("active"); 
        $("#feedrubik").addClass("active");
        $("#hotthread").removeClass("active");
        $("#mythread").removeClass("active");
        $("#timelines").removeClass("active");
    }); 

    $("#hotthread").click(function(){
        $(".news").hide();
        $(".comment").hide();
        $(".rubiknews").hide();
        $(".myrubik").hide();
        $(".feedrubik").hide();
        $(".hotthread").show();
        $(".mythread").hide();
        $(".timelines").hide();

        $("#news").removeClass("active");
        $("#comment").removeClass("active");
        $("#rubiknews").removeClass("active");
        $("#myrubik").removeClass("active"); 
        $("#feedrubik").removeClass("active");
        $("#hotthread").addClass("active");
        $("#mythread").removeClass("active");
        $("#timelines").removeClass("active");
    }); 

    $("#mythread").click(function(){
        $(".news").hide();
        $(".comment").hide();
        $(".rubiknews").hide();
        $(".myrubik").hide();
        $(".feedrubik").hide();
        $(".hotthread").hide();
        $(".mythread").show();
        $(".timelines").hide();

        $("#news").removeClass("active");
        $("#comment").removeClass("active");
        $("#rubiknews").removeClass("active");
        $("#myrubik").removeClass("active"); 
        $("#feedrubik").removeClass("active");
        $("#hotthread").removeClass("active");
        $("#mythread").addClass("active");
        $("#timelines").removeClass("active");
    }); 

    $("#timelines").click(function(){
        $(".news").hide();
        $(".comment").hide();
        $(".rubiknews").hide();
        $(".myrubik").hide();
        $(".feedrubik").hide();
        $(".hotthread").hide();
        $(".mythread").hide();
        $(".timelines").show();

        $("#news").removeClass("active");
        $("#comment").removeClass("active");
        $("#rubiknews").removeClass("active");
        $("#myrubik").removeClass("active"); 
        $("#feedrubik").removeClass("active");
        $("#hotthread").removeClass("active");
        $("#mythread").removeClass("active");
        $("#timelines").addClass("active");
    }); 
    
   
    
});
