<?php
namespace App\Service;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Exchange\AMQPExchangeType;

class RabbitControll
{
    private $queue = "controllerQueue";
    private $excange = "DirectExcange";

    private $connection;
    private $channel;

    public function __construct()
    {
        $this->connection = new AMQPStreamConnection('rabbit', 5672, 'guest', 'guest');
        $this->channel = $this->connection->channel();

        $this->channel->queue_declare($this->queue,false,true,false,false);
        $this->channel->exchange_declare($this->excange, 'direct', false, true, false);
    }

    public function Send()
    {
        $msg = new AMQPMessage('Hello World!');
        
        $this->channel->basic_publish($msg,$this->excange);
    }

    public function Subscribe($fuction)
    {
        $msg = new AMQPMessage('Hello World!');
        
    }

    public function __destruct() {
        $this->channel->close();
        $this->connection->close();
    }
}