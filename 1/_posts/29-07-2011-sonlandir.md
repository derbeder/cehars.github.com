---
layout: post
title: Süreç sonlandırma
---

Konuya, başlıkta adı geçen <b>"süreç"</b> ile başlayalım. Süreç yani
İngilizce adı ile process; çalışan dosyaların çalışır durumdaki haline
verilen isim olarak tanımlanıyor. Yani daha açık olarak ve örnek
üzerinden anlatacak olursak; Pidgin anında mesajlaşma aracını
çalıştırmak için kullandığımız "çalışan" dosya <b>"/usr/bin/pidgin"</b>. Bu
komutu uçbirimden verdiğimiz (programı menüden tıklayarak
çalıştırdığımızda da arkada olan olay bu komutun verilmesi tabi)
zaman Pidgin programı belleğe yüklenmiş oluyor ve bu belleğe
yüklenmiş durumundan artık <b>süreç (process)</b> olarak bahsediyoruz.

<p>Çalıştırdığımız Pidgin'i sonlandırmak için izleyeceğimiz bir kaç 
yol mevcut. Tabi Pidgin'i tıkladık, normal şartlar altında da bir kaç
alternatifimiz mevcut; bildirim alanında sağ tıklayarak; çıkış diyebiliriz.
Ya da program ana sayfası açıkken menülerden <b>kişiler -> çıkış</b>
alternatifini kullanarak, bu süreci sonlandırabiliriz; ki zaten olağan
durum bunu gerektirir. Bizim inceleyeceğimiz ise şu durum; bir süreci
sonlandırırken süreçten cevap alınmaması durumda izlememiz gereken yol.
</p>

<p>bir programı kapatmak istiyoruz ve bu nedenle yukarıdaki
(metacity'den bahsediyorum) çarpı işaretine bastık. Fakat süreç yanıt vermiyor. Durum bu şekildeyken epey alternatifimiz mevcut.
<b>pkill/killall.</b> Bu komutlar ile cevap vermeyen programımıza uçbirimden
ulaşmamız ve sonlandırmamız mümkün. Örneğin uçbirimden aşağıdaki komutu vermemiz bir alternatif olabilir. 
</p>

Ya da başka alternatif olarak  
<code>killall pidgin</code> 
<p><b>Ek bilgi;</b></p>

<p>Bu komutlar ile bir süreci sonlandırmak zorunda değilsiniz tabii.
Örneğin kendi yazdığınız bir uygulama için yanıt vermeme
durumlarında yapılacak işlemler için bir takım fonksiyonları devreye
sokmak isteyebilirsiniz. <b>"killall programadı"</b> bu komut varsayılan olarak
süreci sonlandırır. Fakat ismindeki kill sizi yanıltmasın, bu uygulama 
ile, önceden de belirttiğim gibi bir süreci sonlandırmak (kill) zorunda 
değilsiniz. killall komutunun şu kullanımını sıkça görebilirsiniz; <
<br /><code>killall -9 program_adı </code>
</p>

<p>Bu komut ile yapılan şu; programa kill sinyali (SIGKILL)
gönderiliyor. Bu sinyal ise programı doğrudan sonlandırmak için
kullanılıyor. Fakat parametresini değiştirerek bu durum farklı bir hale
getirilebilir. Örneğin;
<br /><code>killall -10 program_adı</code>
</p>

Bu şekilde bir programa SIGKILL değil, SIGUSR1 sinyali göndermiş
olursunuz. SIGUSR1 sinyali, üzerine fonksiyon yazılabilen bir sinyaldir.
Yani siz programınıza şunu yaptırabilirsiniz;
SIGUSR1 sinyalini alırsan; "şu, şu, şu" fonksiyonları çalıştır. Ya da aynı
durum SIGUSR2 ya da diğer sinyal fonksiyonu yazılabilen sinyaller için de geçerlidir.
<br /><code>killall -12 program_adi</code>
<br />
Sürece SIGUSR2 sinyali gönderilir. Yani gördüğünüz gibi sadece
program sonlandırmak için kullanmak zorunda değilsiniz.

<p>
Bunları "ek bilgi" olarak değerlendirdim, çünkü bu komutları (killall 
pkill) süreç sonlandırmak için kullanmak zorunda değilsiniz, ama 
bizim başlığımız süreç sonlandırma. 
Şimdi sonlandırma kısmına gelecek olursak; gördüğünüz gibi yan 
alamadığımız süreçleri uçbirim üzerinden sonlandırabiliriyoruz. Hatta 
uçbirim üzerinden sonlandırmak için de tek alternatifimiz bu komutla 
değil. Sanırım çoğumuz gerekli durumlarda sistemin anlık durumunu 
gözetlemek için <b>"top"</b> komutunu kullanıyoruzdur. Uçbirimden "top" 
komutu ile sistemi izlerken <b>"k"</b> tuşuna basın (burada da aynı durum 
mevcut, yani k kısayolu kill'den geliyor fakat sadece sonlandırma 
işlemi yapmak zorunda değiliz). k tuşuna bastıktan sonra sizden bir 
<b>pid numarası</b> istenecek; 
<br /><code>PID to kill:</code>
Buraya işlem yapacağınız sürecin pid numarasını girin (istenilen süreç
listede olmayabilir de, pid numarasını öğrenmenin alternatif bir yolu
için, ipuçları bölümüne bakabilirsiniz). Daha sonra sizden bir girdi
daha istenecek;
<br /><code>Kill PID 3460 with signal [15]:</code>
Bu bölümde de bize sorulan sürece göndermek istediğimiz sinyalin
numarasıdır. Yine 9 göndererek sonlandırabiliriz (SIGKILL).
Bir başka alternatif olarak <b>htop</b> komutu verip (sisteminizde htop yüklü
değilse şu komut ile kurabilirsiniz; sudo apt-get install htop), işlem
yapacağımız süreç üzerine gelerek "k" tuşuna bastığınızda size biraz
daha görsel ve açık olarak göndermek istediğiniz sinyal sorulacak.
</p>
<p>
Buradan istediğiniz sinyali seçebilirsiniz gönderebileceğiniz
diğer sinyal alternatiflerini de görebilirsiniz.
Sonlandırma işlemi için SIGKILL sinyalinin en garanti olacağını
belirterek geçelim.
</p>

<p>Uzun uzadıya anlattığımız durumun özeti şu şekilde; bir süreci
sonlandırmak istediğimizde yanıt alamazsak uçbirimden süreci 
sonlandırabiliriz. Uçbirimden süreci sonlandırabilmek için aynı kapıya 
çıkan çeşitli alternatiflerimiz var. <b>pkill, killall, top, htop...</b> Hangisi 
kolayımıza giderse onu kullanabiliriz. 
</p>

<p>Senaryo biraz daha kötüleşsin; uçbirime ulaşamıyor olalım.
Yani masaüstümüz yanıt vermiyor, doğrudan X'in yanıt vermediği bir
durumda kaldığımızı düşünelim. Bu durumda normal yollardan
(menüden ya da alt + F2 ile) uçbirime ulaşmamız mümkün
olmayacaktır. Aslında bu adım sadece bir noktada yukarıdaki
işlemden fark gösterecektir.
Böyle bir durumda ihtiyaç duyacağımız araç; sistemi <b>"kilitleyen"</b>
süreçleri sonlandırmak için kullanacağımız bir uçbirim. Yani eğer bir
uçbirim bulabilirsek yukarıda bahsettiğimiz adımları uygulayabiliriz. Bu
noktada yardımımıza koşacak olan araç <b>"tty"</b>. İzleyeceğimiz yol ise <b>"ctrl
+ alt + F1"</b> kombinasyonunu kullanarak tty1'e düşmek. Bu işlemden
sonra bize giriş yapacağımız kullanıcı adı/şifre sorulacak. İşlemleri
devam ettireceğimiz kullanıcı adını girerek uçbirime düşebiliriz. Yani
artık bir uçbirime sahip oluyoruz. Sonlandırmak istediğimiz süreci
istediğimiz/kolayımıza gelen herhangi bir yol ile sonlandırabiliriz.
</p>

<a href="http://cehars.github.com/"><p align="center"><span  class="Apple-style-span" style="color: rgb(255, 0, 0); font-family: 'Comic Sans MS'; font-size: 15px; line-height: 22px; text-align: justify;" > ana sayfa </span></p></a>
