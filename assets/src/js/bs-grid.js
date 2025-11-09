/*!
 * bs Grid
 * 
 * @version 5.8.0
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


// Tabs with nested support
function initializeTabs(container) {
  // Handle both tab structures:
  // 1. Standard: .d-flex > nav > .nav-link
  // 2. Cards/List: .container-scroll > ul > li > .nav-link OR .d-flex > ul > li > .nav-link
  let navLinks = container.querySelectorAll(':scope > .d-flex > nav > .nav-link');
  
  // If no direct nav links found, try the ul > li structure
  if (navLinks.length === 0) {
    navLinks = container.querySelectorAll(':scope > .container-scroll > ul > li > .nav-link, :scope > .d-flex > ul > li > .nav-link');
  }
  
  const tabPanes = container.querySelectorAll(':scope > .tab-content > .tab-pane, :scope > .container > .tab-content > .tab-pane');
  
  // Generate a unique prefix for this tab instance
  const uniqueId = 'tab_' + Math.random().toString(36).substr(2, 9);
  
  // Add dynamic data-bs-target and aria-controls to nav
  navLinks.forEach(function (link, i) {
    const targetId = uniqueId + '_content_' + i;
    link.setAttribute("data-bs-target", "#" + targetId);
    link.setAttribute("aria-controls", targetId);
  });
  
  // Add dynamic id and aria-labelledby to tab-content
  tabPanes.forEach(function (pane, i) {
    const paneId = uniqueId + '_content_' + i;
    pane.id = paneId;
    pane.setAttribute("aria-labelledby", paneId);
    
    // FIXED: Look for nested tabs ANYWHERE inside this pane (not just direct children)
    pane.querySelectorAll('.bs-tabs').forEach(function(nestedTab) {
      // Make sure this nested tab hasn't already been initialized
      const nestedNavLinks = nestedTab.querySelectorAll('.nav-link');
      if (nestedNavLinks.length > 0 && !nestedNavLinks[0].hasAttribute('data-bs-target')) {
        initializeTabs(nestedTab);
      }
    });
  });
  
  // First item active
  if (navLinks.length > 0) {
    navLinks[0].classList.add('active');
  }
  if (tabPanes.length > 0) {
    tabPanes[0].classList.add('show', 'active');
  }
}

// Initialize only top-level tab instances
document.querySelectorAll('.bs-tabs').forEach(function (tabs) {
  // Only initialize if this tab is NOT nested inside another .bs-tabs
  if (!tabs.parentElement.closest('.bs-tabs')) {
    initializeTabs(tabs);
  }
});
