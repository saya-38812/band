<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>バンドセッション会 SESSION JAM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="pages.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Righteous&family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="noise-overlay"></div>
    
    <!-- ヘッダー -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="index.html">
                    <h1>SESSION<span class="accent">JAM</span></h1>
                </a>
            </div>
            <nav class="nav">
                <a href="index.html" class="nav-link">TOP</a>
                <a href="guide.php" class="nav-link">初参加ガイド</a>
                <a href="about.php" class="nav-link">セッション会とは</a>
                <a href="schedule.php" class="nav-link">開催スケジュール</a>
                <a href="join.php" class="nav-link">参加方法</a>
                <a href="faq.php" class="nav-link">FAQ</a>
                <a href="report.php" class="nav-link">レポート</a>
                <a href="news.php" class="nav-link">お知らせ</a>
            </nav>
            <button class="menu-toggle" aria-label="メニュー">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
