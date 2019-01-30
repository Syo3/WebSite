
console.log("test");
var deg = 0;


$(window).on("load",function(){

    setInterval(function(){
		//$('img').animate({transform:"rotate(180deg)"},10);
        deg += 1;
        $("img").css({"transform":"rotate("+deg+"deg)"});
	},10);
});
