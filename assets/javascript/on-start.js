$(document).ready(function(){
    
    try {
        $('.combo-suggest').combobox();
        
        
        
    }catch (err){
        
    }
    
    if ($(".date-input").length > 0){
        
        console.log("hay dates");
    } else {
        console.log("no hay dates");
    }
    
    
});