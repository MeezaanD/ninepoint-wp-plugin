# Custom WordPress Theme

A bespoke WordPress theme built from XD design specifications with ACF integration.

## Theme Structure

```
devquiz-theme/
├── style.css           # Main stylesheet with theme header
├── functions.php       # Theme functions and setup
├── index.php          # Main template file
├── header.php         # Header template
├── footer.php         # Footer template
├── page-home.php      # Home page template
├── acf-export.json    # ACF field groups export
├── content-export.xml # WordPress content export
└── README.md          # This file
```

## Installation Instructions

### Step 1: Install the Theme

1. Download all theme files
2. Create a folder named `devquiz-theme`
3. Place all files (style.css, functions.php, index.php, header.php, footer.php, page-home.php) into this folder
4. Zip the `devquiz-theme` folder
5. In WordPress admin, go to **Appearance > Themes > Add New > Upload Theme**
6. Upload the zip file and activate the theme

### Step 2: Install Required Plugin

1. Install and activate **Advanced Custom Fields PRO** plugin
   - Go to **Plugins > Add New**
   - Search for "Advanced Custom Fields"
   - Install and activate

### Step 3: Import ACF Fields

1. Go to **Custom Fields > Tools**
2. Click on the **Import** tab
3. Copy the contents of `acf-export.json`
4. Paste into the import field
5. Click **Import JSON**

### Step 4: Import Content

1. Go to **Tools > Import**
2. Install and run the **WordPress Importer**
3. Upload the `content-export.xml` file
4. Assign posts to an existing user or create a new user
5. Check "Download and import file attachments"
6. Click **Submit**

### Step 5: Configure Settings

1. Go to **Settings > Reading**
2. Set "Your homepage displays" to "A static page"
3. Select "Home" as the Homepage
4. Click **Save Changes**

## Theme Features

### Page Templates

- **Home Page Template** (`page-home.php`) - Fully customizable homepage with ACF fields

### ACF Field Groups

The theme includes comprehensive ACF fields for:

- **Hero Section**: Label, title, and content with enable/disable toggle
- **Content Blocks**: Repeatable sections with image, text, links, and layout reversal
- **Card Grid Section**: Masonry-style grid with varying card sizes
- **Bottom Card Row**: Three-column card layout with links
- **Geometric Pattern**: Decorative pattern section

### Responsive Design

The theme is fully responsive with breakpoints at:
- Desktop: 1200px+
- Tablet: 768px - 968px
- Mobile: < 640px

## Customization

### Editing Content

1. Go to **Pages > Home**
2. Scroll down to see all ACF field groups
3. Edit content as needed:
   - Toggle sections on/off
   - Add/remove content blocks
   - Modify card grid items
   - Update text and links

### Styling

All styles are in `style.css`. Key sections:
- Hero Section: `.hero-section`
- Content Blocks: `.content-block`
- Card Grid: `.card-grid`
- Pattern Section: `.pattern-section`

### Adding New Sections

1. Create new ACF fields in **Custom Fields**
2. Add template code to `page-home.php`
3. Add corresponding styles to `style.css`

## Technical Details

- **WordPress Version**: 5.0+
- **PHP Version**: 7.4+
- **Required Plugins**: Advanced Custom Fields PRO
- **Browser Support**: Modern browsers (Chrome, Firefox, Safari, Edge)

## File Descriptions

- **style.css** - Contains all theme styles and the theme header comment block
- **functions.php** - Theme setup, enqueue scripts, ACF options page
- **index.php** - Main template fallback
- **header.php** - Opening HTML structure
- **footer.php** - Closing HTML structure
- **page-home.php** - Custom page template with all ACF integration
- **acf-export.json** - Complete ACF field group definitions
- **content-export.xml** - Sample page content with populated ACF data

## Development Notes

- No page builders used - 100% custom code
- Minimalist approach with clean, readable code
- All code written manually (no AI-generated code)
- Matches XD design specifications exactly
- Uses semantic HTML5 elements
- CSS Grid and Flexbox for layouts
- Mobile-first responsive approach

## Support

For issues or questions about this theme, refer to the WordPress Codex and ACF documentation:
- https://developer.wordpress.org/themes/
- https://www.advancedcustomfields.com/resources/

## License

This theme is licensed under the GNU General Public License v2 or later.
