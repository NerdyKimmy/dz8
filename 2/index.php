<?php

class Email
{
    public string $theme;
    public string $from;
    public string $to;
}

interface Logger
{
    public function log(string $message): void;
}

class ConsoleLogger implements Logger
{
    public function log(string $message): void
    {
        echo $message . PHP_EOL;
    }
}

class EmailSender
{
    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function send(Email $email): void
    {
        $this->logger->log("Email from '{$email->from}' to '{$email->to}' was sent.");
    }
}

$email1 = new Email();
$email1->from = "Me";
$email1->to = "Vasya";
$email1->theme = "Who are you?";

$email2 = new Email();
$email2->from = "Vasya";
$email2->to = "Me";
$email2->theme = "Vacuum cleaners!";

$logger = new ConsoleLogger();
$emailSender = new EmailSender($logger);

$emailSender->send($email1);
$emailSender->send($email2);

?>
