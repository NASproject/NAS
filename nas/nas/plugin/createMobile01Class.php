<?php

//用來建立mobile01主類別與分類別並寫入資料庫中的程式

/*
include_once dirname(__FILE__) . '\plugin\cdom.php';
$str = '  <div><select name="f" id="f"  onChange="setforum(this.value);"><option value="" selected>全部的討論區</option><option value="" >----------</option><option value="" >行動通訊</option><option value="219" >　|- Asus</option><option value="175" >　|- BenQMobile</option><option value="349" >　|- LG</option> <option value="117" >　|- MOTOROLA</option><option value="122" >|- NOKIA</option><option value="559" >　|- OVI</option><option value="217" >　|- SAMSUNG</option><option value="165" >　|- SHARP</option><option value="121" >　|- Sony Ericsson</option><option value="218" >　|- TOSHIBA</option><option value="522" >　|- NEC日系</option><option value="523" >　|- Panasonic日系</option><option value="525" >　|- SHARP日系</option><option value="524" >　|- SonyEricsson日系</option><option value="526" >　|- TOSHIBA日系</option><option value="527" >　|- 日系其他品牌</option><option value="528" >　|- 聯想</option><option value="529" >　|- 金立</option><option value="530" >　|- 天語</option><option value="531" >　|- TCL</option><option value="532" >　|- 海爾</option><option value="533" >　|- 波導</option><option value="534" >　|- 夏新</option><option value="535" >　|- 康佳</option><option value="536" >　|- 中興</option><option value="537" >　|- CECT</option><option value="370" >　|- NOKIA佈景主題</option><option value="127" >　|- Sony Ericsson佈景主題</option><option value="521" >　|- 其他品牌佈景主題</option><option value="14" >　|- 手機綜合討論</option><option value="18" >　|- 行動通訊綜合討論區</option><option value="392" >　|- 手機消費經驗分享</option><option value="" >----------</option><option value="" >PDA應用</option><option value="564" >　|- Acer (Android)</option><option value="588" >　|- Asus (Android)</option><option value="565" >　|- Google (Android)</option><option value="624" >　|- GSmart (Android)</option><option value="566" >　|- HTC (Android)</option><option value="629" >　|- Huawei (Android)</option><option value="581" >　|- LG (Android)</option><option value="567" >　|- MOTOROLA (Android)</option><option value="568" >　|- SAMSUNG (Android)</option><option value="384" >　|- BlackBerry</option><option value="569" >　|- Sony / SE (Android)</option><option value="634" >　|- 小米手機 (Android)</option><option value="62" >　|- WebOS / Palm</option><option value="423" >　|- Android軟體分享</option><option value="571" >　|- NOKIA (Symbian)</option><option value="586" >　|- Android硬體綜合</option><option value="572" >　|- Samsung (Symbian)</option><option value="573" >　|- SonyEricsson (Symbian)</option><option value="574" >　|- Symbian軟體分享</option><option value="221" >　|- Acer (Windows Phone)</option><option value="222" >　|- Asus (Windows Phone)</option><option value="437" >　|- Garmin-Asus (Windows Phone)</option><option value="225" >　|- GSmart (Windows Phone)</option><option value="226" >　|- HP (Windows Phone)</option><option value="224" >　|- HTC (Windows Phone)</option><option value="570" >　|- LG (Windows Phone)</option><option value="631" >　|- Nokia (Windows Phone)</option><option value="288" >　|- O2 (Windows Phone)</option><option value="450" >　|- SAMSUNG (Windows Phone)</option><option value="575" >　|- Sony / SE (Windows Phone)</option><option value="576" >　|- TOSHIBA (Windows Phone)</option><option value="129" >　|- Windows Phone軟體分享</option><option value="61" >　|- PDA綜合</option><option value="393" >　|- PDA消費經驗分享</option><option value="" >----------</option><option value="" >GPS應用</option><option value="228" >　|- GARMIN</option><option value="304" >　|- HOLUX</option><option value="227" >　|- Mio</option><option value="305" >　|- Panasonic</option><option value="231" >　|- PAPAGO</option><option value="230" >　|- TOMTOM</option><option value="519" >　|- 中國品牌</option><option value="130" >　|- GPS綜合討論</option><option value="520" >　|- GPS消費經驗分享</option><option value="" >----------</option><option value="" >相機與攝影</option><option value="652" >　|- BenQ數位相機</option><option value="538" >　|- Canon數位相機</option><option value="245" >　|- Casio數位相機</option><option value="633" >　|- JVC數位相機</option><option value="295" >　|- Kodak數位相機</option><option value="539" >　|- Fujifilm數位相機</option><option value="247" >　|- Leica數位相機</option><option value="540" >　|- Nikon數位相機</option><option value="541" >　|- Olympus數位相機</option><option value="542" >　|- Panasonic數位相機</option><option value="543" >　|- Pentax數位相機</option><option value="252" >　|- Ricoh數位相機</option><option value="440" >　|- Samsung數位相機</option><option value="441" >　|- Sanyo數位相機</option><option value="544" >　|- Sigma數位相機</option><option value="545" >　|- Sony數位相機</option><option value="653" >　|- Lomo相機</option><option value="244" >　|- Canon單眼相機</option><option value="546" >　|- 消費型數位相機綜合討論區</option><option value="246" >　|- Fujifilm單眼相機</option><option value="183" >　|- Leica單眼相機</option><option value="248" >　|- Nikon單眼相機</option><option value="249" >　|- Olympus單眼相機</option><option value="250" >　|- Panasonic單眼相機</option><option value="251" >　|- Pentax單眼相機</option><option value="630" >　|- Ricoh單眼相機</option><option value="556" >　|- Samsung單眼相機</option><option value="253" >　|- Sigma單眼相機</option><option value="254" >　|- Sony單眼相機</option><option value="547" >　|- 可換鏡頭數位相機綜合討論區</option><option value="548" >　|- Canon攝錄影機</option><option value="549" >　|- JVC攝錄影機</option><option value="550" >　|- Panasonic攝錄影機</option><option value="551" >　|- Sanyo攝錄影機</option><option value="552" >　|- Sony攝錄影機</option><option value="553" >　|- 動畫後製與剪輯</option><option value="554" >　|- 攝錄放影機綜合討論區</option><option value="164" >　|- 影像器材周邊</option><option value="255" >　|- 傳統與特殊相機</option><option value="257" >　|- 攝影觀念及技術</option><option value="256" >　|- 影像處理與後製</option><option value="395" >　|- 相機消費經驗分享</option><option value="" >----------</option><option value="" >筆記型電腦</option><option value="232" >　|- Acer</option><option value="233" >　|- Asus</option><option value="235" >　|- BenQ</option><option value="236" >　|- DELL</option><option value="237" >　|- Fujitsu</option><option value="238" >　|- GIGABYTE</option><option value="239" >　|- HP</option><option value="240" >　|- Lenovo</option><option value="342" >　|- KOHJINSHA</option><option value="241" >　|- MSI</option><option value="242" >　|- Panasonic</option><option value="258" >　|- Sony</option><option value="243" >　|- Toshiba</option><option value="605" >　|- Android平板電腦</option><option value="163" >　|- Windows平板電腦</option><option value="159" >　|- 攜帶型電腦綜合討論區</option><option value="394" >　|- 筆電消費經驗分享</option><option value="" >----------</option><option value="" >個人電腦</option><option value="296" >　|- 中央處理器</option><option value="488" >　|- 主機板</option><option value="489" >　|- 記憶體</option><option value="297" >　|- 硬碟</option><option value="490" >　|- SSD固態硬碟</option><option value="491" >　|- 外接式硬碟盒</option><option value="492" >　|- 隨身碟與錄音筆</option><option value="493" >　|- 光碟燒錄</option><option value="494" >　|- 網路儲存裝置</option><option value="495" >　|- 其他儲存</option><option value="298" >　|- 顯示卡</option><option value="350" >　|- 電腦螢幕</option><option value="496" >　|- 電視卡盒</option><option value="351" >　|- 鍵盤與手寫板</option><option value="497" >　|- 滑鼠與鍵鼠組</option><option value="498" >　|- 噴墨印表機</option><option value="499" >　|- 雷射印表機</option><option value="500" >　|- 音效裝置</option><option value="116" >　|- 其他電腦週邊</option><option value="299" >　|- 機殼</option><option value="501" >　|- 電源供應器</option><option value="502" >　|- 散熱器</option><option value="503" >　|- 其他電源設備</option><option value="504" >　|- 網路卡</option><option value="110" >　|- 基地台與分享器</option><option value="505" >　|- 網路視訊與電話</option><option value="506" >　|- 網站與網頁技術</option><option value="507" >　|- 其他網路設備與技術</option><option value="300" >　|- 作業系統</option><option value="508" >　|- 電腦安全</option><option value="509" >　|- 影像處理</option><option value="510" >　|- 影片播放與轉檔</option><option value="511" >　|- 文書處理</option><option value="512" >　|- 其他應用軟體</option><option value="513" >　|- 品牌電腦與準系統</option><option value="174" >　|- 自組電腦分享</option><option value="514" >　|- 其他電腦綜合討論</option><option value="396" >　|- 電腦組裝訪價消費分享</option><option value="359" >　|- Google服務分享</option><option value="" >----------</option><option value="" >蘋果電腦</option><option value="563" >　|- iPad</option><option value="626" >　|- iPad 軟體</option><option value="383" >　|- iPhone</option><option value="627" >　|- iPhone 軟體</option><option value="479" >　|- iPod</option><option value="591" >　|- iOS Jailbreak</option><option value="480" >　|- Mac桌上型電腦</option><option value="481" >　|- Mac筆記型電腦</option><option value="177" >　|- 蘋果週邊綜合</option><option value="482" >　|- 蘋果軟體綜合</option><option value="483" >　|- 蘋果電腦消費經驗分享</option><option value="" >----------</option><option value="" >小惡魔的影音天地</option><option value="180" >　|- 行動影音</option><option value="347" >　|- 高畫質視界</option><option value="348" >　|- 發燒音響</option><option value="386" >　|- 小惡魔影城</option><option value="402" >　|- 音樂鑑賞室</option><option value="562" >　|- 影音綜合討論區</option><option value="421" >　|- 小惡魔電視台</option><option value="403" >　|- 影音消費經驗分享</option><option value="" >----------</option><option value="" >小惡魔的動力研究室</option><option value="606" >　|- Audi</option><option value="275" >　|- BMW</option><option value="303" >　|- Mercedes Benz</option><option value="607" >　|- Mini</option><option value="369" >　|- Opel</option><option value="608" >　|- Porsche</option><option value="623" >　|- Skoda</option><option value="286" >　|- 德國車系綜合</option><option value="609" >　|- Volkswagen</option><option value="610" >　|- Aston Martin</option><option value="603" >　|- Jaguar</option><option value="604" >　|- Land Rover</option><option value="611" >　|- Lotus</option><option value="448" >　|- 英國車系綜合</option><option value="413" >　|- Peugeot</option><option value="326" >　|- 法國車系綜合</option><option value="612" >　|- Saab</option><option value="339" >　|- Volvo</option><option value="613" >　|- Ferrari</option><option value="614" >　|- Maserati</option><option value="615" >　|- Lamborghini</option><option value="337" >　|- 義大利車系綜合</option><option value="260" >　|- Ford</option><option value="616" >　|- GM車系</option><option value="617" >　|- 美國車系綜合</option><option value="261" >　|- Honda</option><option value="449" >　|- INFINITI</option><option value="346" >　|- LEXUS</option><option value="276" >　|- Mazda</option><option value="262" >　|- Mitsubishi</option><option value="263" >　|- Nissan</option><option value="336" >　|- Subaru</option><option value="277" >　|- Suzuki</option><option value="264" >　|- Toyota</option><option value="618" >　|- 日本車系綜合</option><option value="585" >　|- Hyundai</option><option value="338" >　|- 韓國車系綜合</option><option value="444" >　|- LUXGEN</option><option value="577" >　|- tobe</option><option value="619" >　|- 中國車系綜合</option><option value="620" >　|- 汽車零組件</option><option value="621" >　|- 汽車行車記錄器</option><option value="636" >　|- 輪圈與輪胎</option><option value="214" >　|- 動力研究室綜合區</option><option value="278" >　|- WRC / F1 賽事討論</option><option value="294" >　|- 動研室七嘴八舌區</option><option value="397" >　|-  汽車消費經驗分享</option><option value="" >----------</option><option value="" >小惡魔的機車同好會</option><option value="654" >　|- AEON(250cc以下)</option><option value="655" >　|- HARTFORD(250cc以下)</option><option value="656" >　|- HONDA(250cc以下)</option><option value="657" >　|- KYMCO(250cc以下)</option><option value="658" >　|- PGO(250cc以下)</option><option value="659" >　|- SUZUKI(250cc以下)</option><option value="660" >　|- SYM(250cc以下)</option><option value="661" >　|- YAMAHA(250cc以下)</option><option value="266" >　|- 輕型機車綜合(250cc以下)</option><option value="662" >　|- BMW(250cc以上)</option><option value="663" >　|- DUCATI(250cc以上)</option><option value="664" >　|- HARLEY-DAVIDSON(250cc以上)</option><option value="665" >　|- HONDA(250cc以上)</option><option value="666" >　|- KAWASAKI(250cc以上)</option><option value="667" >　|- KYMCO(250cc以上)</option><option value="668" >　|- SUZUKI(250cc以上)</option><option value="669" >　|- SYM(250cc以上)</option><option value="670" >　|- YAMAHA(250cc以上)</option><option value="267" >　|- 重型機車綜合(250cc以上)</option><option value="622" >　|- 電動機車</option><option value="265" >　|- 人身安全部品</option><option value="414" >　|- 機車活動區</option><option value="416" >　|- 機車遊記分享</option><option value="431" >　|- 機車賽事討論區</option><option value="671" >　|- 機車行車記錄器</option><option value="415" >　|- 機車消費經驗分享</option><option value="" >----------</option><option value="" >小惡魔的單車俱樂部</option><option value="268" >　|- 自行車綜合討論區</option><option value="287" >　|- 自行車活動區</option><option value="315" >　|- 登山車區</option><option value="316" >　|- 公路車區</option><option value="317" >　|- 小徑與摺疊車區</option><option value="318" >　|- 自行車週邊與保養改裝</option><option value="320" >　|- 遊記與路線分享區</option><option value="377" >　|- 自行車GPS航跡分享</option><option value="306" >　|- 高雄01小惡魔車團</option><option value="367" >　|- 自行車賽事</option><option value="307" >　|- 汐萬百客</option><option value="308" >　|- 土城愛騎團</option><option value="398" >　|- 單車消費經驗分享</option><option value="309" >　|- 台北幸福山港</option><option value="310" >　|- 板橋騎兵團</option><option value="311" >　|- 彰化星光八卦團</option><option value="312" >　|- 大新竹竹蜻蜓車隊</option><option value="313" >　|- 大陸華東ABC車隊</option><option value="314" >　|- 大桃園小惡魔</option><option value="319" >　|- 苗栗山城單車俱樂部</option><option value="321" >　|- 大稻之行團</option><option value="322" >　|- Taipei01小惡魔車隊</option><option value="323" >　|- 台中真享受車隊</option><option value="324" >　|- 舊金山灣區單車行</option><option value="327" >　|- 北臺灣OFFROAD團</option><option value="328" >　|- 臺北左岸夜騎團</option><option value="329" >　|- 永福IN幫幫</option><option value="331" >　|- 基隆鳶飛百客車隊</option><option value="332" >　|- 南台北城市單車俱樂部</option><option value="333" >　|- 大台南01惡魔團</option><option value="340" >　|- 林北愛騎團</option><option value="341" >　|- 新莊星光團</option><option value="343" >　|- 嘉義諸羅佰客</option><option value="344" >　|- 台北非假日順騎自然團</option><option value="352" >　|- 大南投01惡魔團</option><option value="353" >　|- 新竹小熊單車團</option><option value="355" >　|- 林口鄉自由車委員會</option><option value="362" >　|- 苑裡海山假日逍遙團</option><option value="363" >　|- 大文山樂騎團</option><option value="364" >　|- 樹林極樹</option><option value="365" >　|- 鮪魚肚TORO-BIKE車隊</option><option value="366" >　|- 大安森林團</option><option value="378" >　|- 雲遊林間</option><option value="379" >　|- 元氣家族</option><option value="385" >　|- 疾輪百客</option><option value="387" >　|- 正妹陪騎團</option><option value="389" >　|- Friends 20</option><option value="390" >　|- 大摺無雙</option><option value="391" >　|- 紅蜻蜓車隊</option><option value="417" >　|- 悠遊約騎團</option><option value="418" >　|- 中興勤瘦幫</option><option value="419" >　|- 台中優遊團</option><option value="422" >　|- 淡水恐龍團</option><option value="424" >　|- 悠遊騎跡輕鬆團</option><option value="425" >　|- 藍鵲家族</option><option value="428" >　|- 台中樂活車隊</option><option value="429" >　|- 笨港車隊</option><option value="426" >　|- NHB 內湖幫</option><option value="430" >　|- 漂泊者車隊</option><option value="432" >　|- 兩鐵家族</option><option value="433" >　|- 大騎士單車俱樂部</option><option value="434" >　|- 快樂腳</option><option value="435" >　|- 海放車隊</option><option value="436" >　|- TCSM台中慢慢騎</option><option value="438" >　|- 東莞貓頭鷹鐵馬隊</option><option value="439" >　|- 板橋翹孤輪</option><option value="446" >　|- 台中夜奔</option><option value="447" >　|- 比基尼自行車隊</option><option value="451" >　|- 台中雅騎士</option><option value="452" >　|- 雲林塔可自行車隊</option><option value="478" >　|- 遊戲兔子團</option><option value="445" >　|- 沐風團</option><option value="484" >　|- 屏東肉腳團</option><option value="485" >　|- 台南逍遙團</option><option value="486" >　|- 嘉義搖擺兵團</option><option value="487" >　|- H.H.E自由車隊</option><option value="357" >　|- 台南星光團</option><option value="358" >　|- 北高貓頭鷹團</option><option value="515" >　|- 夢團</option><option value="516" >　|- 光夜團</option><option value="517" >　|- 南台灣OFFROAD團</option><option value="518" >　|- 熟男熟女牽車團</option><option value="147" >　|- 熱血自轉車部</option><option value="555" >　|- 北永康愛騎團</option><option value="560" >　|- 夜八里輕騎團</option><option value="582" >　|- Ni Ni ride to great</option><option value="583" >　|- 南勢角迷路團</option><option value="584" >　|- K.B.I.車隊</option><option value="589" >　|- 新北市樹鶯區鷹速車隊</option><option value="590" >　|- 中台灣Offroad團</option><option value="" >----------</option><option value="" >勇者逗樂園</option><option value="281" >　|- PS3</option><option value="672" >　|- PSP</option><option value="673" >　|- PS VITA</option><option value="282" >　|- Microsoft XBOX360</option><option value="280" >　|- Wii</option><option value="674" >　|- DS</option><option value="285" >　|- 魔獸世界</option><option value="401" >　|- 暗黑破壞神</option><option value="561" >　|- 星海爭霸</option><option value="632" >　|- 戰地風雲</option><option value="284" >　|- 線上遊戲</option><option value="283" >　|- 電腦單機遊戲</option><option value="334" >　|- 網頁遊戲</option><option value="675" >　|- Android遊戲</option><option value="676" >　|- iOS遊戲</option><option value="179" >　|- 遊戲綜合</option><option value="388" >　|- 封測帳號發送</option><option value="399" >　|- 遊戲消費經驗分享</option><option value="" >----------</option><option value="" >居家房事</option><option value="453" >　|- 基隆市</option><option value="454" >　|- 台北市</option><option value="455" >　|- 新北市</option><option value="456" >　|- 桃園縣</option><option value="457" >　|- 新竹市</option><option value="458" >　|- 新竹縣</option><option value="459" >　|- 苗栗縣</option><option value="460" >　|- 台中市</option><option value="462" >　|- 彰化縣</option><option value="463" >　|- 南投縣</option><option value="464" >　|- 雲林縣</option><option value="465" >　|- 嘉義市</option><option value="466" >　|- 嘉義縣</option><option value="467" >　|- 台南市</option><option value="469" >　|- 高雄市</option><option value="471" >　|- 屏東縣</option><option value="472" >　|- 台東縣</option><option value="473" >　|- 花蓮縣</option><option value="474" >　|- 宜蘭縣</option><option value="475" >　|- 澎湖縣</option><option value="476" >　|- 金門縣</option><option value="477" >　|- 連江縣</option><option value="356" >　|- 房地產綜合</option><option value="335" >　|- 居家綜合</option><option value="168" >　|- 家電綜合</option><option value="360" >　|- 空間設計與裝潢</option><option value="578" >　|- 庭院園藝樂</option><option value="635" >　|- 木工DIY</option><option value="400" >　|- 居家房事消費經驗分享</option><option value="" >----------</option><option value="" >女性流行</option><option value="371" >　|- 五顏六色秀彩妝</option><option value="372" >　|- 光鮮亮麗玩保養</option><option value="373" >　|- 時尚流行新鮮話</option><option value="374" >　|- 星座占卜小魔女</option><option value="375" >　|- 媽媽寶寶親子</option><option value="215" >　|- 魔女悄悄話</option><option value="" >----------</option><option value="" >流行時尚</option><option value="376" >　|- 典藏腕時計</option><option value="595" >　|- 帽子與眼鏡</option><option value="596" >　|- 外套與上衣</option><option value="597" >　|- 褲款大搜查</option><option value="598" >　|- 鞋靴樂收藏</option><option value="599" >　|- 包包大集合</option><option value="600" >　|- 飾品與配件</option><option value="301" >　|- 造型與保養</option><option value="302" >　|-  時尚流行綜合討論</option><option value="" >----------</option><option value="" >運動健身</option><option value="642" >　|- 籃球</option><option value="643" >　|- 棒壘球</option><option value="644" >　|- 足球</option><option value="645" >　|- 網球和羽球</option><option value="646" >　|- 高爾夫球</option><option value="558" >　|- 訓練與慢跑</option><option value="647" >　|- 游泳</option><option value="648" >　|- 潛水</option><option value="639" >　|- 鐵人三項</option><option value="293" >　|- 運動健身綜合</option><option value="649" >　|- 運動健身消費經驗分享</option><option value="" >----------</option><option value="" >生活娛樂</option><option value="368" >　|- 遙控與模型</option><option value="181" >　|- 逸品博覽會</option><option value="291" >　|- 投資與理財</option><option value="290" >　|- 動物與寵物</option><option value="330" >　|- 健康與養生</option><option value="37" >　|- 閒聊與趣味</option><option value="292" >　|- 兩性與感情</option><option value="579" >　|- 享受釣遊樂</option><option value="580" >　|- 品酩享微醺</option><option value="625" >　|- 漫畫與動畫</option><option value="594" >　|- 閱讀與創作</option><option value="602" >　|- 料理與食譜</option><option value="628" >　|- 登山與健行</option><option value="641" >　|- 露營野炊樂</option><option value="637" >　|- 軍事迷基地</option><option value="638" >　|- 新聞與時事</option><option value="640" >　|- 就愛咖啡香</option><option value="650" >　|- 掌中放光明</option><option value="651" >　|- 職場甘苦談</option><option value="601" >　|- 惡魔島</option><option value="" >----------</option><option value="" >行動寫真館</option><option value="34" >　|- 行動寫真館</option><option value="427" >　|- 影片分享</option></select></div>';
$html = str_get_html($str);
$cfgDB_HOST = "localhost";
$cfgDB_USERNAME = "monitor";
$cfgDB_PASSWORD = "monitor";
$cfgDB_NAME = "monitor";
$link = mysql_connect($cfgDB_HOST, $cfgDB_USERNAME, $cfgDB_PASSWORD) or die("無法連線到MYSQL");
mysql_select_db($cfgDB_NAME, $link) or die("無法連線到資料庫");
mysql_query("SET NAMES 'utf8'");
$i = 0;
foreach ($html->find('option') as $e) {
    $value = $e->value;
    $str = str_ireplace("|", "", str_ireplace("-", "", str_ireplace(" ", "", $e->innertext)));
    if ($value == null && $str != null) {  //主類別
        $i++;
        $f = "id,title";
        $v = "'$i','$str'";
        $query = "INSERT INTO  mobile01_class($f) VALUES ($v)";
        $result = mysql_query($query) or die("invalid query1 " . $query . "</br>");
    } else if ($value != null && $str != null) { //分類別
        $f = "id,belong,title";
        $v = "$value,$i,'$str'";
        $query = "INSERT INTO  mobile01_sub_class($f) VALUES ($v)";
        $result = mysql_query($query) or die("invalid query2 " . $query . "</br>");
    }
}

 */
?>
