<?php 

	require_once __DIR__ . "/GlitchTip/vendor/autoload.php";
	Sentry\init(['dsn' => 'https://eebff057a6a141a1934a8d91fa625a54@app.glitchtip.com/3626',
				'environment' => 'LOCAL',
				'error_types' => 1 ]);
	main();
	function main() {
		$timestamp = '2023-07-18T06:50:17.341588Z';
		$date = date('Y-m-d H:i:s');

		//Sentry\captureMessage('Manually Capturing the Error-'.$date);
		
		$formattedDateTime = convertDateTime($timestamp);
		echo "Timestamp=[$timestamp] FormattedTimestamp=[$formattedDateTime]\n";
		return;
	}

	function convertDateTime($timestamp, $format = 'F j, Y \a\t h:i:s A' ) {
		// Create DateTime object with the given timestamp
		$date = new DateTime($timestamp);

		// Set the desired timezone (Indian Standard Time - Asia/Kolkata)
		$timezone = new DateTimeZone('Asia/Kolkata');
		$date->setTimezone($timezone);

		// Format the date and time
		$formattedDateTime = $date->format($format);

		// Output the formatted date and time
		return $formattedDateTime;
	}

?>