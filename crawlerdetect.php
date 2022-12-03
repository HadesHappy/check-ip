<?php
require 'CrawlerDetect/Fixtures/AbstractProvider.php';
require 'CrawlerDetect/Fixtures/AbstractReff.php';
require 'CrawlerDetect/Fixtures/Crawlers.php';
require 'CrawlerDetect/Fixtures/Exclusions.php';
require 'CrawlerDetect/Fixtures/Headers.php';
require 'CrawlerDetect/Fixtures/Headerspam.php';
require 'CrawlerDetect/Fixtures/SpamReferrers.php';
require 'CrawlerDetect/CrawlerDetect.php';
require 'CrawlerDetect/ReferralSpamDetect.php';
use Jaybizzle\CrawlerDetect\CrawlerDetect;
use Jaybizzle\ReferralSpamDetect\ReferralSpamDetect;

$CrawlerDetect = new CrawlerDetect;
$referrer = new ReferralSpamDetect;
if($CrawlerDetect->isCrawler()) {
    $click = fopen("result/total_bot.txt","a");
    fwrite($click,"$ip|Bot Crawler"."\n");
    fclose($click);
    header('HTTP/1.0 403 Forbidden');
            die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
}
if($referrer->isReferralSpam()) {
	$click = fopen("result/total_bot.txt","a");
    fwrite($click,"$ip|Referrer Block"."\n");
    fclose($click);
    header('HTTP/1.0 403 Forbidden');
            die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
}