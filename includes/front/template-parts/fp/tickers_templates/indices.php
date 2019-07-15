<div class="item <?php echo $result->symbol;?>">
    <a href="instrument?instrument=<?php echo 'Indices';?>&symbol=<?php echo $result->symbol;?>">
        <div class="col-10 offset-1 col-sm-12 offset-sm-0 itemInner">
            <div class="row">
                <div class="col-12 cssecoFlagsW">
                    <img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/<?php echo  str_replace( ' ',  '', $result->name ); ?>.png" alt="Indices <?php echo $result->name;?> Flag" width="30px">
                </div>
            </div>
            <div class="row">
                <div class="col-12 currencyW">
                    <?php echo $result->name; ?>
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
                    <canvas id="<?php echo str_replace( ' ',  '',$result->name);?>"></canvas>
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
        let lastfifteen<?php echo str_replace( ' ',  '',$result->name); ?> = <?php echo json_encode($last_fifteen_values);?>;
        let selector<?php echo str_replace( ' ',  '',$result->name); ?> = document.getElementById("<?php echo str_replace( ' ',  '',$result->name); ?>").getContext('2d');
        for (let x = 0; x < <?php echo count($first_fifteen_values) -1 ; ?>; x++) {

            lastfifteen<?php echo str_replace( ' ',  '',$result->name); ?>.unshift( NaN);
        }
        let averageData<?php echo str_replace( ' ',  '',$result->name); ?> = []; 
        for (let x = 0; x < <?php echo count($dates_values); ?>; x++) {
            averageData<?php echo str_replace( ' ',  '',$result->name); ?>.push(<?php echo $average_all; ?>);
            
        }

        let chart<?php echo str_replace( ' ',  '',$result->name); ?> = new Chart(selector<?php echo str_replace( ' ',  '',$result->name); ?>, {
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
                    data: averageData<?php echo str_replace( ' ',  '',$result->name); ?>, 
                    type: 'line',
                    showLine: false
                },
                {
                    label: '',
                    backgroundColor: '<?php echo $tendency_colour;?>',
                    borderColor: '<?php echo $tendency_colour;?>',
                    fill: false,
                    data: lastfifteen<?php echo str_replace( ' ',  '',$result->name); ?>,
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
    </script>		
</div>