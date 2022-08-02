/**
 *
 * Scripts.js
 *
 * Initialization of the page scripts.
 *
 *
 */

class Scripts {
  constructor() {
    this._initCommon();
    this._initPages();
  }

  // Common plugins and overrides initialization
  _initCommon() {
    // common.js initialization
    if (typeof Common !== 'undefined') {
      let common = new Common();
    }
  }

  // Pages initialization
  _initPages() {
    // customers.detail.js initialization
    if (typeof CustomersDetail !== 'undefined') {
      const customersDetail = new CustomersDetail();
    }
    // customers.list.js initialization
    if (typeof CustomersList !== 'undefined') {
      const customersList = new CustomersList();
    }
    // dashboard.js initialization
    if (typeof Dashboard !== 'undefined') {
      const dashboard = new Dashboard();
    }
    // discount.js initialization
    if (typeof Discount !== 'undefined') {
      const discount = new Discount();
    }
    // orders.list.js initialization
    if (typeof OrdersList !== 'undefined') {
      const ordersList = new OrdersList();
    }
    // products.detail.js initialization
    if (typeof ProductsDetail !== 'undefined') {
      const productsDetail = new ProductsDetail();
    }
    // products.list.js initialization
    if (typeof ProductsList !== 'undefined') {
      const productsList = new ProductsList();
    }
    // settings.general.js initialization
    if (typeof SettingsGeneral !== 'undefined') {
      const settingsGeneral = new SettingsGeneral();
    }
    // storefront.categories.js initialization
    if (typeof StorefrontCategories !== 'undefined') {
      const storefrontCategories = new StorefrontCategories();
    }
    // storefront.checkout.js initialization
    if (typeof StorefrontCheckout !== 'undefined') {
      const storefrontCheckout = new StorefrontCheckout();
    }
    // storefront.detail.js initialization
    if (typeof StorefrontDetail !== 'undefined') {
      const storefrontDetail = new StorefrontDetail();
    }
    // storefront.filters.js initialization
    if (typeof StorefrontFilters !== 'undefined') {
      const storefrontFilters = new StorefrontFilters();
    }
    // storefront.home.js initialization
    if (typeof StorefrontHome !== 'undefined') {
      const storefrontHome = new StorefrontHome();
    }
  }
}

(function () {
  // Disabling dropzone auto discover before DOMContentLoaded
  if (typeof Dropzone !== 'undefined') {
    Dropzone.autoDiscover = false;
  }
})();
