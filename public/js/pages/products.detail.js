/**
 *
 * ProductsDetail
 *
 * Products.Detail.html page content scripts. Initialized from scripts.js file.
 *
 *
 */

class ProductsDetail {
  constructor() {
    // Initialization of the page plugins
    /*
    <script src="js/vendor/dropzone.min.js"></script>
    * */
    if (jQuery().select2) {
      this._initSelect2();
    } else {
      console.error('[CS] jQuery().select2 is undefined.');
    }

    if (typeof IMask !== 'undefined') {
      this._initImask();
    } else {
      console.error('[CS] IMask is undefined.');
    }

    if (typeof Quill !== 'undefined' && typeof Active !== 'undefined') {
      this._initQuill();
    } else {
      console.error('[CS] Quill or Quill.Active Module is undefined.');
    }

    if (typeof Tagify !== 'undefined') {
      this._initTagify();
    } else {
      console.error('[CS] Tagify is undefined.');
    }

    if (typeof Dropzone !== 'undefined' && typeof DropzoneTemplates !== 'undefined') {
      this._initDropzone();
    } else {
      console.error('[CS] Dropzone or DropzoneTemplates is undefined.');
    }
  }

  // Select2 field initialize
  _initSelect2() {
    jQuery('.select-single-no-search').select2({minimumResultsForSearch: Infinity, placeholder: ''});
  }

  // mask-currency field initialize
  _initImask() {
    document.querySelectorAll('.mask-currency').forEach((el) => {
      IMask(el, {
        mask: '$ num',
        blocks: {
          num: {
            mask: Number,
            thousandsSeparator: '.',
          },
        },
      });
    });
  }

  //Quill Editor initialize
  _initQuill() {
    Quill.register('modules/active', Active);
    const quillBubbleToolbarOptions = [
      ['bold', 'italic', 'underline', 'strike'],
      [{header: [1, 2, 3, 4, 5, 6, false]}],
      [{list: 'ordered'}, {list: 'bullet'}],
      [{align: []}],
    ];

    if (document.getElementById('quillEditorDetails')) {
      new Quill('#quillEditorDetails', {
        modules: {toolbar: quillBubbleToolbarOptions, active: {}},
        theme: 'bubble',
      });
    }

    if (document.getElementById('quillEditorBubble')) {
      new Quill('#quillEditorBubble', {
        modules: {toolbar: quillBubbleToolbarOptions, active: {}},
        theme: 'bubble',
      });
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

  // Dropzone initialization
  _initDropzone() {
    if (document.getElementById('dropzoneProductImage')) {
      new Dropzone('#dropzoneProductImage', {
        url: 'https://httpbin.org/post',
        thumbnailWidth: 600,
        thumbnailHeight: 430,
        previewTemplate: DropzoneTemplates.columnPreviewImageTemplate,
        init: function () {
          this.on('success', function (file, responseText) {
            console.log(responseText);
          });

          // If you only have access to the original image sizes on your server,
          // and want to resize them in the browser:
          let mockFile1 = {name: 'cornbread.jpg', size: 249430};
          this.displayExistingFile(mockFile1, 'img/product/small/cornbread.jpg');

          // Adding dz-started class to remove drop message
          this.element.classList.add('dz-started');
        },
      });
    }

    if (document.getElementById('dropzoneProductGallery')) {
      new Dropzone('#dropzoneProductGallery', {
        url: 'https://httpbin.org/post',
        thumbnailWidth: 600,
        thumbnailHeight: 430,
        previewTemplate: DropzoneTemplates.columnPreviewImageTemplate,
        init: function () {
          this.on('success', function (file, responseText) {
            console.log(responseText);
          });

          // If you only have access to the original image sizes on your server,
          // and want to resize them in the browser:
          let mockFile1 = {name: 'rugbraud.jpg', size: 203100};
          this.displayExistingFile(mockFile1, 'img/product/small/rugbraud.jpg');

          let mockFile2 = {name: 'michetta.jpg', size: 267140};
          this.displayExistingFile(mockFile2, 'img/product/small/michetta.jpg');

          let mockFile3 = {name: 'buccellato-di-lucca.jpg', size: 267140};
          this.displayExistingFile(mockFile3, 'img/product/small/buccellato-di-lucca.jpg');

          let mockFile4 = {name: 'boule.jpg', size: 267140};
          this.displayExistingFile(mockFile4, 'img/product/small/boule.jpg');

          // Adding dz-started class to remove drop message
          this.element.classList.add('dz-started');
        },
      });

      // A button to fire a click event from dropzone
      if (document.getElementById('dropzoneProductGalleryButton')) {
        document.getElementById('dropzoneProductGalleryButton').addEventListener('click', (event) => {
          document.getElementById('dropzoneProductGallery').dispatchEvent(new Event('click'));
        });
      }
    }
  }
}
