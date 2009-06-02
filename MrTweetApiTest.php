<?

include_once ('MrTweetApi.php');

$apiKey = 'Please email api@mrtweet.com to request access to the API during this alpha period';
$api = new MrTweetApi ($apiKey);

var_dump($api->isUser('arikfr'));
echo "\n";

var_dump($api->getProfile('arikfr'));
echo "\n";

var_dump($api->getRecommendations('topify'));
echo "\n";

var_dump($api->getSuggestions('topify'));
echo "\n";