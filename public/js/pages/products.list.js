/**
 *
 * ProductsList
 *
 * Products.List.html page content scripts. Initialized from scripts.js file.
 *
 *
 */

class ProductsList {
  constructor() {
    // Initialization of the page plugins
    if (typeof Checkall !== 'undefined') {
      this._initCheckAll();
    } else {
      console.error('[CS] Checkall is undefined.');
    }
  }

  // Check all button initialization
  _initCheckAll() {
    new Checkall(document.querySelector('.check-all-container-checkbox-click .btn-custom-control'), {clickSelector: '.form-check'});
  }
}
