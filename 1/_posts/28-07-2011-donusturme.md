---
layout: post
title: Ubuntuda Root Olarak Oturum Açmak
---

Windows/Mac ve Ubuntu Linux Arasında Metin Dosyası Biçimi Dönüştürme

Windows ve Linux'ta oluşturulan metin dosyaları farklı hat bitimlerine sahiptir. Windows'ta bu ^M$ (CR-LF) ve Linux'ta $ (LF)dir. 
Bu durum farklı sistemlerden gelen metin dosyalarının metin düzenleyicileri tarafından tam anlamıyla okunamamasına neden olur.
Burada DOS/Mac (Windows & Mac OS) ve Unix (Linux) arasında
metin dosyalarını dönüştüren komutlar vereceğiz: dos2unix ve unix2dos
Ubuntu kullanıcıları komutları edinmek için aşağıdakini kullanırlar:

<code> sudo apt-get install dos2unix </code>

Örneğin, a.txt dosyasını unix biçimine dönüştürmek ve çıktı
dosyasının tarih damgasını girdi dosyasındakiyle aynı tutmak için,

dos2unix -k a.txt

a.txt dsyasını Mac'ten Unix biçimine dönştürmek için ise,

dos2unix -c mac a.txt

<h4>Parametreler:</h4>
<ul>
  <li>-k — Çıktı dosyasının tarih damgasını girdininkiyle aynı tut.</li>
  <li>-o – Yeni dosya kipi. Giriş dosyasını dönüştür ve çıktıyı çıkış dosyasına
yaz. Dosya adları çiftler halinde verilmeli veözel semboller
kullanılmamalı aksi halde dosyalarınızı kaybedebilirsiniz.</li>
  <li>-c – Dönüştütme kipini ayarla. Dönüştürme kipi ascii, 7bit, iso,
mac'ten biridir, ascii öntanımlı olandır.
</li>
</ul>


dos2unix ve unix2dos'u nasıl kullanacağınız hakkında daha fazlası
için, şunu okuyun:

man dos2unix

<a href="http://ubuntuguide.net/convert-text-file-format-between-windowsmac-and-ubuntu-linux" target="_blank">http://ubuntuguide.net/convert-text-file-format-between-windowsmac-and-ubuntu-linux</a>


