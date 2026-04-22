# SS Plastic - React Conversion

This guide explains how to set up and run the React version of the SS Plastic website.

## Project Structure

```
ss-plastic/
├── public/
│   └── index.html          # HTML entry point
├── App.jsx                 # Main App component
├── App.css                 # Global app styles
├── IndexPage.jsx           # Home page component (converted from index.php)
├── IndexPage.css           # Home page styles
├── index.js                # React entry point
├── index.css               # Global styles
├── package.json            # Dependencies and scripts
└── images/                 # Image assets (same as before)
    ├── banner/
    ├── home/
    └── ...
```

## Components Overview

### IndexPage.jsx
Main component containing:
- **Carousel**: Automatic banner carousel with manual controls (converted from PHP carousel)
- **ProductCard**: Reusable product card component with hover overlay
- **ProductShowcase**: Grid of product cards with AOS animations

### Features Converted
✅ Banner carousel with fade animation
✅ Product showcase with 6 product items
✅ About section with styling
✅ Hover animations on product cards
✅ AOS (Animate On Scroll) animations
✅ Bootstrap responsive grid system
✅ All original styling preserved

## Installation

### Prerequisites
- Node.js (v14 or higher)
- npm or yarn

### Steps

1. **Navigate to the project directory**
   ```bash
   cd /Users/vijaypvtt/Documents/GitHub/ss-plastic
   ```

2. **Install dependencies**
   ```bash
   npm install
   ```

3. **Start the development server**
   ```bash
   npm start
   ```

   The app will open at `http://localhost:3000`

## Available Scripts

### `npm start`
Runs the app in development mode with hot reload.

### `npm build`
Builds the app for production in the `build` folder.

### `npm test`
Runs the test suite.

## Key Changes from PHP to React

| Feature | PHP (index.php) | React (IndexPage.jsx) |
|---------|-----------------|----------------------|
| Carousel | jQuery carousel plugin | React state + useEffect hook |
| Product Data | HTML hardcoded | JavaScript array |
| Animations | AOS library | AOS library (same) |
| Styling | Inline + CSS files | CSS modules + inline styles |
| Navigation | Link tags | React Router (optional) |

## File Mappings

- `header.php` → Navbar in App.jsx (simplified)
- `footer.php` → Footer in App.jsx (simplified)
- `index.php` → IndexPage.jsx
- `css/` → CSS files in root + IndexPage.css
- `images/` → Same directory structure (no changes needed)

## Customization

### Adding New Products
Edit the `products` array in `ProductShowcase()` component:

```javascript
const products = [
  {
    image: 'images/home/image.webp',
    title: 'Product Title',
    description: 'Product description',
    link: '/product-link',
    delay: '100'
  },
  // Add more products here
];
```

### Modifying Styles
- Global styles: `App.css`, `index.css`
- Page-specific styles: `IndexPage.css`

### Changing Carousel Speed
Modify the interval in the `Carousel` component:
```javascript
const interval = setInterval(() => {
  setActiveIndex((prev) => (prev + 1) % bannerImages.length);
}, 4000); // Change 4000 (4 seconds) to desired interval
```

## Dependencies

- **react**: UI library
- **react-dom**: DOM rendering
- **react-scripts**: Build tool configuration
- **aos**: Scroll animations
- **bootstrap**: Responsive grid and utilities

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Deployment

### Build for Production
```bash
npm run build
```

This creates an optimized production build in the `build/` directory.

### Deployment Options
1. **Vercel** (recommended for React):
   ```bash
   npm install -g vercel
   vercel
   ```

2. **Netlify**:
   Connect your GitHub repo to Netlify and it will auto-deploy

3. **Traditional hosting**:
   Upload the contents of `build/` to your web server

## Migration Notes

- Image paths remain the same (still using relative paths like `images/banner/pic1.webp`)
- All product links need to be updated to work with React Router (if using)
- Contact form will need to be converted to React component
- Other PHP pages (about.php, contact.php, etc.) should be converted similarly

## Next Steps

1. Convert other PHP pages (about.php, contact.php, etc.) to React components
2. Implement React Router for navigation
3. Convert PHP backend API calls to fetch/axios
4. Set up state management (Redux/Context API) if needed
5. Add form validation for contact form
6. Optimize images and add lazy loading

## Support

For issues or questions, refer to:
- React documentation: https://react.dev
- AOS documentation: https://michalsnik.github.io/aos/
- Bootstrap documentation: https://getbootstrap.com

---

Generated: 2024
