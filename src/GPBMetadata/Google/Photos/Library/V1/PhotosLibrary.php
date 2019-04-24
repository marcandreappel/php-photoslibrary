<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace GPBMetadata\Google\Photos\Library\V1;

class PhotosLibrary
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Photos\Types\Album::initOnce();
        \GPBMetadata\Google\Photos\Types\DateRange::initOnce();
        \GPBMetadata\Google\Photos\Types\MediaItem::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a813d0a2d676f6f676c652f70686f746f732f6c6962726172792f76312f" .
            "70686f746f735f6c6962726172792e70726f746f1218676f6f676c652e70" .
            "686f746f732e6c6962726172792e76311a1f676f6f676c652f70686f746f" .
            "732f74797065732f616c62756d2e70726f746f1a24676f6f676c652f7068" .
            "6f746f732f74797065732f646174655f72616e67652e70726f746f1a2467" .
            "6f6f676c652f70686f746f732f74797065732f6d656469615f6974656d2e" .
            "70726f746f1a19676f6f676c652f70726f746f6275662f616e792e70726f" .
            "746f1a17676f6f676c652f7270632f7374617475732e70726f746f1a1667" .
            "6f6f676c652f747970652f646174652e70726f746f1a18676f6f676c652f" .
            "747970652f6c61746c6e672e70726f746f223f0a12437265617465416c62" .
            "756d5265717565737412290a05616c62756d18012001280b321a2e676f6f" .
            "676c652e70686f746f732e74797065732e416c62756d22510a2542617463" .
            "6852656d6f76654d656469614974656d7346726f6d416c62756d52657175" .
            "65737412160a0e6d656469615f6974656d5f69647318012003280912100a" .
            "08616c62756d5f696418022001280922280a26426174636852656d6f7665" .
            "4d656469614974656d7346726f6d416c62756d526573706f6e7365228201" .
            "0a0c4e65774d656469614974656d12130a0b6465736372697074696f6e18" .
            "012001280912460a1173696d706c655f6d656469615f6974656d18022001" .
            "280b32292e676f6f676c652e70686f746f732e6c6962726172792e76312e" .
            "53696d706c654d656469614974656d480042150a136e65775f6d65646961" .
            "5f6974656d5f7479706522270a0f53696d706c654d656469614974656d12" .
            "140a0c75706c6f61645f746f6b656e18012001280922b9020a0d416c6275" .
            "6d506f736974696f6e12460a08706f736974696f6e18012001280e32342e" .
            "676f6f676c652e70686f746f732e6c6962726172792e76312e416c62756d" .
            "506f736974696f6e2e506f736974696f6e5479706512200a1672656c6174" .
            "6976655f6d656469615f6974656d5f6964180220012809480012250a1b72" .
            "656c61746976655f656e726963686d656e745f6974656d5f696418032001" .
            "280948002285010a0c506f736974696f6e54797065121d0a19504f534954" .
            "494f4e5f545950455f554e535045434946494544100012120a0e46495253" .
            "545f494e5f414c42554d100112110a0d4c4153545f494e5f414c42554d10" .
            "0212140a1041465445525f4d454449415f4954454d100312190a15414654" .
            "45525f454e524943484d454e545f4954454d1004420f0a0d72656c617469" .
            "76655f6974656d2282010a124e65774d656469614974656d526573756c74" .
            "12140a0c75706c6f61645f746f6b656e18012001280912220a0673746174" .
            "757318022001280b32122e676f6f676c652e7270632e5374617475731232" .
            "0a0a6d656469615f6974656d18032001280b321e2e676f6f676c652e7068" .
            "6f746f732e74797065732e4d656469614974656d22b2010a1c4261746368" .
            "4372656174654d656469614974656d735265717565737412100a08616c62" .
            "756d5f6964180120012809123f0a0f6e65775f6d656469615f6974656d73" .
            "18022003280b32262e676f6f676c652e70686f746f732e6c696272617279" .
            "2e76312e4e65774d656469614974656d123f0a0e616c62756d5f706f7369" .
            "74696f6e18042001280b32272e676f6f676c652e70686f746f732e6c6962" .
            "726172792e76312e416c62756d506f736974696f6e226d0a1d4261746368" .
            "4372656174654d656469614974656d73526573706f6e7365124c0a166e65" .
            "775f6d656469615f6974656d5f726573756c747318012003280b322c2e67" .
            "6f6f676c652e70686f746f732e6c6962726172792e76312e4e65774d6564" .
            "69614974656d526573756c74225e0a0a4461746546696c74657212200a05" .
            "646174657318012003280b32112e676f6f676c652e747970652e44617465" .
            "122e0a0672616e67657318022003280b321e2e676f6f676c652e70686f74" .
            "6f732e74797065732e4461746552616e676522af010a0d436f6e74656e74" .
            "46696c746572124e0a1b696e636c756465645f636f6e74656e745f636174" .
            "65676f7269657318012003280e32292e676f6f676c652e70686f746f732e" .
            "6c6962726172792e76312e436f6e74656e7443617465676f7279124e0a1b" .
            "6578636c756465645f636f6e74656e745f63617465676f72696573180220" .
            "03280e32292e676f6f676c652e70686f746f732e6c6962726172792e7631" .
            "2e436f6e74656e7443617465676f7279228d010a0f4d6564696154797065" .
            "46696c74657212480a0b6d656469615f747970657318012003280e32332e" .
            "676f6f676c652e70686f746f732e6c6962726172792e76312e4d65646961" .
            "5479706546696c7465722e4d656469615479706522300a094d6564696154" .
            "797065120d0a09414c4c5f4d45444941100012090a05564944454f100112" .
            "090a0550484f544f10022291020a0746696c7465727312390a0b64617465" .
            "5f66696c74657218012001280b32242e676f6f676c652e70686f746f732e" .
            "6c6962726172792e76312e4461746546696c746572123f0a0e636f6e7465" .
            "6e745f66696c74657218022001280b32272e676f6f676c652e70686f746f" .
            "732e6c6962726172792e76312e436f6e74656e7446696c74657212440a11" .
            "6d656469615f747970655f66696c74657218032001280b32292e676f6f67" .
            "6c652e70686f746f732e6c6962726172792e76312e4d6564696154797065" .
            "46696c746572121e0a16696e636c7564655f61726368697665645f6d6564" .
            "696118042001280812240a1c6578636c7564655f6e6f6e5f6170705f6372" .
            "65617465645f646174611805200128082286010a175365617263684d6564" .
            "69614974656d735265717565737412100a08616c62756d5f696418012001" .
            "280912110a09706167655f73697a6518022001280512120a0a706167655f" .
            "746f6b656e18032001280912320a0766696c7465727318042001280b3221" .
            "2e676f6f676c652e70686f746f732e6c6962726172792e76312e46696c74" .
            "65727322680a185365617263684d656469614974656d73526573706f6e73" .
            "6512330a0b6d656469615f6974656d7318012003280b321e2e676f6f676c" .
            "652e70686f746f732e74797065732e4d656469614974656d12170a0f6e65" .
            "78745f706167655f746f6b656e180220012809223e0a154c6973744d6564" .
            "69614974656d735265717565737412110a09706167655f73697a65180120" .
            "01280512120a0a706167655f746f6b656e18022001280922660a164c6973" .
            "744d656469614974656d73526573706f6e736512330a0b6d656469615f69" .
            "74656d7318012003280b321e2e676f6f676c652e70686f746f732e747970" .
            "65732e4d656469614974656d12170a0f6e6578745f706167655f746f6b65" .
            "6e180220012809222c0a134765744d656469614974656d52657175657374" .
            "12150a0d6d656469615f6974656d5f696418012001280922600a114c6973" .
            "74416c62756d735265717565737412110a09706167655f73697a65180120" .
            "01280512120a0a706167655f746f6b656e18022001280912240a1c657863" .
            "6c7564655f6e6f6e5f6170705f637265617465645f646174611803200128" .
            "0822590a124c697374416c62756d73526573706f6e7365122a0a06616c62" .
            "756d7318012003280b321a2e676f6f676c652e70686f746f732e74797065" .
            "732e416c62756d12170a0f6e6578745f706167655f746f6b656e18022001" .
            "280922230a0f476574416c62756d5265717565737412100a08616c62756d" .
            "5f6964180120012809222c0a15476574536861726564416c62756d526571" .
            "7565737412130a0b73686172655f746f6b656e180120012809221e0a0e54" .
            "657874456e726963686d656e74120c0a047465787418012001280922460a" .
            "084c6f636174696f6e12150a0d6c6f636174696f6e5f6e616d6518012001" .
            "280912230a066c61746c6e6718022001280b32132e676f6f676c652e7479" .
            "70652e4c61744c6e67224a0a124c6f636174696f6e456e726963686d656e" .
            "7412340a086c6f636174696f6e18012001280b32222e676f6f676c652e70" .
            "686f746f732e6c6962726172792e76312e4c6f636174696f6e227c0a0d4d" .
            "6170456e726963686d656e7412320a066f726967696e18012001280b3222" .
            "2e676f6f676c652e70686f746f732e6c6962726172792e76312e4c6f6361" .
            "74696f6e12370a0b64657374696e6174696f6e18022001280b32222e676f" .
            "6f676c652e70686f746f732e6c6962726172792e76312e4c6f636174696f" .
            "6e22f6010a114e6577456e726963686d656e744974656d12430a0f746578" .
            "745f656e726963686d656e7418012001280b32282e676f6f676c652e7068" .
            "6f746f732e6c6962726172792e76312e54657874456e726963686d656e74" .
            "4800124b0a136c6f636174696f6e5f656e726963686d656e741802200128" .
            "0b322c2e676f6f676c652e70686f746f732e6c6962726172792e76312e4c" .
            "6f636174696f6e456e726963686d656e74480012410a0e6d61705f656e72" .
            "6963686d656e7418032001280b32272e676f6f676c652e70686f746f732e" .
            "6c6962726172792e76312e4d6170456e726963686d656e744800420c0a0a" .
            "656e726963686d656e7422ba010a1b416464456e726963686d656e74546f" .
            "416c62756d5265717565737412100a08616c62756d5f6964180120012809" .
            "12480a136e65775f656e726963686d656e745f6974656d18022001280b32" .
            "2b2e676f6f676c652e70686f746f732e6c6962726172792e76312e4e6577" .
            "456e726963686d656e744974656d123f0a0e616c62756d5f706f73697469" .
            "6f6e18032001280b32272e676f6f676c652e70686f746f732e6c69627261" .
            "72792e76312e416c62756d506f736974696f6e221c0a0e456e726963686d" .
            "656e744974656d120a0a02696418012001280922610a1c416464456e7269" .
            "63686d656e74546f416c62756d526573706f6e736512410a0f656e726963" .
            "686d656e745f6974656d18012001280b32282e676f6f676c652e70686f74" .
            "6f732e6c6962726172792e76312e456e726963686d656e744974656d222d" .
            "0a164a6f696e536861726564416c62756d5265717565737412130a0b7368" .
            "6172655f746f6b656e18012001280922440a174a6f696e53686172656441" .
            "6c62756d526573706f6e736512290a05616c62756d18012001280b321a2e" .
            "676f6f676c652e70686f746f732e74797065732e416c62756d222e0a174c" .
            "65617665536861726564416c62756d5265717565737412130a0b73686172" .
            "655f746f6b656e180120012809221a0a184c65617665536861726564416c" .
            "62756d526573706f6e7365226c0a115368617265416c62756d5265717565" .
            "737412100a08616c62756d5f696418012001280912450a14736861726564" .
            "5f616c62756d5f6f7074696f6e7318022001280b32272e676f6f676c652e" .
            "70686f746f732e74797065732e536861726564416c62756d4f7074696f6e" .
            "7322480a125368617265416c62756d526573706f6e736512320a0a736861" .
            "72655f696e666f18012001280b321e2e676f6f676c652e70686f746f732e" .
            "74797065732e5368617265496e666f22660a174c69737453686172656441" .
            "6c62756d735265717565737412110a09706167655f73697a651801200128" .
            "0512120a0a706167655f746f6b656e18022001280912240a1c6578636c75" .
            "64655f6e6f6e5f6170705f637265617465645f6461746118032001280822" .
            "660a184c697374536861726564416c62756d73526573706f6e736512310a" .
            "0d7368617265645f616c62756d7318012003280b321a2e676f6f676c652e" .
            "70686f746f732e74797065732e416c62756d12170a0f6e6578745f706167" .
            "655f746f6b656e18022001280922270a13556e7368617265416c62756d52" .
            "65717565737412100a08616c62756d5f696418012001280922160a14556e" .
            "7368617265416c62756d526573706f6e736522330a194261746368476574" .
            "4d656469614974656d735265717565737412160a0e6d656469615f697465" .
            "6d5f69647318012003280922630a1a42617463684765744d656469614974" .
            "656d73526573706f6e736512450a126d656469615f6974656d5f72657375" .
            "6c747318012003280b32292e676f6f676c652e70686f746f732e6c696272" .
            "6172792e76312e4d656469614974656d526573756c7422690a0f4d656469" .
            "614974656d526573756c7412220a0673746174757318012001280b32122e" .
            "676f6f676c652e7270632e53746174757312320a0a6d656469615f697465" .
            "6d18022001280b321e2e676f6f676c652e70686f746f732e74797065732e" .
            "4d656469614974656d224c0a2042617463684164644d656469614974656d" .
            "73546f416c62756d5265717565737412160a0e6d656469615f6974656d5f" .
            "69647318012003280912100a08616c62756d5f696418022001280922230a" .
            "2142617463684164644d656469614974656d73546f416c62756d52657370" .
            "6f6e73652aa1020a0f436f6e74656e7443617465676f727912080a044e4f" .
            "4e451000120e0a0a4c414e445343415045531001120c0a08524543454950" .
            "54531002120e0a0a434954595343415045531003120d0a094c414e444d41" .
            "524b531004120b0a0753454c464945531005120a0a0650454f504c451006" .
            "12080a04504554531007120c0a0857454444494e47531008120d0a094249" .
            "525448444159531009120d0a09444f43554d454e5453100a120a0a065452" .
            "4156454c100b120b0a07414e494d414c53100c12080a04464f4f44100d12" .
            "090a0553504f5254100e12090a054e49474854100f12100a0c504552464f" .
            "524d414e4345531010120f0a0b5748495445424f415244531011120f0a0b" .
            "53435245454e53484f54531012120b0a075554494c495459101332ed140a" .
            "0d50686f746f734c696272617279126e0a0b437265617465416c62756d12" .
            "2c2e676f6f676c652e70686f746f732e6c6962726172792e76312e437265" .
            "617465416c62756d526571756573741a1a2e676f6f676c652e70686f746f" .
            "732e74797065732e416c62756d221582d3e493020f220a2f76312f616c62" .
            "756d733a012a12af010a1542617463684372656174654d65646961497465" .
            "6d7312362e676f6f676c652e70686f746f732e6c6962726172792e76312e" .
            "42617463684372656174654d656469614974656d73526571756573741a37" .
            "2e676f6f676c652e70686f746f732e6c6962726172792e76312e42617463" .
            "684372656174654d656469614974656d73526573706f6e7365222582d3e4" .
            "93021f221a2f76312f6d656469614974656d733a62617463684372656174" .
            "653a012a12cb010a1942617463684164644d656469614974656d73546f41" .
            "6c62756d123a2e676f6f676c652e70686f746f732e6c6962726172792e76" .
            "312e42617463684164644d656469614974656d73546f416c62756d526571" .
            "756573741a3b2e676f6f676c652e70686f746f732e6c6962726172792e76" .
            "312e42617463684164644d656469614974656d73546f416c62756d526573" .
            "706f6e7365223582d3e493022f222a2f76312f616c62756d732f7b616c62" .
            "756d5f69643d2a7d3a62617463684164644d656469614974656d733a012a" .
            "129b010a105365617263684d656469614974656d7312312e676f6f676c65" .
            "2e70686f746f732e6c6962726172792e76312e5365617263684d65646961" .
            "4974656d73526571756573741a322e676f6f676c652e70686f746f732e6c" .
            "6962726172792e76312e5365617263684d656469614974656d7352657370" .
            "6f6e7365222082d3e493021a22152f76312f6d656469614974656d733a73" .
            "65617263683a012a128b010a0e4c6973744d656469614974656d73122f2e" .
            "676f6f676c652e70686f746f732e6c6962726172792e76312e4c6973744d" .
            "656469614974656d73526571756573741a302e676f6f676c652e70686f74" .
            "6f732e6c6962726172792e76312e4c6973744d656469614974656d735265" .
            "73706f6e7365221682d3e4930210120e2f76312f6d656469614974656d73" .
            "1287010a0c4765744d656469614974656d122d2e676f6f676c652e70686f" .
            "746f732e6c6962726172792e76312e4765744d656469614974656d526571" .
            "756573741a1e2e676f6f676c652e70686f746f732e74797065732e4d6564" .
            "69614974656d222882d3e493022212202f76312f6d656469614974656d73" .
            "2f7b6d656469615f6974656d5f69643d2a7d12a0010a1242617463684765" .
            "744d656469614974656d7312332e676f6f676c652e70686f746f732e6c69" .
            "62726172792e76312e42617463684765744d656469614974656d73526571" .
            "756573741a342e676f6f676c652e70686f746f732e6c6962726172792e76" .
            "312e42617463684765744d656469614974656d73526573706f6e7365221f" .
            "82d3e493021912172f76312f6d656469614974656d733a62617463684765" .
            "74127b0a0a4c697374416c62756d73122b2e676f6f676c652e70686f746f" .
            "732e6c6962726172792e76312e4c697374416c62756d7352657175657374" .
            "1a2c2e676f6f676c652e70686f746f732e6c6962726172792e76312e4c69" .
            "7374416c62756d73526573706f6e7365221282d3e493020c120a2f76312f" .
            "616c62756d7312720a08476574416c62756d12292e676f6f676c652e7068" .
            "6f746f732e6c6962726172792e76312e476574416c62756d526571756573" .
            "741a1a2e676f6f676c652e70686f746f732e74797065732e416c62756d22" .
            "1f82d3e493021912172f76312f616c62756d732f7b616c62756d5f69643d" .
            "2a7d1287010a0e476574536861726564416c62756d122f2e676f6f676c65" .
            "2e70686f746f732e6c6962726172792e76312e476574536861726564416c" .
            "62756d526571756573741a1a2e676f6f676c652e70686f746f732e747970" .
            "65732e416c62756d222882d3e493022212202f76312f736861726564416c" .
            "62756d732f7b73686172655f746f6b656e3d2a7d12b7010a14416464456e" .
            "726963686d656e74546f416c62756d12352e676f6f676c652e70686f746f" .
            "732e6c6962726172792e76312e416464456e726963686d656e74546f416c" .
            "62756d526571756573741a362e676f6f676c652e70686f746f732e6c6962" .
            "726172792e76312e416464456e726963686d656e74546f416c62756d5265" .
            "73706f6e7365223082d3e493022a22252f76312f616c62756d732f7b616c" .
            "62756d5f69643d2a7d3a616464456e726963686d656e743a012a1298010a" .
            "0f4a6f696e536861726564416c62756d12302e676f6f676c652e70686f74" .
            "6f732e6c6962726172792e76312e4a6f696e536861726564416c62756d52" .
            "6571756573741a312e676f6f676c652e70686f746f732e6c696272617279" .
            "2e76312e4a6f696e536861726564416c62756d526573706f6e7365222082" .
            "d3e493021a22152f76312f736861726564416c62756d733a6a6f696e3a01" .
            "2a129c010a104c65617665536861726564416c62756d12312e676f6f676c" .
            "652e70686f746f732e6c6962726172792e76312e4c656176655368617265" .
            "64416c62756d526571756573741a322e676f6f676c652e70686f746f732e" .
            "6c6962726172792e76312e4c65617665536861726564416c62756d526573" .
            "706f6e7365222182d3e493021b22162f76312f736861726564416c62756d" .
            "733a6c656176653a012a1291010a0a5368617265416c62756d122b2e676f" .
            "6f676c652e70686f746f732e6c6962726172792e76312e5368617265416c" .
            "62756d526571756573741a2c2e676f6f676c652e70686f746f732e6c6962" .
            "726172792e76312e5368617265416c62756d526573706f6e7365222882d3" .
            "e4930222221d2f76312f616c62756d732f7b616c62756d5f69643d2a7d3a" .
            "73686172653a012a1293010a104c697374536861726564416c62756d7312" .
            "312e676f6f676c652e70686f746f732e6c6962726172792e76312e4c6973" .
            "74536861726564416c62756d73526571756573741a322e676f6f676c652e" .
            "70686f746f732e6c6962726172792e76312e4c697374536861726564416c" .
            "62756d73526573706f6e7365221882d3e493021212102f76312f73686172" .
            "6564416c62756d731299010a0c556e7368617265416c62756d122d2e676f" .
            "6f676c652e70686f746f732e6c6962726172792e76312e556e7368617265" .
            "416c62756d526571756573741a2e2e676f6f676c652e70686f746f732e6c" .
            "6962726172792e76312e556e7368617265416c62756d526573706f6e7365" .
            "222a82d3e4930224221f2f76312f616c62756d732f7b616c62756d5f6964" .
            "3d2a7d3a756e73686172653a012a12dd010a1e426174636852656d6f7665" .
            "4d656469614974656d7346726f6d416c62756d123f2e676f6f676c652e70" .
            "686f746f732e6c6962726172792e76312e426174636852656d6f76654d65" .
            "6469614974656d7346726f6d416c62756d526571756573741a402e676f6f" .
            "676c652e70686f746f732e6c6962726172792e76312e426174636852656d" .
            "6f76654d656469614974656d7346726f6d416c62756d526573706f6e7365" .
            "223882d3e4930232222d2f76312f616c62756d732f7b616c62756d5f6964" .
            "3d2a7d3a626174636852656d6f76654d656469614974656d733a012a427c" .
            "0a22636f6d2e676f6f676c652e70686f746f732e6c6962726172792e7631" .
            "2e70726f746f42134c6962726172795365727669636550726f746f50015a" .
            "3f676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f" .
            "6f676c65617069732f70686f746f732f6c6962726172792f76313b6c6962" .
            "72617279620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

