
ShareLink
=========
**MODX Revolution extra Sharelink** allows visitors of your site to share link to the page for different social services: Twitter, FB, G+, Pininterest, Vkontakte, Odnoklassniki, Mail.ru

Requirements:
-------------

1. TV name: image, or any other for image sharing purposes.
2. jQuery 1.8.2.

Use:
----

1. Link css
2. Link jQuery 
3. Link js 
4. Call chunk
5. Enjoy

Example:
--------

```html
    <link href="[[++assets_url]]components/sharelink/css/sharelink.css" rel="stylesheet">
    <script src="assets/components/sharelink/js/sharelink.js"></script>
    <script>
        $(document).ready(function () {
    
            $('.share li span.popup').popupWindow({
                centerBrowser: 1
            });
        });
    </script>
    [[$sharelink]]
```

Author:
-------

<table>
  <tr>
    <td><img src="http://www.gravatar.com/avatar/555b37370f2e31559fc6b51c73c05f1f?s=80"></td><td valign="middle">Viktor Matushevskyi <br>MODX Webschool<br><a href="http://modx.ws">http://modx.ws</a></td>
  </tr>
</table>
