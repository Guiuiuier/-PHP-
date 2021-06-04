<?php
/**
 * Created by PhpStorm.
 * User: ljl
 * Date: 2018/6/5
 * Time: 16:28
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);                              // 通过`true`启用例外
try {
    //服务器设置
    $mail->SMTPDebug = 2;                                 // 启用详细的调试输出
    $mail->isSMTP();                                      // 设置邮件使用SMTP
    $mail->Host = 'smtp.qq.com';                         // 指定主要和备份SMTP服务器
    $mail->SMTPAuth = true;                               // 启用SMTP验证
    $mail->Username = '1500081564@qq.com';                 // SMTP用户名
    $mail->Password = 'ywjlwoqiiyadjeah';                           // SMTP密码
    $mail->SMTPSecure = 'tls';                            // 启用TLS加密，`ssl`也接受
    $mail->Port = 587;                                    // TCP端口连接

    //收件人
    $mail->setFrom('1500081564@qq.com', '这是一封注册网站的测试邮件');// 设置发送人信息(参数1：发送人邮箱，参数2：发送人名称)
    $mail->addAddress('2429340692@qq.com', '刘宇静');     // 添加收件人
 /*   $mail->addAddress('124565356@qq.com');      */         // 名称是可选的

    //附件
    //$mail->addAttachment('a1.zip');         // 添加附件

    //Content
    $mail->isHTML(true);                                  // 将电子邮件格式设置为HTML
    $mail->Subject = '这是一封测试邮件';                       // 邮件主题，即标题
    $mail->Body    = '刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰刘宇静鲤鱼精梁永杰';    //邮件内容
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';     // 邮件附件信息，可以省略

    $mail->send();
    echo '信息已经发送';
} catch (Exception $e) {
    echo '信息发送失败: ', $mail->ErrorInfo;
}
