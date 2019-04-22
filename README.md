## 欢迎来到 简易仓库管理系统(inventory) 【中文版】

这是一套建议的仓库管理系统，是国外网友开发，由 [Louishe](https:www.louishe.com) 翻译的中文版。该应用程序最初由** Saeed Nawaz **创建，使用 [php](http:php.net) ，[mysql](https:www.mysql.com) 和 [bootstrap](http:getbootstrap.com) 。

![images](https://www.louishe.com/wp-content/uploads/2019/04/12.png)
![images](https://www.louishe.com/wp-content/uploads/2019/04/13.png)

## 简易仓库管理系统功能：

### 1、仪表盘
### 2、用户管理
#### 2.1管理用户
#### 2.2管理组
### 3、产品分类
### 4、产品
#### 4.1管理产品
#### 4.2新增产品
### 5、图片
### 6、销售
#### 6.1管理销售
#### 6.2新增销售
### 7、销售报告
#### 7.1创建报告
#### 7.2报告分析

它是一个基于网络的库存系统，可以让您跟踪仓库或企业中现有产品的数量买卖价格。在创建新产品时，您可以设置数量，购买和销售价格。

```markdown
下面的备注内容对于你修改源码很重要，请仔细阅读：

- 备注

# 1、解决速度加载问题：
在'_\layouts\footer.php_'文件中加载了
'<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>'，
而这个JS只有翻墙才能加载，所以把该JS拷贝到'_\libs\Js_'文件夹下保存，在'**footer.php**'中引用本地的'**jquery.min.js**'。

# 2、解决汉化问题：
系统本身为全英文，汉化只需要将文件中对应的英文替换成汉字即可。所有替换文件在文件夹'\layouts\'和根目录中。

```

### 修复

如果您发现任何错误，并修复了该错误，请在此项目的github页面上留下评论，我会将更改推送到主分支。


### 安装此应用程序非常简单，只需按照以下步骤操作：

1.使用git下载最新版本。

2.将 ims_db_dump.sql 导入/加载 到您的mysql数据库中。这应该建立数据库系统的基本结构。

3.修改 includes /config.php 并更改变量以匹配您的主机，数据库，用户名和密码。

4.更改uploads文件夹中的所有文件夹权限，或者将它们添加到组呼叫 'www' （如果可用）或 '777' 。

5.然后输入 ** username ** 和 ** password ** 进行登录：

   管理员|特别用户|默认用户
   --------------------- | ----------------------- | -------------------
   **用户名**：admin | **用户名**：special| **用户名**：user
   **密码**：admin | **密码**：special| **密码**：user

祝你好运！

### 支持或联系

对于该项目有任何疑问，可以联系我们。 公司官网 [听可科技](https:www.tkwlkj.com) or [技术支持Blog](https:louishe.com) ,在这个Blog你将获得一些帮助！
