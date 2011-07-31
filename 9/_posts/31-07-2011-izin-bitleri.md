---
layout: post
title: Suid-Sgid Bitleri
---
####KONU ANALİZİ
<li> <a href="#suid-bit"> Suid Biti </a> </li>
<li> <a href="#sgid-bit"> Sgid Biti </a> </li>
<li> <a href="#suid-sgid-degistirme"> Suid Ve Sgid Bitlerinin Değiştirilmesi </a> </li>

Oturum açtığımızda yeni bir kabuk süreci başlar. Her yeni kabuk süreci(bash) bizim kullanıcı bilgimizle çalışır. Böylece bizim sahip olduğumuz dosya ve dizinlere ulaşılır. Kullanıcı bilgilerini verdiğimiz programlar,dosya sisteminde bizim iznimizin olmadığı herhangi bir neseneye ulaşamayacaktır.<br>

Örneğin; normal kullanıcılar <u>passwd</u> dosyasına yazma hakkına sahip değildirler. 
<code> ls -l /etc/passwd</code><br>
<code>-rw-r--r-- 1 root root 1673 2010-12-09 14:43 /etc/passwd</code>





