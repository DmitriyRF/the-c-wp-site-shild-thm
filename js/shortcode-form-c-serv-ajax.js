(function ($) {
  var estimateForm, formSubmitBtn, formFileInput, formFileLabel, formPreloader;

  $(window).load(function () {

    estimateForm = $("#js-" + localize_data.action);
    formSubmitBtn = $("#form-shortcode-submit");
    formFileInput = $("#shortcodeFormFile");
    formFileLabel = $(".file-attacment-label u");
    formPreloader = $("#wrapper-ajax-loader");

    formSubmitBtn.click(form_ajax_request_response);
    //Change label when files chosen
    formFileInput.change(form_change_fileInput_label);
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
    formFileLabel.text(fileAttacmentLabel);
  }

  function form_ajax_request_response(e) {

    e.preventDefault();

    if (isRequiredFieldFilled()) {
      //add form data
      var ajaxFormData = new FormData(estimateForm[0]);
      //add field for wordpress nonce
      ajaxFormData.append("action", localize_data.action);

      // add files
      // var formFiles = formFileInput[0].files;
      // for (let i = 0; i < formFiles.length; i++) {
      //   ajaxFormData.append('shortcodeFormFile[]', formFiles[i]);
      // }

      formPreloader.css("display", "block");
      estimateForm.css("opacity", "0.7");

      $.ajax({
        url: localize_data.ajax_url,
        type: "post",
        data: ajaxFormData,
        processData: false,
        contentType: false,
        cache: false
      })
        .done(function (jqDATA) {
          console.log('Done ajax request for quick estimate form');
          // console.log(jqDATA);
          gtag('event', 'Submit - Contact', {
            'event_category': 'Quick - Contact',
            'event_label': 'Short - Contact - Form'
          });


        })

        .fail(function (jqXHR) {
          console.log('Fail ajax request for quick estimate form');
          // console.log(jqXHR);
        })

        .always(function (e) {
          formPreloader.css("display", "none");
          estimateForm
            .css("opacity", "1")
            .find("input, textarea")
            .filter(":not([type='submit'])")
            .filter(":not([type='hidden'])")
            .filter(':visible')
            .val("");
          formFileLabel.text("ATTACH DOCUMENTS");
        });
    }
  }

  function isRequiredFieldFilled() {
    var result = true;
    estimateForm
      .find("input:not([type='submit']), textarea")
      .filter('[required]:visible')
      .each(function (i, requiredField) {

        if ($(requiredField).val() == '') {
          $(requiredField).css("background-color", "#840808");
          $(requiredField).keydown(requiredFieldFilled);
          result = false;
        } else if ($(requiredField)[0].type == 'email') {
          var email = $(requiredField).val();
          if (!validateEmail(email)) {
            //$(requiredField).val(email + " is not valid E-mail");
            $(requiredField).css("background-color", "#840808");
            $(requiredField).keydown(requiredFieldFilled);
            result = false;
          }
        }

      });

    return result;
  }

  function requiredFieldFilled() {
    $(this).css("background-color", "#464646");
    $(this).unbind("keydown", requiredFieldFilled);
  }

  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

})(jQuery);
