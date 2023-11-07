<?php 
    session_start();
    if(isset($_SESSION['userid'])){
        $userid = $_SESSION['userid'];
    } else{
        $userid = "";
    }


    if(isset($_SESSION['userlevel'])){
        $userlevel = $_SESSION['userlevel'];
    } else{
        $userlevel = "";
    }

    if(isset($_SESSION['userpoint'])){
        $userpoint = $_SESSION['userpoint'];
    } else{
        $userpoint = "";
    }
    // if (isset($_SESSION["userid"]){
    //     $userlevel = $_SESSION["userlevel"]
    // else {__autoload _register(); 
    // div으로부터 시작ㄱ?  (중간)
    // 익명함수(화살표하수 => this으로 접근), 일반함수
?>
<div id="top">
    <h3><a href="index.php">php programming></a></h3>
    <ul id="top_menu">
        <?php
            if(!$userid){
            ?>
                <li><a href="member_form.php">회원가입</a></li>
                <li> | </li>
                <li><a href="login_form.php">로그인</a></li>
            <?php  
            }else{
                $logged = "(".$userid.")님[level: ".$userlevel.", point: ".$userpoint."]";
            ?>
                <li><?=$logged?></li>
                <li> | </li>
                <li><a href="logout.php">로그아웃</a></li>
        <?php
            }   
        ?>
        ?>
        
    </ul>
</div>

<!-- 접근권한 board-->
<input type="hidden" name="name" id="userid" value="<?=$userid?>" />
<div id="menu_bar">
    <ul>
        <li><a href="index.php">home</a></li>
        <li><a href="#" id="board" onclick="checkAuth('userid', 'login_form.php', 'board_form.php')">게시판 만들기</a></li>
        <li><a href="index.php">사이트 완성하기</a></li>
    </ul>
</div>
<script type="text/javascript">
const checkAuth = (target, back, moves) => {
    document.guerySelector(`#${target}`);
    console.log('board 연결, 아이디세션', id.value);
    if(!id.value){
        alert('게시판 글쓰기는 로그인 후 이용해주세요');
        window.location.href = `${back}`;
        return;
    }
    location.href = `${move}`;
}
</script>