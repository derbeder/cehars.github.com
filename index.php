/*
Açılır Menü
*/
<script language="JavaScript">
<!-- 
// 
function go(){
if (document.selecter.select1.options[document.selecter.select1.selectedIndex].value != "none") {
location = document.selecter.select1.options[document.selecter.select1.selectedIndex].value
 }                       
}
//-->
</script>
<BASEFONT SIZE="2" face="Arial">
<FORM name="selecter">
<SELECT name="select1" size=5>
<OPTION value="http://www.turkcell.com.tr/turk/4x/sms/index.htm">Turkcell Mesaj Servisi
<OPTION value="https://212.58.18.140/servlet/com.turkcell.cis.SessionManagerServlet?service=BillingInfo&lang=tr">Turkcell Fatura Bilgileri
<OPTION value="http://www.telsim.com.tr/cgi-bin/sms/sms.cgi">Telsim - Mail Servisi
<OPTION value="http://212.65.128.10/fatura.nsf/fatura">Telsim Fatura Bilgileri
<OPTION value="http://www.datascope.com.tr/ise.htm">Borsa Şirketleri Analizleri
<OPTION value="http://www.osym.gov.tr/sonuclar/index.html">ÖSYM Sınav Sonuçları
<OPTION value="http://www.meb.gov.tr/sinavlar.htm">M.E.B Sınav Sonuçları
<OPTION value="http://www.hotelguide.com.tr">Türkiye Otel Rehberi
<OPTION value="http://www.englishpractice.com">İngilizce Online Pratik
<OPTION value="https://orderonline.demiryatirim.com.tr/orderonline/">Demirbank Order Online
<OPTION value="http://www.turkish-fltbooking.com/tkh1t.htm">THY Rezervasyon İşlemleri
<OPTION value="http://www.turnet.net.tr/143tarife.html">Turnet Kontör Tarifesi
<OPTION value="http://www.tcmb.gov.tr/kurlar/today.html">Merkez Bankası Döviz Kurları
<OPTION value="http://plasma.nationalgeographic.com/mapmachine/">Elektronik Dünya Atlası
<OPTION value="http://www.ada.net.tr/sanalkan/">Sanal Kan Arama Merkezi
<OPTION value="http://www.emekli.gov.tr/">Emekli Sandığı Maaş/İkramiye Hes.
<OPTION value="http://www.millipiyango.gov.tr/html/ustyeni.shtml">Milli Piy. ve Say. Loto Sonuçları
<OPTION value="http://madhaus.cns.utoronto.ca/tpc/tpc_home.html">Ücretsiz Faks Servisi
<OPTION value="http://www.dhmiata.gov.tr">Atatürk Havalimanı Geliş-Gidiş
<OPTION value="http://weather.yahoo.com/regional/Turkey.html">Hava Durumu
<OPTION value="http://www.beyazperde.com">Sinema Sayfaları
<OPTION value="http://www.devtiyatro.gov.tr">Devlet Tiyatroları
<OPTION value="http://www.lezzetmekan.com">Lezzet Mekanları
<OPTION value="http://www.travlang.com">Birçok Dilde Çeviri
<OPTION value="http://www.myphonebook.com">Sanal Adres Defteri
<OPTION value="http://www.123greetings.com">Elektronik Kart Gön.Serv.
<OPTION value="ftp://ftp.itu.edu.tr/pub">FTP 
<OPTION value="http://www.turkishodyssey.com">Turkish Odyssey
</SELECT>
	<!TD ALIGN="CENTER" VALIGN="right">
	<BASEFONT SIZE="2">
	<INPUT TYPE="button" VALUE="Git" onclick="go()">
	</FORM>
--------------------------------------------------------------------------------------------------------------------

/*
uzay scripti
*/
<!--- KAYNAK: http://www.gezginler.net --->
<body bgcolor=#000000 onLoad="fly()">
<script language="JavaScript">
SmallStars = 30; 
LargeStars = 10;

SmallYpos = new Array();
SmallXpos = new Array();
LargeYpos = new Array();
LargeXpos = new Array();
Smallspeed= new Array();
Largespeed= new Array();
ns=(document.layers)?1:0;
if (ns){
for (i = 0; i < SmallStars; i++)
{document.write("<LAYER NAME='sn"+i+"' LEFT=0 TOP=0 BGCOLOR='#FFFFF0' CLIP='0,0,1,1'></LAYER>")}
for (i = 0; i < LargeStars; i++)
{document.write("<LAYER NAME='ln"+i+"' LEFT=0 TOP=0 BGCOLOR='#FFFFFF' CLIP='0,0,2,2'></LAYER>")}
}
else{
document.write('<div style="position:absolute;top:0px;left:0px">');
document.write('<div style="position:relative">');
for (i = 0; i < SmallStars; i++)
{document.write('<div id="si" style="position:absolute;top:0;left:0;width:1px;height:1px;background:#fffff0;font-size:1px"></div>')}
document.write('</div>');
document.write('</div>');
document.write('<div style="position:absolute;top:0px;left:0px">');
document.write('<div style="position:relative">');
for (i = 0; i < LargeStars; i++) 
{document.write('<div id="li" style="position:absolute;top:0;left:0;width:2px;height:2px;background:#ffffff;font-size:2px"></div>')}
document.write('</div>');
document.write('</div>');
}
WinHeight=(document.layers)?window.innerHeight:window.document.body.clientHeight;
WinWidth=(document.layers)?window.innerWidth:window.document.body.clientWidth;
//Inital placement!
for (i=0; i < SmallStars; i++) 
 {                                                                
 SmallYpos[i] = Math.round(Math.random()*WinHeight);
 SmallXpos[i] = Math.round(Math.random()*WinWidth);
 Smallspeed[i]= Math.random()*5+1;
}
for (i=0; i < LargeStars; i++) 
 {                                                                
 LargeYpos[i] = Math.round(Math.random()*WinHeight);
 LargeXpos[i] = Math.round(Math.random()*WinWidth);
 Largespeed[i]= Math.random()*10+5;
}
function fly(){
var WinHeight=(document.layers)?window.innerHeight:window.document.body.clientHeight;
var WinWidth=(document.layers)?window.innerWidth:window.document.body.clientWidth;
var hscrll=(document.layers)?window.pageYOffset:document.body.scrollTop;
var wscrll=(document.layers)?window.pageXOffset:document.body.scrollLeft;

for (i=0; i < LargeStars; i++)
{
 LargeXpos[i]-=Largespeed[i];
 if (LargeXpos[i] < -10)
  {
  LargeXpos[i]=WinWidth;
  LargeYpos[i]=Math.round(Math.random()*WinHeight);
  Largespeed[i]=Math.random()*10+5;
  }
 if (ns){
 document.layers['ln'+i].left=LargeXpos[i];
 document.layers['ln'+i].top=LargeYpos[i]+hscrll;
 }
 else{
 li[i].style.pixelLeft=LargeXpos[i];
 li[i].style.pixelTop=LargeYpos[i]+hscrll;
 }
}

for (i=0; i < SmallStars; i++)
{
 SmallXpos[i]-=Smallspeed[i];
 if (SmallXpos[i] < -10)
  {
  SmallXpos[i]=WinWidth;
  SmallYpos[i]=Math.round(Math.random()*WinHeight);
  Smallspeed[i]=Math.random()*5+1;
  }
 if (ns){
 document.layers['sn'+i].left=SmallXpos[i];
 document.layers['sn'+i].top=SmallYpos[i]+hscrll;
 }
 else{
 si[i].style.pixelLeft=SmallXpos[i];
 si[i].style.pixelTop=SmallYpos[i]+hscrll;
 } 
}
setTimeout('fly()',10);
}
//-->
</script>
<!--- KAYNAK: http://www.gezginler.net --->
