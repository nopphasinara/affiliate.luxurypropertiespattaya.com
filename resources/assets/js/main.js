/**
 * The semi-colon before function invocation is a safety net against concatenated
 * scripts and/or other plugins which may not be closed properly.
 * https://github.com/UziTech/hyperlink-hyperclick
 */
;

window.GC = {
  breakpoints: [ 'xs', 'sm', 'md', 'lg', 'xl' ],
  oldBreakpoint: null,
  events: {},
  isActivated: false,
  isBreakpointChanged: false,

  findIndex: function (obj, index) {
    if (typeof obj == 'undefined' || typeof index == 'undefined' || !obj || !index) return false;

    if (Object.keys(obj).indexOf(index) == -1) return false;

    return true;
  },

  currentBreakpoint: function () {
    var self = window.GC;
    var currentBreakpoint;

    self.isBreakpointChanged = false;

    self.breakpoints.forEach(function (breakpoint, index) {
      var domElement = $('#breakpoints .'+ breakpoint +'');

      if (domElement.is(':visible') == true) {
        if (self.oldBreakpoint == null || !self.oldBreakpoint) {
          self.oldBreakpoint = breakpoint;
          self.isBreakpointChanged = true;
        } else {
          if (self.oldBreakpoint != breakpoint) {
            self.oldBreakpoint = breakpoint;
            self.isBreakpointChanged = true;
          }
        }

        currentBreakpoint = breakpoint;
        return currentBreakpoint;
      }
    });

    return currentBreakpoint;
  },

  isMobile: function () {
    var self = window.GC;
    var currentBreakpoint = self.currentBreakpoint();

    if (currentBreakpoint == 'xs' || currentBreakpoint == 'sm') {
      return true;
    }

    return false;
  },

  isTablet: function () {
    var self = window.GC;
    var currentBreakpoint = self.currentBreakpoint();

    if (currentBreakpoint == 'md') {
      return true;
    }

    return false;
  },

  breakpointChanged: function () {
    var self = window.GC;
    return self.isBreakpointChanged;
  },

  removeBreakpoints: function (set_breakpoint = null) {
    var self = window.GC;

    self.breakpoints.forEach(function (breakpoint, index) {
      $('body').removeClass(breakpoint);
    });

    if (set_breakpoint && set_breakpoint != null) $('body').addClass(set_breakpoint);
  },

  setDevice: function () {
    var self = window.GC;
    var currentBreakpoint = self.currentBreakpoint();

    if (self.breakpointChanged() == true) {
      var body = $('body');

      self.removeBreakpoints(currentBreakpoint);

      if (self.isMobile() == true) {
        if (body.hasClass('mobile') != true) body.addClass('mobile');
      } else {
        if (body.hasClass('mobile') == true) body.removeClass('mobile');
      }

      if (self.isTablet() == true) {
        if (body.hasClass('tablet') != true) body.addClass('tablet');
      } else {
        if (body.hasClass('tablet') == true) body.removeClass('tablet');
      }
    }
  },

  checkDevice: function () {
    var self = window.GC;
    var currentBreakpoint = self.currentBreakpoint();
    return currentBreakpoint;
  },
};

$(document).ready(function () {
  GC.setDevice();

  $('*[data-toggle="dropdown-hover"]').on('mouseenter focus', function (e) {
    if (GC.isMobile() == true) return;

    var self = $(this);
    var menu = $(this).children('.dropdown-menu');
    self.addClass('show');
    menu.addClass('show');
  }).on('mouseleave blur', function (e) {
    var self = $(this);
    var menu = $(this).children('.dropdown-menu');
    setTimeout(function () {
      if (GC.isMobile() == true) {
        menu.slideUp(200);
      }

      self.removeClass('show');
      menu.removeClass('show');
    }, 200);
  });

  $('.dropdown-menu-toggle').on('click', function (e) {
    if (GC.isMobile() != true) return;

    var self = $(this);
    var parent = self.parent();
    var menu = parent.children('.dropdown-menu');
    menu.slideToggle(200);
    parent.removeClass('show');
    menu.removeClass('show');
  });

  $('.btn-logout').on('click', function (evt) {
    evt.preventDefault();

    var self = $(this);
    var form = 'formLogout';

    if (typeof self.attr('data-form') != 'undefined' && self.attr('data-form')) form = self.attr('data-form');
    form = document.getElementById(''+ form +'');
    form.submit();
  });
});

window.addEventListener('scroll', function () {
  GC.setDevice();
});

window.addEventListener('resize', function () {
  GC.setDevice();
});
