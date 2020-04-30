# **Wordpress Template for Professional resume profile and blogging**

- Author: Adriano Garruba [Website](https://adrianogarruba.com/)
- Technologies used: HTML, Framework Bootstrap, CSS, PHP for WordPress
- Developed on WordPress 5.4
- Release version 1.0 date 1/05/2020
- License URI: http://www.gnu.org/licenses/gpl-2.0.html
- This theme, like WordPress, is licensed under the GPL. Use it to make something cool, have fun, and share what you've learned with others.

*Please feel free to use this code (No copyright applied) but any issue occurred will be at your responsibility. I am open to idea on review of this code, highly appreciate for my personal development.

It is possible to find the static version [Git Repository](https://github.com/adrianogarru/Template-portfolio-resume-in-Bootstrap)


## **Main Structure of the Theme called in index.php:**

### 1. Header (header.php) (Customize parts)

  - On Site Title: name surname **suggested*.
  - On Tag line: Profession title **suggested*.
  - On Color: Not still supported.
  - On Header Image: Profile picture (example LinkedIn) size suggested to be close to: **220×220 px**.
  - On Menu: Possibility to configure, suggested to set one static page (resume/home) and blog (if needed).
  - On Widget "Social links": Add social links (Facebook, LinkedIn) via HTML code, Refer to topic **#Social Links.**

### 2. Content (content.php) (main part of Theme customize parts)

  - Content: Preview of Blog with feature Image if included.
  - Widget Sidebar: To add widgets on the right column of the template.
 
### 3. Footer (content.php) (Bottom part of the Theme customize parts)

  - Static info about who developed the Theme.
  - Widget Footer: To add widgets on the bottom part.

### 4. Others Templates parts:

  - Comments.php: It contains the template part of comments section.
  - 404.php: Error page custom by a picture of the guy build this theme lost in one pub :-)
  - Page.php: Preview of post.
  - Single.php: Where the post is sit.
  - Style.css: custom style CSS.
  - Front-page: Static part of the template and where is located the CV/Resume/Portfolio structure.
  - Template social widget.html: It's a list of the social icon that can be implemented via widget Social Links.

### 5. Functions:

      - Navbar Function
      - Image Support For post Thumbnails
      - Excerpt Length Control - Limit of showing words in the preview post.
      - Function Image Theme Support
      - Theme Support Header Image
      - Widget Sidebar right
      - Widget Social Links
      - Widget Footer

## **Instruction for best practice**

This template has been thinking for have as a basic home page as statics front and second page as blog

 - Install WordPress and upload the theme and active it, installation file **Wp-theme-online-resume-blog**
 - On Page: create 2 pages, one called Home and other Blog.
 - On path: **Appearance --> Customize --> Site identity:** (name and surname in site title and in tag profession).
 - On path: **Appearance --> Customize --> Header Image:** (Choose your profile image its suggested size 220×220 PX).
 - On path: **Appearance --> Customize --> Menu:** (Create a new menu and add the 2 page created before home and blog).
 - On path: **Setting --> Reading:** Set a Static Page, page Home will be statics and Blog page with posts.
 - On path: **Appearance --> Widget:** Add a custom HTML code in widget Social Links (find more on below section Social Links)
 - **{Main Stage} On file "front-page.php"**: it is needed to adapt your information (It should be performed via HTML editor or via WordPress Theme Editor)(Basic knowledge of HTML are required).

## **Social Links**

As mention before in order to add social icons, please find the code on the file "template social widget.html"
List of Social Icons you can find:

- GitHub
- Facebook
- LinkedIn
- Stack Overflow
- Mail

Insert the tag <UL> it's needed to call the proper style, best pratics to not use more than 4 icons.
Icons itself and style are called internally on path assets/fontawesome.
Feel free to personalize with different icons from [FontAwesome](https://fontawesome.com/).

