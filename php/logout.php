<?php
    session_start();

    session_unset();
    session_destroy();

    echo "
        <script>
            alert('로그아웃 되었습니다.');
            // history initialization
            window.location.replace('../index.html');
        </script>
        ";
        exit();
?>