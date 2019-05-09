<?php
/**
 * @package fxoroVone
 * Template Name: symbol details page
 */
?>
<?php 
get_header();

$symbol = $_GET['symbol'];
$instrument = $_GET['instrument'];
require_once( 'includes/front/template-parts/fp/process/Api.php');

$api = new API();

$api->getSymbolData( $symbol );

$data = $api->data_result['Forex'][$symbol];

$days_formatted= array();

foreach( $data['Graph'][0]['Dates'] as $day){
    $days_formatted[] = date( 'd M', strtotime($day));
}
$days_formatted = array_reverse($days_formatted);

//calculate daily change  = (current price - min) / (max - min) *100
$daily_change = ( ( $data['BuyPrice'][0] - min( $data['Graph'][0]['Values'] ) ) / ( max( $data['Graph'][0]['Values'] ) - min( $data['Graph'][0]['Values'] ) ) ) * 100;

if ($daily_change > 97){
    $floating_pointer_left = 97;
}elseif($daily_change < 0){
    $floating_pointer_left = 0;
}else{
    $floating_pointer_left = $daily_change;
}

$arrays = array();

for ($i=0; $i < 59; $i++) { 
   $arrays[]= mt_rand( min( $data['Graph'][0]['Values'] )*1000, max( $data['Graph'][0]['Values'] )*1000 ) / 1000;
}
// var_dump( json_encode($arrays));
global $wpdb;
$intervals = $wpdb->get_results("SELECT ".$symbol." FROM tickers ");
// echo($intervals[0]->$symbol);

?>
<div class="container symbolpage">
    <div class="row">
        
        <div class="title col-12">
                    <h2><?php echo $instrument;?> - <?php echo( $data['Name'][0]);?> </h2>
                </div>
        <div class="col-lg-8  col-12 order-2 graph">  
            <div  style="min-height: 450px;">
                <canvas id="<?php echo $symbol?>"></canvas>
            </div>
            <div class="col-12 graph-controller">
                <div class="row">
                    <div class="col option">
                        <div class="interval text-white">1M</div> 
                    </div>
                    <div class="col option">
                        <div class="interval text-white">5M</div> 
                    </div>
                    <div class="col option">
                        <div class="interval text-white">15M</div> 
                    </div>
                    <div class="col option">
                        <div class="interval text-white">30M</div> 
                    </div>
                    <div class="col option">
                        <div class="interval text-white">1H</div> 
                    </div>
                    <div class="col option">
                        <div class="interval text-white">4H</div> 
                    </div>
                    <div class="col option" style="background-color: #0077b5;">
                        <div class="interval text-white" >1D</div> 
                    </div>
                    <div class="col option">
                        <div class="interval text-white">1W</div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 info">
            <div class=" wrapper">        
                <div class="col-12 prices">
                    <div class="row">
                        <a href="#" class="col sellprice-p   text-center">
                            <span class="font-weight-bold text-white">Sell</span>
                        </a>
                        <a href="#" class="col offset-2  buyprice-p   text-center">
                            <span class="font-weight-bold text-white">Buy</span>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col  sellprice  text-center">
                            <span class="value font-weight-bold "><?php echo $data['SellPrice'][0]; ?> </span>
                        </div>
                        <div class="col  offset-2 buyprice text-center">
                            <span class="value font-weight-bold "><?php echo $data['BuyPrice'][0]; ?></span> 
                        </div>
                    </div>
                </div>
                       
                <div class="col-12 changepercent">
                    <div class="row">
                        <div class="col-12 percentage text-center">
                            <span class="text-white font-weight-bold"><?php echo $data['ChangePercentage']; ?> %</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 trader-sentiment">
                <?php   
                    $random_buyers = rand(25, 83); 
                    $random_sellers = 100 - $random_buyers;
                ?>
                    <div class="row">
                        <div class="col-12">
                            <h5>Traders Sentiment</h5>
                        </div>
                        <div class="progress col-12">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $random_buyers;?>%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $random_sellers;?>%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="low  text-left">
                                <span> <?php echo $random_buyers;?>% Sellers</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="high  text-right">
                                <span><?php echo $random_sellers;?>% Buyers</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 daily-change">
                    <div class="row">
                        <div class="col-12">
                            <h5>Daily Change</h5>
                        </div>
                        <div class="col-12 floating-pointer">
                            <div class=" pointer-container <?php echo ( $data['ChangePercentage'] < 0 ) ? 'low' : 'high'; ?>" style="margin-left: <?php echo $floating_pointer_left;?>%;">
                                <span class="pointer-value"><?php echo round( ( $data['SellPrice'][0] + $data['BuyPrice'][0] ) / 2, 3) ?></span><br>
                                <i class="fa fa-caret-down fa-lg pointer-arrow" ></i>
                            </div>
                        </div> 
                        <div class="progress col-12">
                            <div class="progress-bar " role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="low  text-left">
                                        <span>Low: <?php echo round( min ( $data['Graph'][0]['Values'] ), 3 ); ?></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="high  text-right">
                                        <span>High: <?php echo round( max ( $data['Graph'][0]['Values'] ), 3 ); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 extra-info">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-5 text-left">Spread Type</div>
                                        <div class="col-7 text-right">Floating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-5 text-left">Spread</div>
                                        <div class="col-7 text-right"><?php echo round( ($data['SellPrice'][0] - $data['BuyPrice'][0]), 4); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-5 text-left">Margin</div>
                                        <div class="col-7 text-right"><?php echo round( ( ($data['SellPrice'][0] - $data['BuyPrice'][0]) / $data['SellPrice'][0] ) *100, 2) ?>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-5 text-left">Full Name</div>
                                        <div class="col-7 text-right"><?php echo $data['FullName']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
                    
            </div>
        </div>
        
    </div>
</div>

<script>
    Chart.defaults.LineWithLine = Chart.defaults.line;
    Chart.controllers.LineWithLine = Chart.controllers.line.extend({
        draw: function (ease) {
            
            
            Chart.controllers.line.prototype.draw.call(this, ease);
         
            
            const 
                ctx = this.chart.ctx,
                canvas = ctx.canvas,
                x = this.chart.options.hover.x,
                y = this.chart.options.hover.y;
            
           
            let dataset = chart.config.data.datasets[0];
               

            
            let lastValueX = dataset._meta[0].data[dataset.data.length-1]._model.x;
            let lastValueY = dataset._meta[0].data[dataset.data.length-1]._model.y;
           // let lastValue = this._data[this._data.length - 1].toFixed(4);
            
              // draw line
            ctx.beginPath();
            //current value line
            ctx.moveTo(this.chart.chartArea.right, lastValueY);
            ctx.lineTo( this.chart.chartArea.left, lastValueY);
             // stylize the current value line
            ctx.lineWidth = 1;
            ctx.strokeStyle = 'rgba(0, 0, 0, .9)';
            ctx.setLineDash([1, 1]);
            ctx.stroke();
            ctx.closePath();

            /// draw current value container
            // create the shape
            ctx.beginPath();
            ctx.moveTo(this.chart.chartArea.right , lastValueY );
            ctx.lineTo(this.chart.chartArea.right + 15, lastValueY + 15);
            ctx.lineTo(this.chart.chartArea.right + 60, lastValueY + 15);
            ctx.lineTo(this.chart.chartArea.right + 60, lastValueY -15);
            ctx.lineTo(this.chart.chartArea.right + 15, lastValueY -15);
           
            ctx.closePath();
            ctx.stroke();
            ctx.fillStyle = '#1b2854';
            ctx.fill();

            // write current Value
            ctx.font = '16px';
            ctx.fillStyle = '#fff';
            ctx.textAlign = 'center';
           // ctx.fillText(lastValue, this.chart.chartArea.right +30, lastValueY+5, 45);

            if ( x > this.chart.chartArea.left && x < this.chart.chartArea.right && y > this.chart.chartArea.top && y < this.chart.chartArea.bottom ){                      
                ctx.save();
                // this is the actual crosshair
                ctx.beginPath();
                ctx.moveTo(x, this.chart.chartArea.top);
                ctx.lineTo(x,  this.chart.chartArea.bottom);
                ctx.moveTo(this.chart.chartArea.left, y);
                ctx.lineTo(this.chart.chartArea.right, y);

                // stylize the crosshair
                ctx.lineWidth = 1;
                ctx.strokeStyle = 'rgba(0, 0, 0, .9)';
                ctx.setLineDash([1, 1]);
                ctx.stroke();
                ctx.closePath(chart);
                ctx.restore();

                let graphContainer = $('.graph'); 
            
                if (this.chart.tooltip._active && this.chart.tooltip._active.length) {
                    let activePoint = this.chart.tooltip._active[0];
                    let activePointY = activePoint._model.y;
                    let activePointX = activePoint._model.x;

                    //create point on hover
                    ctx.beginPath();
                    ctx.arc(activePointX, activePointY, 5, 0, 2 * Math.PI);
                    ctx.stroke();
                    ctx.closePath();
                    ctx.fillStyle = '#0077b5';
                    ctx.fill();
                    
                    // create the shape for label right (xAxis)
                    ctx.beginPath();
                    ctx.moveTo(this.chart.chartArea.right , y );
                    ctx.lineTo(this.chart.chartArea.right+ 15, y + 15);
                    ctx.lineTo(this.chart.chartArea.right + 55, y + 15);
                    ctx.lineTo(this.chart.chartArea.right + 55, y - 15);
                    ctx.lineTo(this.chart.chartArea.right + 15, y - 15);
                    ctx.closePath();
                    ctx.stroke();
                    ctx.fillStyle = '#0077b5';
                    ctx.fill();

                    //add data to the xAxis Label
                    let activePointValue = dataset.data[activePoint._index].toFixed(4);
                    ctx.beginPath();    
                    ctx.textAlign = 'center';
                    ctx.fillStyle = '#fff';
                    ctx.fillText(activePointValue, this.chart.chartArea.right+30, y+5, 45);

                    // create the shape for label douw (YAxis)
                    ctx.fillStyle = '#0077b5';
                    ctx.fillRect( x-60, canvas.scrollHeight-25, 120, 20);
                    ctx.fill();

                    //add data to the xAxis Label
                    let activePointLabel = activePoint._xScale.ticks[activePoint._index];
                    ctx.font = '10px';
                    ctx.textAlign = 'center';
                    ctx.fillStyle = '#fff';
                    ctx.fillText(activePointLabel,  x, canvas.scrollHeight-10);
                    
                }
            }
        }
    });
    let selector = document.getElementById('<?php echo $symbol;?>').getContext('2d');
    
    let chart = new Chart(selector, {
        // The type of chart we want to create
        type: 'LineWithLine',
        // The data for our dataset
        data: {
        
       labels: <?php echo json_encode($days_formatted); ?>,
        
        datasets: [{
            label: <?php echo json_encode( $data['Name'][0] );?>,
            backgroundColor: 'rgba(27, 40, 84,  0.2)',
            borderColor: 'rgb(27, 40, 84)',
            borderWidth: 0,
            fill: true,
            data: <?php echo json_encode($data['Graph'][0]['Values']); ?>,   
            radius:0,    
            pointStyle: 'circle',
            pointHitRadius: 0,
            pointHoverRadius: 0,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 0
        }]
    },

    // Configuration options go here
    options: {
        animation: {
            easing: 'linear'
        },
        onHover: function(evt){
            let graphContainer = $('.graph'); 
            this.options.hover.x = evt.clientX - graphContainer[0].offsetLeft - this.canvas.offsetLeft;
            this.options.hover.y = evt.pageY - graphContainer[0].offsetTop;     
        },
        legend: {
            display: false
        },
        elements:{
            point:{
                radius:1
            },
            line:{
                tension: 0
            }
        },
        maintainAspectRatio:false,
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 30,
                bottom: 0
            }
        },
        tooltips: {
            //enabled: false,
            mode: 'index',
            // titleFontSize: 16,
            // bodyFontSize: 16,
            footerFontSize: 14,
            intersect: false,
            custom : function(tooltipModel) 
                 {
                  tooltipModel.opacity = 0;
                 }
            
        },
        scales: {
            xAxes: [{                            
                ticks: {
                    autoSkip: true,
                   
                    maxTicksLimit: 10,
                    maxRotation: 0,
                    minRotation: 0,
                    fontSize: 14,
                    fontStyle: 'bold',  
                    fontColor: '#000'          
                },
                offset:true,
                display: true 
                        
            }],
            yAxes: [{
                ticks: {
                autoSkip:true,
                fontSize: 14,
                fontStyle: 'bold',  
                fontColor: '#000',  
                },  
                position:'right',           
                display: true     
            }]
        }
    }
    
});


let intervals = <?php  echo($intervals[0]->$symbol); ?>;

</script>
<script src="<?php echo get_template_directory_uri().'/vendor/api-service/single-symbol.js'?>"></script>


<?php
get_footer();
?>