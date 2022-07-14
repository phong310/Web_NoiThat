$(document).ready(function() {
    //lệnh chạy khi load haonf tất
    // var bnt = document.getElementsByClassName("slide");
    // bnt.onclick = ShowSlides;

    // Tự động chuyển ảnh banner Top
    setInterval(function() {
        runSlide(true);
    }, 3000);

    // Tự động zoom to nhỏ ảnh banner center "Chống thấm tường"
    Changeimage();
    showSlides();
    auto();
    removeaddsp();
    sumtien();
});

// Change image every 2 seconds
var slideIndex = 1;
var i;
var slides = document.getElementsByClassName("slide_show");
var dots = document.getElementsByClassName("dot1");
showSlides(slideIndex);
auto();

function plusSlides(n) {
    showSlides(slideIndex += n);
}


function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {

    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

function auto() {
    var i;
    var slides = document.getElementsByClassName("slide_show");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(auto, 5000); // Change image every 2 seconds
}



//-----End Sửa đoạn này sử dụng Next back, ko phải dot --------------/

//------- Tự động zoom to nhỏ ảnh banner giữa trang ----------------/
var chuyendau = 1;

function Changeimage() {
    $('.chuyendong').stop(true);

    if (chuyendau == 1) {
        chuyendau = 2;
        sizedown();
    } else {
        chuyendau = 1;
        sizeup();
    }

}

function sizedown() {
    $('.chuyendong').animate({
            width: '200px',
            
            opacity: 1
        },
        2000,
        Changeimage
    );
}

function sizeup() {
    $('.chuyendong').animate({
            width: '180px',
            
            opacity: 1
        },
        2000,
        Changeimage
    );
}
//------- End Tự động zoom to nhỏ ảnh banner giữa trang ----------------/
function addsp() {
    var setheight = document.getElementById("setheight");
    setheight.style.height = "1600px";
    var btnadd = document.getElementById("addsp");
    btnadd.style.display = "block";
}

function removeaddsp() {
    var setheight = document.getElementById("setheight");
    setheight.style.height = "840px";
    var btnadd = document.getElementById("addsp");
    btnadd.style.display = "none";
}
//tính tổng tiền

function sumtien()
{

    var soluong=document.getElementById("soluong").value;
    var soluong2=document.getElementById("soluong2").value;
 var ketqua=(soluong*2450000*2 +(soluong2*2450000*2))*0.9;
document.getElementById("sum").innerHTML = ketqua.toString()+"đ";
}
function showgia(){
    var gia1=document.getElementById("3l");
    var gia2=document.getElementById("18l");
    gia1.style.display="block";
    gia2.style.display="none";
    }
    function showgia2(){
        var gia1=document.getElementById("3l");
        var gia2=document.getElementById("18l");
        gia2.style.display="block";
        gia1.style.display="none";
    }
// covanao
function showcovan()
{
    var covan =document.getElementById("covan");
    var mess=document.getElementById("cvan");
    covan.style.display="none";
    mess.style.display="block";
}
function outcovan()
{
    var covan =document.getElementById("covan");
    var mess=document.getElementById("cvan");
    mess.style.display="none";
    covan.style.display="block";
}
