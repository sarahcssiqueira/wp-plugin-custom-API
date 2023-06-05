# WordPress Custom API REST

Although the existence of amazing plugins to handle with the customizatioation of WordPress API Rest, like your own endpoints, sometimes, a a few lines of code are the best approach if we want to keep the number of plugins low.

My rule: if I can do somethng with few lines of code, why to install a third party plugin?

## Where goes the code?

As usual, you can put your code on functions.php of your theme, preferenciably a child teme one (unless you have created the theme), or register your own plugin.

In this case, I would recomend to create your own plugin, as you want your custom endpoint continues to exhisting even you change the theme.

https://developer.wordpress.org/rest-api/extending-the-rest-api/

