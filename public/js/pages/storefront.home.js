/**
 *
 * StorefrontHome
 *
 * Storefront.Home.html page content scripts. Initialized from scripts.js file.
 *
 *
 */

class StorefrontHome {
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
  }

  // Rating initialize
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
    if (document.querySelector('#categoryMenuMoveContent')) {
      const menuMove = document.querySelector('#categoryMenuMoveContent');
      const targetSelectorMenu = menuMove.getAttribute('data-move-target');
      const moveBreakpointMenu = menuMove.getAttribute('data-move-breakpoint');
      const menuMoveContent = new MoveContent(menuMove, {
        targetSelector: targetSelectorMenu,
        moveBreakpoint: moveBreakpointMenu,
      });
    }
  }
}
