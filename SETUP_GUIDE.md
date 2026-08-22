# 🚀 Portfolio Website - Setup Guide

## What You Have

A complete, production-ready portfolio website with:
- ✅ 5 HTML pages (Home, Experience, Projects, Skills, Resume)
- ✅ Responsive design (works on mobile, tablet, desktop)
- ✅ No build process or installation needed
- ✅ Fully customizable
- ✅ Easy to deploy

## Step 1: Run Locally (Choose One Method)

### Method A: Python (Easiest if you have Python)

**Windows:**
```bash
# Open Command Prompt and navigate to the folder
cd path\to\portfolio-website

# Run this command
python -m http.server 8000

# Open browser and go to: http://localhost:8000
```

**Mac/Linux:**
```bash
cd path/to/portfolio-website
python3 -m http.server 8000

# Open browser and go to: http://localhost:8000
```

### Method B: Using VS Code

1. Install "Live Server" extension (right side panel → Extensions)
2. Right-click on `index.html`
3. Select "Open with Live Server"
4. Browser opens automatically

### Method C: Using Node.js

```bash
cd path/to/portfolio-website
npx http-server -p 8000

# Open: http://localhost:8000
```

### Method D: Direct File Open

Simply double-click `index.html` to open in browser (basic functionality works, but some features may be limited)

---

## Step 2: Customize Your Content

### Update Your Info (Most Important)

**In ALL HTML files**, find and replace:
- `ikhwanariff255@gmail.com` → Your Email
- `+60182575321` → Your Phone
- `Muhammad Ikhwan Ariff` → Your Name

### Edit Each Page

1. **index.html** - Home page
   - Change headline and description
   - Update statistics in the "Stats Section"
   - Update the three cards (Education, Development, Entrepreneurship)

2. **experience.html** - Work experience
   - Edit job titles and companies
   - Update dates
   - Change job descriptions

3. **projects.html** - Your projects
   - Replace project names and descriptions
   - Update technologies used
   - Add your project details

4. **skills.html** - Your skills
   - Update skill names and percentages
   - Edit skill categories
   - Update proficiency levels

5. **resume.html** - Your resume
   - Update all resume content
   - Change education details
   - Update experience
   - Modify skills section

---

## Step 3: Deploy (Choose One)

### Deploy on GitHub Pages (Free - Recommended)

1. **Create a GitHub account** (github.com)

2. **Create a new repository**
   - Name it: `portfolio` (or any name)
   - Make it public
   - Check "Add a README file"

3. **Upload your files**
   - Click "Add file" → "Upload files"
   - Drag and drop all files from your folder
   - Click "Commit changes"

4. **Enable GitHub Pages**
   - Go to Settings → Pages
   - Under "Branch", select "main"
   - Click Save
   - Your site will be live at: `https://your-username.github.io/portfolio/`

### Deploy on Netlify (Free - Very Easy)

1. Go to **netlify.com**
2. Click "Sign up"
3. One of two options:

   **Option A - Connect GitHub:**
   - Click "Connect to Git"
   - Connect your GitHub account
   - Select your portfolio repository
   - Click Deploy
   - Done! Your site is live

   **Option B - Drag & Drop:**
   - Drag and drop your portfolio folder
   - Wait for upload
   - Site goes live immediately!

### Deploy on Vercel (Free - Very Fast)

1. Go to **vercel.com**
2. Click "Sign up"
3. Select "GitHub" or "GitLab"
4. Find your portfolio repo
5. Click Deploy
6. Your site is live at: `your-name-portfolio.vercel.app`

---

## Step 4: Update Site (After Deployment)

### If using GitHub:
```bash
# Make changes locally
# Then run:
git add .
git commit -m "Updated portfolio"
git push

# Your site updates automatically!
```

### If using Netlify/Vercel:
- They automatically update when you push to GitHub
- Or upload files directly to dashboard

---

## 📁 File Structure Explanation

```
portfolio-website/
├── index.html          # Home page - landing page
├── experience.html     # Your work experience
├── projects.html       # Your projects showcase
├── skills.html         # Your technical skills
├── resume.html         # Full resume (printable)
├── README.md           # Documentation
├── SETUP_GUIDE.md      # This file
└── .gitignore          # Git ignore (if using Git)
```

**All files must stay in the same folder!** Don't create subfolders.

---

## 🎨 Customization Tips

### Change Colors

Open any HTML file and look for this section:
```css
:root {
    --primary: #000000;      /* Change black color */
    --on-primary: #ffffff;   /* Change white color */
    --surface: #f9f9f9;      /* Change background */
}
```

Current colors:
- Black (#000000) - Primary color
- White (#ffffff) - Light text
- Light gray (#f9f9f9) - Background

### Add Your Photo

1. Get a good photo of yourself (JPG or PNG)
2. Place it in the same folder as HTML files
3. In HTML, find where images are referenced
4. Update the image path

---

## ✅ Verification Checklist

After setup, check:
- [ ] All pages load without errors
- [ ] Navigation links work
- [ ] Contact info is updated
- [ ] All text is correct
- [ ] Mobile view looks good
- [ ] Links to your email/phone work
- [ ] Social media links updated
- [ ] Resume page displays correctly
- [ ] Print/PDF works (Ctrl+P in resume)

---

## 🆘 Troubleshooting

### Pages don't load
- Make sure all HTML files are in the same folder
- Check file names exactly match links (case-sensitive on Linux/Mac)

### Styles look broken
- Clear browser cache (Ctrl+Shift+Delete)
- Try a different browser
- Check internet connection (Tailwind CSS loads from CDN)

### Links don't work
- Verify file names (check spelling)
- Make sure no special characters in file names
- Don't rename HTML files unless updating all links

### Local server won't start
- Make sure port 8000 is not in use
- Try different port: `python -m http.server 3000`
- Check your antivirus (sometimes blocks servers)

---

## 📱 Testing

### Test Responsive Design

1. Open site in browser
2. Press F12 (or Cmd+Option+I on Mac)
3. Click mobile icon (phone/tablet)
4. Test on different screen sizes
5. Check if layout adjusts properly

### Test All Links

- Click all navigation links
- Verify they go to correct pages
- Test footer links
- Test contact buttons

---

## 🎯 Next Steps

After deployment:

1. **Share your portfolio**
   - Add link to LinkedIn
   - Add to email signature
   - Share with potential employers
   - Link from your GitHub profile

2. **Keep it updated**
   - Add new projects regularly
   - Update skills as you learn
   - Keep resume current
   - Update experience

3. **SEO (Optional)**
   - Add meta descriptions to pages
   - Improve page titles
   - Add keywords
   - Submit to Google Search Console

---

## 📞 Support

If you get stuck:

1. **Check file names** - Make sure they match exactly
2. **Check browser console** - Press F12 and look for errors
3. **Clear cache** - Ctrl+Shift+Delete
4. **Try different browser** - Firefox, Chrome, Safari
5. **Check internet** - CDN resources need internet connection

---

## Summary

1. ✅ You have all files ready to go
2. ✅ Run locally using Python/Node/VS Code
3. ✅ Customize the content for your profile
4. ✅ Deploy to GitHub Pages/Netlify/Vercel (Free!)
5. ✅ Share your portfolio with the world!

**Your portfolio is production-ready. You just need to customize it and deploy!** 🎉

---

**Happy deploying! Good luck with your career! 🚀**
