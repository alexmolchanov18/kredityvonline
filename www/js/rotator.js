   $(document).ready(function(){function e(){$(".top-page-nav").removeClass("visible"),$("html, body").removeClass("no-scroll")}$(".top-page-nav-open").on("click",function(){$(".top-page-nav").addClass("visible"),$("html, body").addClass("no-scroll")}),$(".top-page-nav-close").on("click",function(){e()}),$(".top-page-nav-list a[href*=\\#]").on("click",function(t){t.preventDefault(),$("html,body").animate({scrollTop:$(this.hash).offset().top},1e3),e()}),$(".main-text").on("click",".main-text-item-more",function(e){e.preventDefault(),$(this).toggleClass("selected").siblings(".main-item-text-hidden").toggleClass("visible")})
                               $("#subscribed-fixed .panel-heading").click(function() {
        $("#subscribed-fixed .panel-body").toggle();
         $(this).find('i').toggleClass('fa-angle-down fa-angle-up')
    });

    //modal PopUp
    $(document).ready(function(){
 var modalOnlyOnce = true;
        $("body,html").mouseleave(function(e) {
            if (modalOnlyOnce && e.offsetY <= 10) {
                // console.log(e);
                $(".b-popup").slideDown();
                modalOnlyOnce = false;
            }
        });
        $('.b-popup-content .close').click(function(e){
            $('.b-popup').hide();
        })
    });
    
    
    var x = $(window).width();
    if(x>767) {
        $('#subscribed-content').hide();
    } else {
        $('#subscribed-content').show();
    }


$(document).scroll(function() {
    var x = $(window).width();
    var y = $(this).scrollTop();
    if(x>767) {
        $('#subscribed-content').hide();
        if (y > 200) {
            $('#subscribed-fixed').slideDown();
        } else {
            $('#subscribed-fixed').slideUp();
        }
    } else {
        $('#subscribed-fixed').hide();
        $('#subscribed-content').show();
    }

});
                               });
                               
                               
                               
// add CID to tid2
function getCID()
{
    var match = document.cookie.match('(?:^|;)\\s*_ga=([^;]*)');
    var raw = (match) ? decodeURIComponent(match[1]) : null;
if (raw)
{
match = raw.match(/(\d+\.\d+)$/);
}
var gacid = (match) ? match[1] : null;
if (gacid)
{
    return(gacid);
}
}

var url = new URL(window.location.href);
var promo1 = url.searchParams.get("promo");
var promo2 = url.searchParams.get("q");

if(promo1 !== null) { promo = promo1; }
if(promo2 !== null) { promo = promo2; }
if(!promo1 && !promo2) {
    promo = '';
}

var cid = getCID();
                     