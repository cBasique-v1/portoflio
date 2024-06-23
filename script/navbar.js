(function () {
    "use strict";

    document.addEventListener("DOMContentLoaded", initialiser);

    function initialiser() {
        let resizer = document.querySelector(".resizer");
        let sidebar = document.querySelector(".sidebar");
        let links = document.querySelectorAll(".text");

        // Récupérer la largeur de la sidebar à partir du session storage
        let savedWidth = sessionStorage.getItem('sidebarWidth');
        if (savedWidth) {
            sidebar.style.width = `${savedWidth}px`;

            // Cacher les liens si la largeur enregistrée est inférieure ou égale à 200px
            if (savedWidth <= 200) {

                for (let link of links) {
                    link.style.display = "none";
                }
            }
        }

        initResizerFn(resizer, sidebar, links);
    }

    function initResizerFn(resizer, sidebar, links) {
        // track current mouse position in x
        let horizontalPosition, actualWidth;

        function resizerPressed(evt) {
            horizontalPosition = evt.clientX;

            let sideBarWidth = window.getComputedStyle(sidebar).width; //recupere la largeur de la sidebar
            actualWidth = parseInt(sideBarWidth, 10);

            document.addEventListener("mousemove", resizerMove);
            document.addEventListener("mouseup", resizerLeave);
        }

        function resizerMove(evt) {
            let distanceSouris = evt.clientX - horizontalPosition; //distance parcourue par la souris
            let newWidth = actualWidth + distanceSouris; // largeur complète

            //empeche ma sidebar de dépasser 350px et redimensionne si plus petit
            if (newWidth < 288 && newWidth >= 90) {
                sidebar.style.width = `${newWidth}px`;
                
                // Enregistrer la nouvelle largeur dans le session storage
                sessionStorage.setItem('sidebarWidth', newWidth);
            }

            //pour cacher les liens si c'est plus petit que 230px
            if (newWidth <= 200) {

                for (let link of links) {
                    link.style.display = "none";
                }

            } else {

                for (let link of links) {
                    link.style.display = "block";
                }

            }
        }

        function resizerLeave() {
            // remove event mousemove && mouseup
            document.removeEventListener("mouseup", resizerLeave);
            document.removeEventListener("mousemove", resizerMove);
        }

        resizer.addEventListener("mousedown", resizerPressed);
    }

}());
