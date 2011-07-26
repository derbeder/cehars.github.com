---
layout: post
title:  Linux e-dergi indirme betiği
---

Sizi dergileri tek tek indirmekten kurtaracak bir betik..
Dergi listeleri betik içinde değil, Internet’te tutulduğu için her seferinde betiği yeniden indirmenize gerek yok, 
sadece betiğe yeni bir özellik eklendiğinde indirmeniz yeterli.

﻿1. Sudo – Ubuntu Türkiye E-Dergisi
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
<img title="eDergi İndirme Betiği" src="/chrome/yazılar/betik/1"  width="578" height="293" />
<img src="/chrome/yazılar/betik/1" width="588" height="137" />
<img src="/chrome/yazılar/betik/1" width="643" height="125" /> 

Betiği aşağıdaki bağlantıdan indirebilirsiniz.

<a href="http://www.emreaytac.com/diger/eDergi.tar.gz"target="_blank">eDergi İndirme Betiği<a>

Betiği ev dizininize indirdiğinizi varsayarak nasıl kullanabileceğinizi yazıyoum (aşağıdaki komutlar uçbirimde yazılacaktır);


1. Betiğin bulunduğu dizine gidelim;
>>> cd ~

2. Betiği arşivden çıkarmak için;
>>> tar zxvf eDergi.tar.gz

3. Betiğe çalıştırma yetkisi verme;
>>> chmod a+x eDergi

4. Betiği çalıştırma;
>>> ./eDergi

Not: Eğer isterseniz 3. ve 4. adımların yerine aşağıdaki komutu yazarak çalıştırabilirsiniz. 
Aşağıdaki komut; çalıştırılacak dosyanın çalıştırılabilir yetkisi olup olmadığına bakmaz.
>>> sh eDergi


Betiği yazan Emre Aytaç'a teşekkürler. Ellerine sağlık.. 
