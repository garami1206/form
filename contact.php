<?php
// contact.php
if (isset($_POST['Email'])){
    $u_name = $_POST[user_name];
    $u_email = $_POST[user_email];
    $u_tel = $_POST[user_tel];
    $u_quest = $_POST[user_question];

    // Print message
    Print "<br><br><br><br><p><center>성공적으로 문의가 접수되었습니다.<br>문의전화 : 홈페이지 하단</p></center>";

    // 수신 메일 본문
    $email_to = "tmffjtnl524@hanmail.net" //받는메일 //mushhouse365@naver.com
    $email_subject = "$u_name 님께서 상담 문의를 신청하셨습니다." 
    //$title = "$u_name 님께서 상담 문의를 신청하셨습니다.";
    $message = "<b>1</b> 1<b>" . $u_name . "</b>님이 상담신청을 하셨습니다. <br><br>/r/n <b>성함|</b>".$u_name."<br>/r/n <b>이메일|</b>".$u_email."<br>/r/n <b>연락처|</b>".$u_tel."<br>/r/n <b>문의내용|</b>".$u_quest."<br><br>감사합니다.";
    mail($email, $title, $message, $mailheader);
}
?>