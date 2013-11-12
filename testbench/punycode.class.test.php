<?php
include_once 'PHPUnit/Framework/TestCase.php'; // located in /usr/share/php
include_once '../punycode.class.php';

//Just a simple test, by no means comprehensive

class PunycodeTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers Punycode::encodeHostname
     */
    public function testEncodeHostname()
    {
		$this->assertEquals('xn--bcher-kva.ch',                    Punycode::encodeHostName("bücher.ch"));
		$this->assertEquals('xn--bcher-kva.ch',                    Punycode::encodeHostName("Bücher.ch"));
		$this->assertEquals('xn--mgbh0fb.xn--kgbechtv',            Punycode::encodeHostName("مثال.إختبار"));//Arabic
		$this->assertEquals('xn--mgbh0fb.xn--hgbk6aj7f53bba',      Punycode::encodeHostName("مثال.آزمایشی"));//Persian
		$this->assertEquals('xn--fsqu00a.xn--0zwm56d',             Punycode::encodeHostName("例子.测试"));//Simplified Chinese
		$this->assertEquals('xn--fsqu00a.xn--g6w251d',             Punycode::encodeHostName("例子.測試"));//Traditional Chinese
		$this->assertEquals('xn--e1afmkfd.xn--80akhbyknj4f',       Punycode::encodeHostName("пример.испытание"));//Russian/Cyrillic
		$this->assertEquals('xn--p1b6ci4b4b3a.xn--11b5bs3a9aj6g',  Punycode::encodeHostName("उदाहरण.परीक्षा"));//Hindi
		$this->assertEquals('xn--hxajbheg2az3al.xn--jxalpdlp',     Punycode::encodeHostName("παράδειγμα.δοκιμή"));//Greek
		$this->assertEquals('xn--9n2bp8q.xn--9t4b11yi5a',          Punycode::encodeHostName("실례.테스트"));//Korean
		$this->assertEquals('xn--fdbk5d8ap9b8a8d.xn--deba0ad',     Punycode::encodeHostName("בײַשפּיל.טעסט"));//Hebrew
		$this->assertEquals('xn--r8jz45g.xn--zckzah',              Punycode::encodeHostName("例え.テスト"));//Japanese
		$this->assertEquals('xn--zkc6cc5bi7f6e.xn--hlcj6aya9esc7a',Punycode::encodeHostName("உதாரணம்.பரிட்சை"));//Tamil
    }

    /**
     * @covers Punycode::decodeHostname
     */
    public function testDecodeHostname()
    {
		$this->assertEquals(Punycode::decodeHostName('xn--bcher-kva.ch'),                    ("bücher.ch"));
		$this->assertEquals(Punycode::decodeHostName('xn--mgbh0fb.xn--kgbechtv'),            ("مثال.إختبار"));//Arabic
		$this->assertEquals(Punycode::decodeHostName('xn--mgbh0fb.xn--hgbk6aj7f53bba'),      ("مثال.آزمایشی"));//Persian
		$this->assertEquals(Punycode::decodeHostName('xn--fsqu00a.xn--0zwm56d'),             ("例子.测试"));//Simplified Chinese
		$this->assertEquals(Punycode::decodeHostName('xn--fsqu00a.xn--g6w251d'),             ("例子.測試"));//Traditional Chinese
		$this->assertEquals(Punycode::decodeHostName('xn--e1afmkfd.xn--80akhbyknj4f'),       ("пример.испытание"));//Russian/Cyrillic
		$this->assertEquals(Punycode::decodeHostName('xn--p1b6ci4b4b3a.xn--11b5bs3a9aj6g'),  ("उदाहरण.परीक्षा"));//Hindi
		$this->assertEquals(Punycode::decodeHostName('xn--hxajbheg2az3al.xn--jxalpdlp'),     ("παράδειγμα.δοκιμή"));//Greek
		$this->assertEquals(Punycode::decodeHostName('xn--9n2bp8q.xn--9t4b11yi5a'),          ("실례.테스트"));//Korean
		$this->assertEquals(Punycode::decodeHostName('xn--fdbk5d8ap9b8a8d.xn--deba0ad'),     ("בײַשפּיל.טעסט"));//Hebrew
		$this->assertEquals(Punycode::decodeHostName('xn--r8jz45g.xn--zckzah'),              ("例え.テスト"));//Japanese
		$this->assertEquals(Punycode::decodeHostName('xn--zkc6cc5bi7f6e.xn--hlcj6aya9esc7a'),("உதாரணம்.பரிட்சை"));//Tamil
    }
}
                
