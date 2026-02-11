import { useState, useEffect } from 'react'
import { Link, useLocation } from 'react-router-dom'
import '../styles/index.css'

const Header = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false)
  const [isScrolled, setIsScrolled] = useState(false)
  const location = useLocation()

  useEffect(() => {
    const handleScroll = () => {
      const scrollY = window.scrollY
      setIsScrolled(scrollY > 100)
    }

    window.addEventListener('scroll', handleScroll)
    return () => window.removeEventListener('scroll', handleScroll)
  }, [])

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen)
  }

  const navLinks = [
    { path: '/', label: 'TOP' },
    { path: '/guide', label: '初参加ガイド' },
    { path: '/about', label: 'セッション会とは' },
    { path: '/schedule', label: '開催スケジュール' },
    { path: '/join', label: '参加方法' },
    { path: '/faq', label: 'FAQ' },
    { path: '/report', label: 'レポート' },
    { path: '/news', label: 'お知らせ' },
  ]

  return (
    <header 
      className="header" 
      style={{
        background: isScrolled ? 'rgba(13, 13, 13, 0.98)' : 'rgba(13, 13, 13, 0.95)',
        boxShadow: isScrolled ? '0 2px 20px rgba(0, 0, 0, 0.5)' : 'none'
      }}
    >
      <div className="container">
        <div className="logo">
          <Link to="/">
            <h1>SESSION<span className="accent">JAM</span></h1>
          </Link>
        </div>
        <nav className={`nav ${isMenuOpen ? 'active' : ''}`}>
          {navLinks.map((link) => (
            <Link
              key={link.path}
              to={link.path}
              className={`nav-link ${location.pathname === link.path ? 'active' : ''}`}
              onClick={() => setIsMenuOpen(false)}
            >
              {link.label}
            </Link>
          ))}
        </nav>
        <button 
          className={`menu-toggle ${isMenuOpen ? 'active' : ''}`}
          onClick={toggleMenu}
          aria-label="メニュー"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </header>
  )
}

export default Header

