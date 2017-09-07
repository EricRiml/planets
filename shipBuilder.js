// shipBuilder.js

$(document).ready(function() {
    
    // initialize globals
    
    var loadingError = false;

    // don't need this.
    
    var getJSONfile = $.get("http://api.planets.nu/static/all", createShipFile);
    
    // test for shipFile in Local Storage:
    
    
        // if shipFile does NOT exist:
            // show "loading" modal:
            // loadingModal("show");
    
            // get JSON file from Planets.nu if shipFile not found:

//            $.ajax({
//                type: "GET",
//                timeout: 3000,
//                url: "http://api.planets.nu/static/all",
//                dataType: "json",
//                success: createShipFile(data),
//                error: loadError()
//                });

            // parse JSON file, create needed objects, lists or arrays:
            function createShipFile(data)
            {
                
                 var jsonObj = JSON.stringify(data, undefined, 4);
                console.log(jsonObj);
                console.log("New File");
                console.log("New file after remove no cache in HTML");//
//                if (typeof data == "object")
//                    {
//                        var jsonObj = JSON.stringify(data, undefined, 4);
//                        console.log(jsonObj);
//                        
//                    }
//                else
//                {
//                    console.log("Error loading file.");
//                }
        
            }
    
//            function loadError()
//                {
//                    console.log("Error loading file.");
//                }
            // store parsed ship information in Local Storage as JSON objects:
                // store hulls:
    
                // store engines:
    
                // store beams:
    
                // store torpedo tubes:
    
            // hide loading modal:
            // loadingModal("hide");
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}); // final brackets
