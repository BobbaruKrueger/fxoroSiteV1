$(document).ready( () => {
    
    let url = 'http://thewallstreetfan.com/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/template-parts/fp/process/process.php';

   

//    $('.owl-carousel').owlCarousel({
//        loop:false,
//        margin:10,
//        nav:true,
//        dots:false,
//        responsive:{
//            0:{ items:1 },
//            576:{ items:2 },
//            768:{ items:3 }
//        }
//   });
//






//    setInterval(()=>{
//     $.ajax({
//         url: url,
//         dataType: 'json'
//         })
//         .done( ( response ) => {
//              updateData(response);
//         });
//    }, 1000)
   


   

    function updateData(response) {

        $.each ( response, (tab, item) =>{
            $.each (item, (name, symbol)=> {
                let item  = symbol.Name[0];
                let itemClass = item.replace(/\s+/g, '');
                itemClass = itemClass.replace(/\//g, '');
                let buyPriceSelector = $('.'+itemClass).find('.buyprice>.row>.price');
                let sellPriceSelector = $('.'+itemClass).find('.sellprice>.row>.price');
                
            
                //update stock change percent
                // if ( currentChangePercent !== newChangePercent ) {
                //     //check if the stock is higher or lower and style the values for the user 
                //     if( currentChangePercent > newChangePercent ) {
                //         // is lower---- change to red
                //         currentChangePercentSelector.text(newChangePercent).css('color', 'red');
                //     }
                //     if( currentChangePercent < newChangePercent ) {
                //         // is higher---- change to red
                //         currentChangePercentSelector.text(newChangePercent).css('color', 'green');
                //     }
                // }
                if ( symbol.BuyPrice !== buyPriceSelector.find('.value').text() ) {
                    //check if the stock is higher or lower and style the values for the user 
                    if( symbol.BuyPrice > buyPriceSelector.find('.value').text() ) {
                        // is higher---- change to green
                        buyPriceSelector.find('.value').text(symbol.BuyPrice);
                        buyPriceSelector.find('.caret').html( ' <i class="fas fa-caret-up" style="color: rgb(48, 171, 47)"></i>');
                        buyPriceSelector.find('.value').css('background-color',  'rgba(48, 171, 47, .2)');
                        setTimeout( ()=>{buyPriceSelector.find('.value').css('background-color', '#fff')}, 400);
                    }
                    if( symbol.BuyPrice < buyPriceSelector.find('.value').text() ) {
                        // is lower---- change to red
                        buyPriceSelector.find('.value').text(symbol.BuyPrice);
                        buyPriceSelector.find('.caret').html( ' <i class="fas fa-caret-down" style="color: rgb(190, 0, 17 )"></i>');
                        buyPriceSelector.find('.value').css('background-color',  'rgba(190, 0, 17 , .2)');
                        setTimeout( ()=>{buyPriceSelector.find('.value').css('background-color', '#fff')}, 400);
                    }
                }
                if ( symbol.SellPrice !== sellPriceSelector.find('.value').text() ) {
                    //check if the stock is higher or lower and style the values for the user 
                    if( symbol.SellPrice < sellPriceSelector.find('.value').text() ) {
                        // is lower---- change to red
                        sellPriceSelector.find('.value').text(symbol.SellPrice);
                        sellPriceSelector.find('.caret').html( ' <i class="fas fa-caret-down" style="color: rgb(190, 0, 17 )"></i>');
                        sellPriceSelector.find('.value').css('background-color',  'rgba(190, 0, 17 , .2)');
                        setTimeout( ()=>{sellPriceSelector.find('.value').css('background-color', '#fff')}, 400);
                    }
                    if( symbol.SellPrice > sellPriceSelector.find('.value').text() ) {
                        // is higher---- change to green
                        sellPriceSelector.find('.value').text(symbol.SellPrice);
                        sellPriceSelector.find('.caret').html( ' <i class="fas fa-caret-up" style="color: rgb(48, 171, 47)"></i>');
                        sellPriceSelector.find('.value').css('background-color',  'rgba(48, 171, 47, .2)');
                        setTimeout( ()=>{sellPriceSelector.find('.value').css('background-color', '#fff')}, 400);
                    }
                }
                // buyPriceSelector.text(symbol.BuyPrice);
                // sellPriceSelector.text(symbol.SellPrice);
            });
        });

    }
    
   


   

});

//     $.ajax({
//         url: url,
//         type: "GET",
//         data: { all: 'all'},
//         dataType: 'json',
//     })
//     .done( (response) =>{

//             $.each(response, (tab, item)=>{
               
//                 if ( tab == 'Forex'){
//                     $.each( item, (name, ticker)=>{
                        
//                         let tickerBox = '<div class="item ' + name+ '">'+
//                                             '<div class="col-10 offset-1 itemInner">'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 cssecoFlagsW">'+
//                                                             ticker.Image +
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 currencyW">'+
//                                                         ticker.Name+
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 changeW">'+
//                                                         //-0.09%
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 canvasW">'+
//                                                     '<canvas id="'+ name+'"></canvas>'+
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-6 sellprice">'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12">'+
//                                                                 '<h3>Sell:</h3>'+
//                                                             '</div>'+
//                                                         '</div>'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12 price">'+
//                                                                 ticker.BuyPrice+
//                                                             '</div>'+
//                                                     '	</div>'+
//                                                     '</div>'+
//                                                     '<div class="col-6 buyprice">'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12 ">'+
//                                                                 '<h3>Buy:</h3>'+
//                                                             '</div>'+
//                                                         '</div>'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12 price">'+
//                                                                 ticker.SellPrice+
//                                                             '</div>'+
//                                                         '</div>'+
//                                                     '</div>'+
//                                                 '</div>'+
//                                             '</div>'+
//                                         '</div>';

//                                         $('.forex').append(tickerBox);
//                                         var selector = document.getElementById(name).getContext('2d');
//                                         var chart = new Chart(selector, {
//                                             // The type of chart we want to create
//                                             type: 'line',
//                                             // The data for our dataset
//                                             data: {
//                                                 labels: ticker.Graph.Dates[0],
                                                
//                                                 datasets: [{
//                                                     label: ticker.Name,
//                                                     //backgroundColor: 'rgb(248, 166, 0)',
//                                                    // borderColor: 'rgb(5, 5, 5, 0.9)',
//                                                     fill: false,
//                                                     data: ticker.Graph.Values[0],
                                                    
//                                                     pointStyle: 'line'
//                                                 }]
//                                             },
                                
//                                             // Configuration options go here
//                                             options: {
//                                                 legend: {
//                                                     display: false
//                                                 },
//                                                 scales: {
//                                                     xAxes: [{                            
                                                            
//                                                             display: false //this will remove only the label  
                                                             
//                                                     }],
//                                                     yAxes: [{     
                                                                                
//                                                             display: false //this will remove only the label         
//                                                     }]
//                                                 }
//                                             }
//                                         });

                                       
//                     });                  
//                 }
//                 if ( tab == 'Commodities'){
//                     $.each( item, (name, ticker)=>{
                        
//                         let tickerBox = '<div class="item ' + name+ '">'+
//                                             '<div class="col-10 offset-1 itemInner">'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 cssecoFlagsW">'+
//                                                             ticker.Image +
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 currencyW">'+
//                                                         ticker.Name+
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 changeW">'+
//                                                         //-0.09%
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 canvasW">'+
//                                                     '<canvas id="'+ ticker.Name+'"></canvas>'+
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-6 sellprice">'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12">'+
//                                                                 '<h3>Sell:</h3>'+
//                                                             '</div>'+
//                                                         '</div>'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12 price">'+
//                                                                 ticker.BuyPrice+
//                                                             '</div>'+
//                                                     '	</div>'+
//                                                     '</div>'+
//                                                     '<div class="col-6 buyprice">'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12 ">'+
//                                                                 '<h3>Buy:</h3>'+
//                                                             '</div>'+
//                                                         '</div>'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12 price">'+
//                                                                 ticker.SellPrice+
//                                                             '</div>'+
//                                                         '</div>'+
//                                                     '</div>'+
//                                                 '</div>'+
//                                             '</div>'+
//                                         '</div>';
//                         $('.commodities').append(tickerBox);
//                     });                             
//                 }
//                 if ( tab == 'Shares'){
//                     $.each( item, (name, ticker)=>{
                        
//                         let tickerBox = '<div class="item ' + name+ '">'+
//                                             '<div class="col-10 offset-1 itemInner">'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 cssecoFlagsW">'+
//                                                             ticker.Image +
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 currencyW">'+
//                                                         ticker.Name+
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 changeW">'+
//                                                         //-0.09%
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 canvasW">'+
//                                                     '<canvas id="'+ ticker.Name+'"></canvas>'+
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-6 sellprice">'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12">'+
//                                                                 '<h3>Sell:</h3>'+
//                                                             '</div>'+
//                                                         '</div>'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12 price">'+
//                                                                 ticker.BuyPrice+
//                                                             '</div>'+
//                                                     '	</div>'+
//                                                     '</div>'+
//                                                     '<div class="col-6 buyprice">'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12 ">'+
//                                                                 '<h3>Buy:</h3>'+
//                                                             '</div>'+
//                                                         '</div>'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12 price">'+
//                                                                 ticker.SellPrice+
//                                                             '</div>'+
//                                                         '</div>'+
//                                                     '</div>'+
//                                                 '</div>'+
//                                             '</div>'+
//                                         '</div>';
//                         $('.shares').append(tickerBox);
//                     });                            
//                 }
//                 if ( tab == 'Indices'){
//                     $.each( item, (name, ticker)=>{
                        
//                         let tickerBox = '<div class="item ' + name+ '">'+
//                                             '<div class="col-10 offset-1 itemInner">'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 cssecoFlagsW">'+
//                                                             ticker.Image +
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 currencyW">'+
//                                                         ticker.Name+
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 changeW">'+
//                                                         //-0.09%
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 canvasW">'+
//                                                     '<canvas id="'+ ticker.Name+'"></canvas>'+
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-6 sellprice">'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12">'+
//                                                                 '<h3>Sell:</h3>'+
//                                                             '</div>'+
//                                                         '</div>'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12 price">'+
//                                                                 ticker.BuyPrice+
//                                                             '</div>'+
//                                                     '	</div>'+
//                                                     '</div>'+
//                                                     '<div class="col-6 buyprice">'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12 ">'+
//                                                                 '<h3>Buy:</h3>'+
//                                                             '</div>'+
//                                                         '</div>'+
//                                                         '<div class="row">'+
//                                                             '<div class="col-12 price">'+
//                                                                 ticker.SellPrice+
//                                                             '</div>'+
//                                                         '</div>'+
//                                                     '</div>'+
//                                                 '</div>'+
//                                             '</div>'+
//                                         '</div>';
//                         $('.indices').append(tickerBox);
//                     });                             
//                 }
//             });
//     })
//     .done( ()=>{
//         $('#loading').hide();
//         $('.owl-carousel').owlCarousel({
//             loop:false,
//             margin:10,
//             nav:true,
//             dots:false,
//             responsive:{
//                 0:{ items:1 },
//                 576:{ items:2 },
//                 768:{ items:3 }
//             }
//         });

//     })
//     .done( ( response )=>{
       
//         $.each(response, (tab, item)=>{
               
//             if ( tab == 'Forex') {
//                 $.each( item, (name, ticker) =>{
                   
                   
//                 });
//             }
//         });
//     });
    
 // function genereateGraph(response){
    //     $.each ( response, (tab, item) =>{
    //         $.each (item, (name, symbol)=> {
               


    //             // let halfDates = Math.ceil(symbol.Graph[0].Dates.length / 2)
    //             // let firstFifteenDates = symbol.Graph[0].Dates.splice( 0, halfDates);
    //             // let lastFifteenDates = symbol.Graph[0].Dates.splice( halfDates, symbol.Graph[0].Dates.length );

    //             let halfValues = Math.ceil(symbol.Graph[0].Values.length / 2)
    //             let firstFifteenValues = symbol.Graph[0].Values.slice( 0, halfValues);
    //             let lastFifteenValues = symbol.Graph[0].Values.slice( halfValues, symbol.Graph[0].Values.length );
             
               
    //             let selector = document.getElementById(name).getContext('2d');
    //             let chart = new Chart(selector, {
    //                 // The type of chart we want to create
    //                 type: 'line',
    //                 // The data for our dataset
    //                 data: {
    //                     labels: symbol.Graph[0].Dates,
                        
    //                     datasets: [{
    //                         label: '',
    //                         backgroundColor: 'rgb(248, 166, 0)',
    //                         borderColor: 'rgb(5, 5, 5, 0.9)',
    //                         fill: false,
    //                         data: lastFifteenValues, 
    //                         pointStyle: 'line'
    //                     },
    //                     {
    //                         label: '',
    //                         backgroundColor: 'rgb(248, 166, 0)',
    //                         borderColor: 'red',
    //                         fill: false,
    //                         data: firstFifteenValues,
    //                         pointStyle: 'line'
    //                     }]
    //                 },        
    //                 // Configuration options go here
    //                 options: {
    //                     legend: {
    //                         display: false
    //                     },
    //                     scales: {
    //                         xAxes: [{                            
                                    
    //                                 display: false //this will remove only the label  
                                        
    //                         }],
    //                         yAxes: [{     
                                                        
    //                                 display: false //this will remove only the label         
    //                         }]
    //                     }
    //                 }
    //             });

    //         });
    //     });
    // }


// var shares  = ['TOSHIBA', 'IBM', 'BMW', 'BAYER'];
// var forex  = ['AUDCAD','AUDCHF','AUDJPY','AUDNZD','AUDUSD'/*,'CADCHF','CADJPY','CHFJPY','CHFTRY','EURAUD','EURCAD','EURCHF','EURCZK','EURDKK','EURGBP','EURHUF','EURILS','EURJPY','EURNOK','EURNZD','EURPLN','EURSEK','EURTRY','EURUSD','EURZAR','GBPAUD','GBPCAD','GBPCHF','GBPHUF','GBPJPY','GBPNZD','GBPTRY','GBPUSD','NZDCAD','NZDCHF','NZDJPY','NZDUSD','TRYJPY','USDCAD','USDCHF','USDCNH','USDCZK','USDDKK','USDHKD'/*,'USDHUF','USDILS','USDINR','USDJPY','USDMXN','USDNOK','USDPLN','USDRUB','USDSEK','USDSGD','USDTRY','USDZAR'*/];
// var commodities  = ['COPP-H19','COFF-H19','CORN-K19','GAS','BRENT-H19','GOLD','NGAS-H19','OIL-H19','PLATINUM','SUG-H19','WHEAT-K19'];
// var indices  = ['AUS200-H19','EUR50-H19','FRA40-H19','GER30-H19','IT40-H19','JPN225-H19','NAS100-H19','SPA35-F19','SWI20-H19','UK100-H19','US500-H19'];



// //  displayTickers(forex, 'forex');
// //  displayTickers(shares, 'shares');
// //  displayTickers(commodities, 'commodities');
// //  displayTickers(indices, 'indices'); 

// async function loadDataOnOPage(){

    

    
    
//     // requests = [    displayTickers(forex, 'forex'),
//     //                 displayTickers(shares, 'shares'),
//     //                 displayTickers(commodities, 'commodities'),
//     //                 displayTickers(indices, 'indices')
//     //             ];
//     //             await  Promise.all(requests);
//     //             console.log(requests);
    
//    await  new Promise( async ( resolve, reject) => {
       
//         await displayTickers(forex, 'forex');
//         await displayTickers(shares, 'shares');
//        // await displayTickers(commodities, 'commodities');
//         await displayTickers(indices, 'indices');

//         setTimeout(resolve, 4000);
       
//     });
    
// }
// loadDataOnOPage().then(()=>{

//     $('.owl-carousel').owlCarousel({
//         loop:true,
// 		margin:10,
// 		nav:true,
// 		dots:false,
// 		responsive:{
// 			0:{ items:1 },
// 			576:{ items:2 },
// 			768:{ items:3 }
// 		}
//     });
    
// });

//  setInterval( updateTickers, 3000, forex);
// // setInterval( updateTickers, 3000, indices);
// // setInterval( updateTickers, 3000, commodities);
// // setInterval( updateTickers, 3000, shares);



// //DISPLAY TICKERS FUNCTION ---- This would be displayed on page load and not updated until netx pae load
// async function displayTickers( options, tab) {
//         let promises= [];
//         // loop through options to query individual stock data and graph data 
//         for (let index = 0; index < options.length; index++) {
//             await new Promise( async (resolve)=>{
//                 await getStockData(options[index], tab);
//                 resolve();
//             });

//             //createGraphFromData('IBM' );   
//             }
// }
// //UPDATE TICKERS FUNCTION ---- This would be displayed on page load and will be updated on determined duration via setInreval
// function updateTickers( options ){
//     // loop through options to query individual stock prices and bids and update data
//     for (let index = 0; index < options.length; index++) {
//         updateStockData(options[index]);
//         }
// }
// // UPDATE STOCKDATA that is currently displayed on the page via displayTickers
// function updateStockData( querySymbol ){

//     // define ajax url
//     let url = "http://localhost/fx_oro/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/template-parts/home/process/process.php";
//     // call the API via php
//     $.ajax({
//         url: url,
//         type: "POST",
//         data: { stockSymbol: querySymbol },
//         dataType: 'json'
            
//     }).done(function (data) {
//         // get current data displaing selectors
//         //let currentChangePercentSelector = $('.' + querySymbol+'>.change-percent');
//         let currentBuyPriceSelector = $('.' + querySymbol+'>.itemInner>.row>.buyprice>.row>.price');
//         let currentSellPriceSelector = $('.' + querySymbol+'>.itemInner>.row>.sellprice>.row>.price');

//         // set current displayed data to variables
//         //let currentChangePercent = currentChangePercentSelector.text();
//         let currentBuyPrice = currentBuyPriceSelector.text();
//         let currentSellPrice = currentSellPriceSelector.text();
        
//         // set api  data to variables
//        // newChangePercent = data.changePercent;
//         newBuyPrice = data.buyPrice;
//         newSellPrice = data.sellPrice;

//         //only update the page if the api data is different from the current data displayed on the page
        
//         //update stock change percent
//         // if ( currentChangePercent !== newChangePercent ) {
//         //     //check if the stock is higher or lower and style the values for the user 
//         //     if( currentChangePercent > newChangePercent ) {
//         //         // is lower---- change to red
//         //         currentChangePercentSelector.text(newChangePercent).css('color', 'red');
//         //     }
//         //     if( currentChangePercent < newChangePercent ) {
//         //         // is higher---- change to red
//         //         currentChangePercentSelector.text(newChangePercent).css('color', 'green');
//         //     }
//         // }
//         if ( currentBuyPrice !== newBuyPrice ) {
//             //check if the stock is higher or lower and style the values for the user 
//             if( currentBuyPrice > newBuyPrice ) {
//                 // is lower---- change to red
//                 currentBuyPriceSelector.text(newBuyPrice).css('color', 'red');
//             }
//             if( currentBuyPrice < newBuyPrice ) {
//                 // is higher---- change to red
//                 currentBuyPriceSelector.text(newBuyPrice).css('color', 'green');
//             }
//         }
//         if ( currentSellPrice !== newSellPrice ) {
//             //check if the stock is higher or lower and style the values for the user 
//             if( currentSellPrice > newSellPrice ) {
//                 // is lower---- change to red
//                 currentSellPriceSelector.text(newSellPrice).css('color', 'red');
//             }
//             if( currentSellPrice < newSellPrice ) {
//                 // is higher---- change to red
//                 currentSellPriceSelector.text(newSellPrice).css('color', 'green');
//             }
//         }
//     });
// }
// //CREATE GRAPH FUNCTION based on stock symbol
// function createGraphFromData( querySymbol ){


//     getGraphData(querySymbol);
//     // define processing url
//     let url = "http://localhost/fx_oro/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/template-parts/home/process/process.php";

//     $.ajax({
//         url: url,
//         type: "POST",
//         data: { graphSymbol: querySymbol },
//         dataType: 'json'
            
//     }).done(function (data) {
       
//         let graphDays = [];
//         let graphData = [];
//         for( let i=0; i < data.length; i++){
//             graphDays.push(data[i].date);
//             graphData.push(data[i].close);
//         }
    
//       //  var ctx = $('.' + querySymbol+'>.row>.graph>canvas').find('#myChart').getContext('2d');
//         var selector = document.getElementById(querySymbol).getContext('2d');
//         var chart = new Chart(selector, {
//             // The type of chart we want to create
//             type: 'line',
//             // The data for our dataset
//             data: {
//                 labels: graphDays,
               
//                 datasets: [{
//                     label: querySymbol,
//                     backgroundColor: 'rgb(248, 166, 2)',
//                     borderColor: 'rgb(5, 5, 5, 0.0)',
//                     data: graphData,
                    
//                     pointStyle: 'line'
//                 }]
//             },

//             // Configuration options go here
//             options: {
//                 legend: {
//                     display: false
//                 },
//                 scales: {
//                     xAxes: [{                            
//                          display: false //this will remove only the label         
//                     }],
//                     yAxes: [{                            
//                          display: false //this will remove only the label         
//                     }]
//                 }
//             }
//         });
        
//     }).fail(function( err ) {
//         console.log(err.responseText);
//       });
// }


// function getStockData( querySymbol, tab){

//     let url = "http://localhost/fx_oro/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/template-parts/home/process/process.php";


//     let imgHtml, title ;

//     if ( tab === 'forex' ) {
//         let fromCurrency = querySymbol.slice(0,3);
//         let toCurrency = querySymbol.slice(-3);
        
//         imgHtml = '<img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/'+fromCurrency+'.png" alt="Card image cap" width="30px"><img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/'+toCurrency+'.png" alt="Card image cap" width="30px">';
//         title = fromCurrency+'/'+toCurrency;
//     }
//     else{
//         imgHtml = '<img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/'+querySymbol+'.png" alt="Card image cap" width="30px">';
//         title = querySymbol;
//     }

//     if ( tab === 'indices' ) {
        
        

//         imgHtml = '<img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/'+imgSymbol+'.png" alt="Card image cap" width="30px">';
//     }


//     // call the API
//     $.ajax({
//         url: url,
//         type: "POST",
//         data: { stockSymbol: querySymbol },
//         dataType: 'json'
            
//     }).done(function (data) {
        
//         // set data to variables
//                 symbol = querySymbol;
//                 companyName = data.companyName;
//                 //changePercent = data.changePercent;
//                 buyPrice = data.buyPrice;
//                 sellPrice = data.sellPrice;

//                 // let tickerBoxSelector = $('.'+querySymbol);
//                 // let imgContainer = tickerBoxSelector.find('.cssecoFlagsW');
//                 // let titleSelector = tickerBoxSelector.find('.currencyW'); 
//                 // let buyPriceSector = tickerBoxSelector.find('.buyprice');
//                 // let sellPriceSector = tickerBoxSelector.find('.sellprice');

//                 // imgContainer.html(imgHtml);
//                 // titleSelector.html(title);
//                 // buyPriceSector.html(buyPrice);
//                 // sellPriceSector.html(sellPrice);
                

//                 let tickerBox = '<div class="item ' + symbol+ '">'+
//                                     '<div class="col-10 offset-1 itemInner">'+
//                                         '<div class="row">'+
//                                             '<div class="col-12 cssecoFlagsW">'+
//                                                  imgHtml +
//                                             '</div>'+
//                                         '</div>'+
//                                         '<div class="row">'+
//                                             '<div class="col-12 currencyW">'+
//                                                 title+
//                                             '</div>'+
//                                         '</div>'+
//                                         '<div class="row">'+
//                                             '<div class="col-12 changeW">'+
//                                                 //-0.09%
//                                             '</div>'+
//                                         '</div>'+
//                                         '<div class="row">'+
//                                             '<div class="col-12 canvasW">'+
//                                             '<canvas id="'+ querySymbol+'"></canvas>'+
//                                             '</div>'+
//                                         '</div>'+
//                                         '<div class="row">'+
//                                             '<div class="col-6 sellprice">'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12">'+
//                                                         '<h3>Sell:</h3>'+
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 price">'+
//                                                        buyPrice+
//                                                     '</div>'+
//                                             '	</div>'+
//                                             '</div>'+
//                                             '<div class="col-6 buyprice">'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 ">'+
//                                                         '<h3>Buy:</h3>'+
//                                                     '</div>'+
//                                                 '</div>'+
//                                                 '<div class="row">'+
//                                                     '<div class="col-12 price">'+
//                                                         sellPrice+
//                                                     '</div>'+
//                                                 '</div>'+
//                                             '</div>'+
//                                         '</div>'+
//                                     '</div>'+
//                                 '</div>';



//     //             let htmls =    ' <div class="item">'+
//     //                                 '<div class="card" style="font-size: 12px; font-weight:bold">'+
//     //                                 '<div class="card-body '+ symbol + ' text-center">'+
//     //                                     imgHtml+
//     //                                     '<h5 class="card-title" style="font-size:16px;">'+ companyName +'</h5>'+
//     //                                     //'<p class=" change-percent">'+ changePercent+'</p>'+
//     //                                     '<div class="row">'+
//     //                                         '<div class="graph text-center">'+

//     //                                              '<canvas id="'+ querySymbol+'"></canvas>'+
//     //                                         '</div>'+
//     //                                     '</div>'+
//     //                                     '<div class="row">'+
//     //                                         '<div class="col buyPrice-container">'+
//     //                                         ' <p class="buy-price text-left"> Buy Price: <span>'+ buyPrice +'</span></p>'+
//     //                                         '</div>'+
//     //                                         '<div class="offset-2">'+
//     //                                         '</div>'+
//     //                                         '<div class="col sellPrice-container">'+
//     //                                         ' <p class="sellPrice text-left"> Sell Price: <span>'+ sellPrice+'</span></p>'+
//     //                                         '</div>'+
//     //                                     '</div>'+
//     //                                 '</div>'+
//     //                             ' </div>'+
//     //                         ' </div>';

        
//     $('.'+ tab ).append(tickerBox);
    
    
//   }).fail(function(err){
//     console.log(err);
//     });
    
// }


// $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) { 
//     // owl carousel in bootstrap tabs        
//     $($(e.target).attr('href')).find('.owl-carousel').owlCarousel('invalidate', 'width').owlCarousel('update');    
// });
// });



// let getGraphData = symbol => {
//     let url = 'http://localhost/fx_oro/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/template-parts/home/process/process.php';
    
//     $.ajax({
//         url: url,
//         data: {graphSymbol: symbol},
//         type: "POST"
//     }).done((result)=>{
        
//     });
//}