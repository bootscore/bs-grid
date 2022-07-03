jQuery(function ($) {

  // Add dynamic id's to accordion
  $('.bs-accordion').each(function (i, e) {
    // Add dynamic id's to accordion
    $(this).find(".accordion").attr("id", "accordion_" + i);
    // Add dynamic data-bs-parent to accordion-collapse
    $(this).find('.accordion-collapse').attr("data-bs-parent", "#accordion_" + i);
  });

  $('.bs-accordion .accordion-item').each(function (i, e) {
      // Add dynamic id's to accordion-header
    $(this).find(".accordion-header").attr("id", "heading_" + i);
    // Add dynamic data-bs-target and aria-controls to accordion-button
    $(this).find(".accordion-button").attr("data-bs-target", "#accordion_collapse_" + i).attr("aria-controls", "#accordion_collapse_" + i);
    // Add dynamic id and aria-labelledby to accordion-collapse
    $(this).find(".accordion-collapse").attr("id", "accordion_collapse_" + i).attr("aria-labelledby", "heading_" + i);
  });

}); // jQuery End
