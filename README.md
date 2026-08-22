# Muhammad Ikhwan Ariff - Portfolio Website

A modern, responsive portfolio website built with HTML, Tailwind CSS, and no build dependencies. Features a clean design showcasing professional experience, projects, and technical skills.

## 📋 Features

- **Responsive Design** - Works seamlessly on desktop, tablet, and mobile devices
- **Modern UI** - Clean, professional design using Tailwind CSS
- **Fast Loading** - No build process, minimal dependencies
- **Printable Resume** - Resume page optimized for PDF export
- **SEO Ready** - Proper meta tags and semantic HTML
- **Easy to Customize** - Simple HTML structure with Tailwind classes

## 📁 Project Structure

```
portfolio-website/
├── index.html           # Home/Landing page
├── experience.html      # Professional experience
├── projects.html        # Portfolio projects
├── skills.html          # Technical skills & competencies
├── resume.html          # Full resume
├── README.md            # This file
└── .gitignore          # Git ignore file
```

## 🚀 Quick Start

### Option 1: Local Development (Recommended)

1. **Clone or Download the project**
   ```bash
   # If using git
   git clone <repository-url>
   cd portfolio-website
   ```

2. **Start a Local Server**
   
   **Using Python 3:**
   ```bash
   python -m http.server 8000
   ```
   
   **Using Python 2:**
   ```bash
   python -m SimpleHTTPServer 8000
   ```
   
   **Using Node.js (http-server):**
   ```bash
   npx http-server -p 8000
   ```
   
   **Using Live Server Extension (VS Code):**
   - Install "Live Server" extension by Ritwick Dey
   - Right-click on index.html → "Open with Live Server"

3. **Open in Browser**
   ```
   http://localhost:8000
   ```

### Option 2: Direct File Access

Simply open `index.html` in your browser directly (works for most features, but some may be limited due to CORS restrictions).

## 🌐 Deployment Options

### **1. GitHub Pages (Free & Easiest)**

1. **Create a GitHub repository**
   ```bash
   git init
   git add .
   git commit -m "Initial portfolio"
   git remote add origin https://github.com/YOUR_USERNAME/portfolio.git
   git branch -M main
   git push -u origin main
   ```

2. **Enable GitHub Pages**
   - Go to repository Settings
   - Navigate to "Pages" section
   - Set source to "main" branch
   - Your site will be live at `https://YOUR_USERNAME.github.io/portfolio/`

### **2. Netlify (Free & Easy)**

1. **Sign up at [Netlify](https://netlify.com)**

2. **Deploy Option A - Connect GitHub**
   - Click "New site from Git"
   - Connect your GitHub account
   - Select the portfolio repository
   - Click Deploy

3. **Deploy Option B - Drag & Drop**
   - Drag and drop the project folder to Netlify
   - Wait for deployment to complete

### **3. Vercel (Free & Fast)**

1. **Sign up at [Vercel](https://vercel.com)**

2. **Deploy via Git**
   - Click "New Project"
   - Import your GitHub repository
   - Click Deploy
   - Site will be live at `your-username-portfolio.vercel.app`

### **4. Self-Hosted (Linux/Ubuntu Server)**

1. **Upload files via SSH**
   ```bash
   scp -r ./portfolio-website user@your-server.com:/home/user/www/
   ```

2. **Configure web server (Nginx)**
   ```bash
   # Create nginx config
   sudo nano /etc/nginx/sites-available/portfolio
   ```
   
   ```nginx
   server {
       listen 80;
       server_name your-domain.com;
       
       root /home/user/www/portfolio-website;
       index index.html;
       
       location / {
           try_files $uri $uri/ =404;
       }
   }
   ```

3. **Enable and start nginx**
   ```bash
   sudo ln -s /etc/nginx/sites-available/portfolio /etc/nginx/sites-enabled/
   sudo systemctl restart nginx
   ```

### **5. Cpanel Hosting (Shared Hosting)**

1. **Upload files using File Manager or FTP**
   - Connect to your FTP account using FileZilla or similar
   - Upload all files to `public_html` folder
   - Access at your domain URL

2. **Alternative using cPanel:**
   - Login to cPanel
   - Go to File Manager
   - Upload all files to public_html
   - Set index.html as default page if needed

## ✏️ Customization Guide

### Update Personal Information

1. **Edit Contact Details** (all pages)
   - Search for `ikhwanariff255@gmail.com`
   - Replace with your email
   - Update phone number `+60182575321` with yours

2. **Update Social Links** (Footer - all pages)
   ```html
   <a href="mailto:YOUR_EMAIL">Email</a>
   <a href="tel:YOUR_PHONE">Phone</a>
   <a href="YOUR_LINKEDIN_URL">LinkedIn</a>
   <a href="YOUR_GITHUB_URL">GitHub</a>
   ```

3. **Add Your Profile Photo**
   - Place image in same directory
   - Update image URL in HTML

### Update Content

- **Home Page** (index.html) - Hero section and statistics
- **Experience** (experience.html) - Work history and roles
- **Projects** (projects.html) - Your portfolio projects
- **Skills** (skills.html) - Technical competencies
- **Resume** (resume.html) - Full resume details

### Customize Colors

Edit color variables in each HTML file's `<style>` section:

```css
:root {
    --primary: #000000;      /* Primary color */
    --on-primary: #ffffff;   /* Text on primary */
    --surface: #f9f9f9;      /* Background */
}
```

## 📱 Browser Support

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🔧 Dependencies

- **Tailwind CSS** (via CDN) - No installation needed
- **Material Symbols** (via Google Fonts) - Icons
- **Inter Font** (via Google Fonts) - Typography

All dependencies are loaded from CDN, no local installation required!

## 📄 License

This portfolio website is provided as-is for personal use.

## 🤝 Support

For issues or questions:
1. Check the file structure
2. Ensure all HTML files are in the same directory
3. Clear browser cache (Ctrl+Shift+Delete or Cmd+Shift+Delete)
4. Try a different browser to isolate issues

## 📞 Contact Information

- **Email:** ikhwanariff255@gmail.com
- **Phone:** +60 182 575 321
- **Location:** Kajang, Selangor, Malaysia

---

**Last Updated:** December 2024
**Status:** Production Ready ✅
