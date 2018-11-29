<!DOCTYPE HTML>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>Bangla Typing Speed Test(Bijoy Unicode)</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style> #text,#input { font-family: 'NikoshBAN'; } </style>
</head>
<body>
<?php include 'inc.php'; ?>
<div class="ll"> 
    <p id="text">
        আমি জানি তোমার নাম। তুমি কি বলতে পারো আমি কে? কি ভাবছো, আমি কি করে জানলাম তুমি কে?
    </p>
    <p id="info"></p>
    <p>
        <div class="time">
            <span id="timer">Timer: 3 min</span>
            <span id="timeLeft"></span>
        </div>
    </p>
    <textarea rows="20" cols="200" type="text" id="input" placeholder="Type the above text over here"></textarea>
    
    <div class="setting">
        <div class="settingImg">
            <img src="assets/img/unicode.jpg" alt="unicode setting" />
        </div>
        <div>
            <ul class="settingInfo">
                <h2>Setting</h2>
                <li>Please be Sure you install <em>Bijoy Ekattor</em> not others version of Bijoy Bangla</li>
                <li>For Unicode testing it will work in other version also. But we recommand <em>Bijoy Ekattor</em></li>
            </ul>
        </div>
    </div>
       
</div>






<script src="assets/js/typing-bd.js"></script>
</body>
</html>