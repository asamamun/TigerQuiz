/**
 *
 * StorefrontCheckout
 *
 * Storefront.Checkout.html page content scripts. Initialized from scripts.js file.
 *
 *
 */

class StorefrontCheckout {
  constructor() {
    // Initialization of the page plugins
    if (typeof TimePicker !== 'undefined') {
      this._initTimePicker();
    } else {
      console.error('[CS] TimePicker is undefined.');
    }
    // State and city select2 initializations
    if (jQuery().select2) {
      this._initStateSelect();
      this._initCitySelectEmpty();
    } else {
      console.error('[CS] select2 is undefined.');
    }
  }

  _initTimePicker() {
    new TimePicker(document.getElementById('timePickerStandard'), {});
  }

  // State select with ajax data
  _initStateSelect() {
    var _this = this;
    this.stateSelect = jQuery('#addressState')
      .select2({
        ajax: {
          url: 'https://node-api.coloredstrategies.com/products',
          dataType: 'json',
          delay: 50,
          data: function (params) {
            return {
              search: {value: params.term},
              page: params.page,
            };
          },
          processResults: function (data, page) {
            return {
              results: data.data,
            };
          },
          cache: true,
        },
        language: {
          searching: function () {
            return 'Retrieving...';
          },
        },
        theme: 'bootstrap4',
        placeholder: 'Search',
        escapeMarkup: function (markup) {
          return markup;
        },
        minimumInputLength: 0,
        minimumResultsForSearch: Infinity,
        templateResult: _this._formatResult,
        templateSelection: _this._formatResultSelection,
        dropdownCssClass: 'hide-search-searching',
      })
      .on('select2:select', function (e) {
        // Calling city select upon state change
        _this._initCitySelect();
      })
      .on('change', function () {});
  }
  // City select with ajax data
  _initCitySelect() {
    var _this = this;
    let stateValue = this.stateSelect.val();
    this.citySelect.select2('destroy');
    this.citySelect = jQuery('#addressCity')
      .select2({
        ajax: {
          url: 'https://node-api.coloredstrategies.com/products',
          dataType: 'json',
          delay: 50,
          data: function (params) {
            return {
              search: {value: params.term},
              page: params.page,
            };
          },
          processResults: function (data, page) {
            return {
              results: data.data,
            };
          },
          cache: true,
        },
        language: {
          searching: function () {
            return 'Retrieving...';
          },
        },
        placeholder: 'Search',
        theme: 'bootstrap4',
        escapeMarkup: function (markup) {
          return markup;
        },
        minimumInputLength: 0,
        minimumResultsForSearch: Infinity,
        dropdownCssClass: 'hide-search-searching',
        templateResult: _this._formatResult,
        templateSelection: _this._formatResultSelection,
        disabled: false,
      })
      .on('change', function () {});
  }

  _initCitySelectEmpty() {
    // Calling city select empty for the first init
    this.citySelect = jQuery('#addressCity').select2({
      language: {
        searching: function () {
          return 'Retrieving...';
        },
        noResults: function () {
          return 'Please select your state!';
        },
      },
      minimumResultsForSearch: Infinity,
    });
  }

  _formatResult(result) {
    if (result.loading) return result.text;
    var markup = "<div class='clearfix'><div>" + result.Name + '</div>';
    return markup;
  }

  _formatResultSelection(result) {
    return result.Name;
  }
}
