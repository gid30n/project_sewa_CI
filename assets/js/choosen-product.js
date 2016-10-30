var xx=0;
var index = -1;
function getProducts() {
 
  var images = new Array();    
  $.getJSON("/api/all-ads/", null, function( ajaxData ) {
																				  
 
 
    /*for (var i = 0; i < ajaxData.length; i++) {
      images[i] = new Image();
      images[i].src = "uploads/" + ajaxData[i].gallery[0].src;
	  //xx++;
	 // console.log(images[i]);
    }*/
	
	//alert(ajaxData[0].gallery[0].src);
	
	/*function getValueByKey(key, data) {
    var i, len = data.length;
    
    for (i = 0; i < len; i++) {
        if (data[i] && data[i].hasOwnProperty(key)) {
            return data[i][key];
        }
    }
    
    return -1;
}*/
 
 
 
 
    ko.applyBindings( new ChooseProductViewModel( ajaxData ) );
	
  } ); 
}
 
/* The Knockout View Model object */
 
function ChooseProductViewModel( productData ) {
 
  /* Store 'this' in 'self' so we can use it throughout the object */
  var self = this;
  
  self.inc = function(val) {
    return ++index;
  }

 
  /* Store the retrieved list of product objects in the view model
   * so that our view can access it
   */
  self.products = productData;
 
  /* Create Knockout observables for various parts of our view */
  self.chosenProduct = ko.observable( false );   /* The currently-chosen product object */
  self.chosenOptions = ko.observableArray();     /* The currently-chosen options array */
  self.qty = ko.observable( 1 );                 /* The currently-entered quantity value */
 
  /* Compute the total order price */
 
  self.totalPrice = ko.computed( function() {
 
    /* Grab the currently-chosen product object */
    var product = self.chosenProduct();
 
    /* If no product has been chosen yet, do nothing */
    if ( !product ) return false;
 
    /* Store the base product price */
    var price = product.price;
 
    /* Add the price of each chosen option to the overall price */
 
    var chosenOptions =  self.chosenOptions();
 
    for ( i=0; i<product.options.length; i++ ) {
      for ( j=0; j<chosenOptions.length; j++ ) {
        if ( product.options[i].optionId == chosenOptions[j] ) {
          price += product.options[i].price;
          break;
        }
      }
    }
 
    /* Return the total price multiplied by the chosen quantity */
    return ( price * self.qty() ).toFixed( 2 );
  } );
 
 
  /* Change the chosen product and scroll down to the "chosen product" box */
 
  self.chooseProduct = function( product ) {
    self.chosenProduct( product );
    $('html,body').animate( { scrollTop: $("#chosenProduct").offset().top }, 'slow' );
  }
 
 
  /* Determine if the supplied option has been selected by the user */
 
  self.optionSelected = function( optionId ) {
 
    var chosenOptions =  self.chosenOptions();
    selected = false;
 
    for ( j=0; j<chosenOptions.length; j++ ) {
      if ( optionId == chosenOptions[j] ) {
        selected = true;
        break;
      }
    }
 
    return selected;
  }
 
 
  /* Determine if the supplied product has been selected by the user */
 
  self.productSelected = function( productId ) {
    return ( productId == self.chosenProduct().id );
  }
 
 
  /* Send the product data to the server */
 
  self.buyProduct = function() {
 
    /* Extract just the selected options for the chosen product */
    var product = self.chosenProduct();
    var chosenOptions = self.chosenOptions();
    var chosenOptionsForProduct = [];
 
    for ( i=0; i<product.options.length; i++ ) {
      for ( j=0; j<chosenOptions.length; j++ ) {
        if ( product.options[i].optionId == chosenOptions[j] ) {
          chosenOptionsForProduct.push( product.options[i].optionId );
          break;
        }
      }
    }
 
    /* Compose the data object */
    var data = {
      "chosenProductId": self.chosenProduct().id,
      "chosenOptions": chosenOptionsForProduct,
      "qty": self.qty()
    }
 
    /* Send the data to the server */
    alert( "Data to send to server:\n\n" + JSON.stringify( data ) );
  }
    
}