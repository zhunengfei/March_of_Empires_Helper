
[system]
title=March of Empires Helper update

start_win=true

start_win_msg=发现新版本，现在升级吗？（此次更新：6.10win10版本不能自动关闭的bug防休眠功能和部分细节优化======6.9双开贸易bug修复======6.7稳定版本，智能学习功能、累计bug修复等，详细信息看网站说明和辅助内通知页介绍）

no_update_win=true

close_win=true
close_win_msg=升级之前需要你先关闭辅助
end_win1=true
end_win1_msg=下载完成！点确定自动开始解压更新

end_win3=true
end_win3_msg=升级失败！或者被取消
run_after=7z.bat
[file1]
ver=8.5.29.1.1
url=http://network.6655.la/dgbl-soft-update/update-date-dat-Tophp.zip
[file2]
;同时修改url防止cdn缓存
ver=8.6.10.1.3
url=https://github.com/joyanhui/March_of_Empires_Helper/raw/master/update.8.6.10.1.3.zip
rename=update.zip
uncompress=false
;uncompress=true
;modify_ver=false
modify_ver=true
is_run_after=true
