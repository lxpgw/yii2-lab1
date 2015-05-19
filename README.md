实践Yii2资源整合
===========

## 依赖

* NodeJS
* bower
* gulp

```
$ npm i gulp -g
$ cd tools/gulp
$ npm install
```

## 安装示例静态资源

```
$ bower install
```

## run

```
$ yii asset tools/gulp/assets-config.php config/assets-prod.php
```