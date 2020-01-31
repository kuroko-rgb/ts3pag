<?php
// load framework files
require_once("libraries/TeamSpeak3/TeamSpeak3.php");
// connect to local server, authenticate and spawn an object for the virtual server on port 9987
$ts3_VirtualServer = TeamSpeak3::factory("serverquery://serveradmin@191.234.169.147:10011/?server_port=9987&nickname=somethin");
// create a top-level channel and get its ID


// create a sub-level channel and get its ID
$cid = $ts3_VirtualServer->channelCreate(array(
 "channel_name" => $_POST["channel_name"],
// "channel_name" => "My Channel",
 "channel_password" => $_POST["channel_password"],
 "channel_topic" => $_POST["channel_topic"],
 "channel_codec" => TeamSpeak3::CODEC_OPUS_MUSIC,
 "channel_flag_permanent" => TRUE,
 "cpid" => $top_cid,
));

header( 'Location: https://loscalvos.azurewebsites.net/' ) ;

// create privilege key for channel group in spedific channel
$key = $ts3_VirtualServer->channelGroupGetByName("Channel Owner")->privilegeKeyCreate($cid);  
*/
?>