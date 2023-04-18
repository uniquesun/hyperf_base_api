# 基于hyperf的API

每次新开一个项目都要重新弄一遍最基础的注册登录，token，统一响应与异常的格式，很烦人
，所以就弄了这个最基础的。以后

# 操作
```shell
# 生成 jwt key
php bin/hyperf.php gen:jwt-secret

# env 设置
JWT_BLACKLIST_GRACE_PERIOD=5  #设置宽限期（以秒为单位）以防止并发请求失败。
JWT_TTL=3600 #指定令牌有效的时长（以秒为单位）。默认为 1 小时


```