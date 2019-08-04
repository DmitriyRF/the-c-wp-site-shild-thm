(function ($) {
  var estimateForm,
    formSubmitBtn,
    formFileInput,
    formFileLabel,
    formPreloader,
    responceMessage;

  $(window).load(function () {
    estimateForm = $("#quote_form");
    formSubmitBtn = $("#submit-quote-form");
    formFileInput = $("#estimateFile");
    formFileLabel = $(".file-attacment-label u");
    formPreloader = $("#wrapper-ajax-loader-full");
    responceMessage = $("#responce-message");

    formSubmitBtn.click(form_ajax_request_response);
    //Change label when files chosen
    formFileInput.change(form_change_fileInput_label);
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

      gRecaptchaResponse && ajaxFormData.append("gRecaptchaResponse", gRecaptchaResponse);

      estimateForm.find(':checkbox:checked, :radio:checked').each(function () {
        ajaxFormData.append(this.name, $(this).val());
      });

      // Display the key/value pairs
      // for (var pair of ajaxFormData.entries()) {
      //   console.log(pair[0] + ', ' + pair[1]);
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
          console.log('Done ajax request for quote form');
          console.log(jqDATA);

          quote_form_object && quote_form_object.gtagFunction && quote_form_object.gtagFunction();//from <sctipt /> tag, like global object

          responceMessage.css({ display: "block", opacity: 1 }).addClass(jqDATA.success ? 'thanks' : 'error');
          setTimeout(redirectToParent, 5555);

        })

        .fail(function (jqXHR) {
          console.log('Fail ajax request for quote form');
          console.log(jqXHR);
          responceMessage.css({ display: "block", opacity: 1 }).addClass('error');
          setTimeout(function reloadFromServer() {
            //reload from server
            document.location.reload(true)
          }, 5555);
        })
        .always(function (e) {
          formPreloader.css("display", "none");
          estimateForm.css("opacity", "1");
          clearingInputs();
        });
    }
  }

  function redirectToParent() {
    //redirect to location with url without last sublink (hight livel of link structure)
    window.location.replace(window.location.pathname.split('/').slice(0, -2).join('/'));
  }

  function isRequiredFieldFilled() {
    if (estimateForm) {

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
    return false;
  }

  function requiredFieldFilled() {
    $(this).css("background-color", "#464646");
    $(this).unbind("keydown", requiredFieldFilled);
  }

  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  function clearingInputs() {

    estimateForm
      .find("textarea")
      .val("");

    estimateForm
      .find("input")
      .filter(function () {
        var type = $(this)[0].type;
        return (
          type == 'text' ||
          type == 'tel' ||
          type == 'email' ||
          type == 'file'
        );
      })
      .filter(':visible')
      .val("");

    estimateForm
      .find("input")
      .filter(':checked')
      .filter(':visible')
      .attr("checked", false);

    formFileLabel.text("ATTACH DOCUMENTS");

  }

})(jQuery);



(function ($) {

  $(window).load(function () {
    $("input").filter('[data-text-required]').each(
      // to hook whole radio input to handler onChange
      // we take the name and add them to onChage listener
      function (index, input) {
        var radioElement = $(input);
        var radioName = radioElement.attr('name');
        var radioGroup = $('input[name=' + radioName + ']');
        radioGroup.change(use_text_input.bind(radioGroup, radioElement.data('textRequired')));
      }
    );
  });

  function use_text_input(textRequiredName) {

    var elementWithLink = this.filter('[data-text-required]');

    if (elementWithLink.attr('checked')) {
      $('input[name=' + textRequiredName + ']')
        .attr({ required: true, disabled: false })
        .addClass('input-must-be-filled')
        .focus();
    } else {
      $('input[name=' + textRequiredName + ']')
        .attr({ required: false, disabled: true })
        .removeClass('input-must-be-filled')
        .val('');
    }
  }


})(jQuery);



(function ($) {

  $(window).load(function () {
    var allInputNamesThanHasDynamicAttr = [], uniqueRatioGroupNames = [];

    $("input").filter('[data-dynamic]').each(function (index, input) {
      allInputNamesThanHasDynamicAttr.push(input.name);
    });
    uniqueRatioGroupNames = allInputNamesThanHasDynamicAttr.unique()

    uniqueRatioGroupNames.forEach(function (name) {
      // to hook whole Input input to handler onChange
      // we use the name and add them to onChage listener
      var inputGroup = $('input[name=' + name + ']');
      var allIdsToManage = [];

      inputGroup.filter('[data-dynamic]').each(function (index, input) {
        var arrayOfIdOfOneInput = $(input).data('dynamic');
        allIdsToManage = allIdsToManage.concat(arrayOfIdOfOneInput);
      });

      inputGroup.change(update_visibility_of_content.bind(inputGroup, allIdsToManage));
    });

    function update_visibility_of_content(allIdsToManage) {
      var allInputsInGroup = this;
      var checkedInput = allInputsInGroup.filter(':checked');
      var elementIdsToShow = checkedInput.data('dynamic');

      allIdsToManage.forEach(function hideEveryElementWithId(elementId) {
        $(elementId).hide(300);
      });

      if (Array.isArray(elementIdsToShow)) {
        elementIdsToShow.forEach(function showEveryElementWithId(elementId) {
          $(elementId).show(300);
        });
      }

    }

  });
})(jQuery);

(function ($) {

  $(window).load(function () {

  });

})(jQuery);


// (function ($) {

//   $(window).load(function () {});

// })(jQuery);



Array.prototype.unique = function () {
  var a = this.concat();

  for (var i = 0; i < a.length; ++i) {
    for (var j = i + 1; j < a.length; ++j) {
      if (a[i] === a[j])
        a.splice(j--, 1);
    }
  }

  return a;
}
