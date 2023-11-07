<!-- 회원가입 버튼 클릭시-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member_form</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/member.css">
    <script>
        var popup; 

        function check_id(){
            window.open('member_check_id.php?id=' + document.member_form.id.value, 'idCheck', 
            'left=700, top=300, width=350, height=200, scrollbars=no, resizable=yes'); //windowopen이란 중복확인 버튼 입력시 새 창이 뜨는 것 (새로뜨는창=자식창)
            //자식창은 부모창에게 전송 (예 자식창: 아이디는 사용가능합니다, 창당기->부모창)
            // 지금은 부모창, 자식 : member_chekck_id.php
        }
        // !!
        window.call = function(data){
            console.log('자식창에서 호출', data);
            var msg = '자식창에서 입력한 값 : \n' + data;
            document.getElementById('inputPre').value = data;
        }
    </script>
</head>

<body>
    <!-- 회원가입 -->
    <header><?php include "header.php"?></header>
    <div id="main_img_bar">
        <img src="./img/main_img.png">
    </div>
    <form name="member_form" method="post" action="member_insert.php">
        <h2>회원가입</h2>
        <div class="form id">
            <div class="col1">아이디</div>
            <div class="col2"><input type="text" name="id"/></div>
            <div class="col3"><a href="#"><img src="./img/check_id.gif" onlclick="check_id()"></a></div> <!--?? -->
        </div>
        <!-- 부모에게 받은 값 넣기 -->
        <input id="inputPre" type="hidden" value="" />
        <div class="clear"></div>
    </form>
</body>

</html>