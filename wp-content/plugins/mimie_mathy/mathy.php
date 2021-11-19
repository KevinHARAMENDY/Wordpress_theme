<?php
/*
Plugin Name: Mimmie Mathy
Description: Plugin permettant de piffrer Mimmie Mathy
Version: 1.0
Text Domain: mimmie_mathy
*/

class Widget_Mathy extends WP_Widget{


	function __construct(){
		//Configuration du widget
		$widget_ops=
		[
			'classname'=>'widget-mathy',
			'description'=>'Widget permettant l\'affichage d\'une Mimmie Mathy',
		];
		
		$control_ops=
		[
			'width'=>300,
			'height'=>350,
			'id_base'=>'widget-mathy',
		];
		parent::__construct('widget-mathy','Mimmie Mathy',$widget_ops,$control_ops);
	}
	
	function widget($args,$instance){
		echo '<img src="https://image.noelshack.com/minis/2017/23/1496746967-mmm.png" width="200">';
		
	}
	//Formulaire des réglages
	function form($instance){ 	
	}

	function update($new_instance,$old_instance){
			return $instance;
	}
}

function register_Mathy(){
	register_widget('Widget_Mathy');
}

add_action('widgets_init','register_Mathy');
?>