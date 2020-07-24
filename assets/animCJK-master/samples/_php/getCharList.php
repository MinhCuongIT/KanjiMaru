<?php
function getCharList($set)
{
	if ($set=="hiragana")
	{
		$a="あいうえおかきくけこさしすせそたちつてとなにぬねの";
		$a.="はひふへほまみむめもやゆよらりるれろわゐゑをん";
		$a.="ゔがぎぐげござじずぜぞだぢづでどばびぶべぼぱぴぷぺぽ";
		$a.="ぁぃぅぇぉゕゖっゃゅょゎ";
		//$a.="ゝゞゟ";
	}
	else if ($set=="katakana")
	{
		$a="アイウエオカキクケコサシスセソタチツテトナニヌネノ";
		$a.="ハヒフヘホマミムメモヤユヨラリルレロワヰヱヲン";
		$a.="ヴガギグゲゴザジズゼゾダヂヅデドバビブベボパピプペポヷヸヹヺ";
		$a.="ァィゥェォヵヶッャュョヮー";
		//$a.="ヽヾ";
	}
	else if ($set=="g1")
	{
		$a="一七三上下中九二五人";
		$a.="休先入八六円出力十千";
		$a.="口右名四土夕大天女子";
		$a.="字学小山川左年手文日";
		$a.="早月木本村林校森正気";
		$a.="水火犬玉王生田男町白";
		$a.="百目石空立竹糸耳花草";
		$a.="虫見貝赤足車金雨青音";
	}
	else if ($set=="g2")
	{
		$a="万丸交京今会体何作元";
		$a.="兄光公内冬刀分切前北";
		$a.="午半南原友古台合同回";
		$a.="図国園地場声売夏外多";
		$a.="夜太妹姉室家寺少岩工";
		$a.="市帰広店弓引弟弱強当";
		$a.="形後心思戸才教数新方";
		$a.="明星春昼時晴曜書朝来";
		$a.="東楽歌止歩母毎毛池汽";
		$a.="活海点父牛理用画番直";
		$a.="矢知社秋科答算米紙細";
		$a.="組絵線羽考聞肉自船色";
		$a.="茶行西親角言計記話語";
		$a.="読谷買走近通週道遠里";
		$a.="野長門間雪雲電頭顔風";
		$a.="食首馬高魚鳥鳴麦黄黒";
	}
	else if ($set=="g3")
	{
		$a="丁世両主乗予事仕他代";
		$a.="住使係倍全具写列助勉";
		$a.="動勝化区医去反取受号";
		$a.="向君味命和品員商問坂";
		$a.="夫始委守安定実客宮宿";
		$a.="寒対局屋岸島州帳平幸";
		$a.="度庫庭式役待急息悪悲";
		$a.="想意感所打投拾持指放";
		$a.="整旅族昔昭暑暗曲有服";
		$a.="期板柱根植業様横橋次";
		$a.="歯死氷決油波注泳洋流";
		$a.="消深温港湖湯漢炭物球";
		$a.="由申界畑病発登皮皿相";
		$a.="県真着短研礼神祭福秒";
		$a.="究章童笛第筆等箱級終";
		$a.="緑練羊美習者育苦荷落";
		$a.="葉薬血表詩調談豆負起";
		$a.="路身転軽農返追送速進";
		$a.="遊運部都配酒重鉄銀開";
		$a.="院陽階集面題飲館駅鼻";
	}
	else if ($set=="g4")
	{
		$a="不争付令以仲伝位低例";
		$a.="便信倉候借停健側働億";
		$a.="兆児共兵典冷初別利刷";
		$a.="副功加努労勇包卒協単";
		$a.="博印参史司各告周唱喜";
		$a.="器囲固型堂塩士変央失";
		$a.="好季孫完官害察巣差希";
		$a.="席帯底府康建径徒得必";
		$a.="念愛成戦折挙改救敗散";
		$a.="料旗昨景最望未末札材";
		$a.="束松果栄案梅械極標機";
		$a.="欠歴残殺毒氏民求治法";
		$a.="泣浅浴清満漁灯無然焼";
		$a.="照熱牧特産的省祝票種";
		$a.="積競笑管節粉紀約結給";
		$a.="続置老胃脈腸臣航良芸";
		$a.="芽英菜街衣要覚観訓試";
		$a.="説課議象貨貯費賞軍輪";
		$a.="辞辺連達選郡量録鏡関";
		$a.="陸隊静順願類飛飯養験";
	}
	else if ($set=="g5")
	{
		$a="久仏仮件任似余価保修";
		$a.="俵個備像再刊判制券則";
		$a.="効務勢厚句可営因団圧";
		$a.="在均基報境墓増夢妻婦";
		$a.="容寄富導居属布師常幹";
		$a.="序弁張往復徳志応快性";
		$a.="恩情態慣承技招授採接";
		$a.="提損支政故敵断旧易暴";
		$a.="条枝査格桜検構武比永";
		$a.="河液混減測準演潔災燃";
		$a.="版犯状独率現留略益眼";
		$a.="破確示祖禁移程税築精";
		$a.="素経統絶綿総編績織罪";
		$a.="群義耕職肥能興舌舎術";
		$a.="衛製複規解設許証評講";
		$a.="謝識護豊財貧責貸貿賀";
		$a.="資賛質輸述迷退逆造過";
		$a.="適酸鉱銅銭防限険際雑";
		$a.="非預領額飼";
	}
	else if ($set=="g6")
	{
		$a="並乱乳亡仁供俳値傷優";
		$a.="党冊処刻割創劇勤危卵";
		$a.="厳収后否吸呼善困垂城";
		$a.="域奏奮姿存孝宅宇宗宙";
		$a.="宝宣密寸専射将尊就尺";
		$a.="届展層己巻幕干幼庁座";
		$a.="延律従忘忠憲我批担拝";
		$a.="拡捨探推揮操敬映晩暖";
		$a.="暮朗机枚染株棒模権樹";
		$a.="欲段沿泉洗派済源潮激";
		$a.="灰熟片班異疑痛皇盛盟";
		$a.="看砂磁私秘穀穴窓筋策";
		$a.="簡糖系紅納純絹縦縮署";
		$a.="翌聖肺背胸脳腹臓臨至";
		$a.="若著蒸蔵蚕衆裁装裏補";
		$a.="視覧討訪訳詞誌認誕誠";
		$a.="誤論諸警貴賃遺郵郷針";
		$a.="鋼閉閣降陛除障難革頂";
		$a.="骨";
	}
	else if ($set=="g7")
	{
		$a="乙了又丈与及乞凡刃巾互丹乏井冗凶刈勾匂匹升厄双介孔";
		$a.="屯幻弔斗斤爪牙且丘丙丼巨仙凹凸占叱召囚奴尻尼巧払氾";
		$a.="汁込斥旦玄瓦甘甲矛伎仰伐伏充刑劣匠企吉叫吐吏壮如妃";
		$a.="妄尽巡帆弐忙扱汎汚汗江芋芝迅旨旬肌朽朱朴缶臼舟串亜";
		$a.="佐伺伸但伯伴克冶励却即呂含吟呉吹呈坑坊壱妖妥妊妨妙";
		$a.="寿尿尾岐床廷弄抗抄択把抜扶抑沙汰沃沖沢沈没狂芯芳迎";
		$a.="那邦阪忌忍戒戻攻更肘肝肖杉秀辛享依佳侍侮併免刹刺到";
		$a.="劾卓叔呪坪奈奇奉奔妬姓宛宜尚屈岡岳岬弥弦征彼怪怖拉";
		$a.="押拐拒拠拘拙拓抽抵拍披抱抹況沼泥泊泌沸泡狙苛茎苗茂";
		$a.="迭迫邪邸阻附房旺昆昇股肩肯肢肪枕枢析杯枠欧殴炎炊炉";
		$a.="采玩祈祉盲突虎阜斉亭侶侯俊侵促俗冠削勃勅卑卸厘叙咽";
		$a.="哀咲垣契威姻孤封峡峠帥帝幽弧悔恒恨拶拭括挟拷挑洪浄";
		$a.="津洞狭狩茨荒荘逃郊郎怨怠怒施昧是胎胆胞柿柵栃架枯柔";
		$a.="柄某柳為牲珍甚畏疫皆盆眉盾冒砕窃糾耐臭虐虹衷訃訂貞";
		$a.="赴軌香俺倹倒倣俸倫兼冥凄准凍剥剣剛剤剖匿唄哺唆唇哲";
		$a.="唐埋娯娠姫娘宴宰宵峰徐悦悟悩挨捉挫振捜挿捕浦浸浜浮";
		$a.="涙浪華逝逐逓途透陥陣恣恐恵恥恋恭扇拳敏脇脊脅脂朕胴";
		$a.="桁核桑栽桟栓桃殊殉烈珠祥泰畝畜畔疾症疲眠砲称租秩袖";
		$a.="被既粋索紛紡紋翁耗致般蚊衰託貢軒辱酎酌釜隻飢鬼竜曹";
		$a.="乾偽偶偵偏剰勘唾喝啓唯埼堆執培婚婆寂尉崖崎崇崩庶庸";
		$a.="彩彫惧惨惜悼捻捗掛掘掲控据措掃排描堀淫涯渇渓渋淑渉";
		$a.="淡添涼猫猛猟葛萎菓菊菌逸逮郭陰陳陶陪隆陵患悠戚斜斬";
		$a.="旋曽脚脱梗梨殻爽瓶痕盗眺窒符粗粘粒紺紹紳累羞粛舷舶";
		$a.="虚蛍蛇袋訟豚貪貫販赦軟酔釈釣頃鹿麻斎亀僅偉傍募傘喉";
		$a.="喩喚喫喪圏堪堅堕塚堤塔塀塁奥媛媒婿尋嵐項幅帽幾廃廊";
		$a.="弾御循慌惰愉握援換搭揚揺湧渦滋湿渡湾猶葬遇遂遅遍隅";
		$a.="随惑扉掌敢斑暁晶替普腕椅椎棺棋棚棟款欺殖煮焦琴畳疎";
		$a.="痩痘痢硬硝硫裕筒粧絞紫絡蛮裂詠詐詔診訴貼越超距軸酢";
		$a.="鈍閑雇雄雰須傲傾傑債催僧勧嗅嗣嘆塞填毀塊塑塗奨嫉嫁";
		$a.="嫌寛寝廉彙微慄慨慎携搾摂搬溺滑溝滞滝漠滅溶猿蓋蓄遡";
		$a.="遜違遣隙隔愚慈愁暇腎腫腺腰楷棄楼歳殿煙煩煎献禍禅痴";
		$a.="睦睡督碁稚窟裾褐裸継羨艇虞虜蜂触詣詮該詰誇詳誉賂賊";
		$a.="賄跡践跳較載酬酪鉛鉢鈴雅雷零飾飽靴頓頑頒鼓僕僚塾墨";
		$a.="奪嫡寡寧彰徴憎慢摘漆漸漬滴漂漫漏蔑遮遭隠慕暦膜概熊";
		$a.="獄瑠瘍罰碑稲端箸箋箇綻維綱緒網腐蜜誓誘豪貌踊辣酵酷";
		$a.="銃銘閥雌需餅駆駄髪魂儀勲舗嘲嘱噴墜墳審寮履幣慶弊影";
		$a.="徹憧憬憤撮撤撲潰潟潤澄潜蔽遵遷慰憂慮戯摯撃摩敷暫膝";
		$a.="膚槽歓璃畿監盤罵罷稽稼稿穂窮窯範縁緩緊締縄衝褒誰謁";
		$a.="請諾賭賜賠賓賦趣踪踏輝輩舞鋭鋳閲震霊餓餌頬駒駐魅黙";
		$a.="儒凝壊墾壌壇壁嬢憶懐憾擁濁濃獲薫薪薦薄還避隣憩曇膳";
		$a.="膨獣磨穏篤緻緯縛繁縫融衡諦謎諧諮謀諭謡賢醒麺錦錮錯";
		$a.="錠錬隷頼骸償嚇擬擦濯懇戴曖臆燥爵犠環療瞳瞭矯礁繊翼";
		$a.="聴謹謙謄購轄醜鍵鍋鍛闇霜韓頻鮮齢濫藤藍藩懲璧癖癒瞬";
		$a.="礎穫襟糧繕繭翻覆贈鎌鎖鎮闘顎顕騎騒瀬藻爆璽羅簿繰艶";
		$a.="覇譜蹴離霧韻髄鯨鶏麓麗懸欄籍譲醸鐘響騰艦躍露顧魔鶴";
		$a.="籠襲驚鑑鬱";
	}
	else if ($set=="g8")
	{
		// 1) jinmeiyō kanji which are not traditional forms of jōyō or jinmeiyō kanji (632 chars)
		$a="丑丞乃之乎也云亘些亦亥亨亮仔伊伍伽佃佑伶侃侑俄俠俣俐倭俱倦倖偲傭儲允兎兜其冴凌凜凧凪凰凱函劉劫勁勺勿匁";
		$a.="匡廿卜卯卿厨厩叉叡叢叶只吾吞吻哉哨啄哩喬喧喰喋嘩嘉嘗噌噂圃圭坐尭坦埴堰堺堵塙壕壬夷奄奎套娃姪姥娩嬉孟宏";
		$a.="宋宕宥寅寓寵尖尤屑峨峻崚嵯嵩嶺巌巫已巳巴巷巽帖幌幡庄庇庚庵廟廻弘弛彗彦彪彬徠忽怜恢恰恕悌惟惚悉惇惹惺惣";
		$a.="慧憐戊或戟托按挺挽掬捲捷捺捧掠揃摑摺撒撰撞播撫擢孜敦斐斡斧斯於旭昂昊昏昌昴晏晃晒晋晟晦晨智暉暢曙曝曳朋";
		$a.="朔杏杖杜李杭杵杷枇柑柴柘柊柏柾柚桧栞桔桂栖桐栗梧梓梢梛梯桶梶椛梁棲椋椀楯楚楕椿楠楓椰楢楊榎樺榊榛槙槍槌";
		$a.="樫槻樟樋橘樽橙檎檀櫂櫛櫓欣欽歎此殆毅毘毬汀汝汐汲沌沓沫洸洲洵洛浩浬淵淳渚淀淋渥湘湊湛溢滉溜漱漕漣澪濡瀕";
		$a.="灘灸灼烏焰焚煌煤煉熙燕燎燦燭燿爾牒牟牡牽犀狼猪獅玖珂珈珊珀玲琢琉瑛琥琶琵琳瑚瑞瑶瑳瓜瓢甥甫畠畢疋疏皐皓";
		$a.="眸瞥矩砦砥砧硯碓碗碩碧磐磯祇祢祐祷禄禎禽禾秦秤稀稔稟稜穣穹穿窄窪窺竣竪竺竿笈笹笙笠筈筑箕箔篇篠簞簾籾粥";
		$a.="粟糊紘紗紐絃紬絆絢綺綜綴緋綾綸縞徽繫繡纂纏羚翔翠耀而耶耽聡肇肋肴胤胡脩腔脹膏臥舜舵芥芹芭芙芦苑茄苔苺茅";
		$a.="茉茸茜莞荻莫莉菅菫菖萄菩萌萊菱葦葵萱葺萩董葡蓑蒔蒐蒼蒲蒙蓉蓮蔭蔣蔦蓬蔓蕎蕨蕉蕃蕪薙蕾蕗藁薩蘇蘭蝦蝶螺蟬";
		$a.="蟹蠟衿袈袴裡裟裳襖訊訣註詢詫誼諏諄諒謂諺讃豹貰賑赳跨蹄蹟輔輯輿轟辰辻迂迄辿迪迦這逞逗逢遥遁遼邑祁郁鄭酉";
		$a.="醇醐醍醬釉釘釧銑鋒鋸錘錐錆錫鍬鎧閃閏閤阿陀隈隼雀雁雛雫霞靖鞄鞍鞘鞠鞭頁頌頗顚颯饗馨馴馳駕駿驍魁魯鮎鯉鯛";
		$a.="鰯鱒鱗鳩鳶鳳鴨鴻鵜鵬鷗鷲鷺鷹麒麟麿黎黛鼎";
		// 2) jinmeiyō kanji that are traditional forms of jōyō kanji (212 chars)
		// 52 of them are html entities because they may not be safely copied
		$a.="亞惡爲&#64103;榮衞&#64098;圓緣薗"; //逸=64103 謁=64098
		$a.="應櫻奧橫溫價&#64082;&#64061;&#64069;壞";//禍=64082 悔=64061 海=64069
		$a.="懷樂渴卷陷寬&#64071;氣&#64078;&#64056;";//漢=64071 祈=64078
		$a.="僞戲虛峽狹&#64105;曉&#64052;&#64099;駈";
		$a.="勳薰惠揭鷄藝擊縣儉劍";
		$a.="險圈檢顯驗嚴廣恆黃國";
		$a.="黑&#64084;碎雜&#64077;&#64097;兒濕實&#64076;";
		$a.="&#64091;&#64072;壽收&#64092;從澁獸縱&#64081;";
		$a.="&#64067;&#64090;緖&#64034;敍將&#64026;涉燒奬";
		$a.="條狀乘淨剩疊孃讓釀&#64025;";
		$a.="眞寢愼盡粹醉穗瀨齊靜";
		$a.="攝&#64086;專戰纖禪&#64080;壯爭莊";
		$a.="搜巢曾裝&#64049;&#64059;瘦騷增&#64063;";
		$a.="藏&#64101;臟卽帶滯瀧單&#64055;團";
		$a.="彈晝鑄&#64095;廳徵聽&#64064;鎭轉";
		$a.="傳&#64038;嶋燈盜稻德&#64085;&#64104;拜";
		$a.="盃賣&#64068;髮拔&#64089;晚&#64053;祕&#64075;";
		$a.="&#64100;&#64065;冨&#64048;&#64027;拂佛&#64051;步峯";
		$a.="&#64058;飜每萬默埜彌藥與搖";
		$a.="樣謠來賴覽&#63773;龍&#63798;凉綠";
		$a.="淚壘&#63952;禮曆歷&#64087;鍊郞&#63785;&#63784;錄";//類=63952 練=64087 朗=63785 廊=63784
		// 3) jinmeiyō kanji that are traditional forms of other jinmeiyō kanji (18 chars)
		// 5 of them are html entities because they may not be safely copied
		$a.="亙凛堯巖晄檜槇&#64070;&#64022;&#64074;禰&#64079;禱祿&#64083;穰萠遙";//渚=64070 猪=64022 琢=64074 祐=64079 禎=64083
		$a=html_entity_decode($a,ENT_NOQUOTES,'UTF-8');
	}
	else if ($set=="frequent2500")
	{
		$a="一乙二十丁厂七卜人入八九几儿了力乃刀又三于干亏士工土才寸下大丈与万上小口巾山千乞川亿个勺久凡及夕丸么广亡门义之尸弓己已子";
		$a.="卫也女飞刃习叉马乡丰王井开夫天无元专云扎艺木五支厅不太犬区历尤友匹车巨牙屯比互切瓦止少日中冈贝内水见午牛手毛气升长仁什片";
		$a.="仆化仇币仍仅斤爪反介父从今凶分乏公仓月氏勿欠风丹匀乌凤勾文六方火为斗忆订计户认心尺引丑巴孔队办以允予劝双书幻玉刊示末未击";
		$a.="打巧正扑扒功扔去甘世古节本术可丙左厉右石布龙平灭轧东卡北占业旧帅归且旦目叶甲申叮电号田由史只央兄叼叫另叨叹四生失禾丘付仗";
		$a.="代仙们仪白仔他斥瓜乎丛令用甩印乐句匆册犯外处冬鸟务包饥主市立闪兰半汁汇头汉宁穴它讨写让礼训必议讯记永司尼民出辽奶奴加召皮";
		$a.="边发孕圣对台矛纠母幼丝式刑动扛寺吉扣考托老执巩圾扩扫地扬场耳共芒亚芝朽朴机权过臣再协西压厌在有百存而页匠夸夺灰达列死成夹";
		$a.="轨邪划迈毕至此贞师尘尖劣光当早吐吓虫曲团同吊吃因吸吗屿帆岁回岂刚则肉网年朱先丢舌竹迁乔伟传乒乓休伍伏优伐延件任伤价份华仰";
		$a.="仿伙伪自血向似后行舟全会杀合兆企众爷伞创肌朵杂危旬旨负各名多争色壮冲冰庄庆亦刘齐交次衣产决充妄闭问闯羊并关米灯州汗污江池";
		$a.="汤忙兴宇守宅字安讲军许论农讽设访寻那迅尽导异孙阵阳收阶阴防奸如妇好她妈戏羽观欢买红纤级约纪驰巡寿弄麦形进戒吞远违运扶抚坛";
		$a.="技坏扰拒找批扯址走抄坝贡攻赤折抓扮抢孝均抛投坟抗坑坊抖护壳志扭块声把报却劫芽花芹芬苍芳严芦劳克苏杆杠杜材村杏极李杨求更束";
		$a.="豆两丽医辰励否还歼来连步坚旱盯呈时吴助县里呆园旷围呀吨足邮男困吵串员听吩吹呜吧吼别岗帐财针钉告我乱利秃秀私每兵估体何但伸";
		$a.="作伯伶佣低你住位伴身皂佛近彻役返余希坐谷妥含邻岔肝肚肠龟免狂犹角删条卵岛迎饭饮系言冻状亩况床库疗应冷这序辛弃冶忘闲间闷判";
		$a.="灶灿弟汪沙汽沃泛沟没沈沉怀忧快完宋宏牢究穷灾良证启评补初社识诉诊词译君灵即层尿尾迟局改张忌际陆阿陈阻附妙妖妨努忍劲鸡驱纯";
		$a.="纱纳纲驳纵纷纸纹纺驴纽奉玩环武青责现表规抹拢拔拣担坦押抽拐拖拍者顶拆拥抵拘势抱垃拉拦拌幸招坡披拨择抬其取苦若茂苹苗英范直";
		$a.="茄茎茅林枝杯柜析板松枪构杰述枕丧或画卧事刺枣雨卖矿码厕奔奇奋态欧垄妻轰顷转斩轮软到非叔肯齿些虎虏肾贤尚旺具果味昆国昌畅明";
		$a.="易昂典固忠咐呼鸣咏呢岸岩帖罗帜岭凯败贩购图钓制知垂牧物乖刮秆和季委佳侍供使例版侄侦侧凭侨佩货依的迫质欣征往爬彼径所舍金命";
		$a.="斧爸采受乳贪念贫肤肺肢肿胀朋股肥服胁周昏鱼兔狐忽狗备饰饱饲变京享店夜庙府底剂郊废净盲放刻育闸闹郑券卷单炒炊炕炎炉沫浅法泄";
		$a.="河沾泪油泊沿泡注泻泳泥沸波泼泽治怖性怕怜怪学宝宗定宜审宙官空帘实试郎诗肩房诚衬衫视话诞询该详建肃录隶居届刷屈弦承孟孤陕降";
		$a.="限妹姑姐姓始驾参艰线练组细驶织终驻驼绍经贯奏春帮珍玻毒型挂封持项垮挎城挠政赴赵挡挺括拴拾挑指垫挣挤拼挖按挥挪某甚革荐巷带";
		$a.="草茧茶荒茫荡荣故胡南药标枯柄栋相查柏柳柱柿栏树要咸威歪研砖厘厚砌砍面耐耍牵残殃轻鸦皆背战点临览竖省削尝是盼眨哄显哑冒映星";
		$a.="昨畏趴胃贵界虹虾蚁思蚂虽品咽骂哗咱响哈咬咳哪炭峡罚贱贴骨钞钟钢钥钩卸缸拜看矩怎牲选适秒香种秋科重复竿段便俩贷顺修保促侮俭";
		$a.="俗俘信皇泉鬼侵追俊盾待律很须叙剑逃食盆胆胜胞胖脉勉狭狮独狡狱狠贸怨急饶蚀饺饼弯将奖哀亭亮度迹庭疮疯疫疤姿亲音帝施闻阀阁差";
		$a.="养美姜叛送类迷前首逆总炼炸炮烂剃洁洪洒浇浊洞测洗活派洽染济洋洲浑浓津恒恢恰恼恨举觉宣室宫宪突穿窃客冠语扁袄祖神祝误诱说诵";
		$a.="垦退既屋昼费陡眉孩除险院娃姥姨姻娇怒架贺盈勇怠柔垒绑绒结绕骄绘给络骆绝绞统耕耗艳泰珠班素蚕顽盏匪捞栽捕振载赶起盐捎捏埋捉";
		$a.="捆捐损都哲逝捡换挽热恐壶挨耻耽恭莲莫荷获晋恶真框桂档桐株桥桃格校核样根索哥速逗栗配翅辱唇夏础破原套逐烈殊顾轿较顿毙致柴桌";
		$a.="虑监紧党晒眠晓鸭晃晌晕蚊哨哭恩唤啊唉罢峰圆贼贿钱钳钻铁铃铅缺氧特牺造乘敌秤租积秧秩称秘透笔笑笋债借值倚倾倒倘俱倡候俯倍倦";
		$a.="健臭射躬息徒徐舰舱般航途拿爹爱颂翁脆脂胸胳脏胶脑狸狼逢留皱饿恋桨浆衰高席准座脊症病疾疼疲效离唐资凉站剖竞部旁旅畜阅羞瓶拳";
		$a.="粉料益兼烤烘烦烧烛烟递涛浙涝酒涉消浩海涂浴浮流润浪浸涨烫涌悟悄悔悦害宽家宵宴宾窄容宰案请朗诸读扇袜袖袍被祥课谁调冤谅谈谊";
		$a.="剥恳展剧屑弱陵陶陷陪娱娘通能难预桑绢绣验继球理捧堵描域掩捷排掉堆推掀授教掏掠培接控探据掘职基著勒黄萌萝菌菜萄菊萍菠营械梦";
		$a.="梢梅检梳梯桶救副票戚爽聋袭盛雪辅辆虚雀堂常匙晨睁眯眼悬野啦晚啄距跃略蛇累唱患唯崖崭崇圈铜铲银甜梨犁移笨笼笛符第敏做袋悠偿";
		$a.="偶偷您售停偏假得衔盘船斜盒鸽悉欲彩领脚脖脸脱象够猜猪猎猫猛馅馆凑减毫麻痒痕廊康庸鹿盗章竟商族旋望率着盖粘粗粒断剪兽清添淋";
		$a.="淹渠渐混渔淘液淡深婆梁渗情惜惭悼惧惕惊惨惯寇寄宿窑密谋谎祸谜逮敢屠弹随蛋隆隐婚婶颈绩绪续骑绳维绵绸绿琴斑替款堪搭塔越趁趋";
		$a.="超提堤博揭喜插揪搜煮援裁搁搂搅握揉斯期欺联散惹葬葛董葡敬葱落朝辜葵棒棋植森椅椒棵棍棉棚棕惠惑逼厨厦硬确雁殖裂雄暂雅辈悲紫";
		$a.="辉敞赏掌晴暑最量喷晶喇遇喊景践跌跑遗蛙蛛蜓喝喂喘喉幅帽赌赔黑铸铺链销锁锄锅锈锋锐短智毯鹅剩稍程稀税筐等筑策筛筒答筋筝傲傅";
		$a.="牌堡集焦傍储奥街惩御循艇舒番释禽腊脾腔鲁猾猴然馋装蛮就痛童阔善羡普粪尊道曾焰港湖渣湿温渴滑湾渡游滋溉愤慌惰愧愉慨割寒富窜";
		$a.="窝窗遍裕裤裙谢谣谦属屡强粥疏隔隙絮嫂登缎缓编骗缘瑞魂肆摄摸填搏塌鼓摆携搬摇搞塘摊蒜勤鹊蓝墓幕蓬蓄蒙蒸献禁楚想槐榆楼概赖酬";
		$a.="感碍碑碎碰碗碌雷零雾雹输督龄鉴睛睡睬鄙愚暖盟歇暗照跨跳跪路跟遣蛾蜂嗓置罪罩错锡锣锤锦键锯矮辞稠愁筹签简毁舅鼠催傻像躲微愈";
		$a.="遥腰腥腹腾腿触解酱痰廉新韵意粮数煎塑慈煤煌满漠源滤滥滔溪溜滚滨粱滩慎誉塞谨福群殿辟障嫌嫁叠缝缠静碧璃墙撇嘉摧截誓境摘摔聚";
		$a.="蔽慕暮蔑模榴榜榨歌遭酷酿酸磁愿需弊裳颗嗽蜻蜡蝇蜘赚锹锻舞稳算箩管僚鼻魄貌膜膊膀鲜疑馒裹敲豪膏遮腐瘦辣竭端旗精歉熄熔漆漂漫";
		$a.="滴演漏慢寨赛察蜜谱嫩翠熊凳骡缩慧撕撒趣趟撑播撞撤增聪鞋蕉蔬横槽樱橡飘醋醉震霉瞒题暴瞎影踢踏踩踪蝶蝴嘱墨镇靠稻黎稿稼箱箭篇";
		$a.="僵躺僻德艘膝膛熟摩颜毅糊遵潜潮懂额慰劈操燕薯薪薄颠橘整融醒餐嘴蹄器赠默镜赞篮邀衡膨雕磨凝辨辩糖糕燃澡激懒壁避缴戴擦鞠藏霜";
		$a.="霞瞧蹈螺穗繁辫赢糟糠燥臂翼骤鞭覆蹦镰翻鹰警攀蹲颤瓣爆疆壤耀躁嚼嚷籍魔灌蠢霸露囊罐";
	}
	else if ($set=="frequentLess1000")
	{
		$a="匕刁丐歹戈夭仑讥冗邓艾夯凸卢叭叽皿凹囚矢乍尔冯玄邦迂邢芋芍吏夷吁吕吆屹廷迄臼仲伦伊肋旭匈凫妆亥汛讳讶讹讼诀弛阱驮驯纫玖玛";
		$a.="韧抠扼汞扳抡坎坞抑拟抒芙芜苇芥芯芭杖杉巫杈甫匣轩卤肖吱吠呕呐吟呛吻吭邑囤吮岖牡佑佃伺囱肛肘甸狈鸠彤灸刨庇吝庐闰兑灼沐沛汰";
		$a.="沥沦汹沧沪忱诅诈罕屁坠妓姊妒纬玫卦坷坯拓坪坤拄拧拂拙拇拗茉昔苛苫苟苞茁苔枉枢枚枫杭郁矾奈奄殴歧卓昙哎咕呵咙呻咒咆咖帕账贬";
		$a.="贮氛秉岳侠侥侣侈卑刽刹肴觅忿瓮肮肪狞庞疟疙疚卒氓炬沽沮泣泞泌沼怔怯宠宛衩祈诡帚屉弧弥陋陌函姆虱叁绅驹绊绎契贰玷玲珊拭拷拱";
		$a.="挟垢垛拯荆茸茬荚茵茴荞荠荤荧荔栈柑栅柠枷勃柬砂泵砚鸥轴韭虐昧盹咧昵昭盅勋哆咪哟幽钙钝钠钦钧钮毡氢秕俏俄俐侯徊衍胚胧胎狰饵";
		$a.="峦奕咨飒闺闽籽娄烁炫洼柒涎洛恃恍恬恤宦诫诬祠诲屏屎逊陨姚娜蚤骇耘耙秦匿埂捂捍袁捌挫挚捣捅埃耿聂荸莽莱莉莹莺梆栖桦栓桅桩贾";
		$a.="酌砸砰砾殉逞哮唠哺剔蚌蚜畔蚣蚪蚓哩圃鸯唁哼唆峭唧峻赂赃钾铆氨秫笆俺赁倔殷耸舀豺豹颁胯胰脐脓逛卿鸵鸳馁凌凄衷郭斋疹紊瓷羔烙";
		$a.="浦涡涣涤涧涕涩悍悯窍诺诽袒谆祟恕娩骏琐麸琉琅措捺捶赦埠捻掐掂掖掷掸掺勘聊娶菱菲萎菩萤乾萧萨菇彬梗梧梭曹酝酗厢硅硕奢盔匾颅";
		$a.="彪眶晤曼晦冕啡畦趾啃蛆蚯蛉蛀唬啰唾啤啥啸崎逻崔崩婴赊铐铛铝铡铣铭矫秸秽笙笤偎傀躯兜衅徘徙舶舷舵敛翎脯逸凰猖祭烹庶庵痊阎阐";
		$a.="眷焊焕鸿涯淑淌淮淆渊淫淳淤淀涮涵惦悴惋寂窒谍谐裆袱祷谒谓谚尉堕隅婉颇绰绷综绽缀巢琳琢琼揍堰揩揽揖彭揣搀搓壹搔葫募蒋蒂韩棱";
		$a.="椰焚椎棺榔椭粟棘酣酥硝硫颊雳翘凿棠晰鼎喳遏晾畴跋跛蛔蜒蛤鹃喻啼喧嵌赋赎赐锉锌甥掰氮氯黍筏牍粤逾腌腋腕猩猬惫敦痘痢痪竣翔奠";
		$a.="遂焙滞湘渤渺溃溅湃愕惶寓窖窘雇谤犀隘媒媚婿缅缆缔缕骚瑟鹉瑰搪聘斟靴靶蓖蒿蒲蓉楔椿楷榄楞楣酪碘硼碉辐辑频睹睦瞄嗜嗦暇畸跷跺";
		$a.="蜈蜗蜕蛹嗅嗡嗤署蜀幌锚锥锨锭锰稚颓筷魁衙腻腮腺鹏肄猿颖煞雏馍馏禀痹廓痴靖誊漓溢溯溶滓溺寞窥窟寝褂裸谬媳嫉缚缤剿赘熬赫蔫摹";
		$a.="蔓蔗蔼熙蔚兢榛榕酵碟碴碱碳辕辖雌墅嘁踊蝉嘀幔镀舔熏箍箕箫舆僧孵瘩瘟彰粹漱漩漾慷寡寥谭褐褪隧嫡缨撵撩撮撬擒墩撰鞍蕊蕴樊樟橄";
		$a.="敷豌醇磕磅碾憋嘶嘲嘹蝠蝎蝌蝗蝙嘿幢镊镐稽篓膘鲤鲫褒瘪瘤瘫凛澎潭潦澳潘澈澜澄憔懊憎翩褥谴鹤憨履嬉豫缭撼擂擅蕾薛薇擎翰噩橱橙";
		$a.="瓢蟥霍霎辙冀踱蹂蟆螃螟噪鹦黔穆篡篷篙篱儒膳鲸瘾瘸糙燎濒憾懈窿缰壕藐檬檐檩檀礁磷瞭瞬瞳瞪曙蹋蟋蟀嚎赡镣魏簇儡徽爵朦臊鳄糜癌";
		$a.="懦豁臀藕藤瞻嚣鳍癞瀑襟璧戳攒孽蘑藻鳖蹭蹬簸簿蟹靡癣羹鬓攘蠕巍鳞糯譬霹躏髓蘸镶瓤矗";
	}
	else if ($set=="hsk6")
	{
		$a="哦斯嘿嗨犯嘛帝啦罪混恩杰圣探监哇姆吉奥狱谎伦踪屁尸蒂魔谋波毁诺撒州凶伯审蠢塔亡鲁堂露爆镇暴纽诞捕赌塞";
		$a.="酷曲莫异誓雇野搭症攻蒙苏魂啥隐协泰抗迈绑沃副瓦丁粉徒灭孤伍纹残砸拖牢惹逮劫袭嫌怖墨陷蹈雅逼叛扯剂怒液";
		$a.="磨娃刑泡堡愚盛皇夺盗汰猎潜霍爽扎讯侦欲杜盯赖胎帐抛遭若仪宫祖耍忠策钻桑尖惧痕佳掩荒督撤援郎埋惨浴侵挖";
		$a.="兽洁晨奏欺端障慈仇逊黎额罢裂偏丧乌宇葬党壮珠勃唐荡扣仰君晓牧巡牲昏凡谷愤盟窃辜伪田蕾倾辱缝惑狼脉宗祸";
		$a.="趴泽诱溜隆狠抵揭涉牵婴胞湖讶瞒呵缘予泄拨癌乳罐骚恰擅患剑牺割拔扭融臂舌焦赋径撑泥贩哼艘寸誉陈惩墓伏缠";
		$a.="妒妆旋廉遥侧舰筹纵猛耀耻殿瘾唤棍疾磅谍忌堪奉廊仓鉴仁孔杆嫉箭揍捉恕吊踏罩尴郁尬崩港淋勾署奴弥抚甘唇截";
		$a.="宙搅舱轨蛮侠滋闷债吞肿仙奔庄袖愈磁肺储番肖嘲氧井艇炉旗昂垫栋渡薪腾驱钉横贼溃拘犬佣忧宰坠霸瘤膝役菌崇";
		$a.="哀浮卑谬抑壳铺腔摧晃僵妥窝岩诈虐诸挨喉扑董搏倦械纠挽晋棕栏氏央灌谱侣屏疫轰挪沿悬贫腹抹朴稿雕蜡粹添兜";
		$a.="喘锋隶仗沮浑竭炎疏呈鄙煎耗晶衰掘谜捷馅瞄沾覆侄跪逝赠笼川湾翼筒丸塌吼枚辨擎绅侮峰庞丛剥妄漆筋贪兆畏枕";
		$a.="陶讼穴遮瞬捣串赤脂歧饶疤篷谣摊钩苍凑缉酬舔畜垂悦畅循烛堕颠券衷盲膜斑氓稀嚷跨扁携粒呕跌坟御恒罕钞敞啰";
		$a.="肢咙饥宅岗刊渣阱贿棉贤淹榜喻拟躁蓄慨坑颈焰鸽泣熏遣津翘逆柱滥皆鸣嘱弊蒸赴宪刹凝哨炫慷殖叨睹绘蚁顽隧颁";
		$a.="橙捏坡剖锤丘膛枝旺酗芒噪辉叮巷贯嚼叹卸茫陋掏纤臣蔽俘颤砖驳迁宵袍洪撼卓翔秃驻眨幢削乞聋锦沼赂辐鸦拽阔";
		$a.="皱哄谐蹦碳咋锐帆斥峡捞铜悼巢庇禽履浸衔绒雀熄杖悟寺霜殴钝逢奢挫撇弦掐昧庸搁梁涌挚坛窍腥晰祥旨叠框碑蓬";
		$a.="咐酿唠墅亦伐咽婪惕稚曝捆泊嗅瓷渔哑驰屑烘栽铭冤溪舟绎胀肆溅拌吩剔茎竖枯椎勉缚挠崖瘫俯沫亭烹磕庙颇腻掠";
		$a.="辖肪渗攀叭蚂歹憋喇缴郑吟溶碌娇蔓滤岔崭蚀儒捧昔掷馈帖谴颂唾宏痪敷渺僻榨澄扒裕芽瞪狭涕拙躬饪灿昌锈瘸琢";
		$a.="掀朽渠拧辙惫帜雌拣斩岳拓劈虏稻滞滨蔑钦伺盈辫沸柬丙贬鞠壤杠窜洽啃颖坝铸煌衅怯苟侈迄谤觅绣魄堤墟泌粥濒";
		$a.="寝旷伶岂隙韧痹衍瀑拢诽萎瓣搂捍枉袱扛徘诫徊膨诵掰揉嵌瘩涵滔疙唆烁凹桨吁沛熨捎晤筛攒毅泻勘耸紊呻镶沐蔼";
		$a.="哗丐藐诬纬陵侥涩嗦惦凄淆睬茂饲睦瞩峻耕吝殃旱钙辰株惰喧凸辟廓甭稼涛媳彰嫂蹋愣搓蹬梢阐晾叼恍啬筐屡哺潇";
		$a.="讳萌抒咀簸汹暧缀兢畔纺倔澈啸涮舆酝灶侃赁巩奠斟蕴缔遏惋昼陡譬搀迸徙眶狈讥秤蔚酌隘俐怠阂嘈眯裳畴淀峭垄";
		$a.="瞻肴惮椭俭稠倘诧沧霞疆馋浊雹哆溉暄拄磋辽荤炊挎侨舶锲辕踊";
	}
	else if ($set=="hsk5")
	{
		$a="杀嗯德神枪官救宝搞战布装贝击器制哈达待托强军代血疯鬼巴兄品英抓统维派恶糟令毒治控录拍组造集类曾投未威";
		$a.="显偷权某立闭庭雷团王义唯夜靠独娘顿设置逃痛狂模索灵承产政领纳退秘架背追炸射傻藏瞧呆碰念华冲型麦似套私";
		$a.="滚食形石测丝防恋武胜屋斗守致称吓古状疗操遗寻胡替拥股挑姑项摩享配迹阻属婆骨摄委暗训善轮顶兵锁木抢档群";
		$a.="坦土伴恨移编刺毫库荣充创劳忍势吻营盖府透掌升临智归撞搜摆岛避织执戒佛妙宣烂悲妇圈敬劲醉吵龙挥彼废初素";
		$a.="敌欧旦依雄朝恭补摇躲源滑碎弱臭幻闪沉卷财墙拳触胁施胸孕硬销虫握迫采辈限巨尾青席犹赞访良驾范猪淘洞冠伟";
		$a.="珍朗欠丑烈村堆庆率寓谓余核损辩摸途敏版订俱尺鼠幕憾隔彻插尚构绪吐吹颗宁罚乡豪征括稳胆甲佩启赏震述阵乖";
		$a.="咬蜜拼池虚频违诊络辞献农姻恢描匹软纯贴略陆载嫁喊灰摔厂怨剪豆挡糊卧域闲涂碍柜裁账固漏夹辑喷饰灾欣滩闯";
		$a.="圆延凭捐挣宽驶伸析媒矩绕益壁汇缩诗殊含甩燃炒晕偿岸绳蛇链薄瞎齐哎逐肩筑艰冻遵酱齿忽肠押玻姿召柔阶歇亿";
		$a.="胶眠仿潮舍宴兔奈胃挤脆询蜂夸企递铃振册璃慰宿睁脖陌返扇肌猴慌凌税湿膀幅泪拆玉币魅炮桃培腐砍宠腰俗弯渐";
		$a.="措毯霉缓逗撕娶勤滴钓踩革惠淡拦逻赔熬漠衡趁盾尘骂跃粘疲肃幼嘉映俊沟愧娱催捡叉狮亏蹲乏哲披拐讽劝裹慧雾";
		$a.="浓唉扩煮烫繁悄妨扶谨抖屈荐均飘矛摘润贷紫氛慎浅眉悠寂兼锅寿促辅览棋贡艳嗓综劣豫痒柴盼翅迅晒椒舅咨歪盆";
		$a.="洒耽昆删届涨厢匆苗蝶狡夕寞纷煤裔蝴皂梳愁厦抄醋斜谦泛屉县恳猾兑贸壶帘竹叙蔬浇秩嫩虹粮鞭髦勿燥践梨炭乙";
		$a.="吨孝厘姥趋塘骤绸惭糙窄桔浏嚏傍纲倡屿匀旬馒";
	}
	else if ($set=="hsk4")
	{
		$a="死之克无全美许亲尔保受活何伙谈部计任确利警士拉将证管处切失性此合队抱通并歉命入掉演够案约肯伤父指原底";
		$a.="棒收交停格金内至消整度持光与象使察海绝反由论亚续母尽弄密线继份止拜紧联精转却基台另况否险言幸传量首改";
		$a.="术局永烦取随式律费科麻流倒划味区支连弹吸呀醒梦赢丽付排敢油餐破激程讨责落林及争猜建惊标各民功示释引疑";
		$a.="赶俩存断松博观码恐普价怀验呼祝剧乱展则深迷具福职即挺负脱仅资弃修危专甚苦适骗厌值众预际咱卫养导虑戴志";
		$a.="杂误规陪森纪浪顺举按坚免印严推毛压败究评速获细丢态判货围签牌户质供奖袋脏效座沙扰困概登竟彩招巧剩烟封";
		$a.="低技输仍扔社秀刀族广镜播温遍尝列毕聚尊汤优偶熟微抽艺研散饼糖富降怜既笨航匙秒挂勇钥奋忆折景默禁诚谅厅";
		$a.="稍窗章仔款拒童翻洲互例垃染漫圾缺针扮邀闹辛竞厉厨允授估帅键傲减著鼓盒寄赚材尤愉序烤悔暂惜拾申批乘辣躺";
		$a.="肥址占省增擦洋符骄羞贺敲购售耐琴貌倍桥肤厕植距虎济粗肚暖励积云幽龄汁钢篇汗酸叶趟抬悉页桶巾穷扬污填塑";
		$a.="丰孙恼详葡萄脾凉厚矿逛堵胳谊泉袜膊懒盐江鸭膏慕阅寒棵橡泼础戚暑咳聘郊傅羽籍勺羡硕咸译乓嗽乒柿饺";
	}
	else if ($set=="hsk3")
	{
		$a="啊把只如自发心定该当用地行而像被跟成感干法己信实方应头特相需放直才于带力种者安理重记加接拿解其又更马";
		$a.="结难位刚查或变物总办主算必害选且向照提决求目留清世片口酒周赛须卡婚根单张万声音奇怕护花节怪愿除界担空";
		$a.="阿注坏久议礼数平调文业包参风复忘假据嘴越简易答乎超轻满静故极讲趣戏容化束终差图半楚市城换船级刻迎段检";
		$a.="脸择楼皮练历山元角街料板顾遇史画闻急糕脚聊居词突努辆句季双牙南冰响网箱园冒甜香叔搬迟烧借聪腿鞋树银短";
		$a.="环哭康般境爷灯裤盘附阳健较耳草层末铁黄夏舒旧蓝疼河鸟骑饿瓶典育净李鲜扫惯邮帽啤梯鼻绿熊胖爬邻春朵饮裙";
		$a.="澡渴衫刷衬姨秋碗绩冬刮瘦矮炼伞饱锻蕉斤筷";
	}
	else if ($set=="hsk2")
	{
		$a="要就到为道可知得过吧还以事也真让给但着意别所然走经因告最手找快等从情诉已问错孩它间次正进比帮晚动常长";
		$a.="白第两非公身题完望离新思场始外件表希边男准员玩每备试体乐早门房球夫路日舞笑报教色远眼蛋息室运哥火条病";
		$a.="弟您送近穿助司跑忙站跳便歌务黑票游唱考往步班药卖百妹足慢妻床休洗奶千共懂介红鱼牛馆肉旅鸡丈睛笔虽啡课";
		$a.="咖纸左右旁雪贵汽瓜阴累绍踢宾泳零羊颜姓篮宜铅晴";
	}
	else if ($set=="hsk1")
	{
		$a="我的你是了不们这一他么在有个好来人那会什没说吗想能上去她很看对里都子生时样和下现做大怎出点起天开谢些";
		$a.="家后儿多话小回果见听觉太妈打再呢女前先明中作面爱电哪西候欢关车年喜认爸谁老机分今工东名同学叫本国友高";
		$a.="请住钱吃朋系几气少医三兴服字水号师星识坐期买影二喝月写姐飞视衣钟十睡亮狗脑院书四米校客岁五漂喂块店语";
		$a.="热杯昨饭冷午习六读商八汉租猫七菜北桌雨九椅茶京苹";
	}
	else if ($set=="frequentNotHsk")
	{
		$a="卜乃弓刃屯冈仆爪丹凤轧禾兰尼芝匠邪贞朱乔刘奸坊芹芬芳芦杏杨歼吴呜肝龟卵亩冶汪沈宋尿妖纱驴茄茅枣顷肾咏";
		$a.="罗岭凯秆侍斧狐闸炕孟陕驼垮赵拴茧柄柏柳砌虾贱缸竿疮阀阁姜剃袄垦垒骆绞蚕盏匪莲荷桂桐栗轿毙晌蚊钳秧笋倚";
		$a.="徐爹翁狸浆脊浙涝浩绢勒萝菊萍菠梅啄铲犁笛鹿寇窑屠婶绵揪葛葱葵棚雁蛙蛛蜓锄鹅筝腊粪絮缎瑞蒜鹊槐榆蛾锡锣";
		$a.="锯痰韵粱碧暮榴蜻蝇蜘锹箩僚熔寨翠凳骡槽樱燕薯橘蹄螺穗糠镰鹰囊匕刁戈夭仑冗邓艾夯卢叽皿囚矢乍冯玄邦迂邢";
		$a.="芋芍吏夷吕吆屹廷臼仲伊肋旭匈凫亥汛讹诀弛驮驯纫玖玛抠扼汞扳抡坎坞芙芜苇芥芯芭杉巫杈甫匣轩卤吱吠呐呛吭";
		$a.="邑囤吮岖牡佑佃囱肛肘甸鸠彤灸刨庐闰灼沥沦沪忱诅妓姊玫卦坷坯坪坤拂拇拗茉苛苫苞茁苔枢枫杭矾奄昙咕咒咆帕";
		$a.="贮秉刽忿瓮肮狞疟疚卒炬沽泞怔宛衩祈诡帚弧函虱叁驹绊契贰玷玲珊拭拷拱挟垢垛拯荆茸茬荚茵茴荞荠荧荔栈柑栅";
		$a.="柠枷砂泵砚鸥轴韭盹咧昵昭盅勋咪哟钠钧钮毡氢秕俏俄侯胚胧狰饵峦奕飒闺闽籽娄洼柒涎洛恃恬恤宦祠诲屎陨姚娜";
		$a.="蚤骇耘耙秦匿埂捂袁捌捅埃耿聂荸莽莱莉莹莺梆栖桦栓桅桩贾砰砾殉逞哮蚌蚜蚣蚪蚓哩圃鸯唁唧赃钾铆氨秫笆俺殷";
		$a.="舀豺豹胯胰脐脓卿鸵鸳馁郭斋疹羔烙浦涡涣涤涧悍悯袒谆祟娩骏琐麸琉琅捺捶赦埠捻掂掖掸掺菱菲菩萤乾萧萨菇彬";
		$a.="梗梧梭曹硅盔匾颅彪曼晦冕畦趾蛆蚯蛉蛀唬崎崔赊铐铛铝铡铣矫秸秽笙笤偎傀躯舷舵敛翎脯逸凰猖祭庶庵痊阎眷焊";
		$a.="焕鸿涯淑淌淮渊淫淳淤悴窒裆祷谒谚尉隅婉绰绷绽琳琼堰揩揽揖彭揣壹搔葫募蒋韩棱椰焚棺榔粟棘酣酥硝硫颊雳凿";
		$a.="棠鼎喳跋跛蛔蜒蛤鹃啼赎赐锉锌甥氮氯黍筏牍粤逾腌腋腕猩猬敦痘痢竣遂焙湘渤湃愕惶窖窘犀媚婿缅缆缕瑟鹉瑰搪";
		$a.="靴靶蓖蒿蒲蓉楔椿楷榄楞楣酪碘硼碉嗜暇畸跷跺蜈蜗蜕蛹嗡嗤蜀幌锚锥锨锭锰颓魁衙腮腺鹏肄猿煞雏馍馏禀痴靖誊";
		$a.="漓溢溯滓溺窥窟褂裸缤剿赘赫蔫摹蔗熙榛榕酵碟碴碱嘁蝉嘀幔镀箍箕箫僧孵瘟漱漩漾寡寥谭褐褪嫡缨撵撩撮撬擒墩";
		$a.="撰鞍蕊樊樟橄豌醇碾嘶嘹蝠蝎蝌蝗蝙镊镐稽篓膘鲤鲫褒瘪凛澎潭潦澳潘澜憔懊憎翩褥鹤憨嬉缭擂薛薇翰噩橱瓢蟥霎";
		$a.="冀踱蹂蟆螃螟鹦黔穆篡篙篱膳鲸燎懈窿缰壕檬檐檩檀礁磷瞭瞳曙蟋蟀嚎赡镣魏簇儡徽爵朦臊鳄糜懦豁臀藕藤嚣鳍癞";
		$a.="襟璧戳孽蘑藻鳖蹭簿蟹靡癣羹鬓攘蠕巍鳞糯霹躏髓蘸瓤矗";
	}
	else if ($set=="commonNotHskNorFrequent")
	{
		$a="";
		$a.="乂乜亍兀弋彳丫巳孑孓幺亓韦廿卅仄厄曰壬仃仉仂兮刈爻殳卞亢闩讣尹夬爿毋邗戋卉邛艽艿札叵匝丕戊匜劢卟叱叩";
		$a.="叻冉氕仨仕仟仡仫伋仞卮氐犰卯刍庀邝邙汀汈忉宄讦讧讪讫尻弗弘阢阡尕弁驭匡耒玎玑戎圩圬圭扦圪圳圹扪圯圮芏";
		$a.="芊芨芄芎芑芗亘厍戌夼戍尥尧乩旯曳岌屺凼囝囡钆钇缶氘氖牝伎伛伢仳佤仵伥伧伉伫囟甪汆氽刖夙旮犴刎犷犸舛邬";
		$a.="饧冱邡汕汔汲汐汜汝汊忖忏讴讵祁讷聿艮厾阮阪丞妁妃牟纡纣纥纨纩玕玙玚抟抔坜圻坂扺坍抃抉毐芫邯芸芾芰苈苊";
		$a.="苣芷芮苋芼苌苁芩芪芴芡芟苄苎苡杌杓杧杞忑孛吾邴酉邳矶奁豕忒欤轪轫迓邶忐芈卣邺旰呋呓呔呖呃旸吡町虬呙呗";
		$a.="吣吲岍帏岐岈岘岑岚兕囵囫钊钋钌迕氙氚岙佞邱佐伾攸佚佝佟佗伽彷佘佥孚豸坌肟邸奂劬狄狃狁邹饨饩饫饬亨庑庋";
		$a.="疔疖肓闱闳闵闶羌炀沣沅沄沔沤沌沘沏沚汩汨汭沂汾沨汴汶沆沩沁泐怃忮怄忡忤忾怅忻忪怆忭忸诂诃祀祃诋诌诎诏";
		$a.="诐诒屃孜陇阽阼陀陂陉妍妩妪妣妊妗妫妞姒妤邵劭刭甬邰矣纭纰纴纶纻纾玮玡玠玢玥玦甙盂忝匦邽坩垅抨拤拈坫垆";
		$a.="抻拃拊坼拎坻坨坭抿拚坳耵耶苷苯苤茏苴苜苒苘茌苻苓茚茆茑苑茓茔茕苠茀苕枥枇杪杳枘枧杵枨枞枋杻杷杼矸矻矽";
		$a.="砀刳瓯殁郏轭郅鸢盱昊杲昃咂呸昕昀旻昉炅咔畀虮迪呷黾呱呤咚咛咄呶呦咝岵岢岿岬岫帙岣峁刿峂迥岷剀帔峄沓囹";
		$a.="罔钍钎钏钐钒钔钕钗邾迭迮牦竺迤佶佬佴侑佰侉臾岱侗侏侩佻佾侪佼佯侬帛阜侔郈徂郐郄怂籴戗肼朊肽肱肫肭肷剁";
		$a.="迩郇狉狙狎狝狍狒咎炙枭饯饳饴冽冼庖疠疝疡兖庚妾於劾炜炖炝炔泔沭泷泸泱泅泗泠泜泺泃泖泫泮沱泯泓泾怙怵怦";
		$a.="怛怏怍怩怫怊怿怡宕穸穹宓诓诔诖诘戾诙戽郓祆祎祉诛诜诟诠诣诤诨诩鸤戕孢亟陔卺妲妯姗妮帑弩孥驽迦迢迨绀绁";
		$a.="绂驵驷驸绉驺绋绌驿骀甾砉耔珏珐珂珑玳珀顸珉珈韨拮垭挝垣垯挞垤赳贲垱垌哉垲挢埏郝垍垧垓垟垞挦垠拶茜荙荑";
		$a.="贳荛荜茈茼莒茱莛茯荏荇荃荟荀茗茭茨垩茳荥荦荨茛荩荪荫茹荬荭柰栉柯柘栊柩枰栌柙枵柚枳柞柝栀柃柢栎枸柈柁";
		$a.="柽剌郚剅酊郦砗砑砘砒斫砭砜奎耷虺殂殇殄殆轱轲轳轵轶轷轸轹轺虿毖觇尜哐眄眍郢眇眊昽眈咭禺哂咴曷昴昱咦哓";
		$a.="哔畎毗呲胄畋畈虼虻咣哕剐郧咻囿咿哌哙哚咯咩咤哝哏哞峙峣罘帧峒峤峋峥峧帡贶贻钘钚钛钡钣钤钨钪钫钬钭钯矧";
		$a.="氡氟牯郜秭竽笈笃俦俨俅俪叟垡牮俣俚俜皈禹俑俟逅徇徉舢舣俞弇郗俎卻爰郛瓴胨胩胪胛胂胙胍胗胝朐胫鸨匍狨狯";
		$a.="飐飑狩狲訇訄逄昝饷饸饹饻胤孪娈庤弈庥疬疣疥疭疢庠竑彦闼闾闿羑籼酋兹炳炻炟炽炯烀炷烃洱洹洧洌浃泚浈浉洇";
		$a.="洄洙洑洎洫浍洮洵洚洺洨浐洴洣浒浔浕洳恸恹恫恺恻恂恪恽宥宬窀扃袆衲衽衿袂祛祜祓祚诮祗祢诰诳鸩昶郡咫弭牁";
		$a.="胥陛陟陧姞娅娆姝姽姣姘姹怼羿炱癸矜绔骁骅绗绚彖绛骈耖挈恝珥珙顼珰珽珩珧珣珞琤珲敖恚埔埕埘埚埙挹耆耄捋";
		$a.="埒贽垸捃盍莰茝莆莳莴莪莠莓莜莅荼莶莩荽莸荻莘莎莞莨莙鸪莼栲栳郴桓桡桎桢桄桤梃栝桕桁桧栒栟桉栩逑逋彧鬲";
		$a.="豇酐酎酏逦厝孬砝砹砺砧砷砟砼砥砣硁恧剞砻轼轾辀辁辂鸫趸剕龀鸬虔逍眬唛晟眩眙唝哧哳哽唔晔晁晏晖鸮趵趿畛";
		$a.="蚨蚍蚋蚬蚝蚧唢圄唣唏盎唑帱崂崃罡罟峨峪觊赅赆钰钲钴钵钷钹钺钼钽钿铀铂铄铈铉铊铋铌铍铎眚氩氤氦毪舐秣盉";
		$a.="笄笕笊笫笏俸倩俵倻偌俳俶倬倏恁倭倪俾倜隼隽倞倓倌倥臬皋郫倨衄颀徕舨舫瓞釜奚鬯衾鸰胱胴胭脍脎胲胼朕脒胺";
		$a.="鸱玺鱽鸲狴狷猁狳猃狺逖狻桀袅眢饽馀凇栾挛勍亳疳疴疽疸痄痈疱疰痃痂痉衮凋颃恣旆旄旃阃阄阆恙桊敉粑朔郸烜";
		$a.="烨烩烊剡郯烬浡涑浯涞涟娑涅涠浞涓涢浥涔浜浠浼浣涘浚悖悚悭悝悃悒悌悢悛宸窅窈剜诹扅诼冢袪袗袢袯祯祧冥诿";
		$a.="谀谂谄谇屐屙陬勐奘疍牂蚩陲陴烝姬娠娌娉娟娲娥娴娣娓婀砮哿畚逡剟绠骊绡骋绤绥绦骍绨骎邕鸶彗耜焘舂琎琏琇";
		$a.="掭揶埴掎埼埯捯焉掳掴埸堌赧捭晢逵埝堋堍掬鸷掊堉捩掮悫埭埽掇掼聃聆聍菁菝萁菥菘堇萘萋勩菽菖萜萸萑菂棻菔";
		$a.="菟萏萃菼菏菹菪菅菀萦菰菡梽梵梾梏觋桴桷梓棁桫棂郾匮敕豉鄄酞酚厣戛硎硭硒硖硗硐硚硇硌鸸瓠匏厩龚殒殓殍赉";
		$a.="雩辄堑龁眭唪眦啧晡眺眵眸圊啪喏喵啉勖晞晗啭趼趺啮跄蚶蛄蛎蚰蚺蛊圉蚱蛏蚴鄂啁啕唿啐唼唷啴啖啵啶啷唳啜帻";
		$a.="崦帼崮帷崟崤崞崆崛赇赈铑铒铕铗铘铙铚铞铟铠铢铤铥铧铨铩铪铫铬铮铯铰铱铳铴铵铷氪牾鸹稆秾逶笺筇笸笪笮笱";
		$a.="笠笥笳笾笞偾鸺偃偕偈偲偬偻皑皎鸻徜舸舻舳舴鸼龛瓻豚脶脞脬脘脲脧匐鱾猗猡猊猞猄猝斛觖猕馗馃馄鸾孰庹庼庾";
		$a.="庳痔痍疵翊旌旎袤阇阈阉阊阋阌阍阏羚羝羟粝粕焐烯焓烽焖烷烺焌渍渚淇淅淞渎涿淖挲淏淠涸渑淦淝淬涪淙涫渌淄";
		$a.="惬悻悱惝惘悸惟惆惚惇寅逭窕谌谏扈皲谑袼裈裉祲谔谕谖谗谙谛谝敝逯艴隋郿隈粜隍隗婧婊婞婳婕娼婢婵胬袈翌恿";
		$a.="欸绫骐绮绯骒绲骓绶绹绺绻绾骖缁耠琫琵琶琪瑛琦琥琨靓琰琮琯琬琛琚辇鼋揳堞搽塃揸揠堙趄揾颉塄揿堠耋揄蛰蛩";
		$a.="絷塆揞揎摒揆掾葜聒葑葚靰靸葳蒇蒈葺蒉葸萼蓇萩葆葩葶蒌葓蒎萱葖戟葭楮棼椟棹椤棰椑鹀赍椋椁棬楗棣椐鹁覃酤";
		$a.="酢酡酦鹂觌硪硷厥殚殛雯辊辋椠辌辍辎斐黹牚睐睑睇睃戢喋嗒喃喱喹晷喈跖跗跞跚跎跏跆蛱蛲蛭蛳蛐蛞蛴蛟蛘蛑畯";
		$a.="喁喟斝啾嗖喤喑嗟喽嗞喀喔喙嵘嵖崴遄詈嵎崽嵚嵬嵛翙嵯嵝嵫幄嵋赑铹铻铼铽铿锃锂锆锇锊锎锏锑锒锓锔锕掣矬氰";
		$a.="毳毽犊犄犋鹄犍颋嵇稃稂筘筚筜筅筵筌傣傈舄傥傧遑皓皖傩遁徨舾畲弑颌翕釉鹆舜貂腈腓腆腴腑腙腚腱腒鱿鲀鲂鲃";
		$a.="颍猢猹猥飓觞觚猸猱飧馇馉馊亵脔裒廋斌痣痨痦痞痤痫痧鄌赓竦瓿啻颏鹇阑阒阕粞遒孳焯焜焱鹈湛渫湮湎湝湨湜渭";
		$a.="湍湫溲湟溆渝湲溠溇湔湉渲渥湄滁愠惺愦惴愀愎愔喾寐谟扉棨扊裢裎裣裥祾祺祼谠禅禄幂谡谥谧塈遐孱弼巽骘媪媛";
		$a.="婷巯毵翚皴婺骛缂缃缄彘缇缈缌缏缑缒缗骙飨耢瑚瑁瑀瑜瑗瑄瑕遨骜瑙遘韫髡塥塬鄢趔趑摅摁赪塮蜇搋搒搐搛搠摈";
		$a.="彀毂搌搦搡蓁戡蓍鄞靳蓐蓦鹋蒽蓓蓊蒯蓟蓑蒺蓠蒟蒡蒹蒴蒗蓂蓥颐蓣楠楂楝楫榀楸椴槌楯榇榈槎榉楦楹椽裘剽甄酮";
		$a.="酰酯酩蜃碛碓碚碇碜鹌辏辒龃龅龆觜訾粲虞睚嗪睫韪嗷嗉睨睢雎睥嘟嗑嗫嗬嗔嗝戥嗄煦暅遢暌跬跶跸跐跣跹跻跤蛸";
		$a.="蜎蜊蜍蜉蜣畹嗣嗥嗲嗳嗌嗍嗵罨嵊嵩嵴骰锖锗锘锛锜锝锞锟锢锧锪锫锩锬锱雉氲犏歃稞稗稔筠筢筮筻筲筼筱牒煲鹎";
		$a.="敫僇徭愆艄觎毹貊貅貉颔腠腩腼腽腭腧塍媵詹鲅鲆鲇鲈鲉鲊稣鲋鲌鲍鲏鲐鹐飔飕觥遛馌馐鹑亶廒瘃痱痼痿瘐瘁瘅瘆";
		$a.="鄘麂鄣歆旒雍阖阗阘阙羧豢粳猷煳煜煨煅煊煸煺滟溱溘滠漭滢滇溥溧溽裟溻溷溦滗滫溴滏滃滦溏滂溟滘滍滪愫慑慥";
		$a.="慊鲎骞窦窠窣裱褚裼裨裾裰禊谩谪谫媾嫫媲嫒嫔媸缙缜缛辔骝缟缡缢缣骟耥璈瑶瑭瑢獒觏慝嫠韬墈摽墁撂摞撄翥踅";
		$a.="銎摭墉墒榖撖摺綦蔷靺靼鞅靽鞁靿蔌甍蔸蓰蔹蔡蔟蔺戬蕖蔻蓿斡鹕嘏蓼榧槚槛榻榫槜榭槔槁槟槠榷榍僰酽酾酲酶酴";
		$a.="酹厮碶碡碣碲碹碥劂臧豨殡霆霁辗蜚裴翡龇龈睿夥瞅瞍睽嘞嘌嘎暝踌踉跽蜞蜥蜮蜾蝈蜴蜱蜩蜷蜿螂蜢嘘嘡鹗嘣嘤嘚";
		$a.="嗾嘧罴罱嶂幛赙罂骷骶鹘锴锶锷锸锽锾锵锿镁镂镃镄镅犒箐箦箧箸箨箬箅箪箔箜箢箓毓僖儆僳僭僬劁僦僮魃魆睾艋";
		$a.="鄱膈膑鲑鲔鲙鲚鲛鲟獐獍飗觫雒夤馑銮塾麽廙瘌瘗瘊瘥瘘瘙廖韶旖膂阚鄯鲞粼粽糁槊鹚熘煽熥潢潆漤漕滹漯漶潋潴";
		$a.="漪漉漳澉潍慵搴窬窨窭寤肇綮谮褡褙褓褛褊禚谯谰谲暨屣鹛嫣嫱嫖嫦嫚嫘嫜嫪鼐翟瞀鹜骠缥缦缧骢缪缫耦耧瑾璜璀";
		$a.="璎璁璋璇璆奭髯髫撷撅赭墦撸鋆撙撺墀聩觐鞑蕙鞒蕈蕨蕤蕞蕺瞢劐蕃蕲蕰赜鼒槿樯槭樗樘槲鹝醌醅靥魇餍磊磔磙磉";
		$a.="殣慭霄霈辘龉龊觑瞌瞑嘻嘭噎噶颙暹踔踝踟踬踮踣踯踺踞蝽蝾蝻蝰蝮螋蝓蝣蝼蝤噗嘬颚噍噢噙噜噌噀噔颛幞幡嶓嶙";
		$a.="嶝骺骼骸镆镈镉镋镌镍镎镏镑镒镓镔稷箴篑篁篌篆牖儇儋徵磐虢鹞鹟滕鲠鲡鲢鲣鲥鲦鲧鲩鲪鲬橥獗獠觯鹠馓馔麾廛";
		$a.="瘛瘼瘢瘠齑鹡羯羰糇遴糌糍糈糅翦鹣熜熵熠澍澌潵潸鲨潲鋈潟潼潽潺潏憬憧寮窳谳褴褫禤谵屦勰戮蝥缬缮缯骣畿耩";
		$a.="耨耪璞璟靛璠璘聱螯髻髭髹擀熹甏擐擞磬鄹颞蕻鞘黇颟薤薨檠薏蕹薮薜薅樾橛橇樵檎橹橦樽樨橼墼橐翮醛醐醍醚醑";
		$a.="觱磺磲赝飙殪霖霏霓錾辚臻遽氅瞟瞠瞰嚄嚆噤暾曈蹀蹅踶踹踵踽蹉蹁螨蟒螈螅螭螗螠噱噬噫噻噼幪罹圜镖镗镘镚镛";
		$a.="镝镞镠氇氆憩穑穄篝篚篥簉篦篪盥劓翱魉魈徼歙盦膪螣膦膙鲭鲮鲯鲰鲱鲲鲳鲴鲵鲷鲺鲹鲻獴獭獬邂憝亸鹧廨赟癀瘭";
		$a.="瘰廪瘿瘵瘴癃瘳斓麇麈嬴壅羲糗瞥甑燠燔燧燊燏濑濉潞澧澴澹澥澶濂澼憷黉褰寰窸褶禧嬖犟隰嬗鹨翯颡缱缲缳璨璩";
		$a.="璐璪螫擤觳罄擢藉薹鞡薷薰藓藁檑檄懋醢翳繄礅磴鹩龋龌豳壑黻瞵嚅蹑蹒蹊蹓蹐螬螵疃螳蟑嚓羁罽罾嶷黜黝髁髀镡";
		$a.="镢镤镥镦镧镨镩镪镫罅黏簧簌篾簃篼簏簖簋鼢黛鹪鼾皤魍艚龠繇貘邈貔臌膻臁臆臃鲼鲽鲾鳀鳁鳂鳃鳅鳆鳇鳈鳉鳊獯";
		$a.="螽燮鹫襄縻膺癍麋馘懑濡濮濞濠濯蹇謇邃襕襁檗甓擘孺隳嬷蟊鹬鍪鏊鳌鬹鬈鬃瞽鞯鞨鞫鞧鞣藜藠藩鹲檫檵醪蹙礞礓";
		$a.="礌燹餮蹩瞿曛颢曜躇鹭蹢蹜蟛蟪蟠蟮嚚鹮黠黟髅髂镬镭镯镱馥簠簟簪簦鼫鼬鼩雠艟臑鳎鳏鳐鳑鹱癔癜癖糨冁瀍瀌鎏";
		$a.="懵彝邋鬏攉鞲鞴藿蘧蘅麓醭醮醯礤酃霪霭黼嚯蹰蹶蹽蹼蹯蹴蹾蹿蠖蠓蠋蟾蠊巅黢髋髌镲籀籁鳘齁魑艨鼗鳓鳔鳕鳗鳙";
		$a.="鳚麒鏖蠃羸瀚瀣瀛襦谶襞骥缵瓒馨蘩蘖蘘醵醴霰颥酆矍曦躅鼍巉黩黥镳镴黧纂鼯犨臜鳜鳝鳟獾瀹瀵孀骧耰瓘鼙醺礴";
		$a.="礳颦曩黯鼱鳡鳢癫麝赣夔爝灏禳鐾羼蠡耲耱懿韂鹳糵蘼霾氍饕躔躐髑镵穰鳤饔鬻鬟趱攫攥颧躜鼹鼷癯麟蠲蠹醾躞衢";
		$a.="鑫灞襻纛鬣攮囔馕戆蠼爨齉";
	}
	else if ($set=="traditional1")
	{
		$a="我的你是了瞭不們這一他么麼在有個箇好來人那會什沒說説嗎想能上去她很看對裏裡";
		$a.="里都子生時樣和下現做大怎出齣點起天開謝些傢家后後兒多話小回迴果見聽覺太媽打";
		$a.="再呢女前先明中作面麪麵愛電哪西候歡關車年喜認爸誰老機分今工東名同衕學叫本國";
		$a.="友高請住錢喫朋係系繫几幾氣少醫三興服字水號師星識坐期買影二喝月寫姐飛視衣鈡";
		$a.="鍾鐘十睡亮狗腦院書四米校客嵗歲𡻕五漂喂餵塊店語熱杯盃昨飯冷午習六讀商八漢租";
		$a.="貓七菜北桌雨九椅茶京苹蘋";
	}
	else if ($set=="hskNotFrequent")
	{
		$a="嗯魅裔髦桔浏嚏哦嗨嘛哇尴尬缉拽咋婪曝馈饪墟熨瞩甭愣啬潇咀暧侃迸阂嘈惮诧暄磋锲";
	}
	return $a;
}
?>