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

function paging(page,ev) {
    $.ajax({
        type: "POST",
        url: "/ajax/paging",
        dataType:"json",
        data: {"page": page},
        success: function(data, dataType){
            var target = document.getElementById("target");
            var html = "<div class='col-md-12' id='target'><div class='row target' id='nowpage'>";
            for(i=0;data.length > i; i++){
                html = html + "<div class='col-md-6 col-sm-6'><article class='blog-teaser'><header><img src='http://heygblog.local/assets/img/"+ data[i].category +".png'><h3><a href='blog?id="+ data[i].article_id +"'>"+ data[i].title +"</a></h3><span class='meta'>"+ data[i].created_at +"</span><hr></header><div class='body'>"+ data[i].body +"</div><div class='clearfix'><a href='blog?id="+ data[i].article_id +"' class='btn btn-heyg-one'>Read more</a></div></article></div>";
            }
            html = html + "</div></div>";
            $('#blogMain').prepend(html);
            if(ev == "next"){
                setTimeout(classie.add,100,document.getElementById("target"),"next-effect2");
            }else if(ev == "back"){
                setTimeout(classie.add,100,document.getElementById("target"),"back-effect2");
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
        }
    });
}

$(function(){
    var page = 1;
    var count = artCount();
    $('#newer').click(function(){
        classie.add(document.getElementById("target"),"next-effect1");
        setTimeout(function(){
            document.getElementById("target").remove();
            page = page + 1;
            if(count < page*4)page = 1;
            paging(page,"next");
        },2400);
    });
    $('#older').click(function(){
        classie.add(document.getElementById("target"),"back-effect1");
        setTimeout(function(){
            document.getElementById("target").remove();
            page = page - 1;
            if(page <= 0)page=count/4;
            paging(page,"back");
        },2400);
    });
});

!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");