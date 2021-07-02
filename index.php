<?php
include("./core/version.php");
include("./core/addcount.php");
$name = $_POST["bot-name"];
$prefix = $_POST["bot-prefix"];
$day = 86400;

function HashSecurity($length = 4) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">';
echo '<title>Undercord</title>';
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">';
echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">';
echo '<link rel="stylesheet" href="/assets/css/styles.min.css?h=c47129764b07ba292528e8a50df28f37">';
echo '</head>';
echo '';
echo '<body>';
echo '<nav class="navbar navbar-light navbar-expand-md navigation-clean">';
echo '<div class="container"><a class="navbar-brand" href="#">Undercord</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>';
echo '<div class="collapse navbar-collapse" id="navcol-1">';
echo '<ul class="navbar-nav ms-auto">';
echo '<li class="nav-item"><a class="nav-link" href="#">Status</a></li>';
echo '<li class="nav-item"><a class="nav-link" href="#">Support</a></li>';
echo '<li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Theme</a>';
echo '<div class="dropdown-menu"><a class="dropdown-item" href="#">Light</a><a class="dropdown-item" href="#">Dark</a><a class="dropdown-item disabled" href="#">Party</a></div>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</nav>';
echo '<section class="highlight-clean" style="margin-top: 120px;">';
echo '<div class="container">';
echo '<div class="intro">';
echo '<h2 class="text-center">Generate a Discord Bot with Ease!</h2>';
echo '</div>';
echo '<form class="text-center" style="height: 269px;width: 938px;margin-right: auto;margin-left: auto;" method="post" action="index.php">';
echo '<div class="row" id="name-of-bot" style="width: 156px;margin-left: auto;margin-right: auto;">';
echo '<div class="col" style="width: 927px;"><label class="col-form-label" for="bot-name" style="font-weight: bold;font-size: 21px;">Name of bot:</label></div>';
echo '</div><input class="form-control" type="text" id="bot-name" name="bot-name" style="width: 733px;margin-right: auto;margin-left: auto;" required="" minlength="1" maxlength="12">';
echo '<div class="row" id="prefix-of-bot" style="width: 173px;margin-left: auto;margin-right: auto;">';
echo '<div class="col" style="width: 927px;"><label class="col-form-label" for="bot-prefix" style="font-weight: bold;font-size: 21px;">Prefix for bot:</label></div>';
echo '</div><input class="form-control" type="text" id="bot-prefix" name="bot-prefix" style="width: 733px;margin-right: auto;margin-left: auto;" minlength="1" maxlength="4" required=""><input type="submit" class="btn btn-primary btn-lg" value="Generate" style="margin-top: 15px">';
echo '<div class="row" id="prefix-of-bot" style="width: 264px;margin-left: auto;margin-right: auto;" hidden="">';
echo '<div class="col" style="width: 1029px;">';
echo '<div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Moderation</label></div>';
echo '<div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-1">Help</label></div>';
echo '<div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-1">Template</label></div>';
echo '<div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1" style="width: 191px;">Advanced (Not Available)</label></div>';
echo '</div>';
echo '</div>';
echo '</form>';
echo '</div>';
if(isset($_POST["bot-name"]) || isset($_POST["bot-prefix"])){
    
    echo '<div class="alert alert-info" role="alert" id="template_output" style="width: 748px;margin-right: auto;margin-left: auto;margin-top: 20px;"><span>';
    echo '//Template Generated By Undercord</br>';
    echo '//Using discord.js.org templates</br>';
    echo '//Generator Version v'.GeneratorVersion().'</br>';
    echo 'const Discord = require(\'discord.js\');</br>';
    echo 'const client = new Discord.Client();</br>';
    echo 'let prefix = "'.$prefix.'";</br>';
    echo 'let name = "'.$name.'";</br>';
    echo 'client.on(\'ready\', () => {</br>';
    echo 'console.log(`Logged in as ${name}!`);</br>';
    echo '});</br>';
    echo '</br>';
    echo 'client.on(\'message\', msg => {</br>';
    echo 'if (msg.content === prefix+\'ping\') {</br>';
    echo 'msg.reply(\'pong\');</br>';
    echo '}</br>';
    echo '});</br>';
    echo '</br>';
    echo 'client.login(\'token\');';
    echo '</span></div>';
    setcookie("bot_name", $name, time() + ($day / 24));
    setcookie("bot_prefix", $prefix, time() + ($day / 24));
    AddCount();
}
else{
    echo '<div class="alert alert-info" role="alert" id="template_output" style="width: 748px;margin-right: auto;margin-left: auto;margin-top: 20px;" hidden=""><span>template_output</span></div>';
}

echo '</section>';
echo '<footer class="footer-clean">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-sm-4 col-md-3 item">';
echo '<h3>Services</h3>';
echo '<ul>';
echo '<li><a href="#">Discord Bot Generator</a></li>';
echo '<li><a href="#">Status Page</a></li>';
echo '</ul>';
echo '</div>';
echo '<div class="col-sm-4 col-md-3 item">';
echo '<h3>About</h3>';
echo '<ul>';
echo '<li><a href="#">Service</a></li>';
echo '<li><a href="#">Team</a></li>';
echo '<li><a href="#">History</a></li>';
echo '</ul>';
echo '</div>';
echo '<div class="col">';
if(GetCount() == 1){
    echo '<small class="form-text">Generated '.GetCount().' Bot Already!</small>';
}
else if(GetCount() == 0){
    echo '<small class="form-text">Generated No Bots... :/</small>';
}else{
    echo '<small class="form-text">Generated '.GetCount().' Bots Already!</small>';
}
echo '</div>';
echo '<div class="col-lg-3 item social"><a href="#"><i class="fab fa-discord"></i></a>';
echo '<p class="copyright">Undercord © 2021</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</footer>';
echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>';
echo '</body>';
echo '';
echo '</html>';
?>
