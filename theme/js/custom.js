gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

let smoother =  ScrollSmoother.create({
    wrapper: "#smooth-wrapper",
    content: "#smooth-content",
})

$(document).ready(function(){
    $(".accessory").mouseover(function(){
        $(".accessory").addClass("defocus");
        $(this).removeClass("defocus");
    })
    $(".accessory").mouseout(function(){
        $(".accessory").removeClass("defocus");
    })
    $(window).mousemove(function(e){
        $(".cursor").css("left",`${e.clientX}px`)
        $(".cursor").css("top",`${e.clientY}px`)
        if($(".accessory:hover").length != 0){
            $(".cursor").css("width",`250px`)
        }else{
            $(".cursor").css("width",`20px`)
        }
    })
})