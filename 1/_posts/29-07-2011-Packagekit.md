---
layout: post
title: PackageKit

---

<p>
<b>Packegit</b>, bilgisayarınızda yazılımları daha kolay güncellemek
ve kurmak için tasarlanmış bir sistemdir. Birincil dizayn amacı, farklı
dağıtımların tüm grafiksel yazılım araçlarını birleştirmek ve süreci
daha az soğurması için <b>PolicyKit</b> benzeri bazı son teknolojileri
kullanmaktır. Başka bir deyişle <b>PackageKit</b>, oturum kullanıcısına
güvenli bir yolla melez bir distro ve melez-mimari API kullanarak
paketleri yönetme olanağı tanıyan bir D-Bus soyutlama katmanıdır.
</p>

<img src="/chrome/yazılar/Packagekit/5.jpg" width="700" height="350">

<p>Distroların güncel kullandıkları (yum, apt, conary, vb)
PackageKit tarafından derlenmiş ve betiklenmiş yardımcılar vasıtasıyla
kullanılmaktadır. PackageKit bu araçların yerlerini alma anlamını
taşımamaktadır, bunun yerine standart GUI ve metin kipi paket
yöneticileri tarafından kullanılanların genel bir soyut toplamını sağlar.
PackageKit'in kendisi paackagekitd adıyla anılan, sistem etkinleştirmeli
bir hizmettir.
Sistem etkinleştirmeli demek, sadece kullanıcı metin kipi ya da
grafiksel araç kullanıyorsa ve artık kullanımda değil ise çalıştırılabilir
demektir. Bu şu anlama gelir, boot düzenini ya da oturum başlatmayı
ertelemeyeceğiz ve kullanmıyorken bellek tüketmeyeceğiz.
</p>

<p>
Gnome-packagekit, GNOME masaüstünde PackageKit için
grafiksel araçların bir toplamının adıdır. KPackageKit ise PackageKit
için KDE'de tasarlanan grafiksel araçların adıdır.
<br /><a href="http://kde-apps.org/content/show.php/show.php?content=84745" target="_blank">http://kde-apps.org/content/show.php/show.php?content=84745</a>
</p>

<p>
Öntanımlı olarak PackageKit, kullanıcı kimlik denetimi için
PolicyKit kullanır. Yani siz, yönetici olarak bir kullanıcının yapacağı ve
yapamayacağı ince ayarları belirleyebilirsiniz.
</p>

<p>
Örneğin, bir yönetici ayrıcalıksız kullanıcıların sistem
güncelleme ve arama yapmasını fakat paket kurup kaldıramamasını
belirleyebilir. Ev kullanıcıları için kullanıcıya kendi parolasını ya da
yöneticinin root parolasını sorması doğaldır. policyKit ile, tüm bu
seçenekler olasıdır.
</p>
<br />
<img src="/chrome/yazılar/Packagekit/1.png" width="500" height="250">

<p>
Aşağıdaki senaryolar için PackageKit kullanabilirsiniz:
<ul>
	<li>Önyükleme zamanı güvenlik güncellemeleri</li>
	<li>Dosyaları otomatik olarak yükleme, ör. openoffice-clipart</li>
	<li>Yeni özellikler yükleme, ör. akıllı kart okuyucuları</li>
	<li>Ayrıcalıksız kullanıcılara anonim yapıdaki yazılımları yükleme izni verme</li>
	<li>Bilinmeyen dosya biçimlerini açma</li>
	<li>Dosyalar için bağımlılıkları kaldırma</li>
</ul>

</p>
Daha fazla detayı wiki sayfasında bulabilirsiniz.
Packagekit ve gnome-packagekit GPLv2+ lisanslıdır. Yani
bu
yazılımları GNU lisansı dahilinde değiştirebilir ve dağıtabilirsiniz.

<img src="/chrome/yazılar/Packagekit/6.png" width="400" height="200">

<a href="http://cehars.github.com/"><p align="center"><span  class="Apple-style-span" style="color: rgb(255, 0, 0); font-family: 'Comic Sans MS'; font-size: 15px; line-height: 22px; text-align: justify;" > ana sayfa </span></p></a>
