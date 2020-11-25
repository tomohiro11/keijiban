<!DOCTYPE html>

<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <?php
        
        mb_internal_encoding("utf8");
        
        require "db.php";
        
        $dbconnect =new DB();
        $pdo = $dbconnect->connect();
        
        $stmt = $pdo->prepare($dbconnect->select());
        $stmt->execute();
        
        ?>
        
        <header>
            
            <img src="4eachblog_logo.jpg">
            
            <ul id="header_list">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        
        </header>
        
        <main>
        
            <div id="left">
                
                <h1>プログラミングに役立つ掲示板</h1>
                
                <form method="post" action="insert.php">
                    
                    <h3>入力フォーム</h3>
                    
                    <p>
                        ハンドルネーム<br>
                        <input type="text" size="35" name="handlename">
                    </p>
                    
                    <p>
                        タイトル<br>
                        <input type="text" size="35" name="title">
                    </p>
                    
                    <p>
                        コメント<br>
                        <textarea cols="35" rows="7" name="comments"></textarea>
                    </p>
                    
                    <p>
                        <input type="submit" size="10" value="投稿する" id="submit">
                    </p>
                
                </form>
                
                <?php
                
                while($row = $stmt->fetch()) {
                    
                echo "<div class=\"post\">";
                                        
                    echo "<h3>".$row['title']."</h3>";
                    
                    echo $row['comments'];
                    
                    echo "<p>posted by ".$row['handlename']."</p>";
                
                echo "</div>";
                    
                }
                        
                ?>
                
                <div class="post">
                                        
                    <h3>タイトル</h3>
                    
                    <script>
                        
                        for (var i = 0; i < 9; i++) {
                            document.write("記事の中身、")
                        }
                        
                        document.write("記事の中身。<br>")
                        
                        for (var i = 0; i < 2; i++) {
                            for (var j = 0; j < 5; j++) {
                            document.write("記事の中身、")
                            }
                        
                            document.write("記事の中身。<br>")
                        }
                        
                    </script>
                    
                    <p>posted by 通りすがり</p>
                
                </div>
                
                <div class="post">
                    
                    <h3>タイトル</h3>
                    
                    <script>
                        
                        for (var i = 0; i < 9; i++) {
                            document.write("記事の中身、")
                        }
                        
                        document.write("記事の中身。<br>")
                        
                        for (var i = 0; i < 2; i++) {
                            for (var j = 0; j < 5; j++) {
                            document.write("記事の中身、")
                            }
                        
                            document.write("記事の中身。<br>")
                        }
                        
                    </script>
                    
                    <p>posted by 通りすがり</p>
                
                </div>
            
            </div>
            
            <div id="right">
                
                <h3>人気の記事</h3>
                
                <ul class="verticallist">
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタTop5</li>
                    <li>HTMLの基礎</li>
                </ul>
                
                <h3>オススメリンク</h3>
                
                <ul class="verticallist">
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
                
                <h3>カテゴリ</h3>
                
                <ul class="verticallist">
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            
            </div>
        
        </main>
        
         <footer>copyright © internous | 4eachblog is the one which provides A to Z about programming</footer>

            
    </body>

</html>
