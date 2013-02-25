--------------------
ShareLink
--------------------
Solial share links for FB, Pininterest, Twitter, Vkontakte, Odnoklassniki, Mail.ru
--------------------
Author:  Viktor Matushevskyi <viktorminator@gmail.com>
--------------------
Requirements:
1. TV name: image, or any other for imagesharing purposes.
2. jQuery 1.8.2.
--------------------
Use:
1. Link css
2. Link jQuery 
3. Link js 
4. Call chunk
5. Enjoy
------------------------------
Example:
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
------------------------------