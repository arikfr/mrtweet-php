<?

class MrTweetApi 
{
	protected $apiKey;
	protected $host;
	
	public function __construct ($apiKey)
	{
		$this->apiKey = $apiKey;
		$this->host = 'http://api.mrtweet.com/v1/docs';
	}
	
	protected function getUrl ($method, $username)
	{
		return "http://api.mrtweet.com/v1/{$method}/{$username}/{$this->apiKey}.json";
	}
	
	protected function httpGet ($url)
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);		
		$info = curl_getinfo($ch);
		
		if(!curl_errno($ch) && ($info['http_code'] == 200))
		{
			$output = $this->makeObject($output);
		}
		else
		{
			$output = false;
		}
		
		curl_close($ch);
		
		return $output;
	}
	
	protected function makeObject ($json)
	{
		$object = json_decode ($json, false);
		return $object;
	}
	
	protected function doMethod ($method, $username)
	{
		$url = $this->getUrl ($method, $username);
		return $this->httpGet ($url);		
	}
	
	public function isUser ($username)
	{
		return $this->doMethod ('is_user', $username);
	}
	
	public function getProfile ($username)
	{
		return $this->doMethod ('profile', $username);
	}
	
	public function getRecommendations ($username)
	{
		return $this->doMethod ('recommendations', $username);
	}
	
	public function getSuggestions ($username)
	{
		return $this->doMethod ('suggestions', $username);
	}
}