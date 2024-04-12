## Docker Configuration for Magento 2.4

<img src="https://img.shields.io/badge/magento-2.X-brightgreen.svg?logo=magento&longCache=true&style=flat-square" alt="Supported Magento Versions" />
<img src="https://img.shields.io/badge/macOS-ready-brightgreen?style=flat-square" alt="Supported Magento Versions" />

***This project is based on project [docker-compose-for-magento-2](https://github.com/norbertgoltl/docker-compose-for-magento-2) by [Norbert Göltl](https://github.com/norbertgoltl)***

## Versions

Service | Version
 --- | ---:
Magento | latest
Nginx | 1.24
PHP | 8.2
MySQL | 8.0
Adminer | latest
Redis | 7.2
Elasticsearch | 8.11.4
MailHog | latest

## Quick Start

**Setup your Docker engine** (You can configure Docker resources from the [Docker Desktop](https://docs.docker.com/desktop/#configure-docker-desktop))**:**

- CPUs: 4
- Memory: 4.00 GB (min 4 GB)
- Swap: 2.00 GB
- Disk image size: 56 GB

**After clone this repository:**

1. Start by creating the working directory and within this folder, create the following directories:
    ```
    mkdir -p magento services/nginx_log services/phpfpm_log services/sock_data services/mysql_data services/mysql_log services/redis_data services/es_data services/es_log
    ```

2. Original base-url is `fung-magento-dev.lh`, if want to use another url, please update
   1. `server_name` in `nginx/default.conf`
   2. The `setup:install` command (Last step of this guide)

3. Copy `.env.sample` to `.env` and update with your need

4. Build and start all containers:
    ```
    docker-compose build && docker-compose up -d
    ```

5. Create a new Composer project using the Magento Open Source:
    ```
    docker-compose exec phpfpm composer create-project --repository-url=https://repo.magento.com/ magento/project-community-edition .
    ```

6. Install Magento (Example. You can customize to you. [Installation Guide](https://experienceleague.adobe.com/docs/commerce-operations/installation-guide/advanced.html)):
    ```
    docker-compose exec -T phpfpm bin/magento setup:install --base-url=http://fung-magento-dev.lh/ --db-host=db --db-name=magento --db-user=magento --db-password=magento --backend-frontname=admin  --admin-firstname=admin --admin-lastname=admin --admin-email=yourname@domain.com --admin-user=admin --admin-password=admin1234 --language=en_US --currency=HKD --timezone=Asia/Hong_Kong --use-rewrites=1 --search-engine=elasticsearch7 --elasticsearch-host=elasticsearch --elasticsearch-port=9200 --elasticsearch-index-prefix=magento
    ```

After above completes running, you should be able to access your site at http://fung-magento-dev.lh and http://fung-magento-dev.lh/admin