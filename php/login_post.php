<?php
    require_once("./pdo.php");

    $member_id = isset($_POST['member_id']) ? $_POST['member_id'] : null;
    $member_password = isset($_POST['member_password']) ? $_POST['member_password'] : null;

    //empty parameter 체크
    if ($member_id == null || $member_password == null) {
        echo "
            <script>
                alert('아이디/비밀번호를 입력해주세요.');
                history.go(-1)
            </script>
            ";
        exit();
    }

    //회원 데이터 조회(추후 orm 적용)
    $member_data = db_select("SELECT * FROM member WHERE member_id = ?",array($member_id));
    //회원 데이터 없는경우
    if($member_data == null || count($member_data) == 0) {
        echo "<script>alert('sdasdf');</script>";
        // header("Location: /index.html");
        exit();
    }

    //비밀번호 일치여부(해시 적용하기)
    // $is_match_password = password_verify($member_password, $member_data[0]['member_password']);
    $is_match_password = 0;
    //비밀번호 불일치
    if ($is_match_password === false) {
        echo "<script>alert('비밀번호 불일치!');</script>";
        header("Location: /index.html");
        exit();
    }

    session_start();
    $_SESSION['member_no'] = $member_data[0]['member_no'];

    header("Location: /index.html");

?>