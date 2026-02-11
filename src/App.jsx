import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import { useEffect } from 'react'
import Header from './components/Header'
import Footer from './components/Footer'
import Home from './pages/Home'
import './styles/index.css'

const App = () => {
  useEffect(() => {
    // スクロールアニメーション
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -100px 0px'
    }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1'
          entry.target.style.transform = 'translateY(0)'
        }
      })
    }, observerOptions)

    // アニメーション対象の要素
    const animatedElements = document.querySelectorAll('.about-card, .report-card, .flow-step')
    animatedElements.forEach(el => {
      el.style.opacity = '0'
      el.style.transform = 'translateY(30px)'
      el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out'
      observer.observe(el)
    })

    return () => {
      animatedElements.forEach(el => observer.unobserve(el))
    }
  }, [])

  return (
    <Router>
      <div className="noise-overlay"></div>
      <Header />
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/guide" element={<div className="section"><div className="container"><h1>初参加ガイド</h1></div></div>} />
        <Route path="/about" element={<div className="section"><div className="container"><h1>セッション会とは</h1></div></div>} />
        <Route path="/schedule" element={<div className="section"><div className="container"><h1>開催スケジュール</h1></div></div>} />
        <Route path="/join" element={<div className="section"><div className="container"><h1>参加方法</h1></div></div>} />
        <Route path="/faq" element={<div className="section"><div className="container"><h1>FAQ</h1></div></div>} />
        <Route path="/report" element={<div className="section"><div className="container"><h1>レポート</h1></div></div>} />
        <Route path="/report/:id" element={<div className="section"><div className="container"><h1>レポート詳細</h1></div></div>} />
        <Route path="/news" element={<div className="section"><div className="container"><h1>お知らせ</h1></div></div>} />
        <Route path="/news/:id" element={<div className="section"><div className="container"><h1>お知らせ詳細</h1></div></div>} />
      </Routes>
      <Footer />
    </Router>
  )
}

export default App

