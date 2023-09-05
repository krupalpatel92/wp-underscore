(function ($) {
  wp.customize("phone_number", function (value) {
    value.bind(function (to) {
      $("#contactNumber a, #contactNumberOnPage a").text(to);
    });
  });
  wp.customize("fax_number", function (value) {
    value.bind(function (to) {
      $("#faxNumber").text(to);
    });
  });
  wp.customize("custom_site_logo", function (value) {
    value.bind(function (to) {
      $("#siteLogo img").attr("src", to);
    });
  });
  wp.customize("address_info", function (value) {
    value.bind(function (to) {
      $("#companyAddress").html(to);
    });
  });
})(jQuery);
