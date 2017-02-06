#中北二手交易平台

###这是一个基于原生php的校内项目二手交易平台。

- **Author:** 郭世杰、王伟、任建鹏

## 项目截图
####网站首页
![](http://okxwqy15v.bkt.clouddn.com/%E4%B8%AD%E5%8C%97%E4%BA%8C%E6%89%8B%E4%BA%A4%E6%98%93%E5%B9%B3%E5%8F%B0-%E9%A6%96%E9%A1%B5.png)

####出售信息
![](http://okxwqy15v.bkt.clouddn.com/%E4%B8%AD%E5%8C%97%E4%BA%8C%E6%89%8B%E4%BA%A4%E6%98%93%E5%B9%B3%E5%8F%B0-%E5%87%BA%E5%94%AE%E4%BF%A1%E6%81%AF.png)

####免费发布
![](http://okxwqy15v.bkt.clouddn.com/%E4%B8%AD%E5%8C%97%E4%BA%8C%E6%89%8B%E4%BA%A4%E6%98%93%E5%B9%B3%E5%8F%B0-%E5%85%8D%E8%B4%B9%E5%8F%91%E5%B8%83.png)

####后台首页
![](https://github.com/guoshijie/shop/blob/master/screenshots/%E4%B8%AD%E5%8C%97%E4%BA%8C%E6%89%8B%E4%BA%A4%E6%98%93%E5%B9%B3%E5%8F%B0-%E5%90%8E%E5%8F%B0%E9%A6%96%E9%A1%B5.png)



##Git开发规范
+ branch 分支规范：
> master ：主分支，线上部署代码
> 
> test   : 进入测试代码，只有开发完成了才允许合并到此分支
> 
> dev    : 开发分支，处于开发阶段分支
> 
> XXXXXX : 正处于开发的分支，此分支不需提交git
  
+ Tags 标签规范
> 不允许提交本地标签
> 
> 线上版本标签 格式 vN.n.n.yyyyMMddHHmm 例如：v1.0.0.201601201501

+ 代码编写提交规范
> 更新所有分支
> 
> 从dev 分支创建一个新的开发分支
> 
> 在新的分支进行开发，开发完成，更新dev分支，合并当前分支到dev分支，测试无误项目组长将dev合并到test
> 
> 测试拉取test进行测试