<?php
/**
 * php mail.php
 * User: lmx
 * Time: 2018/1/21 下午4:42
 */


$mail = Mail::to(array(
    'ooxx@gmail.com',
    'ooxx@qq.com',
    ))
    ->from('ooxx@163.com')
    ->title('title')
    ->content('content');

$mailer = new Nette\Mail\SmtpMailer($mail->config);
$mailer->send($mail);