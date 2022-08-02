/**
 *
 * StorefrontDetail
 *
 * Storefront.Detail.html page content scripts. Initialized from scripts.js file.
 *
 *
 */

class StorefrontDetail {
  constructor() {
    // Initialization of the page plugins
    if (jQuery().barrating) {
      this._initBarrating();
    } else {
      console.error('[CS] jQuery().barrating is undefined.');
    }

    if (jQuery().select2) {
      this._initSelect2();
    } else {
      console.error('[CS] jQuery().select2 is undefined.');
    }
    if (typeof GlideGallery !== 'undefined') {
      this._initDetailImageCarousel();
    } else {
      console.error('[CS] GlideGallery is undefined.', GlideGallery);
    }

    this._initProgressBars();
  }

  _initProgressBars() {
    document.querySelectorAll('.progress-bar').forEach((element) => {
      const volume = element.getAttribute('aria-valuenow');
      element.style.width = volume + '%';
    });
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

  // Select2 field initialize
  _initSelect2() {
    jQuery('.select-single-no-search').select2({minimumResultsForSearch: Infinity, placeholder: ''});
  }

  // Detail image carousel
  _initDetailImageCarousel() {
    if (document.querySelector('#glideStorefrontDetail') !== null && typeof GlideGallery !== 'undefined') {
      const element = document.querySelector('#glideStorefrontDetail');
      const glideLength = element.querySelector('.glide-large .glide__slides').children.length;
      const glideThumbCount = 5;
      const perView = Math.min(glideThumbCount, glideLength);
      new GlideGallery(
        element.querySelector('.glide-large'),
        element.querySelector('.glide-thumb'),
        {
          bound: true,
          rewind: false,
          focusAt: 0,
          perView: 1,
          startAt: 0,
        },
        {
          bound: true,
          rewind: false,
          perView: perView,
          perTouch: 1,
          focusAt: 0,
          startAt: 0,
          breakpoints: {
            1600: {
              perView: Math.min(4, glideLength),
            },
            576: {
              perView: Math.min(3, glideLength),
            },
            420: {
              perView: Math.min(2, glideLength),
            },
          },
        },
        glideLength,
        perView,
        70,
      );
    }
  }
}
