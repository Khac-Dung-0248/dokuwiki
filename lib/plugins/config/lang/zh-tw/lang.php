<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author GHSRobert Ciang <robertus0617@gmail.com>
 * @author Li-Jiun Huang <ljhuang.tw@gmail.com>
 * @author http://www.chinese-tools.com/tools/converter-simptrad.html
 * @author Wayne San <waynesan@zerozone.tw>
 * @author Cheng-Wei Chien <e.cwchien@gmail.com>
 * @author Danny Lin
 * @author Shuo-Ting Jian <shoting@gmail.com>
 * @author syaoranhinata <syaoranhinata@gmail.com>
 * @author Liou, Jhe-Yu <lioujheyu@gmail.com>
 */
$lang['menu']                  = '系統設定';
$lang['error']                 = '因為含有不合規格的設定值，故未能更新設定。請檢查您的更改並重新送出。
<br />不正確的設定值，會以紅色方框包住。';
$lang['updated']               = '設定已更新。';
$lang['nochoice']              = '(無其他可用選項)';
$lang['locked']                = '設定檔無法更新，若非故意，請確認本地檔名及權限正確。';
$lang['danger']                = '危險：改變此選項，可能使您無法存取本 wiki 及設定選單。';
$lang['warning']               = '警告：改變此選項可能導致不可預期的行為。';
$lang['security']              = '安全性警告：改變此選項可能造成安全風險。';
$lang['_configuration_manager'] = '設定管理器';
$lang['_header_dokuwiki']      = 'DokuWiki 設定';
$lang['_header_plugin']        = '附加元件設定';
$lang['_header_template']      = '樣板設定';
$lang['_header_undefined']     = '未定義設定';
$lang['_basic']                = '基本設定';
$lang['_display']              = '顯示設定';
$lang['_authentication']       = '認證設定';
$lang['_anti_spam']            = '反垃圾設定';
$lang['_editing']              = '編輯設定';
$lang['_links']                = '連結設定';
$lang['_media']                = '媒體設定';
$lang['_notifications']        = '提醒設定';
$lang['_syndication']          = '聚合設定';
$lang['_advanced']             = '進階設定';
$lang['_network']              = '網路設定';
$lang['_msg_setting_undefined'] = '設定的後設數據不存在。';
$lang['_msg_setting_no_class'] = '設定的分類不存在。';
$lang['_msg_setting_no_default'] = '無預設值';
$lang['title']                 = '本 wiki 的標題';
$lang['start']                 = '開始頁面的名稱';
$lang['lang']                  = '語系';
$lang['template']              = '樣板';
$lang['tagline']               = '副標題 (若樣板支援此功能)';
$lang['sidebar']               = '側欄的頁面名稱 (若樣板支援此功能) 。若把它留空，則會停用側欄';
$lang['license']               = '您希望您的內容採用哪種授權方式？';
$lang['savedir']               = '儲存資料的目錄';
$lang['basedir']               = '根目錄';
$lang['baseurl']               = '根路徑 (URL)';
$lang['cookiedir']             = 'Cookie 路徑。設定空白則使用 baseurl。';
$lang['dmode']                 = '目錄建立模式';
$lang['fmode']                 = '檔案建立模式';
$lang['allowdebug']            = '允許除錯 <b>(不需要請停用！)</b>';
$lang['recent']                = '最近更新';
$lang['recent_days']           = '儲存多少天內的變更';
$lang['breadcrumbs']           = '導覽路徑數量。輸入0表示停用。';
$lang['youarehere']            = '顯示階層式導覽路徑 (若要用此功能，建議停用上方的選項)';
$lang['fullpath']              = '顯示完整的路徑於頁面底部';
$lang['typography']            = '進行字元替換';
$lang['dformat']               = '日期格式 (參見 PHP 的 <a href="http://php.net/strftime">strftime</a> 函數)';
$lang['signature']             = '簽名';
$lang['showuseras']            = '將最後編輯頁面的使用者顯示為：';
$lang['toptoclevel']           = '目錄表的最上層級';
$lang['tocminheads']           = '決定是否建立目錄表的最少標題數量';
$lang['maxtoclevel']           = '目錄表顯示的最大層級';
$lang['maxseclevel']           = '可編輯段落的最大層級';
$lang['camelcase']             = '對連結使用 CamelCase';
$lang['deaccent']              = '清理頁面名稱';
$lang['useheading']            = '使用第一個標題作頁面名稱';
$lang['sneaky_index']          = '預設情況下，DokuWiki 會在索引頁會顯示所有分類名稱。啟用此選項，會隱藏使用者沒有閱讀權限的頁面，但也可能將他可以閱讀的子頁面一併隱藏。在特定 ACL 設定下，這可能導致索引無法使用。';
$lang['hidepages']             = '隱藏匹配的界面 (正規式)';
$lang['useacl']                = '使用存取控制名單';
$lang['autopasswd']            = '自動產生密碼';
$lang['authtype']              = '認證後台管理方式';
$lang['passcrypt']             = '密碼加密方式';
$lang['defaultgroup']          = '預設群組';
$lang['superuser']             = '超級使用者 —— 不論 ACL 如何設定，都能訪問所有頁面與功能的群組或使用者';
$lang['manager']               = '管理員 —— 能訪問相應管理功能的群組或使用者';
$lang['profileconfirm']        = '修改個人資料時需要確認密碼';
$lang['rememberme']            = '允許自動登入 (記住我)';
$lang['disableactions']        = '停用的 DokuWiki 動作';
$lang['disableactions_check']  = '檢查';
$lang['disableactions_subscription'] = '訂閱/取消訂閱';
$lang['disableactions_wikicode'] = '檢視原始碼/匯出原始檔';
$lang['disableactions_other']  = '其他功能 (逗號分隔)';
$lang['auth_security_timeout'] = '安全認證的計時 (秒)';
$lang['securecookie']          = 'HTTPS 頁面設定的 cookie 是否只能由瀏覽器經 HTTPS 傳送？取消此選項後，只有登入本 wiki 才會受 SSL 保護，瀏覽時則不受保護。';
$lang['remote']                = '啟用遠程 API 系统。這允許其他程式經 XML-RPC 或其他機制來訪問本 wiki 。';
$lang['remoteuser']            = '將遠程 API 的訪問權限，限制在指定的群組或使用者中。以逗號分隔群組或使用者。留空表示允許任何人訪問。';
$lang['usewordblock']          = '根據字詞表阻擋垃圾訊息';
$lang['relnofollow']           = '外部連結使用 rel="nofollow"';
$lang['indexdelay']            = '建立索引前的延遲時間 (秒)';
$lang['mailguard']             = '自動弄亂使用者的電郵地址，以作保護';
$lang['iexssprotect']          = '檢查上傳的檔案中是否隱含惡意的 JavaScript 或 HTML 碼';
$lang['usedraft']              = '編輯時自動儲存草稿';
$lang['htmlok']                = '允許嵌入式 HTML';
$lang['phpok']                 = '允許嵌入式 PHP';
$lang['locktime']              = '檔案的最大鎖定時間 (秒)';
$lang['cachetime']             = '緩存的最大存在時間 (秒)';
$lang['target____wiki']        = '內部連結的目標視窗';
$lang['target____interwiki']   = 'Wiki間互連的目標視窗';
$lang['target____extern']      = '外部連結的目標視窗';
$lang['target____media']       = '媒體連結的目標視窗';
$lang['target____windows']     = 'Windows 連結的目標視窗';
$lang['mediarevisions']        = '啟用媒體修訂歷史嗎？';
$lang['refcheck']              = '媒體連結檢查';
$lang['gdlib']                 = 'GD Lib 版本';
$lang['im_convert']            = 'ImageMagick 的轉換工具路徑';
$lang['jpg_quality']           = 'JPG 壓縮品質(0-100)';
$lang['fetchsize']             = 'fetch.php 可以從外部下載的最大檔案尺寸 (bytes)';
$lang['subscribers']           = '啟用頁面訂閱';
$lang['subscribe_time']        = '訂閱列表和摘要發送的時間間隔 (秒)；這個值應該小於指定的最近更改保留時間 (recent_days)。';
$lang['notify']                = '寄送變更通知信到這個電郵地址';
$lang['registernotify']        = '寄送新使用者註冊資訊到這個電郵地址';
$lang['mailfrom']              = '自動發送郵件時使用的郵件地址';
$lang['mailprefix']            = '自動發送郵件時使用的標題前綴';
$lang['htmlmail']              = '發送更加美觀，但體積會更大的 HTML 多部份電郵。若停用它，表示只發送純文字電郵。';
$lang['sitemap']               = '產生 Google 網站地圖 (以多少天計算) 。輸入0表示停用';
$lang['rss_type']              = 'XML feed 類型';
$lang['rss_linkto']            = 'XML feed 連結到';
$lang['rss_content']           = 'XML feed 項目中顯示什麼呢？';
$lang['rss_update']            = 'XML feed 更新間隔時間 (秒)';
$lang['rss_show_summary']      = '於標題中顯示簡要的 XML feed';
$lang['rss_media']             = '在 XML feed 中應列出哪些變更？';
$lang['updatecheck']           = '檢查更新與安全性警告？DokuWiki 需要聯繫 update.dokuwiki.org 才能使用此功能。';
$lang['userewrite']            = '使用好看的 URL';
$lang['useslash']              = '在 URL 中使用斜線作分類名稱的分隔字元';
$lang['sepchar']               = '頁面名稱中單字的分隔字元';
$lang['canonical']             = '使用最典型的 URL';
$lang['fnencode']              = '非 ASCII 文件名稱的編輯方法。';
$lang['autoplural']            = '檢查複數形式的連結 (英文)';
$lang['compression']           = 'attic 文件的壓縮方式';
$lang['gzip_output']           = '對 xhtml 使用 gzip 內容編碼';
$lang['compress']              = '壓縮 CSS 與 JavaScript 的輸出';
$lang['cssdatauri']            = '假如 CSS 中所引用的圖片小於該數字大小(bytes)，圖片將被直接嵌入 CSS 中，以減少 HTTP Request 的發送。 推薦把此數值設定成 <code>400</code> 至 <code>600</code> bytes 之間。若輸入 <code>0</code> 則停用此功能。';
$lang['send404']               = '存取不存在的頁面時送出 "HTTP 404/Page Not Found"';
$lang['broken_iua']            = 'ignore_user_abort 功能失效了？這有可能導致搜索索引不可用。IIS+PHP/CGI 已損壞。請參閱 <a href=\"http://bugs.splitbrain.org/?do=details&amp;task_id=852">Bug 852</a> 獲取更多訊息。';
$lang['xsendfile']             = '使用 X-Sendfile 頭讓網頁伺服器發送狀態文件？您的網頁伺服器需要支持該功能。';
$lang['renderer_xhtml']        = '主要 wiki 輸出 (xhtml) 的渲染器';
$lang['renderer__core']        = '%s (dokuwiki 核心)';
$lang['renderer__plugin']      = '%s (附加元件)';
$lang['dnslookups']            = 'Dokuwiki 將查詢使用者編輯頁面的遠程 IP 位址主機名稱。若您的 DNS 伺服器速度較慢、失效，或者您不想要此功能，请停用此選項';
$lang['proxy____host']         = 'Proxy 伺服器名稱';
$lang['proxy____port']         = 'Proxy 連接埠';
$lang['proxy____user']         = 'Proxy 使用者名稱';
$lang['proxy____pass']         = 'Proxy 密碼';
$lang['proxy____ssl']          = '使用 SSL 連接到 Proxy';
$lang['proxy____except']       = '比對 proxy 代理時應跳過的地址的正規式。';
$lang['license_o_']            = '未選擇';
$lang['typography_o_0']        = '無';
$lang['typography_o_1']        = '只限雙引號';
$lang['typography_o_2']        = '包括單引號 (未必能運作)';
$lang['userewrite_o_0']        = '無';
$lang['userewrite_o_1']        = '.htaccess';
$lang['userewrite_o_2']        = 'DokuWiki 內部控制';
$lang['deaccent_o_0']          = '關閉';
$lang['deaccent_o_1']          = '移除重音符號';
$lang['deaccent_o_2']          = '羅馬字母轉寫';
$lang['gdlib_o_0']             = 'GD Lib 無法使用';
$lang['gdlib_o_1']             = '版本 1.x';
$lang['gdlib_o_2']             = '自動偵測';
$lang['rss_type_o_rss']        = 'RSS 0.91';
$lang['rss_type_o_rss1']       = 'RSS 1.0';
$lang['rss_type_o_rss2']       = 'RSS 2.0';
$lang['rss_type_o_atom']       = 'Atom 0.3';
$lang['rss_type_o_atom1']      = 'Atom 1.0';
$lang['rss_content_o_abstract'] = '摘要';
$lang['rss_content_o_diff']    = '統一的差異';
$lang['rss_content_o_htmldiff'] = 'HTML 格式的差異對照表';
$lang['rss_content_o_html']    = '完整的 HTML 頁面內容';
$lang['rss_linkto_o_diff']     = '差異檢視';
$lang['rss_linkto_o_page']     = '已修訂的頁面';
$lang['rss_linkto_o_rev']      = '版本清單';
$lang['rss_linkto_o_current']  = '目前頁面';
$lang['compression_o_0']       = '無';
$lang['compression_o_gz']      = 'gzip';
$lang['compression_o_bz2']     = 'bz2';
$lang['xsendfile_o_0']         = '不使用';
$lang['xsendfile_o_1']         = '專有 lighttpd 標頭 (1.5 發佈前)';
$lang['xsendfile_o_2']         = '標準 X-Sendfile 標頭';
$lang['xsendfile_o_3']         = '專有 Nginx X-Accel-Redirect 標頭';
$lang['showuseras_o_loginname'] = '登入名稱';
$lang['showuseras_o_username'] = '完整姓名';
$lang['showuseras_o_email']    = '使用者的電郵地址 (根據郵件監控設定混淆化)';
$lang['showuseras_o_email_link'] = '使用者的電郵地址標示成 mailto: 連結';
$lang['useheading_o_0']        = '永不';
$lang['useheading_o_navigation'] = '僅導覽';
$lang['useheading_o_content']  = '僅本 wiki 內容';
$lang['useheading_o_1']        = '總是';
$lang['readdircache']          = 'readdir 緩存的最大存在時間 (秒)';
