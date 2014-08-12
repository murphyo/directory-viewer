'use strict';

window.jQuery(document).ready(function($) {
  
    $.ajax({            
     url: "get_imgs.php", 
     type: "POST",          
     dataType: "HTML", 
         success: function( data ) { 
     jQuery('body').append(data);
         },
         error: function(jqXHR, data ) {        
     alert ('Ajax request Failed.');    
     }
     });

});
