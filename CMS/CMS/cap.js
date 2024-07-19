// document.addEventListener("copy",function(evt){
//     evt.clipboardData.setData("text/plain","");
//     evt.preventDefault();
//   });
//   function cap(){
//     var alpha = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'
//                  ,'W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i',
//                  'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z', '!','@','#','$','%','^','&','*','+'];
//                  var a = alpha[Math.floor(Math.random()*71)];
//                  var b = alpha[Math.floor(Math.random()*71)];
//                  var c = alpha[Math.floor(Math.random()*71)];
//                  var d = alpha[Math.floor(Math.random()*71)];
//                  var e = alpha[Math.floor(Math.random()*71)];
//                  var f = alpha[Math.floor(Math.random()*71)];

//                  var final = a+b+c+d+e+f;
//                  document.getElementById("capt").value=final;
//                }
//                function validcap()
//                {
//                 var username = document.getElementById('email').value;
//                 var password = document.getElementById('password').value;
//                 var stg1 = document.getElementById('capt').value;
//                 var stg2 = document.getElementById('textinput').value;
              




//                 if(stg1==stg2){
//                   return true;
//                 } 
             
//                 else{
//                     alert("wrong captcha code");  
//                     return false;
//                 }

//                 // if(username==null || username==""|| username.length==0)
//                 // {
//                 //   alert("please enter username");  
//                 // }
//                 // // else{return false;}
//                 // if(password==null || password==""|| password.length==0)
//                 // {
//                 //   alert("please enter password");  
//                 // }
//                 // else{return false;}

//                 // if(stg2==null || stg2=="" || stg2.length==0)
//                 // {
//                 //     alert("Fill captcha");
//                 //     return true;
//                 // }
//                 // else
//                 // {
//                 //   return false;
//                 // }
                
//                }