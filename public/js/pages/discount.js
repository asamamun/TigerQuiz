/**
 *
 * Discount
 *
 * Discount.html page content scripts. Initialized from scripts.js file.
 *
 *
 */

class Discount {
  constructor() {
    // Initialization of the page plugins
    if (typeof Checkall !== 'undefined') {
      this._initCheckAll();
    } else {
      console.error('[CS] Checkall is undefined.');
    }

    if (jQuery().select2) {
      this._initSelect2();
    } else {
      console.error('[CS] jQuery().select2 is undefined.');
    }

    if (jQuery().datepicker) {
      this._initDatepicker();
    } else {
      console.error('[CS] jQuery().datepicker is undefined.');
    }

    if (typeof IMask !== 'undefined') {
      this._initImask();
    } else {
      console.error('[CS] IMask is undefined.');
    }
  }

  // Check all button initialization
  _initCheckAll() {
    new Checkall(document.querySelector('.check-all-container .btn-custom-control'));
  }
  // Select2 field initialize
  _initSelect2() {
    jQuery('.select-single-no-search').select2({minimumResultsForSearch: Infinity, placeholder: ''});
  }

  // datepicker field initialize
  _initDatepicker() {
    jQuery('.date-picker-close').datepicker({autoclose: true});
  }
  // mask-number field initialize
  _initImask() {
    document.querySelectorAll('.mask-number').forEach((el) => {
      IMask(el, {
        mask: Number,
      });
    });
  }
}
