</body>
<script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        title: ["Arimo", "Arial", "sans-serif"],
                        body: ["Open Sans", "Arial", "sans-serif"]
                    },
                    colors: {
                        "primary": "#256EFA",
                        "secondary": "#212D3B",
                        "third": "#27323A",
                        "quarter": "#00007F"
                    }
                }
            }
        }
    </script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        //Open Menu
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
        // Close Menu
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        const plus = document.querySelectorAll('.plus');
        plus.forEach(item => {
            item.addEventListener('click', () => {
                item.ariaExpanded = item.ariaExpanded === 'false'? 'true' : 'false';
            })
        })


    });
</script>
<?php
wp_footer(); ?>
</html>