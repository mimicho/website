/*! jQuery UI - v1.12.1 - 2017-03-31
* http://jqueryui.com
* Copyright jQuery Foundation and other contributors; Licensed  */
!function(a){"function"==typeof define&&define.amd?define(["jquery","./version"],a):a(jQuery)}(function(a){var b=0,c=Array.prototype.slice;return a.cleanData=function(b){return function(c){var d,e,f;for(f=0;null!=(e=c[f]);f++)try{d=a._data(e,"events"),d&&d.remove&&a(e).triggerHandler("remove")}catch(g){}b(c)}}(a.cleanData),a.widget=function(b,c,d){var e,f,g,h={},i=b.split(".")[0];b=b.split(".")[1];var j=i+"-"+b;return d||(d=c,c=a.Widget),a.isArray(d)&&(d=a.extend.apply(null,[{}].concat(d))),a.expr[":"][j.toLowerCase()]=function(b){return!!a.data(b,j)},a[i]=a[i]||{},e=a[i][b],f=a[i][b]=function(a,b){return this._createWidget?void(arguments.length&&this._createWidget(a,b)):new f(a,b)},a.extend(f,e,{version:d.version,_proto:a.extend({},d),_childConstructors:[]}),g=new c,g.options=a.widget.extend({},g.options),a.each(d,function(b,d){return a.isFunction(d)?void(h[b]=function(){function a(){return c.prototype[b].apply(this,arguments)}function e(a){return c.prototype[b].apply(this,a)}return function(){var b,c=this._super,f=this._superApply;return this._super=a,this._superApply=e,b=d.apply(this,arguments),this._super=c,this._superApply=f,b}}()):void(h[b]=d)}),f.prototype=a.widget.extend(g,{widgetEventPrefix:e?g.widgetEventPrefix||b:b},h,{constructor:f,namespace:i,widgetName:b,widgetFullName:j}),e?(a.each(e._childConstructors,function(b,c){var d=c.prototype;a.widget(d.namespace+"."+d.widgetName,f,c._proto)}),delete e._childConstructors):c._childConstructors.push(f),a.widget.bridge(b,f),f},a.widget.extend=function(b){for(var d,e,f=c.call(arguments,1),g=0,h=f.length;g<h;g++)for(d in f[g])e=f[g][d],f[g].hasOwnProperty(d)&&void 0!==e&&(a.isPlainObject(e)?b[d]=a.isPlainObject(b[d])?a.widget.extend({},b[d],e):a.widget.extend({},e):b[d]=e);return b},a.widget.bridge=function(b,d){var e=d.prototype.widgetFullName||b;a.fn[b]=function(f){var g="string"==typeof f,h=c.call(arguments,1),i=this;return g?this.length||"instance"!==f?this.each(function(){var c,d=a.data(this,e);return"instance"===f?(i=d,!1):d?a.isFunction(d[f])&&"_"!==f.charAt(0)?(c=d[f].apply(d,h),c!==d&&void 0!==c?(i=c&&c.jquery?i.pushStack(c.get()):c,!1):void 0):a.error("no such method '"+f+"' for "+b+" widget instance"):a.error("cannot call methods on "+b+" prior to initialization; attempted to call method '"+f+"'")}):i=void 0:(h.length&&(f=a.widget.extend.apply(null,[f].concat(h))),this.each(function(){var b=a.data(this,e);b?(b.option(f||{}),b._init&&b._init()):a.data(this,e,new d(f,this))})),i}},a.Widget=function(){},a.Widget._childConstructors=[],a.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",defaultElement:"<div>",options:{classes:{},disabled:!1,create:null},_createWidget:function(c,d){d=a(d||this.defaultElement||this)[0],this.element=a(d),this.uuid=b++,this.eventNamespace="."+this.widgetName+this.uuid,this.bindings=a(),this.hoverable=a(),this.focusable=a(),this.classesElementLookup={},d!==this&&(a.data(d,this.widgetFullName,this),this._on(!0,this.element,{remove:function(a){a.target===d&&this.destroy()}}),this.document=a(d.style?d.ownerDocument:d.document||d),this.window=a(this.document[0].defaultView||this.document[0].parentWindow)),this.options=a.widget.extend({},this.options,this._getCreateOptions(),c),this._create(),this.options.disabled&&this._setOptionDisabled(this.options.disabled),this._trigger("create",null,this._getCreateEventData()),this._init()},_getCreateOptions:function(){return{}},_getCreateEventData:a.noop,_create:a.noop,_init:a.noop,destroy:function(){var b=this;this._destroy(),a.each(this.classesElementLookup,function(a,c){b._removeClass(c,a)}),this.element.off(this.eventNamespace).removeData(this.widgetFullName),this.widget().off(this.eventNamespace).removeAttr("aria-disabled"),this.bindings.off(this.eventNamespace)},_destroy:a.noop,widget:function(){return this.element},option:function(b,c){var d,e,f,g=b;if(0===arguments.length)return a.widget.extend({},this.options);if("string"==typeof b)if(g={},d=b.split("."),b=d.shift(),d.length){for(e=g[b]=a.widget.extend({},this.options[b]),f=0;f<d.length-1;f++)e[d[f]]=e[d[f]]||{},e=e[d[f]];if(b=d.pop(),1===arguments.length)return void 0===e[b]?null:e[b];e[b]=c}else{if(1===arguments.length)return void 0===this.options[b]?null:this.options[b];g[b]=c}return this._setOptions(g),this},_setOptions:function(a){var b;for(b in a)this._setOption(b,a[b]);return this},_setOption:function(a,b){return"classes"===a&&this._setOptionClasses(b),this.options[a]=b,"disabled"===a&&this._setOptionDisabled(b),this},_setOptionClasses:function(b){var c,d,e;for(c in b)e=this.classesElementLookup[c],b[c]!==this.options.classes[c]&&e&&e.length&&(d=a(e.get()),this._removeClass(e,c),d.addClass(this._classes({element:d,keys:c,classes:b,add:!0})))},_setOptionDisabled:function(a){this._toggleClass(this.widget(),this.widgetFullName+"-disabled",null,!!a),a&&(this._removeClass(this.hoverable,null,"ui-state-hover"),this._removeClass(this.focusable,null,"ui-state-focus"))},enable:function(){return this._setOptions({disabled:!1})},disable:function(){return this._setOptions({disabled:!0})},_classes:function(b){function c(c,f){var g,h;for(h=0;h<c.length;h++)g=e.classesElementLookup[c[h]]||a(),g=a(b.add?a.unique(g.get().concat(b.element.get())):g.not(b.element).get()),e.classesElementLookup[c[h]]=g,d.push(c[h]),f&&b.classes[c[h]]&&d.push(b.classes[c[h]])}var d=[],e=this;return b=a.extend({element:this.element,classes:this.options.classes||{}},b),this._on(b.element,{remove:"_untrackClassesElement"}),b.keys&&c(b.keys.match(/\S+/g)||[],!0),b.extra&&c(b.extra.match(/\S+/g)||[]),d.join(" ")},_untrackClassesElement:function(b){var c=this;a.each(c.classesElementLookup,function(d,e){a.inArray(b.target,e)!==-1&&(c.classesElementLookup[d]=a(e.not(b.target).get()))})},_removeClass:function(a,b,c){return this._toggleClass(a,b,c,!1)},_addClass:function(a,b,c){return this._toggleClass(a,b,c,!0)},_toggleClass:function(a,b,c,d){d="boolean"==typeof d?d:c;var e="string"==typeof a||null===a,f={extra:e?b:c,keys:e?a:b,element:e?this.element:a,add:d};return f.element.toggleClass(this._classes(f),d),this},_on:function(b,c,d){var e,f=this;"boolean"!=typeof b&&(d=c,c=b,b=!1),d?(c=e=a(c),this.bindings=this.bindings.add(c)):(d=c,c=this.element,e=this.widget()),a.each(d,function(d,g){function h(){if(b||f.options.disabled!==!0&&!a(this).hasClass("ui-state-disabled"))return("string"==typeof g?f[g]:g).apply(f,arguments)}"string"!=typeof g&&(h.guid=g.guid=g.guid||h.guid||a.guid++);var i=d.match(/^([\w:-]*)\s*(.*)$/),j=i[1]+f.eventNamespace,k=i[2];k?e.on(j,k,h):c.on(j,h)})},_off:function(b,c){c=(c||"").split(" ").join(this.eventNamespace+" ")+this.eventNamespace,b.off(c).off(c),this.bindings=a(this.bindings.not(b).get()),this.focusable=a(this.focusable.not(b).get()),this.hoverable=a(this.hoverable.not(b).get())},_delay:function(a,b){function c(){return("string"==typeof a?d[a]:a).apply(d,arguments)}var d=this;return setTimeout(c,b||0)},_hoverable:function(b){this.hoverable=this.hoverable.add(b),this._on(b,{mouseenter:function(b){this._addClass(a(b.currentTarget),null,"ui-state-hover")},mouseleave:function(b){this._removeClass(a(b.currentTarget),null,"ui-state-hover")}})},_focusable:function(b){this.focusable=this.focusable.add(b),this._on(b,{focusin:function(b){this._addClass(a(b.currentTarget),null,"ui-state-focus")},focusout:function(b){this._removeClass(a(b.currentTarget),null,"ui-state-focus")}})},_trigger:function(b,c,d){var e,f,g=this.options[b];if(d=d||{},c=a.Event(c),c.type=(b===this.widgetEventPrefix?b:this.widgetEventPrefix+b).toLowerCase(),c.target=this.element[0],f=c.originalEvent)for(e in f)e in c||(c[e]=f[e]);return this.element.trigger(c,d),!(a.isFunction(g)&&g.apply(this.element[0],[c].concat(d))===!1||c.isDefaultPrevented())}},a.each({show:"fadeIn",hide:"fadeOut"},function(b,c){a.Widget.prototype["_"+b]=function(d,e,f){"string"==typeof e&&(e={effect:e});var g,h=e?e===!0||"number"==typeof e?c:e.effect||c:b;e=e||{},"number"==typeof e&&(e={duration:e}),g=!a.isEmptyObject(e),e.complete=f,e.delay&&d.delay(e.delay),g&&a.effects&&a.effects.effect[h]?d[b](e):h!==b&&d[h]?d[h](e.duration,e.easing,f):d.queue(function(c){a(this)[b](),f&&f.call(d[0]),c()})}}),a.widget});;
/**
 * @file
 * Pagerer jquery scripts.
 *
 * All jQuery navigation widgets implemented by pagerer are configured at
 * runtime by a JSON object prepared by the PHP part of the module, and
 * stored in a 'pagererState' object attached to each widget.
 *
 * pagererState properties:
 * - url: the URL of the target page for navigation
 * - queryString: the query string fragment of the request
 * - element: integer to distinguish between multiple pagers on one page
 * - quantity: number of page elements in the pager list
 * - total: total number of pages in the query
 * - totalItems: total number of items in the query
 * - current: 0-base index of current page
 * - interval: number of elements per page (1 if display = pages, items per
 *   page if display = items/item_ranges)
 * - display: pages|items|item_ranges indicates what is displayed in the page
 *   element
 * - pageSeparator: Text to fill between contiguous pages.
 * - pageTag: Array of text elements to use to render page/item/item range.
 * - widgetResize: (widget) determines if the widget width should be calculated
 *   dynamically based on the width of the string of the last page/item number.
 * - sliderWidth: (slider) determines the width of the slider bar in 'em's.
 *   If not set, CSS styling will prevail.
 * - action: (slider) determines how the page relocation should be triggered
 *   after it has been selected through the jQuery slider.
 * - timeout: (slider) the grace time (in milliseconds) to wait before the
 *   page is relocated, in case "timeout" action method is selected for
 *   the jQuery slider.
 * - icons: (slider) determines whether to display +/- navigation icons
 *   on the sides of the jQuery slider.
 * - tickmarkTitle: (slider) help text appended to the slider help when user is
 *   expected to click on the tickmark to start page relocation.
 */

(function ($) {

  'use strict';

  /**
   * Pagerer base utility functions.
   */
  Drupal.pagerer = Drupal.pagerer || {

    /**
     * State variables.
     *
     * These variables are reset at every page load, either normal or AJAX.
     */
    state: {
      timeoutAction: 0,
      intervalAction: 0,
      intervalCount: 0,
      isRelocating: false
    },

    /**
     * Return page text from zero-based page index number.
     *
     * @param {number} index
     *   The page number (0-indexed) to navigate to.
     * @param {object} pState
     *   A Pagerer state object.
     * @param {string} tagType
     *   The text to be formatted, page or title.
     *
     * @return {number}
     *   A formatted and translated text string to be used for rendering a
     *   pager element.
     */
    indexToTag: function (index, pState, tagType) {

      index = parseInt(index);
      var offset = index - pState.current;

      // Get required tag.
      var tag;
      if (tagType === 'page') {
        if (offset === 0) {
          tag = pState.pageTag.page_current;
        }
        else {
          if (offset < 0) {
            tag = pState.pageTag.page_previous;
          }
          else {
            tag = pState.pageTag.page_next;
          }
        }
      }
      else {
        if (index === 0) {
          tag = pState.pageTag.first_title;
        }
        else if (index === (pState.total - 1)) {
          tag = pState.pageTag.last_title;
        }
        else {
          tag = pState.pageTag.page_title;
        }
      }

      // Items.
      var l_item = (index * pState.interval) + 1;
      var h_item = Math.min(((index + 1) * pState.interval), pState.totalItems);
      var item_offset = offset * pState.interval;

      // Pages.
      var num = index + 1;
      var t_offset = offset;

      // Format text string.
      return Drupal.formatString(tag, {
        '@number': num,
        '@offset': t_offset,
        '@item_offset': item_offset,
        '@item_low': l_item,
        '@item_high': h_item,
        '@item': l_item,
        '@total_items': pState.totalItems,
        '@total': pState.total
      });
    },

    /**
     * Return zero-based page index number from textual value.
     *
     * @param {number} value
     *   A number, either a page or an item (1-indexed).
     * @param {HTMLElement} element
     *   An HTML element.
     *
     * @return {number}
     *   The page number (0-indexed) the link will navigate to.
     */
    valueToIndex: function (value, element) {
      var elementState = element.pagererState;
      switch (elementState.display) {
        case 'pages':
          if (isNaN(value)) {
            return 0;
          }
          value = parseInt(value);
          if (value < 1) {
            return 0;
          }
          if (value > elementState.total) {
            value = elementState.total;
          }
          return value - 1;

        case 'items':
          if (isNaN(value)) {
            return 0;
          }
          value = parseInt(value);
          if (value < 1) {
            return 0;
          }
          if (value > elementState.totalItems) {
            value = elementState.totalItems;
          }
          return parseInt((value - 1) / elementState.interval);

      }
    },

    /**
     * Return an element's pagererState from the HTML attribute.
     *
     * @param {HTMLElement} element
     *   An HTML element.
     *
     * @return {object}
     *   A Pagerer state object.
     */
    evalState: function (element) {
      var pagererStateId = $(element).attr('id');
      var pagererState = drupalSettings.pagerer.state[pagererStateId];
      var ajaxViewId = this.getAjaxViewId(element);

      if (ajaxViewId) {
        // Element is in Views AJAX context.
        pagererState.context = 'viewsAjax';
        pagererState.ajaxViewId = ajaxViewId;

      }
      else if (this.getViewsPreviewContext(element)) {
        // Element is in Views preview context.
        pagererState.context = 'viewsPreview';

      }
      else {
        // Normal page.
        pagererState.context = 'document';

      }

      return pagererState;
    },

    /**
     * Clears an element's pagererState from drupalSettings.
     *
     * @param {HTMLElement} element
     *   An HTML element.
     */
    detachState: function (element) {
      var pagererStateId = $(element).attr('id');
      delete drupalSettings.pagerer.state[pagererStateId];
      return;
    },

    /**
     * Return zero-based page index number from element href.
     *
     * @param {HTMLElement} element
     *   An HTML anchor element.
     * @param {object} pState
     *   A Pagerer state object.
     *
     * @return {number}
     *   The page number (0-indexed) the link will navigate to.
     */
    elementToIndex: function (element, pState) {
      var url = $(element).find('a').attr('href');
      if (typeof url == 'undefined') {
        if ($(element).hasClass('pager-current')) {
          return pState.current;
        }
        return 0;
      }
      var queryParameters = this.parseQueryString(url);
      if (typeof queryParameters['page'] == 'undefined') {
        return 0;
      }
      var elementPages = queryParameters['page'].split(',');
      if (typeof elementPages[pState.element] == 'undefined') {
        return 0;
      }
      return parseInt(elementPages[pState.element]);
    },

    /**
     * Helper function to parse a querystring.
     *
     * Copy of Drupal.Views.parseQueryString since the Views module may not be
     * enabled.
     *
     * @param {string} query
     *   The querystring to parse.
     *
     * @return {object}
     *   A map of query parameters.
     */
    parseQueryString: function (query) {
      var args = {};
      var pos = query.indexOf('?');
      if (pos !== -1) {
        query = query.substring(pos + 1);
      }
      var pair;
      var pairs = query.split('&');
      for (var i = 0; i < pairs.length; i++) {
        pair = pairs[i].split('=');
        // Ignore the 'q' path argument, if present.
        if (pair[0] !== 'q' && pair[1]) {
          args[decodeURIComponent(pair[0].replace(/\+/g, ' '))] = decodeURIComponent(pair[1].replace(/\+/g, ' '));
        }
      }
      return args;
    },

    /**
     * Reset pending transitions.
     *
     * Cancel timeout-bound page relocation and any unprocessed scrollpane
     * transition.
     */
    reset: function () {
      if (this.state.timeoutAction) {
        clearTimeout(this.state.timeoutAction);
      }
    },

    /**
     * Gets the URL to be used for links/AJAX relocation.
     *
     * @param {object} pState
     *   The Pagerer state associated with an element.
     * @param {number} targetPage
     *   The page to relocate to.
     * @param {boolean} queryOnNullUrl
     *   If TRUE, indicates to return the Pagerer state URL also if it is NULL.
     *
     * @return {string}
     *   The URL to be used for relocation.
     */
    getTargetUrl: function (pState, targetPage, queryOnNullUrl) {
      var targetUrl;
      if (pState.url || (!pState.url && queryOnNullUrl)) {
        targetUrl = pState.url;
      }
      else {
        targetUrl = Drupal.url(location.pathname.slice(drupalSettings.path.baseUrl.length + drupalSettings.path.pathPrefix.length));
      }
      if (pState.queryString) {
        targetUrl = targetUrl + '?' + pState.queryString.replace(/pagererpage/, targetPage);
      }
      return targetUrl;
    },

    /**
     * Relocate client browser to target page.
     *
     * Relocation method is decided based on the context of the pager element:
     *  - a normal page - document.location is used.
     *  - a Views preview area in a Views settings form - AJAX is used.
     *  - a AJAX enabled Views context - AJAX is used.
     *
     * @param {HTMLElement} element
     *   The element triggering the relocation.
     * @param {number} targetPage
     *   The page to relocate to.
     *
     * @return {boolean}
     *   FALSE if already relocating.
     */
    relocate: function (element, targetPage) {
      // Check we are not relocating already.
      if (this.state.isRelocating) {
        return false;
      }
      this.state.isRelocating = true;

      var targetUrl = this.getTargetUrl(element.pagererState, targetPage, false);

      if (element.pagererState.context === 'document') {
        // Normal page.
        document.location = targetUrl;

      }
      else if (element.pagererState.context === 'viewsPreview') {
        // Element is in Views preview context.
        var previewRelocate = this.setAjaxViewPreviewPaging(null, null, targetUrl);
        previewRelocate.execute();

      }
      else if (element.pagererState.context === 'viewsAjax') {
        // Element is in Views AJAX context.
        var ajaxViewRelocate = this.setAjaxViewPaging(null, null, element.pagererState.ajaxViewId, targetUrl);
        ajaxViewRelocate.execute();

      }
    },

    /**
     * Views - Return parent Ajax view ID.
     *
     * @param {HTMLElement} element
     *   The element for which to find the Ajax view ID.
     *
     * @return {string|boolean}
     *   The Ajax view ID if found, FALSE otherwise.
     */
    getAjaxViewId: function (element) {
      if (drupalSettings && drupalSettings.views && drupalSettings.views.ajaxViews) {
        // Loop through active Views Ajax elements.
        var ajaxViews = drupalSettings.views.ajaxViews;
        for (var i in ajaxViews) {
          if (ajaxViews.hasOwnProperty(i)) {
            var view = '.js-view-dom-id-' + drupalSettings.views.ajaxViews[i].view_dom_id;
            var viewDiv = $(element).parents(view);
            if (viewDiv.length) {
              return i;
            }
          }
        }
      }
      return false;
    },

    /**
     * Views - Set Views AJAX paging.
     *
     * @param {HTMLElement} element
     *   The element to associate the AJAX behaviour with.
     * @param {event} event
     *   The event that will trigger the AJAX behaviour.
     * @param {string} ajaxViewId
     *   The AJAX id of the view.
     * @param {string} href
     *   The URL to invoke.
     *
     * @return {Drupal.Ajax}
     *   A Drupal.Ajax object.
     */
    setAjaxViewPaging: function (element, event, ajaxViewId, href) {
      var ajaxView = Drupal.views.instances[ajaxViewId];
      var viewData = {};
      $.extend(
        viewData,
        ajaxView.settings,
        Drupal.Views.parseQueryString(href),
        // Extract argument data from the URL.
        Drupal.Views.parseViewArgs(href, ajaxView.settings.view_base_path)
      );

      var settings = $.extend({}, ajaxView.element_settings, {
        submit: viewData,
        base: false,
      });
      // Load AJAX element_settings object and attach AJAX behaviour.
      if (element) {
        settings.element = element;
      }
      if (event) {
        settings.event = event;
      }
      ajaxView.pagerAjax = Drupal.ajax(settings);
      return ajaxView.pagerAjax;
    },

    /**
     * Views - Check if element is part of a view preview form.
     *
     * @param {HTMLElement} element
     *   The element to associate the AJAX behaviour with.
     *
     * @return {number}
     *   The number of '#views-live-preview' elements found. If above 0, then
     *   we are in a view preview form context.
     */
    getViewsPreviewContext: function (element) {
      return $(element).parents('#views-live-preview').length;
    },

    /**
     * Views - Set Views preview AJAX.
     *
     * @param {HTMLElement} element
     *   The element to associate the AJAX behaviour with.
     * @param {event} event
     *   The event that will trigger the AJAX behaviour.
     * @param {string} path
     *   The URL to invoke.
     *
     * @return {Drupal.Ajax}
     *   A Drupal.Ajax object.
     */
    setAjaxViewPreviewPaging: function (element, event, path) {
      var element_settings = {
        url: path,
        event: event,
        progress: {type: 'fullscreen'},
        method: 'replaceWith',
        wrapper: 'views-preview-wrapper'
      };
      if (element) {
        element_settings.base = $(element).attr('id');
        element_settings.element = element;
      }
      if (event) {
        element_settings.event = event;
      }
      return Drupal.ajax(element_settings);
    }
  };

})(jQuery);
;
/*! jQuery UI - v1.12.1 - 2017-03-31
* http://jqueryui.com
* Copyright jQuery Foundation and other contributors; Licensed  */
!function(a){"function"==typeof define&&define.amd?define(["jquery","./controlgroup","./checkboxradio","../keycode","../widget"],a):a(jQuery)}(function(a){return a.widget("ui.button",{version:"1.12.1",defaultElement:"<button>",options:{classes:{"ui-button":"ui-corner-all"},disabled:null,icon:null,iconPosition:"beginning",label:null,showLabel:!0},_getCreateOptions:function(){var a,b=this._super()||{};return this.isInput=this.element.is("input"),a=this.element[0].disabled,null!=a&&(b.disabled=a),this.originalLabel=this.isInput?this.element.val():this.element.html(),this.originalLabel&&(b.label=this.originalLabel),b},_create:function(){!this.option.showLabel&!this.options.icon&&(this.options.showLabel=!0),null==this.options.disabled&&(this.options.disabled=this.element[0].disabled||!1),this.hasTitle=!!this.element.attr("title"),this.options.label&&this.options.label!==this.originalLabel&&(this.isInput?this.element.val(this.options.label):this.element.html(this.options.label)),this._addClass("ui-button","ui-widget"),this._setOption("disabled",this.options.disabled),this._enhance(),this.element.is("a")&&this._on({keyup:function(b){b.keyCode===a.ui.keyCode.SPACE&&(b.preventDefault(),this.element[0].click?this.element[0].click():this.element.trigger("click"))}})},_enhance:function(){this.element.is("button")||this.element.attr("role","button"),this.options.icon&&(this._updateIcon("icon",this.options.icon),this._updateTooltip())},_updateTooltip:function(){this.title=this.element.attr("title"),this.options.showLabel||this.title||this.element.attr("title",this.options.label)},_updateIcon:function(b,c){var d="iconPosition"!==b,e=d?this.options.iconPosition:c,f="top"===e||"bottom"===e;this.icon?d&&this._removeClass(this.icon,null,this.options.icon):(this.icon=a("<span>"),this._addClass(this.icon,"ui-button-icon","ui-icon"),this.options.showLabel||this._addClass("ui-button-icon-only")),d&&this._addClass(this.icon,null,c),this._attachIcon(e),f?(this._addClass(this.icon,null,"ui-widget-icon-block"),this.iconSpace&&this.iconSpace.remove()):(this.iconSpace||(this.iconSpace=a("<span> </span>"),this._addClass(this.iconSpace,"ui-button-icon-space")),this._removeClass(this.icon,null,"ui-wiget-icon-block"),this._attachIconSpace(e))},_destroy:function(){this.element.removeAttr("role"),this.icon&&this.icon.remove(),this.iconSpace&&this.iconSpace.remove(),this.hasTitle||this.element.removeAttr("title")},_attachIconSpace:function(a){this.icon[/^(?:end|bottom)/.test(a)?"before":"after"](this.iconSpace)},_attachIcon:function(a){this.element[/^(?:end|bottom)/.test(a)?"append":"prepend"](this.icon)},_setOptions:function(a){var b=void 0===a.showLabel?this.options.showLabel:a.showLabel,c=void 0===a.icon?this.options.icon:a.icon;b||c||(a.showLabel=!0),this._super(a)},_setOption:function(a,b){"icon"===a&&(b?this._updateIcon(a,b):this.icon&&(this.icon.remove(),this.iconSpace&&this.iconSpace.remove())),"iconPosition"===a&&this._updateIcon(a,b),"showLabel"===a&&(this._toggleClass("ui-button-icon-only",null,!b),this._updateTooltip()),"label"===a&&(this.isInput?this.element.val(b):(this.element.html(b),this.icon&&(this._attachIcon(this.options.iconPosition),this._attachIconSpace(this.options.iconPosition)))),this._super(a,b),"disabled"===a&&(this._toggleClass(null,"ui-state-disabled",b),this.element[0].disabled=b,b&&this.element.blur())},refresh:function(){var a=this.element.is("input, button")?this.element[0].disabled:this.element.hasClass("ui-button-disabled");a!==this.options.disabled&&this._setOptions({disabled:a}),this._updateTooltip()}}),a.uiBackCompat!==!1&&(a.widget("ui.button",a.ui.button,{options:{text:!0,icons:{primary:null,secondary:null}},_create:function(){this.options.showLabel&&!this.options.text&&(this.options.showLabel=this.options.text),!this.options.showLabel&&this.options.text&&(this.options.text=this.options.showLabel),this.options.icon||!this.options.icons.primary&&!this.options.icons.secondary?this.options.icon&&(this.options.icons.primary=this.options.icon):this.options.icons.primary?this.options.icon=this.options.icons.primary:(this.options.icon=this.options.icons.secondary,this.options.iconPosition="end"),this._super()},_setOption:function(a,b){return"text"===a?void this._super("showLabel",b):("showLabel"===a&&(this.options.text=b),"icon"===a&&(this.options.icons.primary=b),"icons"===a&&(b.primary?(this._super("icon",b.primary),this._super("iconPosition","beginning")):b.secondary&&(this._super("icon",b.secondary),this._super("iconPosition","end"))),void this._superApply(arguments))}}),a.fn.button=function(b){return function(){return!this.length||this.length&&"INPUT"!==this[0].tagName||this.length&&"INPUT"===this[0].tagName&&"checkbox"!==this.attr("type")&&"radio"!==this.attr("type")?b.apply(this,arguments):(a.ui.checkboxradio||a.error("Checkboxradio widget missing"),0===arguments.length?this.checkboxradio({icon:!1}):this.checkboxradio.apply(this,arguments))}}(a.fn.button),a.fn.buttonset=function(){return a.ui.controlgroup||a.error("Controlgroup widget missing"),"option"===arguments[0]&&"items"===arguments[1]&&arguments[2]?this.controlgroup.apply(this,[arguments[0],"items.button",arguments[2]]):"option"===arguments[0]&&"items"===arguments[1]?this.controlgroup.apply(this,[arguments[0],"items.button"]):("object"==typeof arguments[0]&&arguments[0].items&&(arguments[0].items={button:arguments[0].items}),this.controlgroup.apply(this,arguments))}),a.ui.button});;
/**
 * @file
 * Pagerer scrollpane pager scripts.
 */

(function ($) {

  'use strict';

  Drupal.behaviors.pagererScrollpane = {

    attach: function (context, settings) {

      /**
       * Constants.
       */
      var PAGERER_LEFT = -1;
      var PAGERER_RIGHT = 1;

      /**
       * Pagerer embedded scrollpane event binding.
       */
      $('.pagerer-scrollpane-embedded', context).once('pagerer').each(function (index) {
        Drupal.pagerer.state.isRelocating = false;

        // Get the scrollpane components, i.e. the embedded pager, the
        // pager wrapped within it, and the wrapped pager elements.
        var innerPager = $(this).get(0);
        var pagerList = $(this).find('.pager__items').get(0);
        var viewport = $(this).find('.pagerer-viewport');
        var pagerElements = $(pagerList).find('li');
        var pagerPages = $(pagerList).find('li:not(.pagerer-separator)');
        var pagerSeparators = $(pagerList).find('li.pagerer-separator');
        var cellHeight;
        var innerPagerWidth;
        var pagerWidth;

        // Attach state variables to the wrapped pager.
        innerPager.pagererState = Drupal.pagerer.evalState(this);
        $.extend(innerPager.pagererState, {
          outerPager: $(innerPager).parents('.pagerer-pager-scrollpane').get(0),
          innerPager: innerPager,
          pagerList: pagerList,
          pageWidth: 0,
          separatorWidth: 0,
          leftOverflow: 0,
          rightOverflow: 0,
          scrolling: false,
          scrollingDuration: 0,
          fastScrolling: 0
        });

        // Determine pager separator width, if existing.
        if (pagerSeparators.length > 0) {
          innerPager.pagererState.separatorWidth = Math.ceil($(pagerSeparators[0]).outerWidth(true));
        }

        // Determine pager element width from maximum width possible.
        if (innerPager.pagererState.total > 1) {
          var pageDupe = $(pagerPages[0]).clone();
          pageDupe.removeClass('is-active');
          pageDupe.addClass('pagerer-dupe');
          $(pageDupe).find('a').text(Drupal.pagerer.indexToTag(innerPager.pagererState.total - 1, innerPager.pagererState, 'page'));
          $(pagerList).append(pageDupe);
          innerPager.pagererState.pageWidth = Math.ceil($(pageDupe).outerWidth(true));
          cellHeight = Math.ceil($(pageDupe).outerHeight(true));
          pagerWidth = getPagerWidth(innerPager.pagererState, pagerPages.length, pagerSeparators.length);
          innerPagerWidth = Math.min((innerPager.pagererState.quantity * innerPager.pagererState.pageWidth) + ((innerPager.pagererState.quantity - 1) * innerPager.pagererState.separatorWidth), pagerWidth);
          $(pagerList).find('.pagerer-dupe').remove();
          $(pagerList).css({
            width: pagerWidth + 'px',
            height: cellHeight + 'px',
            left: '0px'
          });
        }
        else {
          // If no pages, then only 'No pages' message is in the pager.
          innerPager.pagererState.pageWidth = $(pagerPages[0]).outerWidth(true);
          cellHeight = $(pagerPages[0]).outerHeight(true);
          pagerWidth = innerPager.pagererState.pageWidth;
          innerPagerWidth = innerPager.pagererState.pageWidth;
          $(pagerPages[0]).css('left', '0px');
          $(pagerList).css({
            width: pagerWidth + 'px',
            height: cellHeight + 'px'
          });
        }

        // Set dimensions.
        $(innerPager).css({
          'padding-left': Math.ceil(innerPager.pagererState.pageWidth / 4) + 'px',
          'padding-right': Math.ceil(innerPager.pagererState.pageWidth / 4) + 'px',
          'width': innerPagerWidth + 'px',
          'height': cellHeight + 'px'
        });
        $(viewport).css({
          width: innerPagerWidth + 'px',
          height: (cellHeight * 2) + 'px'
        });
        // If no pages, return.
        if (innerPager.pagererState.total <= 1) {
          return;
        }

        // Scan pager elements to allocate 'left' property.
        var elementLeft = 0;
        var pagerCurrentPage = 0;
        pagerElements.each(function (index) {
          if (!$(this).hasClass('pagerer-separator')) {
            var pageWidth = $(this).outerWidth(true);
            var margin = (innerPager.pagererState.pageWidth - pageWidth) / 2;
            $(this).css({
              'left': elementLeft + 'px',
              'margin-left': (parseInt($(this).css('margin-left')) + margin) + 'px',
              'margin-right': (parseInt($(this).css('margin-right')) + margin) + 'px'
            });
            if ($(this).hasClass('is-active')) {
              pagerCurrentPage = index;
            }
            elementLeft += innerPager.pagererState.pageWidth;
          }
          else {
            $(this).css('left', elementLeft + 'px');
            elementLeft += innerPager.pagererState.separatorWidth;
          }
        });

        // Set current item to the middle of the innerPager.
        var pagerLeftPage = pagerCurrentPage - Math.floor(innerPager.pagererState.quantity / 2);
        if (pagerLeftPage < 0) {
          pagerLeftPage = 0;
        }
        else if (pagerLeftPage > pagerPages.length - innerPager.pagererState.quantity) {
          pagerLeftPage = pagerPages.length - innerPager.pagererState.quantity;
        }

        // Left- and right-most pages.
        var pagerLeftPageIndex = Drupal.pagerer.elementToIndex(pagerPages[0], innerPager.pagererState);
        var pagerRightPageIndex = Drupal.pagerer.elementToIndex(pagerPages[pagerPages.length - 1], innerPager.pagererState);

        // Add elements to the left.
        innerPager.pagererState.leftOverflow = addPagerElements(
          innerPager.pagererState,
          PAGERER_LEFT,
          pagerLeftPageIndex - 1,
          innerPager.pagererState.quantity,
          false
        );

        // Add elements to the right.
        innerPager.pagererState.rightOverflow = addPagerElements(
          innerPager.pagererState,
          PAGERER_RIGHT,
          pagerRightPageIndex + 1,
          innerPager.pagererState.quantity,
          false
        );

      });

      /**
        * Pagerer scrollpane buttons event binding.
        *
        * The navigation buttons shift the entire pager embedded in the
        * scrollpane inner pager.
        * Once mouse is pressed on a prev/next button, the pager is moved
        * right/left by one position. If mouse is kept pressed, the pager will
        * shift continuosly. When mouse is released or moved away from the icon,
        * shifting will stop.
        * If mouse is pressed on a first/last button, the pager is moved to
        * first/last page.
        */
      $('.pagerer-scrollpane-button', context).once('pagerer').each(function (index) {
        this.pagererState = {
          outerPager: $(this).parents('.pagerer-pager-scrollpane').get(0),
          innerPager: $(this).parents('.pagerer-pager-scrollpane').find('.pagerer-scrollpane-embedded').get(0),
          pager: $(this).parents('.pagerer-pager-scrollpane').find('.pagerer-scrollpane-embedded').find('.pager__items').get(0)
        };
        $(this).button();
        // Set button enable/disabled state.
        setButtonState(this);
        $(this)
          .on('mousedown', function (event) {
            var button = this;
            var innerPager = button.pagererState.innerPager;
            var scope;

            // Return immediately if button is disabled.
            if ($(button).button('option', 'disabled')) {
              return false;
            }

            // Determine scope of scroll request.
            if ($(button).hasClass('pagerer-next')) {
              scope = 'next';
            }
            else if ($(button).hasClass('pagerer-previous')) {
              scope = 'previous';
            }
            else if ($(button).hasClass('pagerer-first')) {
              scope = 'first';
            }
            else if ($(button).hasClass('pagerer-last')) {
              scope = 'last';
            }

            // If scrollpane is currently transitioning, and a request for a
            // different scope is received, reset all transitions.
            if (innerPager.pagererState.scrolling && innerPager.pagererState.scrolling !== scope) {
              Drupal.pagerer.reset();
            }

            // Transition duration based on single click.
            switch (innerPager.pagererState.scrollingDuration) {
              case 0:
                innerPager.pagererState.scrollingDuration = 500;
                break;

              case 500:
              case 200:
                innerPager.pagererState.scrollingDuration = 200;
                break;

            }
            scrollRequestEnqueue(innerPager.pagererState, scope, innerPager.pagererState.scrollingDuration);

            // If button is kept pressed long enough, start fastScrolling mode.
            if ((scope === 'previous' || scope === 'next') && !$(button).button('option', 'disabled')) {
              Drupal.pagerer.state.timeoutAction = setTimeout(function () {
                innerPager.pagererState.fastScrolling = 1;
                scrollRequestEnqueue(innerPager.pagererState, scope, getScrollDuration(innerPager.pagererState));
              }, innerPager.pagererState.scrollingDuration + 20);
            }
          })
          .on('mouseup mouseleave', function (event) {
            // Stop fastScrolling mode if active.
            clearTimeout(Drupal.pagerer.state.timeoutAction);
            this.pagererState.innerPager.pagererState.fastScrolling = 0;
          });
      });

      /**
       * Helper functions.
       */

      /**
       * Enqueues a scrollpane scroll request.
       *
       * Scrolls embedded pager to first/previous/next/last 'scope' in a
       * 'duration' timelapse.
       *
       * @param {object} pState
       *   A Pagerer state object.
       * @param {string} scope
       *   The scope of the scroll, first/previous/next/last.
       * @param {number} duration
       *   The duration of the scroll.
       */
      function scrollRequestEnqueue(pState, scope, duration) {
        $(pState.innerPager).queue('pagererQueue', function () {
          pState.scrolling = scope;

          // In fastScrolling mode, enqueue next iteration straight ahead.
          if (pState.fastScrolling) {
            pState.fastScrolling++;
            scrollRequestEnqueue(pState, scope, getScrollDuration(pState));
          }

          var pagerPages = $(pState.pagerList).find('li:not(.pagerer-separator)');
          var first = Drupal.pagerer.elementToIndex(pagerPages[0], pState);
          var last = Drupal.pagerer.elementToIndex(pagerPages[pagerPages.length - 1], pState);
          var addedElements;
          var fromEl;

          switch (scope) {
            // ***** Next - shift left.
            case 'next':
              // Add a pager element on the right.
              addedElements = addPagerElements(pState, PAGERER_RIGHT, last + 1, 1);
              if (pState.leftOverflow < pState.quantity) {
                // There's space on the left side to shift pager.
                if (pState.rightOverflow > 0) {
                  // Pager overflows to the right, so shift pager to the left.
                  shiftPagerList(pState, PAGERER_LEFT, 1, duration);
                  return;
                }
              }
              else {
                // No space on the left side to shift pager.
                if (addedElements || pState.rightOverflow > 0) {
                  // Remove first element on the left, then shift pager one
                  // position to the left.
                  removePagerElements(pState, PAGERER_LEFT, 1);
                  shiftPagerList(pState, PAGERER_LEFT, 1, duration);
                  return;
                }
              }
              break;

            // ***** Previous - shift right.
            case 'previous':
              // Add a pager element on the left.
              addedElements = addPagerElements(pState, PAGERER_LEFT, first - 1, 1);
              if (pState.rightOverflow < pState.quantity) {
                // There's space on the right side to shift pager.
                if (pState.leftOverflow > 0) {
                  // Pager overflows to the left, so shift pager to the right.
                  shiftPagerList(pState, PAGERER_RIGHT, 1, duration);
                  return;
                }
              }
              else {
                // No space on the right side to shift pager.
                if (addedElements || pState.leftOverflow > 0) {
                  // Remove first element on the right, then shift pager one
                  // position to the right.
                  removePagerElements(pState, PAGERER_RIGHT, 1);
                  shiftPagerList(pState, PAGERER_RIGHT, 1, duration);
                  return;
                }
              }
              break;

            // ***** First.
            case 'first':
              fromEl = Math.min((pState.quantity * 2) - 1, first - 1);
              addedElements = addPagerElements(pState, PAGERER_LEFT, fromEl, pState.quantity * 2);
              shiftPagerList(
                pState,
                PAGERER_RIGHT,
                pState.leftOverflow,
                duration,
                function () {
                  if (pState.rightOverflow > pState.quantity) {
                    removePagerElements(pState, PAGERER_RIGHT, pState.rightOverflow - pState.quantity);
                  }
                }
              );
              return;

            // ***** Last.
            case 'last':
              fromEl = Math.max((pState.total - (pState.quantity * 2)), last + 1);
              addedElements = addPagerElements(pState, PAGERER_RIGHT, fromEl, pState.quantity * 2);
              shiftPagerList(
                pState,
                PAGERER_LEFT,
                pState.rightOverflow,
                duration,
                function () {
                  if (pState.leftOverflow > pState.quantity) {
                    removePagerElements(pState, PAGERER_LEFT, pState.leftOverflow - pState.quantity);
                  }
                }
              );
              return;

          }

          // Dequeue next iteration in the queue.
          scrollRequestDequeue(pState);

        });

        // Starts the queue processing.
        if (pState.scrolling === false) {
          $(pState.innerPager).dequeue('pagererQueue');
        }
      }

      /**
       * Dequeues a scrollpane scroll request.
       *
       * If no more requests in the queue, clear state variables.
       *
       * @param {object} pState
       *   A Pagerer state object.
       */
      function scrollRequestDequeue(pState) {
        if ($(pState.innerPager).queue('pagererQueue').length > 0) {
          $(pState.innerPager).dequeue('pagererQueue');
        }
        else {
          pState.scrolling = false;
          pState.scrollingDuration = 0;
          pState.fastScrolling = 0;
        }
      }

      /**
       * Gets duration of next scroll transition.
       *
       * @param {object} pState
       *   A Pagerer state object.
       *
       * @return {number}
       *   The duration (msec) of next scroll transition.
       */
      function getScrollDuration(pState) {
        var ret = ((pState.fastScrolling - 1) * -19.8) + 200;
        return (ret > 2) ? ret : 2;
      }

      /**
       * Enables/disables scrollpane buttons.
       *
       * @param {HTMLElement} element
       *   An HTML element for a scrollpane button.
       */
      function setButtonState(element) {
        if ($(element).hasClass('pagerer-first') || $(element).hasClass('pagerer-previous')) {
          if (element.pagererState.innerPager.pagererState.leftOverflow === 0) {
            $(element).mouseup().mouseleave();
            $(element).button('disable');
          }
          else {
            $(element).button('enable');
          }
        }
        if ($(element).hasClass('pagerer-next') || $(element).hasClass('pagerer-last')) {
          if (element.pagererState.innerPager.pagererState.rightOverflow === 0) {
            $(element).mouseup().mouseleave();
            $(element).button('disable');
          }
          else {
            $(element).button('enable');
          }
        }
      }

      /**
       * Add pages to the embedded pager.
       *
       * Add 'count' pages and separators on left/right 'side', starting with
       * page at index 'start'.
       *
       * @param {object} pState
       *   A Pagerer state object.
       * @param {number} side
       *   The side of the pager to add elements to,
       *   PAGERER_LEFT|PAGERER_RIGHT.
       * @param {number} start
       *   The 0-indexed page number to start adding from.
       * @param {number} count
       *   The number of elements to remove.
       * @param {boolean} onReady
       *   TRUE if function is invoked at .ready().
       *
       * @return {number}
       *   The number of pages added to the pager.
       */
      function addPagerElements(pState, side, start, count, onReady) {

        // onReady will be true if function is invoked at .ready()
        onReady = onReady || false;

        var pagerPages;
        var pageWidth;
        var pageDupe;
        var margin;
        var pagerSeparators;
        var separatorWidth = 0;
        var separatorDupe;
        var last;
        var currentLeft;
        var i;

        for (i = 0; i < count; i++) {
          pagerPages = $(pState.pagerList).find('li:not(.pagerer-separator)');
          pagerSeparators = $(pState.pagerList).find('li.pagerer-separator');

          // If we have separators, prepare dupe and set width.
          if (pagerSeparators.length) {
            separatorDupe = $(pagerSeparators[0]).clone();
            separatorWidth = pState.separatorWidth;
          }
          else {
            separatorWidth = 0;
          }

          // Add separator and page.
          if (side === PAGERER_RIGHT) {
            last = pagerPages.length - 1;
            // Skip at end of run.
            if (Drupal.pagerer.elementToIndex(pagerPages[last], pState) >= (pState.total - 1)) {
              break;
            }
            // Current left.
            currentLeft = parseInt($(pagerPages[last]).css('left'));
            // Separator.
            if (separatorWidth) {
              $(separatorDupe).css('left', (currentLeft + pState.pageWidth) + 'px');
              $(pState.pagerList).append(separatorDupe);
            }
            // Page.
            pageDupe = $(pagerPages[last]).clone();
            setPagerElementHtml(pageDupe, pState, start + i, onReady);
            $(pageDupe)
              .css('left', (currentLeft + pState.pageWidth + separatorWidth) + 'px');
            $(pState.pagerList).append(pageDupe);
            pageWidth = $(pageDupe).outerWidth(true);
            margin = (pState.pageWidth - pageWidth) / 2;
            $(pageDupe).css('margin-left', (parseInt($(pageDupe).css('margin-left')) + margin) + 'px');
            $(pageDupe).css('margin-right', (parseInt($(pageDupe).css('margin-right')) + margin) + 'px');
            pState.rightOverflow++;
          }
          else if (side === PAGERER_LEFT) {
            // Skip at end of run.
            if (Drupal.pagerer.elementToIndex(pagerPages[0], pState) === 0) {
              break;
            }
            // Current left.
            currentLeft = parseInt($(pagerPages[0]).css('left'));
            // Separator.
            if (separatorWidth) {
              $(separatorDupe).css('left', (currentLeft - separatorWidth) + 'px');
              $(pState.pagerList).prepend(separatorDupe);
            }
            // Page.
            pageDupe = $(pagerPages[0]).clone();
            setPagerElementHtml(pageDupe, pState, start - i, onReady);
            $(pageDupe)
              .css('left', (currentLeft - pState.pageWidth - separatorWidth) + 'px');
            $(pState.pagerList).prepend(pageDupe);
            pageWidth = $(pageDupe).outerWidth(true);
            margin = (pState.pageWidth - pageWidth) / 2;
            $(pageDupe).css('margin-left', (parseInt($(pageDupe).css('margin-left')) + margin) + 'px');
            $(pageDupe).css('margin-right', (parseInt($(pageDupe).css('margin-right')) + margin) + 'px');
            pState.leftOverflow++;
          }
        }
        // Resize pager.
        pagerPages = $(pState.pagerList).find('li:not(.pagerer-separator)');
        pagerSeparators = $(pState.pagerList).find('li.pagerer-separator');
        $(pState.pagerList).css('width', getPagerWidth(pState, pagerPages.length, pagerSeparators.length) + 'px');
        // If elements were added on the left side, pager and elements will be
        // misplaced, so reposition the elements.
        if (side === PAGERER_LEFT) {
          $(pState.pagerList).css({
            left: (parseInt($(pState.pagerList).css('left')) - (pState.pageWidth * i) - (pState.separatorWidth * i)) + 'px'
          });
          shiftPagerElements(pState, PAGERER_RIGHT, i);
        }
        return i;
      }

      /**
       * Removes pages from the embedded pager.
       *
       * Remove 'count' pages and separators on left/right 'side'.
       *
       * @param {object} pState
       *   A Pagerer state object.
       * @param {number} side
       *   The side of the pager from where to remove elements,
       *   PAGERER_LEFT|PAGERER_RIGHT.
       * @param {number} count
       *   The number of elements to remove.
       *
       * @return {boolean}
       *   TRUE if successful.
       */
      function removePagerElements(pState, side, count) {
        var pagerPages;
        var pagerSeparators;
        var i;

        for (i = 0; i < count; i++) {
          pagerPages = $(pState.pagerList).find('li:not(.pagerer-separator)');
          pagerSeparators = $(pState.pagerList).find('li.pagerer-separator');
          if (side === PAGERER_RIGHT) {
            $(pagerPages[pagerPages.length - 1]).remove();
            if (pagerSeparators.length) {
              $(pagerSeparators[pagerSeparators.length - 1]).remove();
            }
            pState.rightOverflow--;
          }
          else if (side === PAGERER_LEFT) {
            $(pagerPages[0]).remove();
            if (pagerSeparators.length) {
              $(pagerSeparators[0]).remove();
            }
            pState.leftOverflow--;
          }
        }
        // Resize pager.
        $(pState.pagerList).css('width', getPagerWidth(pState, pagerPages.length - 1, pagerSeparators.length - 1) + 'px');
        // If elements were removed on the left side, the remaining ones will
        // be misplaced wihin the pager, so reposition them.
        if (side === PAGERER_LEFT) {
          $(pState.pagerList).css({
            left: (parseInt($(pState.pagerList).css('left')) + ((pState.pageWidth + pState.separatorWidth) * count)) + 'px'
          });
          shiftPagerElements(pState, PAGERER_LEFT, i);
        }
        return true;
      }

      /**
       * Shifts the embedded pager elements.
       *
       * Shift the elements of the embedded pager by 'count' pages in
       * left/right 'direction'.
       *
       * @param {object} pState
       *   A Pagerer state object.
       * @param {number} direction
       *   The direction of the shift, PAGERER_LEFT|PAGERER_RIGHT.
       * @param {number} count
       *   The number of pages to shift.
       */
      function shiftPagerElements(pState, direction, count) {
        $(pState.pagerList).find('li').each(function (index) {
          $(this).css({
            left: (parseInt($(this).css('left')) + (direction * (pState.pageWidth + pState.separatorWidth) * count)) + 'px'
          });
        });
      }

      /**
       * Shifts the embedded pager in the inner pager.
       *
       * Shift the entire pager by 'count' pages in left/right 'direction'.
       * If 'duration' is set (msec), the shift will be jQuery animated.
       * A 'complete' callback is executed at completion if set.
       * Overall pager shift is executed in a jQuery queue, so next action is
       * dequeued at the end of the call (for execution after the animation
       * is completed).
       *
       * @param {object} pState
       *   A Pagerer state object.
       * @param {number} direction
       *   The direction of the shift, PAGERER_LEFT|PAGERER_RIGHT.
       * @param {number} count
       *   The number of pages to shift.
       * @param {number} [duration]
       *   If set (msec), the shift will be jQuery animated.
       * @param {callback} [complete]
       *   Callback executed at completion if set.
       */
      function shiftPagerList(pState, direction, count, duration, complete) {
        var left = parseInt($(pState.pagerList).css('left'));
        var offset = direction * count * (pState.pageWidth + pState.separatorWidth);
        $(pState.pagerList).animate(
          {
            left: (left + offset) + 'px'
          },
          {
            duration: duration,
            queue: false,
            complete: function () {
              pState.leftOverflow -= direction * count;
              pState.rightOverflow += direction * count;
              if (typeof complete !== 'undefined') {
                complete();
              }
              if (pState.leftOverflow <= 1 || pState.rightOverflow <= 1) {
                $(pState.outerPager).find('.ui-button').each(function () {
                  setButtonState(this);
                });
              }
              scrollRequestDequeue(pState);
            }
          }
        );
      }

      /**
       * Sets HTML of a page element in the pager.
       *
       * @param {HTMLElement} element
       *   An HTML element.
       * @param {object} pState
       *   A Pagerer state object.
       * @param {number} targetPage
       *   The page to relocate to.
       * @param {boolean} onReady
       *   TRUE if function is invoked at .ready().
       */
      function setPagerElementHtml(element, pState, targetPage, onReady) {

        // onReady will be true if function is invoked at .ready()
        onReady = onReady || false;

        // Add 'is-active' class to current page.
        if (targetPage === pState.current) {
          $(element[0]).addClass('is-active');
        }
        else {
          $(element[0]).removeClass('is-active');
        }

        // Page link.
        var anchor = $(element).find('a');
        if (!anchor.length) {
          $(element).text('');
          $(element).append('<a></a>');
          anchor = $(element).find('a');
        }
        // Format hyperlink.
        var targetUrl = Drupal.pagerer.getTargetUrl(pState, targetPage, true);
        anchor[0].href = targetUrl;
        $(anchor[0]).text(Drupal.pagerer.indexToTag(targetPage, pState, 'page'));
        anchor[0].title = Drupal.pagerer.indexToTag(targetPage, pState, 'title');
        // In views, add AJAX where appropriate.
        if (!onReady && pState.context === 'viewsAjax') {
          // Element is in AJAX enabled view.
          Drupal.pagerer.setAjaxViewPaging(anchor[0], 'click', pState.ajaxViewId, targetUrl);
        }
        else if (pState.context === 'viewsPreview') {
          // Element is in Views preview context.
          Drupal.pagerer.setAjaxViewPreviewPaging(anchor[0], 'click', targetUrl);
        }
      }

      /**
       * Calculates embedded pager width.
       *
       * @param {object} pState
       *   A Pagerer state object.
       * @param {number} pages
       *   The number of page elements in the pager.
       * @param {number} separators
       *   The number of separator elements in the pager.
       *
       * @return {number}
       *   The total width of the pager.
       */
      function getPagerWidth(pState, pages, separators) {
        return ((pages * pState.pageWidth) + (separators * pState.separatorWidth));
      }

    },

    detach: function (context, settings) {
      $('.pagerer-scrollpane-embedded', context).each(function (index) {
        Drupal.pagerer.detachState(this);
      });
    }

  };
})(jQuery);
;
