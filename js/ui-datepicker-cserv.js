(function ($) {
  $(function () {
    $(".input-datepicker-installation").datepicker({
      showButtonPanel: false,
      showWeek: true,
      firstDay: 1,
      dateFormat: "dd - mm - yy",
      showAnim: "fadeIn",
      minDate: 0,
      maxDate: "+6M"
    });
    $(".input-datepicker-installation")
      .datepicker("option", "numberOfMonths", window.innerWidth > 600 ? 2 : 1);
  });
})(jQuery);
