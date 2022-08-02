/**
 *
 * SettingsGeneral
 *
 * Settings.General.html page content scripts. Initialized from scripts.js file.
 *
 *
 */

class SettingsGeneral {
  constructor() {
    // Initialization of the page plugins
    if (jQuery().select2) {
      this._initSelect2();
    } else {
      console.error('[CS] select2 is undefined.');
    }
  }
  // Select2 button initialization
  _initSelect2() {
    jQuery('.select-single-no-search').select2({minimumResultsForSearch: Infinity, placeholder: ''});
  }
}
