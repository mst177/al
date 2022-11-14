<?php

ob_start();
define('API_KEY','توكنك');
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$MROAN19s=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$MROAN19s);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{return json_decode($res);}}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$useree = $update->callback_query->message->chat->id;
$username = $message->from->username;
$fn = $message->from->first_name;
$user_id = $message->from->id;
$admin = "000"; 
date_default_timezone_set('Asia/Baghdad');
$today = date("l");
$nmonth = date("m");
$times = date("h:i");
$year = date("Y");
$n=date("n");

switch ($today) 
{
case "Saturday":  
$today="السبت"; 
break; 
case "Sutoday":  
$today="الأحد"; 
break;  
case "Motoday":  
$today="الاثنين"; 
break; 
case "Tuesday":  
$today="الثلاثاء"; 
break; 
case "Wednesday": 
$today="الأربعاء"; 
break; 
case "Thursday":  
$today="الخميس"; 
break; 
case "Friday":  
$today="الجمعة"; 
break; 
}  
switch ($nmonth){
case 1: $nmonth="كانون الثاني";
break;
case 2: $nmonth="شباط";
break;
case 3: $nmonth="أذار";
break;
case 4: $nmonth="نيسان";
break;
case 5: $nmonth="أيار";
break;
case 6: $nmonth="حزيران";
break;
case 7: $nmonth="تموز";
break; 
case 8: $nmonth="أب";
break;
case 9: $nmonth="أيلول";
break;
case 10: $nmonth="تشرين الأول";
break;
case 11: $nmonth="تشرين الثاني";
break;
case 12: $nmonth="كانون الأول";
break;
} 
if($text ==  '/start' ){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>" • اهلآ بك ،  [$fn](tg://user?id=$chat_id)
في بوت أمساكية شهر رمضان المبارك لمدينه بغداد وضواحيها 
للعام 
٢٠٢٠/١٤٤١ 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
اليوم |$n
🗓 ¦ الشهر { $nmonth }\n📆 ¦ الأسبوع { $today }\n⏰ ¦ الوقت { $times }\n📅 ¦ السنة { $year }
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"-💭سنن الصيام", 'callback_data'=>'ss'],['text'=>"-الدعاء عند الافطار", 'callback_data'=>'HHo']],
[['text'=>"-أبرز اﻷعمال المفضلة في شهر رمضان", 'callback_data'=>'pr']],
[['text'=>"اوقات الصلاه", 'callback_data'=>'time'],['text'=>"المطور💘",'url'=>'T.me/mroan8']],
]
])]);}


if($data=="hom"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"• اهلآ بك ، [$Name](tg://user?id=$chat_id2)
في بوت أمساكية شهر رمضان المبارك لمدينه بغداد وضواحيها 
للعام 
٢٠٢٠/١٤٤١ 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
🗓 ¦ الشهر { $nmonth }\n📆 ¦ الأسبوع { $today }\n⏰ ¦ الوقت { $times }\n📅 ¦ السنة { $year 

",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"-💭سنن الصيام", 'callback_data'=>'ss'],['text'=>"-الدعاء عند الافطار", 'callback_data'=>'HHo']],
[['text'=>"-أبرز اﻷعمال المفضلة في شهر رمضان", 'callback_data'=>'pr']],
[['text'=>"اوقات الصلاه", 'callback_data'=>'time'],['text'=>"المطور💘",'url'=>'T.me/mroan8']],
]
])]);}



if($data=="time"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"أمساكية شهر رمضان المبارك لمدينه بغداد وضواحيها 
الوقت

🗓 ¦ الشهر { $nmonth }\n📆 ¦ الأسبوع { $today }\n⏰ ¦ الوقت { $times }\n📅 ¦ السنة { $year 

",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الاول",'callback_data'=>'1day'],['text'=>"الثاني ",'callback_data'=>'2day']],
[['text'=>"الثالث",'callback_data'=>'3day'],['text'=>"الرابع",'callback_data'=>'4day']],
[['text'=>"الخامس",'callback_data'=>'5day'],['text'=>"السادس",'callback_data'=>'6day']],
[['text'=>"السابع",'callback_data'=>'7day'],['text'=>"الثامن",'callback_data'=>'8day']],
[['text'=>"التاسع",'callback_data'=>'9day'],['text'=>"العاشر",'callback_data'=>'10day']],
[['text'=>"احد عشر",'callback_data'=>'11day'],['text'=>"اثنا عشر",'callback_data'=>'12day']],
[['text'=>"ثلاثه عشر",'callback_data'=>'13day'],['text'=>"اربعه عشر",'callback_data'=>'14day']],
[['text'=>"خمسه عشر",'callback_data'=>'15day'],['text'=>"سته عشر",'callback_data'=>'16day']],
[['text'=>"سبعه عشر",'callback_data'=>'17day'],['text'=>"ثمانيه عشر",'callback_data'=>'18day']],
[['text'=>"تسعه عشر",'callback_data'=>'19day'],['text'=>"عشرون",'callback_data'=>'20day']],
[['text'=>"واحد وعشرون",'callback_data'=>'21day'],['text'=>"اثنان وعشرون",'callback_data'=>'22day']],
[['text'=>"ثلاث وعشرون",'callback_data'=>'23day'],['text'=>"اربعه وعشرون",'callback_data'=>'24day']],
[['text'=>"خمسه وعشرون",'callback_data'=>'25day'],['text'=>"سته وعشرون",'callback_data'=>'26day']],
[['text'=>"سبعه وعشرون",'callback_data'=>'27day'],['text'=>"ثمانيه وعشرون",'callback_data'=>'28day']],
[['text'=>"تسعه وعشرون",'callback_data'=>'29day'],['text'=>"ثلاثون",'callback_data'=>'30day']],
[['text'=>"🔙",'callback_data'=>'hom']],
]
])
]);
}

if($data == "1day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:50
-:⏰الظهر ؛  12:01
-:⏰ العصر ؛03:41
-:⏰ المغرب؛06:40
-:⏰العشاء؛ 08:10
",'show_alert'=>true]);}
if($data == "2day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:48
-:⏰الظهر ؛  12:00
-:⏰ العصر ؛03:41
-:⏰ المغرب؛06:41
-:⏰العشاء؛ 08:11
",'show_alert'=>true]);}
if($data == "3day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:47
-:⏰الظهر ؛  12:00
-:⏰ العصر ؛03:41
-:⏰ المغرب؛06:42
-:⏰العشاء؛ 08:12
",'show_alert'=>true]);}
if($data == "4day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:46
-:⏰الظهر ؛  12:00
-:⏰ العصر ؛03:41
-:⏰ المغرب؛06:42
-:⏰العشاء؛ 08:12
",'show_alert'=>true]);}
if($data == "5day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:44
-:⏰الظهر ؛  12:00
-:⏰ العصر ؛03:41
-:⏰ المغرب؛06:43
-:⏰العشاء؛ 08:13
",'show_alert'=>true]);}
if($data == "6day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:43
-:⏰الظهر ؛  12:00
-:⏰ العصر ؛03:41
-:⏰ المغرب؛06:44 
-:⏰العشاء؛ 08:14
",'show_alert'=>true]);}
if($data == "7day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:41
-:⏰الظهر ؛  12:00
-:⏰ العصر ؛03:41
-:⏰ المغرب؛06:45 
-:⏰العشاء؛ 08:15 
",'show_alert'=>true]);}
if($data == "8day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:40
-:⏰الظهر ؛  12:00
-:⏰ العصر ؛03:41
-:⏰ المغرب؛06:45
-:⏰العشاء؛ 08:15
",'show_alert'=>true]);}
if($data == "9day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:39
-:⏰الظهر ؛  12:00 
-:⏰ العصر ؛03:41
-:⏰ المغرب؛06:46 
-:⏰العشاء؛ 08:16 
",'show_alert'=>true]);}
if($data == "10day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:38
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:41
-:⏰ المغرب؛06:47 
-:⏰العشاء؛ 08:17 
",'show_alert'=>true]);}
if($data == "11day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:36 
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:41
-:⏰ المغرب؛06:48 
-:⏰العشاء؛ 08:18 
",'show_alert'=>true]);}
if($data == "12day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:35 
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:41
-:⏰ المغرب؛06:48 
-:⏰العشاء؛ 08:18 
",'show_alert'=>true]);}
if($data == "13day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:34
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:42
-:⏰ المغرب؛06:49 
-:⏰العشاء؛ 08:19 
",'show_alert'=>true]);}
if($data == "14day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:33
-:⏰الظهر ؛  11:59
-:⏰ العصر ؛03:42
-:⏰ المغرب؛06:50
-:⏰العشاء؛ 08:20 
",'show_alert'=>true]);}
if($data == "15day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:31
-:⏰الظهر ؛  11:59
-:⏰ العصر ؛03:42
-:⏰ المغرب؛06:51
-:⏰العشاء؛ 08:21 
",'show_alert'=>true]);}
if($data == "16day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:30
-:⏰الظهر ؛  11:59
-:⏰ العصر ؛03:42
-:⏰ المغرب؛06:51
-:⏰العشاء؛ 08:21
",'show_alert'=>true]);}
if($data == "17day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:29
-:⏰الظهر ؛  11:59
-:⏰ العصر ؛03:42
-:⏰ المغرب؛06:52
-:⏰العشاء؛ 08:22 
",'show_alert'=>true]);}
if($data == "18day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:28
-:⏰الظهر ؛  11:59
-:⏰ العصر ؛03:42
-:⏰ المغرب؛06:53
-:⏰العشاء؛ 08:23 
",'show_alert'=>true]);}
if($data == "19day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:27
-:⏰الظهر ؛  11:59
-:⏰ العصر ؛03:42
-:⏰ المغرب؛06:54
-:⏰العشاء؛ 08:24 
",'show_alert'=>true]);}
if($data == "20day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:26
-:⏰الظهر ؛  11:59
-:⏰ العصر ؛03:42
-:⏰ المغرب؛06:54
-:⏰العشاء؛ 08:24 
",'show_alert'=>true]);}
if($data == "21day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:25
-:⏰الظهر ؛  11:59
-:⏰ العصر ؛03:42
-:⏰ المغرب؛06:55
-:⏰العشاء؛ 08:25 
",'show_alert'=>true]);}
if($data == "22day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:24
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:42 
-:⏰ المغرب؛06:56
-:⏰العشاء؛ 08:26 
",'show_alert'=>true]);}
if($data == "23day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:23 
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:42 
-:⏰ المغرب؛06:57 
-:⏰العشاء؛ 08:27 
",'show_alert'=>true]);}
if($data == "24day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:22 
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:42 
-:⏰ المغرب؛06:57 
-:⏰العشاء؛ 08:27 
",'show_alert'=>true]);}
if($data == "25day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:21
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:42 
-:⏰ المغرب؛06:58 
-:⏰العشاء؛ 08:28 
",'show_alert'=>true]);}
if($data == "26day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:20 
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:42 
-:⏰ المغرب؛06:59 
-:⏰العشاء؛ 08:29 
",'show_alert'=>true]);}
if($data == "27day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:19 
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:43 
-:⏰ المغرب؛06:59
-:⏰العشاء؛ 08:29 
",'show_alert'=>true]);}
if($data == "28day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:18
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:43 
-:⏰ المغرب؛07:00 
-:⏰العشاء؛ 08:30 

",'show_alert'=>true]);}
if($data == "29day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:17 
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:43 
-:⏰ المغرب؛07:01 
-:⏰العشاء؛ 08:31 
",'show_alert'=>true]);}
if($data == "30day"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
- :⏰ الفجر ؛ 03:16
-:⏰الظهر ؛  11:59 
-:⏰ العصر ؛03:43
-:⏰ المغرب؛07:01 
-:⏰العشاء؛ 08:31 
",'show_alert'=>true]);}




if($data=="ss"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
سنن الصيام 
1- تعجيل الفطور بعد غروب الشمس.
2- تأخير السحور الى قبل طلوع الفجر .
3- اﻹفطار على تمرات فإن لم يجد فعلى الماء .
4- الدعاء عند الافطار واثناء الصيام .
5- كف اللسان عن فضول الكلام .
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"🔙",'callback_data'=>'hom']],]])]);}


if($data=="pr"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
1- اﻹكثار من الصدقة والاحسان الى الارحام والفقراء. 
2- قيام الليل .
3- قراءة القران الكريم .
4- الاعتكاف .
5- الاعتمار .
6-اﻹستغفار .
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"🔙",'callback_data'=>'hom']],]])]);}


if($data == "HHo"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",
'text'=>"
اللهم لك صمت وعلى رزقك افطرت
وعليك توكلت وبك امنت ذهب الظمأ
وابتلت العروق وثبت اﻷجر أن شاء الله
",'show_alert'=>true]);}







