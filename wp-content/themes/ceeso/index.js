document.addEventListener('DOMContentLoaded', function () {
    //Open Menu
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function () {
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
            close[i].addEventListener('click', function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // FAQ
    const plus = document.querySelectorAll('.plus');
    plus.forEach(item => {
        item.addEventListener('click', () => {
            item.ariaExpanded = item.ariaExpanded === 'false' ? 'true' : 'false';
        })
    })

    
    //Animation au scroll
    const targets = document.querySelectorAll(".show-on-scroll");
    const callback = function (entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("motion-safe:animate-enter");
            }
        });
    };

    const observer = new IntersectionObserver(callback);

    targets.forEach(function (target) {
        target.classList.add("opacity-0");
        observer.observe(target);
    });

    

});