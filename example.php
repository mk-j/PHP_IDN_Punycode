<?php
include_once('punycode.class.php');

echo "\n"."1";
echo "\n".Punycode::encodeHostName("google.com");
echo "\n";
echo "\n"."2";
echo "\n".Punycode::encodeHostName("bücher.ch");
echo "\n".Punycode::encodeHostName("Bücher.ch");
echo "\n".Punycode::decodeHostName("xn--bcher-kva.ch");
echo "\n";
echo "\n"."3";
echo "\n".Punycode::decodeHostName("mañana.com");
echo "\n".Punycode::decodeHostName("xn--maana-pta.com");


echo "\n"."CJK";
echo "\n".Punycode::encodeHostName("例子.台湾");
echo "\n".Punycode::encodeHostName("例子.测试");
echo "\n".Punycode::encodeHostName("例子.測試");
echo "\n".Punycode::encodeHostName("例え.テスト");
echo "\n".Punycode::encodeHostName("例え.テスト");

echo "\n";
echo "\n";


