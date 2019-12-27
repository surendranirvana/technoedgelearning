(function($){var w=window,doc=document,maxTopPos,minTopPos,pastStartOffset,objFartherThanTopPos,objBiggerThanWindow,newpos,defaults={duration:200,lockBottom:true,delay:0,easing:'linear',stickToBottom:false,cssTransition:false},supportsTransitions=(function(){var i,s=doc.createElement('div'),v=['ms','O','Moz','Webkit'],prop='transition';if(s[prop]=='')return true;prop=prop.charAt(0).toUpperCase()+ prop.slice(1);for(i=v.length;i--;)
if(s[v[i]+ prop]=='')
return true;return false;})(),Sticky=function(settings,obj){this.settings=settings;this.obj=$(obj);};Sticky.prototype={init:function(){if(this.obj.data('_stickyfloat'))
return false;var that=this;this.onScroll=function(){that.rePosition()};$(w).ready(function(){that.rePosition(true);$(w).on('scroll.sticky, resize.sticky',that.onScroll);});this.obj.data('_stickyfloat',that);},rePosition:function(quick,force){var $obj=this.obj,settings=this.settings,duration=quick?0:settings.duration,wScroll=w.pageYOffset||doc.documentElement.scrollTop,wHeight=w.innerHeight||doc.documentElement.offsetHeight,objHeight=$obj[0].clientHeight;$obj.stop();if(settings.lockBottom)
maxTopPos=$obj[0].parentNode.clientHeight- objHeight- settings.offsetBottom;if(maxTopPos<0)
maxTopPos=0;pastStartOffset=wScroll>settings.startOffset;objFartherThanTopPos=$obj.offset().top>(settings.startOffset+ settings.offsetY);objBiggerThanWindow=objHeight<wHeight;if(((pastStartOffset||objFartherThanTopPos)&&objBiggerThanWindow)||force){newpos=settings.stickToBottom?wScroll+ wHeight- objHeight- settings.startOffset- settings.offsetY:wScroll- settings.startOffset+ settings.offsetY;if(newpos>maxTopPos&&settings.lockBottom)
newpos=maxTopPos;if(newpos<settings.offsetY)
newpos=settings.offsetY;else if(wScroll<settings.startOffset&&!settings.stickToBottom)
newpos=settings.offsetY;if(duration<5||(settings.cssTransition&&supportsTransitions))
$obj[0].style.top=newpos+'px';else
$obj.stop().delay(settings.delay).animate({top:newpos},duration,settings.easing);}},update:function(opts){if(typeof opts==='object'){if(!opts.offsetY||opts.offsetY=='auto')
opts.offsetY=getComputed(this.obj).offsetY;if(!opts.startOffset||opts.startOffset=='auto')
opts.startOffset=getComputed(this.obj).startOffset;this.settings=$.extend({},this.settings,opts);this.rePosition(false,true);}
return this.obj;},destroy:function(){$(window).off('scroll.sticky, resize.sticky',this.onScroll);this.obj.removeData();return this.obj;}};function getComputed($obj){var p=$obj.parent(),ob=parseInt(p.css('padding-bottom')),oy=parseInt(p.css('padding-top')),so=p.offset().top;return{startOffset:so,offsetBottom:ob,offsetY:oy};}
$.fn.stickyfloat=function(option,settings){return this.each(function(){var $obj=$(this);if(typeof document.body.style.maxHeight=='undefined')
return false;if(typeof option==='object')
settings=option;else if(typeof option==='string'){if($obj.data('_stickyfloat')&&typeof $obj.data('_stickyfloat')[option]=='function'){var sticky=$obj.data('_stickyfloat');return sticky[option](settings);}
else
return this;}
var $settings=$.extend({},defaults,getComputed($obj),settings||{});var sticky=new Sticky($settings,$obj);sticky.init();});};})(jQuery);



/*jQuery(function($) {
jQuery('.course-aside .course').stickyfloat({ duration: 400, offsetY:120}); 
 });*/
