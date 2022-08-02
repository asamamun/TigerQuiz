/**
 *
 * CustomersDetail
 *
 * Customers.Detail.html page content scripts. Initialized from scripts.js file.
 *
 *
 */

class CustomersDetail {
  constructor() {
    // Initialization of the page plugins
    if (typeof Tagify !== 'undefined') {
      this._initTagify();
    } else {
      console.error('[CS] Tagify is undefined.');
    }
  }

  // Tagify initialization
  _initTagify() {
    if (document.querySelectorAll('input[name=tagsBasic]').length > 0) {
      document.querySelectorAll('input[name=tagsBasic]').forEach((el) => {
        new Tagify(el);
      });
    }
  }
}
