$(document).ready( ()=> {
   
    var urlParams = new URLSearchParams(window.location.search);
    let qSymbol = urlParams.get('symbol');
    let qInstrument = urlParams.get('instrument');

    setInterval(updateSymbol, 1000, qSymbol, qInstrument);





    function updateSymbol(symbol, instrument){
        
        let url = 'http://thewallstreetfan.com/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/template-parts/fp/process/api-symbol-process.php';

        $.ajax({
            url: url,
            data: { symbol: symbol},
            dataType: 'json',

        })
        .done( ( response )=> {
            let data  = response[qInstrument][qSymbol];
            
            // let itemClass = item.replace(/\s+/g, '');
            // itemClass = itemClass.replace(/\//g, '');
            let buyPriceSelector = $('.buyprice').find('span.value');
            let sellPriceSelector = $('.sellprice').find('span.value');
            
           
    
            if ( data.BuyPrice !== buyPriceSelector.text() ) {
                //check if the stock is higher or lower and style the values for the user 
               
                    buyPriceSelector.text(data.BuyPrice);
              
            }
            
            if ( data.SellPrice !== sellPriceSelector.text() ) {
                //check if the stock is higher or lower and style the values for the user 
               
                    sellPriceSelector.text(data.SellPrice);
              
            }
        })
        .fail(function( jqXHR, textStatus ) {
            console.err( "Request failed: " + textStatus );
        });
    }
});