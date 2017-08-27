// shipBuilder.js

$(document).ready(function() {
    
    // initialize globals
    
    var loadingError = false;
    
    // test for shipFile in Local Storage:
    
    
        // if shipFile does NOT exist:
            // show "loading" modal:
            loadingModal("show");
    
            // get JSON file from Planets.nu if shipFile not found:

            var ajaxGetFile = $.ajax({
                                    type: "GET",
                                    timeout: 3000,
                                    url: "http://api.planets.nu/static/all",
                                    dataType: "json",
                                    success: createShipFile,
                                    error: loadError
                                    });

            // parse JSON file, create needed objects, lists or arrays:
            function createShipFile(data)
            {
        
        
            }
            // store parsed ship information in Local Storage as JSON objects:
                // store hulls:
    
                // store engines:
    
                // store beams:
    
                // store torpedo tubes:
    
            // hide loading modal:
            loadingModal("hide");
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}); // final brackets
