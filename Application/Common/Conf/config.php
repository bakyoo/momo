<?php
// +----------------------------------------------------------------------
// | qq407193275 [ 简单 高效 卓越 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 qq407193275 All rights reserved.
// +----------------------------------------------------------------------
// | Author: 2s
// +----------------------------------------------------------------------

/**
 * 全局配置文件
 */
$_config = array(
    'PRODUCT_NAME'         => 'admin', // 产品名称
    'LOGO_DEFAULT'         => '<b><span style="color: #2699ed;">admin</span></b>', // 产品Logo
    'LOGO_INVERSE'         => '<b><span style="color: #fff;">admin</span></b>', // 产品Logo深色背景
    'CURRENT_VERSION'      => '1.1.2', // 当前版本号
    'DEVELOP_VERSION'      => 'release', // 开发版本号
    'BUILD_VERSION'        => '201703191221', // 编译标记
    'PRODUCT_MODEL'        => 'admin', // 产品型号
    'PRODUCT_TITLE'        => 'qq407193275', // 产品标题
    'WEBSITE_DOMAIN'       => 'http://admin.lyunweb.com', // 官方网址
    'UPDATE_URL'           => '/appstore/home/core/update', // 官方更新网址
    'TEAM_TITLE'           => 'qq407193275', // 公司名称
    'TEAM_MEMBER'          => '目前群里组员', // 团队成员
    'TEAM_ADDRESS'         => '保密', // 公司地址
    'TEAM_EMAIL'           => '', // 公司邮箱
    'TEAM_PHONE'           => '', // 公司电话
    'TEAM_QQ'              => '', // 公司QQ
    'TEAM_QQQUN'           => '', // 公司QQ群
    'AUTH_KEY'             => 'CoreThink', // 系统加密KEY，轻易不要修改此项，否则容易造成用户无法登录，如要修改，务必备份原key

    // 不输出模板变量
    'PARSE_VAR'            => false,
    // URL模式
    'URL_MODEL'            => '3',

    // 全局过滤配置
    'DEFAULT_FILTER'       => '', //TP默认为htmlspecialchars

    // 预先加载的标签库
    'TAGLIB_PRE_LOAD'      => 'Home\\TagLib\\Lingyun',

    // 全局命名空间
    'AUTOLOAD_NAMESPACE'   => array(
        'Util' => APP_PATH . 'Common/Util/',
    ),

    // URL配置
    'URL_CASE_INSENSITIVE' => true, // 不区分大小写

    // 应用配置
    'DEFAULT_MODULE'       => 'Home',
    'MODULE_DENY_LIST'     => array('Common'),
    'MODULE_ALLOW_LIST'    => array('Home', 'Install'),

    // 模板相关配置
    'TMPL_PARSE_STRING'    => array(
        '__PUBLIC__'     => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . __ROOT__ . '/Public',
        '__LYUI__'       => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . __ROOT__ . '/Public/libs/lyui/dist',
        '__ADMIN_IMG__'  => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . __ROOT__ . ltrim(APP_PATH, '.') . 'Admin/View/Public/img',
        '__ADMIN_CSS__'  => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . __ROOT__ . ltrim(APP_PATH, '.') . 'Admin/View/Public/css',
        '__ADMIN_JS__'   => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . __ROOT__ . ltrim(APP_PATH, '.') . 'Admin/View/Public/js',
        '__ADMIN_LIBS__' => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . __ROOT__ . ltrim(APP_PATH, '.') . 'Admin/View/Public/libs',
        '__HOME_IMG__'   => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . __ROOT__ . ltrim(APP_PATH, '.') . 'Home/View/Public/img',
        '__HOME_CSS__'   => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . __ROOT__ . ltrim(APP_PATH, '.') . 'Home/View/Public/css',
        '__HOME_JS__'    => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . __ROOT__ . ltrim(APP_PATH, '.') . 'Home/View/Public/js',
        '__HOME_LIBS__'  => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . __ROOT__ . ltrim(APP_PATH, '.') . 'Home/View/Public/libs',
    ),

    // 系统功能模板
    'USER_CENTER_SIDE'     => APP_PATH . 'User/View/Index/side.html',
    'USER_CENTER_INFO'     => APP_PATH . 'User/View/Index/info.html',
    'USER_CENTER_FORM'     => APP_PATH . 'User/View/Builder/form.html',
    'USER_CENTER_LIST'     => APP_PATH . 'User/View/Builder/list.html',
    'HOME_PUBLIC_LAYOUT'   => APP_PATH . 'Home/View/Public/layout.html',
    'ADMIN_PUBLIC_LAYOUT'  => APP_PATH . 'Admin/View/Public/layout.html',
    'HOME_PUBLIC_MODAL'    => APP_PATH . 'Home/View/Public/modal.html',
    'LISTBUILDER_LAYOUT'   => APP_PATH . 'Common/Builder/listbuilder.html',
    'FORMBUILDER_LAYOUT'   => APP_PATH . 'Common/Builder/formbuilder.html',

    // 错误页面模板
    'TMPL_ACTION_ERROR'    => APP_PATH . 'Home/View/Public/think/error.html', // 错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'  => APP_PATH . 'Home/View/Public/think/success.html', // 成功跳转对应的模板文件
    'TMPL_EXCEPTION_FILE'  => APP_PATH . 'Home/View/Public/think/exception.html', // 异常页面的模板文件

    // 文件上传默认驱动
    'UPLOAD_DRIVER'        => 'Local',

    // 文件上传相关配置
    'UPLOAD_CONFIG'        => array(
        'mimes'    => '', // 允许上传的文件MiMe类型
        'maxSize'  => 2 * 1024 * 1024, // 上传的文件大小限制 (0-不做限制，默认为2M，后台配置会覆盖此值)
        'autoSub'  => true, // 自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'), // 子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/', // 保存根路径
        'savePath' => '', // 保存路径
        'saveName' => array('uniqid', ''), // 上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '', // 文件保存后缀，空则使用原后缀
        'replace'  => false, // 存在同名是否覆盖
        'hash'     => true, // 是否生成hash编码
        'callback' => false, // 检测文件是否存在回调函数，如果存在返回文件信息数组
    ),
);

// 获取数据库配置信息，手动修改数据库配置请修改./Data/db.php，这里无需改动
if (is_file('./Data/db.php')) {
    $db_config = include './Data/db.php'; // 包含数据库连接配置
} else {
    // 开启开发部署模式
    if (@$_SERVER[ENV_PRE . 'DEV_MODE'] === 'true') {
        // 数据库配置
        $db_config = array(
            'DB_TYPE'   => @$_SERVER[ENV_PRE . 'DB_TYPE'] ?: 'mysql', // 数据库类型
            'DB_HOST'   => @$_SERVER[ENV_PRE . 'DB_HOST'] ?: '127.0.0.1', // 服务器地址
            'DB_NAME'   => @$_SERVER[ENV_PRE . 'DB_NAME'] ?: 'lingyun', // 数据库名
            'DB_USER'   => @$_SERVER[ENV_PRE . 'DB_USER'] ?: 'root', // 用户名
            'DB_PWD'    => @$_SERVER[ENV_PRE . 'DB_PWD'] ?: '', // 密码
            'DB_PORT'   => @$_SERVER[ENV_PRE . 'DB_PORT'] ?: '3306', // 端口
            'DB_PREFIX' => @$_SERVER[ENV_PRE . 'DB_PREFIX'] ?: 'ly_', // 数据库表前缀
        );
    } else {
        // 数据库配置
        $db_config = array(
            'DB_TYPE'   => 'mysql', // 数据库类型
            'DB_HOST'   => '127.0.0.1', // 服务器地址
            'DB_NAME'   => 'lingyun', // 数据库名
            'DB_USER'   => 'root', // 用户名
            'DB_PWD'    => '', // 密码
            'DB_PORT'   => '3306', // 端口
            'DB_PREFIX' => 'ly_', // 数据库表前缀
        );
    }
}

// 如果数据表字段名采用大小写混合需配置此项
$db_config['DB_PARAMS'] = array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL);

// 返回合并的配置
return array_merge(
    $_config, // 系统全局默认配置
    $db_config, // 数据库配置数组
    include APP_PATH . '/Common/Builder/config.php' // 包含Builder配置
);
