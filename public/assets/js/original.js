/*
 * classie - class helper
 *
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

 function classReg( className ) {
    return new RegExp("(^|ﾂ･ﾂ･s+)" + className + "(ﾂ･ﾂ･s+|$)");
}
var hasClass, addClass, removeClass;
if ( 'classList' in document.documentElement ) {
    hasClass = function( elem, c ) {
        return elem.classList.contains( c );
    };
    addClass = function( elem, c ) {
        elem.classList.add( c );
    };
    removeClass = function( elem, c ) {
        elem.classList.remove( c );
    };
}
else {
    hasClass = function( elem, c ) {
        return classReg( c ).test( elem.className );
    };
    addClass = function( elem, c ) {
        if ( !hasClass( elem, c ) ) {
            elem.className = elem.className + ' ' + c;
        }
    };
    removeClass = function( elem, c ) {
        elem.className = elem.className.replace( classReg( c ), ' ' );
    };
}
function toggleClass( elem, c ) {
    var fn = hasClass( elem, c ) ? removeClass : addClass;
    fn( elem, c );
}
var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};
// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}
// --- classie - class helper ---

function artCount(){
    var count = 0;
    $.ajax({
        type: "POST",
        url: "/ajax/count",
        dataType:"json",
        async: false,
        success: function(data, dataType){
            count = data;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
        }
    });
    return count;
}

function paging(page) {
    $.ajax({
        type: "POST",
        url: "/ajax/paging",
        dataType:"json",
        data: {"page": page},
        success: function(data, dataType){
            var target = $("#target");
            var html = "<div class='col-md-12 stealth' id='target'><div class='row' id='nowpage'>";
            for(i=0;data.length > i; i++){
                html = html + "<div class='col-md-6 col-sm-6'><article class='blog-teaser'><header><img src='http://heyg.pw/assets/img/blog/"+ data[i].img +"_small.gif'><h3><a href='blog?id="+ data[i].article_id +"'>"+ data[i].title +"</a></h3><span class='meta'>"+ data[i].created_at +"</span><hr></header><div class='body'>"+ data[i].digest +"</div><div class='clearfix'><a href='blog?id="+ data[i].article_id +"' class='btn btn-heyg-one'>Read more</a></div></article></div>";
            }
            html = html + "</div></div>";
            $('#blogMain').prepend(html);
            $('#target').animate({opacity: 1},{duration:1000});
            $("#blogMain").css("min-height",$("#nowpage").height()+70);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
        }
    });
}

function likebad(type){
    $.ajax({
        type: "POST",
        url: "/ajax/likebad",
        dataType:"json",
        data: {"type": type},
        success: function(data, dataType){
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
        }
    });
}

$(function(){
    var page = 1;
    var count = artCount();
    var likeflag = false;
    var badflag = false;
    $('#newer').click(function(){
        $('#target').animate({opacity: 0},{duration:1000,
            complete: function(){
                $('#target').remove();
                page = page + 1;
                if(count < (page-1)*5)page = 1;
                paging(page);
            }
        });
    });
    $('#older').click(function(){
        $('#target').animate({opacity: 0},{duration:1000,
            complete: function(){
                $('#target').remove();
                page = page - 1;
                if(page <= 0)page=Math.ceil(count/4);
                paging(page);
            }
        });
    });

    $('#apply').click(function(){
        var val = $('[name=category]').val();
        $.ajax({
            type: "POST",
            url: "/ajax/category",
            dataType:"json",
            data: {"category": val},
            success: function(data, dataType){
                var target = $("#result");
                var html = "";
                for (var i=0; i<data.length; i++) {
                    if(i%2 == 0){
                        html += "<article class='comment'><header class='clearfix'><img class='avatar' src='http://heyg.pw/assets/img/blog/"+data[i].img+"_small.gif'></div>";
                    }else{
                        html += "<article class='comment reply'><header class='clearfix'><img class='avatar' src='http://heyg.pw/assets/img/blog/"+data[i].img+"_small.gif'></div>";
                    }
                    html += "<div class='meta'><h3><a href='/blog?id="+data[i].article_id+"'>"+data[i].title+"</a></h3><span class='date'>"+data[i].date+"</span></div></header><div class='body'>"+data[i].digest+"</div></article>";
                };
                $("#result").children("").remove();
                $('#result').prepend(html);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
            }
        });
});
$('#likebt').click(function(){
    if(likeflag == false){
        $('#liketxt').html("取消");
        likeflag = true;
    }else{
        $('#liketxt').html("Like");
        likeflag = false;
    }
});
$('#badbt').click(function(){
    if(badflag == false){
        $('#badtxt').html("取消");
        badflag = true;
    }else{
        $('#badtxt').html("Bad");
        badflag = false;
    }
});


$(function(){
    $('a[href^=#]').not('.tab').not('.mobilenav').click(function(){
        var speed = 1000;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});

$(window).load(function(){
    jQuery("form").validationEngine();
    $("#blogMain").css("min-height",$("#nowpage").height()+70);
    $(window).resize(function(){
        $("#blogMain").css("min-height",$("#nowpage").height()+70);
    });
});
});


!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");