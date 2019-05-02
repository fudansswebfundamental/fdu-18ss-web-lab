window.onload=function () {
    /*
        var thumbnails=document.getElementById("thumbnails");
        var imgs=thumbnails.getElementsByTagName("img");
        var imgBig=document.getElementById("yyy");
        for(var i=0;i<imgs.length;i++){
            imgs[i].onclick = function(){
                imgBig.src = this.src;
            }
        }*/
    var thumbnails = document.getElementById("thumbnails").getElementsByTagName("img");
    var imgBig = document.getElementById("featured").getElementsByTagName("img");
    thumbnails[0].onclick = function () {
        // imgBig[0].src = "images/medium/5855774224.jpg";
        imgBig[0].src = "images/medium/5855774224.jpg";
        imgBig[0].title = this.title;
        div.textContent = imgBig[0].title;
    };
    thumbnails[1].onclick = function () {
        imgBig[0].src = "images/medium/5856697109.jpg";
        imgBig[0].title = this.title;
        div.textContent = imgBig[0].title;
    };
    thumbnails[2].onclick = function () {
        imgBig[0].src = "images/medium/6119130918.jpg";
        imgBig[0].title = this.title;
        div.textContent = imgBig[0].title;
    };
    thumbnails[3].onclick = function () {
        imgBig[0].src = "images/medium/8711645510.jpg";
        imgBig[0].title = this.title;
        div.textContent = imgBig[0].title;
    };
    thumbnails[4].onclick = function () {
        imgBig[0].src = "images/medium/9504449928.jpg";
        imgBig[0].title = this.title;
        div.textContent = imgBig[0].title;
    };


    var div = document.getElementsByTagName("figcaption")[0];
    div.onmouseover=function(){
        div.style.transition = "opacity 1s";
        div.style.opacity = 0.8;
    };
    div.onmouseout=function(){
        div.style.transition = "opacity 1s";
        div.style.opacity = 0;
    };
};

