=== Prospress ===
Contributors: tonyest
Tags: auction
Requires at least: 3.1
Tested up to: 3.2
Stable tag: 1.1.3
License: GPLv2 or later

An old auction plugin. No longer actively developed or maintained.

== Description ==

The Prospress plugin is no longer maintained or supported.

If you're a developer not afraid to get your hands dirty, you can find the Prospress codebase on [WordPress.org SVN repository](http://plugins.svn.wordpress.org/prospress/).

Searching for Prospress? You may be looking for [Prospress, Inc.](http://prospress.com/).

== Installation ==

You are advised not to install this plugin. If you're a developer not afraid to get your hands dirty, you can find the Prospress codebase on [WordPress.org SVN repository](http://plugins.svn.wordpress.org/prospress/).


== Frequently Asked Questions ==

= Why is this still here? =

The life of Prospress has ended, but the codebase remains free. This information and the [WordPress.org SVN repository](http://plugins.svn.wordpress.org/prospress/) are here for posterity and any willing adventurers seeking to journey through the Prospress codebase.


== Screenshots ==

1. **Add an Auction** - Publishing an auction is just like publishing a post, except you also add a start price and end date.
2. **Give Feedback** - When an auction completes, the two parties can provide feedback for each other.
3. **Set Capabilities** - All registered users can make bids & payments, but administrators choose who can publish & edit auctions.


== Changelog ==

= 1.1.3 =
* Fixed bug in taxonomy template
* Fixing typo in feedback column headers

= 1.1.2 =
* Fixed bug affecting themes which do not support post thumbnails
* Fixed bug in bid logic for bids with decimals
* Themes can now specify that they support Prospress to prevent Prospress performing any view related functions
* Changing how templates are loaded

= 1.1.1 =
* Fixed end time bug in WordPress 3.1

= 1.1 =
* PayPal Buy Now option available
* Live countdown in final 24 hours.
* Hooks added in preparation for Cubepoints and other plugins to interface.
* Changed the way prospress redirects the index template to fix problems with pre-existing pages with the same slug.
* Simplified Prospress capabilities.
* Taxonomies are now enabled by default.
* Added Hello World Auction on first install.
* Fixed bug in sorting taxonomies.
* Fixed link-tree for Taxonomies so as not to display empty Taxonomies.
* Changed Prospress settings to use WordPress standard register_settings() format. New method is simpler and more extensible.
* Assorted bug fixes.

= 1.0.2 =
* Fixed bug causing Price & Winning Bidder columns to display on the admin page for all custom post type

= 1.0.1 =
* Bug on bid form ajax fixed
* Bids are now a custom post type (and all bids are visible to admin)
* Internationalization fixes
* Market system now correctly uses an internal, non-localized, name
* For the full commit log, see here: https://github.com/Prospress/Prospress/commits/v1.0.1

= 1.0 =
* SSL & credit card payments (for USD only) now supported
* Prospress Admin Links widget now displays links dependant on user's capabilities
* Reduced the number of available currencies due to lack of support in PayPal
* Fixed bug preventing invoices being generated on manual post completion
* Feedback now a custom post type
* Markup fixes to Invoice pages
* For the full commit log, see here: https://github.com/Prospress/Prospress/commits/v1.0

= 0.2 =
* Beta 2 
* Now prevents activation on WP < 3.0 and PHP < 5.0
* Modified payment tables & internal semantics
* Post end time function now displays countown when post ending within a week
* New widget for quick links to backend tasks (adding an Auction, viewing bids etc.)

= 0.1 =
* Initial beta release. 


== Upgrade Notice ==

= 1.1.3 =
Important upgrade to fix bug in taxonomy template.

= 1.1.2 =
Important upgrade to fix bid logic bug and a bug affecting themes which do not support thumbnails.

= 1.1.1 =
Important upgrade to fix end time bug in WordPress 3.1

= 1.1 =
New version with buy now, bug fixes and more. 

= 1.0.2 =
Upgrade to fix bug displaying Price & Winning Bidder columns on the admin page for all custom post types.

= 1.0.1 =
Please upgrade to fix bid form & localization bugs. This release also changes the bids page to show the site admin all bids.

= 1.0 =
The first non-beta release ready for prime-time - enjoy! Please note, this is a breaking upgrade. If you need to preserve feedback from a beta installation, post in the prospress.org/forums/ to request an upgrade script.

= 0.2 =
Upgrade to fix bug when activating on WP < 3.0 or PHP < 5.0, ensure Prospress plays nice with other plugins and get new widgets.
