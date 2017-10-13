<?php	
/**
   Copyright 2013 AlchemyAPI

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/
	
	require_once 'alchemyapi.php';
	$alchemyapi = new AlchemyAPI();
	

	$demo_text = 'Yesterday dumb Bob destroyed my fancy iPhone in beautiful Denver, Colorado. I guess I will have to head over to the Apple Store and buy a new one.';
	$demo_url = 'http://www.npr.org/2013/11/26/247336038/dont-stuff-the-turkey-and-other-tips-from-americas-test-kitchen';
	$demo_html = 'Copy of the song ?????????????????';

	$pos = 0;
	$neg = 0;
	$net = 0;
	$count =0;	

	$file = fopen("TripAdvisorReview.csv","r");

	while(! feof($file)&&$count<1800)
  	{
		$temp = fgetcsv($file);
		$demo_html = $temp[3];
		$count++;
		
	$response = $alchemyapi->sentiment('html',$demo_html, null);
	
	if ($response['status'] == 'OK') {
	//	echo '## Response Object ##', PHP_EOL;
	//	echo print_r($response);

	//	echo PHP_EOL;
	//	echo '## Document Sentiment ##', PHP_EOL;
	//	echo 'sentiment: ', $response['docSentiment']['type'], PHP_EOL;
		if (array_key_exists('score', $response['docSentiment'])) {
	//		echo 'score: ', $response['docSentiment']['score'], PHP_EOL;
		}
	} else {
	//	echo 'Error in the sentiment analysis call: ', $response['statusInfo'];
	}
	
	
	switch($response['docSentiment']['type']){
		case "positive":
			$pos++;
			break;
		case "negative":
			$neg++;
			break;
		default:
			$net++;
			break;
	}
		

	switch($response['docSentiment']['type']){
		case "positive":
			$pos++;
			if (($csvFile = fopen("TripAdvisorReview.csv", "r")) !== false && ($resultCsv = fopen('TripAdvisorReview.csv', 'w')) !== false) {
    				while (($data = fgetcsv($csvFile)) !== false) {
        				$data[] = "Positive";
        				fputcsv($resultCsv, $data);
    				}
    				fclose($csvFile);
    				fclose($resultCsv);
			}
			break;
		case "negative":
			$neg++;
			if (($csvFile = fopen("TripAdvisorReview.csv", "r")) !== false && ($resultCsv = fopen('TripAdvisorReview.csv', 'w')) !== false) {
    				while (($data = fgetcsv($csvFile)) !== false) {
        				$data[] = "Negative";
        				fputcsv($resultCsv, $data);
    				}
    				fclose($csvFile);
    				fclose($resultCsv);
			}
			break;
		default:
			$net++;
			if (($csvFile = fopen("TripAdvisorReview.csv", "r")) !== false && ($resultCsv = fopen('TripAdvisorReview.csv', 'w')) !== false) {
    				while (($data = fgetcsv($csvFile)) !== false) {
        				$data[] = "Neutral";
        				fputcsv($resultCsv, $data);
    				}
    				fclose($csvFile);
    				fclose($resultCsv);
			}

			break;
	}
		
	}
	echo 'positive: '.$pos, PHP_EOL;
	echo 'negative: '.$neg, PHP_EOL;
	echo 'netural: '.$net, PHP_EOL;
	fclose($file);
?>
