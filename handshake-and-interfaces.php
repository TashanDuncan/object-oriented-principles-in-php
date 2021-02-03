<?php 

interface Newsletter 
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die('subbing to campaign monitor');
    }

}

class drip implements Newsletter
{
    public function subscribe($email)
    {
        die('subbing to drip');
    }

}


class NewsletterSubController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'tashan@lol.com';

        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubController();

$controller->store(new CampaignMonitor());

?>