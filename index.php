<?php
$uri  = '/game/dahaohao/dapic/';
$name = empty($_GET['name']) ? '三' : htmlspecialchars($_GET['name']);
$pic  = $uri . (empty($_GET['pic']) ? 'haohao.png' : htmlspecialchars($_GET['pic']));
?>
<html>
<head>
    <title>我是你的小呀小<?php echo $name?>,怎么打你都不嫌多！</title>
    <meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, width=device-width,target-densitydpi=device-dpi"/>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript">
    var i = new Date().getTime() % 5;
	if(i < 3){
		document.write('<script type="text/javascript" src="createjs.js"><\/script>');
	}
	else{
		document.write('<script type="text/javascript" src="createjs.js"><\/script>');
	}
		var isDesktop = navigator['userAgent'].match(/(ipad|iphone|ipod|android|windows phone)/i) ? false : true;
    	var fontunit        = isDesktop ? 20 : ((window.innerWidth>window.innerHeight?window.innerHeight:window.innerWidth)/320)*10;
    	document.write('<style type="text/css">'+
    		'html,body {font-size:'+(fontunit<30?fontunit:'30')+'px;}'+
    		(isDesktop?'#welcome,#GameTimeLayer,#GameLayerBG,#GameScoreLayer.SHADE{position: absolute;}':
    		'#welcome,#GameTimeLayer,#GameLayerBG,#GameScoreLayer.SHADE{position:fixed;}@media screen and (orientation:landscape) {#landscape {display: box; display: -webkit-box; display: -moz-box; display: -ms-flexbox;}}')+
    		'</style>');
    </script>
    <style type="text/css">
    body {font-family: "Microsoft Yahei","\5fae\8f6f\96c5\9ed1", "Helvetica Neue", Helvetica, STHeiTi, sans-serif; margin: 0; padding: 0;}
    .loading {background-image: url("data:image/gif;base64,R0lGODlhJQAlAJECAL3L2AYrTv///wAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQFCgACACwAAAAAJQAlAAACi5SPqcvtDyGYIFpF690i8xUw3qJBwUlSadmcLqYmGQu6KDIeM13beGzYWWy3DlB4IYaMk+Dso2RWkFCfLPcRvFbZxFLUDTt21BW56TyjRep1e20+i+eYMR145W2eefj+6VFmgTQi+ECVY8iGxcg35phGo/iDFwlTyXWphwlm1imGRdcnuqhHeop6UAAAIfkEBQoAAgAsEAACAAQACwAAAgWMj6nLXAAh+QQFCgACACwVAAUACgALAAACFZQvgRi92dyJcVJlLobUdi8x4bIhBQAh+QQFCgACACwXABEADAADAAACBYyPqcsFACH5BAUKAAIALBUAFQAKAAsAAAITlGKZwWoMHYxqtmplxlNT7ixGAQAh+QQFCgACACwQABgABAALAAACBYyPqctcACH5BAUKAAIALAUAFQAKAAsAAAIVlC+BGL3Z3IlxUmUuhtR2LzHhsiEFACH5BAUKAAIALAEAEQAMAAMAAAIFjI+pywUAIfkEBQoAAgAsBQAFAAoACwAAAhOUYJnAagwdjGq2amXGU1PuLEYBACH5BAUKAAIALBAAAgAEAAsAAAIFhI+py1wAIfkEBQoAAgAsFQAFAAoACwAAAhWUL4AIvdnciXFSZS6G1HYvMeGyIQUAIfkEBQoAAgAsFwARAAwAAwAAAgWEj6nLBQAh+QQFCgACACwVABUACgALAAACE5RgmcBqDB2MarZqZcZTU+4sRgEAIfkEBQoAAgAsEAAYAAQACwAAAgWEj6nLXAAh+QQFCgACACwFABUACgALAAACFZQvgAi92dyJcVJlLobUdi8x4bIhBQAh+QQFCgACACwBABEADAADAAACBYSPqcsFADs=");
    	background-repeat: no-repeat;
    	background-position: center center;
    	background-size: auto 60%; 
	}
    .SHADE {top: 0; left:0; width:100%; height: 100%; bottom:0; z-index: 11;}
    .BOX-V {box-orient: vertical;-webkit-box-orient: vertical; -moz-box-orient: vertical;-ms-flex-direction:column;}
	.BOX-D {box-align: end; box-pack: center -webkit-box-align: end; -webkit-box-pack: center; -ms-flex-align:end; -ms-flex-pack:center;}
	.BOX-M {box-align: center;box-pack: center; -webkit-box-align: center; -webkit-box-pack: center; -ms-flex-align:center; -ms-flex-pack:center;}
	.BOX-S {display:block; box-flex:1; -webkit-box-flex:1; -moz-box-flex:1;-ms-flex:1;}
	.BOX   ,.BOX-V,.BOX-D,.BOX-M, .FOOTER{display: box; display: -webkit-box; display: -moz-box; display: -ms-flexbox;}
	.BBOX  ,.BOX,.APP-STAGE,.INSET-STAGE,.STAGE,.PAGE-STAGE,.PAGE,.PAGE-BOX,.INSET-PAGE,.FOOTER{box-sizing:border-box; -webkit-box-sizing:border-box; -moz-box-sizing:border-box;}

    #welcome { background-color:rgba(0,0,0,.8); text-align: center; font-weight: bold;overflow: hidden;}
    .welcome-bg {position:absolute;top:0;left:0;right:0;bottom:0; background: url(./81345eabgw1ei0jyahwhwj20gp0qzt9s.jpg) center center no-repeat; background-size:100% 100%; opacity: .4;overflow: hidden;}
    #GameTimeLayer {top:1em; left: 0; width:100%; text-align: center; color:#f00; font-size: 4em; text-shadow:0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 40px #fff, 0px 0px 70px #fff;overflow: hidden;}
    #GameLayerBG {top:0;left:0;right:0;bottom:0;overflow:hidden;background:#f6b8c2 url('http://p9.qhimg.com/d/inn/4a861c7a/game-bg.jpg') no-repeat; background-size: cover;}
    #GameScoreLayer-bast { margin: 30px auto;}
    .GameLayer {position:absolute;bottom:0;left:0;}
    .block {position:absolute;border-right:1px solid #500047; border-bottom: 1px solid #500047; background-repeat: no-repeat; background-position: center;}
    .t1,.t2,.t3,.t4,.t5 { background-size:auto 100%;background-image:url(<?php echo $pic?>);}
    .tt1,.tt2,.tt3,.tt4,.tt5 { background-size:auto 86%;}
    /*.bl {border-left:1px solid #1D70B6;}*/
    @-ms-keyframes flash {
    	0% { opacity: 1; }
    	50% { opacity: 0; }
    	100% { opacity: 1; }
    }
    @-webkit-keyframes flash {
    	0% { opacity: 1; } 
    	50% { opacity: 0; }
    	100% { opacity: 1; }
    }
  	.flash {-webkit-animation: flash .2s 3;animation: flash .2s 3;}
    .bad {background-color: #f00; -webkit-animation: flash .2s 3;animation: flash .2s 3;}
    *    {-webkit-tap-highlight-color: rgba(0,0,0,0);-ms-tap-highlight-color: rgba(0,0,0,0); tap-highlight-color: rgba(0,0,0,0); -ms-user-select: none;}

    #GameScoreLayer {background-position:center .5em; background:#f6b8c2 url('http://p4.qhimg.com/d/inn/3c281085/background.jpg') no-repeat; background-size: cover; padding-top:0.5em; font-size:2em; font-weight: bold; color: #fff ; text-align: center;overflow: hidden;}
    .bgc1 { background-color: #23378B;}
    .bgc2 { background-color: #009FE3;}
    .bgc3 { background-color: #E42313;}
    .bgc4 { background-color: #FCBD1B;}
    .bgc5 { background-color: #34002A;}

    .share-icon {width:1.7em; background-repeat:no-repeat; background-size: auto 100%;}

    #GameScoreLayer-btn .btn,#GameScoreLayer-share .btn {text-align: center;font-size:1em; background-color: rgba(0,0,0,.3); height:2.2em; line-height:2.2em;}

    .btn:active {opacity: 0.2;}
    #landscape {display: none;}


	#gameBody {position: relative; width: 640px; margin: 0 auto; height: 100%;}
#share-wx {
background: rgba(0,0,0,0.8);
position: absolute;
top: 0px;
left: 0px;
width: 100%;
height: 100%;
z-index: 10000;
display: none;
}
    </style>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=35420161" charset="UTF-8"></script>
</head>
<body onload="init()">
	
	<script type="text/javascript">
	window.shareData = {
	        "imgUrl": "<?php echo $pic?>",
	        "timeLineLink": window.location.href,
	        "tTitle": "我是你的小呀小<?php echo $name?>,怎么打我都不嫌多！",
	        "tContent": "给你20秒的时间，有冤报冤，有仇报仇！"
	    };
	
	if (isDesktop)
		document.write('<div id="gameBody">');

	var body, blockSize, GameLayer = [], GameLayerBG, touchArea = [], GameTimeLayer;
	var transform, transitionDuration;

	function init (argument) {
		showWelcomeLayer();
		body = document.getElementById('gameBody') || document.body;
		body.style.height = window.innerHeight+'px';
		transform = typeof(body.style.webkitTransform) != 'undefined' ? 'webkitTransform' : (typeof(body.style.msTransform) != 'undefined'?'msTransform':'transform');
		transitionDuration = transform.replace(/ransform/g, 'ransitionDuration');

		GameTimeLayer = document.getElementById('GameTimeLayer');
		GameLayer.push( document.getElementById('GameLayer1') );
		GameLayer[0].children = GameLayer[0].querySelectorAll('div');
		GameLayer.push( document.getElementById( 'GameLayer2' ) );
		GameLayer[1].children = GameLayer[1].querySelectorAll('div');
		GameLayerBG = document.getElementById( 'GameLayerBG' );
		if( GameLayerBG.ontouchstart === null ){
			GameLayerBG.ontouchstart = gameTapEvent;
		}else{
			GameLayerBG.onmousedown = gameTapEvent;
			document.getElementById('landscape-text').innerHTML = '点我开始玩耍';
			document.getElementById('landscape').onclick = winOpen;
		}
		gameInit();
		window.addEventListener('resize', refreshSize, false);

		var rtnMsg = "true";	
				
		setTimeout(function(){
			if(rtnMsg == 'false'){
				var btn = document.getElementById('ready-btn');
				btn.className = 'btn';
				btn.innerHTML = '你今天已经快把<?php echo $name?>打坏了，请明天继续！' 			
			}else{
				var btn = document.getElementById('ready-btn');
				btn.className = 'btn';
				btn.innerHTML = ' 预备，打！'
				btn.style.backgroundColor = '#ed4a5b';
				btn.onclick = function(){
					closeWelcomeLayer();
				} 					
			}
		}, 500);
	}
	function winOpen() {
		window.open(location.href+'?r='+Math.random(), 'nWin', 'height=500,width=320,toolbar=no,menubar=no,scrollbars=no');
		var opened=window.open('about:blank','_self'); opened.opener=null; opened.close();
	}
	var refreshSizeTime;
	function refreshSize(){
		clearTimeout(refreshSizeTime);
		refreshSizeTime = setTimeout(_refreshSize, 200);
	}
	function _refreshSize(){
		countBlockSize();
		for( var i=0; i<GameLayer.length; i++ ){
			var box = GameLayer[i];
			for( var j=0; j<box.children.length; j++){
				var r = box.children[j],
					rstyle = r.style;
				rstyle.left = (j%4)*blockSize+'px';
				rstyle.bottom = Math.floor(j/4)*blockSize+'px';
				rstyle.width = blockSize+'px';
				rstyle.height = blockSize+'px';
			}
		}
		var f, a;
		if( GameLayer[0].y > GameLayer[1].y ){
			f = GameLayer[0];
			a = GameLayer[1];
		}else{
			f = GameLayer[1];
			a = GameLayer[0];
		}
		var y = ((_gameBBListIndex)%10)*blockSize;
		f.y = y;
		f.style[transform] = 'translate3D(0,'+f.y+'px,0)';

		a.y = -blockSize*Math.floor(f.children.length/4)+y;
		a.style[transform] = 'translate3D(0,'+a.y+'px,0)';

	}
	function countBlockSize(){
		blockSize = body.offsetWidth/4;
		body.style.height = window.innerHeight+'px';
		GameLayerBG.style.height = window.innerHeight+'px';
		touchArea[0] = window.innerHeight-blockSize*0;
		touchArea[1] = window.innerHeight-blockSize*3;
	}
	var _gameBBList = [], _gameBBListIndex = 0, _gameOver = false, _gameStart = false, _gameTime, _gameTimeNum, _gameScore;
	function gameInit(){
        createjs.Sound.registerSound( {src:"/game/dahaohao/resource/mp3/err.mp3", id:"err"} );
        createjs.Sound.registerSound( {src:"/game/dahaohao/resource/mp3/end.mp3", id:"end"} );
        createjs.Sound.registerSound( {src:"/game/dahaohao/resource/mp3/tap.mp3", id:"tap"} );
		gameRestart();
	}
	function gameRestart(){
		console.log('gameRestart');
		_gameBBList = [];
		_gameBBListIndex = 0;
		_gameScore = 0;
		_gameOver = false;
		_gameStart = false;
		_gameTimeNum = 2000;
		GameTimeLayer.innerHTML = creatTimeText(_gameTimeNum);
		countBlockSize();
		refreshGameLayer(GameLayer[0]);
		refreshGameLayer(GameLayer[1], 1);
	}
	function gameStart(){
		_gameStart = true;
		_gameTime = setInterval(gameTime, 10);
	}
	function gameOver(){
		_gameOver = true;
		clearInterval(_gameTime);
		setTimeout(function(){
			GameLayerBG.className = '';
			showGameScoreLayer();
		}, 1500);
	}
	function gameTime(){
		_gameTimeNum --;
		if( _gameTimeNum <= 0){
			GameTimeLayer.innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;时间到！';
			gameOver();
			GameLayerBG.className += ' flash';
			createjs.Sound.play("end");
		}else{
			GameTimeLayer.innerHTML = creatTimeText(_gameTimeNum);
		}
	}
	function creatTimeText( n ){
		var text = (100000+n+'').substr(-4,4);
		text = '&nbsp;&nbsp;'+text.substr(0,2)+"'"+text.substr(2)+"''"
		return text;
	}
	var _ttreg = / t{1,2}(\d+)/, _clearttClsReg = / t{1,2}\d+| bad/;
	function refreshGameLayer( box, loop, offset ){
		var i = Math.floor(Math.random()*1000)%4+(loop?0:4);
		for( var j=0; j<box.children.length; j++){
			var r = box.children[j],
				rstyle = r.style;
			rstyle.left = (j%4)*blockSize+'px';
			rstyle.bottom = Math.floor(j/4)*blockSize+'px';
			rstyle.width = blockSize+'px';
			rstyle.height = blockSize+'px';
			r.className = r.className.replace(_clearttClsReg, '');
			if( i == j ){
				_gameBBList.push( {cell:i%4, id:r.id} );
				r.className += ' t'+(Math.floor(Math.random()*1000)%5+1);
				r.notEmpty = true;
				i = ( Math.floor(j/4)+1)*4+Math.floor(Math.random()*1000 )%4;
			}else{
				r.notEmpty = false;
			}
		}
		if( loop ){
			box.style.webkitTransitionDuration = '0ms';
			box.style.display          = 'none';
			box.y                      = -blockSize*(Math.floor(box.children.length/4)+(offset||0))*loop;
			setTimeout(function(){
				box.style[transform] = 'translate3D(0,'+box.y+'px,0)';
				setTimeout( function(){
					box.style.display     = 'block';
				}, 100 );
			}, 200 );
		} else {
			box.y = 0;
			box.style[transform] = 'translate3D(0,'+box.y+'px,0)';
		}
		box.style[transitionDuration] = '150ms';
	}
	function gameLayerMoveNextRow(){
		for(var i=0; i<GameLayer.length; i++){
			var g = GameLayer[i];
			g.y += blockSize;
			if( g.y > blockSize*(Math.floor(g.children.length/4)) ){
				refreshGameLayer(g, 1, -1);
			}else{
				g.style[transform] = 'translate3D(0,'+g.y+'px,0)';
			}
		}
	}
	function gameTapEvent(e){
		if (_gameOver) {
			return false;
		}
		var tar = e.target;
		var y = e.clientY || e.targetTouches[0].clientY,
			x = (e.clientX || e.targetTouches[0].clientX)-body.offsetLeft,
			p = _gameBBList[_gameBBListIndex];
		if ( y > touchArea[0] || y < touchArea[1] ) {
			return false;
		}
		if( (p.id==tar.id&&tar.notEmpty) || (p.cell==0&&x<blockSize) || (p.cell==1&&x>blockSize&&x<2*blockSize) || (p.cell==2&&x>2*blockSize&&x<3*blockSize) || (p.cell==3&&x>3*blockSize) ){
			if( !_gameStart ){
				gameStart();
			}
        	createjs.Sound.play("tap");
			tar = document.getElementById(p.id);
			tar.className = tar.className.replace(_ttreg, ' tt$1');
			_gameBBListIndex++;
			_gameScore ++; 
			gameLayerMoveNextRow();
		}else if( _gameStart && !tar.notEmpty ){
			createjs.Sound.play("err");
			gameOver();
			tar.className += ' bad';
		}
		return false;
	}
	function createGameLayer(){
		var html = '<div id="GameLayerBG">';
		for(var i=1; i<=2; i++){
			var id = 'GameLayer'+i;
			html += '<div id="'+id+'" class="GameLayer">';
			for(var j=0; j<10; j++ ){
				for(var k=0; k<4; k++){
					html += '<div id="'+id+'-'+(k+j*4)+'" num="'+(k+j*4)+'" class="block'+(k?' bl':'')+'"></div>';
				}
			}
			html += '</div>';
		}
		html += '</div>';

		html += '<div id="GameTimeLayer"></div>';

		return html;
	}
	function closeWelcomeLayer(){
		var l = document.getElementById('welcome');
		l.style.display = 'none';
	}
	function showWelcomeLayer(){
		var l = document.getElementById('welcome');
		l.style.display = 'block';
	}
	function showGameScoreLayer(){
		
		//增加用户微币
		// var addCoins = Math.ceil(_gameScore / 5);
		// $.get("http://218.244.143.69/games/fight_pig/fightPigData.php?addCoins=" + addCoins + "&user=",
		// 	function(data,status){
		// 		//alert(data);
		// 		if(data >= 3){
		// 			document.getElementById('GameScoreLayer-btn').style.display = 'none';
		// 			document.getElementById('GameScoreLayer-msg').style.display = 'block';				
		// 		}				
		// });	
		var l = document.getElementById('GameScoreLayer');
		var c = document.getElementById(_gameBBList[_gameBBListIndex-1].id).className.match(_ttreg)[1];
		l.className = l.className.replace(/bgc\d/, 'bgc'+c);
		document.getElementById('GameScoreLayer-text').innerHTML = shareText(_gameScore);
		//document.getElementById('GameScoreLayer-score').innerHTML = '得分&nbsp;&nbsp;'+_gameScore;
		var bast = cookie('bast-score');
		if( !bast || _gameScore > bast ){
			bast = _gameScore;
			cookie('bast-score', bast, 100);
		}
		document.getElementById('GameScoreLayer-bast').innerHTML = '最高分：&nbsp;'+bast;
		l.style.display = 'block';
		window.shareData.tTitle = '我今天打坏了'+_gameScore+'个小<?php echo $name?>，不服来挑战！！！'
	}
	function hideGameScoreLayer(){
		var l = document.getElementById('GameScoreLayer');
		l.style.display = 'none';
	}
	function replayBtn(){
		gameRestart();
		hideGameScoreLayer();
	}
	function backBtn(){
		gameRestart();
		hideGameScoreLayer();
		showWelcomeLayer();
	}
	var mebtnopenurl = window.location.href;
	function shareText( score ){
		var coins = Math.ceil(score / 5);
		if( score <= 49 )
			return '呵呵！我今天打坏了<span style="color:red">'+score+'个</span>小<?php echo $name?>！<br/>亲，还得加油哦!';
		if( score <= 99 )
			return '酷！我打坏了'+score+'个小<?php echo $name?>！<br/>亲，不错哦！';
		if( score <= 149 )
			return '帅呆了！我打坏了'+score+'个小<?php echo $name?>！<br/>亲，爱死你了！';
		if( score <= 199 )
			return '太牛了！我打坏了'+score+'个小<?php echo $name?>！<br/>亲，奥巴马和金正恩都惊呆了！';

		return '膜拜ing！我打坏了'+score+'个小<?php echo $name?>！<br/>亲，你确定你是地球人？你是宇宙第一强人，再也没人能超越你了！';
	}
	
	function toStr(obj) {
		if ( typeof obj == 'object' ) {
			return JSON.stringify(obj);
		} else {
			return obj;
		}
		return '';
	}
	function cookie(name, value, time) {
		if (name) {
			if (value) {
				if (time) {
					var date = new Date();
					date.setTime(date.getTime() + 864e5 * time), time = date.toGMTString();
				}
				return document.cookie = name + "=" + escape(toStr(value)) + (time ? "; expires=" + time + (arguments[3] ? "; domain=" + arguments[3] + (arguments[4] ? "; path=" + arguments[4] + (arguments[5] ? "; secure" : "") : "") : "") : ""), !0;
			}
			return value = document.cookie.match("(?:^|;)\\s*" + name.replace(/([-.*+?^${}()|[\]\/\\])/g, "\\$1") + "=([^;]*)"), value = value && "string" == typeof value[1] ? unescape(value[1]) : !1, (/^(\{|\[).+\}|\]$/.test(value) || /^[0-9]+$/g.test(value)) && eval("value=" + value), value;
		}
		var data = {};
		value = document.cookie.replace(/\s/g, "").split(";");
		for (var i = 0; value.length > i; i++) name = value[i].split("="), name[1] && (data[name[0]] = unescape(name[1]));
		return data;
	}
	document.write(createGameLayer());
	
	function share(){
		document.getElementById('share-wx').style.display = 'block';
		document.getElementById('share-wx').onclick = function(){
			this.style.display = 'none';
		};
	}
	
	document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	    
	    WeixinJSBridge.on('menu:share:appmessage', function(argv) {
	        WeixinJSBridge.invoke('sendAppMessage', {
	            "img_url": window.shareData.imgUrl,
	            "link": window.shareData.timeLineLink,
	            "desc": window.shareData.tContent,
	            "title": window.shareData.tTitle
	        }, function(res) {
	        	document.location.href = mebtnopenurl;
	        })
	    });

	    WeixinJSBridge.on('menu:share:timeline', function(argv) {
	        WeixinJSBridge.invoke('shareTimeline', {
	            "img_url": window.shareData.imgUrl,
	            "img_width": "640",
	            "img_height": "640",
	            "link": window.shareData.timeLineLink,
	            "desc": window.shareData.tContent,
	            "title": window.shareData.tTitle
	        }, function(res) {
	        	document.location.href = mebtnopenurl;
	        });
	    });
	}, false);
</script>

	<div id="GameScoreLayer" class="BBOX SHADE bgc1" style="display:none;">
		<div style="padding:0 5%;margin-top:105px;">
			<div id="GameScoreLayer-text" style="color:#440062"></div>
			<br/>
			<div id="GameScoreLayer-bast" style="color:#9e7da2">最高分：</div>
			<br/>
			<div id="GameScoreLayer-btn" class="BOX">
				<div class="btn BOX-S" style="background:#ed4a5b;border-radius:45px;" onclick="replayBtn()">重来</div>&nbsp;
				<div class="btn BOX-S" style="background:#3ec6a4;border-radius:45px;" onclick="share()">分享到朋友圈</div>&nbsp;				
			</div>
			<br/>
			<a class="btn BOX-S" href="./create.html" style="display:block;color:#9e7da2;border-radius:45px;text-decoration:none;margin:10px auto;background:#fff;height:2em;line-height:2em">我要打别人</a>&nbsp;
			<div align="center" style="font-size:0.8em;">
				<a class="btn BOX-S" align="center" style="color:#9e7da2;" href="http://mp.weixin.qq.com/s?__biz=MjM5MDM1NjQxMQ==&mid=200526942&idx=1&sn=aa8b5565ce376040eb331ac803d94a6e#rd">点此关注360导航</a>
			</div>
			
			<div id="GameScoreLayer-msg" class="BOX" style="display:none">每天只能打3次小<?php echo $name?>，明天继续吧！ </div>
			<br/>
		</div>
	</div>

	<div id="welcome" class="SHADE BOX-M">
		<div class="welcome-bg FILL"></div>
		<div class="FILL BOX-M" style="position:absolute;top:0;left:0;right:0;bottom:0;z-index:5;">
			<div style="margin:0 8% 0 9%;">
				<br/>
				<div style="font-size:3em; color:#ffe048;">你爱小<?php echo $name?>吗？</div><br/>
				<div style="font-size:1.5em; color:#ffe048; line-height:2em;">点击最下面的小<?php echo $name?>开始，<br/>20秒内看你能打坏了多少个小<?php echo $name?>！<br/></div><br/><br/>
				<div id="ready-btn" class="btn loading" style="display:inline-block; margin:0 auto; cursor:pointer; width:8em; height:2em; line-height:2em; font-size:1.8em; color:#fff; border-radius:40px"></div>
				<a href="./create.html" class="btn" style="display: block;text-decoration: none; margin: 50px auto; width: 8em; height: 2em; line-height: 2em; font-size: 1.8em; color:#fff; background-color:#3ec6a4;text-decoration:none;border-radius:40px">换个人打</a>
			<br/><br/><br/>


			</div>
		</div>
	</div>

	<div id="landscape" class="SHADE BOX-M" style="background:rgba(0,0,0,.9);">
		<div class="welcome-bg FILL"></div>
		<div id="landscape-text" style="color:#fff;font-size:3em;">请竖屏玩耍</div>
	</div>

	<div id="share-wx"><p style="text-align: right; padding-left: 10px;"><img src="http://t2.qpic.cn/mblogpic/ffa34c4766b0d1806458/2000" id="share-wx-img" style="max-width: 280px; padding-right: 25px;"></p></div>
<script type="text/javascript">
	if (isDesktop)
		document.write('</div>');
</script>

</body>
</html>

