<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod_media.proto

namespace Vcloud\Models\GPBMetadata;

class VodMedia
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Vcloud\Models\GPBMetadata\Base::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af0120a0f766f645f6d656469612e70726f746f121156636c6f75642e4d6f64656c732e566f641a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f223e0a1f557064617465566964656f5075626c69736853746174757352657175657374120b0a03566964180120012809120e0a0653746174757318022001280922620a20557064617465566964656f5075626c697368537461747573526573706f6e7365123e0a10526573706f6e73654d6574616461746118012001280b32242e56636c6f75642e4d6f64656c732e426173652e526573706f6e73654d6574616461746122e2010a16557064617465566964656f496e666f52657175657374120b0a03566964180120012809122f0a09506f7374657255726918022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122b0a055469746c6518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512310a0b4465736372697074696f6e18042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122a0a045461677318052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522590a17557064617465566964656f496e666f526573706f6e7365123e0a10526573706f6e73654d6574616461746118012001280b32242e56636c6f75642e4d6f64656c732e426173652e526573706f6e73654d6574616461746122240a14476574566964656f496e666f7352657175657374120c0a045669647318012003280922570a0f417564696f53747265616d4d657461120d0a05436f64656318012001280912100a084475726174696f6e18022001280212120a0a53616d706c6552617465180320012803120f0a07426974726174651804200128032283010a0f566964656f53747265616d4d657461120d0a05436f646563180120012809120e0a06486569676874180220012803120d0a05576964746818032001280312100a084475726174696f6e18042001280212120a0a446566696e6974696f6e180520012809120f0a0742697472617465180620012803120b0a0346707318072001280222b1020a0d5472616e73636f6465496e666f120e0a0646696c654964180120012809120b0a034d643518022001280912100a0846696c655479706518032001280912100a084c6f676f54797065180420012809120f0a07456e6372797074180520012808120e0a06466f726d617418062001280912100a084475726174696f6e180720012802120c0a0453697a6518082001280312100a0853746f7265557269180920012809123b0a0f566964656f53747265616d4d657461180a2001280b32222e56636c6f75642e4d6f64656c732e566f642e566964656f53747265616d4d657461123b0a0f417564696f53747265616d4d657461180b2001280b32222e56636c6f75642e4d6f64656c732e566f642e417564696f53747265616d4d65746112120a0a43726561746554696d65180c2001280922f1010a0a536f75726365496e666f120e0a0646696c654964180120012809120b0a034d643518022001280912100a0846696c6554797065180320012809120d0a05436f646563180420012809120e0a06486569676874180520012803120d0a055769647468180620012803120e0a06466f726d617418072001280912100a084475726174696f6e180820012802120c0a0453697a6518092001280312100a0853746f7265557269180a2001280912120a0a446566696e6974696f6e180b20012809120f0a0742697472617465180c20012803120b0a03467073180d2001280212120a0a43726561746554696d65180e2001280922b0010a094261736963496e666f12110a0953706163654e616d65180120012809120b0a03566964180220012809120d0a055469746c6518032001280912130a0b4465736372697074696f6e18042001280912110a09506f7374657255726918052001280912150a0d5075626c69736853746174757318062001280912130a0b4175646974537461747573180720012803120c0a045461677318082003280912120a0a43726561746554696d6518092001280922a9010a09566964656f496e666f122f0a094261736963496e666f18012001280b321c2e56636c6f75642e4d6f64656c732e566f642e4261736963496e666f12310a0a536f75726365496e666f18022001280b321d2e56636c6f75642e4d6f64656c732e566f642e536f75726365496e666f12380a0e5472616e73636f6465496e666f7318032003280b32202e56636c6f75642e4d6f64656c732e566f642e5472616e73636f6465496e666f225e0a11476574566964656f496e666f734461746112330a0d566964656f496e666f4c69737418012003280b321c2e56636c6f75642e4d6f64656c732e566f642e566964656f496e666f12140a0c4e6f74457869737456696473180220032809228d010a15476574566964656f496e666f73526573706f6e7365123e0a10526573706f6e73654d6574616461746118012001280b32242e56636c6f75642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112340a06526573756c7418022001280b32242e56636c6f75642e4d6f64656c732e566f642e476574566964656f496e666f7344617461222c0a1c4765745265636f6d6d656e646564506f737465727352657175657374120c0a0456696473180120032809222f0a0d53746f726555726947726f7570120b0a0356696418012001280912110a0953746f72655572697318022003280922630a11476574526563506f73746572734461746112380a0e53746f726555726947726f75707318012003280b32202e56636c6f75642e4d6f64656c732e566f642e53746f726555726947726f757012140a0c4e6f74457869737456696473180220032809228d010a15476574526563506f7374657273526573706f6e7365123e0a10526573706f6e73654d6574616461746118012001280b32242e56636c6f75642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112340a06526573756c7418022001280b32242e56636c6f75642e4d6f64656c732e566f642e476574526563506f737465727344617461426e0a1d636f6d2e6279746564616e63656170692e6d6f64656c2e636f6d6d6f6e4208566f644d6564696150015a082e3b6d6f64656c73a00101d80101c20200ca021156636c6f75645c4d6f64656c735c566f64e2021956636c6f75645c4d6f64656c735c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

