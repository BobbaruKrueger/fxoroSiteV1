$(document).ready( () =>{

    // create options array
    let options = [];

    // disable submit buttom
    $('.submit-button').prop('disabled', true); 

    // validate the form
    $("#criteriaToQualifyForm").validate({
        onclick: function(element, event){
            if( $(element).is(':checked')){
                options.push( $(element).attr('id'));
                if ( options.length > 1 ) {
                    $('.submit-button').prop('disabled', false); 
                }else{
                    $('.submit-button').prop('disabled', true); 
                }
               
            }else{
                
                options.splice($.inArray($(element).attr('id'), options), 1);
                if ( options.length > 1 ) {
                    $('.submit-button').prop('disabled', false); 
                }else{
                    $('.submit-button').prop('disabled', true); 
                }
            }
            if(options.length > 1) {
                return true; 
            }else
            {
                return false;
            }      
        }
    });
    $('#submit').on('click', (e)=>{
        e.preventDefault();
        if (options.length>1) {
            $("#criteriaToQualifyForm").submit();
            console.log('yes');
            
        }else{
            console.log('no');
            
        }
    });
    

});