<?php

$API_DESCRIPTION =array( 


	"Initialization"=>	array(
							array("Method"=>'GET', "URL"=>'/initialize/zone', "Schema"=>"{}", "Example"=>"{}", "Description"=>"Initialize zone table in DB.", "Output" => "{}"),
							array("Method"=>'GET', "URL"=>'/initialize/zonehotel', "Schema"=>"{}", "Example"=>"{}", "Description"=>"Initialize zone hotel ", "Output" => "{}"),
							array("Method"=>'GET', "URL"=>'/initialize/hotelinfo', "Schema"=>"{}", "Example"=>"{}", "Description"=>"Initialize hotelinfo into DB", "Output" => "{}"),
							array("Method"=>'GET', "URL"=>'/initialize/cataloguedata',"Schema"=>"{}", "Example"=>"{}", "Description"=>"Initialize static catalogue data into DB", "Output" => "{}")				
							),

	"Zone tree"		=>	array(
							array("Method"=>'GET', "URL"=>'/zonetree/all', "Schema"=>"{}", "Example"=>"{}", "Description"=>"Draw JSON schema of all zones (! around 120 seconds)",
									 "Output" => '[{"id":70635,"name":"Aviles","0":[]}]'),
							array("Method"=>'GET', "URL"=>'/zonetree/node/{id}', "Schema"=>"{}", "Example"=>"{}", "Description"=>"Draw JSON schema ", "Output" => '[{"id":70635,"name":"Aviles","0":[]}]'),
							array("Method"=>'GET', "URL"=>'/zonetree/selectzone/{id}', "Schema"=>"{}", "Example"=>"{}", "Description"=>"Change tick (SELECTED) in DB to true", "Output" => '{}'),
							array("Method"=>'GET', "URL"=>'/zonetree/unselectzone/{id}',"Schema"=>"{}", "Example"=>"{}", "Description"=>"Change tick (SELECTED) in DB to false", "Output" => '{}')
							),

	"Zone getters"	=>	array(
							array("Method"=>'POST', "URL"=>'/zone/all', "Schema"=>"{}", "Example"=>"{}", "Description"=>"Return all zones", "Output" => '[{"id":56473,"name":"Krakow"},{"id":61473,"name":"Marianske Lazne Arpt"}]'),
							array("Method"=>'POST', "URL"=>'/zone/id', "Schema"=>"{id: 'int'}", "Example"=>"{id: 473}", "Description"=>"Return zones that match expresion id LIKE %id%", "Output" => '[{"id":56473,"name":"Krakow"},{"id":61473,"name":"Marianske Lazne Arpt"}]'),
							array("Method"=>'POST', "URL"=>'/zone/name', "Schema"=>"{name: 'string'} ", "Example"=>"{name: \"Bar\"}", "Description"=>"Return zones that match expresion name LIKE %name%", "Output" => '[{"id":56473,"name":"Krakow"},{"id":61473,"name":"Marianske Lazne Arpt"}]')
							),

	"Hotel getters"	=>	array(
							array("Method"=>'POST', "URL"=>'/hotel/search/zoneid', "Schema"=>"{zone_id: 'int'}", "Example"=>"{zone_id: 47738}", "Description"=>"Return all hotels info (array) in zone",
									 "Output" => '[{"id":338,"code":"E8BivXUqr0OPa1QNihcEmA==","name":"ALFONSO III HOTEL","chainname":null,"shortdescription":"At (...)","longdescription":"work (...) ","longitude":"3.84322","latitude":"40.00311","categorycode":"24","categorydetails":"** Sup"}]'),
							array("Method"=>'POST', "URL"=>'/hotel/info/id', "Schema"=>"{hotel_id: 'int'}", "Example"=>"{hotel_id: 324}", "Description"=>"Return hotel info",
									 "Output" => '[{"id":338,"code":"E8BivXUqr0OPa1QNihcEmA==","name":"ALFONSO III HOTEL","chainname":null,"shortdescription":"At (...)","longdescription":"work (...) ","longitude":"3.84322","latitude":"40.00311","categorycode":"24","categorydetails":"** Sup"}]'),
							array("Method"=>'POST', "URL"=>'/hotel/address/id', "Schema"=>"{hotel_id: 'int'}", "Example"=>"{hotel_id: 324}", "Description"=>"Return hotel address",
									 "Output" => '[{"id":319,"hotel_id":324,"addressline":"(...)MAJORC","cityname":"(...), ES","postalcode":"","county":"P(...), ES"}]'),
							array("Method"=>'POST', "URL"=>'/hotel/phone/id', "Schema"=>"{hotel_id: 'int'}", "Example"=>"{hotel_id: 324}", "Description"=>"Return hotel phone",
									 "Output" => '[{"id":314,"hotel_id":324,"number":"971262300","type":""}]'),
							array("Method"=>'POST', "URL"=>'/hotel/email/id', "Schema"=>"{hotel_id: 'int'}", "Example"=>"{hotel_id: 324}", "Description"=>"Return hotel email",
									 "Output" => '[{"id":244,"hotel_id":324,"email":"ALEJAND@GSA.ES"}]'),
							array("Method"=>'POST', "URL"=>'/hotel/service/id', "Schema"=>"{hotel_id: 'int'}", "Example"=>"{hotel_id: 324}", "Description"=>"Return hotel service",
									 "Output" => '[{"id":318,"hotel_id":324,"services":""}]'),
							array("Method"=>'POST', "URL"=>'/hotel/image/id', "Schema"=>"{hotel_id: 'int'}", "Example"=>"{hotel_id: 324}", "Description"=>"Return hotel images",
									 "Output" => '[{"id":3923,"hotel_id":324,"title":"ALEJANDRIA HOTEL 1","format":"Big","originalurl":"http:\/\/(...)o_1.jpg"}]'),
							array("Method"=>'POST', "URL"=>'/hotel/fullinfo/id', "Schema"=>"{hotel_id: 'int'}", "Example"=>"{hotel_id: 324}", "Description"=>"Return hotel full info", 
									"Output" => '{"hotelInfo":{},"address":[{}],"phones":[{}],"mails":[{}],"images":[{}],"services":[{}]}')
							),
		
	"Hotel Avail"	=>	array(
							array("Method"=>'POST', "URL"=>'/avail/zone/id', "Schema"=>"{zone_id: 'int', start: 'date format Y-m-d', end: 'date format Y-m-d', adults: 'int', children: 'int'} ", "Example"=>"{zone_id: 47738, start: '2015-05-21', end: '2015-05-31', adults: 2, children: 3}", "Description"=>"This method is deprecated - see extended", "Output" => "{}"),
							array("Method"=>'POST', "URL"=>'/avail/hotel/id', "Schema"=>"{hotel_id: 'int', start: 'date format Y-m-d', end: 'date format Y-m-d', adults: 'int', children: 'int'}", "Example"=>"{hotel_id: 321, start: '2015-05-21', end: '2015-05-31', adults: 2, children: 3}", "Description"=>"This method is deprecated - see extended", "Output" => "{}"),
							array("Method"=>'POST', "URL"=>'/avail/extended/zone/id', "Schema"=>"{zone_id: 'int', start: 'date format Y-m-d', end: 'date format Y-m-d', period_min: 'int', period_max: 'int', rooms: [['person_age (int)', 'person_age (int)'],['person_age (int)']] }", 
									"Example"=>"{zone_id: 47738, start: '12-05-2015', end: '17-05-2015', period_min: 3, period_max: 5, rooms: [[6,21, 20],[41,35]] }",
									"Description"=>"<p class=\"text-justify\">This is extended getter of hotels availability in exact zone. Provide selectors for start and end dates (approximate), and period time (min max). Rooms contain arrays of rooms fullfield with each people age.</p>",
									 "Output" => '{"3":{"2015-05-12":[{"HotelInfo":{},"Response":{"id":132,"room_stay_request_id":29,"hotel_id":1003,"minprice":"137.7","maxprice":"612.12","meal":null}}],"2015-05-13":[{"HotelInfo":{},"Response":{}}]}}'),
							array("Method"=>'POST', "URL"=>'/avail/extended/hotel/id', "Schema"=>"{hotel_id: 'int', start: 'date format Y-m-d', end: 'date format Y-m-d', rooms: [['person_age (int)', 'person_age (int)'],['person_age (int)']]}",
									"Example"=>"{hotel_id: 345, start: '12-05-2015', end: '17-05-2015', rooms: [['person_age','person_age'],['person_age','person_age']] }",
									"Description"=>"This is extended getter of exact hotel availability. Return details of exact hotel in exact start and end dates",
									 "Output" => '{"response":[{"info":{"id":9,"hotel_id":372,"room_rate_request_id":2,"total":"1316.22","currency":"EUR","category":"Lodging only"},"rates":[{"id":17,"room_rate_id":9,"total":"658.11","description":"Twin (2 beds)","extensions":"(...)E"},{"id":18,"room_rate_id":9,"total":"658.11","description":"Twin (2 beds)","extensions":"(...)"}]}]}'),
							),
	"Hotel Booking" => array()
); ?>
	

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>JUNIPER INDEX</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  </head>
  <body>
  <div class="container-fluid">
  	<div class="row">
  	<div class="col-xs-1"></div>
  	<div class="col-xs-10">
    	<h2>Juniper Service API</h2>
    	<h4><small>Post parameters send as JSON objects</small></h4>
  <?php 
  foreach ($API_DESCRIPTION as $title => $routes) {
  	echo'<br> <h3>'.$title.'</h3>
  	<table class="table table-striped table-bordered">
  	<thead>
  	<th>Method</th>
  	<th>URL</th>
  	<th>Data schema</th>
  	<th>Data example</th>
  	<th>Description</th>
	<th>Sample output</th>
  	</thead>
  	<tbody>';
  	foreach ($routes as $route) {
  		
  		$stringJson = function($json) {
  			return '<pre><samp class="text-left"><script type="text/javascript">
  			var jsonString = '.$json.';
  			var jsonPretty = JSON.stringify(jsonString ,null,2);
  			document.write(jsonPretty);
  			</script></samp></pre>';
  		};
  		
  		
  		echo '<tr>';

  		echo '<td width=5%>'.$route["Method"].'</td>';
  		echo '<td width=10%">'.$route["URL"].'</td>';
  		
  		echo '<td width=20%>'.$stringJson($route["Schema"]).'</td>';
  		echo '<td width=20%>'.$stringJson($route["Example"]).'</td>';
  		
  		echo '<td width=25%>'.$route["Description"].'</td>';
  		
  		echo '<td width=20%>'.$stringJson($route["Output"]).'</td>';
  		
  		
//   		foreach($route as $key => $value) {
//   			if($key == "Schema" || $key == "Example") {
//   				echo '
// 					<td>
					
// 					<pre><samp class="text-left"><script type="text/javascript">
// 						var jsonString = '.$value.';
// 						var jsonPretty = JSON.stringify(jsonString ,null,2);
//   						document.write(jsonPretty);  
// 					</script></samp></pre>
// 					</td>';
//   			} else {
//   				echo '<td>'.$value.'</td>';
//   			}
  			
//   		}
  		echo '</tr>';
  	}
  	echo '</tbody></table>';
  }
  ?>  
  
  </div>
  <div class="col-xs-1"></div>	
	 </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>

    	
    		