import { Link } from 'react-router-dom'
import '../styles/index.css'

const ReportSection = () => {
  const reports = [
    {
      id: 1,
      date: '2026.02.01',
      title: 'Winter Session 2026 開催レポート',
      excerpt: '寒さも吹き飛ぶ熱いセッションになりました。総勢25名が参加...',
      gradient: 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)'
    },
    {
      id: 2,
      date: '2026.01.15',
      title: '新年初セッション 大盛況！',
      excerpt: '2026年最初のセッション会。新しい出会いもたくさん...',
      gradient: 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)'
    }
  ]

  return (
    <section className="section report-section">
      <div className="container">
        <div className="section-header">
          <span className="section-number">04</span>
          <h2 className="section-title">活動レポート</h2>
        </div>
        <div className="report-grid">
          {reports.map((report) => (
            <Link 
              key={report.id}
              to={`/report/${report.id}`} 
              className="report-card"
            >
              <div 
                className="report-image" 
                style={{ background: report.gradient }}
              ></div>
              <div className="report-content">
                <time className="report-date">{report.date}</time>
                <h3 className="report-title">{report.title}</h3>
                <p className="report-excerpt">{report.excerpt}</p>
                <span className="report-link">READ MORE →</span>
              </div>
            </Link>
          ))}
        </div>
        <Link to="/report" className="link-more">全てのレポートを見る →</Link>
      </div>
    </section>
  )
}

export default ReportSection

