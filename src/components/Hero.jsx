import { useEffect, useRef } from 'react'
import { Link } from 'react-router-dom'
import '../styles/index.css'

const Hero = () => {
  const heroBgRef = useRef(null)

  useEffect(() => {
    const handleScroll = () => {
      const scrolled = window.pageYOffset
      if (heroBgRef.current) {
        const speed = 0.5
        heroBgRef.current.style.transform = `translateY(${scrolled * speed}px)`
      }
    }

    window.addEventListener('scroll', handleScroll)
    return () => window.removeEventListener('scroll', handleScroll)
  }, [])

  return (
    <section className="hero">
      <div className="hero-bg" ref={heroBgRef}></div>
      <div className="container">
        <div className="hero-content">
          <h2 className="hero-title">
            <span className="line">音楽で</span>
            <span className="line">繋がる</span>
            <span className="line highlight">セッション</span>
          </h2>
          <p className="hero-description">
            経験も楽器も問わない。ただ音楽が好きなら、それだけで十分。
          </p>
          <div className="hero-buttons">
            <Link to="/guide" className="btn btn-primary">初めての方へ</Link>
            <Link to="/schedule" className="btn btn-secondary">次回開催を見る</Link>
          </div>
        </div>
      </div>
      <div className="scroll-indicator">
        <span>SCROLL</span>
        <div className="scroll-line"></div>
      </div>
    </section>
  )
}

export default Hero

