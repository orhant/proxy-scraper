<?php declare(strict_types=1);

namespace Vantoozz\ProxyScraper\IntegrationTests\Scrapers;

use Vantoozz\ProxyScraper\IntegrationTests\IntegrationTest;
use Vantoozz\ProxyScraper\Scrapers\BlogspotProxyScraper;

/**
 * Class TopProxysScraper
 * @package Vantoozz\ProxyScraper\Scrapers
 */
final class BlogSpotProxyScraperTest extends IntegrationTest
{

    /**
     * @test
     */
    public function it_works(): void
    {
        $scrapper = new BlogSpotProxyScraper($this->httpClient());

        $proxies = iterator_to_array($scrapper->get());
        static::assertGreaterThanOrEqual(100, count($proxies));
    }
}
