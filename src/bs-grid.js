/*!
 * bS Grid
 * 
 * @version 5.4.0
 */


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
