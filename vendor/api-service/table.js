$(document).ready( ()=>{
    //get data
    let url = 'http://thewallstreetfan.com//wp-content/themes/CSSecoStarterThemeV2-master/includes/front/template-parts/fp/process/api-table-process.php';

    // setInterval(()=>{
    //     $.ajax({
    //         url: url,
    //         dataType: 'json'
    //         })
    //         .done( ( response ) => {
    //             //updateData
    //              updateData(response);
                 
    //         });
    // }, 4000);


    let searchRequest = null;
    window.resultListIndex = -1;
    $('#searchInstrument').on('keyup', (e)=>{
        // if (e.keyCode <= 90 && e.keyCode >= 48){
            let searchParam = $('#searchInstrument').val();
            let minLength = 3;
            
            
            if( searchParam.length >= minLength ){
                if (searchRequest != null) 
                    searchRequest.abort();
                searchRequest = $.ajax({
                                    type: "GET",
                                    url: "http://thewallstreetfan.com//wp-content/themes/CSSecoStarterThemeV2-master/includes/front/template-parts/fp/process/search.php",
                                    data: {
                                        'search_keyword' : searchParam
                                    },
                                    dataType: "json"
                                })
                                .done( (response) =>{
                                    
                                    if ( response =='noresults' ) {
                                        let htmls='<li class="list-item text-center"> <i class="fas fa-search"></i>  No results found!</li>';

                                        $('.list').html(htmls); 
                                        $('.list').show();
                                    }else{
                                        let htmls='';
                                        $.each( response, (index, element) => {
                                            htmls += '<a href="instrument?instrument='+ element.instrument +'&symbol='+ element.symbol +'" class="link"><li class="list-item"><span class="text-left">'+ element.name +'</span><span class="text-right"><i class="fas fa-angle-right"></i></span></li></a>' ;
                                        });
                                        $('.list').html(htmls); 
                                        $('.list').show();
                                    }
                                        
                                    
                                })
                                .fail( function( jqXHR, textStatus ) {
                                    console.log( "Request failed: " + textStatus );
                                
                                    
                                });
        }else {
            $('.list').hide();
        }
    //    }
      
});
$(document).on( 'keyup', (e)=>{

    if($('#searchInstrument').val().length > 2){
        var Navigate = function(diff) {
            resultListIndex += diff;
            var resultsList = $(".list-item");
            if (resultListIndex >= resultsList.length)
                resultListIndex = 0;
            if (resultListIndex < 0)
                resultListIndex = resultsList.length - 1;
                resultsList.eq(resultListIndex).parent().focus();  
        }
    
        if (e.keyCode == 40) 
        {  
            Navigate(1);
            
        }
        if(e.keyCode==38)
        {
            Navigate(-1);
        } 

    }
});








    function updateData(response) {
        $.each ( response, (tab, item) =>{
            $.each (item, (name, symbol)=> {
                let tableRow  = $('.'+ name);
                let buyPriceSelector = tableRow.find('.buy-value>span');
                let sellPriceSelector = tableRow.find('.sell-value>span');
                let changePercentageSelector = tableRow.find('.change-percentage>span');
                let buyPrice = parseFloat( buyPriceSelector.text() );
                let sellPrice = parseFloat( sellPriceSelector.text() );
                let changePercentage = parseFloat( changePercentageSelector.text() );
               
                if( symbol.BuyPrice != buyPrice ){    
                    if( symbol.BuyPrice > buyPrice ) {
                        // is higher---- change to green
                        buyPriceSelector.text( symbol.BuyPrice );
                        buyPriceSelector.css('color',  'rgba(48, 171, 47)');      
                    }else 
                    if( symbol.BuyPrice < buyPrice ) {
                        // is lower---- change to red
                        buyPriceSelector.text( symbol.BuyPrice );
                        buyPriceSelector.css('color',  'rgba(190, 0, 17)');  
                    }
                    
                }
                if( symbol.SellPrice != sellPrice ){    
                    if( symbol.SellPrice > sellPrice ) {
                        // is higher---- change to green
                        sellPriceSelector.text( symbol.SellPrice );
                        sellPriceSelector.css('color',  'rgba(48, 171, 47)');      
                    }
                    if( symbol.SellPrice < sellPrice ) {
                        // is lower---- change to red
                        sellPriceSelector.text( symbol.SellPrice );
                        sellPriceSelector.css('color',  'rgba(190, 0, 17)');  
                    }
                }
                if( symbol.ChangePercentage != changePercentage ){    
                    if( symbol.ChangePercentage > 0 ) {
                        // is higher---- change to green
                        changePercentageSelector.text( symbol.ChangePercentage );
                        changePercentageSelector.css('color',  'rgba(48, 171, 47)');      
                    }
                    if( symbol.ChangePercentage < 0 ) {
                        // is lower---- change to red
                        changePercentageSelector.text( symbol.ChangePercentage );
                        changePercentageSelector.css('color',  'rgba(190, 0, 17)');  
                    }
                }
                
            });
        });
    }



});