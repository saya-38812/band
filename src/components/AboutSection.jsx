import { Link } from 'react-router-dom'
import '../styles/index.css'

const AboutSection = () => {
  const aboutCards = [
    {
      icon: '🎸',
      title: '自由なジャム',
      description: '決まった曲も、固定メンバーもなし。その場で生まれる音楽を楽しむスタイル。',
      delay: '0.1s'
    },
    {
      icon: '🎵',
      title: '経験不問',
      description: '初心者も経験者も関係なく、音楽を通じて交流できる場所です。',
      delay: '0.2s'
    },
    {
      icon: '🎤',
      title: '様々な楽器',
      description: 'ギター、ベース、ドラム、キーボード、管楽器など、あらゆる楽器が集まります。',
      delay: '0.3s'
    }
  ]

  return (
    <section className="section about-section">
      <div className="container">
        <div className="section-header">
          <span className="section-number">01</span>
          <h2 className="section-title">セッション会とは</h2>
        </div>
        <div className="about-grid">
          {aboutCards.map((card, index) => (
            <div 
              key={index}
              className="about-card" 
              style={{ animationDelay: card.delay }}
            >
              <div className="card-icon">{card.icon}</div>
              <h3>{card.title}</h3>
              <p>{card.description}</p>
            </div>
          ))}
        </div>
        <div className="cta-box">
          <h3>もっと詳しく知りたい方は</h3>
          <Link to="/about" className="btn btn-outline">セッション会の詳細</Link>
        </div>
      </div>
    </section>
  )
}

export default AboutSection

