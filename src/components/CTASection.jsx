import { Link } from 'react-router-dom'
import '../styles/index.css'

const CTASection = () => {
  return (
    <section className="cta-section">
      <div className="container">
        <h2 className="cta-title">さあ、音楽を始めよう</h2>
        <p className="cta-description">次のセッションで、あなたの音を聞かせてください</p>
        <Link to="/schedule" className="btn btn-large">参加申込みはこちら</Link>
      </div>
    </section>
  )
}

export default CTASection

