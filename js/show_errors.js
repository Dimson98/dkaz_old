$(document).ready(function(){
  $("#btn_11").click(function(){
	  var user = $("input[name='name']").val().trim();
	  var fname = $("input[name='fname']").val().trim();
	  var cname = $("input[name='cname']").val().trim();
	  var email = $("input[name='email']").val().trim();
	  var msg = $("textarea[name='message']").val().trim();
	  
	  $("#errors").text("");
	  
	  //обрабатываю данные
		var error_arr = [];
		if(user.length == 0) error_arr.push('Имя');
		if(fname.length == 0) error_arr.push('Фамилия');
		if(cname.length == 0) error_arr.push('Компания');
		if(email.length == 0) error_arr.push('Е-mail адрес');
		if(msg.length == 0) error_arr.push('Сообщение');
		
		
		 if(error_arr.length > 0){
//	$("#errors").html("Вы не заполнили следующие поля: <br>" + error_arr.join(', '));
//	$("#errors").html("<div class='alert alert-success' align='center'>");
//	$('#errors > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append( "</button>");
//	$('#errors > .alert-danger').append("<strong>Форма заполнена не полностью или неправильно...</strong>");
    $("#errors").html("<p class='my_class' align='center'>");
	$('#errors > .my_class').append("<strong>Форма заполнена не полностью или неправильно...</strong>");
	$('#errors > .my_class').append('</p>');
	
	return false;
		}else{
	  $("#errors").html("Вы заполнили все поля !" ); 
	  
	  $.ajax({
				type: "POST",
				url: "action.php",
				data: "username="+user+"&fname="+fname+"&cname="+cname+"&mail="+email+"&msg="+msg+"&action=add",
				success: function(msg){
					
                       $('form input[type="text"], form input[type="email"], form textarea').val('');
					   $("#errors").text("");
			   }
			});
			
			return false;
	  
	  
		}  	  /* else */
	  
   //  $("#errors").text(user);
   //	return false;
  });
  $("#btn_12").click(function(){
	var msg = $("textarea[name='user_msg']").val().trim();
    $("#errors").html("<b>"+msg+"</b>");
	return false;
  });
  
});