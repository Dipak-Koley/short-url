function gmailLogIn(userInfo){
    var userProfile=userInfo.getBasicProfile();
    jQuery.ajax({
        url:'../api/login.php',
        type: 'post',
        data: 'user_id='+userProfile.getId()+'&name='+userProfile.getName()+'&image=' +userProfile.getImageUrl()+'&email=' +userProfile.getEmail(),
        success: function(result){
            window.location.href="../index.php";
        }
    });
}
function logout(){
    var auth = gapi.auth2.getAuthInstance();
    auth.signOut();
    window.location.href="index.php";
    jQuery.ajax({
        url:'../api/logout.php',
        success: function(result){
            window.location.href="index.php";
        }
    });
}
function onLoad(){
    gapi.load('auth2',function(){
        gapi.auth2.init();
    });
}

function status(){
   /* jQuery.ajax({
        url:'../api/status.php',
        success: function(result){
            window.location.href="status.php";
        }
    });*/
    window.location.href="status.php";
}