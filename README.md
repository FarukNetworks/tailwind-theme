# Eggsmedia Tailwind WordPress Theme

A modern, responsive WordPress theme built with Tailwind CSS, featuring smooth animations and a clean design aesthetic.

## 🚀 Features

- **Modern Design**: Clean, minimalist design with gradient accents
- **Tailwind CSS**: Utility-first CSS framework for rapid development
- **Responsive**: Mobile-first responsive design
- **Smooth Animations**: GSAP-powered animations and Lenis smooth scrolling
- **Custom Blocks**: Modular block system for flexible content creation
- **Author Pages**: Dedicated author profile pages with LinkedIn integration
- **Reading Time**: Automatic reading time calculation for posts
- **Custom Navigation**: Mobile-friendly navigation with hamburger menu
- **SEO Ready**: Optimized for search engines
- **Widget Ready**: Footer widget areas

## 🎨 Design System

### Colors

- **Primary**: `#D883BB` (Pink)
- **Secondary**: `#5BC5CE` (Cyan)
- **Orange**: `#FD9834`
- **Dark Purple**: `#AD6996`
- **Gray**: `#F8F8F8`
- **Border**: `#bdbdbd`

### Typography

- **Font Family**: DM Sans (Google Fonts)
- **Responsive Typography**: Fluid text scaling across devices

### Breakpoints

- **xs**: 480px
- **sm**: 767px
- **md**: 990px
- **lg**: 1200px
- **xl**: 1600px
- **2xl**: 1920px

## 🛠 Installation

1. **Download** the theme files
2. **Upload** to your WordPress `/wp-content/themes/` directory
3. **Activate** the theme in WordPress Admin → Appearance → Themes
4. **Install dependencies** (if developing):
   ```bash
   npm install
   ```

## 🔧 Development

### Prerequisites

- Node.js and npm
- WordPress development environment

### Build Process

**Development Mode** (with file watching):

```bash
npm run dev
```

**Production Build** (minified):

```bash
npm run build
```

### File Structure

```
tailwind/
├── blocks/                 # Custom Gutenberg blocks
│   └── homepage/          # Homepage-specific blocks
├── components/            # Reusable PHP components
│   ├── button-gradient-transparent.php
│   └── post-navigation.php
├── css/                   # Compiled CSS files
│   ├── app.css           # Custom styles
│   └── tailwind.css      # Compiled Tailwind CSS
├── js/                    # JavaScript files
│   ├── custom.js         # Custom JavaScript
│   └── gsap.js           # GSAP animations
├── src/                   # Source files
│   └── css/
│       └── tailwind.css  # Tailwind source
├── template-parts/        # Template partials
│   ├── content.php       # Post content template
│   ├── content-single.php # Single post template
│   └── page-basic.php    # Basic page template
├── functions.php          # Theme functions
├── header.php            # Header template
├── footer.php            # Footer template
├── index.php             # Main template
├── single.php            # Single post template
├── page.php              # Page template
├── 404.php               # 404 error template
├── style.css             # Theme information
├── tailwind.config.js    # Tailwind configuration
├── postcss.config.js     # PostCSS configuration
└── package.json          # Node.js dependencies
```

## 🎯 Key Features

### Animation System

- **GSAP**: Professional-grade animations
- **ScrollTrigger**: Scroll-based animations
- **Lenis**: Smooth scrolling experience
- **Custom Classes**:
  - `.gsap-animated`
  - `.gsap-fade-in-up`
  - `.gsap-fade-in-up-stagger`
  - `.customTitleAnimation`

### Interactive Elements

- **Slick Carousel**: Image sliders and carousels
- **Mobile Navigation**: Responsive hamburger menu
- **Load More Posts**: AJAX-powered post loading
- **Category Filtering**: Dynamic category navigation

### Author System

- **Author Profiles**: Dedicated author pages
- **LinkedIn Integration**: Social media links
- **Author Avatars**: Custom profile images
- **Author Descriptions**: Rich author bios

### Content Features

- **Reading Time**: Automatic calculation
- **Post Thumbnails**: Featured image support
- **Custom Excerpts**: Trimmed content previews
- **Date Formatting**: Consistent date display

## 🎨 Customization

### Tailwind Configuration

Edit `tailwind.config.js` to customize:

- Colors
- Typography
- Spacing
- Breakpoints
- Custom utilities

### Custom Styles

Add custom CSS to `src/css/tailwind.css`:

```css
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');

@tailwind base;
@tailwind components;
@tailwind utilities;

/* Your custom styles here */
```

### PHP Customization

- **functions.php**: Add custom functionality
- **Template parts**: Modify content display
- **Components**: Create reusable elements

## 📱 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🔌 Dependencies

### Frontend

- **Tailwind CSS**: ^3.4.3
- **GSAP**: ^3.12.5
- **Lenis**: ^1.1.12
- **Slick Carousel**: ^1.8.1

### Development

- **PostCSS**: ^8.4.32
- **Autoprefixer**: ^10.4.16

## 📄 License

This theme is developed by Eggs Media. Please check with the author for licensing terms.

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📞 Support

For support and customization requests, contact:

- **Website**: [https://eggsmedia.com](https://eggsmedia.com)
- **Author**: Eggs Media

## 🔄 Version History

- **v3.4.0**: Current version with Tailwind CSS integration
- Features modern design system and animation framework

---

**Built with ❤️ by Eggs Media**
