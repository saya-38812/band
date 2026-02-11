import { Link } from 'react-router-dom'
import '../styles/index.css'

const Footer = () => {
  return (
    <footer className="footer">
      <div className="container">
        <div className="footer-content">
          <div className="footer-brand">
            <h3>SESSION<span className="accent">JAM</span></h3>
            <p>音楽仲間と繋がるセッション会</p>
          </div>
          <div className="footer-links">
            <div className="footer-column">
              <h4>はじめに</h4>
              <Link to="/guide">初参加ガイド</Link>
              <Link to="/about">セッション会とは</Link>
              <Link to="/faq">よくある質問</Link>
            </div>
            <div className="footer-column">
              <h4>参加する</h4>
              <Link to="/schedule">開催スケジュール</Link>
              <Link to="/join">参加方法・料金</Link>
            </div>
            <div className="footer-column">
              <h4>情報</h4>
              <Link to="/report">活動レポート</Link>
              <Link to="/news">お知らせ</Link>
            </div>
          </div>
        </div>
        <div className="footer-bottom">
          <p>&copy; 2026 SESSION JAM. All rights reserved.</p>
        </div>
      </div>
    </footer>
  )
}

export default Footer

