<?php
/*
Plugin Name: CW Google Analytics Datenschutz
Plugin URI: http://www.christian-wenzl.de/wordpress-google-analytics-datenschutz
Description: Google Analytics nach aktuellem Stand datenschutzkonform einsetzen (Deutschland, Gewährleistung ausgeschlossen). Einstellungen unter Privatsphäre zu finden.
Version: 1.3
Author: Christian Wenzl
Author URI: http://www.christian-wenzl.de
License: GPLv2

*/

register_uninstall_hook(__FILE__, 'cw_GoogleAnalyticsUninstall');
function cw_GoogleAnalyticsUninstall(){
	delete_option('cw_google_analytics_account');
}

add_action('admin_init', 'cw_GoogleAnalyticsSettings');

function cw_GoogleAnalyticsSettings(){
	register_setting('privacy', 'cw_google_analytics_account');
	
	add_settings_section('cw_GoogleAnalyticsSettingsID', 'Google Analytics', 'cw_GoogleAnalyticsSettingsDescription', 'privacy');
	
	function cw_GoogleAnalyticsSettingsDescription(){
		echo 'Einstellungen f&uuml;r Google Analytics';
	}
	add_settings_field('cw_google_analytics_account', 'Account-ID', 'cw_GoogleAnalyticsAccountInput', 'privacy', 'cw_GoogleAnalyticsSettingsID');
	function cw_GoogleAnalyticsAccountInput(){
		$strAccount = get_option('cw_google_analytics_account');
		echo "<input type='text' class='regular-text code' id='cw_google_analytics_account' name='cw_google_analytics_account' value='".esc_attr($strAccount)."' /> Beispiel: UA-23456789-1";
	}
}


add_action('wp_head', 'cw_GoogleAnalyticsFooter', 90);
function cw_GoogleAnalyticsFooter(){
	
	$strAccount = get_option('cw_google_analytics_account');
	if(strlen($strAccount)<=10) return;

	
	echo "
	<!-- CW Google Analytics Datenschutz -->
	<script>
	   var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '".$strAccount."']);
	  _gaq.push(['_gat._anonymizeIp']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<!-- CW Google Analytics Datenschutz -->";
	
}
