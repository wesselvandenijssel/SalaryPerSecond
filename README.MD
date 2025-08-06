# Salary Per Second Calculator

A comprehensive, multilingual web application that calculates and visualizes your earnings across multiple time periods with real-time updates. Features a modular PHP architecture, international currency support, and an intuitive chat-style interface.

## Features

### **Advanced Salary Calculations**

-   Multiple salary input formats: Annual, Monthly, Hourly
-   Flexible working hour periods: Weekly, Daily, Monthly
-   Multiple output periods: Per Second, Minute, Day, Week, Biweek, Month
-   Real-time earnings counter with live updates
-   Precise calculations with up to 6 decimal places

### **International Support**

-   **50+ global currencies** including EUR, USD, GBP, JPY, and regional currencies
-   **Bilingual interface** with English and Dutch translations
-   **Language switcher** in navigation menu
-   Complete translation system for all user-facing content

### **Modern User Experience**

-   **Chat-style interface** with TypeIt.js animations
-   **Dark/Light theme toggle** with smooth transitions
-   **Fully responsive design** optimized for mobile and desktop
-   **Progressive Web App (PWA)** support with custom favicon
-   **Accessible navigation** with dropdown menus and mobile hamburger menu

### **Privacy & Security**

-   **Client-side calculations only** - no data sent to servers
-   **No tracking or analytics cookies**
-   **No user registration required**
-   **Open-source and transparent**

### **Celebrity Salary Comparisons**

-   Compare earnings with top CEOs and industry leaders
-   One-click salary presets for famous personalities
-   Real-time breakdown of celebrity earnings per second

## **Architecture**

### **Modular Structure**

```
├── index.php              # Main entry point
├── header.php             # Site header with navigation
├── footer.php             # Site footer
├── lang.php               # Translation system
├── style.css              # Separated CSS styles
├── script.js              # Separated JavaScript
├── site.webmanifest       # PWA manifest
├── favicon.svg            # Modern SVG favicon
├── robots.txt             # SEO optimization
├── lang/                  # Translation files
│   ├── en.php            # English translations
│   └── nl.php            # Dutch translations
└── sections/             # Modular content sections
    ├── calculator.php
    ├── features.php
    ├── use-cases.php
    ├── how-it-works.php
    ├── about-tips.php
    ├── faq.php
    ├── famous-salaries.php
    └── misc-sections.php
```

### **Translation System**

-   PHP-based translation function `t()`
-   JavaScript translations passed from PHP to client-side
-   Easy to extend with additional languages
-   Consistent translation keys across all components

## **Usage**

1. **Choose your input format**: Annual salary, monthly wage, or hourly rate
2. **Set working hours**: Weekly, daily, or monthly hours
3. **Select currency**: Choose from 50+ supported currencies
4. **Pick output period**: See earnings per second, minute, day, week, biweek, or month
5. **Calculate**: Get instant results with animated output
6. **Watch live counter**: See real-time earnings accumulation
7. **Switch languages**: Toggle between English and Dutch
8. **Try famous salaries**: Compare with CEO and celebrity earnings

## **Technical Stack**

-   **Backend**: PHP 8+ with modular architecture
-   **Frontend**: Vanilla JavaScript with modern ES6+ features
-   **Styling**: TailwindCSS + Custom CSS with CSS variables
-   **Animation**: TypeIt.js for chat-style typing effects
-   **PWA**: Web App Manifest with offline support
-   **SEO**: Structured data, meta tags, and robots.txt

## **Dependencies**

-   [TailwindCSS v2.2.19](https://tailwindcss.com/) (via CDN)
-   [TypeIt.js v8.7.1](https://typeitjs.com/) (via CDN)
-   PHP 8.0+ (for server-side functionality)

## **Browser Support**

-   ✅ Chrome/Edge 88+
-   ✅ Firefox 85+
-   ✅ Safari 14+
-   ✅ Mobile browsers (iOS Safari, Chrome Mobile)
-   ✅ Progressive Web App installation support

## **Recent Updates**

### v2.0 - Major Refactor (August 2025)

-   **Complete modular restructure** with separated PHP components
-   **Full bilingual support** (English/Dutch) with translation system
-   **Separated CSS and JavaScript** files for better caching
-   **Enhanced UI** with improved dark mode and mobile responsiveness
-   **Celebrity salary comparisons** with famous personalities
-   **PWA support** with favicon and web manifest

### v1.5 - Currency & Features (July 2025)

-   Added 50+ global currencies support
-   Enhanced real-time counter accuracy
-   Multiple output period options

### v1.0 - Initial Release (June 2025)

-   Basic salary per second calculation
-   Real-time earnings counter
-   Chat-style interface with animations

## **Contributing**

Feel free to submit issues, feature requests, or pull requests. All contributions are welcome!

## **Contact**

**Wessel van den IJssel**

-   📧 Email: [info@wesselvandenijssel.nl](mailto:info@wesselvandenijssel.nl)
-   💼 LinkedIn: [wessel-van-den-ijssel](https://www.linkedin.com/in/wessel-van-den-ijssel/)
-   🐙 GitHub: [wesselvdijssel](https://github.com/wesselvdijssel)

## 📄 **License**

This project is open source. Feel free to use, modify, and distribute as needed.

---

_Calculate your worth, one second at a time._
