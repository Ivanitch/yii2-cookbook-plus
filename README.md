Репозиторий с [yii2-cookbook-3-ru](https://github.com/kopyrin/yii2-cookbook-3-ru/tree/master)


- [ ] 044-052 Контейнер внедрения зависимостей (start)
- [ ] 124 Глава 3. ActiveRecord, модели и базы данных.md
- [ ] 125-130 Получение данных из базы данных.md





## Базы данных
Качаем дамп базы данных `sakila` [отсюда](https://github.com/Ivanitch/sample-mysql-db/archive/master.zip)
```shell
docker exec -it yii2-cookbook_mysql mysql -uroot -p
# Password: root

SHOW DATABASES;
CREATE DATABASE sakila;
USE sakila;

# Из директории с дампом (из другого терминала)
docker exec -i yii2-cookbook_mysql mysql -uroot -proot sakila < sakila-mv-schema.sql
docker exec -i yii2-cookbook_mysql mysql -uroot -proot sakila < sakila-mv-data.sql
```



