# docker-compose install nginx+php+mysql
## 使用
```sh
git clone https://github.com/Hzhihua/docker-web.git
cd docker-web
docker-compose up
```

## docker install
```sh
curl -fsSL get.docker.com -o get-docker.sh
sudo sh get-docker.sh --mirror Aliyun
```

## docker-compose install
[office link](https://docs.docker.com/compose/install/#install-compose)
```sh
# linux
sudo curl -L https://github.com/docker/compose/releases/download/1.21.2/docker-compose-$(uname -s)-$(uname -m) -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
docker-compose --version
```

> uninstall
```
sudo rm /usr/local/bin/docker-compose
```

> study
[docker study](https://docker_practice.gitee.io/introduction/)
