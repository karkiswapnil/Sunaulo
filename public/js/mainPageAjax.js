
$(document).ready(function (){
	console.log("ready");
	$.ajax({
		type:'GET',
		url:'/fetchspecial',
		success:function(data){
			var response=JSON.parse(data);
			if(Object.keys(response).length==0){
				$('#special').append('<li class="post"><div class="post_content"><h5><a>No khulduli right now</a></h5></div></li>');
  					iterator+=1;
			}
			else{
			var iterator=0;
			$.each(response, function () {
				if(iterator==4)
					return false;
				else
					$('#special').append('<li class="post"><div class="post_content"><h5><a href="/test">'+this.title+'</a></h5></div></li>');
  					iterator+=1;
			});}

			
		},
		error:function(){
			alert('khulduli ayena');
		}
	});

});

