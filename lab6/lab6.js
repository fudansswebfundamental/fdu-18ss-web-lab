window.onload = function () {
    images = document.getElementById("thumbnails").getElementsByTagName("img");//数组
    bigimg = document.getElementById("featured").getElementsByTagName("img")[0];
    figcaption = document.getElementsByTagName("figcaption")[0];
    function click() {
        images[0].onclick = function () {
            bigimg.src = "images/medium/5855774224.jpg";
            bigimg.title = "Battle";
            figcaption.innerText = "Battle";
        };
        images[1].onclick = function () {
            bigimg.src ="images/medium/5856697109.jpg";
            bigimg.title = "Luneburg";
            figcaption.innerText = "Luneburg";
        };
        images[2].onclick = function () {
            bigimg.src ="images/medium/6119130918.jpg";
            bigimg.title = "Bermuda";
            figcaption.innerText = "Bermuda"
        };
        images[3].onclick = function () {
            bigimg.src ="images/medium/8711645510.jpg";
            bigimg.title = "Athens";
            figcaption.innerText = "Athens"
        };
        images[4].onclick = function () {
            bigimg.src ="images/medium/9504449928.jpg";
            bigimg.title = "Florence";
            figcaption.innerText = "Athens"
        };
    }

    function hover() {
        figcaption.style.transition = "opacity , 1s"
        bigimg.onmouseover = function (){
            figcaption.style.opacity = 0.8;
        };
        bigimg.onmouseout = function (){
            figcaption.style.opacity = 0;
        }
    }
    click();
    hover()
};