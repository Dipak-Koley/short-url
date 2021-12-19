function gmailLogIn(userInfo){
    var userProfile=userInfo.getBasicProfile();
    console.log(userProfile)
}
function logout(){
    var auth = gapi.auth2.getAuthInstance();
    auth.signOut();
}