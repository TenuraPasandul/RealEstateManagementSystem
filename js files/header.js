<script>
        $(function () { 
            $(window).scroll(function () {
                if ($(this).scrollTop() > 1000) { 
                    $('.header .navbar.nav-1 .flex .logo img').attr('src','./images/logo.png');
                }
                if ($(this).scrollTop() < 1000) { 
                    $('.header .navbar.nav-1 .flex .logo img').attr('src','./images/icon-06.png');
                }
            })
        });
    </script>
