/**
 *
 * StorefrontFilters
 *
 * Storefront.Filters.html page content scripts. Initialized from scripts.js file.
 *
 *
 */

class StorefrontFilters {
  constructor() {
    // Initialization of the page plugins
    if (jQuery().barrating) {
      this._initBarrating();
    } else {
      console.error('[CS] jQuery().barrating is undefined.');
    }
    if (typeof MoveContent !== 'undefined') {
      this._initMoveContent();
    } else {
      console.error('[CS] MoveContent is undefined.');
    }
    if (typeof Checkall !== 'undefined') {
      this._initCheckAll();
    } else {
      console.error('[CS] Checkall is undefined.');
    }
  }

  // Rating initialize for product list items
  _initBarrating() {
    jQuery('.rating').each(function () {
      const current = jQuery(this).data('initialRating');
      const readonly = jQuery(this).data('readonly');
      const showSelectedRating = jQuery(this).data('showSelectedRating');
      const showValues = jQuery(this).data('showValues');
      jQuery(this).barrating({
        initialRating: current,
        readonly: readonly,
        showValues: showValues,
        showSelectedRating: showSelectedRating,
        onSelect: function (value, text) {},
        onClear: function (value, text) {},
      });
    });
  }

  // Moving menu for responsive sizes
  _initMoveContent() {
    if (typeof MoveContent !== 'undefined') {
      // Filter panel in the Products pages
      if (document.querySelector('#filterMoveContent')) {
        const filterMove = document.querySelector('#filterMoveContent');
        const targetSelectorFilter = filterMove.getAttribute('data-move-target');
        const moveBreakpointFilter = filterMove.getAttribute('data-move-breakpoint');
        const filterMoveContent = new MoveContent(filterMove, {
          targetSelector: targetSelectorFilter,
          moveBreakpoint: moveBreakpointFilter,
          beforeMove: (placement) => {
            // Called before clearing of the html and moving content. Good for destroying plugins.
          },
          afterMove: (placement) => {
            // Called after clearing of the html and moving content. Good for initializing plugins.

            // Initializing barrating in the filter column
            if (jQuery().barrating) {
              jQuery('.rating-filter').each(function () {
                var current = jQuery(this).data('initialRating');
                var readonly = jQuery(this).data('readonly');
                var showSelectedRating = jQuery(this).data('showSelectedRating');
                var showValues = jQuery(this).data('showValues');
                jQuery(this).barrating({
                  initialRating: current,
                  readonly: readonly,
                  showValues: showValues,
                  showSelectedRating: showSelectedRating,
                  onSelect: function (value, text) {},
                  onClear: function (value, text) {},
                });
              });
            }
            if (typeof OverlayScrollbars !== 'undefined') {
              OverlayScrollbars(document.querySelectorAll('.filters-category-scroll'), {
                scrollbars: {},
                overflowBehavior: {x: 'hidden', y: 'scroll'},
              });
            }
            jQuery('#filterModal').modal('hide');
          },
        });
      }

      // Category menu in the Products page
      if (document.querySelector('#categoryMenuMoveContent')) {
        const menuMove = document.querySelector('#categoryMenuMoveContent');
        const targetSelectorMenu = menuMove.getAttribute('data-move-target');
        const moveBreakpointMenu = menuMove.getAttribute('data-move-breakpoint');
        const menuMoveContent = new MoveContent(menuMove, {
          targetSelector: targetSelectorMenu,
          moveBreakpoint: moveBreakpointMenu,
        });
      }

      // Settings menu in Profile Settings page
      if (document.querySelector('#settingsMoveContent')) {
        const menuMove = document.querySelector('#settingsMoveContent');
        const targetSelectorMenu = menuMove.getAttribute('data-move-target');
        const moveBreakpointMenu = menuMove.getAttribute('data-move-breakpoint');
        const menuMoveContent = new MoveContent(menuMove, {
          targetSelector: targetSelectorMenu,
          moveBreakpoint: moveBreakpointMenu,
        });
      }
    }
  }

  // Check all button initialization
  _initCheckAll() {
    new Checkall(document.querySelector('.check-all-container-checkbox-click .btn-custom-control'), {clickSelector: '.form-check'});
  }
}
