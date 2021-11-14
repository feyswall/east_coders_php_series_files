<?php

$wanafunzi = [

[
	'jina' => 'danniel',
	'umri' => 18,
	'nyumbani' => 'dodoma',
	'wazazi' => 'wapo'
],

[
	'jina' => 'john',
	'umri' => 17,
	'nyumbani' => 'dar',
	'wazazi' => 'hawapo'
],

array(
	'jina' => 'zainab',
	'umri' => 30,
	'nyumbani' => 'arusha',
	'wazazi' => 'wapo'
),

];

// $numbers = array(2, 6, 7, 9, 7);

// $no = 8;
// if ( in_array( $no, $numbers )) {
// 	$numbers[array_keys($numbers, $no, true)[0]] += 1;
// 	print_r( $numbers );
// }else{
// 	 echo 'element do not exist in array';
// }

//  for ($g=0; $g < count($wanafunzi); $g++) { 
// 	  print_r( $wanafunzi[$g]['jina']);
// 	  echo "<br>";
//  }

?>

<div>
	<a href="#" <?php foreach ($wanafunzi as $mwanafunzi): ?>
		<?php echo $mwanafunzi['jina']; ?>
	<?php endforeach ?>>moja </a>
</div>