<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>

    <link rel="stylesheet" href="static/css/chat.css">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="static/css/clouds.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/buttons.css";
</head>

<body ontouchstart="">
    <!-- CHAT BAR BLOCK -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="chat-bar-collapsible" style="max-width:100%;height:auto">
  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <div class="imgslide">
                    <img src="static/image/python.jpg" style="max-width:100%;height:auto;">
                </div>
                <div class="imgslide2">
                    <img src="static/image/python.jpg" style="max-width:100%;height:auto;">
                </div>
                <div class="imgslide3">
                    <img src="static/image/python.jpg" style="max-width:100%;height:auto;">
                </div>
                <div class="imgslide4">
                    <img src="static/image/python.jpg" style="max-width:100%;height:auto;">
                </div>
                <div class="imgslide5">
                    <img src="static/image/python.jpg" style="max-width:100%;height:auto;">
                </div>
                <div class="imgslide6">
                    <img src="static/image/python.jpg" style="max-width:100%;height:auto;">
                </div>
               

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <div class="full-chat-block" style="max-width:100%;max-height:100%;">
                <!-- Message Container -->
                 <div class="content" style="max-width:100%;height:auto;">
         
                
                <div class="outer-container" style="max-width:100%;height:auto;">
                     <div class="chat-container" style="max-width:100%;height:auto;">
                    
                           <div class="HeaderBarThreshold button1" onclick="document.location='login_form.php'">

  
                         <input type="submit" value="logout" style="visibility:hidden;"/>
                          
                        </div>    
                        <br/>
                        <div class="HeaderBarThreshold button1" onclick="document.location='index2.php'">

  
                         <input type="submit" value="Chimie" style="visibility:hidden;"/>
                          
                        </div>    
                        <br/>
                        <!-- Messages -->
                        <div id="chatbox" style="max-width:100%;height:auto;">
                        
                
               
                
               
                
                            <h5 id="demo"></h5>

                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>

                        </div>
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <!-- User input box -->
                        <div class="chat-bar-input-block" style="max-width:100%;height:auto;">
                            <div id="userInput" style="max-width:100%;height:auto;">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                       placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons" style="max-width:100%;height:auto;">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                   onclick="heartButton()"></i>

                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                   onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom" style="max-width:100%;height:auto;">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>
<script src="static/scripts/responses_python.js">
</html>