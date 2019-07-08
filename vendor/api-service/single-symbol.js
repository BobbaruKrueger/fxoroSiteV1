$(document).ready( ()=> {
   
    let urlParams = new URLSearchParams(window.location.search);
    let qSymbol = urlParams.get('symbol');
    let qInstrument = urlParams.get('instrument');
    let graphData = chart.data.datasets[0].data;
    let lastValue = graphData[ graphData.length -1 ];
    
 
    $('.option').on( 'click', ()=>{
        let graphData = chart.data.datasets[0].data;
        let lastValue = graphData[ graphData.length -1 ];
        
        // $(event.currentTarget).css('background-color', '#0077b5').siblings().css('background-color', '#1B2854');
        // $(event.currentTarget).addClass('active').siblings().removeClass('active');
        $('.option').removeClass('active');
        $(event.currentTarget).addClass('active');
        
        let interval = $(event.currentTarget).find('.interval').text();
        switch (interval) {
            case '1M':
                row = 'interval_1m';
                break;
            case '5M':
                row = 'interval_5m';
                break;
            case '15M':
                row = 'interval_15m';
                break;
            case '30M':
                row = 'interval_30m';
                break;
            case '1H':
                row = 'interval_1h';
                break;
            case '4H':
                row = 'interval_4h';
                break;
            case '1D':
                row = 'interval_1d';
                break;
            case '1W':
                row = 'interval_1w';
                break;
        
            default:
                break;
        }
        let data = JSON.parse(intervals[row]);
        console.log(data);
        
        
        // //controlGraph( qSymbol, interval);
        let labels = createLabels(interval);
        updateData(chart, labels, data);
       // console.log(labels);
        
        
    });
    
    // setInterval(updateSymbol, 1000, qSymbol, qInstrument);





    function controlGraph(symbol, interval){
        $.ajax({
            url : 'http://thewallstreetfan.com/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/template-parts/fp/process/update-chart.php',
            data: { symbol: qSymbol, interval: interval}
            
        })
        .done( (response)=>{
            //console.log(response);
        });
    }


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
            if (chart.data.datasets[0].data[chart.data.datasets[0].data.length -1] !== lastValue) {
                chart.data.datasets[0].data.pop();
                chart.data.labels.pop();  
            }
            addData(chart, 'Now' ,(data.SellPrice));
            
            
        })
        .fail(function( jqXHR, textStatus ) {
            console.error( "Request failed: " + textStatus );
        });
    }

    function createLabels( interval ){
        let labels = [];
        let now = new Date();
        let hour = now.getHours();
        let minute = now.getMinutes();
        let day = now.getDate();
        let month = ( now.getMonth() ) + 1;
        let year = now.getFullYear();
        let label = hour+':'+minute;
        if (interval == "1M" || interval == "5M"|| interval == "15M" || interval == "30M" || interval == "1H" ) {
            switch(interval){
                case '1M':
                    intervalValue = 1;
                    break;
                case '5M':
                    intervalValue = 5;
                    break;
                case '15M':
                    intervalValue = 15;
                    break;
                case '30M':
                    intervalValue = 30;
                    break;
                case '1H':
                    intervalValue = 60;
                    break;
                default:
                    break;
            } 
            
            for (let index = 0; index < JSON.parse(intervals[row]).length; index++) {
                
                
                if (minute < intervalValue ){                
                    if (hour == 0 ){         
                        hour += 24;
                        hour--;
                        minute+=60 ;
                        minute -= intervalValue;
                        
                        now.setDate(now.getDate()- 1);
                        day = now.getDate();
                        month = ( now.getMonth() ) + 1;
                        year = now.getFullYear();
                        if (month < 10){
                            month = '0' + month;
                        }    
                        if (minute < 10 ){        
                            minute=('0'+ minute);
                        }
                        labels.unshift(day +'.'+ month +'.'+ year+' '+hour+':'+minute); 
                        if (hour < 10 ){         
                            hour ='0'+hour;
                        }     
                        minute = parseInt(minute);
                        parseInt(hour);
                    } else{
                        hour--;
                        minute = parseInt(minute);
                        minute+=60;    
                        minute -= intervalValue;  
                        if (minute < 10 ){        
                            minute=('0'+ minute);
                        }
                        if (hour < 10 ){         
                            hour ='0'+hour;
                        }    
                        label = hour+':'+minute;
                        labels.unshift(label);  
                    }
                }else{
                    minute -= intervalValue;
                    if (minute < 10 ){        
                        minute=('0'+ minute);
                    }
                    label = hour+':'+minute;
                    labels.unshift(label); 
                    minute = parseInt(minute);
                }
            }
        }

        if ( interval == "4H" || interval == "1D" || interval == "1W"){
            for (let index = 0; index < JSON.parse(intervals[row]).length ; index++) {     
                
                if( interval == "4H" ){
                    let label = hour+':00';
                    if (hour <= 0  ){
                        hour += 24;  
                        now.setDate(now.getDate() - 1);
                        day = now.getDate();
                        month = ( now.getMonth() ) + 1;
                        year = now.getFullYear();
                        if (month < 10){
                            month = '0' + month;
                        }
                        label = hour+':00';
                        labels.unshift(day +'.'+ month+'.'+year +' 00:00' );
                        hour = parseInt(hour);
                        hour-=4;
                    }else{
                        
                        if (hour < 10 ){                       
                            hour ='0'+hour;
                        } 
                        label = hour+':00';
                        //labels.unshift(day +'.'+ month+'.'+year +' '+hour+':'+ '00' );
                        labels.unshift(label); 
                        hour = parseInt(hour);    
                        hour-=4;
                    }
                }
                if (interval == "1D" || interval == "1W") {
                    let intervalValue;
                    if (interval =="1D") {
                        intervalValue = 1;
                    }else if(interval =="1W") {
                        intervalValue = 7;
                    }

                    let label;
                    label = day  + ' '+getMonthAsString( month);
               
                    now.setDate(now.getDate() - intervalValue);
                    day = now.getDate();
                    month = ( now.getMonth() ) + 1;
                    year = now.getFullYear();
                    
                    if (month < 10){
                       month = '0'+ month;
                    }
                    labels.unshift(label);
                }
            }
        }
         
        return labels;
        
    }

    function updateData(chart, label, data){
        chart.data.labels = label;
        chart.data.datasets.forEach((dataset) => {
            dataset.data = data;       
        });
        chart.update({
            duration: 0
        });
    }
    function addData(chart, label, data) {  

        chart.data.labels.push(label);
     
        chart.data.datasets.forEach((dataset) => {
            dataset.data.push(data);       
        });
        chart.update({
            duration:0
        });
        
    }
    function getMonthAsString(month){
        switch(month) {
            case '01':
                month = 'Jan'
              break;
            case '02':
                month = 'Feb'
              break;
            case '03':
                month = 'Mar'
              break;
            case '04':
                month = 'Apr'
              break;
            case '05':
                month = 'May'
              break;
            case '06':
                month = 'Jun'
              break;
            case '07':
                month = 'Jul'
              break;
            case '08':
                month = 'Aug'
              break;
            case '09':
                month = 'Sep'
              break;
            case 10:
                month = 'Oct'
              break;
            case 11:
                month = 'Nov'
              break;
            case 12:
                month = 'Dec'
              break;
            
            default:
              break;
          }
           return month;
    }
});