window.onload = function () {
    var thumb_pictures = document.getElementById("thumbnails").getElementsByTagName("img");
    var big_picture = document.getElementById("featured").getElementsByTagName("img")[0];
    var big_figcaption = document.getElementById("featured").getElementsByTagName("figcaption")[0];
    thumb_pictures[0].onclick = function () {
        big_picture.src = "images/medium/5855774224.jpg";
        big_figcaption.innerText = "Battle"
    };
    thumb_pictures[1].onclick = function () {
        big_picture.src = "images/medium/5856697109.jpg";
        big_figcaption.innerText = "Luneburg"
    };
    thumb_pictures[2].onclick = function () {
        big_picture.src = "images/medium/6119130918.jpg";
        big_figcaption.innerText = "Bermuda"
    };
    thumb_pictures[3].onclick = function () {
        big_picture.src = "images/medium/8711645510.jpg";
        big_figcaption.innerText = "Athens"
    };
    thumb_pictures[4].onclick = function () {
        big_picture.src = "images/medium/9504449928.jpg";
        big_figcaption.innerText = "Florence"
    };
    big_picture.onmouseenter = function () {
        big_figcaption.style.transition = "1s";
        big_figcaption.style.opacity = "0.8";
    };
    big_picture.onmouseleave = function () {
        big_figcaption.style.transition = "1s";
        big_figcaption.style.opacity = "0"
    };
};

