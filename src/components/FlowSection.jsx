import React from 'react'
import { Link } from 'react-router-dom'
import '../styles/index.css'

const FlowSection = () => {
  const steps = [
    {
      number: '1',
      title: 'イベント申込み',
      description: '開催スケジュールから参加したい日程を選んで申込み'
    },
    {
      number: '2',
      title: '当日会場へ',
      description: '楽器を持って指定の会場へ。レンタルも可能です'
    },
    {
      number: '3',
      title: 'セッション開始',
      description: '自由にメンバーを組んで音楽を楽しもう'
    }
  ]

  return (
    <section className="section flow-section">
      <div className="container">
        <div className="section-header">
          <span className="section-number">03</span>
          <h2 className="section-title">参加の流れ</h2>
        </div>
        <div className="flow-steps">
          {steps.map((step, index) => (
            <React.Fragment key={index}>
              <div className="flow-step">
                <div className="step-number">{step.number}</div>
                <h3>{step.title}</h3>
                <p>{step.description}</p>
              </div>
              {index < steps.length - 1 && <div className="flow-arrow">→</div>}
            </React.Fragment>
          ))}
        </div>
        <div className="cta-box">
          <Link to="/guide" className="btn btn-primary">初参加ガイドを見る</Link>
        </div>
      </div>
    </section>
  )
}

export default FlowSection

