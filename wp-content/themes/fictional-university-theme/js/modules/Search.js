class Search {
  // 1. Describe and create /initiate our object
  constructor(){
    this.openButton = jQuery(".js-search-trigger");
    this.closeButton =jQuery(".search-overlay__close");
    this.searchOverlay = jQuery(".search-overlay");
    this.events();
    this.isOverlayOpen = false;
  }

  // 2. events
  events() {
    this.openButton.on('click',this.openOverlay.bind(this));
    this.closeButton.on('click',this.closeOverlay.bind(this));
    jQuery(document).on('keydown',this.keyPressDispatcher.bind(this));
  }


  // // 3. methods (function, action...)
  openOverlay(){
    this.searchOverlay.addClass('search-overlay--active');
    jQuery('body').addClass('body-no-scroll');
    this.isOverlayOpen = true;
    console.log('open');
  }

  closeOverlay(){
    this.searchOverlay.removeClass('search-overlay--active');
    jQuery('body').removeClass('body-no-scroll');
    this.isOverlayOpen = false;
  }

  keyPressDispatcher(e){
    if(e.keyCode === 83 && this.isOverlayOpen === false) {
      this.openOverlay();
    } else if(e.keyCode === 27 && this.isOverlayOpen === true) {
      this.closeOverlay();
    }
  }
}

var search = new Search();

