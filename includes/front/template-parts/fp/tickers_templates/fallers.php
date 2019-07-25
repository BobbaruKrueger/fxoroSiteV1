<div class="item Fall<?php echo $result->symbol;?>">
    <a href="instrument?instrument=<?php echo $result->category;?>&symbol=<?php echo $result->symbol;?>">
        <div class="col-10 offset-1 col-sm-12 offset-sm-0 itemInner">
            <div class="row">
                <?php if($result->category =="FOREX"): ?>
                    <div class="col-12 cssecoFlagsW overlay-flag-container">
                        <img  src="<?php echo get_template_directory_uri(); ?>/imgs/tickers/<?php echo substr($result->symbol,0,3) ?>.png" alt="Forex <?php echo substr($result->symbol, 0,3);?> Flag" width="30px">
                        <img  src="<?php echo get_template_directory_uri(); ?>/imgs/tickers/<?php echo substr($result->symbol, -3) ?>.png" alt="Forex <?php echo substr($result->symbol, -3) ?>  Flag" width="30px">
                    </div>
                
                <?php else: ?>
                    <div class="col-12 cssecoFlagsW">
                        <img  src="<?php echo get_template_directory_uri(); ?>/imgs/tickers/<?php echo  str_replace( ' ',  '', $result->name ); ?>.png" alt="<?php echo $result->category ?>  <?php echo $result->name;?> Flag" width="30px">
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-12 currencyW">
                    <?php echo $result->name; ?> <i class="fa fa-chevron-down fa-xs" style="color:red;"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-12 changeW">
                    <?php 
                    $changepercentage = round( ( ( $result->sell - $result->closed ) / $result->sell) * 100, 2);
                    $changepercentage = ( $changepercentage > 0 ) ? '+'.$changepercentage : $changepercentage ;
                    echo $changepercentage;
                    ?> %
                </div>
            </div>
            <div class="row">
                <div class="col-12 canvasW">

                    <?php if($result->category =="FOREX"): ?>
                        <canvas id="Fall<?php echo $result->symbol;?>"></canvas>
                    <?php else: ?>
                        <canvas id="Fall<?php echo str_replace( ' ',  '',$result->name);?>"></canvas>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-6 sellprice">
                    <div class="row">
                        <div class="col-12">
                            <h3>Sell:</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 price">
                            <span class="value"><?php echo $result->sell?></span><span class="caret"></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 buyprice">
                    <div class="row">
                        <div class="col-12 ">
                            <h3>Buy:</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 price">
                            <span class="value"><?php echo $result->buy?></span><span class="caret"></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php 
        $interval = json_decode($result->interval_1d);
        //var_dump($interval);

        $dates_labels = array();
        for ($i=0; $i <60 ; $i++) { 
            $dates_labels[] = ' i';
        }
        
        $dates_values =  json_decode($result->interval_1d);
        $first_fifteen_values = array_slice($dates_values, 0,  (count($dates_values)/2 ) );
        $last_fifteen_values = array_slice($dates_values,  (count($dates_values)/2) -1, count($dates_values) );
        $average_first = array_sum($first_fifteen_values) / count($first_fifteen_values);
        $average_last = array_sum($last_fifteen_values) / count($last_fifteen_values);
        $tendency_colour = ( $average_first > $average_last ) ? 'rgb(190, 0, 17)' : 'rgb(48, 171, 47)';

        $average_all = array_sum($dates_values) / count($dates_values);
        
    ?>
<script>
    <?php if ( $result->category =="FOREX" ):?>
        let Falllastfifteen<?php echo $result->symbol; ?> = <?php echo json_encode($last_fifteen_values);?>;
        let Fallselector<?php echo $result->symbol; ?> = document.getElementById("Fall<?php echo $result->symbol; ?>").getContext('2d');
        for (let x = 0; x < <?php echo count($first_fifteen_values) -1 ; ?>; x++) {

            Falllastfifteen<?php echo $result->symbol; ?>.unshift( NaN);
        }
        let FallaverageData<?php echo $result->symbol; ?> = []; 
        for (let x = 0; x < <?php echo count($dates_values); ?>; x++) {
            FallaverageData<?php echo $result->symbol; ?>.push(<?php echo $average_all; ?>);
            
        }

        let Fallchart<?php echo $result->symbol; ?> = new Chart(Fallselector<?php echo $result->symbol; ?>, {
            // The type of chart we want to create
            
            // The data for our dataset
            data: {
                labels: <?php echo json_encode($dates_labels);?>,
                
                datasets: [{
                    label: '',
                    backgroundColor: 'rgba(218, 223, 225, 1)',
                    borderColor: 'rgba(218, 223, 225, 1)',
                    fill: false,
                    data: <?php echo json_encode($first_fifteen_values);?>, 
                    type: 'line',
                },
                {
                    label: '',
                    backgroundColor: 'rgba(218, 223, 225, 1)',
                    borderColor: 'rgba(218, 223, 225, 1)',
                    fill: false,
                    data: FallaverageData<?php echo $result->symbol; ?>, 
                    type: 'line',
                    showLine: false
                },
                {
                    label: '',
                    backgroundColor: '<?php echo $tendency_colour;?>',
                    borderColor: '<?php echo $tendency_colour;?>',
                    fill: false,
                    data: Falllastfifteen<?php echo $result->symbol; ?>,
                    type: 'line',
                }]
            },        
            // Configuration options go here
            options: {
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
                layout: {
                    padding: {
                        left: 25,
                        right: 25,
                        top: 30,
                        bottom: 30
                    }
                },
                tooltips: {
                    enabled: false
                },

                scales: {
                    xAxes: [{                            
                        
                            
                            display: false //this will remove only the label  
                                
                    }],
                    yAxes: [{     
                                                
                            display: false //this will remove only the label         
                    }]
                }
            }
        });
    <?php else:?>
        let Falllastfifteen<?php echo str_replace( ' ',  '',$result->name); ?> = <?php echo json_encode($last_fifteen_values);?>;
        let Fallselector<?php echo str_replace( ' ',  '',$result->name); ?> = document.getElementById("Fall<?php echo str_replace( ' ',  '',$result->name); ?>").getContext('2d');
        for (let x = 0; x < <?php echo count($first_fifteen_values) -1 ; ?>; x++) {

            Falllastfifteen<?php echo str_replace( ' ',  '',$result->name); ?>.unshift( NaN);
        }
        let FallaverageData<?php echo str_replace( ' ',  '',$result->name); ?> = []; 
        for (let x = 0; x < <?php echo count($dates_values); ?>; x++) {
            FallaverageData<?php echo str_replace( ' ',  '',$result->name); ?>.push(<?php echo $average_all; ?>);
            
        }

        let Fallchart<?php echo str_replace( ' ',  '',$result->name); ?> = new Chart(Fallselector<?php echo str_replace( ' ',  '',$result->name); ?>, {
            // The type of chart we want to create
            
            // The data for our dataset
            data: {
                labels: <?php echo json_encode($dates_labels);?>,
                
                datasets: [{
                    label: '',
                    backgroundColor: 'rgba(218, 223, 225, 1)',
                    borderColor: 'rgba(218, 223, 225, 1)',
                    fill: false,
                    data: <?php echo json_encode($first_fifteen_values);?>, 
                    type: 'line',
                },
                {
                    label: '',
                    backgroundColor: 'rgba(218, 223, 225, 1)',
                    borderColor: 'rgba(218, 223, 225, 1)',
                    fill: false,
                    data: FallaverageData<?php echo str_replace( ' ',  '',$result->name); ?>, 
                    type: 'line',
                    showLine: false
                },
                {
                    label: '',
                    backgroundColor: '<?php echo $tendency_colour;?>',
                    borderColor: '<?php echo $tendency_colour;?>',
                    fill: false,
                    data: Falllastfifteen<?php echo str_replace( ' ',  '',$result->name); ?>,
                    type: 'line',
                }]
            },        
            // Configuration options go here
            options: {
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
                layout: {
                    padding: {
                        left: 25,
                        right: 25,
                        top: 30,
                        bottom: 30
                    }
                },
                tooltips: {
                    enabled: false
                },

                scales: {
                    xAxes: [{                            
                        
                            
                            display: false //this will remove only the label  
                                
                    }],
                    yAxes: [{     
                                                
                            display: false //this will remove only the label         
                    }]
                }
            }
        });
    <?php endif;?>

</script>		
</div>