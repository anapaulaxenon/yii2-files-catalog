/*
 *
 * Developed by Waizabú <code@waizabu.com>
 *
 *
 */

"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/*
 *
 * Developed by Waizabú <code@waizabu.com>
 *
 *
 */
var filexIndex =
/*#__PURE__*/
function () {
  function filexIndex(settings) {
    _classCallCheck(this, filexIndex);

    this.settings = settings;
    this.attachEvents();
  }

  _createClass(filexIndex, [{
    key: "attachEvents",
    value: function attachEvents() {
      $(document).on('change', '[name="filex-bulk-action[]"]', function (e) {
        var keys = $('#filex-grid').yiiGridView('getSelectedRows');
        $('#filex-bulk-actions').toggleClass('collapse', !keys.length > 0);
        var params = {};
        keys.forEach(function (e, i, a) {
          params['uuids[' + i + ']'] = e;
        });
        $("#filex-bulk-delete,#filex-bulk-acl").attr('data-params', JSON.stringify(params));
      });
    }
  }]);

  return filexIndex;
}();

if (!filexIndexInstance) {
  var filexIndexInstance = new filexIndex();
}
