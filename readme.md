项目介绍：  </br>
1、管理员可以添加多所学校并对其进行管理。  </br>
2、各个学校用户对自己的学校进行管理。  </br>
3、前台报名后，后台支持excel格式按照时间导出。  </br>
  </br>  </br>
项目部署：  </br>
注：本项目是使用laravel5.7开发的，因此在配置上要达到标准。  </br>
1、宝塔部署  </br>
2、先安装lnmp环境（php>=7.1）:  </br>
3、填写伪静态：  </br>
      网站>设置>伪静态>选择laravel5>保存  </br>
4、在站点设置中关闭，防跨站攻击  </br>
      网站>设置>网站目录  </br>
5、删除php.ini中的putenv、symlink：  </br>
      软件商店搜索php>设置>配置文件>搜索putenv>保存  </br>
      重启php服务  </br>
6、安装拓展file_info  </br>
     软件商店搜索php>设置>安装拓展>选择fileinfo安装  </br>
7、将项目目录下的school.sql导入Mysql数据库中，并修改.ENV中数据库信息  </br>
8、前端入口：域名+ ‘/’       （例：www.test.club）  </br>
     后端入口：域名+ '/admin'    (例：www.test.club/admin)  </br>
