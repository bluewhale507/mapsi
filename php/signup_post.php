<?php
    require_once("./query.php");

    $member_no = isset($_POST['member_no']) ? $_POST['member_no'] : null;
    $member_id = isset($_POST['member_id']) ? $_POST['member_id'] : null;
    $member_password = isset($_POST['member_password']) ? $_POST['member_password'] : null;
    $member_name = isset($_POST['member_name']) ? $_POST(['member_name']) : null;
    $member_phone = isset($_POST['member_phone']) ? $_POST(['member_phone']) : null;
    $member_nickname = isset($_POST['member_nickname']) ? $_POST(['member_nickname']) : null;
    $member_email = isset($_POST['member_email']) ? $_POST(['member_email']) : null;
    $member_zipcode = isset($_POST['member_zipcode']) ? $_POST(['member_zipcode']) : null;
    $member_address = isset($_POST['member_address']) ? $_POST(['member_address']) : null;
    $member_detailedaddress = isset($_POST['member_detailedaddress']) ? $_POST(['member_detailedaddress']) : null;
    $member_tier = isset($_POST['member_tier']) ? $_POST(['member_tier']) : null;
    $member_joined = isset($_POST['member_joined']) ? $_POST(['member_joined']) : null;
    $member_updated = isset($_POST['member_updated']) ? $_POST(['member_updated']) : null;

    if ($member_id == null || $member_password == null || $member_name == null || 
        $member_phone == null || $member_nickname == null || $member_email == null || 
        $member_zipcode == null ||$member_address == null || $member_detailedaddress == null) 
        {
            echo "
                    <script>
                        alert('입력하지 않은 정보가 있습니다.');
                        history.go(-1);
                    </script>
                ";
        }

        $member_check = db_select("SELECT COUNT(member_no) cnt FROM member WHERE member_id = ?", array($member_id));
        if ($member_check && $member_check[0]['cnt'] == 1){
            echo "
                    <script>
                        alert('중복된 아이디 입니다.');
                    </script>
                ";
        }else{
            echo "
                    <script>
                        alert('사용가능합니다.');
                    </script>
                ";
        }
?>