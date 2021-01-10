<?php

include('database_connection.php');
include('../sessionchat.php')

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />



    <head>
        <title>CHAT</title>

		    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">

        <link href="../assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONT AWESOME STYLE  -->
        <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLE  -->
        <link href="../assets/css/style.css" rel="stylesheet" />

        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

        <link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/>

        <link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">

        <link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">

        <link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">

        <link rel="stylesheet" type="text/css" href="../assets/css/util1.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/main1.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../assets/css/table.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/table2.css">



		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
    </head>

    <body>

      <div class="navbar navbar-inverse set-radius-zero" >
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand">
                    <div class="login100-pic js-tilt" data-tilt>
                    <img src="../assets/img/opslogo.png"/>
                    </div>
                  </a>
              </div>
        <div class="right-div">
       <a class="btn btn-danger pull-right btn--red" href="../logout.php" onclick="return confirm('Are you sure you want to logout ?')">LOG ME OUT</a>
              </div>
          </div>
      </div>

      <section class="menu-section">
          <div class="container">
              <div class="row ">
                  <div class="col-md-12">
                      <div class="navbar-collapse collapse ">
                          <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <ul id="menu-top" class="nav navbar-nav navbar-right ">
                              <li><a href="../utama.php" >USER HOME</a></li>
                           </ul>
                          </ul>
              <ul id="menu-top" class="nav navbar-nav navbar-left" style="padding-left:150px">

                              <li><a><b>Hi,<i><?php echo $_SESSION['USER_NAME'];?></i></b></a></li>
                          </ul>
                      </div>
                  </div>

              </div>
          </div>
      </section>

    <div class="content-wrapper">
		<div class="container">
		<br />

		<h3 align="center">Chat Application</a></h3>


<div class="limiter">
<div class="container-table100" style="min-height:auto">
<div class="wrap-table100">
    <div class="table100 ver1 m-b-110">
      <table data-vertable="ver1">
        <thead>
          <tr class="row100 head">
            <th class="column100" style="text-align:center">List of Admin</th>
          </tr>
        </thead>
        <tbody>
          <tr class="row101">
            <td id = "user_details" style="padding-right:0px"></td>
          </tr>
          <div id = "user_model_details"></div>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>


		</div>

		</div>
  </div>

    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; Designed by : OPS
                </div>

            </div>
        </div>
    </section>


    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/tilt/tilt.jquery.min.js"></script>

    <script >
      $('.js-tilt').tilt({
        scale: 1.1
      })
    </script>

    <script src=assets/"js/main.js"></script>


<script>

	$(document).ready(function(){
		fetch_user();

		setInterval(function(){
			update_last_activity();
			fetch_user();
			update_chat_history_data();
		},5000);

		function fetch_user()
		{
			$.ajax({
				url:"fetch_user.php",
				method:"post",
				success : function(data){
					$('#user_details').html(data);
				}
			})
		}
		function update_last_activity()
		{
			$.ajax({
				url:"update_last_activity.php",
				success : function()
				{

				}
			})
		}

		function make_chat_dialog_box(to_user_id, to_user_name)
		{
		  var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="You have chat with '+to_user_name+'">';
		  modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
		  modal_content += fetch_user_chat_history(to_user_id);
		  modal_content += '</div>';
		  modal_content += '<div class="form-group">';
		  modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control chat_message"></textarea>';
		  modal_content += '</div><div class="form-group" align="right">';
		  modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
		  $('#user_model_details').html(modal_content);
		}

		$(document).on('click','.start_chat',function(){
			var to_user_id = $(this).data('touserid');
			var to_user_name = $(this).data('tousername');
			make_chat_dialog_box(to_user_id,to_user_name);
			$("#user_dialog_"+to_user_id).dialog({
				autoOpen:false,
				width:400
			});
			$('#user_dialog_'+to_user_id).dialog('open');
			$('#chat_message_'+to_user_id).emojioneArea({
				pickerPosition : "top",
				toneStyle : "bullet"
			});
		});

		$(document).on('click','.send_chat',function(){
			var to_user_id = $(this).attr('id');
			var chat_message = $('#chat_message_'+to_user_id).val();
			$.ajax({
				url : "insert_chat.php",
				method : "post",
				data : {to_user_id:to_user_id,chat_message:chat_message},
				success : function(data)
				{
					//$('#chat_message_'+to_user_id).val('');
					var element = $('#chat_message_'+to_user_id).emojioneArea();
					element[0].emojioneArea.setText('');
					$('#chat_history_'+to_user_id).html(data);
				}
			});
		});

		function fetch_user_chat_history(to_user_id)
		{
			$.ajax({
				url : "fetch_user_chat_history.php",
				method : "post",
				data : {to_user_id:to_user_id},
				success : function(data)
				{
					$('#chat_history_'+to_user_id).html(data);
				}
			});
		}

		function update_chat_history_data()
		{
			$('.chat_history').each(function(){
				var to_user_id = $(this).data('touserid');
				fetch_user_chat_history(to_user_id);
			});
		}

		$(document).on('focus','.chat_message',function(){
			var is_type = "yes";
			$.ajax({
				url : "update_is_type_status.php",
				method : "post",
				data : {is_type:is_type},
				success : function()
				{

				}
			});
		});

		$(document).on('blur','.chat_message',function(){
			var is_type = "no";
			$.ajax({
				url : "update_is_type_status.php",
				method : "post",
				data : {is_type:is_type},
				success : function()
				{

				}
			});
		});

		$(document).on('click','.remove_chat',function(){
			var chat_message_id = $(this).attr('id');
			if(confirm("Are you sure you want to remove this chat...???"))
			{
				$.ajax({
					url : "remove_chat.php",
					method : "post",
					data : {chat_message_id:chat_message_id},
					success : function(data)
					{
						update_chat_history_data();
					}
				});
			}
		});
	});

</script>


</body>
</html>
