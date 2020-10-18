<!DOCTYPE html>
<html>
<head>
	<title>display</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery3.5.1.js"></script>
	<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

<!-- jQuery and JS bundle w/ Popper.js -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
	<h1 style="text-align: center;text-transform: uppercase;">images for display</h1>
	<p style="float: right;"><a href="test.php"> back to registration window</a></p>
	 	<div class="row thumbnail col" id="imgDiv"  >
		
		</div>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="queueImages(0)" style="float: right;" >
  VIEW IMAGES IN QUEUE
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">IMAGES IN QUEUE</h5>
      </div>
      	<div class="modal-body" id="queue">

       	</div>
        <button type="button" class="btn btn-primary" data-dismiss="modal" >RETURN TO DISPLAY PAGE</button>
      </div>
    </div>
  </div>
</div>
</div>
	</div>	
	<script type="text/javascript">
		$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
	</script>
<script type="text/javascript">
	$(function(){
			var off = 0;
			getImages(off);

			setInterval(function(){
				off=off+1; 
				

				getImages(off);
				queueImages(off);

			}, 30000);
				
		})
		var getImages = function(offset){
			
			$.ajax({
            type: 'POST',
            url: "post.php",
            data: {'offset':offset},
            dataType: "text",
            success: function(res) {
            	var postData = JSON.parse(res) 
            	var appn=" ";
            	console.log(offset);
            	console.log(postData.data.length,"is the lenth")
            	if(postData.data.length == 6){
            		for(var i=0;i<=5;i++){
            			appn+= "<div class='thumbnail col-md-4 col-xs-2'>"+
				               "<img style='padding:5px;' width=250px height=200px src ="+ postData.data[i].image+">"+
				               "<div class='caption' style='text-align: center;'>"+
					           "<p id='text'>"+postData.data[i].title+"</p>"+
					           "<p id='text'>"+postData.data[i].description+"</p>"+
 								"</div>"+
								"</div>"
						$("#imgDiv").html(appn);
            		}
            	}
            	console.log(postData.data,"is the images");
            }
        	})
		}
		var queueImages = function(off){
			console.log("queue button was clicked");
			$.ajax({
            type: 'POST',
            url: "queue.php",
            data: {'offset':off},
            dataType: "text",
            success: function(res) {
            	var poData = JSON.parse(res)
            	var appn2=" ";
            	console.log(off);
            	console.log(poData.data.length,"is the lenth")
            		for(var i=off+6;i<=poData.data.length+1;i++){
            			if(i=== (poData.data.length)){
							appn2+="<div class='container'>"+"<h2>END OF QUEUE</h2>"+"</div>"
							$("#queue").html(appn2);
						}else{
						console.log(i ,"  :value of i")
            			appn2+= "<div class='thumbnail col-md-1 col-xs-4'>"+
				               "<img style='padding:10px' width='250px' height='200px'  src ="+ poData.data[i].image+">"+
				               "<div class='caption' style='text-align: center;margin-left:5px'>"+
					           "<p id='text'>"+poData.data[i].title+"</p>"+
					           "<p id='text'>"+poData.data[i].description+"</p>"+
 								"</div>"+
								"</div>"

						$("#queue").html(appn2);
						}

            	}
            	console.log(poData.data,"is the images");
            }
        	})
		}
</script>
</body>
</html>