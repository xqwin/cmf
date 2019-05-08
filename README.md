#迁移与填充
`php artisan migrate:fresh --seed
#安装 
`composer require laravel/passport`
`php artisan migrate`
`php artisan passport:install`
###User模型里增加 HasApiTokens
```
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

```
###AuthServiceProvider的boot方法中注册路由
```
use Laravel\Passport\Passport;
public function boot()
{
    ...
    // API 认证路由注册
    Passport::routes();
}
```
###为Passport关闭CSRF校验
`\Laravel\Passport\Passport::$ignoreCsrfToken = true;`
###最后，修改配置文件 config/auth.php，将 API 认证驱动由 token 修改为 passport

