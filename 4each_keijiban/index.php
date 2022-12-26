<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='UTF-8'>
    <title>4eachblog 掲示板</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <p id='logo'><img src='4eachblog_logo.jpg'></p>
    <header>
        <nav>
            <ul>
                <li><a href="">トップ</a><li>
                <li><a href="">プロフィール</a><li>
                <li><a href="">4eachについて</a><li>
                <li><a href="">登録フォーム</a><li>
                <li><a href="">問い合わせ</a><li>
                <li><a href="">その他</a><li>
            <ul>
        </nav>
    </header>
    <main>
        <h1>プログラミングに役立つ掲示板</h1>
        <div>
            <h2>入力フォーム</h2>
            <form method="post" action="insert.php">
                <dl>
                    <dt><label for="handlename">ハンドルネーム</label></dt>
                    <dd><input type="text" name="handlename" id="handlename"></dd>
                    <dt><label for="title">タイトル</label></dt>
                    <dd><input type="text" name="title" id="title"></dd>
                    <dt><label for="comments">コメント</label></dt>
                    <dd><textarea name="comments" id="comments"></textarea></dd>
                </dl> 
                <input type="submit" value="投稿" class="submit">  
            </form>
        </div>
        <?php
            mb_internal_encoding('utf8');
            $pdo = new PDO('mysql:dbname=lesson01;host=localhost;','root','mysql');
            $stmt = $pdo->query("select * from 4each_keijiban");
        
            while($row = $stmt->fetch()) {
                echo "<div>";
                    echo "<h3>".$row['title']."</h3>";          
                    echo "<div class='content'>";
                        echo $row['comments']."</p>";
                        echo '<p class="handlename">posted by '.$row['handlename'].'</p>';
                    echo "</div>";            
                echo "</div>";
            }
        ?>
    </main>
    <aside>
        <dl>
            <dt>人気の記事</dt>
            <dd><a href="">PHPオススメ本</a></dd>
            <dd><a href="">PHP、MyAdminの使い方</a></dd>
            <dd><a href="">いま人気のエディタTop5</a></dd>
            <dd><a href="">HTMLの基礎</a></dd>
            <br><br>
            <dt>オススメリンク</dt>
            <dd><a href="">インターノウス株式会社</a></dd>
            <dd><a href="">XAMPPのダウンロード</a></dd>
            <dd><a href="">Eclipseのダウンロード</a></dd>
            <dd><a href="">Bracketsのダウンロード</a></dd>
            <br><br>
            <dt>カテゴリ</dt>
            <dd><a href="">HTML</a></dd>
            <dd><a href="">PHP</a></dd>
            <dd><a href="">MyAQL</a></dd>
            <dd><a href="">JavaScript</a></dd>
        </dl>
    </aside>
    <footer>
        <p>copyright © internous | 4each brog the witch provides A to Z about programming.</P>
    </footer>
</body>
</html>