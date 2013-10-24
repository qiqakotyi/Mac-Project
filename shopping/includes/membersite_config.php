<?PHP
require_once("./includes/RegistrationConfirmation.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('user11.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('qiqakotyi@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgus
//ers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'root',
                      /*password*/'',
                      /*database name*/'shopping',
                      /*table name*/'register');

//random string soure clink: http://tinyurl.com/randstr

$fgmembersite->SetRandomKey('8oxeBiG2WDPsrmZ');

?>