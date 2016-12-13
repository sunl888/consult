<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'zone_id' => 110000,
                'name' => '北京市',
                'parent_id' => 0,
                'level' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'zone_id' => 120000,
                'name' => '天津市',
                'parent_id' => 0,
                'level' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'zone_id' => 130000,
                'name' => '河北省',
                'parent_id' => 0,
                'level' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'zone_id' => 140000,
                'name' => '山西省',
                'parent_id' => 0,
                'level' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'zone_id' => 150000,
                'name' => '内蒙古自治区',
                'parent_id' => 0,
                'level' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'zone_id' => 210000,
                'name' => '辽宁省',
                'parent_id' => 0,
                'level' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'zone_id' => 220000,
                'name' => '吉林省',
                'parent_id' => 0,
                'level' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'zone_id' => 230000,
                'name' => '黑龙江省',
                'parent_id' => 0,
                'level' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'zone_id' => 310000,
                'name' => '上海市',
                'parent_id' => 0,
                'level' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'zone_id' => 320000,
                'name' => '江苏省',
                'parent_id' => 0,
                'level' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'zone_id' => 330000,
                'name' => '浙江省',
                'parent_id' => 0,
                'level' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'zone_id' => 340000,
                'name' => '安徽省',
                'parent_id' => 0,
                'level' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'zone_id' => 350000,
                'name' => '福建省',
                'parent_id' => 0,
                'level' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'zone_id' => 360000,
                'name' => '江西省',
                'parent_id' => 0,
                'level' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'zone_id' => 370000,
                'name' => '山东省',
                'parent_id' => 0,
                'level' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'zone_id' => 410000,
                'name' => '河南省',
                'parent_id' => 0,
                'level' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'zone_id' => 420000,
                'name' => '湖北省',
                'parent_id' => 0,
                'level' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'zone_id' => 430000,
                'name' => '湖南省',
                'parent_id' => 0,
                'level' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'zone_id' => 440000,
                'name' => '广东省',
                'parent_id' => 0,
                'level' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'zone_id' => 450000,
                'name' => '广西壮族自治区',
                'parent_id' => 0,
                'level' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'zone_id' => 460000,
                'name' => '海南省',
                'parent_id' => 0,
                'level' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'zone_id' => 500000,
                'name' => '重庆市',
                'parent_id' => 0,
                'level' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'zone_id' => 510000,
                'name' => '四川省',
                'parent_id' => 0,
                'level' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'zone_id' => 520000,
                'name' => '贵州省',
                'parent_id' => 0,
                'level' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'zone_id' => 530000,
                'name' => '云南省',
                'parent_id' => 0,
                'level' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'zone_id' => 540000,
                'name' => '西藏自治区',
                'parent_id' => 0,
                'level' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'zone_id' => 610000,
                'name' => '陕西省',
                'parent_id' => 0,
                'level' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'zone_id' => 620000,
                'name' => '甘肃省',
                'parent_id' => 0,
                'level' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'zone_id' => 630000,
                'name' => '青海省',
                'parent_id' => 0,
                'level' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'zone_id' => 640000,
                'name' => '宁夏回族自治区',
                'parent_id' => 0,
                'level' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'zone_id' => 650000,
                'name' => '新疆维吾尔自治区',
                'parent_id' => 0,
                'level' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'zone_id' => 710000,
                'name' => '台湾省',
                'parent_id' => 0,
                'level' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'zone_id' => 810000,
                'name' => '香港特别行政区',
                'parent_id' => 0,
                'level' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'zone_id' => 820000,
                'name' => '澳门特别行政区',
                'parent_id' => 0,
                'level' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'zone_id' => 110100,
                'name' => '北京市',
                'parent_id' => 110000,
                'level' => 2,
            ),
            35 => 
            array (
                'id' => 36,
                'zone_id' => 120100,
                'name' => '天津市',
                'parent_id' => 120000,
                'level' => 2,
            ),
            36 => 
            array (
                'id' => 37,
                'zone_id' => 130100,
                'name' => '石家庄市',
                'parent_id' => 130000,
                'level' => 2,
            ),
            37 => 
            array (
                'id' => 38,
                'zone_id' => 130200,
                'name' => '唐山市',
                'parent_id' => 130000,
                'level' => 2,
            ),
            38 => 
            array (
                'id' => 39,
                'zone_id' => 130300,
                'name' => '秦皇岛市',
                'parent_id' => 130000,
                'level' => 2,
            ),
            39 => 
            array (
                'id' => 40,
                'zone_id' => 130400,
                'name' => '邯郸市',
                'parent_id' => 130000,
                'level' => 2,
            ),
            40 => 
            array (
                'id' => 41,
                'zone_id' => 130500,
                'name' => '邢台市',
                'parent_id' => 130000,
                'level' => 2,
            ),
            41 => 
            array (
                'id' => 42,
                'zone_id' => 130600,
                'name' => '保定市',
                'parent_id' => 130000,
                'level' => 2,
            ),
            42 => 
            array (
                'id' => 43,
                'zone_id' => 130700,
                'name' => '张家口市',
                'parent_id' => 130000,
                'level' => 2,
            ),
            43 => 
            array (
                'id' => 44,
                'zone_id' => 130800,
                'name' => '承德市',
                'parent_id' => 130000,
                'level' => 2,
            ),
            44 => 
            array (
                'id' => 45,
                'zone_id' => 130900,
                'name' => '沧州市',
                'parent_id' => 130000,
                'level' => 2,
            ),
            45 => 
            array (
                'id' => 46,
                'zone_id' => 131000,
                'name' => '廊坊市',
                'parent_id' => 130000,
                'level' => 2,
            ),
            46 => 
            array (
                'id' => 47,
                'zone_id' => 131100,
                'name' => '衡水市',
                'parent_id' => 130000,
                'level' => 2,
            ),
            47 => 
            array (
                'id' => 48,
                'zone_id' => 140100,
                'name' => '太原市',
                'parent_id' => 140000,
                'level' => 2,
            ),
            48 => 
            array (
                'id' => 49,
                'zone_id' => 140200,
                'name' => '大同市',
                'parent_id' => 140000,
                'level' => 2,
            ),
            49 => 
            array (
                'id' => 50,
                'zone_id' => 140300,
                'name' => '阳泉市',
                'parent_id' => 140000,
                'level' => 2,
            ),
            50 => 
            array (
                'id' => 51,
                'zone_id' => 140400,
                'name' => '长治市',
                'parent_id' => 140000,
                'level' => 2,
            ),
            51 => 
            array (
                'id' => 52,
                'zone_id' => 140500,
                'name' => '晋城市',
                'parent_id' => 140000,
                'level' => 2,
            ),
            52 => 
            array (
                'id' => 53,
                'zone_id' => 140600,
                'name' => '朔州市',
                'parent_id' => 140000,
                'level' => 2,
            ),
            53 => 
            array (
                'id' => 54,
                'zone_id' => 140700,
                'name' => '晋中市',
                'parent_id' => 140000,
                'level' => 2,
            ),
            54 => 
            array (
                'id' => 55,
                'zone_id' => 140800,
                'name' => '运城市',
                'parent_id' => 140000,
                'level' => 2,
            ),
            55 => 
            array (
                'id' => 56,
                'zone_id' => 140900,
                'name' => '忻州市',
                'parent_id' => 140000,
                'level' => 2,
            ),
            56 => 
            array (
                'id' => 57,
                'zone_id' => 141000,
                'name' => '临汾市',
                'parent_id' => 140000,
                'level' => 2,
            ),
            57 => 
            array (
                'id' => 58,
                'zone_id' => 141100,
                'name' => '吕梁市',
                'parent_id' => 140000,
                'level' => 2,
            ),
            58 => 
            array (
                'id' => 59,
                'zone_id' => 150100,
                'name' => '呼和浩特市',
                'parent_id' => 150000,
                'level' => 2,
            ),
            59 => 
            array (
                'id' => 60,
                'zone_id' => 150200,
                'name' => '包头市',
                'parent_id' => 150000,
                'level' => 2,
            ),
            60 => 
            array (
                'id' => 61,
                'zone_id' => 150300,
                'name' => '乌海市',
                'parent_id' => 150000,
                'level' => 2,
            ),
            61 => 
            array (
                'id' => 62,
                'zone_id' => 150400,
                'name' => '赤峰市',
                'parent_id' => 150000,
                'level' => 2,
            ),
            62 => 
            array (
                'id' => 63,
                'zone_id' => 150500,
                'name' => '通辽市',
                'parent_id' => 150000,
                'level' => 2,
            ),
            63 => 
            array (
                'id' => 64,
                'zone_id' => 150600,
                'name' => '鄂尔多斯市',
                'parent_id' => 150000,
                'level' => 2,
            ),
            64 => 
            array (
                'id' => 65,
                'zone_id' => 150700,
                'name' => '呼伦贝尔市',
                'parent_id' => 150000,
                'level' => 2,
            ),
            65 => 
            array (
                'id' => 66,
                'zone_id' => 150800,
                'name' => '巴彦淖尔市',
                'parent_id' => 150000,
                'level' => 2,
            ),
            66 => 
            array (
                'id' => 67,
                'zone_id' => 150900,
                'name' => '乌兰察布市',
                'parent_id' => 150000,
                'level' => 2,
            ),
            67 => 
            array (
                'id' => 68,
                'zone_id' => 152200,
                'name' => '兴安盟',
                'parent_id' => 150000,
                'level' => 2,
            ),
            68 => 
            array (
                'id' => 69,
                'zone_id' => 152500,
                'name' => '锡林郭勒盟',
                'parent_id' => 150000,
                'level' => 2,
            ),
            69 => 
            array (
                'id' => 70,
                'zone_id' => 152900,
                'name' => '阿拉善盟',
                'parent_id' => 150000,
                'level' => 2,
            ),
            70 => 
            array (
                'id' => 71,
                'zone_id' => 210100,
                'name' => '沈阳市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            71 => 
            array (
                'id' => 72,
                'zone_id' => 210200,
                'name' => '大连市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            72 => 
            array (
                'id' => 73,
                'zone_id' => 210300,
                'name' => '鞍山市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            73 => 
            array (
                'id' => 74,
                'zone_id' => 210400,
                'name' => '抚顺市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            74 => 
            array (
                'id' => 75,
                'zone_id' => 210500,
                'name' => '本溪市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            75 => 
            array (
                'id' => 76,
                'zone_id' => 210600,
                'name' => '丹东市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            76 => 
            array (
                'id' => 77,
                'zone_id' => 210700,
                'name' => '锦州市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            77 => 
            array (
                'id' => 78,
                'zone_id' => 210800,
                'name' => '营口市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            78 => 
            array (
                'id' => 79,
                'zone_id' => 210900,
                'name' => '阜新市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            79 => 
            array (
                'id' => 80,
                'zone_id' => 211000,
                'name' => '辽阳市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            80 => 
            array (
                'id' => 81,
                'zone_id' => 211100,
                'name' => '盘锦市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            81 => 
            array (
                'id' => 82,
                'zone_id' => 211200,
                'name' => '铁岭市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            82 => 
            array (
                'id' => 83,
                'zone_id' => 211300,
                'name' => '朝阳市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            83 => 
            array (
                'id' => 84,
                'zone_id' => 211400,
                'name' => '葫芦岛市',
                'parent_id' => 210000,
                'level' => 2,
            ),
            84 => 
            array (
                'id' => 85,
                'zone_id' => 220100,
                'name' => '长春市',
                'parent_id' => 220000,
                'level' => 2,
            ),
            85 => 
            array (
                'id' => 86,
                'zone_id' => 220200,
                'name' => '吉林市',
                'parent_id' => 220000,
                'level' => 2,
            ),
            86 => 
            array (
                'id' => 87,
                'zone_id' => 220300,
                'name' => '四平市',
                'parent_id' => 220000,
                'level' => 2,
            ),
            87 => 
            array (
                'id' => 88,
                'zone_id' => 220400,
                'name' => '辽源市',
                'parent_id' => 220000,
                'level' => 2,
            ),
            88 => 
            array (
                'id' => 89,
                'zone_id' => 220500,
                'name' => '通化市',
                'parent_id' => 220000,
                'level' => 2,
            ),
            89 => 
            array (
                'id' => 90,
                'zone_id' => 220600,
                'name' => '白山市',
                'parent_id' => 220000,
                'level' => 2,
            ),
            90 => 
            array (
                'id' => 91,
                'zone_id' => 220700,
                'name' => '松原市',
                'parent_id' => 220000,
                'level' => 2,
            ),
            91 => 
            array (
                'id' => 92,
                'zone_id' => 220800,
                'name' => '白城市',
                'parent_id' => 220000,
                'level' => 2,
            ),
            92 => 
            array (
                'id' => 93,
                'zone_id' => 222400,
                'name' => '延边朝鲜族自治州',
                'parent_id' => 220000,
                'level' => 2,
            ),
            93 => 
            array (
                'id' => 94,
                'zone_id' => 230100,
                'name' => '哈尔滨市',
                'parent_id' => 230000,
                'level' => 2,
            ),
            94 => 
            array (
                'id' => 95,
                'zone_id' => 230200,
                'name' => '齐齐哈尔市',
                'parent_id' => 230000,
                'level' => 2,
            ),
            95 => 
            array (
                'id' => 96,
                'zone_id' => 230300,
                'name' => '鸡西市',
                'parent_id' => 230000,
                'level' => 2,
            ),
            96 => 
            array (
                'id' => 97,
                'zone_id' => 230400,
                'name' => '鹤岗市',
                'parent_id' => 230000,
                'level' => 2,
            ),
            97 => 
            array (
                'id' => 98,
                'zone_id' => 230500,
                'name' => '双鸭山市',
                'parent_id' => 230000,
                'level' => 2,
            ),
            98 => 
            array (
                'id' => 99,
                'zone_id' => 230600,
                'name' => '大庆市',
                'parent_id' => 230000,
                'level' => 2,
            ),
            99 => 
            array (
                'id' => 100,
                'zone_id' => 230700,
                'name' => '伊春市',
                'parent_id' => 230000,
                'level' => 2,
            ),
            100 => 
            array (
                'id' => 101,
                'zone_id' => 230800,
                'name' => '佳木斯市',
                'parent_id' => 230000,
                'level' => 2,
            ),
            101 => 
            array (
                'id' => 102,
                'zone_id' => 230900,
                'name' => '七台河市',
                'parent_id' => 230000,
                'level' => 2,
            ),
            102 => 
            array (
                'id' => 103,
                'zone_id' => 231000,
                'name' => '牡丹江市',
                'parent_id' => 230000,
                'level' => 2,
            ),
            103 => 
            array (
                'id' => 104,
                'zone_id' => 231100,
                'name' => '黑河市',
                'parent_id' => 230000,
                'level' => 2,
            ),
            104 => 
            array (
                'id' => 105,
                'zone_id' => 231200,
                'name' => '绥化市',
                'parent_id' => 230000,
                'level' => 2,
            ),
            105 => 
            array (
                'id' => 106,
                'zone_id' => 232700,
                'name' => '大兴安岭地区',
                'parent_id' => 230000,
                'level' => 2,
            ),
            106 => 
            array (
                'id' => 107,
                'zone_id' => 310100,
                'name' => '上海市',
                'parent_id' => 310000,
                'level' => 2,
            ),
            107 => 
            array (
                'id' => 108,
                'zone_id' => 320100,
                'name' => '南京市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            108 => 
            array (
                'id' => 109,
                'zone_id' => 320200,
                'name' => '无锡市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            109 => 
            array (
                'id' => 110,
                'zone_id' => 320300,
                'name' => '徐州市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            110 => 
            array (
                'id' => 111,
                'zone_id' => 320400,
                'name' => '常州市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            111 => 
            array (
                'id' => 112,
                'zone_id' => 320500,
                'name' => '苏州市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            112 => 
            array (
                'id' => 113,
                'zone_id' => 320600,
                'name' => '南通市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            113 => 
            array (
                'id' => 114,
                'zone_id' => 320700,
                'name' => '连云港市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            114 => 
            array (
                'id' => 115,
                'zone_id' => 320800,
                'name' => '淮安市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            115 => 
            array (
                'id' => 116,
                'zone_id' => 320900,
                'name' => '盐城市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            116 => 
            array (
                'id' => 117,
                'zone_id' => 321000,
                'name' => '扬州市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            117 => 
            array (
                'id' => 118,
                'zone_id' => 321100,
                'name' => '镇江市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            118 => 
            array (
                'id' => 119,
                'zone_id' => 321200,
                'name' => '泰州市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            119 => 
            array (
                'id' => 120,
                'zone_id' => 321300,
                'name' => '宿迁市',
                'parent_id' => 320000,
                'level' => 2,
            ),
            120 => 
            array (
                'id' => 121,
                'zone_id' => 330100,
                'name' => '杭州市',
                'parent_id' => 330000,
                'level' => 2,
            ),
            121 => 
            array (
                'id' => 122,
                'zone_id' => 330200,
                'name' => '宁波市',
                'parent_id' => 330000,
                'level' => 2,
            ),
            122 => 
            array (
                'id' => 123,
                'zone_id' => 330300,
                'name' => '温州市',
                'parent_id' => 330000,
                'level' => 2,
            ),
            123 => 
            array (
                'id' => 124,
                'zone_id' => 330400,
                'name' => '嘉兴市',
                'parent_id' => 330000,
                'level' => 2,
            ),
            124 => 
            array (
                'id' => 125,
                'zone_id' => 330500,
                'name' => '湖州市',
                'parent_id' => 330000,
                'level' => 2,
            ),
            125 => 
            array (
                'id' => 126,
                'zone_id' => 330600,
                'name' => '绍兴市',
                'parent_id' => 330000,
                'level' => 2,
            ),
            126 => 
            array (
                'id' => 127,
                'zone_id' => 330700,
                'name' => '金华市',
                'parent_id' => 330000,
                'level' => 2,
            ),
            127 => 
            array (
                'id' => 128,
                'zone_id' => 330800,
                'name' => '衢州市',
                'parent_id' => 330000,
                'level' => 2,
            ),
            128 => 
            array (
                'id' => 129,
                'zone_id' => 330900,
                'name' => '舟山市',
                'parent_id' => 330000,
                'level' => 2,
            ),
            129 => 
            array (
                'id' => 130,
                'zone_id' => 331000,
                'name' => '台州市',
                'parent_id' => 330000,
                'level' => 2,
            ),
            130 => 
            array (
                'id' => 131,
                'zone_id' => 331100,
                'name' => '丽水市',
                'parent_id' => 330000,
                'level' => 2,
            ),
            131 => 
            array (
                'id' => 132,
                'zone_id' => 340100,
                'name' => '合肥市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            132 => 
            array (
                'id' => 133,
                'zone_id' => 340200,
                'name' => '芜湖市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            133 => 
            array (
                'id' => 134,
                'zone_id' => 340300,
                'name' => '蚌埠市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            134 => 
            array (
                'id' => 135,
                'zone_id' => 340400,
                'name' => '淮南市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            135 => 
            array (
                'id' => 136,
                'zone_id' => 340500,
                'name' => '马鞍山市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            136 => 
            array (
                'id' => 137,
                'zone_id' => 340600,
                'name' => '淮北市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            137 => 
            array (
                'id' => 138,
                'zone_id' => 340700,
                'name' => '铜陵市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            138 => 
            array (
                'id' => 139,
                'zone_id' => 340800,
                'name' => '安庆市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            139 => 
            array (
                'id' => 140,
                'zone_id' => 341000,
                'name' => '黄山市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            140 => 
            array (
                'id' => 141,
                'zone_id' => 341100,
                'name' => '滁州市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            141 => 
            array (
                'id' => 142,
                'zone_id' => 341200,
                'name' => '阜阳市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            142 => 
            array (
                'id' => 143,
                'zone_id' => 341300,
                'name' => '宿州市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            143 => 
            array (
                'id' => 144,
                'zone_id' => 341400,
                'name' => '巢湖市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            144 => 
            array (
                'id' => 145,
                'zone_id' => 341500,
                'name' => '六安市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            145 => 
            array (
                'id' => 146,
                'zone_id' => 341600,
                'name' => '亳州市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            146 => 
            array (
                'id' => 147,
                'zone_id' => 341700,
                'name' => '池州市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            147 => 
            array (
                'id' => 148,
                'zone_id' => 341800,
                'name' => '宣城市',
                'parent_id' => 340000,
                'level' => 2,
            ),
            148 => 
            array (
                'id' => 149,
                'zone_id' => 350100,
                'name' => '福州市',
                'parent_id' => 350000,
                'level' => 2,
            ),
            149 => 
            array (
                'id' => 150,
                'zone_id' => 350200,
                'name' => '厦门市',
                'parent_id' => 350000,
                'level' => 2,
            ),
            150 => 
            array (
                'id' => 151,
                'zone_id' => 350300,
                'name' => '莆田市',
                'parent_id' => 350000,
                'level' => 2,
            ),
            151 => 
            array (
                'id' => 152,
                'zone_id' => 350400,
                'name' => '三明市',
                'parent_id' => 350000,
                'level' => 2,
            ),
            152 => 
            array (
                'id' => 153,
                'zone_id' => 350500,
                'name' => '泉州市',
                'parent_id' => 350000,
                'level' => 2,
            ),
            153 => 
            array (
                'id' => 154,
                'zone_id' => 350600,
                'name' => '漳州市',
                'parent_id' => 350000,
                'level' => 2,
            ),
            154 => 
            array (
                'id' => 155,
                'zone_id' => 350700,
                'name' => '南平市',
                'parent_id' => 350000,
                'level' => 2,
            ),
            155 => 
            array (
                'id' => 156,
                'zone_id' => 350800,
                'name' => '龙岩市',
                'parent_id' => 350000,
                'level' => 2,
            ),
            156 => 
            array (
                'id' => 157,
                'zone_id' => 350900,
                'name' => '宁德市',
                'parent_id' => 350000,
                'level' => 2,
            ),
            157 => 
            array (
                'id' => 158,
                'zone_id' => 360100,
                'name' => '南昌市',
                'parent_id' => 360000,
                'level' => 2,
            ),
            158 => 
            array (
                'id' => 159,
                'zone_id' => 360200,
                'name' => '景德镇市',
                'parent_id' => 360000,
                'level' => 2,
            ),
            159 => 
            array (
                'id' => 160,
                'zone_id' => 360300,
                'name' => '萍乡市',
                'parent_id' => 360000,
                'level' => 2,
            ),
            160 => 
            array (
                'id' => 161,
                'zone_id' => 360400,
                'name' => '九江市',
                'parent_id' => 360000,
                'level' => 2,
            ),
            161 => 
            array (
                'id' => 162,
                'zone_id' => 360500,
                'name' => '新余市',
                'parent_id' => 360000,
                'level' => 2,
            ),
            162 => 
            array (
                'id' => 163,
                'zone_id' => 360600,
                'name' => '鹰潭市',
                'parent_id' => 360000,
                'level' => 2,
            ),
            163 => 
            array (
                'id' => 164,
                'zone_id' => 360700,
                'name' => '赣州市',
                'parent_id' => 360000,
                'level' => 2,
            ),
            164 => 
            array (
                'id' => 165,
                'zone_id' => 360800,
                'name' => '吉安市',
                'parent_id' => 360000,
                'level' => 2,
            ),
            165 => 
            array (
                'id' => 166,
                'zone_id' => 360900,
                'name' => '宜春市',
                'parent_id' => 360000,
                'level' => 2,
            ),
            166 => 
            array (
                'id' => 167,
                'zone_id' => 361000,
                'name' => '抚州市',
                'parent_id' => 360000,
                'level' => 2,
            ),
            167 => 
            array (
                'id' => 168,
                'zone_id' => 361100,
                'name' => '上饶市',
                'parent_id' => 360000,
                'level' => 2,
            ),
            168 => 
            array (
                'id' => 169,
                'zone_id' => 370100,
                'name' => '济南市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            169 => 
            array (
                'id' => 170,
                'zone_id' => 370200,
                'name' => '青岛市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            170 => 
            array (
                'id' => 171,
                'zone_id' => 370300,
                'name' => '淄博市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            171 => 
            array (
                'id' => 172,
                'zone_id' => 370400,
                'name' => '枣庄市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            172 => 
            array (
                'id' => 173,
                'zone_id' => 370500,
                'name' => '东营市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            173 => 
            array (
                'id' => 174,
                'zone_id' => 370600,
                'name' => '烟台市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            174 => 
            array (
                'id' => 175,
                'zone_id' => 370700,
                'name' => '潍坊市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            175 => 
            array (
                'id' => 176,
                'zone_id' => 370800,
                'name' => '济宁市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            176 => 
            array (
                'id' => 177,
                'zone_id' => 370900,
                'name' => '泰安市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            177 => 
            array (
                'id' => 178,
                'zone_id' => 371000,
                'name' => '威海市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            178 => 
            array (
                'id' => 179,
                'zone_id' => 371100,
                'name' => '日照市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            179 => 
            array (
                'id' => 180,
                'zone_id' => 371200,
                'name' => '莱芜市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            180 => 
            array (
                'id' => 181,
                'zone_id' => 371300,
                'name' => '临沂市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            181 => 
            array (
                'id' => 182,
                'zone_id' => 371400,
                'name' => '德州市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            182 => 
            array (
                'id' => 183,
                'zone_id' => 371500,
                'name' => '聊城市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            183 => 
            array (
                'id' => 184,
                'zone_id' => 371600,
                'name' => '滨州市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            184 => 
            array (
                'id' => 185,
                'zone_id' => 371700,
                'name' => '荷泽市',
                'parent_id' => 370000,
                'level' => 2,
            ),
            185 => 
            array (
                'id' => 186,
                'zone_id' => 410100,
                'name' => '郑州市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            186 => 
            array (
                'id' => 187,
                'zone_id' => 410200,
                'name' => '开封市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            187 => 
            array (
                'id' => 188,
                'zone_id' => 410300,
                'name' => '洛阳市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            188 => 
            array (
                'id' => 189,
                'zone_id' => 410400,
                'name' => '平顶山市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            189 => 
            array (
                'id' => 190,
                'zone_id' => 410500,
                'name' => '安阳市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            190 => 
            array (
                'id' => 191,
                'zone_id' => 410600,
                'name' => '鹤壁市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            191 => 
            array (
                'id' => 192,
                'zone_id' => 410700,
                'name' => '新乡市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            192 => 
            array (
                'id' => 193,
                'zone_id' => 410800,
                'name' => '焦作市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            193 => 
            array (
                'id' => 194,
                'zone_id' => 410900,
                'name' => '濮阳市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            194 => 
            array (
                'id' => 195,
                'zone_id' => 411000,
                'name' => '许昌市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            195 => 
            array (
                'id' => 196,
                'zone_id' => 411100,
                'name' => '漯河市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            196 => 
            array (
                'id' => 197,
                'zone_id' => 411200,
                'name' => '三门峡市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            197 => 
            array (
                'id' => 198,
                'zone_id' => 411300,
                'name' => '南阳市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            198 => 
            array (
                'id' => 199,
                'zone_id' => 411400,
                'name' => '商丘市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            199 => 
            array (
                'id' => 200,
                'zone_id' => 411500,
                'name' => '信阳市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            200 => 
            array (
                'id' => 201,
                'zone_id' => 411600,
                'name' => '周口市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            201 => 
            array (
                'id' => 202,
                'zone_id' => 411700,
                'name' => '驻马店市',
                'parent_id' => 410000,
                'level' => 2,
            ),
            202 => 
            array (
                'id' => 203,
                'zone_id' => 420100,
                'name' => '武汉市',
                'parent_id' => 420000,
                'level' => 2,
            ),
            203 => 
            array (
                'id' => 204,
                'zone_id' => 420200,
                'name' => '黄石市',
                'parent_id' => 420000,
                'level' => 2,
            ),
            204 => 
            array (
                'id' => 205,
                'zone_id' => 420300,
                'name' => '十堰市',
                'parent_id' => 420000,
                'level' => 2,
            ),
            205 => 
            array (
                'id' => 206,
                'zone_id' => 420500,
                'name' => '宜昌市',
                'parent_id' => 420000,
                'level' => 2,
            ),
            206 => 
            array (
                'id' => 207,
                'zone_id' => 420600,
                'name' => '襄樊市',
                'parent_id' => 420000,
                'level' => 2,
            ),
            207 => 
            array (
                'id' => 208,
                'zone_id' => 420700,
                'name' => '鄂州市',
                'parent_id' => 420000,
                'level' => 2,
            ),
            208 => 
            array (
                'id' => 209,
                'zone_id' => 420800,
                'name' => '荆门市',
                'parent_id' => 420000,
                'level' => 2,
            ),
            209 => 
            array (
                'id' => 210,
                'zone_id' => 420900,
                'name' => '孝感市',
                'parent_id' => 420000,
                'level' => 2,
            ),
            210 => 
            array (
                'id' => 211,
                'zone_id' => 421000,
                'name' => '荆州市',
                'parent_id' => 420000,
                'level' => 2,
            ),
            211 => 
            array (
                'id' => 212,
                'zone_id' => 421100,
                'name' => '黄冈市',
                'parent_id' => 420000,
                'level' => 2,
            ),
            212 => 
            array (
                'id' => 213,
                'zone_id' => 421200,
                'name' => '咸宁市',
                'parent_id' => 420000,
                'level' => 2,
            ),
            213 => 
            array (
                'id' => 214,
                'zone_id' => 421300,
                'name' => '随州市',
                'parent_id' => 420000,
                'level' => 2,
            ),
            214 => 
            array (
                'id' => 215,
                'zone_id' => 422800,
                'name' => '恩施土家族苗族自治州',
                'parent_id' => 420000,
                'level' => 2,
            ),
            215 => 
            array (
                'id' => 216,
                'zone_id' => 429000,
                'name' => '省直辖行政单位',
                'parent_id' => 420000,
                'level' => 2,
            ),
            216 => 
            array (
                'id' => 217,
                'zone_id' => 430100,
                'name' => '长沙市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            217 => 
            array (
                'id' => 218,
                'zone_id' => 430200,
                'name' => '株洲市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            218 => 
            array (
                'id' => 219,
                'zone_id' => 430300,
                'name' => '湘潭市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            219 => 
            array (
                'id' => 220,
                'zone_id' => 430400,
                'name' => '衡阳市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            220 => 
            array (
                'id' => 221,
                'zone_id' => 430500,
                'name' => '邵阳市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            221 => 
            array (
                'id' => 222,
                'zone_id' => 430600,
                'name' => '岳阳市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            222 => 
            array (
                'id' => 223,
                'zone_id' => 430700,
                'name' => '常德市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            223 => 
            array (
                'id' => 224,
                'zone_id' => 430800,
                'name' => '张家界市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            224 => 
            array (
                'id' => 225,
                'zone_id' => 430900,
                'name' => '益阳市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            225 => 
            array (
                'id' => 226,
                'zone_id' => 431000,
                'name' => '郴州市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            226 => 
            array (
                'id' => 227,
                'zone_id' => 431100,
                'name' => '永州市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            227 => 
            array (
                'id' => 228,
                'zone_id' => 431200,
                'name' => '怀化市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            228 => 
            array (
                'id' => 229,
                'zone_id' => 431300,
                'name' => '娄底市',
                'parent_id' => 430000,
                'level' => 2,
            ),
            229 => 
            array (
                'id' => 230,
                'zone_id' => 433100,
                'name' => '湘西土家族苗族自治州',
                'parent_id' => 430000,
                'level' => 2,
            ),
            230 => 
            array (
                'id' => 231,
                'zone_id' => 440100,
                'name' => '广州市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            231 => 
            array (
                'id' => 232,
                'zone_id' => 440200,
                'name' => '韶关市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            232 => 
            array (
                'id' => 233,
                'zone_id' => 440300,
                'name' => '深圳市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            233 => 
            array (
                'id' => 234,
                'zone_id' => 440400,
                'name' => '珠海市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            234 => 
            array (
                'id' => 235,
                'zone_id' => 440500,
                'name' => '汕头市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            235 => 
            array (
                'id' => 236,
                'zone_id' => 440600,
                'name' => '佛山市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            236 => 
            array (
                'id' => 237,
                'zone_id' => 440700,
                'name' => '江门市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            237 => 
            array (
                'id' => 238,
                'zone_id' => 440800,
                'name' => '湛江市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            238 => 
            array (
                'id' => 239,
                'zone_id' => 440900,
                'name' => '茂名市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            239 => 
            array (
                'id' => 240,
                'zone_id' => 441200,
                'name' => '肇庆市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            240 => 
            array (
                'id' => 241,
                'zone_id' => 441300,
                'name' => '惠州市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            241 => 
            array (
                'id' => 242,
                'zone_id' => 441400,
                'name' => '梅州市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            242 => 
            array (
                'id' => 243,
                'zone_id' => 441500,
                'name' => '汕尾市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            243 => 
            array (
                'id' => 244,
                'zone_id' => 441600,
                'name' => '河源市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            244 => 
            array (
                'id' => 245,
                'zone_id' => 441700,
                'name' => '阳江市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            245 => 
            array (
                'id' => 246,
                'zone_id' => 441800,
                'name' => '清远市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            246 => 
            array (
                'id' => 247,
                'zone_id' => 441900,
                'name' => '东莞市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            247 => 
            array (
                'id' => 248,
                'zone_id' => 442000,
                'name' => '中山市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            248 => 
            array (
                'id' => 249,
                'zone_id' => 445100,
                'name' => '潮州市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            249 => 
            array (
                'id' => 250,
                'zone_id' => 445200,
                'name' => '揭阳市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            250 => 
            array (
                'id' => 251,
                'zone_id' => 445300,
                'name' => '云浮市',
                'parent_id' => 440000,
                'level' => 2,
            ),
            251 => 
            array (
                'id' => 252,
                'zone_id' => 450100,
                'name' => '南宁市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            252 => 
            array (
                'id' => 253,
                'zone_id' => 450200,
                'name' => '柳州市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            253 => 
            array (
                'id' => 254,
                'zone_id' => 450300,
                'name' => '桂林市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            254 => 
            array (
                'id' => 255,
                'zone_id' => 450400,
                'name' => '梧州市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            255 => 
            array (
                'id' => 256,
                'zone_id' => 450500,
                'name' => '北海市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            256 => 
            array (
                'id' => 257,
                'zone_id' => 450600,
                'name' => '防城港市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            257 => 
            array (
                'id' => 258,
                'zone_id' => 450700,
                'name' => '钦州市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            258 => 
            array (
                'id' => 259,
                'zone_id' => 450800,
                'name' => '贵港市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            259 => 
            array (
                'id' => 260,
                'zone_id' => 450900,
                'name' => '玉林市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            260 => 
            array (
                'id' => 261,
                'zone_id' => 451000,
                'name' => '百色市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            261 => 
            array (
                'id' => 262,
                'zone_id' => 451100,
                'name' => '贺州市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            262 => 
            array (
                'id' => 263,
                'zone_id' => 451200,
                'name' => '河池市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            263 => 
            array (
                'id' => 264,
                'zone_id' => 451300,
                'name' => '来宾市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            264 => 
            array (
                'id' => 265,
                'zone_id' => 451400,
                'name' => '崇左市',
                'parent_id' => 450000,
                'level' => 2,
            ),
            265 => 
            array (
                'id' => 266,
                'zone_id' => 460100,
                'name' => '海口市',
                'parent_id' => 460000,
                'level' => 2,
            ),
            266 => 
            array (
                'id' => 267,
                'zone_id' => 460200,
                'name' => '三亚市',
                'parent_id' => 460000,
                'level' => 2,
            ),
            267 => 
            array (
                'id' => 268,
                'zone_id' => 469000,
                'name' => '省直辖县级行政单位',
                'parent_id' => 460000,
                'level' => 2,
            ),
            268 => 
            array (
                'id' => 269,
                'zone_id' => 500100,
                'name' => '重庆市',
                'parent_id' => 500000,
                'level' => 2,
            ),
            269 => 
            array (
                'id' => 270,
                'zone_id' => 510100,
                'name' => '成都市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            270 => 
            array (
                'id' => 271,
                'zone_id' => 510300,
                'name' => '自贡市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            271 => 
            array (
                'id' => 272,
                'zone_id' => 510400,
                'name' => '攀枝花市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            272 => 
            array (
                'id' => 273,
                'zone_id' => 510500,
                'name' => '泸州市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            273 => 
            array (
                'id' => 274,
                'zone_id' => 510600,
                'name' => '德阳市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            274 => 
            array (
                'id' => 275,
                'zone_id' => 510700,
                'name' => '绵阳市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            275 => 
            array (
                'id' => 276,
                'zone_id' => 510800,
                'name' => '广元市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            276 => 
            array (
                'id' => 277,
                'zone_id' => 510900,
                'name' => '遂宁市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            277 => 
            array (
                'id' => 278,
                'zone_id' => 511000,
                'name' => '内江市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            278 => 
            array (
                'id' => 279,
                'zone_id' => 511100,
                'name' => '乐山市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            279 => 
            array (
                'id' => 280,
                'zone_id' => 511300,
                'name' => '南充市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            280 => 
            array (
                'id' => 281,
                'zone_id' => 511400,
                'name' => '眉山市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            281 => 
            array (
                'id' => 282,
                'zone_id' => 511500,
                'name' => '宜宾市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            282 => 
            array (
                'id' => 283,
                'zone_id' => 511600,
                'name' => '广安市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            283 => 
            array (
                'id' => 284,
                'zone_id' => 511700,
                'name' => '达州市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            284 => 
            array (
                'id' => 285,
                'zone_id' => 511800,
                'name' => '雅安市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            285 => 
            array (
                'id' => 286,
                'zone_id' => 511900,
                'name' => '巴中市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            286 => 
            array (
                'id' => 287,
                'zone_id' => 512000,
                'name' => '资阳市',
                'parent_id' => 510000,
                'level' => 2,
            ),
            287 => 
            array (
                'id' => 288,
                'zone_id' => 513200,
                'name' => '阿坝藏族羌族自治州',
                'parent_id' => 510000,
                'level' => 2,
            ),
            288 => 
            array (
                'id' => 289,
                'zone_id' => 513300,
                'name' => '甘孜藏族自治州',
                'parent_id' => 510000,
                'level' => 2,
            ),
            289 => 
            array (
                'id' => 290,
                'zone_id' => 513400,
                'name' => '凉山彝族自治州',
                'parent_id' => 510000,
                'level' => 2,
            ),
            290 => 
            array (
                'id' => 291,
                'zone_id' => 520100,
                'name' => '贵阳市',
                'parent_id' => 520000,
                'level' => 2,
            ),
            291 => 
            array (
                'id' => 292,
                'zone_id' => 520200,
                'name' => '六盘水市',
                'parent_id' => 520000,
                'level' => 2,
            ),
            292 => 
            array (
                'id' => 293,
                'zone_id' => 520300,
                'name' => '遵义市',
                'parent_id' => 520000,
                'level' => 2,
            ),
            293 => 
            array (
                'id' => 294,
                'zone_id' => 520400,
                'name' => '安顺市',
                'parent_id' => 520000,
                'level' => 2,
            ),
            294 => 
            array (
                'id' => 295,
                'zone_id' => 522200,
                'name' => '铜仁地区',
                'parent_id' => 520000,
                'level' => 2,
            ),
            295 => 
            array (
                'id' => 296,
                'zone_id' => 522300,
                'name' => '黔西南布依族苗族自治州',
                'parent_id' => 520000,
                'level' => 2,
            ),
            296 => 
            array (
                'id' => 297,
                'zone_id' => 522400,
                'name' => '毕节地区',
                'parent_id' => 520000,
                'level' => 2,
            ),
            297 => 
            array (
                'id' => 298,
                'zone_id' => 522600,
                'name' => '黔东南苗族侗族自治州',
                'parent_id' => 520000,
                'level' => 2,
            ),
            298 => 
            array (
                'id' => 299,
                'zone_id' => 522700,
                'name' => '黔南布依族苗族自治州',
                'parent_id' => 520000,
                'level' => 2,
            ),
            299 => 
            array (
                'id' => 300,
                'zone_id' => 530100,
                'name' => '昆明市',
                'parent_id' => 530000,
                'level' => 2,
            ),
            300 => 
            array (
                'id' => 301,
                'zone_id' => 530300,
                'name' => '曲靖市',
                'parent_id' => 530000,
                'level' => 2,
            ),
            301 => 
            array (
                'id' => 302,
                'zone_id' => 530400,
                'name' => '玉溪市',
                'parent_id' => 530000,
                'level' => 2,
            ),
            302 => 
            array (
                'id' => 303,
                'zone_id' => 530500,
                'name' => '保山市',
                'parent_id' => 530000,
                'level' => 2,
            ),
            303 => 
            array (
                'id' => 304,
                'zone_id' => 530600,
                'name' => '昭通市',
                'parent_id' => 530000,
                'level' => 2,
            ),
            304 => 
            array (
                'id' => 305,
                'zone_id' => 530700,
                'name' => '丽江市',
                'parent_id' => 530000,
                'level' => 2,
            ),
            305 => 
            array (
                'id' => 306,
                'zone_id' => 530800,
                'name' => '思茅市',
                'parent_id' => 530000,
                'level' => 2,
            ),
            306 => 
            array (
                'id' => 307,
                'zone_id' => 530900,
                'name' => '临沧市',
                'parent_id' => 530000,
                'level' => 2,
            ),
            307 => 
            array (
                'id' => 308,
                'zone_id' => 532300,
                'name' => '楚雄彝族自治州',
                'parent_id' => 530000,
                'level' => 2,
            ),
            308 => 
            array (
                'id' => 309,
                'zone_id' => 532500,
                'name' => '红河哈尼族彝族自治州',
                'parent_id' => 530000,
                'level' => 2,
            ),
            309 => 
            array (
                'id' => 310,
                'zone_id' => 532600,
                'name' => '文山壮族苗族自治州',
                'parent_id' => 530000,
                'level' => 2,
            ),
            310 => 
            array (
                'id' => 311,
                'zone_id' => 532800,
                'name' => '西双版纳傣族自治州',
                'parent_id' => 530000,
                'level' => 2,
            ),
            311 => 
            array (
                'id' => 312,
                'zone_id' => 532900,
                'name' => '大理白族自治州',
                'parent_id' => 530000,
                'level' => 2,
            ),
            312 => 
            array (
                'id' => 313,
                'zone_id' => 533100,
                'name' => '德宏傣族景颇族自治州',
                'parent_id' => 530000,
                'level' => 2,
            ),
            313 => 
            array (
                'id' => 314,
                'zone_id' => 533300,
                'name' => '怒江傈僳族自治州',
                'parent_id' => 530000,
                'level' => 2,
            ),
            314 => 
            array (
                'id' => 315,
                'zone_id' => 533400,
                'name' => '迪庆藏族自治州',
                'parent_id' => 530000,
                'level' => 2,
            ),
            315 => 
            array (
                'id' => 316,
                'zone_id' => 540100,
                'name' => '拉萨市',
                'parent_id' => 540000,
                'level' => 2,
            ),
            316 => 
            array (
                'id' => 317,
                'zone_id' => 542100,
                'name' => '昌都地区',
                'parent_id' => 540000,
                'level' => 2,
            ),
            317 => 
            array (
                'id' => 318,
                'zone_id' => 542200,
                'name' => '山南地区',
                'parent_id' => 540000,
                'level' => 2,
            ),
            318 => 
            array (
                'id' => 319,
                'zone_id' => 542300,
                'name' => '日喀则地区',
                'parent_id' => 540000,
                'level' => 2,
            ),
            319 => 
            array (
                'id' => 320,
                'zone_id' => 542400,
                'name' => '那曲地区',
                'parent_id' => 540000,
                'level' => 2,
            ),
            320 => 
            array (
                'id' => 321,
                'zone_id' => 542500,
                'name' => '阿里地区',
                'parent_id' => 540000,
                'level' => 2,
            ),
            321 => 
            array (
                'id' => 322,
                'zone_id' => 542600,
                'name' => '林芝地区',
                'parent_id' => 540000,
                'level' => 2,
            ),
            322 => 
            array (
                'id' => 323,
                'zone_id' => 610100,
                'name' => '西安市',
                'parent_id' => 610000,
                'level' => 2,
            ),
            323 => 
            array (
                'id' => 324,
                'zone_id' => 610200,
                'name' => '铜川市',
                'parent_id' => 610000,
                'level' => 2,
            ),
            324 => 
            array (
                'id' => 325,
                'zone_id' => 610300,
                'name' => '宝鸡市',
                'parent_id' => 610000,
                'level' => 2,
            ),
            325 => 
            array (
                'id' => 326,
                'zone_id' => 610400,
                'name' => '咸阳市',
                'parent_id' => 610000,
                'level' => 2,
            ),
            326 => 
            array (
                'id' => 327,
                'zone_id' => 610500,
                'name' => '渭南市',
                'parent_id' => 610000,
                'level' => 2,
            ),
            327 => 
            array (
                'id' => 328,
                'zone_id' => 610600,
                'name' => '延安市',
                'parent_id' => 610000,
                'level' => 2,
            ),
            328 => 
            array (
                'id' => 329,
                'zone_id' => 610700,
                'name' => '汉中市',
                'parent_id' => 610000,
                'level' => 2,
            ),
            329 => 
            array (
                'id' => 330,
                'zone_id' => 610800,
                'name' => '榆林市',
                'parent_id' => 610000,
                'level' => 2,
            ),
            330 => 
            array (
                'id' => 331,
                'zone_id' => 610900,
                'name' => '安康市',
                'parent_id' => 610000,
                'level' => 2,
            ),
            331 => 
            array (
                'id' => 332,
                'zone_id' => 611000,
                'name' => '商洛市',
                'parent_id' => 610000,
                'level' => 2,
            ),
            332 => 
            array (
                'id' => 333,
                'zone_id' => 620100,
                'name' => '兰州市',
                'parent_id' => 620000,
                'level' => 2,
            ),
            333 => 
            array (
                'id' => 334,
                'zone_id' => 620200,
                'name' => '嘉峪关市',
                'parent_id' => 620000,
                'level' => 2,
            ),
            334 => 
            array (
                'id' => 335,
                'zone_id' => 620300,
                'name' => '金昌市',
                'parent_id' => 620000,
                'level' => 2,
            ),
            335 => 
            array (
                'id' => 336,
                'zone_id' => 620400,
                'name' => '白银市',
                'parent_id' => 620000,
                'level' => 2,
            ),
            336 => 
            array (
                'id' => 337,
                'zone_id' => 620500,
                'name' => '天水市',
                'parent_id' => 620000,
                'level' => 2,
            ),
            337 => 
            array (
                'id' => 338,
                'zone_id' => 620600,
                'name' => '武威市',
                'parent_id' => 620000,
                'level' => 2,
            ),
            338 => 
            array (
                'id' => 339,
                'zone_id' => 620700,
                'name' => '张掖市',
                'parent_id' => 620000,
                'level' => 2,
            ),
            339 => 
            array (
                'id' => 340,
                'zone_id' => 620800,
                'name' => '平凉市',
                'parent_id' => 620000,
                'level' => 2,
            ),
            340 => 
            array (
                'id' => 341,
                'zone_id' => 620900,
                'name' => '酒泉市',
                'parent_id' => 620000,
                'level' => 2,
            ),
            341 => 
            array (
                'id' => 342,
                'zone_id' => 621000,
                'name' => '庆阳市',
                'parent_id' => 620000,
                'level' => 2,
            ),
            342 => 
            array (
                'id' => 343,
                'zone_id' => 621100,
                'name' => '定西市',
                'parent_id' => 620000,
                'level' => 2,
            ),
            343 => 
            array (
                'id' => 344,
                'zone_id' => 621200,
                'name' => '陇南市',
                'parent_id' => 620000,
                'level' => 2,
            ),
            344 => 
            array (
                'id' => 345,
                'zone_id' => 622900,
                'name' => '临夏回族自治州',
                'parent_id' => 620000,
                'level' => 2,
            ),
            345 => 
            array (
                'id' => 346,
                'zone_id' => 623000,
                'name' => '甘南藏族自治州',
                'parent_id' => 620000,
                'level' => 2,
            ),
            346 => 
            array (
                'id' => 347,
                'zone_id' => 630100,
                'name' => '西宁市',
                'parent_id' => 630000,
                'level' => 2,
            ),
            347 => 
            array (
                'id' => 348,
                'zone_id' => 632100,
                'name' => '海东地区',
                'parent_id' => 630000,
                'level' => 2,
            ),
            348 => 
            array (
                'id' => 349,
                'zone_id' => 632200,
                'name' => '海北藏族自治州',
                'parent_id' => 630000,
                'level' => 2,
            ),
            349 => 
            array (
                'id' => 350,
                'zone_id' => 632300,
                'name' => '黄南藏族自治州',
                'parent_id' => 630000,
                'level' => 2,
            ),
            350 => 
            array (
                'id' => 351,
                'zone_id' => 632500,
                'name' => '海南藏族自治州',
                'parent_id' => 630000,
                'level' => 2,
            ),
            351 => 
            array (
                'id' => 352,
                'zone_id' => 632600,
                'name' => '果洛藏族自治州',
                'parent_id' => 630000,
                'level' => 2,
            ),
            352 => 
            array (
                'id' => 353,
                'zone_id' => 632700,
                'name' => '玉树藏族自治州',
                'parent_id' => 630000,
                'level' => 2,
            ),
            353 => 
            array (
                'id' => 354,
                'zone_id' => 632800,
                'name' => '海西蒙古族藏族自治州',
                'parent_id' => 630000,
                'level' => 2,
            ),
            354 => 
            array (
                'id' => 355,
                'zone_id' => 640100,
                'name' => '银川市',
                'parent_id' => 640000,
                'level' => 2,
            ),
            355 => 
            array (
                'id' => 356,
                'zone_id' => 640200,
                'name' => '石嘴山市',
                'parent_id' => 640000,
                'level' => 2,
            ),
            356 => 
            array (
                'id' => 357,
                'zone_id' => 640300,
                'name' => '吴忠市',
                'parent_id' => 640000,
                'level' => 2,
            ),
            357 => 
            array (
                'id' => 358,
                'zone_id' => 640400,
                'name' => '固原市',
                'parent_id' => 640000,
                'level' => 2,
            ),
            358 => 
            array (
                'id' => 359,
                'zone_id' => 640500,
                'name' => '中卫市',
                'parent_id' => 640000,
                'level' => 2,
            ),
            359 => 
            array (
                'id' => 360,
                'zone_id' => 650100,
                'name' => '乌鲁木齐市',
                'parent_id' => 650000,
                'level' => 2,
            ),
            360 => 
            array (
                'id' => 361,
                'zone_id' => 650200,
                'name' => '克拉玛依市',
                'parent_id' => 650000,
                'level' => 2,
            ),
            361 => 
            array (
                'id' => 362,
                'zone_id' => 652100,
                'name' => '吐鲁番地区',
                'parent_id' => 650000,
                'level' => 2,
            ),
            362 => 
            array (
                'id' => 363,
                'zone_id' => 652200,
                'name' => '哈密地区',
                'parent_id' => 650000,
                'level' => 2,
            ),
            363 => 
            array (
                'id' => 364,
                'zone_id' => 652300,
                'name' => '昌吉回族自治州',
                'parent_id' => 650000,
                'level' => 2,
            ),
            364 => 
            array (
                'id' => 365,
                'zone_id' => 652700,
                'name' => '博尔塔拉蒙古自治州',
                'parent_id' => 650000,
                'level' => 2,
            ),
            365 => 
            array (
                'id' => 366,
                'zone_id' => 652800,
                'name' => '巴音郭楞蒙古自治州',
                'parent_id' => 650000,
                'level' => 2,
            ),
            366 => 
            array (
                'id' => 367,
                'zone_id' => 652900,
                'name' => '阿克苏地区',
                'parent_id' => 650000,
                'level' => 2,
            ),
            367 => 
            array (
                'id' => 368,
                'zone_id' => 653000,
                'name' => '克孜勒苏柯尔克孜自治州',
                'parent_id' => 650000,
                'level' => 2,
            ),
            368 => 
            array (
                'id' => 369,
                'zone_id' => 653100,
                'name' => '喀什地区',
                'parent_id' => 650000,
                'level' => 2,
            ),
            369 => 
            array (
                'id' => 370,
                'zone_id' => 653200,
                'name' => '和田地区',
                'parent_id' => 650000,
                'level' => 2,
            ),
            370 => 
            array (
                'id' => 371,
                'zone_id' => 654000,
                'name' => '伊犁哈萨克自治州',
                'parent_id' => 650000,
                'level' => 2,
            ),
            371 => 
            array (
                'id' => 372,
                'zone_id' => 654200,
                'name' => '塔城地区',
                'parent_id' => 650000,
                'level' => 2,
            ),
            372 => 
            array (
                'id' => 373,
                'zone_id' => 654300,
                'name' => '阿勒泰地区',
                'parent_id' => 650000,
                'level' => 2,
            ),
            373 => 
            array (
                'id' => 374,
                'zone_id' => 659000,
                'name' => '省直辖行政单位',
                'parent_id' => 650000,
                'level' => 2,
            ),
            374 => 
            array (
                'id' => 375,
                'zone_id' => 710100,
                'name' => '台北市',
                'parent_id' => 710000,
                'level' => 2,
            ),
            375 => 
            array (
                'id' => 376,
                'zone_id' => 710200,
                'name' => '高雄市',
                'parent_id' => 710000,
                'level' => 2,
            ),
            376 => 
            array (
                'id' => 377,
                'zone_id' => 710300,
                'name' => '基隆市',
                'parent_id' => 710000,
                'level' => 2,
            ),
            377 => 
            array (
                'id' => 378,
                'zone_id' => 710400,
                'name' => '台中市',
                'parent_id' => 710000,
                'level' => 2,
            ),
            378 => 
            array (
                'id' => 379,
                'zone_id' => 710500,
                'name' => '台南市',
                'parent_id' => 710000,
                'level' => 2,
            ),
            379 => 
            array (
                'id' => 380,
                'zone_id' => 710600,
                'name' => '新竹市',
                'parent_id' => 710000,
                'level' => 2,
            ),
            380 => 
            array (
                'id' => 381,
                'zone_id' => 710700,
                'name' => '嘉义市',
                'parent_id' => 710000,
                'level' => 2,
            ),
            381 => 
            array (
                'id' => 382,
                'zone_id' => 719000,
                'name' => '省直辖',
                'parent_id' => 710000,
                'level' => 2,
            ),
            382 => 
            array (
                'id' => 383,
                'zone_id' => 810100,
                'name' => '香港岛',
                'parent_id' => 810000,
                'level' => 2,
            ),
            383 => 
            array (
                'id' => 384,
                'zone_id' => 810200,
                'name' => '九龙',
                'parent_id' => 810000,
                'level' => 2,
            ),
            384 => 
            array (
                'id' => 385,
                'zone_id' => 810300,
                'name' => '新界',
                'parent_id' => 810000,
                'level' => 2,
            ),
            385 => 
            array (
                'id' => 386,
                'zone_id' => 820100,
                'name' => '澳门半岛',
                'parent_id' => 820000,
                'level' => 2,
            ),
            386 => 
            array (
                'id' => 387,
                'zone_id' => 820200,
                'name' => '澳门离岛',
                'parent_id' => 820000,
                'level' => 2,
            ),
            387 => 
            array (
                'id' => 388,
                'zone_id' => 820300,
                'name' => '无堂区划分区域',
                'parent_id' => 820000,
                'level' => 2,
            ),
            388 => 
            array (
                'id' => 389,
                'zone_id' => 110101,
                'name' => '东城区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            389 => 
            array (
                'id' => 390,
                'zone_id' => 110102,
                'name' => '西城区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            390 => 
            array (
                'id' => 391,
                'zone_id' => 110103,
                'name' => '崇文区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            391 => 
            array (
                'id' => 392,
                'zone_id' => 110104,
                'name' => '宣武区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            392 => 
            array (
                'id' => 393,
                'zone_id' => 110105,
                'name' => '朝阳区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            393 => 
            array (
                'id' => 394,
                'zone_id' => 110106,
                'name' => '丰台区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            394 => 
            array (
                'id' => 395,
                'zone_id' => 110107,
                'name' => '石景山区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            395 => 
            array (
                'id' => 396,
                'zone_id' => 110108,
                'name' => '海淀区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            396 => 
            array (
                'id' => 397,
                'zone_id' => 110109,
                'name' => '门头沟区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            397 => 
            array (
                'id' => 398,
                'zone_id' => 110111,
                'name' => '房山区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            398 => 
            array (
                'id' => 399,
                'zone_id' => 110112,
                'name' => '通州区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            399 => 
            array (
                'id' => 400,
                'zone_id' => 110113,
                'name' => '顺义区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            400 => 
            array (
                'id' => 401,
                'zone_id' => 110114,
                'name' => '昌平区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            401 => 
            array (
                'id' => 402,
                'zone_id' => 110115,
                'name' => '大兴区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            402 => 
            array (
                'id' => 403,
                'zone_id' => 110116,
                'name' => '怀柔区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            403 => 
            array (
                'id' => 404,
                'zone_id' => 110117,
                'name' => '平谷区',
                'parent_id' => 110100,
                'level' => 3,
            ),
            404 => 
            array (
                'id' => 405,
                'zone_id' => 110228,
                'name' => '密云县',
                'parent_id' => 110100,
                'level' => 3,
            ),
            405 => 
            array (
                'id' => 406,
                'zone_id' => 110229,
                'name' => '延庆县',
                'parent_id' => 110100,
                'level' => 3,
            ),
            406 => 
            array (
                'id' => 407,
                'zone_id' => 120101,
                'name' => '和平区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            407 => 
            array (
                'id' => 408,
                'zone_id' => 120102,
                'name' => '河东区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            408 => 
            array (
                'id' => 409,
                'zone_id' => 120103,
                'name' => '河西区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            409 => 
            array (
                'id' => 410,
                'zone_id' => 120104,
                'name' => '南开区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            410 => 
            array (
                'id' => 411,
                'zone_id' => 120105,
                'name' => '河北区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            411 => 
            array (
                'id' => 412,
                'zone_id' => 120106,
                'name' => '红桥区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            412 => 
            array (
                'id' => 413,
                'zone_id' => 120107,
                'name' => '塘沽区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            413 => 
            array (
                'id' => 414,
                'zone_id' => 120108,
                'name' => '汉沽区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            414 => 
            array (
                'id' => 415,
                'zone_id' => 120109,
                'name' => '大港区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            415 => 
            array (
                'id' => 416,
                'zone_id' => 120110,
                'name' => '东丽区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            416 => 
            array (
                'id' => 417,
                'zone_id' => 120111,
                'name' => '西青区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            417 => 
            array (
                'id' => 418,
                'zone_id' => 120112,
                'name' => '津南区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            418 => 
            array (
                'id' => 419,
                'zone_id' => 120113,
                'name' => '北辰区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            419 => 
            array (
                'id' => 420,
                'zone_id' => 120114,
                'name' => '武清区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            420 => 
            array (
                'id' => 421,
                'zone_id' => 120115,
                'name' => '宝坻区',
                'parent_id' => 120100,
                'level' => 3,
            ),
            421 => 
            array (
                'id' => 422,
                'zone_id' => 120221,
                'name' => '宁河县',
                'parent_id' => 120100,
                'level' => 3,
            ),
            422 => 
            array (
                'id' => 423,
                'zone_id' => 120223,
                'name' => '静海县',
                'parent_id' => 120100,
                'level' => 3,
            ),
            423 => 
            array (
                'id' => 424,
                'zone_id' => 120225,
                'name' => '蓟　县',
                'parent_id' => 120100,
                'level' => 3,
            ),
            424 => 
            array (
                'id' => 425,
                'zone_id' => 130101,
                'name' => '市辖区',
                'parent_id' => 130100,
                'level' => 3,
            ),
            425 => 
            array (
                'id' => 426,
                'zone_id' => 130102,
                'name' => '长安区',
                'parent_id' => 130100,
                'level' => 3,
            ),
            426 => 
            array (
                'id' => 427,
                'zone_id' => 130103,
                'name' => '桥东区',
                'parent_id' => 130100,
                'level' => 3,
            ),
            427 => 
            array (
                'id' => 428,
                'zone_id' => 130104,
                'name' => '桥西区',
                'parent_id' => 130100,
                'level' => 3,
            ),
            428 => 
            array (
                'id' => 429,
                'zone_id' => 130105,
                'name' => '新华区',
                'parent_id' => 130100,
                'level' => 3,
            ),
            429 => 
            array (
                'id' => 430,
                'zone_id' => 130107,
                'name' => '井陉矿区',
                'parent_id' => 130100,
                'level' => 3,
            ),
            430 => 
            array (
                'id' => 431,
                'zone_id' => 130108,
                'name' => '裕华区',
                'parent_id' => 130100,
                'level' => 3,
            ),
            431 => 
            array (
                'id' => 432,
                'zone_id' => 130121,
                'name' => '井陉县',
                'parent_id' => 130100,
                'level' => 3,
            ),
            432 => 
            array (
                'id' => 433,
                'zone_id' => 130123,
                'name' => '正定县',
                'parent_id' => 130100,
                'level' => 3,
            ),
            433 => 
            array (
                'id' => 434,
                'zone_id' => 130124,
                'name' => '栾城县',
                'parent_id' => 130100,
                'level' => 3,
            ),
            434 => 
            array (
                'id' => 435,
                'zone_id' => 130125,
                'name' => '行唐县',
                'parent_id' => 130100,
                'level' => 3,
            ),
            435 => 
            array (
                'id' => 436,
                'zone_id' => 130126,
                'name' => '灵寿县',
                'parent_id' => 130100,
                'level' => 3,
            ),
            436 => 
            array (
                'id' => 437,
                'zone_id' => 130127,
                'name' => '高邑县',
                'parent_id' => 130100,
                'level' => 3,
            ),
            437 => 
            array (
                'id' => 438,
                'zone_id' => 130128,
                'name' => '深泽县',
                'parent_id' => 130100,
                'level' => 3,
            ),
            438 => 
            array (
                'id' => 439,
                'zone_id' => 130129,
                'name' => '赞皇县',
                'parent_id' => 130100,
                'level' => 3,
            ),
            439 => 
            array (
                'id' => 440,
                'zone_id' => 130130,
                'name' => '无极县',
                'parent_id' => 130100,
                'level' => 3,
            ),
            440 => 
            array (
                'id' => 441,
                'zone_id' => 130131,
                'name' => '平山县',
                'parent_id' => 130100,
                'level' => 3,
            ),
            441 => 
            array (
                'id' => 442,
                'zone_id' => 130132,
                'name' => '元氏县',
                'parent_id' => 130100,
                'level' => 3,
            ),
            442 => 
            array (
                'id' => 443,
                'zone_id' => 130133,
                'name' => '赵　县',
                'parent_id' => 130100,
                'level' => 3,
            ),
            443 => 
            array (
                'id' => 444,
                'zone_id' => 130181,
                'name' => '辛集市',
                'parent_id' => 130100,
                'level' => 3,
            ),
            444 => 
            array (
                'id' => 445,
                'zone_id' => 130182,
                'name' => '藁城市',
                'parent_id' => 130100,
                'level' => 3,
            ),
            445 => 
            array (
                'id' => 446,
                'zone_id' => 130183,
                'name' => '晋州市',
                'parent_id' => 130100,
                'level' => 3,
            ),
            446 => 
            array (
                'id' => 447,
                'zone_id' => 130184,
                'name' => '新乐市',
                'parent_id' => 130100,
                'level' => 3,
            ),
            447 => 
            array (
                'id' => 448,
                'zone_id' => 130185,
                'name' => '鹿泉市',
                'parent_id' => 130100,
                'level' => 3,
            ),
            448 => 
            array (
                'id' => 449,
                'zone_id' => 130201,
                'name' => '市辖区',
                'parent_id' => 130200,
                'level' => 3,
            ),
            449 => 
            array (
                'id' => 450,
                'zone_id' => 130202,
                'name' => '路南区',
                'parent_id' => 130200,
                'level' => 3,
            ),
            450 => 
            array (
                'id' => 451,
                'zone_id' => 130203,
                'name' => '路北区',
                'parent_id' => 130200,
                'level' => 3,
            ),
            451 => 
            array (
                'id' => 452,
                'zone_id' => 130204,
                'name' => '古冶区',
                'parent_id' => 130200,
                'level' => 3,
            ),
            452 => 
            array (
                'id' => 453,
                'zone_id' => 130205,
                'name' => '开平区',
                'parent_id' => 130200,
                'level' => 3,
            ),
            453 => 
            array (
                'id' => 454,
                'zone_id' => 130207,
                'name' => '丰南区',
                'parent_id' => 130200,
                'level' => 3,
            ),
            454 => 
            array (
                'id' => 455,
                'zone_id' => 130208,
                'name' => '丰润区',
                'parent_id' => 130200,
                'level' => 3,
            ),
            455 => 
            array (
                'id' => 456,
                'zone_id' => 130223,
                'name' => '滦　县',
                'parent_id' => 130200,
                'level' => 3,
            ),
            456 => 
            array (
                'id' => 457,
                'zone_id' => 130224,
                'name' => '滦南县',
                'parent_id' => 130200,
                'level' => 3,
            ),
            457 => 
            array (
                'id' => 458,
                'zone_id' => 130225,
                'name' => '乐亭县',
                'parent_id' => 130200,
                'level' => 3,
            ),
            458 => 
            array (
                'id' => 459,
                'zone_id' => 130227,
                'name' => '迁西县',
                'parent_id' => 130200,
                'level' => 3,
            ),
            459 => 
            array (
                'id' => 460,
                'zone_id' => 130229,
                'name' => '玉田县',
                'parent_id' => 130200,
                'level' => 3,
            ),
            460 => 
            array (
                'id' => 461,
                'zone_id' => 130230,
                'name' => '唐海县',
                'parent_id' => 130200,
                'level' => 3,
            ),
            461 => 
            array (
                'id' => 462,
                'zone_id' => 130281,
                'name' => '遵化市',
                'parent_id' => 130200,
                'level' => 3,
            ),
            462 => 
            array (
                'id' => 463,
                'zone_id' => 130283,
                'name' => '迁安市',
                'parent_id' => 130200,
                'level' => 3,
            ),
            463 => 
            array (
                'id' => 464,
                'zone_id' => 130301,
                'name' => '市辖区',
                'parent_id' => 130300,
                'level' => 3,
            ),
            464 => 
            array (
                'id' => 465,
                'zone_id' => 130302,
                'name' => '海港区',
                'parent_id' => 130300,
                'level' => 3,
            ),
            465 => 
            array (
                'id' => 466,
                'zone_id' => 130303,
                'name' => '山海关区',
                'parent_id' => 130300,
                'level' => 3,
            ),
            466 => 
            array (
                'id' => 467,
                'zone_id' => 130304,
                'name' => '北戴河区',
                'parent_id' => 130300,
                'level' => 3,
            ),
            467 => 
            array (
                'id' => 468,
                'zone_id' => 130321,
                'name' => '青龙满族自治县',
                'parent_id' => 130300,
                'level' => 3,
            ),
            468 => 
            array (
                'id' => 469,
                'zone_id' => 130322,
                'name' => '昌黎县',
                'parent_id' => 130300,
                'level' => 3,
            ),
            469 => 
            array (
                'id' => 470,
                'zone_id' => 130323,
                'name' => '抚宁县',
                'parent_id' => 130300,
                'level' => 3,
            ),
            470 => 
            array (
                'id' => 471,
                'zone_id' => 130324,
                'name' => '卢龙县',
                'parent_id' => 130300,
                'level' => 3,
            ),
            471 => 
            array (
                'id' => 472,
                'zone_id' => 130401,
                'name' => '市辖区',
                'parent_id' => 130400,
                'level' => 3,
            ),
            472 => 
            array (
                'id' => 473,
                'zone_id' => 130402,
                'name' => '邯山区',
                'parent_id' => 130400,
                'level' => 3,
            ),
            473 => 
            array (
                'id' => 474,
                'zone_id' => 130403,
                'name' => '丛台区',
                'parent_id' => 130400,
                'level' => 3,
            ),
            474 => 
            array (
                'id' => 475,
                'zone_id' => 130404,
                'name' => '复兴区',
                'parent_id' => 130400,
                'level' => 3,
            ),
            475 => 
            array (
                'id' => 476,
                'zone_id' => 130406,
                'name' => '峰峰矿区',
                'parent_id' => 130400,
                'level' => 3,
            ),
            476 => 
            array (
                'id' => 477,
                'zone_id' => 130421,
                'name' => '邯郸县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            477 => 
            array (
                'id' => 478,
                'zone_id' => 130423,
                'name' => '临漳县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            478 => 
            array (
                'id' => 479,
                'zone_id' => 130424,
                'name' => '成安县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            479 => 
            array (
                'id' => 480,
                'zone_id' => 130425,
                'name' => '大名县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            480 => 
            array (
                'id' => 481,
                'zone_id' => 130426,
                'name' => '涉　县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            481 => 
            array (
                'id' => 482,
                'zone_id' => 130427,
                'name' => '磁　县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            482 => 
            array (
                'id' => 483,
                'zone_id' => 130428,
                'name' => '肥乡县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            483 => 
            array (
                'id' => 484,
                'zone_id' => 130429,
                'name' => '永年县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            484 => 
            array (
                'id' => 485,
                'zone_id' => 130430,
                'name' => '邱　县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            485 => 
            array (
                'id' => 486,
                'zone_id' => 130431,
                'name' => '鸡泽县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            486 => 
            array (
                'id' => 487,
                'zone_id' => 130432,
                'name' => '广平县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            487 => 
            array (
                'id' => 488,
                'zone_id' => 130433,
                'name' => '馆陶县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            488 => 
            array (
                'id' => 489,
                'zone_id' => 130434,
                'name' => '魏　县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            489 => 
            array (
                'id' => 490,
                'zone_id' => 130435,
                'name' => '曲周县',
                'parent_id' => 130400,
                'level' => 3,
            ),
            490 => 
            array (
                'id' => 491,
                'zone_id' => 130481,
                'name' => '武安市',
                'parent_id' => 130400,
                'level' => 3,
            ),
            491 => 
            array (
                'id' => 492,
                'zone_id' => 130501,
                'name' => '市辖区',
                'parent_id' => 130500,
                'level' => 3,
            ),
            492 => 
            array (
                'id' => 493,
                'zone_id' => 130502,
                'name' => '桥东区',
                'parent_id' => 130500,
                'level' => 3,
            ),
            493 => 
            array (
                'id' => 494,
                'zone_id' => 130503,
                'name' => '桥西区',
                'parent_id' => 130500,
                'level' => 3,
            ),
            494 => 
            array (
                'id' => 495,
                'zone_id' => 130521,
                'name' => '邢台县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            495 => 
            array (
                'id' => 496,
                'zone_id' => 130522,
                'name' => '临城县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            496 => 
            array (
                'id' => 497,
                'zone_id' => 130523,
                'name' => '内丘县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            497 => 
            array (
                'id' => 498,
                'zone_id' => 130524,
                'name' => '柏乡县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            498 => 
            array (
                'id' => 499,
                'zone_id' => 130525,
                'name' => '隆尧县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            499 => 
            array (
                'id' => 500,
                'zone_id' => 130526,
                'name' => '任　县',
                'parent_id' => 130500,
                'level' => 3,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 501,
                'zone_id' => 130527,
                'name' => '南和县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            1 => 
            array (
                'id' => 502,
                'zone_id' => 130528,
                'name' => '宁晋县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            2 => 
            array (
                'id' => 503,
                'zone_id' => 130529,
                'name' => '巨鹿县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            3 => 
            array (
                'id' => 504,
                'zone_id' => 130530,
                'name' => '新河县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            4 => 
            array (
                'id' => 505,
                'zone_id' => 130531,
                'name' => '广宗县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            5 => 
            array (
                'id' => 506,
                'zone_id' => 130532,
                'name' => '平乡县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            6 => 
            array (
                'id' => 507,
                'zone_id' => 130533,
                'name' => '威　县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            7 => 
            array (
                'id' => 508,
                'zone_id' => 130534,
                'name' => '清河县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            8 => 
            array (
                'id' => 509,
                'zone_id' => 130535,
                'name' => '临西县',
                'parent_id' => 130500,
                'level' => 3,
            ),
            9 => 
            array (
                'id' => 510,
                'zone_id' => 130581,
                'name' => '南宫市',
                'parent_id' => 130500,
                'level' => 3,
            ),
            10 => 
            array (
                'id' => 511,
                'zone_id' => 130582,
                'name' => '沙河市',
                'parent_id' => 130500,
                'level' => 3,
            ),
            11 => 
            array (
                'id' => 512,
                'zone_id' => 130601,
                'name' => '市辖区',
                'parent_id' => 130600,
                'level' => 3,
            ),
            12 => 
            array (
                'id' => 513,
                'zone_id' => 130602,
                'name' => '新市区',
                'parent_id' => 130600,
                'level' => 3,
            ),
            13 => 
            array (
                'id' => 514,
                'zone_id' => 130603,
                'name' => '北市区',
                'parent_id' => 130600,
                'level' => 3,
            ),
            14 => 
            array (
                'id' => 515,
                'zone_id' => 130604,
                'name' => '南市区',
                'parent_id' => 130600,
                'level' => 3,
            ),
            15 => 
            array (
                'id' => 516,
                'zone_id' => 130621,
                'name' => '满城县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            16 => 
            array (
                'id' => 517,
                'zone_id' => 130622,
                'name' => '清苑县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            17 => 
            array (
                'id' => 518,
                'zone_id' => 130623,
                'name' => '涞水县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            18 => 
            array (
                'id' => 519,
                'zone_id' => 130624,
                'name' => '阜平县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            19 => 
            array (
                'id' => 520,
                'zone_id' => 130625,
                'name' => '徐水县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            20 => 
            array (
                'id' => 521,
                'zone_id' => 130626,
                'name' => '定兴县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            21 => 
            array (
                'id' => 522,
                'zone_id' => 130627,
                'name' => '唐　县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            22 => 
            array (
                'id' => 523,
                'zone_id' => 130628,
                'name' => '高阳县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            23 => 
            array (
                'id' => 524,
                'zone_id' => 130629,
                'name' => '容城县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            24 => 
            array (
                'id' => 525,
                'zone_id' => 130630,
                'name' => '涞源县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            25 => 
            array (
                'id' => 526,
                'zone_id' => 130631,
                'name' => '望都县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            26 => 
            array (
                'id' => 527,
                'zone_id' => 130632,
                'name' => '安新县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            27 => 
            array (
                'id' => 528,
                'zone_id' => 130633,
                'name' => '易　县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            28 => 
            array (
                'id' => 529,
                'zone_id' => 130634,
                'name' => '曲阳县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            29 => 
            array (
                'id' => 530,
                'zone_id' => 130635,
                'name' => '蠡　县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            30 => 
            array (
                'id' => 531,
                'zone_id' => 130636,
                'name' => '顺平县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            31 => 
            array (
                'id' => 532,
                'zone_id' => 130637,
                'name' => '博野县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            32 => 
            array (
                'id' => 533,
                'zone_id' => 130638,
                'name' => '雄　县',
                'parent_id' => 130600,
                'level' => 3,
            ),
            33 => 
            array (
                'id' => 534,
                'zone_id' => 130681,
                'name' => '涿州市',
                'parent_id' => 130600,
                'level' => 3,
            ),
            34 => 
            array (
                'id' => 535,
                'zone_id' => 130682,
                'name' => '定州市',
                'parent_id' => 130600,
                'level' => 3,
            ),
            35 => 
            array (
                'id' => 536,
                'zone_id' => 130683,
                'name' => '安国市',
                'parent_id' => 130600,
                'level' => 3,
            ),
            36 => 
            array (
                'id' => 537,
                'zone_id' => 130684,
                'name' => '高碑店市',
                'parent_id' => 130600,
                'level' => 3,
            ),
            37 => 
            array (
                'id' => 538,
                'zone_id' => 130701,
                'name' => '市辖区',
                'parent_id' => 130700,
                'level' => 3,
            ),
            38 => 
            array (
                'id' => 539,
                'zone_id' => 130702,
                'name' => '桥东区',
                'parent_id' => 130700,
                'level' => 3,
            ),
            39 => 
            array (
                'id' => 540,
                'zone_id' => 130703,
                'name' => '桥西区',
                'parent_id' => 130700,
                'level' => 3,
            ),
            40 => 
            array (
                'id' => 541,
                'zone_id' => 130705,
                'name' => '宣化区',
                'parent_id' => 130700,
                'level' => 3,
            ),
            41 => 
            array (
                'id' => 542,
                'zone_id' => 130706,
                'name' => '下花园区',
                'parent_id' => 130700,
                'level' => 3,
            ),
            42 => 
            array (
                'id' => 543,
                'zone_id' => 130721,
                'name' => '宣化县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            43 => 
            array (
                'id' => 544,
                'zone_id' => 130722,
                'name' => '张北县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            44 => 
            array (
                'id' => 545,
                'zone_id' => 130723,
                'name' => '康保县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            45 => 
            array (
                'id' => 546,
                'zone_id' => 130724,
                'name' => '沽源县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            46 => 
            array (
                'id' => 547,
                'zone_id' => 130725,
                'name' => '尚义县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            47 => 
            array (
                'id' => 548,
                'zone_id' => 130726,
                'name' => '蔚　县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            48 => 
            array (
                'id' => 549,
                'zone_id' => 130727,
                'name' => '阳原县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            49 => 
            array (
                'id' => 550,
                'zone_id' => 130728,
                'name' => '怀安县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            50 => 
            array (
                'id' => 551,
                'zone_id' => 130729,
                'name' => '万全县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            51 => 
            array (
                'id' => 552,
                'zone_id' => 130730,
                'name' => '怀来县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            52 => 
            array (
                'id' => 553,
                'zone_id' => 130731,
                'name' => '涿鹿县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            53 => 
            array (
                'id' => 554,
                'zone_id' => 130732,
                'name' => '赤城县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            54 => 
            array (
                'id' => 555,
                'zone_id' => 130733,
                'name' => '崇礼县',
                'parent_id' => 130700,
                'level' => 3,
            ),
            55 => 
            array (
                'id' => 556,
                'zone_id' => 130801,
                'name' => '市辖区',
                'parent_id' => 130800,
                'level' => 3,
            ),
            56 => 
            array (
                'id' => 557,
                'zone_id' => 130802,
                'name' => '双桥区',
                'parent_id' => 130800,
                'level' => 3,
            ),
            57 => 
            array (
                'id' => 558,
                'zone_id' => 130803,
                'name' => '双滦区',
                'parent_id' => 130800,
                'level' => 3,
            ),
            58 => 
            array (
                'id' => 559,
                'zone_id' => 130804,
                'name' => '鹰手营子矿区',
                'parent_id' => 130800,
                'level' => 3,
            ),
            59 => 
            array (
                'id' => 560,
                'zone_id' => 130821,
                'name' => '承德县',
                'parent_id' => 130800,
                'level' => 3,
            ),
            60 => 
            array (
                'id' => 561,
                'zone_id' => 130822,
                'name' => '兴隆县',
                'parent_id' => 130800,
                'level' => 3,
            ),
            61 => 
            array (
                'id' => 562,
                'zone_id' => 130823,
                'name' => '平泉县',
                'parent_id' => 130800,
                'level' => 3,
            ),
            62 => 
            array (
                'id' => 563,
                'zone_id' => 130824,
                'name' => '滦平县',
                'parent_id' => 130800,
                'level' => 3,
            ),
            63 => 
            array (
                'id' => 564,
                'zone_id' => 130825,
                'name' => '隆化县',
                'parent_id' => 130800,
                'level' => 3,
            ),
            64 => 
            array (
                'id' => 565,
                'zone_id' => 130826,
                'name' => '丰宁满族自治县',
                'parent_id' => 130800,
                'level' => 3,
            ),
            65 => 
            array (
                'id' => 566,
                'zone_id' => 130827,
                'name' => '宽城满族自治县',
                'parent_id' => 130800,
                'level' => 3,
            ),
            66 => 
            array (
                'id' => 567,
                'zone_id' => 130828,
                'name' => '围场满族蒙古族自治县',
                'parent_id' => 130800,
                'level' => 3,
            ),
            67 => 
            array (
                'id' => 568,
                'zone_id' => 130901,
                'name' => '市辖区',
                'parent_id' => 130900,
                'level' => 3,
            ),
            68 => 
            array (
                'id' => 569,
                'zone_id' => 130902,
                'name' => '新华区',
                'parent_id' => 130900,
                'level' => 3,
            ),
            69 => 
            array (
                'id' => 570,
                'zone_id' => 130903,
                'name' => '运河区',
                'parent_id' => 130900,
                'level' => 3,
            ),
            70 => 
            array (
                'id' => 571,
                'zone_id' => 130921,
                'name' => '沧　县',
                'parent_id' => 130900,
                'level' => 3,
            ),
            71 => 
            array (
                'id' => 572,
                'zone_id' => 130922,
                'name' => '青　县',
                'parent_id' => 130900,
                'level' => 3,
            ),
            72 => 
            array (
                'id' => 573,
                'zone_id' => 130923,
                'name' => '东光县',
                'parent_id' => 130900,
                'level' => 3,
            ),
            73 => 
            array (
                'id' => 574,
                'zone_id' => 130924,
                'name' => '海兴县',
                'parent_id' => 130900,
                'level' => 3,
            ),
            74 => 
            array (
                'id' => 575,
                'zone_id' => 130925,
                'name' => '盐山县',
                'parent_id' => 130900,
                'level' => 3,
            ),
            75 => 
            array (
                'id' => 576,
                'zone_id' => 130926,
                'name' => '肃宁县',
                'parent_id' => 130900,
                'level' => 3,
            ),
            76 => 
            array (
                'id' => 577,
                'zone_id' => 130927,
                'name' => '南皮县',
                'parent_id' => 130900,
                'level' => 3,
            ),
            77 => 
            array (
                'id' => 578,
                'zone_id' => 130928,
                'name' => '吴桥县',
                'parent_id' => 130900,
                'level' => 3,
            ),
            78 => 
            array (
                'id' => 579,
                'zone_id' => 130929,
                'name' => '献　县',
                'parent_id' => 130900,
                'level' => 3,
            ),
            79 => 
            array (
                'id' => 580,
                'zone_id' => 130930,
                'name' => '孟村回族自治县',
                'parent_id' => 130900,
                'level' => 3,
            ),
            80 => 
            array (
                'id' => 581,
                'zone_id' => 130981,
                'name' => '泊头市',
                'parent_id' => 130900,
                'level' => 3,
            ),
            81 => 
            array (
                'id' => 582,
                'zone_id' => 130982,
                'name' => '任丘市',
                'parent_id' => 130900,
                'level' => 3,
            ),
            82 => 
            array (
                'id' => 583,
                'zone_id' => 130983,
                'name' => '黄骅市',
                'parent_id' => 130900,
                'level' => 3,
            ),
            83 => 
            array (
                'id' => 584,
                'zone_id' => 130984,
                'name' => '河间市',
                'parent_id' => 130900,
                'level' => 3,
            ),
            84 => 
            array (
                'id' => 585,
                'zone_id' => 131001,
                'name' => '市辖区',
                'parent_id' => 131000,
                'level' => 3,
            ),
            85 => 
            array (
                'id' => 586,
                'zone_id' => 131002,
                'name' => '安次区',
                'parent_id' => 131000,
                'level' => 3,
            ),
            86 => 
            array (
                'id' => 587,
                'zone_id' => 131003,
                'name' => '广阳区',
                'parent_id' => 131000,
                'level' => 3,
            ),
            87 => 
            array (
                'id' => 588,
                'zone_id' => 131022,
                'name' => '固安县',
                'parent_id' => 131000,
                'level' => 3,
            ),
            88 => 
            array (
                'id' => 589,
                'zone_id' => 131023,
                'name' => '永清县',
                'parent_id' => 131000,
                'level' => 3,
            ),
            89 => 
            array (
                'id' => 590,
                'zone_id' => 131024,
                'name' => '香河县',
                'parent_id' => 131000,
                'level' => 3,
            ),
            90 => 
            array (
                'id' => 591,
                'zone_id' => 131025,
                'name' => '大城县',
                'parent_id' => 131000,
                'level' => 3,
            ),
            91 => 
            array (
                'id' => 592,
                'zone_id' => 131026,
                'name' => '文安县',
                'parent_id' => 131000,
                'level' => 3,
            ),
            92 => 
            array (
                'id' => 593,
                'zone_id' => 131028,
                'name' => '大厂回族自治县',
                'parent_id' => 131000,
                'level' => 3,
            ),
            93 => 
            array (
                'id' => 594,
                'zone_id' => 131081,
                'name' => '霸州市',
                'parent_id' => 131000,
                'level' => 3,
            ),
            94 => 
            array (
                'id' => 595,
                'zone_id' => 131082,
                'name' => '三河市',
                'parent_id' => 131000,
                'level' => 3,
            ),
            95 => 
            array (
                'id' => 596,
                'zone_id' => 131101,
                'name' => '市辖区',
                'parent_id' => 131100,
                'level' => 3,
            ),
            96 => 
            array (
                'id' => 597,
                'zone_id' => 131102,
                'name' => '桃城区',
                'parent_id' => 131100,
                'level' => 3,
            ),
            97 => 
            array (
                'id' => 598,
                'zone_id' => 131121,
                'name' => '枣强县',
                'parent_id' => 131100,
                'level' => 3,
            ),
            98 => 
            array (
                'id' => 599,
                'zone_id' => 131122,
                'name' => '武邑县',
                'parent_id' => 131100,
                'level' => 3,
            ),
            99 => 
            array (
                'id' => 600,
                'zone_id' => 131123,
                'name' => '武强县',
                'parent_id' => 131100,
                'level' => 3,
            ),
            100 => 
            array (
                'id' => 601,
                'zone_id' => 131124,
                'name' => '饶阳县',
                'parent_id' => 131100,
                'level' => 3,
            ),
            101 => 
            array (
                'id' => 602,
                'zone_id' => 131125,
                'name' => '安平县',
                'parent_id' => 131100,
                'level' => 3,
            ),
            102 => 
            array (
                'id' => 603,
                'zone_id' => 131126,
                'name' => '故城县',
                'parent_id' => 131100,
                'level' => 3,
            ),
            103 => 
            array (
                'id' => 604,
                'zone_id' => 131127,
                'name' => '景　县',
                'parent_id' => 131100,
                'level' => 3,
            ),
            104 => 
            array (
                'id' => 605,
                'zone_id' => 131128,
                'name' => '阜城县',
                'parent_id' => 131100,
                'level' => 3,
            ),
            105 => 
            array (
                'id' => 606,
                'zone_id' => 131181,
                'name' => '冀州市',
                'parent_id' => 131100,
                'level' => 3,
            ),
            106 => 
            array (
                'id' => 607,
                'zone_id' => 131182,
                'name' => '深州市',
                'parent_id' => 131100,
                'level' => 3,
            ),
            107 => 
            array (
                'id' => 608,
                'zone_id' => 140101,
                'name' => '市辖区',
                'parent_id' => 140100,
                'level' => 3,
            ),
            108 => 
            array (
                'id' => 609,
                'zone_id' => 140105,
                'name' => '小店区',
                'parent_id' => 140100,
                'level' => 3,
            ),
            109 => 
            array (
                'id' => 610,
                'zone_id' => 140106,
                'name' => '迎泽区',
                'parent_id' => 140100,
                'level' => 3,
            ),
            110 => 
            array (
                'id' => 611,
                'zone_id' => 140107,
                'name' => '杏花岭区',
                'parent_id' => 140100,
                'level' => 3,
            ),
            111 => 
            array (
                'id' => 612,
                'zone_id' => 140108,
                'name' => '尖草坪区',
                'parent_id' => 140100,
                'level' => 3,
            ),
            112 => 
            array (
                'id' => 613,
                'zone_id' => 140109,
                'name' => '万柏林区',
                'parent_id' => 140100,
                'level' => 3,
            ),
            113 => 
            array (
                'id' => 614,
                'zone_id' => 140110,
                'name' => '晋源区',
                'parent_id' => 140100,
                'level' => 3,
            ),
            114 => 
            array (
                'id' => 615,
                'zone_id' => 140121,
                'name' => '清徐县',
                'parent_id' => 140100,
                'level' => 3,
            ),
            115 => 
            array (
                'id' => 616,
                'zone_id' => 140122,
                'name' => '阳曲县',
                'parent_id' => 140100,
                'level' => 3,
            ),
            116 => 
            array (
                'id' => 617,
                'zone_id' => 140123,
                'name' => '娄烦县',
                'parent_id' => 140100,
                'level' => 3,
            ),
            117 => 
            array (
                'id' => 618,
                'zone_id' => 140181,
                'name' => '古交市',
                'parent_id' => 140100,
                'level' => 3,
            ),
            118 => 
            array (
                'id' => 619,
                'zone_id' => 140201,
                'name' => '市辖区',
                'parent_id' => 140200,
                'level' => 3,
            ),
            119 => 
            array (
                'id' => 620,
                'zone_id' => 140202,
                'name' => '城　区',
                'parent_id' => 140200,
                'level' => 3,
            ),
            120 => 
            array (
                'id' => 621,
                'zone_id' => 140203,
                'name' => '矿　区',
                'parent_id' => 140200,
                'level' => 3,
            ),
            121 => 
            array (
                'id' => 622,
                'zone_id' => 140211,
                'name' => '南郊区',
                'parent_id' => 140200,
                'level' => 3,
            ),
            122 => 
            array (
                'id' => 623,
                'zone_id' => 140212,
                'name' => '新荣区',
                'parent_id' => 140200,
                'level' => 3,
            ),
            123 => 
            array (
                'id' => 624,
                'zone_id' => 140221,
                'name' => '阳高县',
                'parent_id' => 140200,
                'level' => 3,
            ),
            124 => 
            array (
                'id' => 625,
                'zone_id' => 140222,
                'name' => '天镇县',
                'parent_id' => 140200,
                'level' => 3,
            ),
            125 => 
            array (
                'id' => 626,
                'zone_id' => 140223,
                'name' => '广灵县',
                'parent_id' => 140200,
                'level' => 3,
            ),
            126 => 
            array (
                'id' => 627,
                'zone_id' => 140224,
                'name' => '灵丘县',
                'parent_id' => 140200,
                'level' => 3,
            ),
            127 => 
            array (
                'id' => 628,
                'zone_id' => 140225,
                'name' => '浑源县',
                'parent_id' => 140200,
                'level' => 3,
            ),
            128 => 
            array (
                'id' => 629,
                'zone_id' => 140226,
                'name' => '左云县',
                'parent_id' => 140200,
                'level' => 3,
            ),
            129 => 
            array (
                'id' => 630,
                'zone_id' => 140227,
                'name' => '大同县',
                'parent_id' => 140200,
                'level' => 3,
            ),
            130 => 
            array (
                'id' => 631,
                'zone_id' => 140301,
                'name' => '市辖区',
                'parent_id' => 140300,
                'level' => 3,
            ),
            131 => 
            array (
                'id' => 632,
                'zone_id' => 140302,
                'name' => '城　区',
                'parent_id' => 140300,
                'level' => 3,
            ),
            132 => 
            array (
                'id' => 633,
                'zone_id' => 140303,
                'name' => '矿　区',
                'parent_id' => 140300,
                'level' => 3,
            ),
            133 => 
            array (
                'id' => 634,
                'zone_id' => 140311,
                'name' => '郊　区',
                'parent_id' => 140300,
                'level' => 3,
            ),
            134 => 
            array (
                'id' => 635,
                'zone_id' => 140321,
                'name' => '平定县',
                'parent_id' => 140300,
                'level' => 3,
            ),
            135 => 
            array (
                'id' => 636,
                'zone_id' => 140322,
                'name' => '盂　县',
                'parent_id' => 140300,
                'level' => 3,
            ),
            136 => 
            array (
                'id' => 637,
                'zone_id' => 140401,
                'name' => '市辖区',
                'parent_id' => 140400,
                'level' => 3,
            ),
            137 => 
            array (
                'id' => 638,
                'zone_id' => 140402,
                'name' => '城　区',
                'parent_id' => 140400,
                'level' => 3,
            ),
            138 => 
            array (
                'id' => 639,
                'zone_id' => 140411,
                'name' => '郊　区',
                'parent_id' => 140400,
                'level' => 3,
            ),
            139 => 
            array (
                'id' => 640,
                'zone_id' => 140421,
                'name' => '长治县',
                'parent_id' => 140400,
                'level' => 3,
            ),
            140 => 
            array (
                'id' => 641,
                'zone_id' => 140423,
                'name' => '襄垣县',
                'parent_id' => 140400,
                'level' => 3,
            ),
            141 => 
            array (
                'id' => 642,
                'zone_id' => 140424,
                'name' => '屯留县',
                'parent_id' => 140400,
                'level' => 3,
            ),
            142 => 
            array (
                'id' => 643,
                'zone_id' => 140425,
                'name' => '平顺县',
                'parent_id' => 140400,
                'level' => 3,
            ),
            143 => 
            array (
                'id' => 644,
                'zone_id' => 140426,
                'name' => '黎城县',
                'parent_id' => 140400,
                'level' => 3,
            ),
            144 => 
            array (
                'id' => 645,
                'zone_id' => 140427,
                'name' => '壶关县',
                'parent_id' => 140400,
                'level' => 3,
            ),
            145 => 
            array (
                'id' => 646,
                'zone_id' => 140428,
                'name' => '长子县',
                'parent_id' => 140400,
                'level' => 3,
            ),
            146 => 
            array (
                'id' => 647,
                'zone_id' => 140429,
                'name' => '武乡县',
                'parent_id' => 140400,
                'level' => 3,
            ),
            147 => 
            array (
                'id' => 648,
                'zone_id' => 140430,
                'name' => '沁　县',
                'parent_id' => 140400,
                'level' => 3,
            ),
            148 => 
            array (
                'id' => 649,
                'zone_id' => 140431,
                'name' => '沁源县',
                'parent_id' => 140400,
                'level' => 3,
            ),
            149 => 
            array (
                'id' => 650,
                'zone_id' => 140481,
                'name' => '潞城市',
                'parent_id' => 140400,
                'level' => 3,
            ),
            150 => 
            array (
                'id' => 651,
                'zone_id' => 140501,
                'name' => '市辖区',
                'parent_id' => 140500,
                'level' => 3,
            ),
            151 => 
            array (
                'id' => 652,
                'zone_id' => 140502,
                'name' => '城　区',
                'parent_id' => 140500,
                'level' => 3,
            ),
            152 => 
            array (
                'id' => 653,
                'zone_id' => 140521,
                'name' => '沁水县',
                'parent_id' => 140500,
                'level' => 3,
            ),
            153 => 
            array (
                'id' => 654,
                'zone_id' => 140522,
                'name' => '阳城县',
                'parent_id' => 140500,
                'level' => 3,
            ),
            154 => 
            array (
                'id' => 655,
                'zone_id' => 140524,
                'name' => '陵川县',
                'parent_id' => 140500,
                'level' => 3,
            ),
            155 => 
            array (
                'id' => 656,
                'zone_id' => 140525,
                'name' => '泽州县',
                'parent_id' => 140500,
                'level' => 3,
            ),
            156 => 
            array (
                'id' => 657,
                'zone_id' => 140581,
                'name' => '高平市',
                'parent_id' => 140500,
                'level' => 3,
            ),
            157 => 
            array (
                'id' => 658,
                'zone_id' => 140601,
                'name' => '市辖区',
                'parent_id' => 140600,
                'level' => 3,
            ),
            158 => 
            array (
                'id' => 659,
                'zone_id' => 140602,
                'name' => '朔城区',
                'parent_id' => 140600,
                'level' => 3,
            ),
            159 => 
            array (
                'id' => 660,
                'zone_id' => 140603,
                'name' => '平鲁区',
                'parent_id' => 140600,
                'level' => 3,
            ),
            160 => 
            array (
                'id' => 661,
                'zone_id' => 140621,
                'name' => '山阴县',
                'parent_id' => 140600,
                'level' => 3,
            ),
            161 => 
            array (
                'id' => 662,
                'zone_id' => 140622,
                'name' => '应　县',
                'parent_id' => 140600,
                'level' => 3,
            ),
            162 => 
            array (
                'id' => 663,
                'zone_id' => 140623,
                'name' => '右玉县',
                'parent_id' => 140600,
                'level' => 3,
            ),
            163 => 
            array (
                'id' => 664,
                'zone_id' => 140624,
                'name' => '怀仁县',
                'parent_id' => 140600,
                'level' => 3,
            ),
            164 => 
            array (
                'id' => 665,
                'zone_id' => 140701,
                'name' => '市辖区',
                'parent_id' => 140700,
                'level' => 3,
            ),
            165 => 
            array (
                'id' => 666,
                'zone_id' => 140702,
                'name' => '榆次区',
                'parent_id' => 140700,
                'level' => 3,
            ),
            166 => 
            array (
                'id' => 667,
                'zone_id' => 140721,
                'name' => '榆社县',
                'parent_id' => 140700,
                'level' => 3,
            ),
            167 => 
            array (
                'id' => 668,
                'zone_id' => 140722,
                'name' => '左权县',
                'parent_id' => 140700,
                'level' => 3,
            ),
            168 => 
            array (
                'id' => 669,
                'zone_id' => 140723,
                'name' => '和顺县',
                'parent_id' => 140700,
                'level' => 3,
            ),
            169 => 
            array (
                'id' => 670,
                'zone_id' => 140724,
                'name' => '昔阳县',
                'parent_id' => 140700,
                'level' => 3,
            ),
            170 => 
            array (
                'id' => 671,
                'zone_id' => 140725,
                'name' => '寿阳县',
                'parent_id' => 140700,
                'level' => 3,
            ),
            171 => 
            array (
                'id' => 672,
                'zone_id' => 140726,
                'name' => '太谷县',
                'parent_id' => 140700,
                'level' => 3,
            ),
            172 => 
            array (
                'id' => 673,
                'zone_id' => 140727,
                'name' => '祁　县',
                'parent_id' => 140700,
                'level' => 3,
            ),
            173 => 
            array (
                'id' => 674,
                'zone_id' => 140728,
                'name' => '平遥县',
                'parent_id' => 140700,
                'level' => 3,
            ),
            174 => 
            array (
                'id' => 675,
                'zone_id' => 140729,
                'name' => '灵石县',
                'parent_id' => 140700,
                'level' => 3,
            ),
            175 => 
            array (
                'id' => 676,
                'zone_id' => 140781,
                'name' => '介休市',
                'parent_id' => 140700,
                'level' => 3,
            ),
            176 => 
            array (
                'id' => 677,
                'zone_id' => 140801,
                'name' => '市辖区',
                'parent_id' => 140800,
                'level' => 3,
            ),
            177 => 
            array (
                'id' => 678,
                'zone_id' => 140802,
                'name' => '盐湖区',
                'parent_id' => 140800,
                'level' => 3,
            ),
            178 => 
            array (
                'id' => 679,
                'zone_id' => 140821,
                'name' => '临猗县',
                'parent_id' => 140800,
                'level' => 3,
            ),
            179 => 
            array (
                'id' => 680,
                'zone_id' => 140822,
                'name' => '万荣县',
                'parent_id' => 140800,
                'level' => 3,
            ),
            180 => 
            array (
                'id' => 681,
                'zone_id' => 140823,
                'name' => '闻喜县',
                'parent_id' => 140800,
                'level' => 3,
            ),
            181 => 
            array (
                'id' => 682,
                'zone_id' => 140824,
                'name' => '稷山县',
                'parent_id' => 140800,
                'level' => 3,
            ),
            182 => 
            array (
                'id' => 683,
                'zone_id' => 140825,
                'name' => '新绛县',
                'parent_id' => 140800,
                'level' => 3,
            ),
            183 => 
            array (
                'id' => 684,
                'zone_id' => 140826,
                'name' => '绛　县',
                'parent_id' => 140800,
                'level' => 3,
            ),
            184 => 
            array (
                'id' => 685,
                'zone_id' => 140827,
                'name' => '垣曲县',
                'parent_id' => 140800,
                'level' => 3,
            ),
            185 => 
            array (
                'id' => 686,
                'zone_id' => 140828,
                'name' => '夏　县',
                'parent_id' => 140800,
                'level' => 3,
            ),
            186 => 
            array (
                'id' => 687,
                'zone_id' => 140829,
                'name' => '平陆县',
                'parent_id' => 140800,
                'level' => 3,
            ),
            187 => 
            array (
                'id' => 688,
                'zone_id' => 140830,
                'name' => '芮城县',
                'parent_id' => 140800,
                'level' => 3,
            ),
            188 => 
            array (
                'id' => 689,
                'zone_id' => 140881,
                'name' => '永济市',
                'parent_id' => 140800,
                'level' => 3,
            ),
            189 => 
            array (
                'id' => 690,
                'zone_id' => 140882,
                'name' => '河津市',
                'parent_id' => 140800,
                'level' => 3,
            ),
            190 => 
            array (
                'id' => 691,
                'zone_id' => 140901,
                'name' => '市辖区',
                'parent_id' => 140900,
                'level' => 3,
            ),
            191 => 
            array (
                'id' => 692,
                'zone_id' => 140902,
                'name' => '忻府区',
                'parent_id' => 140900,
                'level' => 3,
            ),
            192 => 
            array (
                'id' => 693,
                'zone_id' => 140921,
                'name' => '定襄县',
                'parent_id' => 140900,
                'level' => 3,
            ),
            193 => 
            array (
                'id' => 694,
                'zone_id' => 140922,
                'name' => '五台县',
                'parent_id' => 140900,
                'level' => 3,
            ),
            194 => 
            array (
                'id' => 695,
                'zone_id' => 140923,
                'name' => '代　县',
                'parent_id' => 140900,
                'level' => 3,
            ),
            195 => 
            array (
                'id' => 696,
                'zone_id' => 140924,
                'name' => '繁峙县',
                'parent_id' => 140900,
                'level' => 3,
            ),
            196 => 
            array (
                'id' => 697,
                'zone_id' => 140925,
                'name' => '宁武县',
                'parent_id' => 140900,
                'level' => 3,
            ),
            197 => 
            array (
                'id' => 698,
                'zone_id' => 140926,
                'name' => '静乐县',
                'parent_id' => 140900,
                'level' => 3,
            ),
            198 => 
            array (
                'id' => 699,
                'zone_id' => 140927,
                'name' => '神池县',
                'parent_id' => 140900,
                'level' => 3,
            ),
            199 => 
            array (
                'id' => 700,
                'zone_id' => 140928,
                'name' => '五寨县',
                'parent_id' => 140900,
                'level' => 3,
            ),
            200 => 
            array (
                'id' => 701,
                'zone_id' => 140929,
                'name' => '岢岚县',
                'parent_id' => 140900,
                'level' => 3,
            ),
            201 => 
            array (
                'id' => 702,
                'zone_id' => 140930,
                'name' => '河曲县',
                'parent_id' => 140900,
                'level' => 3,
            ),
            202 => 
            array (
                'id' => 703,
                'zone_id' => 140931,
                'name' => '保德县',
                'parent_id' => 140900,
                'level' => 3,
            ),
            203 => 
            array (
                'id' => 704,
                'zone_id' => 140932,
                'name' => '偏关县',
                'parent_id' => 140900,
                'level' => 3,
            ),
            204 => 
            array (
                'id' => 705,
                'zone_id' => 140981,
                'name' => '原平市',
                'parent_id' => 140900,
                'level' => 3,
            ),
            205 => 
            array (
                'id' => 706,
                'zone_id' => 141001,
                'name' => '市辖区',
                'parent_id' => 141000,
                'level' => 3,
            ),
            206 => 
            array (
                'id' => 707,
                'zone_id' => 141002,
                'name' => '尧都区',
                'parent_id' => 141000,
                'level' => 3,
            ),
            207 => 
            array (
                'id' => 708,
                'zone_id' => 141021,
                'name' => '曲沃县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            208 => 
            array (
                'id' => 709,
                'zone_id' => 141022,
                'name' => '翼城县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            209 => 
            array (
                'id' => 710,
                'zone_id' => 141023,
                'name' => '襄汾县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            210 => 
            array (
                'id' => 711,
                'zone_id' => 141024,
                'name' => '洪洞县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            211 => 
            array (
                'id' => 712,
                'zone_id' => 141025,
                'name' => '古　县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            212 => 
            array (
                'id' => 713,
                'zone_id' => 141026,
                'name' => '安泽县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            213 => 
            array (
                'id' => 714,
                'zone_id' => 141027,
                'name' => '浮山县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            214 => 
            array (
                'id' => 715,
                'zone_id' => 141028,
                'name' => '吉　县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            215 => 
            array (
                'id' => 716,
                'zone_id' => 141029,
                'name' => '乡宁县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            216 => 
            array (
                'id' => 717,
                'zone_id' => 141030,
                'name' => '大宁县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            217 => 
            array (
                'id' => 718,
                'zone_id' => 141031,
                'name' => '隰　县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            218 => 
            array (
                'id' => 719,
                'zone_id' => 141032,
                'name' => '永和县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            219 => 
            array (
                'id' => 720,
                'zone_id' => 141033,
                'name' => '蒲　县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            220 => 
            array (
                'id' => 721,
                'zone_id' => 141034,
                'name' => '汾西县',
                'parent_id' => 141000,
                'level' => 3,
            ),
            221 => 
            array (
                'id' => 722,
                'zone_id' => 141081,
                'name' => '侯马市',
                'parent_id' => 141000,
                'level' => 3,
            ),
            222 => 
            array (
                'id' => 723,
                'zone_id' => 141082,
                'name' => '霍州市',
                'parent_id' => 141000,
                'level' => 3,
            ),
            223 => 
            array (
                'id' => 724,
                'zone_id' => 141101,
                'name' => '市辖区',
                'parent_id' => 141100,
                'level' => 3,
            ),
            224 => 
            array (
                'id' => 725,
                'zone_id' => 141102,
                'name' => '离石区',
                'parent_id' => 141100,
                'level' => 3,
            ),
            225 => 
            array (
                'id' => 726,
                'zone_id' => 141121,
                'name' => '文水县',
                'parent_id' => 141100,
                'level' => 3,
            ),
            226 => 
            array (
                'id' => 727,
                'zone_id' => 141122,
                'name' => '交城县',
                'parent_id' => 141100,
                'level' => 3,
            ),
            227 => 
            array (
                'id' => 728,
                'zone_id' => 141123,
                'name' => '兴　县',
                'parent_id' => 141100,
                'level' => 3,
            ),
            228 => 
            array (
                'id' => 729,
                'zone_id' => 141124,
                'name' => '临　县',
                'parent_id' => 141100,
                'level' => 3,
            ),
            229 => 
            array (
                'id' => 730,
                'zone_id' => 141125,
                'name' => '柳林县',
                'parent_id' => 141100,
                'level' => 3,
            ),
            230 => 
            array (
                'id' => 731,
                'zone_id' => 141126,
                'name' => '石楼县',
                'parent_id' => 141100,
                'level' => 3,
            ),
            231 => 
            array (
                'id' => 732,
                'zone_id' => 141127,
                'name' => '岚　县',
                'parent_id' => 141100,
                'level' => 3,
            ),
            232 => 
            array (
                'id' => 733,
                'zone_id' => 141128,
                'name' => '方山县',
                'parent_id' => 141100,
                'level' => 3,
            ),
            233 => 
            array (
                'id' => 734,
                'zone_id' => 141129,
                'name' => '中阳县',
                'parent_id' => 141100,
                'level' => 3,
            ),
            234 => 
            array (
                'id' => 735,
                'zone_id' => 141130,
                'name' => '交口县',
                'parent_id' => 141100,
                'level' => 3,
            ),
            235 => 
            array (
                'id' => 736,
                'zone_id' => 141181,
                'name' => '孝义市',
                'parent_id' => 141100,
                'level' => 3,
            ),
            236 => 
            array (
                'id' => 737,
                'zone_id' => 141182,
                'name' => '汾阳市',
                'parent_id' => 141100,
                'level' => 3,
            ),
            237 => 
            array (
                'id' => 738,
                'zone_id' => 150101,
                'name' => '市辖区',
                'parent_id' => 150100,
                'level' => 3,
            ),
            238 => 
            array (
                'id' => 739,
                'zone_id' => 150102,
                'name' => '新城区',
                'parent_id' => 150100,
                'level' => 3,
            ),
            239 => 
            array (
                'id' => 740,
                'zone_id' => 150103,
                'name' => '回民区',
                'parent_id' => 150100,
                'level' => 3,
            ),
            240 => 
            array (
                'id' => 741,
                'zone_id' => 150104,
                'name' => '玉泉区',
                'parent_id' => 150100,
                'level' => 3,
            ),
            241 => 
            array (
                'id' => 742,
                'zone_id' => 150105,
                'name' => '赛罕区',
                'parent_id' => 150100,
                'level' => 3,
            ),
            242 => 
            array (
                'id' => 743,
                'zone_id' => 150121,
                'name' => '土默特左旗',
                'parent_id' => 150100,
                'level' => 3,
            ),
            243 => 
            array (
                'id' => 744,
                'zone_id' => 150122,
                'name' => '托克托县',
                'parent_id' => 150100,
                'level' => 3,
            ),
            244 => 
            array (
                'id' => 745,
                'zone_id' => 150123,
                'name' => '和林格尔县',
                'parent_id' => 150100,
                'level' => 3,
            ),
            245 => 
            array (
                'id' => 746,
                'zone_id' => 150124,
                'name' => '清水河县',
                'parent_id' => 150100,
                'level' => 3,
            ),
            246 => 
            array (
                'id' => 747,
                'zone_id' => 150125,
                'name' => '武川县',
                'parent_id' => 150100,
                'level' => 3,
            ),
            247 => 
            array (
                'id' => 748,
                'zone_id' => 150201,
                'name' => '市辖区',
                'parent_id' => 150200,
                'level' => 3,
            ),
            248 => 
            array (
                'id' => 749,
                'zone_id' => 150202,
                'name' => '东河区',
                'parent_id' => 150200,
                'level' => 3,
            ),
            249 => 
            array (
                'id' => 750,
                'zone_id' => 150203,
                'name' => '昆都仑区',
                'parent_id' => 150200,
                'level' => 3,
            ),
            250 => 
            array (
                'id' => 751,
                'zone_id' => 150204,
                'name' => '青山区',
                'parent_id' => 150200,
                'level' => 3,
            ),
            251 => 
            array (
                'id' => 752,
                'zone_id' => 150205,
                'name' => '石拐区',
                'parent_id' => 150200,
                'level' => 3,
            ),
            252 => 
            array (
                'id' => 753,
                'zone_id' => 150206,
                'name' => '白云矿区',
                'parent_id' => 150200,
                'level' => 3,
            ),
            253 => 
            array (
                'id' => 754,
                'zone_id' => 150207,
                'name' => '九原区',
                'parent_id' => 150200,
                'level' => 3,
            ),
            254 => 
            array (
                'id' => 755,
                'zone_id' => 150221,
                'name' => '土默特右旗',
                'parent_id' => 150200,
                'level' => 3,
            ),
            255 => 
            array (
                'id' => 756,
                'zone_id' => 150222,
                'name' => '固阳县',
                'parent_id' => 150200,
                'level' => 3,
            ),
            256 => 
            array (
                'id' => 757,
                'zone_id' => 150223,
                'name' => '达尔罕茂明安联合旗',
                'parent_id' => 150200,
                'level' => 3,
            ),
            257 => 
            array (
                'id' => 758,
                'zone_id' => 150301,
                'name' => '市辖区',
                'parent_id' => 150300,
                'level' => 3,
            ),
            258 => 
            array (
                'id' => 759,
                'zone_id' => 150302,
                'name' => '海勃湾区',
                'parent_id' => 150300,
                'level' => 3,
            ),
            259 => 
            array (
                'id' => 760,
                'zone_id' => 150303,
                'name' => '海南区',
                'parent_id' => 150300,
                'level' => 3,
            ),
            260 => 
            array (
                'id' => 761,
                'zone_id' => 150304,
                'name' => '乌达区',
                'parent_id' => 150300,
                'level' => 3,
            ),
            261 => 
            array (
                'id' => 762,
                'zone_id' => 150401,
                'name' => '市辖区',
                'parent_id' => 150400,
                'level' => 3,
            ),
            262 => 
            array (
                'id' => 763,
                'zone_id' => 150402,
                'name' => '红山区',
                'parent_id' => 150400,
                'level' => 3,
            ),
            263 => 
            array (
                'id' => 764,
                'zone_id' => 150403,
                'name' => '元宝山区',
                'parent_id' => 150400,
                'level' => 3,
            ),
            264 => 
            array (
                'id' => 765,
                'zone_id' => 150404,
                'name' => '松山区',
                'parent_id' => 150400,
                'level' => 3,
            ),
            265 => 
            array (
                'id' => 766,
                'zone_id' => 150421,
                'name' => '阿鲁科尔沁旗',
                'parent_id' => 150400,
                'level' => 3,
            ),
            266 => 
            array (
                'id' => 767,
                'zone_id' => 150422,
                'name' => '巴林左旗',
                'parent_id' => 150400,
                'level' => 3,
            ),
            267 => 
            array (
                'id' => 768,
                'zone_id' => 150423,
                'name' => '巴林右旗',
                'parent_id' => 150400,
                'level' => 3,
            ),
            268 => 
            array (
                'id' => 769,
                'zone_id' => 150424,
                'name' => '林西县',
                'parent_id' => 150400,
                'level' => 3,
            ),
            269 => 
            array (
                'id' => 770,
                'zone_id' => 150425,
                'name' => '克什克腾旗',
                'parent_id' => 150400,
                'level' => 3,
            ),
            270 => 
            array (
                'id' => 771,
                'zone_id' => 150426,
                'name' => '翁牛特旗',
                'parent_id' => 150400,
                'level' => 3,
            ),
            271 => 
            array (
                'id' => 772,
                'zone_id' => 150428,
                'name' => '喀喇沁旗',
                'parent_id' => 150400,
                'level' => 3,
            ),
            272 => 
            array (
                'id' => 773,
                'zone_id' => 150429,
                'name' => '宁城县',
                'parent_id' => 150400,
                'level' => 3,
            ),
            273 => 
            array (
                'id' => 774,
                'zone_id' => 150430,
                'name' => '敖汉旗',
                'parent_id' => 150400,
                'level' => 3,
            ),
            274 => 
            array (
                'id' => 775,
                'zone_id' => 150501,
                'name' => '市辖区',
                'parent_id' => 150500,
                'level' => 3,
            ),
            275 => 
            array (
                'id' => 776,
                'zone_id' => 150502,
                'name' => '科尔沁区',
                'parent_id' => 150500,
                'level' => 3,
            ),
            276 => 
            array (
                'id' => 777,
                'zone_id' => 150521,
                'name' => '科尔沁左翼中旗',
                'parent_id' => 150500,
                'level' => 3,
            ),
            277 => 
            array (
                'id' => 778,
                'zone_id' => 150522,
                'name' => '科尔沁左翼后旗',
                'parent_id' => 150500,
                'level' => 3,
            ),
            278 => 
            array (
                'id' => 779,
                'zone_id' => 150523,
                'name' => '开鲁县',
                'parent_id' => 150500,
                'level' => 3,
            ),
            279 => 
            array (
                'id' => 780,
                'zone_id' => 150524,
                'name' => '库伦旗',
                'parent_id' => 150500,
                'level' => 3,
            ),
            280 => 
            array (
                'id' => 781,
                'zone_id' => 150525,
                'name' => '奈曼旗',
                'parent_id' => 150500,
                'level' => 3,
            ),
            281 => 
            array (
                'id' => 782,
                'zone_id' => 150526,
                'name' => '扎鲁特旗',
                'parent_id' => 150500,
                'level' => 3,
            ),
            282 => 
            array (
                'id' => 783,
                'zone_id' => 150581,
                'name' => '霍林郭勒市',
                'parent_id' => 150500,
                'level' => 3,
            ),
            283 => 
            array (
                'id' => 784,
                'zone_id' => 150602,
                'name' => '东胜区',
                'parent_id' => 150600,
                'level' => 3,
            ),
            284 => 
            array (
                'id' => 785,
                'zone_id' => 150621,
                'name' => '达拉特旗',
                'parent_id' => 150600,
                'level' => 3,
            ),
            285 => 
            array (
                'id' => 786,
                'zone_id' => 150622,
                'name' => '准格尔旗',
                'parent_id' => 150600,
                'level' => 3,
            ),
            286 => 
            array (
                'id' => 787,
                'zone_id' => 150623,
                'name' => '鄂托克前旗',
                'parent_id' => 150600,
                'level' => 3,
            ),
            287 => 
            array (
                'id' => 788,
                'zone_id' => 150624,
                'name' => '鄂托克旗',
                'parent_id' => 150600,
                'level' => 3,
            ),
            288 => 
            array (
                'id' => 789,
                'zone_id' => 150625,
                'name' => '杭锦旗',
                'parent_id' => 150600,
                'level' => 3,
            ),
            289 => 
            array (
                'id' => 790,
                'zone_id' => 150626,
                'name' => '乌审旗',
                'parent_id' => 150600,
                'level' => 3,
            ),
            290 => 
            array (
                'id' => 791,
                'zone_id' => 150627,
                'name' => '伊金霍洛旗',
                'parent_id' => 150600,
                'level' => 3,
            ),
            291 => 
            array (
                'id' => 792,
                'zone_id' => 150701,
                'name' => '市辖区',
                'parent_id' => 150700,
                'level' => 3,
            ),
            292 => 
            array (
                'id' => 793,
                'zone_id' => 150702,
                'name' => '海拉尔区',
                'parent_id' => 150700,
                'level' => 3,
            ),
            293 => 
            array (
                'id' => 794,
                'zone_id' => 150721,
                'name' => '阿荣旗',
                'parent_id' => 150700,
                'level' => 3,
            ),
            294 => 
            array (
                'id' => 795,
                'zone_id' => 150722,
                'name' => '莫力达瓦达斡尔族自治旗',
                'parent_id' => 150700,
                'level' => 3,
            ),
            295 => 
            array (
                'id' => 796,
                'zone_id' => 150723,
                'name' => '鄂伦春自治旗',
                'parent_id' => 150700,
                'level' => 3,
            ),
            296 => 
            array (
                'id' => 797,
                'zone_id' => 150724,
                'name' => '鄂温克族自治旗',
                'parent_id' => 150700,
                'level' => 3,
            ),
            297 => 
            array (
                'id' => 798,
                'zone_id' => 150725,
                'name' => '陈巴尔虎旗',
                'parent_id' => 150700,
                'level' => 3,
            ),
            298 => 
            array (
                'id' => 799,
                'zone_id' => 150726,
                'name' => '新巴尔虎左旗',
                'parent_id' => 150700,
                'level' => 3,
            ),
            299 => 
            array (
                'id' => 800,
                'zone_id' => 150727,
                'name' => '新巴尔虎右旗',
                'parent_id' => 150700,
                'level' => 3,
            ),
            300 => 
            array (
                'id' => 801,
                'zone_id' => 150781,
                'name' => '满洲里市',
                'parent_id' => 150700,
                'level' => 3,
            ),
            301 => 
            array (
                'id' => 802,
                'zone_id' => 150782,
                'name' => '牙克石市',
                'parent_id' => 150700,
                'level' => 3,
            ),
            302 => 
            array (
                'id' => 803,
                'zone_id' => 150783,
                'name' => '扎兰屯市',
                'parent_id' => 150700,
                'level' => 3,
            ),
            303 => 
            array (
                'id' => 804,
                'zone_id' => 150784,
                'name' => '额尔古纳市',
                'parent_id' => 150700,
                'level' => 3,
            ),
            304 => 
            array (
                'id' => 805,
                'zone_id' => 150785,
                'name' => '根河市',
                'parent_id' => 150700,
                'level' => 3,
            ),
            305 => 
            array (
                'id' => 806,
                'zone_id' => 150801,
                'name' => '市辖区',
                'parent_id' => 150800,
                'level' => 3,
            ),
            306 => 
            array (
                'id' => 807,
                'zone_id' => 150802,
                'name' => '临河区',
                'parent_id' => 150800,
                'level' => 3,
            ),
            307 => 
            array (
                'id' => 808,
                'zone_id' => 150821,
                'name' => '五原县',
                'parent_id' => 150800,
                'level' => 3,
            ),
            308 => 
            array (
                'id' => 809,
                'zone_id' => 150822,
                'name' => '磴口县',
                'parent_id' => 150800,
                'level' => 3,
            ),
            309 => 
            array (
                'id' => 810,
                'zone_id' => 150823,
                'name' => '乌拉特前旗',
                'parent_id' => 150800,
                'level' => 3,
            ),
            310 => 
            array (
                'id' => 811,
                'zone_id' => 150824,
                'name' => '乌拉特中旗',
                'parent_id' => 150800,
                'level' => 3,
            ),
            311 => 
            array (
                'id' => 812,
                'zone_id' => 150825,
                'name' => '乌拉特后旗',
                'parent_id' => 150800,
                'level' => 3,
            ),
            312 => 
            array (
                'id' => 813,
                'zone_id' => 150826,
                'name' => '杭锦后旗',
                'parent_id' => 150800,
                'level' => 3,
            ),
            313 => 
            array (
                'id' => 814,
                'zone_id' => 150901,
                'name' => '市辖区',
                'parent_id' => 150900,
                'level' => 3,
            ),
            314 => 
            array (
                'id' => 815,
                'zone_id' => 150902,
                'name' => '集宁区',
                'parent_id' => 150900,
                'level' => 3,
            ),
            315 => 
            array (
                'id' => 816,
                'zone_id' => 150921,
                'name' => '卓资县',
                'parent_id' => 150900,
                'level' => 3,
            ),
            316 => 
            array (
                'id' => 817,
                'zone_id' => 150922,
                'name' => '化德县',
                'parent_id' => 150900,
                'level' => 3,
            ),
            317 => 
            array (
                'id' => 818,
                'zone_id' => 150923,
                'name' => '商都县',
                'parent_id' => 150900,
                'level' => 3,
            ),
            318 => 
            array (
                'id' => 819,
                'zone_id' => 150924,
                'name' => '兴和县',
                'parent_id' => 150900,
                'level' => 3,
            ),
            319 => 
            array (
                'id' => 820,
                'zone_id' => 150925,
                'name' => '凉城县',
                'parent_id' => 150900,
                'level' => 3,
            ),
            320 => 
            array (
                'id' => 821,
                'zone_id' => 150926,
                'name' => '察哈尔右翼前旗',
                'parent_id' => 150900,
                'level' => 3,
            ),
            321 => 
            array (
                'id' => 822,
                'zone_id' => 150927,
                'name' => '察哈尔右翼中旗',
                'parent_id' => 150900,
                'level' => 3,
            ),
            322 => 
            array (
                'id' => 823,
                'zone_id' => 150928,
                'name' => '察哈尔右翼后旗',
                'parent_id' => 150900,
                'level' => 3,
            ),
            323 => 
            array (
                'id' => 824,
                'zone_id' => 150929,
                'name' => '四子王旗',
                'parent_id' => 150900,
                'level' => 3,
            ),
            324 => 
            array (
                'id' => 825,
                'zone_id' => 150981,
                'name' => '丰镇市',
                'parent_id' => 150900,
                'level' => 3,
            ),
            325 => 
            array (
                'id' => 826,
                'zone_id' => 152201,
                'name' => '乌兰浩特市',
                'parent_id' => 152200,
                'level' => 3,
            ),
            326 => 
            array (
                'id' => 827,
                'zone_id' => 152202,
                'name' => '阿尔山市',
                'parent_id' => 152200,
                'level' => 3,
            ),
            327 => 
            array (
                'id' => 828,
                'zone_id' => 152221,
                'name' => '科尔沁右翼前旗',
                'parent_id' => 152200,
                'level' => 3,
            ),
            328 => 
            array (
                'id' => 829,
                'zone_id' => 152222,
                'name' => '科尔沁右翼中旗',
                'parent_id' => 152200,
                'level' => 3,
            ),
            329 => 
            array (
                'id' => 830,
                'zone_id' => 152223,
                'name' => '扎赉特旗',
                'parent_id' => 152200,
                'level' => 3,
            ),
            330 => 
            array (
                'id' => 831,
                'zone_id' => 152224,
                'name' => '突泉县',
                'parent_id' => 152200,
                'level' => 3,
            ),
            331 => 
            array (
                'id' => 832,
                'zone_id' => 152501,
                'name' => '二连浩特市',
                'parent_id' => 152500,
                'level' => 3,
            ),
            332 => 
            array (
                'id' => 833,
                'zone_id' => 152502,
                'name' => '锡林浩特市',
                'parent_id' => 152500,
                'level' => 3,
            ),
            333 => 
            array (
                'id' => 834,
                'zone_id' => 152522,
                'name' => '阿巴嘎旗',
                'parent_id' => 152500,
                'level' => 3,
            ),
            334 => 
            array (
                'id' => 835,
                'zone_id' => 152523,
                'name' => '苏尼特左旗',
                'parent_id' => 152500,
                'level' => 3,
            ),
            335 => 
            array (
                'id' => 836,
                'zone_id' => 152524,
                'name' => '苏尼特右旗',
                'parent_id' => 152500,
                'level' => 3,
            ),
            336 => 
            array (
                'id' => 837,
                'zone_id' => 152525,
                'name' => '东乌珠穆沁旗',
                'parent_id' => 152500,
                'level' => 3,
            ),
            337 => 
            array (
                'id' => 838,
                'zone_id' => 152526,
                'name' => '西乌珠穆沁旗',
                'parent_id' => 152500,
                'level' => 3,
            ),
            338 => 
            array (
                'id' => 839,
                'zone_id' => 152527,
                'name' => '太仆寺旗',
                'parent_id' => 152500,
                'level' => 3,
            ),
            339 => 
            array (
                'id' => 840,
                'zone_id' => 152528,
                'name' => '镶黄旗',
                'parent_id' => 152500,
                'level' => 3,
            ),
            340 => 
            array (
                'id' => 841,
                'zone_id' => 152529,
                'name' => '正镶白旗',
                'parent_id' => 152500,
                'level' => 3,
            ),
            341 => 
            array (
                'id' => 842,
                'zone_id' => 152530,
                'name' => '正蓝旗',
                'parent_id' => 152500,
                'level' => 3,
            ),
            342 => 
            array (
                'id' => 843,
                'zone_id' => 152531,
                'name' => '多伦县',
                'parent_id' => 152500,
                'level' => 3,
            ),
            343 => 
            array (
                'id' => 844,
                'zone_id' => 152921,
                'name' => '阿拉善左旗',
                'parent_id' => 152900,
                'level' => 3,
            ),
            344 => 
            array (
                'id' => 845,
                'zone_id' => 152922,
                'name' => '阿拉善右旗',
                'parent_id' => 152900,
                'level' => 3,
            ),
            345 => 
            array (
                'id' => 846,
                'zone_id' => 152923,
                'name' => '额济纳旗',
                'parent_id' => 152900,
                'level' => 3,
            ),
            346 => 
            array (
                'id' => 847,
                'zone_id' => 210101,
                'name' => '市辖区',
                'parent_id' => 210100,
                'level' => 3,
            ),
            347 => 
            array (
                'id' => 848,
                'zone_id' => 210102,
                'name' => '和平区',
                'parent_id' => 210100,
                'level' => 3,
            ),
            348 => 
            array (
                'id' => 849,
                'zone_id' => 210103,
                'name' => '沈河区',
                'parent_id' => 210100,
                'level' => 3,
            ),
            349 => 
            array (
                'id' => 850,
                'zone_id' => 210104,
                'name' => '大东区',
                'parent_id' => 210100,
                'level' => 3,
            ),
            350 => 
            array (
                'id' => 851,
                'zone_id' => 210105,
                'name' => '皇姑区',
                'parent_id' => 210100,
                'level' => 3,
            ),
            351 => 
            array (
                'id' => 852,
                'zone_id' => 210106,
                'name' => '铁西区',
                'parent_id' => 210100,
                'level' => 3,
            ),
            352 => 
            array (
                'id' => 853,
                'zone_id' => 210111,
                'name' => '苏家屯区',
                'parent_id' => 210100,
                'level' => 3,
            ),
            353 => 
            array (
                'id' => 854,
                'zone_id' => 210112,
                'name' => '东陵区',
                'parent_id' => 210100,
                'level' => 3,
            ),
            354 => 
            array (
                'id' => 855,
                'zone_id' => 210113,
                'name' => '新城子区',
                'parent_id' => 210100,
                'level' => 3,
            ),
            355 => 
            array (
                'id' => 856,
                'zone_id' => 210114,
                'name' => '于洪区',
                'parent_id' => 210100,
                'level' => 3,
            ),
            356 => 
            array (
                'id' => 857,
                'zone_id' => 210122,
                'name' => '辽中县',
                'parent_id' => 210100,
                'level' => 3,
            ),
            357 => 
            array (
                'id' => 858,
                'zone_id' => 210123,
                'name' => '康平县',
                'parent_id' => 210100,
                'level' => 3,
            ),
            358 => 
            array (
                'id' => 859,
                'zone_id' => 210124,
                'name' => '法库县',
                'parent_id' => 210100,
                'level' => 3,
            ),
            359 => 
            array (
                'id' => 860,
                'zone_id' => 210181,
                'name' => '新民市',
                'parent_id' => 210100,
                'level' => 3,
            ),
            360 => 
            array (
                'id' => 861,
                'zone_id' => 210201,
                'name' => '市辖区',
                'parent_id' => 210200,
                'level' => 3,
            ),
            361 => 
            array (
                'id' => 862,
                'zone_id' => 210202,
                'name' => '中山区',
                'parent_id' => 210200,
                'level' => 3,
            ),
            362 => 
            array (
                'id' => 863,
                'zone_id' => 210203,
                'name' => '西岗区',
                'parent_id' => 210200,
                'level' => 3,
            ),
            363 => 
            array (
                'id' => 864,
                'zone_id' => 210204,
                'name' => '沙河口区',
                'parent_id' => 210200,
                'level' => 3,
            ),
            364 => 
            array (
                'id' => 865,
                'zone_id' => 210211,
                'name' => '甘井子区',
                'parent_id' => 210200,
                'level' => 3,
            ),
            365 => 
            array (
                'id' => 866,
                'zone_id' => 210212,
                'name' => '旅顺口区',
                'parent_id' => 210200,
                'level' => 3,
            ),
            366 => 
            array (
                'id' => 867,
                'zone_id' => 210213,
                'name' => '金州区',
                'parent_id' => 210200,
                'level' => 3,
            ),
            367 => 
            array (
                'id' => 868,
                'zone_id' => 210224,
                'name' => '长海县',
                'parent_id' => 210200,
                'level' => 3,
            ),
            368 => 
            array (
                'id' => 869,
                'zone_id' => 210281,
                'name' => '瓦房店市',
                'parent_id' => 210200,
                'level' => 3,
            ),
            369 => 
            array (
                'id' => 870,
                'zone_id' => 210282,
                'name' => '普兰店市',
                'parent_id' => 210200,
                'level' => 3,
            ),
            370 => 
            array (
                'id' => 871,
                'zone_id' => 210283,
                'name' => '庄河市',
                'parent_id' => 210200,
                'level' => 3,
            ),
            371 => 
            array (
                'id' => 872,
                'zone_id' => 210301,
                'name' => '市辖区',
                'parent_id' => 210300,
                'level' => 3,
            ),
            372 => 
            array (
                'id' => 873,
                'zone_id' => 210302,
                'name' => '铁东区',
                'parent_id' => 210300,
                'level' => 3,
            ),
            373 => 
            array (
                'id' => 874,
                'zone_id' => 210303,
                'name' => '铁西区',
                'parent_id' => 210300,
                'level' => 3,
            ),
            374 => 
            array (
                'id' => 875,
                'zone_id' => 210304,
                'name' => '立山区',
                'parent_id' => 210300,
                'level' => 3,
            ),
            375 => 
            array (
                'id' => 876,
                'zone_id' => 210311,
                'name' => '千山区',
                'parent_id' => 210300,
                'level' => 3,
            ),
            376 => 
            array (
                'id' => 877,
                'zone_id' => 210321,
                'name' => '台安县',
                'parent_id' => 210300,
                'level' => 3,
            ),
            377 => 
            array (
                'id' => 878,
                'zone_id' => 210323,
                'name' => '岫岩满族自治县',
                'parent_id' => 210300,
                'level' => 3,
            ),
            378 => 
            array (
                'id' => 879,
                'zone_id' => 210381,
                'name' => '海城市',
                'parent_id' => 210300,
                'level' => 3,
            ),
            379 => 
            array (
                'id' => 880,
                'zone_id' => 210401,
                'name' => '市辖区',
                'parent_id' => 210400,
                'level' => 3,
            ),
            380 => 
            array (
                'id' => 881,
                'zone_id' => 210402,
                'name' => '新抚区',
                'parent_id' => 210400,
                'level' => 3,
            ),
            381 => 
            array (
                'id' => 882,
                'zone_id' => 210403,
                'name' => '东洲区',
                'parent_id' => 210400,
                'level' => 3,
            ),
            382 => 
            array (
                'id' => 883,
                'zone_id' => 210404,
                'name' => '望花区',
                'parent_id' => 210400,
                'level' => 3,
            ),
            383 => 
            array (
                'id' => 884,
                'zone_id' => 210411,
                'name' => '顺城区',
                'parent_id' => 210400,
                'level' => 3,
            ),
            384 => 
            array (
                'id' => 885,
                'zone_id' => 210421,
                'name' => '抚顺县',
                'parent_id' => 210400,
                'level' => 3,
            ),
            385 => 
            array (
                'id' => 886,
                'zone_id' => 210422,
                'name' => '新宾满族自治县',
                'parent_id' => 210400,
                'level' => 3,
            ),
            386 => 
            array (
                'id' => 887,
                'zone_id' => 210423,
                'name' => '清原满族自治县',
                'parent_id' => 210400,
                'level' => 3,
            ),
            387 => 
            array (
                'id' => 888,
                'zone_id' => 210501,
                'name' => '市辖区',
                'parent_id' => 210500,
                'level' => 3,
            ),
            388 => 
            array (
                'id' => 889,
                'zone_id' => 210502,
                'name' => '平山区',
                'parent_id' => 210500,
                'level' => 3,
            ),
            389 => 
            array (
                'id' => 890,
                'zone_id' => 210503,
                'name' => '溪湖区',
                'parent_id' => 210500,
                'level' => 3,
            ),
            390 => 
            array (
                'id' => 891,
                'zone_id' => 210504,
                'name' => '明山区',
                'parent_id' => 210500,
                'level' => 3,
            ),
            391 => 
            array (
                'id' => 892,
                'zone_id' => 210505,
                'name' => '南芬区',
                'parent_id' => 210500,
                'level' => 3,
            ),
            392 => 
            array (
                'id' => 893,
                'zone_id' => 210521,
                'name' => '本溪满族自治县',
                'parent_id' => 210500,
                'level' => 3,
            ),
            393 => 
            array (
                'id' => 894,
                'zone_id' => 210522,
                'name' => '桓仁满族自治县',
                'parent_id' => 210500,
                'level' => 3,
            ),
            394 => 
            array (
                'id' => 895,
                'zone_id' => 210601,
                'name' => '市辖区',
                'parent_id' => 210600,
                'level' => 3,
            ),
            395 => 
            array (
                'id' => 896,
                'zone_id' => 210602,
                'name' => '元宝区',
                'parent_id' => 210600,
                'level' => 3,
            ),
            396 => 
            array (
                'id' => 897,
                'zone_id' => 210603,
                'name' => '振兴区',
                'parent_id' => 210600,
                'level' => 3,
            ),
            397 => 
            array (
                'id' => 898,
                'zone_id' => 210604,
                'name' => '振安区',
                'parent_id' => 210600,
                'level' => 3,
            ),
            398 => 
            array (
                'id' => 899,
                'zone_id' => 210624,
                'name' => '宽甸满族自治县',
                'parent_id' => 210600,
                'level' => 3,
            ),
            399 => 
            array (
                'id' => 900,
                'zone_id' => 210681,
                'name' => '东港市',
                'parent_id' => 210600,
                'level' => 3,
            ),
            400 => 
            array (
                'id' => 901,
                'zone_id' => 210682,
                'name' => '凤城市',
                'parent_id' => 210600,
                'level' => 3,
            ),
            401 => 
            array (
                'id' => 902,
                'zone_id' => 210701,
                'name' => '市辖区',
                'parent_id' => 210700,
                'level' => 3,
            ),
            402 => 
            array (
                'id' => 903,
                'zone_id' => 210702,
                'name' => '古塔区',
                'parent_id' => 210700,
                'level' => 3,
            ),
            403 => 
            array (
                'id' => 904,
                'zone_id' => 210703,
                'name' => '凌河区',
                'parent_id' => 210700,
                'level' => 3,
            ),
            404 => 
            array (
                'id' => 905,
                'zone_id' => 210711,
                'name' => '太和区',
                'parent_id' => 210700,
                'level' => 3,
            ),
            405 => 
            array (
                'id' => 906,
                'zone_id' => 210726,
                'name' => '黑山县',
                'parent_id' => 210700,
                'level' => 3,
            ),
            406 => 
            array (
                'id' => 907,
                'zone_id' => 210727,
                'name' => '义　县',
                'parent_id' => 210700,
                'level' => 3,
            ),
            407 => 
            array (
                'id' => 908,
                'zone_id' => 210781,
                'name' => '凌海市',
                'parent_id' => 210700,
                'level' => 3,
            ),
            408 => 
            array (
                'id' => 909,
                'zone_id' => 210782,
                'name' => '北宁市',
                'parent_id' => 210700,
                'level' => 3,
            ),
            409 => 
            array (
                'id' => 910,
                'zone_id' => 210801,
                'name' => '市辖区',
                'parent_id' => 210800,
                'level' => 3,
            ),
            410 => 
            array (
                'id' => 911,
                'zone_id' => 210802,
                'name' => '站前区',
                'parent_id' => 210800,
                'level' => 3,
            ),
            411 => 
            array (
                'id' => 912,
                'zone_id' => 210803,
                'name' => '西市区',
                'parent_id' => 210800,
                'level' => 3,
            ),
            412 => 
            array (
                'id' => 913,
                'zone_id' => 210804,
                'name' => '鲅鱼圈区',
                'parent_id' => 210800,
                'level' => 3,
            ),
            413 => 
            array (
                'id' => 914,
                'zone_id' => 210811,
                'name' => '老边区',
                'parent_id' => 210800,
                'level' => 3,
            ),
            414 => 
            array (
                'id' => 915,
                'zone_id' => 210881,
                'name' => '盖州市',
                'parent_id' => 210800,
                'level' => 3,
            ),
            415 => 
            array (
                'id' => 916,
                'zone_id' => 210882,
                'name' => '大石桥市',
                'parent_id' => 210800,
                'level' => 3,
            ),
            416 => 
            array (
                'id' => 917,
                'zone_id' => 210901,
                'name' => '市辖区',
                'parent_id' => 210900,
                'level' => 3,
            ),
            417 => 
            array (
                'id' => 918,
                'zone_id' => 210902,
                'name' => '海州区',
                'parent_id' => 210900,
                'level' => 3,
            ),
            418 => 
            array (
                'id' => 919,
                'zone_id' => 210903,
                'name' => '新邱区',
                'parent_id' => 210900,
                'level' => 3,
            ),
            419 => 
            array (
                'id' => 920,
                'zone_id' => 210904,
                'name' => '太平区',
                'parent_id' => 210900,
                'level' => 3,
            ),
            420 => 
            array (
                'id' => 921,
                'zone_id' => 210905,
                'name' => '清河门区',
                'parent_id' => 210900,
                'level' => 3,
            ),
            421 => 
            array (
                'id' => 922,
                'zone_id' => 210911,
                'name' => '细河区',
                'parent_id' => 210900,
                'level' => 3,
            ),
            422 => 
            array (
                'id' => 923,
                'zone_id' => 210921,
                'name' => '阜新蒙古族自治县',
                'parent_id' => 210900,
                'level' => 3,
            ),
            423 => 
            array (
                'id' => 924,
                'zone_id' => 210922,
                'name' => '彰武县',
                'parent_id' => 210900,
                'level' => 3,
            ),
            424 => 
            array (
                'id' => 925,
                'zone_id' => 211001,
                'name' => '市辖区',
                'parent_id' => 211000,
                'level' => 3,
            ),
            425 => 
            array (
                'id' => 926,
                'zone_id' => 211002,
                'name' => '白塔区',
                'parent_id' => 211000,
                'level' => 3,
            ),
            426 => 
            array (
                'id' => 927,
                'zone_id' => 211003,
                'name' => '文圣区',
                'parent_id' => 211000,
                'level' => 3,
            ),
            427 => 
            array (
                'id' => 928,
                'zone_id' => 211004,
                'name' => '宏伟区',
                'parent_id' => 211000,
                'level' => 3,
            ),
            428 => 
            array (
                'id' => 929,
                'zone_id' => 211005,
                'name' => '弓长岭区',
                'parent_id' => 211000,
                'level' => 3,
            ),
            429 => 
            array (
                'id' => 930,
                'zone_id' => 211011,
                'name' => '太子河区',
                'parent_id' => 211000,
                'level' => 3,
            ),
            430 => 
            array (
                'id' => 931,
                'zone_id' => 211021,
                'name' => '辽阳县',
                'parent_id' => 211000,
                'level' => 3,
            ),
            431 => 
            array (
                'id' => 932,
                'zone_id' => 211081,
                'name' => '灯塔市',
                'parent_id' => 211000,
                'level' => 3,
            ),
            432 => 
            array (
                'id' => 933,
                'zone_id' => 211101,
                'name' => '市辖区',
                'parent_id' => 211100,
                'level' => 3,
            ),
            433 => 
            array (
                'id' => 934,
                'zone_id' => 211102,
                'name' => '双台子区',
                'parent_id' => 211100,
                'level' => 3,
            ),
            434 => 
            array (
                'id' => 935,
                'zone_id' => 211103,
                'name' => '兴隆台区',
                'parent_id' => 211100,
                'level' => 3,
            ),
            435 => 
            array (
                'id' => 936,
                'zone_id' => 211121,
                'name' => '大洼县',
                'parent_id' => 211100,
                'level' => 3,
            ),
            436 => 
            array (
                'id' => 937,
                'zone_id' => 211122,
                'name' => '盘山县',
                'parent_id' => 211100,
                'level' => 3,
            ),
            437 => 
            array (
                'id' => 938,
                'zone_id' => 211201,
                'name' => '市辖区',
                'parent_id' => 211200,
                'level' => 3,
            ),
            438 => 
            array (
                'id' => 939,
                'zone_id' => 211202,
                'name' => '银州区',
                'parent_id' => 211200,
                'level' => 3,
            ),
            439 => 
            array (
                'id' => 940,
                'zone_id' => 211204,
                'name' => '清河区',
                'parent_id' => 211200,
                'level' => 3,
            ),
            440 => 
            array (
                'id' => 941,
                'zone_id' => 211221,
                'name' => '铁岭县',
                'parent_id' => 211200,
                'level' => 3,
            ),
            441 => 
            array (
                'id' => 942,
                'zone_id' => 211223,
                'name' => '西丰县',
                'parent_id' => 211200,
                'level' => 3,
            ),
            442 => 
            array (
                'id' => 943,
                'zone_id' => 211224,
                'name' => '昌图县',
                'parent_id' => 211200,
                'level' => 3,
            ),
            443 => 
            array (
                'id' => 944,
                'zone_id' => 211281,
                'name' => '调兵山市',
                'parent_id' => 211200,
                'level' => 3,
            ),
            444 => 
            array (
                'id' => 945,
                'zone_id' => 211282,
                'name' => '开原市',
                'parent_id' => 211200,
                'level' => 3,
            ),
            445 => 
            array (
                'id' => 946,
                'zone_id' => 211301,
                'name' => '市辖区',
                'parent_id' => 211300,
                'level' => 3,
            ),
            446 => 
            array (
                'id' => 947,
                'zone_id' => 211302,
                'name' => '双塔区',
                'parent_id' => 211300,
                'level' => 3,
            ),
            447 => 
            array (
                'id' => 948,
                'zone_id' => 211303,
                'name' => '龙城区',
                'parent_id' => 211300,
                'level' => 3,
            ),
            448 => 
            array (
                'id' => 949,
                'zone_id' => 211321,
                'name' => '朝阳县',
                'parent_id' => 211300,
                'level' => 3,
            ),
            449 => 
            array (
                'id' => 950,
                'zone_id' => 211322,
                'name' => '建平县',
                'parent_id' => 211300,
                'level' => 3,
            ),
            450 => 
            array (
                'id' => 951,
                'zone_id' => 211324,
                'name' => '喀喇沁左翼蒙古族自治县',
                'parent_id' => 211300,
                'level' => 3,
            ),
            451 => 
            array (
                'id' => 952,
                'zone_id' => 211381,
                'name' => '北票市',
                'parent_id' => 211300,
                'level' => 3,
            ),
            452 => 
            array (
                'id' => 953,
                'zone_id' => 211382,
                'name' => '凌源市',
                'parent_id' => 211300,
                'level' => 3,
            ),
            453 => 
            array (
                'id' => 954,
                'zone_id' => 211401,
                'name' => '市辖区',
                'parent_id' => 211400,
                'level' => 3,
            ),
            454 => 
            array (
                'id' => 955,
                'zone_id' => 211402,
                'name' => '连山区',
                'parent_id' => 211400,
                'level' => 3,
            ),
            455 => 
            array (
                'id' => 956,
                'zone_id' => 211403,
                'name' => '龙港区',
                'parent_id' => 211400,
                'level' => 3,
            ),
            456 => 
            array (
                'id' => 957,
                'zone_id' => 211404,
                'name' => '南票区',
                'parent_id' => 211400,
                'level' => 3,
            ),
            457 => 
            array (
                'id' => 958,
                'zone_id' => 211421,
                'name' => '绥中县',
                'parent_id' => 211400,
                'level' => 3,
            ),
            458 => 
            array (
                'id' => 959,
                'zone_id' => 211422,
                'name' => '建昌县',
                'parent_id' => 211400,
                'level' => 3,
            ),
            459 => 
            array (
                'id' => 960,
                'zone_id' => 211481,
                'name' => '兴城市',
                'parent_id' => 211400,
                'level' => 3,
            ),
            460 => 
            array (
                'id' => 961,
                'zone_id' => 220101,
                'name' => '市辖区',
                'parent_id' => 220100,
                'level' => 3,
            ),
            461 => 
            array (
                'id' => 962,
                'zone_id' => 220102,
                'name' => '南关区',
                'parent_id' => 220100,
                'level' => 3,
            ),
            462 => 
            array (
                'id' => 963,
                'zone_id' => 220103,
                'name' => '宽城区',
                'parent_id' => 220100,
                'level' => 3,
            ),
            463 => 
            array (
                'id' => 964,
                'zone_id' => 220104,
                'name' => '朝阳区',
                'parent_id' => 220100,
                'level' => 3,
            ),
            464 => 
            array (
                'id' => 965,
                'zone_id' => 220105,
                'name' => '二道区',
                'parent_id' => 220100,
                'level' => 3,
            ),
            465 => 
            array (
                'id' => 966,
                'zone_id' => 220106,
                'name' => '绿园区',
                'parent_id' => 220100,
                'level' => 3,
            ),
            466 => 
            array (
                'id' => 967,
                'zone_id' => 220112,
                'name' => '双阳区',
                'parent_id' => 220100,
                'level' => 3,
            ),
            467 => 
            array (
                'id' => 968,
                'zone_id' => 220122,
                'name' => '农安县',
                'parent_id' => 220100,
                'level' => 3,
            ),
            468 => 
            array (
                'id' => 969,
                'zone_id' => 220181,
                'name' => '九台市',
                'parent_id' => 220100,
                'level' => 3,
            ),
            469 => 
            array (
                'id' => 970,
                'zone_id' => 220182,
                'name' => '榆树市',
                'parent_id' => 220100,
                'level' => 3,
            ),
            470 => 
            array (
                'id' => 971,
                'zone_id' => 220183,
                'name' => '德惠市',
                'parent_id' => 220100,
                'level' => 3,
            ),
            471 => 
            array (
                'id' => 972,
                'zone_id' => 220201,
                'name' => '市辖区',
                'parent_id' => 220200,
                'level' => 3,
            ),
            472 => 
            array (
                'id' => 973,
                'zone_id' => 220202,
                'name' => '昌邑区',
                'parent_id' => 220200,
                'level' => 3,
            ),
            473 => 
            array (
                'id' => 974,
                'zone_id' => 220203,
                'name' => '龙潭区',
                'parent_id' => 220200,
                'level' => 3,
            ),
            474 => 
            array (
                'id' => 975,
                'zone_id' => 220204,
                'name' => '船营区',
                'parent_id' => 220200,
                'level' => 3,
            ),
            475 => 
            array (
                'id' => 976,
                'zone_id' => 220211,
                'name' => '丰满区',
                'parent_id' => 220200,
                'level' => 3,
            ),
            476 => 
            array (
                'id' => 977,
                'zone_id' => 220221,
                'name' => '永吉县',
                'parent_id' => 220200,
                'level' => 3,
            ),
            477 => 
            array (
                'id' => 978,
                'zone_id' => 220281,
                'name' => '蛟河市',
                'parent_id' => 220200,
                'level' => 3,
            ),
            478 => 
            array (
                'id' => 979,
                'zone_id' => 220282,
                'name' => '桦甸市',
                'parent_id' => 220200,
                'level' => 3,
            ),
            479 => 
            array (
                'id' => 980,
                'zone_id' => 220283,
                'name' => '舒兰市',
                'parent_id' => 220200,
                'level' => 3,
            ),
            480 => 
            array (
                'id' => 981,
                'zone_id' => 220284,
                'name' => '磐石市',
                'parent_id' => 220200,
                'level' => 3,
            ),
            481 => 
            array (
                'id' => 982,
                'zone_id' => 220301,
                'name' => '市辖区',
                'parent_id' => 220300,
                'level' => 3,
            ),
            482 => 
            array (
                'id' => 983,
                'zone_id' => 220302,
                'name' => '铁西区',
                'parent_id' => 220300,
                'level' => 3,
            ),
            483 => 
            array (
                'id' => 984,
                'zone_id' => 220303,
                'name' => '铁东区',
                'parent_id' => 220300,
                'level' => 3,
            ),
            484 => 
            array (
                'id' => 985,
                'zone_id' => 220322,
                'name' => '梨树县',
                'parent_id' => 220300,
                'level' => 3,
            ),
            485 => 
            array (
                'id' => 986,
                'zone_id' => 220323,
                'name' => '伊通满族自治县',
                'parent_id' => 220300,
                'level' => 3,
            ),
            486 => 
            array (
                'id' => 987,
                'zone_id' => 220381,
                'name' => '公主岭市',
                'parent_id' => 220300,
                'level' => 3,
            ),
            487 => 
            array (
                'id' => 988,
                'zone_id' => 220382,
                'name' => '双辽市',
                'parent_id' => 220300,
                'level' => 3,
            ),
            488 => 
            array (
                'id' => 989,
                'zone_id' => 220401,
                'name' => '市辖区',
                'parent_id' => 220400,
                'level' => 3,
            ),
            489 => 
            array (
                'id' => 990,
                'zone_id' => 220402,
                'name' => '龙山区',
                'parent_id' => 220400,
                'level' => 3,
            ),
            490 => 
            array (
                'id' => 991,
                'zone_id' => 220403,
                'name' => '西安区',
                'parent_id' => 220400,
                'level' => 3,
            ),
            491 => 
            array (
                'id' => 992,
                'zone_id' => 220421,
                'name' => '东丰县',
                'parent_id' => 220400,
                'level' => 3,
            ),
            492 => 
            array (
                'id' => 993,
                'zone_id' => 220422,
                'name' => '东辽县',
                'parent_id' => 220400,
                'level' => 3,
            ),
            493 => 
            array (
                'id' => 994,
                'zone_id' => 220501,
                'name' => '市辖区',
                'parent_id' => 220500,
                'level' => 3,
            ),
            494 => 
            array (
                'id' => 995,
                'zone_id' => 220502,
                'name' => '东昌区',
                'parent_id' => 220500,
                'level' => 3,
            ),
            495 => 
            array (
                'id' => 996,
                'zone_id' => 220503,
                'name' => '二道江区',
                'parent_id' => 220500,
                'level' => 3,
            ),
            496 => 
            array (
                'id' => 997,
                'zone_id' => 220521,
                'name' => '通化县',
                'parent_id' => 220500,
                'level' => 3,
            ),
            497 => 
            array (
                'id' => 998,
                'zone_id' => 220523,
                'name' => '辉南县',
                'parent_id' => 220500,
                'level' => 3,
            ),
            498 => 
            array (
                'id' => 999,
                'zone_id' => 220524,
                'name' => '柳河县',
                'parent_id' => 220500,
                'level' => 3,
            ),
            499 => 
            array (
                'id' => 1000,
                'zone_id' => 220581,
                'name' => '梅河口市',
                'parent_id' => 220500,
                'level' => 3,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'zone_id' => 220582,
                'name' => '集安市',
                'parent_id' => 220500,
                'level' => 3,
            ),
            1 => 
            array (
                'id' => 1002,
                'zone_id' => 220601,
                'name' => '市辖区',
                'parent_id' => 220600,
                'level' => 3,
            ),
            2 => 
            array (
                'id' => 1003,
                'zone_id' => 220602,
                'name' => '八道江区',
                'parent_id' => 220600,
                'level' => 3,
            ),
            3 => 
            array (
                'id' => 1004,
                'zone_id' => 220621,
                'name' => '抚松县',
                'parent_id' => 220600,
                'level' => 3,
            ),
            4 => 
            array (
                'id' => 1005,
                'zone_id' => 220622,
                'name' => '靖宇县',
                'parent_id' => 220600,
                'level' => 3,
            ),
            5 => 
            array (
                'id' => 1006,
                'zone_id' => 220623,
                'name' => '长白朝鲜族自治县',
                'parent_id' => 220600,
                'level' => 3,
            ),
            6 => 
            array (
                'id' => 1007,
                'zone_id' => 220625,
                'name' => '江源县',
                'parent_id' => 220600,
                'level' => 3,
            ),
            7 => 
            array (
                'id' => 1008,
                'zone_id' => 220681,
                'name' => '临江市',
                'parent_id' => 220600,
                'level' => 3,
            ),
            8 => 
            array (
                'id' => 1009,
                'zone_id' => 220701,
                'name' => '市辖区',
                'parent_id' => 220700,
                'level' => 3,
            ),
            9 => 
            array (
                'id' => 1010,
                'zone_id' => 220702,
                'name' => '宁江区',
                'parent_id' => 220700,
                'level' => 3,
            ),
            10 => 
            array (
                'id' => 1011,
                'zone_id' => 220721,
                'name' => '前郭尔罗斯蒙古族自治县',
                'parent_id' => 220700,
                'level' => 3,
            ),
            11 => 
            array (
                'id' => 1012,
                'zone_id' => 220722,
                'name' => '长岭县',
                'parent_id' => 220700,
                'level' => 3,
            ),
            12 => 
            array (
                'id' => 1013,
                'zone_id' => 220723,
                'name' => '乾安县',
                'parent_id' => 220700,
                'level' => 3,
            ),
            13 => 
            array (
                'id' => 1014,
                'zone_id' => 220724,
                'name' => '扶余县',
                'parent_id' => 220700,
                'level' => 3,
            ),
            14 => 
            array (
                'id' => 1015,
                'zone_id' => 220801,
                'name' => '市辖区',
                'parent_id' => 220800,
                'level' => 3,
            ),
            15 => 
            array (
                'id' => 1016,
                'zone_id' => 220802,
                'name' => '洮北区',
                'parent_id' => 220800,
                'level' => 3,
            ),
            16 => 
            array (
                'id' => 1017,
                'zone_id' => 220821,
                'name' => '镇赉县',
                'parent_id' => 220800,
                'level' => 3,
            ),
            17 => 
            array (
                'id' => 1018,
                'zone_id' => 220822,
                'name' => '通榆县',
                'parent_id' => 220800,
                'level' => 3,
            ),
            18 => 
            array (
                'id' => 1019,
                'zone_id' => 220881,
                'name' => '洮南市',
                'parent_id' => 220800,
                'level' => 3,
            ),
            19 => 
            array (
                'id' => 1020,
                'zone_id' => 220882,
                'name' => '大安市',
                'parent_id' => 220800,
                'level' => 3,
            ),
            20 => 
            array (
                'id' => 1021,
                'zone_id' => 222401,
                'name' => '延吉市',
                'parent_id' => 222400,
                'level' => 3,
            ),
            21 => 
            array (
                'id' => 1022,
                'zone_id' => 222402,
                'name' => '图们市',
                'parent_id' => 222400,
                'level' => 3,
            ),
            22 => 
            array (
                'id' => 1023,
                'zone_id' => 222403,
                'name' => '敦化市',
                'parent_id' => 222400,
                'level' => 3,
            ),
            23 => 
            array (
                'id' => 1024,
                'zone_id' => 222404,
                'name' => '珲春市',
                'parent_id' => 222400,
                'level' => 3,
            ),
            24 => 
            array (
                'id' => 1025,
                'zone_id' => 222405,
                'name' => '龙井市',
                'parent_id' => 222400,
                'level' => 3,
            ),
            25 => 
            array (
                'id' => 1026,
                'zone_id' => 222406,
                'name' => '和龙市',
                'parent_id' => 222400,
                'level' => 3,
            ),
            26 => 
            array (
                'id' => 1027,
                'zone_id' => 222424,
                'name' => '汪清县',
                'parent_id' => 222400,
                'level' => 3,
            ),
            27 => 
            array (
                'id' => 1028,
                'zone_id' => 222426,
                'name' => '安图县',
                'parent_id' => 222400,
                'level' => 3,
            ),
            28 => 
            array (
                'id' => 1029,
                'zone_id' => 230101,
                'name' => '市辖区',
                'parent_id' => 230100,
                'level' => 3,
            ),
            29 => 
            array (
                'id' => 1030,
                'zone_id' => 230102,
                'name' => '道里区',
                'parent_id' => 230100,
                'level' => 3,
            ),
            30 => 
            array (
                'id' => 1031,
                'zone_id' => 230103,
                'name' => '南岗区',
                'parent_id' => 230100,
                'level' => 3,
            ),
            31 => 
            array (
                'id' => 1032,
                'zone_id' => 230104,
                'name' => '道外区',
                'parent_id' => 230100,
                'level' => 3,
            ),
            32 => 
            array (
                'id' => 1033,
                'zone_id' => 230106,
                'name' => '香坊区',
                'parent_id' => 230100,
                'level' => 3,
            ),
            33 => 
            array (
                'id' => 1034,
                'zone_id' => 230107,
                'name' => '动力区',
                'parent_id' => 230100,
                'level' => 3,
            ),
            34 => 
            array (
                'id' => 1035,
                'zone_id' => 230108,
                'name' => '平房区',
                'parent_id' => 230100,
                'level' => 3,
            ),
            35 => 
            array (
                'id' => 1036,
                'zone_id' => 230109,
                'name' => '松北区',
                'parent_id' => 230100,
                'level' => 3,
            ),
            36 => 
            array (
                'id' => 1037,
                'zone_id' => 230111,
                'name' => '呼兰区',
                'parent_id' => 230100,
                'level' => 3,
            ),
            37 => 
            array (
                'id' => 1038,
                'zone_id' => 230123,
                'name' => '依兰县',
                'parent_id' => 230100,
                'level' => 3,
            ),
            38 => 
            array (
                'id' => 1039,
                'zone_id' => 230124,
                'name' => '方正县',
                'parent_id' => 230100,
                'level' => 3,
            ),
            39 => 
            array (
                'id' => 1040,
                'zone_id' => 230125,
                'name' => '宾　县',
                'parent_id' => 230100,
                'level' => 3,
            ),
            40 => 
            array (
                'id' => 1041,
                'zone_id' => 230126,
                'name' => '巴彦县',
                'parent_id' => 230100,
                'level' => 3,
            ),
            41 => 
            array (
                'id' => 1042,
                'zone_id' => 230127,
                'name' => '木兰县',
                'parent_id' => 230100,
                'level' => 3,
            ),
            42 => 
            array (
                'id' => 1043,
                'zone_id' => 230128,
                'name' => '通河县',
                'parent_id' => 230100,
                'level' => 3,
            ),
            43 => 
            array (
                'id' => 1044,
                'zone_id' => 230129,
                'name' => '延寿县',
                'parent_id' => 230100,
                'level' => 3,
            ),
            44 => 
            array (
                'id' => 1045,
                'zone_id' => 230181,
                'name' => '阿城市',
                'parent_id' => 230100,
                'level' => 3,
            ),
            45 => 
            array (
                'id' => 1046,
                'zone_id' => 230182,
                'name' => '双城市',
                'parent_id' => 230100,
                'level' => 3,
            ),
            46 => 
            array (
                'id' => 1047,
                'zone_id' => 230183,
                'name' => '尚志市',
                'parent_id' => 230100,
                'level' => 3,
            ),
            47 => 
            array (
                'id' => 1048,
                'zone_id' => 230184,
                'name' => '五常市',
                'parent_id' => 230100,
                'level' => 3,
            ),
            48 => 
            array (
                'id' => 1049,
                'zone_id' => 230201,
                'name' => '市辖区',
                'parent_id' => 230200,
                'level' => 3,
            ),
            49 => 
            array (
                'id' => 1050,
                'zone_id' => 230202,
                'name' => '龙沙区',
                'parent_id' => 230200,
                'level' => 3,
            ),
            50 => 
            array (
                'id' => 1051,
                'zone_id' => 230203,
                'name' => '建华区',
                'parent_id' => 230200,
                'level' => 3,
            ),
            51 => 
            array (
                'id' => 1052,
                'zone_id' => 230204,
                'name' => '铁锋区',
                'parent_id' => 230200,
                'level' => 3,
            ),
            52 => 
            array (
                'id' => 1053,
                'zone_id' => 230205,
                'name' => '昂昂溪区',
                'parent_id' => 230200,
                'level' => 3,
            ),
            53 => 
            array (
                'id' => 1054,
                'zone_id' => 230206,
                'name' => '富拉尔基区',
                'parent_id' => 230200,
                'level' => 3,
            ),
            54 => 
            array (
                'id' => 1055,
                'zone_id' => 230207,
                'name' => '碾子山区',
                'parent_id' => 230200,
                'level' => 3,
            ),
            55 => 
            array (
                'id' => 1056,
                'zone_id' => 230208,
                'name' => '梅里斯达斡尔族区',
                'parent_id' => 230200,
                'level' => 3,
            ),
            56 => 
            array (
                'id' => 1057,
                'zone_id' => 230221,
                'name' => '龙江县',
                'parent_id' => 230200,
                'level' => 3,
            ),
            57 => 
            array (
                'id' => 1058,
                'zone_id' => 230223,
                'name' => '依安县',
                'parent_id' => 230200,
                'level' => 3,
            ),
            58 => 
            array (
                'id' => 1059,
                'zone_id' => 230224,
                'name' => '泰来县',
                'parent_id' => 230200,
                'level' => 3,
            ),
            59 => 
            array (
                'id' => 1060,
                'zone_id' => 230225,
                'name' => '甘南县',
                'parent_id' => 230200,
                'level' => 3,
            ),
            60 => 
            array (
                'id' => 1061,
                'zone_id' => 230227,
                'name' => '富裕县',
                'parent_id' => 230200,
                'level' => 3,
            ),
            61 => 
            array (
                'id' => 1062,
                'zone_id' => 230229,
                'name' => '克山县',
                'parent_id' => 230200,
                'level' => 3,
            ),
            62 => 
            array (
                'id' => 1063,
                'zone_id' => 230230,
                'name' => '克东县',
                'parent_id' => 230200,
                'level' => 3,
            ),
            63 => 
            array (
                'id' => 1064,
                'zone_id' => 230231,
                'name' => '拜泉县',
                'parent_id' => 230200,
                'level' => 3,
            ),
            64 => 
            array (
                'id' => 1065,
                'zone_id' => 230281,
                'name' => '讷河市',
                'parent_id' => 230200,
                'level' => 3,
            ),
            65 => 
            array (
                'id' => 1066,
                'zone_id' => 230301,
                'name' => '市辖区',
                'parent_id' => 230300,
                'level' => 3,
            ),
            66 => 
            array (
                'id' => 1067,
                'zone_id' => 230302,
                'name' => '鸡冠区',
                'parent_id' => 230300,
                'level' => 3,
            ),
            67 => 
            array (
                'id' => 1068,
                'zone_id' => 230303,
                'name' => '恒山区',
                'parent_id' => 230300,
                'level' => 3,
            ),
            68 => 
            array (
                'id' => 1069,
                'zone_id' => 230304,
                'name' => '滴道区',
                'parent_id' => 230300,
                'level' => 3,
            ),
            69 => 
            array (
                'id' => 1070,
                'zone_id' => 230305,
                'name' => '梨树区',
                'parent_id' => 230300,
                'level' => 3,
            ),
            70 => 
            array (
                'id' => 1071,
                'zone_id' => 230306,
                'name' => '城子河区',
                'parent_id' => 230300,
                'level' => 3,
            ),
            71 => 
            array (
                'id' => 1072,
                'zone_id' => 230307,
                'name' => '麻山区',
                'parent_id' => 230300,
                'level' => 3,
            ),
            72 => 
            array (
                'id' => 1073,
                'zone_id' => 230321,
                'name' => '鸡东县',
                'parent_id' => 230300,
                'level' => 3,
            ),
            73 => 
            array (
                'id' => 1074,
                'zone_id' => 230381,
                'name' => '虎林市',
                'parent_id' => 230300,
                'level' => 3,
            ),
            74 => 
            array (
                'id' => 1075,
                'zone_id' => 230382,
                'name' => '密山市',
                'parent_id' => 230300,
                'level' => 3,
            ),
            75 => 
            array (
                'id' => 1076,
                'zone_id' => 230401,
                'name' => '市辖区',
                'parent_id' => 230400,
                'level' => 3,
            ),
            76 => 
            array (
                'id' => 1077,
                'zone_id' => 230402,
                'name' => '向阳区',
                'parent_id' => 230400,
                'level' => 3,
            ),
            77 => 
            array (
                'id' => 1078,
                'zone_id' => 230403,
                'name' => '工农区',
                'parent_id' => 230400,
                'level' => 3,
            ),
            78 => 
            array (
                'id' => 1079,
                'zone_id' => 230404,
                'name' => '南山区',
                'parent_id' => 230400,
                'level' => 3,
            ),
            79 => 
            array (
                'id' => 1080,
                'zone_id' => 230405,
                'name' => '兴安区',
                'parent_id' => 230400,
                'level' => 3,
            ),
            80 => 
            array (
                'id' => 1081,
                'zone_id' => 230406,
                'name' => '东山区',
                'parent_id' => 230400,
                'level' => 3,
            ),
            81 => 
            array (
                'id' => 1082,
                'zone_id' => 230407,
                'name' => '兴山区',
                'parent_id' => 230400,
                'level' => 3,
            ),
            82 => 
            array (
                'id' => 1083,
                'zone_id' => 230421,
                'name' => '萝北县',
                'parent_id' => 230400,
                'level' => 3,
            ),
            83 => 
            array (
                'id' => 1084,
                'zone_id' => 230422,
                'name' => '绥滨县',
                'parent_id' => 230400,
                'level' => 3,
            ),
            84 => 
            array (
                'id' => 1085,
                'zone_id' => 230501,
                'name' => '市辖区',
                'parent_id' => 230500,
                'level' => 3,
            ),
            85 => 
            array (
                'id' => 1086,
                'zone_id' => 230502,
                'name' => '尖山区',
                'parent_id' => 230500,
                'level' => 3,
            ),
            86 => 
            array (
                'id' => 1087,
                'zone_id' => 230503,
                'name' => '岭东区',
                'parent_id' => 230500,
                'level' => 3,
            ),
            87 => 
            array (
                'id' => 1088,
                'zone_id' => 230505,
                'name' => '四方台区',
                'parent_id' => 230500,
                'level' => 3,
            ),
            88 => 
            array (
                'id' => 1089,
                'zone_id' => 230506,
                'name' => '宝山区',
                'parent_id' => 230500,
                'level' => 3,
            ),
            89 => 
            array (
                'id' => 1090,
                'zone_id' => 230521,
                'name' => '集贤县',
                'parent_id' => 230500,
                'level' => 3,
            ),
            90 => 
            array (
                'id' => 1091,
                'zone_id' => 230522,
                'name' => '友谊县',
                'parent_id' => 230500,
                'level' => 3,
            ),
            91 => 
            array (
                'id' => 1092,
                'zone_id' => 230523,
                'name' => '宝清县',
                'parent_id' => 230500,
                'level' => 3,
            ),
            92 => 
            array (
                'id' => 1093,
                'zone_id' => 230524,
                'name' => '饶河县',
                'parent_id' => 230500,
                'level' => 3,
            ),
            93 => 
            array (
                'id' => 1094,
                'zone_id' => 230601,
                'name' => '市辖区',
                'parent_id' => 230600,
                'level' => 3,
            ),
            94 => 
            array (
                'id' => 1095,
                'zone_id' => 230602,
                'name' => '萨尔图区',
                'parent_id' => 230600,
                'level' => 3,
            ),
            95 => 
            array (
                'id' => 1096,
                'zone_id' => 230603,
                'name' => '龙凤区',
                'parent_id' => 230600,
                'level' => 3,
            ),
            96 => 
            array (
                'id' => 1097,
                'zone_id' => 230604,
                'name' => '让胡路区',
                'parent_id' => 230600,
                'level' => 3,
            ),
            97 => 
            array (
                'id' => 1098,
                'zone_id' => 230605,
                'name' => '红岗区',
                'parent_id' => 230600,
                'level' => 3,
            ),
            98 => 
            array (
                'id' => 1099,
                'zone_id' => 230606,
                'name' => '大同区',
                'parent_id' => 230600,
                'level' => 3,
            ),
            99 => 
            array (
                'id' => 1100,
                'zone_id' => 230621,
                'name' => '肇州县',
                'parent_id' => 230600,
                'level' => 3,
            ),
            100 => 
            array (
                'id' => 1101,
                'zone_id' => 230622,
                'name' => '肇源县',
                'parent_id' => 230600,
                'level' => 3,
            ),
            101 => 
            array (
                'id' => 1102,
                'zone_id' => 230623,
                'name' => '林甸县',
                'parent_id' => 230600,
                'level' => 3,
            ),
            102 => 
            array (
                'id' => 1103,
                'zone_id' => 230624,
                'name' => '杜尔伯特蒙古族自治县',
                'parent_id' => 230600,
                'level' => 3,
            ),
            103 => 
            array (
                'id' => 1104,
                'zone_id' => 230701,
                'name' => '市辖区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            104 => 
            array (
                'id' => 1105,
                'zone_id' => 230702,
                'name' => '伊春区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            105 => 
            array (
                'id' => 1106,
                'zone_id' => 230703,
                'name' => '南岔区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            106 => 
            array (
                'id' => 1107,
                'zone_id' => 230704,
                'name' => '友好区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            107 => 
            array (
                'id' => 1108,
                'zone_id' => 230705,
                'name' => '西林区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            108 => 
            array (
                'id' => 1109,
                'zone_id' => 230706,
                'name' => '翠峦区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            109 => 
            array (
                'id' => 1110,
                'zone_id' => 230707,
                'name' => '新青区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            110 => 
            array (
                'id' => 1111,
                'zone_id' => 230708,
                'name' => '美溪区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            111 => 
            array (
                'id' => 1112,
                'zone_id' => 230709,
                'name' => '金山屯区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            112 => 
            array (
                'id' => 1113,
                'zone_id' => 230710,
                'name' => '五营区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            113 => 
            array (
                'id' => 1114,
                'zone_id' => 230711,
                'name' => '乌马河区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            114 => 
            array (
                'id' => 1115,
                'zone_id' => 230712,
                'name' => '汤旺河区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            115 => 
            array (
                'id' => 1116,
                'zone_id' => 230713,
                'name' => '带岭区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            116 => 
            array (
                'id' => 1117,
                'zone_id' => 230714,
                'name' => '乌伊岭区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            117 => 
            array (
                'id' => 1118,
                'zone_id' => 230715,
                'name' => '红星区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            118 => 
            array (
                'id' => 1119,
                'zone_id' => 230716,
                'name' => '上甘岭区',
                'parent_id' => 230700,
                'level' => 3,
            ),
            119 => 
            array (
                'id' => 1120,
                'zone_id' => 230722,
                'name' => '嘉荫县',
                'parent_id' => 230700,
                'level' => 3,
            ),
            120 => 
            array (
                'id' => 1121,
                'zone_id' => 230781,
                'name' => '铁力市',
                'parent_id' => 230700,
                'level' => 3,
            ),
            121 => 
            array (
                'id' => 1122,
                'zone_id' => 230801,
                'name' => '市辖区',
                'parent_id' => 230800,
                'level' => 3,
            ),
            122 => 
            array (
                'id' => 1123,
                'zone_id' => 230802,
                'name' => '永红区',
                'parent_id' => 230800,
                'level' => 3,
            ),
            123 => 
            array (
                'id' => 1124,
                'zone_id' => 230803,
                'name' => '向阳区',
                'parent_id' => 230800,
                'level' => 3,
            ),
            124 => 
            array (
                'id' => 1125,
                'zone_id' => 230804,
                'name' => '前进区',
                'parent_id' => 230800,
                'level' => 3,
            ),
            125 => 
            array (
                'id' => 1126,
                'zone_id' => 230805,
                'name' => '东风区',
                'parent_id' => 230800,
                'level' => 3,
            ),
            126 => 
            array (
                'id' => 1127,
                'zone_id' => 230811,
                'name' => '郊　区',
                'parent_id' => 230800,
                'level' => 3,
            ),
            127 => 
            array (
                'id' => 1128,
                'zone_id' => 230822,
                'name' => '桦南县',
                'parent_id' => 230800,
                'level' => 3,
            ),
            128 => 
            array (
                'id' => 1129,
                'zone_id' => 230826,
                'name' => '桦川县',
                'parent_id' => 230800,
                'level' => 3,
            ),
            129 => 
            array (
                'id' => 1130,
                'zone_id' => 230828,
                'name' => '汤原县',
                'parent_id' => 230800,
                'level' => 3,
            ),
            130 => 
            array (
                'id' => 1131,
                'zone_id' => 230833,
                'name' => '抚远县',
                'parent_id' => 230800,
                'level' => 3,
            ),
            131 => 
            array (
                'id' => 1132,
                'zone_id' => 230881,
                'name' => '同江市',
                'parent_id' => 230800,
                'level' => 3,
            ),
            132 => 
            array (
                'id' => 1133,
                'zone_id' => 230882,
                'name' => '富锦市',
                'parent_id' => 230800,
                'level' => 3,
            ),
            133 => 
            array (
                'id' => 1134,
                'zone_id' => 230901,
                'name' => '市辖区',
                'parent_id' => 230900,
                'level' => 3,
            ),
            134 => 
            array (
                'id' => 1135,
                'zone_id' => 230902,
                'name' => '新兴区',
                'parent_id' => 230900,
                'level' => 3,
            ),
            135 => 
            array (
                'id' => 1136,
                'zone_id' => 230903,
                'name' => '桃山区',
                'parent_id' => 230900,
                'level' => 3,
            ),
            136 => 
            array (
                'id' => 1137,
                'zone_id' => 230904,
                'name' => '茄子河区',
                'parent_id' => 230900,
                'level' => 3,
            ),
            137 => 
            array (
                'id' => 1138,
                'zone_id' => 230921,
                'name' => '勃利县',
                'parent_id' => 230900,
                'level' => 3,
            ),
            138 => 
            array (
                'id' => 1139,
                'zone_id' => 231001,
                'name' => '市辖区',
                'parent_id' => 231000,
                'level' => 3,
            ),
            139 => 
            array (
                'id' => 1140,
                'zone_id' => 231002,
                'name' => '东安区',
                'parent_id' => 231000,
                'level' => 3,
            ),
            140 => 
            array (
                'id' => 1141,
                'zone_id' => 231003,
                'name' => '阳明区',
                'parent_id' => 231000,
                'level' => 3,
            ),
            141 => 
            array (
                'id' => 1142,
                'zone_id' => 231004,
                'name' => '爱民区',
                'parent_id' => 231000,
                'level' => 3,
            ),
            142 => 
            array (
                'id' => 1143,
                'zone_id' => 231005,
                'name' => '西安区',
                'parent_id' => 231000,
                'level' => 3,
            ),
            143 => 
            array (
                'id' => 1144,
                'zone_id' => 231024,
                'name' => '东宁县',
                'parent_id' => 231000,
                'level' => 3,
            ),
            144 => 
            array (
                'id' => 1145,
                'zone_id' => 231025,
                'name' => '林口县',
                'parent_id' => 231000,
                'level' => 3,
            ),
            145 => 
            array (
                'id' => 1146,
                'zone_id' => 231081,
                'name' => '绥芬河市',
                'parent_id' => 231000,
                'level' => 3,
            ),
            146 => 
            array (
                'id' => 1147,
                'zone_id' => 231083,
                'name' => '海林市',
                'parent_id' => 231000,
                'level' => 3,
            ),
            147 => 
            array (
                'id' => 1148,
                'zone_id' => 231084,
                'name' => '宁安市',
                'parent_id' => 231000,
                'level' => 3,
            ),
            148 => 
            array (
                'id' => 1149,
                'zone_id' => 231085,
                'name' => '穆棱市',
                'parent_id' => 231000,
                'level' => 3,
            ),
            149 => 
            array (
                'id' => 1150,
                'zone_id' => 231101,
                'name' => '市辖区',
                'parent_id' => 231100,
                'level' => 3,
            ),
            150 => 
            array (
                'id' => 1151,
                'zone_id' => 231102,
                'name' => '爱辉区',
                'parent_id' => 231100,
                'level' => 3,
            ),
            151 => 
            array (
                'id' => 1152,
                'zone_id' => 231121,
                'name' => '嫩江县',
                'parent_id' => 231100,
                'level' => 3,
            ),
            152 => 
            array (
                'id' => 1153,
                'zone_id' => 231123,
                'name' => '逊克县',
                'parent_id' => 231100,
                'level' => 3,
            ),
            153 => 
            array (
                'id' => 1154,
                'zone_id' => 231124,
                'name' => '孙吴县',
                'parent_id' => 231100,
                'level' => 3,
            ),
            154 => 
            array (
                'id' => 1155,
                'zone_id' => 231181,
                'name' => '北安市',
                'parent_id' => 231100,
                'level' => 3,
            ),
            155 => 
            array (
                'id' => 1156,
                'zone_id' => 231182,
                'name' => '五大连池市',
                'parent_id' => 231100,
                'level' => 3,
            ),
            156 => 
            array (
                'id' => 1157,
                'zone_id' => 231201,
                'name' => '市辖区',
                'parent_id' => 231200,
                'level' => 3,
            ),
            157 => 
            array (
                'id' => 1158,
                'zone_id' => 231202,
                'name' => '北林区',
                'parent_id' => 231200,
                'level' => 3,
            ),
            158 => 
            array (
                'id' => 1159,
                'zone_id' => 231221,
                'name' => '望奎县',
                'parent_id' => 231200,
                'level' => 3,
            ),
            159 => 
            array (
                'id' => 1160,
                'zone_id' => 231222,
                'name' => '兰西县',
                'parent_id' => 231200,
                'level' => 3,
            ),
            160 => 
            array (
                'id' => 1161,
                'zone_id' => 231223,
                'name' => '青冈县',
                'parent_id' => 231200,
                'level' => 3,
            ),
            161 => 
            array (
                'id' => 1162,
                'zone_id' => 231224,
                'name' => '庆安县',
                'parent_id' => 231200,
                'level' => 3,
            ),
            162 => 
            array (
                'id' => 1163,
                'zone_id' => 231225,
                'name' => '明水县',
                'parent_id' => 231200,
                'level' => 3,
            ),
            163 => 
            array (
                'id' => 1164,
                'zone_id' => 231226,
                'name' => '绥棱县',
                'parent_id' => 231200,
                'level' => 3,
            ),
            164 => 
            array (
                'id' => 1165,
                'zone_id' => 231281,
                'name' => '安达市',
                'parent_id' => 231200,
                'level' => 3,
            ),
            165 => 
            array (
                'id' => 1166,
                'zone_id' => 231282,
                'name' => '肇东市',
                'parent_id' => 231200,
                'level' => 3,
            ),
            166 => 
            array (
                'id' => 1167,
                'zone_id' => 231283,
                'name' => '海伦市',
                'parent_id' => 231200,
                'level' => 3,
            ),
            167 => 
            array (
                'id' => 1168,
                'zone_id' => 232721,
                'name' => '呼玛县',
                'parent_id' => 232700,
                'level' => 3,
            ),
            168 => 
            array (
                'id' => 1169,
                'zone_id' => 232722,
                'name' => '塔河县',
                'parent_id' => 232700,
                'level' => 3,
            ),
            169 => 
            array (
                'id' => 1170,
                'zone_id' => 232723,
                'name' => '漠河县',
                'parent_id' => 232700,
                'level' => 3,
            ),
            170 => 
            array (
                'id' => 1171,
                'zone_id' => 310101,
                'name' => '黄浦区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            171 => 
            array (
                'id' => 1172,
                'zone_id' => 310103,
                'name' => '卢湾区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            172 => 
            array (
                'id' => 1173,
                'zone_id' => 310104,
                'name' => '徐汇区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            173 => 
            array (
                'id' => 1174,
                'zone_id' => 310105,
                'name' => '长宁区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            174 => 
            array (
                'id' => 1175,
                'zone_id' => 310106,
                'name' => '静安区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            175 => 
            array (
                'id' => 1176,
                'zone_id' => 310107,
                'name' => '普陀区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            176 => 
            array (
                'id' => 1177,
                'zone_id' => 310108,
                'name' => '闸北区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            177 => 
            array (
                'id' => 1178,
                'zone_id' => 310109,
                'name' => '虹口区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            178 => 
            array (
                'id' => 1179,
                'zone_id' => 310110,
                'name' => '杨浦区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            179 => 
            array (
                'id' => 1180,
                'zone_id' => 310112,
                'name' => '闵行区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            180 => 
            array (
                'id' => 1181,
                'zone_id' => 310113,
                'name' => '宝山区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            181 => 
            array (
                'id' => 1182,
                'zone_id' => 310114,
                'name' => '嘉定区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            182 => 
            array (
                'id' => 1183,
                'zone_id' => 310115,
                'name' => '浦东新区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            183 => 
            array (
                'id' => 1184,
                'zone_id' => 310116,
                'name' => '金山区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            184 => 
            array (
                'id' => 1185,
                'zone_id' => 310117,
                'name' => '松江区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            185 => 
            array (
                'id' => 1186,
                'zone_id' => 310118,
                'name' => '青浦区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            186 => 
            array (
                'id' => 1187,
                'zone_id' => 310119,
                'name' => '南汇区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            187 => 
            array (
                'id' => 1188,
                'zone_id' => 310120,
                'name' => '奉贤区',
                'parent_id' => 310100,
                'level' => 3,
            ),
            188 => 
            array (
                'id' => 1189,
                'zone_id' => 310230,
                'name' => '崇明县',
                'parent_id' => 310100,
                'level' => 3,
            ),
            189 => 
            array (
                'id' => 1190,
                'zone_id' => 320101,
                'name' => '市辖区',
                'parent_id' => 320100,
                'level' => 3,
            ),
            190 => 
            array (
                'id' => 1191,
                'zone_id' => 320102,
                'name' => '玄武区',
                'parent_id' => 320100,
                'level' => 3,
            ),
            191 => 
            array (
                'id' => 1192,
                'zone_id' => 320103,
                'name' => '白下区',
                'parent_id' => 320100,
                'level' => 3,
            ),
            192 => 
            array (
                'id' => 1193,
                'zone_id' => 320104,
                'name' => '秦淮区',
                'parent_id' => 320100,
                'level' => 3,
            ),
            193 => 
            array (
                'id' => 1194,
                'zone_id' => 320105,
                'name' => '建邺区',
                'parent_id' => 320100,
                'level' => 3,
            ),
            194 => 
            array (
                'id' => 1195,
                'zone_id' => 320106,
                'name' => '鼓楼区',
                'parent_id' => 320100,
                'level' => 3,
            ),
            195 => 
            array (
                'id' => 1196,
                'zone_id' => 320107,
                'name' => '下关区',
                'parent_id' => 320100,
                'level' => 3,
            ),
            196 => 
            array (
                'id' => 1197,
                'zone_id' => 320111,
                'name' => '浦口区',
                'parent_id' => 320100,
                'level' => 3,
            ),
            197 => 
            array (
                'id' => 1198,
                'zone_id' => 320113,
                'name' => '栖霞区',
                'parent_id' => 320100,
                'level' => 3,
            ),
            198 => 
            array (
                'id' => 1199,
                'zone_id' => 320114,
                'name' => '雨花台区',
                'parent_id' => 320100,
                'level' => 3,
            ),
            199 => 
            array (
                'id' => 1200,
                'zone_id' => 320115,
                'name' => '江宁区',
                'parent_id' => 320100,
                'level' => 3,
            ),
            200 => 
            array (
                'id' => 1201,
                'zone_id' => 320116,
                'name' => '六合区',
                'parent_id' => 320100,
                'level' => 3,
            ),
            201 => 
            array (
                'id' => 1202,
                'zone_id' => 320124,
                'name' => '溧水县',
                'parent_id' => 320100,
                'level' => 3,
            ),
            202 => 
            array (
                'id' => 1203,
                'zone_id' => 320125,
                'name' => '高淳县',
                'parent_id' => 320100,
                'level' => 3,
            ),
            203 => 
            array (
                'id' => 1204,
                'zone_id' => 320201,
                'name' => '市辖区',
                'parent_id' => 320200,
                'level' => 3,
            ),
            204 => 
            array (
                'id' => 1205,
                'zone_id' => 320202,
                'name' => '崇安区',
                'parent_id' => 320200,
                'level' => 3,
            ),
            205 => 
            array (
                'id' => 1206,
                'zone_id' => 320203,
                'name' => '南长区',
                'parent_id' => 320200,
                'level' => 3,
            ),
            206 => 
            array (
                'id' => 1207,
                'zone_id' => 320204,
                'name' => '北塘区',
                'parent_id' => 320200,
                'level' => 3,
            ),
            207 => 
            array (
                'id' => 1208,
                'zone_id' => 320205,
                'name' => '锡山区',
                'parent_id' => 320200,
                'level' => 3,
            ),
            208 => 
            array (
                'id' => 1209,
                'zone_id' => 320206,
                'name' => '惠山区',
                'parent_id' => 320200,
                'level' => 3,
            ),
            209 => 
            array (
                'id' => 1210,
                'zone_id' => 320211,
                'name' => '滨湖区',
                'parent_id' => 320200,
                'level' => 3,
            ),
            210 => 
            array (
                'id' => 1211,
                'zone_id' => 320281,
                'name' => '江阴市',
                'parent_id' => 320200,
                'level' => 3,
            ),
            211 => 
            array (
                'id' => 1212,
                'zone_id' => 320282,
                'name' => '宜兴市',
                'parent_id' => 320200,
                'level' => 3,
            ),
            212 => 
            array (
                'id' => 1213,
                'zone_id' => 320301,
                'name' => '市辖区',
                'parent_id' => 320300,
                'level' => 3,
            ),
            213 => 
            array (
                'id' => 1214,
                'zone_id' => 320302,
                'name' => '鼓楼区',
                'parent_id' => 320300,
                'level' => 3,
            ),
            214 => 
            array (
                'id' => 1215,
                'zone_id' => 320303,
                'name' => '云龙区',
                'parent_id' => 320300,
                'level' => 3,
            ),
            215 => 
            array (
                'id' => 1216,
                'zone_id' => 320304,
                'name' => '九里区',
                'parent_id' => 320300,
                'level' => 3,
            ),
            216 => 
            array (
                'id' => 1217,
                'zone_id' => 320305,
                'name' => '贾汪区',
                'parent_id' => 320300,
                'level' => 3,
            ),
            217 => 
            array (
                'id' => 1218,
                'zone_id' => 320311,
                'name' => '泉山区',
                'parent_id' => 320300,
                'level' => 3,
            ),
            218 => 
            array (
                'id' => 1219,
                'zone_id' => 320321,
                'name' => '丰　县',
                'parent_id' => 320300,
                'level' => 3,
            ),
            219 => 
            array (
                'id' => 1220,
                'zone_id' => 320322,
                'name' => '沛　县',
                'parent_id' => 320300,
                'level' => 3,
            ),
            220 => 
            array (
                'id' => 1221,
                'zone_id' => 320323,
                'name' => '铜山县',
                'parent_id' => 320300,
                'level' => 3,
            ),
            221 => 
            array (
                'id' => 1222,
                'zone_id' => 320324,
                'name' => '睢宁县',
                'parent_id' => 320300,
                'level' => 3,
            ),
            222 => 
            array (
                'id' => 1223,
                'zone_id' => 320381,
                'name' => '新沂市',
                'parent_id' => 320300,
                'level' => 3,
            ),
            223 => 
            array (
                'id' => 1224,
                'zone_id' => 320382,
                'name' => '邳州市',
                'parent_id' => 320300,
                'level' => 3,
            ),
            224 => 
            array (
                'id' => 1225,
                'zone_id' => 320401,
                'name' => '市辖区',
                'parent_id' => 320400,
                'level' => 3,
            ),
            225 => 
            array (
                'id' => 1226,
                'zone_id' => 320402,
                'name' => '天宁区',
                'parent_id' => 320400,
                'level' => 3,
            ),
            226 => 
            array (
                'id' => 1227,
                'zone_id' => 320404,
                'name' => '钟楼区',
                'parent_id' => 320400,
                'level' => 3,
            ),
            227 => 
            array (
                'id' => 1228,
                'zone_id' => 320405,
                'name' => '戚墅堰区',
                'parent_id' => 320400,
                'level' => 3,
            ),
            228 => 
            array (
                'id' => 1229,
                'zone_id' => 320411,
                'name' => '新北区',
                'parent_id' => 320400,
                'level' => 3,
            ),
            229 => 
            array (
                'id' => 1230,
                'zone_id' => 320412,
                'name' => '武进区',
                'parent_id' => 320400,
                'level' => 3,
            ),
            230 => 
            array (
                'id' => 1231,
                'zone_id' => 320481,
                'name' => '溧阳市',
                'parent_id' => 320400,
                'level' => 3,
            ),
            231 => 
            array (
                'id' => 1232,
                'zone_id' => 320482,
                'name' => '金坛市',
                'parent_id' => 320400,
                'level' => 3,
            ),
            232 => 
            array (
                'id' => 1233,
                'zone_id' => 320501,
                'name' => '市辖区',
                'parent_id' => 320500,
                'level' => 3,
            ),
            233 => 
            array (
                'id' => 1234,
                'zone_id' => 320502,
                'name' => '沧浪区',
                'parent_id' => 320500,
                'level' => 3,
            ),
            234 => 
            array (
                'id' => 1235,
                'zone_id' => 320503,
                'name' => '平江区',
                'parent_id' => 320500,
                'level' => 3,
            ),
            235 => 
            array (
                'id' => 1236,
                'zone_id' => 320504,
                'name' => '金阊区',
                'parent_id' => 320500,
                'level' => 3,
            ),
            236 => 
            array (
                'id' => 1237,
                'zone_id' => 320505,
                'name' => '虎丘区',
                'parent_id' => 320500,
                'level' => 3,
            ),
            237 => 
            array (
                'id' => 1238,
                'zone_id' => 320506,
                'name' => '吴中区',
                'parent_id' => 320500,
                'level' => 3,
            ),
            238 => 
            array (
                'id' => 1239,
                'zone_id' => 320507,
                'name' => '相城区',
                'parent_id' => 320500,
                'level' => 3,
            ),
            239 => 
            array (
                'id' => 1240,
                'zone_id' => 320581,
                'name' => '常熟市',
                'parent_id' => 320500,
                'level' => 3,
            ),
            240 => 
            array (
                'id' => 1241,
                'zone_id' => 320582,
                'name' => '张家港市',
                'parent_id' => 320500,
                'level' => 3,
            ),
            241 => 
            array (
                'id' => 1242,
                'zone_id' => 320583,
                'name' => '昆山市',
                'parent_id' => 320500,
                'level' => 3,
            ),
            242 => 
            array (
                'id' => 1243,
                'zone_id' => 320584,
                'name' => '吴江市',
                'parent_id' => 320500,
                'level' => 3,
            ),
            243 => 
            array (
                'id' => 1244,
                'zone_id' => 320585,
                'name' => '太仓市',
                'parent_id' => 320500,
                'level' => 3,
            ),
            244 => 
            array (
                'id' => 1245,
                'zone_id' => 320601,
                'name' => '市辖区',
                'parent_id' => 320600,
                'level' => 3,
            ),
            245 => 
            array (
                'id' => 1246,
                'zone_id' => 320602,
                'name' => '崇川区',
                'parent_id' => 320600,
                'level' => 3,
            ),
            246 => 
            array (
                'id' => 1247,
                'zone_id' => 320611,
                'name' => '港闸区',
                'parent_id' => 320600,
                'level' => 3,
            ),
            247 => 
            array (
                'id' => 1248,
                'zone_id' => 320621,
                'name' => '海安县',
                'parent_id' => 320600,
                'level' => 3,
            ),
            248 => 
            array (
                'id' => 1249,
                'zone_id' => 320623,
                'name' => '如东县',
                'parent_id' => 320600,
                'level' => 3,
            ),
            249 => 
            array (
                'id' => 1250,
                'zone_id' => 320681,
                'name' => '启东市',
                'parent_id' => 320600,
                'level' => 3,
            ),
            250 => 
            array (
                'id' => 1251,
                'zone_id' => 320682,
                'name' => '如皋市',
                'parent_id' => 320600,
                'level' => 3,
            ),
            251 => 
            array (
                'id' => 1252,
                'zone_id' => 320683,
                'name' => '通州市',
                'parent_id' => 320600,
                'level' => 3,
            ),
            252 => 
            array (
                'id' => 1253,
                'zone_id' => 320684,
                'name' => '海门市',
                'parent_id' => 320600,
                'level' => 3,
            ),
            253 => 
            array (
                'id' => 1254,
                'zone_id' => 320701,
                'name' => '市辖区',
                'parent_id' => 320700,
                'level' => 3,
            ),
            254 => 
            array (
                'id' => 1255,
                'zone_id' => 320703,
                'name' => '连云区',
                'parent_id' => 320700,
                'level' => 3,
            ),
            255 => 
            array (
                'id' => 1256,
                'zone_id' => 320705,
                'name' => '新浦区',
                'parent_id' => 320700,
                'level' => 3,
            ),
            256 => 
            array (
                'id' => 1257,
                'zone_id' => 320706,
                'name' => '海州区',
                'parent_id' => 320700,
                'level' => 3,
            ),
            257 => 
            array (
                'id' => 1258,
                'zone_id' => 320721,
                'name' => '赣榆县',
                'parent_id' => 320700,
                'level' => 3,
            ),
            258 => 
            array (
                'id' => 1259,
                'zone_id' => 320722,
                'name' => '东海县',
                'parent_id' => 320700,
                'level' => 3,
            ),
            259 => 
            array (
                'id' => 1260,
                'zone_id' => 320723,
                'name' => '灌云县',
                'parent_id' => 320700,
                'level' => 3,
            ),
            260 => 
            array (
                'id' => 1261,
                'zone_id' => 320724,
                'name' => '灌南县',
                'parent_id' => 320700,
                'level' => 3,
            ),
            261 => 
            array (
                'id' => 1262,
                'zone_id' => 320801,
                'name' => '市辖区',
                'parent_id' => 320800,
                'level' => 3,
            ),
            262 => 
            array (
                'id' => 1263,
                'zone_id' => 320802,
                'name' => '清河区',
                'parent_id' => 320800,
                'level' => 3,
            ),
            263 => 
            array (
                'id' => 1264,
                'zone_id' => 320803,
                'name' => '楚州区',
                'parent_id' => 320800,
                'level' => 3,
            ),
            264 => 
            array (
                'id' => 1265,
                'zone_id' => 320804,
                'name' => '淮阴区',
                'parent_id' => 320800,
                'level' => 3,
            ),
            265 => 
            array (
                'id' => 1266,
                'zone_id' => 320811,
                'name' => '清浦区',
                'parent_id' => 320800,
                'level' => 3,
            ),
            266 => 
            array (
                'id' => 1267,
                'zone_id' => 320826,
                'name' => '涟水县',
                'parent_id' => 320800,
                'level' => 3,
            ),
            267 => 
            array (
                'id' => 1268,
                'zone_id' => 320829,
                'name' => '洪泽县',
                'parent_id' => 320800,
                'level' => 3,
            ),
            268 => 
            array (
                'id' => 1269,
                'zone_id' => 320830,
                'name' => '盱眙县',
                'parent_id' => 320800,
                'level' => 3,
            ),
            269 => 
            array (
                'id' => 1270,
                'zone_id' => 320831,
                'name' => '金湖县',
                'parent_id' => 320800,
                'level' => 3,
            ),
            270 => 
            array (
                'id' => 1271,
                'zone_id' => 320901,
                'name' => '市辖区',
                'parent_id' => 320900,
                'level' => 3,
            ),
            271 => 
            array (
                'id' => 1272,
                'zone_id' => 320902,
                'name' => '亭湖区',
                'parent_id' => 320900,
                'level' => 3,
            ),
            272 => 
            array (
                'id' => 1273,
                'zone_id' => 320903,
                'name' => '盐都区',
                'parent_id' => 320900,
                'level' => 3,
            ),
            273 => 
            array (
                'id' => 1274,
                'zone_id' => 320921,
                'name' => '响水县',
                'parent_id' => 320900,
                'level' => 3,
            ),
            274 => 
            array (
                'id' => 1275,
                'zone_id' => 320922,
                'name' => '滨海县',
                'parent_id' => 320900,
                'level' => 3,
            ),
            275 => 
            array (
                'id' => 1276,
                'zone_id' => 320923,
                'name' => '阜宁县',
                'parent_id' => 320900,
                'level' => 3,
            ),
            276 => 
            array (
                'id' => 1277,
                'zone_id' => 320924,
                'name' => '射阳县',
                'parent_id' => 320900,
                'level' => 3,
            ),
            277 => 
            array (
                'id' => 1278,
                'zone_id' => 320925,
                'name' => '建湖县',
                'parent_id' => 320900,
                'level' => 3,
            ),
            278 => 
            array (
                'id' => 1279,
                'zone_id' => 320981,
                'name' => '东台市',
                'parent_id' => 320900,
                'level' => 3,
            ),
            279 => 
            array (
                'id' => 1280,
                'zone_id' => 320982,
                'name' => '大丰市',
                'parent_id' => 320900,
                'level' => 3,
            ),
            280 => 
            array (
                'id' => 1281,
                'zone_id' => 321001,
                'name' => '市辖区',
                'parent_id' => 321000,
                'level' => 3,
            ),
            281 => 
            array (
                'id' => 1282,
                'zone_id' => 321002,
                'name' => '广陵区',
                'parent_id' => 321000,
                'level' => 3,
            ),
            282 => 
            array (
                'id' => 1283,
                'zone_id' => 321003,
                'name' => '邗江区',
                'parent_id' => 321000,
                'level' => 3,
            ),
            283 => 
            array (
                'id' => 1284,
                'zone_id' => 321011,
                'name' => '郊　区',
                'parent_id' => 321000,
                'level' => 3,
            ),
            284 => 
            array (
                'id' => 1285,
                'zone_id' => 321023,
                'name' => '宝应县',
                'parent_id' => 321000,
                'level' => 3,
            ),
            285 => 
            array (
                'id' => 1286,
                'zone_id' => 321081,
                'name' => '仪征市',
                'parent_id' => 321000,
                'level' => 3,
            ),
            286 => 
            array (
                'id' => 1287,
                'zone_id' => 321084,
                'name' => '高邮市',
                'parent_id' => 321000,
                'level' => 3,
            ),
            287 => 
            array (
                'id' => 1288,
                'zone_id' => 321088,
                'name' => '江都市',
                'parent_id' => 321000,
                'level' => 3,
            ),
            288 => 
            array (
                'id' => 1289,
                'zone_id' => 321101,
                'name' => '市辖区',
                'parent_id' => 321100,
                'level' => 3,
            ),
            289 => 
            array (
                'id' => 1290,
                'zone_id' => 321102,
                'name' => '京口区',
                'parent_id' => 321100,
                'level' => 3,
            ),
            290 => 
            array (
                'id' => 1291,
                'zone_id' => 321111,
                'name' => '润州区',
                'parent_id' => 321100,
                'level' => 3,
            ),
            291 => 
            array (
                'id' => 1292,
                'zone_id' => 321112,
                'name' => '丹徒区',
                'parent_id' => 321100,
                'level' => 3,
            ),
            292 => 
            array (
                'id' => 1293,
                'zone_id' => 321181,
                'name' => '丹阳市',
                'parent_id' => 321100,
                'level' => 3,
            ),
            293 => 
            array (
                'id' => 1294,
                'zone_id' => 321182,
                'name' => '扬中市',
                'parent_id' => 321100,
                'level' => 3,
            ),
            294 => 
            array (
                'id' => 1295,
                'zone_id' => 321183,
                'name' => '句容市',
                'parent_id' => 321100,
                'level' => 3,
            ),
            295 => 
            array (
                'id' => 1296,
                'zone_id' => 321201,
                'name' => '市辖区',
                'parent_id' => 321200,
                'level' => 3,
            ),
            296 => 
            array (
                'id' => 1297,
                'zone_id' => 321202,
                'name' => '海陵区',
                'parent_id' => 321200,
                'level' => 3,
            ),
            297 => 
            array (
                'id' => 1298,
                'zone_id' => 321203,
                'name' => '高港区',
                'parent_id' => 321200,
                'level' => 3,
            ),
            298 => 
            array (
                'id' => 1299,
                'zone_id' => 321281,
                'name' => '兴化市',
                'parent_id' => 321200,
                'level' => 3,
            ),
            299 => 
            array (
                'id' => 1300,
                'zone_id' => 321282,
                'name' => '靖江市',
                'parent_id' => 321200,
                'level' => 3,
            ),
            300 => 
            array (
                'id' => 1301,
                'zone_id' => 321283,
                'name' => '泰兴市',
                'parent_id' => 321200,
                'level' => 3,
            ),
            301 => 
            array (
                'id' => 1302,
                'zone_id' => 321284,
                'name' => '姜堰市',
                'parent_id' => 321200,
                'level' => 3,
            ),
            302 => 
            array (
                'id' => 1303,
                'zone_id' => 321301,
                'name' => '市辖区',
                'parent_id' => 321300,
                'level' => 3,
            ),
            303 => 
            array (
                'id' => 1304,
                'zone_id' => 321302,
                'name' => '宿城区',
                'parent_id' => 321300,
                'level' => 3,
            ),
            304 => 
            array (
                'id' => 1305,
                'zone_id' => 321311,
                'name' => '宿豫区',
                'parent_id' => 321300,
                'level' => 3,
            ),
            305 => 
            array (
                'id' => 1306,
                'zone_id' => 321322,
                'name' => '沭阳县',
                'parent_id' => 321300,
                'level' => 3,
            ),
            306 => 
            array (
                'id' => 1307,
                'zone_id' => 321323,
                'name' => '泗阳县',
                'parent_id' => 321300,
                'level' => 3,
            ),
            307 => 
            array (
                'id' => 1308,
                'zone_id' => 321324,
                'name' => '泗洪县',
                'parent_id' => 321300,
                'level' => 3,
            ),
            308 => 
            array (
                'id' => 1309,
                'zone_id' => 330101,
                'name' => '市辖区',
                'parent_id' => 330100,
                'level' => 3,
            ),
            309 => 
            array (
                'id' => 1310,
                'zone_id' => 330102,
                'name' => '上城区',
                'parent_id' => 330100,
                'level' => 3,
            ),
            310 => 
            array (
                'id' => 1311,
                'zone_id' => 330103,
                'name' => '下城区',
                'parent_id' => 330100,
                'level' => 3,
            ),
            311 => 
            array (
                'id' => 1312,
                'zone_id' => 330104,
                'name' => '江干区',
                'parent_id' => 330100,
                'level' => 3,
            ),
            312 => 
            array (
                'id' => 1313,
                'zone_id' => 330105,
                'name' => '拱墅区',
                'parent_id' => 330100,
                'level' => 3,
            ),
            313 => 
            array (
                'id' => 1314,
                'zone_id' => 330106,
                'name' => '西湖区',
                'parent_id' => 330100,
                'level' => 3,
            ),
            314 => 
            array (
                'id' => 1315,
                'zone_id' => 330108,
                'name' => '滨江区',
                'parent_id' => 330100,
                'level' => 3,
            ),
            315 => 
            array (
                'id' => 1316,
                'zone_id' => 330109,
                'name' => '萧山区',
                'parent_id' => 330100,
                'level' => 3,
            ),
            316 => 
            array (
                'id' => 1317,
                'zone_id' => 330110,
                'name' => '余杭区',
                'parent_id' => 330100,
                'level' => 3,
            ),
            317 => 
            array (
                'id' => 1318,
                'zone_id' => 330122,
                'name' => '桐庐县',
                'parent_id' => 330100,
                'level' => 3,
            ),
            318 => 
            array (
                'id' => 1319,
                'zone_id' => 330127,
                'name' => '淳安县',
                'parent_id' => 330100,
                'level' => 3,
            ),
            319 => 
            array (
                'id' => 1320,
                'zone_id' => 330182,
                'name' => '建德市',
                'parent_id' => 330100,
                'level' => 3,
            ),
            320 => 
            array (
                'id' => 1321,
                'zone_id' => 330183,
                'name' => '富阳市',
                'parent_id' => 330100,
                'level' => 3,
            ),
            321 => 
            array (
                'id' => 1322,
                'zone_id' => 330185,
                'name' => '临安市',
                'parent_id' => 330100,
                'level' => 3,
            ),
            322 => 
            array (
                'id' => 1323,
                'zone_id' => 330201,
                'name' => '市辖区',
                'parent_id' => 330200,
                'level' => 3,
            ),
            323 => 
            array (
                'id' => 1324,
                'zone_id' => 330203,
                'name' => '海曙区',
                'parent_id' => 330200,
                'level' => 3,
            ),
            324 => 
            array (
                'id' => 1325,
                'zone_id' => 330204,
                'name' => '江东区',
                'parent_id' => 330200,
                'level' => 3,
            ),
            325 => 
            array (
                'id' => 1326,
                'zone_id' => 330205,
                'name' => '江北区',
                'parent_id' => 330200,
                'level' => 3,
            ),
            326 => 
            array (
                'id' => 1327,
                'zone_id' => 330206,
                'name' => '北仑区',
                'parent_id' => 330200,
                'level' => 3,
            ),
            327 => 
            array (
                'id' => 1328,
                'zone_id' => 330211,
                'name' => '镇海区',
                'parent_id' => 330200,
                'level' => 3,
            ),
            328 => 
            array (
                'id' => 1329,
                'zone_id' => 330212,
                'name' => '鄞州区',
                'parent_id' => 330200,
                'level' => 3,
            ),
            329 => 
            array (
                'id' => 1330,
                'zone_id' => 330225,
                'name' => '象山县',
                'parent_id' => 330200,
                'level' => 3,
            ),
            330 => 
            array (
                'id' => 1331,
                'zone_id' => 330226,
                'name' => '宁海县',
                'parent_id' => 330200,
                'level' => 3,
            ),
            331 => 
            array (
                'id' => 1332,
                'zone_id' => 330281,
                'name' => '余姚市',
                'parent_id' => 330200,
                'level' => 3,
            ),
            332 => 
            array (
                'id' => 1333,
                'zone_id' => 330282,
                'name' => '慈溪市',
                'parent_id' => 330200,
                'level' => 3,
            ),
            333 => 
            array (
                'id' => 1334,
                'zone_id' => 330283,
                'name' => '奉化市',
                'parent_id' => 330200,
                'level' => 3,
            ),
            334 => 
            array (
                'id' => 1335,
                'zone_id' => 330301,
                'name' => '市辖区',
                'parent_id' => 330300,
                'level' => 3,
            ),
            335 => 
            array (
                'id' => 1336,
                'zone_id' => 330302,
                'name' => '鹿城区',
                'parent_id' => 330300,
                'level' => 3,
            ),
            336 => 
            array (
                'id' => 1337,
                'zone_id' => 330303,
                'name' => '龙湾区',
                'parent_id' => 330300,
                'level' => 3,
            ),
            337 => 
            array (
                'id' => 1338,
                'zone_id' => 330304,
                'name' => '瓯海区',
                'parent_id' => 330300,
                'level' => 3,
            ),
            338 => 
            array (
                'id' => 1339,
                'zone_id' => 330322,
                'name' => '洞头县',
                'parent_id' => 330300,
                'level' => 3,
            ),
            339 => 
            array (
                'id' => 1340,
                'zone_id' => 330324,
                'name' => '永嘉县',
                'parent_id' => 330300,
                'level' => 3,
            ),
            340 => 
            array (
                'id' => 1341,
                'zone_id' => 330326,
                'name' => '平阳县',
                'parent_id' => 330300,
                'level' => 3,
            ),
            341 => 
            array (
                'id' => 1342,
                'zone_id' => 330327,
                'name' => '苍南县',
                'parent_id' => 330300,
                'level' => 3,
            ),
            342 => 
            array (
                'id' => 1343,
                'zone_id' => 330328,
                'name' => '文成县',
                'parent_id' => 330300,
                'level' => 3,
            ),
            343 => 
            array (
                'id' => 1344,
                'zone_id' => 330329,
                'name' => '泰顺县',
                'parent_id' => 330300,
                'level' => 3,
            ),
            344 => 
            array (
                'id' => 1345,
                'zone_id' => 330381,
                'name' => '瑞安市',
                'parent_id' => 330300,
                'level' => 3,
            ),
            345 => 
            array (
                'id' => 1346,
                'zone_id' => 330382,
                'name' => '乐清市',
                'parent_id' => 330300,
                'level' => 3,
            ),
            346 => 
            array (
                'id' => 1347,
                'zone_id' => 330401,
                'name' => '市辖区',
                'parent_id' => 330400,
                'level' => 3,
            ),
            347 => 
            array (
                'id' => 1348,
                'zone_id' => 330402,
                'name' => '秀城区',
                'parent_id' => 330400,
                'level' => 3,
            ),
            348 => 
            array (
                'id' => 1349,
                'zone_id' => 330411,
                'name' => '秀洲区',
                'parent_id' => 330400,
                'level' => 3,
            ),
            349 => 
            array (
                'id' => 1350,
                'zone_id' => 330421,
                'name' => '嘉善县',
                'parent_id' => 330400,
                'level' => 3,
            ),
            350 => 
            array (
                'id' => 1351,
                'zone_id' => 330424,
                'name' => '海盐县',
                'parent_id' => 330400,
                'level' => 3,
            ),
            351 => 
            array (
                'id' => 1352,
                'zone_id' => 330481,
                'name' => '海宁市',
                'parent_id' => 330400,
                'level' => 3,
            ),
            352 => 
            array (
                'id' => 1353,
                'zone_id' => 330482,
                'name' => '平湖市',
                'parent_id' => 330400,
                'level' => 3,
            ),
            353 => 
            array (
                'id' => 1354,
                'zone_id' => 330483,
                'name' => '桐乡市',
                'parent_id' => 330400,
                'level' => 3,
            ),
            354 => 
            array (
                'id' => 1355,
                'zone_id' => 330501,
                'name' => '市辖区',
                'parent_id' => 330500,
                'level' => 3,
            ),
            355 => 
            array (
                'id' => 1356,
                'zone_id' => 330502,
                'name' => '吴兴区',
                'parent_id' => 330500,
                'level' => 3,
            ),
            356 => 
            array (
                'id' => 1357,
                'zone_id' => 330503,
                'name' => '南浔区',
                'parent_id' => 330500,
                'level' => 3,
            ),
            357 => 
            array (
                'id' => 1358,
                'zone_id' => 330521,
                'name' => '德清县',
                'parent_id' => 330500,
                'level' => 3,
            ),
            358 => 
            array (
                'id' => 1359,
                'zone_id' => 330522,
                'name' => '长兴县',
                'parent_id' => 330500,
                'level' => 3,
            ),
            359 => 
            array (
                'id' => 1360,
                'zone_id' => 330523,
                'name' => '安吉县',
                'parent_id' => 330500,
                'level' => 3,
            ),
            360 => 
            array (
                'id' => 1361,
                'zone_id' => 330601,
                'name' => '市辖区',
                'parent_id' => 330600,
                'level' => 3,
            ),
            361 => 
            array (
                'id' => 1362,
                'zone_id' => 330602,
                'name' => '越城区',
                'parent_id' => 330600,
                'level' => 3,
            ),
            362 => 
            array (
                'id' => 1363,
                'zone_id' => 330621,
                'name' => '绍兴县',
                'parent_id' => 330600,
                'level' => 3,
            ),
            363 => 
            array (
                'id' => 1364,
                'zone_id' => 330624,
                'name' => '新昌县',
                'parent_id' => 330600,
                'level' => 3,
            ),
            364 => 
            array (
                'id' => 1365,
                'zone_id' => 330681,
                'name' => '诸暨市',
                'parent_id' => 330600,
                'level' => 3,
            ),
            365 => 
            array (
                'id' => 1366,
                'zone_id' => 330682,
                'name' => '上虞市',
                'parent_id' => 330600,
                'level' => 3,
            ),
            366 => 
            array (
                'id' => 1367,
                'zone_id' => 330683,
                'name' => '嵊州市',
                'parent_id' => 330600,
                'level' => 3,
            ),
            367 => 
            array (
                'id' => 1368,
                'zone_id' => 330701,
                'name' => '市辖区',
                'parent_id' => 330700,
                'level' => 3,
            ),
            368 => 
            array (
                'id' => 1369,
                'zone_id' => 330702,
                'name' => '婺城区',
                'parent_id' => 330700,
                'level' => 3,
            ),
            369 => 
            array (
                'id' => 1370,
                'zone_id' => 330703,
                'name' => '金东区',
                'parent_id' => 330700,
                'level' => 3,
            ),
            370 => 
            array (
                'id' => 1371,
                'zone_id' => 330723,
                'name' => '武义县',
                'parent_id' => 330700,
                'level' => 3,
            ),
            371 => 
            array (
                'id' => 1372,
                'zone_id' => 330726,
                'name' => '浦江县',
                'parent_id' => 330700,
                'level' => 3,
            ),
            372 => 
            array (
                'id' => 1373,
                'zone_id' => 330727,
                'name' => '磐安县',
                'parent_id' => 330700,
                'level' => 3,
            ),
            373 => 
            array (
                'id' => 1374,
                'zone_id' => 330781,
                'name' => '兰溪市',
                'parent_id' => 330700,
                'level' => 3,
            ),
            374 => 
            array (
                'id' => 1375,
                'zone_id' => 330782,
                'name' => '义乌市',
                'parent_id' => 330700,
                'level' => 3,
            ),
            375 => 
            array (
                'id' => 1376,
                'zone_id' => 330783,
                'name' => '东阳市',
                'parent_id' => 330700,
                'level' => 3,
            ),
            376 => 
            array (
                'id' => 1377,
                'zone_id' => 330784,
                'name' => '永康市',
                'parent_id' => 330700,
                'level' => 3,
            ),
            377 => 
            array (
                'id' => 1378,
                'zone_id' => 330801,
                'name' => '市辖区',
                'parent_id' => 330800,
                'level' => 3,
            ),
            378 => 
            array (
                'id' => 1379,
                'zone_id' => 330802,
                'name' => '柯城区',
                'parent_id' => 330800,
                'level' => 3,
            ),
            379 => 
            array (
                'id' => 1380,
                'zone_id' => 330803,
                'name' => '衢江区',
                'parent_id' => 330800,
                'level' => 3,
            ),
            380 => 
            array (
                'id' => 1381,
                'zone_id' => 330822,
                'name' => '常山县',
                'parent_id' => 330800,
                'level' => 3,
            ),
            381 => 
            array (
                'id' => 1382,
                'zone_id' => 330824,
                'name' => '开化县',
                'parent_id' => 330800,
                'level' => 3,
            ),
            382 => 
            array (
                'id' => 1383,
                'zone_id' => 330825,
                'name' => '龙游县',
                'parent_id' => 330800,
                'level' => 3,
            ),
            383 => 
            array (
                'id' => 1384,
                'zone_id' => 330881,
                'name' => '江山市',
                'parent_id' => 330800,
                'level' => 3,
            ),
            384 => 
            array (
                'id' => 1385,
                'zone_id' => 330901,
                'name' => '市辖区',
                'parent_id' => 330900,
                'level' => 3,
            ),
            385 => 
            array (
                'id' => 1386,
                'zone_id' => 330902,
                'name' => '定海区',
                'parent_id' => 330900,
                'level' => 3,
            ),
            386 => 
            array (
                'id' => 1387,
                'zone_id' => 330903,
                'name' => '普陀区',
                'parent_id' => 330900,
                'level' => 3,
            ),
            387 => 
            array (
                'id' => 1388,
                'zone_id' => 330921,
                'name' => '岱山县',
                'parent_id' => 330900,
                'level' => 3,
            ),
            388 => 
            array (
                'id' => 1389,
                'zone_id' => 330922,
                'name' => '嵊泗县',
                'parent_id' => 330900,
                'level' => 3,
            ),
            389 => 
            array (
                'id' => 1390,
                'zone_id' => 331001,
                'name' => '市辖区',
                'parent_id' => 331000,
                'level' => 3,
            ),
            390 => 
            array (
                'id' => 1391,
                'zone_id' => 331002,
                'name' => '椒江区',
                'parent_id' => 331000,
                'level' => 3,
            ),
            391 => 
            array (
                'id' => 1392,
                'zone_id' => 331003,
                'name' => '黄岩区',
                'parent_id' => 331000,
                'level' => 3,
            ),
            392 => 
            array (
                'id' => 1393,
                'zone_id' => 331004,
                'name' => '路桥区',
                'parent_id' => 331000,
                'level' => 3,
            ),
            393 => 
            array (
                'id' => 1394,
                'zone_id' => 331021,
                'name' => '玉环县',
                'parent_id' => 331000,
                'level' => 3,
            ),
            394 => 
            array (
                'id' => 1395,
                'zone_id' => 331022,
                'name' => '三门县',
                'parent_id' => 331000,
                'level' => 3,
            ),
            395 => 
            array (
                'id' => 1396,
                'zone_id' => 331023,
                'name' => '天台县',
                'parent_id' => 331000,
                'level' => 3,
            ),
            396 => 
            array (
                'id' => 1397,
                'zone_id' => 331024,
                'name' => '仙居县',
                'parent_id' => 331000,
                'level' => 3,
            ),
            397 => 
            array (
                'id' => 1398,
                'zone_id' => 331081,
                'name' => '温岭市',
                'parent_id' => 331000,
                'level' => 3,
            ),
            398 => 
            array (
                'id' => 1399,
                'zone_id' => 331082,
                'name' => '临海市',
                'parent_id' => 331000,
                'level' => 3,
            ),
            399 => 
            array (
                'id' => 1400,
                'zone_id' => 331101,
                'name' => '市辖区',
                'parent_id' => 331100,
                'level' => 3,
            ),
            400 => 
            array (
                'id' => 1401,
                'zone_id' => 331102,
                'name' => '莲都区',
                'parent_id' => 331100,
                'level' => 3,
            ),
            401 => 
            array (
                'id' => 1402,
                'zone_id' => 331121,
                'name' => '青田县',
                'parent_id' => 331100,
                'level' => 3,
            ),
            402 => 
            array (
                'id' => 1403,
                'zone_id' => 331122,
                'name' => '缙云县',
                'parent_id' => 331100,
                'level' => 3,
            ),
            403 => 
            array (
                'id' => 1404,
                'zone_id' => 331123,
                'name' => '遂昌县',
                'parent_id' => 331100,
                'level' => 3,
            ),
            404 => 
            array (
                'id' => 1405,
                'zone_id' => 331124,
                'name' => '松阳县',
                'parent_id' => 331100,
                'level' => 3,
            ),
            405 => 
            array (
                'id' => 1406,
                'zone_id' => 331125,
                'name' => '云和县',
                'parent_id' => 331100,
                'level' => 3,
            ),
            406 => 
            array (
                'id' => 1407,
                'zone_id' => 331126,
                'name' => '庆元县',
                'parent_id' => 331100,
                'level' => 3,
            ),
            407 => 
            array (
                'id' => 1408,
                'zone_id' => 331127,
                'name' => '景宁畲族自治县',
                'parent_id' => 331100,
                'level' => 3,
            ),
            408 => 
            array (
                'id' => 1409,
                'zone_id' => 331181,
                'name' => '龙泉市',
                'parent_id' => 331100,
                'level' => 3,
            ),
            409 => 
            array (
                'id' => 1410,
                'zone_id' => 340101,
                'name' => '市辖区',
                'parent_id' => 340100,
                'level' => 3,
            ),
            410 => 
            array (
                'id' => 1411,
                'zone_id' => 340102,
                'name' => '瑶海区',
                'parent_id' => 340100,
                'level' => 3,
            ),
            411 => 
            array (
                'id' => 1412,
                'zone_id' => 340103,
                'name' => '庐阳区',
                'parent_id' => 340100,
                'level' => 3,
            ),
            412 => 
            array (
                'id' => 1413,
                'zone_id' => 340104,
                'name' => '蜀山区',
                'parent_id' => 340100,
                'level' => 3,
            ),
            413 => 
            array (
                'id' => 1414,
                'zone_id' => 340111,
                'name' => '包河区',
                'parent_id' => 340100,
                'level' => 3,
            ),
            414 => 
            array (
                'id' => 1415,
                'zone_id' => 340121,
                'name' => '长丰县',
                'parent_id' => 340100,
                'level' => 3,
            ),
            415 => 
            array (
                'id' => 1416,
                'zone_id' => 340122,
                'name' => '肥东县',
                'parent_id' => 340100,
                'level' => 3,
            ),
            416 => 
            array (
                'id' => 1417,
                'zone_id' => 340123,
                'name' => '肥西县',
                'parent_id' => 340100,
                'level' => 3,
            ),
            417 => 
            array (
                'id' => 1418,
                'zone_id' => 340201,
                'name' => '市辖区',
                'parent_id' => 340200,
                'level' => 3,
            ),
            418 => 
            array (
                'id' => 1419,
                'zone_id' => 340202,
                'name' => '镜湖区',
                'parent_id' => 340200,
                'level' => 3,
            ),
            419 => 
            array (
                'id' => 1420,
                'zone_id' => 340203,
                'name' => '马塘区',
                'parent_id' => 340200,
                'level' => 3,
            ),
            420 => 
            array (
                'id' => 1421,
                'zone_id' => 340204,
                'name' => '新芜区',
                'parent_id' => 340200,
                'level' => 3,
            ),
            421 => 
            array (
                'id' => 1422,
                'zone_id' => 340207,
                'name' => '鸠江区',
                'parent_id' => 340200,
                'level' => 3,
            ),
            422 => 
            array (
                'id' => 1423,
                'zone_id' => 340221,
                'name' => '芜湖县',
                'parent_id' => 340200,
                'level' => 3,
            ),
            423 => 
            array (
                'id' => 1424,
                'zone_id' => 340222,
                'name' => '繁昌县',
                'parent_id' => 340200,
                'level' => 3,
            ),
            424 => 
            array (
                'id' => 1425,
                'zone_id' => 340223,
                'name' => '南陵县',
                'parent_id' => 340200,
                'level' => 3,
            ),
            425 => 
            array (
                'id' => 1426,
                'zone_id' => 340301,
                'name' => '市辖区',
                'parent_id' => 340300,
                'level' => 3,
            ),
            426 => 
            array (
                'id' => 1427,
                'zone_id' => 340302,
                'name' => '龙子湖区',
                'parent_id' => 340300,
                'level' => 3,
            ),
            427 => 
            array (
                'id' => 1428,
                'zone_id' => 340303,
                'name' => '蚌山区',
                'parent_id' => 340300,
                'level' => 3,
            ),
            428 => 
            array (
                'id' => 1429,
                'zone_id' => 340304,
                'name' => '禹会区',
                'parent_id' => 340300,
                'level' => 3,
            ),
            429 => 
            array (
                'id' => 1430,
                'zone_id' => 340311,
                'name' => '淮上区',
                'parent_id' => 340300,
                'level' => 3,
            ),
            430 => 
            array (
                'id' => 1431,
                'zone_id' => 340321,
                'name' => '怀远县',
                'parent_id' => 340300,
                'level' => 3,
            ),
            431 => 
            array (
                'id' => 1432,
                'zone_id' => 340322,
                'name' => '五河县',
                'parent_id' => 340300,
                'level' => 3,
            ),
            432 => 
            array (
                'id' => 1433,
                'zone_id' => 340323,
                'name' => '固镇县',
                'parent_id' => 340300,
                'level' => 3,
            ),
            433 => 
            array (
                'id' => 1434,
                'zone_id' => 340401,
                'name' => '市辖区',
                'parent_id' => 340400,
                'level' => 3,
            ),
            434 => 
            array (
                'id' => 1435,
                'zone_id' => 340402,
                'name' => '大通区',
                'parent_id' => 340400,
                'level' => 3,
            ),
            435 => 
            array (
                'id' => 1436,
                'zone_id' => 340403,
                'name' => '田家庵区',
                'parent_id' => 340400,
                'level' => 3,
            ),
            436 => 
            array (
                'id' => 1437,
                'zone_id' => 340404,
                'name' => '谢家集区',
                'parent_id' => 340400,
                'level' => 3,
            ),
            437 => 
            array (
                'id' => 1438,
                'zone_id' => 340405,
                'name' => '八公山区',
                'parent_id' => 340400,
                'level' => 3,
            ),
            438 => 
            array (
                'id' => 1439,
                'zone_id' => 340406,
                'name' => '潘集区',
                'parent_id' => 340400,
                'level' => 3,
            ),
            439 => 
            array (
                'id' => 1440,
                'zone_id' => 340421,
                'name' => '凤台县',
                'parent_id' => 340400,
                'level' => 3,
            ),
            440 => 
            array (
                'id' => 1441,
                'zone_id' => 340501,
                'name' => '市辖区',
                'parent_id' => 340500,
                'level' => 3,
            ),
            441 => 
            array (
                'id' => 1442,
                'zone_id' => 340502,
                'name' => '金家庄区',
                'parent_id' => 340500,
                'level' => 3,
            ),
            442 => 
            array (
                'id' => 1443,
                'zone_id' => 340503,
                'name' => '花山区',
                'parent_id' => 340500,
                'level' => 3,
            ),
            443 => 
            array (
                'id' => 1444,
                'zone_id' => 340504,
                'name' => '雨山区',
                'parent_id' => 340500,
                'level' => 3,
            ),
            444 => 
            array (
                'id' => 1445,
                'zone_id' => 340521,
                'name' => '当涂县',
                'parent_id' => 340500,
                'level' => 3,
            ),
            445 => 
            array (
                'id' => 1446,
                'zone_id' => 340601,
                'name' => '市辖区',
                'parent_id' => 340600,
                'level' => 3,
            ),
            446 => 
            array (
                'id' => 1447,
                'zone_id' => 340602,
                'name' => '杜集区',
                'parent_id' => 340600,
                'level' => 3,
            ),
            447 => 
            array (
                'id' => 1448,
                'zone_id' => 340603,
                'name' => '相山区',
                'parent_id' => 340600,
                'level' => 3,
            ),
            448 => 
            array (
                'id' => 1449,
                'zone_id' => 340604,
                'name' => '烈山区',
                'parent_id' => 340600,
                'level' => 3,
            ),
            449 => 
            array (
                'id' => 1450,
                'zone_id' => 340621,
                'name' => '濉溪县',
                'parent_id' => 340600,
                'level' => 3,
            ),
            450 => 
            array (
                'id' => 1451,
                'zone_id' => 340701,
                'name' => '市辖区',
                'parent_id' => 340700,
                'level' => 3,
            ),
            451 => 
            array (
                'id' => 1452,
                'zone_id' => 340702,
                'name' => '铜官山区',
                'parent_id' => 340700,
                'level' => 3,
            ),
            452 => 
            array (
                'id' => 1453,
                'zone_id' => 340703,
                'name' => '狮子山区',
                'parent_id' => 340700,
                'level' => 3,
            ),
            453 => 
            array (
                'id' => 1454,
                'zone_id' => 340711,
                'name' => '郊　区',
                'parent_id' => 340700,
                'level' => 3,
            ),
            454 => 
            array (
                'id' => 1455,
                'zone_id' => 340721,
                'name' => '铜陵县',
                'parent_id' => 340700,
                'level' => 3,
            ),
            455 => 
            array (
                'id' => 1456,
                'zone_id' => 340801,
                'name' => '市辖区',
                'parent_id' => 340800,
                'level' => 3,
            ),
            456 => 
            array (
                'id' => 1457,
                'zone_id' => 340802,
                'name' => '迎江区',
                'parent_id' => 340800,
                'level' => 3,
            ),
            457 => 
            array (
                'id' => 1458,
                'zone_id' => 340803,
                'name' => '大观区',
                'parent_id' => 340800,
                'level' => 3,
            ),
            458 => 
            array (
                'id' => 1459,
                'zone_id' => 340811,
                'name' => '郊　区',
                'parent_id' => 340800,
                'level' => 3,
            ),
            459 => 
            array (
                'id' => 1460,
                'zone_id' => 340822,
                'name' => '怀宁县',
                'parent_id' => 340800,
                'level' => 3,
            ),
            460 => 
            array (
                'id' => 1461,
                'zone_id' => 340823,
                'name' => '枞阳县',
                'parent_id' => 340800,
                'level' => 3,
            ),
            461 => 
            array (
                'id' => 1462,
                'zone_id' => 340824,
                'name' => '潜山县',
                'parent_id' => 340800,
                'level' => 3,
            ),
            462 => 
            array (
                'id' => 1463,
                'zone_id' => 340825,
                'name' => '太湖县',
                'parent_id' => 340800,
                'level' => 3,
            ),
            463 => 
            array (
                'id' => 1464,
                'zone_id' => 340826,
                'name' => '宿松县',
                'parent_id' => 340800,
                'level' => 3,
            ),
            464 => 
            array (
                'id' => 1465,
                'zone_id' => 340827,
                'name' => '望江县',
                'parent_id' => 340800,
                'level' => 3,
            ),
            465 => 
            array (
                'id' => 1466,
                'zone_id' => 340828,
                'name' => '岳西县',
                'parent_id' => 340800,
                'level' => 3,
            ),
            466 => 
            array (
                'id' => 1467,
                'zone_id' => 340881,
                'name' => '桐城市',
                'parent_id' => 340800,
                'level' => 3,
            ),
            467 => 
            array (
                'id' => 1468,
                'zone_id' => 341001,
                'name' => '市辖区',
                'parent_id' => 341000,
                'level' => 3,
            ),
            468 => 
            array (
                'id' => 1469,
                'zone_id' => 341002,
                'name' => '屯溪区',
                'parent_id' => 341000,
                'level' => 3,
            ),
            469 => 
            array (
                'id' => 1470,
                'zone_id' => 341003,
                'name' => '黄山区',
                'parent_id' => 341000,
                'level' => 3,
            ),
            470 => 
            array (
                'id' => 1471,
                'zone_id' => 341004,
                'name' => '徽州区',
                'parent_id' => 341000,
                'level' => 3,
            ),
            471 => 
            array (
                'id' => 1472,
                'zone_id' => 341021,
                'name' => '歙　县',
                'parent_id' => 341000,
                'level' => 3,
            ),
            472 => 
            array (
                'id' => 1473,
                'zone_id' => 341022,
                'name' => '休宁县',
                'parent_id' => 341000,
                'level' => 3,
            ),
            473 => 
            array (
                'id' => 1474,
                'zone_id' => 341023,
                'name' => '黟　县',
                'parent_id' => 341000,
                'level' => 3,
            ),
            474 => 
            array (
                'id' => 1475,
                'zone_id' => 341024,
                'name' => '祁门县',
                'parent_id' => 341000,
                'level' => 3,
            ),
            475 => 
            array (
                'id' => 1476,
                'zone_id' => 341101,
                'name' => '市辖区',
                'parent_id' => 341100,
                'level' => 3,
            ),
            476 => 
            array (
                'id' => 1477,
                'zone_id' => 341102,
                'name' => '琅琊区',
                'parent_id' => 341100,
                'level' => 3,
            ),
            477 => 
            array (
                'id' => 1478,
                'zone_id' => 341103,
                'name' => '南谯区',
                'parent_id' => 341100,
                'level' => 3,
            ),
            478 => 
            array (
                'id' => 1479,
                'zone_id' => 341122,
                'name' => '来安县',
                'parent_id' => 341100,
                'level' => 3,
            ),
            479 => 
            array (
                'id' => 1480,
                'zone_id' => 341124,
                'name' => '全椒县',
                'parent_id' => 341100,
                'level' => 3,
            ),
            480 => 
            array (
                'id' => 1481,
                'zone_id' => 341125,
                'name' => '定远县',
                'parent_id' => 341100,
                'level' => 3,
            ),
            481 => 
            array (
                'id' => 1482,
                'zone_id' => 341126,
                'name' => '凤阳县',
                'parent_id' => 341100,
                'level' => 3,
            ),
            482 => 
            array (
                'id' => 1483,
                'zone_id' => 341181,
                'name' => '天长市',
                'parent_id' => 341100,
                'level' => 3,
            ),
            483 => 
            array (
                'id' => 1484,
                'zone_id' => 341182,
                'name' => '明光市',
                'parent_id' => 341100,
                'level' => 3,
            ),
            484 => 
            array (
                'id' => 1485,
                'zone_id' => 341201,
                'name' => '市辖区',
                'parent_id' => 341200,
                'level' => 3,
            ),
            485 => 
            array (
                'id' => 1486,
                'zone_id' => 341202,
                'name' => '颍州区',
                'parent_id' => 341200,
                'level' => 3,
            ),
            486 => 
            array (
                'id' => 1487,
                'zone_id' => 341203,
                'name' => '颍东区',
                'parent_id' => 341200,
                'level' => 3,
            ),
            487 => 
            array (
                'id' => 1488,
                'zone_id' => 341204,
                'name' => '颍泉区',
                'parent_id' => 341200,
                'level' => 3,
            ),
            488 => 
            array (
                'id' => 1489,
                'zone_id' => 341221,
                'name' => '临泉县',
                'parent_id' => 341200,
                'level' => 3,
            ),
            489 => 
            array (
                'id' => 1490,
                'zone_id' => 341222,
                'name' => '太和县',
                'parent_id' => 341200,
                'level' => 3,
            ),
            490 => 
            array (
                'id' => 1491,
                'zone_id' => 341225,
                'name' => '阜南县',
                'parent_id' => 341200,
                'level' => 3,
            ),
            491 => 
            array (
                'id' => 1492,
                'zone_id' => 341226,
                'name' => '颍上县',
                'parent_id' => 341200,
                'level' => 3,
            ),
            492 => 
            array (
                'id' => 1493,
                'zone_id' => 341282,
                'name' => '界首市',
                'parent_id' => 341200,
                'level' => 3,
            ),
            493 => 
            array (
                'id' => 1494,
                'zone_id' => 341301,
                'name' => '市辖区',
                'parent_id' => 341300,
                'level' => 3,
            ),
            494 => 
            array (
                'id' => 1495,
                'zone_id' => 341302,
                'name' => '墉桥区',
                'parent_id' => 341300,
                'level' => 3,
            ),
            495 => 
            array (
                'id' => 1496,
                'zone_id' => 341321,
                'name' => '砀山县',
                'parent_id' => 341300,
                'level' => 3,
            ),
            496 => 
            array (
                'id' => 1497,
                'zone_id' => 341322,
                'name' => '萧　县',
                'parent_id' => 341300,
                'level' => 3,
            ),
            497 => 
            array (
                'id' => 1498,
                'zone_id' => 341323,
                'name' => '灵璧县',
                'parent_id' => 341300,
                'level' => 3,
            ),
            498 => 
            array (
                'id' => 1499,
                'zone_id' => 341324,
                'name' => '泗　县',
                'parent_id' => 341300,
                'level' => 3,
            ),
            499 => 
            array (
                'id' => 1500,
                'zone_id' => 341401,
                'name' => '市辖区',
                'parent_id' => 341400,
                'level' => 3,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'zone_id' => 341402,
                'name' => '居巢区',
                'parent_id' => 341400,
                'level' => 3,
            ),
            1 => 
            array (
                'id' => 1502,
                'zone_id' => 341421,
                'name' => '庐江县',
                'parent_id' => 341400,
                'level' => 3,
            ),
            2 => 
            array (
                'id' => 1503,
                'zone_id' => 341422,
                'name' => '无为县',
                'parent_id' => 341400,
                'level' => 3,
            ),
            3 => 
            array (
                'id' => 1504,
                'zone_id' => 341423,
                'name' => '含山县',
                'parent_id' => 341400,
                'level' => 3,
            ),
            4 => 
            array (
                'id' => 1505,
                'zone_id' => 341424,
                'name' => '和　县',
                'parent_id' => 341400,
                'level' => 3,
            ),
            5 => 
            array (
                'id' => 1506,
                'zone_id' => 341501,
                'name' => '市辖区',
                'parent_id' => 341500,
                'level' => 3,
            ),
            6 => 
            array (
                'id' => 1507,
                'zone_id' => 341502,
                'name' => '金安区',
                'parent_id' => 341500,
                'level' => 3,
            ),
            7 => 
            array (
                'id' => 1508,
                'zone_id' => 341503,
                'name' => '裕安区',
                'parent_id' => 341500,
                'level' => 3,
            ),
            8 => 
            array (
                'id' => 1509,
                'zone_id' => 341521,
                'name' => '寿　县',
                'parent_id' => 341500,
                'level' => 3,
            ),
            9 => 
            array (
                'id' => 1510,
                'zone_id' => 341522,
                'name' => '霍邱县',
                'parent_id' => 341500,
                'level' => 3,
            ),
            10 => 
            array (
                'id' => 1511,
                'zone_id' => 341523,
                'name' => '舒城县',
                'parent_id' => 341500,
                'level' => 3,
            ),
            11 => 
            array (
                'id' => 1512,
                'zone_id' => 341524,
                'name' => '金寨县',
                'parent_id' => 341500,
                'level' => 3,
            ),
            12 => 
            array (
                'id' => 1513,
                'zone_id' => 341525,
                'name' => '霍山县',
                'parent_id' => 341500,
                'level' => 3,
            ),
            13 => 
            array (
                'id' => 1514,
                'zone_id' => 341601,
                'name' => '市辖区',
                'parent_id' => 341600,
                'level' => 3,
            ),
            14 => 
            array (
                'id' => 1515,
                'zone_id' => 341602,
                'name' => '谯城区',
                'parent_id' => 341600,
                'level' => 3,
            ),
            15 => 
            array (
                'id' => 1516,
                'zone_id' => 341621,
                'name' => '涡阳县',
                'parent_id' => 341600,
                'level' => 3,
            ),
            16 => 
            array (
                'id' => 1517,
                'zone_id' => 341622,
                'name' => '蒙城县',
                'parent_id' => 341600,
                'level' => 3,
            ),
            17 => 
            array (
                'id' => 1518,
                'zone_id' => 341623,
                'name' => '利辛县',
                'parent_id' => 341600,
                'level' => 3,
            ),
            18 => 
            array (
                'id' => 1519,
                'zone_id' => 341701,
                'name' => '市辖区',
                'parent_id' => 341700,
                'level' => 3,
            ),
            19 => 
            array (
                'id' => 1520,
                'zone_id' => 341702,
                'name' => '贵池区',
                'parent_id' => 341700,
                'level' => 3,
            ),
            20 => 
            array (
                'id' => 1521,
                'zone_id' => 341721,
                'name' => '东至县',
                'parent_id' => 341700,
                'level' => 3,
            ),
            21 => 
            array (
                'id' => 1522,
                'zone_id' => 341722,
                'name' => '石台县',
                'parent_id' => 341700,
                'level' => 3,
            ),
            22 => 
            array (
                'id' => 1523,
                'zone_id' => 341723,
                'name' => '青阳县',
                'parent_id' => 341700,
                'level' => 3,
            ),
            23 => 
            array (
                'id' => 1524,
                'zone_id' => 341801,
                'name' => '市辖区',
                'parent_id' => 341800,
                'level' => 3,
            ),
            24 => 
            array (
                'id' => 1525,
                'zone_id' => 341802,
                'name' => '宣州区',
                'parent_id' => 341800,
                'level' => 3,
            ),
            25 => 
            array (
                'id' => 1526,
                'zone_id' => 341821,
                'name' => '郎溪县',
                'parent_id' => 341800,
                'level' => 3,
            ),
            26 => 
            array (
                'id' => 1527,
                'zone_id' => 341822,
                'name' => '广德县',
                'parent_id' => 341800,
                'level' => 3,
            ),
            27 => 
            array (
                'id' => 1528,
                'zone_id' => 341823,
                'name' => '泾　县',
                'parent_id' => 341800,
                'level' => 3,
            ),
            28 => 
            array (
                'id' => 1529,
                'zone_id' => 341824,
                'name' => '绩溪县',
                'parent_id' => 341800,
                'level' => 3,
            ),
            29 => 
            array (
                'id' => 1530,
                'zone_id' => 341825,
                'name' => '旌德县',
                'parent_id' => 341800,
                'level' => 3,
            ),
            30 => 
            array (
                'id' => 1531,
                'zone_id' => 341881,
                'name' => '宁国市',
                'parent_id' => 341800,
                'level' => 3,
            ),
            31 => 
            array (
                'id' => 1532,
                'zone_id' => 350101,
                'name' => '市辖区',
                'parent_id' => 350100,
                'level' => 3,
            ),
            32 => 
            array (
                'id' => 1533,
                'zone_id' => 350102,
                'name' => '鼓楼区',
                'parent_id' => 350100,
                'level' => 3,
            ),
            33 => 
            array (
                'id' => 1534,
                'zone_id' => 350103,
                'name' => '台江区',
                'parent_id' => 350100,
                'level' => 3,
            ),
            34 => 
            array (
                'id' => 1535,
                'zone_id' => 350104,
                'name' => '仓山区',
                'parent_id' => 350100,
                'level' => 3,
            ),
            35 => 
            array (
                'id' => 1536,
                'zone_id' => 350105,
                'name' => '马尾区',
                'parent_id' => 350100,
                'level' => 3,
            ),
            36 => 
            array (
                'id' => 1537,
                'zone_id' => 350111,
                'name' => '晋安区',
                'parent_id' => 350100,
                'level' => 3,
            ),
            37 => 
            array (
                'id' => 1538,
                'zone_id' => 350121,
                'name' => '闽侯县',
                'parent_id' => 350100,
                'level' => 3,
            ),
            38 => 
            array (
                'id' => 1539,
                'zone_id' => 350122,
                'name' => '连江县',
                'parent_id' => 350100,
                'level' => 3,
            ),
            39 => 
            array (
                'id' => 1540,
                'zone_id' => 350123,
                'name' => '罗源县',
                'parent_id' => 350100,
                'level' => 3,
            ),
            40 => 
            array (
                'id' => 1541,
                'zone_id' => 350124,
                'name' => '闽清县',
                'parent_id' => 350100,
                'level' => 3,
            ),
            41 => 
            array (
                'id' => 1542,
                'zone_id' => 350125,
                'name' => '永泰县',
                'parent_id' => 350100,
                'level' => 3,
            ),
            42 => 
            array (
                'id' => 1543,
                'zone_id' => 350128,
                'name' => '平潭县',
                'parent_id' => 350100,
                'level' => 3,
            ),
            43 => 
            array (
                'id' => 1544,
                'zone_id' => 350181,
                'name' => '福清市',
                'parent_id' => 350100,
                'level' => 3,
            ),
            44 => 
            array (
                'id' => 1545,
                'zone_id' => 350182,
                'name' => '长乐市',
                'parent_id' => 350100,
                'level' => 3,
            ),
            45 => 
            array (
                'id' => 1546,
                'zone_id' => 350201,
                'name' => '市辖区',
                'parent_id' => 350200,
                'level' => 3,
            ),
            46 => 
            array (
                'id' => 1547,
                'zone_id' => 350203,
                'name' => '思明区',
                'parent_id' => 350200,
                'level' => 3,
            ),
            47 => 
            array (
                'id' => 1548,
                'zone_id' => 350205,
                'name' => '海沧区',
                'parent_id' => 350200,
                'level' => 3,
            ),
            48 => 
            array (
                'id' => 1549,
                'zone_id' => 350206,
                'name' => '湖里区',
                'parent_id' => 350200,
                'level' => 3,
            ),
            49 => 
            array (
                'id' => 1550,
                'zone_id' => 350211,
                'name' => '集美区',
                'parent_id' => 350200,
                'level' => 3,
            ),
            50 => 
            array (
                'id' => 1551,
                'zone_id' => 350212,
                'name' => '同安区',
                'parent_id' => 350200,
                'level' => 3,
            ),
            51 => 
            array (
                'id' => 1552,
                'zone_id' => 350213,
                'name' => '翔安区',
                'parent_id' => 350200,
                'level' => 3,
            ),
            52 => 
            array (
                'id' => 1553,
                'zone_id' => 350301,
                'name' => '市辖区',
                'parent_id' => 350300,
                'level' => 3,
            ),
            53 => 
            array (
                'id' => 1554,
                'zone_id' => 350302,
                'name' => '城厢区',
                'parent_id' => 350300,
                'level' => 3,
            ),
            54 => 
            array (
                'id' => 1555,
                'zone_id' => 350303,
                'name' => '涵江区',
                'parent_id' => 350300,
                'level' => 3,
            ),
            55 => 
            array (
                'id' => 1556,
                'zone_id' => 350304,
                'name' => '荔城区',
                'parent_id' => 350300,
                'level' => 3,
            ),
            56 => 
            array (
                'id' => 1557,
                'zone_id' => 350305,
                'name' => '秀屿区',
                'parent_id' => 350300,
                'level' => 3,
            ),
            57 => 
            array (
                'id' => 1558,
                'zone_id' => 350322,
                'name' => '仙游县',
                'parent_id' => 350300,
                'level' => 3,
            ),
            58 => 
            array (
                'id' => 1559,
                'zone_id' => 350401,
                'name' => '市辖区',
                'parent_id' => 350400,
                'level' => 3,
            ),
            59 => 
            array (
                'id' => 1560,
                'zone_id' => 350402,
                'name' => '梅列区',
                'parent_id' => 350400,
                'level' => 3,
            ),
            60 => 
            array (
                'id' => 1561,
                'zone_id' => 350403,
                'name' => '三元区',
                'parent_id' => 350400,
                'level' => 3,
            ),
            61 => 
            array (
                'id' => 1562,
                'zone_id' => 350421,
                'name' => '明溪县',
                'parent_id' => 350400,
                'level' => 3,
            ),
            62 => 
            array (
                'id' => 1563,
                'zone_id' => 350423,
                'name' => '清流县',
                'parent_id' => 350400,
                'level' => 3,
            ),
            63 => 
            array (
                'id' => 1564,
                'zone_id' => 350424,
                'name' => '宁化县',
                'parent_id' => 350400,
                'level' => 3,
            ),
            64 => 
            array (
                'id' => 1565,
                'zone_id' => 350425,
                'name' => '大田县',
                'parent_id' => 350400,
                'level' => 3,
            ),
            65 => 
            array (
                'id' => 1566,
                'zone_id' => 350426,
                'name' => '尤溪县',
                'parent_id' => 350400,
                'level' => 3,
            ),
            66 => 
            array (
                'id' => 1567,
                'zone_id' => 350427,
                'name' => '沙　县',
                'parent_id' => 350400,
                'level' => 3,
            ),
            67 => 
            array (
                'id' => 1568,
                'zone_id' => 350428,
                'name' => '将乐县',
                'parent_id' => 350400,
                'level' => 3,
            ),
            68 => 
            array (
                'id' => 1569,
                'zone_id' => 350429,
                'name' => '泰宁县',
                'parent_id' => 350400,
                'level' => 3,
            ),
            69 => 
            array (
                'id' => 1570,
                'zone_id' => 350430,
                'name' => '建宁县',
                'parent_id' => 350400,
                'level' => 3,
            ),
            70 => 
            array (
                'id' => 1571,
                'zone_id' => 350481,
                'name' => '永安市',
                'parent_id' => 350400,
                'level' => 3,
            ),
            71 => 
            array (
                'id' => 1572,
                'zone_id' => 350501,
                'name' => '市辖区',
                'parent_id' => 350500,
                'level' => 3,
            ),
            72 => 
            array (
                'id' => 1573,
                'zone_id' => 350502,
                'name' => '鲤城区',
                'parent_id' => 350500,
                'level' => 3,
            ),
            73 => 
            array (
                'id' => 1574,
                'zone_id' => 350503,
                'name' => '丰泽区',
                'parent_id' => 350500,
                'level' => 3,
            ),
            74 => 
            array (
                'id' => 1575,
                'zone_id' => 350504,
                'name' => '洛江区',
                'parent_id' => 350500,
                'level' => 3,
            ),
            75 => 
            array (
                'id' => 1576,
                'zone_id' => 350505,
                'name' => '泉港区',
                'parent_id' => 350500,
                'level' => 3,
            ),
            76 => 
            array (
                'id' => 1577,
                'zone_id' => 350521,
                'name' => '惠安县',
                'parent_id' => 350500,
                'level' => 3,
            ),
            77 => 
            array (
                'id' => 1578,
                'zone_id' => 350524,
                'name' => '安溪县',
                'parent_id' => 350500,
                'level' => 3,
            ),
            78 => 
            array (
                'id' => 1579,
                'zone_id' => 350525,
                'name' => '永春县',
                'parent_id' => 350500,
                'level' => 3,
            ),
            79 => 
            array (
                'id' => 1580,
                'zone_id' => 350526,
                'name' => '德化县',
                'parent_id' => 350500,
                'level' => 3,
            ),
            80 => 
            array (
                'id' => 1581,
                'zone_id' => 350527,
                'name' => '金门县',
                'parent_id' => 350500,
                'level' => 3,
            ),
            81 => 
            array (
                'id' => 1582,
                'zone_id' => 350581,
                'name' => '石狮市',
                'parent_id' => 350500,
                'level' => 3,
            ),
            82 => 
            array (
                'id' => 1583,
                'zone_id' => 350582,
                'name' => '晋江市',
                'parent_id' => 350500,
                'level' => 3,
            ),
            83 => 
            array (
                'id' => 1584,
                'zone_id' => 350583,
                'name' => '南安市',
                'parent_id' => 350500,
                'level' => 3,
            ),
            84 => 
            array (
                'id' => 1585,
                'zone_id' => 350601,
                'name' => '市辖区',
                'parent_id' => 350600,
                'level' => 3,
            ),
            85 => 
            array (
                'id' => 1586,
                'zone_id' => 350602,
                'name' => '芗城区',
                'parent_id' => 350600,
                'level' => 3,
            ),
            86 => 
            array (
                'id' => 1587,
                'zone_id' => 350603,
                'name' => '龙文区',
                'parent_id' => 350600,
                'level' => 3,
            ),
            87 => 
            array (
                'id' => 1588,
                'zone_id' => 350622,
                'name' => '云霄县',
                'parent_id' => 350600,
                'level' => 3,
            ),
            88 => 
            array (
                'id' => 1589,
                'zone_id' => 350623,
                'name' => '漳浦县',
                'parent_id' => 350600,
                'level' => 3,
            ),
            89 => 
            array (
                'id' => 1590,
                'zone_id' => 350624,
                'name' => '诏安县',
                'parent_id' => 350600,
                'level' => 3,
            ),
            90 => 
            array (
                'id' => 1591,
                'zone_id' => 350625,
                'name' => '长泰县',
                'parent_id' => 350600,
                'level' => 3,
            ),
            91 => 
            array (
                'id' => 1592,
                'zone_id' => 350626,
                'name' => '东山县',
                'parent_id' => 350600,
                'level' => 3,
            ),
            92 => 
            array (
                'id' => 1593,
                'zone_id' => 350627,
                'name' => '南靖县',
                'parent_id' => 350600,
                'level' => 3,
            ),
            93 => 
            array (
                'id' => 1594,
                'zone_id' => 350628,
                'name' => '平和县',
                'parent_id' => 350600,
                'level' => 3,
            ),
            94 => 
            array (
                'id' => 1595,
                'zone_id' => 350629,
                'name' => '华安县',
                'parent_id' => 350600,
                'level' => 3,
            ),
            95 => 
            array (
                'id' => 1596,
                'zone_id' => 350681,
                'name' => '龙海市',
                'parent_id' => 350600,
                'level' => 3,
            ),
            96 => 
            array (
                'id' => 1597,
                'zone_id' => 350701,
                'name' => '市辖区',
                'parent_id' => 350700,
                'level' => 3,
            ),
            97 => 
            array (
                'id' => 1598,
                'zone_id' => 350702,
                'name' => '延平区',
                'parent_id' => 350700,
                'level' => 3,
            ),
            98 => 
            array (
                'id' => 1599,
                'zone_id' => 350721,
                'name' => '顺昌县',
                'parent_id' => 350700,
                'level' => 3,
            ),
            99 => 
            array (
                'id' => 1600,
                'zone_id' => 350722,
                'name' => '浦城县',
                'parent_id' => 350700,
                'level' => 3,
            ),
            100 => 
            array (
                'id' => 1601,
                'zone_id' => 350723,
                'name' => '光泽县',
                'parent_id' => 350700,
                'level' => 3,
            ),
            101 => 
            array (
                'id' => 1602,
                'zone_id' => 350724,
                'name' => '松溪县',
                'parent_id' => 350700,
                'level' => 3,
            ),
            102 => 
            array (
                'id' => 1603,
                'zone_id' => 350725,
                'name' => '政和县',
                'parent_id' => 350700,
                'level' => 3,
            ),
            103 => 
            array (
                'id' => 1604,
                'zone_id' => 350781,
                'name' => '邵武市',
                'parent_id' => 350700,
                'level' => 3,
            ),
            104 => 
            array (
                'id' => 1605,
                'zone_id' => 350782,
                'name' => '武夷山市',
                'parent_id' => 350700,
                'level' => 3,
            ),
            105 => 
            array (
                'id' => 1606,
                'zone_id' => 350783,
                'name' => '建瓯市',
                'parent_id' => 350700,
                'level' => 3,
            ),
            106 => 
            array (
                'id' => 1607,
                'zone_id' => 350784,
                'name' => '建阳市',
                'parent_id' => 350700,
                'level' => 3,
            ),
            107 => 
            array (
                'id' => 1608,
                'zone_id' => 350801,
                'name' => '市辖区',
                'parent_id' => 350800,
                'level' => 3,
            ),
            108 => 
            array (
                'id' => 1609,
                'zone_id' => 350802,
                'name' => '新罗区',
                'parent_id' => 350800,
                'level' => 3,
            ),
            109 => 
            array (
                'id' => 1610,
                'zone_id' => 350821,
                'name' => '长汀县',
                'parent_id' => 350800,
                'level' => 3,
            ),
            110 => 
            array (
                'id' => 1611,
                'zone_id' => 350822,
                'name' => '永定县',
                'parent_id' => 350800,
                'level' => 3,
            ),
            111 => 
            array (
                'id' => 1612,
                'zone_id' => 350823,
                'name' => '上杭县',
                'parent_id' => 350800,
                'level' => 3,
            ),
            112 => 
            array (
                'id' => 1613,
                'zone_id' => 350824,
                'name' => '武平县',
                'parent_id' => 350800,
                'level' => 3,
            ),
            113 => 
            array (
                'id' => 1614,
                'zone_id' => 350825,
                'name' => '连城县',
                'parent_id' => 350800,
                'level' => 3,
            ),
            114 => 
            array (
                'id' => 1615,
                'zone_id' => 350881,
                'name' => '漳平市',
                'parent_id' => 350800,
                'level' => 3,
            ),
            115 => 
            array (
                'id' => 1616,
                'zone_id' => 350901,
                'name' => '市辖区',
                'parent_id' => 350900,
                'level' => 3,
            ),
            116 => 
            array (
                'id' => 1617,
                'zone_id' => 350902,
                'name' => '蕉城区',
                'parent_id' => 350900,
                'level' => 3,
            ),
            117 => 
            array (
                'id' => 1618,
                'zone_id' => 350921,
                'name' => '霞浦县',
                'parent_id' => 350900,
                'level' => 3,
            ),
            118 => 
            array (
                'id' => 1619,
                'zone_id' => 350922,
                'name' => '古田县',
                'parent_id' => 350900,
                'level' => 3,
            ),
            119 => 
            array (
                'id' => 1620,
                'zone_id' => 350923,
                'name' => '屏南县',
                'parent_id' => 350900,
                'level' => 3,
            ),
            120 => 
            array (
                'id' => 1621,
                'zone_id' => 350924,
                'name' => '寿宁县',
                'parent_id' => 350900,
                'level' => 3,
            ),
            121 => 
            array (
                'id' => 1622,
                'zone_id' => 350925,
                'name' => '周宁县',
                'parent_id' => 350900,
                'level' => 3,
            ),
            122 => 
            array (
                'id' => 1623,
                'zone_id' => 350926,
                'name' => '柘荣县',
                'parent_id' => 350900,
                'level' => 3,
            ),
            123 => 
            array (
                'id' => 1624,
                'zone_id' => 350981,
                'name' => '福安市',
                'parent_id' => 350900,
                'level' => 3,
            ),
            124 => 
            array (
                'id' => 1625,
                'zone_id' => 350982,
                'name' => '福鼎市',
                'parent_id' => 350900,
                'level' => 3,
            ),
            125 => 
            array (
                'id' => 1626,
                'zone_id' => 360101,
                'name' => '市辖区',
                'parent_id' => 360100,
                'level' => 3,
            ),
            126 => 
            array (
                'id' => 1627,
                'zone_id' => 360102,
                'name' => '东湖区',
                'parent_id' => 360100,
                'level' => 3,
            ),
            127 => 
            array (
                'id' => 1628,
                'zone_id' => 360103,
                'name' => '西湖区',
                'parent_id' => 360100,
                'level' => 3,
            ),
            128 => 
            array (
                'id' => 1629,
                'zone_id' => 360104,
                'name' => '青云谱区',
                'parent_id' => 360100,
                'level' => 3,
            ),
            129 => 
            array (
                'id' => 1630,
                'zone_id' => 360105,
                'name' => '湾里区',
                'parent_id' => 360100,
                'level' => 3,
            ),
            130 => 
            array (
                'id' => 1631,
                'zone_id' => 360111,
                'name' => '青山湖区',
                'parent_id' => 360100,
                'level' => 3,
            ),
            131 => 
            array (
                'id' => 1632,
                'zone_id' => 360121,
                'name' => '南昌县',
                'parent_id' => 360100,
                'level' => 3,
            ),
            132 => 
            array (
                'id' => 1633,
                'zone_id' => 360122,
                'name' => '新建县',
                'parent_id' => 360100,
                'level' => 3,
            ),
            133 => 
            array (
                'id' => 1634,
                'zone_id' => 360123,
                'name' => '安义县',
                'parent_id' => 360100,
                'level' => 3,
            ),
            134 => 
            array (
                'id' => 1635,
                'zone_id' => 360124,
                'name' => '进贤县',
                'parent_id' => 360100,
                'level' => 3,
            ),
            135 => 
            array (
                'id' => 1636,
                'zone_id' => 360201,
                'name' => '市辖区',
                'parent_id' => 360200,
                'level' => 3,
            ),
            136 => 
            array (
                'id' => 1637,
                'zone_id' => 360202,
                'name' => '昌江区',
                'parent_id' => 360200,
                'level' => 3,
            ),
            137 => 
            array (
                'id' => 1638,
                'zone_id' => 360203,
                'name' => '珠山区',
                'parent_id' => 360200,
                'level' => 3,
            ),
            138 => 
            array (
                'id' => 1639,
                'zone_id' => 360222,
                'name' => '浮梁县',
                'parent_id' => 360200,
                'level' => 3,
            ),
            139 => 
            array (
                'id' => 1640,
                'zone_id' => 360281,
                'name' => '乐平市',
                'parent_id' => 360200,
                'level' => 3,
            ),
            140 => 
            array (
                'id' => 1641,
                'zone_id' => 360301,
                'name' => '市辖区',
                'parent_id' => 360300,
                'level' => 3,
            ),
            141 => 
            array (
                'id' => 1642,
                'zone_id' => 360302,
                'name' => '安源区',
                'parent_id' => 360300,
                'level' => 3,
            ),
            142 => 
            array (
                'id' => 1643,
                'zone_id' => 360313,
                'name' => '湘东区',
                'parent_id' => 360300,
                'level' => 3,
            ),
            143 => 
            array (
                'id' => 1644,
                'zone_id' => 360321,
                'name' => '莲花县',
                'parent_id' => 360300,
                'level' => 3,
            ),
            144 => 
            array (
                'id' => 1645,
                'zone_id' => 360322,
                'name' => '上栗县',
                'parent_id' => 360300,
                'level' => 3,
            ),
            145 => 
            array (
                'id' => 1646,
                'zone_id' => 360323,
                'name' => '芦溪县',
                'parent_id' => 360300,
                'level' => 3,
            ),
            146 => 
            array (
                'id' => 1647,
                'zone_id' => 360401,
                'name' => '市辖区',
                'parent_id' => 360400,
                'level' => 3,
            ),
            147 => 
            array (
                'id' => 1648,
                'zone_id' => 360402,
                'name' => '庐山区',
                'parent_id' => 360400,
                'level' => 3,
            ),
            148 => 
            array (
                'id' => 1649,
                'zone_id' => 360403,
                'name' => '浔阳区',
                'parent_id' => 360400,
                'level' => 3,
            ),
            149 => 
            array (
                'id' => 1650,
                'zone_id' => 360421,
                'name' => '九江县',
                'parent_id' => 360400,
                'level' => 3,
            ),
            150 => 
            array (
                'id' => 1651,
                'zone_id' => 360423,
                'name' => '武宁县',
                'parent_id' => 360400,
                'level' => 3,
            ),
            151 => 
            array (
                'id' => 1652,
                'zone_id' => 360424,
                'name' => '修水县',
                'parent_id' => 360400,
                'level' => 3,
            ),
            152 => 
            array (
                'id' => 1653,
                'zone_id' => 360425,
                'name' => '永修县',
                'parent_id' => 360400,
                'level' => 3,
            ),
            153 => 
            array (
                'id' => 1654,
                'zone_id' => 360426,
                'name' => '德安县',
                'parent_id' => 360400,
                'level' => 3,
            ),
            154 => 
            array (
                'id' => 1655,
                'zone_id' => 360427,
                'name' => '星子县',
                'parent_id' => 360400,
                'level' => 3,
            ),
            155 => 
            array (
                'id' => 1656,
                'zone_id' => 360428,
                'name' => '都昌县',
                'parent_id' => 360400,
                'level' => 3,
            ),
            156 => 
            array (
                'id' => 1657,
                'zone_id' => 360429,
                'name' => '湖口县',
                'parent_id' => 360400,
                'level' => 3,
            ),
            157 => 
            array (
                'id' => 1658,
                'zone_id' => 360430,
                'name' => '彭泽县',
                'parent_id' => 360400,
                'level' => 3,
            ),
            158 => 
            array (
                'id' => 1659,
                'zone_id' => 360481,
                'name' => '瑞昌市',
                'parent_id' => 360400,
                'level' => 3,
            ),
            159 => 
            array (
                'id' => 1660,
                'zone_id' => 360501,
                'name' => '市辖区',
                'parent_id' => 360500,
                'level' => 3,
            ),
            160 => 
            array (
                'id' => 1661,
                'zone_id' => 360502,
                'name' => '渝水区',
                'parent_id' => 360500,
                'level' => 3,
            ),
            161 => 
            array (
                'id' => 1662,
                'zone_id' => 360521,
                'name' => '分宜县',
                'parent_id' => 360500,
                'level' => 3,
            ),
            162 => 
            array (
                'id' => 1663,
                'zone_id' => 360601,
                'name' => '市辖区',
                'parent_id' => 360600,
                'level' => 3,
            ),
            163 => 
            array (
                'id' => 1664,
                'zone_id' => 360602,
                'name' => '月湖区',
                'parent_id' => 360600,
                'level' => 3,
            ),
            164 => 
            array (
                'id' => 1665,
                'zone_id' => 360622,
                'name' => '余江县',
                'parent_id' => 360600,
                'level' => 3,
            ),
            165 => 
            array (
                'id' => 1666,
                'zone_id' => 360681,
                'name' => '贵溪市',
                'parent_id' => 360600,
                'level' => 3,
            ),
            166 => 
            array (
                'id' => 1667,
                'zone_id' => 360701,
                'name' => '市辖区',
                'parent_id' => 360700,
                'level' => 3,
            ),
            167 => 
            array (
                'id' => 1668,
                'zone_id' => 360702,
                'name' => '章贡区',
                'parent_id' => 360700,
                'level' => 3,
            ),
            168 => 
            array (
                'id' => 1669,
                'zone_id' => 360721,
                'name' => '赣　县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            169 => 
            array (
                'id' => 1670,
                'zone_id' => 360722,
                'name' => '信丰县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            170 => 
            array (
                'id' => 1671,
                'zone_id' => 360723,
                'name' => '大余县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            171 => 
            array (
                'id' => 1672,
                'zone_id' => 360724,
                'name' => '上犹县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            172 => 
            array (
                'id' => 1673,
                'zone_id' => 360725,
                'name' => '崇义县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            173 => 
            array (
                'id' => 1674,
                'zone_id' => 360726,
                'name' => '安远县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            174 => 
            array (
                'id' => 1675,
                'zone_id' => 360727,
                'name' => '龙南县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            175 => 
            array (
                'id' => 1676,
                'zone_id' => 360728,
                'name' => '定南县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            176 => 
            array (
                'id' => 1677,
                'zone_id' => 360729,
                'name' => '全南县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            177 => 
            array (
                'id' => 1678,
                'zone_id' => 360730,
                'name' => '宁都县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            178 => 
            array (
                'id' => 1679,
                'zone_id' => 360731,
                'name' => '于都县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            179 => 
            array (
                'id' => 1680,
                'zone_id' => 360732,
                'name' => '兴国县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            180 => 
            array (
                'id' => 1681,
                'zone_id' => 360733,
                'name' => '会昌县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            181 => 
            array (
                'id' => 1682,
                'zone_id' => 360734,
                'name' => '寻乌县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            182 => 
            array (
                'id' => 1683,
                'zone_id' => 360735,
                'name' => '石城县',
                'parent_id' => 360700,
                'level' => 3,
            ),
            183 => 
            array (
                'id' => 1684,
                'zone_id' => 360781,
                'name' => '瑞金市',
                'parent_id' => 360700,
                'level' => 3,
            ),
            184 => 
            array (
                'id' => 1685,
                'zone_id' => 360782,
                'name' => '南康市',
                'parent_id' => 360700,
                'level' => 3,
            ),
            185 => 
            array (
                'id' => 1686,
                'zone_id' => 360801,
                'name' => '市辖区',
                'parent_id' => 360800,
                'level' => 3,
            ),
            186 => 
            array (
                'id' => 1687,
                'zone_id' => 360802,
                'name' => '吉州区',
                'parent_id' => 360800,
                'level' => 3,
            ),
            187 => 
            array (
                'id' => 1688,
                'zone_id' => 360803,
                'name' => '青原区',
                'parent_id' => 360800,
                'level' => 3,
            ),
            188 => 
            array (
                'id' => 1689,
                'zone_id' => 360821,
                'name' => '吉安县',
                'parent_id' => 360800,
                'level' => 3,
            ),
            189 => 
            array (
                'id' => 1690,
                'zone_id' => 360822,
                'name' => '吉水县',
                'parent_id' => 360800,
                'level' => 3,
            ),
            190 => 
            array (
                'id' => 1691,
                'zone_id' => 360823,
                'name' => '峡江县',
                'parent_id' => 360800,
                'level' => 3,
            ),
            191 => 
            array (
                'id' => 1692,
                'zone_id' => 360824,
                'name' => '新干县',
                'parent_id' => 360800,
                'level' => 3,
            ),
            192 => 
            array (
                'id' => 1693,
                'zone_id' => 360825,
                'name' => '永丰县',
                'parent_id' => 360800,
                'level' => 3,
            ),
            193 => 
            array (
                'id' => 1694,
                'zone_id' => 360826,
                'name' => '泰和县',
                'parent_id' => 360800,
                'level' => 3,
            ),
            194 => 
            array (
                'id' => 1695,
                'zone_id' => 360827,
                'name' => '遂川县',
                'parent_id' => 360800,
                'level' => 3,
            ),
            195 => 
            array (
                'id' => 1696,
                'zone_id' => 360828,
                'name' => '万安县',
                'parent_id' => 360800,
                'level' => 3,
            ),
            196 => 
            array (
                'id' => 1697,
                'zone_id' => 360829,
                'name' => '安福县',
                'parent_id' => 360800,
                'level' => 3,
            ),
            197 => 
            array (
                'id' => 1698,
                'zone_id' => 360830,
                'name' => '永新县',
                'parent_id' => 360800,
                'level' => 3,
            ),
            198 => 
            array (
                'id' => 1699,
                'zone_id' => 360881,
                'name' => '井冈山市',
                'parent_id' => 360800,
                'level' => 3,
            ),
            199 => 
            array (
                'id' => 1700,
                'zone_id' => 360901,
                'name' => '市辖区',
                'parent_id' => 360900,
                'level' => 3,
            ),
            200 => 
            array (
                'id' => 1701,
                'zone_id' => 360902,
                'name' => '袁州区',
                'parent_id' => 360900,
                'level' => 3,
            ),
            201 => 
            array (
                'id' => 1702,
                'zone_id' => 360921,
                'name' => '奉新县',
                'parent_id' => 360900,
                'level' => 3,
            ),
            202 => 
            array (
                'id' => 1703,
                'zone_id' => 360922,
                'name' => '万载县',
                'parent_id' => 360900,
                'level' => 3,
            ),
            203 => 
            array (
                'id' => 1704,
                'zone_id' => 360923,
                'name' => '上高县',
                'parent_id' => 360900,
                'level' => 3,
            ),
            204 => 
            array (
                'id' => 1705,
                'zone_id' => 360924,
                'name' => '宜丰县',
                'parent_id' => 360900,
                'level' => 3,
            ),
            205 => 
            array (
                'id' => 1706,
                'zone_id' => 360925,
                'name' => '靖安县',
                'parent_id' => 360900,
                'level' => 3,
            ),
            206 => 
            array (
                'id' => 1707,
                'zone_id' => 360926,
                'name' => '铜鼓县',
                'parent_id' => 360900,
                'level' => 3,
            ),
            207 => 
            array (
                'id' => 1708,
                'zone_id' => 360981,
                'name' => '丰城市',
                'parent_id' => 360900,
                'level' => 3,
            ),
            208 => 
            array (
                'id' => 1709,
                'zone_id' => 360982,
                'name' => '樟树市',
                'parent_id' => 360900,
                'level' => 3,
            ),
            209 => 
            array (
                'id' => 1710,
                'zone_id' => 360983,
                'name' => '高安市',
                'parent_id' => 360900,
                'level' => 3,
            ),
            210 => 
            array (
                'id' => 1711,
                'zone_id' => 361001,
                'name' => '市辖区',
                'parent_id' => 361000,
                'level' => 3,
            ),
            211 => 
            array (
                'id' => 1712,
                'zone_id' => 361002,
                'name' => '临川区',
                'parent_id' => 361000,
                'level' => 3,
            ),
            212 => 
            array (
                'id' => 1713,
                'zone_id' => 361021,
                'name' => '南城县',
                'parent_id' => 361000,
                'level' => 3,
            ),
            213 => 
            array (
                'id' => 1714,
                'zone_id' => 361022,
                'name' => '黎川县',
                'parent_id' => 361000,
                'level' => 3,
            ),
            214 => 
            array (
                'id' => 1715,
                'zone_id' => 361023,
                'name' => '南丰县',
                'parent_id' => 361000,
                'level' => 3,
            ),
            215 => 
            array (
                'id' => 1716,
                'zone_id' => 361024,
                'name' => '崇仁县',
                'parent_id' => 361000,
                'level' => 3,
            ),
            216 => 
            array (
                'id' => 1717,
                'zone_id' => 361025,
                'name' => '乐安县',
                'parent_id' => 361000,
                'level' => 3,
            ),
            217 => 
            array (
                'id' => 1718,
                'zone_id' => 361026,
                'name' => '宜黄县',
                'parent_id' => 361000,
                'level' => 3,
            ),
            218 => 
            array (
                'id' => 1719,
                'zone_id' => 361027,
                'name' => '金溪县',
                'parent_id' => 361000,
                'level' => 3,
            ),
            219 => 
            array (
                'id' => 1720,
                'zone_id' => 361028,
                'name' => '资溪县',
                'parent_id' => 361000,
                'level' => 3,
            ),
            220 => 
            array (
                'id' => 1721,
                'zone_id' => 361029,
                'name' => '东乡县',
                'parent_id' => 361000,
                'level' => 3,
            ),
            221 => 
            array (
                'id' => 1722,
                'zone_id' => 361030,
                'name' => '广昌县',
                'parent_id' => 361000,
                'level' => 3,
            ),
            222 => 
            array (
                'id' => 1723,
                'zone_id' => 361101,
                'name' => '市辖区',
                'parent_id' => 361100,
                'level' => 3,
            ),
            223 => 
            array (
                'id' => 1724,
                'zone_id' => 361102,
                'name' => '信州区',
                'parent_id' => 361100,
                'level' => 3,
            ),
            224 => 
            array (
                'id' => 1725,
                'zone_id' => 361121,
                'name' => '上饶县',
                'parent_id' => 361100,
                'level' => 3,
            ),
            225 => 
            array (
                'id' => 1726,
                'zone_id' => 361122,
                'name' => '广丰县',
                'parent_id' => 361100,
                'level' => 3,
            ),
            226 => 
            array (
                'id' => 1727,
                'zone_id' => 361123,
                'name' => '玉山县',
                'parent_id' => 361100,
                'level' => 3,
            ),
            227 => 
            array (
                'id' => 1728,
                'zone_id' => 361124,
                'name' => '铅山县',
                'parent_id' => 361100,
                'level' => 3,
            ),
            228 => 
            array (
                'id' => 1729,
                'zone_id' => 361125,
                'name' => '横峰县',
                'parent_id' => 361100,
                'level' => 3,
            ),
            229 => 
            array (
                'id' => 1730,
                'zone_id' => 361126,
                'name' => '弋阳县',
                'parent_id' => 361100,
                'level' => 3,
            ),
            230 => 
            array (
                'id' => 1731,
                'zone_id' => 361127,
                'name' => '余干县',
                'parent_id' => 361100,
                'level' => 3,
            ),
            231 => 
            array (
                'id' => 1732,
                'zone_id' => 361128,
                'name' => '鄱阳县',
                'parent_id' => 361100,
                'level' => 3,
            ),
            232 => 
            array (
                'id' => 1733,
                'zone_id' => 361129,
                'name' => '万年县',
                'parent_id' => 361100,
                'level' => 3,
            ),
            233 => 
            array (
                'id' => 1734,
                'zone_id' => 361130,
                'name' => '婺源县',
                'parent_id' => 361100,
                'level' => 3,
            ),
            234 => 
            array (
                'id' => 1735,
                'zone_id' => 361181,
                'name' => '德兴市',
                'parent_id' => 361100,
                'level' => 3,
            ),
            235 => 
            array (
                'id' => 1736,
                'zone_id' => 370101,
                'name' => '市辖区',
                'parent_id' => 370100,
                'level' => 3,
            ),
            236 => 
            array (
                'id' => 1737,
                'zone_id' => 370102,
                'name' => '历下区',
                'parent_id' => 370100,
                'level' => 3,
            ),
            237 => 
            array (
                'id' => 1738,
                'zone_id' => 370103,
                'name' => '市中区',
                'parent_id' => 370100,
                'level' => 3,
            ),
            238 => 
            array (
                'id' => 1739,
                'zone_id' => 370104,
                'name' => '槐荫区',
                'parent_id' => 370100,
                'level' => 3,
            ),
            239 => 
            array (
                'id' => 1740,
                'zone_id' => 370105,
                'name' => '天桥区',
                'parent_id' => 370100,
                'level' => 3,
            ),
            240 => 
            array (
                'id' => 1741,
                'zone_id' => 370112,
                'name' => '历城区',
                'parent_id' => 370100,
                'level' => 3,
            ),
            241 => 
            array (
                'id' => 1742,
                'zone_id' => 370113,
                'name' => '长清区',
                'parent_id' => 370100,
                'level' => 3,
            ),
            242 => 
            array (
                'id' => 1743,
                'zone_id' => 370124,
                'name' => '平阴县',
                'parent_id' => 370100,
                'level' => 3,
            ),
            243 => 
            array (
                'id' => 1744,
                'zone_id' => 370125,
                'name' => '济阳县',
                'parent_id' => 370100,
                'level' => 3,
            ),
            244 => 
            array (
                'id' => 1745,
                'zone_id' => 370126,
                'name' => '商河县',
                'parent_id' => 370100,
                'level' => 3,
            ),
            245 => 
            array (
                'id' => 1746,
                'zone_id' => 370181,
                'name' => '章丘市',
                'parent_id' => 370100,
                'level' => 3,
            ),
            246 => 
            array (
                'id' => 1747,
                'zone_id' => 370201,
                'name' => '市辖区',
                'parent_id' => 370200,
                'level' => 3,
            ),
            247 => 
            array (
                'id' => 1748,
                'zone_id' => 370202,
                'name' => '市南区',
                'parent_id' => 370200,
                'level' => 3,
            ),
            248 => 
            array (
                'id' => 1749,
                'zone_id' => 370203,
                'name' => '市北区',
                'parent_id' => 370200,
                'level' => 3,
            ),
            249 => 
            array (
                'id' => 1750,
                'zone_id' => 370205,
                'name' => '四方区',
                'parent_id' => 370200,
                'level' => 3,
            ),
            250 => 
            array (
                'id' => 1751,
                'zone_id' => 370211,
                'name' => '黄岛区',
                'parent_id' => 370200,
                'level' => 3,
            ),
            251 => 
            array (
                'id' => 1752,
                'zone_id' => 370212,
                'name' => '崂山区',
                'parent_id' => 370200,
                'level' => 3,
            ),
            252 => 
            array (
                'id' => 1753,
                'zone_id' => 370213,
                'name' => '李沧区',
                'parent_id' => 370200,
                'level' => 3,
            ),
            253 => 
            array (
                'id' => 1754,
                'zone_id' => 370214,
                'name' => '城阳区',
                'parent_id' => 370200,
                'level' => 3,
            ),
            254 => 
            array (
                'id' => 1755,
                'zone_id' => 370281,
                'name' => '胶州市',
                'parent_id' => 370200,
                'level' => 3,
            ),
            255 => 
            array (
                'id' => 1756,
                'zone_id' => 370282,
                'name' => '即墨市',
                'parent_id' => 370200,
                'level' => 3,
            ),
            256 => 
            array (
                'id' => 1757,
                'zone_id' => 370283,
                'name' => '平度市',
                'parent_id' => 370200,
                'level' => 3,
            ),
            257 => 
            array (
                'id' => 1758,
                'zone_id' => 370284,
                'name' => '胶南市',
                'parent_id' => 370200,
                'level' => 3,
            ),
            258 => 
            array (
                'id' => 1759,
                'zone_id' => 370285,
                'name' => '莱西市',
                'parent_id' => 370200,
                'level' => 3,
            ),
            259 => 
            array (
                'id' => 1760,
                'zone_id' => 370301,
                'name' => '市辖区',
                'parent_id' => 370300,
                'level' => 3,
            ),
            260 => 
            array (
                'id' => 1761,
                'zone_id' => 370302,
                'name' => '淄川区',
                'parent_id' => 370300,
                'level' => 3,
            ),
            261 => 
            array (
                'id' => 1762,
                'zone_id' => 370303,
                'name' => '张店区',
                'parent_id' => 370300,
                'level' => 3,
            ),
            262 => 
            array (
                'id' => 1763,
                'zone_id' => 370304,
                'name' => '博山区',
                'parent_id' => 370300,
                'level' => 3,
            ),
            263 => 
            array (
                'id' => 1764,
                'zone_id' => 370305,
                'name' => '临淄区',
                'parent_id' => 370300,
                'level' => 3,
            ),
            264 => 
            array (
                'id' => 1765,
                'zone_id' => 370306,
                'name' => '周村区',
                'parent_id' => 370300,
                'level' => 3,
            ),
            265 => 
            array (
                'id' => 1766,
                'zone_id' => 370321,
                'name' => '桓台县',
                'parent_id' => 370300,
                'level' => 3,
            ),
            266 => 
            array (
                'id' => 1767,
                'zone_id' => 370322,
                'name' => '高青县',
                'parent_id' => 370300,
                'level' => 3,
            ),
            267 => 
            array (
                'id' => 1768,
                'zone_id' => 370323,
                'name' => '沂源县',
                'parent_id' => 370300,
                'level' => 3,
            ),
            268 => 
            array (
                'id' => 1769,
                'zone_id' => 370401,
                'name' => '市辖区',
                'parent_id' => 370400,
                'level' => 3,
            ),
            269 => 
            array (
                'id' => 1770,
                'zone_id' => 370402,
                'name' => '市中区',
                'parent_id' => 370400,
                'level' => 3,
            ),
            270 => 
            array (
                'id' => 1771,
                'zone_id' => 370403,
                'name' => '薛城区',
                'parent_id' => 370400,
                'level' => 3,
            ),
            271 => 
            array (
                'id' => 1772,
                'zone_id' => 370404,
                'name' => '峄城区',
                'parent_id' => 370400,
                'level' => 3,
            ),
            272 => 
            array (
                'id' => 1773,
                'zone_id' => 370405,
                'name' => '台儿庄区',
                'parent_id' => 370400,
                'level' => 3,
            ),
            273 => 
            array (
                'id' => 1774,
                'zone_id' => 370406,
                'name' => '山亭区',
                'parent_id' => 370400,
                'level' => 3,
            ),
            274 => 
            array (
                'id' => 1775,
                'zone_id' => 370481,
                'name' => '滕州市',
                'parent_id' => 370400,
                'level' => 3,
            ),
            275 => 
            array (
                'id' => 1776,
                'zone_id' => 370501,
                'name' => '市辖区',
                'parent_id' => 370500,
                'level' => 3,
            ),
            276 => 
            array (
                'id' => 1777,
                'zone_id' => 370502,
                'name' => '东营区',
                'parent_id' => 370500,
                'level' => 3,
            ),
            277 => 
            array (
                'id' => 1778,
                'zone_id' => 370503,
                'name' => '河口区',
                'parent_id' => 370500,
                'level' => 3,
            ),
            278 => 
            array (
                'id' => 1779,
                'zone_id' => 370521,
                'name' => '垦利县',
                'parent_id' => 370500,
                'level' => 3,
            ),
            279 => 
            array (
                'id' => 1780,
                'zone_id' => 370522,
                'name' => '利津县',
                'parent_id' => 370500,
                'level' => 3,
            ),
            280 => 
            array (
                'id' => 1781,
                'zone_id' => 370523,
                'name' => '广饶县',
                'parent_id' => 370500,
                'level' => 3,
            ),
            281 => 
            array (
                'id' => 1782,
                'zone_id' => 370601,
                'name' => '市辖区',
                'parent_id' => 370600,
                'level' => 3,
            ),
            282 => 
            array (
                'id' => 1783,
                'zone_id' => 370602,
                'name' => '芝罘区',
                'parent_id' => 370600,
                'level' => 3,
            ),
            283 => 
            array (
                'id' => 1784,
                'zone_id' => 370611,
                'name' => '福山区',
                'parent_id' => 370600,
                'level' => 3,
            ),
            284 => 
            array (
                'id' => 1785,
                'zone_id' => 370612,
                'name' => '牟平区',
                'parent_id' => 370600,
                'level' => 3,
            ),
            285 => 
            array (
                'id' => 1786,
                'zone_id' => 370613,
                'name' => '莱山区',
                'parent_id' => 370600,
                'level' => 3,
            ),
            286 => 
            array (
                'id' => 1787,
                'zone_id' => 370634,
                'name' => '长岛县',
                'parent_id' => 370600,
                'level' => 3,
            ),
            287 => 
            array (
                'id' => 1788,
                'zone_id' => 370681,
                'name' => '龙口市',
                'parent_id' => 370600,
                'level' => 3,
            ),
            288 => 
            array (
                'id' => 1789,
                'zone_id' => 370682,
                'name' => '莱阳市',
                'parent_id' => 370600,
                'level' => 3,
            ),
            289 => 
            array (
                'id' => 1790,
                'zone_id' => 370683,
                'name' => '莱州市',
                'parent_id' => 370600,
                'level' => 3,
            ),
            290 => 
            array (
                'id' => 1791,
                'zone_id' => 370684,
                'name' => '蓬莱市',
                'parent_id' => 370600,
                'level' => 3,
            ),
            291 => 
            array (
                'id' => 1792,
                'zone_id' => 370685,
                'name' => '招远市',
                'parent_id' => 370600,
                'level' => 3,
            ),
            292 => 
            array (
                'id' => 1793,
                'zone_id' => 370686,
                'name' => '栖霞市',
                'parent_id' => 370600,
                'level' => 3,
            ),
            293 => 
            array (
                'id' => 1794,
                'zone_id' => 370687,
                'name' => '海阳市',
                'parent_id' => 370600,
                'level' => 3,
            ),
            294 => 
            array (
                'id' => 1795,
                'zone_id' => 370701,
                'name' => '市辖区',
                'parent_id' => 370700,
                'level' => 3,
            ),
            295 => 
            array (
                'id' => 1796,
                'zone_id' => 370702,
                'name' => '潍城区',
                'parent_id' => 370700,
                'level' => 3,
            ),
            296 => 
            array (
                'id' => 1797,
                'zone_id' => 370703,
                'name' => '寒亭区',
                'parent_id' => 370700,
                'level' => 3,
            ),
            297 => 
            array (
                'id' => 1798,
                'zone_id' => 370704,
                'name' => '坊子区',
                'parent_id' => 370700,
                'level' => 3,
            ),
            298 => 
            array (
                'id' => 1799,
                'zone_id' => 370705,
                'name' => '奎文区',
                'parent_id' => 370700,
                'level' => 3,
            ),
            299 => 
            array (
                'id' => 1800,
                'zone_id' => 370724,
                'name' => '临朐县',
                'parent_id' => 370700,
                'level' => 3,
            ),
            300 => 
            array (
                'id' => 1801,
                'zone_id' => 370725,
                'name' => '昌乐县',
                'parent_id' => 370700,
                'level' => 3,
            ),
            301 => 
            array (
                'id' => 1802,
                'zone_id' => 370781,
                'name' => '青州市',
                'parent_id' => 370700,
                'level' => 3,
            ),
            302 => 
            array (
                'id' => 1803,
                'zone_id' => 370782,
                'name' => '诸城市',
                'parent_id' => 370700,
                'level' => 3,
            ),
            303 => 
            array (
                'id' => 1804,
                'zone_id' => 370783,
                'name' => '寿光市',
                'parent_id' => 370700,
                'level' => 3,
            ),
            304 => 
            array (
                'id' => 1805,
                'zone_id' => 370784,
                'name' => '安丘市',
                'parent_id' => 370700,
                'level' => 3,
            ),
            305 => 
            array (
                'id' => 1806,
                'zone_id' => 370785,
                'name' => '高密市',
                'parent_id' => 370700,
                'level' => 3,
            ),
            306 => 
            array (
                'id' => 1807,
                'zone_id' => 370786,
                'name' => '昌邑市',
                'parent_id' => 370700,
                'level' => 3,
            ),
            307 => 
            array (
                'id' => 1808,
                'zone_id' => 370801,
                'name' => '市辖区',
                'parent_id' => 370800,
                'level' => 3,
            ),
            308 => 
            array (
                'id' => 1809,
                'zone_id' => 370802,
                'name' => '市中区',
                'parent_id' => 370800,
                'level' => 3,
            ),
            309 => 
            array (
                'id' => 1810,
                'zone_id' => 370811,
                'name' => '任城区',
                'parent_id' => 370800,
                'level' => 3,
            ),
            310 => 
            array (
                'id' => 1811,
                'zone_id' => 370826,
                'name' => '微山县',
                'parent_id' => 370800,
                'level' => 3,
            ),
            311 => 
            array (
                'id' => 1812,
                'zone_id' => 370827,
                'name' => '鱼台县',
                'parent_id' => 370800,
                'level' => 3,
            ),
            312 => 
            array (
                'id' => 1813,
                'zone_id' => 370828,
                'name' => '金乡县',
                'parent_id' => 370800,
                'level' => 3,
            ),
            313 => 
            array (
                'id' => 1814,
                'zone_id' => 370829,
                'name' => '嘉祥县',
                'parent_id' => 370800,
                'level' => 3,
            ),
            314 => 
            array (
                'id' => 1815,
                'zone_id' => 370830,
                'name' => '汶上县',
                'parent_id' => 370800,
                'level' => 3,
            ),
            315 => 
            array (
                'id' => 1816,
                'zone_id' => 370831,
                'name' => '泗水县',
                'parent_id' => 370800,
                'level' => 3,
            ),
            316 => 
            array (
                'id' => 1817,
                'zone_id' => 370832,
                'name' => '梁山县',
                'parent_id' => 370800,
                'level' => 3,
            ),
            317 => 
            array (
                'id' => 1818,
                'zone_id' => 370881,
                'name' => '曲阜市',
                'parent_id' => 370800,
                'level' => 3,
            ),
            318 => 
            array (
                'id' => 1819,
                'zone_id' => 370882,
                'name' => '兖州市',
                'parent_id' => 370800,
                'level' => 3,
            ),
            319 => 
            array (
                'id' => 1820,
                'zone_id' => 370883,
                'name' => '邹城市',
                'parent_id' => 370800,
                'level' => 3,
            ),
            320 => 
            array (
                'id' => 1821,
                'zone_id' => 370901,
                'name' => '市辖区',
                'parent_id' => 370900,
                'level' => 3,
            ),
            321 => 
            array (
                'id' => 1822,
                'zone_id' => 370902,
                'name' => '泰山区',
                'parent_id' => 370900,
                'level' => 3,
            ),
            322 => 
            array (
                'id' => 1823,
                'zone_id' => 370903,
                'name' => '岱岳区',
                'parent_id' => 370900,
                'level' => 3,
            ),
            323 => 
            array (
                'id' => 1824,
                'zone_id' => 370921,
                'name' => '宁阳县',
                'parent_id' => 370900,
                'level' => 3,
            ),
            324 => 
            array (
                'id' => 1825,
                'zone_id' => 370923,
                'name' => '东平县',
                'parent_id' => 370900,
                'level' => 3,
            ),
            325 => 
            array (
                'id' => 1826,
                'zone_id' => 370982,
                'name' => '新泰市',
                'parent_id' => 370900,
                'level' => 3,
            ),
            326 => 
            array (
                'id' => 1827,
                'zone_id' => 370983,
                'name' => '肥城市',
                'parent_id' => 370900,
                'level' => 3,
            ),
            327 => 
            array (
                'id' => 1828,
                'zone_id' => 371001,
                'name' => '市辖区',
                'parent_id' => 371000,
                'level' => 3,
            ),
            328 => 
            array (
                'id' => 1829,
                'zone_id' => 371002,
                'name' => '环翠区',
                'parent_id' => 371000,
                'level' => 3,
            ),
            329 => 
            array (
                'id' => 1830,
                'zone_id' => 371081,
                'name' => '文登市',
                'parent_id' => 371000,
                'level' => 3,
            ),
            330 => 
            array (
                'id' => 1831,
                'zone_id' => 371082,
                'name' => '荣成市',
                'parent_id' => 371000,
                'level' => 3,
            ),
            331 => 
            array (
                'id' => 1832,
                'zone_id' => 371083,
                'name' => '乳山市',
                'parent_id' => 371000,
                'level' => 3,
            ),
            332 => 
            array (
                'id' => 1833,
                'zone_id' => 371101,
                'name' => '市辖区',
                'parent_id' => 371100,
                'level' => 3,
            ),
            333 => 
            array (
                'id' => 1834,
                'zone_id' => 371102,
                'name' => '东港区',
                'parent_id' => 371100,
                'level' => 3,
            ),
            334 => 
            array (
                'id' => 1835,
                'zone_id' => 371103,
                'name' => '岚山区',
                'parent_id' => 371100,
                'level' => 3,
            ),
            335 => 
            array (
                'id' => 1836,
                'zone_id' => 371121,
                'name' => '五莲县',
                'parent_id' => 371100,
                'level' => 3,
            ),
            336 => 
            array (
                'id' => 1837,
                'zone_id' => 371122,
                'name' => '莒　县',
                'parent_id' => 371100,
                'level' => 3,
            ),
            337 => 
            array (
                'id' => 1838,
                'zone_id' => 371201,
                'name' => '市辖区',
                'parent_id' => 371200,
                'level' => 3,
            ),
            338 => 
            array (
                'id' => 1839,
                'zone_id' => 371202,
                'name' => '莱城区',
                'parent_id' => 371200,
                'level' => 3,
            ),
            339 => 
            array (
                'id' => 1840,
                'zone_id' => 371203,
                'name' => '钢城区',
                'parent_id' => 371200,
                'level' => 3,
            ),
            340 => 
            array (
                'id' => 1841,
                'zone_id' => 371301,
                'name' => '市辖区',
                'parent_id' => 371300,
                'level' => 3,
            ),
            341 => 
            array (
                'id' => 1842,
                'zone_id' => 371302,
                'name' => '兰山区',
                'parent_id' => 371300,
                'level' => 3,
            ),
            342 => 
            array (
                'id' => 1843,
                'zone_id' => 371311,
                'name' => '罗庄区',
                'parent_id' => 371300,
                'level' => 3,
            ),
            343 => 
            array (
                'id' => 1844,
                'zone_id' => 371312,
                'name' => '河东区',
                'parent_id' => 371300,
                'level' => 3,
            ),
            344 => 
            array (
                'id' => 1845,
                'zone_id' => 371321,
                'name' => '沂南县',
                'parent_id' => 371300,
                'level' => 3,
            ),
            345 => 
            array (
                'id' => 1846,
                'zone_id' => 371322,
                'name' => '郯城县',
                'parent_id' => 371300,
                'level' => 3,
            ),
            346 => 
            array (
                'id' => 1847,
                'zone_id' => 371323,
                'name' => '沂水县',
                'parent_id' => 371300,
                'level' => 3,
            ),
            347 => 
            array (
                'id' => 1848,
                'zone_id' => 371324,
                'name' => '苍山县',
                'parent_id' => 371300,
                'level' => 3,
            ),
            348 => 
            array (
                'id' => 1849,
                'zone_id' => 371325,
                'name' => '费　县',
                'parent_id' => 371300,
                'level' => 3,
            ),
            349 => 
            array (
                'id' => 1850,
                'zone_id' => 371326,
                'name' => '平邑县',
                'parent_id' => 371300,
                'level' => 3,
            ),
            350 => 
            array (
                'id' => 1851,
                'zone_id' => 371327,
                'name' => '莒南县',
                'parent_id' => 371300,
                'level' => 3,
            ),
            351 => 
            array (
                'id' => 1852,
                'zone_id' => 371328,
                'name' => '蒙阴县',
                'parent_id' => 371300,
                'level' => 3,
            ),
            352 => 
            array (
                'id' => 1853,
                'zone_id' => 371329,
                'name' => '临沭县',
                'parent_id' => 371300,
                'level' => 3,
            ),
            353 => 
            array (
                'id' => 1854,
                'zone_id' => 371401,
                'name' => '市辖区',
                'parent_id' => 371400,
                'level' => 3,
            ),
            354 => 
            array (
                'id' => 1855,
                'zone_id' => 371402,
                'name' => '德城区',
                'parent_id' => 371400,
                'level' => 3,
            ),
            355 => 
            array (
                'id' => 1856,
                'zone_id' => 371421,
                'name' => '陵　县',
                'parent_id' => 371400,
                'level' => 3,
            ),
            356 => 
            array (
                'id' => 1857,
                'zone_id' => 371422,
                'name' => '宁津县',
                'parent_id' => 371400,
                'level' => 3,
            ),
            357 => 
            array (
                'id' => 1858,
                'zone_id' => 371423,
                'name' => '庆云县',
                'parent_id' => 371400,
                'level' => 3,
            ),
            358 => 
            array (
                'id' => 1859,
                'zone_id' => 371424,
                'name' => '临邑县',
                'parent_id' => 371400,
                'level' => 3,
            ),
            359 => 
            array (
                'id' => 1860,
                'zone_id' => 371425,
                'name' => '齐河县',
                'parent_id' => 371400,
                'level' => 3,
            ),
            360 => 
            array (
                'id' => 1861,
                'zone_id' => 371426,
                'name' => '平原县',
                'parent_id' => 371400,
                'level' => 3,
            ),
            361 => 
            array (
                'id' => 1862,
                'zone_id' => 371427,
                'name' => '夏津县',
                'parent_id' => 371400,
                'level' => 3,
            ),
            362 => 
            array (
                'id' => 1863,
                'zone_id' => 371428,
                'name' => '武城县',
                'parent_id' => 371400,
                'level' => 3,
            ),
            363 => 
            array (
                'id' => 1864,
                'zone_id' => 371481,
                'name' => '乐陵市',
                'parent_id' => 371400,
                'level' => 3,
            ),
            364 => 
            array (
                'id' => 1865,
                'zone_id' => 371482,
                'name' => '禹城市',
                'parent_id' => 371400,
                'level' => 3,
            ),
            365 => 
            array (
                'id' => 1866,
                'zone_id' => 371501,
                'name' => '市辖区',
                'parent_id' => 371500,
                'level' => 3,
            ),
            366 => 
            array (
                'id' => 1867,
                'zone_id' => 371502,
                'name' => '东昌府区',
                'parent_id' => 371500,
                'level' => 3,
            ),
            367 => 
            array (
                'id' => 1868,
                'zone_id' => 371521,
                'name' => '阳谷县',
                'parent_id' => 371500,
                'level' => 3,
            ),
            368 => 
            array (
                'id' => 1869,
                'zone_id' => 371522,
                'name' => '莘　县',
                'parent_id' => 371500,
                'level' => 3,
            ),
            369 => 
            array (
                'id' => 1870,
                'zone_id' => 371523,
                'name' => '茌平县',
                'parent_id' => 371500,
                'level' => 3,
            ),
            370 => 
            array (
                'id' => 1871,
                'zone_id' => 371524,
                'name' => '东阿县',
                'parent_id' => 371500,
                'level' => 3,
            ),
            371 => 
            array (
                'id' => 1872,
                'zone_id' => 371525,
                'name' => '冠　县',
                'parent_id' => 371500,
                'level' => 3,
            ),
            372 => 
            array (
                'id' => 1873,
                'zone_id' => 371526,
                'name' => '高唐县',
                'parent_id' => 371500,
                'level' => 3,
            ),
            373 => 
            array (
                'id' => 1874,
                'zone_id' => 371581,
                'name' => '临清市',
                'parent_id' => 371500,
                'level' => 3,
            ),
            374 => 
            array (
                'id' => 1875,
                'zone_id' => 371601,
                'name' => '市辖区',
                'parent_id' => 371600,
                'level' => 3,
            ),
            375 => 
            array (
                'id' => 1876,
                'zone_id' => 371602,
                'name' => '滨城区',
                'parent_id' => 371600,
                'level' => 3,
            ),
            376 => 
            array (
                'id' => 1877,
                'zone_id' => 371621,
                'name' => '惠民县',
                'parent_id' => 371600,
                'level' => 3,
            ),
            377 => 
            array (
                'id' => 1878,
                'zone_id' => 371622,
                'name' => '阳信县',
                'parent_id' => 371600,
                'level' => 3,
            ),
            378 => 
            array (
                'id' => 1879,
                'zone_id' => 371623,
                'name' => '无棣县',
                'parent_id' => 371600,
                'level' => 3,
            ),
            379 => 
            array (
                'id' => 1880,
                'zone_id' => 371624,
                'name' => '沾化县',
                'parent_id' => 371600,
                'level' => 3,
            ),
            380 => 
            array (
                'id' => 1881,
                'zone_id' => 371625,
                'name' => '博兴县',
                'parent_id' => 371600,
                'level' => 3,
            ),
            381 => 
            array (
                'id' => 1882,
                'zone_id' => 371626,
                'name' => '邹平县',
                'parent_id' => 371600,
                'level' => 3,
            ),
            382 => 
            array (
                'id' => 1883,
                'zone_id' => 371701,
                'name' => '市辖区',
                'parent_id' => 371700,
                'level' => 3,
            ),
            383 => 
            array (
                'id' => 1884,
                'zone_id' => 371702,
                'name' => '牡丹区',
                'parent_id' => 371700,
                'level' => 3,
            ),
            384 => 
            array (
                'id' => 1885,
                'zone_id' => 371721,
                'name' => '曹　县',
                'parent_id' => 371700,
                'level' => 3,
            ),
            385 => 
            array (
                'id' => 1886,
                'zone_id' => 371722,
                'name' => '单　县',
                'parent_id' => 371700,
                'level' => 3,
            ),
            386 => 
            array (
                'id' => 1887,
                'zone_id' => 371723,
                'name' => '成武县',
                'parent_id' => 371700,
                'level' => 3,
            ),
            387 => 
            array (
                'id' => 1888,
                'zone_id' => 371724,
                'name' => '巨野县',
                'parent_id' => 371700,
                'level' => 3,
            ),
            388 => 
            array (
                'id' => 1889,
                'zone_id' => 371725,
                'name' => '郓城县',
                'parent_id' => 371700,
                'level' => 3,
            ),
            389 => 
            array (
                'id' => 1890,
                'zone_id' => 371726,
                'name' => '鄄城县',
                'parent_id' => 371700,
                'level' => 3,
            ),
            390 => 
            array (
                'id' => 1891,
                'zone_id' => 371727,
                'name' => '定陶县',
                'parent_id' => 371700,
                'level' => 3,
            ),
            391 => 
            array (
                'id' => 1892,
                'zone_id' => 371728,
                'name' => '东明县',
                'parent_id' => 371700,
                'level' => 3,
            ),
            392 => 
            array (
                'id' => 1893,
                'zone_id' => 410101,
                'name' => '市辖区',
                'parent_id' => 410100,
                'level' => 3,
            ),
            393 => 
            array (
                'id' => 1894,
                'zone_id' => 410102,
                'name' => '中原区',
                'parent_id' => 410100,
                'level' => 3,
            ),
            394 => 
            array (
                'id' => 1895,
                'zone_id' => 410103,
                'name' => '二七区',
                'parent_id' => 410100,
                'level' => 3,
            ),
            395 => 
            array (
                'id' => 1896,
                'zone_id' => 410104,
                'name' => '管城回族区',
                'parent_id' => 410100,
                'level' => 3,
            ),
            396 => 
            array (
                'id' => 1897,
                'zone_id' => 410105,
                'name' => '金水区',
                'parent_id' => 410100,
                'level' => 3,
            ),
            397 => 
            array (
                'id' => 1898,
                'zone_id' => 410106,
                'name' => '上街区',
                'parent_id' => 410100,
                'level' => 3,
            ),
            398 => 
            array (
                'id' => 1899,
                'zone_id' => 410108,
                'name' => '邙山区',
                'parent_id' => 410100,
                'level' => 3,
            ),
            399 => 
            array (
                'id' => 1900,
                'zone_id' => 410122,
                'name' => '中牟县',
                'parent_id' => 410100,
                'level' => 3,
            ),
            400 => 
            array (
                'id' => 1901,
                'zone_id' => 410181,
                'name' => '巩义市',
                'parent_id' => 410100,
                'level' => 3,
            ),
            401 => 
            array (
                'id' => 1902,
                'zone_id' => 410182,
                'name' => '荥阳市',
                'parent_id' => 410100,
                'level' => 3,
            ),
            402 => 
            array (
                'id' => 1903,
                'zone_id' => 410183,
                'name' => '新密市',
                'parent_id' => 410100,
                'level' => 3,
            ),
            403 => 
            array (
                'id' => 1904,
                'zone_id' => 410184,
                'name' => '新郑市',
                'parent_id' => 410100,
                'level' => 3,
            ),
            404 => 
            array (
                'id' => 1905,
                'zone_id' => 410185,
                'name' => '登封市',
                'parent_id' => 410100,
                'level' => 3,
            ),
            405 => 
            array (
                'id' => 1906,
                'zone_id' => 410201,
                'name' => '市辖区',
                'parent_id' => 410200,
                'level' => 3,
            ),
            406 => 
            array (
                'id' => 1907,
                'zone_id' => 410202,
                'name' => '龙亭区',
                'parent_id' => 410200,
                'level' => 3,
            ),
            407 => 
            array (
                'id' => 1908,
                'zone_id' => 410203,
                'name' => '顺河回族区',
                'parent_id' => 410200,
                'level' => 3,
            ),
            408 => 
            array (
                'id' => 1909,
                'zone_id' => 410204,
                'name' => '鼓楼区',
                'parent_id' => 410200,
                'level' => 3,
            ),
            409 => 
            array (
                'id' => 1910,
                'zone_id' => 410205,
                'name' => '南关区',
                'parent_id' => 410200,
                'level' => 3,
            ),
            410 => 
            array (
                'id' => 1911,
                'zone_id' => 410211,
                'name' => '郊　区',
                'parent_id' => 410200,
                'level' => 3,
            ),
            411 => 
            array (
                'id' => 1912,
                'zone_id' => 410221,
                'name' => '杞　县',
                'parent_id' => 410200,
                'level' => 3,
            ),
            412 => 
            array (
                'id' => 1913,
                'zone_id' => 410222,
                'name' => '通许县',
                'parent_id' => 410200,
                'level' => 3,
            ),
            413 => 
            array (
                'id' => 1914,
                'zone_id' => 410223,
                'name' => '尉氏县',
                'parent_id' => 410200,
                'level' => 3,
            ),
            414 => 
            array (
                'id' => 1915,
                'zone_id' => 410224,
                'name' => '开封县',
                'parent_id' => 410200,
                'level' => 3,
            ),
            415 => 
            array (
                'id' => 1916,
                'zone_id' => 410225,
                'name' => '兰考县',
                'parent_id' => 410200,
                'level' => 3,
            ),
            416 => 
            array (
                'id' => 1917,
                'zone_id' => 410301,
                'name' => '市辖区',
                'parent_id' => 410300,
                'level' => 3,
            ),
            417 => 
            array (
                'id' => 1918,
                'zone_id' => 410302,
                'name' => '老城区',
                'parent_id' => 410300,
                'level' => 3,
            ),
            418 => 
            array (
                'id' => 1919,
                'zone_id' => 410303,
                'name' => '西工区',
                'parent_id' => 410300,
                'level' => 3,
            ),
            419 => 
            array (
                'id' => 1920,
                'zone_id' => 410304,
                'name' => '廛河回族区',
                'parent_id' => 410300,
                'level' => 3,
            ),
            420 => 
            array (
                'id' => 1921,
                'zone_id' => 410305,
                'name' => '涧西区',
                'parent_id' => 410300,
                'level' => 3,
            ),
            421 => 
            array (
                'id' => 1922,
                'zone_id' => 410306,
                'name' => '吉利区',
                'parent_id' => 410300,
                'level' => 3,
            ),
            422 => 
            array (
                'id' => 1923,
                'zone_id' => 410307,
                'name' => '洛龙区',
                'parent_id' => 410300,
                'level' => 3,
            ),
            423 => 
            array (
                'id' => 1924,
                'zone_id' => 410322,
                'name' => '孟津县',
                'parent_id' => 410300,
                'level' => 3,
            ),
            424 => 
            array (
                'id' => 1925,
                'zone_id' => 410323,
                'name' => '新安县',
                'parent_id' => 410300,
                'level' => 3,
            ),
            425 => 
            array (
                'id' => 1926,
                'zone_id' => 410324,
                'name' => '栾川县',
                'parent_id' => 410300,
                'level' => 3,
            ),
            426 => 
            array (
                'id' => 1927,
                'zone_id' => 410325,
                'name' => '嵩　县',
                'parent_id' => 410300,
                'level' => 3,
            ),
            427 => 
            array (
                'id' => 1928,
                'zone_id' => 410326,
                'name' => '汝阳县',
                'parent_id' => 410300,
                'level' => 3,
            ),
            428 => 
            array (
                'id' => 1929,
                'zone_id' => 410327,
                'name' => '宜阳县',
                'parent_id' => 410300,
                'level' => 3,
            ),
            429 => 
            array (
                'id' => 1930,
                'zone_id' => 410328,
                'name' => '洛宁县',
                'parent_id' => 410300,
                'level' => 3,
            ),
            430 => 
            array (
                'id' => 1931,
                'zone_id' => 410329,
                'name' => '伊川县',
                'parent_id' => 410300,
                'level' => 3,
            ),
            431 => 
            array (
                'id' => 1932,
                'zone_id' => 410381,
                'name' => '偃师市',
                'parent_id' => 410300,
                'level' => 3,
            ),
            432 => 
            array (
                'id' => 1933,
                'zone_id' => 410401,
                'name' => '市辖区',
                'parent_id' => 410400,
                'level' => 3,
            ),
            433 => 
            array (
                'id' => 1934,
                'zone_id' => 410402,
                'name' => '新华区',
                'parent_id' => 410400,
                'level' => 3,
            ),
            434 => 
            array (
                'id' => 1935,
                'zone_id' => 410403,
                'name' => '卫东区',
                'parent_id' => 410400,
                'level' => 3,
            ),
            435 => 
            array (
                'id' => 1936,
                'zone_id' => 410404,
                'name' => '石龙区',
                'parent_id' => 410400,
                'level' => 3,
            ),
            436 => 
            array (
                'id' => 1937,
                'zone_id' => 410411,
                'name' => '湛河区',
                'parent_id' => 410400,
                'level' => 3,
            ),
            437 => 
            array (
                'id' => 1938,
                'zone_id' => 410421,
                'name' => '宝丰县',
                'parent_id' => 410400,
                'level' => 3,
            ),
            438 => 
            array (
                'id' => 1939,
                'zone_id' => 410422,
                'name' => '叶　县',
                'parent_id' => 410400,
                'level' => 3,
            ),
            439 => 
            array (
                'id' => 1940,
                'zone_id' => 410423,
                'name' => '鲁山县',
                'parent_id' => 410400,
                'level' => 3,
            ),
            440 => 
            array (
                'id' => 1941,
                'zone_id' => 410425,
                'name' => '郏　县',
                'parent_id' => 410400,
                'level' => 3,
            ),
            441 => 
            array (
                'id' => 1942,
                'zone_id' => 410481,
                'name' => '舞钢市',
                'parent_id' => 410400,
                'level' => 3,
            ),
            442 => 
            array (
                'id' => 1943,
                'zone_id' => 410482,
                'name' => '汝州市',
                'parent_id' => 410400,
                'level' => 3,
            ),
            443 => 
            array (
                'id' => 1944,
                'zone_id' => 410501,
                'name' => '市辖区',
                'parent_id' => 410500,
                'level' => 3,
            ),
            444 => 
            array (
                'id' => 1945,
                'zone_id' => 410502,
                'name' => '文峰区',
                'parent_id' => 410500,
                'level' => 3,
            ),
            445 => 
            array (
                'id' => 1946,
                'zone_id' => 410503,
                'name' => '北关区',
                'parent_id' => 410500,
                'level' => 3,
            ),
            446 => 
            array (
                'id' => 1947,
                'zone_id' => 410505,
                'name' => '殷都区',
                'parent_id' => 410500,
                'level' => 3,
            ),
            447 => 
            array (
                'id' => 1948,
                'zone_id' => 410506,
                'name' => '龙安区',
                'parent_id' => 410500,
                'level' => 3,
            ),
            448 => 
            array (
                'id' => 1949,
                'zone_id' => 410522,
                'name' => '安阳县',
                'parent_id' => 410500,
                'level' => 3,
            ),
            449 => 
            array (
                'id' => 1950,
                'zone_id' => 410523,
                'name' => '汤阴县',
                'parent_id' => 410500,
                'level' => 3,
            ),
            450 => 
            array (
                'id' => 1951,
                'zone_id' => 410526,
                'name' => '滑　县',
                'parent_id' => 410500,
                'level' => 3,
            ),
            451 => 
            array (
                'id' => 1952,
                'zone_id' => 410527,
                'name' => '内黄县',
                'parent_id' => 410500,
                'level' => 3,
            ),
            452 => 
            array (
                'id' => 1953,
                'zone_id' => 410581,
                'name' => '林州市',
                'parent_id' => 410500,
                'level' => 3,
            ),
            453 => 
            array (
                'id' => 1954,
                'zone_id' => 410601,
                'name' => '市辖区',
                'parent_id' => 410600,
                'level' => 3,
            ),
            454 => 
            array (
                'id' => 1955,
                'zone_id' => 410602,
                'name' => '鹤山区',
                'parent_id' => 410600,
                'level' => 3,
            ),
            455 => 
            array (
                'id' => 1956,
                'zone_id' => 410603,
                'name' => '山城区',
                'parent_id' => 410600,
                'level' => 3,
            ),
            456 => 
            array (
                'id' => 1957,
                'zone_id' => 410611,
                'name' => '淇滨区',
                'parent_id' => 410600,
                'level' => 3,
            ),
            457 => 
            array (
                'id' => 1958,
                'zone_id' => 410621,
                'name' => '浚　县',
                'parent_id' => 410600,
                'level' => 3,
            ),
            458 => 
            array (
                'id' => 1959,
                'zone_id' => 410622,
                'name' => '淇　县',
                'parent_id' => 410600,
                'level' => 3,
            ),
            459 => 
            array (
                'id' => 1960,
                'zone_id' => 410701,
                'name' => '市辖区',
                'parent_id' => 410700,
                'level' => 3,
            ),
            460 => 
            array (
                'id' => 1961,
                'zone_id' => 410702,
                'name' => '红旗区',
                'parent_id' => 410700,
                'level' => 3,
            ),
            461 => 
            array (
                'id' => 1962,
                'zone_id' => 410703,
                'name' => '卫滨区',
                'parent_id' => 410700,
                'level' => 3,
            ),
            462 => 
            array (
                'id' => 1963,
                'zone_id' => 410704,
                'name' => '凤泉区',
                'parent_id' => 410700,
                'level' => 3,
            ),
            463 => 
            array (
                'id' => 1964,
                'zone_id' => 410711,
                'name' => '牧野区',
                'parent_id' => 410700,
                'level' => 3,
            ),
            464 => 
            array (
                'id' => 1965,
                'zone_id' => 410721,
                'name' => '新乡县',
                'parent_id' => 410700,
                'level' => 3,
            ),
            465 => 
            array (
                'id' => 1966,
                'zone_id' => 410724,
                'name' => '获嘉县',
                'parent_id' => 410700,
                'level' => 3,
            ),
            466 => 
            array (
                'id' => 1967,
                'zone_id' => 410725,
                'name' => '原阳县',
                'parent_id' => 410700,
                'level' => 3,
            ),
            467 => 
            array (
                'id' => 1968,
                'zone_id' => 410726,
                'name' => '延津县',
                'parent_id' => 410700,
                'level' => 3,
            ),
            468 => 
            array (
                'id' => 1969,
                'zone_id' => 410727,
                'name' => '封丘县',
                'parent_id' => 410700,
                'level' => 3,
            ),
            469 => 
            array (
                'id' => 1970,
                'zone_id' => 410728,
                'name' => '长垣县',
                'parent_id' => 410700,
                'level' => 3,
            ),
            470 => 
            array (
                'id' => 1971,
                'zone_id' => 410781,
                'name' => '卫辉市',
                'parent_id' => 410700,
                'level' => 3,
            ),
            471 => 
            array (
                'id' => 1972,
                'zone_id' => 410782,
                'name' => '辉县市',
                'parent_id' => 410700,
                'level' => 3,
            ),
            472 => 
            array (
                'id' => 1973,
                'zone_id' => 410801,
                'name' => '市辖区',
                'parent_id' => 410800,
                'level' => 3,
            ),
            473 => 
            array (
                'id' => 1974,
                'zone_id' => 410802,
                'name' => '解放区',
                'parent_id' => 410800,
                'level' => 3,
            ),
            474 => 
            array (
                'id' => 1975,
                'zone_id' => 410803,
                'name' => '中站区',
                'parent_id' => 410800,
                'level' => 3,
            ),
            475 => 
            array (
                'id' => 1976,
                'zone_id' => 410804,
                'name' => '马村区',
                'parent_id' => 410800,
                'level' => 3,
            ),
            476 => 
            array (
                'id' => 1977,
                'zone_id' => 410811,
                'name' => '山阳区',
                'parent_id' => 410800,
                'level' => 3,
            ),
            477 => 
            array (
                'id' => 1978,
                'zone_id' => 410821,
                'name' => '修武县',
                'parent_id' => 410800,
                'level' => 3,
            ),
            478 => 
            array (
                'id' => 1979,
                'zone_id' => 410822,
                'name' => '博爱县',
                'parent_id' => 410800,
                'level' => 3,
            ),
            479 => 
            array (
                'id' => 1980,
                'zone_id' => 410823,
                'name' => '武陟县',
                'parent_id' => 410800,
                'level' => 3,
            ),
            480 => 
            array (
                'id' => 1981,
                'zone_id' => 410825,
                'name' => '温　县',
                'parent_id' => 410800,
                'level' => 3,
            ),
            481 => 
            array (
                'id' => 1982,
                'zone_id' => 410881,
                'name' => '济源市',
                'parent_id' => 410800,
                'level' => 3,
            ),
            482 => 
            array (
                'id' => 1983,
                'zone_id' => 410882,
                'name' => '沁阳市',
                'parent_id' => 410800,
                'level' => 3,
            ),
            483 => 
            array (
                'id' => 1984,
                'zone_id' => 410883,
                'name' => '孟州市',
                'parent_id' => 410800,
                'level' => 3,
            ),
            484 => 
            array (
                'id' => 1985,
                'zone_id' => 410901,
                'name' => '市辖区',
                'parent_id' => 410900,
                'level' => 3,
            ),
            485 => 
            array (
                'id' => 1986,
                'zone_id' => 410902,
                'name' => '华龙区',
                'parent_id' => 410900,
                'level' => 3,
            ),
            486 => 
            array (
                'id' => 1987,
                'zone_id' => 410922,
                'name' => '清丰县',
                'parent_id' => 410900,
                'level' => 3,
            ),
            487 => 
            array (
                'id' => 1988,
                'zone_id' => 410923,
                'name' => '南乐县',
                'parent_id' => 410900,
                'level' => 3,
            ),
            488 => 
            array (
                'id' => 1989,
                'zone_id' => 410926,
                'name' => '范　县',
                'parent_id' => 410900,
                'level' => 3,
            ),
            489 => 
            array (
                'id' => 1990,
                'zone_id' => 410927,
                'name' => '台前县',
                'parent_id' => 410900,
                'level' => 3,
            ),
            490 => 
            array (
                'id' => 1991,
                'zone_id' => 410928,
                'name' => '濮阳县',
                'parent_id' => 410900,
                'level' => 3,
            ),
            491 => 
            array (
                'id' => 1992,
                'zone_id' => 411001,
                'name' => '市辖区',
                'parent_id' => 411000,
                'level' => 3,
            ),
            492 => 
            array (
                'id' => 1993,
                'zone_id' => 411002,
                'name' => '魏都区',
                'parent_id' => 411000,
                'level' => 3,
            ),
            493 => 
            array (
                'id' => 1994,
                'zone_id' => 411023,
                'name' => '许昌县',
                'parent_id' => 411000,
                'level' => 3,
            ),
            494 => 
            array (
                'id' => 1995,
                'zone_id' => 411024,
                'name' => '鄢陵县',
                'parent_id' => 411000,
                'level' => 3,
            ),
            495 => 
            array (
                'id' => 1996,
                'zone_id' => 411025,
                'name' => '襄城县',
                'parent_id' => 411000,
                'level' => 3,
            ),
            496 => 
            array (
                'id' => 1997,
                'zone_id' => 411081,
                'name' => '禹州市',
                'parent_id' => 411000,
                'level' => 3,
            ),
            497 => 
            array (
                'id' => 1998,
                'zone_id' => 411082,
                'name' => '长葛市',
                'parent_id' => 411000,
                'level' => 3,
            ),
            498 => 
            array (
                'id' => 1999,
                'zone_id' => 411101,
                'name' => '市辖区',
                'parent_id' => 411100,
                'level' => 3,
            ),
            499 => 
            array (
                'id' => 2000,
                'zone_id' => 411102,
                'name' => '源汇区',
                'parent_id' => 411100,
                'level' => 3,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'zone_id' => 411103,
                'name' => '郾城区',
                'parent_id' => 411100,
                'level' => 3,
            ),
            1 => 
            array (
                'id' => 2002,
                'zone_id' => 411104,
                'name' => '召陵区',
                'parent_id' => 411100,
                'level' => 3,
            ),
            2 => 
            array (
                'id' => 2003,
                'zone_id' => 411121,
                'name' => '舞阳县',
                'parent_id' => 411100,
                'level' => 3,
            ),
            3 => 
            array (
                'id' => 2004,
                'zone_id' => 411122,
                'name' => '临颍县',
                'parent_id' => 411100,
                'level' => 3,
            ),
            4 => 
            array (
                'id' => 2005,
                'zone_id' => 411201,
                'name' => '市辖区',
                'parent_id' => 411200,
                'level' => 3,
            ),
            5 => 
            array (
                'id' => 2006,
                'zone_id' => 411202,
                'name' => '湖滨区',
                'parent_id' => 411200,
                'level' => 3,
            ),
            6 => 
            array (
                'id' => 2007,
                'zone_id' => 411221,
                'name' => '渑池县',
                'parent_id' => 411200,
                'level' => 3,
            ),
            7 => 
            array (
                'id' => 2008,
                'zone_id' => 411222,
                'name' => '陕　县',
                'parent_id' => 411200,
                'level' => 3,
            ),
            8 => 
            array (
                'id' => 2009,
                'zone_id' => 411224,
                'name' => '卢氏县',
                'parent_id' => 411200,
                'level' => 3,
            ),
            9 => 
            array (
                'id' => 2010,
                'zone_id' => 411281,
                'name' => '义马市',
                'parent_id' => 411200,
                'level' => 3,
            ),
            10 => 
            array (
                'id' => 2011,
                'zone_id' => 411282,
                'name' => '灵宝市',
                'parent_id' => 411200,
                'level' => 3,
            ),
            11 => 
            array (
                'id' => 2012,
                'zone_id' => 411301,
                'name' => '市辖区',
                'parent_id' => 411300,
                'level' => 3,
            ),
            12 => 
            array (
                'id' => 2013,
                'zone_id' => 411302,
                'name' => '宛城区',
                'parent_id' => 411300,
                'level' => 3,
            ),
            13 => 
            array (
                'id' => 2014,
                'zone_id' => 411303,
                'name' => '卧龙区',
                'parent_id' => 411300,
                'level' => 3,
            ),
            14 => 
            array (
                'id' => 2015,
                'zone_id' => 411321,
                'name' => '南召县',
                'parent_id' => 411300,
                'level' => 3,
            ),
            15 => 
            array (
                'id' => 2016,
                'zone_id' => 411322,
                'name' => '方城县',
                'parent_id' => 411300,
                'level' => 3,
            ),
            16 => 
            array (
                'id' => 2017,
                'zone_id' => 411323,
                'name' => '西峡县',
                'parent_id' => 411300,
                'level' => 3,
            ),
            17 => 
            array (
                'id' => 2018,
                'zone_id' => 411324,
                'name' => '镇平县',
                'parent_id' => 411300,
                'level' => 3,
            ),
            18 => 
            array (
                'id' => 2019,
                'zone_id' => 411325,
                'name' => '内乡县',
                'parent_id' => 411300,
                'level' => 3,
            ),
            19 => 
            array (
                'id' => 2020,
                'zone_id' => 411326,
                'name' => '淅川县',
                'parent_id' => 411300,
                'level' => 3,
            ),
            20 => 
            array (
                'id' => 2021,
                'zone_id' => 411327,
                'name' => '社旗县',
                'parent_id' => 411300,
                'level' => 3,
            ),
            21 => 
            array (
                'id' => 2022,
                'zone_id' => 411328,
                'name' => '唐河县',
                'parent_id' => 411300,
                'level' => 3,
            ),
            22 => 
            array (
                'id' => 2023,
                'zone_id' => 411329,
                'name' => '新野县',
                'parent_id' => 411300,
                'level' => 3,
            ),
            23 => 
            array (
                'id' => 2024,
                'zone_id' => 411330,
                'name' => '桐柏县',
                'parent_id' => 411300,
                'level' => 3,
            ),
            24 => 
            array (
                'id' => 2025,
                'zone_id' => 411381,
                'name' => '邓州市',
                'parent_id' => 411300,
                'level' => 3,
            ),
            25 => 
            array (
                'id' => 2026,
                'zone_id' => 411401,
                'name' => '市辖区',
                'parent_id' => 411400,
                'level' => 3,
            ),
            26 => 
            array (
                'id' => 2027,
                'zone_id' => 411402,
                'name' => '梁园区',
                'parent_id' => 411400,
                'level' => 3,
            ),
            27 => 
            array (
                'id' => 2028,
                'zone_id' => 411403,
                'name' => '睢阳区',
                'parent_id' => 411400,
                'level' => 3,
            ),
            28 => 
            array (
                'id' => 2029,
                'zone_id' => 411421,
                'name' => '民权县',
                'parent_id' => 411400,
                'level' => 3,
            ),
            29 => 
            array (
                'id' => 2030,
                'zone_id' => 411422,
                'name' => '睢　县',
                'parent_id' => 411400,
                'level' => 3,
            ),
            30 => 
            array (
                'id' => 2031,
                'zone_id' => 411423,
                'name' => '宁陵县',
                'parent_id' => 411400,
                'level' => 3,
            ),
            31 => 
            array (
                'id' => 2032,
                'zone_id' => 411424,
                'name' => '柘城县',
                'parent_id' => 411400,
                'level' => 3,
            ),
            32 => 
            array (
                'id' => 2033,
                'zone_id' => 411425,
                'name' => '虞城县',
                'parent_id' => 411400,
                'level' => 3,
            ),
            33 => 
            array (
                'id' => 2034,
                'zone_id' => 411426,
                'name' => '夏邑县',
                'parent_id' => 411400,
                'level' => 3,
            ),
            34 => 
            array (
                'id' => 2035,
                'zone_id' => 411481,
                'name' => '永城市',
                'parent_id' => 411400,
                'level' => 3,
            ),
            35 => 
            array (
                'id' => 2036,
                'zone_id' => 411501,
                'name' => '市辖区',
                'parent_id' => 411500,
                'level' => 3,
            ),
            36 => 
            array (
                'id' => 2037,
                'zone_id' => 411502,
                'name' => '师河区',
                'parent_id' => 411500,
                'level' => 3,
            ),
            37 => 
            array (
                'id' => 2038,
                'zone_id' => 411503,
                'name' => '平桥区',
                'parent_id' => 411500,
                'level' => 3,
            ),
            38 => 
            array (
                'id' => 2039,
                'zone_id' => 411521,
                'name' => '罗山县',
                'parent_id' => 411500,
                'level' => 3,
            ),
            39 => 
            array (
                'id' => 2040,
                'zone_id' => 411522,
                'name' => '光山县',
                'parent_id' => 411500,
                'level' => 3,
            ),
            40 => 
            array (
                'id' => 2041,
                'zone_id' => 411523,
                'name' => '新　县',
                'parent_id' => 411500,
                'level' => 3,
            ),
            41 => 
            array (
                'id' => 2042,
                'zone_id' => 411524,
                'name' => '商城县',
                'parent_id' => 411500,
                'level' => 3,
            ),
            42 => 
            array (
                'id' => 2043,
                'zone_id' => 411525,
                'name' => '固始县',
                'parent_id' => 411500,
                'level' => 3,
            ),
            43 => 
            array (
                'id' => 2044,
                'zone_id' => 411526,
                'name' => '潢川县',
                'parent_id' => 411500,
                'level' => 3,
            ),
            44 => 
            array (
                'id' => 2045,
                'zone_id' => 411527,
                'name' => '淮滨县',
                'parent_id' => 411500,
                'level' => 3,
            ),
            45 => 
            array (
                'id' => 2046,
                'zone_id' => 411528,
                'name' => '息　县',
                'parent_id' => 411500,
                'level' => 3,
            ),
            46 => 
            array (
                'id' => 2047,
                'zone_id' => 411601,
                'name' => '市辖区',
                'parent_id' => 411600,
                'level' => 3,
            ),
            47 => 
            array (
                'id' => 2048,
                'zone_id' => 411602,
                'name' => '川汇区',
                'parent_id' => 411600,
                'level' => 3,
            ),
            48 => 
            array (
                'id' => 2049,
                'zone_id' => 411621,
                'name' => '扶沟县',
                'parent_id' => 411600,
                'level' => 3,
            ),
            49 => 
            array (
                'id' => 2050,
                'zone_id' => 411622,
                'name' => '西华县',
                'parent_id' => 411600,
                'level' => 3,
            ),
            50 => 
            array (
                'id' => 2051,
                'zone_id' => 411623,
                'name' => '商水县',
                'parent_id' => 411600,
                'level' => 3,
            ),
            51 => 
            array (
                'id' => 2052,
                'zone_id' => 411624,
                'name' => '沈丘县',
                'parent_id' => 411600,
                'level' => 3,
            ),
            52 => 
            array (
                'id' => 2053,
                'zone_id' => 411625,
                'name' => '郸城县',
                'parent_id' => 411600,
                'level' => 3,
            ),
            53 => 
            array (
                'id' => 2054,
                'zone_id' => 411626,
                'name' => '淮阳县',
                'parent_id' => 411600,
                'level' => 3,
            ),
            54 => 
            array (
                'id' => 2055,
                'zone_id' => 411627,
                'name' => '太康县',
                'parent_id' => 411600,
                'level' => 3,
            ),
            55 => 
            array (
                'id' => 2056,
                'zone_id' => 411628,
                'name' => '鹿邑县',
                'parent_id' => 411600,
                'level' => 3,
            ),
            56 => 
            array (
                'id' => 2057,
                'zone_id' => 411681,
                'name' => '项城市',
                'parent_id' => 411600,
                'level' => 3,
            ),
            57 => 
            array (
                'id' => 2058,
                'zone_id' => 411701,
                'name' => '市辖区',
                'parent_id' => 411700,
                'level' => 3,
            ),
            58 => 
            array (
                'id' => 2059,
                'zone_id' => 411702,
                'name' => '驿城区',
                'parent_id' => 411700,
                'level' => 3,
            ),
            59 => 
            array (
                'id' => 2060,
                'zone_id' => 411721,
                'name' => '西平县',
                'parent_id' => 411700,
                'level' => 3,
            ),
            60 => 
            array (
                'id' => 2061,
                'zone_id' => 411722,
                'name' => '上蔡县',
                'parent_id' => 411700,
                'level' => 3,
            ),
            61 => 
            array (
                'id' => 2062,
                'zone_id' => 411723,
                'name' => '平舆县',
                'parent_id' => 411700,
                'level' => 3,
            ),
            62 => 
            array (
                'id' => 2063,
                'zone_id' => 411724,
                'name' => '正阳县',
                'parent_id' => 411700,
                'level' => 3,
            ),
            63 => 
            array (
                'id' => 2064,
                'zone_id' => 411725,
                'name' => '确山县',
                'parent_id' => 411700,
                'level' => 3,
            ),
            64 => 
            array (
                'id' => 2065,
                'zone_id' => 411726,
                'name' => '泌阳县',
                'parent_id' => 411700,
                'level' => 3,
            ),
            65 => 
            array (
                'id' => 2066,
                'zone_id' => 411727,
                'name' => '汝南县',
                'parent_id' => 411700,
                'level' => 3,
            ),
            66 => 
            array (
                'id' => 2067,
                'zone_id' => 411728,
                'name' => '遂平县',
                'parent_id' => 411700,
                'level' => 3,
            ),
            67 => 
            array (
                'id' => 2068,
                'zone_id' => 411729,
                'name' => '新蔡县',
                'parent_id' => 411700,
                'level' => 3,
            ),
            68 => 
            array (
                'id' => 2069,
                'zone_id' => 420101,
                'name' => '市辖区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            69 => 
            array (
                'id' => 2070,
                'zone_id' => 420102,
                'name' => '江岸区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            70 => 
            array (
                'id' => 2071,
                'zone_id' => 420103,
                'name' => '江汉区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            71 => 
            array (
                'id' => 2072,
                'zone_id' => 420104,
                'name' => '乔口区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            72 => 
            array (
                'id' => 2073,
                'zone_id' => 420105,
                'name' => '汉阳区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            73 => 
            array (
                'id' => 2074,
                'zone_id' => 420106,
                'name' => '武昌区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            74 => 
            array (
                'id' => 2075,
                'zone_id' => 420107,
                'name' => '青山区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            75 => 
            array (
                'id' => 2076,
                'zone_id' => 420111,
                'name' => '洪山区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            76 => 
            array (
                'id' => 2077,
                'zone_id' => 420112,
                'name' => '东西湖区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            77 => 
            array (
                'id' => 2078,
                'zone_id' => 420113,
                'name' => '汉南区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            78 => 
            array (
                'id' => 2079,
                'zone_id' => 420114,
                'name' => '蔡甸区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            79 => 
            array (
                'id' => 2080,
                'zone_id' => 420115,
                'name' => '江夏区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            80 => 
            array (
                'id' => 2081,
                'zone_id' => 420116,
                'name' => '黄陂区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            81 => 
            array (
                'id' => 2082,
                'zone_id' => 420117,
                'name' => '新洲区',
                'parent_id' => 420100,
                'level' => 3,
            ),
            82 => 
            array (
                'id' => 2083,
                'zone_id' => 420201,
                'name' => '市辖区',
                'parent_id' => 420200,
                'level' => 3,
            ),
            83 => 
            array (
                'id' => 2084,
                'zone_id' => 420202,
                'name' => '黄石港区',
                'parent_id' => 420200,
                'level' => 3,
            ),
            84 => 
            array (
                'id' => 2085,
                'zone_id' => 420203,
                'name' => '西塞山区',
                'parent_id' => 420200,
                'level' => 3,
            ),
            85 => 
            array (
                'id' => 2086,
                'zone_id' => 420204,
                'name' => '下陆区',
                'parent_id' => 420200,
                'level' => 3,
            ),
            86 => 
            array (
                'id' => 2087,
                'zone_id' => 420205,
                'name' => '铁山区',
                'parent_id' => 420200,
                'level' => 3,
            ),
            87 => 
            array (
                'id' => 2088,
                'zone_id' => 420222,
                'name' => '阳新县',
                'parent_id' => 420200,
                'level' => 3,
            ),
            88 => 
            array (
                'id' => 2089,
                'zone_id' => 420281,
                'name' => '大冶市',
                'parent_id' => 420200,
                'level' => 3,
            ),
            89 => 
            array (
                'id' => 2090,
                'zone_id' => 420301,
                'name' => '市辖区',
                'parent_id' => 420300,
                'level' => 3,
            ),
            90 => 
            array (
                'id' => 2091,
                'zone_id' => 420302,
                'name' => '茅箭区',
                'parent_id' => 420300,
                'level' => 3,
            ),
            91 => 
            array (
                'id' => 2092,
                'zone_id' => 420303,
                'name' => '张湾区',
                'parent_id' => 420300,
                'level' => 3,
            ),
            92 => 
            array (
                'id' => 2093,
                'zone_id' => 420321,
                'name' => '郧　县',
                'parent_id' => 420300,
                'level' => 3,
            ),
            93 => 
            array (
                'id' => 2094,
                'zone_id' => 420322,
                'name' => '郧西县',
                'parent_id' => 420300,
                'level' => 3,
            ),
            94 => 
            array (
                'id' => 2095,
                'zone_id' => 420323,
                'name' => '竹山县',
                'parent_id' => 420300,
                'level' => 3,
            ),
            95 => 
            array (
                'id' => 2096,
                'zone_id' => 420324,
                'name' => '竹溪县',
                'parent_id' => 420300,
                'level' => 3,
            ),
            96 => 
            array (
                'id' => 2097,
                'zone_id' => 420325,
                'name' => '房　县',
                'parent_id' => 420300,
                'level' => 3,
            ),
            97 => 
            array (
                'id' => 2098,
                'zone_id' => 420381,
                'name' => '丹江口市',
                'parent_id' => 420300,
                'level' => 3,
            ),
            98 => 
            array (
                'id' => 2099,
                'zone_id' => 420501,
                'name' => '市辖区',
                'parent_id' => 420500,
                'level' => 3,
            ),
            99 => 
            array (
                'id' => 2100,
                'zone_id' => 420502,
                'name' => '西陵区',
                'parent_id' => 420500,
                'level' => 3,
            ),
            100 => 
            array (
                'id' => 2101,
                'zone_id' => 420503,
                'name' => '伍家岗区',
                'parent_id' => 420500,
                'level' => 3,
            ),
            101 => 
            array (
                'id' => 2102,
                'zone_id' => 420504,
                'name' => '点军区',
                'parent_id' => 420500,
                'level' => 3,
            ),
            102 => 
            array (
                'id' => 2103,
                'zone_id' => 420505,
                'name' => '猇亭区',
                'parent_id' => 420500,
                'level' => 3,
            ),
            103 => 
            array (
                'id' => 2104,
                'zone_id' => 420506,
                'name' => '夷陵区',
                'parent_id' => 420500,
                'level' => 3,
            ),
            104 => 
            array (
                'id' => 2105,
                'zone_id' => 420525,
                'name' => '远安县',
                'parent_id' => 420500,
                'level' => 3,
            ),
            105 => 
            array (
                'id' => 2106,
                'zone_id' => 420526,
                'name' => '兴山县',
                'parent_id' => 420500,
                'level' => 3,
            ),
            106 => 
            array (
                'id' => 2107,
                'zone_id' => 420527,
                'name' => '秭归县',
                'parent_id' => 420500,
                'level' => 3,
            ),
            107 => 
            array (
                'id' => 2108,
                'zone_id' => 420528,
                'name' => '长阳土家族自治县',
                'parent_id' => 420500,
                'level' => 3,
            ),
            108 => 
            array (
                'id' => 2109,
                'zone_id' => 420529,
                'name' => '五峰土家族自治县',
                'parent_id' => 420500,
                'level' => 3,
            ),
            109 => 
            array (
                'id' => 2110,
                'zone_id' => 420581,
                'name' => '宜都市',
                'parent_id' => 420500,
                'level' => 3,
            ),
            110 => 
            array (
                'id' => 2111,
                'zone_id' => 420582,
                'name' => '当阳市',
                'parent_id' => 420500,
                'level' => 3,
            ),
            111 => 
            array (
                'id' => 2112,
                'zone_id' => 420583,
                'name' => '枝江市',
                'parent_id' => 420500,
                'level' => 3,
            ),
            112 => 
            array (
                'id' => 2113,
                'zone_id' => 420601,
                'name' => '市辖区',
                'parent_id' => 420600,
                'level' => 3,
            ),
            113 => 
            array (
                'id' => 2114,
                'zone_id' => 420602,
                'name' => '襄城区',
                'parent_id' => 420600,
                'level' => 3,
            ),
            114 => 
            array (
                'id' => 2115,
                'zone_id' => 420606,
                'name' => '樊城区',
                'parent_id' => 420600,
                'level' => 3,
            ),
            115 => 
            array (
                'id' => 2116,
                'zone_id' => 420607,
                'name' => '襄阳区',
                'parent_id' => 420600,
                'level' => 3,
            ),
            116 => 
            array (
                'id' => 2117,
                'zone_id' => 420624,
                'name' => '南漳县',
                'parent_id' => 420600,
                'level' => 3,
            ),
            117 => 
            array (
                'id' => 2118,
                'zone_id' => 420625,
                'name' => '谷城县',
                'parent_id' => 420600,
                'level' => 3,
            ),
            118 => 
            array (
                'id' => 2119,
                'zone_id' => 420626,
                'name' => '保康县',
                'parent_id' => 420600,
                'level' => 3,
            ),
            119 => 
            array (
                'id' => 2120,
                'zone_id' => 420682,
                'name' => '老河口市',
                'parent_id' => 420600,
                'level' => 3,
            ),
            120 => 
            array (
                'id' => 2121,
                'zone_id' => 420683,
                'name' => '枣阳市',
                'parent_id' => 420600,
                'level' => 3,
            ),
            121 => 
            array (
                'id' => 2122,
                'zone_id' => 420684,
                'name' => '宜城市',
                'parent_id' => 420600,
                'level' => 3,
            ),
            122 => 
            array (
                'id' => 2123,
                'zone_id' => 420701,
                'name' => '市辖区',
                'parent_id' => 420700,
                'level' => 3,
            ),
            123 => 
            array (
                'id' => 2124,
                'zone_id' => 420702,
                'name' => '梁子湖区',
                'parent_id' => 420700,
                'level' => 3,
            ),
            124 => 
            array (
                'id' => 2125,
                'zone_id' => 420703,
                'name' => '华容区',
                'parent_id' => 420700,
                'level' => 3,
            ),
            125 => 
            array (
                'id' => 2126,
                'zone_id' => 420704,
                'name' => '鄂城区',
                'parent_id' => 420700,
                'level' => 3,
            ),
            126 => 
            array (
                'id' => 2127,
                'zone_id' => 420801,
                'name' => '市辖区',
                'parent_id' => 420800,
                'level' => 3,
            ),
            127 => 
            array (
                'id' => 2128,
                'zone_id' => 420802,
                'name' => '东宝区',
                'parent_id' => 420800,
                'level' => 3,
            ),
            128 => 
            array (
                'id' => 2129,
                'zone_id' => 420804,
                'name' => '掇刀区',
                'parent_id' => 420800,
                'level' => 3,
            ),
            129 => 
            array (
                'id' => 2130,
                'zone_id' => 420821,
                'name' => '京山县',
                'parent_id' => 420800,
                'level' => 3,
            ),
            130 => 
            array (
                'id' => 2131,
                'zone_id' => 420822,
                'name' => '沙洋县',
                'parent_id' => 420800,
                'level' => 3,
            ),
            131 => 
            array (
                'id' => 2132,
                'zone_id' => 420881,
                'name' => '钟祥市',
                'parent_id' => 420800,
                'level' => 3,
            ),
            132 => 
            array (
                'id' => 2133,
                'zone_id' => 420901,
                'name' => '市辖区',
                'parent_id' => 420900,
                'level' => 3,
            ),
            133 => 
            array (
                'id' => 2134,
                'zone_id' => 420902,
                'name' => '孝南区',
                'parent_id' => 420900,
                'level' => 3,
            ),
            134 => 
            array (
                'id' => 2135,
                'zone_id' => 420921,
                'name' => '孝昌县',
                'parent_id' => 420900,
                'level' => 3,
            ),
            135 => 
            array (
                'id' => 2136,
                'zone_id' => 420922,
                'name' => '大悟县',
                'parent_id' => 420900,
                'level' => 3,
            ),
            136 => 
            array (
                'id' => 2137,
                'zone_id' => 420923,
                'name' => '云梦县',
                'parent_id' => 420900,
                'level' => 3,
            ),
            137 => 
            array (
                'id' => 2138,
                'zone_id' => 420981,
                'name' => '应城市',
                'parent_id' => 420900,
                'level' => 3,
            ),
            138 => 
            array (
                'id' => 2139,
                'zone_id' => 420982,
                'name' => '安陆市',
                'parent_id' => 420900,
                'level' => 3,
            ),
            139 => 
            array (
                'id' => 2140,
                'zone_id' => 420984,
                'name' => '汉川市',
                'parent_id' => 420900,
                'level' => 3,
            ),
            140 => 
            array (
                'id' => 2141,
                'zone_id' => 421001,
                'name' => '市辖区',
                'parent_id' => 421000,
                'level' => 3,
            ),
            141 => 
            array (
                'id' => 2142,
                'zone_id' => 421002,
                'name' => '沙市区',
                'parent_id' => 421000,
                'level' => 3,
            ),
            142 => 
            array (
                'id' => 2143,
                'zone_id' => 421003,
                'name' => '荆州区',
                'parent_id' => 421000,
                'level' => 3,
            ),
            143 => 
            array (
                'id' => 2144,
                'zone_id' => 421022,
                'name' => '公安县',
                'parent_id' => 421000,
                'level' => 3,
            ),
            144 => 
            array (
                'id' => 2145,
                'zone_id' => 421023,
                'name' => '监利县',
                'parent_id' => 421000,
                'level' => 3,
            ),
            145 => 
            array (
                'id' => 2146,
                'zone_id' => 421024,
                'name' => '江陵县',
                'parent_id' => 421000,
                'level' => 3,
            ),
            146 => 
            array (
                'id' => 2147,
                'zone_id' => 421081,
                'name' => '石首市',
                'parent_id' => 421000,
                'level' => 3,
            ),
            147 => 
            array (
                'id' => 2148,
                'zone_id' => 421083,
                'name' => '洪湖市',
                'parent_id' => 421000,
                'level' => 3,
            ),
            148 => 
            array (
                'id' => 2149,
                'zone_id' => 421087,
                'name' => '松滋市',
                'parent_id' => 421000,
                'level' => 3,
            ),
            149 => 
            array (
                'id' => 2150,
                'zone_id' => 421101,
                'name' => '市辖区',
                'parent_id' => 421100,
                'level' => 3,
            ),
            150 => 
            array (
                'id' => 2151,
                'zone_id' => 421102,
                'name' => '黄州区',
                'parent_id' => 421100,
                'level' => 3,
            ),
            151 => 
            array (
                'id' => 2152,
                'zone_id' => 421121,
                'name' => '团风县',
                'parent_id' => 421100,
                'level' => 3,
            ),
            152 => 
            array (
                'id' => 2153,
                'zone_id' => 421122,
                'name' => '红安县',
                'parent_id' => 421100,
                'level' => 3,
            ),
            153 => 
            array (
                'id' => 2154,
                'zone_id' => 421123,
                'name' => '罗田县',
                'parent_id' => 421100,
                'level' => 3,
            ),
            154 => 
            array (
                'id' => 2155,
                'zone_id' => 421124,
                'name' => '英山县',
                'parent_id' => 421100,
                'level' => 3,
            ),
            155 => 
            array (
                'id' => 2156,
                'zone_id' => 421125,
                'name' => '浠水县',
                'parent_id' => 421100,
                'level' => 3,
            ),
            156 => 
            array (
                'id' => 2157,
                'zone_id' => 421126,
                'name' => '蕲春县',
                'parent_id' => 421100,
                'level' => 3,
            ),
            157 => 
            array (
                'id' => 2158,
                'zone_id' => 421127,
                'name' => '黄梅县',
                'parent_id' => 421100,
                'level' => 3,
            ),
            158 => 
            array (
                'id' => 2159,
                'zone_id' => 421181,
                'name' => '麻城市',
                'parent_id' => 421100,
                'level' => 3,
            ),
            159 => 
            array (
                'id' => 2160,
                'zone_id' => 421182,
                'name' => '武穴市',
                'parent_id' => 421100,
                'level' => 3,
            ),
            160 => 
            array (
                'id' => 2161,
                'zone_id' => 421201,
                'name' => '市辖区',
                'parent_id' => 421200,
                'level' => 3,
            ),
            161 => 
            array (
                'id' => 2162,
                'zone_id' => 421202,
                'name' => '咸安区',
                'parent_id' => 421200,
                'level' => 3,
            ),
            162 => 
            array (
                'id' => 2163,
                'zone_id' => 421221,
                'name' => '嘉鱼县',
                'parent_id' => 421200,
                'level' => 3,
            ),
            163 => 
            array (
                'id' => 2164,
                'zone_id' => 421222,
                'name' => '通城县',
                'parent_id' => 421200,
                'level' => 3,
            ),
            164 => 
            array (
                'id' => 2165,
                'zone_id' => 421223,
                'name' => '崇阳县',
                'parent_id' => 421200,
                'level' => 3,
            ),
            165 => 
            array (
                'id' => 2166,
                'zone_id' => 421224,
                'name' => '通山县',
                'parent_id' => 421200,
                'level' => 3,
            ),
            166 => 
            array (
                'id' => 2167,
                'zone_id' => 421281,
                'name' => '赤壁市',
                'parent_id' => 421200,
                'level' => 3,
            ),
            167 => 
            array (
                'id' => 2168,
                'zone_id' => 421301,
                'name' => '市辖区',
                'parent_id' => 421300,
                'level' => 3,
            ),
            168 => 
            array (
                'id' => 2169,
                'zone_id' => 421302,
                'name' => '曾都区',
                'parent_id' => 421300,
                'level' => 3,
            ),
            169 => 
            array (
                'id' => 2170,
                'zone_id' => 421381,
                'name' => '广水市',
                'parent_id' => 421300,
                'level' => 3,
            ),
            170 => 
            array (
                'id' => 2171,
                'zone_id' => 422801,
                'name' => '恩施市',
                'parent_id' => 422800,
                'level' => 3,
            ),
            171 => 
            array (
                'id' => 2172,
                'zone_id' => 422802,
                'name' => '利川市',
                'parent_id' => 422800,
                'level' => 3,
            ),
            172 => 
            array (
                'id' => 2173,
                'zone_id' => 422822,
                'name' => '建始县',
                'parent_id' => 422800,
                'level' => 3,
            ),
            173 => 
            array (
                'id' => 2174,
                'zone_id' => 422823,
                'name' => '巴东县',
                'parent_id' => 422800,
                'level' => 3,
            ),
            174 => 
            array (
                'id' => 2175,
                'zone_id' => 422825,
                'name' => '宣恩县',
                'parent_id' => 422800,
                'level' => 3,
            ),
            175 => 
            array (
                'id' => 2176,
                'zone_id' => 422826,
                'name' => '咸丰县',
                'parent_id' => 422800,
                'level' => 3,
            ),
            176 => 
            array (
                'id' => 2177,
                'zone_id' => 422827,
                'name' => '来凤县',
                'parent_id' => 422800,
                'level' => 3,
            ),
            177 => 
            array (
                'id' => 2178,
                'zone_id' => 422828,
                'name' => '鹤峰县',
                'parent_id' => 422800,
                'level' => 3,
            ),
            178 => 
            array (
                'id' => 2179,
                'zone_id' => 429004,
                'name' => '仙桃市',
                'parent_id' => 429000,
                'level' => 3,
            ),
            179 => 
            array (
                'id' => 2180,
                'zone_id' => 429005,
                'name' => '潜江市',
                'parent_id' => 429000,
                'level' => 3,
            ),
            180 => 
            array (
                'id' => 2181,
                'zone_id' => 429006,
                'name' => '天门市',
                'parent_id' => 429000,
                'level' => 3,
            ),
            181 => 
            array (
                'id' => 2182,
                'zone_id' => 429021,
                'name' => '神农架林区',
                'parent_id' => 429000,
                'level' => 3,
            ),
            182 => 
            array (
                'id' => 2183,
                'zone_id' => 430101,
                'name' => '市辖区',
                'parent_id' => 430100,
                'level' => 3,
            ),
            183 => 
            array (
                'id' => 2184,
                'zone_id' => 430102,
                'name' => '芙蓉区',
                'parent_id' => 430100,
                'level' => 3,
            ),
            184 => 
            array (
                'id' => 2185,
                'zone_id' => 430103,
                'name' => '天心区',
                'parent_id' => 430100,
                'level' => 3,
            ),
            185 => 
            array (
                'id' => 2186,
                'zone_id' => 430104,
                'name' => '岳麓区',
                'parent_id' => 430100,
                'level' => 3,
            ),
            186 => 
            array (
                'id' => 2187,
                'zone_id' => 430105,
                'name' => '开福区',
                'parent_id' => 430100,
                'level' => 3,
            ),
            187 => 
            array (
                'id' => 2188,
                'zone_id' => 430111,
                'name' => '雨花区',
                'parent_id' => 430100,
                'level' => 3,
            ),
            188 => 
            array (
                'id' => 2189,
                'zone_id' => 430121,
                'name' => '长沙县',
                'parent_id' => 430100,
                'level' => 3,
            ),
            189 => 
            array (
                'id' => 2190,
                'zone_id' => 430122,
                'name' => '望城县',
                'parent_id' => 430100,
                'level' => 3,
            ),
            190 => 
            array (
                'id' => 2191,
                'zone_id' => 430124,
                'name' => '宁乡县',
                'parent_id' => 430100,
                'level' => 3,
            ),
            191 => 
            array (
                'id' => 2192,
                'zone_id' => 430181,
                'name' => '浏阳市',
                'parent_id' => 430100,
                'level' => 3,
            ),
            192 => 
            array (
                'id' => 2193,
                'zone_id' => 430201,
                'name' => '市辖区',
                'parent_id' => 430200,
                'level' => 3,
            ),
            193 => 
            array (
                'id' => 2194,
                'zone_id' => 430202,
                'name' => '荷塘区',
                'parent_id' => 430200,
                'level' => 3,
            ),
            194 => 
            array (
                'id' => 2195,
                'zone_id' => 430203,
                'name' => '芦淞区',
                'parent_id' => 430200,
                'level' => 3,
            ),
            195 => 
            array (
                'id' => 2196,
                'zone_id' => 430204,
                'name' => '石峰区',
                'parent_id' => 430200,
                'level' => 3,
            ),
            196 => 
            array (
                'id' => 2197,
                'zone_id' => 430211,
                'name' => '天元区',
                'parent_id' => 430200,
                'level' => 3,
            ),
            197 => 
            array (
                'id' => 2198,
                'zone_id' => 430221,
                'name' => '株洲县',
                'parent_id' => 430200,
                'level' => 3,
            ),
            198 => 
            array (
                'id' => 2199,
                'zone_id' => 430223,
                'name' => '攸　县',
                'parent_id' => 430200,
                'level' => 3,
            ),
            199 => 
            array (
                'id' => 2200,
                'zone_id' => 430224,
                'name' => '茶陵县',
                'parent_id' => 430200,
                'level' => 3,
            ),
            200 => 
            array (
                'id' => 2201,
                'zone_id' => 430225,
                'name' => '炎陵县',
                'parent_id' => 430200,
                'level' => 3,
            ),
            201 => 
            array (
                'id' => 2202,
                'zone_id' => 430281,
                'name' => '醴陵市',
                'parent_id' => 430200,
                'level' => 3,
            ),
            202 => 
            array (
                'id' => 2203,
                'zone_id' => 430301,
                'name' => '市辖区',
                'parent_id' => 430300,
                'level' => 3,
            ),
            203 => 
            array (
                'id' => 2204,
                'zone_id' => 430302,
                'name' => '雨湖区',
                'parent_id' => 430300,
                'level' => 3,
            ),
            204 => 
            array (
                'id' => 2205,
                'zone_id' => 430304,
                'name' => '岳塘区',
                'parent_id' => 430300,
                'level' => 3,
            ),
            205 => 
            array (
                'id' => 2206,
                'zone_id' => 430321,
                'name' => '湘潭县',
                'parent_id' => 430300,
                'level' => 3,
            ),
            206 => 
            array (
                'id' => 2207,
                'zone_id' => 430381,
                'name' => '湘乡市',
                'parent_id' => 430300,
                'level' => 3,
            ),
            207 => 
            array (
                'id' => 2208,
                'zone_id' => 430382,
                'name' => '韶山市',
                'parent_id' => 430300,
                'level' => 3,
            ),
            208 => 
            array (
                'id' => 2209,
                'zone_id' => 430401,
                'name' => '市辖区',
                'parent_id' => 430400,
                'level' => 3,
            ),
            209 => 
            array (
                'id' => 2210,
                'zone_id' => 430405,
                'name' => '珠晖区',
                'parent_id' => 430400,
                'level' => 3,
            ),
            210 => 
            array (
                'id' => 2211,
                'zone_id' => 430406,
                'name' => '雁峰区',
                'parent_id' => 430400,
                'level' => 3,
            ),
            211 => 
            array (
                'id' => 2212,
                'zone_id' => 430407,
                'name' => '石鼓区',
                'parent_id' => 430400,
                'level' => 3,
            ),
            212 => 
            array (
                'id' => 2213,
                'zone_id' => 430408,
                'name' => '蒸湘区',
                'parent_id' => 430400,
                'level' => 3,
            ),
            213 => 
            array (
                'id' => 2214,
                'zone_id' => 430412,
                'name' => '南岳区',
                'parent_id' => 430400,
                'level' => 3,
            ),
            214 => 
            array (
                'id' => 2215,
                'zone_id' => 430421,
                'name' => '衡阳县',
                'parent_id' => 430400,
                'level' => 3,
            ),
            215 => 
            array (
                'id' => 2216,
                'zone_id' => 430422,
                'name' => '衡南县',
                'parent_id' => 430400,
                'level' => 3,
            ),
            216 => 
            array (
                'id' => 2217,
                'zone_id' => 430423,
                'name' => '衡山县',
                'parent_id' => 430400,
                'level' => 3,
            ),
            217 => 
            array (
                'id' => 2218,
                'zone_id' => 430424,
                'name' => '衡东县',
                'parent_id' => 430400,
                'level' => 3,
            ),
            218 => 
            array (
                'id' => 2219,
                'zone_id' => 430426,
                'name' => '祁东县',
                'parent_id' => 430400,
                'level' => 3,
            ),
            219 => 
            array (
                'id' => 2220,
                'zone_id' => 430481,
                'name' => '耒阳市',
                'parent_id' => 430400,
                'level' => 3,
            ),
            220 => 
            array (
                'id' => 2221,
                'zone_id' => 430482,
                'name' => '常宁市',
                'parent_id' => 430400,
                'level' => 3,
            ),
            221 => 
            array (
                'id' => 2222,
                'zone_id' => 430501,
                'name' => '市辖区',
                'parent_id' => 430500,
                'level' => 3,
            ),
            222 => 
            array (
                'id' => 2223,
                'zone_id' => 430502,
                'name' => '双清区',
                'parent_id' => 430500,
                'level' => 3,
            ),
            223 => 
            array (
                'id' => 2224,
                'zone_id' => 430503,
                'name' => '大祥区',
                'parent_id' => 430500,
                'level' => 3,
            ),
            224 => 
            array (
                'id' => 2225,
                'zone_id' => 430511,
                'name' => '北塔区',
                'parent_id' => 430500,
                'level' => 3,
            ),
            225 => 
            array (
                'id' => 2226,
                'zone_id' => 430521,
                'name' => '邵东县',
                'parent_id' => 430500,
                'level' => 3,
            ),
            226 => 
            array (
                'id' => 2227,
                'zone_id' => 430522,
                'name' => '新邵县',
                'parent_id' => 430500,
                'level' => 3,
            ),
            227 => 
            array (
                'id' => 2228,
                'zone_id' => 430523,
                'name' => '邵阳县',
                'parent_id' => 430500,
                'level' => 3,
            ),
            228 => 
            array (
                'id' => 2229,
                'zone_id' => 430524,
                'name' => '隆回县',
                'parent_id' => 430500,
                'level' => 3,
            ),
            229 => 
            array (
                'id' => 2230,
                'zone_id' => 430525,
                'name' => '洞口县',
                'parent_id' => 430500,
                'level' => 3,
            ),
            230 => 
            array (
                'id' => 2231,
                'zone_id' => 430527,
                'name' => '绥宁县',
                'parent_id' => 430500,
                'level' => 3,
            ),
            231 => 
            array (
                'id' => 2232,
                'zone_id' => 430528,
                'name' => '新宁县',
                'parent_id' => 430500,
                'level' => 3,
            ),
            232 => 
            array (
                'id' => 2233,
                'zone_id' => 430529,
                'name' => '城步苗族自治县',
                'parent_id' => 430500,
                'level' => 3,
            ),
            233 => 
            array (
                'id' => 2234,
                'zone_id' => 430581,
                'name' => '武冈市',
                'parent_id' => 430500,
                'level' => 3,
            ),
            234 => 
            array (
                'id' => 2235,
                'zone_id' => 430601,
                'name' => '市辖区',
                'parent_id' => 430600,
                'level' => 3,
            ),
            235 => 
            array (
                'id' => 2236,
                'zone_id' => 430602,
                'name' => '岳阳楼区',
                'parent_id' => 430600,
                'level' => 3,
            ),
            236 => 
            array (
                'id' => 2237,
                'zone_id' => 430603,
                'name' => '云溪区',
                'parent_id' => 430600,
                'level' => 3,
            ),
            237 => 
            array (
                'id' => 2238,
                'zone_id' => 430611,
                'name' => '君山区',
                'parent_id' => 430600,
                'level' => 3,
            ),
            238 => 
            array (
                'id' => 2239,
                'zone_id' => 430621,
                'name' => '岳阳县',
                'parent_id' => 430600,
                'level' => 3,
            ),
            239 => 
            array (
                'id' => 2240,
                'zone_id' => 430623,
                'name' => '华容县',
                'parent_id' => 430600,
                'level' => 3,
            ),
            240 => 
            array (
                'id' => 2241,
                'zone_id' => 430624,
                'name' => '湘阴县',
                'parent_id' => 430600,
                'level' => 3,
            ),
            241 => 
            array (
                'id' => 2242,
                'zone_id' => 430626,
                'name' => '平江县',
                'parent_id' => 430600,
                'level' => 3,
            ),
            242 => 
            array (
                'id' => 2243,
                'zone_id' => 430681,
                'name' => '汨罗市',
                'parent_id' => 430600,
                'level' => 3,
            ),
            243 => 
            array (
                'id' => 2244,
                'zone_id' => 430682,
                'name' => '临湘市',
                'parent_id' => 430600,
                'level' => 3,
            ),
            244 => 
            array (
                'id' => 2245,
                'zone_id' => 430701,
                'name' => '市辖区',
                'parent_id' => 430700,
                'level' => 3,
            ),
            245 => 
            array (
                'id' => 2246,
                'zone_id' => 430702,
                'name' => '武陵区',
                'parent_id' => 430700,
                'level' => 3,
            ),
            246 => 
            array (
                'id' => 2247,
                'zone_id' => 430703,
                'name' => '鼎城区',
                'parent_id' => 430700,
                'level' => 3,
            ),
            247 => 
            array (
                'id' => 2248,
                'zone_id' => 430721,
                'name' => '安乡县',
                'parent_id' => 430700,
                'level' => 3,
            ),
            248 => 
            array (
                'id' => 2249,
                'zone_id' => 430722,
                'name' => '汉寿县',
                'parent_id' => 430700,
                'level' => 3,
            ),
            249 => 
            array (
                'id' => 2250,
                'zone_id' => 430723,
                'name' => '澧　县',
                'parent_id' => 430700,
                'level' => 3,
            ),
            250 => 
            array (
                'id' => 2251,
                'zone_id' => 430724,
                'name' => '临澧县',
                'parent_id' => 430700,
                'level' => 3,
            ),
            251 => 
            array (
                'id' => 2252,
                'zone_id' => 430725,
                'name' => '桃源县',
                'parent_id' => 430700,
                'level' => 3,
            ),
            252 => 
            array (
                'id' => 2253,
                'zone_id' => 430726,
                'name' => '石门县',
                'parent_id' => 430700,
                'level' => 3,
            ),
            253 => 
            array (
                'id' => 2254,
                'zone_id' => 430781,
                'name' => '津市市',
                'parent_id' => 430700,
                'level' => 3,
            ),
            254 => 
            array (
                'id' => 2255,
                'zone_id' => 430801,
                'name' => '市辖区',
                'parent_id' => 430800,
                'level' => 3,
            ),
            255 => 
            array (
                'id' => 2256,
                'zone_id' => 430802,
                'name' => '永定区',
                'parent_id' => 430800,
                'level' => 3,
            ),
            256 => 
            array (
                'id' => 2257,
                'zone_id' => 430811,
                'name' => '武陵源区',
                'parent_id' => 430800,
                'level' => 3,
            ),
            257 => 
            array (
                'id' => 2258,
                'zone_id' => 430821,
                'name' => '慈利县',
                'parent_id' => 430800,
                'level' => 3,
            ),
            258 => 
            array (
                'id' => 2259,
                'zone_id' => 430822,
                'name' => '桑植县',
                'parent_id' => 430800,
                'level' => 3,
            ),
            259 => 
            array (
                'id' => 2260,
                'zone_id' => 430901,
                'name' => '市辖区',
                'parent_id' => 430900,
                'level' => 3,
            ),
            260 => 
            array (
                'id' => 2261,
                'zone_id' => 430902,
                'name' => '资阳区',
                'parent_id' => 430900,
                'level' => 3,
            ),
            261 => 
            array (
                'id' => 2262,
                'zone_id' => 430903,
                'name' => '赫山区',
                'parent_id' => 430900,
                'level' => 3,
            ),
            262 => 
            array (
                'id' => 2263,
                'zone_id' => 430921,
                'name' => '南　县',
                'parent_id' => 430900,
                'level' => 3,
            ),
            263 => 
            array (
                'id' => 2264,
                'zone_id' => 430922,
                'name' => '桃江县',
                'parent_id' => 430900,
                'level' => 3,
            ),
            264 => 
            array (
                'id' => 2265,
                'zone_id' => 430923,
                'name' => '安化县',
                'parent_id' => 430900,
                'level' => 3,
            ),
            265 => 
            array (
                'id' => 2266,
                'zone_id' => 430981,
                'name' => '沅江市',
                'parent_id' => 430900,
                'level' => 3,
            ),
            266 => 
            array (
                'id' => 2267,
                'zone_id' => 431001,
                'name' => '市辖区',
                'parent_id' => 431000,
                'level' => 3,
            ),
            267 => 
            array (
                'id' => 2268,
                'zone_id' => 431002,
                'name' => '北湖区',
                'parent_id' => 431000,
                'level' => 3,
            ),
            268 => 
            array (
                'id' => 2269,
                'zone_id' => 431003,
                'name' => '苏仙区',
                'parent_id' => 431000,
                'level' => 3,
            ),
            269 => 
            array (
                'id' => 2270,
                'zone_id' => 431021,
                'name' => '桂阳县',
                'parent_id' => 431000,
                'level' => 3,
            ),
            270 => 
            array (
                'id' => 2271,
                'zone_id' => 431022,
                'name' => '宜章县',
                'parent_id' => 431000,
                'level' => 3,
            ),
            271 => 
            array (
                'id' => 2272,
                'zone_id' => 431023,
                'name' => '永兴县',
                'parent_id' => 431000,
                'level' => 3,
            ),
            272 => 
            array (
                'id' => 2273,
                'zone_id' => 431024,
                'name' => '嘉禾县',
                'parent_id' => 431000,
                'level' => 3,
            ),
            273 => 
            array (
                'id' => 2274,
                'zone_id' => 431025,
                'name' => '临武县',
                'parent_id' => 431000,
                'level' => 3,
            ),
            274 => 
            array (
                'id' => 2275,
                'zone_id' => 431026,
                'name' => '汝城县',
                'parent_id' => 431000,
                'level' => 3,
            ),
            275 => 
            array (
                'id' => 2276,
                'zone_id' => 431027,
                'name' => '桂东县',
                'parent_id' => 431000,
                'level' => 3,
            ),
            276 => 
            array (
                'id' => 2277,
                'zone_id' => 431028,
                'name' => '安仁县',
                'parent_id' => 431000,
                'level' => 3,
            ),
            277 => 
            array (
                'id' => 2278,
                'zone_id' => 431081,
                'name' => '资兴市',
                'parent_id' => 431000,
                'level' => 3,
            ),
            278 => 
            array (
                'id' => 2279,
                'zone_id' => 431101,
                'name' => '市辖区',
                'parent_id' => 431100,
                'level' => 3,
            ),
            279 => 
            array (
                'id' => 2280,
                'zone_id' => 431102,
                'name' => '芝山区',
                'parent_id' => 431100,
                'level' => 3,
            ),
            280 => 
            array (
                'id' => 2281,
                'zone_id' => 431103,
                'name' => '冷水滩区',
                'parent_id' => 431100,
                'level' => 3,
            ),
            281 => 
            array (
                'id' => 2282,
                'zone_id' => 431121,
                'name' => '祁阳县',
                'parent_id' => 431100,
                'level' => 3,
            ),
            282 => 
            array (
                'id' => 2283,
                'zone_id' => 431122,
                'name' => '东安县',
                'parent_id' => 431100,
                'level' => 3,
            ),
            283 => 
            array (
                'id' => 2284,
                'zone_id' => 431123,
                'name' => '双牌县',
                'parent_id' => 431100,
                'level' => 3,
            ),
            284 => 
            array (
                'id' => 2285,
                'zone_id' => 431124,
                'name' => '道　县',
                'parent_id' => 431100,
                'level' => 3,
            ),
            285 => 
            array (
                'id' => 2286,
                'zone_id' => 431125,
                'name' => '江永县',
                'parent_id' => 431100,
                'level' => 3,
            ),
            286 => 
            array (
                'id' => 2287,
                'zone_id' => 431126,
                'name' => '宁远县',
                'parent_id' => 431100,
                'level' => 3,
            ),
            287 => 
            array (
                'id' => 2288,
                'zone_id' => 431127,
                'name' => '蓝山县',
                'parent_id' => 431100,
                'level' => 3,
            ),
            288 => 
            array (
                'id' => 2289,
                'zone_id' => 431128,
                'name' => '新田县',
                'parent_id' => 431100,
                'level' => 3,
            ),
            289 => 
            array (
                'id' => 2290,
                'zone_id' => 431129,
                'name' => '江华瑶族自治县',
                'parent_id' => 431100,
                'level' => 3,
            ),
            290 => 
            array (
                'id' => 2291,
                'zone_id' => 431201,
                'name' => '市辖区',
                'parent_id' => 431200,
                'level' => 3,
            ),
            291 => 
            array (
                'id' => 2292,
                'zone_id' => 431202,
                'name' => '鹤城区',
                'parent_id' => 431200,
                'level' => 3,
            ),
            292 => 
            array (
                'id' => 2293,
                'zone_id' => 431221,
                'name' => '中方县',
                'parent_id' => 431200,
                'level' => 3,
            ),
            293 => 
            array (
                'id' => 2294,
                'zone_id' => 431222,
                'name' => '沅陵县',
                'parent_id' => 431200,
                'level' => 3,
            ),
            294 => 
            array (
                'id' => 2295,
                'zone_id' => 431223,
                'name' => '辰溪县',
                'parent_id' => 431200,
                'level' => 3,
            ),
            295 => 
            array (
                'id' => 2296,
                'zone_id' => 431224,
                'name' => '溆浦县',
                'parent_id' => 431200,
                'level' => 3,
            ),
            296 => 
            array (
                'id' => 2297,
                'zone_id' => 431225,
                'name' => '会同县',
                'parent_id' => 431200,
                'level' => 3,
            ),
            297 => 
            array (
                'id' => 2298,
                'zone_id' => 431226,
                'name' => '麻阳苗族自治县',
                'parent_id' => 431200,
                'level' => 3,
            ),
            298 => 
            array (
                'id' => 2299,
                'zone_id' => 431227,
                'name' => '新晃侗族自治县',
                'parent_id' => 431200,
                'level' => 3,
            ),
            299 => 
            array (
                'id' => 2300,
                'zone_id' => 431228,
                'name' => '芷江侗族自治县',
                'parent_id' => 431200,
                'level' => 3,
            ),
            300 => 
            array (
                'id' => 2301,
                'zone_id' => 431229,
                'name' => '靖州苗族侗族自治县',
                'parent_id' => 431200,
                'level' => 3,
            ),
            301 => 
            array (
                'id' => 2302,
                'zone_id' => 431230,
                'name' => '通道侗族自治县',
                'parent_id' => 431200,
                'level' => 3,
            ),
            302 => 
            array (
                'id' => 2303,
                'zone_id' => 431281,
                'name' => '洪江市',
                'parent_id' => 431200,
                'level' => 3,
            ),
            303 => 
            array (
                'id' => 2304,
                'zone_id' => 431301,
                'name' => '市辖区',
                'parent_id' => 431300,
                'level' => 3,
            ),
            304 => 
            array (
                'id' => 2305,
                'zone_id' => 431302,
                'name' => '娄星区',
                'parent_id' => 431300,
                'level' => 3,
            ),
            305 => 
            array (
                'id' => 2306,
                'zone_id' => 431321,
                'name' => '双峰县',
                'parent_id' => 431300,
                'level' => 3,
            ),
            306 => 
            array (
                'id' => 2307,
                'zone_id' => 431322,
                'name' => '新化县',
                'parent_id' => 431300,
                'level' => 3,
            ),
            307 => 
            array (
                'id' => 2308,
                'zone_id' => 431381,
                'name' => '冷水江市',
                'parent_id' => 431300,
                'level' => 3,
            ),
            308 => 
            array (
                'id' => 2309,
                'zone_id' => 431382,
                'name' => '涟源市',
                'parent_id' => 431300,
                'level' => 3,
            ),
            309 => 
            array (
                'id' => 2310,
                'zone_id' => 433101,
                'name' => '吉首市',
                'parent_id' => 433100,
                'level' => 3,
            ),
            310 => 
            array (
                'id' => 2311,
                'zone_id' => 433122,
                'name' => '泸溪县',
                'parent_id' => 433100,
                'level' => 3,
            ),
            311 => 
            array (
                'id' => 2312,
                'zone_id' => 433123,
                'name' => '凤凰县',
                'parent_id' => 433100,
                'level' => 3,
            ),
            312 => 
            array (
                'id' => 2313,
                'zone_id' => 433124,
                'name' => '花垣县',
                'parent_id' => 433100,
                'level' => 3,
            ),
            313 => 
            array (
                'id' => 2314,
                'zone_id' => 433125,
                'name' => '保靖县',
                'parent_id' => 433100,
                'level' => 3,
            ),
            314 => 
            array (
                'id' => 2315,
                'zone_id' => 433126,
                'name' => '古丈县',
                'parent_id' => 433100,
                'level' => 3,
            ),
            315 => 
            array (
                'id' => 2316,
                'zone_id' => 433127,
                'name' => '永顺县',
                'parent_id' => 433100,
                'level' => 3,
            ),
            316 => 
            array (
                'id' => 2317,
                'zone_id' => 433130,
                'name' => '龙山县',
                'parent_id' => 433100,
                'level' => 3,
            ),
            317 => 
            array (
                'id' => 2318,
                'zone_id' => 440101,
                'name' => '市辖区',
                'parent_id' => 440100,
                'level' => 3,
            ),
            318 => 
            array (
                'id' => 2319,
                'zone_id' => 440102,
                'name' => '东山区',
                'parent_id' => 440100,
                'level' => 3,
            ),
            319 => 
            array (
                'id' => 2320,
                'zone_id' => 440103,
                'name' => '荔湾区',
                'parent_id' => 440100,
                'level' => 3,
            ),
            320 => 
            array (
                'id' => 2321,
                'zone_id' => 440104,
                'name' => '越秀区',
                'parent_id' => 440100,
                'level' => 3,
            ),
            321 => 
            array (
                'id' => 2322,
                'zone_id' => 440105,
                'name' => '海珠区',
                'parent_id' => 440100,
                'level' => 3,
            ),
            322 => 
            array (
                'id' => 2323,
                'zone_id' => 440106,
                'name' => '天河区',
                'parent_id' => 440100,
                'level' => 3,
            ),
            323 => 
            array (
                'id' => 2324,
                'zone_id' => 440107,
                'name' => '芳村区',
                'parent_id' => 440100,
                'level' => 3,
            ),
            324 => 
            array (
                'id' => 2325,
                'zone_id' => 440111,
                'name' => '白云区',
                'parent_id' => 440100,
                'level' => 3,
            ),
            325 => 
            array (
                'id' => 2326,
                'zone_id' => 440112,
                'name' => '黄埔区',
                'parent_id' => 440100,
                'level' => 3,
            ),
            326 => 
            array (
                'id' => 2327,
                'zone_id' => 440113,
                'name' => '番禺区',
                'parent_id' => 440100,
                'level' => 3,
            ),
            327 => 
            array (
                'id' => 2328,
                'zone_id' => 440114,
                'name' => '花都区',
                'parent_id' => 440100,
                'level' => 3,
            ),
            328 => 
            array (
                'id' => 2329,
                'zone_id' => 440183,
                'name' => '增城市',
                'parent_id' => 440100,
                'level' => 3,
            ),
            329 => 
            array (
                'id' => 2330,
                'zone_id' => 440184,
                'name' => '从化市',
                'parent_id' => 440100,
                'level' => 3,
            ),
            330 => 
            array (
                'id' => 2331,
                'zone_id' => 440201,
                'name' => '市辖区',
                'parent_id' => 440200,
                'level' => 3,
            ),
            331 => 
            array (
                'id' => 2332,
                'zone_id' => 440203,
                'name' => '武江区',
                'parent_id' => 440200,
                'level' => 3,
            ),
            332 => 
            array (
                'id' => 2333,
                'zone_id' => 440204,
                'name' => '浈江区',
                'parent_id' => 440200,
                'level' => 3,
            ),
            333 => 
            array (
                'id' => 2334,
                'zone_id' => 440205,
                'name' => '曲江区',
                'parent_id' => 440200,
                'level' => 3,
            ),
            334 => 
            array (
                'id' => 2335,
                'zone_id' => 440222,
                'name' => '始兴县',
                'parent_id' => 440200,
                'level' => 3,
            ),
            335 => 
            array (
                'id' => 2336,
                'zone_id' => 440224,
                'name' => '仁化县',
                'parent_id' => 440200,
                'level' => 3,
            ),
            336 => 
            array (
                'id' => 2337,
                'zone_id' => 440229,
                'name' => '翁源县',
                'parent_id' => 440200,
                'level' => 3,
            ),
            337 => 
            array (
                'id' => 2338,
                'zone_id' => 440232,
                'name' => '乳源瑶族自治县',
                'parent_id' => 440200,
                'level' => 3,
            ),
            338 => 
            array (
                'id' => 2339,
                'zone_id' => 440233,
                'name' => '新丰县',
                'parent_id' => 440200,
                'level' => 3,
            ),
            339 => 
            array (
                'id' => 2340,
                'zone_id' => 440281,
                'name' => '乐昌市',
                'parent_id' => 440200,
                'level' => 3,
            ),
            340 => 
            array (
                'id' => 2341,
                'zone_id' => 440282,
                'name' => '南雄市',
                'parent_id' => 440200,
                'level' => 3,
            ),
            341 => 
            array (
                'id' => 2342,
                'zone_id' => 440301,
                'name' => '市辖区',
                'parent_id' => 440300,
                'level' => 3,
            ),
            342 => 
            array (
                'id' => 2343,
                'zone_id' => 440303,
                'name' => '罗湖区',
                'parent_id' => 440300,
                'level' => 3,
            ),
            343 => 
            array (
                'id' => 2344,
                'zone_id' => 440304,
                'name' => '福田区',
                'parent_id' => 440300,
                'level' => 3,
            ),
            344 => 
            array (
                'id' => 2345,
                'zone_id' => 440305,
                'name' => '南山区',
                'parent_id' => 440300,
                'level' => 3,
            ),
            345 => 
            array (
                'id' => 2346,
                'zone_id' => 440306,
                'name' => '宝安区',
                'parent_id' => 440300,
                'level' => 3,
            ),
            346 => 
            array (
                'id' => 2347,
                'zone_id' => 440307,
                'name' => '龙岗区',
                'parent_id' => 440300,
                'level' => 3,
            ),
            347 => 
            array (
                'id' => 2348,
                'zone_id' => 440308,
                'name' => '盐田区',
                'parent_id' => 440300,
                'level' => 3,
            ),
            348 => 
            array (
                'id' => 2349,
                'zone_id' => 440401,
                'name' => '市辖区',
                'parent_id' => 440400,
                'level' => 3,
            ),
            349 => 
            array (
                'id' => 2350,
                'zone_id' => 440402,
                'name' => '香洲区',
                'parent_id' => 440400,
                'level' => 3,
            ),
            350 => 
            array (
                'id' => 2351,
                'zone_id' => 440403,
                'name' => '斗门区',
                'parent_id' => 440400,
                'level' => 3,
            ),
            351 => 
            array (
                'id' => 2352,
                'zone_id' => 440404,
                'name' => '金湾区',
                'parent_id' => 440400,
                'level' => 3,
            ),
            352 => 
            array (
                'id' => 2353,
                'zone_id' => 440501,
                'name' => '市辖区',
                'parent_id' => 440500,
                'level' => 3,
            ),
            353 => 
            array (
                'id' => 2354,
                'zone_id' => 440507,
                'name' => '龙湖区',
                'parent_id' => 440500,
                'level' => 3,
            ),
            354 => 
            array (
                'id' => 2355,
                'zone_id' => 440511,
                'name' => '金平区',
                'parent_id' => 440500,
                'level' => 3,
            ),
            355 => 
            array (
                'id' => 2356,
                'zone_id' => 440512,
                'name' => '濠江区',
                'parent_id' => 440500,
                'level' => 3,
            ),
            356 => 
            array (
                'id' => 2357,
                'zone_id' => 440513,
                'name' => '潮阳区',
                'parent_id' => 440500,
                'level' => 3,
            ),
            357 => 
            array (
                'id' => 2358,
                'zone_id' => 440514,
                'name' => '潮南区',
                'parent_id' => 440500,
                'level' => 3,
            ),
            358 => 
            array (
                'id' => 2359,
                'zone_id' => 440515,
                'name' => '澄海区',
                'parent_id' => 440500,
                'level' => 3,
            ),
            359 => 
            array (
                'id' => 2360,
                'zone_id' => 440523,
                'name' => '南澳县',
                'parent_id' => 440500,
                'level' => 3,
            ),
            360 => 
            array (
                'id' => 2361,
                'zone_id' => 440601,
                'name' => '市辖区',
                'parent_id' => 440600,
                'level' => 3,
            ),
            361 => 
            array (
                'id' => 2362,
                'zone_id' => 440604,
                'name' => '禅城区',
                'parent_id' => 440600,
                'level' => 3,
            ),
            362 => 
            array (
                'id' => 2363,
                'zone_id' => 440605,
                'name' => '南海区',
                'parent_id' => 440600,
                'level' => 3,
            ),
            363 => 
            array (
                'id' => 2364,
                'zone_id' => 440606,
                'name' => '顺德区',
                'parent_id' => 440600,
                'level' => 3,
            ),
            364 => 
            array (
                'id' => 2365,
                'zone_id' => 440607,
                'name' => '三水区',
                'parent_id' => 440600,
                'level' => 3,
            ),
            365 => 
            array (
                'id' => 2366,
                'zone_id' => 440608,
                'name' => '高明区',
                'parent_id' => 440600,
                'level' => 3,
            ),
            366 => 
            array (
                'id' => 2367,
                'zone_id' => 440701,
                'name' => '市辖区',
                'parent_id' => 440700,
                'level' => 3,
            ),
            367 => 
            array (
                'id' => 2368,
                'zone_id' => 440703,
                'name' => '蓬江区',
                'parent_id' => 440700,
                'level' => 3,
            ),
            368 => 
            array (
                'id' => 2369,
                'zone_id' => 440704,
                'name' => '江海区',
                'parent_id' => 440700,
                'level' => 3,
            ),
            369 => 
            array (
                'id' => 2370,
                'zone_id' => 440705,
                'name' => '新会区',
                'parent_id' => 440700,
                'level' => 3,
            ),
            370 => 
            array (
                'id' => 2371,
                'zone_id' => 440781,
                'name' => '台山市',
                'parent_id' => 440700,
                'level' => 3,
            ),
            371 => 
            array (
                'id' => 2372,
                'zone_id' => 440783,
                'name' => '开平市',
                'parent_id' => 440700,
                'level' => 3,
            ),
            372 => 
            array (
                'id' => 2373,
                'zone_id' => 440784,
                'name' => '鹤山市',
                'parent_id' => 440700,
                'level' => 3,
            ),
            373 => 
            array (
                'id' => 2374,
                'zone_id' => 440785,
                'name' => '恩平市',
                'parent_id' => 440700,
                'level' => 3,
            ),
            374 => 
            array (
                'id' => 2375,
                'zone_id' => 440801,
                'name' => '市辖区',
                'parent_id' => 440800,
                'level' => 3,
            ),
            375 => 
            array (
                'id' => 2376,
                'zone_id' => 440802,
                'name' => '赤坎区',
                'parent_id' => 440800,
                'level' => 3,
            ),
            376 => 
            array (
                'id' => 2377,
                'zone_id' => 440803,
                'name' => '霞山区',
                'parent_id' => 440800,
                'level' => 3,
            ),
            377 => 
            array (
                'id' => 2378,
                'zone_id' => 440804,
                'name' => '坡头区',
                'parent_id' => 440800,
                'level' => 3,
            ),
            378 => 
            array (
                'id' => 2379,
                'zone_id' => 440811,
                'name' => '麻章区',
                'parent_id' => 440800,
                'level' => 3,
            ),
            379 => 
            array (
                'id' => 2380,
                'zone_id' => 440823,
                'name' => '遂溪县',
                'parent_id' => 440800,
                'level' => 3,
            ),
            380 => 
            array (
                'id' => 2381,
                'zone_id' => 440825,
                'name' => '徐闻县',
                'parent_id' => 440800,
                'level' => 3,
            ),
            381 => 
            array (
                'id' => 2382,
                'zone_id' => 440881,
                'name' => '廉江市',
                'parent_id' => 440800,
                'level' => 3,
            ),
            382 => 
            array (
                'id' => 2383,
                'zone_id' => 440882,
                'name' => '雷州市',
                'parent_id' => 440800,
                'level' => 3,
            ),
            383 => 
            array (
                'id' => 2384,
                'zone_id' => 440883,
                'name' => '吴川市',
                'parent_id' => 440800,
                'level' => 3,
            ),
            384 => 
            array (
                'id' => 2385,
                'zone_id' => 440901,
                'name' => '市辖区',
                'parent_id' => 440900,
                'level' => 3,
            ),
            385 => 
            array (
                'id' => 2386,
                'zone_id' => 440902,
                'name' => '茂南区',
                'parent_id' => 440900,
                'level' => 3,
            ),
            386 => 
            array (
                'id' => 2387,
                'zone_id' => 440903,
                'name' => '茂港区',
                'parent_id' => 440900,
                'level' => 3,
            ),
            387 => 
            array (
                'id' => 2388,
                'zone_id' => 440923,
                'name' => '电白县',
                'parent_id' => 440900,
                'level' => 3,
            ),
            388 => 
            array (
                'id' => 2389,
                'zone_id' => 440981,
                'name' => '高州市',
                'parent_id' => 440900,
                'level' => 3,
            ),
            389 => 
            array (
                'id' => 2390,
                'zone_id' => 440982,
                'name' => '化州市',
                'parent_id' => 440900,
                'level' => 3,
            ),
            390 => 
            array (
                'id' => 2391,
                'zone_id' => 440983,
                'name' => '信宜市',
                'parent_id' => 440900,
                'level' => 3,
            ),
            391 => 
            array (
                'id' => 2392,
                'zone_id' => 441201,
                'name' => '市辖区',
                'parent_id' => 441200,
                'level' => 3,
            ),
            392 => 
            array (
                'id' => 2393,
                'zone_id' => 441202,
                'name' => '端州区',
                'parent_id' => 441200,
                'level' => 3,
            ),
            393 => 
            array (
                'id' => 2394,
                'zone_id' => 441203,
                'name' => '鼎湖区',
                'parent_id' => 441200,
                'level' => 3,
            ),
            394 => 
            array (
                'id' => 2395,
                'zone_id' => 441223,
                'name' => '广宁县',
                'parent_id' => 441200,
                'level' => 3,
            ),
            395 => 
            array (
                'id' => 2396,
                'zone_id' => 441224,
                'name' => '怀集县',
                'parent_id' => 441200,
                'level' => 3,
            ),
            396 => 
            array (
                'id' => 2397,
                'zone_id' => 441225,
                'name' => '封开县',
                'parent_id' => 441200,
                'level' => 3,
            ),
            397 => 
            array (
                'id' => 2398,
                'zone_id' => 441226,
                'name' => '德庆县',
                'parent_id' => 441200,
                'level' => 3,
            ),
            398 => 
            array (
                'id' => 2399,
                'zone_id' => 441283,
                'name' => '高要市',
                'parent_id' => 441200,
                'level' => 3,
            ),
            399 => 
            array (
                'id' => 2400,
                'zone_id' => 441284,
                'name' => '四会市',
                'parent_id' => 441200,
                'level' => 3,
            ),
            400 => 
            array (
                'id' => 2401,
                'zone_id' => 441301,
                'name' => '市辖区',
                'parent_id' => 441300,
                'level' => 3,
            ),
            401 => 
            array (
                'id' => 2402,
                'zone_id' => 441302,
                'name' => '惠城区',
                'parent_id' => 441300,
                'level' => 3,
            ),
            402 => 
            array (
                'id' => 2403,
                'zone_id' => 441303,
                'name' => '惠阳区',
                'parent_id' => 441300,
                'level' => 3,
            ),
            403 => 
            array (
                'id' => 2404,
                'zone_id' => 441322,
                'name' => '博罗县',
                'parent_id' => 441300,
                'level' => 3,
            ),
            404 => 
            array (
                'id' => 2405,
                'zone_id' => 441323,
                'name' => '惠东县',
                'parent_id' => 441300,
                'level' => 3,
            ),
            405 => 
            array (
                'id' => 2406,
                'zone_id' => 441324,
                'name' => '龙门县',
                'parent_id' => 441300,
                'level' => 3,
            ),
            406 => 
            array (
                'id' => 2407,
                'zone_id' => 441401,
                'name' => '市辖区',
                'parent_id' => 441400,
                'level' => 3,
            ),
            407 => 
            array (
                'id' => 2408,
                'zone_id' => 441402,
                'name' => '梅江区',
                'parent_id' => 441400,
                'level' => 3,
            ),
            408 => 
            array (
                'id' => 2409,
                'zone_id' => 441421,
                'name' => '梅　县',
                'parent_id' => 441400,
                'level' => 3,
            ),
            409 => 
            array (
                'id' => 2410,
                'zone_id' => 441422,
                'name' => '大埔县',
                'parent_id' => 441400,
                'level' => 3,
            ),
            410 => 
            array (
                'id' => 2411,
                'zone_id' => 441423,
                'name' => '丰顺县',
                'parent_id' => 441400,
                'level' => 3,
            ),
            411 => 
            array (
                'id' => 2412,
                'zone_id' => 441424,
                'name' => '五华县',
                'parent_id' => 441400,
                'level' => 3,
            ),
            412 => 
            array (
                'id' => 2413,
                'zone_id' => 441426,
                'name' => '平远县',
                'parent_id' => 441400,
                'level' => 3,
            ),
            413 => 
            array (
                'id' => 2414,
                'zone_id' => 441427,
                'name' => '蕉岭县',
                'parent_id' => 441400,
                'level' => 3,
            ),
            414 => 
            array (
                'id' => 2415,
                'zone_id' => 441481,
                'name' => '兴宁市',
                'parent_id' => 441400,
                'level' => 3,
            ),
            415 => 
            array (
                'id' => 2416,
                'zone_id' => 441501,
                'name' => '市辖区',
                'parent_id' => 441500,
                'level' => 3,
            ),
            416 => 
            array (
                'id' => 2417,
                'zone_id' => 441502,
                'name' => '城　区',
                'parent_id' => 441500,
                'level' => 3,
            ),
            417 => 
            array (
                'id' => 2418,
                'zone_id' => 441521,
                'name' => '海丰县',
                'parent_id' => 441500,
                'level' => 3,
            ),
            418 => 
            array (
                'id' => 2419,
                'zone_id' => 441523,
                'name' => '陆河县',
                'parent_id' => 441500,
                'level' => 3,
            ),
            419 => 
            array (
                'id' => 2420,
                'zone_id' => 441581,
                'name' => '陆丰市',
                'parent_id' => 441500,
                'level' => 3,
            ),
            420 => 
            array (
                'id' => 2421,
                'zone_id' => 441601,
                'name' => '市辖区',
                'parent_id' => 441600,
                'level' => 3,
            ),
            421 => 
            array (
                'id' => 2422,
                'zone_id' => 441602,
                'name' => '源城区',
                'parent_id' => 441600,
                'level' => 3,
            ),
            422 => 
            array (
                'id' => 2423,
                'zone_id' => 441621,
                'name' => '紫金县',
                'parent_id' => 441600,
                'level' => 3,
            ),
            423 => 
            array (
                'id' => 2424,
                'zone_id' => 441622,
                'name' => '龙川县',
                'parent_id' => 441600,
                'level' => 3,
            ),
            424 => 
            array (
                'id' => 2425,
                'zone_id' => 441623,
                'name' => '连平县',
                'parent_id' => 441600,
                'level' => 3,
            ),
            425 => 
            array (
                'id' => 2426,
                'zone_id' => 441624,
                'name' => '和平县',
                'parent_id' => 441600,
                'level' => 3,
            ),
            426 => 
            array (
                'id' => 2427,
                'zone_id' => 441625,
                'name' => '东源县',
                'parent_id' => 441600,
                'level' => 3,
            ),
            427 => 
            array (
                'id' => 2428,
                'zone_id' => 441701,
                'name' => '市辖区',
                'parent_id' => 441700,
                'level' => 3,
            ),
            428 => 
            array (
                'id' => 2429,
                'zone_id' => 441702,
                'name' => '江城区',
                'parent_id' => 441700,
                'level' => 3,
            ),
            429 => 
            array (
                'id' => 2430,
                'zone_id' => 441721,
                'name' => '阳西县',
                'parent_id' => 441700,
                'level' => 3,
            ),
            430 => 
            array (
                'id' => 2431,
                'zone_id' => 441723,
                'name' => '阳东县',
                'parent_id' => 441700,
                'level' => 3,
            ),
            431 => 
            array (
                'id' => 2432,
                'zone_id' => 441781,
                'name' => '阳春市',
                'parent_id' => 441700,
                'level' => 3,
            ),
            432 => 
            array (
                'id' => 2433,
                'zone_id' => 441801,
                'name' => '市辖区',
                'parent_id' => 441800,
                'level' => 3,
            ),
            433 => 
            array (
                'id' => 2434,
                'zone_id' => 441802,
                'name' => '清城区',
                'parent_id' => 441800,
                'level' => 3,
            ),
            434 => 
            array (
                'id' => 2435,
                'zone_id' => 441821,
                'name' => '佛冈县',
                'parent_id' => 441800,
                'level' => 3,
            ),
            435 => 
            array (
                'id' => 2436,
                'zone_id' => 441823,
                'name' => '阳山县',
                'parent_id' => 441800,
                'level' => 3,
            ),
            436 => 
            array (
                'id' => 2437,
                'zone_id' => 441825,
                'name' => '连山壮族瑶族自治县',
                'parent_id' => 441800,
                'level' => 3,
            ),
            437 => 
            array (
                'id' => 2438,
                'zone_id' => 441826,
                'name' => '连南瑶族自治县',
                'parent_id' => 441800,
                'level' => 3,
            ),
            438 => 
            array (
                'id' => 2439,
                'zone_id' => 441827,
                'name' => '清新县',
                'parent_id' => 441800,
                'level' => 3,
            ),
            439 => 
            array (
                'id' => 2440,
                'zone_id' => 441881,
                'name' => '英德市',
                'parent_id' => 441800,
                'level' => 3,
            ),
            440 => 
            array (
                'id' => 2441,
                'zone_id' => 441882,
                'name' => '连州市',
                'parent_id' => 441800,
                'level' => 3,
            ),
            441 => 
            array (
                'id' => 2442,
                'zone_id' => 445101,
                'name' => '市辖区',
                'parent_id' => 445100,
                'level' => 3,
            ),
            442 => 
            array (
                'id' => 2443,
                'zone_id' => 445102,
                'name' => '湘桥区',
                'parent_id' => 445100,
                'level' => 3,
            ),
            443 => 
            array (
                'id' => 2444,
                'zone_id' => 445121,
                'name' => '潮安县',
                'parent_id' => 445100,
                'level' => 3,
            ),
            444 => 
            array (
                'id' => 2445,
                'zone_id' => 445122,
                'name' => '饶平县',
                'parent_id' => 445100,
                'level' => 3,
            ),
            445 => 
            array (
                'id' => 2446,
                'zone_id' => 445201,
                'name' => '市辖区',
                'parent_id' => 445200,
                'level' => 3,
            ),
            446 => 
            array (
                'id' => 2447,
                'zone_id' => 445202,
                'name' => '榕城区',
                'parent_id' => 445200,
                'level' => 3,
            ),
            447 => 
            array (
                'id' => 2448,
                'zone_id' => 445221,
                'name' => '揭东县',
                'parent_id' => 445200,
                'level' => 3,
            ),
            448 => 
            array (
                'id' => 2449,
                'zone_id' => 445222,
                'name' => '揭西县',
                'parent_id' => 445200,
                'level' => 3,
            ),
            449 => 
            array (
                'id' => 2450,
                'zone_id' => 445224,
                'name' => '惠来县',
                'parent_id' => 445200,
                'level' => 3,
            ),
            450 => 
            array (
                'id' => 2451,
                'zone_id' => 445281,
                'name' => '普宁市',
                'parent_id' => 445200,
                'level' => 3,
            ),
            451 => 
            array (
                'id' => 2452,
                'zone_id' => 445301,
                'name' => '市辖区',
                'parent_id' => 445300,
                'level' => 3,
            ),
            452 => 
            array (
                'id' => 2453,
                'zone_id' => 445302,
                'name' => '云城区',
                'parent_id' => 445300,
                'level' => 3,
            ),
            453 => 
            array (
                'id' => 2454,
                'zone_id' => 445321,
                'name' => '新兴县',
                'parent_id' => 445300,
                'level' => 3,
            ),
            454 => 
            array (
                'id' => 2455,
                'zone_id' => 445322,
                'name' => '郁南县',
                'parent_id' => 445300,
                'level' => 3,
            ),
            455 => 
            array (
                'id' => 2456,
                'zone_id' => 445323,
                'name' => '云安县',
                'parent_id' => 445300,
                'level' => 3,
            ),
            456 => 
            array (
                'id' => 2457,
                'zone_id' => 445381,
                'name' => '罗定市',
                'parent_id' => 445300,
                'level' => 3,
            ),
            457 => 
            array (
                'id' => 2458,
                'zone_id' => 450101,
                'name' => '市辖区',
                'parent_id' => 450100,
                'level' => 3,
            ),
            458 => 
            array (
                'id' => 2459,
                'zone_id' => 450102,
                'name' => '兴宁区',
                'parent_id' => 450100,
                'level' => 3,
            ),
            459 => 
            array (
                'id' => 2460,
                'zone_id' => 450103,
                'name' => '青秀区',
                'parent_id' => 450100,
                'level' => 3,
            ),
            460 => 
            array (
                'id' => 2461,
                'zone_id' => 450105,
                'name' => '江南区',
                'parent_id' => 450100,
                'level' => 3,
            ),
            461 => 
            array (
                'id' => 2462,
                'zone_id' => 450107,
                'name' => '西乡塘区',
                'parent_id' => 450100,
                'level' => 3,
            ),
            462 => 
            array (
                'id' => 2463,
                'zone_id' => 450108,
                'name' => '良庆区',
                'parent_id' => 450100,
                'level' => 3,
            ),
            463 => 
            array (
                'id' => 2464,
                'zone_id' => 450109,
                'name' => '邕宁区',
                'parent_id' => 450100,
                'level' => 3,
            ),
            464 => 
            array (
                'id' => 2465,
                'zone_id' => 450122,
                'name' => '武鸣县',
                'parent_id' => 450100,
                'level' => 3,
            ),
            465 => 
            array (
                'id' => 2466,
                'zone_id' => 450123,
                'name' => '隆安县',
                'parent_id' => 450100,
                'level' => 3,
            ),
            466 => 
            array (
                'id' => 2467,
                'zone_id' => 450124,
                'name' => '马山县',
                'parent_id' => 450100,
                'level' => 3,
            ),
            467 => 
            array (
                'id' => 2468,
                'zone_id' => 450125,
                'name' => '上林县',
                'parent_id' => 450100,
                'level' => 3,
            ),
            468 => 
            array (
                'id' => 2469,
                'zone_id' => 450126,
                'name' => '宾阳县',
                'parent_id' => 450100,
                'level' => 3,
            ),
            469 => 
            array (
                'id' => 2470,
                'zone_id' => 450127,
                'name' => '横　县',
                'parent_id' => 450100,
                'level' => 3,
            ),
            470 => 
            array (
                'id' => 2471,
                'zone_id' => 450201,
                'name' => '市辖区',
                'parent_id' => 450200,
                'level' => 3,
            ),
            471 => 
            array (
                'id' => 2472,
                'zone_id' => 450202,
                'name' => '城中区',
                'parent_id' => 450200,
                'level' => 3,
            ),
            472 => 
            array (
                'id' => 2473,
                'zone_id' => 450203,
                'name' => '鱼峰区',
                'parent_id' => 450200,
                'level' => 3,
            ),
            473 => 
            array (
                'id' => 2474,
                'zone_id' => 450204,
                'name' => '柳南区',
                'parent_id' => 450200,
                'level' => 3,
            ),
            474 => 
            array (
                'id' => 2475,
                'zone_id' => 450205,
                'name' => '柳北区',
                'parent_id' => 450200,
                'level' => 3,
            ),
            475 => 
            array (
                'id' => 2476,
                'zone_id' => 450221,
                'name' => '柳江县',
                'parent_id' => 450200,
                'level' => 3,
            ),
            476 => 
            array (
                'id' => 2477,
                'zone_id' => 450222,
                'name' => '柳城县',
                'parent_id' => 450200,
                'level' => 3,
            ),
            477 => 
            array (
                'id' => 2478,
                'zone_id' => 450223,
                'name' => '鹿寨县',
                'parent_id' => 450200,
                'level' => 3,
            ),
            478 => 
            array (
                'id' => 2479,
                'zone_id' => 450224,
                'name' => '融安县',
                'parent_id' => 450200,
                'level' => 3,
            ),
            479 => 
            array (
                'id' => 2480,
                'zone_id' => 450225,
                'name' => '融水苗族自治县',
                'parent_id' => 450200,
                'level' => 3,
            ),
            480 => 
            array (
                'id' => 2481,
                'zone_id' => 450226,
                'name' => '三江侗族自治县',
                'parent_id' => 450200,
                'level' => 3,
            ),
            481 => 
            array (
                'id' => 2482,
                'zone_id' => 450301,
                'name' => '市辖区',
                'parent_id' => 450300,
                'level' => 3,
            ),
            482 => 
            array (
                'id' => 2483,
                'zone_id' => 450302,
                'name' => '秀峰区',
                'parent_id' => 450300,
                'level' => 3,
            ),
            483 => 
            array (
                'id' => 2484,
                'zone_id' => 450303,
                'name' => '叠彩区',
                'parent_id' => 450300,
                'level' => 3,
            ),
            484 => 
            array (
                'id' => 2485,
                'zone_id' => 450304,
                'name' => '象山区',
                'parent_id' => 450300,
                'level' => 3,
            ),
            485 => 
            array (
                'id' => 2486,
                'zone_id' => 450305,
                'name' => '七星区',
                'parent_id' => 450300,
                'level' => 3,
            ),
            486 => 
            array (
                'id' => 2487,
                'zone_id' => 450311,
                'name' => '雁山区',
                'parent_id' => 450300,
                'level' => 3,
            ),
            487 => 
            array (
                'id' => 2488,
                'zone_id' => 450321,
                'name' => '阳朔县',
                'parent_id' => 450300,
                'level' => 3,
            ),
            488 => 
            array (
                'id' => 2489,
                'zone_id' => 450322,
                'name' => '临桂县',
                'parent_id' => 450300,
                'level' => 3,
            ),
            489 => 
            array (
                'id' => 2490,
                'zone_id' => 450323,
                'name' => '灵川县',
                'parent_id' => 450300,
                'level' => 3,
            ),
            490 => 
            array (
                'id' => 2491,
                'zone_id' => 450324,
                'name' => '全州县',
                'parent_id' => 450300,
                'level' => 3,
            ),
            491 => 
            array (
                'id' => 2492,
                'zone_id' => 450325,
                'name' => '兴安县',
                'parent_id' => 450300,
                'level' => 3,
            ),
            492 => 
            array (
                'id' => 2493,
                'zone_id' => 450326,
                'name' => '永福县',
                'parent_id' => 450300,
                'level' => 3,
            ),
            493 => 
            array (
                'id' => 2494,
                'zone_id' => 450327,
                'name' => '灌阳县',
                'parent_id' => 450300,
                'level' => 3,
            ),
            494 => 
            array (
                'id' => 2495,
                'zone_id' => 450328,
                'name' => '龙胜各族自治县',
                'parent_id' => 450300,
                'level' => 3,
            ),
            495 => 
            array (
                'id' => 2496,
                'zone_id' => 450329,
                'name' => '资源县',
                'parent_id' => 450300,
                'level' => 3,
            ),
            496 => 
            array (
                'id' => 2497,
                'zone_id' => 450330,
                'name' => '平乐县',
                'parent_id' => 450300,
                'level' => 3,
            ),
            497 => 
            array (
                'id' => 2498,
                'zone_id' => 450331,
                'name' => '荔蒲县',
                'parent_id' => 450300,
                'level' => 3,
            ),
            498 => 
            array (
                'id' => 2499,
                'zone_id' => 450332,
                'name' => '恭城瑶族自治县',
                'parent_id' => 450300,
                'level' => 3,
            ),
            499 => 
            array (
                'id' => 2500,
                'zone_id' => 450401,
                'name' => '市辖区',
                'parent_id' => 450400,
                'level' => 3,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'zone_id' => 450403,
                'name' => '万秀区',
                'parent_id' => 450400,
                'level' => 3,
            ),
            1 => 
            array (
                'id' => 2502,
                'zone_id' => 450404,
                'name' => '蝶山区',
                'parent_id' => 450400,
                'level' => 3,
            ),
            2 => 
            array (
                'id' => 2503,
                'zone_id' => 450405,
                'name' => '长洲区',
                'parent_id' => 450400,
                'level' => 3,
            ),
            3 => 
            array (
                'id' => 2504,
                'zone_id' => 450421,
                'name' => '苍梧县',
                'parent_id' => 450400,
                'level' => 3,
            ),
            4 => 
            array (
                'id' => 2505,
                'zone_id' => 450422,
                'name' => '藤　县',
                'parent_id' => 450400,
                'level' => 3,
            ),
            5 => 
            array (
                'id' => 2506,
                'zone_id' => 450423,
                'name' => '蒙山县',
                'parent_id' => 450400,
                'level' => 3,
            ),
            6 => 
            array (
                'id' => 2507,
                'zone_id' => 450481,
                'name' => '岑溪市',
                'parent_id' => 450400,
                'level' => 3,
            ),
            7 => 
            array (
                'id' => 2508,
                'zone_id' => 450501,
                'name' => '市辖区',
                'parent_id' => 450500,
                'level' => 3,
            ),
            8 => 
            array (
                'id' => 2509,
                'zone_id' => 450502,
                'name' => '海城区',
                'parent_id' => 450500,
                'level' => 3,
            ),
            9 => 
            array (
                'id' => 2510,
                'zone_id' => 450503,
                'name' => '银海区',
                'parent_id' => 450500,
                'level' => 3,
            ),
            10 => 
            array (
                'id' => 2511,
                'zone_id' => 450512,
                'name' => '铁山港区',
                'parent_id' => 450500,
                'level' => 3,
            ),
            11 => 
            array (
                'id' => 2512,
                'zone_id' => 450521,
                'name' => '合浦县',
                'parent_id' => 450500,
                'level' => 3,
            ),
            12 => 
            array (
                'id' => 2513,
                'zone_id' => 450601,
                'name' => '市辖区',
                'parent_id' => 450600,
                'level' => 3,
            ),
            13 => 
            array (
                'id' => 2514,
                'zone_id' => 450602,
                'name' => '港口区',
                'parent_id' => 450600,
                'level' => 3,
            ),
            14 => 
            array (
                'id' => 2515,
                'zone_id' => 450603,
                'name' => '防城区',
                'parent_id' => 450600,
                'level' => 3,
            ),
            15 => 
            array (
                'id' => 2516,
                'zone_id' => 450621,
                'name' => '上思县',
                'parent_id' => 450600,
                'level' => 3,
            ),
            16 => 
            array (
                'id' => 2517,
                'zone_id' => 450681,
                'name' => '东兴市',
                'parent_id' => 450600,
                'level' => 3,
            ),
            17 => 
            array (
                'id' => 2518,
                'zone_id' => 450701,
                'name' => '市辖区',
                'parent_id' => 450700,
                'level' => 3,
            ),
            18 => 
            array (
                'id' => 2519,
                'zone_id' => 450702,
                'name' => '钦南区',
                'parent_id' => 450700,
                'level' => 3,
            ),
            19 => 
            array (
                'id' => 2520,
                'zone_id' => 450703,
                'name' => '钦北区',
                'parent_id' => 450700,
                'level' => 3,
            ),
            20 => 
            array (
                'id' => 2521,
                'zone_id' => 450721,
                'name' => '灵山县',
                'parent_id' => 450700,
                'level' => 3,
            ),
            21 => 
            array (
                'id' => 2522,
                'zone_id' => 450722,
                'name' => '浦北县',
                'parent_id' => 450700,
                'level' => 3,
            ),
            22 => 
            array (
                'id' => 2523,
                'zone_id' => 450801,
                'name' => '市辖区',
                'parent_id' => 450800,
                'level' => 3,
            ),
            23 => 
            array (
                'id' => 2524,
                'zone_id' => 450802,
                'name' => '港北区',
                'parent_id' => 450800,
                'level' => 3,
            ),
            24 => 
            array (
                'id' => 2525,
                'zone_id' => 450803,
                'name' => '港南区',
                'parent_id' => 450800,
                'level' => 3,
            ),
            25 => 
            array (
                'id' => 2526,
                'zone_id' => 450804,
                'name' => '覃塘区',
                'parent_id' => 450800,
                'level' => 3,
            ),
            26 => 
            array (
                'id' => 2527,
                'zone_id' => 450821,
                'name' => '平南县',
                'parent_id' => 450800,
                'level' => 3,
            ),
            27 => 
            array (
                'id' => 2528,
                'zone_id' => 450881,
                'name' => '桂平市',
                'parent_id' => 450800,
                'level' => 3,
            ),
            28 => 
            array (
                'id' => 2529,
                'zone_id' => 450901,
                'name' => '市辖区',
                'parent_id' => 450900,
                'level' => 3,
            ),
            29 => 
            array (
                'id' => 2530,
                'zone_id' => 450902,
                'name' => '玉州区',
                'parent_id' => 450900,
                'level' => 3,
            ),
            30 => 
            array (
                'id' => 2531,
                'zone_id' => 450921,
                'name' => '容　县',
                'parent_id' => 450900,
                'level' => 3,
            ),
            31 => 
            array (
                'id' => 2532,
                'zone_id' => 450922,
                'name' => '陆川县',
                'parent_id' => 450900,
                'level' => 3,
            ),
            32 => 
            array (
                'id' => 2533,
                'zone_id' => 450923,
                'name' => '博白县',
                'parent_id' => 450900,
                'level' => 3,
            ),
            33 => 
            array (
                'id' => 2534,
                'zone_id' => 450924,
                'name' => '兴业县',
                'parent_id' => 450900,
                'level' => 3,
            ),
            34 => 
            array (
                'id' => 2535,
                'zone_id' => 450981,
                'name' => '北流市',
                'parent_id' => 450900,
                'level' => 3,
            ),
            35 => 
            array (
                'id' => 2536,
                'zone_id' => 451001,
                'name' => '市辖区',
                'parent_id' => 451000,
                'level' => 3,
            ),
            36 => 
            array (
                'id' => 2537,
                'zone_id' => 451002,
                'name' => '右江区',
                'parent_id' => 451000,
                'level' => 3,
            ),
            37 => 
            array (
                'id' => 2538,
                'zone_id' => 451021,
                'name' => '田阳县',
                'parent_id' => 451000,
                'level' => 3,
            ),
            38 => 
            array (
                'id' => 2539,
                'zone_id' => 451022,
                'name' => '田东县',
                'parent_id' => 451000,
                'level' => 3,
            ),
            39 => 
            array (
                'id' => 2540,
                'zone_id' => 451023,
                'name' => '平果县',
                'parent_id' => 451000,
                'level' => 3,
            ),
            40 => 
            array (
                'id' => 2541,
                'zone_id' => 451024,
                'name' => '德保县',
                'parent_id' => 451000,
                'level' => 3,
            ),
            41 => 
            array (
                'id' => 2542,
                'zone_id' => 451025,
                'name' => '靖西县',
                'parent_id' => 451000,
                'level' => 3,
            ),
            42 => 
            array (
                'id' => 2543,
                'zone_id' => 451026,
                'name' => '那坡县',
                'parent_id' => 451000,
                'level' => 3,
            ),
            43 => 
            array (
                'id' => 2544,
                'zone_id' => 451027,
                'name' => '凌云县',
                'parent_id' => 451000,
                'level' => 3,
            ),
            44 => 
            array (
                'id' => 2545,
                'zone_id' => 451028,
                'name' => '乐业县',
                'parent_id' => 451000,
                'level' => 3,
            ),
            45 => 
            array (
                'id' => 2546,
                'zone_id' => 451029,
                'name' => '田林县',
                'parent_id' => 451000,
                'level' => 3,
            ),
            46 => 
            array (
                'id' => 2547,
                'zone_id' => 451030,
                'name' => '西林县',
                'parent_id' => 451000,
                'level' => 3,
            ),
            47 => 
            array (
                'id' => 2548,
                'zone_id' => 451031,
                'name' => '隆林各族自治县',
                'parent_id' => 451000,
                'level' => 3,
            ),
            48 => 
            array (
                'id' => 2549,
                'zone_id' => 451101,
                'name' => '市辖区',
                'parent_id' => 451100,
                'level' => 3,
            ),
            49 => 
            array (
                'id' => 2550,
                'zone_id' => 451102,
                'name' => '八步区',
                'parent_id' => 451100,
                'level' => 3,
            ),
            50 => 
            array (
                'id' => 2551,
                'zone_id' => 451121,
                'name' => '昭平县',
                'parent_id' => 451100,
                'level' => 3,
            ),
            51 => 
            array (
                'id' => 2552,
                'zone_id' => 451122,
                'name' => '钟山县',
                'parent_id' => 451100,
                'level' => 3,
            ),
            52 => 
            array (
                'id' => 2553,
                'zone_id' => 451123,
                'name' => '富川瑶族自治县',
                'parent_id' => 451100,
                'level' => 3,
            ),
            53 => 
            array (
                'id' => 2554,
                'zone_id' => 451201,
                'name' => '市辖区',
                'parent_id' => 451200,
                'level' => 3,
            ),
            54 => 
            array (
                'id' => 2555,
                'zone_id' => 451202,
                'name' => '金城江区',
                'parent_id' => 451200,
                'level' => 3,
            ),
            55 => 
            array (
                'id' => 2556,
                'zone_id' => 451221,
                'name' => '南丹县',
                'parent_id' => 451200,
                'level' => 3,
            ),
            56 => 
            array (
                'id' => 2557,
                'zone_id' => 451222,
                'name' => '天峨县',
                'parent_id' => 451200,
                'level' => 3,
            ),
            57 => 
            array (
                'id' => 2558,
                'zone_id' => 451223,
                'name' => '凤山县',
                'parent_id' => 451200,
                'level' => 3,
            ),
            58 => 
            array (
                'id' => 2559,
                'zone_id' => 451224,
                'name' => '东兰县',
                'parent_id' => 451200,
                'level' => 3,
            ),
            59 => 
            array (
                'id' => 2560,
                'zone_id' => 451225,
                'name' => '罗城仫佬族自治县',
                'parent_id' => 451200,
                'level' => 3,
            ),
            60 => 
            array (
                'id' => 2561,
                'zone_id' => 451226,
                'name' => '环江毛南族自治县',
                'parent_id' => 451200,
                'level' => 3,
            ),
            61 => 
            array (
                'id' => 2562,
                'zone_id' => 451227,
                'name' => '巴马瑶族自治县',
                'parent_id' => 451200,
                'level' => 3,
            ),
            62 => 
            array (
                'id' => 2563,
                'zone_id' => 451228,
                'name' => '都安瑶族自治县',
                'parent_id' => 451200,
                'level' => 3,
            ),
            63 => 
            array (
                'id' => 2564,
                'zone_id' => 451229,
                'name' => '大化瑶族自治县',
                'parent_id' => 451200,
                'level' => 3,
            ),
            64 => 
            array (
                'id' => 2565,
                'zone_id' => 451281,
                'name' => '宜州市',
                'parent_id' => 451200,
                'level' => 3,
            ),
            65 => 
            array (
                'id' => 2566,
                'zone_id' => 451301,
                'name' => '市辖区',
                'parent_id' => 451300,
                'level' => 3,
            ),
            66 => 
            array (
                'id' => 2567,
                'zone_id' => 451302,
                'name' => '兴宾区',
                'parent_id' => 451300,
                'level' => 3,
            ),
            67 => 
            array (
                'id' => 2568,
                'zone_id' => 451321,
                'name' => '忻城县',
                'parent_id' => 451300,
                'level' => 3,
            ),
            68 => 
            array (
                'id' => 2569,
                'zone_id' => 451322,
                'name' => '象州县',
                'parent_id' => 451300,
                'level' => 3,
            ),
            69 => 
            array (
                'id' => 2570,
                'zone_id' => 451323,
                'name' => '武宣县',
                'parent_id' => 451300,
                'level' => 3,
            ),
            70 => 
            array (
                'id' => 2571,
                'zone_id' => 451324,
                'name' => '金秀瑶族自治县',
                'parent_id' => 451300,
                'level' => 3,
            ),
            71 => 
            array (
                'id' => 2572,
                'zone_id' => 451381,
                'name' => '合山市',
                'parent_id' => 451300,
                'level' => 3,
            ),
            72 => 
            array (
                'id' => 2573,
                'zone_id' => 451401,
                'name' => '市辖区',
                'parent_id' => 451400,
                'level' => 3,
            ),
            73 => 
            array (
                'id' => 2574,
                'zone_id' => 451402,
                'name' => '江洲区',
                'parent_id' => 451400,
                'level' => 3,
            ),
            74 => 
            array (
                'id' => 2575,
                'zone_id' => 451421,
                'name' => '扶绥县',
                'parent_id' => 451400,
                'level' => 3,
            ),
            75 => 
            array (
                'id' => 2576,
                'zone_id' => 451422,
                'name' => '宁明县',
                'parent_id' => 451400,
                'level' => 3,
            ),
            76 => 
            array (
                'id' => 2577,
                'zone_id' => 451423,
                'name' => '龙州县',
                'parent_id' => 451400,
                'level' => 3,
            ),
            77 => 
            array (
                'id' => 2578,
                'zone_id' => 451424,
                'name' => '大新县',
                'parent_id' => 451400,
                'level' => 3,
            ),
            78 => 
            array (
                'id' => 2579,
                'zone_id' => 451425,
                'name' => '天等县',
                'parent_id' => 451400,
                'level' => 3,
            ),
            79 => 
            array (
                'id' => 2580,
                'zone_id' => 451481,
                'name' => '凭祥市',
                'parent_id' => 451400,
                'level' => 3,
            ),
            80 => 
            array (
                'id' => 2581,
                'zone_id' => 460101,
                'name' => '市辖区',
                'parent_id' => 460100,
                'level' => 3,
            ),
            81 => 
            array (
                'id' => 2582,
                'zone_id' => 460105,
                'name' => '秀英区',
                'parent_id' => 460100,
                'level' => 3,
            ),
            82 => 
            array (
                'id' => 2583,
                'zone_id' => 460106,
                'name' => '龙华区',
                'parent_id' => 460100,
                'level' => 3,
            ),
            83 => 
            array (
                'id' => 2584,
                'zone_id' => 460107,
                'name' => '琼山区',
                'parent_id' => 460100,
                'level' => 3,
            ),
            84 => 
            array (
                'id' => 2585,
                'zone_id' => 460108,
                'name' => '美兰区',
                'parent_id' => 460100,
                'level' => 3,
            ),
            85 => 
            array (
                'id' => 2586,
                'zone_id' => 460201,
                'name' => '市辖区',
                'parent_id' => 460200,
                'level' => 3,
            ),
            86 => 
            array (
                'id' => 2587,
                'zone_id' => 469001,
                'name' => '五指山市',
                'parent_id' => 469000,
                'level' => 3,
            ),
            87 => 
            array (
                'id' => 2588,
                'zone_id' => 469002,
                'name' => '琼海市',
                'parent_id' => 469000,
                'level' => 3,
            ),
            88 => 
            array (
                'id' => 2589,
                'zone_id' => 469003,
                'name' => '儋州市',
                'parent_id' => 469000,
                'level' => 3,
            ),
            89 => 
            array (
                'id' => 2590,
                'zone_id' => 469005,
                'name' => '文昌市',
                'parent_id' => 469000,
                'level' => 3,
            ),
            90 => 
            array (
                'id' => 2591,
                'zone_id' => 469006,
                'name' => '万宁市',
                'parent_id' => 469000,
                'level' => 3,
            ),
            91 => 
            array (
                'id' => 2592,
                'zone_id' => 469007,
                'name' => '东方市',
                'parent_id' => 469000,
                'level' => 3,
            ),
            92 => 
            array (
                'id' => 2593,
                'zone_id' => 469025,
                'name' => '定安县',
                'parent_id' => 469000,
                'level' => 3,
            ),
            93 => 
            array (
                'id' => 2594,
                'zone_id' => 469026,
                'name' => '屯昌县',
                'parent_id' => 469000,
                'level' => 3,
            ),
            94 => 
            array (
                'id' => 2595,
                'zone_id' => 469027,
                'name' => '澄迈县',
                'parent_id' => 469000,
                'level' => 3,
            ),
            95 => 
            array (
                'id' => 2596,
                'zone_id' => 469028,
                'name' => '临高县',
                'parent_id' => 469000,
                'level' => 3,
            ),
            96 => 
            array (
                'id' => 2597,
                'zone_id' => 469030,
                'name' => '白沙黎族自治县',
                'parent_id' => 469000,
                'level' => 3,
            ),
            97 => 
            array (
                'id' => 2598,
                'zone_id' => 469031,
                'name' => '昌江黎族自治县',
                'parent_id' => 469000,
                'level' => 3,
            ),
            98 => 
            array (
                'id' => 2599,
                'zone_id' => 469033,
                'name' => '乐东黎族自治县',
                'parent_id' => 469000,
                'level' => 3,
            ),
            99 => 
            array (
                'id' => 2600,
                'zone_id' => 469034,
                'name' => '陵水黎族自治县',
                'parent_id' => 469000,
                'level' => 3,
            ),
            100 => 
            array (
                'id' => 2601,
                'zone_id' => 469035,
                'name' => '保亭黎族苗族自治县',
                'parent_id' => 469000,
                'level' => 3,
            ),
            101 => 
            array (
                'id' => 2602,
                'zone_id' => 469036,
                'name' => '琼中黎族苗族自治县',
                'parent_id' => 469000,
                'level' => 3,
            ),
            102 => 
            array (
                'id' => 2603,
                'zone_id' => 469037,
                'name' => '西沙群岛',
                'parent_id' => 469000,
                'level' => 3,
            ),
            103 => 
            array (
                'id' => 2604,
                'zone_id' => 469038,
                'name' => '南沙群岛',
                'parent_id' => 469000,
                'level' => 3,
            ),
            104 => 
            array (
                'id' => 2605,
                'zone_id' => 469039,
                'name' => '中沙群岛的岛礁及其海域',
                'parent_id' => 469000,
                'level' => 3,
            ),
            105 => 
            array (
                'id' => 2606,
                'zone_id' => 500101,
                'name' => '万州区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            106 => 
            array (
                'id' => 2607,
                'zone_id' => 500102,
                'name' => '涪陵区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            107 => 
            array (
                'id' => 2608,
                'zone_id' => 500103,
                'name' => '渝中区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            108 => 
            array (
                'id' => 2609,
                'zone_id' => 500104,
                'name' => '大渡口区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            109 => 
            array (
                'id' => 2610,
                'zone_id' => 500105,
                'name' => '江北区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            110 => 
            array (
                'id' => 2611,
                'zone_id' => 500106,
                'name' => '沙坪坝区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            111 => 
            array (
                'id' => 2612,
                'zone_id' => 500107,
                'name' => '九龙坡区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            112 => 
            array (
                'id' => 2613,
                'zone_id' => 500108,
                'name' => '南岸区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            113 => 
            array (
                'id' => 2614,
                'zone_id' => 500109,
                'name' => '北碚区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            114 => 
            array (
                'id' => 2615,
                'zone_id' => 500110,
                'name' => '万盛区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            115 => 
            array (
                'id' => 2616,
                'zone_id' => 500111,
                'name' => '双桥区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            116 => 
            array (
                'id' => 2617,
                'zone_id' => 500112,
                'name' => '渝北区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            117 => 
            array (
                'id' => 2618,
                'zone_id' => 500113,
                'name' => '巴南区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            118 => 
            array (
                'id' => 2619,
                'zone_id' => 500114,
                'name' => '黔江区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            119 => 
            array (
                'id' => 2620,
                'zone_id' => 500115,
                'name' => '长寿区',
                'parent_id' => 500100,
                'level' => 3,
            ),
            120 => 
            array (
                'id' => 2621,
                'zone_id' => 500222,
                'name' => '綦江县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            121 => 
            array (
                'id' => 2622,
                'zone_id' => 500223,
                'name' => '潼南县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            122 => 
            array (
                'id' => 2623,
                'zone_id' => 500224,
                'name' => '铜梁县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            123 => 
            array (
                'id' => 2624,
                'zone_id' => 500225,
                'name' => '大足县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            124 => 
            array (
                'id' => 2625,
                'zone_id' => 500226,
                'name' => '荣昌县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            125 => 
            array (
                'id' => 2626,
                'zone_id' => 500227,
                'name' => '璧山县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            126 => 
            array (
                'id' => 2627,
                'zone_id' => 500228,
                'name' => '梁平县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            127 => 
            array (
                'id' => 2628,
                'zone_id' => 500229,
                'name' => '城口县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            128 => 
            array (
                'id' => 2629,
                'zone_id' => 500230,
                'name' => '丰都县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            129 => 
            array (
                'id' => 2630,
                'zone_id' => 500231,
                'name' => '垫江县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            130 => 
            array (
                'id' => 2631,
                'zone_id' => 500232,
                'name' => '武隆县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            131 => 
            array (
                'id' => 2632,
                'zone_id' => 500233,
                'name' => '忠　县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            132 => 
            array (
                'id' => 2633,
                'zone_id' => 500234,
                'name' => '开　县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            133 => 
            array (
                'id' => 2634,
                'zone_id' => 500235,
                'name' => '云阳县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            134 => 
            array (
                'id' => 2635,
                'zone_id' => 500236,
                'name' => '奉节县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            135 => 
            array (
                'id' => 2636,
                'zone_id' => 500237,
                'name' => '巫山县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            136 => 
            array (
                'id' => 2637,
                'zone_id' => 500238,
                'name' => '巫溪县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            137 => 
            array (
                'id' => 2638,
                'zone_id' => 500240,
                'name' => '石柱土家族自治县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            138 => 
            array (
                'id' => 2639,
                'zone_id' => 500241,
                'name' => '秀山土家族苗族自治县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            139 => 
            array (
                'id' => 2640,
                'zone_id' => 500242,
                'name' => '酉阳土家族苗族自治县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            140 => 
            array (
                'id' => 2641,
                'zone_id' => 500243,
                'name' => '彭水苗族土家族自治县',
                'parent_id' => 500100,
                'level' => 3,
            ),
            141 => 
            array (
                'id' => 2642,
                'zone_id' => 500381,
                'name' => '江津市',
                'parent_id' => 500100,
                'level' => 3,
            ),
            142 => 
            array (
                'id' => 2643,
                'zone_id' => 500382,
                'name' => '合川市',
                'parent_id' => 500100,
                'level' => 3,
            ),
            143 => 
            array (
                'id' => 2644,
                'zone_id' => 500383,
                'name' => '永川市',
                'parent_id' => 500100,
                'level' => 3,
            ),
            144 => 
            array (
                'id' => 2645,
                'zone_id' => 500384,
                'name' => '南川市',
                'parent_id' => 500100,
                'level' => 3,
            ),
            145 => 
            array (
                'id' => 2646,
                'zone_id' => 510101,
                'name' => '市辖区',
                'parent_id' => 510100,
                'level' => 3,
            ),
            146 => 
            array (
                'id' => 2647,
                'zone_id' => 510104,
                'name' => '锦江区',
                'parent_id' => 510100,
                'level' => 3,
            ),
            147 => 
            array (
                'id' => 2648,
                'zone_id' => 510105,
                'name' => '青羊区',
                'parent_id' => 510100,
                'level' => 3,
            ),
            148 => 
            array (
                'id' => 2649,
                'zone_id' => 510106,
                'name' => '金牛区',
                'parent_id' => 510100,
                'level' => 3,
            ),
            149 => 
            array (
                'id' => 2650,
                'zone_id' => 510107,
                'name' => '武侯区',
                'parent_id' => 510100,
                'level' => 3,
            ),
            150 => 
            array (
                'id' => 2651,
                'zone_id' => 510108,
                'name' => '成华区',
                'parent_id' => 510100,
                'level' => 3,
            ),
            151 => 
            array (
                'id' => 2652,
                'zone_id' => 510112,
                'name' => '龙泉驿区',
                'parent_id' => 510100,
                'level' => 3,
            ),
            152 => 
            array (
                'id' => 2653,
                'zone_id' => 510113,
                'name' => '青白江区',
                'parent_id' => 510100,
                'level' => 3,
            ),
            153 => 
            array (
                'id' => 2654,
                'zone_id' => 510114,
                'name' => '新都区',
                'parent_id' => 510100,
                'level' => 3,
            ),
            154 => 
            array (
                'id' => 2655,
                'zone_id' => 510115,
                'name' => '温江区',
                'parent_id' => 510100,
                'level' => 3,
            ),
            155 => 
            array (
                'id' => 2656,
                'zone_id' => 510121,
                'name' => '金堂县',
                'parent_id' => 510100,
                'level' => 3,
            ),
            156 => 
            array (
                'id' => 2657,
                'zone_id' => 510122,
                'name' => '双流县',
                'parent_id' => 510100,
                'level' => 3,
            ),
            157 => 
            array (
                'id' => 2658,
                'zone_id' => 510124,
                'name' => '郫　县',
                'parent_id' => 510100,
                'level' => 3,
            ),
            158 => 
            array (
                'id' => 2659,
                'zone_id' => 510129,
                'name' => '大邑县',
                'parent_id' => 510100,
                'level' => 3,
            ),
            159 => 
            array (
                'id' => 2660,
                'zone_id' => 510131,
                'name' => '蒲江县',
                'parent_id' => 510100,
                'level' => 3,
            ),
            160 => 
            array (
                'id' => 2661,
                'zone_id' => 510132,
                'name' => '新津县',
                'parent_id' => 510100,
                'level' => 3,
            ),
            161 => 
            array (
                'id' => 2662,
                'zone_id' => 510181,
                'name' => '都江堰市',
                'parent_id' => 510100,
                'level' => 3,
            ),
            162 => 
            array (
                'id' => 2663,
                'zone_id' => 510182,
                'name' => '彭州市',
                'parent_id' => 510100,
                'level' => 3,
            ),
            163 => 
            array (
                'id' => 2664,
                'zone_id' => 510183,
                'name' => '邛崃市',
                'parent_id' => 510100,
                'level' => 3,
            ),
            164 => 
            array (
                'id' => 2665,
                'zone_id' => 510184,
                'name' => '崇州市',
                'parent_id' => 510100,
                'level' => 3,
            ),
            165 => 
            array (
                'id' => 2666,
                'zone_id' => 510301,
                'name' => '市辖区',
                'parent_id' => 510300,
                'level' => 3,
            ),
            166 => 
            array (
                'id' => 2667,
                'zone_id' => 510302,
                'name' => '自流井区',
                'parent_id' => 510300,
                'level' => 3,
            ),
            167 => 
            array (
                'id' => 2668,
                'zone_id' => 510303,
                'name' => '贡井区',
                'parent_id' => 510300,
                'level' => 3,
            ),
            168 => 
            array (
                'id' => 2669,
                'zone_id' => 510304,
                'name' => '大安区',
                'parent_id' => 510300,
                'level' => 3,
            ),
            169 => 
            array (
                'id' => 2670,
                'zone_id' => 510311,
                'name' => '沿滩区',
                'parent_id' => 510300,
                'level' => 3,
            ),
            170 => 
            array (
                'id' => 2671,
                'zone_id' => 510321,
                'name' => '荣　县',
                'parent_id' => 510300,
                'level' => 3,
            ),
            171 => 
            array (
                'id' => 2672,
                'zone_id' => 510322,
                'name' => '富顺县',
                'parent_id' => 510300,
                'level' => 3,
            ),
            172 => 
            array (
                'id' => 2673,
                'zone_id' => 510401,
                'name' => '市辖区',
                'parent_id' => 510400,
                'level' => 3,
            ),
            173 => 
            array (
                'id' => 2674,
                'zone_id' => 510402,
                'name' => '东　区',
                'parent_id' => 510400,
                'level' => 3,
            ),
            174 => 
            array (
                'id' => 2675,
                'zone_id' => 510403,
                'name' => '西　区',
                'parent_id' => 510400,
                'level' => 3,
            ),
            175 => 
            array (
                'id' => 2676,
                'zone_id' => 510411,
                'name' => '仁和区',
                'parent_id' => 510400,
                'level' => 3,
            ),
            176 => 
            array (
                'id' => 2677,
                'zone_id' => 510421,
                'name' => '米易县',
                'parent_id' => 510400,
                'level' => 3,
            ),
            177 => 
            array (
                'id' => 2678,
                'zone_id' => 510422,
                'name' => '盐边县',
                'parent_id' => 510400,
                'level' => 3,
            ),
            178 => 
            array (
                'id' => 2679,
                'zone_id' => 510501,
                'name' => '市辖区',
                'parent_id' => 510500,
                'level' => 3,
            ),
            179 => 
            array (
                'id' => 2680,
                'zone_id' => 510502,
                'name' => '江阳区',
                'parent_id' => 510500,
                'level' => 3,
            ),
            180 => 
            array (
                'id' => 2681,
                'zone_id' => 510503,
                'name' => '纳溪区',
                'parent_id' => 510500,
                'level' => 3,
            ),
            181 => 
            array (
                'id' => 2682,
                'zone_id' => 510504,
                'name' => '龙马潭区',
                'parent_id' => 510500,
                'level' => 3,
            ),
            182 => 
            array (
                'id' => 2683,
                'zone_id' => 510521,
                'name' => '泸　县',
                'parent_id' => 510500,
                'level' => 3,
            ),
            183 => 
            array (
                'id' => 2684,
                'zone_id' => 510522,
                'name' => '合江县',
                'parent_id' => 510500,
                'level' => 3,
            ),
            184 => 
            array (
                'id' => 2685,
                'zone_id' => 510524,
                'name' => '叙永县',
                'parent_id' => 510500,
                'level' => 3,
            ),
            185 => 
            array (
                'id' => 2686,
                'zone_id' => 510525,
                'name' => '古蔺县',
                'parent_id' => 510500,
                'level' => 3,
            ),
            186 => 
            array (
                'id' => 2687,
                'zone_id' => 510601,
                'name' => '市辖区',
                'parent_id' => 510600,
                'level' => 3,
            ),
            187 => 
            array (
                'id' => 2688,
                'zone_id' => 510603,
                'name' => '旌阳区',
                'parent_id' => 510600,
                'level' => 3,
            ),
            188 => 
            array (
                'id' => 2689,
                'zone_id' => 510623,
                'name' => '中江县',
                'parent_id' => 510600,
                'level' => 3,
            ),
            189 => 
            array (
                'id' => 2690,
                'zone_id' => 510626,
                'name' => '罗江县',
                'parent_id' => 510600,
                'level' => 3,
            ),
            190 => 
            array (
                'id' => 2691,
                'zone_id' => 510681,
                'name' => '广汉市',
                'parent_id' => 510600,
                'level' => 3,
            ),
            191 => 
            array (
                'id' => 2692,
                'zone_id' => 510682,
                'name' => '什邡市',
                'parent_id' => 510600,
                'level' => 3,
            ),
            192 => 
            array (
                'id' => 2693,
                'zone_id' => 510683,
                'name' => '绵竹市',
                'parent_id' => 510600,
                'level' => 3,
            ),
            193 => 
            array (
                'id' => 2694,
                'zone_id' => 510701,
                'name' => '市辖区',
                'parent_id' => 510700,
                'level' => 3,
            ),
            194 => 
            array (
                'id' => 2695,
                'zone_id' => 510703,
                'name' => '涪城区',
                'parent_id' => 510700,
                'level' => 3,
            ),
            195 => 
            array (
                'id' => 2696,
                'zone_id' => 510704,
                'name' => '游仙区',
                'parent_id' => 510700,
                'level' => 3,
            ),
            196 => 
            array (
                'id' => 2697,
                'zone_id' => 510722,
                'name' => '三台县',
                'parent_id' => 510700,
                'level' => 3,
            ),
            197 => 
            array (
                'id' => 2698,
                'zone_id' => 510723,
                'name' => '盐亭县',
                'parent_id' => 510700,
                'level' => 3,
            ),
            198 => 
            array (
                'id' => 2699,
                'zone_id' => 510724,
                'name' => '安　县',
                'parent_id' => 510700,
                'level' => 3,
            ),
            199 => 
            array (
                'id' => 2700,
                'zone_id' => 510725,
                'name' => '梓潼县',
                'parent_id' => 510700,
                'level' => 3,
            ),
            200 => 
            array (
                'id' => 2701,
                'zone_id' => 510726,
                'name' => '北川羌族自治县',
                'parent_id' => 510700,
                'level' => 3,
            ),
            201 => 
            array (
                'id' => 2702,
                'zone_id' => 510727,
                'name' => '平武县',
                'parent_id' => 510700,
                'level' => 3,
            ),
            202 => 
            array (
                'id' => 2703,
                'zone_id' => 510781,
                'name' => '江油市',
                'parent_id' => 510700,
                'level' => 3,
            ),
            203 => 
            array (
                'id' => 2704,
                'zone_id' => 510801,
                'name' => '市辖区',
                'parent_id' => 510800,
                'level' => 3,
            ),
            204 => 
            array (
                'id' => 2705,
                'zone_id' => 510802,
                'name' => '市中区',
                'parent_id' => 510800,
                'level' => 3,
            ),
            205 => 
            array (
                'id' => 2706,
                'zone_id' => 510811,
                'name' => '元坝区',
                'parent_id' => 510800,
                'level' => 3,
            ),
            206 => 
            array (
                'id' => 2707,
                'zone_id' => 510812,
                'name' => '朝天区',
                'parent_id' => 510800,
                'level' => 3,
            ),
            207 => 
            array (
                'id' => 2708,
                'zone_id' => 510821,
                'name' => '旺苍县',
                'parent_id' => 510800,
                'level' => 3,
            ),
            208 => 
            array (
                'id' => 2709,
                'zone_id' => 510822,
                'name' => '青川县',
                'parent_id' => 510800,
                'level' => 3,
            ),
            209 => 
            array (
                'id' => 2710,
                'zone_id' => 510823,
                'name' => '剑阁县',
                'parent_id' => 510800,
                'level' => 3,
            ),
            210 => 
            array (
                'id' => 2711,
                'zone_id' => 510824,
                'name' => '苍溪县',
                'parent_id' => 510800,
                'level' => 3,
            ),
            211 => 
            array (
                'id' => 2712,
                'zone_id' => 510901,
                'name' => '市辖区',
                'parent_id' => 510900,
                'level' => 3,
            ),
            212 => 
            array (
                'id' => 2713,
                'zone_id' => 510903,
                'name' => '船山区',
                'parent_id' => 510900,
                'level' => 3,
            ),
            213 => 
            array (
                'id' => 2714,
                'zone_id' => 510904,
                'name' => '安居区',
                'parent_id' => 510900,
                'level' => 3,
            ),
            214 => 
            array (
                'id' => 2715,
                'zone_id' => 510921,
                'name' => '蓬溪县',
                'parent_id' => 510900,
                'level' => 3,
            ),
            215 => 
            array (
                'id' => 2716,
                'zone_id' => 510922,
                'name' => '射洪县',
                'parent_id' => 510900,
                'level' => 3,
            ),
            216 => 
            array (
                'id' => 2717,
                'zone_id' => 510923,
                'name' => '大英县',
                'parent_id' => 510900,
                'level' => 3,
            ),
            217 => 
            array (
                'id' => 2718,
                'zone_id' => 511001,
                'name' => '市辖区',
                'parent_id' => 511000,
                'level' => 3,
            ),
            218 => 
            array (
                'id' => 2719,
                'zone_id' => 511002,
                'name' => '市中区',
                'parent_id' => 511000,
                'level' => 3,
            ),
            219 => 
            array (
                'id' => 2720,
                'zone_id' => 511011,
                'name' => '东兴区',
                'parent_id' => 511000,
                'level' => 3,
            ),
            220 => 
            array (
                'id' => 2721,
                'zone_id' => 511024,
                'name' => '威远县',
                'parent_id' => 511000,
                'level' => 3,
            ),
            221 => 
            array (
                'id' => 2722,
                'zone_id' => 511025,
                'name' => '资中县',
                'parent_id' => 511000,
                'level' => 3,
            ),
            222 => 
            array (
                'id' => 2723,
                'zone_id' => 511028,
                'name' => '隆昌县',
                'parent_id' => 511000,
                'level' => 3,
            ),
            223 => 
            array (
                'id' => 2724,
                'zone_id' => 511101,
                'name' => '市辖区',
                'parent_id' => 511100,
                'level' => 3,
            ),
            224 => 
            array (
                'id' => 2725,
                'zone_id' => 511102,
                'name' => '市中区',
                'parent_id' => 511100,
                'level' => 3,
            ),
            225 => 
            array (
                'id' => 2726,
                'zone_id' => 511111,
                'name' => '沙湾区',
                'parent_id' => 511100,
                'level' => 3,
            ),
            226 => 
            array (
                'id' => 2727,
                'zone_id' => 511112,
                'name' => '五通桥区',
                'parent_id' => 511100,
                'level' => 3,
            ),
            227 => 
            array (
                'id' => 2728,
                'zone_id' => 511113,
                'name' => '金口河区',
                'parent_id' => 511100,
                'level' => 3,
            ),
            228 => 
            array (
                'id' => 2729,
                'zone_id' => 511123,
                'name' => '犍为县',
                'parent_id' => 511100,
                'level' => 3,
            ),
            229 => 
            array (
                'id' => 2730,
                'zone_id' => 511124,
                'name' => '井研县',
                'parent_id' => 511100,
                'level' => 3,
            ),
            230 => 
            array (
                'id' => 2731,
                'zone_id' => 511126,
                'name' => '夹江县',
                'parent_id' => 511100,
                'level' => 3,
            ),
            231 => 
            array (
                'id' => 2732,
                'zone_id' => 511129,
                'name' => '沐川县',
                'parent_id' => 511100,
                'level' => 3,
            ),
            232 => 
            array (
                'id' => 2733,
                'zone_id' => 511132,
                'name' => '峨边彝族自治县',
                'parent_id' => 511100,
                'level' => 3,
            ),
            233 => 
            array (
                'id' => 2734,
                'zone_id' => 511133,
                'name' => '马边彝族自治县',
                'parent_id' => 511100,
                'level' => 3,
            ),
            234 => 
            array (
                'id' => 2735,
                'zone_id' => 511181,
                'name' => '峨眉山市',
                'parent_id' => 511100,
                'level' => 3,
            ),
            235 => 
            array (
                'id' => 2736,
                'zone_id' => 511301,
                'name' => '市辖区',
                'parent_id' => 511300,
                'level' => 3,
            ),
            236 => 
            array (
                'id' => 2737,
                'zone_id' => 511302,
                'name' => '顺庆区',
                'parent_id' => 511300,
                'level' => 3,
            ),
            237 => 
            array (
                'id' => 2738,
                'zone_id' => 511303,
                'name' => '高坪区',
                'parent_id' => 511300,
                'level' => 3,
            ),
            238 => 
            array (
                'id' => 2739,
                'zone_id' => 511304,
                'name' => '嘉陵区',
                'parent_id' => 511300,
                'level' => 3,
            ),
            239 => 
            array (
                'id' => 2740,
                'zone_id' => 511321,
                'name' => '南部县',
                'parent_id' => 511300,
                'level' => 3,
            ),
            240 => 
            array (
                'id' => 2741,
                'zone_id' => 511322,
                'name' => '营山县',
                'parent_id' => 511300,
                'level' => 3,
            ),
            241 => 
            array (
                'id' => 2742,
                'zone_id' => 511323,
                'name' => '蓬安县',
                'parent_id' => 511300,
                'level' => 3,
            ),
            242 => 
            array (
                'id' => 2743,
                'zone_id' => 511324,
                'name' => '仪陇县',
                'parent_id' => 511300,
                'level' => 3,
            ),
            243 => 
            array (
                'id' => 2744,
                'zone_id' => 511325,
                'name' => '西充县',
                'parent_id' => 511300,
                'level' => 3,
            ),
            244 => 
            array (
                'id' => 2745,
                'zone_id' => 511381,
                'name' => '阆中市',
                'parent_id' => 511300,
                'level' => 3,
            ),
            245 => 
            array (
                'id' => 2746,
                'zone_id' => 511401,
                'name' => '市辖区',
                'parent_id' => 511400,
                'level' => 3,
            ),
            246 => 
            array (
                'id' => 2747,
                'zone_id' => 511402,
                'name' => '东坡区',
                'parent_id' => 511400,
                'level' => 3,
            ),
            247 => 
            array (
                'id' => 2748,
                'zone_id' => 511421,
                'name' => '仁寿县',
                'parent_id' => 511400,
                'level' => 3,
            ),
            248 => 
            array (
                'id' => 2749,
                'zone_id' => 511422,
                'name' => '彭山县',
                'parent_id' => 511400,
                'level' => 3,
            ),
            249 => 
            array (
                'id' => 2750,
                'zone_id' => 511423,
                'name' => '洪雅县',
                'parent_id' => 511400,
                'level' => 3,
            ),
            250 => 
            array (
                'id' => 2751,
                'zone_id' => 511424,
                'name' => '丹棱县',
                'parent_id' => 511400,
                'level' => 3,
            ),
            251 => 
            array (
                'id' => 2752,
                'zone_id' => 511425,
                'name' => '青神县',
                'parent_id' => 511400,
                'level' => 3,
            ),
            252 => 
            array (
                'id' => 2753,
                'zone_id' => 511501,
                'name' => '市辖区',
                'parent_id' => 511500,
                'level' => 3,
            ),
            253 => 
            array (
                'id' => 2754,
                'zone_id' => 511502,
                'name' => '翠屏区',
                'parent_id' => 511500,
                'level' => 3,
            ),
            254 => 
            array (
                'id' => 2755,
                'zone_id' => 511521,
                'name' => '宜宾县',
                'parent_id' => 511500,
                'level' => 3,
            ),
            255 => 
            array (
                'id' => 2756,
                'zone_id' => 511522,
                'name' => '南溪县',
                'parent_id' => 511500,
                'level' => 3,
            ),
            256 => 
            array (
                'id' => 2757,
                'zone_id' => 511523,
                'name' => '江安县',
                'parent_id' => 511500,
                'level' => 3,
            ),
            257 => 
            array (
                'id' => 2758,
                'zone_id' => 511524,
                'name' => '长宁县',
                'parent_id' => 511500,
                'level' => 3,
            ),
            258 => 
            array (
                'id' => 2759,
                'zone_id' => 511525,
                'name' => '高　县',
                'parent_id' => 511500,
                'level' => 3,
            ),
            259 => 
            array (
                'id' => 2760,
                'zone_id' => 511526,
                'name' => '珙　县',
                'parent_id' => 511500,
                'level' => 3,
            ),
            260 => 
            array (
                'id' => 2761,
                'zone_id' => 511527,
                'name' => '筠连县',
                'parent_id' => 511500,
                'level' => 3,
            ),
            261 => 
            array (
                'id' => 2762,
                'zone_id' => 511528,
                'name' => '兴文县',
                'parent_id' => 511500,
                'level' => 3,
            ),
            262 => 
            array (
                'id' => 2763,
                'zone_id' => 511529,
                'name' => '屏山县',
                'parent_id' => 511500,
                'level' => 3,
            ),
            263 => 
            array (
                'id' => 2764,
                'zone_id' => 511601,
                'name' => '市辖区',
                'parent_id' => 511600,
                'level' => 3,
            ),
            264 => 
            array (
                'id' => 2765,
                'zone_id' => 511602,
                'name' => '广安区',
                'parent_id' => 511600,
                'level' => 3,
            ),
            265 => 
            array (
                'id' => 2766,
                'zone_id' => 511621,
                'name' => '岳池县',
                'parent_id' => 511600,
                'level' => 3,
            ),
            266 => 
            array (
                'id' => 2767,
                'zone_id' => 511622,
                'name' => '武胜县',
                'parent_id' => 511600,
                'level' => 3,
            ),
            267 => 
            array (
                'id' => 2768,
                'zone_id' => 511623,
                'name' => '邻水县',
                'parent_id' => 511600,
                'level' => 3,
            ),
            268 => 
            array (
                'id' => 2769,
                'zone_id' => 511681,
                'name' => '华莹市',
                'parent_id' => 511600,
                'level' => 3,
            ),
            269 => 
            array (
                'id' => 2770,
                'zone_id' => 511701,
                'name' => '市辖区',
                'parent_id' => 511700,
                'level' => 3,
            ),
            270 => 
            array (
                'id' => 2771,
                'zone_id' => 511702,
                'name' => '通川区',
                'parent_id' => 511700,
                'level' => 3,
            ),
            271 => 
            array (
                'id' => 2772,
                'zone_id' => 511721,
                'name' => '达　县',
                'parent_id' => 511700,
                'level' => 3,
            ),
            272 => 
            array (
                'id' => 2773,
                'zone_id' => 511722,
                'name' => '宣汉县',
                'parent_id' => 511700,
                'level' => 3,
            ),
            273 => 
            array (
                'id' => 2774,
                'zone_id' => 511723,
                'name' => '开江县',
                'parent_id' => 511700,
                'level' => 3,
            ),
            274 => 
            array (
                'id' => 2775,
                'zone_id' => 511724,
                'name' => '大竹县',
                'parent_id' => 511700,
                'level' => 3,
            ),
            275 => 
            array (
                'id' => 2776,
                'zone_id' => 511725,
                'name' => '渠　县',
                'parent_id' => 511700,
                'level' => 3,
            ),
            276 => 
            array (
                'id' => 2777,
                'zone_id' => 511781,
                'name' => '万源市',
                'parent_id' => 511700,
                'level' => 3,
            ),
            277 => 
            array (
                'id' => 2778,
                'zone_id' => 511801,
                'name' => '市辖区',
                'parent_id' => 511800,
                'level' => 3,
            ),
            278 => 
            array (
                'id' => 2779,
                'zone_id' => 511802,
                'name' => '雨城区',
                'parent_id' => 511800,
                'level' => 3,
            ),
            279 => 
            array (
                'id' => 2780,
                'zone_id' => 511821,
                'name' => '名山县',
                'parent_id' => 511800,
                'level' => 3,
            ),
            280 => 
            array (
                'id' => 2781,
                'zone_id' => 511822,
                'name' => '荥经县',
                'parent_id' => 511800,
                'level' => 3,
            ),
            281 => 
            array (
                'id' => 2782,
                'zone_id' => 511823,
                'name' => '汉源县',
                'parent_id' => 511800,
                'level' => 3,
            ),
            282 => 
            array (
                'id' => 2783,
                'zone_id' => 511824,
                'name' => '石棉县',
                'parent_id' => 511800,
                'level' => 3,
            ),
            283 => 
            array (
                'id' => 2784,
                'zone_id' => 511825,
                'name' => '天全县',
                'parent_id' => 511800,
                'level' => 3,
            ),
            284 => 
            array (
                'id' => 2785,
                'zone_id' => 511826,
                'name' => '芦山县',
                'parent_id' => 511800,
                'level' => 3,
            ),
            285 => 
            array (
                'id' => 2786,
                'zone_id' => 511827,
                'name' => '宝兴县',
                'parent_id' => 511800,
                'level' => 3,
            ),
            286 => 
            array (
                'id' => 2787,
                'zone_id' => 511901,
                'name' => '市辖区',
                'parent_id' => 511900,
                'level' => 3,
            ),
            287 => 
            array (
                'id' => 2788,
                'zone_id' => 511902,
                'name' => '巴州区',
                'parent_id' => 511900,
                'level' => 3,
            ),
            288 => 
            array (
                'id' => 2789,
                'zone_id' => 511921,
                'name' => '通江县',
                'parent_id' => 511900,
                'level' => 3,
            ),
            289 => 
            array (
                'id' => 2790,
                'zone_id' => 511922,
                'name' => '南江县',
                'parent_id' => 511900,
                'level' => 3,
            ),
            290 => 
            array (
                'id' => 2791,
                'zone_id' => 511923,
                'name' => '平昌县',
                'parent_id' => 511900,
                'level' => 3,
            ),
            291 => 
            array (
                'id' => 2792,
                'zone_id' => 512001,
                'name' => '市辖区',
                'parent_id' => 512000,
                'level' => 3,
            ),
            292 => 
            array (
                'id' => 2793,
                'zone_id' => 512002,
                'name' => '雁江区',
                'parent_id' => 512000,
                'level' => 3,
            ),
            293 => 
            array (
                'id' => 2794,
                'zone_id' => 512021,
                'name' => '安岳县',
                'parent_id' => 512000,
                'level' => 3,
            ),
            294 => 
            array (
                'id' => 2795,
                'zone_id' => 512022,
                'name' => '乐至县',
                'parent_id' => 512000,
                'level' => 3,
            ),
            295 => 
            array (
                'id' => 2796,
                'zone_id' => 512081,
                'name' => '简阳市',
                'parent_id' => 512000,
                'level' => 3,
            ),
            296 => 
            array (
                'id' => 2797,
                'zone_id' => 513221,
                'name' => '汶川县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            297 => 
            array (
                'id' => 2798,
                'zone_id' => 513222,
                'name' => '理　县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            298 => 
            array (
                'id' => 2799,
                'zone_id' => 513223,
                'name' => '茂　县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            299 => 
            array (
                'id' => 2800,
                'zone_id' => 513224,
                'name' => '松潘县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            300 => 
            array (
                'id' => 2801,
                'zone_id' => 513225,
                'name' => '九寨沟县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            301 => 
            array (
                'id' => 2802,
                'zone_id' => 513226,
                'name' => '金川县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            302 => 
            array (
                'id' => 2803,
                'zone_id' => 513227,
                'name' => '小金县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            303 => 
            array (
                'id' => 2804,
                'zone_id' => 513228,
                'name' => '黑水县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            304 => 
            array (
                'id' => 2805,
                'zone_id' => 513229,
                'name' => '马尔康县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            305 => 
            array (
                'id' => 2806,
                'zone_id' => 513230,
                'name' => '壤塘县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            306 => 
            array (
                'id' => 2807,
                'zone_id' => 513231,
                'name' => '阿坝县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            307 => 
            array (
                'id' => 2808,
                'zone_id' => 513232,
                'name' => '若尔盖县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            308 => 
            array (
                'id' => 2809,
                'zone_id' => 513233,
                'name' => '红原县',
                'parent_id' => 513200,
                'level' => 3,
            ),
            309 => 
            array (
                'id' => 2810,
                'zone_id' => 513321,
                'name' => '康定县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            310 => 
            array (
                'id' => 2811,
                'zone_id' => 513322,
                'name' => '泸定县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            311 => 
            array (
                'id' => 2812,
                'zone_id' => 513323,
                'name' => '丹巴县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            312 => 
            array (
                'id' => 2813,
                'zone_id' => 513324,
                'name' => '九龙县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            313 => 
            array (
                'id' => 2814,
                'zone_id' => 513325,
                'name' => '雅江县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            314 => 
            array (
                'id' => 2815,
                'zone_id' => 513326,
                'name' => '道孚县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            315 => 
            array (
                'id' => 2816,
                'zone_id' => 513327,
                'name' => '炉霍县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            316 => 
            array (
                'id' => 2817,
                'zone_id' => 513328,
                'name' => '甘孜县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            317 => 
            array (
                'id' => 2818,
                'zone_id' => 513329,
                'name' => '新龙县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            318 => 
            array (
                'id' => 2819,
                'zone_id' => 513330,
                'name' => '德格县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            319 => 
            array (
                'id' => 2820,
                'zone_id' => 513331,
                'name' => '白玉县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            320 => 
            array (
                'id' => 2821,
                'zone_id' => 513332,
                'name' => '石渠县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            321 => 
            array (
                'id' => 2822,
                'zone_id' => 513333,
                'name' => '色达县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            322 => 
            array (
                'id' => 2823,
                'zone_id' => 513334,
                'name' => '理塘县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            323 => 
            array (
                'id' => 2824,
                'zone_id' => 513335,
                'name' => '巴塘县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            324 => 
            array (
                'id' => 2825,
                'zone_id' => 513336,
                'name' => '乡城县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            325 => 
            array (
                'id' => 2826,
                'zone_id' => 513337,
                'name' => '稻城县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            326 => 
            array (
                'id' => 2827,
                'zone_id' => 513338,
                'name' => '得荣县',
                'parent_id' => 513300,
                'level' => 3,
            ),
            327 => 
            array (
                'id' => 2828,
                'zone_id' => 513401,
                'name' => '西昌市',
                'parent_id' => 513400,
                'level' => 3,
            ),
            328 => 
            array (
                'id' => 2829,
                'zone_id' => 513422,
                'name' => '木里藏族自治县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            329 => 
            array (
                'id' => 2830,
                'zone_id' => 513423,
                'name' => '盐源县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            330 => 
            array (
                'id' => 2831,
                'zone_id' => 513424,
                'name' => '德昌县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            331 => 
            array (
                'id' => 2832,
                'zone_id' => 513425,
                'name' => '会理县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            332 => 
            array (
                'id' => 2833,
                'zone_id' => 513426,
                'name' => '会东县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            333 => 
            array (
                'id' => 2834,
                'zone_id' => 513427,
                'name' => '宁南县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            334 => 
            array (
                'id' => 2835,
                'zone_id' => 513428,
                'name' => '普格县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            335 => 
            array (
                'id' => 2836,
                'zone_id' => 513429,
                'name' => '布拖县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            336 => 
            array (
                'id' => 2837,
                'zone_id' => 513430,
                'name' => '金阳县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            337 => 
            array (
                'id' => 2838,
                'zone_id' => 513431,
                'name' => '昭觉县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            338 => 
            array (
                'id' => 2839,
                'zone_id' => 513432,
                'name' => '喜德县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            339 => 
            array (
                'id' => 2840,
                'zone_id' => 513433,
                'name' => '冕宁县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            340 => 
            array (
                'id' => 2841,
                'zone_id' => 513434,
                'name' => '越西县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            341 => 
            array (
                'id' => 2842,
                'zone_id' => 513435,
                'name' => '甘洛县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            342 => 
            array (
                'id' => 2843,
                'zone_id' => 513436,
                'name' => '美姑县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            343 => 
            array (
                'id' => 2844,
                'zone_id' => 513437,
                'name' => '雷波县',
                'parent_id' => 513400,
                'level' => 3,
            ),
            344 => 
            array (
                'id' => 2845,
                'zone_id' => 520101,
                'name' => '市辖区',
                'parent_id' => 520100,
                'level' => 3,
            ),
            345 => 
            array (
                'id' => 2846,
                'zone_id' => 520102,
                'name' => '南明区',
                'parent_id' => 520100,
                'level' => 3,
            ),
            346 => 
            array (
                'id' => 2847,
                'zone_id' => 520103,
                'name' => '云岩区',
                'parent_id' => 520100,
                'level' => 3,
            ),
            347 => 
            array (
                'id' => 2848,
                'zone_id' => 520111,
                'name' => '花溪区',
                'parent_id' => 520100,
                'level' => 3,
            ),
            348 => 
            array (
                'id' => 2849,
                'zone_id' => 520112,
                'name' => '乌当区',
                'parent_id' => 520100,
                'level' => 3,
            ),
            349 => 
            array (
                'id' => 2850,
                'zone_id' => 520113,
                'name' => '白云区',
                'parent_id' => 520100,
                'level' => 3,
            ),
            350 => 
            array (
                'id' => 2851,
                'zone_id' => 520114,
                'name' => '小河区',
                'parent_id' => 520100,
                'level' => 3,
            ),
            351 => 
            array (
                'id' => 2852,
                'zone_id' => 520121,
                'name' => '开阳县',
                'parent_id' => 520100,
                'level' => 3,
            ),
            352 => 
            array (
                'id' => 2853,
                'zone_id' => 520122,
                'name' => '息烽县',
                'parent_id' => 520100,
                'level' => 3,
            ),
            353 => 
            array (
                'id' => 2854,
                'zone_id' => 520123,
                'name' => '修文县',
                'parent_id' => 520100,
                'level' => 3,
            ),
            354 => 
            array (
                'id' => 2855,
                'zone_id' => 520181,
                'name' => '清镇市',
                'parent_id' => 520100,
                'level' => 3,
            ),
            355 => 
            array (
                'id' => 2856,
                'zone_id' => 520201,
                'name' => '钟山区',
                'parent_id' => 520200,
                'level' => 3,
            ),
            356 => 
            array (
                'id' => 2857,
                'zone_id' => 520203,
                'name' => '六枝特区',
                'parent_id' => 520200,
                'level' => 3,
            ),
            357 => 
            array (
                'id' => 2858,
                'zone_id' => 520221,
                'name' => '水城县',
                'parent_id' => 520200,
                'level' => 3,
            ),
            358 => 
            array (
                'id' => 2859,
                'zone_id' => 520222,
                'name' => '盘　县',
                'parent_id' => 520200,
                'level' => 3,
            ),
            359 => 
            array (
                'id' => 2860,
                'zone_id' => 520301,
                'name' => '市辖区',
                'parent_id' => 520300,
                'level' => 3,
            ),
            360 => 
            array (
                'id' => 2861,
                'zone_id' => 520302,
                'name' => '红花岗区',
                'parent_id' => 520300,
                'level' => 3,
            ),
            361 => 
            array (
                'id' => 2862,
                'zone_id' => 520303,
                'name' => '汇川区',
                'parent_id' => 520300,
                'level' => 3,
            ),
            362 => 
            array (
                'id' => 2863,
                'zone_id' => 520321,
                'name' => '遵义县',
                'parent_id' => 520300,
                'level' => 3,
            ),
            363 => 
            array (
                'id' => 2864,
                'zone_id' => 520322,
                'name' => '桐梓县',
                'parent_id' => 520300,
                'level' => 3,
            ),
            364 => 
            array (
                'id' => 2865,
                'zone_id' => 520323,
                'name' => '绥阳县',
                'parent_id' => 520300,
                'level' => 3,
            ),
            365 => 
            array (
                'id' => 2866,
                'zone_id' => 520324,
                'name' => '正安县',
                'parent_id' => 520300,
                'level' => 3,
            ),
            366 => 
            array (
                'id' => 2867,
                'zone_id' => 520325,
                'name' => '道真仡佬族苗族自治县',
                'parent_id' => 520300,
                'level' => 3,
            ),
            367 => 
            array (
                'id' => 2868,
                'zone_id' => 520326,
                'name' => '务川仡佬族苗族自治县',
                'parent_id' => 520300,
                'level' => 3,
            ),
            368 => 
            array (
                'id' => 2869,
                'zone_id' => 520327,
                'name' => '凤冈县',
                'parent_id' => 520300,
                'level' => 3,
            ),
            369 => 
            array (
                'id' => 2870,
                'zone_id' => 520328,
                'name' => '湄潭县',
                'parent_id' => 520300,
                'level' => 3,
            ),
            370 => 
            array (
                'id' => 2871,
                'zone_id' => 520329,
                'name' => '余庆县',
                'parent_id' => 520300,
                'level' => 3,
            ),
            371 => 
            array (
                'id' => 2872,
                'zone_id' => 520330,
                'name' => '习水县',
                'parent_id' => 520300,
                'level' => 3,
            ),
            372 => 
            array (
                'id' => 2873,
                'zone_id' => 520381,
                'name' => '赤水市',
                'parent_id' => 520300,
                'level' => 3,
            ),
            373 => 
            array (
                'id' => 2874,
                'zone_id' => 520382,
                'name' => '仁怀市',
                'parent_id' => 520300,
                'level' => 3,
            ),
            374 => 
            array (
                'id' => 2875,
                'zone_id' => 520401,
                'name' => '市辖区',
                'parent_id' => 520400,
                'level' => 3,
            ),
            375 => 
            array (
                'id' => 2876,
                'zone_id' => 520402,
                'name' => '西秀区',
                'parent_id' => 520400,
                'level' => 3,
            ),
            376 => 
            array (
                'id' => 2877,
                'zone_id' => 520421,
                'name' => '平坝县',
                'parent_id' => 520400,
                'level' => 3,
            ),
            377 => 
            array (
                'id' => 2878,
                'zone_id' => 520422,
                'name' => '普定县',
                'parent_id' => 520400,
                'level' => 3,
            ),
            378 => 
            array (
                'id' => 2879,
                'zone_id' => 520423,
                'name' => '镇宁布依族苗族自治县',
                'parent_id' => 520400,
                'level' => 3,
            ),
            379 => 
            array (
                'id' => 2880,
                'zone_id' => 520424,
                'name' => '关岭布依族苗族自治县',
                'parent_id' => 520400,
                'level' => 3,
            ),
            380 => 
            array (
                'id' => 2881,
                'zone_id' => 520425,
                'name' => '紫云苗族布依族自治县',
                'parent_id' => 520400,
                'level' => 3,
            ),
            381 => 
            array (
                'id' => 2882,
                'zone_id' => 522201,
                'name' => '铜仁市',
                'parent_id' => 522200,
                'level' => 3,
            ),
            382 => 
            array (
                'id' => 2883,
                'zone_id' => 522222,
                'name' => '江口县',
                'parent_id' => 522200,
                'level' => 3,
            ),
            383 => 
            array (
                'id' => 2884,
                'zone_id' => 522223,
                'name' => '玉屏侗族自治县',
                'parent_id' => 522200,
                'level' => 3,
            ),
            384 => 
            array (
                'id' => 2885,
                'zone_id' => 522224,
                'name' => '石阡县',
                'parent_id' => 522200,
                'level' => 3,
            ),
            385 => 
            array (
                'id' => 2886,
                'zone_id' => 522225,
                'name' => '思南县',
                'parent_id' => 522200,
                'level' => 3,
            ),
            386 => 
            array (
                'id' => 2887,
                'zone_id' => 522226,
                'name' => '印江土家族苗族自治县',
                'parent_id' => 522200,
                'level' => 3,
            ),
            387 => 
            array (
                'id' => 2888,
                'zone_id' => 522227,
                'name' => '德江县',
                'parent_id' => 522200,
                'level' => 3,
            ),
            388 => 
            array (
                'id' => 2889,
                'zone_id' => 522228,
                'name' => '沿河土家族自治县',
                'parent_id' => 522200,
                'level' => 3,
            ),
            389 => 
            array (
                'id' => 2890,
                'zone_id' => 522229,
                'name' => '松桃苗族自治县',
                'parent_id' => 522200,
                'level' => 3,
            ),
            390 => 
            array (
                'id' => 2891,
                'zone_id' => 522230,
                'name' => '万山特区',
                'parent_id' => 522200,
                'level' => 3,
            ),
            391 => 
            array (
                'id' => 2892,
                'zone_id' => 522301,
                'name' => '兴义市',
                'parent_id' => 522300,
                'level' => 3,
            ),
            392 => 
            array (
                'id' => 2893,
                'zone_id' => 522322,
                'name' => '兴仁县',
                'parent_id' => 522300,
                'level' => 3,
            ),
            393 => 
            array (
                'id' => 2894,
                'zone_id' => 522323,
                'name' => '普安县',
                'parent_id' => 522300,
                'level' => 3,
            ),
            394 => 
            array (
                'id' => 2895,
                'zone_id' => 522324,
                'name' => '晴隆县',
                'parent_id' => 522300,
                'level' => 3,
            ),
            395 => 
            array (
                'id' => 2896,
                'zone_id' => 522325,
                'name' => '贞丰县',
                'parent_id' => 522300,
                'level' => 3,
            ),
            396 => 
            array (
                'id' => 2897,
                'zone_id' => 522326,
                'name' => '望谟县',
                'parent_id' => 522300,
                'level' => 3,
            ),
            397 => 
            array (
                'id' => 2898,
                'zone_id' => 522327,
                'name' => '册亨县',
                'parent_id' => 522300,
                'level' => 3,
            ),
            398 => 
            array (
                'id' => 2899,
                'zone_id' => 522328,
                'name' => '安龙县',
                'parent_id' => 522300,
                'level' => 3,
            ),
            399 => 
            array (
                'id' => 2900,
                'zone_id' => 522401,
                'name' => '毕节市',
                'parent_id' => 522400,
                'level' => 3,
            ),
            400 => 
            array (
                'id' => 2901,
                'zone_id' => 522422,
                'name' => '大方县',
                'parent_id' => 522400,
                'level' => 3,
            ),
            401 => 
            array (
                'id' => 2902,
                'zone_id' => 522423,
                'name' => '黔西县',
                'parent_id' => 522400,
                'level' => 3,
            ),
            402 => 
            array (
                'id' => 2903,
                'zone_id' => 522424,
                'name' => '金沙县',
                'parent_id' => 522400,
                'level' => 3,
            ),
            403 => 
            array (
                'id' => 2904,
                'zone_id' => 522425,
                'name' => '织金县',
                'parent_id' => 522400,
                'level' => 3,
            ),
            404 => 
            array (
                'id' => 2905,
                'zone_id' => 522426,
                'name' => '纳雍县',
                'parent_id' => 522400,
                'level' => 3,
            ),
            405 => 
            array (
                'id' => 2906,
                'zone_id' => 522427,
                'name' => '威宁彝族回族苗族自治县',
                'parent_id' => 522400,
                'level' => 3,
            ),
            406 => 
            array (
                'id' => 2907,
                'zone_id' => 522428,
                'name' => '赫章县',
                'parent_id' => 522400,
                'level' => 3,
            ),
            407 => 
            array (
                'id' => 2908,
                'zone_id' => 522601,
                'name' => '凯里市',
                'parent_id' => 522600,
                'level' => 3,
            ),
            408 => 
            array (
                'id' => 2909,
                'zone_id' => 522622,
                'name' => '黄平县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            409 => 
            array (
                'id' => 2910,
                'zone_id' => 522623,
                'name' => '施秉县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            410 => 
            array (
                'id' => 2911,
                'zone_id' => 522624,
                'name' => '三穗县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            411 => 
            array (
                'id' => 2912,
                'zone_id' => 522625,
                'name' => '镇远县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            412 => 
            array (
                'id' => 2913,
                'zone_id' => 522626,
                'name' => '岑巩县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            413 => 
            array (
                'id' => 2914,
                'zone_id' => 522627,
                'name' => '天柱县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            414 => 
            array (
                'id' => 2915,
                'zone_id' => 522628,
                'name' => '锦屏县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            415 => 
            array (
                'id' => 2916,
                'zone_id' => 522629,
                'name' => '剑河县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            416 => 
            array (
                'id' => 2917,
                'zone_id' => 522630,
                'name' => '台江县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            417 => 
            array (
                'id' => 2918,
                'zone_id' => 522631,
                'name' => '黎平县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            418 => 
            array (
                'id' => 2919,
                'zone_id' => 522632,
                'name' => '榕江县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            419 => 
            array (
                'id' => 2920,
                'zone_id' => 522633,
                'name' => '从江县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            420 => 
            array (
                'id' => 2921,
                'zone_id' => 522634,
                'name' => '雷山县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            421 => 
            array (
                'id' => 2922,
                'zone_id' => 522635,
                'name' => '麻江县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            422 => 
            array (
                'id' => 2923,
                'zone_id' => 522636,
                'name' => '丹寨县',
                'parent_id' => 522600,
                'level' => 3,
            ),
            423 => 
            array (
                'id' => 2924,
                'zone_id' => 522701,
                'name' => '都匀市',
                'parent_id' => 522700,
                'level' => 3,
            ),
            424 => 
            array (
                'id' => 2925,
                'zone_id' => 522702,
                'name' => '福泉市',
                'parent_id' => 522700,
                'level' => 3,
            ),
            425 => 
            array (
                'id' => 2926,
                'zone_id' => 522722,
                'name' => '荔波县',
                'parent_id' => 522700,
                'level' => 3,
            ),
            426 => 
            array (
                'id' => 2927,
                'zone_id' => 522723,
                'name' => '贵定县',
                'parent_id' => 522700,
                'level' => 3,
            ),
            427 => 
            array (
                'id' => 2928,
                'zone_id' => 522725,
                'name' => '瓮安县',
                'parent_id' => 522700,
                'level' => 3,
            ),
            428 => 
            array (
                'id' => 2929,
                'zone_id' => 522726,
                'name' => '独山县',
                'parent_id' => 522700,
                'level' => 3,
            ),
            429 => 
            array (
                'id' => 2930,
                'zone_id' => 522727,
                'name' => '平塘县',
                'parent_id' => 522700,
                'level' => 3,
            ),
            430 => 
            array (
                'id' => 2931,
                'zone_id' => 522728,
                'name' => '罗甸县',
                'parent_id' => 522700,
                'level' => 3,
            ),
            431 => 
            array (
                'id' => 2932,
                'zone_id' => 522729,
                'name' => '长顺县',
                'parent_id' => 522700,
                'level' => 3,
            ),
            432 => 
            array (
                'id' => 2933,
                'zone_id' => 522730,
                'name' => '龙里县',
                'parent_id' => 522700,
                'level' => 3,
            ),
            433 => 
            array (
                'id' => 2934,
                'zone_id' => 522731,
                'name' => '惠水县',
                'parent_id' => 522700,
                'level' => 3,
            ),
            434 => 
            array (
                'id' => 2935,
                'zone_id' => 522732,
                'name' => '三都水族自治县',
                'parent_id' => 522700,
                'level' => 3,
            ),
            435 => 
            array (
                'id' => 2936,
                'zone_id' => 530101,
                'name' => '市辖区',
                'parent_id' => 530100,
                'level' => 3,
            ),
            436 => 
            array (
                'id' => 2937,
                'zone_id' => 530102,
                'name' => '五华区',
                'parent_id' => 530100,
                'level' => 3,
            ),
            437 => 
            array (
                'id' => 2938,
                'zone_id' => 530103,
                'name' => '盘龙区',
                'parent_id' => 530100,
                'level' => 3,
            ),
            438 => 
            array (
                'id' => 2939,
                'zone_id' => 530111,
                'name' => '官渡区',
                'parent_id' => 530100,
                'level' => 3,
            ),
            439 => 
            array (
                'id' => 2940,
                'zone_id' => 530112,
                'name' => '西山区',
                'parent_id' => 530100,
                'level' => 3,
            ),
            440 => 
            array (
                'id' => 2941,
                'zone_id' => 530113,
                'name' => '东川区',
                'parent_id' => 530100,
                'level' => 3,
            ),
            441 => 
            array (
                'id' => 2942,
                'zone_id' => 530121,
                'name' => '呈贡县',
                'parent_id' => 530100,
                'level' => 3,
            ),
            442 => 
            array (
                'id' => 2943,
                'zone_id' => 530122,
                'name' => '晋宁县',
                'parent_id' => 530100,
                'level' => 3,
            ),
            443 => 
            array (
                'id' => 2944,
                'zone_id' => 530124,
                'name' => '富民县',
                'parent_id' => 530100,
                'level' => 3,
            ),
            444 => 
            array (
                'id' => 2945,
                'zone_id' => 530125,
                'name' => '宜良县',
                'parent_id' => 530100,
                'level' => 3,
            ),
            445 => 
            array (
                'id' => 2946,
                'zone_id' => 530126,
                'name' => '石林彝族自治县',
                'parent_id' => 530100,
                'level' => 3,
            ),
            446 => 
            array (
                'id' => 2947,
                'zone_id' => 530127,
                'name' => '嵩明县',
                'parent_id' => 530100,
                'level' => 3,
            ),
            447 => 
            array (
                'id' => 2948,
                'zone_id' => 530128,
                'name' => '禄劝彝族苗族自治县',
                'parent_id' => 530100,
                'level' => 3,
            ),
            448 => 
            array (
                'id' => 2949,
                'zone_id' => 530129,
                'name' => '寻甸回族彝族自治县',
                'parent_id' => 530100,
                'level' => 3,
            ),
            449 => 
            array (
                'id' => 2950,
                'zone_id' => 530181,
                'name' => '安宁市',
                'parent_id' => 530100,
                'level' => 3,
            ),
            450 => 
            array (
                'id' => 2951,
                'zone_id' => 530301,
                'name' => '市辖区',
                'parent_id' => 530300,
                'level' => 3,
            ),
            451 => 
            array (
                'id' => 2952,
                'zone_id' => 530302,
                'name' => '麒麟区',
                'parent_id' => 530300,
                'level' => 3,
            ),
            452 => 
            array (
                'id' => 2953,
                'zone_id' => 530321,
                'name' => '马龙县',
                'parent_id' => 530300,
                'level' => 3,
            ),
            453 => 
            array (
                'id' => 2954,
                'zone_id' => 530322,
                'name' => '陆良县',
                'parent_id' => 530300,
                'level' => 3,
            ),
            454 => 
            array (
                'id' => 2955,
                'zone_id' => 530323,
                'name' => '师宗县',
                'parent_id' => 530300,
                'level' => 3,
            ),
            455 => 
            array (
                'id' => 2956,
                'zone_id' => 530324,
                'name' => '罗平县',
                'parent_id' => 530300,
                'level' => 3,
            ),
            456 => 
            array (
                'id' => 2957,
                'zone_id' => 530325,
                'name' => '富源县',
                'parent_id' => 530300,
                'level' => 3,
            ),
            457 => 
            array (
                'id' => 2958,
                'zone_id' => 530326,
                'name' => '会泽县',
                'parent_id' => 530300,
                'level' => 3,
            ),
            458 => 
            array (
                'id' => 2959,
                'zone_id' => 530328,
                'name' => '沾益县',
                'parent_id' => 530300,
                'level' => 3,
            ),
            459 => 
            array (
                'id' => 2960,
                'zone_id' => 530381,
                'name' => '宣威市',
                'parent_id' => 530300,
                'level' => 3,
            ),
            460 => 
            array (
                'id' => 2961,
                'zone_id' => 530401,
                'name' => '市辖区',
                'parent_id' => 530400,
                'level' => 3,
            ),
            461 => 
            array (
                'id' => 2962,
                'zone_id' => 530402,
                'name' => '红塔区',
                'parent_id' => 530400,
                'level' => 3,
            ),
            462 => 
            array (
                'id' => 2963,
                'zone_id' => 530421,
                'name' => '江川县',
                'parent_id' => 530400,
                'level' => 3,
            ),
            463 => 
            array (
                'id' => 2964,
                'zone_id' => 530422,
                'name' => '澄江县',
                'parent_id' => 530400,
                'level' => 3,
            ),
            464 => 
            array (
                'id' => 2965,
                'zone_id' => 530423,
                'name' => '通海县',
                'parent_id' => 530400,
                'level' => 3,
            ),
            465 => 
            array (
                'id' => 2966,
                'zone_id' => 530424,
                'name' => '华宁县',
                'parent_id' => 530400,
                'level' => 3,
            ),
            466 => 
            array (
                'id' => 2967,
                'zone_id' => 530425,
                'name' => '易门县',
                'parent_id' => 530400,
                'level' => 3,
            ),
            467 => 
            array (
                'id' => 2968,
                'zone_id' => 530426,
                'name' => '峨山彝族自治县',
                'parent_id' => 530400,
                'level' => 3,
            ),
            468 => 
            array (
                'id' => 2969,
                'zone_id' => 530427,
                'name' => '新平彝族傣族自治县',
                'parent_id' => 530400,
                'level' => 3,
            ),
            469 => 
            array (
                'id' => 2970,
                'zone_id' => 530428,
                'name' => '元江哈尼族彝族傣族自治县',
                'parent_id' => 530400,
                'level' => 3,
            ),
            470 => 
            array (
                'id' => 2971,
                'zone_id' => 530501,
                'name' => '市辖区',
                'parent_id' => 530500,
                'level' => 3,
            ),
            471 => 
            array (
                'id' => 2972,
                'zone_id' => 530502,
                'name' => '隆阳区',
                'parent_id' => 530500,
                'level' => 3,
            ),
            472 => 
            array (
                'id' => 2973,
                'zone_id' => 530521,
                'name' => '施甸县',
                'parent_id' => 530500,
                'level' => 3,
            ),
            473 => 
            array (
                'id' => 2974,
                'zone_id' => 530522,
                'name' => '腾冲县',
                'parent_id' => 530500,
                'level' => 3,
            ),
            474 => 
            array (
                'id' => 2975,
                'zone_id' => 530523,
                'name' => '龙陵县',
                'parent_id' => 530500,
                'level' => 3,
            ),
            475 => 
            array (
                'id' => 2976,
                'zone_id' => 530524,
                'name' => '昌宁县',
                'parent_id' => 530500,
                'level' => 3,
            ),
            476 => 
            array (
                'id' => 2977,
                'zone_id' => 530601,
                'name' => '市辖区',
                'parent_id' => 530600,
                'level' => 3,
            ),
            477 => 
            array (
                'id' => 2978,
                'zone_id' => 530602,
                'name' => '昭阳区',
                'parent_id' => 530600,
                'level' => 3,
            ),
            478 => 
            array (
                'id' => 2979,
                'zone_id' => 530621,
                'name' => '鲁甸县',
                'parent_id' => 530600,
                'level' => 3,
            ),
            479 => 
            array (
                'id' => 2980,
                'zone_id' => 530622,
                'name' => '巧家县',
                'parent_id' => 530600,
                'level' => 3,
            ),
            480 => 
            array (
                'id' => 2981,
                'zone_id' => 530623,
                'name' => '盐津县',
                'parent_id' => 530600,
                'level' => 3,
            ),
            481 => 
            array (
                'id' => 2982,
                'zone_id' => 530624,
                'name' => '大关县',
                'parent_id' => 530600,
                'level' => 3,
            ),
            482 => 
            array (
                'id' => 2983,
                'zone_id' => 530625,
                'name' => '永善县',
                'parent_id' => 530600,
                'level' => 3,
            ),
            483 => 
            array (
                'id' => 2984,
                'zone_id' => 530626,
                'name' => '绥江县',
                'parent_id' => 530600,
                'level' => 3,
            ),
            484 => 
            array (
                'id' => 2985,
                'zone_id' => 530627,
                'name' => '镇雄县',
                'parent_id' => 530600,
                'level' => 3,
            ),
            485 => 
            array (
                'id' => 2986,
                'zone_id' => 530628,
                'name' => '彝良县',
                'parent_id' => 530600,
                'level' => 3,
            ),
            486 => 
            array (
                'id' => 2987,
                'zone_id' => 530629,
                'name' => '威信县',
                'parent_id' => 530600,
                'level' => 3,
            ),
            487 => 
            array (
                'id' => 2988,
                'zone_id' => 530630,
                'name' => '水富县',
                'parent_id' => 530600,
                'level' => 3,
            ),
            488 => 
            array (
                'id' => 2989,
                'zone_id' => 530701,
                'name' => '市辖区',
                'parent_id' => 530700,
                'level' => 3,
            ),
            489 => 
            array (
                'id' => 2990,
                'zone_id' => 530702,
                'name' => '古城区',
                'parent_id' => 530700,
                'level' => 3,
            ),
            490 => 
            array (
                'id' => 2991,
                'zone_id' => 530721,
                'name' => '玉龙纳西族自治县',
                'parent_id' => 530700,
                'level' => 3,
            ),
            491 => 
            array (
                'id' => 2992,
                'zone_id' => 530722,
                'name' => '永胜县',
                'parent_id' => 530700,
                'level' => 3,
            ),
            492 => 
            array (
                'id' => 2993,
                'zone_id' => 530723,
                'name' => '华坪县',
                'parent_id' => 530700,
                'level' => 3,
            ),
            493 => 
            array (
                'id' => 2994,
                'zone_id' => 530724,
                'name' => '宁蒗彝族自治县',
                'parent_id' => 530700,
                'level' => 3,
            ),
            494 => 
            array (
                'id' => 2995,
                'zone_id' => 530801,
                'name' => '市辖区',
                'parent_id' => 530800,
                'level' => 3,
            ),
            495 => 
            array (
                'id' => 2996,
                'zone_id' => 530802,
                'name' => '翠云区',
                'parent_id' => 530800,
                'level' => 3,
            ),
            496 => 
            array (
                'id' => 2997,
                'zone_id' => 530821,
                'name' => '普洱哈尼族彝族自治县',
                'parent_id' => 530800,
                'level' => 3,
            ),
            497 => 
            array (
                'id' => 2998,
                'zone_id' => 530822,
                'name' => '墨江哈尼族自治县',
                'parent_id' => 530800,
                'level' => 3,
            ),
            498 => 
            array (
                'id' => 2999,
                'zone_id' => 530823,
                'name' => '景东彝族自治县',
                'parent_id' => 530800,
                'level' => 3,
            ),
            499 => 
            array (
                'id' => 3000,
                'zone_id' => 530824,
                'name' => '景谷傣族彝族自治县',
                'parent_id' => 530800,
                'level' => 3,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'zone_id' => 530825,
                'name' => '镇沅彝族哈尼族拉祜族自治县',
                'parent_id' => 530800,
                'level' => 3,
            ),
            1 => 
            array (
                'id' => 3002,
                'zone_id' => 530826,
                'name' => '江城哈尼族彝族自治县',
                'parent_id' => 530800,
                'level' => 3,
            ),
            2 => 
            array (
                'id' => 3003,
                'zone_id' => 530827,
                'name' => '孟连傣族拉祜族佤族自治县',
                'parent_id' => 530800,
                'level' => 3,
            ),
            3 => 
            array (
                'id' => 3004,
                'zone_id' => 530828,
                'name' => '澜沧拉祜族自治县',
                'parent_id' => 530800,
                'level' => 3,
            ),
            4 => 
            array (
                'id' => 3005,
                'zone_id' => 530829,
                'name' => '西盟佤族自治县',
                'parent_id' => 530800,
                'level' => 3,
            ),
            5 => 
            array (
                'id' => 3006,
                'zone_id' => 530901,
                'name' => '市辖区',
                'parent_id' => 530900,
                'level' => 3,
            ),
            6 => 
            array (
                'id' => 3007,
                'zone_id' => 530902,
                'name' => '临翔区',
                'parent_id' => 530900,
                'level' => 3,
            ),
            7 => 
            array (
                'id' => 3008,
                'zone_id' => 530921,
                'name' => '凤庆县',
                'parent_id' => 530900,
                'level' => 3,
            ),
            8 => 
            array (
                'id' => 3009,
                'zone_id' => 530922,
                'name' => '云　县',
                'parent_id' => 530900,
                'level' => 3,
            ),
            9 => 
            array (
                'id' => 3010,
                'zone_id' => 530923,
                'name' => '永德县',
                'parent_id' => 530900,
                'level' => 3,
            ),
            10 => 
            array (
                'id' => 3011,
                'zone_id' => 530924,
                'name' => '镇康县',
                'parent_id' => 530900,
                'level' => 3,
            ),
            11 => 
            array (
                'id' => 3012,
                'zone_id' => 530925,
                'name' => '双江拉祜族佤族布朗族傣族自治县',
                'parent_id' => 530900,
                'level' => 3,
            ),
            12 => 
            array (
                'id' => 3013,
                'zone_id' => 530926,
                'name' => '耿马傣族佤族自治县',
                'parent_id' => 530900,
                'level' => 3,
            ),
            13 => 
            array (
                'id' => 3014,
                'zone_id' => 530927,
                'name' => '沧源佤族自治县',
                'parent_id' => 530900,
                'level' => 3,
            ),
            14 => 
            array (
                'id' => 3015,
                'zone_id' => 532301,
                'name' => '楚雄市',
                'parent_id' => 532300,
                'level' => 3,
            ),
            15 => 
            array (
                'id' => 3016,
                'zone_id' => 532322,
                'name' => '双柏县',
                'parent_id' => 532300,
                'level' => 3,
            ),
            16 => 
            array (
                'id' => 3017,
                'zone_id' => 532323,
                'name' => '牟定县',
                'parent_id' => 532300,
                'level' => 3,
            ),
            17 => 
            array (
                'id' => 3018,
                'zone_id' => 532324,
                'name' => '南华县',
                'parent_id' => 532300,
                'level' => 3,
            ),
            18 => 
            array (
                'id' => 3019,
                'zone_id' => 532325,
                'name' => '姚安县',
                'parent_id' => 532300,
                'level' => 3,
            ),
            19 => 
            array (
                'id' => 3020,
                'zone_id' => 532326,
                'name' => '大姚县',
                'parent_id' => 532300,
                'level' => 3,
            ),
            20 => 
            array (
                'id' => 3021,
                'zone_id' => 532327,
                'name' => '永仁县',
                'parent_id' => 532300,
                'level' => 3,
            ),
            21 => 
            array (
                'id' => 3022,
                'zone_id' => 532328,
                'name' => '元谋县',
                'parent_id' => 532300,
                'level' => 3,
            ),
            22 => 
            array (
                'id' => 3023,
                'zone_id' => 532329,
                'name' => '武定县',
                'parent_id' => 532300,
                'level' => 3,
            ),
            23 => 
            array (
                'id' => 3024,
                'zone_id' => 532331,
                'name' => '禄丰县',
                'parent_id' => 532300,
                'level' => 3,
            ),
            24 => 
            array (
                'id' => 3025,
                'zone_id' => 532501,
                'name' => '个旧市',
                'parent_id' => 532500,
                'level' => 3,
            ),
            25 => 
            array (
                'id' => 3026,
                'zone_id' => 532502,
                'name' => '开远市',
                'parent_id' => 532500,
                'level' => 3,
            ),
            26 => 
            array (
                'id' => 3027,
                'zone_id' => 532522,
                'name' => '蒙自县',
                'parent_id' => 532500,
                'level' => 3,
            ),
            27 => 
            array (
                'id' => 3028,
                'zone_id' => 532523,
                'name' => '屏边苗族自治县',
                'parent_id' => 532500,
                'level' => 3,
            ),
            28 => 
            array (
                'id' => 3029,
                'zone_id' => 532524,
                'name' => '建水县',
                'parent_id' => 532500,
                'level' => 3,
            ),
            29 => 
            array (
                'id' => 3030,
                'zone_id' => 532525,
                'name' => '石屏县',
                'parent_id' => 532500,
                'level' => 3,
            ),
            30 => 
            array (
                'id' => 3031,
                'zone_id' => 532526,
                'name' => '弥勒县',
                'parent_id' => 532500,
                'level' => 3,
            ),
            31 => 
            array (
                'id' => 3032,
                'zone_id' => 532527,
                'name' => '泸西县',
                'parent_id' => 532500,
                'level' => 3,
            ),
            32 => 
            array (
                'id' => 3033,
                'zone_id' => 532528,
                'name' => '元阳县',
                'parent_id' => 532500,
                'level' => 3,
            ),
            33 => 
            array (
                'id' => 3034,
                'zone_id' => 532529,
                'name' => '红河县',
                'parent_id' => 532500,
                'level' => 3,
            ),
            34 => 
            array (
                'id' => 3035,
                'zone_id' => 532530,
                'name' => '金平苗族瑶族傣族自治县',
                'parent_id' => 532500,
                'level' => 3,
            ),
            35 => 
            array (
                'id' => 3036,
                'zone_id' => 532531,
                'name' => '绿春县',
                'parent_id' => 532500,
                'level' => 3,
            ),
            36 => 
            array (
                'id' => 3037,
                'zone_id' => 532532,
                'name' => '河口瑶族自治县',
                'parent_id' => 532500,
                'level' => 3,
            ),
            37 => 
            array (
                'id' => 3038,
                'zone_id' => 532621,
                'name' => '文山县',
                'parent_id' => 532600,
                'level' => 3,
            ),
            38 => 
            array (
                'id' => 3039,
                'zone_id' => 532622,
                'name' => '砚山县',
                'parent_id' => 532600,
                'level' => 3,
            ),
            39 => 
            array (
                'id' => 3040,
                'zone_id' => 532623,
                'name' => '西畴县',
                'parent_id' => 532600,
                'level' => 3,
            ),
            40 => 
            array (
                'id' => 3041,
                'zone_id' => 532624,
                'name' => '麻栗坡县',
                'parent_id' => 532600,
                'level' => 3,
            ),
            41 => 
            array (
                'id' => 3042,
                'zone_id' => 532625,
                'name' => '马关县',
                'parent_id' => 532600,
                'level' => 3,
            ),
            42 => 
            array (
                'id' => 3043,
                'zone_id' => 532626,
                'name' => '丘北县',
                'parent_id' => 532600,
                'level' => 3,
            ),
            43 => 
            array (
                'id' => 3044,
                'zone_id' => 532627,
                'name' => '广南县',
                'parent_id' => 532600,
                'level' => 3,
            ),
            44 => 
            array (
                'id' => 3045,
                'zone_id' => 532628,
                'name' => '富宁县',
                'parent_id' => 532600,
                'level' => 3,
            ),
            45 => 
            array (
                'id' => 3046,
                'zone_id' => 532801,
                'name' => '景洪市',
                'parent_id' => 532800,
                'level' => 3,
            ),
            46 => 
            array (
                'id' => 3047,
                'zone_id' => 532822,
                'name' => '勐海县',
                'parent_id' => 532800,
                'level' => 3,
            ),
            47 => 
            array (
                'id' => 3048,
                'zone_id' => 532823,
                'name' => '勐腊县',
                'parent_id' => 532800,
                'level' => 3,
            ),
            48 => 
            array (
                'id' => 3049,
                'zone_id' => 532901,
                'name' => '大理市',
                'parent_id' => 532900,
                'level' => 3,
            ),
            49 => 
            array (
                'id' => 3050,
                'zone_id' => 532922,
                'name' => '漾濞彝族自治县',
                'parent_id' => 532900,
                'level' => 3,
            ),
            50 => 
            array (
                'id' => 3051,
                'zone_id' => 532923,
                'name' => '祥云县',
                'parent_id' => 532900,
                'level' => 3,
            ),
            51 => 
            array (
                'id' => 3052,
                'zone_id' => 532924,
                'name' => '宾川县',
                'parent_id' => 532900,
                'level' => 3,
            ),
            52 => 
            array (
                'id' => 3053,
                'zone_id' => 532925,
                'name' => '弥渡县',
                'parent_id' => 532900,
                'level' => 3,
            ),
            53 => 
            array (
                'id' => 3054,
                'zone_id' => 532926,
                'name' => '南涧彝族自治县',
                'parent_id' => 532900,
                'level' => 3,
            ),
            54 => 
            array (
                'id' => 3055,
                'zone_id' => 532927,
                'name' => '巍山彝族回族自治县',
                'parent_id' => 532900,
                'level' => 3,
            ),
            55 => 
            array (
                'id' => 3056,
                'zone_id' => 532928,
                'name' => '永平县',
                'parent_id' => 532900,
                'level' => 3,
            ),
            56 => 
            array (
                'id' => 3057,
                'zone_id' => 532929,
                'name' => '云龙县',
                'parent_id' => 532900,
                'level' => 3,
            ),
            57 => 
            array (
                'id' => 3058,
                'zone_id' => 532930,
                'name' => '洱源县',
                'parent_id' => 532900,
                'level' => 3,
            ),
            58 => 
            array (
                'id' => 3059,
                'zone_id' => 532931,
                'name' => '剑川县',
                'parent_id' => 532900,
                'level' => 3,
            ),
            59 => 
            array (
                'id' => 3060,
                'zone_id' => 532932,
                'name' => '鹤庆县',
                'parent_id' => 532900,
                'level' => 3,
            ),
            60 => 
            array (
                'id' => 3061,
                'zone_id' => 533102,
                'name' => '瑞丽市',
                'parent_id' => 533100,
                'level' => 3,
            ),
            61 => 
            array (
                'id' => 3062,
                'zone_id' => 533103,
                'name' => '潞西市',
                'parent_id' => 533100,
                'level' => 3,
            ),
            62 => 
            array (
                'id' => 3063,
                'zone_id' => 533122,
                'name' => '梁河县',
                'parent_id' => 533100,
                'level' => 3,
            ),
            63 => 
            array (
                'id' => 3064,
                'zone_id' => 533123,
                'name' => '盈江县',
                'parent_id' => 533100,
                'level' => 3,
            ),
            64 => 
            array (
                'id' => 3065,
                'zone_id' => 533124,
                'name' => '陇川县',
                'parent_id' => 533100,
                'level' => 3,
            ),
            65 => 
            array (
                'id' => 3066,
                'zone_id' => 533321,
                'name' => '泸水县',
                'parent_id' => 533300,
                'level' => 3,
            ),
            66 => 
            array (
                'id' => 3067,
                'zone_id' => 533323,
                'name' => '福贡县',
                'parent_id' => 533300,
                'level' => 3,
            ),
            67 => 
            array (
                'id' => 3068,
                'zone_id' => 533324,
                'name' => '贡山独龙族怒族自治县',
                'parent_id' => 533300,
                'level' => 3,
            ),
            68 => 
            array (
                'id' => 3069,
                'zone_id' => 533325,
                'name' => '兰坪白族普米族自治县',
                'parent_id' => 533300,
                'level' => 3,
            ),
            69 => 
            array (
                'id' => 3070,
                'zone_id' => 533421,
                'name' => '香格里拉县',
                'parent_id' => 533400,
                'level' => 3,
            ),
            70 => 
            array (
                'id' => 3071,
                'zone_id' => 533422,
                'name' => '德钦县',
                'parent_id' => 533400,
                'level' => 3,
            ),
            71 => 
            array (
                'id' => 3072,
                'zone_id' => 533423,
                'name' => '维西傈僳族自治县',
                'parent_id' => 533400,
                'level' => 3,
            ),
            72 => 
            array (
                'id' => 3073,
                'zone_id' => 540101,
                'name' => '市辖区',
                'parent_id' => 540100,
                'level' => 3,
            ),
            73 => 
            array (
                'id' => 3074,
                'zone_id' => 540102,
                'name' => '城关区',
                'parent_id' => 540100,
                'level' => 3,
            ),
            74 => 
            array (
                'id' => 3075,
                'zone_id' => 540121,
                'name' => '林周县',
                'parent_id' => 540100,
                'level' => 3,
            ),
            75 => 
            array (
                'id' => 3076,
                'zone_id' => 540122,
                'name' => '当雄县',
                'parent_id' => 540100,
                'level' => 3,
            ),
            76 => 
            array (
                'id' => 3077,
                'zone_id' => 540123,
                'name' => '尼木县',
                'parent_id' => 540100,
                'level' => 3,
            ),
            77 => 
            array (
                'id' => 3078,
                'zone_id' => 540124,
                'name' => '曲水县',
                'parent_id' => 540100,
                'level' => 3,
            ),
            78 => 
            array (
                'id' => 3079,
                'zone_id' => 540125,
                'name' => '堆龙德庆县',
                'parent_id' => 540100,
                'level' => 3,
            ),
            79 => 
            array (
                'id' => 3080,
                'zone_id' => 540126,
                'name' => '达孜县',
                'parent_id' => 540100,
                'level' => 3,
            ),
            80 => 
            array (
                'id' => 3081,
                'zone_id' => 540127,
                'name' => '墨竹工卡县',
                'parent_id' => 540100,
                'level' => 3,
            ),
            81 => 
            array (
                'id' => 3082,
                'zone_id' => 542121,
                'name' => '昌都县',
                'parent_id' => 542100,
                'level' => 3,
            ),
            82 => 
            array (
                'id' => 3083,
                'zone_id' => 542122,
                'name' => '江达县',
                'parent_id' => 542100,
                'level' => 3,
            ),
            83 => 
            array (
                'id' => 3084,
                'zone_id' => 542123,
                'name' => '贡觉县',
                'parent_id' => 542100,
                'level' => 3,
            ),
            84 => 
            array (
                'id' => 3085,
                'zone_id' => 542124,
                'name' => '类乌齐县',
                'parent_id' => 542100,
                'level' => 3,
            ),
            85 => 
            array (
                'id' => 3086,
                'zone_id' => 542125,
                'name' => '丁青县',
                'parent_id' => 542100,
                'level' => 3,
            ),
            86 => 
            array (
                'id' => 3087,
                'zone_id' => 542126,
                'name' => '察雅县',
                'parent_id' => 542100,
                'level' => 3,
            ),
            87 => 
            array (
                'id' => 3088,
                'zone_id' => 542127,
                'name' => '八宿县',
                'parent_id' => 542100,
                'level' => 3,
            ),
            88 => 
            array (
                'id' => 3089,
                'zone_id' => 542128,
                'name' => '左贡县',
                'parent_id' => 542100,
                'level' => 3,
            ),
            89 => 
            array (
                'id' => 3090,
                'zone_id' => 542129,
                'name' => '芒康县',
                'parent_id' => 542100,
                'level' => 3,
            ),
            90 => 
            array (
                'id' => 3091,
                'zone_id' => 542132,
                'name' => '洛隆县',
                'parent_id' => 542100,
                'level' => 3,
            ),
            91 => 
            array (
                'id' => 3092,
                'zone_id' => 542133,
                'name' => '边坝县',
                'parent_id' => 542100,
                'level' => 3,
            ),
            92 => 
            array (
                'id' => 3093,
                'zone_id' => 542221,
                'name' => '乃东县',
                'parent_id' => 542200,
                'level' => 3,
            ),
            93 => 
            array (
                'id' => 3094,
                'zone_id' => 542222,
                'name' => '扎囊县',
                'parent_id' => 542200,
                'level' => 3,
            ),
            94 => 
            array (
                'id' => 3095,
                'zone_id' => 542223,
                'name' => '贡嘎县',
                'parent_id' => 542200,
                'level' => 3,
            ),
            95 => 
            array (
                'id' => 3096,
                'zone_id' => 542224,
                'name' => '桑日县',
                'parent_id' => 542200,
                'level' => 3,
            ),
            96 => 
            array (
                'id' => 3097,
                'zone_id' => 542225,
                'name' => '琼结县',
                'parent_id' => 542200,
                'level' => 3,
            ),
            97 => 
            array (
                'id' => 3098,
                'zone_id' => 542226,
                'name' => '曲松县',
                'parent_id' => 542200,
                'level' => 3,
            ),
            98 => 
            array (
                'id' => 3099,
                'zone_id' => 542227,
                'name' => '措美县',
                'parent_id' => 542200,
                'level' => 3,
            ),
            99 => 
            array (
                'id' => 3100,
                'zone_id' => 542228,
                'name' => '洛扎县',
                'parent_id' => 542200,
                'level' => 3,
            ),
            100 => 
            array (
                'id' => 3101,
                'zone_id' => 542229,
                'name' => '加查县',
                'parent_id' => 542200,
                'level' => 3,
            ),
            101 => 
            array (
                'id' => 3102,
                'zone_id' => 542231,
                'name' => '隆子县',
                'parent_id' => 542200,
                'level' => 3,
            ),
            102 => 
            array (
                'id' => 3103,
                'zone_id' => 542232,
                'name' => '错那县',
                'parent_id' => 542200,
                'level' => 3,
            ),
            103 => 
            array (
                'id' => 3104,
                'zone_id' => 542233,
                'name' => '浪卡子县',
                'parent_id' => 542200,
                'level' => 3,
            ),
            104 => 
            array (
                'id' => 3105,
                'zone_id' => 542301,
                'name' => '日喀则市',
                'parent_id' => 542300,
                'level' => 3,
            ),
            105 => 
            array (
                'id' => 3106,
                'zone_id' => 542322,
                'name' => '南木林县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            106 => 
            array (
                'id' => 3107,
                'zone_id' => 542323,
                'name' => '江孜县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            107 => 
            array (
                'id' => 3108,
                'zone_id' => 542324,
                'name' => '定日县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            108 => 
            array (
                'id' => 3109,
                'zone_id' => 542325,
                'name' => '萨迦县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            109 => 
            array (
                'id' => 3110,
                'zone_id' => 542326,
                'name' => '拉孜县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            110 => 
            array (
                'id' => 3111,
                'zone_id' => 542327,
                'name' => '昂仁县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            111 => 
            array (
                'id' => 3112,
                'zone_id' => 542328,
                'name' => '谢通门县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            112 => 
            array (
                'id' => 3113,
                'zone_id' => 542329,
                'name' => '白朗县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            113 => 
            array (
                'id' => 3114,
                'zone_id' => 542330,
                'name' => '仁布县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            114 => 
            array (
                'id' => 3115,
                'zone_id' => 542331,
                'name' => '康马县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            115 => 
            array (
                'id' => 3116,
                'zone_id' => 542332,
                'name' => '定结县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            116 => 
            array (
                'id' => 3117,
                'zone_id' => 542333,
                'name' => '仲巴县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            117 => 
            array (
                'id' => 3118,
                'zone_id' => 542334,
                'name' => '亚东县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            118 => 
            array (
                'id' => 3119,
                'zone_id' => 542335,
                'name' => '吉隆县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            119 => 
            array (
                'id' => 3120,
                'zone_id' => 542336,
                'name' => '聂拉木县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            120 => 
            array (
                'id' => 3121,
                'zone_id' => 542337,
                'name' => '萨嘎县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            121 => 
            array (
                'id' => 3122,
                'zone_id' => 542338,
                'name' => '岗巴县',
                'parent_id' => 542300,
                'level' => 3,
            ),
            122 => 
            array (
                'id' => 3123,
                'zone_id' => 542421,
                'name' => '那曲县',
                'parent_id' => 542400,
                'level' => 3,
            ),
            123 => 
            array (
                'id' => 3124,
                'zone_id' => 542422,
                'name' => '嘉黎县',
                'parent_id' => 542400,
                'level' => 3,
            ),
            124 => 
            array (
                'id' => 3125,
                'zone_id' => 542423,
                'name' => '比如县',
                'parent_id' => 542400,
                'level' => 3,
            ),
            125 => 
            array (
                'id' => 3126,
                'zone_id' => 542424,
                'name' => '聂荣县',
                'parent_id' => 542400,
                'level' => 3,
            ),
            126 => 
            array (
                'id' => 3127,
                'zone_id' => 542425,
                'name' => '安多县',
                'parent_id' => 542400,
                'level' => 3,
            ),
            127 => 
            array (
                'id' => 3128,
                'zone_id' => 542426,
                'name' => '申扎县',
                'parent_id' => 542400,
                'level' => 3,
            ),
            128 => 
            array (
                'id' => 3129,
                'zone_id' => 542427,
                'name' => '索　县',
                'parent_id' => 542400,
                'level' => 3,
            ),
            129 => 
            array (
                'id' => 3130,
                'zone_id' => 542428,
                'name' => '班戈县',
                'parent_id' => 542400,
                'level' => 3,
            ),
            130 => 
            array (
                'id' => 3131,
                'zone_id' => 542429,
                'name' => '巴青县',
                'parent_id' => 542400,
                'level' => 3,
            ),
            131 => 
            array (
                'id' => 3132,
                'zone_id' => 542430,
                'name' => '尼玛县',
                'parent_id' => 542400,
                'level' => 3,
            ),
            132 => 
            array (
                'id' => 3133,
                'zone_id' => 542521,
                'name' => '普兰县',
                'parent_id' => 542500,
                'level' => 3,
            ),
            133 => 
            array (
                'id' => 3134,
                'zone_id' => 542522,
                'name' => '札达县',
                'parent_id' => 542500,
                'level' => 3,
            ),
            134 => 
            array (
                'id' => 3135,
                'zone_id' => 542523,
                'name' => '噶尔县',
                'parent_id' => 542500,
                'level' => 3,
            ),
            135 => 
            array (
                'id' => 3136,
                'zone_id' => 542524,
                'name' => '日土县',
                'parent_id' => 542500,
                'level' => 3,
            ),
            136 => 
            array (
                'id' => 3137,
                'zone_id' => 542525,
                'name' => '革吉县',
                'parent_id' => 542500,
                'level' => 3,
            ),
            137 => 
            array (
                'id' => 3138,
                'zone_id' => 542526,
                'name' => '改则县',
                'parent_id' => 542500,
                'level' => 3,
            ),
            138 => 
            array (
                'id' => 3139,
                'zone_id' => 542527,
                'name' => '措勤县',
                'parent_id' => 542500,
                'level' => 3,
            ),
            139 => 
            array (
                'id' => 3140,
                'zone_id' => 542621,
                'name' => '林芝县',
                'parent_id' => 542600,
                'level' => 3,
            ),
            140 => 
            array (
                'id' => 3141,
                'zone_id' => 542622,
                'name' => '工布江达县',
                'parent_id' => 542600,
                'level' => 3,
            ),
            141 => 
            array (
                'id' => 3142,
                'zone_id' => 542623,
                'name' => '米林县',
                'parent_id' => 542600,
                'level' => 3,
            ),
            142 => 
            array (
                'id' => 3143,
                'zone_id' => 542624,
                'name' => '墨脱县',
                'parent_id' => 542600,
                'level' => 3,
            ),
            143 => 
            array (
                'id' => 3144,
                'zone_id' => 542625,
                'name' => '波密县',
                'parent_id' => 542600,
                'level' => 3,
            ),
            144 => 
            array (
                'id' => 3145,
                'zone_id' => 542626,
                'name' => '察隅县',
                'parent_id' => 542600,
                'level' => 3,
            ),
            145 => 
            array (
                'id' => 3146,
                'zone_id' => 542627,
                'name' => '朗　县',
                'parent_id' => 542600,
                'level' => 3,
            ),
            146 => 
            array (
                'id' => 3147,
                'zone_id' => 610101,
                'name' => '市辖区',
                'parent_id' => 610100,
                'level' => 3,
            ),
            147 => 
            array (
                'id' => 3148,
                'zone_id' => 610102,
                'name' => '新城区',
                'parent_id' => 610100,
                'level' => 3,
            ),
            148 => 
            array (
                'id' => 3149,
                'zone_id' => 610103,
                'name' => '碑林区',
                'parent_id' => 610100,
                'level' => 3,
            ),
            149 => 
            array (
                'id' => 3150,
                'zone_id' => 610104,
                'name' => '莲湖区',
                'parent_id' => 610100,
                'level' => 3,
            ),
            150 => 
            array (
                'id' => 3151,
                'zone_id' => 610111,
                'name' => '灞桥区',
                'parent_id' => 610100,
                'level' => 3,
            ),
            151 => 
            array (
                'id' => 3152,
                'zone_id' => 610112,
                'name' => '未央区',
                'parent_id' => 610100,
                'level' => 3,
            ),
            152 => 
            array (
                'id' => 3153,
                'zone_id' => 610113,
                'name' => '雁塔区',
                'parent_id' => 610100,
                'level' => 3,
            ),
            153 => 
            array (
                'id' => 3154,
                'zone_id' => 610114,
                'name' => '阎良区',
                'parent_id' => 610100,
                'level' => 3,
            ),
            154 => 
            array (
                'id' => 3155,
                'zone_id' => 610115,
                'name' => '临潼区',
                'parent_id' => 610100,
                'level' => 3,
            ),
            155 => 
            array (
                'id' => 3156,
                'zone_id' => 610116,
                'name' => '长安区',
                'parent_id' => 610100,
                'level' => 3,
            ),
            156 => 
            array (
                'id' => 3157,
                'zone_id' => 610122,
                'name' => '蓝田县',
                'parent_id' => 610100,
                'level' => 3,
            ),
            157 => 
            array (
                'id' => 3158,
                'zone_id' => 610124,
                'name' => '周至县',
                'parent_id' => 610100,
                'level' => 3,
            ),
            158 => 
            array (
                'id' => 3159,
                'zone_id' => 610125,
                'name' => '户　县',
                'parent_id' => 610100,
                'level' => 3,
            ),
            159 => 
            array (
                'id' => 3160,
                'zone_id' => 610126,
                'name' => '高陵县',
                'parent_id' => 610100,
                'level' => 3,
            ),
            160 => 
            array (
                'id' => 3161,
                'zone_id' => 610201,
                'name' => '市辖区',
                'parent_id' => 610200,
                'level' => 3,
            ),
            161 => 
            array (
                'id' => 3162,
                'zone_id' => 610202,
                'name' => '王益区',
                'parent_id' => 610200,
                'level' => 3,
            ),
            162 => 
            array (
                'id' => 3163,
                'zone_id' => 610203,
                'name' => '印台区',
                'parent_id' => 610200,
                'level' => 3,
            ),
            163 => 
            array (
                'id' => 3164,
                'zone_id' => 610204,
                'name' => '耀州区',
                'parent_id' => 610200,
                'level' => 3,
            ),
            164 => 
            array (
                'id' => 3165,
                'zone_id' => 610222,
                'name' => '宜君县',
                'parent_id' => 610200,
                'level' => 3,
            ),
            165 => 
            array (
                'id' => 3166,
                'zone_id' => 610301,
                'name' => '市辖区',
                'parent_id' => 610300,
                'level' => 3,
            ),
            166 => 
            array (
                'id' => 3167,
                'zone_id' => 610302,
                'name' => '渭滨区',
                'parent_id' => 610300,
                'level' => 3,
            ),
            167 => 
            array (
                'id' => 3168,
                'zone_id' => 610303,
                'name' => '金台区',
                'parent_id' => 610300,
                'level' => 3,
            ),
            168 => 
            array (
                'id' => 3169,
                'zone_id' => 610304,
                'name' => '陈仓区',
                'parent_id' => 610300,
                'level' => 3,
            ),
            169 => 
            array (
                'id' => 3170,
                'zone_id' => 610322,
                'name' => '凤翔县',
                'parent_id' => 610300,
                'level' => 3,
            ),
            170 => 
            array (
                'id' => 3171,
                'zone_id' => 610323,
                'name' => '岐山县',
                'parent_id' => 610300,
                'level' => 3,
            ),
            171 => 
            array (
                'id' => 3172,
                'zone_id' => 610324,
                'name' => '扶风县',
                'parent_id' => 610300,
                'level' => 3,
            ),
            172 => 
            array (
                'id' => 3173,
                'zone_id' => 610326,
                'name' => '眉　县',
                'parent_id' => 610300,
                'level' => 3,
            ),
            173 => 
            array (
                'id' => 3174,
                'zone_id' => 610327,
                'name' => '陇　县',
                'parent_id' => 610300,
                'level' => 3,
            ),
            174 => 
            array (
                'id' => 3175,
                'zone_id' => 610328,
                'name' => '千阳县',
                'parent_id' => 610300,
                'level' => 3,
            ),
            175 => 
            array (
                'id' => 3176,
                'zone_id' => 610329,
                'name' => '麟游县',
                'parent_id' => 610300,
                'level' => 3,
            ),
            176 => 
            array (
                'id' => 3177,
                'zone_id' => 610330,
                'name' => '凤　县',
                'parent_id' => 610300,
                'level' => 3,
            ),
            177 => 
            array (
                'id' => 3178,
                'zone_id' => 610331,
                'name' => '太白县',
                'parent_id' => 610300,
                'level' => 3,
            ),
            178 => 
            array (
                'id' => 3179,
                'zone_id' => 610401,
                'name' => '市辖区',
                'parent_id' => 610400,
                'level' => 3,
            ),
            179 => 
            array (
                'id' => 3180,
                'zone_id' => 610402,
                'name' => '秦都区',
                'parent_id' => 610400,
                'level' => 3,
            ),
            180 => 
            array (
                'id' => 3181,
                'zone_id' => 610403,
                'name' => '杨凌区',
                'parent_id' => 610400,
                'level' => 3,
            ),
            181 => 
            array (
                'id' => 3182,
                'zone_id' => 610404,
                'name' => '渭城区',
                'parent_id' => 610400,
                'level' => 3,
            ),
            182 => 
            array (
                'id' => 3183,
                'zone_id' => 610422,
                'name' => '三原县',
                'parent_id' => 610400,
                'level' => 3,
            ),
            183 => 
            array (
                'id' => 3184,
                'zone_id' => 610423,
                'name' => '泾阳县',
                'parent_id' => 610400,
                'level' => 3,
            ),
            184 => 
            array (
                'id' => 3185,
                'zone_id' => 610424,
                'name' => '乾　县',
                'parent_id' => 610400,
                'level' => 3,
            ),
            185 => 
            array (
                'id' => 3186,
                'zone_id' => 610425,
                'name' => '礼泉县',
                'parent_id' => 610400,
                'level' => 3,
            ),
            186 => 
            array (
                'id' => 3187,
                'zone_id' => 610426,
                'name' => '永寿县',
                'parent_id' => 610400,
                'level' => 3,
            ),
            187 => 
            array (
                'id' => 3188,
                'zone_id' => 610427,
                'name' => '彬　县',
                'parent_id' => 610400,
                'level' => 3,
            ),
            188 => 
            array (
                'id' => 3189,
                'zone_id' => 610428,
                'name' => '长武县',
                'parent_id' => 610400,
                'level' => 3,
            ),
            189 => 
            array (
                'id' => 3190,
                'zone_id' => 610429,
                'name' => '旬邑县',
                'parent_id' => 610400,
                'level' => 3,
            ),
            190 => 
            array (
                'id' => 3191,
                'zone_id' => 610430,
                'name' => '淳化县',
                'parent_id' => 610400,
                'level' => 3,
            ),
            191 => 
            array (
                'id' => 3192,
                'zone_id' => 610431,
                'name' => '武功县',
                'parent_id' => 610400,
                'level' => 3,
            ),
            192 => 
            array (
                'id' => 3193,
                'zone_id' => 610481,
                'name' => '兴平市',
                'parent_id' => 610400,
                'level' => 3,
            ),
            193 => 
            array (
                'id' => 3194,
                'zone_id' => 610501,
                'name' => '市辖区',
                'parent_id' => 610500,
                'level' => 3,
            ),
            194 => 
            array (
                'id' => 3195,
                'zone_id' => 610502,
                'name' => '临渭区',
                'parent_id' => 610500,
                'level' => 3,
            ),
            195 => 
            array (
                'id' => 3196,
                'zone_id' => 610521,
                'name' => '华　县',
                'parent_id' => 610500,
                'level' => 3,
            ),
            196 => 
            array (
                'id' => 3197,
                'zone_id' => 610522,
                'name' => '潼关县',
                'parent_id' => 610500,
                'level' => 3,
            ),
            197 => 
            array (
                'id' => 3198,
                'zone_id' => 610523,
                'name' => '大荔县',
                'parent_id' => 610500,
                'level' => 3,
            ),
            198 => 
            array (
                'id' => 3199,
                'zone_id' => 610524,
                'name' => '合阳县',
                'parent_id' => 610500,
                'level' => 3,
            ),
            199 => 
            array (
                'id' => 3200,
                'zone_id' => 610525,
                'name' => '澄城县',
                'parent_id' => 610500,
                'level' => 3,
            ),
            200 => 
            array (
                'id' => 3201,
                'zone_id' => 610526,
                'name' => '蒲城县',
                'parent_id' => 610500,
                'level' => 3,
            ),
            201 => 
            array (
                'id' => 3202,
                'zone_id' => 610527,
                'name' => '白水县',
                'parent_id' => 610500,
                'level' => 3,
            ),
            202 => 
            array (
                'id' => 3203,
                'zone_id' => 610528,
                'name' => '富平县',
                'parent_id' => 610500,
                'level' => 3,
            ),
            203 => 
            array (
                'id' => 3204,
                'zone_id' => 610581,
                'name' => '韩城市',
                'parent_id' => 610500,
                'level' => 3,
            ),
            204 => 
            array (
                'id' => 3205,
                'zone_id' => 610582,
                'name' => '华阴市',
                'parent_id' => 610500,
                'level' => 3,
            ),
            205 => 
            array (
                'id' => 3206,
                'zone_id' => 610601,
                'name' => '市辖区',
                'parent_id' => 610600,
                'level' => 3,
            ),
            206 => 
            array (
                'id' => 3207,
                'zone_id' => 610602,
                'name' => '宝塔区',
                'parent_id' => 610600,
                'level' => 3,
            ),
            207 => 
            array (
                'id' => 3208,
                'zone_id' => 610621,
                'name' => '延长县',
                'parent_id' => 610600,
                'level' => 3,
            ),
            208 => 
            array (
                'id' => 3209,
                'zone_id' => 610622,
                'name' => '延川县',
                'parent_id' => 610600,
                'level' => 3,
            ),
            209 => 
            array (
                'id' => 3210,
                'zone_id' => 610623,
                'name' => '子长县',
                'parent_id' => 610600,
                'level' => 3,
            ),
            210 => 
            array (
                'id' => 3211,
                'zone_id' => 610624,
                'name' => '安塞县',
                'parent_id' => 610600,
                'level' => 3,
            ),
            211 => 
            array (
                'id' => 3212,
                'zone_id' => 610625,
                'name' => '志丹县',
                'parent_id' => 610600,
                'level' => 3,
            ),
            212 => 
            array (
                'id' => 3213,
                'zone_id' => 610626,
                'name' => '吴旗县',
                'parent_id' => 610600,
                'level' => 3,
            ),
            213 => 
            array (
                'id' => 3214,
                'zone_id' => 610627,
                'name' => '甘泉县',
                'parent_id' => 610600,
                'level' => 3,
            ),
            214 => 
            array (
                'id' => 3215,
                'zone_id' => 610628,
                'name' => '富　县',
                'parent_id' => 610600,
                'level' => 3,
            ),
            215 => 
            array (
                'id' => 3216,
                'zone_id' => 610629,
                'name' => '洛川县',
                'parent_id' => 610600,
                'level' => 3,
            ),
            216 => 
            array (
                'id' => 3217,
                'zone_id' => 610630,
                'name' => '宜川县',
                'parent_id' => 610600,
                'level' => 3,
            ),
            217 => 
            array (
                'id' => 3218,
                'zone_id' => 610631,
                'name' => '黄龙县',
                'parent_id' => 610600,
                'level' => 3,
            ),
            218 => 
            array (
                'id' => 3219,
                'zone_id' => 610632,
                'name' => '黄陵县',
                'parent_id' => 610600,
                'level' => 3,
            ),
            219 => 
            array (
                'id' => 3220,
                'zone_id' => 610701,
                'name' => '市辖区',
                'parent_id' => 610700,
                'level' => 3,
            ),
            220 => 
            array (
                'id' => 3221,
                'zone_id' => 610702,
                'name' => '汉台区',
                'parent_id' => 610700,
                'level' => 3,
            ),
            221 => 
            array (
                'id' => 3222,
                'zone_id' => 610721,
                'name' => '南郑县',
                'parent_id' => 610700,
                'level' => 3,
            ),
            222 => 
            array (
                'id' => 3223,
                'zone_id' => 610722,
                'name' => '城固县',
                'parent_id' => 610700,
                'level' => 3,
            ),
            223 => 
            array (
                'id' => 3224,
                'zone_id' => 610723,
                'name' => '洋　县',
                'parent_id' => 610700,
                'level' => 3,
            ),
            224 => 
            array (
                'id' => 3225,
                'zone_id' => 610724,
                'name' => '西乡县',
                'parent_id' => 610700,
                'level' => 3,
            ),
            225 => 
            array (
                'id' => 3226,
                'zone_id' => 610725,
                'name' => '勉　县',
                'parent_id' => 610700,
                'level' => 3,
            ),
            226 => 
            array (
                'id' => 3227,
                'zone_id' => 610726,
                'name' => '宁强县',
                'parent_id' => 610700,
                'level' => 3,
            ),
            227 => 
            array (
                'id' => 3228,
                'zone_id' => 610727,
                'name' => '略阳县',
                'parent_id' => 610700,
                'level' => 3,
            ),
            228 => 
            array (
                'id' => 3229,
                'zone_id' => 610728,
                'name' => '镇巴县',
                'parent_id' => 610700,
                'level' => 3,
            ),
            229 => 
            array (
                'id' => 3230,
                'zone_id' => 610729,
                'name' => '留坝县',
                'parent_id' => 610700,
                'level' => 3,
            ),
            230 => 
            array (
                'id' => 3231,
                'zone_id' => 610730,
                'name' => '佛坪县',
                'parent_id' => 610700,
                'level' => 3,
            ),
            231 => 
            array (
                'id' => 3232,
                'zone_id' => 610801,
                'name' => '市辖区',
                'parent_id' => 610800,
                'level' => 3,
            ),
            232 => 
            array (
                'id' => 3233,
                'zone_id' => 610802,
                'name' => '榆阳区',
                'parent_id' => 610800,
                'level' => 3,
            ),
            233 => 
            array (
                'id' => 3234,
                'zone_id' => 610821,
                'name' => '神木县',
                'parent_id' => 610800,
                'level' => 3,
            ),
            234 => 
            array (
                'id' => 3235,
                'zone_id' => 610822,
                'name' => '府谷县',
                'parent_id' => 610800,
                'level' => 3,
            ),
            235 => 
            array (
                'id' => 3236,
                'zone_id' => 610823,
                'name' => '横山县',
                'parent_id' => 610800,
                'level' => 3,
            ),
            236 => 
            array (
                'id' => 3237,
                'zone_id' => 610824,
                'name' => '靖边县',
                'parent_id' => 610800,
                'level' => 3,
            ),
            237 => 
            array (
                'id' => 3238,
                'zone_id' => 610825,
                'name' => '定边县',
                'parent_id' => 610800,
                'level' => 3,
            ),
            238 => 
            array (
                'id' => 3239,
                'zone_id' => 610826,
                'name' => '绥德县',
                'parent_id' => 610800,
                'level' => 3,
            ),
            239 => 
            array (
                'id' => 3240,
                'zone_id' => 610827,
                'name' => '米脂县',
                'parent_id' => 610800,
                'level' => 3,
            ),
            240 => 
            array (
                'id' => 3241,
                'zone_id' => 610828,
                'name' => '佳　县',
                'parent_id' => 610800,
                'level' => 3,
            ),
            241 => 
            array (
                'id' => 3242,
                'zone_id' => 610829,
                'name' => '吴堡县',
                'parent_id' => 610800,
                'level' => 3,
            ),
            242 => 
            array (
                'id' => 3243,
                'zone_id' => 610830,
                'name' => '清涧县',
                'parent_id' => 610800,
                'level' => 3,
            ),
            243 => 
            array (
                'id' => 3244,
                'zone_id' => 610831,
                'name' => '子洲县',
                'parent_id' => 610800,
                'level' => 3,
            ),
            244 => 
            array (
                'id' => 3245,
                'zone_id' => 610901,
                'name' => '市辖区',
                'parent_id' => 610900,
                'level' => 3,
            ),
            245 => 
            array (
                'id' => 3246,
                'zone_id' => 610902,
                'name' => '汉滨区',
                'parent_id' => 610900,
                'level' => 3,
            ),
            246 => 
            array (
                'id' => 3247,
                'zone_id' => 610921,
                'name' => '汉阴县',
                'parent_id' => 610900,
                'level' => 3,
            ),
            247 => 
            array (
                'id' => 3248,
                'zone_id' => 610922,
                'name' => '石泉县',
                'parent_id' => 610900,
                'level' => 3,
            ),
            248 => 
            array (
                'id' => 3249,
                'zone_id' => 610923,
                'name' => '宁陕县',
                'parent_id' => 610900,
                'level' => 3,
            ),
            249 => 
            array (
                'id' => 3250,
                'zone_id' => 610924,
                'name' => '紫阳县',
                'parent_id' => 610900,
                'level' => 3,
            ),
            250 => 
            array (
                'id' => 3251,
                'zone_id' => 610925,
                'name' => '岚皋县',
                'parent_id' => 610900,
                'level' => 3,
            ),
            251 => 
            array (
                'id' => 3252,
                'zone_id' => 610926,
                'name' => '平利县',
                'parent_id' => 610900,
                'level' => 3,
            ),
            252 => 
            array (
                'id' => 3253,
                'zone_id' => 610927,
                'name' => '镇坪县',
                'parent_id' => 610900,
                'level' => 3,
            ),
            253 => 
            array (
                'id' => 3254,
                'zone_id' => 610928,
                'name' => '旬阳县',
                'parent_id' => 610900,
                'level' => 3,
            ),
            254 => 
            array (
                'id' => 3255,
                'zone_id' => 610929,
                'name' => '白河县',
                'parent_id' => 610900,
                'level' => 3,
            ),
            255 => 
            array (
                'id' => 3256,
                'zone_id' => 611001,
                'name' => '市辖区',
                'parent_id' => 611000,
                'level' => 3,
            ),
            256 => 
            array (
                'id' => 3257,
                'zone_id' => 611002,
                'name' => '商州区',
                'parent_id' => 611000,
                'level' => 3,
            ),
            257 => 
            array (
                'id' => 3258,
                'zone_id' => 611021,
                'name' => '洛南县',
                'parent_id' => 611000,
                'level' => 3,
            ),
            258 => 
            array (
                'id' => 3259,
                'zone_id' => 611022,
                'name' => '丹凤县',
                'parent_id' => 611000,
                'level' => 3,
            ),
            259 => 
            array (
                'id' => 3260,
                'zone_id' => 611023,
                'name' => '商南县',
                'parent_id' => 611000,
                'level' => 3,
            ),
            260 => 
            array (
                'id' => 3261,
                'zone_id' => 611024,
                'name' => '山阳县',
                'parent_id' => 611000,
                'level' => 3,
            ),
            261 => 
            array (
                'id' => 3262,
                'zone_id' => 611025,
                'name' => '镇安县',
                'parent_id' => 611000,
                'level' => 3,
            ),
            262 => 
            array (
                'id' => 3263,
                'zone_id' => 611026,
                'name' => '柞水县',
                'parent_id' => 611000,
                'level' => 3,
            ),
            263 => 
            array (
                'id' => 3264,
                'zone_id' => 620101,
                'name' => '市辖区',
                'parent_id' => 620100,
                'level' => 3,
            ),
            264 => 
            array (
                'id' => 3265,
                'zone_id' => 620102,
                'name' => '城关区',
                'parent_id' => 620100,
                'level' => 3,
            ),
            265 => 
            array (
                'id' => 3266,
                'zone_id' => 620103,
                'name' => '七里河区',
                'parent_id' => 620100,
                'level' => 3,
            ),
            266 => 
            array (
                'id' => 3267,
                'zone_id' => 620104,
                'name' => '西固区',
                'parent_id' => 620100,
                'level' => 3,
            ),
            267 => 
            array (
                'id' => 3268,
                'zone_id' => 620105,
                'name' => '安宁区',
                'parent_id' => 620100,
                'level' => 3,
            ),
            268 => 
            array (
                'id' => 3269,
                'zone_id' => 620111,
                'name' => '红古区',
                'parent_id' => 620100,
                'level' => 3,
            ),
            269 => 
            array (
                'id' => 3270,
                'zone_id' => 620121,
                'name' => '永登县',
                'parent_id' => 620100,
                'level' => 3,
            ),
            270 => 
            array (
                'id' => 3271,
                'zone_id' => 620122,
                'name' => '皋兰县',
                'parent_id' => 620100,
                'level' => 3,
            ),
            271 => 
            array (
                'id' => 3272,
                'zone_id' => 620123,
                'name' => '榆中县',
                'parent_id' => 620100,
                'level' => 3,
            ),
            272 => 
            array (
                'id' => 3273,
                'zone_id' => 620201,
                'name' => '市辖区',
                'parent_id' => 620200,
                'level' => 3,
            ),
            273 => 
            array (
                'id' => 3274,
                'zone_id' => 620301,
                'name' => '市辖区',
                'parent_id' => 620300,
                'level' => 3,
            ),
            274 => 
            array (
                'id' => 3275,
                'zone_id' => 620302,
                'name' => '金川区',
                'parent_id' => 620300,
                'level' => 3,
            ),
            275 => 
            array (
                'id' => 3276,
                'zone_id' => 620321,
                'name' => '永昌县',
                'parent_id' => 620300,
                'level' => 3,
            ),
            276 => 
            array (
                'id' => 3277,
                'zone_id' => 620401,
                'name' => '市辖区',
                'parent_id' => 620400,
                'level' => 3,
            ),
            277 => 
            array (
                'id' => 3278,
                'zone_id' => 620402,
                'name' => '白银区',
                'parent_id' => 620400,
                'level' => 3,
            ),
            278 => 
            array (
                'id' => 3279,
                'zone_id' => 620403,
                'name' => '平川区',
                'parent_id' => 620400,
                'level' => 3,
            ),
            279 => 
            array (
                'id' => 3280,
                'zone_id' => 620421,
                'name' => '靖远县',
                'parent_id' => 620400,
                'level' => 3,
            ),
            280 => 
            array (
                'id' => 3281,
                'zone_id' => 620422,
                'name' => '会宁县',
                'parent_id' => 620400,
                'level' => 3,
            ),
            281 => 
            array (
                'id' => 3282,
                'zone_id' => 620423,
                'name' => '景泰县',
                'parent_id' => 620400,
                'level' => 3,
            ),
            282 => 
            array (
                'id' => 3283,
                'zone_id' => 620501,
                'name' => '市辖区',
                'parent_id' => 620500,
                'level' => 3,
            ),
            283 => 
            array (
                'id' => 3284,
                'zone_id' => 620502,
                'name' => '秦城区',
                'parent_id' => 620500,
                'level' => 3,
            ),
            284 => 
            array (
                'id' => 3285,
                'zone_id' => 620503,
                'name' => '北道区',
                'parent_id' => 620500,
                'level' => 3,
            ),
            285 => 
            array (
                'id' => 3286,
                'zone_id' => 620521,
                'name' => '清水县',
                'parent_id' => 620500,
                'level' => 3,
            ),
            286 => 
            array (
                'id' => 3287,
                'zone_id' => 620522,
                'name' => '秦安县',
                'parent_id' => 620500,
                'level' => 3,
            ),
            287 => 
            array (
                'id' => 3288,
                'zone_id' => 620523,
                'name' => '甘谷县',
                'parent_id' => 620500,
                'level' => 3,
            ),
            288 => 
            array (
                'id' => 3289,
                'zone_id' => 620524,
                'name' => '武山县',
                'parent_id' => 620500,
                'level' => 3,
            ),
            289 => 
            array (
                'id' => 3290,
                'zone_id' => 620525,
                'name' => '张家川回族自治县',
                'parent_id' => 620500,
                'level' => 3,
            ),
            290 => 
            array (
                'id' => 3291,
                'zone_id' => 620601,
                'name' => '市辖区',
                'parent_id' => 620600,
                'level' => 3,
            ),
            291 => 
            array (
                'id' => 3292,
                'zone_id' => 620602,
                'name' => '凉州区',
                'parent_id' => 620600,
                'level' => 3,
            ),
            292 => 
            array (
                'id' => 3293,
                'zone_id' => 620621,
                'name' => '民勤县',
                'parent_id' => 620600,
                'level' => 3,
            ),
            293 => 
            array (
                'id' => 3294,
                'zone_id' => 620622,
                'name' => '古浪县',
                'parent_id' => 620600,
                'level' => 3,
            ),
            294 => 
            array (
                'id' => 3295,
                'zone_id' => 620623,
                'name' => '天祝藏族自治县',
                'parent_id' => 620600,
                'level' => 3,
            ),
            295 => 
            array (
                'id' => 3296,
                'zone_id' => 620701,
                'name' => '市辖区',
                'parent_id' => 620700,
                'level' => 3,
            ),
            296 => 
            array (
                'id' => 3297,
                'zone_id' => 620702,
                'name' => '甘州区',
                'parent_id' => 620700,
                'level' => 3,
            ),
            297 => 
            array (
                'id' => 3298,
                'zone_id' => 620721,
                'name' => '肃南裕固族自治县',
                'parent_id' => 620700,
                'level' => 3,
            ),
            298 => 
            array (
                'id' => 3299,
                'zone_id' => 620722,
                'name' => '民乐县',
                'parent_id' => 620700,
                'level' => 3,
            ),
            299 => 
            array (
                'id' => 3300,
                'zone_id' => 620723,
                'name' => '临泽县',
                'parent_id' => 620700,
                'level' => 3,
            ),
            300 => 
            array (
                'id' => 3301,
                'zone_id' => 620724,
                'name' => '高台县',
                'parent_id' => 620700,
                'level' => 3,
            ),
            301 => 
            array (
                'id' => 3302,
                'zone_id' => 620725,
                'name' => '山丹县',
                'parent_id' => 620700,
                'level' => 3,
            ),
            302 => 
            array (
                'id' => 3303,
                'zone_id' => 620801,
                'name' => '市辖区',
                'parent_id' => 620800,
                'level' => 3,
            ),
            303 => 
            array (
                'id' => 3304,
                'zone_id' => 620802,
                'name' => '崆峒区',
                'parent_id' => 620800,
                'level' => 3,
            ),
            304 => 
            array (
                'id' => 3305,
                'zone_id' => 620821,
                'name' => '泾川县',
                'parent_id' => 620800,
                'level' => 3,
            ),
            305 => 
            array (
                'id' => 3306,
                'zone_id' => 620822,
                'name' => '灵台县',
                'parent_id' => 620800,
                'level' => 3,
            ),
            306 => 
            array (
                'id' => 3307,
                'zone_id' => 620823,
                'name' => '崇信县',
                'parent_id' => 620800,
                'level' => 3,
            ),
            307 => 
            array (
                'id' => 3308,
                'zone_id' => 620824,
                'name' => '华亭县',
                'parent_id' => 620800,
                'level' => 3,
            ),
            308 => 
            array (
                'id' => 3309,
                'zone_id' => 620825,
                'name' => '庄浪县',
                'parent_id' => 620800,
                'level' => 3,
            ),
            309 => 
            array (
                'id' => 3310,
                'zone_id' => 620826,
                'name' => '静宁县',
                'parent_id' => 620800,
                'level' => 3,
            ),
            310 => 
            array (
                'id' => 3311,
                'zone_id' => 620901,
                'name' => '市辖区',
                'parent_id' => 620900,
                'level' => 3,
            ),
            311 => 
            array (
                'id' => 3312,
                'zone_id' => 620902,
                'name' => '肃州区',
                'parent_id' => 620900,
                'level' => 3,
            ),
            312 => 
            array (
                'id' => 3313,
                'zone_id' => 620921,
                'name' => '金塔县',
                'parent_id' => 620900,
                'level' => 3,
            ),
            313 => 
            array (
                'id' => 3314,
                'zone_id' => 620922,
                'name' => '安西县',
                'parent_id' => 620900,
                'level' => 3,
            ),
            314 => 
            array (
                'id' => 3315,
                'zone_id' => 620923,
                'name' => '肃北蒙古族自治县',
                'parent_id' => 620900,
                'level' => 3,
            ),
            315 => 
            array (
                'id' => 3316,
                'zone_id' => 620924,
                'name' => '阿克塞哈萨克族自治县',
                'parent_id' => 620900,
                'level' => 3,
            ),
            316 => 
            array (
                'id' => 3317,
                'zone_id' => 620981,
                'name' => '玉门市',
                'parent_id' => 620900,
                'level' => 3,
            ),
            317 => 
            array (
                'id' => 3318,
                'zone_id' => 620982,
                'name' => '敦煌市',
                'parent_id' => 620900,
                'level' => 3,
            ),
            318 => 
            array (
                'id' => 3319,
                'zone_id' => 621001,
                'name' => '市辖区',
                'parent_id' => 621000,
                'level' => 3,
            ),
            319 => 
            array (
                'id' => 3320,
                'zone_id' => 621002,
                'name' => '西峰区',
                'parent_id' => 621000,
                'level' => 3,
            ),
            320 => 
            array (
                'id' => 3321,
                'zone_id' => 621021,
                'name' => '庆城县',
                'parent_id' => 621000,
                'level' => 3,
            ),
            321 => 
            array (
                'id' => 3322,
                'zone_id' => 621022,
                'name' => '环　县',
                'parent_id' => 621000,
                'level' => 3,
            ),
            322 => 
            array (
                'id' => 3323,
                'zone_id' => 621023,
                'name' => '华池县',
                'parent_id' => 621000,
                'level' => 3,
            ),
            323 => 
            array (
                'id' => 3324,
                'zone_id' => 621024,
                'name' => '合水县',
                'parent_id' => 621000,
                'level' => 3,
            ),
            324 => 
            array (
                'id' => 3325,
                'zone_id' => 621025,
                'name' => '正宁县',
                'parent_id' => 621000,
                'level' => 3,
            ),
            325 => 
            array (
                'id' => 3326,
                'zone_id' => 621026,
                'name' => '宁　县',
                'parent_id' => 621000,
                'level' => 3,
            ),
            326 => 
            array (
                'id' => 3327,
                'zone_id' => 621027,
                'name' => '镇原县',
                'parent_id' => 621000,
                'level' => 3,
            ),
            327 => 
            array (
                'id' => 3328,
                'zone_id' => 621101,
                'name' => '市辖区',
                'parent_id' => 621100,
                'level' => 3,
            ),
            328 => 
            array (
                'id' => 3329,
                'zone_id' => 621102,
                'name' => '安定区',
                'parent_id' => 621100,
                'level' => 3,
            ),
            329 => 
            array (
                'id' => 3330,
                'zone_id' => 621121,
                'name' => '通渭县',
                'parent_id' => 621100,
                'level' => 3,
            ),
            330 => 
            array (
                'id' => 3331,
                'zone_id' => 621122,
                'name' => '陇西县',
                'parent_id' => 621100,
                'level' => 3,
            ),
            331 => 
            array (
                'id' => 3332,
                'zone_id' => 621123,
                'name' => '渭源县',
                'parent_id' => 621100,
                'level' => 3,
            ),
            332 => 
            array (
                'id' => 3333,
                'zone_id' => 621124,
                'name' => '临洮县',
                'parent_id' => 621100,
                'level' => 3,
            ),
            333 => 
            array (
                'id' => 3334,
                'zone_id' => 621125,
                'name' => '漳　县',
                'parent_id' => 621100,
                'level' => 3,
            ),
            334 => 
            array (
                'id' => 3335,
                'zone_id' => 621126,
                'name' => '岷　县',
                'parent_id' => 621100,
                'level' => 3,
            ),
            335 => 
            array (
                'id' => 3336,
                'zone_id' => 621201,
                'name' => '市辖区',
                'parent_id' => 621200,
                'level' => 3,
            ),
            336 => 
            array (
                'id' => 3337,
                'zone_id' => 621202,
                'name' => '武都区',
                'parent_id' => 621200,
                'level' => 3,
            ),
            337 => 
            array (
                'id' => 3338,
                'zone_id' => 621221,
                'name' => '成　县',
                'parent_id' => 621200,
                'level' => 3,
            ),
            338 => 
            array (
                'id' => 3339,
                'zone_id' => 621222,
                'name' => '文　县',
                'parent_id' => 621200,
                'level' => 3,
            ),
            339 => 
            array (
                'id' => 3340,
                'zone_id' => 621223,
                'name' => '宕昌县',
                'parent_id' => 621200,
                'level' => 3,
            ),
            340 => 
            array (
                'id' => 3341,
                'zone_id' => 621224,
                'name' => '康　县',
                'parent_id' => 621200,
                'level' => 3,
            ),
            341 => 
            array (
                'id' => 3342,
                'zone_id' => 621225,
                'name' => '西和县',
                'parent_id' => 621200,
                'level' => 3,
            ),
            342 => 
            array (
                'id' => 3343,
                'zone_id' => 621226,
                'name' => '礼　县',
                'parent_id' => 621200,
                'level' => 3,
            ),
            343 => 
            array (
                'id' => 3344,
                'zone_id' => 621227,
                'name' => '徽　县',
                'parent_id' => 621200,
                'level' => 3,
            ),
            344 => 
            array (
                'id' => 3345,
                'zone_id' => 621228,
                'name' => '两当县',
                'parent_id' => 621200,
                'level' => 3,
            ),
            345 => 
            array (
                'id' => 3346,
                'zone_id' => 622901,
                'name' => '临夏市',
                'parent_id' => 622900,
                'level' => 3,
            ),
            346 => 
            array (
                'id' => 3347,
                'zone_id' => 622921,
                'name' => '临夏县',
                'parent_id' => 622900,
                'level' => 3,
            ),
            347 => 
            array (
                'id' => 3348,
                'zone_id' => 622922,
                'name' => '康乐县',
                'parent_id' => 622900,
                'level' => 3,
            ),
            348 => 
            array (
                'id' => 3349,
                'zone_id' => 622923,
                'name' => '永靖县',
                'parent_id' => 622900,
                'level' => 3,
            ),
            349 => 
            array (
                'id' => 3350,
                'zone_id' => 622924,
                'name' => '广河县',
                'parent_id' => 622900,
                'level' => 3,
            ),
            350 => 
            array (
                'id' => 3351,
                'zone_id' => 622925,
                'name' => '和政县',
                'parent_id' => 622900,
                'level' => 3,
            ),
            351 => 
            array (
                'id' => 3352,
                'zone_id' => 622926,
                'name' => '东乡族自治县',
                'parent_id' => 622900,
                'level' => 3,
            ),
            352 => 
            array (
                'id' => 3353,
                'zone_id' => 622927,
                'name' => '积石山保安族东乡族撒拉族自治县',
                'parent_id' => 622900,
                'level' => 3,
            ),
            353 => 
            array (
                'id' => 3354,
                'zone_id' => 623001,
                'name' => '合作市',
                'parent_id' => 623000,
                'level' => 3,
            ),
            354 => 
            array (
                'id' => 3355,
                'zone_id' => 623021,
                'name' => '临潭县',
                'parent_id' => 623000,
                'level' => 3,
            ),
            355 => 
            array (
                'id' => 3356,
                'zone_id' => 623022,
                'name' => '卓尼县',
                'parent_id' => 623000,
                'level' => 3,
            ),
            356 => 
            array (
                'id' => 3357,
                'zone_id' => 623023,
                'name' => '舟曲县',
                'parent_id' => 623000,
                'level' => 3,
            ),
            357 => 
            array (
                'id' => 3358,
                'zone_id' => 623024,
                'name' => '迭部县',
                'parent_id' => 623000,
                'level' => 3,
            ),
            358 => 
            array (
                'id' => 3359,
                'zone_id' => 623025,
                'name' => '玛曲县',
                'parent_id' => 623000,
                'level' => 3,
            ),
            359 => 
            array (
                'id' => 3360,
                'zone_id' => 623026,
                'name' => '碌曲县',
                'parent_id' => 623000,
                'level' => 3,
            ),
            360 => 
            array (
                'id' => 3361,
                'zone_id' => 623027,
                'name' => '夏河县',
                'parent_id' => 623000,
                'level' => 3,
            ),
            361 => 
            array (
                'id' => 3362,
                'zone_id' => 630101,
                'name' => '市辖区',
                'parent_id' => 630100,
                'level' => 3,
            ),
            362 => 
            array (
                'id' => 3363,
                'zone_id' => 630102,
                'name' => '城东区',
                'parent_id' => 630100,
                'level' => 3,
            ),
            363 => 
            array (
                'id' => 3364,
                'zone_id' => 630103,
                'name' => '城中区',
                'parent_id' => 630100,
                'level' => 3,
            ),
            364 => 
            array (
                'id' => 3365,
                'zone_id' => 630104,
                'name' => '城西区',
                'parent_id' => 630100,
                'level' => 3,
            ),
            365 => 
            array (
                'id' => 3366,
                'zone_id' => 630105,
                'name' => '城北区',
                'parent_id' => 630100,
                'level' => 3,
            ),
            366 => 
            array (
                'id' => 3367,
                'zone_id' => 630121,
                'name' => '大通回族土族自治县',
                'parent_id' => 630100,
                'level' => 3,
            ),
            367 => 
            array (
                'id' => 3368,
                'zone_id' => 630122,
                'name' => '湟中县',
                'parent_id' => 630100,
                'level' => 3,
            ),
            368 => 
            array (
                'id' => 3369,
                'zone_id' => 630123,
                'name' => '湟源县',
                'parent_id' => 630100,
                'level' => 3,
            ),
            369 => 
            array (
                'id' => 3370,
                'zone_id' => 632121,
                'name' => '平安县',
                'parent_id' => 632100,
                'level' => 3,
            ),
            370 => 
            array (
                'id' => 3371,
                'zone_id' => 632122,
                'name' => '民和回族土族自治县',
                'parent_id' => 632100,
                'level' => 3,
            ),
            371 => 
            array (
                'id' => 3372,
                'zone_id' => 632123,
                'name' => '乐都县',
                'parent_id' => 632100,
                'level' => 3,
            ),
            372 => 
            array (
                'id' => 3373,
                'zone_id' => 632126,
                'name' => '互助土族自治县',
                'parent_id' => 632100,
                'level' => 3,
            ),
            373 => 
            array (
                'id' => 3374,
                'zone_id' => 632127,
                'name' => '化隆回族自治县',
                'parent_id' => 632100,
                'level' => 3,
            ),
            374 => 
            array (
                'id' => 3375,
                'zone_id' => 632128,
                'name' => '循化撒拉族自治县',
                'parent_id' => 632100,
                'level' => 3,
            ),
            375 => 
            array (
                'id' => 3376,
                'zone_id' => 632221,
                'name' => '门源回族自治县',
                'parent_id' => 632200,
                'level' => 3,
            ),
            376 => 
            array (
                'id' => 3377,
                'zone_id' => 632222,
                'name' => '祁连县',
                'parent_id' => 632200,
                'level' => 3,
            ),
            377 => 
            array (
                'id' => 3378,
                'zone_id' => 632223,
                'name' => '海晏县',
                'parent_id' => 632200,
                'level' => 3,
            ),
            378 => 
            array (
                'id' => 3379,
                'zone_id' => 632224,
                'name' => '刚察县',
                'parent_id' => 632200,
                'level' => 3,
            ),
            379 => 
            array (
                'id' => 3380,
                'zone_id' => 632321,
                'name' => '同仁县',
                'parent_id' => 632300,
                'level' => 3,
            ),
            380 => 
            array (
                'id' => 3381,
                'zone_id' => 632322,
                'name' => '尖扎县',
                'parent_id' => 632300,
                'level' => 3,
            ),
            381 => 
            array (
                'id' => 3382,
                'zone_id' => 632323,
                'name' => '泽库县',
                'parent_id' => 632300,
                'level' => 3,
            ),
            382 => 
            array (
                'id' => 3383,
                'zone_id' => 632324,
                'name' => '河南蒙古族自治县',
                'parent_id' => 632300,
                'level' => 3,
            ),
            383 => 
            array (
                'id' => 3384,
                'zone_id' => 632521,
                'name' => '共和县',
                'parent_id' => 632500,
                'level' => 3,
            ),
            384 => 
            array (
                'id' => 3385,
                'zone_id' => 632522,
                'name' => '同德县',
                'parent_id' => 632500,
                'level' => 3,
            ),
            385 => 
            array (
                'id' => 3386,
                'zone_id' => 632523,
                'name' => '贵德县',
                'parent_id' => 632500,
                'level' => 3,
            ),
            386 => 
            array (
                'id' => 3387,
                'zone_id' => 632524,
                'name' => '兴海县',
                'parent_id' => 632500,
                'level' => 3,
            ),
            387 => 
            array (
                'id' => 3388,
                'zone_id' => 632525,
                'name' => '贵南县',
                'parent_id' => 632500,
                'level' => 3,
            ),
            388 => 
            array (
                'id' => 3389,
                'zone_id' => 632621,
                'name' => '玛沁县',
                'parent_id' => 632600,
                'level' => 3,
            ),
            389 => 
            array (
                'id' => 3390,
                'zone_id' => 632622,
                'name' => '班玛县',
                'parent_id' => 632600,
                'level' => 3,
            ),
            390 => 
            array (
                'id' => 3391,
                'zone_id' => 632623,
                'name' => '甘德县',
                'parent_id' => 632600,
                'level' => 3,
            ),
            391 => 
            array (
                'id' => 3392,
                'zone_id' => 632624,
                'name' => '达日县',
                'parent_id' => 632600,
                'level' => 3,
            ),
            392 => 
            array (
                'id' => 3393,
                'zone_id' => 632625,
                'name' => '久治县',
                'parent_id' => 632600,
                'level' => 3,
            ),
            393 => 
            array (
                'id' => 3394,
                'zone_id' => 632626,
                'name' => '玛多县',
                'parent_id' => 632600,
                'level' => 3,
            ),
            394 => 
            array (
                'id' => 3395,
                'zone_id' => 632721,
                'name' => '玉树县',
                'parent_id' => 632700,
                'level' => 3,
            ),
            395 => 
            array (
                'id' => 3396,
                'zone_id' => 632722,
                'name' => '杂多县',
                'parent_id' => 632700,
                'level' => 3,
            ),
            396 => 
            array (
                'id' => 3397,
                'zone_id' => 632723,
                'name' => '称多县',
                'parent_id' => 632700,
                'level' => 3,
            ),
            397 => 
            array (
                'id' => 3398,
                'zone_id' => 632724,
                'name' => '治多县',
                'parent_id' => 632700,
                'level' => 3,
            ),
            398 => 
            array (
                'id' => 3399,
                'zone_id' => 632725,
                'name' => '囊谦县',
                'parent_id' => 632700,
                'level' => 3,
            ),
            399 => 
            array (
                'id' => 3400,
                'zone_id' => 632726,
                'name' => '曲麻莱县',
                'parent_id' => 632700,
                'level' => 3,
            ),
            400 => 
            array (
                'id' => 3401,
                'zone_id' => 632801,
                'name' => '格尔木市',
                'parent_id' => 632800,
                'level' => 3,
            ),
            401 => 
            array (
                'id' => 3402,
                'zone_id' => 632802,
                'name' => '德令哈市',
                'parent_id' => 632800,
                'level' => 3,
            ),
            402 => 
            array (
                'id' => 3403,
                'zone_id' => 632821,
                'name' => '乌兰县',
                'parent_id' => 632800,
                'level' => 3,
            ),
            403 => 
            array (
                'id' => 3404,
                'zone_id' => 632822,
                'name' => '都兰县',
                'parent_id' => 632800,
                'level' => 3,
            ),
            404 => 
            array (
                'id' => 3405,
                'zone_id' => 632823,
                'name' => '天峻县',
                'parent_id' => 632800,
                'level' => 3,
            ),
            405 => 
            array (
                'id' => 3406,
                'zone_id' => 640101,
                'name' => '市辖区',
                'parent_id' => 640100,
                'level' => 3,
            ),
            406 => 
            array (
                'id' => 3407,
                'zone_id' => 640104,
                'name' => '兴庆区',
                'parent_id' => 640100,
                'level' => 3,
            ),
            407 => 
            array (
                'id' => 3408,
                'zone_id' => 640105,
                'name' => '西夏区',
                'parent_id' => 640100,
                'level' => 3,
            ),
            408 => 
            array (
                'id' => 3409,
                'zone_id' => 640106,
                'name' => '金凤区',
                'parent_id' => 640100,
                'level' => 3,
            ),
            409 => 
            array (
                'id' => 3410,
                'zone_id' => 640121,
                'name' => '永宁县',
                'parent_id' => 640100,
                'level' => 3,
            ),
            410 => 
            array (
                'id' => 3411,
                'zone_id' => 640122,
                'name' => '贺兰县',
                'parent_id' => 640100,
                'level' => 3,
            ),
            411 => 
            array (
                'id' => 3412,
                'zone_id' => 640181,
                'name' => '灵武市',
                'parent_id' => 640100,
                'level' => 3,
            ),
            412 => 
            array (
                'id' => 3413,
                'zone_id' => 640201,
                'name' => '市辖区',
                'parent_id' => 640200,
                'level' => 3,
            ),
            413 => 
            array (
                'id' => 3414,
                'zone_id' => 640202,
                'name' => '大武口区',
                'parent_id' => 640200,
                'level' => 3,
            ),
            414 => 
            array (
                'id' => 3415,
                'zone_id' => 640205,
                'name' => '惠农区',
                'parent_id' => 640200,
                'level' => 3,
            ),
            415 => 
            array (
                'id' => 3416,
                'zone_id' => 640221,
                'name' => '平罗县',
                'parent_id' => 640200,
                'level' => 3,
            ),
            416 => 
            array (
                'id' => 3417,
                'zone_id' => 640301,
                'name' => '市辖区',
                'parent_id' => 640300,
                'level' => 3,
            ),
            417 => 
            array (
                'id' => 3418,
                'zone_id' => 640302,
                'name' => '利通区',
                'parent_id' => 640300,
                'level' => 3,
            ),
            418 => 
            array (
                'id' => 3419,
                'zone_id' => 640323,
                'name' => '盐池县',
                'parent_id' => 640300,
                'level' => 3,
            ),
            419 => 
            array (
                'id' => 3420,
                'zone_id' => 640324,
                'name' => '同心县',
                'parent_id' => 640300,
                'level' => 3,
            ),
            420 => 
            array (
                'id' => 3421,
                'zone_id' => 640381,
                'name' => '青铜峡市',
                'parent_id' => 640300,
                'level' => 3,
            ),
            421 => 
            array (
                'id' => 3422,
                'zone_id' => 640401,
                'name' => '市辖区',
                'parent_id' => 640400,
                'level' => 3,
            ),
            422 => 
            array (
                'id' => 3423,
                'zone_id' => 640402,
                'name' => '原州区',
                'parent_id' => 640400,
                'level' => 3,
            ),
            423 => 
            array (
                'id' => 3424,
                'zone_id' => 640422,
                'name' => '西吉县',
                'parent_id' => 640400,
                'level' => 3,
            ),
            424 => 
            array (
                'id' => 3425,
                'zone_id' => 640423,
                'name' => '隆德县',
                'parent_id' => 640400,
                'level' => 3,
            ),
            425 => 
            array (
                'id' => 3426,
                'zone_id' => 640424,
                'name' => '泾源县',
                'parent_id' => 640400,
                'level' => 3,
            ),
            426 => 
            array (
                'id' => 3427,
                'zone_id' => 640425,
                'name' => '彭阳县',
                'parent_id' => 640400,
                'level' => 3,
            ),
            427 => 
            array (
                'id' => 3428,
                'zone_id' => 640501,
                'name' => '市辖区',
                'parent_id' => 640500,
                'level' => 3,
            ),
            428 => 
            array (
                'id' => 3429,
                'zone_id' => 640502,
                'name' => '沙坡头区',
                'parent_id' => 640500,
                'level' => 3,
            ),
            429 => 
            array (
                'id' => 3430,
                'zone_id' => 640521,
                'name' => '中宁县',
                'parent_id' => 640500,
                'level' => 3,
            ),
            430 => 
            array (
                'id' => 3431,
                'zone_id' => 640522,
                'name' => '海原县',
                'parent_id' => 640500,
                'level' => 3,
            ),
            431 => 
            array (
                'id' => 3432,
                'zone_id' => 650101,
                'name' => '市辖区',
                'parent_id' => 650100,
                'level' => 3,
            ),
            432 => 
            array (
                'id' => 3433,
                'zone_id' => 650102,
                'name' => '天山区',
                'parent_id' => 650100,
                'level' => 3,
            ),
            433 => 
            array (
                'id' => 3434,
                'zone_id' => 650103,
                'name' => '沙依巴克区',
                'parent_id' => 650100,
                'level' => 3,
            ),
            434 => 
            array (
                'id' => 3435,
                'zone_id' => 650104,
                'name' => '新市区',
                'parent_id' => 650100,
                'level' => 3,
            ),
            435 => 
            array (
                'id' => 3436,
                'zone_id' => 650105,
                'name' => '水磨沟区',
                'parent_id' => 650100,
                'level' => 3,
            ),
            436 => 
            array (
                'id' => 3437,
                'zone_id' => 650106,
                'name' => '头屯河区',
                'parent_id' => 650100,
                'level' => 3,
            ),
            437 => 
            array (
                'id' => 3438,
                'zone_id' => 650107,
                'name' => '达坂城区',
                'parent_id' => 650100,
                'level' => 3,
            ),
            438 => 
            array (
                'id' => 3439,
                'zone_id' => 650108,
                'name' => '东山区',
                'parent_id' => 650100,
                'level' => 3,
            ),
            439 => 
            array (
                'id' => 3440,
                'zone_id' => 650121,
                'name' => '乌鲁木齐县',
                'parent_id' => 650100,
                'level' => 3,
            ),
            440 => 
            array (
                'id' => 3441,
                'zone_id' => 650201,
                'name' => '市辖区',
                'parent_id' => 650200,
                'level' => 3,
            ),
            441 => 
            array (
                'id' => 3442,
                'zone_id' => 650202,
                'name' => '独山子区',
                'parent_id' => 650200,
                'level' => 3,
            ),
            442 => 
            array (
                'id' => 3443,
                'zone_id' => 650203,
                'name' => '克拉玛依区',
                'parent_id' => 650200,
                'level' => 3,
            ),
            443 => 
            array (
                'id' => 3444,
                'zone_id' => 650204,
                'name' => '白碱滩区',
                'parent_id' => 650200,
                'level' => 3,
            ),
            444 => 
            array (
                'id' => 3445,
                'zone_id' => 650205,
                'name' => '乌尔禾区',
                'parent_id' => 650200,
                'level' => 3,
            ),
            445 => 
            array (
                'id' => 3446,
                'zone_id' => 652101,
                'name' => '吐鲁番市',
                'parent_id' => 652100,
                'level' => 3,
            ),
            446 => 
            array (
                'id' => 3447,
                'zone_id' => 652122,
                'name' => '鄯善县',
                'parent_id' => 652100,
                'level' => 3,
            ),
            447 => 
            array (
                'id' => 3448,
                'zone_id' => 652123,
                'name' => '托克逊县',
                'parent_id' => 652100,
                'level' => 3,
            ),
            448 => 
            array (
                'id' => 3449,
                'zone_id' => 652201,
                'name' => '哈密市',
                'parent_id' => 652200,
                'level' => 3,
            ),
            449 => 
            array (
                'id' => 3450,
                'zone_id' => 652222,
                'name' => '巴里坤哈萨克自治县',
                'parent_id' => 652200,
                'level' => 3,
            ),
            450 => 
            array (
                'id' => 3451,
                'zone_id' => 652223,
                'name' => '伊吾县',
                'parent_id' => 652200,
                'level' => 3,
            ),
            451 => 
            array (
                'id' => 3452,
                'zone_id' => 652301,
                'name' => '昌吉市',
                'parent_id' => 652300,
                'level' => 3,
            ),
            452 => 
            array (
                'id' => 3453,
                'zone_id' => 652302,
                'name' => '阜康市',
                'parent_id' => 652300,
                'level' => 3,
            ),
            453 => 
            array (
                'id' => 3454,
                'zone_id' => 652303,
                'name' => '米泉市',
                'parent_id' => 652300,
                'level' => 3,
            ),
            454 => 
            array (
                'id' => 3455,
                'zone_id' => 652323,
                'name' => '呼图壁县',
                'parent_id' => 652300,
                'level' => 3,
            ),
            455 => 
            array (
                'id' => 3456,
                'zone_id' => 652324,
                'name' => '玛纳斯县',
                'parent_id' => 652300,
                'level' => 3,
            ),
            456 => 
            array (
                'id' => 3457,
                'zone_id' => 652325,
                'name' => '奇台县',
                'parent_id' => 652300,
                'level' => 3,
            ),
            457 => 
            array (
                'id' => 3458,
                'zone_id' => 652327,
                'name' => '吉木萨尔县',
                'parent_id' => 652300,
                'level' => 3,
            ),
            458 => 
            array (
                'id' => 3459,
                'zone_id' => 652328,
                'name' => '木垒哈萨克自治县',
                'parent_id' => 652300,
                'level' => 3,
            ),
            459 => 
            array (
                'id' => 3460,
                'zone_id' => 652701,
                'name' => '博乐市',
                'parent_id' => 652700,
                'level' => 3,
            ),
            460 => 
            array (
                'id' => 3461,
                'zone_id' => 652722,
                'name' => '精河县',
                'parent_id' => 652700,
                'level' => 3,
            ),
            461 => 
            array (
                'id' => 3462,
                'zone_id' => 652723,
                'name' => '温泉县',
                'parent_id' => 652700,
                'level' => 3,
            ),
            462 => 
            array (
                'id' => 3463,
                'zone_id' => 652801,
                'name' => '库尔勒市',
                'parent_id' => 652800,
                'level' => 3,
            ),
            463 => 
            array (
                'id' => 3464,
                'zone_id' => 652822,
                'name' => '轮台县',
                'parent_id' => 652800,
                'level' => 3,
            ),
            464 => 
            array (
                'id' => 3465,
                'zone_id' => 652823,
                'name' => '尉犁县',
                'parent_id' => 652800,
                'level' => 3,
            ),
            465 => 
            array (
                'id' => 3466,
                'zone_id' => 652824,
                'name' => '若羌县',
                'parent_id' => 652800,
                'level' => 3,
            ),
            466 => 
            array (
                'id' => 3467,
                'zone_id' => 652825,
                'name' => '且末县',
                'parent_id' => 652800,
                'level' => 3,
            ),
            467 => 
            array (
                'id' => 3468,
                'zone_id' => 652826,
                'name' => '焉耆回族自治县',
                'parent_id' => 652800,
                'level' => 3,
            ),
            468 => 
            array (
                'id' => 3469,
                'zone_id' => 652827,
                'name' => '和静县',
                'parent_id' => 652800,
                'level' => 3,
            ),
            469 => 
            array (
                'id' => 3470,
                'zone_id' => 652828,
                'name' => '和硕县',
                'parent_id' => 652800,
                'level' => 3,
            ),
            470 => 
            array (
                'id' => 3471,
                'zone_id' => 652829,
                'name' => '博湖县',
                'parent_id' => 652800,
                'level' => 3,
            ),
            471 => 
            array (
                'id' => 3472,
                'zone_id' => 652901,
                'name' => '阿克苏市',
                'parent_id' => 652900,
                'level' => 3,
            ),
            472 => 
            array (
                'id' => 3473,
                'zone_id' => 652922,
                'name' => '温宿县',
                'parent_id' => 652900,
                'level' => 3,
            ),
            473 => 
            array (
                'id' => 3474,
                'zone_id' => 652923,
                'name' => '库车县',
                'parent_id' => 652900,
                'level' => 3,
            ),
            474 => 
            array (
                'id' => 3475,
                'zone_id' => 652924,
                'name' => '沙雅县',
                'parent_id' => 652900,
                'level' => 3,
            ),
            475 => 
            array (
                'id' => 3476,
                'zone_id' => 652925,
                'name' => '新和县',
                'parent_id' => 652900,
                'level' => 3,
            ),
            476 => 
            array (
                'id' => 3477,
                'zone_id' => 652926,
                'name' => '拜城县',
                'parent_id' => 652900,
                'level' => 3,
            ),
            477 => 
            array (
                'id' => 3478,
                'zone_id' => 652927,
                'name' => '乌什县',
                'parent_id' => 652900,
                'level' => 3,
            ),
            478 => 
            array (
                'id' => 3479,
                'zone_id' => 652928,
                'name' => '阿瓦提县',
                'parent_id' => 652900,
                'level' => 3,
            ),
            479 => 
            array (
                'id' => 3480,
                'zone_id' => 652929,
                'name' => '柯坪县',
                'parent_id' => 652900,
                'level' => 3,
            ),
            480 => 
            array (
                'id' => 3481,
                'zone_id' => 653001,
                'name' => '阿图什市',
                'parent_id' => 653000,
                'level' => 3,
            ),
            481 => 
            array (
                'id' => 3482,
                'zone_id' => 653022,
                'name' => '阿克陶县',
                'parent_id' => 653000,
                'level' => 3,
            ),
            482 => 
            array (
                'id' => 3483,
                'zone_id' => 653023,
                'name' => '阿合奇县',
                'parent_id' => 653000,
                'level' => 3,
            ),
            483 => 
            array (
                'id' => 3484,
                'zone_id' => 653024,
                'name' => '乌恰县',
                'parent_id' => 653000,
                'level' => 3,
            ),
            484 => 
            array (
                'id' => 3485,
                'zone_id' => 653101,
                'name' => '喀什市',
                'parent_id' => 653100,
                'level' => 3,
            ),
            485 => 
            array (
                'id' => 3486,
                'zone_id' => 653121,
                'name' => '疏附县',
                'parent_id' => 653100,
                'level' => 3,
            ),
            486 => 
            array (
                'id' => 3487,
                'zone_id' => 653122,
                'name' => '疏勒县',
                'parent_id' => 653100,
                'level' => 3,
            ),
            487 => 
            array (
                'id' => 3488,
                'zone_id' => 653123,
                'name' => '英吉沙县',
                'parent_id' => 653100,
                'level' => 3,
            ),
            488 => 
            array (
                'id' => 3489,
                'zone_id' => 653124,
                'name' => '泽普县',
                'parent_id' => 653100,
                'level' => 3,
            ),
            489 => 
            array (
                'id' => 3490,
                'zone_id' => 653125,
                'name' => '莎车县',
                'parent_id' => 653100,
                'level' => 3,
            ),
            490 => 
            array (
                'id' => 3491,
                'zone_id' => 653126,
                'name' => '叶城县',
                'parent_id' => 653100,
                'level' => 3,
            ),
            491 => 
            array (
                'id' => 3492,
                'zone_id' => 653127,
                'name' => '麦盖提县',
                'parent_id' => 653100,
                'level' => 3,
            ),
            492 => 
            array (
                'id' => 3493,
                'zone_id' => 653128,
                'name' => '岳普湖县',
                'parent_id' => 653100,
                'level' => 3,
            ),
            493 => 
            array (
                'id' => 3494,
                'zone_id' => 653129,
                'name' => '伽师县',
                'parent_id' => 653100,
                'level' => 3,
            ),
            494 => 
            array (
                'id' => 3495,
                'zone_id' => 653130,
                'name' => '巴楚县',
                'parent_id' => 653100,
                'level' => 3,
            ),
            495 => 
            array (
                'id' => 3496,
                'zone_id' => 653131,
                'name' => '塔什库尔干塔吉克自治县',
                'parent_id' => 653100,
                'level' => 3,
            ),
            496 => 
            array (
                'id' => 3497,
                'zone_id' => 653201,
                'name' => '和田市',
                'parent_id' => 653200,
                'level' => 3,
            ),
            497 => 
            array (
                'id' => 3498,
                'zone_id' => 653221,
                'name' => '和田县',
                'parent_id' => 653200,
                'level' => 3,
            ),
            498 => 
            array (
                'id' => 3499,
                'zone_id' => 653222,
                'name' => '墨玉县',
                'parent_id' => 653200,
                'level' => 3,
            ),
            499 => 
            array (
                'id' => 3500,
                'zone_id' => 653223,
                'name' => '皮山县',
                'parent_id' => 653200,
                'level' => 3,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 3501,
                'zone_id' => 653224,
                'name' => '洛浦县',
                'parent_id' => 653200,
                'level' => 3,
            ),
            1 => 
            array (
                'id' => 3502,
                'zone_id' => 653225,
                'name' => '策勒县',
                'parent_id' => 653200,
                'level' => 3,
            ),
            2 => 
            array (
                'id' => 3503,
                'zone_id' => 653226,
                'name' => '于田县',
                'parent_id' => 653200,
                'level' => 3,
            ),
            3 => 
            array (
                'id' => 3504,
                'zone_id' => 653227,
                'name' => '民丰县',
                'parent_id' => 653200,
                'level' => 3,
            ),
            4 => 
            array (
                'id' => 3505,
                'zone_id' => 654002,
                'name' => '伊宁市',
                'parent_id' => 654000,
                'level' => 3,
            ),
            5 => 
            array (
                'id' => 3506,
                'zone_id' => 654003,
                'name' => '奎屯市',
                'parent_id' => 654000,
                'level' => 3,
            ),
            6 => 
            array (
                'id' => 3507,
                'zone_id' => 654021,
                'name' => '伊宁县',
                'parent_id' => 654000,
                'level' => 3,
            ),
            7 => 
            array (
                'id' => 3508,
                'zone_id' => 654022,
                'name' => '察布查尔锡伯自治县',
                'parent_id' => 654000,
                'level' => 3,
            ),
            8 => 
            array (
                'id' => 3509,
                'zone_id' => 654023,
                'name' => '霍城县',
                'parent_id' => 654000,
                'level' => 3,
            ),
            9 => 
            array (
                'id' => 3510,
                'zone_id' => 654024,
                'name' => '巩留县',
                'parent_id' => 654000,
                'level' => 3,
            ),
            10 => 
            array (
                'id' => 3511,
                'zone_id' => 654025,
                'name' => '新源县',
                'parent_id' => 654000,
                'level' => 3,
            ),
            11 => 
            array (
                'id' => 3512,
                'zone_id' => 654026,
                'name' => '昭苏县',
                'parent_id' => 654000,
                'level' => 3,
            ),
            12 => 
            array (
                'id' => 3513,
                'zone_id' => 654027,
                'name' => '特克斯县',
                'parent_id' => 654000,
                'level' => 3,
            ),
            13 => 
            array (
                'id' => 3514,
                'zone_id' => 654028,
                'name' => '尼勒克县',
                'parent_id' => 654000,
                'level' => 3,
            ),
            14 => 
            array (
                'id' => 3515,
                'zone_id' => 654201,
                'name' => '塔城市',
                'parent_id' => 654200,
                'level' => 3,
            ),
            15 => 
            array (
                'id' => 3516,
                'zone_id' => 654202,
                'name' => '乌苏市',
                'parent_id' => 654200,
                'level' => 3,
            ),
            16 => 
            array (
                'id' => 3517,
                'zone_id' => 654221,
                'name' => '额敏县',
                'parent_id' => 654200,
                'level' => 3,
            ),
            17 => 
            array (
                'id' => 3518,
                'zone_id' => 654223,
                'name' => '沙湾县',
                'parent_id' => 654200,
                'level' => 3,
            ),
            18 => 
            array (
                'id' => 3519,
                'zone_id' => 654224,
                'name' => '托里县',
                'parent_id' => 654200,
                'level' => 3,
            ),
            19 => 
            array (
                'id' => 3520,
                'zone_id' => 654225,
                'name' => '裕民县',
                'parent_id' => 654200,
                'level' => 3,
            ),
            20 => 
            array (
                'id' => 3521,
                'zone_id' => 654226,
                'name' => '和布克赛尔蒙古自治县',
                'parent_id' => 654200,
                'level' => 3,
            ),
            21 => 
            array (
                'id' => 3522,
                'zone_id' => 654301,
                'name' => '阿勒泰市',
                'parent_id' => 654300,
                'level' => 3,
            ),
            22 => 
            array (
                'id' => 3523,
                'zone_id' => 654321,
                'name' => '布尔津县',
                'parent_id' => 654300,
                'level' => 3,
            ),
            23 => 
            array (
                'id' => 3524,
                'zone_id' => 654322,
                'name' => '富蕴县',
                'parent_id' => 654300,
                'level' => 3,
            ),
            24 => 
            array (
                'id' => 3525,
                'zone_id' => 654323,
                'name' => '福海县',
                'parent_id' => 654300,
                'level' => 3,
            ),
            25 => 
            array (
                'id' => 3526,
                'zone_id' => 654324,
                'name' => '哈巴河县',
                'parent_id' => 654300,
                'level' => 3,
            ),
            26 => 
            array (
                'id' => 3527,
                'zone_id' => 654325,
                'name' => '青河县',
                'parent_id' => 654300,
                'level' => 3,
            ),
            27 => 
            array (
                'id' => 3528,
                'zone_id' => 654326,
                'name' => '吉木乃县',
                'parent_id' => 654300,
                'level' => 3,
            ),
            28 => 
            array (
                'id' => 3529,
                'zone_id' => 659001,
                'name' => '石河子市',
                'parent_id' => 659000,
                'level' => 3,
            ),
            29 => 
            array (
                'id' => 3530,
                'zone_id' => 659002,
                'name' => '阿拉尔市',
                'parent_id' => 659000,
                'level' => 3,
            ),
            30 => 
            array (
                'id' => 3531,
                'zone_id' => 659003,
                'name' => '图木舒克市',
                'parent_id' => 659000,
                'level' => 3,
            ),
            31 => 
            array (
                'id' => 3532,
                'zone_id' => 659004,
                'name' => '五家渠市',
                'parent_id' => 659000,
                'level' => 3,
            ),
            32 => 
            array (
                'id' => 3533,
                'zone_id' => 710101,
                'name' => '中正区',
                'parent_id' => 710100,
                'level' => 3,
            ),
            33 => 
            array (
                'id' => 3534,
                'zone_id' => 710102,
                'name' => '大同区',
                'parent_id' => 710100,
                'level' => 3,
            ),
            34 => 
            array (
                'id' => 3535,
                'zone_id' => 710103,
                'name' => '中山区',
                'parent_id' => 710100,
                'level' => 3,
            ),
            35 => 
            array (
                'id' => 3536,
                'zone_id' => 710104,
                'name' => '松山区',
                'parent_id' => 710100,
                'level' => 3,
            ),
            36 => 
            array (
                'id' => 3537,
                'zone_id' => 710105,
                'name' => '大安区',
                'parent_id' => 710100,
                'level' => 3,
            ),
            37 => 
            array (
                'id' => 3538,
                'zone_id' => 710106,
                'name' => '万华区',
                'parent_id' => 710100,
                'level' => 3,
            ),
            38 => 
            array (
                'id' => 3539,
                'zone_id' => 710107,
                'name' => '信义区',
                'parent_id' => 710100,
                'level' => 3,
            ),
            39 => 
            array (
                'id' => 3540,
                'zone_id' => 710108,
                'name' => '士林区',
                'parent_id' => 710100,
                'level' => 3,
            ),
            40 => 
            array (
                'id' => 3541,
                'zone_id' => 710109,
                'name' => '北投区',
                'parent_id' => 710100,
                'level' => 3,
            ),
            41 => 
            array (
                'id' => 3542,
                'zone_id' => 710110,
                'name' => '内湖区',
                'parent_id' => 710100,
                'level' => 3,
            ),
            42 => 
            array (
                'id' => 3543,
                'zone_id' => 710111,
                'name' => '南港区',
                'parent_id' => 710100,
                'level' => 3,
            ),
            43 => 
            array (
                'id' => 3544,
                'zone_id' => 710112,
                'name' => '文山区',
                'parent_id' => 710100,
                'level' => 3,
            ),
            44 => 
            array (
                'id' => 3545,
                'zone_id' => 710201,
                'name' => '新兴区',
                'parent_id' => 710200,
                'level' => 3,
            ),
            45 => 
            array (
                'id' => 3546,
                'zone_id' => 710202,
                'name' => '前金区',
                'parent_id' => 710200,
                'level' => 3,
            ),
            46 => 
            array (
                'id' => 3547,
                'zone_id' => 710203,
                'name' => '芩雅区',
                'parent_id' => 710200,
                'level' => 3,
            ),
            47 => 
            array (
                'id' => 3548,
                'zone_id' => 710204,
                'name' => '盐埕区',
                'parent_id' => 710200,
                'level' => 3,
            ),
            48 => 
            array (
                'id' => 3549,
                'zone_id' => 710205,
                'name' => '鼓山区',
                'parent_id' => 710200,
                'level' => 3,
            ),
            49 => 
            array (
                'id' => 3550,
                'zone_id' => 710206,
                'name' => '旗津区',
                'parent_id' => 710200,
                'level' => 3,
            ),
            50 => 
            array (
                'id' => 3551,
                'zone_id' => 710207,
                'name' => '前镇区',
                'parent_id' => 710200,
                'level' => 3,
            ),
            51 => 
            array (
                'id' => 3552,
                'zone_id' => 710208,
                'name' => '三民区',
                'parent_id' => 710200,
                'level' => 3,
            ),
            52 => 
            array (
                'id' => 3553,
                'zone_id' => 710209,
                'name' => '左营区',
                'parent_id' => 710200,
                'level' => 3,
            ),
            53 => 
            array (
                'id' => 3554,
                'zone_id' => 710210,
                'name' => '楠梓区',
                'parent_id' => 710200,
                'level' => 3,
            ),
            54 => 
            array (
                'id' => 3555,
                'zone_id' => 710211,
                'name' => '小港区',
                'parent_id' => 710200,
                'level' => 3,
            ),
            55 => 
            array (
                'id' => 3556,
                'zone_id' => 710301,
                'name' => '仁爱区',
                'parent_id' => 710300,
                'level' => 3,
            ),
            56 => 
            array (
                'id' => 3557,
                'zone_id' => 710302,
                'name' => '信义区',
                'parent_id' => 710300,
                'level' => 3,
            ),
            57 => 
            array (
                'id' => 3558,
                'zone_id' => 710303,
                'name' => '中正区',
                'parent_id' => 710300,
                'level' => 3,
            ),
            58 => 
            array (
                'id' => 3559,
                'zone_id' => 710304,
                'name' => '中山区',
                'parent_id' => 710300,
                'level' => 3,
            ),
            59 => 
            array (
                'id' => 3560,
                'zone_id' => 710305,
                'name' => '安乐区',
                'parent_id' => 710300,
                'level' => 3,
            ),
            60 => 
            array (
                'id' => 3561,
                'zone_id' => 710306,
                'name' => '暖暖区',
                'parent_id' => 710300,
                'level' => 3,
            ),
            61 => 
            array (
                'id' => 3562,
                'zone_id' => 710307,
                'name' => '七堵区',
                'parent_id' => 710300,
                'level' => 3,
            ),
            62 => 
            array (
                'id' => 3563,
                'zone_id' => 710401,
                'name' => '中区',
                'parent_id' => 710400,
                'level' => 3,
            ),
            63 => 
            array (
                'id' => 3564,
                'zone_id' => 710402,
                'name' => '东区',
                'parent_id' => 710400,
                'level' => 3,
            ),
            64 => 
            array (
                'id' => 3565,
                'zone_id' => 710403,
                'name' => '南区',
                'parent_id' => 710400,
                'level' => 3,
            ),
            65 => 
            array (
                'id' => 3566,
                'zone_id' => 710404,
                'name' => '西区',
                'parent_id' => 710400,
                'level' => 3,
            ),
            66 => 
            array (
                'id' => 3567,
                'zone_id' => 710405,
                'name' => '北区',
                'parent_id' => 710400,
                'level' => 3,
            ),
            67 => 
            array (
                'id' => 3568,
                'zone_id' => 710406,
                'name' => '北屯区',
                'parent_id' => 710400,
                'level' => 3,
            ),
            68 => 
            array (
                'id' => 3569,
                'zone_id' => 710407,
                'name' => '西屯区',
                'parent_id' => 710400,
                'level' => 3,
            ),
            69 => 
            array (
                'id' => 3570,
                'zone_id' => 710408,
                'name' => '南屯区',
                'parent_id' => 710400,
                'level' => 3,
            ),
            70 => 
            array (
                'id' => 3571,
                'zone_id' => 710501,
                'name' => '中西区',
                'parent_id' => 710500,
                'level' => 3,
            ),
            71 => 
            array (
                'id' => 3572,
                'zone_id' => 710502,
                'name' => '东区',
                'parent_id' => 710500,
                'level' => 3,
            ),
            72 => 
            array (
                'id' => 3573,
                'zone_id' => 710503,
                'name' => '南区',
                'parent_id' => 710500,
                'level' => 3,
            ),
            73 => 
            array (
                'id' => 3574,
                'zone_id' => 710504,
                'name' => '北区',
                'parent_id' => 710500,
                'level' => 3,
            ),
            74 => 
            array (
                'id' => 3575,
                'zone_id' => 710505,
                'name' => '安平区',
                'parent_id' => 710500,
                'level' => 3,
            ),
            75 => 
            array (
                'id' => 3576,
                'zone_id' => 710506,
                'name' => '安南区',
                'parent_id' => 710500,
                'level' => 3,
            ),
            76 => 
            array (
                'id' => 3577,
                'zone_id' => 710601,
                'name' => '东区',
                'parent_id' => 710600,
                'level' => 3,
            ),
            77 => 
            array (
                'id' => 3578,
                'zone_id' => 710602,
                'name' => '北区',
                'parent_id' => 710600,
                'level' => 3,
            ),
            78 => 
            array (
                'id' => 3579,
                'zone_id' => 710603,
                'name' => '香山区',
                'parent_id' => 710600,
                'level' => 3,
            ),
            79 => 
            array (
                'id' => 3580,
                'zone_id' => 710701,
                'name' => '东区',
                'parent_id' => 710700,
                'level' => 3,
            ),
            80 => 
            array (
                'id' => 3581,
                'zone_id' => 710702,
                'name' => '西区',
                'parent_id' => 710700,
                'level' => 3,
            ),
            81 => 
            array (
                'id' => 3582,
                'zone_id' => 719001,
                'name' => '台北县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            82 => 
            array (
                'id' => 3583,
                'zone_id' => 719002,
                'name' => '宜兰县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            83 => 
            array (
                'id' => 3584,
                'zone_id' => 719003,
                'name' => '新竹县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            84 => 
            array (
                'id' => 3585,
                'zone_id' => 719004,
                'name' => '桃园县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            85 => 
            array (
                'id' => 3586,
                'zone_id' => 719005,
                'name' => '苗栗县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            86 => 
            array (
                'id' => 3587,
                'zone_id' => 719006,
                'name' => '台中县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            87 => 
            array (
                'id' => 3588,
                'zone_id' => 719007,
                'name' => '彰化县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            88 => 
            array (
                'id' => 3589,
                'zone_id' => 719008,
                'name' => '南投县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            89 => 
            array (
                'id' => 3590,
                'zone_id' => 719009,
                'name' => '嘉义县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            90 => 
            array (
                'id' => 3591,
                'zone_id' => 719010,
                'name' => '云林县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            91 => 
            array (
                'id' => 3592,
                'zone_id' => 719011,
                'name' => '台南县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            92 => 
            array (
                'id' => 3593,
                'zone_id' => 719012,
                'name' => '高雄县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            93 => 
            array (
                'id' => 3594,
                'zone_id' => 719013,
                'name' => '屏东县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            94 => 
            array (
                'id' => 3595,
                'zone_id' => 719014,
                'name' => '台东县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            95 => 
            array (
                'id' => 3596,
                'zone_id' => 719015,
                'name' => '花莲县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            96 => 
            array (
                'id' => 3597,
                'zone_id' => 719016,
                'name' => '澎湖县',
                'parent_id' => 719000,
                'level' => 3,
            ),
            97 => 
            array (
                'id' => 3598,
                'zone_id' => 810101,
                'name' => '中西区',
                'parent_id' => 810100,
                'level' => 3,
            ),
            98 => 
            array (
                'id' => 3599,
                'zone_id' => 810102,
                'name' => '湾仔区',
                'parent_id' => 810100,
                'level' => 3,
            ),
            99 => 
            array (
                'id' => 3600,
                'zone_id' => 810103,
                'name' => '东区',
                'parent_id' => 810100,
                'level' => 3,
            ),
            100 => 
            array (
                'id' => 3601,
                'zone_id' => 810104,
                'name' => '南区',
                'parent_id' => 810100,
                'level' => 3,
            ),
            101 => 
            array (
                'id' => 3602,
                'zone_id' => 810201,
                'name' => '油尖旺区',
                'parent_id' => 810200,
                'level' => 3,
            ),
            102 => 
            array (
                'id' => 3603,
                'zone_id' => 810202,
                'name' => '深水埗区',
                'parent_id' => 810200,
                'level' => 3,
            ),
            103 => 
            array (
                'id' => 3604,
                'zone_id' => 810203,
                'name' => '九龙城区',
                'parent_id' => 810200,
                'level' => 3,
            ),
            104 => 
            array (
                'id' => 3605,
                'zone_id' => 810204,
                'name' => '黄大仙区',
                'parent_id' => 810200,
                'level' => 3,
            ),
            105 => 
            array (
                'id' => 3606,
                'zone_id' => 810205,
                'name' => '观塘区',
                'parent_id' => 810200,
                'level' => 3,
            ),
            106 => 
            array (
                'id' => 3607,
                'zone_id' => 810301,
                'name' => '北区',
                'parent_id' => 810300,
                'level' => 3,
            ),
            107 => 
            array (
                'id' => 3608,
                'zone_id' => 810302,
                'name' => '大埔区',
                'parent_id' => 810300,
                'level' => 3,
            ),
            108 => 
            array (
                'id' => 3609,
                'zone_id' => 810303,
                'name' => '沙田区',
                'parent_id' => 810300,
                'level' => 3,
            ),
            109 => 
            array (
                'id' => 3610,
                'zone_id' => 810304,
                'name' => '西贡区',
                'parent_id' => 810300,
                'level' => 3,
            ),
            110 => 
            array (
                'id' => 3611,
                'zone_id' => 810305,
                'name' => '荃湾区',
                'parent_id' => 810300,
                'level' => 3,
            ),
            111 => 
            array (
                'id' => 3612,
                'zone_id' => 810306,
                'name' => '屯门区',
                'parent_id' => 810300,
                'level' => 3,
            ),
            112 => 
            array (
                'id' => 3613,
                'zone_id' => 810307,
                'name' => '元朗区',
                'parent_id' => 810300,
                'level' => 3,
            ),
            113 => 
            array (
                'id' => 3614,
                'zone_id' => 810308,
                'name' => '葵青区',
                'parent_id' => 810300,
                'level' => 3,
            ),
            114 => 
            array (
                'id' => 3615,
                'zone_id' => 810309,
                'name' => '离岛区',
                'parent_id' => 810300,
                'level' => 3,
            ),
            115 => 
            array (
                'id' => 3616,
                'zone_id' => 820101,
                'name' => '花地玛堂区',
                'parent_id' => 820100,
                'level' => 3,
            ),
            116 => 
            array (
                'id' => 3617,
                'zone_id' => 820102,
                'name' => '圣安多尼堂区',
                'parent_id' => 820100,
                'level' => 3,
            ),
            117 => 
            array (
                'id' => 3618,
                'zone_id' => 820103,
                'name' => '大堂区',
                'parent_id' => 820100,
                'level' => 3,
            ),
            118 => 
            array (
                'id' => 3619,
                'zone_id' => 820104,
                'name' => '望德堂区',
                'parent_id' => 820100,
                'level' => 3,
            ),
            119 => 
            array (
                'id' => 3620,
                'zone_id' => 820105,
                'name' => '风顺堂区',
                'parent_id' => 820100,
                'level' => 3,
            ),
            120 => 
            array (
                'id' => 3621,
                'zone_id' => 820201,
                'name' => '嘉模堂区',
                'parent_id' => 820200,
                'level' => 3,
            ),
            121 => 
            array (
                'id' => 3622,
                'zone_id' => 820202,
                'name' => '圣方济各堂区',
                'parent_id' => 820200,
                'level' => 3,
            ),
            122 => 
            array (
                'id' => 3623,
                'zone_id' => 820301,
                'name' => '路氹城',
                'parent_id' => 820300,
                'level' => 3,
            ),
        ));
        
        
    }
}
