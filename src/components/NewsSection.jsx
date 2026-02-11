import { Link } from 'react-router-dom'
import '../styles/index.css'

const NewsSection = () => {
  const newsItems = [
    {
      id: 1,
      date: '2026.02.10',
      title: '3月開催の参加受付を開始しました'
    },
    {
      id: 2,
      date: '2026.02.05',
      title: '初心者向けワークショップ開催のお知らせ'
    },
    {
      id: 3,
      date: '2026.01.28',
      title: '会場が新しくなりました'
    }
  ]

  return (
    <section className="section news-section">
      <div className="container">
        <div className="section-header">
          <span className="section-number">05</span>
          <h2 className="section-title">お知らせ</h2>
        </div>
        <div className="news-list">
          {newsItems.map((item) => (
            <Link 
              key={item.id}
              to={`/news/${item.id}`} 
              className="news-item"
            >
              <time className="news-date">{item.date}</time>
              <h3 className="news-title">{item.title}</h3>
            </Link>
          ))}
        </div>
        <Link to="/news" className="link-more">全てのお知らせを見る →</Link>
      </div>
    </section>
  )
}

export default NewsSection

