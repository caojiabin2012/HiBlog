$(function() {

	//响应式设计交互
	function resizeSides() {
		if ($(window).width() < 992) {
			$("#sides").removeClass("in"); //右侧栏
			$("body").removeClass("md");	//body右空白区域
			
		} else {
			$("#sides").collapse("show"); //右侧栏
			$("body").addClass("md");	//body右空白区域
		};
	}
	$(window).bind("resize", resizeSides);
	
	//加载右侧栏
	var src_sidebar = $CONFIG.src_sidebar;
	if(!src_sidebar) {
		src_sidebar = "/block/sidebar.html";
	}
	$("#sidebar").load(src_sidebar, resizeSides);
	
	//加载多说评论组件
	if(duoshuoQuery && duoshuoQuery.short_name) {
		$.getScript("//static.duoshuo.com/embed.js", function() {
			
			//读取评论数据
			var thread_ids = new Array();
			var $node_comment = $("[node-type=comment-number]");
			$node_comment.each(function() {
				thread_ids.push($(this).attr("thread-id"));
			});
			if(thread_ids.length > 0) {
				var params = {"short_name" : duoshuoQuery.short_name, "threads" :  thread_ids.join(",")};
				$.getJSON("https://api.duoshuo.com/threads/counts.jsonp?short_name=lcx165&threads=1,2&callback=a", function (o) {
					if(o && o.response) {
						$.each(o.response, function(k, v)) {
							$node_comment.find("[thread-id=" + v.thread_key +"]").html(v.comments);
						}
					}
				});
			}
		});
		
	}
	
	//加载高亮组件
	if($("pre[class*=brush]").size()) {
		//替换加载器路径占位
		function SyntaxHighlighterPath() {
			var args = arguments,
			result = [];
			for(var i = 0; i < args.length; i++) {
				result.push(args[i].replace('@', 'http://apps.bdimg.com/libs/SyntaxHighlighter/3.0.83/scripts/'));
			}
			return result;
		};
		
		$("head").append('<link type="text/css" rel="stylesheet" href="http://apps.bdimg.com/libs/SyntaxHighlighter/3.0.83/styles/shCore.css" /><link type="text/css" rel="stylesheet" href="http://apps.bdimg.com/libs/SyntaxHighlighter/3.0.83/styles/shThemeDefault.css" />');
		$.getScript('http://apps.bdimg.com/libs/SyntaxHighlighter/3.0.83/scripts/shCore.js', function() {
			$.getScript('http://apps.bdimg.com/libs/SyntaxHighlighter/3.0.83/scripts/shAutoloader.js', function() {
				SyntaxHighlighter.autoloader.apply(null, SyntaxHighlighterPath(
					'applescript            @shBrushAppleScript.js',
					'actionscript3 as3      @shBrushAS3.js', 
					'bash shell             @shBrushBash.js', 
					'coldfusion cf          @shBrushColdFusion.js',
					'cpp c                  @shBrushCpp.js',
					'c# c-sharp csharp      @shBrushCSharp.js', 
					'css                    @shBrushCss.js', 
					'delphi pascal          @shBrushDelphi.js', 
					'diff patch pas         @shBrushDiff.js', 
					'erl erlang             @shBrushErlang.js',
					'groovy                 @shBrushGroovy.js', 
					'java                   @shBrushJava.js',
					'jfx javafx             @shBrushJavaFX.js', 
					'js jscript javascript  @shBrushJScript.js',
					'perl pl                @shBrushPerl.js',
					'php                    @shBrushPhp.js', 
					'text plain             @shBrushPlain.js', 
					'py python              @shBrushPython.js',
					'ruby rails ror rb      @shBrushRuby.js',
					'sass scss              @shBrushSass.js',
					'scala                  @shBrushScala.js',
					'sql                    @shBrushSql.js', 
					'vb vbnet               @shBrushVb.js',
					'xml xhtml xslt html    @shBrushXml.js'
				));
				SyntaxHighlighter.all();
			});
		});
		
	}
	
});
