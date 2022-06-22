<?php
//hamle yo interface banaunu banaunu vaneko abai calass ma subscribe banayarw matra xoderw handshake garnu vanda yauta formal contract banako
interface Newsletter
{
    public function subscribe($email);
}
interface NewsReport
{
    public function pay();
}
class CampaignMonitor implements Newsletter, NewsReport
{
    public function subscribe($email)
    {
        die('Subscribe with Campaign Monitor');
    }
    public function pay()
    {
        // TODO: Implement pay() method.
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('Subscribe with Drip');
    }
}
class NewsletterSubscriptionController
{
    public function store(Newsletter $newsletter)
    {
        $email = "mail2asmitnepali@gmail.com";
        $newsletter->subscribe($email);
    }
}
$controller = new NewsletterSubscriptionController();
$controller->store(new CampaignMonitor());
