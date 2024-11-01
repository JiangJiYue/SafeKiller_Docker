
# Webshell Project

这是一个用于构建和运行包含多种`Webshell`的`Docker`项目。

## 项目结构

```
├── Dockerfile             # Dockerfile 用于构建 Docker 镜像
├── nginx                  # Nginx 配置和 PHP Webshell 文件
│   ├── nginx.conf         # Nginx 配置文件
│   └── php                # PHP Webshell 文件目录
│       ├── Behinder_v2.php
│       ├── Behinder_v3.php
│       ├── Behinder_v4.php
│       ├── bigShell.php
│       ├── Godzilla_v2.php
│       ├── index.php
│       ├── shell.php
│       ├── TianXie_api_404.php
│       └── weevely.php
├── README.md              # 项目说明文件
├── start.sh               # 启动脚本
└── tomcat                 # Tomcat JSP Webshell 文件
    ├── behinder.jsp
    ├── Behinder_v2.jsp
    ├── Behinder_v3.jsp
    ├── Behinder_v4.jsp
    ├── Godzilla_v2.jsp
    └── Godzilla_v4.jsp
```

## 先决条件

- Docker 已安装并正在运行。
- 对网络安全和 Webshell 有基本了解。

## 构建 Docker 镜像

要构建 Docker 镜像，请在项目根目录下运行以下命令：

```bash
docker build -f Dockerfile -t "webshell:v2" .
```

## 运行 Docker 容器

要运行构建的 Docker 镜像，请使用以下命令：

```bash
docker run -d -p 80:80 -p 8080:8080 webshell:v2
```

这将启动一个容器，并将主机的 80 和 8080 端口映射到容器的相应端口。

## 使用说明

- Nginx 服务将在端口 80 上运行，可以通过访问 `http://localhost` 来访问。

  ![image-20241101124158432](https://wordpress-1258894728.cos.ap-beijing.myqcloud.com/202411011242110.png)

- 如果你需要访问特定的 Webshell，请在浏览器中输入相应的路径，例如：`http://localhost/shell.php`。

## 注意事项

- 该项目用于教育目的或合法的安全测试。
- 请勿在未经授权的系统上使用这些 Webshell。

## 支持

如有任何疑问或建议，请联系项目维护者。

请根据你的需求和项目的具体细节来定制这个 `README.md`。比如，你可能需要添加更多关于如何使用 `start.sh` 脚本的信息，或者说明如何配置 Nginx 和 Tomcat。