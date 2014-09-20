$(document).ready(function(){
    var air =$(".air"),
         l_left = parseInt(air.css("left")),
    left = $(document).width() - 150,
        dur = 9000;
    function move_air(){
    air.css("left",l_left +"px").animate({
        "right" :  "50px",
        left : left +"px"
        
        },dur ,"linear",function(){
           air.css("left",l_left +"px").animate({
                "right" :  "50px",
                left : left +"px"
               },dur,"linear", move_air);
            
        });//end of animate
        
    }
    move_air();
                
               var cloud =$(".cloudy"),
         l_right = parseInt(cloud.css("right")),
    right = $(document).width() - 150,
        dur = 9000;
    function move_cloud(){
    cloud.fadeOut(100).fadeIn(100).css("right",l_right +"px").animate({
        
        right : right +"px"
        
        },dur ,"linear",function(){
         cloud.fadeOut(100).fadeIn(100).css("right",l_right +"px").animate({
               
        right : right +"px"
               },dur,"linear", move_cloud);
            
        });//end of animate
        
    }
    
    move_cloud();     
           
                 var boot =$(".boat"),
         l_bottom = parseInt(boot.css("bottom")),
                     newbottom =50,
    top = $(document).height() -  l_bottom,
                     nw = $(document).height() -newbottom ,
        ndur = 2000;
    function move_boot(){
    boot.fadeOut(10).fadeIn(10).css({
        top : top +"px"
        }).animate({
          top : nw +"px",
        
        
        },ndur ,"linear",function(){
         boot.fadeOut(10).fadeIn(10).css({
        top : top +"px"
        }).animate({
               top : nw +"px"
               },ndur,"linear", move_boot);
            
        });//end of animate
        
    }
    
    move_boot();  
    
    
});//end of ready