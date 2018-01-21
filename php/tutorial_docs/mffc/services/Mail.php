<?php
/**
 * php Mail.php
 * User: lmx
 * Time: 2018/1/21 下午4:34
 */

use Nette\Mail\Message;

class Mail extends Message {

    public $config;
    protected $from;
    protected $to;
    protected $title;
    protected $body;

    public function __construct($to) {
        $this->config = require BASE_PATH . '/config/mail.php';
        $this->setFrom($this->config['username']);
        if(is_array($to)) {
            foreach ($to as $email) {
                $this->addTo($email);
            }
        }
        $this->addTo($to);
    }

    public function from($from = null) {
        if(!$from) {
            throw new InvalidArgumentException("from is null");
        }
        $this->setFrom($from);
        return $this;
    }

    public static function to($to = null) {
        if(!$to) {
            throw new InvalidArgumentException("to is null");
        }
        return new Mail($to);
    }

    public function title($title = null) {
        if(!$title) {
            throw new InvalidArgumentException("title is null");
        }
        $this->setSubject($title);
        return $this;
    }

    public function content($content = null) {
        if(!$content) {
            throw new InvalidArgumentException("content is null");
        }
        $this->setHtmlBody($content);
        return $this;
    }
}