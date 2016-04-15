---
title: Dirt racing going to start in utah
date: 14:55 07/11/2014
author:
  name: Tasha Maxwell
  description: "Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus."
  url: "#"
  gravatar:
  logo: x_logo.jpg
taxonomy:
    category: blog
    tag: [sport]
---
So you like blogging and want to setup and start your own blog? You just need a simple CMS that is up and running without breaking your head much? Say no more !! Welcome to the era of flat file CMS . No database, No Setup. Extract files and you are up and running.

I will be giving you an introduction to an extremely simple and powerful flatfile CMS called <a href='http://www.getgrav.org/' target='_blank'>GRAV</a> 

## So what exactly is GRAV?

GRAV is a simple yet very powerful flatfile CMS that can power all sorts of websites. It is just a matter of unzippig files and uploading them to the root directory and your very own website is up and running. It is fast, has sophisticated caching, and a light footprint for optimal performance. Content is just a simple markdown files, with no complicated databases to deal with. It has a host of <a href='http://getgrav.org/downloads/themes' target='_blank'>themes</a>, <a href='http://getgrav.org/downloads/plugins' target='_blank'>plugins</a> and ready to go <a href='http://getgrav.org/downloads/skeletons' target='_blank'>skeletons</a> that you can download.

##Where GRAV scores
* Crazy Fast
* Easy to Install, Build and Maintain
* Unlimited Extensibility
* Free and Open

##Installation
Installation with ZIP package
* Download the latest GRAV packages from the <a href='http://getgrav.org/downloads' target='_blank'>downloads</a>
* Extract the ZIP file in your webroot of your web server. eg-`~/webroot/grav`

`If you downloaded the ZIP file and then plan to move it to your webroot, please move the ENTIRE FOLDER because it contains several hidden files (such as .htaccess) that will not be selected by default. The omission of these hidden files can cause problems when running Grav.`

This is the simplest form of installation. You can check out the other forms of installation <a href='http://learn.getgrav.org/basics/installation' target='_blank'>here</a>.

##Basics
###Content Basics
The most basic folder that you have to be aware of is the `usr/pages` of your Grav install. All the user content is stored in this folder.

The foldres can be named `01.foldername`, `02.foldername` etc. The numeric part is optional but it provides a couple of things that can be handy.

Firstly, it lets you expressly define the order of your pages. For example, `01` will come before `02`, but `00` will come before `01`.

The other thing that the numeric portion of the folder name does, is explicitly inform Grav this page should be visible in the menu. It is important to note that the numeric portion up to and including the `.` will be removed from URLs.

###Adding a page
Pages in Grav are composed in `Markdown syntax`. Markdown is a formatting syntax that is written in plain text and then converted automatically to HTML. It uses very simple text symbols to indicate key HTML tags making it very easy to write without having to know the complexities of HTML. There are numerous other benefits of using Markdown including less-errors, valid markup, very readable, simple to learn, transferable, etc.

1) Navigate to your pages folder: `user/pages/` and create a new folder. In this example we will use explicit default ordering and call the folder `02.mypage`.

2) Launch your text editor and paste in the following sample code:

```
---
title: My New Page
---
# My New Page!

This is the body of **my new page** and I can easily use _Markdown_ syntax here.
```
3) Save this file in the `user/pages/02.mypage/` folder as `default.md`. This will tell Grav to render the page using the default template.

4) That is it! Reload your browser to see your new page in the menu.


That's some of the basics of GRAV cms that can get your website up and running in few minutes. For more detailed configuration and settings, check out <a href='http://learn.getgrav.org/' target='_blank'>Grav docs</a>
