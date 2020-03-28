$(function() {
  var action = "";
  var form_data = "";
  $("#login").click(function() {
    $("#username").prop("disabled", true);
    $("#password").prop("disabled", true);
    action = $("#loginform").attr("action");
    form_data = {
      username: $("#username").val(),
      password: $("#password").val(),
    };
    $("#login").keypress(function(e) {
      if (e.which == 13) {
        //Enter key pressed
        $("#login").click();
      }
    });
    $.ajax({
      type: "POST",
      url: "?base=misc&script=login",
      data: form_data,
      dataType: "json",
      success: function(response) {
        if (response["response"] == "success") {
          $("#loginform").slideUp("slow", function() {
            $("#message").html(
              '<script>location.reload();</script><div class="alert alert-success">Logged in. Reloading...</div>'
            );
          });
        } else {
          $("#username").prop("disabled", false);
          $("#password").prop("disabled", false);
          $("#message")
            .hide()
            .html(
              '<br/><div class="alert alert-danger">Wrong username or password</div>'
            )
            .fadeIn("fast");
        }
      }
    });
    return false;
  });
});
