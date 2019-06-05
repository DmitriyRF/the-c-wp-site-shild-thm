(function ($) {
  $(function () {

    $(document).tooltip({

      items: ".radio_check-tooltips",
      content: function () {
        var element = $(this);
        var text = element.data('tooltipText');

        return "<span class='radio_check-tooltips_text'>" + text + "<span>";
      },
      position: {
        my: "center top",
        at: "center bottom",
        collision: "flip flip"
      },
      tooltipClass: 'c-serv-ui-toolTip-style'
    });

  })
})(jQuery);
