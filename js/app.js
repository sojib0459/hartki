function mes(status,title,mes,url=false){
if(status == 'ok'){
var stylep = '';
var stylep2 = 'text-align: left;';
var titlest = '<font color="black">'+title+'</font>';
}else if(status == 'er'){
var stylep = '';
var stylep2 = 'text-align: left;';
var titlest = '<font color="red">'+title+'</font>';
}else if(status == 'err'){
var stylep = 'border: 0.4vw solid;background: #fff;width: 50vw;padding: 1vw 1vw;';
var stylep2 = 'text-align:center;';
var titlest = '<font color="red">'+title+'</font>';
}


if(url==false){
var rel = ''
}else if(url=='r'){
var rel = 'setTimeout(() => window.location.assign(document.URL), 1000);'
}else{
var rel = 'setTimeout(() => window.location.assign(\''+url+'\'), 1000);'
}


$('#modal-game-container').html('<div class="modal-game-background">'+
'<div class="modal-game" style="' + stylep + '">'+
'<h2>'+titlest+'</h2>'+
'<p style="padding: 0 4vw;'+stylep2+'font-family: DIN-CondBlack, sans-serif;">'+mes+'</p>'+
'<a class="zbtn btn-primary promo__wrapper__content__btn external">'+
'<span class="">OK</span></a>'+
'</div>'+
'</div>'+
'<script>$("#modal-game-container").click(function(){$(this).addClass("out");$("body").removeClass("modal-game-active");$(this).off("click");'+rel+'});</script>'+
'');
$('#modal-game-container').removeAttr('class').addClass('five');
$('body').addClass('modal-game-active');

}

function pu(url){
window.location.href = ''+url+'';
}
    







