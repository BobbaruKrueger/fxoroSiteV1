<?php
/**
 * @package fxoroVone
 * Template Name: MTE MEDIA single Producttemplate
 * mte_media_product.php
 *
 * MTE MEDIA single Product template
 */
?>
<?php get_header();?>
<?php

$product = $_GET['product'];
$lsn = $_GET['lsn'];


?>
<a href="javascript:history.go(-1)">go back</a>

<!-- The DIV for the implementation -->
<div id="mte-education-root" class="mte-root" style="max-width: 950px; margin: 0 auto;"></div>
<!-- Parameters -->
<script>
var userRef="7743aa8"; /* User reference code */
var mte_language="en"; /* Language */
var trade_link="Your trading platform URL"; /* Trading platform URL */
var open_account ="Your opening account URL"; /* Opening account URL */
var logoIntro = true; /* Play logo video */
var mte_demo=false; /* Locked mode */

var autoPlay =true;
var single   = '<?php echo $product;?>';
<?php
if ($lsn) echo 'var lsn='.$lsn.';';
?>



var theme = "material";
</script><!-- The DIV for the implementation -->
 
<!-- <link href="https://s3-eu-west-1.amazonaws.com/data.mte-media.com/react/main.css" rel="stylesheet"> -->

<script src="https://s3-eu-west-1.amazonaws.com/data.mte-media.com/react/react.v2.js"></script>
<script src="https://s3-eu-west-1.amazonaws.com/data.mte-media.com/react/react.v2.main.js"></script>
<script src="https://s3-eu-west-1.amazonaws.com/data.mte-media.com/react/runtime~main.fdfcfda2.js"></script>

<?php get_footer();?>