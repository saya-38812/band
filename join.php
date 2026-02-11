<?php
$page_title = "参加方法・料金";
include 'header.php';
?>

<section class="page-hero">
    <div class="container">
        <h1 class="page-title">参加方法・料金</h1>
        <p class="page-description">セッション会への参加方法と料金体系のご案内</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="guide-content">
            <div class="guide-section">
                <h2>参加の流れ</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="time">STEP 1</div>
                        <div class="timeline-content">
                            <h3>スケジュールを確認</h3>
                            <p>開催スケジュールページから参加したいセッション会を選びます</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="time">STEP 2</div>
                        <div class="timeline-content">
                            <h3>申込フォームを送信</h3>
                            <p>各回の詳細ページから申込フォームに必要事項を記入して送信</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="time">STEP 3</div>
                        <div class="timeline-content">
                            <h3>確認メールを受信</h3>
                            <p>24時間以内に参加確認メールが届きます（自動返信）</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="time">STEP 4</div>
                        <div class="timeline-content">
                            <h3>参加費のお支払い</h3>
                            <p>指定の方法で参加費をお支払いください（当日払いも可能）</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="time">STEP 5</div>
                        <div class="timeline-content">
                            <h3>当日会場へ</h3>
                            <p>楽器を持って開始時間の15分前までに会場へお越しください</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="guide-section">
                <h2>料金体系</h2>
                <div class="pricing-grid">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>通常セッション</h3>
                            <div class="price">¥3,000</div>
                        </div>
                        <ul class="pricing-features">
                            <li>3時間のセッション</li>
                            <li>スタジオ代込み</li>
                            <li>基本機材使用料込み</li>
                            <li>ドリンク1杯付き</li>
                        </ul>
                    </div>

                    <div class="pricing-card featured">
                        <div class="pricing-badge">人気</div>
                        <div class="pricing-header">
                            <h3>プレミアムセッション</h3>
                            <div class="price">¥4,000</div>
                        </div>
                        <ul class="pricing-features">
                            <li>3.5時間のセッション</li>
                            <li>高品質スタジオ使用</li>
                            <li>プロ機材使用可</li>
                            <li>ドリンク飲み放題</li>
                            <li>録音サービス付き</li>
                        </ul>
                    </div>

                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>初心者向け</h3>
                            <div class="price">¥2,500</div>
                        </div>
                        <ul class="pricing-features">
                            <li>3時間のセッション</li>
                            <li>初心者サポート付き</li>
                            <li>楽器レンタル無料</li>
                            <li>基礎レクチャー付き</li>
                        </ul>
                    </div>
                </div>

                <div class="point-box" style="margin-top: 2rem;">
                    <strong>お得な回数券もあります！</strong>
                    <ul>
                        <li>5回券: ¥14,000（1回あたり¥2,800）</li>
                        <li>10回券: ¥26,000（1回あたり¥2,600）</li>
                        <li>有効期限: 購入日から6ヶ月</li>
                    </ul>
                </div>
            </div>

            <div class="guide-section">
                <h2>支払い方法</h2>
                <div class="payment-methods">
                    <div class="payment-item">
                        <div class="payment-icon">💳</div>
                        <h3>クレジットカード</h3>
                        <p>Visa、Mastercard、JCB、American Express対応</p>
                    </div>
                    <div class="payment-item">
                        <div class="payment-icon">📱</div>
                        <h3>電子マネー</h3>
                        <p>PayPay、LINE Pay、楽天Pay対応</p>
                    </div>
                    <div class="payment-item">
                        <div class="payment-icon">💰</div>
                        <h3>現金（当日払い）</h3>
                        <p>会場受付にて現金でのお支払いも可能です</p>
                    </div>
                    <div class="payment-item">
                        <div class="payment-icon">🏦</div>
                        <h3>銀行振込</h3>
                        <p>事前振込も承ります（手数料はご負担ください）</p>
                    </div>
                </div>
            </div>

            <div class="guide-section">
                <h2>キャンセルポリシー</h2>
                <div class="policy-box">
                    <table class="policy-table">
                        <tr>
                            <th>キャンセル時期</th>
                            <th>キャンセル料</th>
                        </tr>
                        <tr>
                            <td>開催7日前まで</td>
                            <td>無料</td>
                        </tr>
                        <tr>
                            <td>開催6日前〜3日前</td>
                            <td>参加費の50%</td>
                        </tr>
                        <tr>
                            <td>開催2日前〜当日</td>
                            <td>参加費の100%</td>
                        </tr>
                        <tr>
                            <td>無断キャンセル</td>
                            <td>参加費の100% + 次回以降の参加制限</td>
                        </tr>
                    </table>
                    <p style="margin-top: 1rem; font-size: 0.9rem; color: var(--gray-light);">
                        ※キャンセルは必ず事前にご連絡ください<br>
                        ※体調不良等のやむを得ない事情の場合はご相談ください
                    </p>
                </div>
            </div>

            <div class="cta-box">
                <h3>準備はできましたか？</h3>
                <p>次回のセッション会に申し込んでみましょう</p>
                <a href="schedule.php" class="btn btn-primary">開催スケジュールを見る</a>
            </div>
        </div>
    </div>
</section>

<style>
.pricing-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-md);
    margin-top: var(--spacing-md);
}

.pricing-card {
    background: rgba(255, 255, 255, 0.05);
    border: 2px solid rgba(255, 107, 53, 0.2);
    border-radius: var(--border-radius);
    padding: var(--spacing-lg);
    transition: var(--transition);
    position: relative;
}

.pricing-card:hover {
    transform: translateY(-10px);
    border-color: var(--primary);
    background: rgba(255, 107, 53, 0.1);
}

.pricing-card.featured {
    border-color: var(--primary);
    background: rgba(255, 107, 53, 0.1);
}

.pricing-badge {
    position: absolute;
    top: -15px;
    right: 20px;
    background: var(--gradient-main);
    color: var(--light);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-weight: 700;
    font-size: 0.875rem;
}

.pricing-header h3 {
    font-family: var(--font-accent);
    font-size: 1.5rem;
    margin-bottom: var(--spacing-sm);
}

.price {
    font-family: var(--font-display);
    font-size: 3rem;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.pricing-features {
    list-style: none;
    padding: 0;
}

.pricing-features li {
    padding: var(--spacing-xs) 0;
    padding-left: 1.5rem;
    position: relative;
}

.pricing-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: 700;
}

.payment-methods {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-md);
}

.payment-item {
    background: rgba(255, 255, 255, 0.03);
    border: 2px solid rgba(255, 107, 53, 0.2);
    border-radius: var(--border-radius);
    padding: var(--spacing-md);
    text-align: center;
    transition: var(--transition);
}

.payment-item:hover {
    border-color: var(--primary);
    background: rgba(255, 107, 53, 0.05);
}

.payment-icon {
    font-size: 3rem;
    margin-bottom: var(--spacing-sm);
}

.payment-item h3 {
    font-size: 1.125rem;
    margin-bottom: var(--spacing-xs);
    color: var(--light);
}

.payment-item p {
    margin: 0;
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.7);
}

.policy-box {
    background: rgba(255, 255, 255, 0.03);
    border: 2px solid rgba(255, 107, 53, 0.2);
    border-radius: var(--border-radius);
    padding: var(--spacing-md);
}

.policy-table {
    width: 100%;
    border-collapse: collapse;
}

.policy-table th,
.policy-table td {
    padding: var(--spacing-sm);
    text-align: left;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.policy-table th {
    background: rgba(255, 107, 53, 0.2);
    color: var(--light);
    font-weight: 700;
}

.policy-table tr:last-child td {
    border-bottom: none;
}
</style>

<?php include 'footer.php'; ?>
