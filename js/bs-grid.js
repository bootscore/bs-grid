
// Accordion
document.querySelectorAll('.bs-accordion').forEach(function (accordion, i) {
  // Add dynamic id's to accordion
  accordion.querySelector(".accordion").id = "accordion_" + i;
  // Add dynamic data-bs-parent to accordion-collapse
  accordion.querySelector('.accordion-collapse').setAttribute("data-bs-parent", "#accordion_" + i);
});

document.querySelectorAll('.bs-accordion .accordion-item').forEach(function (item, i) {
  // Add dynamic id's to accordion-header
  item.querySelector(".accordion-header").id = "heading_" + i;
  // Add dynamic data-bs-target and aria-controls to accordion-button
  item.querySelector(".accordion-button").setAttribute("data-bs-target", "#accordion_collapse_" + i);
  item.querySelector(".accordion-button").setAttribute("aria-controls", "accordion_collapse_" + i);
  // Add dynamic id and aria-labelledby to accordion-collapse
  item.querySelector(".accordion-collapse").id = "accordion_collapse_" + i;
  item.querySelector(".accordion-collapse").setAttribute("aria-labelledby", "heading_" + i);
});


// Tabs  
document.querySelectorAll('.bs-tabs .nav.nav-tabs .nav-link').forEach(function (link, i) {
  // Add dynamic data-bs-target and aria-controls to nav-tabs
  link.setAttribute("data-bs-target", "#tab_content_" + i);
  link.setAttribute("aria-controls", "tab_content_" + i);
});

document.querySelectorAll('.bs-tabs .tab-content .tab-pane').forEach(function (pane, i) {
  // Add dynamic id and aria-labelledby to tab-content
  pane.id = "tab_content_" + i;
  pane.setAttribute("aria-labelledby", "tab_content_" + i);
});

// First item active
document.querySelector('.bs-tabs .nav-link:first-child').classList.add('active');
document.querySelector('.bs-tabs .tab-content .tab-pane:first-child').classList.add('show', 'active');





/*

jQuery(function ($) {

  // Accordion
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

  
  // Tabs  
  $('.bs-tabs .nav.nav-tabs .nav-link').each(function (i, e) {
    // Add dynamic data-bs-target and aria-controls to nav-tabs
    $(this).attr("data-bs-target", "#tab_content_" + i).attr("aria-controls", "tab_content_" + i);
  });

  $('.bs-tabs .tab-content .tab-pane').each(function (i, e) {
    // Add dynamic id and aria-labelledby to tab-content
    $(this).attr("id", "tab_content_" + i).attr("aria-labelledby", "tab_content_" + i);
  });

  // First item active
  $('.bs-tabs .nav-link:first-child').addClass('active');
  $('.bs-tabs .tab-content .tab-pane:first-child').addClass('show active');

}); // jQuery End
*/