---
layout: post
title:  Linux e-dergi indirme betiği
---

Sizi dergileri tek tek indirmekten kurtaracak bir betik..
Dergi listeleri betik içinde değil, Internet’te tutulduğu için her seferinde betiği yeniden indirmenize gerek yok, 
sadece betiğe yeni bir özellik eklendiğinde indirmeniz yeterli.

1. Sudo – Ubuntu Türkiye E-Dergisi
2. Full Circle Magazine Türkçe
3. Full Circle Magazine
4. Özgürlükİçin.com e-dergi
5. Pardus-Linux.Org eDergi
6. Root – Linux Mint Türkiye E-dergisi
7. eniXma
8. LKD Penguence
9. Erciyes Üniversitesi Linux Topluluğu, Erciyes Linux Dergisi

Betiğin yeni sürümünde aşağıdaki resimlerden de görüleceği üzere bir takım yenilikler mevcuttur. Bu yenilikler;

<ul style="text-align: justify;"> 
<li>Dergilerin belli sayılarını indirme özelliği eklenmiştir.</li> 
<li>İnternet bağlantısının bulunup bulunmadığını kontrol etme özelliği eklenmiştir. </li> 
<li>Dergiler wget ile indirilirken ekrana gelen çıktılar sadeleştirilmiştir.</li> 
<li>Betik çalıştırıldığında karşımıza gelen listedeki dergi sayılarının elle betik içerisine yazılması yerine bu işlemin Dropbox hesabındaki listeler içinden alınması sağlanmıştır.</li> 
</ul> 

Yeni sürüme ait eksi olarak kabul edebileceğimiz tek şey ilk açılma süresinin 7-8 saniye civarında olmasıdır. 
Süre sizin bilgisayar ve internet bağlantı hızınıza göre farklılık gösterebilir. 
Sürenin artma sebebi ise; betiğe eklenen internet bağlantı kontrolü ve dergi sayılarının otomatik olarak 
listelerden alınmasından kaynaklanmaktadır.

<p style="text-align: justify;">Betiğin ekran görüntüleri şöyle;</p> 
<img src="/chrome/yazılar/betik/1.png"  width="578" height="293" />
<img src="/chrome/yazılar/betik/1.png" width="578" height="293" />
<img src="/chrome/yazılar/betik/1.png" width="578" height="293" /> 

Betiği aşağıdaki bağlantıdan indirebilirsiniz.

<a href="http://www.emreaytac.com/diger/eDergi.tar.gz">eDergi İndirme Betiği</a>

Betiği ev dizininize indirdiğinizi varsayarak nasıl kullanabileceğinizi yazıyorum (aşağıdaki komutlar uçbirimde yazılacaktır);


1. Betiğin bulunduğu dizine gidelim;<br/>
<pre>cehars@ceng:~$ cd ~</pre>

2. Betiği arşivden çıkarmak için;<br/>
<pre>cehars@ceng:~$ tar zxvf eDergi.tar.gz</pre>

3. Betiğe çalıştırma yetkisi verme;<br/>
<pre>cehars@ceng:~$ chmod a+x eDergi</pre>

4. Betiği çalıştırma;<br/>
<pre>cehars@ceng:~$ ./eDergi</pre>

Not: Eğer isterseniz 3. ve 4. adımların yerine aşağıdaki komutu yazarak çalıştırabilirsiniz. 
Aşağıdaki komut; çalıştırılacak dosyanın çalıştırılabilir yetkisi olup olmadığına bakmaz.<br/>
<pre>cehars@ceng:~$ sh eDergi</pre>

<br/>
Betiği yazan Emre Aytaç'a teşekkürler. Ellerine sağlık.. 

   <span align="center" class="Apple-style-span" style="color: rgb(255, 0, 0); font-family: 'Comic Sans MS'; font-size: 15px; line-height: 22px; text-align: justify;"> ana sayfa </span>
