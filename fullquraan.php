<?php
    for($i=2;$i<115;$i++){
        $surahFile[$i]=fopen("fullquraan/".$i.".php",'w');
        $content='
        <?php
 

        ?>
        <html dir="rtl">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
            <title>تذكير </title>
        
            <link rel="stylesheet" href="../css/mainstyle.css">
            <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css2?family=Gulzar&display=swap" rel="stylesheet">
        <style>
        
        </style>
        
        
        </head>
        <body>
        <div class="heart">	
        <!--*********************** -->
        
        <!-- Header -->
        
        <div class="header">
            <div class="menu">
                <h1><a href="../" style="color:#f5d32d;">تذكير</a> </h1>
                <ul class="desktopmenu">
                    <li><a href="../quraanmainpage.php">قرأن كريم</a></li>
                    <li><a href="#">تفسير</a></li>
                    <li><a href="#">حديث</a></li>
                    <li><a href="../login.php">تسجيل دخول</a></li>
                    <li><a href="../register.php">عضو جديد</a></li>
                </ul>
                <div class="mobilemenu">
                    <i class="menu-icon fa fa-bars" onclick="modaelgen()"></i>
                    <ul>
                        <li menuelement><a href="../quraanmainpage.php">قرأن كريم</a></li>
                        <li menuelement><a href="#">تفسير</a></li>
                        <li menuelement><a href="#">حديث</a></li>
                        <li menuelement><a href="../login.php">تسجيل دخول</a></li>
                        <li menuelement><a href="../register.php">عضو جديد</a></li>
                    </ul>
                </div>
            </div>
        
            <img src="../img/mainimg.jpg">
            <div></div>
            <p>بِسْمِ اللَّـهِ الرَّحْمَـٰنِ الرَّحِيمِ</p>
            <h2>إِنَّا عَرَضْنَا الأَمَانَةَ عَلَى السَّمَوَاتِ وَالأَرْضِ وَالْجِبَالِ</h2>
        
        </div>
        
        <!-- Main-body -->
        
        <div class="fullsurah">
        
            <div class="settings">
                <audio class="listen-full-surah" controls></audio>
                <div class="listen-specific-ayah">
        
                </div>
        
                <div class="read-specific-ayah">
        
                </div>
                
             </div>
        
        </div>
        
        <!-- footer -->
        
        <div class="footer">
            <ul>
            <li><a href="#">اتصل بنا</a></li>
            <li><a href="#">ساهم معنا</a></li>
            <li><a href="#">سياسة الخصوصية</a></li>    
            </ul>
            <p>تمت البرمجة بواسطة <a href="https://www.facebook.com/Mohammed.Alashry99">محمد العشري</a></p>
        </div>
        
        <!--*********************** -->
        
        
        <!-- Scripts -->
        
        <script src="../JS/quraanpagesurah.js">
        </script>
        <script src="../JS/main.js">
        </script>
        
        </body>
        </html>
        ';
        fwrite($surahFile[$i],$content);

    }
?>