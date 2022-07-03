jQuery(function ($) {

  // Add dynamic id's to isotope modal
  $('.bs-accordion .accordion-item').each(function (i, e) {
    // Add dynamic data-bs-target triggers to cards 
    //$(this).find(".accordion-header").attr("id", "id_" + i);
    
    $(this).find(".accordion-header").attr("id", "heading_" + i);
    // Add dynamic data-bs-target to accordion-button
    $(this).find(".accordion-button").attr("data-bs-target", "#id_" + i).attr("aria-controls", "#id_" + i);
    // Add dynamic id to accordion-collapse
    $(this).find(".accordion-collapse").attr("id", "id_" + i).attr("aria-labelledby", "heading_" + i);
    // Add dynamic id's to modals
    //$(this).find(".modal").attr("id", "id_" + i);
  });

}); // jQuery End




/*
jQuery(function ($) {

  // Add dynamic id's to isotope modal
  $('.bs-accordion .accordion-item').each(function (i, e) {
    // Add dynamic data-bs-target triggers to cards 
    $(this).find(".card").attr("data-bs-target", "#id_" + i);
    // Add dynamic id's to modals
    $(this).find(".modal").attr("id", "id_" + i);
  });

}); // jQuery End
*/