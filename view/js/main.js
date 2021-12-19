function gmailLogIn(userInfo){
    var userProfile=userInfo.getBasicProfile();
    jQuery.ajax({
        url:'http://18.221.4.188/w/api/login.php',
        type: 'post',
        data: 'user_id='+userProfile.getId()+'&name='+userProfile.getName()+'image=' +userProfile.getImageUrl()+'email=' +userProfile.getEmail(),
        success: function(result){
            console.log(result)
        }
    });
}
function logout(){
    var auth = gapi.auth2.getAuthInstance();
    auth.signOut();
}