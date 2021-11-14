<!DOCTYPE html>
<html>
<head>
	<title>loop | page</title>
</head>
<body>
<?php 

	$walimu = array(
		[
			'jina' => 'juma',
			'anaishu' => 'ukonga',
			'soma' => 'majani',
			'miaka' => 30,
		],
		[
			'jina' => 'anna',
			'anaishu' => 'arusha',
			'soma' => 'shuleA',
			'miaka' => 20,
		],

		[
			'jina' => 'peter',
			'anaishu' => 'temeke',
			'soma' => 'teneke',
			'miaka' => 50,
		],

		[
			'jina' => 'hussein',
			'anaishu' => 'goms',
			'soma' => 'goms',
			'miaka' => 38,
		],
		[
			'jina' => 'lili',
			'anaishu' => 'songa',
			'soma' => 'songa',
			'miaka' => 16,
		]
	);

		$number = count( $walimu );

		for( $g=0; $g < count($walimu); $g++ ){
		echo ( $walimu[$g]['miaka'] ). "<br>";
		}


 ?>
</body>
</html>