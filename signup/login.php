<!doctype html>
<html lang="en">
    <head>
        <title>
            SIGN IN
        </title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="app/css/main.css" />
        <link rel="stylesheet" type="text/css" href="plugin/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="app/css/600px.css" media="screen and (min-width: 550px)" />
        <link rel="stylesheet" type="text/css" href="app/css/1000px.css" media="screen and (min-width: 1000px)" />
        <script type="text/javascript" src="plugin/js/jquery_v1_11_1.js"></script>
        <script type="text/javascript" src="app/js/main.js"></script>
       <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"> </script>-->
    </head>

    <body>
        <div class="container">
            <div class="animate">
            <div class="signin-content">
                <div class="user-icon">
                    <img src="images/user_icon.png" draggable="false"/>
                </div>
                <form class="signin" id="signin" method="POST" action="signup.html" onsubmit="return authenticate()">
                
                <div id="email-container">
                    <input type="email" name="email" id="signin-email" placeholder="Email" />
                    <img src="images/user_icon_input.png" draggable="false"/>
                </div>
                <br/>
                <div id="pass-container">
                <input type="password" name="password" id="signin-password" placeholder="Password" />
                <img src="images/lock.png" draggable="false"/> 
                </div>
                <br/>
                <input type="submit" value="Sign in" />
                 
                <div class="forg-pass"><p>Forget password ?</p></div>
                <input type="button" value="Connect with facebook" id="fb-lgn"/>
                <input type="button" value="Login with Twitter" id="twi-lgn"/>
                <input type="button" value="Login with Google+" id="google-lgn"/>
                </form>
<div class="signupFormLink-container">
    <button id="sflBtn">Don't have an Account? Signup</button>
</div>

            </div>


            <div class="signup-content">
                <div class="user-icon">
                    <img src="images/user_icon.png" draggable="false"/>
                </div>
                <form class="signup" id="signup" method="post" action="signup.html" onsubmit="return validate()">
                     <div id="usrName-container"> 
                         <input type="text" name="username" id="signup-username" placeholder="Username" />
                         <img src="images/user_icon_input.png" draggable="false" />
                     </div>
                         <br/>
                      <input type="email" name="email" id="signup-email" placeholder="Email" /><br/>
                      <input type="tel" name="phoneNumber" id="signup-phone-number" placeholder="Phone number" /><br/>
                     <div id="pass-container">
                         <input type="password" name="password" id="signup-password" placeholder="Password" />
                         <img src="images/lock.png" draggable="false" />
                     </div>  
                       <br/>
                       <div id="cpass-container">
                         <input type="password" name="confirmPassword" id="signup-confirmPassword" placeholder="Confirm Password" />
                         <img src="images/lock.png" draggable="false" />
                         </div>
                        <br/>
                      <select id="signup-dropDown" name="listValue" class="dropDown" >
                          <option selected>--select category--</option>
                          <option value="student">Student</option>
                          <option value="employee">Employee</option>
                      </select><br/>
                      <input type="submit" value="Sign Up" /><br/>
                      <span class="seperator"></span>
                      <input type="button" value="Connect with Facebook" id="signup-fb-connect" /><br/>
                      <input type="button" value="Login with Google+" id="signup-google-connect" />
                </form>

<div class="signinFormLink-container">
       <button id="sinflBtn" class="flipToSignin">Already have an Account. Signin</button>
 </div>

            </div>

            <div class="forget-content">
                <div class="user-icon">
                    <img src="images/user_icon.png" draggable="false"/>
                </div>
                <form class="passReset" id="passReset" method="POST" action="signup.html" onsubmit="return passReset()">
                    <input type="email" name="email"  id="forget-email" placeholder="Email" /><br/>
                    <input type="submit" value="Send Password Reset Link" />
                </form>
                <div class="signinFormLink-container">
       <button id="sinflBtn2" class="flipToSignin">Already have an Account. Signin</button>
 </div>
            </div>
        </div>
        </div>
    </body>


    <script>
        //login authentication
       function authenticate(){
                var email=document.forms[0].email.value;
                var pass=document.forms[0].password.value;
                if(email=='' || pass == '')
                {
                    alert(" fields cannot blank");
                    return false;
                }
                else if(email=="future@mail.com" && pass=="belongstome")
                {
                    alert("Welcome to the future");
                    return true;
                }
                else{
                    var error="Username or password is blank";
                    var animate="animated flash";
                    if(pass!="belongstome" && email!="future@mail.com")
                    {
                        $(".signin-content #email-container").addClass(animate).animate({border:'2px solid #e10'}).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oAnimationEnd animationend",function(){
                        $(this).removeClass(animate);
                    });
                    $(".signin-content #pass-container").addClass(animate).animate({border:'2px solid #e10'}).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oAnimationEnd animationend",function(){
                        $(this).removeClass(animate);
                    });
                    }
                    else if(email!="future@mail.com")
                     $(".signin-content #email-container").addClass(animate).animate({border:'2px solid #e10'}).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oAnimationEnd animationend",function(){
                        $(this).removeClass(animate);
                    });
                    else if(pass!="belongstome"){
                         $(".signin-content #pass-container").addClass(animate).animate({border:'2px solid #e10'}).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oAnimationEnd animationend",function(){
                        $(this).removeClass(animate);
                    });
                    }
                    return false;              
                }
                
            }


            function validate(){
                var username=document.forms[1].username.value;
                var password=document.forms[1].password.value;
                var email=document.forms[1].email.value;
                var phoneNumber=document.forms[1].phoneNumber.value;
                var confirmPassword=document.forms[1].confirmPassword.value;
                var listOption=document.forms[1].listValue.value;
                var animate="animated flash"
                if(confirmPassword!=password)
                {
                    $(".signup-content #cpass-container").addClass(animate).animate({border:'2px solid #e00'}).one("webkitAnimationEnd mozAnimationEnd oAnimationEnd MSAnimationEnd animationend",function(){
                        $(this).removeClass(animate);
                    });
                    return false;
                }else
                {
                    alert(username+"\n"+password+"\n"+email+"\n"+phoneNumber+"\n"+confirmPassword+"\n"+listOption);
                    return true;
                }
                //var fh = fso.CreateTextFile("c:\\Test.txt", true);
                /*
                    var fso = new ActiveXObject("Scripting.FileSystemObject");
                    
                    var FileObject = fso.CreateTextFile("F:\\web_pages\logs.txt", true);
                    FileObject.writeLine("File handling in Javascript");
                    FileObject.close();

                    var fh = fopen("C:\\MyFile.txt", 8,true); 

                    if(fh!=-1) 
                    {
                    var str = "Some text goes here...";
                    fwrite(fh, str);
                    fclose(fh);   
                    }*/
                // return false;
                //document.write("The contents of " + getCurrentFolder()+"<br />");
                //var fso = new ActiveXObject("Scripting.FileSystemObject");
                // 2=overwrite, true=create if not exist, 0 = ASCII
                //varFileObject = fso.OpenTextFile("C:\\Sachin.txt", 2, true,0);
                //varFileObject.write("File handling in Javascript");
                //varFileObject.close();
            }
    </script>
</html>