(function ($) {
  $(window).load(function () {
    $("#submit-quote-form").click(form_ajax_request_response);
    //Change label when files chosen
    $("#estimateFile").change(form_change_fileInput_label);
    // grecaptcha.execute();
  });

  function form_change_fileInput_label() {
    switch (this.files.length) {
      case 0:
        var fileAttacmentLabel = "ATTACH DOCUMENTS";
        break;
      case 1:
        fileAttacmentLabel = this.files[0].name;
        break;
      default:
        fileAttacmentLabel = this.files.length + " DOCUMENTS";
    }
    $(".file-attacment-label u").text(fileAttacmentLabel);
  }

  function form_ajax_request_response(e) {
    alert('handler')
    e.preventDefault();
    var quoteForm = $("#quote_form");

    var ajaxFormData = new FormData(quoteForm[0]);

    ajaxFormData.append("action", localize_data.action);

    console.log('ajaxFormData', ajaxFormData);

    $("#wrapper-ajax-loader-full").css("display", "block");
    $("#quote_form").css("opacity", "0.7");

    $.ajax({
      url: localize_data.ajax_url,
      type: "post",
      data: ajaxFormData,
      processData: false,
      contentType: false,
      cache: false
    })
      .done(function (jqDATA) {
        console.log('done');
        console.log(jqDATA);
      })
      .fail(function (jqXHR) {
        console.log('fail');
        console.log(jqXHR);
      })
      .always(function (e) {
        $("#wrapper-ajax-loader-full").css("display", "none");
        $("#quote_form").css("opacity", "1").find("input[type=text], textarea").val("");
      });
  }
})(jQuery);
