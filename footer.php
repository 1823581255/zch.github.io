  <!-- 版权 -->
  <div class="footer mt-5">
  	  <!-- 侧边锚链接定位 -->
	  <div class="side_nav" id="side_nav">
	    <a href="#service" class="active">Service</a>
	    <a href="#product">Product</a>
	    <a href="#contact">Contact</a>
	  </div>
    <p class="text-center">Copyright © 2011 - 2019 xTom. All rights reserved.</p>
  </div>

  <!-- popper.min.js JS文件 -->
  <script type="text/javascript" src="/js/popper.min.js"></script>
  <!-- jquery-1.12.4 JS 文件 -->
  <script type="text/javascript" src="/js/jquery-1.12.4.min.js"></script>
  <!-- bootstrap..min.js JS文件 -->
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <!--   侧边目录树 JS文件
  <script type="text/javascript" src="js/side_nav.js"></script> -->
	<script>
	    $(function () {
	        var nav = $("#side_nav");
	        var mainPage = $(".mainPage");
	        var i;
	        var mainTopArr = new Array();
	        
	        for(var i=0;i<mainPage.length;i++){
	            var top = mainPage.eq(i).offset().top-60;
	            mainTopArr.push(top);
	        }
	        $(window).scroll(function(){
	            var scrollTop = $(this).scrollTop();
	            var k;
	            for(var i=0;i < mainTopArr.length; i++){
	                if(scrollTop>=mainTopArr[i]){
	                    k=i;
	                }
	            }
	            nav.find("a").eq(k).addClass("active").siblings().removeClass("active");
	        });

	        var title_nav = $("#directory-nav");
	        var mainPage_nav = $(".list-nav");
/*	        var foot = $(".footer");*/
	        var c;
	        var mainTopArr_nav = new Array();
	        
	        for(var c=0;c<mainPage_nav.length;c++){
	            var top_nav = mainPage_nav.eq(c).offset().top-90;
	            mainTopArr_nav.push(top_nav);
	        }
	        $(window).scroll(function(){
	            var scrollTop_nav = $(this).scrollTop();
	            var k_nav = "";
	            for(var c=0;c < mainTopArr_nav.length; c++){
	                if(scrollTop_nav>=mainTopArr_nav[c]){
	                    k_nav = c;
	                }
	            }
	            title_nav.find("a").eq(k_nav).addClass("active").siblings().removeClass("active");
	            mainPage_nav.eq(k_nav).addClass("trigger").siblings().removeClass("trigger");
	        });

	        $(document).ready(function() {
			  $("a[href^='#']").click(function() {
			    $("html, body").animate({
			      scrollTop: $($(this).attr("href")).offset().top-60+"px"
			//.offset().top+-50+"px"这里是设置跳转位置偏移值.
			    }, {
			      duration: 500,
			      easing: "swing"
			    });
			    return false;
			  });
			});
	    });
	</script>
	<script type="text/javascript">  
		var h2_list = $("#terms h2");
		var h3_list = $("#terms h3");
		var h2_content = '';
		var h3_content = '';
		var content = '';
		for(i = 0; i < h2_list.length; i++){
			var h2_wrap_content = '<font class="list-nav" id=list-h2-'+i+'></font>';
			$(h2_list[i]).wrap(h2_wrap_content);
/*			$(h2_list[i]).addClass("list-nav")
			$(h2_list[i]).attr('id',"list-" + i );*/
			h2_content += '<a class="directory-link-h2" href="#list-h2-' + i + '">' + $(h2_list[i]).text() + '</a>';
			var h2_acc = $(h2_list[i]).parent().nextUntil("h2");
			for(j = 0; j < h2_acc.length; j++){
				/*var tmp = $(h3_wrap_content).prevAll('h2').first();*/
				if(j < h2_acc.length && h2_acc[j].localName == "h3"){
					var h3_wrap_content = '<font class="list-nav" id=list-h3-' + i + j +'></font>';
					$(h2_acc[j]).wrap(h3_wrap_content);
					h2_content += '<a class="directory-link-h3" href="#list-h3-' + i  + j + '">' + $(h2_acc[j]).text() + '</a>';
				}else{
					continue;
				}
			}

		}
		$
		if($('#directory-nav').length != 0 )
		  {
		   $($('#directory-nav')[0]).prepend(h2_content);

		  }
	</script>
</body>
</html>