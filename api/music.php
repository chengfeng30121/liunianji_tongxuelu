<link rel="stylesheet" href="http://m.badapple.top/assets/player/css/player.css?v=47372">
<link href="https://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<div id="wenkmPlayer">
	<div class="player">
		<div class="blur-img">
			<img src="http://p1.bqimg.com/500462/a5c4f00f530039act.jpg" class="blur" style="top: 0px; display: inline;">
		</div>
		<div class="infos">
			<div class="songstyle">
				<i class="fa fa-music"></i>
				<span class="song"></span>
			</div>
			<div class="timestyle">
				<i class="fa fa-clock-o"></i>
				<span class="time">00:00 / 00:00</span></div>
			<div class="artiststyle">
				<i class="fa fa-user"></i>
				<span class="artist"></span>
				<span class="moshi">
					<i class="loop fa fa-random current"></i>随机播放</span>
			</div>
			<div class="artiststyle">
				<i class="fa fa-folder"></i>
				<span class="artist1"></span>
				<span class="geci"></span>
			</div>
		</div>
		<div class="control">
			<i class="loop fa fa-retweet " title="顺序播放"></i>
			<i class="prev fa fa-backward" title="上一首"></i>
			<div class="status">
				<b>
					<i class="play fa fa-play" title="播放"></i>
					<i class="pause fa fa-pause" title="暂停"></i>
				</b>
			</div>
			<i class="next fa fa-forward" title="下一首"></i>
			<i class="random fa fa-random  current" title="随机播放"></i>
		</div>
		<div class="musicbottom">
			<div class="volume">
				<i class="mute fa fa-volume-off"></i>
				<i class="volumeup fa fa-volume-up"></i>
				<div class="progress">
					<div class="volume-on ts5">
						<div class="drag" title="音量"></div>
					</div>
				</div>
			</div>
			<div class="switch-playlist">
				<i class="fa fa-bars" title="播放列表"></i>
			</div>
			<div class="switch-ksclrc">
				<i class="fa fa-toggle-on" title="关闭歌词"></i>
			</div>
			<div class="switch-default">
				<i class="fa fa-refresh" title="切换默认专辑"></i>
			</div>
			<div class="switch-down">
				<a class="down">
					<i class="fa fa-cloud-download" title="歌曲下载"></i>
				</a>
			</div>
		</div>
		<div class="cover"></div>
	</div>
	<div class="playlist">
		<div class="playlist-bd">
			<div class="album-list">
				<div class="musicheader"></div>
				<div class="list"></div>
			</div>
			<div class="song-list">
				<div class="musicheader">
					<i class="fa fa-angle-right"></i>
					<span></span>
				</div>
				<div class="list">
					<ul></ul>
				</div>
			</div>
		</div>
	</div>
	<div class="switch-player">
		<i class="fa fa-angle-right" style="margin-top: 20px;"></i>
	</div>
</div>
<div id="wenkmTips"></div>
<div id="wenkmLrc"></div>
<div id="wenkmKsc"></div>
<div class="myhk_pjax_loading_frame"></div>
<div class="myhk_pjax_loading"></div>
<script type="text/javascript">
window.onbeforeunload = function() {
		RootCookies.SetCookie("myhk_player_show", "no", -1)
};
window.onunload = function() {
	RootCookies.SetCookie("myhk_player_show", "no", -1)
};
</script>
<script src="http://m.badapple.top/WebConfig.php?Key=<?=C('zxyy')?>&v=20161014"></script>
<script src="https://cdn.bootcss.com/jquery/2.0.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-mousewheel/3.1.9/jquery.mousewheel.min.js"></script>
<script src="http://m.badapple.top/assets/player/js/scrollbar.js?v=20161014"></script>
<script src="http://m.badapple.top/assets/player/js/player.js?v=20161014"></script>
