<script>
        function burgerMenu() {
            var menu = document.getElementById("menu");
            if (menu.style.opacity == 0) {
                menu.style.opacity = 1;
            } else {
                menu.style.opacity = 0;
            }
        }


        /*function closeMenu{
            var menu = document.getElementById("menu");
            menu.style.opacity = O;

        }*/

        //we gonna catch the selected element (aka menu);
        // by using some javascript methods :)
        // 'n we store it into a variable called toggleMenuButton'
        var btn = document.getElementById("toggleMenuButton");

        // then, we add some event listeners on it (in order to catch user events like "click")
        // when we click on the selected button, it' s gonna call the burgermenu function, that's what we call a "callback function".

        btn.addEventListener("click", burgerMenu);
        //btn.addEventListener("click", closeMenu)
        //btn.removeEventListener("click", burgerMenu);
    </script>