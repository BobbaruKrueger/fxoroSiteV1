$(document).ready( ()=>{
    //get data
   // let url = 'http://thewallstreetfan.com/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/template-parts/fp/process/api-table-process.php';

    // setInterval(()=>{
    //     $.ajax({
    //         url: url,
    //         dataType: 'json'
    //         })
    //         .done( ( response ) => {
    //             //updateData
    //            //  updateData(response);
                 
    //         });
    // }, 4000);


    let searchRequest = null;
    $('#searchInstrument').on('keyup', ()=>{
        
        let searchParam = $('#searchInstrument').val();
        let minLength = 3;

        if( searchParam.length >= minLength ){
            if (searchRequest != null) 
                searchRequest.abort();
            searchRequest = $.ajax({
                                type: "GET",
                                url: "http://thewallstreetfan.com/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/template-parts/fp/process/search.php",
                                data: {
                                    'search_keyword' : searchParam
                                },
                                dataType: "json"
                            })
                            .done( (response) =>{
                                //console.log(response);
                                    
                                let htmls='';
                                $.each( response, (index, element) => {
                                    htmls += '<li class="list-item"><a href="instrument?instrument='+ element.instrument +'&symbol='+ element.symbol +'" class="link">'+ element.name +'</a></li>' ;
                                });
                               $('.list').html(htmls); 
                               $('.list').show();
                                
                            })
                            .fail( function( jqXHR, textStatus ) {
                                console.log( "Request failed: " + textStatus );
                              
                                
                            });
        }else {
            $('.list').hide();
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