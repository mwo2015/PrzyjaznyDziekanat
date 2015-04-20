<?php
namespace Juniper\Database;
use ActiveRecord\Model;

class Hotel extends Model {
	static $table_name = 'hotel';
	
	static $has_many = array(
  		array('hotelzones', 'class_name'=>'HotelZone'),
  		array('zones', 		'class_name'=>'Zone', 'through' => 'hotelzones'),	
		array('addresses', 	'class_name'=>'Address'),
		array('images', 	'class_name'=>'Image'),
		array('mails', 		'class_name'=>'Mail'),
		array('services',	'class_name'=>'Service'),
 		array('phones', 	'class_name'=>'Phone')						
	);
}
