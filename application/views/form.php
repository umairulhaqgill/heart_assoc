<!DOCTYPE html>
<html>
  <head>
    <title>Job Application Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("<?php site_url(); ?>assets/100.jpg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-book {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee; 
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">              
       <div class="left-part">
        <!--<i style="margin-top:-40px; " class="fas fa-book"></i>-->
        
        <h1>Job Application Form</h1>
        <p>In compliance with Federal and State equal employment opportunity laws, qualified applicants are considered for all positions without regard to race, color, religion, sex, national origin, age, marital status, veteran status, non-job related disability, or any other protected group status.</p>
      </div> 

      <form id="myform">
        <div style="padding:5px; background-color:white;"><img src="http://paragonfreight.net/img/logoparagon1maliSivi.png"/></div>
           
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h3>Job application For <span id="type_of_app"> Owner Operator</span></h3>
        </div>
        <div class="info">  
          <input  type="hidden" name="trans_init" id="trans_init" value="1">    
          <input class="name" type="text" name="fname" id="fname"  placeholder=" Driver First Name" required>   
          <input class="lname" type="text" name="lname" id="lname" placeholder=" Driver Last Name" required>
          <label><input type="radio" name="app_type" value="Owner Operator" checked="" onclick="change_title('Owner Operator')"> Owner Operaator</label>      
          <label><input type="radio" name="app_type" value="Company Driver" onclick="change_title('Company Driver')"> Company Driver</label>      
          <input type="password" name="pwd" placeholder="Password" required>
          <select name="be_valid_hours">  
          	<option value="1">1 Hour</option>        
          	<?php
          		for($i=2; $i < 25; $i++)      
          		{
          			?>	
          			<option value="<?php echo $i; ?>"><?php echo $i; ?> Hours</option> 
          			<?php
          		}	
          	?>
          </select>
        </div>
        <button type="submit">Generate</button><br><br>
        <div class="info">
        <input type="text" style="padding:20px; text-align: center;" id="url_link" value="----- Your link will be generated here -----" name="text" readonly="">
        <br><span style="color:green;" id="msg_success"></span><span  id="msg_error" style="color:red;"></span><span  id="msg_progress" style="color:orange;"></span>
        </div>
      </form>
    </div>

     <script type="text/javascript">
        $(document).ready(function() {      

           // $('#myform').unbind('submit');  
            $('#myform').on('submit', function(e){
            e.preventDefault();
            if( $('#trans_init').val() == 1)
            {        

              $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/Test/save_form',   
                data: $('#myform').serialize(),       
                cache: false, 
                beforeSend: function()
                {
                    $('#trans_init').val(0);
                    $('#msg_error').html('');
                    $('#msg_success').html('');
                    $('#msg_progress').html('Progress saving...');
                },
                success: function(data)
                { 
                    $('#trans_init').val(1);  
                    if(data.code== 0)
                    {
                        $('#msg_error').html(data.message);
                        $('#msg_success').html('');
                        $('#msg_progress').html(''); 

                        setTimeout(function(){
                          $('#msg_error').html('');
                          $('#msg_success').html('');
                          $('#msg_progress').html('');
                        },5000);   
                    }  
                    if(data.code== 1)
                    { 
                        $('#fname').val('');  
                        $('#lname').val('');  
                        $('#url_link').val(data.url);
                        $('#msg_success').html(data.message);
                        $('#msg_error').html('');     
                        $('#msg_progress').html('');

                        setTimeout(function(){
                          $('#msg_error').html('');
                          $('#msg_success').html('');
                          $('#msg_progress').html('');
                        },5000);  
                    }  
                },
                failure: function(data)
                {   
                        $('#msg_success').html('');
                        $('#msg_error').html('Something went wrong.');      
                        $('#msg_progress').html('');

                        setTimeout(function(){
                          $('#msg_error').html('');
                          $('#msg_success').html('');
                          $('#msg_progress').html('');
                        },5000);  

                complete: functon()
                    {
                      $('#trans_init').val(1);
                    } 

                }
              }); 
            } 
          });
          }); 


        function change_title(a)
        {
          document.getElementById('type_of_app').innerHTML = a; 
        }

    </script>
  </body>
</html>