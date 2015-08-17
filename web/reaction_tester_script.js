var clickedTime; var createdTime; var reactionTime;
       function getRandomColor() {
           var letters = '0123456789ABCDEF'.split('');
           var color = '#';
           for(var i = 0; i < 6; i++){
               color += letters[Math.floor(Math.random() * 15)];
           }
           return color;
       }
       function getRandomPhoto(){
           var photos = ["https://lh3.googleusercontent.com/m2u8KWj4PkRStKGJOgQTiZvHPlnALXNfiaI2x_KQveA=w1058-h1410-no","https://lh3.googleusercontent.com/uRAGultlNP6V3iSma2BJPN00x_24sy8QD19PsW3cF6Y=w1058-h1410-no","https://lh3.googleusercontent.com/kPyttU8unEfuEEcEBxDvOnHjk_nUJ5jLdGMv5foWyIs=w1058-h1410-no","https://lh3.googleusercontent.com/ml7DKekMSzeMUYWdK6RgSSFvfFB7CuH6EcZNPkIq7S0=w1880-h1410-no","https://lh3.googleusercontent.com/Zg7CHOMRcC76q3VT5UOSy3oz90dSX88cggouD-xha8U=w1058-h1410-no","https://lh3.googleusercontent.com/tu-gBN7WwG8QIeNQTnxbkTbi98PVnEAqI28slwMKoUQ=w1880-h1410-no","https://lh3.googleusercontent.com/sd4jppEFeSNhTnkI9PSvOXkfrknqczMYdSUFgjtA008=w1880-h1410-no","https://lh3.googleusercontent.com/0NZB1umZ9Cqb9lc8-DWevSzuB5IKfO3w_rcs6apLAN0=s1212-no","https://lh3.googleusercontent.com/H6tqtWrUp3vTQE_zD1EU1yGmnVp7uAkxtI0mWOtlPGM=w1058-h1410-no","https://lh3.googleusercontent.com/WBLiEt1M7xOOh8ncbLJSvTcxeTPQPB3hhNjh08tsDsk=w1058-h1410-no","https://lh3.googleusercontent.com/I6epsEyrHyx5hm2c7Aix8bU97fo5MiRZSxfOQwIN0zg=w1880-h1410-no","https://lh3.googleusercontent.com/feE6C8VZtwzjKn8XgUTTYGWrQrTVQ3cLrGQ1q9A729Q=w1880-h1410-no","https://lh3.googleusercontent.com/95CKdaHfvQ5PacpmBBIa4gPM7iw7YqPykSI8RraTZIw=w1058-h1410-no","https://lh3.googleusercontent.com/XJgMPHPrRsh16qEmxu4t0VR271lK58bUFhsCJRmE0dk=w1880-h1410-no","https://lh3.googleusercontent.com/hC57XrBX2XWfSXlzDW7d6exRaYKqTd0oWxDGiLkUTBY=w1880-h1410-no","https://lh3.googleusercontent.com/5roNQFBMCmPZsafVMoZDmSBm9sWEwwRCevrG24cfboU=s1410-no","https://lh3.googleusercontent.com/T_5s_FGUYMsp705caKpmHuI5EP7qPquSjscxnMI4-YE=s1410-no","https://lh3.googleusercontent.com/7t-Wb2ZpuWFU1O9HWQlR6kMINhNhXGKBOd93W6zxnt4=w1880-h1410-no","https://lh3.googleusercontent.com/WCbBE8XY5fi_HcSSQnDtuXFYRz8ThOvmJHD_KZcdFE4=w1880-h1410-no","https://lh3.googleusercontent.com/eBG5Sgyv6vfjRynDkSdlqemo5fUHz4gTT7dCKjiapb8=w1880-h1410-no","https://lh3.googleusercontent.com/bOKa0lB3fOzExbzh61kiwQ0GHJLtYRUWOG2FTgz2d7o=w1058-h1410-no"];
           return photos[Math.floor(Math.random() * photos.length)];
           
       }
       function makeBox() {
           
           var time=Math.random()*2000;
           setTimeout(function(){
               if(Math.random()>0.5){
                    document.getElementById("box").style.borderRadius="100px";
               }
               else{
                   document.getElementById("box").style.borderRadius="0px";
               }
               
                var top =Math.random()*($(window).height()-500);
                var left = Math.random()*($(window).width()-500);
                document.getElementById("box").style.top=top+"px";
                document.getElementById("box").style.left=left+"px";
                document.getElementById("box").style.backgroundColor=getRandomColor();
                document.getElementById("box").style.backgroundSize="auto 100%";
         //       document.getElementById("box").style.backgroundImage="url("+getRandomPhoto()+")";
                document.getElementById("box").style.display="block";
                createdTime=Date.now();
            },time);
            
       };
       document.getElementById("box").onclick =function(){
           
           clickedTime=Date.now();
           reactionTime = (clickedTime-createdTime)/1000;
           
           document.getElementById("time").innerHTML=reactionTime+'s';
           
           this.style.display="none";
           makeBox();
           
       };
       makeBox();
       