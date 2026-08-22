---
name: Executive Engineering Portfolio
colors:
  surface: '#f9f9f9'
  surface-dim: '#dadada'
  surface-bright: '#f9f9f9'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f3f3f4'
  surface-container: '#eeeeee'
  surface-container-high: '#e8e8e8'
  surface-container-highest: '#e2e2e2'
  on-surface: '#1a1c1c'
  on-surface-variant: '#44474d'
  inverse-surface: '#2f3131'
  inverse-on-surface: '#f0f1f1'
  outline: '#75777e'
  outline-variant: '#c5c6cd'
  surface-tint: '#515f78'
  primary: '#000000'
  on-primary: '#ffffff'
  primary-container: '#0d1c32'
  on-primary-container: '#76849f'
  inverse-primary: '#b9c7e4'
  secondary: '#505f76'
  on-secondary: '#ffffff'
  secondary-container: '#d0e1fb'
  on-secondary-container: '#54647a'
  tertiary: '#000000'
  on-tertiary: '#ffffff'
  tertiary-container: '#191c1e'
  on-tertiary-container: '#818486'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d6e3ff'
  primary-fixed-dim: '#b9c7e4'
  on-primary-fixed: '#0d1c32'
  on-primary-fixed-variant: '#39475f'
  secondary-fixed: '#d3e4fe'
  secondary-fixed-dim: '#b7c8e1'
  on-secondary-fixed: '#0b1c30'
  on-secondary-fixed-variant: '#38485d'
  tertiary-fixed: '#e0e3e5'
  tertiary-fixed-dim: '#c4c7c9'
  on-tertiary-fixed: '#191c1e'
  on-tertiary-fixed-variant: '#444749'
  background: '#f9f9f9'
  on-background: '#1a1c1c'
  surface-variant: '#e2e2e2'
typography:
  display-lg:
    fontFamily: Inter
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  display-lg-mobile:
    fontFamily: Inter
    fontSize: 36px
    fontWeight: '700'
    lineHeight: 44px
    letterSpacing: -0.02em
  headline-md:
    fontFamily: Inter
    fontSize: 30px
    fontWeight: '600'
    lineHeight: 38px
    letterSpacing: -0.01em
  headline-sm:
    fontFamily: Inter
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-caps:
    fontFamily: JetBrains Mono
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
    letterSpacing: 0.05em
  code:
    fontFamily: JetBrains Mono
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  unit: 8px
  container-max: 1200px
  gutter: 24px
  margin-mobile: 20px
  section-padding-desktop: 120px
  section-padding-mobile: 64px
---

## Brand & Style
The design system is engineered for a senior software developer’s professional identity, emphasizing technical mastery, reliability, and architectural precision. The brand personality is authoritative yet understated, avoiding decorative fluff in favor of functional clarity.

The visual style is **Corporate Minimalism**. It leverages a structured grid, generous white space, and a restrained color palette to evoke the feeling of a premium enterprise SaaS product or a high-end technical consultancy. The emotional response should be one of immediate trust and respect for the subject's seniority and attention to detail.

## Colors
The palette is rooted in a "Deep Navy" primary, used for high-impact elements like headings, primary buttons, and navigation anchors to establish ground and authority. 

- **Primary (#0A192F):** Used for typography, dark-mode containers, and core interactive states.
- **Secondary (#64748B):** Reserved for supporting text, icons, and borders to maintain a soft contrast against the white background.
- **Tertiary/Background (#F8FAFC):** Applied to section backgrounds to create a subtle visual "break" between content blocks without disrupting the flow.
- **Neutral (#FFFFFF):** The canvas color, ensuring maximum legibility and a clean, airy feel.

## Typography
This design system utilizes **Inter** for all primary interface elements due to its exceptional legibility and systematic appearance. **JetBrains Mono** is introduced as a secondary font for technical labels, tags, and snippets to reinforce the developer-centric narrative.

Large headings use tight letter-spacing and bold weights to create a strong visual hierarchy. Body text maintains a comfortable line-height for long-form reading of project descriptions and experience entries. Use `label-caps` for section overlines (e.g., "EXPERIENCE" above a header) to provide organizational context.

## Layout & Spacing
The layout follows a **Strict 12-Column Grid** system. Content is centered within a 1200px container on desktop. 

- **Desktop:** 12 columns, 24px gutters. Use large vertical section padding (120px) to ensure each project or experience phase feels distinct and significant.
- **Tablet:** 8 columns, 20px gutters.
- **Mobile:** 4 columns, 16px gutters.
- **Rhythm:** All spacing (padding, margins) must be increments of 8px to maintain a mathematically sound vertical rhythm.

## Elevation & Depth
Depth is conveyed through **Low-contrast Outlines** and **Ambient Shadows**. This design system avoids heavy shadows to maintain a professional, "flat-plus" aesthetic.

- **Level 0 (Base):** White or Light Gray (#F8FAFC) background.
- **Level 1 (Cards):** White background with a 1px border (#E2E8F0) and a very soft, diffused shadow (0px 4px 20px rgba(10, 25, 47, 0.04)).
- **Interaction:** On hover, a card's shadow should slightly intensify (0px 8px 30px rgba(10, 25, 47, 0.08)) and the border color should shift to the primary Navy.

## Shapes
The shape language is **Soft and Precise**. A 4px (0.25rem) radius is used for most UI components (buttons, input fields, cards) to provide a modern feel that is still rooted in corporate structure. 

Avoid fully rounded "pill" shapes for buttons to maintain the serious, architectural tone of the portfolio. Tags and chips may use a slightly larger 8px radius to distinguish them as secondary metadata elements.

## Components

### Project Showcase Cards
Cards should feature a 1px border and the "Level 1" shadow. Content inside includes a `headline-sm` title, `body-md` description, and a footer row of technical chips. Images/thumbnails should have a subtle top-border to separate them from the card body.

### Technical Competency Grid
Icons should be monochromatic (using the Slate Gray color). Each skill is housed in a small card with a centered icon and a `label-caps` text element.

### Structured Timeline
The experience section uses a vertical line (2px width, Slate Gray) with 12px circles at each milestone. The right side of the timeline contains the role title (`headline-sm`), company name (`body-lg` bold), and date range (`label-caps`).

### Buttons
- **Primary:** Deep Navy (#0A192F) background, White text, 4px radius. High-density padding (12px 24px).
- **Secondary:** Transparent background, 1px Deep Navy border, Deep Navy text.

### Inputs & Tags
- **Input Fields:** 1px Slate Gray border, white background. On focus, the border thickens to 2px Primary Navy.
- **Chips:** Tertiary background (#F8FAFC) with Slate Gray text. No border.