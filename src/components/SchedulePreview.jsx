import { Link } from 'react-router-dom'
import '../styles/index.css'

const SchedulePreview = () => {
  return (
    <section className="section schedule-preview">
      <div className="container">
        <div className="section-header">
          <span className="section-number">02</span>
          <h2 className="section-title">次回開催</h2>
        </div>
        <div className="next-event">
          <div className="event-badge">NEXT</div>
          <div className="event-date">
            <span className="date-day">15</span>
            <span className="date-month">MAR</span>
          </div>
          <div className="event-details">
            <h3 className="event-title">Spring Session 2026</h3>
            <div className="event-info">
              <div className="info-item">
                <span className="info-label">時間</span>
                <span className="info-value">19:00 - 22:00</span>
              </div>
              <div className="info-item">
                <span className="info-label">会場</span>
                <span className="info-value">都内音楽スタジオ</span>
              </div>
              <div className="info-item">
                <span className="info-label">参加費</span>
                <span className="info-value">¥3,000</span>
              </div>
            </div>
            <Link to="/schedule" className="btn btn-primary">詳細・申込み</Link>
          </div>
        </div>
        <Link to="/schedule" className="link-more">全ての開催スケジュールを見る →</Link>
      </div>
    </section>
  )
}

export default SchedulePreview

