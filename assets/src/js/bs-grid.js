/*!
 * bs Grid
 * 
 * @version 5.4.0
 */


// Accordion
// Get all elements with the class 'bs-accordion'
var bsAccordions = document.querySelectorAll('.bs-accordion');

bsAccordions.forEach(function (accordion, i) {
  // Add dynamic id's to accordion
  var accordions = accordion.querySelectorAll('.accordion');
  accordions.forEach(function (acc) {
    acc.setAttribute('id', 'accordion_' + i);
  });

  // Add dynamic data-bs-parent to accordion-collapse
  var collapse = accordion.querySelectorAll('.accordion-collapse');
  collapse.forEach(function (coll) {
    coll.setAttribute('data-bs-parent', '#accordion_' + i);
  });
});

// Get all elements with the class 'bs-accordion' that contain '.accordion-item' elements
var bsAccordionItems = document.querySelectorAll('.bs-accordion .accordion-item');

bsAccordionItems.forEach(function (item, i) {
  // Add dynamic id's to accordion-header
  var header = item.querySelector(".accordion-header");
  header.setAttribute("id", "heading_" + i);

  // Add dynamic data-bs-target and aria-controls to accordion-button
  var button = item.querySelector(".accordion-button");
  button.setAttribute("data-bs-target", "#accordion_collapse_" + i);
  button.setAttribute("aria-controls", "accordion_collapse_" + i);

  // Add dynamic id and aria-labelledby to accordion-collapse
  var collapse = item.querySelector(".accordion-collapse");
  collapse.setAttribute("id", "accordion_collapse_" + i);
  collapse.setAttribute("aria-labelledby", "heading_" + i);
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

// First item active if it exists
// Handle each instance of tabs separately
document.querySelectorAll('.bs-tabs').forEach(function (tabs) {
  const firstNavLink = tabs.querySelector('.nav-link:first-child');
  const firstTabPane = tabs.querySelector('.tab-content .tab-pane:first-child');

  if (firstNavLink) {
    firstNavLink.classList.add('active');
  }

  if (firstTabPane) {
    firstTabPane.classList.add('show', 'active');
  }
});
