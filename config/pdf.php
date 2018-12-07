<?php
// return [
// 	'format'           => 'Legal', // See https://mpdf.github.io/paging/page-size-orientation.html
// 	'author'           => 'John Doe',
// 	'subject'          => 'This Document will explain the whole universe.',
// 	'keywords'         => 'PDF, Laravel, Package, Peace', // Separate values with comma
// 	'creator'          => 'Laravel Pdf',
// 	'display_mode'     => 'fullpage'
// ];



// return [
// 	// ...
// 	'font_path' => base_path('resources/fonts/'),
// 	'font_data' => [
// 		'examplefont' => [
// 			'R'  => 'ExampleFont-Regular.ttf',    // regular font
// 			'B'  => 'ExampleFont-Bold.ttf',       // optional: bold font
// 			'I'  => 'ExampleFont-Italic.ttf',     // optional: italic font
// 			'BI' => 'ExampleFont-Bold-Italic.ttf' // optional: bold-italic font
// 			//'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
// 			//'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
// 		]
// 		// ...add as many as you want.
// 	]
// 	// ...
// ];


return [
	// ...
	'format'           => 'A4', // See https://mpdf.github.io/paging/page-size-orientation.html
	'font_path' => base_path('resources/fonts/'),
	'font_data' => [
		'Segoe UI' => [
			'R'  => 'segoeui.ttf',    // regular font
			'B'  => 'segoeui.ttf',       // optional: bold font
			'I'  => 'segoeui.ttf',     // optional: italic font
			'BI' => 'segoeui.ttf', // optional: bold-italic font
			//'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
			//'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
		],
		'Myriadd' => [
			'R'  => 'Myriadd.ttf',    // regular font
			'B'  => 'Myriadd.ttf',       // optional: bold font
			'I'  => 'Myriadd.ttf',     // optional: italic font
			'BI' => 'Myriadd.ttf', // optional: bold-italic font
			//'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
			//'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
		],
		'iskpota' => [
			'R'  => 'iskpota.ttf',    // regular font
			'B'  => 'iskpota.ttf',       // optional: bold font
			'I'  => 'iskpota.ttf',     // optional: italic font
			'BI' => 'iskpota.ttf', // optional: bold-italic font
			'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
			'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
		],
		'latha' => [
			'R'  => 'latha.ttf',    // regular font
			'B'  => 'latha.ttf',       // optional: bold font
			'I'  => 'latha.ttf',     // optional: italic font
			'BI' => 'latha.ttf' ,// optional: bold-italic font
			'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
			'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
		],
		// ...add as many as you want.
	]
	// ...
];

// return [
// 	// ...
// 	'font_path' => base_path('resources/fonts/'),
// 	'font_data' => [
// 		'examplefont' => [
// 			'R'  => 'kaputaunicode.ttf',    // regular font
// 			'B'  => 'kaputaunicode.ttf',       // optional: bold font
// 			'I'  => 'kaputaunicode.ttf',     // optional: italic font
// 			'BI' => 'kaputaunicode.ttf' // optional: bold-italic font
// 			//'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
// 			//'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
// 		]
// 		// ...add as many as you want.
// 	]
// 	// ...
// ];