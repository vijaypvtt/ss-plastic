# Quick Start - SS Plastic React Version

## What Was Converted

Your PHP website has been converted to React! Here's what you need to know:

### Files Created

| File | Purpose |
|------|---------|
| `IndexPage.jsx` | Main home page component (was `index.php`) |
| `App.jsx` | Root React component |
| `index.js` | React entry point |
| `public/index.html` | HTML template |
| `package.json` | Project dependencies |
| `IndexPage.css` | Home page styles |
| `App.css` | Global app styles |
| `index.css` | Global styles |

### 🚀 Getting Started in 3 Steps

#### 1. Install Dependencies
```bash
npm install
```

#### 2. Start Development Server
```bash
npm start
```

#### 3. Open in Browser
The app will automatically open at `http://localhost:3000`

## What's Converted

✅ **Banner Carousel** - Auto-rotating image carousel with indicators
✅ **Product Grid** - 6 product cards with hover animations
✅ **About Section** - Company information section
✅ **Responsive Design** - Works on mobile, tablet, desktop
✅ **Animations** - AOS (Animate On Scroll) included
✅ **Styling** - All CSS styling preserved
✅ **Bootstrap** - Responsive grid system

## Project Structure

```
ss-plastic/
├── IndexPage.jsx       ← Home page (main content)
├── App.jsx             ← Root component
├── index.js            ← React entry point
├── public/
│   └── index.html      ← HTML template
├── package.json        ← Dependencies
├── IndexPage.css       ← Page styles
├── App.css             ← Global styles
└── images/             ← Your images (unchanged)
```

## Key React Concepts Used

### State Management
```javascript
const [activeIndex, setActiveIndex] = useState(0);
```
Tracks which banner image is currently shown.

### Effects
```javascript
useEffect(() => {
  AOS.init({ duration: 1000 });
}, []);
```
Initializes scroll animations when component mounts.

### Component Composition
- `IndexPage` (main page)
  - `Carousel` (banner)
  - `ProductShowcase`
    - `ProductCard` (reusable)

### Data as Objects
Products are stored in an array and mapped to components:
```javascript
const products = [
  { image, title, description, link, delay },
  // ...
];

products.map(product => <ProductCard {...product} />)
```

## Making Changes

### Change Product Title
Edit `IndexPage.jsx`, find `products` array, update `title`

### Change Carousel Speed
Edit `IndexPage.jsx`, line ~30, change `4000` (milliseconds)

### Add New Product
Edit `products` array in `IndexPage.jsx`, add new object

### Modify Colors
Edit `IndexPage.css`, search for color hex values like `#007bff`

## Common Tasks

### Build for Production
```bash
npm run build
```
Creates optimized build in `build/` folder

### Deploy to Vercel
```bash
npm i -g vercel
vercel
```

### Run Tests
```bash
npm test
```

## Important Notes

- **Image paths**: Keep the same folder structure (`images/`, `images/banner/`, etc.)
- **Links**: Currently use standard `<a>` tags. For multi-page React app, add React Router
- **Forms**: Contact form needs to be converted separately
- **Backend**: API calls to PHP backend need conversion to fetch/axios

## Next Steps

1. **Test**: Run `npm start` and verify all content appears
2. **Customize**: Update company info, images, colors
3. **Add Pages**: Convert `about.php`, `contact.php` to React components
4. **Setup Router**: Install React Router for navigation between pages
5. **Deploy**: Upload to Vercel, Netlify, or your hosting

## Troubleshooting

### Port 3000 already in use
```bash
npm start -- --port 3001
```

### Images not loading
Check that `images/` folder exists in project root with same structure

### Styles not applying
Make sure CSS files are imported in JSX:
```javascript
import './IndexPage.css';
```

### Node modules issues
```bash
rm -rf node_modules package-lock.json
npm install
```

## Resources

- React: https://react.dev
- Bootstrap: https://getbootstrap.com
- AOS: https://michalsnik.github.io/aos/
- Create React App: https://create-react-app.dev

---

Ready to get started? Run `npm install && npm start` 🚀
