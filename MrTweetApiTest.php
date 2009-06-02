<?

include_once ('MrTweetApi.php');

$apiKey = 'Please email api@mrtweet.com to request access to the API during this alpha period';
$api = new MrTweetApi ($apiKey);

var_dump($api->isUser('arikfr'));
echo "\n";
/*
Response:
object(stdClass)#2 (2) {
  ["status"]=>
  string(7) "success"
  ["is_user"]=>
  bool(true)
}
*/

var_dump($api->getProfile('arikfr'));
echo "\n";
/*
Response:
object(stdClass)#2 (2) {
  ["status"]=>
  string(7) "success"
  ["profile"]=>
  object(stdClass)#3 (4) {
    ["recommendations"]=>
    int(0)
    ["conversation"]=>
    float(0.785)
    ["links"]=>
    float(0.13)
    ["frequency"]=>
    float(10.8727)
  }
}
*/

var_dump($api->getRecommendations('topify'));
echo "\n";
/*
object(stdClass)#2 (2) {
  ["status"]=>
  string(7) "success"
  ["recommendations"]=>
  array(4) {
    [0]=>
    object(stdClass)#3 (3) {
      ["date"]=>
      string(25) "2009-05-31T00:48:36-07:00"
      ["text"]=>
      string(59) "A great tool to enhance your "follow strategy" productivity"
      ["name"]=>
      string(14) "carmelventures"
    }
    [1]=>
    object(stdClass)#4 (3) {
      ["date"]=>
      string(25) "2009-05-28T18:35:17-07:00"
      ["text"]=>
      string(114) "@topify to get an invite for their service: 1 click to block or follow new followers from your notification emails"
      ["name"]=>
      string(11) "djackmanson"
    }
  }
}
*/

var_dump($api->getSuggestions('topify'));
echo "\n";

/*
Response: the suggestions method isn't available yet, therefore no example.
*/