(function($) {
  $(window).load(function() {
    $("#submit-estimate").click(form_ajax_request_response);
    //Change label when files chosen
    $("#estimateFile").change(form_change_fileInput_label);
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
    e.preventDefault();
    var estimateForm = $("#js-form-estimate");

    var ajaxFormData = new FormData(estimateForm[0]);

    ajaxFormData.append("action", localize_data.action);

    $.ajax({
      url: localize_data.ajax_url,
      type: "post",
      data: ajaxFormData,
      processData: false,
      contentType: false,
      cache: false
    })
      .done(function(jqDATA) {
        console.log(jqDATA);
      })
      .fail(function(jqXHR) {
        console.log(jqXHR);
      })
      .always(function(e) {});
  }
})(jQuery);
