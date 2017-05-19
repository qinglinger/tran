<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <title>tran</title>

    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    

    <div class="row" id="main_div">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <textarea class="form-control" rows="4" id="input_textarea"></textarea>
        <br />
        <button class="btn btn-default" type="submit" style="float: right;" id="submit">Button</button>

        <br />
        <br />
        <br />
        <div id="main_content">
        	
        </div>

      </div>
      <div class="col-md-3"></div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="js/jquery.js"></script>
    Include all compiled plugins (below), or include individual files as needed
    <script src="js/bootstrap.js"></script> -->
    <script src="config/config.js"></script>

    <script type="text/javascript">

    getData();

    	function getData(){
    		var url = "http://" + window.location.host + "/outputInterface";
    		$.get(url, function(data){
    			console.log(data);
    		});
    	}

    	function showList(list){
    		var content = "";
    		var i = 0;
    		for(i=0; i<list.length; i++){
    			content += getContent(list[i]);
    		}
    		$("#main_content").html(content);
    	}

    	function getContent(str){

    		var content = `
	    		<div class="panel panel-default">
				  <div class="panel-body">
				    ${str}
				  </div>
				</div>
    		`;	
    		return content;
    	}
    </script>
  </body>
</html>