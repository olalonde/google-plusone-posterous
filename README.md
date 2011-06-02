See [Adding Google's +1 (plus one) button to your Posterous](http://syskall.com/adding-googles-1-plus-one-button-to-your-post).

This is a small script to add Google +1 to a Posterous theme using an iframe. It can also be used wherever Javascript isn't allowed but iframes are.

# Install #

Upload index.php to a PHP server.

# Parameters #

- url: URL to share
- size (optional): size of button (standard, small, medium, tall)

# Usage #

## Tall button for Posterous ###

    <iframe src="http://.../?url={Permalink}&size=tall" marginheight="0" marginwidth="0" frameborder="0" scrolling="no" style="border:0;width:50px;height:60px;"></iframe>
    
## Standard button for Posterous ###
    
    <iframe src="http://.../?url={Permalink}" marginheight="0" marginwidth="0" frameborder="0" scrolling="no" style="border:0;width:110px;height:30px;"></iframe>

# Demo #

[Olivier Lalonde's Posterous](http://www.syskall.com)
