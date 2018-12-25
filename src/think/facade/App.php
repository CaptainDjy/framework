<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
declare (strict_types = 1);

namespace think\facade;

use think\Facade;

/**
 * @see \think\App
 * @mixin \think\App
 * @method \think\App bind(string $bind) static 绑定模块或者控制器
 * @method void initialize() static 初始化应用
 * @method void init() static 初始化应用
 * @method \think\Response run() static 执行应用
 * @method \think\App dispatch(\think\route\Dispatch $dispatch) static 设置当前请求的调度信息
 * @method void log(mixed $log, string $type = 'info') static 记录调试信息
 * @method mixed config(string $name='') static 获取配置参数
 * @method \think\route\Dispatch routeCheck() static URL路由检测（根据PATH_INFO)
 * @method object controller(string $name) static 实例化控制器
 * @method string parseClass(string $layer, string $name) static 解析应用类的类名
 * @method string version() static 获取框架版本
 * @method bool isDebug() static 是否为调试模式
 * @method string getRootPath() static 获取应用根目录
 * @method string getAppPath() static 获取应用类库目录
 * @method string getRuntimePath() static 获取应用运行时目录
 * @method string getThinkPath() static 获取核心框架目录
 * @method string getRoutePath() static 获取路由目录
 * @method string getConfigPath() static 获取应用配置目录
 * @method string getConfigExt() static 获取配置后缀
 * @method string setNamespace(string $namespace) static 设置应用类库命名空间
 * @method string getNamespace() static 获取应用类库命名空间
 * @method string hasClassSuffix() static 是否启用类库后缀
 * @method float getBeginTime() static 获取应用开启时间
 * @method integer getBeginMem() static 获取应用初始内存占用
 */
class App extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'app';
    }
}
