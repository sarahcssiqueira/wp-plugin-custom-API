# Creating custom routes and endpoints for WordPress

The WordPress REST API is **more than just a set of default routes**. It is also a **tool for creating custom routes and endpoints**, and besides the existence of amazing WordPress plugins to handle the customization of WordPress REST API, like the [WP REST API Controller](https://br.wordpress.org/plugins/wp-rest-api-controller/), sometimes a few lines of code can do the same job and can be the best approach if we want to keep the number of active plugins low.

If I can do something with a few lines of code, why to install a third-party plugin?

That said, let's work!

## Where goes the code?

As usual, we could put our code on the theme's **functions.php**, preferably a child theme one, or register our own plugin. Personally, I would recommend creating our own plugin, since the goal is to guarantee the custom endpoint will continue to exist, even if for some reason we change the theme.

## Clone this repository

Clone this repository and copy/paste at your WordPress instalation on **wp-content/plugins** folder.

## Documentation

For more information, you can always refer to the [official documentation](https://developer.wordpress.org/rest-api/extending-the-rest-api/).
