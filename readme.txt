=== WP-Ad-Manager ===
Contributors: valentinas
Tags: adverts, widgets, admin, ads, advertisement, widget
Requires at least: 2.9
Tested up to: 3.1
Stable tag: 0.7.5

A complete system for handling advertising, including ad-rotation (with weights), scheduling and support for theme widgets. 

== Description ==

This is fork of Ad-minister, which was created by henrikmelin and kalstrom, but is no longer maintained. This version contains minor fixes, which makes it possible to use on WordPress 3.0x. Also it has improved install.


wp-ad-manager is a plugin that adds a easy to use WordPress management system for adverts and other static content. It features:

*	Ad-rotation (with content having different page-view percentages)
*	Schedueling (including multiple time periods)
*	Widget compatible, easily create widgets in which to put your ads
*	Track impressions and clicks of each ad
*	Statistic available in template (e.g. for advertiser, on a password protected page)
*	Optional wrapper code for each position
*	Automatic setup

== Installation ==


1. Upload the 'wp-ad-manager' folder to the '/wp-content/plugins/' directory
1. Activate the plugin through the 'Plugins' menu in the WordPress admin
1. Go to Wp-ad-manager meniu.
1. If a template have pre-installed advert positions, then they will appear under the 'Positions' tab in the 'Template positions' section. Widget positions can be created here, and once created, they wills show up in Presentation->Widgets, where they can be dragged onto a sidebar.
1. Create adverts/content under the "Create content" tab. Here you can enter the html code and also upload files, in the same manner files are uploaded for a post/page.

== Changelog ==

= 0.7.6 =
* Fixed the bug that caused fatal error if you had widgets with not-sanitized names from earlier versions of wp-ad-manager or ad-minister
* Make more validation before eval() that creates widget.
* Move all plugin data from post-meta to options table

== TODO ==

Let me know (either in the forums or in other means of communication) if you want to contribute to wp-ad-minister development. Any help (testing, UI, programming, styling, bugfixing) is appreciated.

= Things to do for next version(s) =

* Fix impressions and clicks counter (ignore bots, administrator and so on..)
* Add proper menu (submenu items instead of tabs)
* Instead of creting widgets with eval do it with one widget where you can select the position in dropdown. In fact that dropdown could have all available positions. Maybe two dropdowns, one for template positions and other for widget positions. need to think more about this though.
* Move ads to custom post type