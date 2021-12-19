function gmailLogIn(userInfo){
    var userProfile=userInfo.getBasicProfile();
    console.log(userProfile.getId());
    console.log(userProfile.getName());
    console.log(userProfile.getImageUrl());
    console.log(userProfile.getEmail());
}
function logout(){
    var auth = gapi.auth2.getAuthInstance();
    auth.signOut();
}