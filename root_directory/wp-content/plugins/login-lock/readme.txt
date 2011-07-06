=== Login Lock ===
Contributors: wpsec
Donate link: https://wpsecurity.net/wordpress-security-login-lock/
Tags: login, security
Requires at least: 2.5
Tested up to: 3.1.3
Stable Tag: 2.2.3

Enforces strong password policies; provides emergency lockdown features; monitors login attempts; blocks hacker IP addresses; and logs out idle users.

== Description ==

Login Lock provides a number of security enhancing features: 

- Enforces strong password selection policies.
- Monitors login attempts.
- Blocks IP addresses for too many failed login attempts.
- Lets you manually unblock IP addresses at any time.
- Lets you forcibly log out all users immediately and require that they all change their passwords before logging back in.
- Lets you forcibly log out idle users after a configurable number of minutes.

= Enforce Strong Password Policies = 

- Define which types of characters must be used in passwords.
- Define the minimum required password length.
- Define how long a password is valid before it must be changed.
- Prevent users from reusing the same passwords repeatedly.
- Prevent users from choosing common passwords, includes a list of more than 3100 common passwords.

= Emergency Lock Down =

If your site is ever hacked then you probably need to make sure the intruder is forced to logout and is no longer able to log back in to your site. 

Login Lock provides an emergency "panic button" that, when used, immediately logs out all users, resets all user passwords
to a random value, and sends each user an email message informing them that they must change their password before logging
back in to your site. 

== Installation ==

1. Extract the zip file and upload all files into your plugins directory, making sure to put the files in their own unique folder.
2. Activate the plugin.
3. Go to "Settings->Login Lock" to configure the plugin features.

== Frequently Asked Questions ==

= How do I get support? =

Visit our [WordPress Security](https://wpsecurity.net " WordPress Security ") Web site and use the Contact Us page. 

= I found a bug, how do I report it? =

For the fastest response, visit our [WordPress Security](https://wpsecurity.net " WordPress Security ") Web site and use the Contact Us page.

= Can you do custom integrations? =

Yes. If you have custom login pages and/or have custom integration needs then contact us with details.

= What should I do if my site gets hacked? = 

Contact us and we'll help you get it cleaned up right away. Visit our [WordPress Security](https://wpsecurity.net " WordPress Security ") 
Web site and use the Contact Us page or call the phone number listed on our site. 

= Can you recommend any secure WordPress hosting platforms? =

Yes. Visit [RocketPress for fast, secure, managed Wordpress Hosting](https://rocketpress.me " Fast, Secure, Managed WordPress Hosting ")

== Screenshots ==

1. Login Lock configuration screen
2. Login Lock's emergency "panic button" section, useful when your site is hacked.

== Changelog ==

= 2.2.3 =
* Fixed bug where users might see an error "Fatal error: Call to undefined function login_header()" when resetting their password.

= 2.2.2 =
* Fixed bug where reseting a password didn't store the associated date

= 2.2.1 =
* Fixed bug in editing user profiles - when password isn't being changed an error occurred.


= 2.2 =
* Minor bug fix, added base functionality for notifications and future features

= 2.1 =
* Minor bug fix

== Upgrade Notice ==

= 2.2.1 =
* Fixed bug in editing user profiles - when password isn't being changed an error occurred.


= 2.2 =
* Minor bug fix, added base functionality for notifications and future features

= 2.1 =
* Minor bug fix

