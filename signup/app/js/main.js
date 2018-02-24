
var screenWidth=document.documentElement.clientWidth;
//alert(screenWidth);

if(screenWidth <500)
{
    $(document).ready(function(){
        $("#sflBtn").click(function(){
            $(".signin-content").hide(function(){
                $(".signup-content").animate({top:'0px'},function(){
                    $(this).show();
                    document.title="Signup form";
                });
            });
        });
    });


    $(document).ready(function(){
        $("#sinflBtn").click(function(){
            $(".signup-content").hide(function(){
                $(".signin-content").show();
                document.title="Signin Form";
            });
        });
    });

    $(document).ready(function(){
        $(".forg-pass p").click(function(){
            $(".signin-content").hide(function(){
                $(".forget-content").animate({top:'50px'},function(){
                    $(this).show();
                    document.title="Forget Password";
                });
            });
        });
    });
    

    $(document).ready(function(){
        $("#sinflBtn2").click(function(){
            $(".forget-content").hide(function(){
                $(".signin-content").show();
                document.title="Signin Form";
            });
        });
    });


}else if (screenWidth >= 500 && screenWidth <=1100) {

    $(document).ready(function(){
    $("#sflBtn").click(function(){
        $(".signin-content").animate({top: '-610px',
                                      display:'none'},200,function(){
                                          $(".signup-content").toggle(10,function(){
                                              $(this).animate({top:'0px'},10);
                                              document.title="Signup Form";
                                          });
                                      });
    });
});

$(document).ready(function(){
    $("#sinflBtn").click(function(){
        $(".signin-content").animate({top:'0px',display:'block'},200,function(){
            $(".signup-content").animate({top:'700px'},10);
            $(".signup-content").toggle(1100);
            document.title="Signin Form";
        });
    });
});

$(document).ready(function(){
    $(".forg-pass p").click(function(){
        $(".signin-content").animate({top:'700px'},200,function(){
             $(".forget-content").show(function(){
                 $(this).animate({top:'100px'},200);
                 document.title="Forget Password";
             });
             $(this).toggle(1200);
        });
        });
    });


  $(document).ready(function(){
      $("#sinflBtn2").click(function(){
         $(".forget-content").animate({top:'-600px'});
         $(".signin-content").show(100);
         $(".signin-content").animate({top:'0px'},100);
         document.title="Signin Form";
          });
      });

}else {
    $(document).ready(function(){
        $("#sflBtn").click(function(){
            //$(".animate").addClass("flip");
            $(".signin-content").css({"transform" : "rotateY(180deg)"},200);
            $(".signup-content").css({"transform" : "rotateY(0deg)"},200);
            $(this).hide(300);
            $("#sinflBtn").show();
            document.title="Signup Form";
        });
    });

    $(document).ready(function(){
        $("#sinflBtn").click(function(){
            //$(".animate").addClass("flip");
            $(".signin-content").css({"transform" : "rotateY(0deg)"},200);
            $(".signup-content").css({"transform" : "rotateY(180deg)"},200);
            $(this).hide(300);
            $("#sflBtn").show();
            document.title="Signin Form";
        });
    });

    $(document).ready(function(){
        $(".forg-pass p").click(function(){
             $(".signin-content").css({"transform" : "rotateY(180deg)"},200);
             $(".forget-content").css({"transform" : "rotateY(0deg)"});
             document.title="Forget Password";
        });
    });

    $(document).ready(function(){
        $("#sinflBtn2").click(function(){
            $(".signin-content").css({"transform" : "rotateY(0deg)"},200);
             $(".forget-content").css({"transform" : "rotateY(180deg)"});
             document.title="Signin Form";
        });
    });

}









