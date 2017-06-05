
<!DOCTYPE html>
<html>
<head>
	<title>\</title>
</head>
<style type="text/css">
	.right{display: block;position: fixed;right: 10px;top: 10px;}
	.login{right: 100px;}
	.first{width: 400px;}
	div{width: 500px;height: 100px;border: 1px solid gray;}
	span{margin-left: 400px;}
</style>
<body>
			<h1>我是主页</h1>
			<textarea class="first" id="text"></textarea>
            <input type="button" id="button" value = "提交"/>
            <div></div><button>删除</button><span></span>
            <div></div><button>删除</button><span></span>
            <div></div><button>删除</button><span></span>
            <div></div><button>删除</button><span></span>
            <div></div><button>删除</button><span></span>
            <div></div><button>删除</button><span></span>
            <div></div><button>删除</button><span></span>
            <div></div><button>删除</button><span></span>
<span class="right login">
		<?php
		session_start();
		if (!$_SESSION) {
			echo "<a href='login.php'>登录</a>";
		}else{echo $_SESSION["Name"];}
		?>	
</span>
<span class="right">
	<?php 
		if (!$_SESSION) {
			echo "<a href='zhuce.html'>注册</a>";
		}else{
			echo "<a href='login.php'>退出登录</a>";
		}
	?>
</span>

	
</body>
<script src="sajax2.js" charset="utf-8"></script>
<script type="text/javascript">
	    var button = document.getElementById("button");
        var t = document.getElementById("text");
        var div = document.getElementsByTagName("div");
        var span = document.getElementsByTagName("span");
        var del = document.getElementsByTagName("button");	
        button.onclick = function(){
            sajax.post("getData.php",{"name":
            "<?php
				if (!$_SESSION) {
					echo "游客";
				}else{echo $_SESSION["Name"];}
			?>",
		    "content":t.value},function(data,arr){
    			var obj = JSON.parse(data.data);
    			for(var k in obj){
    				div[k].innerHTML = obj[k]["content"];	
    				span[k].innerHTML = obj[k]["name"];
    			}
           });
        }
        for (var i = 0 ;i< del.length; i++) {
        	del[i].index=i;
        	del[i].onclick = function(){
        	console.log(this.index);

        	sajax.post("delete.php",{"name":
            "<?php
				if (!$_SESSION) {
					echo "游客";
				}else{echo $_SESSION["Name"];}
			?>","index":this.index},function(data,arr){
				var obj = JSON.parse(data.data);
    			for(var k in obj){
    				div[k].innerHTML = obj[k]["content"];	
    				span[k].innerHTML = obj[k]["name"];
    			}
    			// console.log(k);
    			// 跟新如果数据库中没有数据 ，将页面上的数据进行跟新
    			for(i = 0;i<7-k;i++){
    				div[7-i].innerHTML = "";	
    				span[7-i].innerHTML = "";
    			}
    			if (k == null ) {
    				div[0].innerHTML = "";
    				span[0].innerHTML = "";
    			}
           });
         }
        	 
        }
</script>
</html>