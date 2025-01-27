(function($,window,undefined){
	var $allDropdowns = $();
	$.fn.dropdownHover = function(options) {
		$allDropdowns = $allDropdowns.add(this.parent());   
		return this.each(function() {
			var $this = $(this).parent(),   
				defaults = {
					delay: 50, 
					instantlyCloseOthers: true 
				}, 
				data = {delay: $(this).data('delay'), instantlyCloseOthers: $(this).data('close-others')},  
				options = $.extend(true, {}, defaults, options, data),
				timeout;    
			$this.hover(function() {    
				if(options.instantlyCloseOthers === true){
					$allDropdowns.removeClass('show'); 
					window.clearTimeout(timeout); 
					$(this).addClass('show');
					$this.find(".dropdown-menu").addClass("show");
				}
			}, function() { 
				console.log(options.delay);
				timeout = window.setTimeout(function() {    
					$this.removeClass('show');  
					$this.find(".dropdown-menu").removeClass("show");
				}, options.delay);  
			}); 
		}); 
	};  
})(jQuery, this);
if($(window).width()>992)
{
    $('.dropdown-toggle').dropdownHover(); 
}
$("a.dropdown-toggle").click(function(e) {
    if ($(window).width() > 992) {
        e.preventDefault();
        location.href = $(this).attr("href");
    } else {
        e.preventDefault();
        var classname = e.target["className"];
        if (classname == "pro_icon") {
            var parent_id = $(this).parent();
            var parentclass = parent_id.attr("class");
            if (parentclass.indexOf("show") >= 0) {
                parent_id.removeClass("show");
                parent_id.find("ul.dropdown-menu").removeClass("show");
                parent_id.find("span.pro_icon").html("+");
            } else {
                parent_id.addClass("show");
                parent_id.find("ul.dropdown-menu").addClass("show");
                parent_id.find("span.pro_icon").html("-");
            }
        } else {
            location.href = $(this).attr("href");
        }
    }
    return false;
});
jQuery(function($) {
	jQuery(".js-gallery-wrap").magnificPopup({
        delegate: "figure  a",
        type: "image",
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        }
    });			
	$("body").on("mousemove", ".related_pic img", function() {
        var th = $(this);
		$(".related_pic a").removeClass("imgdq");
		th.parent().addClass("imgdq");
		
        var src = th.attr("src");
		src = src.replace("ss.jpg", ".jpg");
		src = src.replace("s.jpg", ".jpg");
        var href = th.attr("href");
		var thiss =  $(this).parent().parent().parent().parent().parent().parent();
        var imgpro = thiss.find(".left_pics img");
        imgpro.attr("src", src);
        src = src.replace("b.jpg", ".jpg");
        thiss.find(".left_pics a").attr("href", src);
		
		if($(".item_mod").length >0){
			var txt = $(this).parent().parent().parent().find(".item_txt").html();
			$(".item_mod").html(txt);
		}
    });
	$("body").on("click", ".etw_language>ul>li>a", function() {             
        if ($(window).width() <=992) {
   			$(".etw_language>ul>li>ol").toggle();
  		}
     	return false;
    });
 	$(window).resize(function() {
     	if ($(window).width() >992) {
    		$("body").find(".etw_language>ul>li>ol").removeAttr("style","");
   		}
    });
	$("body").on("click",".showdown .shoemore",function() {
		
		var div = $(this).parent();
        var hidden = $(this).attr("data-hidden");
        if(hidden ==undefined)
        {
        	hidden = '';
        }
		if(hidden == ""){
          div.find(".showpro").show();
          $(this).attr("data-hidden","0");
		  $(this).find("i").addClass("icon-angle-up");
		  $(this).find("i").removeClass("icon-angle-down");
       }else{
           div.find(".showpro").hide();
           $(this).attr("data-hidden","");
		   $(this).find("i").addClass("icon-angle-down");
		   $(this).find("i").removeClass("icon-angle-up");
       }
    });
	$(".tableinq").each(function(i, ele) {
		var tb=$(this);
        var th=$(this).find("tr");
		th.each(function(index,el){
			var ts=$(this);
			if(index>0 && !ts.hasClass("top"))
			{
				var col=ts.attr("data-col");
				if(col==undefined)
				{
					col=tb.attr("data-col");
				}
				col=col==undefined?0:col;  
				var td=ts.find("td").eq(col);
				ts.append('<td><inquiry title="'+td.text()+'"></inquiry></td>');
			}
			else
			{
				ts.append("<td></td>")
			}
		});
    });
	 
	 $(".tableinq1").each(function(i, ele) {
		var tb=$(this);
		var col=tb.attr("data-col");
		col=col==undefined?1:col;
        var td=$(this).find("tr").eq(0).find("td");
		var newtr="<tr>";
		td.each(function(ind,el){
			var td=$(this);
			var val=$.trim(td.text());
			var colspan=td.attr("colspan");
			var inq="";
			if(ind>(col-1))
			{
				inq="<inquiry title=\""+val+"\"></inquiry>";
			}
			if(colspan!=undefined)
			{
				newtr+="<td colspan=\""+colspan+"\">"+inq+"</td>";
			}
			else
			{
				newtr+="<td>"+inq+"</td>";
			}
			
		});
		newtr+="</tr>";
		tb.append(newtr);
    });
		function init()
	 {
		if($(window).width()>767)
	 	{
			if($("#etw_top").length==0)
			{
		 		$("body").append('<div id="etw_top"><a class="icon-chevron-up"></a></div>');
		 	}
			$(document).scroll(function(){
				var scrollTop=$(document).scrollTop();
				if(scrollTop>100)
		 		{
					$("#etw_top").show();
					$('.header-top').stop().animate({height:0},30);    
				}
				else
				{
					$("#etw_top").hide();  
					$('.header-top').stop().animate({height:43},25);
				}
	 		});
		}
	 }
	 init();
	 $("body").on("click","#etw_top",function(){
		 $('html,body').animate({scrollTop:'0px'},800);
	 });
	 if ($(".owl-carousel3").length > 0) {
		$(".owl-carousel3").owlCarousel({
			 loop:true,
			 margin:10,
			 autoplay:true,
			 autoplayTimeout:3000,
			 autoplayHoverPause:true,
			 loop:true,
			 responsive:{
				 0:{
					 items:4
				 },
				 600:{
					 items:6
				 },
				 1000:{
					 items:8
				 }
			 },
 
		   });
	 } 
	 if ($(".owl-carousel2").length > 0) {
		$(".owl-carousel2").owlCarousel({
			 loop:true,
			 margin:10,
			 autoplay:false,
			 autoplayTimeout:3000,
			 autoplayHoverPause:true,
			 loop:true,
			 responsive:{
				 0:{
					 items:1
				 },
				 600:{
					 items:2
				 },
				 1000:{
					 items:3
				 }
			 },
 
		   });
	 } 
	 if ($(".owl-carousel1").length > 0) {
		$(".owl-carousel1").owlCarousel({
			 loop:true,
			 margin:10,
			 autoplay:false,
			 autoplayTimeout:3000,
			 autoplayHoverPause:true,
			 loop:false,
			 responsive:{
				 0:{
					 items:1
				 },
				 600:{
					 items:1
				 },
				 1000:{
					 items:1
				 }
			 },
 
		   });
	 } 
	 if ($(".owl-carousel").length > 0) {
       $(".owl-carousel").owlCarousel({
            loop:true,
            margin:10,
            autoplay:false,
            autoplayTimeout:3000,
		    autoplayHoverPause:true,
		    loop:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            },

          });
    } 
    var navEl = $("#header");
    $(window).scroll(function (event) {
        var scrollTop = $(window).scrollTop();
        var bodyScrollHeight = document.body.scrollHeight;//body高度
        if (scrollTop >= 67) {
            // && bodyScrollHeight >= 500
            navEl.addClass("nav-fixed");
        } else {
            navEl.removeClass("nav-fixed");
        }
    }).trigger("scroll");;// 事件立即执行一次

});
$("body").on("click", ".tab_li li", function() {
    var index = $(this).index();
    $(".tab_li li").removeClass("dq");
    $(".tab_li li").eq(index).addClass("dq");
    var h = 190;
    if (index > 0 && $(".tabfixed").length == 1) {
        h = 170;
    }
    var height = $(".protitle1").eq(index).offset().top - h;
    $("html,body").animate({scrollTop:height}, 500);
});

settab();

$(document).scroll(function() {
    if ($(window).width() > 991) {
        settab();
    }
});

function settab() {
    if ($(".tab_li").length > 0) {
        var scrollTop = $(window).scrollTop();
        var index = 0;
        var plength = $(".protitle1").length;
        for (var i = 0; i < plength; i++) {
            var n = i + 1;
            if ($(".protitle1").eq(n).length > 0) {
                var height1 = $(".protitle1").eq(i).offset().top - 180;
                var height2 = $(".protitle1").eq(n).offset().top - 180;
                if (scrollTop >= height1 && scrollTop < height2) {
                    index = i;
                    break;
                }
            } else {
                var height1 = $(".protitle1").eq(i).offset().top - 180;
                if (scrollTop >= height1) {
                    index = i;
                    break;
                }
            }
        }
        var height = $(".protitle1").eq(0).offset().top - 180;
        if (scrollTop > height) {
            $(".tab_li").addClass("tabfixed");
        } else {
            $(".tab_li").removeClass("tabfixed");
        }
        $(".tab_li li").removeClass("dq");
        $(".tab_li li").eq(index).addClass("dq");
    }
}