try {
	window.Popper = require('popper.js').default;
	window.$ = window.jQuery = require( "jquery" );

	require('bootstrap');
} catch (e) { }

// ============================================================================
//	document.ready
//	Will fire immediately when DOM is ready
// ============================================================================
$(function () {

	// ==========================================================================
	// 
	// ==========================================================================
	(function() {

		// Definition of caller element
		var getTriggerElement = function(el) {
		  var isCollapse = el.getAttribute('data-collapse');
		  if (isCollapse !== null) {
			return el;
		  } else {
			var isParentCollapse = el.parentNode.getAttribute('data-collapse');
			return (isParentCollapse !== null) ? el.parentNode : undefined;
		  }
		};
	  
		// A handler for click on toggle button
		var collapseClickHandler = function(event) {
		  var triggerEl = getTriggerElement(event.target);
		  // If trigger element does not exist
		  if (triggerEl === undefined) {
			return false;
		  }
	  
		  // If the target element exists
		  var targetEl = document.querySelector(triggerEl.getAttribute('data-target'));
		  if (targetEl) {
			triggerEl.classList.toggle('-active');
			targetEl.classList.toggle('-on');
		  }
		};
	  
		// Delegated event
		document.addEventListener('click', collapseClickHandler, false);
	  
	  })(document, window);
	// ==========================================================================

}); // end document.ready