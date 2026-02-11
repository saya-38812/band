<?php
$page_title = "開催スケジュール";
include 'header.php';

// データベース接続の例（実際の環境に合わせて調整してください）
// $conn = new mysqli("localhost", "username", "password", "database");

// サンプルデータ
$schedules = [
    [
        'id' => 1,
        'title' => 'Spring Session 2026',
        'date' => '2026-03-15',
        'day' => '15',
        'month' => 'MAR',
        'time' => '19:00 - 22:00',
        'venue' => '都内音楽スタジオA',
        'price' => '¥3,000',
        'capacity' => 30,
        'registered' => 18,
        'status' => 'available'
    ],
    [
        'id' => 2,
        'title' => 'Rock Night Session',
        'date' => '2026-03-22',
        'day' => '22',
        'month' => 'MAR',
        'time' => '18:00 - 21:00',
        'venue' => '渋谷音楽スタジオB',
        'price' => '¥3,500',
        'capacity' => 25,
        'registered' => 25,
        'status' => 'full'
    ],
    [
        'id' => 3,
        'title' => 'Jazz Fusion Session',
        'date' => '2026-04-05',
        'day' => '05',
        'month' => 'APR',
        'time' => '19:30 - 22:30',
        'venue' => '新宿ジャズスタジオ',
        'price' => '¥4,000',
        'capacity' => 20,
        'registered' => 12,
        'status' => 'available'
    ],
    [
        'id' => 4,
        'title' => '初心者歓迎セッション',
        'date' => '2026-04-12',
        'day' => '12',
        'month' => 'APR',
        'time' => '14:00 - 17:00',
        'venue' => '池袋スタジオC',
        'price' => '¥2,500',
        'capacity' => 35,
        'registered' => 20,
        'status' => 'available'
    ]
];
?>

<section class="page-hero">
    <div class="container">
        <h1 class="page-title">開催スケジュール</h1>
        <p class="page-description">あなたにぴったりのセッション会を見つけよう</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="schedule-grid">
            <?php foreach ($schedules as $schedule): ?>
                <div class="schedule-card">
                    <div class="schedule-date">
                        <span class="day"><?php echo $schedule['day']; ?></span>
                        <span class="month"><?php echo $schedule['month']; ?></span>
                    </div>
                    
                    <div class="schedule-info">
                        <h3><?php echo htmlspecialchars($schedule['title']); ?></h3>
                        <div class="schedule-details">
                            <div class="detail-item">
                                <span class="detail-label">時間:</span>
                                <span><?php echo htmlspecialchars($schedule['time']); ?></span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">会場:</span>
                                <span><?php echo htmlspecialchars($schedule['venue']); ?></span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">参加費:</span>
                                <span><?php echo htmlspecialchars($schedule['price']); ?></span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">定員:</span>
                                <span><?php echo $schedule['registered']; ?> / <?php echo $schedule['capacity']; ?>名</span>
                            </div>
                        </div>
                        <a href="schedule-detail.php?id=<?php echo $schedule['id']; ?>" class="btn btn-outline" style="display: inline-block; margin-top: 10px;">詳細を見る</a>
                    </div>
                    
                    <div class="schedule-action">
                        <?php if ($schedule['status'] === 'available'): ?>
                            <span class="status-badge status-available">受付中</span>
                        <?php elseif ($schedule['status'] === 'full'): ?>
                            <span class="status-badge status-full">満員</span>
                        <?php else: ?>
                            <span class="status-badge status-closed">受付終了</span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="cta-box" style="margin-top: 4rem;">
            <h3>初めての参加ですか？</h3>
            <p>初参加ガイドで流れや持ち物を確認できます</p>
            <a href="guide.php" class="btn btn-primary">初参加ガイドを見る</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
