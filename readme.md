1、宝塔部署
2、先安装lnmp环境（php>=7.1）:
3、填写伪静态：
      网站>设置>伪静态>选择laravel5>保存
4、在站点设置中关闭，防跨站攻击
      网站>设置>网站目录
5、删除php.ini中的putenv、symlink：
      软件商店搜索php>设置>配置文件>搜索putenv>保存
      重启php服务
6、安装拓展file_info
     软件商店搜索php>设置>安装拓展>选择fileinfo安装
7、将项目目录下的school.sql导入Mysql数据库中，并修改.ENV中数据库信息
8、前端入口：域名+ ‘/’       （例：www.test.club）
     后端入口：域名+ '/admin'    (例：www.test.club/admin)