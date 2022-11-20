<?php
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