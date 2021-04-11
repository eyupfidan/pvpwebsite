<?php
include ('config.php');
////////////İp Address System///////////
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
//////////////////Server Add System///////////////////////
$server_name = trim($_POST['s_name']);
$server_content = trim($_POST['s_content']);
$server_link = trim($_POST['s_link']);
$server_type = trim($_POST['s_type']);
$server_game = trim($_POST['s_game']);
$server_state = 'deactive';
$result = "";
if (empty($server_name) || empty($server_content) || empty($server_link) || empty($server_type) || empty($server_game))
{
    $result = "Boş alan bırakmayınız.";
}
if ($result == "")
{
    $query = $connect->prepare("INSERT INTO pvp_servers(s_name, s_content, s_link,s_type,s_game,s_state) VALUES(?, ?, ?, ?, ?, ?)");
    $query->bindParam(1, $server_name, PDO::PARAM_STR);
    $query->bindParam(2, $server_content, PDO::PARAM_STR);
    $query->bindParam(3, $server_link, PDO::PARAM_STR);
    $query->bindParam(4, $server_type, PDO::PARAM_STR);
	$query->bindParam(5, $server_game, PDO::PARAM_STR);
	$query->bindParam(6, $server_state, PDO::PARAM_STR);
    $query->execute();
    $result = "Server ekleme anasayfaya  yönlendiriliyorsunuz";
   echo '<meta http-equiv="refresh" content="3;url=https://pvpler.net">';
}
echo $result;
?>
