<?php
/**
 * @package fxoroVone
 * Template Name: MTE MEDIA Basic Course ssingle Item
 * basic_course_video.php
 *
 * MTE MEDIA basic Course
 */
?>
<?php get_header();?>

<!-- add back button -->

<!-- <div class="col-12">
    <div class="row">
        <div class="col-12">
        	<a href="javascript:history.go(-1)" class="cssecoBtn animationbtn mteBtn">				
        		<i class="fas fa-arrow-alt-circle-left"></i> Back
        	</a>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-12">
        <div class="btn btn-success">Click me!</div>
        </div>
    </div>
</div>

<div class="col-12" style="position:static;">
    
    <div class="row">
        <div class="frame col-12 text-center">
            <div class="row col-12">
                <div class="offset-md-10">
                    <span class="close-btn">
                    <i class="fa fa-times fa-2x" style="color:#fff; z-index:9999999999999999999999999999;"></i>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="player">
                    <div id="mte">
                        <script  src='https://s3-eu-west-1.amazonaws.com/data.mte-media.com/mte_service/js/mte.js'></script>
                    </div>
                    <div id='players'>

                    <div id='mfp_player'></div>

                    <div id='vid_player_container'></div>

                    <div id='ebk_player'></div>

                    <div id='cal'></div>

                    </div>

                    <script>

                    // put_course({target_id:'mte_course', ref:'7743aa8',settings: 'embed2', language:'en', product:'vidr', lsns:'1', startWith:1});

                    </script>

                    <div id='mte_course'></div>
                </div>
            </div>
           
            
        </div>
    </div>
</div>









<?php get_footer();?> 


<script>
$(document).ready(function(){
    url = "https://s3-eu-west-1.amazonaws.com/data.mte-media.com/mte_service/js/mte.js";
    
    $('.btn').on('click', function(){
        // $('.frame').css('display', 'block');
        // if($('#myframe').length == 0) {
        //     $('<iframe src="http://mte-media.com/admin2/frames/put_course.php?prd=vidr&lng=en&ref=7743aa8&set=Embed&jtl=2&playone" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0" scrolling="no" width="'+ window.screen.width+'" height="'+window.screen.height+'" id="myFrame"></iframe>')
        //  .appendTo('.frame');
        //         console.log(window);
        // }
        // check if script exists
        // if( !isScriptLoaded() ){
            
        //     loadScript(url);
        // }
        $('.frame').css('display', 'block');
         put_course({target_id:'mte_course', ref:'7743aa8',settings: 'embed2', language:'en', product:'vidr', lsns:'1', startWith:1, demo:'2', playOne:true});
                
    
        $('.close-btn').on('click', function(){
            $('.frame').css('display', 'none');
            // $('#mte').remove();
            // if ($('#mte').remove()) {

            //     console.log('removed');
                    
            // }
            
            vid_player.jPlayer("pause");
            // $('.player').remove();
        });

    });
});

function isScriptLoaded(url){
    // check if url is provided 
    if (!url){
        // if no url provided set the default url
        url = "https://s3-eu-west-1.amazonaws.com/data.mte-media.com/mte_service/js/mte.js";
    }
    // get all the scripts on page
    var scripts = $('script');
    // loop through the scripts to check if it is loaded or not
    for (var index = scripts.length; index--;) {
        var  element = scripts[index];
        // check if the source attr of the element is the url
        if( element.src == url){
            return true;
        }

        return false;
        
    }
}
function loadScript(url){
    // get the head tag
    var element = $('#mte');
    var script = document.createElement('script');
    script.src = url;
    $(element).append(script);
}

</script>

<style>
.frame{
    position: absolute;
    z-index: 9999999999999;
    top: 0;
    left:0;
    bottom: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.6901960784313725);
    width: 100vw;
    height: 100vh;
    text-align: center;
    display: none;
    text-align:center;
   
}
</style>


<?php
/**
 * @package fxoroVone
 * Template Name: Basic Course template
 * cssecoTemplate_courseBasic_page.php
 *
 * Basic Course template
 */
?> -->
<?php get_header(); ?>
		</div><!-- /.row -->
	</div><!-- /.container-->
	<section id="basic_course" class="basic_course">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<header class="entry-header">
						<?php the_title('<h1 class="entry-title"><span>','</span></h1>' ); ?>
					</header>
					<!--/.entry-header-->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<ul class="nav" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="beginners-tab" data-toggle="tab" href="#beginners" role="tab" aria-controls="beginners" aria-selected="true">Beginners</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="advanced-tab" data-toggle="tab" href="#advanced" role="tab" aria-controls="advanced" aria-selected="false">Advanced</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="terms-tab" data-toggle="tab" href="#terms" role="tab" aria-controls="terms" aria-selected="false">Terms</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="metatrader-tab" data-toggle="tab" href="#metatrader" role="tab" aria-controls="metatrader" aria-selected="false">Metatrader</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="beginners" role="tabpanel" aria-labelledby="beginners-tab">
							<div class="row">
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-edit"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Trading is an art form</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/beginners/Basic_1.jpg); display: block;" data-toggle="modal" data-target="#bsmodalFX"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>If you would like to become a trader you should watch this video and learn what traders need to know in order to become successful?</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="" data-toggle="modal" data-target="#bsmodalFX">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-edit"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Chance And Risk</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/beginners/Basic_2.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>In this video we’ll explain what are the chances and risks and the types of investments. You can’t become a trader if you don’t master these topics.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-edit"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Are you an emotional trader?</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/beginners/Basic_3.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>What are the relations between emotions and trading? Why you must be in a specific state of mind in order to succeed? How to identify bad emotional state and how to deal with it?</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-edit"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Distributing Risks</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/beginners/Basic_4.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>If you are new to the trading market this video is very important: What is risk distribution? How good capital management may make the difference between failed and successful investment?</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-edit"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Currency Pairs</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/beginners/Basic_5.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>The Forex market is based on Currency pairs. This video explain what are currency pairs and exchange rate? Definitions and presentation methods.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-edit"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Buying and selling</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/beginners/Basic_6.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>When you should buy and when you should sell a product? In case you’re encountering a losing trade, how can you minimize losses?</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="advanced" role="tabpanel" aria-labelledby="advanced-tab">
							<div class="row">
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-briefcase"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Passive Trading 5/15 Rule</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/advanced/advanced_1.jpg); display: block;" data-toggle="modal" data-target="#bsmodalFX"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>What type of trader would you like to be? Watch this video and make a wise decision. What is the 5/15 rule? How to implement it in real trading?</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="" data-toggle="modal" data-target="#bsmodalFX">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-briefcase"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Aggressive Trading 10/30 Rule</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/advanced/advanced_2.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>This video is following the 5/15 video: What is the 10/30 rule? How to implement it? When should you use it?</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-briefcase"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Calculating Pips</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/advanced/advanced_3.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>Higher pips in the right direction mean higher profits. Watch this video to learn what pip is and how to calculate it? Pip calculation according to the specific currency.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-briefcase"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Market analysis types</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/advanced/advanced_4.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>Market analysis is one of the basic tools that enable you to gain profit in Forex. Watch this video and learn the two basic types of market analysis.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-briefcase"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Trend</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/advanced/advanced_5.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>What is trend and how it can help in finding the market direction? The 3 possible market direction and how trends are identified?</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-briefcase"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Support and Resistance</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/advanced/advanced_6.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>The definitions of support and resistance. How to identify support or resistance line? Support and resistance strength. What is the meaning of a support or resistance breakout?</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-briefcase"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Shooting star, Harami patterns</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/advanced/advanced_7.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>Patterns are the essence of technical analysis. This video explains more about: The patterns’ features and characteristics. Tips for patterns identification.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-briefcase"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Engulfing+, Downside Gap Three </h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/advanced/advanced_8.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>Some of the most common patterns are explained in this video. The patterns’ features and characteristics. Tips for patterns identification.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-briefcase"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Breakaway, 3 White Soldiers</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/advanced/advanced_9.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>Some of the most common patterns are explained in this video. The patterns’ features and characteristics. Tips for patterns identification.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="terms" role="tabpanel" aria-labelledby="terms-tab">
							<div class="row">
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-file"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Pips</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/terms/Terms_1.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>As a trader you'll hear a lot about pips. Do you want to know more? In this video we'll explain what pip is, how pips are calculated and why the Japanese Yen is unique.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-file"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Short & Long</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/terms/Terms_2.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>Short and Long are two very common terms in Forex. You can't call yourself a trader if you don’t know this. Watch this video and learn the definition of Short and the definition of Long.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-file"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Take Profit Order</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/terms/Terms_3.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>What is the Take Profit order? In which scenarios the Take Profit order should be used? Watch this video and everything will be clear and we’ll also provide some take profit examples.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="metatrader" role="tabpanel" aria-labelledby="metatrader-tab">
							<div class="row">
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-donate"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Opening a new order</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/metatrader/Metatrader_1.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>The different ways to open a new order in the MT4 platform are explained in this video. This is the action that turns an observer into a trader.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-donate"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>The terminal window</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/metatrader/Metatrader_2.jpg); display: block;" data-toggle="modal" data-target="#bsmodalFX"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>Among other features, this window shows all open trades and the current balance.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="" data-toggle="modal" data-target="#bsmodalFX">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-donate"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Closing an order</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/metatrader/Metatrader_3.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>Your profit will be realized only after you close an order. This video will explain how to do it.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="zaCardWrapper col-12 col-md-6 col-lg-4">
									<div class="zaCard">
										<div class="lock" data-toggle="modal" >
										<!-- <div class="lock" data-toggle="modal" data-target="#bsmodalFXL"> -->
											<div class="icW text-center">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-lock"></i>

													</div>
												</div>
											</div>
										</div>
										<div class="zaCardHeader">
											<div class="row">
												<div class="col-4 zaCardIcon">
													<div class="dtable">
														<div class="dtable-cell">
															<div class="zaCardIconInner">
																<div class="dtable">
																	<div class="dtable-cell">
																		<i class="fas fa-donate"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-8 pl-0 zaCardTitle">
													<div class="dtable">
														<div class="dtable-cell">
															<h6>Pending orders</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="zaCardMedia" style="background-image:url(<?php echo get_template_directory_uri(); ?>/imgs/basic_course/metatrader/Metatrader_4.jpg); display: block;"></a>
										<div class="zaCardContent">
											<div class="dtable">
												<div class="dtable-cell">
													<p>This is useful when you’re interested to place an order when a specific condition such as buy limit, Sell limit, Buy stop, Sell stop is met. In This video you’ll learn how to place a pending order.</p>
												</div>
											</div>
										</div>
										<div class="zaCardActions text-center">
											<a href="#" class="">
												<i class="far fa-play-circle"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container-->
	</section>
	<div class="modal fade" id="bsmodalFX" tabindex="-1" role="dialog" aria-labelledby="bsmodalFXLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<!-- <h5 class="modal-title" id="bsmodalFXLabel">Modal title</h5> -->
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

				</div>
				<div class="modal-body">
					<div class="player">
						<div id="mte">
							<script  src='https://s3-eu-west-1.amazonaws.com/data.mte-media.com/mte_service/js/mte.js'></script>
						</div>
						<div id='players'>

							<div id='mfp_player'></div>

							<div id='vid_player_container'></div>

							<div id='ebk_player'></div>

							<div id='cal'></div>

						</div>

						<script>

							put_course({target_id:'mte_course', ref:'7743aa8',settings: 'embed2', language:'en', product:'vidr', lsns:'1', startWith:1, playOne:true});

						</script>

						<div id='mte_course'></div>
					</div> 
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="bsmodalFXL" tabindex="-1" role="dialog" aria-labelledby="bsmodalFXLLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 10px; height: 10px; position: absolute; top: -0; right: 8px; z-index: 99999">
				  <span aria-hidden="true">&times;</span>
				</button>

				<div class="modal-body mt-3">
					<p>
						<b>Disclaimer:</b>
					</p>
					<p>
						All rights reserved to MTE-Media.<br>
						The distribution, duplication or screening of this lesson and/or any part of it in any form is prohibited. 
					</p>
					<p>
						Any duplication or copying shall be considered a violation of the copyrights law. Violator shall be liable to prosecution under the law. 
					</p>
					<p>
						The user of this information does so at his/her own discretion and the user is fully responsible for consequences thereof. 
					</p>
					<p>
						Any information contained within the Courses is not intended as an offer, solicitation for the purchase or sale of any financial instrument, nor to provide any investment advice or service, or to perform any act of any kind.
					</p>
					<p>
						General risk warning: trading carries a high level of risk and can result in the loss of all of your balance. As such, trading may not be appropriate for all investors. You should not invest money that you cannot afford to lose. Before deciding to trade, you should become aware of all the risks associated with trading, and seek advice from an independent and suitably licensed financial advisor. Past performance may not be indicative of future results.
					</p>
					<a class="cssecoBtn animationbtn" href="#" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#bsmodalFXL2">I have read and agree</a>
				</div>
			</div>
		</div>

	</div>
	<div class="modal fade" id="bsmodalFXL2" tabindex="-1" role="dialog" aria-labelledby="bsmodalFXL2Label" aria-hidden="true">
		<div class="modal-dialog" role="document" style="transform: translateY(200%);">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 10px; height: 10px; position: absolute; top: -0; right: 8px; z-index: 99999">
				  <span aria-hidden="true">&times;</span>
				</button>

				<div class="modal-body mt-3 text-center">
					<div class="row">
						<div class="col-12 col-sm-6">
							<a class="cssecoBtn animationbtn" href="http://qa.fxoro.com/login/">Login</a>
						</div>
						<div class="col-12 col-sm-6">
							<a class="cssecoBtn animationbtn" href="http://qa.fxoro.com/register/">Create account</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="container">
		<div class="row">

<style>
/* .close {
    opacity: 0.7;
	color:#fff;
	text-shadow:none;
}
.close:not(:disabled):not(.disabled):hover {
    opacity: .9;
	color:#fff;
}
.modal-header {
  
    border-bottom: 0px solid #dee2e6;
	width: 930px;
    margin: 0 auto;
	padding: 2rem 1rem 0rem 1rem;
   
}
.modal-body {
 
    padding:0;
}

.modal.show .modal-dialog {

    max-width: 90%!important;
	height: 87vh;
}
.modal-content {
   
    background-color:rgba(0,0,0,0);
	border:none;

}
@media (min-width: 576px){
	.modal-dialog {
		background: rgba(0,0,0,0);
		max-width: 100%!important;
		width: 100vw!important;
		margin: 1.75rem auto;
} */

</style>
<?php get_footer(); ?>